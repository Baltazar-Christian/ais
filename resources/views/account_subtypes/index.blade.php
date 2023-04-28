@extends('layouts.masters')

@section('content')
    <div class="container">


        <div class="card mb-4">
            <div class="card-header bg-dark text-info">
                {{-- <i class="fas fa-calculator me-1"></i> --}}
                Account: {{ $account->name }}
                <br>
                Code: {{ $account->account_code }}
                <br>
                Range: {{ $account->min_code }} - {{ $account->max_code }}
                <a href="{{ route('account-types.create') }}" class="btn btn-info float-end">Create New</a>
                <a href="{{ route('account-types.index') }}" class="btn btn-info float-end mx-1"> Back</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Account Code</th>
                            <th>Norminal Codes</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
            
                    </tbody>
                </table>
            </div>
        </div>


    </div>
@endsection
