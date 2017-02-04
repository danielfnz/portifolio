@extends('template.paginaSimples')
@section('title', 'post')

@section('container')

	<div class="sample-page">
		<div class="container">
		@foreach ($post as $post)
			<div class="sam-head text-center">
				<h3>{{$post->titulo}}</h3>
				<div class="strip text-center"><img src="public/images/blog.png" alt=" "/></div>
			</div>
			<div class="col-md-8 sample-page-left" >
				<div class="sample-page-info">

			 <img src="{{URL::asset($posts->imagem)}}" height="200" width="200">

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
					<div class="admin-text">
						<h5>Written By Admin</h5>
						<div class="admin-text-left">
							<a href="#"><img src="public/images/icon3.png" alt=""/></a>
						</div>
						<div class="admin-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<span>View all posts by:<a href="#"> Admin </a></span>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="response">
						<h4>RESPONSES</h4>
						<div class="response-info">
							<div class="response-text-left">
								<a href="#"><img src="public/images/icon3.png" alt=""/></a>
								<h5><a href="#">Admin</a></h5>
							</div>
							<div class="response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>MARCH 1, 2015</li>
									<li><a href="#">Reply</a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>		
						<div class="response-info">
							<div class="response-text-left">
								<a href="#"><img src="public/images/icon3.png" alt=""/></a>
								<h5><a href="#">Admin</a></h5>
							</div>
							<div class="response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>MARCH 1, 2015</li>
									<li><a href="#">Reply</a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>	
					<div class="coment-form">
						<h4>LEAVE YOUR COMMENT</h4>
						<form>
							<input type="text" value="Name :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name :';}" required="">
							<input type="text" value="Website :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website :';}" required="">
							<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
							<input type="submit" value="SEND" >
						</form>
					</div>		
				</div>
			</div>	
			<div class="col-md-4 sample-page-right">
				<div class="category">
					<h4>CATEGORIES</h4>
					<ul>
						<li><a href="#">Donec ut quam ligula feugiat scelerisque.</a></li>
						<li><a href="#">Etiam volutpat tortor quis nibh lobortis</a></li>
						<li><a href="#">Fusce vitae dolor vitae blandit varius.</a></li>
						<li><a href="#">Proin commodo metus sed nisi lobortis.</a></li>
						<li><a href="#">Nunc volutpat neque vel augue interdum,</a></li>
						<li><a href="#">condimentum fringilla justo lobortis.</a></li>
						<li><a href="#">Vivamus consequat dolor ac est congue.</a></li>
					</ul>
				</div>	
				<div class="recent-posts">
					<h4>RECENT POSTS</h4>
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
				<div class="comments">
					<h4>RECENT COMMENTS</h4>
					<div class="comments-info">
						<div class="cmnt-icon-left">
							<a href="#"><img src="public/images/icon3.png" alt=""/></a>
						</div>
						<div class="cmnt-icon-right">
							<p>MARCH 1, 2015</p>
							<p><a href="#">Admin</a></p>
						</div>
						<div class="clearfix"> </div>
						<p class="cmmnt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="comments-info">
						<div class="cmnt-icon-left">
							<a href="#"><img src="public/images/icon3.png" alt=""/></a>
						</div>
						<div class="cmnt-icon-right">
							<p>MARCH 1, 2015</p>
							<p><a href="#">Admin</a></p>
						</div>
						<div class="clearfix"> </div>
						<p class="cmmnt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="comments-info">
						<div class="cmnt-icon-left">
							<a href="#"><img src="public/images/icon3.png" alt=""/></a>
						</div>
						<div class="cmnt-icon-right">
							<p>MARCH 1, 2015</p>
							<p><a href="#">Admin </a></p>
						</div>
						<div class="clearfix"> </div>
						<p class="cmmnt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>	
	</div>
@endsection
      @endforeach