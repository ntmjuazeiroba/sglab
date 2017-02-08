@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit upload_csv
    </h1>
    <form method = 'get' action = '{!!url("upload_csv")!!}'>
        <button class = 'btn btn-danger'>upload_csv Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("upload_csv")!!}/{!!$upload_csv->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="ano">ano</label>
            <input id="ano" name = "ano" type="text" class="form-control" value="{!!$upload_csv->
            ano!!}"> 
        </div>
        <div class="form-group">
            <label for="simulado">simulado</label>
            <input id="simulado" name = "simulado" type="text" class="form-control" value="{!!$upload_csv->
            simulado!!}"> 
        </div>
        <div class="form-group">
            <label for="nivel">nivel</label>
            <input id="nivel" name = "nivel" type="text" class="form-control" value="{!!$upload_csv->
            nivel!!}"> 
        </div>
        <div class="form-group">
            <label>siems Select</label>
            <select name = 'siem_id' class = "form-control">
                @foreach($siems as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection