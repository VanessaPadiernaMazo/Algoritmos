<?php
if (isset($_POST['enviarA'])){
  $n = $_POST['numero'];
  for ($i = 1; $i <= $n; $i++) {
    // Imprimir espacios en blanco
    for ($x = 1; $x <= $n - $i; $x++) {
        echo "&#160;&#160;";
    }

    // Imprimir #
    for ($y = 1; $y <= $i; $y++) {
        echo "#";
    }echo "<br>";
  }
}

if (isset($_POST['enviarB'])){
  $n = $_POST['numero'];
  for ($i = 1; $i <= $n; $i++) {
    // Imprimir espacios en blanco
    for ($x = 1; $x < $i; $x++) {
        echo "&#160;&#160;";
    }

    // Imprimir #
    for ($y = $i; $y <= $n; $y++) {
        echo "#";
    }echo "<br>";
  }

}

if (isset($_POST['enviarC'])){
  $n = $_POST['numero'];
  // Imprimir la mitad superior del diamante
  for ($i = $n; $i >= 1; $i--) {
    // Imprimir espacios en blanco
    for ($x = 1; $x < $i; $x++) {
      echo "&#160;";
    }
    for ($y = $i; $y <= 2 * $n - 1; $y++) {
      echo "#";
    }echo "<br>";
  }

  // Imprimir la mitad inferior del diamante
  for ($i = 1; $i <= $n; $i++) {
    // Imprimir espacios en blanco
    for ($x = 1; $x < $i; $x++) {
      echo "&#160;";
    }

    // Imprimir #
    for ($y = $i; $y <= 2 * $n - 1; $y++) {
        echo "#";
    }echo "<br>";
  }

}
?>
 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container text-center">
    <div class="row justify-content-center mt-5">
      <div class="col-4">
        <form method="post" action="Algoritmos_escalera.php">
          <div class="row align-items-center">
            <div class="col-auto">
              <label for="input" class="col-form-label">Escalera Agente A:</label>
            </div>
            <div class="col-auto">
              <input type="number" name="numero" id="input" min="1" max="100" class="form-control" aria-describedby="A" required>
            </div>
            <div class="col-auto">
              <input class="btn btn-outline-secondary" type="submit" name="enviarA" value="Enviar" id="button">
            </div>
            <div class="col-auto">
              <span id="A" class="form-text">
                Ingresa un número mayor a 0 y menor a 100.
              </span>
            </div>
          </div>
        </form>
      </div>
      <div class="col-4">
        <form method="post" action="Algoritmos_escalera.php">
          <div class="row align-items-center">
            <div class="col-auto">
              <label for="input" class="col-form-label">Escalera Agente B:</label>
            </div>
            <div class="col-auto">
              <input type="number" name="numero" id="input" min="1" max="100" class="form-control" aria-describedby="B" required>
            </div>
            <div class="col-auto">
              <input class="btn btn-outline-secondary" type="submit" name="enviarB" value="Enviar" id="button">
            </div>
            <div class="col-auto">
              <span id="B" class="form-text">
                Ingresa un número mayor a 0 y menor a 100.
              </span>
            </div>
          </div>
        </form>
      </div>
      <div class="col-4">
        <form method="post" action="Algoritmos_escalera.php">
          <div class="row align-items-center">
            <div class="col-auto">
              <label for="input" class="col-form-label">Escalera Agente C:</label>
            </div>
            <div class="col-auto">
              <input type="number" name="numero" id="input" min="1" max="100" class="form-control" aria-describedby="C" required>
            </div>
            <div class="col-auto">
              <input class="btn btn-outline-secondary" type="submit" name="enviarC" value="Enviar" id="button">
            </div>
            <div class="col-auto">
              <span id="C" class="form-text">
                Ingresa un número mayor a 0 y menor a 100.
              </span>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
