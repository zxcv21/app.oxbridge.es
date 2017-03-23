<script>
	<? if(isset($_GET['GO_TO'])) echo "GO_TO='".$_GET['GO_TO']."';"; ?>
	p_01169_cargar_presonal_datos_info();

	var__return_pago_tarjeta__p_js= "<? if( isset($_SESSION['var__return_pago_tarjeta__p_php'])) echo $_SESSION['var__return_pago_tarjeta__p_php']; ?>";

	if((var__return_pago_tarjeta__p_js==="OK")||(var__return_pago_tarjeta__p_js==="KO")){
		GO_TO="personal";
		smile_datos.cargados= 1;
		document.getElementById("p_00961_pago_realizado").style.display= "block";
		if(var__return_pago_tarjeta__p_js==="OK")
			document.querySelector("#p_00961_pago_realizado p").innerHTML= TEXTOS[215].text;
		else
			document.querySelector("#p_00961_pago_realizado p").innerText= TEXTOS[216].text;

		p_0001854_mostrar_pagina_bienvenida_bool= false;
	}

	if(typeof GO_TO=="undefined"){
		GO_TO="smile";
	}

	if((p_0001854_mostrar_pagina_bienvenida_bool)&&(window.innerWidth>=p_00956_ancho_movil))
		p_0001854_mostrar_pagina_bienvenida();
	else
		document.getElementById("p_00955_div_img_cargando").style.display="none";

	p_00987_adaptar_menu_al_ancho();
	mover_menu(true,"p_00987_menu_"+GO_TO);
	//orientacion_cambiada();
	setTimeout(function(){p_00989_resize_menu_apartados();},50);

	setTimeout(cargar_tutorial,2000);

	if(typeof sesion_id!="undefined")
	{
		document.getElementById("contenedor_menu").style.display="";
		document.getElementById("contenedor").style.display="";
	}
</script>
