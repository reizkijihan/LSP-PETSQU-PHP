<!DOCTYPE html>
<html lang="en">
<head>
  <title>PetsQu</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="assets/style.css">
  <!-- Custom Font -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Karla&display=swap">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <!--fot awesome-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style type="text/css">
    * {
      margin :0;
      padding: 0;
    }

    .navbar{
        background-color: white;
        background-size: cover;
        height: auto;
        background-repeat: no-repeat;
        overflow-x: hidden;
        font-family: 'Karla', sans-serif;
        text-transform: uppercase;
        letter-spacing: .1rem;
    }

    .divider {
      background-color: #F8F9FA;
    }

    body {
      background-color: #edc3a5;
    }

    .card1 {
      background-color: #56CCF2;
    }

    .card2 {
      background-color: #E8716B;
    }
    
    .card3 {
      background-color: #EFC346;
    }
    
    .card4 {
      background-color: #7BA377;
    }
    
    @media screen and (max-width: 600px) 
    {
      .jumbotron h1
      {
        font-size: 27px;
      }
      .carousel-item img
      {
        flex: 100%;
        max-width: 100%;
      }
    }

    @media screen and (max-width: 800px) 
    {
      .jumbotron h1
      {
        font-size: 32px;
      }
    }
    
    .nav-link:hover
    {
        background-color:  rgba(0, 0, 0, 0.1);
      }
    .navbar-brand
    {
      padding-left: 20px;
      font-family: 'Rosario';
      color : #135A31;
    }
    
  </style>
</head>

<body>
  <?php 
  if (isset($_GET['page']))
  {    
    if ($_GET['page']=="home")
    {
      include 'home.php';
    }
    
    if ($_GET['page']=="katalog")
    {
      include 'katalog.php';
    }
    
    if ($_GET['page']=="login")
    {
      include 'login.php';
    }
    
    if ($_GET['page']=="registrasi")
    {
      include 'registrasi.php';
    }
  }
  else 
  {
    include 'home.php';
  }
  ?>
</body>
</html>