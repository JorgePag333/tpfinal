<?php
// SDK de Mercado Pago
require_once '/xampp/htdocs/tpfinal/Mercadopago/vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken('PROD_ACCESS_TOKEN');
?>
<?php
// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();
?>
// SDK MercadoPago.js V2
<script src="https://sdk.mercadopago.com/js/v2"></script>
          
<script>
// Agrega credenciales de SDK
  const mp = new MercadoPago('PUBLIC_KEY', {
        locale: 'es-AR'
  });

  // Inicializa el checkout
  mp.checkout({
      preference: {
          id: 'YOUR_PREFERENCE_ID'
      },
      render: {
            container: '.cho-container', // Indica dónde se mostrará el botón de pago
            label: 'Pagar', // Cambia el texto del botón de pago (opcional)
      }
});
</script>