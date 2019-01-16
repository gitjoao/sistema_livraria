@extends('layout.layout')

@section('content')

<div class="col-md-12">
	<div class="box box-solid">
		<div class="box box-primary box-solid">
			<div class="box-header">
				<h3 class="box-title"> 
					Edição de Autor
				</h3>
				<br>
			</div>
		</div>

		@if( isset($errors) && count($errors) > 0 )
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
			<p>{{$error}}</p>
			@endforeach
		</div>
		@endif
		
		<div class="box-header with-border">
			<h3 class="box-title">Dados do Autor</h3>
		</div>
		<div class="box-body">
			<div class="row">
				{!! Form::model($author, ['route'=> ['authors.update', $author->id], 'class' => 'form form-search form-ds', 'method' => 'PUT']) !!}

				<div class="form-group col-md-6 col-xs-12">
					{{Form::label('name','*Nome Completo:')}}
					{{Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Digite o nome do autor'])}}
				</div>

				<div class="form-group col-md-2 col-xs-12">
					{{Form::label('age','*Idade:')}}
					{{Form::text('age', null, ['class' => 'form-control', 'placeholder' => 'Digite a idade do autor'])}}
				</div>
			</div>
		</div>
		<div class="box-body">
			<div class="row">   
				<div class="col-md-2 col-xs-6 pull-right">
					<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-check" aria-hidden="true"></i>Atualizar</button>
				</div>
				<div class="col-md-2 col-xs-6 pull-right">
					<a href="{{route('authors.list')}}" class = 'btn btn-danger btn-block'><i class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
				</div>
			</div>
		</div>  
		{!! Form::close() !!}
	</div>
</div>
@endsection
