@extends('layouts.app')
@section('content')


<div class="container">
  <div class="row">
    <div class="col-3">
      <img src="https://criminalia.es/wp-content/uploads/2015/09/El-asesinato-de-Martin-Luther-King.jpg" style="width:300px; height: 300px;" class="rounded-circle" alt="">
    </div>
    <div class="col-9 text-right align-self-center ">
       <h1>IGLESIA PENTECOSTAL NAZARETH</h1></hr>
    </div>
  </div><br/>
  <div class="row">
    <div class="col-4">
      <div class="card text-light o-hidden h-100" style="background: rgb(28, 95, 209)">
        <a class="card-footer text-dark " href="#">
          <span class="float-left text-light">Mis Datos</span>
        </a>
      </div>
    </div>
    <div class="col-4">
      <div class="card text-light o-hidden h-100" style="background: rgb(28, 95, 209)">
        <a class="card-footer text-dark" href="{{url('/biblioteca')}}">
          <span class="float-left text-light">Click para ir a Biblioteca</span>
        </a>
        <div class="card-body">
          <div class="display-4 text-center">Biblioteca</div>
        </div>
      </div>
    </div>
    <div class="col-4">
    <div class="card text-light o-hidden h-100" style="background:rgb(28, 95, 209)">
        <a class="card-footer text-dark " href="http://127.0.0.1:8000/events">
          <span class="float-left text-light">Click para ir a calendario</span>
        </a>
        <div class="card-body">
          <div class="display-4 text-center">Calendario</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
