@extends('layouts.master')



@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Mapa de Visitas Tecnicas</h2>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                
                <div class="ibox-content">
                    <form >
                        
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
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=&callback=iniciarMapa"></script>
@stop
