<?php
session_start();

require_once './functions.php';

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

        <div class="form-check ">
          <label class="form-check-label" for="lowerCaseLetters">Lettere minuscole</label>
          <input type="checkbox" class="form-check-input" id="lowerCaseLetters" name='lowerCaseLetters'>
        </div>

        <div class="form-check ">
          <label class="form-check-label" for="upperCaseLetters">Lettere maiuscole</label>
          <input type="checkbox" class="form-check-input" id="upperCaseLetters" name='upperCaseLetters'>
        </div>

        <div class="form-check ">
          <label class="form-check-label" for="numbers">Numeri</label>
          <input type="checkbox" class="form-check-input" id="numbers" name='numbers'>
        </div>

        <div class="form-check ">
          <label class="form-check-label" for="symbols">Simboli</label>
          <input type="checkbox" class="form-check-input" id="symbols" name='symbols'>
        </div>

        <div class="d-flex justify-content-center gap-5">
          <button type="submit" class="btn btn-primary">Genera Password</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </div>

      </form>
    </div>
    <div class="d-flex flex-column justify-content-center mt-5">
      <?php
      if ($passwordLength > 0) {
        $password = randomPassword($passwordLength);
        $_SESSION['password'] = $password;
        echo "<h2 class='text-center'>La password è stata generata</h2>";

        echo "<a class='btn btn-primary' href='result.php'>Visualizza la tua password</a>";
      }

      ?>
    </div>



  </div>









  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>