@extends('layouts.master')
@section('titulo', $parControl['titulo'])

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Mostrar Contrato</h2>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ingrese Nro de CI</label>
                    <div class="col-sm-8"><input type="text" class="form-control" value="" disabled=""></div>
                    <a class=" col-sm-2 btn btn-primary" href="">Buscar</a>
                    
                </div>
                <div class="ibox-content">
                    <form >
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nro de Contrato</label>
                            <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Telefono de Contrato</label>
                            <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Apellido</label>
                            <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Genero</label>
                            <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Carnet de identidad</label>
                            <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Expedido(ci)</label>
                            <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                            <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Celular</label>
                            <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Direccion</label>
                            <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            <div id="mapa" class="form-control"  style="width:100%; height:500px;" >
                
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
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Correo</label>
                            <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Activo</label>
                            <div class="col-sm-10">
                              
                                    <span class="label label-primary">SI</span> 
                            
                                    <span class="label label-warning">NO</span> 
                                   
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Creado</label>
                            <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=&callback=iniciarMapa"></script>
@stop
