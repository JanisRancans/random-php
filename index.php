<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <title>Simple Landing page</title>
  </head>
  <body>

    <div class="jumbotron">
      <h1 class="display-4">Hello!</h1>
      <p class="lead">This is a simple landing page for Terraform assigment.</p>
      <hr class="my-4">
      <p>Press a button to show your IP or servers IP.</p>

      <button id="YourIP" class="btn btn-primary btn-lg" role="button">Your IP</button>
      <button id="ServerIP" class="btn btn-primary btn-lg" role="button">Server IP</button>
      <div><h4 class="txt"></h4><h3 class="ip"></h3></div>
   </div>

   <script type="text/javascript">

       $( "#YourIP").click(function() {
         $.getJSON("http://jsonip.com?callback=?", function (data) {
           $(".txt").text("Your IP is:");
           $(".ip").text(data.ip);
           console.log(data.ip);
         });
       });

       $( "#ServerIP").click(function() {
           $(".txt").text("Server IP is:");
           $(".ip").text("<?php $ip = $_SERVER['REMOTE_ADDR']; echo $ip; ?>");
       });

  </script>

  </body>
</html>
