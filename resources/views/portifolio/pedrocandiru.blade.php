@extends('template.paginaSimples')
@section('title', 'Pedro Candirú')
@section('description', 'Pedro Candirú')

@section('container')
<div class="sample-page">
	<div class="container">
		<div class="sam-head text-center">
			<h3>Pedro Candirú</h3>
			<div class="strip text-center"><img src="{{ URL::asset('images/work.png') }}" alt=" "/></div>
		</div>
		<div class="col-md-8 sample-page-left" >
			<div class="sample-page-info">
				<h5>Trabalho Realizado</h5>

				<p>*Desenvolvimento Web</p><br>
				<p>Confira: <a href="http://www.pedrocandiru.com.br" target="_blank">www.pedrocandiru.com.br</a></p>

			</div>	
		</div>	
		<div class="col-md-4 sample-page-right">
			<div class="recent-posts">
					<h4>Ultimos Trabalhos Realizados</h4>
				<div class="recent-posts-info">
					<div class="posts-left">
						<a  href="{{url('/portifolio/atlasdehistologia')}}"> <img src="{{ URL::asset('images/portifolio/atlasdehistologia.jpg') }}" alt=""/> </a>
					</div>
					<div class="posts-right">
						<h5> <a href="{{url('/portifolio/atlasdehistologia')}}">Atlas de Histologia</a></h5>
						<p>Aplicativo mobile que contém cortes de tecidos animais e vegetais.</p>
						<div class="read-more">
							<a href="{{url('/portifolio/atlasdehistologia')}}">Visualizar</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="recent-posts-info">
					<div class="posts-left">
						<a href="{{url('/portifolio/cardapiorujatai')}}"> <img src="{{ URL::asset('images/portifolio/cardapiorujatai.jpg') }}" alt=""/> </a>
					</div>
					<div class="posts-right">
						<h5><a href="{{url('/portifolio/cardapiorujatai')}}">Cardápio RU - Jatai</a></h5>
						<p>Aplicativo gratuito que fornece acesso rápido ao cardápio do restaurante universitário da Universidade Federal de Goias(UFG), regional Jataí.</p>
						<div class="read-more">
							<a href="{{url('/portifolio/cardapiorujatai')}}">Visualizar</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>	
				<div class="recent-posts-info">
					<div class="posts-left">
						<a  href="{{url('/portifolio/doealimento')}}"> <img src="{{ URL::asset('images/portifolio/doealimento.jpg') }}" alt=""/> </a>
					</div>
					<div class="posts-right">
						<h5> <a href="{{url('/portifolio/doealimento')}}">DoeAlimento.org</a></h5>
						<p>DoeAlimento.org possibilita que pessoas ou empresas podem doar cestas básicas a pessoas carentes e/ou instituições filantrópicas.</p>
						<div class="read-more">
							<a href="{{url('/portifolio/doealimento')}}">Visualizar</a>
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