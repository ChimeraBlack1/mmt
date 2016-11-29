<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>MMT</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Normalize CSS -->
    <link rel='stylesheet' href='css/normalize.css'>  
    <!-- Main -->
    <link rel='stylesheet' href='css/main.css'>
  </head>
  <body>
    <header>    
        <div class='menu-icon closed' id='menu-icon' onclick='drop()'>&#9776;</div>
        <div class='social-icon'><a class='social-link' href='https://www.facebook.com/mmttheatre'></a></div>
    </header>
      <nav id='nav' class='nav-closed'>
        <ul>
            <li id='item1'><a href='#about' onclick="navClose(); tabOpen('#item1');">About Us</a></li>
            <li id='item2'><a href='#news' onclick="navClose(); tabOpen('#item2');">News / Events</a></li>
            <li id='item3'><a href='#aud' onclick="navClose(); tabOpen('#item3');">Auditions</a></li>
            <li id='item4'><a href='#dir' onclick="navClose(); tabOpen('#item4');">Directions</a></li>
            <li id='item5'><a href='#contact' onclick="navClose(); tabOpen('#item5');">Contact</a></li>
        </ul>
      </nav>
    <div class='banner'><h1>Meadowvale Music Theatre</h1></div>
    <h2>Quality entertainment, close to home.</h2>
    <h3>Coming February 2017</h3>
    <img class='next-show' src='img/catch.jpg' alt='next show'>  
    <h3>online tickets available July 2016 at <a href='http://encoretix.ca'>encoretix.ca</a></h3>
    <section id='about'>
        <?php include('inc/about.html'); ?>
    </section>
    <section id='news'>
        <?php include('inc/news.html'); ?>
    </section>
    <section id='aud'>
        <?php include('inc/aud.html'); ?>
    </section>
      
    <section id='dir'>
        <h2 class='black-head'>Directions</h2>
        <div id='map'></div>  
    </section>
      
    <section id='contact'>
        <?php include('inc/contact.html') ?>
    </section>
      
    <footer>
        <a href='inc/privacy.html'>Privacy Statement</a>
    </footer>
    
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <!-- my js -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCS0OpvWaw2L9WZOdKVUrZQ8aBFEeJ94pA&callback=initMap">
    </script>
    <script src='js/app.js'></script>
      

  </body>
</html>