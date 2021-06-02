@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        
                    @endif
                    <div class="col-auto text-center">
                        <div class="card">
                        @foreach($datosUser as $dUser)
                        <img class="card-img-top" src="/img/we.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">{{$dUser['name']}}</h4>
                                <p class="card-text">correo: {{$dUser['email']}}</p>
                                <br><br>
                                <a href="#" class="btn btn-primary">cambiar foto de perfil</a>
                            </div>
                        @endforeach                            
                        </div> 
                </div>
                                
            </div>            
        </div>
    </div>
</div>
@endsection