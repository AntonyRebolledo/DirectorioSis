@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="row float-right" >
            <a href="{{url('/personas')}} " class="btn btn-danger ">Regresar</a>
    </div>
    
</div>

<br>
<div class="container-fluid">
<form action=" {{url('Graficas')}} " method="post" enctype="multipart/form-data">
    @csrf
        <div class="col-md-12">
            <label for="bday">Escriba la fecha para Generar un Reporte</label>
           <input type="date" id=bday value="" name="date" width="500">

            
            <input type="submit" value="enviar" class="btn btn-success ">
        </ddiv>
        <br>
        <div class="container-fluid">
            
        </div>
    </form>

    

</div>

<!--
<div class="container">
    <div class="content">
        <div class="panel panel-default">
            <div class="col-md-8 col-md-offset-8">
                <form action="{{url('pdf/index')}} " method="post" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                    
                    <div class="input-group">
                            <label for="date">Escriba la fecha para Generar un Reporte</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" class="form-control datepicker" name="date">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-default btn-primary">Enviar</button>

            </form>
            </div>
        </div>

    </div>
    
</div>
<script>
    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        lenguage: "es",
        autoClose: true
    });
</script>

-->



@endsection
