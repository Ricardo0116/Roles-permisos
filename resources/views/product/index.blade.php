<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	@role('admin')

	<a class="btn btn-success m-3" href="{{url('products/create')}}">Nuevo Producto</a>
@endrole
	<a href="{{route('dashboard')}}" class="btn btn-danger m-3">Ir a Dashboard</a>


	<div class="row-">
		<div class="col-md-12">
			<div class="table-responsive-">
				<table class="table">
					<thead>
						<tr>
							<th>id</th>
							<th>nombre</th>
							<th>precio</th>
							<th>categoria</th>
							<th>fecha de creación</th>
							<th>fecha de actualización</th>
							<th>acciones</th>
						</tr>
					</thead>
					<tbody>
					@foreach($products as $product)
						<tr>
							<td>{{$product->id}}</td>
							<td>{{$product->name}}</td>
							<td>{{$product->precio}}</td>
							<td>{{$product->categoria}}</td>
							<td>{{$product->created_at}}</td>
							<td>{{$product->updated_at}}</td>
							<td>
								<form action="{{route('products.destroy', $product->id)}}" method="post">
									@csrf
									@method('DELETE')

									@role('admin')
									<button class="btn m-2" type="submit">				
										<img src="img/eliminar.png" alt="eleminar">
									</button>
									@endrole()
									@role('admin')
									<a href="{{route('products.edit', $product->id)}}" class="btn m-2">
										<img src="img/actualizar.png" alt="actualizar">				
									</a>
									@endrole()
									@role('client')
									<a href="{{route('products.show', $product->id)}}" class="btn m-2">
										<img src="img/informacion.png" alt="detalles">

									</a>
									@endrole

								</form>
							</td>
						</tr>
					@endforeach()
					</tbody>
				</table>
			</div>
		</div>
	</div>
<footer></footer>
</body>
</html>