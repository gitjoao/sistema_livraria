 @extends('layout.layout')

 @section('css')
 <link rel="stylesheet" type="text/css" href="{{url('plugins/select2/select2.min.css')}}">
 <link rel="stylesheet" type="text/css" href="{{url('plugins/select2/select2-bootstrap.min.css')}}">
 @endsection

 @section('js')
 <script src="{{url('plugins/select2/select2.min.js')}}"></script>

 <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>

 <script src="{{url('plugins/select2/select2.full.min.js')}}"></script>
 <script src="{{url('plugins/select2/i18n/pt-BR.js')}}"></script>
 <script src="{{url('js/Bookjs/create.js')}}"></script>

 <!-- </script> -->
 @endsection

 @section('content')

 <div class="col-md-12">
 	<div class="box box-solid">
 		<div class="box box-primary box-solid">
 			<div class="box-header">
 				<h3 class="box-title"> 		
 					Cadastro de Livro
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
 			<h3 class="box-title">Dados do Livro</h3>
 		</div>
 		<div class="box-body">
 			<div class="row">
 				{!! Form::open(['route'=> 'books.store', 'class' => 'form form-search form-ds']) !!}


 				<div class="form-group col-md-6 col-xs-12">
					{{Form::label('title','*Título:')}}
					{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Informe o Título'])}}
				</div>

				<div class="form-group col-md-2 col-xs-12">
					{{Form::label('price','*Valor:')}}
					{{Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Informe o Valor'])}}
				</div>

 				<div class="form-group col-md-6 col-xs-12">
 					{{Form::label('id_author','*Autor do livro:')}}
 					{{Form::select('id_author', $authors, null, ['class' => 'form-control select2', 'placeholder' => 'Selecione um autor', 'style' =>"width: 100%;" ])}}
 				</div>

 				<div class="form-group col-md-6 col-xs-12">
 					{{Form::label('id_bookmaker','*Autor do livro:')}}
 					{{Form::select('id_bookmaker', $bookmakers, null, ['class' => 'form-control select2', 'placeholder' => 'Selecione uma editora', 'style' =>"width: 100%;" ])}}
 				</div>		
 			</div>
 		</div>

 		<div class="box-body">
 			<div class="row">   
 				<div class="col-md-2 col-xs-6 pull-right">
 					<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-check" aria-hidden="true"></i>Cadastrar</button>
 				</div>
 				<div class="col-md-2 col-xs-6 pull-right">
 					<a href="{{route('books.list')}}" class = 'btn btn-danger btn-block'><i class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
 				</div>
 			</div>
 		</div>  
 		{!! Form::close() !!}		
 	</div>
 </div>
 @endsection
