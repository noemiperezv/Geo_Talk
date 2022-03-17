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
                        <div class="center">
                            <center><h2>Nombre de la clase</h2></center>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <a href="" class="btn btn-morado btn-block">Salir de la clase</a>
                            </div>
                            <div class="col-md-2">
                                <h6 class="card-title"><i class="fas fa-calendar"></i> yy/mm/dd</h6>
                                <h6 class="card-title"><i class="fa fa-globe" aria-hidden="true"></i> Idioma</h6>
                            </div>
                            <div class="col-md-12">
                                <div class="card contenido" style="width: 66rem;">
                                    <div class="card-body">
                                        <h5 class="card-text">Contenido</h5>
                                        <p class="justificado">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam tempore assumenda quibusdam, ratione minima quidem aut animi repellat similique cum minus blanditiis facere et dolor nulla perferendis quos ipsa rerum ex beatae dolorum odit culpa molestias. Dolores iure consequatur dignissimos possimus non ipsa, eius, harum recusandae, sit impedit ex eligendi.
                                        </p>
                                        <p class="justificado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quasi sint repellat beatae reprehenderit deserunt incidunt animi autem dolorem ut, cum adipisci facere quod, consequatur blanditiis tempore provident totam itaque ipsum similique laboriosam minus recusandae? Laborum nobis officiis repellat ea deleniti ut ducimus sint amet qui magni! Fuga ut exercitationem accusamus aut, sed corporis in eius ab. Rerum hic perspiciatis corporis repellat, sequi repudiandae atque illum veniam vero, ullam mollitia aliquid fugit iusto eos iure est, at beatae dolorum nobis deserunt quasi eius! Nam beatae ducimus architecto. Nemo dicta fugiat ab beatae corrupti, maiores enim quasi, nulla molestias magnam debitis!</p>
                                        <p class="justificado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique necessitatibus tempora molestias harum odio atque sequi, amet hic cupiditate eveniet architecto. Architecto esse ducimus quas dolorem dolores eligendi! Voluptates quod animi suscipit dolorum iste at doloremque fugit est quia omnis voluptas quas modi deleniti saepe inventore aperiam commodi dicta, beatae quam minima, iusto eum ea molestias ab. Facilis, nulla provident!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <center>
                            <h5>Comentar</h5>
                        </center>
                        <div class="row">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-8">
                                <textarea class="form-control" name="message" id="message" rows="4" placeholder="Comenta algo..."></textarea>
                            </div>
                            <center>
                                <a class="btn btn-block btn-rosa"href="">Comentar</a>
                            </center>
                        </div>
                    </div>
                    <!--Inicio de la sección COMENTARIOS -->
                    <h3>Comentarios</h3>
                    <!-- Inicio de la tarjeta con comentario-->
                    <div class="card contenido" style="width: 66rem;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <p><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>usuario@gmail.com</p>
                                </div>
                                <div class="col-md-2">
                                    <h6 class="card-title"><i class="fas fa-calendar"></i> 12/10/2021</h6>
                                </div>
                            </div>
                                <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quaerat corrupti fuga deleniti ipsam nisi.</i></p>
                        </div>
                    </div>
                    <!-- Fin de la tarjeta con comentario-->
                    <!-- Inicio de la tarjeta con comentario-->
                    <div class="card contenido" style="width: 66rem;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <p><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>anonimo45@gmail.com</p>
                                </div>
                                <div class="col-md-2">
                                    <h6 class="card-title"><i class="fas fa-calendar"></i> 25/01/2022</h6>
                                </div>
                            </div>
                            <p><i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis veritatis rerum facilis veniam assumenda magnam perspiciatis culpa numquam. Optio, vitae!</i></p>
                        </div>
                    </div>
                    <!-- Fin de la tarjeta con comentario-->
                    <!-- Inicio de la tarjeta con comentario-->
                    <div class="card contenido" style="width: 66rem;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <p><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>usuario.123@gmail.com</p>
                                </div>
                                <div class="col-md-2">
                                    <h6 class="card-title"><i class="fas fa-calendar"></i> 31/01/2022</h6>
                                </div>
                            </div>
                            <p><i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus tempore quod eligendi sit eum aperiam fugiat esse? Ad rem nobis dolorum eum autem, est facere repudiandae laudantium ex debitis et.</i></p>
                        </div>
                    </div>
                    <!-- Fin de la tarjeta con comentario-->
                    <!--Fin de la sección COMENTARIOS -->
                </div>  
            </div>
        </div>
    </div>
</x-app-layout>