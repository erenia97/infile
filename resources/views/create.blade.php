

	<div class="columns">
		
		<div class="column is-10 is-offset-1">
			<form action="/users" method="post">
				
				{{ csrf_field() }}

					<div class="input-field">
						<label class="field">
							<input type="text" class="input" name="nombre" placeholder="nombre">
						</label>						
					</div>
	
					<div class="input-field">
						<label class="field">
							<input type="text" class="input" name="correo" placeholder="correo">
						</label>						
					</div>
			
					<div class="input-field">
						<label class="field">
							<input type="text" class="input" name="telefono" placeholder="telefono">
						</label>						
					</div>
			
					<a href=" {{ url('/usuarios')}} " class="button is-primary"> 
						GUARDAR	
					</a>

			</form>	
			<a href=" {{ url('/usuarios')}} ">View all users</a>		
		</div>
	</div>
	