


	<div class="columns">
		<div class="column is-10 is-offset-1">
			<table class="table is-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Telefono</th>
						<th>Profile</th>
						<th>Destroy</th>
					</tr>
				</thead>

				<tbody>
					@foreach($users as $user)
						<tr>

								<th>
									{{ $user->id }}
								</th>

								<th>
									{{ $user->nombre }}
								</th>

								<th>
									{{ $user->correo }}
								</th>

								<th>
									{{ $user->telefono }}
								</th>

								<th>
									<a href="/perfil/ {{ $user->id}}">View Profile</a>
								</th>

								<th>

									<form action="/users/{{$user->id}}" method="post">

										{{ csrf_field() }}
								    {{ method_field('DELETE') }}		
								    <a href=" {{ url('/usuarios')}} ">								
										<button class="button is-small is-danger" >X</button>
									</a>
									</form>

								</th>

						</tr>
					@endforeach					
				</tbody>
			</table>

			<a href="{{ url('users/create') }}">Create new user</a>

		</div>
	</div>
	
