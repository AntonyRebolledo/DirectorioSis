@extends('admin.layout')

 @section('content')
     
<div class="container">

<form class="form-horizontal" method="post" action="{{url('/personas/'.$persona->id)}}  " enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
<div class="form-group">
        <label for="Nombre" class="control-label" >{{'Nombre'}}</label>
        <input class="form-control" type="text" name="Nombre" id="Nombre" value="{{$persona->nombre}}" >
</div>
<div class="form-group">
        <label for="ApellidoPaterno" class="control-label">{{'ApellidoPaterno'}}</label>
        <input class="form-control" type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{$persona->apellido_paterno}}">
</div>
<div class="form-group">
        <label class="control-label" for="ApellidoMaterno">{{'ApellidoMaterno'}}</label>
        <input class="form-control" type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{$persona->apellido_materno}}">
</div>
<div class="form-group">
        <label class="control-label" for="Correo" >{{'Correo'}}</label>
        <input class="form-control" type="email" name="Correo" id="Correo" value="{{$persona->correo}}">
</div>
<div class="form-group">
        <label class="control-label" for="Direccion">{{'Direccion'}}</label>
        <input class="form-control" type="text" name="Direccion" id="Direccion" value="{{$persona->direccion}}">
</div>
<div class="form-group">
        <label class="control-label" for="Telefono">{{'Telefono'}}</label>
        <input class="form-control" type="text" name="Telefono" id="Telefono" value="{{$persona->telefono}}">
</div>
<div class="form-group">
        <label for="Cumpleaños" class="control-label">{{'Cumpleaños'}}</label>
        <input class="form-control" type="text" name="Cumpleaños" id="Cumpleaños" value="{{$persona->cumpleaños}}">
    </div>
    <div class="form-group">
        <label for="Celular" class="control-label">{{'Celular'}}</label>
        <input class="form-control" type="text" name="Celular" id="Celular" value="{{$persona->celular}}">
    </div>
    <div class="form-group">
        <label for="SecPartNombre" class="control-label">{{'SecPartNombre'}}</label>
        <input class="form-control" type="text" name="SecPartNombre" id="SecPartNombre" value="{{$persona->sec_part_nombre}}">
    </div>
    <div class="form-group">
        <label for="SecPartTelefono" class="control-label">{{'SecPartTelefono'}}</label>
        <input class="form-control" type="text" name="SecPartTelefono" id="SecPartTelefono" value="{{$persona->sec_part_telefono}}" >
    </div>
    <div class="form-group">
        <label for="SecPartCorreo" class="control-label">{{'SecPartCorreo'}}</label>
        <input class="form-control" type="text" name="SecPartCorreo" id="SecPartCorreo" value="{{$persona->sec_part_correo}}">
    </div>

<div class="form-group">
        <label class="control-label" for="Foto">{{'Foto'}}</label>
        <br/>
        <img src="{{ asset('storage').'/'. $persona->foto}}" class="img-thumbnail img-fluid" alt="" width="200">
        <br/>
        <input class="form-control" type="file" name="Foto" id="Foto">
</div>
        <input class="btn btn-success" type="submit" value="Modificar">
        <a class="btn btn-primary" href="{{url('personas')}}">Regresar</a>

</form>
</div>
@endsection