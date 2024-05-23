<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class StaffController extends Controller
{

    function __construct()

    {

         $this->middleware('permission:staff-list|staff-create|staff-edit|staff-delete', ['only' => ['index','store']]);

         $this->middleware('permission:staff-create', ['only' => ['create','store']]);

         $this->middleware('permission:staff-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:staff-delete', ['only' => ['destroy']]);}
    public function create(){
        return view('admin.staff.create');
    }
    public function store(Request $request,Staff $staff){
        $input = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/staff/' . $filename;
    
            // Store the file
            Storage::disk('public')->put($filePath, file_get_contents($file));
    
            $input["image"] = "$filePath";
        }
        if ($request->hasFile('passport')) {
            $file = $request->file('passport');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/staff/' . $filename;
    
            // Store the file
            Storage::disk('public')->put($filePath, file_get_contents($file));
    
            $input["passport"] = "$filePath";
        }
        if ($request->hasFile('visa')) {
            $file = $request->file('visa');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/staff/' . $filename;
    
            // Store the file
            Storage::disk('public')->put($filePath, file_get_contents($file));
    
            $input["visa"] = "$filePath";
        }
        $staff->create($input);
        return redirect()->back();
    }
    public function index(){
        return view('admin.staff.index');
    }
    public function ajax(){
        $query = Staff::query();
        return DataTables::eloquent($query)->toJson();
    }
    public function edit(Staff $staff){
        return view('admin.staff.edit',compact('staff'));
    }
    public function update(Request $request, Staff $staff){
        $input = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/staff/' . $filename;
    
            // Store the file
            Storage::disk('public')->put($filePath, file_get_contents($file));
    
            $input["image"] = "$filePath";
        }else {
            unset($input['image']);}
        if ($request->hasFile('passport')) {
            $file = $request->file('passport');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/staff/' . $filename;
    
            // Store the file
            Storage::disk('public')->put($filePath, file_get_contents($file));
    
            $input["passport"] = "$filePath";
        }else {
            unset($input['passport']);}
        if ($request->hasFile('visa')) {
            $file = $request->file('visa');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/staff/' . $filename;
    
            // Store the file
            Storage::disk('public')->put($filePath, file_get_contents($file));
    
            $input["visa"] = "$filePath";
        }else {
            unset($input['visa']);}
        
        $staff->update($input);
        return redirect()->back();
        }
    
    
    public function delete(Staff $staff) {
        $staff->delete();
        return redirect()->back();
    }

}
