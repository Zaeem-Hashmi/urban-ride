<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

use function Ramsey\Uuid\v1;

class BookingController extends Controller
{
    function __construct()

    {

        //  $this->middleware('permission:booking-list|booking-create|booking-edit|booking-delete', ['only' => ['index','store']]);

        //  $this->middleware('permission:booking-create', ['only' => ['create','store']]);

        //  $this->middleware('permission:booking-edit', ['only' => ['edit','update']]);

        //  $this->middleware('permission:booking-delete', ['only' => ['destroy']]);
        }
    public function store(Request $request,Booking $booking){
      $input =  $request->all();
      $input['passenger_name'] = Auth::user()->name;
      $input['customer_id'] = Auth::user()->id;
      $booking->create($input);
      return redirect()->back();
    }
    public function index() {
        return view('admin.Bookings.index');
    }
    public function ajax(){
        $query = Booking::query();
        return DataTables::eloquent($query)->toJson();
    }
    public function delete(Booking $booking){
        $booking->delete();
        return redirect()->back();
    }
    public function assignDriver(Booking $booking){
        $drivers = Driver::where('is_available', 0)->get();
        return view('admin.Bookings.edit',compact('booking','drivers'));
    }
    public function update(Request $request,Booking $booking){
      $input = $request->all();
      $input['status'] = 'assigned';
      $booking->update($input);
      $driver = Driver::findOrFail($input['driver_id']);
      $driver->update(['is_available' => 1]);
      return redirect()->back();
    }
    public function jobDone(Request $request, Booking $booking) {
        $booking->update([
            'status' => 'done'
        ]);
        $driver = Driver::findOrFail($booking->driver_id);
        $driver->update(['is_available' => 0]);
        return redirect()->back();
    }
    // client side
    public function bookings(){
        $user =auth()->user();
        $bookings = Booking::where('passenger_name', $user->name)->get();
        // dd($bookings);
        return view('client.rides',compact('bookings'));
    }

}
