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
                            <center><h2>Crear clase</h2></center>
                        </div>
                        <form action="" method="post" action=" action('FormValidtionController@createUserForm') ">

                            @csrf

                            <div class="form-group">
                                <label>Título:</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>

                            <div class="form-group">
                                <label>Idioma:</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Seleccionar</option>
                                    <option value="1">Inglés</option>
                                    <option value="2">Español</option>
                                    <option value="3">Alemán</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Descripción:</label>
                                <textarea class="form-control" name="message" id="message"
                                    rows="4"></textarea>
                            </div>
                            <center>
                                <a href="" class="btn btn-morado">Cargar imagen</a>
                            </center>
                            <div class="form-group">
                                <label>¿Publicar?</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Seleccionar</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                            <center>
                                <a href="" class="btn btn-morado2">Crear clase</a>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</x-app-layout>

