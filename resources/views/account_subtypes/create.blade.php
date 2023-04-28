@extends('layouts.masters')

@section('content')
<div class="container">
    <div class="card p-2">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h5 class="">Create {{ $account->name}}  Sub Type</h5>
                <hr>
                <form method="POST" action="{{ route('account-subtypes.store') }}">
                    @csrf
    
                    <div class="form-group">
                        <label for="year">Account Name</label>
                        <input type="text" name="name" placeholder="Enter Account Name" id="year" class="form-control" required>
                        <input type="hidden" name="account_id" value="{{ $account->id }}" id="year" class="form-control" required>

                    </div>
                    <div class="form-group">
                        <label for="year">Account Description</label>
                        <textarea name="description" class="form-control" placeholder="Enter Description"  rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="year">Account Code</label>
                        <input type="number" min="{{ $account->min_code}}" max="{{ $account->max_code}}"  placeholder="Enter Account Code" name="account_code"  class="form-control" required>
                    </div>
    
                    <div class="form-group">
                        <label for="start_date">Start Code</label>
                        <input type="number" min="{{ $account->min_code}}" max="{{ $account->max_code}}" name="min_code" id="min_code" placeholder="Enter Minimum Account Code" class="form-control" required>
                    </div>
    
                    <div class="form-group">
                        <label for="end_date">End Code</label>
                        <input type="number"  min="{{ $account->min_code}}" max="{{ $account->max_code}}" name="max_code" id="max_code" placeholder="Enter Maximum Account Code" class="form-control" required>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-info float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
