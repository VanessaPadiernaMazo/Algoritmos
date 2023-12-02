<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Clase</th>
        <th scope="col">Nota</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Matemáticas</td>
        <td>4</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Inglés</td>
        <td>3.5</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Español</td>
        <td>5</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Sociales</td>
        <td>4.5</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Ciemcias</td>
        <td>3</td>
        </tr>
    </tbody>
    </table>

    <div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-4 fw-bolder text-danger">
            <?php 
            $numeros = array(4,3.5,5,4.5,3);
            $suma = array_sum($numeros);
            $total_numeros = count($numeros);
            $media = $suma/$total_numeros;?>
            Promedio: <?php echo $media; ?>
        </div>
        <div class="col-4 fw-bolder text-danger">
            <?php 
            $inversos = array_map(function ($numeros) {
                return 1 / $numeros;
            }, $numeros);

            $sumaInversos = array_sum($inversos);
            
            if ($sumaInversos != 0) {
                $mediaArmonica = count($numeros) / $sumaInversos;
            }?>
            Media armónica: <?php echo round($mediaArmonica, 2); ?>
        </div>
        <div class="col-4 fw-bolder text-danger">
            <?php 
            sort($numeros);
            $count = count($numeros);
            $middleval = floor(($count-1)/2);
            if($count % 2) {
            $median = $numeros[$middleval];
            } else {
            $low = $numeros[$middleval];
            $high = $numeros[$middleval+1];
            $median = (($low+$high)/2);
            }?>
            Mediana: <?php echo $median;  ?>
        </div>
    </div>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
