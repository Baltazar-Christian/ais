<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Models\AccountProcess;
use App\Models\AccountProcessMapping;

class AccountProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $processes = AccountProcess::latest()->get();
        return view('account-process.index', compact('processes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('account-process.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $accountType = new AccountProcess();
        $accountType->name = $request->input('name');
        $accountType->save();
    
        return redirect()->route('accounts-process.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $account=AccountProcess::find($id);
        $accounts=AccountProcessMapping::where('process_id',$id)->latest()->get();
        return view('account-process.show', compact('accounts','account'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        $account=AccountProcess::find($id);
        $account->delete();
        return back();
    }
}
