<!--BEGIN HEADER-->
<html>
<head>
	<title>flashcardELITE Study System</title>
  <link rel="stylesheet" type="text/css" href="/css.css">
</head>
<body>
	<div id="wrapper">
		<div id="banner">		
			<h1>flashcard<span class="accent">ELITE</span></h1>
		</div>
		<nav>
			<ul>
              <li><a href="/">Home</a></li>
              <li><a href="/newCard">New Flash Card</a></li>
              @if(!Auth::check())
              	<li>{{ HTML::link('users/register', 'Register') }}</li>  
              	<li>{{ HTML::link('users/login', 'Login') }}</li>  
              @else
              	<li>{{ HTML::link('users/logout', 'logout') }}</li>
              @endif
			</ul>
		</nav>
		<div id="content">
          @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
          @endif
<!--END HEADER-->
@yield('content')      
<!--BEGIN FOOTER-->
		</div>
	</div>
</body>
</html>
<!--END FOOTER-->