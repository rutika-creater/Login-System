<!DOCTYPE html>
<html lang="en">
    
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body>
  <!--nav-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="Trainings.html">Trainings</a>
                    </li>
                    <li class="nav-items">
                      <a class="nav-link" href="Aboutus.html">About us</a>
                    </li>
                    </div>
              </nav>
  <!--login form-->
<div class="container my-4">
<div class="row">
  <div class="col-md-6">
    <h2>Login Here</h2>
    <form action="validation.php" method="post">
      <div class="form-group">
        <label>Usernme</label>
        <input type="text" name="user" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</div>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    </body>
</html>