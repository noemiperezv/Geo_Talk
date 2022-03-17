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
                        <!--Inicio sección OBJETIVO-->
                        <div>
                            <h2 align="center">Objetivo</h2>
                            <!--Inicio tarjeta-->
                            <div class="card contenido">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{URL::asset('../../img/objetivo.jpg')}}" height="200 px" alt="">
                                    </div>
                                    <div class="col-md-9">
                                        <p class="justificado centrado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis rem corporis placeat. Sequi assumenda dicta, harum atque nisi mollitia asperiores corrupti, incidunt enim aliquam aspernatur adipisci quisquam expedita quo quae magnam deleniti molestias autem saepe impedit iusto laborum quos aut. Pariatur officiis sapiente iste dolorem molestiae, quae obcaecati tenetur autem? Numquam omnis mollitia porro cupiditate, quibusdam blanditiis est neque unde. Dolor magni quod autem ut dolorem fugit officiis laudantium! Excepturi.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Fin tarjeta-->
                        </div>
                        <!--Fin sección OBJETIVO-->
                        <!--Inicio sección MÉTODO DE ENSEÑANZA-->
                        <div>
                            <h2 align="center">Método de enseñanza</h2>
                            <!--Inicio tarjeta-->
                            <div class="card contenido">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="justificado centrado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis rem corporis placeat. Sequi assumenda dicta, harum atque nisi mollitia asperiores corrupti, incidunt enim aliquam aspernatur adipisci quisquam expedita quo quae magnam deleniti molestias autem saepe impedit iusto laborum quos aut. Pariatur officiis sapiente iste dolorem molestiae, quae obcaecati tenetur autem? Numquam omnis mollitia porro cupiditate, quibusdam blanditiis est neque unde. Dolor magni quod autem ut dolorem fugit officiis laudantium! Excepturi.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{URL::asset('../../img/enseñanza.jpg')}}" height="170 px" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--Fin tarjeta-->
                        </div> 
                        <!--Fin sección MÉTODO DE ENSEÑANZA-->  
                        <!--Inicio sección MEJORA CONTINUA-->
                        <div>
                            <h2 align="center">Mejora continua</h2>
                            <!--Inicio tarjeta-->
                            <div class="card contenido">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{URL::asset('../../img/mejora.jpg')}}" height="150 px" alt="">
                                    </div>
                                    <div class="col-md-10">
                                        <p class="justificado centrado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis rem corporis placeat. Sequi assumenda dicta, harum atque nisi mollitia asperiores corrupti, incidunt enim aliquam aspernatur adipisci quisquam expedita quo quae magnam deleniti molestias autem saepe impedit iusto laborum quos aut. Pariatur officiis sapiente iste dolorem molestiae, quae obcaecati tenetur autem? Numquam omnis mollitia porro cupiditate, quibusdam blanditiis est neque unde. Dolor magni quod autem ut dolorem fugit officiis laudantium! Excepturi.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Fin tarjeta-->
                        </div> 
                        <!--Fin sección MEJORA CONTINUA-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>