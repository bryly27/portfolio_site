<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bryant Yu</title>
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
	    		anchors: ['page1', 'page2', 'page3'],
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
	#section2{
		background-color: red;
	}
	#section3{
		background-color: orange;
	}
    </style>

</head>
<body>
<div id='menu'>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="/portfolio">Bryant Yu | Web Developer</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav navbar-right">
	        <li data-menuanchor="page1" class=' active menu_hover'><a href="#page1">Projects</a></li>
	        <li data-menuanchor="page2" class='menu_hover'><a href="#page2">About</a></li>
	        <li data-menuanchor="page3" class='menu_hover'><a href="#page3">Contact</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
</div>

<!-- <div id='menu'>
	<a class="navbar-brand" href="/portfolio">Bryant Yu | Web Developer</a>
	<ul class="nav navbar-nav navbar-right">
		<li data-menuanchor="page1" class="active menu_hover"><a href="#page1">Portfolio</a></li>
		<li data-menuanchor="page2" class='menu_hover'><a href="#page2">About</a></li>
		<li data-menuanchor="page3" class='menu_hover'><a href="#page3">Contact</a></li>
	</ul>
</div> -->

	<div id="pagepiling">

	    <div class="section" id="section1">
	    	<div class='container'>
	    		<div class='row body'>
	    			<div class='col-md-3'>
	    				<div id='facebook' class='link'>
	    					<h1>f</h1>
	    				</div>
	    			</div>
	    			<div class='col-md-3'>
	    				<div id='chat_app' class='link'>
	    					<h1>Chat<br> App</h1>
	    				</div>
	    			</div>
	    			<div class='col-md-3'>
	    				<div id='mini_trello' class='link'>
	    					<h5>Mini<br> Trello</h5>
	    				</div>
	    			</div>
	    			<div class='col-md-3'>
	    				<div id='awkyo' class='link'>
	    					<h1>Awkyo</h1>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>

	    <div class="section" id="section2">

	    </div>

	    <div class="section" id="section3">
	   
	    </div>

	</div> 
 
</body>
</html>






