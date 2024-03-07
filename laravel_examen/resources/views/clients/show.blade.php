@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Client Information
                </div>
                <div class="float-end">
                    <a href="{{ route('clients.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                    <label for="first_name" class="col-md-4 col-form-label text-md-end text-start">first_name</label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $client->first_name}}
                        </div>
                    </div>

                    <div class="row">
                    <label for="last_name" class="col-md-4 col-form-label text-md-end text-start">last_name</label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $client->last_name}}
                        </div>
                    </div>
        
                    <div class="row">
                    <label for="number_phone" class="col-md-4 col-form-label text-md-end text-start">number_phone</label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $client->number_phone}}
                        </div>
                    </div>


                    <div class="row">
                    <label for="adress" class="col-md-4 col-form-label text-md-end text-start">adress</label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $client->adress}}
                        </div>
                    </div>



            </div>
        </div>
    </div>    
</div>
    
@endsection