
<div class="columns">


		<div class="column is-10 is-offset-1">
			<h1>Editando {{$users->nombre}} </h1>

			<form action="{{"/users/" . $users->id}}" method="post">
				
				{{ csrf_field() }}
		    {{ method_field('PATCH') }}

					<div class="input-field">
						<label class="field">
					
							<input type="text" class="input" name="nombre" value="{{$users->nombre}}">
						</label>						
					</div>
	
					<div class="input-field">
						<label class="field">
							<input type="text" class="input" name="correo" value="{{$users->correo}}">
						</label>						
					</div>
			
					<div class="input-field">
						<label class="field">
							<input type="text" class="input" name="telefono" value="{{$users->telefono}}">
						</label>						
					</div>
			
					<label class="field">
				<a href=" {{ url('/usuarios')}} " class="button is-primary"> 
						EDITAR	
					</a>
					</label>

			</form>	
			<a href=" {{ url('/usuarios')}} ">View all users</a>		
		</div>
	</div>

