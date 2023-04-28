@extends('layouts.masters')

@section('content')
<div class="container">
    <div class="card p-2">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h4 class="">Edit  Account Type</h4>
                <hr>
                <form method="POST" action="{{ route('account-types.update') }}">
                    @csrf
    
                    <div class="form-group mb-1">
                        <label for="year">Account Name</label>
                        <input type="text" name="name" value="{{$account->name }}" id="year" class="form-control" required>
                        <input type="hidden" name="id" value="{{ $account->id}}">
                    </div>
                    <div class="form-group mb-1">
                        <label for="year">Account Description</label>
                        <textarea name="description" class="form-control" value="{{$account->description }}"  rows="3">{{$account->description }}</textarea>
                    </div>

                    <div class="form-group mb-1">
                        <label for="year">Account Code</label>
                        <input type="number" min="0" value="{{$account->account_code }}" name="account_code"  class="form-control" required>
                    </div>
    
                    <div class="form-group mb-1">
                        <label for="start_date">Start Code</label>
                        <input type="number" min="0" name="min_code" id="min_code" value="{{$account->min_code }}" class="form-control" required>
                    </div>
    
                    <div class="form-group mb-1">
                        <label for="end_date">End Code</label>
                        <input type="number" min="0" name="max_code" id="max_code" value="{{$account->max_code }}" class="form-control" required>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-info float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
