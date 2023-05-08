@extends('layouts.masters')

@section('content')
    <div class="container">


        <div class="card mb-4">
            <div class="card-header bg-dark text-info">
                <i class="fas fa-calculator me-1"></i>
                {{ $process->name }} Mapping
                <a href="{{ url('/accounts-process-mapping/create/'.$process->id) }}" class="btn btn-info float-end">Add Mapping</a>

                <a href="{{ route('accounts-process.index') }}" class="btn btn-info  float-end mx-1">
                    Back
                </a>
            </div>
            <div class="card-body">
                <table class="table table-responsinve" id="datatablesSimple">
                    <thead>
                        <tr>
                            {{-- <th>SN</th> --}}
                            <th> Debit </th>
                            <th>Credit </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                       
                            <tr>
                                {{-- <td>{{ $i++ }}</td> --}}
                                <td>
                                    @foreach ($debit as $item)
                                    {{ $item->account->name }} 
                                    <a href="{{url('/accounts-process-mappings/destroy/'.$item->id)}}" class="btn btn-sm btn-danger text-info  float-end"> <i class="fa fa-trash"></i></a> 
                                    <hr>
                                    <br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($credit as $item)
                                    {{ $item->account->name }} 
                                    <a href="{{url('/accounts-process-mappings/destroy/'.$item->id)}}" class="btn btn-sm btn-danger text-info  float-end"> <i class="fa fa-trash"></i></a> 
                                    <hr>
                                    <br>
                                    @endforeach
                                </td>
                        
                            </tr>
                     

                    </tbody>
                </table>
            </div>
        </div>


    </div>
@endsection
