@extends('template.paginaSimples')
@section('title', 'testeee')

@section('container')

	<div class="sample-page">
		<div class="container">
		@if( $post==null)
		<h5>Conteudo indisponivel</h5>
		@else
		@foreach ($post as $post)
			<div class="sam-head text-center">
				<h3>{{$post->titulo}}</h3>
				<div class="strip text-center"><img src="public/images/blog.png" alt=" "/></div>
			</div>
			<div class="col-md-8 sample-page-left" >
				<div class="sample-page-info">

			 <img src="{{URL::asset($post->imagem)}}" height="200" width="200">

					<p>{!!$post->conteudo!!}</p>
					
					<div class="comment-icons">
						<ul>
							<li><span class="d"></span><a href="#">Lorem ipsum dolor sit consectetur</a> </li>
							<li><span class="clndr"></span>MARCH 5, 2015</li>
							<li><span class="admin"></span> <a href="#">Admin</a></li>
							<li><span class="cmnts"></span> <a href="#">5 comments</a></li>
							<li><span class="like"></span> 15 </li>
						</ul>
					</div>
				
			<div class="clearfix"> </div>
			</div>
			</div>
			@endforeach
		@endif
		</div>	
	</div>
@endsection
