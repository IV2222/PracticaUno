<?php
//Manejo de la sesion
session_start();
//Si todo estpa bien vamos a redirigir al dashboard
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Cotizador de repuestos tecnológicos</title>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0">Cotizador de hardware</h4>
                    </div>
                    <div class="card-body">
                        <form action="procesar.php" method="POST">
                            <div class="mb-3">
                                <label for="componente" class="form-label">Seleccione un componente:</label>
                                <select class="form-select" name="componente" id="componente" required>
                                    <option value="" disable selected>Elija una opción</option>
                                    <option value="procesador">Procesador Intel Core I7</option>
                                    <option value="ram">Memoria RAM 16GB DDR4</option>
                                    <option value="almacenamiento">Memoria SSD 1TB</option>
                                    <option value="tarjeta grafica">Tarjeta Grafica NVIDIA RTX 3050</option>
                                    <option value="placa madre">Placa Base Asrock B550M</option>
                                    <option value="fuente de poder">Fuente de Poder 500w</option>
                                    <option value="gabinete">Gabinete PC Blanco</option>
                                    <option value="monitor">Monitor Gamer 24" Acer</option>
                                    <option value="teclado">Teclado Mecanico Redragon</option>
                                    <option value="mouse">Mouse Logitech G502</option>
                                    <option value="webcam">Webcam 1080p</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="cantidad" class="form-label">Cantidad Requerida:</label>
                                <input type="number" class="form-control" name="cantidad" id="cantidad" min="1"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block">Descuento Institucional:</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="descuento" id="desc_0" value="0"
                                        checked>
                                    <label class="form-check-label" for="desc_0">Ninguno (0%)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="descuento" id="desc_10"
                                        value="0.10">
                                    <label class="form-check-label" for="desc_10">10%</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="descuento" id="desc_15"
                                        value="0.15">
                                    <label class="form-check-label" for="desc_15">15%</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="descuento" id="desc_20"
                                        value="0.20">
                                    <label class="form-check-label" for="desc_20">20%</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="descuento" id="desc_25"
                                        value="0.25">
                                    <label class="form-check-label" for="desc_25">25%</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-3">Procesar Cotización</button>
                            <a class="btn btn-danger w-100 mt-3" href="dashboard.php">Ir al Dashboard</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>