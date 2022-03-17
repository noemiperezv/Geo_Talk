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
                        <div>
                            <h2 align="center">En curso</h2>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-4">
                                    <!--Card para clases-->
                                    <div class="card class-card" style="width: 18rem;">
                                        <div class="imagen-port">
                                            <img class="card-img-top" src="{{URL::asset('../../img/Inglés3.jpg')}}" width="400" alt="Card image cap">
                                            <div class="hover-galeria">
                                                <a href="{{ route('mis_clases') }}" target="_blank">
                                                <img class="card-img-top" src="{{URL::asset('../../img/flech.png')}}" alt="Imagen no disponible">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h6 class="card-title"><i class="fas fa-user"></i> Profesor</h6>
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="card-title"><i class="fas fa-calendar"></i> yy/mm/dd</h6>
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="card-title"><i class="fa-solid fa-caret-down"></i> Descripción</h6>
                                                </div>
                                            </div>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                    <!--Fin card para clases-->
                                </div>
                                <div class="col-4">
                                    <!--Card para clases-->
                                    <div class="card class-card" style="width: 18rem;">
                                        <div class="imagen-port">
                                            <img class="card-img-top" src="{{URL::asset('../../img/Español.jpg')}}" alt="Card image cap">
                                            <div class="hover-galeria">
                                                <a href="" target="_blank">
                                                <img class="card-img-top" src="{{URL::asset('../../img/flech.png')}}" alt="Imagen no disponible">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h6 class="card-title"><i class="fas fa-user"></i> Profesor</h6>
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="card-title"><i class="fas fa-calendar"></i> yy/mm/dd</h6>
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="card-title"><i class="fa-solid fa-caret-down"></i> Descripción</h6>
                                                </div>
                                            </div>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                    <!--Fin card para clases-->
                                </div>
                                <div class="col-4">
                                    <!--Card para clases-->
                                    <div class="card class-card" style="width: 18rem;">
                                        <div class="imagen-port">
                                            <img class="card-img-top" src="{{URL::asset('../../img/Alemán.jpg')}}" alt="Card image cap" width="400">
                                            <div class="hover-galeria">
                                                <a href="" target="_blank">
                                                <img class="card-img-top" src="{{URL::asset('../../img/flech.png')}}" alt="Imagen no disponible">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h6 class="card-title"><i class="fas fa-user"></i> Profesor</h6>
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="card-title"><i class="fas fa-calendar"></i> yy/mm/dd</h6>
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="card-title"><i class="fa-solid fa-caret-down"></i> Descripción</h6>
                                                </div>
                                            </div>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                    <!--Fin card para clases-->
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</x-app-layout>
    