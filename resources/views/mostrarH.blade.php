@extends('layouts.master')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Gestion de HelpDesk</h2>
    </div>
    
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ingrese Codigo de HelpDesk</label>
                    <div class="col-sm-8"><input type="text" class="form-control" value="" disabled=""></div>
                    <a class=" col-sm-2 btn btn-primary" href="">Buscar</a>
                    
                </div>
                <div class="ibox-content">
                  
                    <div class="row"><div class="col-sm-12 m-b-xs"><span class="text-success">Total: <strong>hh</strong></span></div></div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Empresa</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                            
                                <tr>
                                    <td>u</td>
                                    <td>a</td>
                                    <td>f</td>
                                    
                                   
                                    <td data-texto="">
                                        <a href="" title="Mostrar"><img width="17px" src="{{asset('img/iconos/mostrar.png')}}" alt="Mostrar"></a>
                                       
                                            <a href="" title="Ver"><img width="17px" src="" alt="Ver"></a>
                                        
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
