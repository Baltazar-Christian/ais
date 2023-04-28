@extends('layouts.masters')

@section('content')
    <div class="container">


        <div class="card mb-4">
            <div class="card-header bg-dark text-info">
                <i class="fas fa-calculator me-1"></i>
                Account Types

                <a href="{{ route('account-types.create') }}" class="btn btn-info float-end">Create New</a>
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
                        @foreach ($accountTypes as $account)
                            <tr>
                                <td>{{ $account->name }}</td>
                                <td>{{ $account->account_code }}</td>
                                <td>{{ $account->min_code }} - {{ $account->max_code }}</td>
                                <td>{{ $account->description }}</td>
                                <td>
                                    <a href="{{ url('/account-types/show/' . $account->id) }}"
                                        class="btn btn-sm btn-dark text-info">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ url('/account-types/edit/' . $account->id) }}"
                                        class="btn btn-sm btn-dark text-info">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ url('/account-types/destroy/' . $account->id) }}"
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
