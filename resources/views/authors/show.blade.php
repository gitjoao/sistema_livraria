@extends('layout.layout')

@section('content')

<div class="col-md-12">
	<div class="box box-solid">
		<div class="box box-primary box-solid">
			<div class="box-header">
				<h3 class="box-title"> 
					Visualização do Autor
				</h3>
				<br>
			</div>
		</div>		
		<div class="box-header with-border">
			<h3 class="box-title">Dados do Autor</h3>
		</div>
		<div class="box-body">
			<div class="row">
				<div class="form-group col-md-6 col-xs-12">
					{{Form::label('Nome: ') }}
					{{$author->name}}
					<br/>
					{{Form::label('Idade: ') }}
					{{$author->age}}
					
				</div>
			</div>
		</div>
		<div class="box-body">
			<div class="row">   
				<div class="col-md-2 col-xs-6 pull-right">
					<a href="{{route('authors.list')}}" class = 'btn btn-danger btn-block'><i class="fa fa-times" aria-hidden="true"></i> Voltar</a>
				</div>
			</div>
		</div>  
	</form>		
</div>
</div>
@endsection