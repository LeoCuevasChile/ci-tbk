<form action="<?php echo $url;?>" method="post">
    <input type="hidden" name="token_ws" value="<?php echo $token;?>" >
    Confirmar monto: $<?php echo number_format($monto, 0, ',','.'); ?>
    <button type="submit">Confirmar</button>
</form>