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

            .valoracion {
                position: relative;
                overflow: hidden;
                display: inline-block;
            }

            .valoracion input {
                position: absolute;
                top: -100px;
            }


            .valoracion label {
                float: right;
                color: #c1b8b8;
                font-size: 30px;
            }

            .valoracion label:hover,
            .valoracion label:hover~label,
            .valoracion input:checked~label {
                color: #ffff00;
            }
        </style>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($fotos as $foto)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img height="450" src="/foto/{{ $foto->ruta }}" alt="Imagen">
                                <div style="font-size:1.4em;" class="card-body">
                                    <p class="card-text">Autor: {{ $foto->autor }}</p>
                                    <p class="card-text">Nombre del libro: {{ $foto->nomlibro }}</p>
                                    <p class="card-text">Descripcion: {{ $foto->descripcion }}</p>
                                    <div class="valoracion">
                                        <input id="radio1" type="radio" name="estrellas" value="5">
                                        <label for="radio1">★</label>

                                        <input id="radio2" type="radio" name="estrellas" value="4">
                                        <label for="radio2">★</label>

                                        <input id="radio3" type="radio" name="estrellas" value="3">
                                        <label for="radio3">★</label>

                                        <input id="radio4" type="radio" name="estrellas" value="2">
                                        <label for="radio4">★</label>

                                        <input id="radio5" type="radio" name="estrellas" value="1">
                                        <label for="radio5">★</label>
                                    </div>
                                    <br>
                                    <a href="{{ $foto->rutadescarga }}" class="btn btn-success" target="_blank">Descargar
                                        libro(pdf)</a>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <p> <i class="bi bi-chat-dots"></i>
                                                <button class="btn " type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseExample{{ $foto->id }}"
                                                    aria-expanded="false" aria-controls="collapseExample">
                                                    <x-bi-chat class="text-primary" /> {{ count($foto->comentario) }}
                                                </button>
                                            </p>
                                        </div>
                                        <small class="text-muted">{{ $foto->User->name }}</small>
                                    </div>
                                    <div class="collapse" id="collapseExample{{ $foto->id }}">
                                        @foreach ($foto->comentario as $comentario)
                                            <div class="card card-body">
                                                {{ $comentario->comentario }}
                                            </div>
                                            <small class="text-muted">{{ $comentario->User->name }}</small>
                                        @endforeach
                                        <form method="POST" action="{{ route('subirComentario') }}">
                                            @csrf
                                            <div class="form-group">
                                                <div class="mt-2 row g-3">
                                                    <div class="col-9">
                                                        <input type="text" class="form-control" name="comentario"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Ingrese su comentario">
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="hidden" name="id_foto" value="{{ $foto->id }}">
                                                        <button type="submit" class="btn btn-info">
                                                            <x-bi-send />
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <marquee>
            <img src="https://cdn.dribbble.com/users/822638/screenshots/3997358/snowman-no.gif" width="160px"
                height="120px" />
        </marquee>
    </main>
@endsection
