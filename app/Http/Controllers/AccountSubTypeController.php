<?php

namespace App\Http\Controllers;

use App\Models\AccountType;
use Illuminate\Http\Request;
use App\Models\AccountSubType;
use Illuminate\Support\Facades\Auth;

class AccountSubTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accountTypes = AccountSubType::all();
        return view('account_subtypes.index', compact('accountTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $account=AccountType::where('id',$id)->first();
        return view('account_subtypes.create',compact('account'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $accountType = new AccountSubType();
        $accountType->name = $request->input('name');
        $accountType->account_id = $request->input('account_id');
        $accountType->description = $request->input('description');
        $accountType->account_code = $request->input('account_code');
        $accountType->min_code = $request->input('min_code');
        $accountType->max_code = $request->input('max_code');
        $accountType->created_by = Auth::user()->id;
        $accountType->save();
        
        return redirect('/account-types/show/'.$request->account_id);
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
    public function edit( $id)
    {
        $account=AccountSubType::find($id);
        return view('account_subtypes.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $accountType =AccountSubType::find($request->account_id);
        $accountType->name = $request->input('name');
        $accountType->description = $request->input('description');
        $accountType->account_code = $request->input('account_code');
        $accountType->min_code = $request->input('min_code');
        $accountType->max_code = $request->input('max_code');
        $accountType->update();
        
        return redirect('/account-types/show/'. $accountType->account_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $accountType=accountSubType::find($id);
        $accountType->delete();
        return back();
    }
}
