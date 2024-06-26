<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Driver;
use App\Models\User;
use App\Models\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class DriverController extends Controller
{
    function __construct()

    {
        //  $this->middleware('permission:driver-list|driver-create|driver-edit|driver-delete', ['only' => ['index','store']]);

        //  $this->middleware('permission:driver-create', ['only' => ['create','store']]);

        //  $this->middleware('permission:driver-edit', ['only' => ['edit','update']]);

        //  $this->middleware('permission:driver-delete', ['only' => ['destroy']]);
        }
    public function create(){
        $users =User::get();
        return view('admin.driver.create',compact('users'));
    }
    public function store(Request $request,Driver $driver){
        $input = $request->all();
        // dd($input);
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
        })->addColumn('username', function (Driver $driver) {
            $username = $driver->user->name;
            return $username;
        })->addColumn('useremail', function (Driver $driver) {
            $useremail = $driver->user->email;
            return $useremail;
        }
            )->toJson();
    }
    public function edit(Driver $driver){
        $users =User::get();
        return view('admin.driver.edit',compact('driver','users'));
    }
    public function update(Request $request, Driver $driver){
        $input = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/driver/' . $filename;
    
            // Store the file
            Storage::disk('public')->put($filePath, file_get_contents($file));
    
            $input["image"] = "$filePath";
        }else {
            unset($input['rta_permit']);}
        if ($request->hasFile('passport')) {
            $file = $request->file('passport');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/driver/' . $filename;
    
            // Store the file
            Storage::disk('public')->put($filePath, file_get_contents($file));
    
            $input["passport"] = "$filePath";
        }else {
            unset($input['rta_permit']);}
        if ($request->hasFile('visa')) {
            $file = $request->file('visa');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/driver/' . $filename;
    
            // Store the file
            Storage::disk('public')->put($filePath, file_get_contents($file));
    
            $input["visa"] = "$filePath";
        }else {
            unset($input['rta_permit']);}
        if ($request->hasFile('rta')) {
            $file = $request->file('rta');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/driver/' . $filename;
    
            // Store the file
            Storage::disk('public')->put($filePath, file_get_contents($file));
    
            $input["rta"] = "$filePath";
        }else {
            unset($input['rta_permit']);}
        if ($request->hasFile('driving_license')) {
            $file = $request->file('driving_license');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/driver/' . $filename;
    
            // Store the file
            Storage::disk('public')->put($filePath, file_get_contents($file));
    
            $input["driving_license"] = "$filePath";
        }else {
            unset($input['rta_permit']);
        $driver->update($input);
        return redirect()->back();
        }
        

    }
    public function delete(Driver $driver) {
        $driver->delete();
        return redirect()->back();
    }
    // driver view

    public function driverInfo(){
        $user = auth()->user(); 
        // dd($user);
         if (auth()->user()->hasRole('Driver')) {
            $usersInfo = Driver::where('user_id', $user->id)->get();
            // dd($usersInfo);
            return view('admin.driverView.diverInfo',compact('usersInfo'));
        }
    }

    public function vehicle() {
        $user = auth()->user(); 
        $driverId = Driver::where('user_id', $user->id)->pluck('id');
        $vehicles = VehicleType::where('driver_id',$driverId)->get();
        // dd($vehicles);
        return view('admin.driverView.vehicles',compact('vehicles'));
    }
    public function bookings(){
        $user =auth()->user();
        $driverId = Driver::where('user_id', $user->id)->pluck('id');
        $bookings = Booking::where('driver_id', $driverId)->get();
        // dd($bookings);
        return view('admin.driverView.bookings',compact('bookings'));
    }
    
}
