@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Siem-Escolas</title>
    </head>
    <body>
        <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Siem-Escolas</div>

                <div class="panel-body">
            <h2>Siem-Escolas</h2>

                        <?php
                        $usuario_logado = Auth::user()->name;
                        if ($usuario_logado == "Admin") { ?>

            <form class = 'col s3' method = 'get' action = '{{url("siem")}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Novo <b>+</b></button>
            </form>
                        <?php } ?>


            
            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    
                    <th>Siem</th>
                    
                    <th>Nome da Escola</th>
                    
                    <th>Tipo de Escola</th>
                              

               <!--     <th>cod_ext</th>  -->
                    
                    
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach($siems as $Siem)
                    <tr>
                        
                        <td>{{$Siem->siem}}</td>
                        
                        <td>{{$Siem->escola_nome}}</td>
                        
                        <td>{{$Siem->escola_tipo}}</td>
                        
                <!--        <td>{{$Siem->cod_ext}}</td> -->
                        
                        
                        <td>
                              
                        <?php
                        
                        $usuario_logado = Auth::user()->name;
                        if ($usuario_logado == "Admin") { ?>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/siem/{{$Siem->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <?php } ?>
       
                                <a href = '#' data-target="#myModal" class = 'viewEdit btn btn-primary btn-xs' data-link = '/siem/{{$Siem->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/siem/{{$Siem->id}}'><i class = 'material-icons'>info</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class = 'AjaxisModal'>
        </div>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script> var baseURL = "{{URL::to('/')}}"</script>
<script src = "{{ URL::asset('js/AjaxisBootstrap.js')}}"></script>
<script src = "{{ URL::asset('js/scaffold-interface-js/customA.js')}}"></script>
</html>
@endsection