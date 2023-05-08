@extends('layouts.masters')

@section('content')
<div class="container">
    <div class="card p-2">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h5 class="">Create {{ $process->name}}  Mapping </h5>
                <hr>
                <form method="POST" action="{{ route('accounts-process-mapping.store') }}">
                    @csrf
                    <input type="hidden" name="process_id" value="{{ $process->id }}">
                    <div class="form-group">
                        <label for="year">Account Name </label>
                        <select name="account_id"  class="form-control">
                            <option value="" disabled> Select Account</option>
                            @foreach ($accounts as $item)
                            <option value="{{ $item->id }}" > {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="year">Transaction Side </label>
                        <select name="transaction_side"  class="form-control">
                            <option value="Debit">Debit</option>
                            <option value="Credit">Credit</option>
                        </select>
                       
                    </div>
                 
    
                    
                    <hr>
                    <button type="submit" class="btn btn-info float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
