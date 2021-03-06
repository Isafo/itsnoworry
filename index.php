<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


    <link href="css/main.css" rel="stylesheet">

    <!--inludes for claculations and network -->
    <script type="text/javascript" src="calc.js"></script>
    <?php
    require 'getData.php';
    ?>
  </head>

  <body>
	<div class="topimg">
    	<nav class="navbar navbar-inverse navbar-fixed-top">
      	<div class="container">
        	<div class="navbar-header">
          		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            	<span class="sr-only">Toggle navigation</span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
          	</button>
          	<a class="navbar-brand" href="#">Project name</a>
        	</div>
        	<div id="navbar" class="collapse navbar-collapse">
        		<ul class="nav navbar-nav">
            		<li class="active"><a href="#">Home</a></li>
            		<li><a href="#about">About</a></li>
            		<li><a href="#contact">Contact</a></li>
          		</ul>
        	</div><!--/.nav-collapse -->
      	</div>
    	</nav>

    	<div class="container">

      	<div class="starter-template topheader">
          	<h1>PRESSURE</h1>
          	<i class="fa fa-home fa-5x icon"></i>
          	<p class="otherfont">Low</p>
      	</div>
      </div>

      <div class="noPadding col-xs-6 col-md-8" >
          <!-- placera de på höger sida -->
          <div class="noPadding col-lg-3 moreinfobox" id="plan">
              <h1>SHOVEL PLAN</h1>
              <img class ="iconimg" src="icons/shovel.svg">
              <p id="planDays">Calculating...</p>

          </div>

          <div class="noPadding col-lg-3 moreinfobox" id="curr">
              <h1>CURRENT WEATHER</h1>
              <p>Snowing</p>
          </div>

          <div class="noPadding col-lg-3 moreinfobox" id="stats">
              <h1>STATISTICS</h1>
              <i class="fa fa-bar-chart fa-2x icon"></i>
          </div>

          <div class="noPadding col-lg-3 moreinfobox"  id="service">
              <h1>SERVICE</h1>
          </div>
      </div>

      <div class="noPadding col-xs-6 col-md-4">
          <!-- placera snowstats info -->
          <div class="noPadding col-lg-6 moreinfobox threerows" id="snowfall">
              <h1>SNOWFALL</h1>
              <img class="iconimg" src="icons/snowflake.svg">

              	<h2>Overnight</h2>
              	<p class="otherfont">40</p>
              	<h2>24 Hours</h2>
             	<p class="otherfont">50</p>
             	<h2>7 Days</h2>
             	<p class="otherfont">120</p>
             	<h2>Base</h2>
             	<p class="otherfont">230</p>
          </div>
          <div class="noPadding col-lg-6 moreinfobox"  id="settings">
              <h1>SETTINGS</h1>
              <i class="fa fa-cog fa-2x icon"></i>
          </div>
      </div>
    </div>

    <div class="slide">
       <a name="slide"/></a>
      <div class="container">
          <p class="slideP" id="statsInfo">
           Lorem ipsum dolor sit amet, no habeo convenire qui. An has adversarium deterruisset, case sapientem eloquentiam id his, te quaerendum conclusionemque vis. Et utinam ponderum tractatos nam. Ex vim veritus eligendi erroribus, wisi doctus in per. Nam cu augue vidisse placerat, vel vide fastidii te.

           Odio ornatus pro in. Ut quod minim intellegam cum, cu tantas apeirian duo. An ius hinc noluisse. Usu id pertinax adipiscing, et usu tale natum ferri. Ad quo exerci tempor liberavisse, has id diam dicat, eum natum debitis expetendis no.
          </p>

          <p class="slideP" id="planInfo">
            Mundi tamquam in ius, ei usu dicta antiopam similique, pro et tritani persius interpretaris. Mea liber tacimates no. Dolore verear expetendis cu sea. Stet saperet elaboraret id qui, malis movet periculis eu nec. Te choro saperet liberavisse ius, id tation facilis recusabo nec. Dicam nostrum ex vis, minimum hendrerit consectetuer ex vix. Pri at evertitur accommodare, nostrum apeirian id duo, diceret scribentur qui id.

            Vix an sensibus consetetur, vix at augue verterem conclusionemque, ea nam ubique evertitur definiebas. Id sed putant voluptaria. Idque quaestio ad ius. Cu eum nulla assentior liberavisse, est cu officiis senserit tractatos. Ex elitr tollit eleifend pro, cu laudem constituto intellegam mea, ei est nemore gubergren.

            Mnesarchum adipiscing mei ea, mel possim senserit cu. Nec eu vero eligendi scaevola, case justo summo ea mei. Has saperet patrioque an. Ei qui graeci scaevola honestatis. Gloriatur neglegentur ex eum, vis nonumes vivendo iracundia ei.
          </p>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/itemHandler.js"></script>

    <!-- calculation call -->
    <script>
        getDayToShovel(54,15,120, "planDays");
    </script>
  </body>
</html>
