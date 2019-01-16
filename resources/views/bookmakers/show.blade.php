@extends('layout.layout')

@section('content')

<div class="col-md-12">
	<div class="box box-solid">
		<div class="box box-primary box-solid">
			<div class="box-header">
				<h3 class="box-title"> 
					Visualização da Editora
				</h3>
				<br>
			</div>
		</div>
		
		<div class="box-header with-border">
			<h3 class="box-title">Dados da Editora</h3>
		</div>
		<div class="box-body">
			<div class="row">
				<div class="form-group col-md-6 col-xs-12">
					{{Form::label('Nome: ') }}
					{{$bookmaker->name}}
					<br/>
					{{Form::label('CEP: ') }}
					{{$bookmaker->cep}}
					<br/>
					{{Form::label('Rua: ') }}
					{{$bookmaker->street}}
					<br/>
					{{Form::label('Número: ') }}
					{{$bookmaker->number}}
					<br/>
					{{Form::label('Bairro: ') }}
					{{$bookmaker->neighborhood}}
					<br/>
					{{Form::label('Cidade: ') }}
					{{$bookmaker->city}}
					<br/>
					{{Form::label('Estado: ') }}
					{{$bookmaker->state}}
					
				</div>
			</div>
		</div>
		<div class="box-body">
			<div class="row">   
				<div class="col-md-2 col-xs-6 pull-right">
					<a href="{{route('bookmakers.list')}}" class = 'btn btn-danger btn-block'><i class="fa fa-times" aria-hidden="true"></i> Voltar</a>
				</div>
			</div>
		</div>  
	</form>		
</div>
</div>
@endsection