@extends('template.paginaSimples')
@section('title', 'testeee')

@section('container')

<div class="sample-page">
	<div class="container">	
		<div class="sam-head text-center">
			<h3>{{$post->titulo}}</h3>
			<div class="strip text-center"><img src="{{ URL::asset('images/blog.png') }}" alt=" "/></div>
		</div>
		<div class="col-md-8 sample-page-left" >
			<div class="sample-page-info">

				<p>{!!$post->conteudo !!}</p>

				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
</div>
@endsection
