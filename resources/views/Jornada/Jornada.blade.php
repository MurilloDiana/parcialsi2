@extends('layouts.master')
@section('content')

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
                <input type="text" class="form-control" name="nombres"  id="latitud">
            </div>
        
            <label class="col-sm-2 col-form-label">Longitud<i class="text-danger">*</i></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nombres"  id="longitud">
            </div>

            <label class="col-sm-2 col-form-label">Fecha: <i class="text-danger">*</i></label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="nombres"  id="longitud">
            </div>

            <label class="col-sm-2 col-form-label">Hora: <i class="text-danger">*</i></label>
            <div class="col-sm-10">
                <input type="time" class="form-control" name="nombres"  id="longitud">
            </div>
                <div class="col-sm-4 col-sm-offset-2">
                    <button class="btn btn-success " type="submit">Guardar</button>
                </div>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group row">
            
            <div id="mapa" style="width:100vh; height:100vh;" >
                
<script>
    function iniciarMapa(){
        let latitud= -17.736868546685695 ;
        let longitud= -63.10634491157836 ;
        coordenadas={
            lng:longitud,
            lat:latitud
        }
        generarMapa(coordenadas)
    }

    function generarMapa(coordenadas){
        let mapa = new google.maps.Map(document.getElementById('mapa'), {
            zoom:15,
            center: new google.maps.LatLng(coordenadas.lat, coordenadas.lng)
        });
        marcador= new google.maps.Marker({
            map:mapa,
            draggable:true,
            position: new google.maps.LatLng(coordenadas.lat, coordenadas.lng)
        });
        marcador.addListener('dragend', function(event){
            document.getElementById("latitud").value=this.getPosition().lat();
            document.getElementById("longitud").value=this.getPosition().lng();
        })
    }
</script>

            </div>
        </div>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=&callback=iniciarMapa"></script>

@stop
@stop