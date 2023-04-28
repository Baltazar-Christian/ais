@extends('layouts.masters')

@section('content')
    <div class="container">


        <div class="card mb-4">
            <div class="card-header bg-dark text-info">
                <i class="fas fa-calculator me-1"></i>
                Accounts

                <a href="{{ route('accounts.create') }}" class="btn btn-info float-end">Create Account</a>
            </div>
            <div class="card-body">
                <table class="table table-responsinve" id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Account </th>
                            <th>Type </th>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach ($accounts as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->name }} </td>
                            <td>{{ $item->account->name}}</td>
                            <td>{{ $item->account_code}}</td>
                            <td>{{ $item->description}}</td>
                            <td>
                                <a href="{{ url('/accounts/edit/' . $item->id) }}"
                                    class="btn btn-sm btn-dark text-info">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ url('/accounts/destroy/' . $item->id) }}"
                                    class="btn btn-sm btn-danger">
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
