<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bryant Yu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<link rel="stylesheet" type="text/css" href="/assets/css/scroll.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/jquery.pagepiling.css" />
	<script type="text/javascript" src="/assets/js/jquery.pagepiling.min.js"></script>

	<script type="text/javascript" src='/assets/js/sound.js'></script>
  <script type="text/javascript" src='/assets/js/jquery.js'></script>
  <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
</head>
<body>

<script type="text/javascript">
		var deleteLog = false;

		$(document).ready(function() {
	    	$('#pagepiling').pagepiling({
	    		menu: '#menu',
	    		anchors: ['home', 'facebook_clone', 'chat_app', 'mini_trello', 'awkyo', 'about', 'contact'],
	    		navigation: {
		            'textColor': '#f2f2f2',
		            'bulletsColor': '#ccc',
		            'position': 'right',
		            // 'tooltips': ['Page 1', 'Page 2', 'Page 3', 'Page 4']
		        }
			});
	    });
    </script>

    <style>
    /* Style for our header texts
	* --------------------------------------- */
/*	h1{
		font-size: 5em;
		font-family: arial,helvetica;
		color: #fff;
		margin:0;
		padding:0;
	}*/

	/* Centered texts in each section
	* --------------------------------------- */
/*	.section{
		text-align:center;
	}*/


	/* Backgrounds will cover all the section
	* --------------------------------------- */
	#section1,
	#section2,
	#section3{
		background-size: cover;
	}

	/* Defining each section background and styles
	* --------------------------------------- */
	#section1{
		background-color: black;
	}

	#facebook_clone {
		background-color: #3A5795;
	}

	#chat_app {
		background-color: #ce5252;
	}

	#mini_trello {
		background-color: #e8af53;
	}

	#awkyo {
		background-color: #6dd341;
	}

	#section2{
		background-color: black;
	}
	#section3{
		background-color: silver;
	}
    </style>

</head>
<body>
	<div id='menu'>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand" href="/">Bryant Yu | Web Developer</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
			    <div>
			      <ul class="nav navbar-nav navbar-right">
			        <li data-menuanchor="home" class=' active menu_hover'><a href="#home">Projects</a></li>
			        <li data-menuanchor="about" class='menu_hover'><a href="#about">About</a></li>
			        <li data-menuanchor="contact" class='menu_hover'><a href="#contact">Contact</a></li>
			      </ul>
			    </div>
			  </div>
		  </div>
		</nav>
	</div>

	<div id="pagepiling">

	    <div class="section" id="section1">
	    	<div class='container'>
	    		<div class='row body'>
	    			<div class='col-sm-3 col-sm-3 col-xs-6'>
	    				<div id='facebook' class='link'>
	    					<a href='#facebook_clone'>
	    						<h1>f</h1>
	    					</a>
	    				</div>
	    			</div>
	    			<div class='col-md-3 col-sm-3 col-xs-6'>
	    				<div id='chat_app' class='link'>
	    					<a href='#chat_app'>
	    						<h1>Chat<br> App</h1>
	    					</a>
	    				</div>
	    			</div>
	    			<div class='col-md-3 col-sm-3 col-xs-6'>
	    				<div id='mini_trello' class='link'>
	    					<a href='#mini_trello'>
	    						<h5>Mini<br> Trello</h5>
	    					</a>
	    				</div>
	    			</div>
	    			<div class='col-md-3 col-sm-3 col-xs-6'>
	    				<div id='awkyo' class='link'>
	    					<a href='#awkyo'>
	    						<h1>Awkyo</h1>
	    					</a>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>

	    <div class='section' id='facebook_clone'>

	    </div>

	    <div class='section' id='chat_app'>

	    </div>

	    <div class='section' id='mini_trello'>

	    </div>

	    <div class='section' id='awkyo'>

	    </div>

	    <div class="section" id="section2">

	    </div>

	    <div class="section" id="section3">
	   
	    </div>

	</div> 
 
</body>
</html>






