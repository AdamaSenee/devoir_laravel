@extends('layouts.app')

@section('content')
<div class="card">

<a href="{{ url('/import') }}">
    <button  class="btn btn-primary">Importer</button>
</a>
    <div class="card-header">Client List</div>
    <div class="card-body">
        
            <a href="{{ route('clients.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Client</a>
        
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">S#</th>
                <th scope="col">first_name</th>
                <th scope="col">last_name</th>
                <th scope="col">number_phone</th>
                <th scope="col">adress</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($clients as $client)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $client->first_name }}</td>
                    <td>{{ $client->last_name }}</td>
                    <td>{{ $client->number_phone }}</td>
                    <td>{{ $client->adress }}</td>
                    <td>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('clients.show', $client->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                            
                                <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                        

                            
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('voullez vous supprimer le  client?');"><i class="bi bi-trash"></i> Delete</button>
                            
                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="4">
                        <span class="text-danger">
                            <strong>No client Found!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $clients->links() }}
        
    </div>
</div>



<form action="{{ url('/export-clients') }}" method="GET">
    @csrf
    <button type="submit">Exporter Clients</button>
</form>
@endsection