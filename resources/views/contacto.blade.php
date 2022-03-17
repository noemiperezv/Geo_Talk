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
                        <!--Inicio sección CONTÁCTANOS-->
                        <div>
                            <h2 align="center">Contáctanos</h2>
                            <div class="row">
                                <!--Inicia tarjeta-->
                                <div class="col-md-4 contenido centrado margen">
                                    <h3>Teléfonos</h3>
                                    <h4><i class="fa fa-phone" aria-hidden="true"></i> 4181125785</h4>
                                    <h4><i class="fa fa-phone" aria-hidden="true"></i> 4681155822</h4>
                                </div>
                                <!--Fin tarjeta-->
                                <div class="col-md-7 contenido centrado margen">
                                    <h3>Correos</h3>
                                    <h4><i class="fa fa-envelope" aria-hidden="true"></i> sandraguay32@gmail.com</h4>
                                    <h4><i class="fa fa-envelope" aria-hidden="true"></i> noemivega1303@gmail.com</h4>
                                    <h4><i class="fa fa-envelope" aria-hidden="true"></i> geotalk@gmail.com</h4>
                                </div>
                                <!--Fin tarjeta-->
                                <!--Fin tarjeta-->
                                <div class="col-md-11 contenido centrado margen">
                                    <h3>Siguenos en nuestras redes sociales</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3><i class="fa fa-facebook-square" aria-hidden="true"></i>GeoTalk</h3>
                                            <h3><i class="fa fa-instagram" aria-hidden="true"></i>GeoTalkOfficial</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <h3><i class="fa fa-twitter" aria-hidden="true"></i>Geo_Talk</h3>
                                            <h3><i class="fa fa-youtube-play" aria-hidden="true"></i>SomosGeoTalk</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--Fin tarjeta-->
                            </div>
                        </div> 
                        <!--Fin sección CONTÁCTANOS--> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</x-app-layout>