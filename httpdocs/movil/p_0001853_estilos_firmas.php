#p_00995_firma{
  height:100%;
  width:100%;
  background-color: rgba(0, 0, 0, 0.8);
  position: absolute;
  top: 0;
  z-index: 999;
 }
.p_00995_boton_pad_firma{
 border:solid 1px #888;
 display:inline-block;
 margin: 0 1em;
 padding: 5px 10px;
 width: 44px;
 height: 40px;
 box-shadow:5px 5px #ccc;
 cursor: pointer;
 }
 #p_00995_firma_contenedor{
   position: absolute;
   top: 137px;
   right: 0;
   left: 0;
   margin: auto;
   height: 422px;
   width: 701px;
   overflow: hidden;
   background-color: white;
   border-radius: 10px;
 }
 #p_00995_firma_botones{
   position: absolute;
   width: 100%;
   bottom: 5px;
   text-align:center;
   -webkit-user-select: none;
   -moz-user-select: none;
   -ms-user-select: none;
   user-select: none;
 }
 #p_00989_salir_firmas_div{
   display: inline-block;
   border: 1px solid;
   box-sizing: border-box;
   padding: 5px;
   bottom: 4px;
   right: 21px;
   position: absolute;
   box-shadow: 5px 5px lightgrey;
   cursor: pointer;
   background-color: rgba(104, 190, 137, 0.24);
   FONT-SIZE: 14px;
   text-transform: uppercase;
   display: none;
 }
 #p_00995_fecha_firma{
   position: absolute;
 width: 621px;
 height: 31px;
 padding: 5px 40px;
 font-size: 21px;
 color: #3559a7;
 font-weight: bold;
 }
 #p_00995_cerrar_firma{
   position: absolute;
   height: 25px;
   width: 25px;
   right: 0;
   top: -1px;
   background-image:url(<? echo ver_url("images/close.png","src"); ?>);
   /*background-image:url(<? echo ver_url("images/cerrar_gris.png","src"); ?>);*/
   background-repeat:no-repeat;
   background-size:100%;
   cursor: pointer;
 }
 #p_00995_ventana_alerta{
   position: absolute;
   width: 463px;
   height: 88px;
   background-color: #e0f9d9;
   border-radius: 10px;
   top: 22px;
   right: 0;
   left: 0;
   margin: auto;
   z-index: 9;
   display: none;
 }
 #p_00995_ventana_alerta #p_00995_alerta_firmas_pendientes{
 /*height: 73px;*/
   width: 93px;
   background-color: white;
   float: right;
   /*margin: 8px;*/
   border-radius: 10px;
   color: #184da0;
   font-size: 58px;
   text-align: center;

 padding-top: 12px;
 height: 64px;
 margin: 5px;
 }
 #p_00995_ventana_alerta #p_00995_alerta_firmas_pendientes_mensaje{
   font-size: 17px;
   display: inline-block;
   width: 300px;
   margin: 23px 30px;
   box-sizing: border-box;

 }
 #p_00995_firmas_restantes{
   float: right;
 }
 #p_00995_alerta_firma_vacia{
   display: none;
   background-color: rgba(53, 89, 167, 0.08);
   width: 234px;
   height: 109px;
   position: absolute;
   top: 238px;
   left: 0;
   right: 0;
   margin: auto;
   z-index: 2;
   font-size: 24px;
   border: 2px solid #3559a7;
   border-radius: 10px;
   box-shadow: 3px 3px 10px grey;
   padding-top: 24px;
   text-align: center;
   box-sizing: border-box;
 }
 #p_00955_loading_firmas{
   position: absolute;
   z-index: 2;
  left: 0;
  right: 0;
  margin: auto;
  width: 200px;
  top: 88px;
 }
 <? include ver_url("movil/firma/pad/css/signature-pad.css","");?>
