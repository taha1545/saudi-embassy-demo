<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="component/img.jpg">
    <title>SaudiVisa</title>
    <link rel="stylesheet" href="component\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Qj6Upwr38r0I4ltfpbHFw9n52Rrjbi5DoSiTbAKyFSp9MylKq4jpQ28NcXGf43h7" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body> 
   
  <?php

  // resposive 
  //send email
  //more style 
  //more validation to backend

  echo" <div class='first'>";
   include("component/navbar.php");
   include("component/home.php");
   echo"</div>";
   include("component/slides.php");
   include("component/about.php");
  ?>

   
</body>
<script src="js/image.js"></script>
<script src="js/slide.js"></script>
<script src="js/validation.js"></script>
<script src="js/event.js"></script>
</html>



