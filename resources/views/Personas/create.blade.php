@extends('admin.layout')

 @section('content')
     
<div class="container">

<form action="{{url('/personas')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        
            <div class="col-md-4">
                <div class="form-group">
                    <label for="Nombre" class="control-label">{{__('Nombre')}}</label>
                    <input class="form-control" type="text" name="nombre" id="nombre">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="ApellidoPaterno" class="control-label">{{__('ApellidoPaterno')}}</label>
                    <input class="form-control" type="text" name="apellido_paterno" id="apellido_paterno">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="ApellidoMaterno" class="control-label">{{__('ApellidoMaterno')}}</label>
                    <input class="form-control" type="text" name="apellido_materno" id="apellido_materno">
                </div>
            </div>
    </div>
    {{-- </div> --}}
    <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Cargo" class="control-label">{{__('Cargo')}}</label>
                    <input class="form-control" type="text" name="cargo" id="cargo">
                </div>
            </div>
            <div class="col-md-6">   
                <div class="form-group">
                    <label for="Correo" class="control-label">{{__('Correo')}}</label>
                    <input  class="form-control" type="email" name="correo" id="correo">
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="Direccion" class="control-label">{{__('Direccion')}}</label>
                <input class="form-control" type="text" name="direccion" id="direccion">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="Telefono" class="control-label">{{__('Telefono')}}</label>
                <input class="form-control" type="text" name="telefono" id="telefono">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="Cumpleaños" class="control-label">{{__('Cumpleaños')}}</label>
                <input class="form-control" type="text" name="cumpleaños" id="cumpleaños">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="Celular" class="control-label">{{__('Celular')}}</label>
                <input class="form-control" type="text" name="celular" id="celular">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="SecPartNombre" class="control-label">{{__('SecPartNombre')}}</label>
                <input class="form-control" type="text" name="sec_part_nombre" id="sec_part_nombre">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="SecPartTelefono" class="control-label">{{__('SecPartTelefono')}}</label>
                <input class="form-control" type="text" name="sec_part_telefono" id="sec_part_telefono">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="SecPartCorreo" class="control-label">{{__('SecPartCorreo')}}</label>
                <input class="form-control" type="text" name="sec_part_correo" id="sec_part_correo">
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                <label for="SecPartCorreo" class="control-label">{{__('Seleccione Puesto')}}</label>
                <br>
                <select name="puesto_id" id="puesto_id">
                    <option value="null" selected disabled><---Seleccione una Opción--></option>
                    @forelse ($puesto as $item)
                        <option value="{{$item->id}}">{{$item->puesto_personal}}</option>
                    @empty
                        
                    @endforelse
                </select>
                </div>
            </div>      
            <div class="col-md-6">
                <div class="form-group">
                <label for="Foto" class="control-label">{{__('Foto')}}</label>
                <input class="form-control" type="file" name="foto" id="foto">
                </div>
            </div>

        </div>


<input type="submit" value="Agregar" class="btn btn-success">
<a class="btn btn-primary" href="{{url('personas')}}">Regresar</a>

</form>
</div>
@endsection