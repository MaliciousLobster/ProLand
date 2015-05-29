<!DOCTYPE html>
<html>
<head>
	<title>Nate Munsell</title>
	
	<link type="text/css" rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/javascript" src="js/bootstrap.min.js">
	<link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
</head>
<header class="fluid-container">
  		<div class="row">
  			<div class="col-xs-12">
  				<nav>
		  			<ul>
	    				<li>
	      					<a href="#title">Home</a>
	    				</li>
	    				<li>
	      					<a href="#panel1">About</a>
	    				</li>
		   				<li>
		   					<a href="#panel2">My Work</a>
		    			</li>
		    			<li>
		      				<a href="#panel3">Contact</a>
		   				</li>
		  			</ul>
				</nav>
			</div>
		</div>
	</header> 
</head>
<body>
	<div id="title" class="fluid-container panel top">
	  	<div class="row">
	  		<div id="name" class="col-xs-12">
	  		 	<h1>Nate Munsell</h1>
			</div>
		</div>
	</div>

	<div id="panel1" class="fluid-container panel">
	  	<div class="row title">
	    	<div class="col-xs-12">
	    		<h1>About Me</h1>
	    		<p>I have experience with coding languages that includes php, html, javascript, and jquery. I've built several projects using combinations of
	    		these languages.</p>
	    	</div>	
	  	</div>
	</div>

	<div id="panel2" class="fluid-container panel">
	  	<div class="row title">
	    	<div class="col-xs-12">
				<h1>Previous Projects</h1>
				<ul>
					<li>
						<a href="NateAPI/index.php">My instagram API</a>
					</li>
					<li>
						<a href="ToDo2/index.php">Simple ToDo list</a>
					</li>
					<li>
						<a href="NateMAwesomenauts/index.php">Melon JS Awesomenauts</a>
					</li>
				</ul>
	    	</div>
	  	</div>
	</div>

	<div id="panel3" class="fluid-container panel">
	  	<div class="row title">
	    	<div id="contactme" class="col-xs-12">
	    		<h1>Contact me!</h1>
				<div class="arrow-up"></div>
  					<form id="contact" class="form-horizontal" role="form">
    					<div class="form-group">  
      						<div class="col-xs-12">
        						<input id="name" name="name" type="text" placeholder="NAME" class="form-control">
      						</div>
    					</div>
    					<div class="form-group">  
      						<div class="col-xs-12">
        						<input id="email" name="email" type="email" placeholder="EMAIL" class="form-control">
      						</div>
   						</div>
    					<div class="form-group">  
      						<div class="col-xs-12">
        						<textarea class="form-control" id="message" name="message" placeholder="MESSAGE"></textarea>
     	 					</div>
    					</div>
    					<button id="send" name="send" class="btn btn-block">send</button>
  					</form>
  				</div>
	    	</div>	
	  	</div>
	</div>

	<div id="panel4" class="fluid-container panel header">
	    <div class="row">
	    	<div class="col-xs-12">

	    	</div>	
	    </div>	
	</div>
	<a href="#" class="back-to-top">Back to Top</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow27.js"></script>
<script>
$('document').ready(function() {
  var msg = $('#message');
  msg.autosize();
});
</script>
</body>

