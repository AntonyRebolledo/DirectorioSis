@extends('admin.layout')

 @section('content')
     
<div class="container">
    


@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<br/>
<br/>
<table class="table table-light table-hover" >
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Correo</th>
            
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datos as $personas)           
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>
        <img src="{{ asset('storage').'/'. $personas->foto}}" class="img-thumbnail img-fluid" alt="" width="100">  
        </td>
        <td>{{$personas->nombre}} {{$personas->apellido_paterno}} {{$personas->apellido_materno}}</td>
        <td>{{$personas->correo}}</td>
        
        <td>{{$personas->celular}}</td>
        <td>
        <a class="btn btn-warning" href="{{url('/personas/'.$personas->id.'/edit')}}">Editar</a>
            
        <form method="post" action="{{url('/personas/'.$personas->id)}}" style="display:inline">
            @csrf
            {{method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>
                
            </form>

        </td>

        </tr>
        @endforeach
    </tbody>
</table>
{!! $datos->render() !!}
</div>
@endsection