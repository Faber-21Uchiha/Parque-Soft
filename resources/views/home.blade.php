@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1" >Configuracion actual del Hardware</span>
              </div>
              
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Marca PC</span>
                <input type="text" class="form-control">
            
                <span class="input-group-text" id="basic-addon2">Marca Monitor</span>
                <input type="text" class="form-control">

                <span class="input-group-text" id="basic-addon2">Equipo N°</span>
                <input type="text" class="form-control">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Modelo PC</span>
                <input type="text" class="form-control">
            
                <span class="input-group-text" id="basic-addon2">Serial PC</span>
                <input type="text" class="form-control">

                <span class="input-group-text" id="basic-addon2">Modelo Monitor</span>
                <input type="text" class="form-control">

                <span class="input-group-text" id="basic-addon2">Serial Monitor</span>
                <input type="text" class="form-control">
              </div>

              
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Placa</span>
                <input type="text" class="form-control">
            
                <span class="input-group-text" id="basic-addon2">Serial Placa</span>
                <input type="text" class="form-control">

                <span class="input-group-text" id="basic-addon2">Teclado</span>
                <input type="text" class="form-control">

                <span class="input-group-text" id="basic-addon2">Serial Teclado</span>
                <input type="text" class="form-control">
              </div>
              

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Procesador</span>
                <input type="text" class="form-control">
            
                <span class="input-group-text" id="basic-addon2">Velocidad Ghz</span>
                <input type="text" class="form-control">

                <span class="input-group-text" id="basic-addon2">Serial Procesador</span>
                <input type="text" class="form-control">

                <span class="input-group-text" id="basic-addon2">Serial Monitor</span>
                <input type="text" class="form-control">
              </div>

              
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Memoria RAM</span>
                <input type="text" class="form-control">
            
                <span class="input-group-text" id="basic-addon2">Velocidad  Mb</span>
                <input type="text" class="form-control">

                <span class="input-group-text" id="basic-addon2">Serial RAM</span>
                <input type="text" class="form-control">

                <span class="input-group-text" id="basic-addon2">CDROM</span>
                <input type="text" class="form-control">

                <span class="input-group-text" id="basic-addon2">Serial CDROM</span>
                <input type="text" class="form-control">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Diso Duro Marca</span>
                <input type="text" class="form-control">
            
                <span class="input-group-text" id="basic-addon2">Capacidad Gb</span>
                <input type="text" class="form-control">

                <span class="input-group-text" id="basic-addon2">Serial H.D</span>
                <input type="text" class="form-control">

                <span class="input-group-text" id="basic-addon2">IDE</span>
                <input type="text" class="form-control">

                <span class="input-group-text" id="basic-addon2">SATA</span>
                <input type="text" class="form-control">

                <span class="input-group-text" id="basic-addon2">Disco drive 3.5</span>
                <input type="text" class="form-control">

                <span class="input-group-text" id="basic-addon2">Serial Floppy</span>
                <input type="text" class="form-control">
              </div>

              
              <div class="mb-3">
                <label for="basic-url" class="form-label">Your vanity URL</label>
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <div class="form-text">Example help text goes outside the input group.</div>
              </div>
              
              <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
              </div>
              
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" placeholder="Server" aria-label="Server">
              </div>
              
              <div class="input-group">
                <span class="input-group-text">With textarea</span>
                <textarea class="form-control" aria-label="With textarea"></textarea>
              </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
