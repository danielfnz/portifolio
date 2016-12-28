@extends('template.paginaSimples')
@section('title', 'CardápioRU - Jataí')

@section('container')
<div class="sample-page">
	<div class="container">
		<div class="sam-head text-center">
			<h3>Cardápio Ru - Jataí</h3>
			<div class="strip text-center"><img src="{{ URL::asset('images/work.png') }}" alt=" "/></div>
		</div>
		<div class="col-md-8 sample-page-left" >
			<div class="sample-page-info">
				<h5>Trabalho Realizado</h5>
				<p>*Desenvolvimento Mobile (Android e IOS)</p><br>
				<p>*Desenvolvimento do Painel de adminstração do cardápio</p><br>
				<h5>Download</h5>

				<h5>Download</h5>
				<p><a href="https://play.google.com/store/apps/details?id=com.apprumo.cardapiorujatai.android">GooglePlay</a></p>
				<p><a href="https://itunes.apple.com/il/app/cardapio-ru-jatai/id1175560533?mt=8">Itunes</a></p>
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