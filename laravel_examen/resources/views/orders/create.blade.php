@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Add New Commande
                </div>
                <div class="float-end">
                    <a href="{{ route('orders.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('orders.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="date_commande" class="col-md-4 col-form-label text-md-end text-start">date_commande</label>
                        <div class="col-md-6">
                          <input type="date" class="form-control @error('date_commande') is-invalid @enderror" id="date_commande" name="date_commande" value="{{ old('date_commande') }}">
                            @if ($errors->has('date_commande'))
                                <span class="text-danger">{{ $errors->first('date_commande') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="montant" class="col-md-4 col-form-label text-md-end text-start">montant</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('montant') is-invalid @enderror" id="montant" name="montant" value="{{ old('montant') }}">
                            @if ($errors->has('montant'))
                                <span class="text-danger">{{ $errors->first('montant') }}</span>
                            @endif
                        </div>
                    </div>
   
                    <div class="mb-3 row">
                    <label>client_id </label></br>
        <select name="client_id " id="">
        @foreach ($clients as $r)
          <option value="{{$r->id}}">{{$r->last_name}}</option>
        @endforeach
        </select>
        </div>

                 
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Commande">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection