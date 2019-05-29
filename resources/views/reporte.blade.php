<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <title>Ejemplo del uso de tablas- aprenderaprogramar.com</title>

        <link href="{{asset('css/style.css')}}" rel="stylesheet">
		
	
		
    </head>
    <body>
    
        <header id="main-header" >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/escudo.png" class="rounded  float-left" width="50px" height="70px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="images/seproci.png" class="rounded float-right" width=150px" height="70px">
        </header>
        
         <!--      Persona Tipo 1          -->
        
        @foreach ($Personas as $P)
        <table align="center" >
            <tr>
            <td colspan="2"  id="negritas">{{$P->nombre}} {{$P->apellido_paterno}} {{$P->apellido_materno}}<br>
				{{$P->cargo}} <br>
				Cumpleaños: {{$P->cumpleaños}}
				</td>
            <td rowspan="3" align="center"> 
                <img src="{{ asset('storage').'/'. $P->foto}}" class="img-thumbnail img-fluid" alt="" width="150">
            </td>
            </tr>
            <tr>
                <td>Celular: <br> </td>
            <td>{{$P->celular}}</td>
            </tr>
            <tr>
                <td>Domicilio:</td>
            <td>{{$P->direccion}}</td>
            </tr>
			<tr>
				<td colspan="3" align="center" >TELÉFONO</td>
			</tr>
			<tr>
                <td>Oficial:</td>
            <td colspan="2">{{$P->telefono}}</td>
            </tr>
			<tr>
                <td>Correo:</td>
                <td colspan="2">{{$P->correo}}</td>
            </tr>
			<tr>
                <td>Secret. Part.:</td>
                <td colspan="2">{{$P->sec_part_nombre}};<br> Cel. {{$P->sec_part_telefono}} <br>
				{{$P->sec_part_correo}}
				</td>
            </tr>
			
        </table>
        <br>
        <br>
        <br>
        
        @endforeach
         <!--      Persona Tipo 2          -->
        <div id="salto_de_linea"></div>
            <div class="content" style="text-align: center">
                <p>Secretarías <br>
                Del Estado <br>
                De<br>
                Campeche</p>
            </div>
            <div id="salto_de_linea"></div>
            @foreach ($Personas2 as $P2)
            
        <table  align="center">
            <tr>
            <td colspan="2" id="negritas">{{$P2->nombre}} {{$P2->apellido_paterno}} {{$P2->apellido_materno}}<br>
				{{$P2->cargo}} <br>
				Cumpleaños: {{$P2->cumpleaños}}
				</td>
            <td rowspan="3" align="center"> 
                <img src="{{ asset('storage').'/'. $P2->foto}}" class="img-thumbnail img-fluid" alt="" width="120">
            </td>
            </tr>
            <tr>
                <td>Celular: <br> </td>
            <td>{{$P2->celular}}</td>
            </tr>
            <tr>
                <td>Domicilio:</td>
            <td>{{$P2->direccion}}</td>
            </tr>
			<tr>
				<td colspan="3" align="center" >TELÉFONO</td>
			</tr>
			<tr>
                <td>Oficial:</td>
            <td colspan="2">{{$P2->telefono}}</td>
            </tr>
			<tr>
                <td>Correo:</td>
                <td colspan="2">{{$P2->correo}}</td>
            </tr>
			<tr>
                <td>Secret. Part.:</td>
                <td colspan="2">{{$P2->sec_part_nombre}};<br> Cel. {{$P2->sec_part_telefono}} <br>
				{{$P2->sec_part_correo}}
				</td>
            </tr>
			
        </table>
        <br>
        <br>
        <br>
        
         <!--      Persona Tipo 3          -->
        @endforeach 

        <div id="salto_de_linea"></div>
            <div class="content" style="text-align: center">
                <p>Oficina  <br>
                del <br>
                Gobernador</p>
            </div>
            <div id="salto_de_linea"></div>
            @foreach ($Personas3 as $P3)
           <br>
        <table align="center">
           
            <tr>
            <td colspan="2" id="negritas" >{{$P3->nombre}} {{$P3->apellido_paterno}} {{$P3->apellido_materno}}<br>
				{{$P3->cargo}} <br>
				Cumpleaños: {{$P3->cumpleaños}}
				</td>
            <td rowspan="3" align="center"> 
                <img src="{{ asset('storage').'/'. $P3->foto}}" class="img-thumbnail img-fluid" alt="" width="150">
            </td>
            </tr>
            <tr>
                <td>Celular: <br> </td>
            <td>{{$P3->celular}}</td>
            </tr>
            <tr>
                <td>Domicilio:</td>
            <td>{{$P3->direccion}}</td>
            </tr>
			<tr>
				<td colspan="3" align="center" >TELÉFONO</td>
			</tr>
			<tr>
                <td>Oficial:</td>
            <td colspan="2">{{$P3->telefono}}</td>
            </tr>
			<tr>
                <td>Correo:</td>
                <td colspan="2">{{$P3->correo}}</td>
            </tr>
			<tr>
                <td>Secret. Part.:</td>
                <td colspan="2">{{$P3->sec_part_nombre}};<br> Cel. {{$P3->sec_part_telefono}} <br>
				{{$P3->sec_part_correo}}
				</td>
            </tr>
			
        </table>
        <br>
        <br>
        <br>
        <br>
        
         <!--      Persona Tipo 4          -->
        @endforeach 

        <div id="salto_de_linea"></div>
            <div class="content" style="text-align: center">
                <p>Directores  <br>
                Estatales <br>
                &<br>
                Federales</p>
            </div>
            <div id="salto_de_linea"></div>
            @foreach ($Personas4 as $P4)
           <br>
        <table align="center" >
           
            <tr>
            <td colspan="2" id="negritas" >{{$P4->nombre}} {{$P4->apellido_paterno}} {{$P4->apellido_materno}}<br>
				{{$P4->cargo}} <br>
				Cumpleaños: {{$P4->cumpleaños}}
				</td>
            <td rowspan="3" align="center"> 
                <img src="{{ asset('storage').'/'. $P4->foto}}" class="img-thumbnail img-fluid" alt="" width="120">
            </td>
            </tr>
            <tr>
                <td>Celular: <br> </td>
            <td>{{$P4->celular}}</td>
            </tr>
            <tr>
                <td>Domicilio:</td>
            <td>{{$P4->direccion}}</td>
            </tr>
			<tr>
				<td colspan="3" align="center" >TELÉFONO</td>
			</tr>
			<tr>
                <td>Oficial:</td>
            <td colspan="2">{{$P4->telefono}}</td>
            </tr>
			<tr>
                <td>Correo:</td>
                <td colspan="2">{{$P4->correo}}</td>
            </tr>
			<tr>
                <td>Secret. Part.:</td>
                <td colspan="2">{{$P4->sec_part_nombre}};<br> Cel. {{$P4->sec_part_telefono}} <br>
				{{$P4->sec_part_correo}}
				</td>
            </tr>
			
        </table>
        <br>
        <br>
        <br>
        <br>
        
        @endforeach 

            <!--      Persona Tipo 5          -->

            <div id="salto_de_linea"></div>
            <div class="content" style="text-align: center">
                <p>Directores  <br>
                Universidades  <br>
                Y<br>
               Tecnológicos</p>
            </div>
            <div id="salto_de_linea"></div>
            @foreach ($Personas5 as $P5)
           <br>
        <table align="center">
           
            <tr>
            <td colspan="2" id="negritas" ><p>{{$P5->nombre}} {{$P5->apellido_paterno}} {{$P5->apellido_materno}}</p><br>
				{{$P5->cargo}} <br>
				Cumpleaños: {{$P5->cumpleaños}}
				</td>
            <td rowspan="3" align="center"> 
                <img src="{{ asset('storage').'/'. $P5->foto}}" class="img-thumbnail img-fluid" alt="" width="120">
            </td>
            </tr>
            <tr>
                <td>Celular: <br> </td>
            <td>{{$P5->celular}}</td>
            </tr>
            <tr>
                <td>Domicilio:</td>
            <td>{{$P5->direccion}}</td>
            </tr>
			<tr>
				<td colspan="3" align="center" >TELÉFONO</td>
			</tr>
			<tr>
                <td>Oficial:</td>
            <td colspan="2">{{$P5->telefono}}</td>
            </tr>
			<tr>
                <td>Correo:</td>
                <td colspan="2">{{$P5->correo}}</td>
            </tr>
			<tr>
                <td>Secret. Part.:</td>
                <td colspan="2">{{$P5->sec_part_nombre}};<br> Cel. {{$P5->sec_part_telefono}} <br>
				{{$P5->sec_part_correo}}
				</td>
            </tr>
			
        </table>
        <br>
        <br>
        <br>
        <br>
        
        @endforeach 
        <!-- Personal Tipo 6    -->

            <div id="salto_de_linea"></div>
            <div class="content" style="text-align: center">
                <p>Delegados  <br>
                Estatales  <br>
                &<br>
                Federales</p>
            </div>
            <div id="salto_de_linea"></div>
            @foreach ($Personas6 as $P6)
        <br>
        <table align="center" >
        
            <tr>
            <td colspan="2" id="negritas">{{$P6->nombre}} {{$P6->apellido_paterno}} {{$P6->apellido_materno}}<br>
                {{$P6->cargo}} <br>
                Cumpleaños: {{$P6->cumpleaños}}
                </td>
            <td rowspan="3" align="center"> 
                <img src="{{ asset('storage').'/'. $P6->foto}}" class="img-thumbnail img-fluid" alt="" width="120">
            </td>
            </tr>
            <tr>
                <td>Celular: <br> </td>
            <td>{{$P6->celular}}</td>
            </tr>
            <tr>
                <td>Domicilio:</td>
            <td>{{$P6->direccion}}</td>
            </tr>
            <tr>
                <td colspan="3" align="center" >TELÉFONO</td>
            </tr>
            <tr>
                <td>Oficial:</td>
            <td colspan="2">{{$P6->telefono}}</td>
            </tr>
            <tr>
                <td>Correo:</td>
                <td colspan="2">{{$P6->correo}}</td>
            </tr>
            <tr>
                <td>Secret. Part.:</td>
                <td colspan="2">{{$P6->sec_part_nombre}};<br> Cel. {{$P6->sec_part_telefono}} <br>
                {{$P6->sec_part_correo}}
                </td>
            </tr>
            
        </table>
        <br>
        <br>
        <br>
        <br>
        
        @endforeach 
    <!--  Persona Tipo 7   -->

            <div id="salto_de_linea"></div>
            <div class="content" style="text-align: center">
                <p>Marina <br>
                Sedena <br>
                Policía Federal</p>
            </div>
            <div id="salto_de_linea"></div>
            @foreach ($Personas7 as $P7)
        <br>
        <table align="center" >
        
            <tr>
            <td colspan="2" id="negritas">{{$P7->nombre}} {{$P7->apellido_paterno}} {{$P7->apellido_materno}}<br>
                {{$P7->cargo}} <br>
                Cumpleaños: {{$P7->cumpleaños}}
                </td>
            <td rowspan="3" align="center"> 
                <img src="{{ asset('storage').'/'. $P7->foto}}" class="img-thumbnail img-fluid" alt="" width="120">
            </td>
            </tr>
            <tr>
                <td>Celular: <br> </td>
            <td>{{$P7->celular}}</td>
            </tr>
            <tr>
                <td>Domicilio:</td>
            <td>{{$P7->direccion}}</td>
            </tr>
            <tr>
                <td colspan="3" align="center" >TELÉFONO</td>
            </tr>
            <tr>
                <td>Oficial:</td>
            <td colspan="2">{{$P7->telefono}}</td>
            </tr>
            <tr>
                <td>Correo:</td>
                <td colspan="2">{{$P7->correo}}</td>
            </tr>
            <tr>
                <td>Secret. Part.:</td>
                <td colspan="2">{{$P7->sec_part_nombre}};<br> Cel. {{$P7->sec_part_telefono}} <br>
                {{$P7->sec_part_correo}}
                </td>
            </tr>
            
        </table>
        <br>
        <br>
        <br>
        <br>

        @endforeach 

<!--   Persona Tipo 8 -->
        <div id="salto_de_linea"></div>
        <div class="content" style="text-align: center">
            <p>Directores Generales  <br>
            Cordinadores  <br>
            Y <br>
            Otros</p>
        </div>
        <div id="salto_de_linea"></div>
        @foreach ($Personas8 as $P8)
        <br>
        <table align="center" >

        <tr>
        <td colspan="2" id="negritas" >{{$P8->nombre}} {{$P8->apellido_paterno}} {{$P8->apellido_materno}}<br>
            {{$P8->cargo}} <br>
            Cumpleaños: {{$P8->cumpleaños}}
            </td>
        <td rowspan="3" align="center"> 
            <img src="{{ asset('storage').'/'. $P8->foto}}" class="img-thumbnail img-fluid" alt="" width="120">
        </td>
        </tr>
        <tr>
            <td>Celular: <br> </td>
        <td>{{$P8->celular}}</td>
        </tr>
        <tr>
            <td>Domicilio:</td>
        <td>{{$P8->direccion}}</td>
        </tr>
        <tr>
            <td colspan="3" align="center" >TELÉFONO</td>
        </tr>
        <tr>
            <td>Oficial:</td>
        <td colspan="2">{{$P8->telefono}}</td>
        </tr>
        <tr>
            <td>Correo:</td>
            <td colspan="2">{{$P8->correo}}</td>
        </tr>
        <tr>
            <td>Secret. Part.:</td>
            <td colspan="2">{{$P8->sec_part_nombre}};<br> Cel. {{$P8->sec_part_telefono}} <br>
            {{$P8->sec_part_correo}}
            </td>
        </tr>

        </table>
        <br>
        <br>
        <br>
        <br>

        @endforeach 

    </body>
</html>