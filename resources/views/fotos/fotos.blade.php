@extends('layouts.app')

@section('content')
<main>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <div class="album py-5 bg-light">
        <div class="container">
            <form style="font-size: 2em;" action="{{ route('subirFoto') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf
                <label for="staticEmail2">Subir libro</label>
                {{-- Autor --}}
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Autor</label>
                    <input style="font-size:0.8em;" type="text" class="form-control" name="autor" placeholder="Ingrese el nombre del Autor">
                </div>
                {{-- Nombre del libro --}}
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre del libro</label>
                    <input style="font-size:0.8em;" type="text" class="form-control" name="nomlibro" placeholder="Ingrese el nombre del libro">
                </div>
                {{-- Ruta de descarga --}}
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Ruta de descarga</label>
                    <input style="font-size:0.8em;" type="text" class="form-control" name="rutadescarga" placeholder="Link para descargar libro">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
                    <input style="font-size:0.8em;" type="text" class="form-control" name="descripcion" placeholder="Agregue una descripcion">
                </div>
                {{-- Subir Portada --}}
                <div class="col-auto">
                    <input style="font-size:0.8em;" class="form-control" type="file" name="foto">
                </div>
                {{-- Boton para subir los datos  --}}
                <div class="col-auto">
                    <button style="font-size: 0.8em;" type="submit" class="btn btn-primary mb-3">Subir</button>
                </div>
            </form>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($fotos as $foto)
                <div class="col">
                    <div class="card shadow-sm">
                        <img height="450" src="/foto/{{$foto->ruta}}" alt="Imagen">
                        <div style="font-size:1.4em;" class="card-body">
                            <p class="card-text">Autor: {{$foto->autor}}</p>
                            <p class="card-text">Nombre del libro: {{$foto->nomlibro}}</p>
                            <p class="card-text">Descripcion: {{$foto->descripcion}}</p>                            
                            <a href="{{$foto->rutadescarga}}"
                            class="btn btn-primary" target="_blank">Descargar libro(pdf)</a> 
                            <div class="d-flex justify-content-between align-items-center">
                                <form method="POST" action="{{ route('eliminarFoto') }}">
                                    @csrf
                                    <br>
                                    <div class="btn-group">
                                        <input type="hidden" name="id_foto" value="{{$foto->id}}">
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </div>
                                </form>
                                <small class="text-muted">{{$foto->created_at}}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</main>
@endsection