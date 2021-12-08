<!DOCTYPE html>
<html>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>  
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sanket Backpackers</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">                                                                   
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">      
          <a class="nav-link" href="contactus.php">Contactus</a>
        </li>
        </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="jumbotron">
  <h1>Contact Us</h1>
  <p>Welcome to Sanket Backpackers</p>
</div>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact Us</h2>
  </div>
<div class="w-50 m-auto">
  <form action="userinfo.php" method="post">
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="user" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
      <label>Email-id</label>
      <input type="text" name="email" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
      <label>Mobile</label>
      <input type="text" name="mobile" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
      <label>Comments</label>
      <textarea class="form-control" name="comment">
      </textarea>
      </div>
       <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>
</section>
  
</body>
</html>