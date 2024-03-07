@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Client
                </div>
                <div class="float-end">
                    <a href="{{ route('clients.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('clients.update', $client->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="first_name" class="col-md-4 col-form-label text-md-end text-start">first_name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ $client->first_name }}">
                            @if ($errors->has('first_name'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="last_name" class="col-md-4 col-form-label text-md-end text-start">last_name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name"  value="{{ $client->last_name}}">
                            @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="number_phone" class="col-md-4 col-form-label text-md-end text-start">number_phone</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('number_phone') is-invalid @enderror" id="number_phone" name="number_phone" value="{{ $client->number_phone}}">
                            @if ($errors->has('number_phone'))
                                <span class="text-danger">{{ $errors->first('number_phone') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="adress" class="col-md-4 col-form-label text-md-end text-start">adress</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('adress') is-invalid @enderror" id="adress" name="adress" value="{{ $client->adress}}">
                            @if ($errors->has('adress'))
                                <span class="text-danger">{{ $errors->first('adress') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection