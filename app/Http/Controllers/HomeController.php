<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }
    public function ajax() {
        if (auth()->user()->name == "admin") {
            $exp = Expense::get();
        }else{
            $exp = Expense::where("user_id",auth()->user()->id)->get();
        }
        $exp_labels = $exp->pluck("created_at")->toArray();
        $exp_cost = $exp->pluck("cost")->toArray();
        
        return response()->json([
            "labels"=>$exp_labels,
            "data"=>$exp_cost
        ]);
    }
}
