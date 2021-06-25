@extends('layouts.app')

@section('content')
    <div class="container">
            <table class="table table-striped table-bordered table-hover table-light" >
            <thead class="thead-dark">
                    <tr>
                        <th>Nro</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Cargo</th>                 
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <?php $contador = 0?>
                @foreach($datosUserAdm as $user)
                    <?php $contador++ ?>
                    <tr>
                        <td class='tabla_celda'>{{$contador}}</td>
                        <td class='tabla_celda'>{{$user['name']}}</td>
                        <td class='tabla_celda'>{{$user['email']}}</td>
                        <td class='tabla_celda_text'>{{$user['cargo']}}</td>
                        <td class='tabla_celda-adm'>
                        
                        @if($user['estado']=='Activo')
                                <form method='post' action='/pguardado-I'>
                                    @csrf
                                    <input type='hidden' name='id' value='{{$user['id']}}'>
                                    <button type="submit" class="btn btn-success" value='Activo'>Activo</button>
                                </form>
                            @else
                                <form method='post' action='/pguardado-A'>
                                    @csrf
                                    <input type='hidden' name='id' value='{{$user['id']}}'>
                                    <button type="submit" class="btn btn-danger" value='Inactivo'>Inactivo</button>
                                </form>
                        @endif
                            
                        </td>
                    </tr>
                @endforeach
            </table>
    </div>
@endsection



