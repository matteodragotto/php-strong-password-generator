<?php

require './functions.php'

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Generatore di password</title>
</head>

<body class="bg-primary-subtle">
  <div class="container w-50 p-5">

    <div>
      <form action="" method="GET">
        <div class="mb-3 d-flex align-items-center justify-content-around">
          <label for="passwordNumber" class="form-label">Lunghezza della password</label>
          <input type="number" id="passwordNumber" name="characters" class="form-control w-25" min=0 max=100>
        </div>
        <div class="d-flex justify-content-center gap-5">
          <button type="submit" class="btn btn-primary">Genera password</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </div>

      </form>
    </div>

    <?php
    if ($passwordLength > 0) {
      $password = randomPassword($passwordLength);
      echo "La tua password è: $password";
    }

    ?>


  </div>









  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>