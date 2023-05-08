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
        $process=AccountProcess::find($id);
        $mappings=AccountProcessMapping::where('process_id',$id)->latest()->get();
        return view('account-process.show', compact('process','mappings'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $process=AccountProcess::find($id);
        return view('account-process.edit', compact('process'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $process=AccountProcess::find($request->id);
        $process->name = $request->input('name');
        $process->save();
    
        return redirect()->route('accounts-process.index');

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


    // For Add Process Mapping

    public function create_mapping($id)
    {
        $process=AccountProcess::where('id',$id)->first();
        $accounts=Account::latest()->get();
        return view('account-process.create-mapping',compact('process','accounts'));
    }


    // For Store Process Mapping
    public function store_mapping(Request $request)
    {
        $mappings = new AccountProcessMapping();
        $mappings->process_id = $request->input('process_id');
        $mappings->account_id = $request->input('account_id');
        $mappings->transaction_side = $request->input('transaction_side');
        $mappings->save();
    
        return redirect('/accounts-process/show/'.$request->process_id);
    }
}
