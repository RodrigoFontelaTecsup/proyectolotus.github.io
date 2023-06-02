@extends('layouts.app')

@section('content')
    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #fccb90;

            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
    </style>

    <link rel="stylesheet" href="/./resources/css/welcome.css">
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                            style="width: 185px;" alt="logo">
                                        <h4 style="font-size: 2.5em;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif" class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                                    </div>

                                </div>
                            </div>
                            <div style=" background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);"
                                class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 style="font-size: 2em;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif" class="mb-4">Lotus - "ven vamos al psicologo"</h4>
                                    <p style="font-size: 2em;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif" class="small mb-0">Si leer es uno de sus grandes intereses
                                        o está en busca de mejorar su hábito a la lectura, esta página le ayudará porque
                                        pondrán a su disposición miles de opciones en la palma de su mano.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <marquee>
                        <img src="https://cdn.dribbble.com/users/822638/screenshots/3997358/snowman-no.gif" width="160px"
                            height="120px" />
                    </marquee>
                </div>
            </div>
        </div>
        <footer style="display: flex; justify-content: space-around;">
          <p style="text-align: center;font-size:2em;">&copy; 2022 Lotus Team</p>
        </footer>
        <footer style="text-align: center;font-size:2em;">
            <a href="/acerca-de">Acerca de Nosotros !</a><br>
            <a href="/conectar">Contactanos !</a><br>
            <a href="/rrss">Redes Sociales !</a>
        </footer>
    </section>
@endsection
