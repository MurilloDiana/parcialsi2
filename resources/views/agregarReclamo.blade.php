@extends('layouts.master')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Agregar Boleta de Reclamo</h2>
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
                    <form action="" method="post">
                        @csrf

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nro de Contrato:</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Persona" name="txtPersona" id="txtPersona" value="" class="typeahead_2 form-control" />
                                <input type="hidden" name="id" id="id" value="">
                                {{-- <input type="text" class="form-control" name="id" value="{{old('id')}}" required=""> --}}
                            </div>
                        </div>
                        @error('id')
                            <div class="alert alert-danger alert-dismissable">ññ<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                        @enderror
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="login" value="" required="">
                            </div>
                        </div>
                      
                            <div class="alert alert-danger alert-dismissable">hh<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
              
                        {{-- comienzo --}}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Apellidos</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="pass" value="" required="">
                            </div>
                        </div>
                    
                            <div class="alert alert-danger alert-dismissable">sms<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                        

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sintoma de la Falla</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="perfil_id"  id="perfil_id">
                                    <option value="" ></option>
                                    <option value="" >Sin Tono</option>
                                    <option value="" >Tono Ocupado</option>
                                    <option value="" >Falla Fisica</option>
                                    <option value="" >Falla Externa</option>
                                    <option value="" >Otros Sintomas</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Descripcion de la Falla</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="login" value="" required="">
                            </div>
                        </div>
                      
                            <div class="alert alert-danger alert-dismissable">hh<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
              

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Numeros de Referencias</label>
                            <div class="col-sm-10">
                                <div class="form-control">
                                    <label> Nombre  <input type="text" value="" name="activo" > </label>&nbsp;&nbsp;
                                    <label> Telefono  <input type="text" value="" name="activo" > </label>
                                </div>
                            </div>
                        </div>
                        
                            <div class="alert alert-danger alert-dismissable">tt<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                       

                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-success " type="submit">Guardar</button>
                                <button class="btn btn-danger " type="button" onclick="location.href=''">Cancelar</button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
<input type="hidden" id="urlPersonasActivas">
<script>
    $(document).ready(function(){
        $('#txtPersona').keyup(function(){
            var nombre=$(this).val();
            if(nombre.length>=3){
                function(data){
                    $("#txtPersona").typeahead(
                        { 
                            source:data,
                            afterSelect:function(item){
                                $('#id').val(item.id);
                            }
                        }
                        );
                },'json');    
            }else{
                if(nombre.length==0){
                    $('#id').val('');
                }
            }
            
        });
    });
</script>
@stop