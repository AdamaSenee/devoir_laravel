@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Product Information
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->description }}
                        </div>
                    </div>
        
                    <div class="row">
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start"><strong>price:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->price }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="quantity_in_stock" class="col-md-4 col-form-label text-md-end text-start"><strong>quantity_in_stock:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->quantity_in_stock }}
                        </div>
                    </div>

                    <div class="col-md-4">
                     <img src="{{ asset($products->photo) }}" style="height: 50px;width:100px;" alt=""  class="card-img-top img-fluid"  style="height: 150px;">
                     </div>
            </div>
        </div>
    </div>    
</div>
    
@endsection