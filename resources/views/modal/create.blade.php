
<html lang="en">
    <head>

<script>
   $('#meuModal').on('shown.bs.modal', function () {
     $(this).removeData('bs.modal');
   });
</script>

    </head>
    <body>

    <br>
    <form method = 'POST' action = '{!!url("modal")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <table align="center" width="500px" border="0" style="border-collapse:collapse" cellpadding="5">

<tr>
<td align="center">
<label >Selecione Ano:</label><br>
{!! Form::select('ano',  Config::get('enums.ano')) !!}</p>
</td>
</tr>

<tr>
<td align="center">
<label >Selecione Simulado:</label><br>
{!! Form::select('simulado',  Config::get('enums.simulado')) !!}</p>
</td>
</tr>

<tr>
<td align="center">
<label >Selecione Nível:</label><br>
{!! Form::select('nivel',  Config::get('enums.nivelSim')) !!}</p>
</td>
</tr>

<tr>
<td align="center">
 
<label >Selecione Escola:</label><br>
<select name = 'codsiem' class = 'form-control' id = "select20" >
          <option value="codsiem">Todas as Escolas</option>
          @foreach($siems as $key => $value)
          <option value="{{$key}}">{{$value}}</option>
          @endforeach 
</select></p>
</td>
</tr> 

</table>
<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancelar</button>
			<button type="submit" class="btn btn-primary">Gerar Relatório</button>
		</div>
		</div>
</form>

</div>

</body>
<script> var baseURL = "{{URL::to('/')}}"</script>
            <script src="http://7miguelsilva7.000webhostapp.com/sglab/js/select2.js"></script>