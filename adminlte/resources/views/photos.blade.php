@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Fotos</h1>
        <!-- Aquí puedes colocar tu galería de fotos -->
        <div class="row">
            <div class="col-md-4">
                <img src="ruta/a/tu/imagen1.jpg" alt="Foto 1" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="ruta/a/tu/imagen2.jpg" alt="Foto 2" class="img-fluid">
            </div>
            <!-- Más imágenes -->
        </div>
    </div>
@endsection
