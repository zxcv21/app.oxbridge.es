<?php
session_start();

if(isset($_POST['confirmado'])&&($_POST['confirmado']==='true')){
  echo "hecho";
  unset($_SESSION['var__return_pago_tarjeta__p_php']);
}
?>
