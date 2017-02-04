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

				<article>
					{!! $post->conteudo !!}
				</article>

			</div>
		</div>	
		<div class="col-md-4 sample-page-right">
			<div class="recent-posts">
				@foreach( $postsrecentes as $postsrecentes )
				<div class="recent-posts-info">
					<div class="posts-left">
						<a href="{{url('/blog/')}}/{{$postsrecentes->slug}}"> <img src="{{URL::asset($postsrecentes->imagem)}}" alt="{{$postsrecentes->titulo}}"/> </a>
					</div>
					<div class="posts-right">
						<label>{{ $postsrecentes->created_at->format('d/m/Y') }}</label>
						<h5> <a href="{{url('/blog/')}}/{{$postsrecentes->slug}}">{{$postsrecentes->titulo}} </a></h5>
						<div class="read-more">
							<a href="{{url('/blog/')}}/{{$postsrecentes->slug}}">Ler artigo completo</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				@endforeach
			</div>
		</div>
	</div>	
</div>
@endsection
