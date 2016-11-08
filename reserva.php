<div class="form">
	<form action="?page=1" method="post">
		<p>RESERVA TU MESA</p>
		<div class="clearfix">
			<div class="col2">
				<input type="date" name="dia" min="<? echo date('Y-m-d');?>">
				<label for="dia">Selecciona el dia</label>
			</div>
			<div class="col2 nomr">
				<span id="error_personas" class="none hidden">Debe elegir un número de personas</span>
				<input type="number" name="personas" id="num_personas" min="1" max="30">
				<label for="personas">Cantidad de personas</label>
			</div>
		</div>
		<div class="clearfix">
			<div class="col2">
				<div class="col2">
					<input type="radio" name="diafranja" value="dia" onclick="hide_hora();">Dia completo
				</div>
				<div class="col2 nomr">
					<input type="radio" name="diafranja" checked="checked" id="franja" onclick="show_hora();">Franja horaria
				</div>
			</div>
			<div class="col2 nomr" id="diafranja">
				<div class="col2">
					<input type="time" min="12:00" max="22:00" value="13:30" name="horamin" id="hora_min">
					<label for="horamin">Desde</label>
				</div>
				<div class="col2 nomr">
					<input type="time" min="13:00" max="1:00" value="15:00" name="horamax" id="hora_max">
					<label for="horamax">Hasta</label>
				</div>
			</div>
		</div>
		<div class="clearfix">
			<div class="col2">
				<p>¿Alguna alergia?</p>
				<div class="col2">
					<input type="checkbox" id="gluten">Gluten
				</div>
				<div class="col2">
					<input type="checkbox" id="otros" onclick="hide_show_alerg();">Otros
				</div>				
			</div>
			<div class="col2 hidden" id="alerg">
				<p>Selecciona alimentos</p>
				<select name="alerg" id="alerg_list" size="4" multiple>
					<option value="cacahuetes">Cacahuetes</option>
					<option value="marisco">Marisco</option>
					<option value="lactosa">Lactosa</option>
					<option value="tomate">Tomate</option>
				</select>
				<span id="error_select" class="none hidden">Debe elegir algún alimento</span>
			</div>
		</div>
		<div>
			<p>Déjenos una nota si lo desea</p>
			<textarea name="nota" id="nota" cols="20" rows="5"></textarea>
		</div>
		<div>
			<input type="submit" value="Enviar" onclick="return(reserva());">
		</div>
	</form>
</div>