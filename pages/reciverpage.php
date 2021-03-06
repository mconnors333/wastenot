<?php
//start session:
session_start();
include('../script/connection.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <title>NoThrow</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="author" content="Clifton Choiniere, Daniel Goris, JoJo Lu, Kamala Alexander, Matthew Connors, Brian Hogue" />
        <meta name="description" content="HackPVD project that allows users to easily find donated food." />
        <meta name="keywords" content="web developer, coding, javascript, php, software developer, Clifton Choiniere, 3cs, 3csonline, 3cs online" />
        
        <script src='http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

        <!-- bootstrap links -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <!--pages css-->
        <link rel="stylesheet" href="../css/rmap.css">
        <script type="text/javascript" src="../script/rmap.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
      <div class='navbar navbar-default'>
            <div class='container'>
                <div class='navbar-header'>
                    <a class='navbar-brand pull-left'>NoThrow</a>
                    <button class='navbar-toggle collapsed pull-right' data-target='#collapse' data-toggle='collapse' type='button'>
                        <span class='sr-only'>Toggle navigation</span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </button>
                </div>

                <div id='collapse' class='collapse navbar-collapse pull-right'>
                    <form class='navbar-form navbar-right' method="post">
                        <input class='btn btn-default' type="logout" name='loutout' value="Logout" />
                    </form>
                </div>
            </div>
        </div>

      <div class='jumbotron-fluid'>
      </div>

      <div class='container-fluid' id='footer'>
        <div class='container'>
          <!--link to github, social media, free code camp providence page. -->
          <div class='row'>
            <div class='col-md-3 col-sm-3 col-md-offset-1 col-sm-offset-1'>
              <h3 class='navbar-brand'>NoThrow</h3>
            </div>
          </div>

          <div class='row' id='links'>

          </div>
        </div>
        
      </div>
    </body>
</html>