<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title> @yield('title') - Daniel Leonardo de Souza Teixeira</title>
    <!--CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--//CSS-->
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href="https://raw.githubusercontent.com/jhollingworth/bootstrap-wysihtml5/master/src/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" media="all" />
    <!--//fonts-->

    <!-- KEYWORDS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow">
    <meta name="description" content="Meu portifolio profissional. Aqui você descobrir um pouco sobre meu trabalho. Daniel Fnz" />
    <meta name="keywords" content="Daniel Leonardo, Daniel Leonardo de Souza, Daniel Leonardo de Souza Teixeira, Desenvolvedor mobile, desenvolvedor de aplicaivos,
    desenvolvedor android, desenvolvedor ios, programador, desenvolvedor web, rubiataba, jatai, UFG, Jataí" />
    <!-- //KEYWORDS -->
    <!-- for-mobile-apps -->
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <!-- JS -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/easing.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/classie.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/circles.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/responsiveslides.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/functions.js') }}"></script>
    <script type="text/javascript" src="https://raw.githubusercontent.com/jhollingworth/bootstrap-wysihtml5/master/src/bootstrap-wysihtml5.js"></script>
  
    <!-- JS -->
</head>
<body>
<!-- banner -->
<div class="banner page-head" id="home">
	<div class="container"> 
		<div class="top-header row">
			<div class="logo">
				<a href="/"><img src="{{ URL::asset('images/logo.png') }}" alt=""/></a>
			</div>
			<div class="top-nav">
				<div class="nav-icon">
					    <a href="#" class="right_bt" id="activator"><span> </span> </a>
				</div>
                    <div class="box" id="box">
                        <div class="box_content">                                                    
                            <div class="box_content_center">
                                <div class="form_content">
                                    <div class="menu_box_list">
                                        <ul>
                                            <li><a href="{{url('#inicio')}}"><span>INICIO</span></a></li>
                                            <li><a href="{{url('/#sobremim')}}"><span>SOBRE MIM</span></a></li>
                                            <li><a href="{{url('/#servicos')}}"><span>SERVIÇOS</span></a></li>
                                            <li><a href="{{url('/#portfolio')}}"><span>PORTFOLIO</span></a></li>
                                            <li><a href="{{url('/#testemunhos')}}"><span>TESTEMUNHOS</span></a></li>
                                            <li><a href="{{url('/blog')}}"><span>BLOG</span></a></li>
                                            <li><a href="{{url('/#contato')}}"><span>FALE COMIGO</span></a></li>
                                            <div class="clearfix"> </div>
                                        </ul>
                                    </div>
                                    <a class="boxclose" id="boxclose"> <span> </span></a>
                                </div>                                  
                            </div>  
                        </div> 
                    </div>        	  
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--/header-banner-->
<!--single-page-->
	<div class="sample-page">
		<div class="container">
     	@yield('container')
			<div class="clearfix"> </div>
		</div>	
	</div>
<!--//single-page-->
<!--footer-->
    <footer class="footer">
        <div class="container">
            <p>Copyright &copy; 2017 Daniel Leonardo de Souza Teixeira</p>
        </div>
    </footer>
<!--//footer-->
<script>
  $(function () {
  //bootstrap WYSIHTML5 - text editor
  $(".textarea").wysihtml5();
});
</script>
</body>
</html>