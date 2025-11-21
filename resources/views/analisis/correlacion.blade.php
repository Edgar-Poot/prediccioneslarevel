<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predicciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="mt-2 mb-2">
            <button class="btn btn-primary me-2" onclick="cambiarTipo('line')">grafico lineal</button>
            <button class="btn btn-primary me-2" onclick="cambiarTipo('bar')">grafico barra</button>
            <button class="btn btn-primary" onclick="cambiarTipo('radar')">grafico radar</button>
        </div>
    </div>
    <!-- GRÁFICA -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">Predicción calidad del agua</div>
        <div class="card-body">
            <div class="chart-container" style="position: relative; height: 85vh; width: 100%;">
                <canvas id="graficaComparativa"></canvas>
            </div>
        </div>
    </div>
    <!--Valores que mandamos en el controlador-->
    <div class="alert alert-info">
        <strong>Predicción generada:</strong><br>
        Calidad esperada =
        <strong id="valorPrediccion"><?= $prediccion ?></strong><br>
        (con ph=7.0, ce=1.5, turbidez=4.0)
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>

</html>