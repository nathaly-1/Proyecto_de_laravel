<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/factura.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <title>Factura</title>
</head>

<body>
<div class="container">
    <div class="invoice">
        <div class="row">
            <div class="col-7">
            </div>
            <div class="col-5">
                <h1 class="document-type display-4">FACTURA</h1>
                <p class="text-right"><strong></strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col-7">
                <p>
                    <strong>DULCERIA CANDY SWEET</strong><br> Teléfono: 773126430<br> Correo:
                    Alexis.almazan16092000@gmail.com
                </p>
            </div>
            <div class="col-5">
                <br><br><br>
                <p>
                    <strong>Domicilio</strong><br>Col. Tepeji del Río Hgo. <br> Calle Melchor Ocampo S/N<br>
                </p>
            </div>
        </div>
        <br>
        <br>
        <h6>Factura de productos </h6>
        <br>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $total = 0; // Inicializar la variable total
            ?>
            @foreach ($detalleVentaList as $detalle)
                <tr>
                    <td>{{ $detalle->componente->nombre_componente }}</td>
                    <td>{{ $detalle->cantidad_componente }}</td>
                    <td class="text-right">${{ $detalle->componente->precio_actual_componente }}</td>
                    <td class="text-right">${{ $detalle->precio_venta }}</td>
                </tr>
                    <?php
                    $total += $detalle->cantidad_componente  * $detalle->componente->precio_actual_componente; // Actualizar el total
                    ?>
                <tr>
                    <td colspan="3" class="text-right"><strong>Total:</strong></td>
                    <td class="text-center">${{ $total }}</td>
                </tr>

            @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-8">
            </div>
            <div class="col-4">
                <table class="table table-sm text-right">
                    <tr>
                        <td><strong>Total</strong></td>
                        <td class="text-right"></td>
                    </tr>
                </table>
            </div>
        </div>
        <p class="conditions">
            En su amable pago
            <br> Y con nuestro agradecimiento.
            <br><br> Condiciones de pago: pago al recibir la factura, a 15 días.
            <br> No se concede ningún descuento por pago anticipado.
            <br> Pago por transferencia bancaria.
        </p>

        <br>
        <br>

        <p class="bottom-page text-right">
            Col. Tepeji del Río Hgo. <br> Calle Melchor Ocampo S/N
        </p>

    </div>
</div>
</body>

</html>
