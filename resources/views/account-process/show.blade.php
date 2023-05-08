@extends('layouts.masters')

@section('content')
    <div class="container">


        <div class="card mb-4">
            <div class="card-header bg-dark text-info">
                <i class="fas fa-calculator me-1"></i>
                {{ $process->name }} Mapping
                <a href="{{ url('/accounts-process-mapping/create/'.$process->id) }}" class="btn btn-info float-end">Add Mapping</a>

                <a href="{{ url('/accounts-process/show/' . $process->id) }}" class="btn btn-info  float-end mx-1">
                    Back
                </a>
            </div>
            <div class="card-body">
                <table class="table table-responsinve" id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th> Account Name </th>
                            <th>Transaction Side </th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($mappings as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->name }} </td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="{{ url('/accounts-process/show/' . $item->id) }}"
                                        class="btn btn-sm btn-dark text-info">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ url('/accounts-process/edit/' . $item->id) }}"
                                        class="btn btn-sm btn-dark text-info">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ url('/accounts-process/destroy/' . $item->id) }}"
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
