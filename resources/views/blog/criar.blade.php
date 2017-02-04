@extends('template.paginaSimples')
@section('title', 'Blog')

@section('container')
	<div class="sample-page">
		<div class="container">
			<div class="sam-head text-center">
				<h3>Meu Blog</h3>
				<div class="strip text-center"><img src="{{url('/images/blog.png')}}" alt=" "/></div>
			</div>
			<div class="col-md-8 sample-page-left" >
			@if ( !$posts->count() )
			<h5>Não existem posts publicados ainda!</h5>
			@else
				@foreach( $posts as $posts )
				<div class="sample-page-info">
					<div class="comment-icons">
						<a href="{{url('/blog/')}}/{{$posts->slug}}" style="text-decoration: none"><h5>{{$posts->titulo}}</h5></a>
						<ul>							
							<li><span class="clndr"></span>{{ $posts->created_at->format('d/m/Y ') }}</li>
							<!-- <li><span class="cmnts"></span> <a href="#">5 comments</a></li> -->
						</ul>
					</div>			
			<article>
				{!! str_limit($posts->conteudo, $limit = 1500, $end = '....... <a href='.url("/".$posts->slug).'>Ver artigo completo</a>') !!}
			</article>
				</div>
				@endforeach
				@endif
			</div>	
			<div class="col-md-4 sample-page-right">
				<div class="recent-posts">
					<h4>Postagens Recentes</h4>
					@if ( !$postsrecentes->count() )
					<h5>Não existem posts publicados ainda!</h5>
					@else
					@foreach( $postsrecentes as $postsrecentes )
					<div class="recent-posts-info">
						<div class="posts-left">
							<a href="{{url('/blog/')}}/{{$postsrecentes->slug}}"> <img src="{{url('/images/blog')}}/{{$postsrecentes->imagem}}" alt=""/> </a>
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
						@endif
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>	
	</div>
@endsection