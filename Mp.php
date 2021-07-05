<?php
// SDK de Mercado Pago
require_once '/xampp/htdocs/tpfinal/Mercadopago/vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-6056389123923028-070523-2a4fd9782f870142ea6db9b35c75c8af-5428116');
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

// SDK MercadoPago.js V2
?>
<script src="https://sdk.mercadopago.com/js/v2"></script>
          
<script>
// Agrega credenciales de SDK
  const mp = new MercadoPago('TEST-bed77968-309e-42e0-9719-7dbc8e6956b2', {
        locale: 'es-AR'
  });

  // Inicializa el checkout
  mp.checkout({
      preference: {
          id: '6056389123923028'
      },
      render: {
            container: 'tpfinal/Mp.php', // Indica dónde se mostrará el botón de pago
            label: 'Pagar', // Cambia el texto del botón de pago (opcional)
      }
});
</script>