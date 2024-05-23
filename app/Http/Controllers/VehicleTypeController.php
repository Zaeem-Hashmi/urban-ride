<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class VehicleTypeController extends Controller
{
    function __construct()

    {

         $this->middleware('permission:vehicle-list|vehicle-create|vehicle-edit|vehicle-delete', ['only' => ['index','store']]);

         $this->middleware('permission:vehicle-create', ['only' => ['create','store']]);

         $this->middleware('permission:vehicle-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:vehicle-delete', ['only' => ['destroy']]);}
    public function create(){
        $drivers = Driver::get();
        return view('admin.vehicles.create',compact('drivers'));
    }
    public function store(Request $request){
       $input= $request->all();
       if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $filePath = 'uploads/vehicles/' . $filename;

        // Store the file
        Storage::disk('public')->put($filePath, file_get_contents($file));

        $input["image"] = "$filePath";
    }
    if ($request->hasFile('rta_permit')) {
        $file = $request->file('rta_permit');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $filePath = 'uploads/vehicles/' . $filename;

        // Store the file
        Storage::disk('public')->put($filePath, file_get_contents($file));

        $input["rta_permit"] = "$filePath";
    }
    $vehicleType=VehicleType::create($input);
    $vehicleType->driver()->associate($input['driver_id']);
    return redirect()->back();
    }
    public function index(){
        return view('admin.vehicles.index');
    }
    public function ajax(){
        $query = VehicleType::query();
        return DataTables::eloquent($query)->addColumn('driver', function (VehicleType $vehicleType) {
            $driver = $vehicleType->driver->name;
            return $driver;
        })->toJson();
    }
    public function edit(VehicleType $vehicleType){
        $drivers = Driver::get();
        return view('admin.vehicles.edit',compact('drivers','vehicleType'));
    }
    public function update(Request $request, VehicleType $vehicleType){
        $input = $request->all();

        if ($request->hasFile('image')) {
            // Storage::disk('public')->delete($vehicleType->image);
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/vehicles/' . $filename;
            Storage::disk('public')->put($filePath, file_get_contents($file));
            $input["image"] = "$filePath";
        } else {
            unset($input['image']);
        }
        if ($request->hasFile('rta_permit')) {
            // Storage::disk('public')->delete($vehicleType->rta_permit);
            $file = $request->file('rta_permit');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/vehicles/' . $filename;
            Storage::disk('public')->put($filePath, file_get_contents($file));
            $input["rta_permit"] = "$filePath";
        } else {
            unset($input['rta_permit']);
        }
        $vehicleType->update($input);
        // $vehicleType->driver()->sync($input['driver_id']);s
        return redirect()->route('vehicle.index');
    }
    public function delete(VehicleType $vehicleType) {
        $vehicleType->delete();
        return redirect()->back();
    }
}
