<!-- resources/views/import.blade.php -->

@extends('layouts.app') <!-- Assurez-vous d'avoir une mise en page (layout) définie -->

@section('content')
    <div class="container">
        <h2>Formulaire d'importation de clients</h2>

        <form action="{{ url('/import-clients') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="file">Sélectionnez le fichier Excel :</label>
                <input type="file" name="file" id="file" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Importer</button>
        </form>
    </div>
@endsection