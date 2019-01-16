@extends('layout.layout')

@section('content')

<section class="content-header">
	<h1>
		Dashboard
	</h1> 
</section>

<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">

		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-blue">
				<div class="inner">
					<h3>{{ $author }}</h3>
					<p>Autores</p>
				</div>
				<div class="icon">
					<i class="fa fa-user"></i>
				</div>
				<a href="{{route('authors.list')}}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>

		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-blue">
				<div class="inner">
					<h3>{{ $bookmaker }}</h3>
					<p>Editoras</p>
				</div>
				<div class="icon">
					<i class="fa fa-bookmark"></i>
				</div>
				<a href="{{route('bookmakers.list')}}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>


		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-blue">
				<div class="inner">
					<h3>{{ $book }}</h3>
					<p>Livros</p>
				</div>
				<div class="icon">
					<i class="fa fa-book"></i>
				</div>
				<a href="{{route('books.list')}}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
</section>

@endsection