<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Expense;
use App\ExpenseCatagory;
use App\Patient;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dateNow = Carbon::now()->toDateString();
        $start = new Carbon('first day of this month');
        $today = new Carbon('last day of this month');
        $expen =  Expense::whereBetween('created_at',[$start->toDateString(),$dateNow])->orderBy('id','desc')->paginate(10);
        $total = Expense::whereBetween('created_at', [$start, $today]);
        $totalExpense = $total->sum('amount');
        return view('expenditure.expenditure',compact('expen','totalExpense'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expenseCategory = ExpenseCatagory::all();
        $capital= Expense::sum('amount');
        return view('expenditure.expense_form',compact('capital','expenseCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $expens = new Expense();
            $expens->receiver = $request->receiver;
            $expens->amount = $request->amount;
            $expens->category = $request->category;
            $expens->description = $request->description;
            $expens->created_at = Carbon::now();
            $expens->save();
            $ex = Expense::max('id');
            $expense = Expense::where('id', '=', $ex)->get();

            return view('print_pages.expense_print', compact('expense'));
        }
        catch (\Exception $e) {
            if ($e->getCode() == '42S22') {
                $column_not_found = 'column not found';
                return view('errors_page', compact('column_not_found'));
            }
        }
    }


    /**
     *Form store expense
     * given request from /dash - quick expense
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function FromDash(Request $request){
        $expense = new Expense();
        $expense->receiver = $request->receiver;
        $expense->amount = $request->amount;
        $expense->category = $request->category;
        $expense->description = $request->msg;
        $expense->created_at = Carbon::now();
        $expense->save();

        $msg  = 'Successfully Inserted Into Database';
        return redirect()->back()->with(compact('msg'));

    }

    public function search(Request $request)
    {
        $dateNow = Carbon::now()->toDateString();
        $start = new Carbon('first day of this month');
        $today = new Carbon('last day of this month');
        $expen =  Expense::whereBetween('created_at',[$start->toDateString(),$dateNow])->orderBy('id','desc')->paginate(10);
        $total = Expense::whereBetween('created_at', [$start, $today]);
        $totalExpense = $total->sum('amount');
        $totalExpense_all = Expense::sum('amount');
//      search query of result
        $query = $request->search;
        $data = DB::table('expenses')->where('receiver','like','%'.$query.'%')
            ->orWhere('category','like','%'.$query.'%')
            ->orWhere('description','like','%'.$query.'%')->get();
        return view('expenditure.expenditure_search',compact('data','expen','totalExpense_all','totalExpense'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param Expense $expense
     */
    public function update(Request $request, $id)
    {
         $exs = Expense::find($id);
        $exs->receiver = $request->receiver;
        $exs->amount = $request->amount;
        $exs->category = $request->category;
        $exs->description = $request->description;
        $exs->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param Expense $expense
     */
    public function destroy($id)
    {
        $exs = Expense::find($id);
        $exs->delete();
        return back();
    }
}
