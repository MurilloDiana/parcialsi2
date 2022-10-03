@extends('layouts.master')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Boletas de Solicitud</h2>
    </div>  
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <a class="btn btn-primary" href="">Agregar</a>
                    <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>
                </div>
                <div class="ibox-content">
                    <form name="formBuscar" action="" method="get">
                        <div class="row">
                            <div class="col-sm-3 m-b-xs">
                                <div class="input-group">
                                    <input placeholder="Buscar" type="text" class="form-control form-control-sm" name="buscar" value=""> 
                                    <span class="input-group-append"> <button type="submit" class="btn btn-sm btn-success">Buscar</button> </span>
                                </div>
                            </div>
                            <div class="col-sm-7 m-b-xs" >&nbsp;</div>
                            <div class="col-sm-2 m-b-xs" style="float: right;"></div>
                        </div>
                    </form>
                    <div class="row"><div class="col-sm-12 m-b-xs"><span class="text-success">Total: <strong>hh</strong></span></div></div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nro de Boleta</th>
                                <th>Nombre</th>
                                <th>Contrato</th>
                                <th>Estado</th>
                                <th>Tecnico Asignado</th>
                                <th>Fecha Apertura</th>
                                <th>Fecha Cierre</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                            
                                <tr>
                                    <td>u</td>
                                    <td>a</td>
                                    <td>f</td>
                                    <td>
                                        
                                            <span class="label label-primary">ATENDIDO</span> 
                                            <span class="label label-warning">PENDIENTE</span>
                                            <span class="label label-danger">CANCELADO</span> 
                                      
                                    </td>
                                    <td><select class="form-control" name="perfil_id"  id="perfil_id">
                                        <option value="" ></option>
                                        <option value="" >Tecnico 1</option>
                                        <option value="" >Tecnico 2</option>
                                        <option value="" >Tecnico 3</option>
                                        <option value="" >Tecnico 4</option>
                                        <option value="" >Tecnico 5</option>
                                    </select></td>
                                    <td>c</td>
                                    <td>s</td>
                                    <td data-texto="">
                                        <a href="" title="Mostrar"><img width="17px" src="{{asset('img/iconos/mostrar.png')}}" alt="Mostrar"></a>
                                       
                                            <a href="" title="Ver"><img width="17px" src="" alt="Ver"></a>
                                        
                                    </td>
                                    <td data-texto="">
                                        <a href="" title="Mostrar"><img width="17px" src="{{asset('img/iconos/guardar.png')}}" alt="Mostrar"></a>
                                       
                                            <a href="" title="Guardar"><img width="17px" src="" alt="Guardar"></a>
                                        
                                    </td>
                                </tr>
                        
                        </tbody>
                        <form name="formEliminar" id="formEliminar"  action="" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Eliminar" hidden="">
                        </form>
                        <script>
                            $(document).ready(function(){
                                $('.btn-eliminar').click(function(){
                                    var ruta=$(this).data('ruta');
                                    var texto = $(this).closest('td').data('texto');
                                    var esEliminar = confirm('Esta seguro de eliminar el registro "'+texto+'"');
                                    if(esEliminar){
                                        $('#formEliminar').attr('action',ruta);
                                        document.formEliminar.submit();
                                    }
                                    
                                });
                            });
                        </script>                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop