<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>La tua password</title>
</head>

<body class="bg-primary-subtle min-vh-100">
  <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center">
    <div class="container w-50 p-2 border border-light rounded-4 d-flex flex-column justify-content-center">

      <h1>La tua password è: <br><?php echo $_SESSION['password'] ?></h1>

      <a class="btn btn-primary" href="index.php">Torna indietro</a>
    </div>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>