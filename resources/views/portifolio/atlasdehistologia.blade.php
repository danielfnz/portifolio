@extends('template.blog')

@section('container')
<div class="sample-page">
	<div class="container">
		<div class="sam-head text-center">
			<h3>Atlas de Histologia</h3>
			<div class="strip text-center"><img src="{{ URL::asset('images/blog.png') }}" alt=" "/></div>
		</div>
		<div class="col-md-8 sample-page-left" >
			<div class="sample-page-info">
				<h5>Trabalho Realizado</h5>

				<p>*Desenvolvimento Web</p><br>
				<p>*Desenvolvimento Mobile (Android e IOS)</p><br>
				<p>*Desenvolvimento do BackOffice</p><br>
				<p>*Integração com PagSeguro</p><br>
				<p>*Integração Apple in-app purchase</p><br>
				<p>Confira: <a href="www.atlasdehistologia.com.br">www.atlasdehistologia.com.br</a></p>

				<h5>Layout desenvolvido</h5>
			</div>	
		</div>	
		<div class="col-md-4 sample-page-right">
			<div class="recent-posts">
				<h4>Trabalhos Realizados</h4>
				<div class="recent-posts-info">
					<div class="posts-left">
						<a href="#"> <img src="{{ URL::asset('images/portifolio/doealimento.jpg') }}" alt=""/> </a>
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
						<a href="#"> <img src="{{ URL::asset('images/portifolio/cardapiorujatai.jpg') }}" alt=""/> </a>
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