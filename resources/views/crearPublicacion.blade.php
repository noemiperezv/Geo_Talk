<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear publicación</title>
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('GeoTalk') }}
        </h2>
    </x-slot>

    <div class="row justify-content-center my-5">
    <div class="col-md-8">
        <div class="card shadow bg-light">
            <div class="card-body bg-white px-5 py-3 border-bottom rounded-top">
                <div class="mx-3 my-3">
                    <div>
                        <h2>Publicar contenido</h2>
                        <br><br>
                        <form>
                            <div class="mb-3 row">
                                <label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Ingresa un título" aria-label="default input example">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Escribe algo...</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            
                            <label for="titulo">Cargar imagen</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile01">
                            </div>
                            <br>
                            <div class="input-group mb-3">
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected>Seleccionar categoría</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <br>
                            <div align="center">
                                <button type="button" class="btn btn-outline-info">Publicar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



        

</x-app-layout>
</body>
</html>