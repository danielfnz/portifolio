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
				<div class="sample-page-info">
					<div class="comment-icons">
						<h5>CONDIMENTUM FRINGILLA, FRINGILLA CONDIMENTUM,FINIBUS BONORUM MALORUM, DONEC UT QUAM LIGULA, SED NISI LOBORTIS.</h5>
						<ul>							
							<li><span class="clndr"></span>MARCH 5, 2015</li>
							<li><span class="cmnts"></span> <a href="#">5 comments</a></li>
						</ul>
					</div>
					<img src="{{url('/images/123.jpg')}}" alt=""/>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
						Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, 
						consectetur adipisicing elit.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration  
						in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
						you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>  
					
					<div class="comment-icons">
						<h5>CONDIMENTUM FRINGILLA, FRINGILLA CONDIMENTUM,FINIBUS BONORUM MALORUM, DONEC UT QUAM LIGULA, SED NISI LOBORTIS.</h5>
						<ul>							
							<li><span class="clndr"></span>MARCH 5, 2015</li>
							<li><span class="cmnts"></span> <a href="#">5 comments</a></li>
						</ul>
					</div>
					<img src="{{url('/images/123.jpg')}}" alt=""/>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration  
						in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
						you need to be sure there isn't anything embarrassing hidden in the middle of text.</p> 
				</div>
			</div>	
			<div class="col-md-4 sample-page-right">
				<div class="recent-posts">
					<h4>Postagens Recentes</h4>
					<div class="recent-posts-info">
						<div class="posts-left">
							<a href="#"> <img src="public/images/img21.jpg" alt=""/> </a>
						</div>
						<div class="posts-right">
							<label>MARCH 5, 2015</label>
							<h5> <a href="#">FRINGILLA </a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
							<div class="read-more">
								<a href="#">Read More</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>	
					<div class="recent-posts-info">
						<div class="posts-left">
							<a href="#"> <img src="public/images/img20.jpg" alt=""/></a>
						</div>
						<div class="posts-right">
							<label>MARCH 1, 2015</label>
							<h5><a href="#">FINIBUS BONO</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
							<div class="read-more">
								<a href="#">Read More</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>	
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>	
	</div>
@endsection