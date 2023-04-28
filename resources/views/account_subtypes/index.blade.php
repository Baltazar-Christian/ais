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
                <a href="{{ url('/account-subtypes/create/'.$account->id) }}" class="btn btn-info float-end">Create New</a>
                <a href="{{ route('account-types.index') }}" class="btn btn-info float-end mx-1"> Back</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table table-responsive">
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
                        @foreach ($accounts as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->account_code }}</td>
                                <td>{{ $item->min_code }} - {{ $item->max_code }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                          
                                    <a href="{{ url('/account-subtypes/edit/' . $item->id) }}"
                                        class="btn btn-sm btn-dark text-info">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ url('/account-subtypes/destroy/' . $item->id) }}"
                                        class="btn btn-sm btn-danger text-info">
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
