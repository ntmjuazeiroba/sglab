@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Escola</div>
                <div class="panel-body">
            <form method = 'get' action = '{{url("ocupacao")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
  
            <form method = 'POST' action = '{{url("ocupacao")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="nome">nome</label>
                    <input id="nome" name = "nome" type="text" class="form-control">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
@endsection