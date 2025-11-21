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
    <script>
        // Valores inyectados desde PHP
        const ph = <?= json_encode($ph) ?>;
        const ce = <?= json_encode($ce) ?>;
        const turb = <?= json_encode($turb) ?>;
        const prediccion = <?= $prediccion ?>;
        document.getElementById("valorPrediccion").innerText = prediccion;

        // Etiquetas para 40 minutos + último punto "Pred."
        const labels = [
            //operador spread o de propagación
            ...Array.from({
                length: ph.length
            }, (_, i) => (i + 1) + " min"),
            "Pred."
        ];
        // Datos sin unir con predicción
        const datosPh = [...ph, null];
        const datosCe = [...ce, null];
        const datosTurb = [...turb, null];

        // Predicción aislada
        const datosPrediccion = Array(ph.length).fill(null);
        datosPrediccion.push(prediccion);

        // ------------------- FUNCION PARA CREAR LA GRAFICA -------------------
        let chart; // variable global

        function crearGrafica(tipo = 'line') {
            const ctx = document.getElementById('graficaComparativa').getContext('2d');

            if (chart) chart.destroy(); // destruir gráfico previo

            chart = new Chart(ctx, {
                type: tipo,
                data: {
                    labels,
                    datasets: [{
                            label: 'pH',
                            data: datosPh,
                            borderColor: 'rgba(54, 162, 235)',
                            backgroundColor: '#36A2EB',
                            tension: 0.3
                        },
                        {
                            label: 'CE',
                            data: datosCe,
                            borderColor: 'rgba(255, 159, 64)',
                            backgroundColor: '#FF9F40',
                            tension: 0.3
                        },
                        {
                            label: 'Turbidez',
                            data: datosTurb,
                            borderColor: 'rgba(153, 102, 255)',
                            backgroundColor: '#9966FF',
                            tension: 0.3
                        },
                        {
                            label: 'Predicción (Calidad)',
                            data: datosPrediccion,
                            borderColor: 'rgba(75, 192, 192)',
                            backgroundColor: '#FF6384',
                            pointRadius: 8,
                            pointStyle: 'circle',
                            showLine: false
                        }
                    ]
                }
            });
        }

        // Cambiar tipo de gráfico
        function cambiarTipo(nuevoTipo) {
            crearGrafica(nuevoTipo);
        }

        // Crear la gráfica inicial (lineal)
        crearGrafica('line');
    </script>
</body>

</html>