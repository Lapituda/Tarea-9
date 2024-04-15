@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contacto</h1>
        <p>¡Estamos aquí para ayudarte! Puedes contactarnos utilizando la información a continuación:</p>
        <ul>
            <li><strong>Teléfono:</strong> [Tu número de teléfono]</li>
            <li><strong>Email:</strong> [Tu dirección de email]</li>
            <li><strong>Dirección:</strong> [Tu dirección física]</li>
        </ul>
        <h2>Formulario de Contacto</h2>
        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Mensaje</label>
                <textarea class="form-control" id="message" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
