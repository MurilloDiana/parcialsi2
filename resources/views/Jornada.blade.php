
@extends('layouts.master')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Horario de Entrada</h2>
    </div>
</div>
<div class="row mt-3">
    <div class="col-6">
        <div class="form-group row">
            
            
            <label class="col-sm-2 col-form-label">Latitud:        <i class="text-danger">*</i></label>
            <div class="col-sm-10">
                <span class="form-control" name="latitud"  id="latitud">
            </div>
        
            <label class="col-sm-2 col-form-label">Longitud<i class="text-danger">*</i></label>
            <div class="col-sm-10">
                <span type="text" class="form-control" name="longitud"  id="longitud">
            </div>

            <label class="col-sm-2 col-form-label">Fecha: <i class="text-danger">*</i></label>
            <div class="col-sm-10">
                <script>
                    
                    date = new Date().toLocaleDateString();
                    document.write(date);
                    </script>
                     {{-- <span type="text" class="form-control" name="date"  id="date"> --}}
            </div>

            <label class="col-sm-2 col-form-label">Hora: <i class="text-danger">*</i></label>
            <div class="col-sm-10">
                    <script>
                        date = new Date().toLocaleTimeString('en-US');
                        document.write(date);
                    </script>
                    {{-- <span type="text" class="form-control" name="date"  id="date"> --}}
                
            </div>
                <div class="col-sm-4 col-sm-offset-2">
                    <button class="btn btn-success " type="submit">Guardar</button>
                </div>
                <div class="col-sm-4 col-sm-offset-2">
                    <button id="obtener"class="btn btn-success " type="submit">obtener coordenadas</button>
                </div>

               
        </div>
    </div>
    <div class="col-6">
        <div class="form-group row">
            
            <div id="mapa" style="width:100vh; height:100vh;" >
                


            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/jornada.js')}}"></script>

@stop