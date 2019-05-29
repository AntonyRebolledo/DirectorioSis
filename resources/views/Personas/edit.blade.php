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
        <input class="form-control" type="text" name="apellido_paterno" id="apellido_paterno" value="{{$persona->apellido_paterno}}">
</div>
<div class="form-group">
        <label class="control-label" for="ApellidoMaterno">{{'ApellidoMaterno'}}</label>
        <input class="form-control" type="text" name="apellido_materno" id="apellido_materno" value="{{$persona->apellido_materno}}">
</div>
<div class="form-group">
        <label class="control-label" for="Correo" >{{'Correo'}}</label>
        <input class="form-control" type="email" name="correo" id="correo" value="{{$persona->correo}}">
</div>
<div class="form-group">
        <label class="control-label" for="Direccion">{{'Direccion'}}</label>
        <input class="form-control" type="text" name="direccion" id="direccion" value="{{$persona->direccion}}">
</div>
<div class="form-group">
        <label class="control-label" for="Telefono">{{'Telefono'}}</label>
        <input class="form-control" type="text" name="telefono" id="telefono" value="{{$persona->telefono}}">
</div>
<div class="form-group">
        <label for="Cumpleaños" class="control-label">{{'Cumpleaños'}}</label>
        <input class="form-control" type="text" name="cumpleaños" id="cumpleaños" value="{{$persona->cumpleaños}}">
    </div>
    <div class="form-group">
        <label for="Celular" class="control-label">{{'Celular'}}</label>
        <input class="form-control" type="text" name="celular" id="celular" value="{{$persona->celular}}">
    </div>
    <div class="form-group">
        <label for="SecPartNombre" class="control-label">{{'SecPartNombre'}}</label>
        <input class="form-control" type="text" name="sec_part_nombre" id="sec_part_nombre" value="{{$persona->sec_part_nombre}}">
    </div>
    <div class="form-group">
        <label for="SecPartTelefono" class="control-label">{{'SecPartTelefono'}}</label>
        <input class="form-control" type="text" name="sec_part_telefono" id="sec_part_telefono" value="{{$persona->sec_part_telefono}}" >
    </div>
    <div class="form-group">
        <label for="SecPartCorreo" class="control-label">{{'SecPartCorreo'}}</label>
        <input class="form-control" type="text" name="sec_part_correo" id="sec_part_correo" value="{{$persona->sec_part_correo}}">
    </div>

<div class="form-group">
        <label class="control-label" for="Foto">{{'Foto'}}</label>
        <br/>
        <img src="{{ asset('storage').'/'. $persona->foto}}" class="img-thumbnail img-fluid" alt="" width="200">
        <br/>
        <input class="form-control" type="file" name="foto" id="foto">
</div>
        <input class="btn btn-success" type="submit" value="Modificar">
        <a class="btn btn-primary" href="{{url('personas')}}">Regresar</a>

</form>
</div>
@endsection