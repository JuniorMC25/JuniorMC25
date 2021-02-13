<?php 
	require_once "config_MercadoPago.php";

	MercadoPago\SDK::setAccessToken($acces_token);

	$preference = new MercadoPago\Preference();

	$item1 = new MercadoPago\Item

	$item1->title = $_POST['title'];
	$item1->img   = $_POST['img'];
	$item1->quantity = $_POST['unit'];
	$item1->unit_price = $_POST['price'];

	$preference->items = array($item1);
	# Guardar y postear la preferencia
	$preference->save();

	echo "<script>location.href='".$preference->init_point."'</script>";
?>