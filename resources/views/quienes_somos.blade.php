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
                            <h2 align="center">¿Quiénes somos?</h2>
                        </div>
                        <!-- Inicia sección MISIÓN Y VISIÓN --> 
                        <div>
                            <!--Inicio botonés tab-->
                            <ul class="nav nav-tabs">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="mision-tab" data-bs-toggle="tab" data-bs-target="#mision" type="button" role="tab" aria-controls="mision" aria-selected="true">Misión</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab" aria-controls="vision" aria-selected="false">Visión</button>
                                </li>
                            </ul>
                            <!--Fin botones tab-->
                        </div> 
                        <div>
                        <!-- Inicio contenido de los tabs -->
                        <div class="tab-content centrado">
                            <div class="tab-pane active" id="mision" role="tabpanel" aria-labelledby="mision-tab">
                                <p class="justificado">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo ratione rerum, nesciunt neque totam non numquam cupiditate esse dolorum officiis nisi itaque culpa veritatis temporibus laboriosam labore voluptates, facere architecto deleniti? Iste harum voluptas ab in eos! Ad non architecto quo, optio cum amet molestias deleniti eum repellendus autem exercitationem!</p>
                                <p class="justificado">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum eligendi perspiciatis ad nulla suscipit cumque earum odio quam quisquam sed quidem voluptatibus deleniti nemo, tempora sit recusandae dolorem laborum culpa!</p>
                            </div>
                            <div class="tab-pane" id="vision" role="tabpanel" aria-labelledby="vision-tab">
                                <p class="justificado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis neque nulla laudantium maiores necessitatibus dicta deserunt? Magni eius sunt, nisi quia perspiciatis optio inventore quas rerum odit pariatur, voluptate fugiat tenetur incidunt neque expedita hic ad accusantium voluptatem at veritatis? Quod quis saepe quidem voluptatem eveniet omnis corrupti atque, quas voluptatum, iste quaerat fugit! Dolorum alias ducimus voluptatem, cumque optio expedita, nobis iusto hic a praesentium quibusdam nostrum assumenda mollitia, recusandae accusamus ex voluptatibus. Inventore distinctio impedit vero quisquam maxime. Asperiores, repudiandae deserunt perspiciatis eum eius porro maxime provident est commodi sit obcaecati, error quibusdam sint pariatur enim quaerat nisi.</p>
                                <p class="justificado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda facilis illum a velit, architecto alias? Quos maxime sed eveniet fugiat labore sunt nemo ab rerum deserunt in! Recusandae, cum eius.</p>
                            </div>
                        </div>
                        <!-- Fin contenido de los tabs -->
                    </div>
                    <!-- Fin de la sección MISIÓN Y VISIÓN -->
                    <!--Inicio de la sección VALORES -->
                    <center><h3>Valores</h3></center>
                    <div class="row">
                        <!--Inicia cuerpo de la tarjeta-->
                        <div class="col-md-4">
                            <div class="card-body contenido">
                                <center><b><i><h5>Respeto</h5></i></b></center>
                                <p class="justificado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis officiis voluptate odit deleniti quidem voluptates iure voluptatum nam aut minima.</p>
                            </div>
                        </div>
                        <!--Termina cuerpo de la tarjeta-->
                        <!--Inicia cuerpo de la tarjeta-->
                        <div class="col-md-4">
                            <div class="card-body contenido">
                                <center><b><i><h5>Honestidad</h5></i></b></center>
                                <p class="justificado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis officiis voluptate odit deleniti quidem voluptates iure voluptatum nam aut minima.</p>
                            </div>
                        </div>
                        <!--Termina cuerpo de la tarjeta-->
                        <!--Inicia cuerpo de la tarjeta-->
                        <div class="col-md-4">
                            <div class="card-body contenido">
                                <center><b><i><h5>Tolerancia</h5></i></b></center>
                                <p class="justificado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis officiis voluptate odit deleniti quidem voluptates iure voluptatum nam aut minima.</p>
                            </div>
                        </div>
                        <!--Termina cuerpo de la tarjeta-->
                        <!--Inicia cuerpo de la tarjeta-->
                        <div class="col-md-4">
                            <div class="card-body contenido">
                                <center><b><i><h5>Solidaridad</h5></i></b></center>
                                <p class="justificado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis officiis voluptate odit deleniti quidem voluptates iure voluptatum nam aut minima.</p>
                            </div>
                        </div>
                        <!--Termina cuerpo de la tarjeta-->
                        <!--Inicia cuerpo de la tarjeta-->
                        <div class="col-md-4">
                            <div class="card-body contenido">
                                <center><b><i><h5>Trabajo en equipo</h5></i></b></center>
                                <p class="justificado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis officiis voluptate odit deleniti quidem voluptates iure voluptatum nam aut minima.</p>
                            </div>
                        </div>
                        <!--Termina cuerpo de la tarjeta-->
                        <!--Inicia cuerpo de la tarjeta-->
                        <div class="col-md-4">
                            <div class="card-body contenido">
                                <center><b><i><h5>Competitividad</h5></i></b></center>
                                <p class="justificado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis officiis voluptate odit deleniti quidem voluptates iure voluptatum nam aut minima.</p>
                            </div>
                        </div>
                        <!--Termina cuerpo de la tarjeta-->
                    </div>
                    <!--Fin de la sección VALORES -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
    