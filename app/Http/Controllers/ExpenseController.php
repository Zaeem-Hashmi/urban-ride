<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ExpenseController extends Controller
{
    public function index(){
        return view('expense.index');
    }
    public function ajax(){
        $query = Expense::query();
        $query = $query->where("user_id",auth()->user()->id);
        return DataTables::eloquent($query)->toJson();
    }
    public function create(){
        return view('expense.create');
    }
    public function store(Request $request){
        $exp = new Expense();
        $exp->expense_type = $request->type;
        $exp->cost = $request->cost;
        $exp->user_id = auth()->user()->id;
        $exp->save();
        return redirect()->route('expense.index');
    }
    public function edit(Request $request,Expense $exp) {
        return view('expense.edit',compact('exp'));
    }
    public function update(Request $request,Expense $exp) {
        $exp->expense_type = $request->type;
        $exp->cost = $request->cost;
        $exp->user_id = auth()->user()->id;
        $exp->save();
        return redirect()->route('expense.index');
    }
    public function delete(Request $request,Expense $exp) {
        $exp->delete();
        return redirect()->back();
    }
}
