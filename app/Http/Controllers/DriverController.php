<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\User;
use App\Models\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class DriverController extends Controller
{
    public function create(){
        $vehicle_types =VehicleType::all();
        $users =User::get();
        return view('admin.driver.create',compact('vehicle_types','users'));
    }
    public function store(Request $request,Driver $driver){
        $input = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/driver/' . $filename;
    
            // Store the file
            Storage::disk('public')->put($filePath, file_get_contents($file));
    
            $input["image"] = "$filePath";
        }
        if ($request->hasFile('passport')) {
            $file = $request->file('passport');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/driver/' . $filename;
    
            // Store the file
            Storage::disk('public')->put($filePath, file_get_contents($file));
    
            $input["passport"] = "$filePath";
        }
        if ($request->hasFile('visa')) {
            $file = $request->file('visa');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/driver/' . $filename;
    
            // Store the file
            Storage::disk('public')->put($filePath, file_get_contents($file));
    
            $input["visa"] = "$filePath";
        }
        if ($request->hasFile('rta')) {
            $file = $request->file('rta');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/driver/' . $filename;
    
            // Store the file
            Storage::disk('public')->put($filePath, file_get_contents($file));
    
            $input["rta"] = "$filePath";
        }
        if ($request->hasFile('driving_license')) {
            $file = $request->file('driving_license');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/driver/' . $filename;
    
            // Store the file
            Storage::disk('public')->put($filePath, file_get_contents($file));
    
            $input["driving_license"] = "$filePath";
        }
        $driver->create($input);
        return redirect()->back();
    }
    public function index(){
        return view('admin.driver.index');
    }
    public function ajax(){
        $query = Driver::query();
        return DataTables::eloquent($query)->addColumn('vehicle', function (Driver $driver) {
            $vehicle = $driver->vehicles()->get()->pluck("name")->toArray();
            return implode(',',$vehicle);
        })->addColumn('user', function (Driver $driver) {
            $user = $driver->user->name;
            return $user;
        })->toJson();
    }
    public function edit(){

    }
    public function update(){

    }
    public function delete(){
        
    }
}
