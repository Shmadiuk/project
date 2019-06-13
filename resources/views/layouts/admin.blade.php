@extends('layouts.main')
@section('content')
    {{ csrf_field() }}
    <form action="" method="post">
        {{ csrf_field() }}
        <label>Вкажіть нову валюту</label><br>
        <input class="text" type="text" name="wallet" placeholder="Вкажіть валюту"><br>
        <br><button type="submite" class="btn btn-primary">Записати</button>

    </form>
@stop