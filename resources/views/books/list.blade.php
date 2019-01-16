@extends('layout.layout')

@section('css')
<link rel="stylesheet" type="text/css" href="{{url('plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('plugins/datatables/dataTables.bootstrap.css')}}">
@endsection

@section('js')
<script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="{{url('plugins/datatables/extensions/Responsive/js/dataTables.responsive.js')}}"></script>
<script src="{{url('js/Bookjs/index.js')}}"></script>
@endsection

@section('content')

<div class="col-xs-12">
	<div class="box box-solid">
		<div class="box box-primary box-solid">
			<div class="box-header">
				<h3 class="box-title">Lista de Livros</h3>
			</div>
		</div>
		@if(session('success'))
		<div class="alert alert-success">    
			<p>{{session('success')}}</p>
		</div>
		@endif
		@if( isset($errors) && count($errors) > 0 )
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
			<p>{{$error}}</p>
			@endforeach
		</div>
		@endif
		<!-- /.box-header -->
		<div class="box-body">
			<table id="tabelaLivros" class="table table-striped table-bordered responsive">
				<thead>
					<th>Título</th>
					<th>Autor</th>
					<th>Editora</th>
					<th>Ações</th>
				</thead>
				<tbody>
					@foreach($books as $book)
					<tr>
						<td>{{$book->title}}</td>
						<td>{{$book->id_author}}</td>
						<td>{{$book->id_bookmaker}}</td>
						<td>
							<div class="row justify-content-md-center">
								<div class="col col-lg-2">
									<a href="{{route('books.edit', $book->id)}}" class="btn btn-warning btn-circle" data-toggle="tooltip" data-original-title="Editar Livro" ><i class="fa fa-pencil" aria-hidden="true" ></i></a>
								</div>

								<div class="col col-lg-2">					
									<a href="{{route('books.show', $book->id)}}" class="btn btn-info btn-circle" data-toggle="tooltip" data-original-title="Visualizar Livro" ><i class="fa fa-eye" aria-hidden="true" ></i></a>
								</div>
								<div class="col col-lg-2">
									<form class="delete" action="{{ route('books.destroy', $book->id) }}" method="POST">
										{{csrf_field()}}
										<input type="hidden" name="_method" value="delete">

										<button type="submit" class="btn btn-danger btn-circle" data-toggle="tooltip" data-original-title="Excluir Livro"><i class="fa fa-trash" aria-hidden="true"></i></button> 
									</form>
								</div>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

<script>
	$(".delete").on("submit", function(){
		return confirm("ATENÇÃO!! Você tem certeza que deseja excluir esse Livro?");
	});
</script>
@endsection
