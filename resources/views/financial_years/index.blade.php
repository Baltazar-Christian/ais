@extends('layouts.masters')

@section('content')
<div class="container">


    <div class="card mb-4">
        <div class="card-header bg-dark text-info" >
            <i class="fas fa-table me-1"></i>
             Financial Years

             <a href="{{ route('financial_years.create') }}" class="btn btn-info float-end">Create New</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($financialYears as $financialYear)
                    <tr>
                        <td>{{ $financialYear->name }}</td>
                        <td>{{ $financialYear->start_date }}</td>
                        <td>{{ $financialYear->end_date }}</td>
                        <td>
                            <a href="{{ route('financial-years.edit', $financialYear) }}" class="btn btn-sm btn-dark text-info">
                                <i class="fa fa-edit"></i>
                             </a>
                             <a href="{{ url('/financial_years/destroy/'.$financialYear->id) }}" class="btn btn-sm btn-danger">
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
