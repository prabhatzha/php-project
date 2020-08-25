<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1> welcome to the form </h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];

        echo '<div class="alert alert-success" role="alert">
       Hey! Prabhakar your form is submitted successfully to our database
      </div>';

      $servername = "127.0.0.1:3307";
      $username = "root";
      $password = "";
      $database = "contactus";

      $conn = mysqli_connect($servername, $username, $password, $database);

$sql ="INSERT INTO `prabhat` (`name`, `email`, `message`, `dt`) VALUES ( '$name', '$email', '$desc', current_timestamp())";
mysqli_query($conn,$sql);
    }
    ?>
    <div class="container">
    <form action="/prabhat/form.php" method="post">
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
  <label for="email">Your Message</label>
    <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>
  </div>
  <button type="submit"> Submit </button>
</form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>