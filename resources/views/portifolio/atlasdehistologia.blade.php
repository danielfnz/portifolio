@extends('template.paginaSimples')
@section('title', 'Atlas de Histologia')

@section('container')
<div class="sample-page">
	<div class="container">
		<div class="sam-head text-center">
			<h3>Atlas de Histologia</h3>
			<div class="strip text-center"><img src="{{ URL::asset('images/work.png') }}" alt=" "/></div>
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

				<h5>Download</h5>
				<p><a href="https://play.google.com/store/apps/details?id=com.apprumo.atlasdehistologia">GooglePlay</a></p>

			</div>	
		</div>	
		<div class="col-md-4 sample-page-right">
			<div class="recent-posts">
				<h4>Ultimos Trabalhos Realizados</h4>
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
						<a href="{{url('/portifolio/pedrocandiru')}}"> <img src="{{ URL::asset('images/portifolio/pedrocandiru.jpg') }}" alt=""/> </a>
					</div>
					<div class="posts-right">
						<h5><a href="{{url('/portifolio/pedrocandiru')}}">Pedro Candirú</a></h5>
						<p>WebSite profissional do guia de pesca, Pedro Candirú.</p>
						<div class="read-more">
							<a href="{{url('/portifolio/pedrocandiru')}}">Visualizar</a>
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