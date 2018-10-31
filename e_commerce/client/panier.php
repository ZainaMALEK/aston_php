<?php 

if(session_id() ==''){
	session_start();
	echo "ok session";
	
	if(isset($_SESSION['panier']))
		$panier=$_SESSION['panier'];
	else
		$panier=[];
}
//$panier=['test'=>'ok'];
if (isset($_POST['idProduct']) && $_POST['idProduct'] !=''){
	$idProduct = $_POST['idProduct'];
	$qteProduct = $_POST['qteProduct'];
	

	

	// $panier=['test'=>'ok'];
	$panier[]=['idProduct'=>$idProduct, 'qteProduct'=>$qteProduct];

	

	$_SESSION['panier']=$panier;
}


header('Location: index.php');
// var_dump($_SESSION['panier']);
