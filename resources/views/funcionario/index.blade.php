<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Index Funcionario</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Funcionario Index</h1>
            <form class = 'col s3' method = 'get' action = '{{url("funcionario")}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New Funcionario</button>
            </form>
            <br>
            
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Associate
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    
                    <li><a href="http://localhost:8000/siem">Siem</a></li>
                    
                    <li><a href="http://localhost:8000/ocupacao">Ocupacao</a></li>
                    
                    <li><a href="http://localhost:8000/pessoa">Pessoa</a></li>
                    
                </ul>
            </div>
            
            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    
                    <th>usuario</th>
                    
                    <th>vinculo</th>
                    
                    <th>status_funcionario</th>
                    
                    
                    
                    
                    <th>siem</th>
                    
                    <th>escola_nome</th>
                    
                    <th>escola_tipo</th>
                    
                    <th>cod_ext</th>
                    
                    <th>created_at</th>
                    
                    <th>updated_at</th>
                    
                    
                    
                    <th>nome</th>
                    
                    <th>created_at</th>
                    
                    <th>updated_at</th>
                    
                    
                    
                    <th>nome</th>
                    
                    <th>cep</th>
                    
                    <th>distrito</th>
                    
                    <th>bairro</th>
                    
                    <th>logradouro</th>
                    
                    <th>numero</th>
                    
                    <th>complemento</th>
                    
                    <th>fone</th>
                    
                    <th>cel1</th>
                    
                    <th>cel2</th>
                    
                    <th>email</th>
                    
                    <th>cpf</th>
                    
                    <th>rg</th>
                    
                    <th>expedicao_rg</th>
                    
                    <th>data_nascimento</th>
                    
                    <th>nome_mae</th>
                    
                    <th>nome_pai</th>
                    
                    <th>created_at</th>
                    
                    <th>updated_at</th>
                    
                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach($funcionarios as $Funcionario)
                    <tr>
                        
                        <td>{{$Funcionario->usuario}}</td>
                        
                        <td>{{$Funcionario->vinculo}}</td>
                        
                        <td>{{$Funcionario->status_funcionario}}</td>
                        
                        
                        
                                                <td>{{$Funcionario->siem->siem}}</td>

                                                <td>{{$Funcionario->siem->escola_nome}}</td>

                                                <td>{{$Funcionario->siem->escola_tipo}}</td>

                                                <td>{{$Funcionario->siem->cod_ext}}</td>

                                                <td>{{$Funcionario->siem->created_at}}</td>

                                                <td>{{$Funcionario->siem->updated_at}}</td>

                        
                        
                                                <td>{{$Funcionario->ocupacao->nome}}</td>

                                                <td>{{$Funcionario->ocupacao->created_at}}</td>

                                                <td>{{$Funcionario->ocupacao->updated_at}}</td>

                        
                        
                                                <td>{{$Funcionario->pessoa->nome}}</td>

                                                <td>{{$Funcionario->pessoa->cep}}</td>

                                                <td>{{$Funcionario->pessoa->distrito}}</td>

                                                <td>{{$Funcionario->pessoa->bairro}}</td>

                                                <td>{{$Funcionario->pessoa->logradouro}}</td>

                                                <td>{{$Funcionario->pessoa->numero}}</td>

                                                <td>{{$Funcionario->pessoa->complemento}}</td>

                                                <td>{{$Funcionario->pessoa->fone}}</td>

                                                <td>{{$Funcionario->pessoa->cel1}}</td>

                                                <td>{{$Funcionario->pessoa->cel2}}</td>

                                                <td>{{$Funcionario->pessoa->email}}</td>

                                                <td>{{$Funcionario->pessoa->cpf}}</td>

                                                <td>{{$Funcionario->pessoa->rg}}</td>

                                                <td>{{$Funcionario->pessoa->expedicao_rg}}</td>

                                                <td>{{$Funcionario->pessoa->data_nascimento}}</td>

                                                <td>{{$Funcionario->pessoa->nome_mae}}</td>

                                                <td>{{$Funcionario->pessoa->nome_pai}}</td>

                                                <td>{{$Funcionario->pessoa->created_at}}</td>

                                                <td>{{$Funcionario->pessoa->updated_at}}</td>

                        
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/funcionario/{{$Funcionario->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/funcionario/{{$Funcionario->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/funcionario/{{$Funcionario->id}}'><i class = 'material-icons'>info</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class = 'AjaxisModal'>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script> var baseURL = "{{URL::to('/')}}"</script>
<script src = "{{ URL::asset('js/AjaxisBootstrap.js')}}"></script>
<script src = "{{ URL::asset('js/scaffold-interface-js/customA.js')}}"></script>
</html>
