@extends('template.paginaSimples')
@section('title', 'Blog')

@section('container')
<div class="sample-page">
	<div class="container">
		<div class="sam-head text-center">
			<h3>Criar novo Artigo</h3>
			<div class="strip text-center"><img src="{{url('/images/blog.png')}}" alt=" "/></div>
		</div>
		<div class="col-md-8 sample-page-left" >
			
		<form method="POST" action="{{ url('/blog') }}">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="titulo">Titulo:</label>
					<input type="text" class="form-control" name="titulo"  placeholder="Titulo">
				</div>
				<div class="form-group">
					<label for="titulo">Slug:</label>
					<input type="text" class="form-control" name="slug"  placeholder="Slug">
				</div>

				<div class="form-group">
					<label for="titulo">Descricao:</label>
					<input type="text" class="form-control" name="description"  placeholder="Description">
				</div>

				<div class="form-group">
					<label for="creditos">Conteudo</label>
				<textarea id="textarea" class="textarea" name="conteudo" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
				</div>

				<div class="form-group">
					<label for="titulo">Imagem:</label>
					<input type="text" class="form-control" name="imagem"  placeholder="Imagem">
				</div>

				<input type="hidden" name="ativo" value="1">

				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Criar Artigo</button>
				</div>
			</form>
		</div>
		<div class="clearfix"> </div>
	</div>	
</div>
@endsection