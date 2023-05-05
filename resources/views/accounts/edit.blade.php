@extends('layouts.masters')

@section('content')
<div class="container">
    <div class="card p-2">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h5 class="">Create  Account </h5>
                <hr>
                <form method="POST" action="{{ route('accounts.update') }}">
                    @csrf
    
                    <div class="form-group">
                        <label for="year">Account Name</label>
                        <input type="text" name="name" value="{{$account->name}}" id="year" class="form-control" required>
                        <input type="hidden" name="id" value="{{$account->id}}" class="form-control" required>

                    </div>
                    <div class="form-group">
                        <label for="year">Account Description</label>
                        <textarea name="description" class="form-control" placeholder="Enter Description"  rows="3">{{$account->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="year">Account Code</label>
                        <input type="number" min="0" placeholder="Enter Account Code" value="{{$account->account_code}}" name="account_code"  class="form-control" required>
                    </div>
    
                    <div class="form-group mt-1">
                        <label for="start_date">Account Type</label>
                        <select name="account_id" class="form-control">
                            @foreach ($accounts as $item)
                            <option value="{{$account->account_id}}">{{$account->account->name}}</option>
                            <option value="{{ $item->id}}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    
                    <hr>
                    <button type="submit" class="btn btn-info float-end">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
