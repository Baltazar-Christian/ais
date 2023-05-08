@extends('layouts.masters')

@section('content')
<div class="container">
    <div class="card p-2">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h5 class="">Edit  Process </h5>
                <hr>
                <form method="POST" action="{{ route('accounts-process.update') }}">
                    @csrf
    
                    <div class="form-group">
                        <label for="year">Process Name</label>
                        <input type="text" name="name" value="{{ $process->name }}" id="year" class="form-control" required>
                        <input type="hidden" name="id" value="{{ $process->id }}" id="year" class="form-control" required>

                    </div>
           
                 
    
                    
                    <hr>
                    <button type="submit" class="btn btn-info float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
