<?php 



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>password generator</title>
</head>
<body>
  <div class="container">
    <h1 class="my-5">Password Generator</h1>
    
    <form action="index.php" method="POST">
      <div class="mb-3">
        <label for="length" class="form-label">Numero Caratteri</label>
        <input type="number" class="form-control" id="length">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <h1 class="my-5">La password generata è XXXXX</h1>


  </div>
</body>
</html>