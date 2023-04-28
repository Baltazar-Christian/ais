<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinancialYear;

class FinancialYearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $financialYears = FinancialYear::all();
        return view('financial_years.index', compact('financialYears'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('financial_years.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $financialYear = new FinancialYear();
        $financialYear->name = $request->input('name');
        $financialYear->start_date = $request->input('start_date');
        $financialYear->end_date = $request->input('end_date');
        $financialYear->save();
    
        return redirect()->route('financial_years.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $financialYear=FinancialYear::find($id);
        return view('financial_years.edit', compact('financialYear'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FinancialYear $financialYear)
    {
        $financialYear->name = $request->input('name');
        $financialYear->start_date = $request->input('start_date');
        $financialYear->end_date = $request->input('end_date');
        $financialYear->save();
    
        return redirect()->route('financial_years.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {

        $financialYear=FinancialYear::find($id);
        $financialYear->delete();

        return redirect()->route('financial_years.index');
    }
}
