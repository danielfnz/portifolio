@extends('template.paginaSimples')
@section('title', 'Portifolio')
@section('description', 'Portifolio')

@section('container')
<div class="sample-page">
	<div class="container">
		<div class="sam-head text-center">
			<h3>Portifólio</h3>
			<div class="strip text-center"><img src="{{ URL::asset('images/work.png') }}" alt=" "/></div>
		</div>

		<div class="col-md-4 sample-page-right">
			<a href="{{url('/portifolio/atlasdehistologia')}}"> <img src="{{ URL::asset('images/portifolio/atlasdehistologia.jpg') }}" alt=""/> </a>
		</div>	
	
		<div class="col-md-4 sample-page-right">
			<a href="{{url('/portifolio/cardapiorujatai')}}"> <img src="{{ URL::asset('images/portifolio/cardapiorujatai.jpg') }}" alt=""/> </a>
		</div>	
		<div class="col-md-4 sample-page-right">			
			<a  href="{{url('/portifolio/doealimento')}}"> <img src="{{ URL::asset('images/portifolio/doealimento.jpg') }}" alt=""/> </a>
		</div>		
		
		<div class="col-md-4 sample-page-right">
			<a href="{{url('/portifolio/pedrocandiru')}}"> <img src="{{ URL::asset('images/portifolio/pedrocandiru.jpg') }}" alt=""/> </a>
		</div>			
		</div>
		<div class="clearfix"> </div>
</div>
@endsection