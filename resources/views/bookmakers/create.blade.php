 @extends('layout.layout')



 @section('js')

 <script src="{{url('js/Bookmakerjs/create.js')}}"></script>
 <script src="{{url('plugins/input-mask/jquery.inputmask.js')}}"></script>

 <!-- </script> -->
 @endsection
 @section('content')

 <div class="col-md-12">
 	<div class="box box-solid">
 		<div class="box box-primary box-solid">
 			<div class="box-header">
 				<h3 class="box-title"> 		
 					Cadastro de Editora
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
 			<h3 class="box-title">Dados da Editora</h3>
 		</div>
 		<div class="box-body">
 			<div class="row">
 				{!! Form::open(['route'=> 'bookmakers.store', 'class' => 'form form-search form-ds']) !!}

 				<div class="form-group col-md-6 col-xs-12">
 					{{Form::label('name','*Nome Completo:')}}
 					{{Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Informe o nome completo'])}}
 				</div>


 				<div class="form-group col-md-3 col-xs-12">
 					{{Form::label('cep','*CEP:')}}
 					{{Form::text('cep', null, ['class' => 'form-control', 'placeholder' => 'Informe o CEP'])}}
 				</div>

 				<div class="form-group col-md-1 col-xs-12">
 					{{Form::label('state','*Estado:')}}
 					{{Form::text('state', null, ['class' => 'form-control', 'placeholder' => 'Informe o Estado', 'readonly'])}}
 				</div>

 				<div class="form-group col-md-6 col-xs-12">
 					{{Form::label('street','*Rua:')}}
 					{{Form::text('street', null, ['class' => 'form-control', 'placeholder' => 'Informe o Rua', 'readonly'])}}
 				</div>

 				<div class="form-group col-md-6 col-xs-12">
 					{{Form::label('neighborhood','*Bairro:')}}
 					{{Form::text('neighborhood', null, ['class' => 'form-control', 'placeholder' => 'Informe o Bairro', 'readonly'])}}
 				</div>

 				<div class="form-group col-md-6 col-xs-12">
 					{{Form::label('city','*Cidade:')}}
 					{{Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Informe o Cidade', 'readonly'])}}
 				</div>

 				<div class="form-group col-md-2 col-xs-12">
 					{{Form::label('number','*Número:')}}
 					{{Form::text('number', null, ['class' => 'form-control', 'placeholder' => 'Informe o Numero'])}}
 				</div>
 			</div>
 		</div>
 		<div class="box-body">
 			<div class="row">   
 				<div class="col-md-2 col-xs-6 pull-right">
 					<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-check" aria-hidden="true"></i>Cadastrar</button>
 				</div>
 				<div class="col-md-2 col-xs-6 pull-right">
 					<a href="{{route('bookmakers.list')}}" class = 'btn btn-danger btn-block'><i class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
 				</div>
 			</div>
 		</div>  
 		{!! Form::close() !!}	
 	</div>
 </div>
 @endsection
