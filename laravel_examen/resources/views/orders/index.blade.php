@extends('layouts.app')

@section('content')
<div class="card">


    <div class="card-header">Commande List</div>
    <div class="card-body">
        
            <a href="{{ route('orders.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Commande</a>
        
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">S#</th>
                <th scope="col">Date_commande</th>
                <th scope="col">Montant</th>
               
                <th scope="col">Client_id</th>
               
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $client->date_commande }}</td>
                    <td>{{ $client->montant }}</td>
                    <td>{{ $client->client_id }}</td>
                  
                    <td>
                        <form action="{{ route('orders .destroy', $order->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('orders .show', $order->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                            
                                <a href="{{ route('orders .edit', $order->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                        

                            
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('voullez vous supprimer la commande?');"><i class="bi bi-trash"></i> Delete</button>
                            
                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="4">
                        <span class="text-danger">
                            <strong>No commande Found!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $orders->links() }}
        
    </div>
</div>




@endsection