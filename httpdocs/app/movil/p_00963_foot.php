<script>
	<? if(isset($_GET['GO_TO'])) echo "GO_TO='".$_GET['GO_TO']."';"; ?>
	p_01169_cargar_presonal_datos_info();

	if(typeof GO_TO=="undefined"){
		GO_TO="smile";
	}
	if(p_0001854_mostrar_pagina_bienvenida_bool)
		p_0001854_mostrar_pagina_bienvenida();
	mover_menu(true,"p_00987_menu_"+GO_TO);
	orientacion_cambiada();
	setTimeout(function(){p_00989_resize_menu_apartados();},50);

	setTimeout(cargar_tutorial,2000);

	if(typeof sesion_id!="undefined")
	{
		document.getElementById("contenedor_menu").style.display="";
		document.getElementById("contenedor").style.display="";
	}
</script>
