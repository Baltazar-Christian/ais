@extends('layouts.masters')

@section('content')
<div class="container">


    <div class="card mb-4">
        <div class="card-header bg-dark text-info" >
            <i class="fas fa-calculator me-1"></i>
             Account Types

             <a href="{{ route('account-types.create') }}" class="btn btn-info float-end">Create New</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead >
                    <tr >
                        <th>Name</th>
                        <th>Account Code</th>
                        <th>Norminal Codes</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                {{-- <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Actions</th>
                    </tr>
                </tfoot> --}}
                <tbody>
                    @foreach ($accountTypes as $account)
                    <tr>
                        <td>{{ $account->name }}</td>
                        <td>{{ $account->start_date }}</td>
                        <td>{{ $account->end_date }}</td>
                        <td>
                            <a href="{{ url('/financial_years/edit/'.$account->id)}}" class="btn btn-sm btn-dark text-info">
                                <i class="fa fa-edit"></i>
                             </a>
                             <a href="{{ url('/financial_years/destroy/'.$account->id) }}" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                             </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
   
    
</div>
@endsection
