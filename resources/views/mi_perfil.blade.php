<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('GeoTalk') }}
        </h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="col-md-12">
            <div class="card shadow bg-light">
                <div class="card-body bg-white px-5 py-3 border-bottom rounded-top">
                    <div class="mx-3 my-3">
                        <!--Inicia sección MI PERFIL-->
                        <div>
                            <h2 align="center">Mi perfil</h2>
                            <center>
                                <img src="{{URL::asset('../../img/usuario.png')}}" class="perfil" alt="">
                                @auth
                                    <h3>{{ Auth::user()->name }}</h3>
                                    <h6><i>{{ Auth::user()->email }}</i></h6>
                                    <p><a href="">Editar perfil</a>          <a href="">Cambiar contraseña</a></p>
                                @endauth
                            </center>
                        </div>  
                        <!--Termina sección MI PERFIL-->
                        <!--Inicio sección MIS IDIOMAS-->
                        <div class="card contenido">
                            <center>
                                <h2>Mis idiomas</h2>
                            </center>
                            <div class="row">
                                <div class="col-md-3 centrado margen">
                                    <h3><i class="fa fa-flag" aria-hidden="true"></i> Alemán</h3>
                                    <h3><i class="fa fa-flag" aria-hidden="true"></i> Francés</h3>
                                </div>
                                <div class="col-md-3 centrado margen">
                                    <h3>Porcentaje: 25%</h3>
                                    <h3>Porcentaje: 50%</h3>
                                </div>
                                <div class="col-md-5 centrado margen">
                                    <h3>Tiempo dedicado: 3hr 52min 13seg</h3>
                                    <h3>Tiempo dedicado: 1hr 10min 59seg</h3>
                                </div>
                            </div>
                        </div>
                        <!--Fin sección MIS IDIOMAS-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>