<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url('pago');?>" method="post">
        <label for="monto">Ingrese el monto a cancelar</label>
        <input type="number" name="monto">
        <button type="submit">Pagar</button>
    </form>
</body>
</html>