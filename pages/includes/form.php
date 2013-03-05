<script>
function enviaMail(){
	if (document.getElementById('txtNombre').value == '' || document.getElementById('txtCiudad').value == '' || document.getElementById('txtEstado').value == '0' || document.getElementById('txtPais').value == '' || document.getElementById('txtTel').value == '' || document.getElementById('txtEmail').value == '' ) {
		alert("Por favor, ingresa todos los campos marcados como obligatorios, puedes identificarlos por el signo: *");
	} else {
	$.get(
		'../includes/enviacorreo.php',
		{
			txtNombre : document.getElementById('txtNombre').value,
			txtCiudad : document.getElementById('txtCiudad').value,
			txtEstado : document.getElementById('txtEstado').value,
			txtCP : document.getElementById('txtCP').value,	
			txtPais : document.getElementById('txtPais').value,
			txtTel : document.getElementById('txtTel').value,
			txtEmail : document.getElementById('txtEmail').value,
			txtHotel : document.getElementById('txtHotel').value,
			txtPersonas : document.getElementById('txtPersonas').value,
			txtFechaLlegada : document.getElementById('txtFechaLlegada').value,
			txtFechaSalida : document.getElementById('txtFechaSalida').value,
			txtTipoHabitacion1 : document.getElementById('txtTipoHabitacion1').value,
			txtNumCuartos1 : document.getElementById('txtNumCuartos1').value,
			txtTipoHabitacion2 : document.getElementById('txtTipoHabitacion2').value,
			txtNumCuartos2 : document.getElementById('txtNumCuartos2').value,
			txtTipoHabitacion3 : document.getElementById('txtTipoHabitacion3').value,
			txtNumCuartos3 : document.getElementById('txtNumCuartos3').value,
			txtComentarios : document.getElementById('txtComentarios').value
		},
		function success(data) {
			$(".msjCorreoEnviado").html(data);
			document.getElementById("ocultaForma").style.display = 'none';
		}
	);
	}
}
</script>

<div class="msjCorreoEnviado"></div>
<div id="ocultaForma">
<form id="form" name="form" method="post" >
	
	<div class="row">
		<label>Nombre/Name*</label>
		<input type="text" name="txtNombre" id="txtNombre" >
	</div>
	
	<div class="row">
		<label>Ciudad/City*</label>
		<input type="text" name="txtCiudad" id="txtCiudad" >
	</div>
	
	<div class="row">
		<label>Estado/State*</label>
		<select name="txtEstado" id="txtEstado">
		<option value="0" >Seleccione su estado</option>
		<option value="Fuera de Mexico">Fuera de México/Outside Mexico</option>
		<option value="Aguascalientes" >Aguascalientes</option>
		<option value="Baja California" >Baja California</option>
		<option value="Baja California Sur" >Baja California Sur</option>
		<option value="Campeche" >Campeche</option>
		<option value="Coahuila" >Coahuila</option>
		<option value="Colima" >Colima</option>
		<option value="Chiapas" >Chiapas</option>
		<option value="Chihuahua" >Chihuahua</option>
		<option value="Distrito Federal" >Distrito Federal</option>
		<option value="Durango" >Durango</option>
		<option value="Guanajuato" >Guanajuato</option>
		<option value="Guerrero" >Guerrero</option>
		<option value="Hidalgo" >Hidalgo</option>
		<option value="Jalisco" >Jalisco</option>
		<option value="Estado de Mexico" >Estado de México</option>
		<option value="Michoacan" >Michoacán</option>
		<option value="Morelos" >Morelos</option>
		<option value="Nayarit" >Nayarit</option>
		<option value="Nuevo Leon" >Nuevo León</option>
		<option value="Oaxaca" >Oaxaca</option>
		<option value="Puebla" >Puebla</option>
		<option value="Queretaro" >Querétaro</option>
		<option value="Quintana Roo" >Quintana Roo</option>
		<option value="San Luis Potosi" >San Luis Potosí</option>
		<option value="Sinaloa" >Sinaloa</option>
		<option value="Sonora" >Sonora</option>
		<option value="Tabasco" >Tabasco</option>
		<option value="Tamaulipas" >Tamaulipas</option>
		<option value="Tlaxcala" >Tlaxcala</option>
		<option value="Veracruz" >Veracruz</option>
		<option value="Yucatan" >Yucatán</option>
		<option value="Zacatecas" >Zacatecas</option>
		</select>
	</div>
	
	<div class="row">
		<label>CP/Zip Code</label>
		<input type="text" name="txtCP" id="txtCP" >
	</div>
	
	<div class="row">
		<label>País/Country*</label>
		<input type="text" name="txtPais" id="txtPais" >
	</div>
	
	<div class="row">
		<label>Teléfono/Phone*</label>
		<input type="text" name="txtTel" id="txtTel" >
	</div>
	
	<div class="row">
		<label>Email*</label>
		<input type="text" name="txtEmail" id="txtEmail" >
	</div>
	
	<h4>Seleccione el hotel donde quiere hacer la reservación:</h4>
	
	<div class="row">
		<label>Hotel</label>
		<select name="txtHotel" id="txtHotel" >
		<option value="Seleccione su Hotel">Seleccione el Hotel</option>
		<option value="Hotel Mesón del Alférez Xalapa">Hotel Mesón del Alférez Xalapa</option>
		<option value="Hotel Posada del Cafeto">Hotel Posada del Cafeto</option>
		<option value="Hotel Mesón del Alférez Coatepec">Hotel Mesón del Alférez Coatepec</option>
		<option value="Hotel Balcón del Alférez">Hotel Balcón del Alférez</option>
		<option value="Hostal de Niebla">Hostal de Niebla</option>
		</select>
	</div>
	
	<div class="row">
		<label>Personas / Number of travelers </label>
		<select name="txtPersonas" id="txtPersonas">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		</select>
	</div>
	
	<div class="row">
		<label>Fecha de Llegada / Arrival date</label>
		<input type="text" name="txtFechaLlegada" id="txtFechaLlegada" ><small>[dd/mm/año] [dd/mm/year]</small>
	</div>
	
	<div class="row">
		<label>Fecha de Sálida / Check out date</label>
		<input type="text" name="txtFechaSalida" id="txtFechaSalida" ><small>[dd/mm/año] [dd/mm/year]</small>
	</div>
	
	<div class="row">
		<label>Habitación / Room request</label>
		<select name="txtTipoHabitacion1" id="txtTipoHabitacion1" >
		<option value="Sencilla">Sencilla</option>
		<option value="Doble">Doble</option>
		<option value="Junior Suite">Junior Suite</option>
		<option value="Suite">Suite</option>
		<option value="Privada H. Niebla">Privada H. Niebla</option>
		<option value="Compartida H. Niebla">Compartida H. Niebla</option>
		</select>
	</div>
	
	<div class="row">
		<label>Cantidad/Number of rooms</label>
		<select name="txtNumCuartos1" id="txtNumCuartos1" >
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		</select>
	</div>
	<div class="row">
		<p><strong>Si usted requiere más de un tipo de habitación complete los siguientes campos:</strong></p>
	</div>
	<div class="row">
		<label>Habitación / Room request</label>
		<select name="txtTipoHabitacion2" id="txtTipoHabitacion2" >
		<option value="--">--</option>
		<option value="Sencilla">Sencilla</option>
		<option value="Doble">Doble</option>
		<option value="Junior Suite">Junior Suite</option>
		<option value="Suite">Suite</option>
		<option value="Privada H. Niebla">Privada H. Niebla</option>
		<option value="Compartida H. Niebla">Compartida H. Niebla</option>
		</select>
	</div>
	
	<div class="row">
		<label>Cantidad/Number of rooms</label>
		<select name="txtNumCuartos2" id="txtNumCuartos2" >
		<option value="--">--</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		</select>
	</div>
	
	<div class="row">
		<label>Habitación / Room request</label>
		<select name="txtTipoHabitacion3" id="txtTipoHabitacion3" >
		<option value="--">--</option>
		<option value="Sencilla">Sencilla</option>
		<option value="Doble">Doble</option>
		<option value="Junior Suite">Junior Suite</option>
		<option value="Suite">Suite</option>
		<option value="Privada H. Niebla">Privada H. Niebla</option>
		<option value="Compartida H. Niebla">Compartida H. Niebla</option>
		</select>
	</div>
	
	<div class="row">
		<label>Cantidad/Number of rooms</label>
		<select name="txtNumCuartos3" id="txtNumCuartos3" >
		<option value="--">--</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		</select>
	</div>

	
	<div class="row">
		<label>Comentarios</label>
		<textarea name="txtComentarios" id="txtComentarios" ></textarea>
	</div>
	
	<div class="row">
		<input value="Enviar/Send" type="button" onclick="enviaMail();">
	</div>
	
	<div class="row">
		<p>* Datos requeridos para la reservación. </p>
	</div>
	
</form>
</div><!-- Fin del div que oculta la forma -->








