<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias: Lo más reciente</title>
</head>
<body>
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
                        <h2>Noticias Recientes</h2>
                        <br>
                        <br>

                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                                <div class="card border-info mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="../../img/Logo.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Título</h5>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <h6 class="card-title"><i class="fas fa-user"></i> Usuario</h6>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="card-title"><i class="fas fa-calendar"></i> yy/mm/dd</h6>
                                                    </div>
                                                </div>
                                                
                                                <p class="card-text">
                                                    <details>
                                                        <summary>Descripción</summary>
                                                        <p>Más información.</p>
                                                    </details>
                                                </p>
                                                <p class="card-text"><small class="text-muted"><i class="fas fa-globe"></i> Idioma</small></p>
                                                <a href="#" class="btn btn-info">Ver más</a>
                                                
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card border-info mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="../../img/Logo.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Título</h5>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <h6 class="card-title"><i class="fas fa-user"></i> Usuario</h6>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="card-title"><i class="fas fa-calendar"></i> yy/mm/dd</h6>
                                                    </div>
                                                </div>
                                                
                                                <p class="card-text">
                                                    <details>
                                                        <summary>Descripción</summary>
                                                        <p>Más información.</p>
                                                    </details>
                                                </p>
                                                <p class="card-text"><small class="text-muted"><i class="fas fa-globe"></i> Idioma</small></p>
                                                
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col">
                                <div class="card border-info mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="../../img/Logo.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Título</h5>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <h6 class="card-title"><i class="fas fa-user"></i> Usuario</h6>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="card-title"><i class="fas fa-calendar"></i> yy/mm/dd</h6>
                                                    </div>
                                                </div>
                                                
                                                <p class="card-text">
                                                    <details>
                                                        <summary>Descripción</summary>
                                                        <p>Más información.</p>
                                                    </details>
                                                </p>
                                                <p class="card-text"><small class="text-muted"><i class="fas fa-globe"></i> Idioma</small></p>

                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col">
                                <div class="card border-info mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="../../img/Logo.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Título</h5>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <h6 class="card-title"><i class="fas fa-user"></i> Usuario</h6>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="card-title"><i class="fas fa-calendar"></i> yy/mm/dd</h6>
                                                    </div>
                                                </div>
                                                
                                                <p class="card-text">
                                                    <details>
                                                        <summary>Descripción</summary>
                                                        <p>Más información.</p>
                                                    </details>
                                                </p>
                                                <p class="card-text"><small class="text-muted"><i class="fas fa-globe"></i> Idioma</small></p>
                                                <a href="#" class="btn btn-info">Ver más</a>
                                                
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>


</body>
</html>