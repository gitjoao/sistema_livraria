@extends('layout.layout')

@section('content')

<div class="col-md-12">
	<div class="box box-solid">
		<div class="box box-primary box-solid">
			<div class="box-header">
				<h3 class="box-title"> 
					Visualização do Livro
				</h3>
				<br>
			</div>
		</div>
		
		<div class="box-header with-border">
			<h3 class="box-title">Dados do Livro</h3>
		</div>
		<div class="box-body">
			<div class="row">
				<div class="form-group col-md-6 col-xs-12">
					{{Form::label('Título: ') }}	
					{{$book->title}}
					<br/>
					{{Form::label('Autor: ') }}
					{{$book->id_author}}
					<br/>
					{{Form::label('Editora: ') }}
					{{$book->id_bookmaker}}			
				</div>
			</div>
		</div>
		<div class="box-body">
			<div class="row">   
				<div class="col-md-2 col-xs-6 pull-right">
					<a href="{{route('books.list')}}" class = 'btn btn-danger btn-block'><i class="fa fa-times" aria-hidden="true"></i> Voltar</a>
				</div>
			</div>
		</div>  
	</form>		
</div>
</div>
@endsection