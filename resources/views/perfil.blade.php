


	<div class="columns">
		<div class="column is-10 is-offset-1">
			<table class="table is-striped">

				<thead>
					<tr>
						<th>id</th>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Telefono</th>
						<th>Edit</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<th>{{$users->id}}</th>
						<th>{{$users->nombre}}</th>
						<th>{{$users->correo}}</th>
						<th>{{$users->telefono}}</th>
						<th>
							<a href="{{ url('/edit/' . $users->id )}}">Edit user</a>
						</th>
					</tr>
				</tbody>

			</table>

			<div>
				<a href=" {{ url('/usuarios')}} ">View all users</a>		
			</div>
			<a href=" {{ url('/users/create')}} ">Create a new user</a>

		</div>
	</div>

	
