@extends('template.blog')

@section('container')
	<div class="sample-page">
		<div class="container">
			<div class="sam-head text-center">
				<h3>Cardápio Ru - Jataí</h3>
				<div class="strip text-center"><img src="{{ URL::asset('images/blog.png') }}" alt=" "/></div>
			</div>
		<div class="col-md-8 sample-page-left" >
			<div class="sample-page-info">
				<h5>Trabalho Realizado</h5>
				<p>*Desenvolvimento Mobile (Android e IOS)</p><br>
				<p>*Desenvolvimento do Painel de adminstração do cardápio</p><br>
				<h5>Download</h5>
	
				<h5>Layout do aplicativo</h5>
			</div>	
		</div>
			<div class="col-md-4 sample-page-right">
				<div class="recent-posts">
					<h4>Trabalhos Realizados</h4>
					<div class="recent-posts-info">
						<div class="posts-left">
							<a href="#"> <img src="{{ URL::asset('images/portifolio/atlasdehistologia.jpg') }}" alt=""/> </a>
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
							<a href="#"> <img src="{{ URL::asset('images/portifolio/doealimento.jpg') }}" alt=""/> </a>
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
							<div class="recent-posts-info">
						<div class="posts-left">
							<a href="#"> <img src="{{ URL::asset('images/portifolio/pedrocandiru.jpg') }}" alt=""/> </a>
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