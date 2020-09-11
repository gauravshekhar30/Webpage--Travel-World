<!DOCTYPE html>
<html>
<head>
  <title>Travel World</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Travel World</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Services</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Flights</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Hotels</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Taxi</a>
          <div class="dropdown-divider"></div>

        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>

   
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<section class="my-5">
  <div class="pt-5">
    <h1 class="text-center">  Contact Us </h1>
  </div>

  <div class="w-50 m-auto">
    <form action="userdata.php" method="post">
    <div class="form-group">
      <label for="pwd">Username:</label>
      <input type="text" class="form-control" name="user" >
    </div>
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" name="email" autocomplete="off">
    </div>
    <div class="form-group">
      <label for="pwd">Mobile:</label>
      <input type="text" class="form-control" name="mobile">
    </div>
    <div class="form-group">
      <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" name="comment"></textarea>

    </div>
  

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
  </div>
</section>