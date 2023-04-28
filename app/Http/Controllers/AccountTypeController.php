<?php

namespace App\Http\Controllers;

use App\Models\AccountType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accountTypes = AccountType::all();
        return view('account_types.index', compact('accountTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('account_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $accountType = new AccountType();
        $accountType->name = $request->input('name');
        $accountType->description = $request->input('description');
        $accountType->account_code = $request->input('account_code');
        $accountType->min_code = $request->input('min_code');
        $accountType->max_code = $request->input('max_code');
        $accountType->created_by = Auth::user()->id;
        $accountType->save();
    
        return redirect()->route('account-types.index');
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
    public function edit($id)
    {
        $account=AccountType::find($id);
        return view('account_types.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $accountType=accountType::find($id);
        $accountType->delete();
        return redirect()->route('account-types.index');
    }
}
