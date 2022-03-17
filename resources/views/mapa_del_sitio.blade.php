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
                        <!--Inicia sección MAPA DEL SITIO-->
                        <div>
                            <h2 align="center">Mapa del sitio</h2>
                            <!--Inicia tarjeta-->
                            <div class="card contenido centrado">
                                <center><i class="fa fa-home fa-4x" aria-hidden="true"></i></center>
                                <div class="row">
                                    <div class="col-md-1">
                                        
                                    </div>
                                    <div class="col-md-2">
                                        <div class="contenido margen centrado">
                                            <h5>Noticias</h5>
                                        </div>
                                        <div class="contenido margen centrado">
                                            <h5>Publicar contenido</h5>
                                        </div>
                                        <div class="contenido margen centrado">
                                            <h5>Personas que sigo</h5>
                                        </div>
                                        <div class="contenido margen centrado">
                                            <h5>Lo más reciente</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-2 ">
                                        <div class="contenido margen centrado">
                                            <h5>Clases</h5>
                                        </div>
                                        <div class="contenido margen centrado">
                                            <h5>En curso</h5>
                                        </div>
                                        <div class="contenido margen centrado">
                                            <h5>Mis clases</h5>
                                        </div>
                                        <div class="contenido margen centrado">
                                            <h5>Crear clase</h5>
                                        </div>
                                        <div class="contenido margen centrado">
                                            <h5>Editar clase</h5>
                                        </div>
                                        <div class="contenido margen centrado">
                                            <h5>Ver clase</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="contenido margen centrado">
                                            <h5>Nosotros</h5>
                                        </div>
                                        <div class="contenido margen centrado">
                                            <h5>¿Quiénes somos?</h5>
                                        </div>
                                        <div class="contenido margen centrado">
                                            <h5>Objetivo</h5>
                                        </div>
                                        <div class="contenido margen centrado">
                                            <h5>Mapa del sitio</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-2 ">
                                        <div class="contenido margen centrado">
                                            <h5>Contacto</h5>
                                        </div>
                                        <div class="contenido margen centrado">
                                            <h5>Correo</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="contenido margen centrado">
                                            <h5>Perfil</h5>
                                        </div>
                                        <div class="contenido margen centrado">
                                            <h5>Mi perfil</h5>
                                        </div>
                                        <div class="contenido margen centrado">
                                            <h5>Editar perfil</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Termina tarjeta-->
                        </div> 
                        <!--Termina sección MAPA DEL SITIO--> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</x-app-layout>