function p_0010206_js_f_01_calcular_ancho_y_alto_disponibles( p_0010206_js_f_01_calcular_ancho, p_0010206_js_f_01_ancho_disponible, p_0010206_js_f_01_calcular_alto, p_0010206_js_f_01_alto_disponible, p_0010206_js_f_01_id )
{

    var p_0010206_js_f_01_margin_top=0;
    var p_0010206_js_f_01_margin_bottom=0;
    var p_0010206_js_f_01_margin_left=0;
    var p_0010206_js_f_01_margin_right=0;
    var p_0010206_js_f_01_border_top_width=0;
    var p_0010206_js_f_01_border_bottom_width=0;
    var p_0010206_js_f_01_border_left_width=0;
    var p_0010206_js_f_01_border_right_width=0;
    var p_0010206_js_f_01_padding_top=0;
    var p_0010206_js_f_01_padding_bottom=0;
    var p_0010206_js_f_01_padding_left=0;
    var p_0010206_js_f_01_padding_right=0;

    if( p_0010206_js_f_01_ancho_disponible.length > parseInt(0) )
    {
        p_0010206_js_f_01_ancho_disponible=p_0010206_js_f_01_ancho_disponible.replace("px","");
    };
    if( p_0010206_js_f_01_alto_disponible.length > parseInt(0) )
    {
        p_0010206_js_f_01_alto_disponible=p_0010206_js_f_01_alto_disponible.replace("px","");
    };

    if( document.getElementById(p_0010206_js_f_01_id).style.marginTop.length>parseInt(0) )
    {
        p_0010206_js_f_01_margin_top=document.getElementById(p_0010206_js_f_01_id).style.marginTop;
        p_0010206_js_f_01_margin_top=p_0010206_js_f_01_margin_top.replace("px","");
    };
    if( document.getElementById(p_0010206_js_f_01_id).style.marginBottom.length>parseInt(0) )
    {
        p_0010206_js_f_01_margin_bottom=document.getElementById(p_0010206_js_f_01_id).style.marginBottom;
        p_0010206_js_f_01_margin_bottom=p_0010206_js_f_01_margin_bottom.replace("px","");
    };
    if( document.getElementById(p_0010206_js_f_01_id).style.marginLeft.length>parseInt(0) )
    {
        p_0010206_js_f_01_margin_left=document.getElementById(p_0010206_js_f_01_id).style.marginLeft;
        p_0010206_js_f_01_margin_left=p_0010206_js_f_01_margin_left.replace("px","");
    };
    if( document.getElementById(p_0010206_js_f_01_id).style.marginRight.length>parseInt(0) )
    {
        p_0010206_js_f_01_margin_right=document.getElementById(p_0010206_js_f_01_id).style.marginRight;
        p_0010206_js_f_01_margin_right=p_0010206_js_f_01_margin_right.replace("px","");
    };
    if( document.getElementById(p_0010206_js_f_01_id).style.borderTopWidth.length>parseInt(0) )
    {
        p_0010206_js_f_01_border_top_width=document.getElementById(p_0010206_js_f_01_id).style.borderTopWidth;
        p_0010206_js_f_01_border_top_width=p_0010206_js_f_01_border_top_width.replace("px","");
    };
    if( document.getElementById(p_0010206_js_f_01_id).style.borderBottomWidth.length>parseInt(0) )
    {
        p_0010206_js_f_01_border_bottom_width=document.getElementById(p_0010206_js_f_01_id).style.borderBottomWidth;
        p_0010206_js_f_01_border_bottom_width=p_0010206_js_f_01_border_bottom_width.replace("px","");
    };
    if( document.getElementById(p_0010206_js_f_01_id).style.borderLeftWidth.length>parseInt(0) )
    {
        p_0010206_js_f_01_border_left_width=document.getElementById(p_0010206_js_f_01_id).style.borderLeftWidth;
        p_0010206_js_f_01_border_left_width=p_0010206_js_f_01_border_left_width.replace("px","");
    };
    if( document.getElementById(p_0010206_js_f_01_id).style.borderRightWidth.length>parseInt(0) )
    {
        p_0010206_js_f_01_border_right_width=document.getElementById(p_0010206_js_f_01_id).style.borderRightWidth;
        p_0010206_js_f_01_border_right_width=p_0010206_js_f_01_border_right_width.replace("px","");
    };
    if( document.getElementById(p_0010206_js_f_01_id).style.paddingTop.length>parseInt(0) )
    {
        p_0010206_js_f_01_padding_top=document.getElementById(p_0010206_js_f_01_id).style.paddingTop;
        p_0010206_js_f_01_padding_top=p_0010206_js_f_01_padding_top.replace("px","");
    };
    if( document.getElementById(p_0010206_js_f_01_id).style.paddingBottom.length>parseInt(0) )
    {
        p_0010206_js_f_01_padding_bottom=document.getElementById(p_0010206_js_f_01_id).style.paddingBottom;
        p_0010206_js_f_01_padding_bottom=p_0010206_js_f_01_padding_bottom.replace("px","");
    };
    if( document.getElementById(p_0010206_js_f_01_id).style.paddingLeft.length>parseInt(0) )
    {
        p_0010206_js_f_01_padding_left=document.getElementById(p_0010206_js_f_01_id).style.paddingLeft;
        p_0010206_js_f_01_padding_left=p_0010206_js_f_01_padding_left.replace("px","");
    };
    if( document.getElementById(p_0010206_js_f_01_id).style.paddingRight.length>parseInt(0) )
    {
        p_0010206_js_f_01_padding_right=document.getElementById(p_0010206_js_f_01_id).style.paddingRight;
        p_0010206_js_f_01_padding_right=p_0010206_js_f_01_padding_right.replace("px","");
    };

    if( p_0010206_js_f_01_calcular_alto == "si" )
    {
        p_0010206_js_f_01_alto_disponible=parseInt(p_0010206_js_f_01_alto_disponible)-parseInt(p_0010206_js_f_01_margin_top)-parseInt(p_0010206_js_f_01_margin_bottom)-parseInt(p_0010206_js_f_01_border_top_width)-parseInt(p_0010206_js_f_01_border_bottom_width)-parseInt(p_0010206_js_f_01_padding_top)-parseInt(p_0010206_js_f_01_padding_bottom);
    };
    if( p_0010206_js_f_01_calcular_ancho == "si" )
    {
        p_0010206_js_f_01_ancho_disponible=parseInt(p_0010206_js_f_01_ancho_disponible)-parseInt(p_0010206_js_f_01_margin_left)-parseInt(p_0010206_js_f_01_margin_right)-parseInt(p_0010206_js_f_01_border_left_width)-parseInt(p_0010206_js_f_01_border_right_width)-parseInt(p_0010206_js_f_01_padding_left)-parseInt(p_0010206_js_f_01_padding_right);
    };
    
    return {
        p_0010206_js_f_01_ancho_disponible: p_0010206_js_f_01_ancho_disponible,
        p_0010206_js_f_01_alto_disponible: p_0010206_js_f_01_alto_disponible
    }; 

}

var p_0010206_js_matriz_divs=new Array();

function p_0010206_js_f_02_calcular_elementos_matriz( p_0010206_js_f_02_id_div_inicial )
{

    var p_0010206_js_f_02_bucle_01=0;
    var p_0010206_js_f_02_bucle_02=0;
    var p_0010206_js_f_02_hijos=0;
    var p_0010206_js_f_02_jerarquia=0;
    var p_0010206_js_f_02_divs_por_revisar=0;
    var p_0010206_js_f_02_padre="";
    var p_0010206_js_f_02_contador=0;
    
    p_0010206_js_matriz_divs.length=0;

    if( p_0010206_js_f_02_id_div_inicial.length > parseInt(0) )
    {

        p_0010206_js_f_02_jerarquia=1;
        if( document.getElementById(p_0010206_js_f_02_id_div_inicial).parentNode.tagName.length > parseInt(0) )
        {
            if( document.getElementById(p_0010206_js_f_02_id_div_inicial).parentNode.tagName.toLowerCase() == "body" )
            {
                p_0010206_js_matriz_divs[p_0010206_js_matriz_divs.length]=[
                    p_0010206_js_f_02_id_div_inicial//0
                    , document.getElementById(p_0010206_js_f_02_id_div_inicial).parentNode.tagName.toLowerCase()//1
                    , p_0010206_js_f_02_jerarquia//2
                    , 0//3 revisar hijos
                ];
            }
            else
            {
                p_0010206_js_matriz_divs[p_0010206_js_matriz_divs.length]=[
                    p_0010206_js_f_02_id_div_inicial//0
                    , document.getElementById(p_0010206_js_f_02_id_div_inicial).parentNode.id//1
                    , p_0010206_js_f_02_jerarquia//2
                    , 0//3 revisar hijos
                ];
            };
        }
        else
        {
            p_0010206_js_matriz_divs[p_0010206_js_matriz_divs.length]=[
                p_0010206_js_f_02_id_div_inicial//0
                , document.getElementById(p_0010206_js_f_02_id_div_inicial).parentNode.id//1
                , p_0010206_js_f_02_jerarquia//2
                , 0//3 revisar hijos
            ];
        };
        p_0010206_js_f_02_divs_por_revisar=1;

        while( parseInt(p_0010206_js_f_02_divs_por_revisar) > 0 )
        {
            
            for( p_0010206_js_f_02_bucle_01=0 ; p_0010206_js_f_02_bucle_01 < p_0010206_js_matriz_divs.length; p_0010206_js_f_02_bucle_01++ )
            {
                if( parseInt(p_0010206_js_matriz_divs[p_0010206_js_f_02_bucle_01][3]) == parseInt(0) )
                {
                    p_0010206_js_f_02_padre=p_0010206_js_matriz_divs[p_0010206_js_f_02_bucle_01][0];
                    if( p_0010206_js_f_02_padre.length > parseInt(0) )
                    {
                        p_0010206_js_f_02_hijos=document.getElementById(p_0010206_js_f_02_padre).childNodes;
                        if( p_0010206_js_f_02_hijos.length > parseInt(0) )
                        {
                            p_0010206_js_f_02_jerarquia=parseInt(p_0010206_js_matriz_divs[p_0010206_js_f_02_bucle_01][2])+parseInt(1);
                            for( p_0010206_js_f_02_bucle_02=0 ; p_0010206_js_f_02_bucle_02 < p_0010206_js_f_02_hijos.length; p_0010206_js_f_02_bucle_02++ )
                            {
                                if( p_0010206_js_f_02_hijos[p_0010206_js_f_02_bucle_02].tagName == "DIV" )
                                {
                                    p_0010206_js_matriz_divs[p_0010206_js_matriz_divs.length]=[
                                        p_0010206_js_f_02_hijos[p_0010206_js_f_02_bucle_02].id//0
                                        , p_0010206_js_f_02_padre//1
                                        , p_0010206_js_f_02_jerarquia//2
                                        , 0//3 revisar hijos
                                    ];
                                    p_0010206_js_f_02_contador=parseInt(p_0010206_js_f_02_contador)+parseInt(1);
                                };
                            };
                        };
                    };
                    p_0010206_js_matriz_divs[p_0010206_js_f_02_bucle_01][3]=1;
                };
            };

            p_0010206_js_f_02_divs_por_revisar=0;
            for( p_0010206_js_f_02_bucle_01=0 ; p_0010206_js_f_02_bucle_01 < p_0010206_js_matriz_divs.length; p_0010206_js_f_02_bucle_01++ )
            {
                if( parseInt(p_0010206_js_matriz_divs[p_0010206_js_f_02_bucle_01][3]) == parseInt(0) )
                {
                    p_0010206_js_f_02_divs_por_revisar=parseInt(p_0010206_js_f_02_divs_por_revisar)+parseInt(1);
                };
            };
            
        };
        
    };

};

function p_0010206_js_f_03_redimensionar_elementos_con_calculos_directos( p_0010206_js_f_03_id_div_padre )
{
    
    var p_0010206_js_f_03_bucle_01=0;
    var p_0010206_js_f_03_alto_disponible=0;
    var p_0010206_js_f_03_ancho_disponible=0;
    var p_0010206_js_f_03_padre_alto_disponible=0;
    var p_0010206_js_f_03_padre_ancho_disponible=0;
    var p_0010206_js_f_03_acumulado_alto_disponible=0;
    var p_0010206_js_f_03_acumulado_ancho_disponible=0;
    var p_0010206_js_f_03_calculos="";
    var p_0010206_js_f_03_padre="";
    var p_0010206_js_f_03_display="";
    var p_0010206_js_f_03_divs_repartir_ancho=0;
    var p_0010206_js_f_03_divs_repartir_alto=0;
    var p_0010206_js_f_03_ancho_fijo="no";
    var p_0010206_js_f_03_ancho_calcular="no";
    var p_0010206_js_f_03_ancho_maximo_contenedor="no";
    var p_0010206_js_f_03_ancho_maximo_pxs=0;
    var p_0010206_js_f_03_ancho_minimo_pxs=0;
    var p_0010206_js_f_03_alto_fijo="no";
    var p_0010206_js_f_03_alto_calcular="no";
    var p_0010206_js_f_03_alto_maximo_contenedor="no";
    var p_0010206_js_f_03_alto_maximo_pxs=0;
    var p_0010206_js_f_03_alto_minimo_pxs=0;
    var p_0010206_js_f_03_alto=0;
    var p_0010206_js_f_03_ancho=0;
    
    var p_0010206_js_f_03_border_top_width=0;
    var p_0010206_js_f_03_border_bottom_width=0;
    var p_0010206_js_f_03_border_left_width=0;
    var p_0010206_js_f_03_border_right_width=0;
    var p_0010206_js_f_03_padding_top=0;
    var p_0010206_js_f_03_padding_bottom=0;
    var p_0010206_js_f_03_padding_left=0;
    var p_0010206_js_f_03_padding_right=0;

    if( p_0010206_js_matriz_divs.length > parseInt(0) )
    {

        p_0010206_js_f_03_alto_disponible=document.getElementById(p_0010206_js_f_03_id_div_padre).style.height;
        if( p_0010206_js_f_03_alto_disponible.indexOf('%') > -1 )
        {
            p_0010206_js_f_03_alto_disponible=document.getElementById(p_0010206_js_f_03_id_div_padre).offsetHeight;
        };
        p_0010206_js_f_03_ancho_disponible=document.getElementById(p_0010206_js_f_03_id_div_padre).style.width;
        if( p_0010206_js_f_03_ancho_disponible.indexOf('%') > -1 )
        {
            p_0010206_js_f_03_ancho_disponible=document.getElementById(p_0010206_js_f_03_id_div_padre).offsetWidth;
        };
        p_0010206_js_f_03_padre_alto_disponible=p_0010206_js_f_03_alto_disponible;
        p_0010206_js_f_03_padre_ancho_disponible=p_0010206_js_f_03_ancho_disponible;
        p_0010206_js_f_03_acumulado_alto_disponible=p_0010206_js_f_03_alto_disponible;
        p_0010206_js_f_03_acumulado_ancho_disponible=p_0010206_js_f_03_ancho_disponible;

        p_0010206_js_f_03_display="";
        p_0010206_js_f_03_divs_repartir_ancho=0;
        p_0010206_js_f_03_divs_repartir_alto=0;

        for( p_0010206_js_f_03_bucle_01=0 ; p_0010206_js_f_03_bucle_01 < p_0010206_js_matriz_divs.length; p_0010206_js_f_03_bucle_01++ )
        {
            if( p_0010206_js_f_03_id_div_padre == p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][1] )
            {
                p_0010206_js_f_03_display="none";
                if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]) )
                {
                    p_0010206_js_f_03_display=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.display;
                };
                if( p_0010206_js_f_03_display != "none" )
                {
                    p_0010206_js_f_03_ancho_fijo="no";
                    p_0010206_js_f_03_ancho_calcular="no";
                    p_0010206_js_f_03_ancho_maximo_contenedor="no";
                    p_0010206_js_f_03_ancho_maximo_pxs=0;
                    p_0010206_js_f_03_ancho_minimo_pxs=0;
                    p_0010206_js_f_03_alto_fijo="no";
                    p_0010206_js_f_03_alto_calcular="no";
                    p_0010206_js_f_03_alto_maximo_contenedor="no";
                    p_0010206_js_f_03_alto_maximo_pxs=0;
                    p_0010206_js_f_03_alto_minimo_pxs=0;
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_ancho_fijo') )
                    {
                        p_0010206_js_f_03_ancho_fijo=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_ancho_fijo').value;
                    };
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_ancho_calcular') )
                    {
                        p_0010206_js_f_03_ancho_calcular=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_ancho_calcular').value;
                    };
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_ancho_maximo_contenedor') )
                    {
                        p_0010206_js_f_03_ancho_maximo_contenedor=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_ancho_maximo_contenedor').value;
                    };
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_ancho_maximo_pxs') )
                    {
                        p_0010206_js_f_03_ancho_maximo_pxs=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_ancho_maximo_pxs').value;
                    };
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_ancho_minimo_pxs') )
                    {
                        p_0010206_js_f_03_ancho_minimo_pxs=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_ancho_minimo_pxs').value;
                    };
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_alto_fijo') )
                    {
                        p_0010206_js_f_03_alto_fijo=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_alto_fijo').value;
                    };
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_alto_calcular') )
                    {
                        p_0010206_js_f_03_alto_calcular=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_alto_calcular').value;
                    };
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_alto_maximo_contenedor') )
                    {
                        p_0010206_js_f_03_alto_maximo_contenedor=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_alto_maximo_contenedor').value;
                    };
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_alto_maximo_pxs') )
                    {
                        p_0010206_js_f_03_alto_maximo_pxs=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_alto_maximo_pxs').value;
                    };
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_alto_minimo_pxs') )
                    {
                        p_0010206_js_f_03_alto_minimo_pxs=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]+'_input_alto_minimo_pxs').value;
                    };
                    if( p_0010206_js_f_03_ancho_calcular == "si" )
                    {
                        if( p_0010206_js_f_03_ancho_maximo_contenedor == "si" )
                        {
                            p_0010206_js_f_03_ancho_disponible=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][1]).style.width;
                            if( p_0010206_js_f_03_ancho_disponible.indexOf('%') > -1 )
                            {
                                p_0010206_js_f_03_ancho_disponible=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][1]).offsetWidth;
                            };
                            p_0010206_js_f_03_calculos=p_0010206_js_f_01_calcular_ancho_y_alto_disponibles( 'si', p_0010206_js_f_03_ancho_disponible, 'no', 0, p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0] );
                            p_0010206_js_f_03_ancho_disponible=p_0010206_js_f_03_calculos.p_0010206_js_f_01_ancho_disponible;
                            document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.width=p_0010206_js_f_03_ancho_disponible+"px";
                        }
                        else
                        {
                            p_0010206_js_f_03_calculos=p_0010206_js_f_01_calcular_ancho_y_alto_disponibles( 'si', p_0010206_js_f_03_acumulado_ancho_disponible, 'no', 0, p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0] );
                            p_0010206_js_f_03_acumulado_ancho_disponible=p_0010206_js_f_03_calculos.p_0010206_js_f_01_ancho_disponible;
                            if( p_0010206_js_f_03_ancho_fijo == "si" )
                            {


                                p_0010206_js_f_03_ancho="";
                                p_0010206_js_f_03_ancho=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.width;
                                if( p_0010206_js_f_03_ancho.length == parseInt(0) || p_0010206_js_f_03_ancho == null || p_0010206_js_f_03_ancho.indexOf('%') > -1 )
                                {
                                    p_0010206_js_f_03_ancho=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).offsetWidth;
                                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.borderLeftWidth.length>parseInt(0) )
                                    {
                                        p_0010206_js_f_03_border_left_width=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.borderLeftWidth;
                                        p_0010206_js_f_03_border_left_width=p_0010206_js_f_03_border_left_width.replace("px","");
                                    };
                                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.borderRightWidth.length>parseInt(0) )
                                    {
                                        p_0010206_js_f_03_border_right_width=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.borderRightWidth;
                                        p_0010206_js_f_03_border_right_width=p_0010206_js_f_03_border_right_width.replace("px","");
                                    };
                                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.paddingLeft.length>parseInt(0) )
                                    {
                                        p_0010206_js_f_03_padding_left=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.paddingLeft;
                                        p_0010206_js_f_03_padding_left=p_0010206_js_f_03_padding_left.replace("px","");
                                    };
                                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.paddingRight.length>parseInt(0) )
                                    {
                                        p_0010206_js_f_03_padding_right=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.paddingRight;
                                        p_0010206_js_f_03_padding_right=p_0010206_js_f_03_padding_right.replace("px","");
                                    };
                                    p_0010206_js_f_03_acumulado_ancho_disponible=parseInt(p_0010206_js_f_03_acumulado_ancho_disponible)+parseInt(p_0010206_js_f_03_border_left_width)+parseInt(p_0010206_js_f_03_border_right_width)+parseInt(p_0010206_js_f_03_padding_left)+parseInt(p_0010206_js_f_03_padding_right);
                                };
                                if( p_0010206_js_f_03_ancho.length > parseInt(0) )
                                {
                                    p_0010206_js_f_03_ancho=p_0010206_js_f_03_ancho.replace("px","");
                                };
                                p_0010206_js_f_03_acumulado_ancho_disponible=parseInt(p_0010206_js_f_03_acumulado_ancho_disponible)-parseInt(p_0010206_js_f_03_ancho);
                            }
                            else
                            {
                                p_0010206_js_f_03_divs_repartir_ancho=parseInt(p_0010206_js_f_03_divs_repartir_ancho)+parseInt(1);
                                document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.width="0px"
                            };
                        };
                    };
                    if( p_0010206_js_f_03_alto_calcular == "si" )
                    {
                        if( p_0010206_js_f_03_alto_maximo_contenedor == "si" )
                        {
                            p_0010206_js_f_03_alto_disponible=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][1]).style.height;
                            if( p_0010206_js_f_03_alto_disponible.indexOf('%') > -1 )
                            {
                                p_0010206_js_f_03_alto_disponible=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][1]).offsetHeight;
                            }
                            p_0010206_js_f_03_calculos=p_0010206_js_f_01_calcular_ancho_y_alto_disponibles( 'no', 0, 'si', p_0010206_js_f_03_alto_disponible, p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0] );
                            p_0010206_js_f_03_alto_disponible=p_0010206_js_f_03_calculos.p_0010206_js_f_01_alto_disponible;
                            document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.height=p_0010206_js_f_03_alto_disponible+"px";
                        }
                        else
                        {
                            p_0010206_js_f_03_calculos=p_0010206_js_f_01_calcular_ancho_y_alto_disponibles( 'no', 0, 'si', p_0010206_js_f_03_acumulado_alto_disponible, p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0] );
                            p_0010206_js_f_03_acumulado_alto_disponible=p_0010206_js_f_03_calculos.p_0010206_js_f_01_alto_disponible;
                            if( p_0010206_js_f_03_alto_fijo == "si" )
                            {
                                p_0010206_js_f_03_alto="";
                                p_0010206_js_f_03_alto=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.height;
                                if( p_0010206_js_f_03_alto.length == parseInt(0) || p_0010206_js_f_03_alto == null || p_0010206_js_f_03_alto.indexOf('%') > -1 )
                                {
                                    p_0010206_js_f_03_alto=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).offsetHeight;
                                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.borderTopWidth.length>parseInt(0) )
                                    {
                                        p_0010206_js_f_03_border_top_width=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.borderTopWidth;
                                        p_0010206_js_f_03_border_top_width=p_0010206_js_f_03_border_top_width.replace("px","");
                                    };
                                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.borderBottomWidth.length>parseInt(0) )
                                    {
                                        p_0010206_js_f_03_border_bottom_width=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.borderBottomWidth;
                                        p_0010206_js_f_03_border_bottom_width=p_0010206_js_f_03_border_bottom_width.replace("px","");
                                    };
                                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.paddingTop.length>parseInt(0) )
                                    {
                                        p_0010206_js_f_03_padding_top=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.paddingTop;
                                        p_0010206_js_f_03_padding_top=p_0010206_js_f_03_padding_top.replace("px","");
                                    };
                                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.paddingBottom.length>parseInt(0) )
                                    {
                                        p_0010206_js_f_03_padding_bottom=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_03_bucle_01][0]).style.paddingBottom;
                                        p_0010206_js_f_03_padding_bottom=p_0010206_js_f_03_padding_bottom.replace("px","");
                                    };
                                    p_0010206_js_f_03_acumulado_alto_disponible=parseInt(p_0010206_js_f_03_acumulado_alto_disponible)+parseInt(p_0010206_js_f_03_border_top_width)+parseInt(p_0010206_js_f_03_border_bottom_width)+parseInt(p_0010206_js_f_03_padding_top)+parseInt(p_0010206_js_f_03_padding_bottom);
                                };
                                if( p_0010206_js_f_03_alto.length > parseInt(0) )
                                {
                                    p_0010206_js_f_03_alto=p_0010206_js_f_03_alto.replace("px","");
                                };
                                p_0010206_js_f_03_acumulado_alto_disponible=parseInt(p_0010206_js_f_03_acumulado_alto_disponible)-parseInt(p_0010206_js_f_03_alto);
                            }
                            else
                            {
                                p_0010206_js_f_03_divs_repartir_alto=parseInt(p_0010206_js_f_03_divs_repartir_alto)+parseInt(1);
                            };
                        };
                    };
                };
            };
        };

    };

    return {
        p_0010206_js_f_03_divs_repartir_ancho: p_0010206_js_f_03_divs_repartir_ancho
        , p_0010206_js_f_03_acumulado_ancho_disponible: p_0010206_js_f_03_acumulado_ancho_disponible
        , p_0010206_js_f_03_divs_repartir_alto: p_0010206_js_f_03_divs_repartir_alto
        , p_0010206_js_f_03_acumulado_alto_disponible: p_0010206_js_f_03_acumulado_alto_disponible
    }; 

}

function p_0010206_js_f_04_redimensionar_elementos_con_calculos_repartidos( p_0010206_js_f_04_id_div_padre, p_0010206_js_f_04_acumulado_alto_disponible, p_0010206_js_f_04_acumulado_ancho_disponible, p_0010206_js_f_04_divs_repartir_ancho, p_0010206_js_f_04_divs_repartir_alto )
{

    var p_0010206_js_f_04_bucle_01=0;
    var p_0010206_js_f_04_alto_disponible_dividido=0;
    var p_0010206_js_f_04_ancho_disponible_dividido=0;
    var p_0010206_js_f_04_display="";
    var p_0010206_js_f_04_divs_repartidos_ancho=0;
    var p_0010206_js_f_04_divs_repartidos_alto=0;
    var p_0010206_js_f_04_ancho_fijo="no";
    var p_0010206_js_f_04_ancho_calcular="no";
    var p_0010206_js_f_04_ancho_maximo_contenedor="no";
    var p_0010206_js_f_04_ancho_maximo_pxs=0;
    var p_0010206_js_f_04_ancho_minimo_pxs=0;
    var p_0010206_js_f_04_alto_fijo="no";
    var p_0010206_js_f_04_alto_calcular="no";
    var p_0010206_js_f_04_alto_maximo_contenedor="no";
    var p_0010206_js_f_04_alto_maximo_pxs=0;
    var p_0010206_js_f_04_alto_minimo_pxs=0;
    
    if( p_0010206_js_matriz_divs.length > parseInt(0) )
    {

        if( parseInt(p_0010206_js_f_04_divs_repartir_ancho) > parseInt(0) && parseInt(p_0010206_js_f_04_acumulado_ancho_disponible) > parseInt(0) )
        {
            p_0010206_js_f_04_ancho_disponible_dividido=parseInt((parseInt(p_0010206_js_f_04_acumulado_ancho_disponible)-parseInt(0))/parseInt(p_0010206_js_f_04_divs_repartir_ancho));
        };
        if( parseInt(p_0010206_js_f_04_divs_repartir_alto) > parseInt(0) && parseInt(p_0010206_js_f_04_acumulado_alto_disponible) > parseInt(0) )
        {
            p_0010206_js_f_04_alto_disponible_dividido=parseInt(parseInt(p_0010206_js_f_04_acumulado_alto_disponible)/parseInt(p_0010206_js_f_04_divs_repartir_alto));
        };

        for( p_0010206_js_f_04_bucle_01=0 ; p_0010206_js_f_04_bucle_01 < p_0010206_js_matriz_divs.length; p_0010206_js_f_04_bucle_01++ )
        {
            if( p_0010206_js_f_04_id_div_padre == p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][1] )
            {

                p_0010206_js_f_04_display="none";
                if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]) )
                {
                    p_0010206_js_f_04_display=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]).style.display;
                };
                if( p_0010206_js_f_04_display != "none" )
                {
                    p_0010206_js_f_04_ancho_fijo="no";
                    p_0010206_js_f_04_ancho_calcular="no";
                    p_0010206_js_f_04_ancho_maximo_contenedor="no";
                    p_0010206_js_f_04_ancho_maximo_pxs=0;
                    p_0010206_js_f_04_ancho_minimo_pxs=0;
                    p_0010206_js_f_04_alto_fijo="no";
                    p_0010206_js_f_04_alto_calcular="no";
                    p_0010206_js_f_04_alto_maximo_contenedor="no";
                    p_0010206_js_f_04_alto_maximo_pxs=0;
                    p_0010206_js_f_04_alto_minimo_pxs=0;
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_ancho_fijo') )
                    {
                        p_0010206_js_f_04_ancho_fijo=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_ancho_fijo').value;
                    };
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_ancho_calcular') )
                    {
                        p_0010206_js_f_04_ancho_calcular=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_ancho_calcular').value;
                    };
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_ancho_maximo_contenedor') )
                    {
                        p_0010206_js_f_04_ancho_maximo_contenedor=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_ancho_maximo_contenedor').value;
                    };
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_ancho_maximo_pxs') )
                    {
                        p_0010206_js_f_04_ancho_maximo_pxs=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_ancho_maximo_pxs').value;
                    };
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_ancho_minimo_pxs') )
                    {
                        p_0010206_js_f_04_ancho_minimo_pxs=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_ancho_minimo_pxs').value;
                    };
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_alto_fijo') )
                    {
                        p_0010206_js_f_04_alto_fijo=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_alto_fijo').value;
                    };
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_alto_calcular') )
                    {
                        p_0010206_js_f_04_alto_calcular=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_alto_calcular').value;
                    };
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_alto_maximo_contenedor') )
                    {
                        p_0010206_js_f_04_alto_maximo_contenedor=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_alto_maximo_contenedor').value;
                    };
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_alto_maximo_pxs') )
                    {
                        p_0010206_js_f_04_alto_maximo_pxs=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_alto_maximo_pxs').value;
                    };
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_alto_minimo_pxs') )
                    {
                        p_0010206_js_f_04_alto_minimo_pxs=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]+'_input_alto_minimo_pxs').value;
                    };
                    if( p_0010206_js_f_04_ancho_calcular == "si" )
                    {
                        if( p_0010206_js_f_04_ancho_maximo_contenedor == "no" )
                        {
                            if( p_0010206_js_f_04_ancho_fijo == "no" )
                            {
                                if( parseInt(p_0010206_js_f_04_ancho_disponible_dividido) > parseInt(0) )
                                {
                                    p_0010206_js_f_04_divs_repartidos_ancho=parseInt(p_0010206_js_f_04_divs_repartidos_ancho)+parseInt(1);
                                    if( parseInt(p_0010206_js_f_04_divs_repartir_ancho) > parseInt(p_0010206_js_f_04_divs_repartidos_ancho) )
                                    {
                                        document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]).style.width=p_0010206_js_f_04_ancho_disponible_dividido+"px";
                                        p_0010206_js_f_04_acumulado_ancho_disponible=parseInt(p_0010206_js_f_04_acumulado_ancho_disponible)-parseInt(p_0010206_js_f_04_ancho_disponible_dividido);
                                    }
                                    else
                                    {
                                        document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]).style.width=p_0010206_js_f_04_acumulado_ancho_disponible+"px";
                                    };
                                };
                            };
                        };
                    };
                    if( p_0010206_js_f_04_alto_calcular == "si" )
                    {
                        if( p_0010206_js_f_04_alto_maximo_contenedor == "no" )
                        {
                            if( p_0010206_js_f_04_alto_fijo == "no" )
                            {
                                if( parseInt(p_0010206_js_f_04_alto_disponible_dividido) > parseInt(0) )
                                {
                                    p_0010206_js_f_04_divs_repartidos_alto=parseInt(p_0010206_js_f_04_divs_repartidos_alto)+parseInt(1);
                                    if( parseInt(p_0010206_js_f_04_divs_repartir_alto) > parseInt(p_0010206_js_f_04_divs_repartidos_alto) )
                                    {
                                        document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]).style.height=p_0010206_js_f_04_alto_disponible_dividido+"px";
                                        p_0010206_js_f_04_acumulado_alto_disponible=parseInt(p_0010206_js_f_04_acumulado_alto_disponible)-parseInt(p_0010206_js_f_04_alto_disponible_dividido);
                                    }
                                    else
                                    {
                                        document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_04_bucle_01][0]).style.height=p_0010206_js_f_04_acumulado_alto_disponible+"px";
                                    };
                                };
                            };
                        };
                    };
                };
            };
        };
    };

}

function p_0010206_js_f_99_dimensionar_elementos( p_0010206_js_f_99_id_div_inicial, p_0010206_js_f_99_forzar_calculo, p_0010206_js_f_99_input_ancho_navegador, p_0010206_js_f_99_input_alto_navegador, p_0010206_js_f_99_id_div_contenedor_todo )
{

    var p_0010206_js_f_99_div_inicial="";
    var p_0010206_js_f_99_bucle_01=0;
    var p_0010206_js_f_99_bucle_02=0;
    var p_0010206_js_f_99_alto_disponible=0;
    var p_0010206_js_f_99_ancho_disponible=0;
    var p_0010206_js_f_99_padre_alto_disponible=0;
    var p_0010206_js_f_99_padre_ancho_disponible=0;
    var p_0010206_js_f_99_acumulado_alto_disponible=0;
    var p_0010206_js_f_99_acumulado_ancho_disponible=0;
    var p_0010206_js_f_99_alto_disponible_dividido=0;
    var p_0010206_js_f_99_ancho_disponible_dividido=0;
    var p_0010206_js_f_99_calculos="";
    var p_0010206_js_f_99_padre="";
    var p_0010206_js_f_99_display="";
    var p_0010206_js_f_99_divs_repartir_ancho=0;
    var p_0010206_js_f_99_divs_repartidos_ancho=0;
    var p_0010206_js_f_99_divs_repartir_alto=0;
    var p_0010206_js_f_99_divs_repartidos_alto=0;
    var p_0010206_js_f_99_ancho_fijo="no";
    var p_0010206_js_f_99_ancho_calcular="no";
    var p_0010206_js_f_99_ancho_maximo_contenedor="no";
    var p_0010206_js_f_99_ancho_maximo_pxs=0;
    var p_0010206_js_f_99_ancho_minimo_pxs=0;
    var p_0010206_js_f_99_alto_fijo="no";
    var p_0010206_js_f_99_alto_calcular="no";
    var p_0010206_js_f_99_alto_maximo_contenedor="no";
    var p_0010206_js_f_99_alto_maximo_pxs=0;
    var p_0010206_js_f_99_alto_minimo_pxs=0;
    var p_0010206_js_f_99_overflow_alto=0;
    var p_0010206_js_f_99_overflow_alto_offset=0;
    var p_0010206_js_f_99_overflow_alto_scroll=0;
    var p_0010206_js_f_99_overflow_ancho=0;
    var p_0010206_js_f_99_overflow_ancho_offset=0;
    var p_0010206_js_f_99_overflow_ancho_scroll=0;
    
    if( p_0010206_js_f_99_forzar_calculo == "si" || parseInt(document.getElementById(p_0010206_js_f_99_input_ancho_navegador).value) != parseInt(document.body.clientWidth) || parseInt(document.getElementById(p_0010206_js_f_99_input_alto_navegador).value) != parseInt(document.body.clientHeight) || parseFloat( document.documentElement.clientWidth / window.innerWidth ) != 1 )
    {
        
        //generar matriz con los divs de los que hemos de calcular las dimesiones -inicio

        p_0010206_js_f_99_display="none";
        if( document.getElementById(p_0010206_js_f_99_id_div_inicial) )
        {
            p_0010206_js_f_99_display=document.getElementById(p_0010206_js_f_99_id_div_inicial).style.display;
        };
        if( p_0010206_js_f_99_display != "none" )
        {
            p_0010206_js_matriz_divs.length=0;
            p_0010206_js_f_02_calcular_elementos_matriz( p_0010206_js_f_99_id_div_inicial );
        };

        //generar matriz con los divs de los que hemos de calcular las dimesiones -fin

        //calcular dimensiones de los divs -inicio

        if( p_0010206_js_matriz_divs.length > parseInt(0) )
        {

            p_0010206_js_f_99_padre="";
            for( p_0010206_js_f_99_bucle_01=0 ; p_0010206_js_f_99_bucle_01 < p_0010206_js_matriz_divs.length; p_0010206_js_f_99_bucle_01++ )
            {
                
                p_0010206_js_f_99_display="none";
                if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]) )
                {
                    p_0010206_js_f_99_display=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).style.display;
                };
                if( p_0010206_js_f_99_display != "none" )
                {

                    if( p_0010206_js_f_99_padre != p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][1] )
                    {
                        
                        if( p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][1] == "body" )
                        {
    
                            p_0010206_js_f_99_alto_disponible=document.body.clientHeight;
                            p_0010206_js_f_99_ancho_disponible=document.body.clientWidth;
                        
                            document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).style.overflowX="hidden";
                            document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).style.overflowY="hidden";
                            p_0010206_js_f_99_calculos=p_0010206_js_f_01_calcular_ancho_y_alto_disponibles( 'si', p_0010206_js_f_99_ancho_disponible, 'si', p_0010206_js_f_99_alto_disponible, p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0] );
                            p_0010206_js_f_99_alto_disponible=p_0010206_js_f_99_calculos.p_0010206_js_f_01_alto_disponible;
                            p_0010206_js_f_99_ancho_disponible=p_0010206_js_f_99_calculos.p_0010206_js_f_01_ancho_disponible;
                        
                            document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).style.height=p_0010206_js_f_99_alto_disponible+"px";
                            document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).style.width=p_0010206_js_f_99_ancho_disponible+"px";
                            p_0010206_js_f_99_div_inicial=p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0];
    
                        }
                        else
                        {
    
                            if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][1]) )
                            {

                                document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][1]).style.overflowX="hidden";
                                document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][1]).style.overflowY="hidden";

                                p_0010206_js_f_99_alto_disponible=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][1]).style.height;
                                if( p_0010206_js_f_99_alto_disponible.indexOf('%') > -1 )
                                {
                                    p_0010206_js_f_99_alto_disponible=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][1]).offsetHeight;
                                };
                                p_0010206_js_f_99_ancho_disponible=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][1]).style.width;
                                if( p_0010206_js_f_99_ancho_disponible.indexOf('%') > -1 )
                                {
                                    p_0010206_js_f_99_ancho_disponible=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][1]).offsetWidth;
                                };
                                p_0010206_js_f_99_padre_alto_disponible=p_0010206_js_f_99_alto_disponible;
                                p_0010206_js_f_99_padre_ancho_disponible=p_0010206_js_f_99_ancho_disponible;
                                p_0010206_js_f_99_acumulado_alto_disponible=p_0010206_js_f_99_alto_disponible;
                                p_0010206_js_f_99_acumulado_ancho_disponible=p_0010206_js_f_99_ancho_disponible;
        
                                p_0010206_js_f_99_display="";
                                p_0010206_js_f_99_alto_disponible_dividido=0;
                                p_0010206_js_f_99_ancho_disponible_dividido=0;
                                p_0010206_js_f_99_divs_repartir_ancho=0;
                                p_0010206_js_f_99_divs_repartidos_ancho=0;
                                p_0010206_js_f_99_divs_repartir_alto=0;
                                p_0010206_js_f_99_divs_repartidos_alto=0;
        
                                //redimensionar elementos con calculos directos -inicio
        
                                p_0010206_js_f_99_calculos=p_0010206_js_f_03_redimensionar_elementos_con_calculos_directos( p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][1] );
                                p_0010206_js_f_99_divs_repartir_ancho=p_0010206_js_f_99_calculos.p_0010206_js_f_03_divs_repartir_ancho;
                                p_0010206_js_f_99_divs_repartir_alto=p_0010206_js_f_99_calculos.p_0010206_js_f_03_divs_repartir_alto;
                                p_0010206_js_f_99_acumulado_ancho_disponible=p_0010206_js_f_99_calculos.p_0010206_js_f_03_acumulado_ancho_disponible;
                                p_0010206_js_f_99_acumulado_alto_disponible=p_0010206_js_f_99_calculos.p_0010206_js_f_03_acumulado_alto_disponible;
        
                                //redimensionar elementos con calculos directos -fin
        
                                //redimensionar elemnetos con calculos repartidos -inicio
        
                                if( parseInt(p_0010206_js_f_99_divs_repartir_ancho) > parseInt(0) || parseInt(p_0010206_js_f_99_divs_repartir_alto) > parseInt(0) )
                                {
        
                                    p_0010206_js_f_99_calculos=p_0010206_js_f_04_redimensionar_elementos_con_calculos_repartidos( p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][1], p_0010206_js_f_99_acumulado_alto_disponible, p_0010206_js_f_99_acumulado_ancho_disponible, p_0010206_js_f_99_divs_repartir_ancho, p_0010206_js_f_99_divs_repartir_alto );
        
                                };
        
                                //redimensionar elemnetos con calculos repartidos -fin

                            };

                        };
    
                    };
    
                    p_0010206_js_f_99_padre=p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][1];
    
                };

            };

        };

        //calcular dimensiones de los divs -fin

        //Revisar si hemos de mostrar las barras de desplazamiento -inicio

        if( p_0010206_js_matriz_divs.length > parseInt(0) )
        {
            for( p_0010206_js_f_99_bucle_01=0 ; p_0010206_js_f_99_bucle_01 < p_0010206_js_matriz_divs.length; p_0010206_js_f_99_bucle_01++ )
            {

                if( p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0].length > parseInt(0) )
                {

                    p_0010206_js_f_99_display="none";
                    if( document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]) )
                    {
                        p_0010206_js_f_99_display=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).style.display;
                    };
                    if( p_0010206_js_f_99_display != "none" )
                    {

                        p_0010206_js_f_99_overflow_alto=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).style.height;
                        if( p_0010206_js_f_99_overflow_alto.indexOf('%') > -1 )
                        {
                            p_0010206_js_f_99_overflow_alto=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).offsetHeight;
                        };
                        p_0010206_js_f_99_overflow_alto=p_0010206_js_f_99_overflow_alto.replace("px","");
                        p_0010206_js_f_99_overflow_alto_offset=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).offsetHeight;
                        p_0010206_js_f_99_overflow_alto_scroll=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).scrollHeight;
                        p_0010206_js_f_99_overflow_ancho=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).style.width;
                        if( p_0010206_js_f_99_overflow_ancho.indexOf('%') > -1 )
                        {
                            p_0010206_js_f_99_overflow_ancho=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).offsetWidth;
                        };
                        p_0010206_js_f_99_overflow_ancho=p_0010206_js_f_99_overflow_ancho.replace("px","");
                        p_0010206_js_f_99_overflow_ancho_offset=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).offsetWidth;
                        p_0010206_js_f_99_overflow_ancho_scroll=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).scrollWidth;
                        if( parseInt(parseInt(p_0010206_js_f_99_overflow_alto)+parseInt(20)) < parseInt(p_0010206_js_f_99_overflow_alto_offset) || parseInt(parseInt(p_0010206_js_f_99_overflow_alto)+parseInt(20)) < parseInt(p_0010206_js_f_99_overflow_alto_scroll) )
                        {
                            document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).style.overflowY="auto";
                        };
                        if( parseInt(parseInt(p_0010206_js_f_99_overflow_ancho)+parseInt(20)) < parseInt(p_0010206_js_f_99_overflow_ancho_offset) || parseInt(parseInt(p_0010206_js_f_99_overflow_ancho)+parseInt(20)) < parseInt(p_0010206_js_f_99_overflow_ancho_scroll) )
                        {
                            document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).style.overflowX="auto";
                        };
                        if( parseInt(parseInt(p_0010206_js_f_99_overflow_alto)+parseInt(20)) < parseInt(p_0010206_js_f_99_overflow_alto_offset) || parseInt(parseInt(p_0010206_js_f_99_overflow_alto)+parseInt(20)) < parseInt(p_0010206_js_f_99_overflow_alto_scroll) || parseInt(parseInt(p_0010206_js_f_99_overflow_ancho)+parseInt(20)) < parseInt(p_0010206_js_f_99_overflow_ancho_offset) || parseInt(parseInt(p_0010206_js_f_99_overflow_ancho)+parseInt(20)) < parseInt(p_0010206_js_f_99_overflow_ancho_scroll) )
                        {
    
                            p_0010206_js_f_99_alto_disponible=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).style.height;
                            if( p_0010206_js_f_99_alto_disponible.indexOf('%') > -1 )
                            {
                                p_0010206_js_f_99_alto_disponible=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).offsetHeight;
                            };
                            p_0010206_js_f_99_ancho_disponible=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).style.width;
                            if( p_0010206_js_f_99_ancho_disponible.indexOf('%') > -1 )
                            {
                                p_0010206_js_f_99_ancho_disponible=document.getElementById(p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0]).offsetWidth;
                            };
                            p_0010206_js_f_99_padre_alto_disponible=p_0010206_js_f_99_alto_disponible;
                            p_0010206_js_f_99_padre_ancho_disponible=p_0010206_js_f_99_ancho_disponible;
                            p_0010206_js_f_99_acumulado_alto_disponible=p_0010206_js_f_99_alto_disponible;
                            p_0010206_js_f_99_acumulado_ancho_disponible=p_0010206_js_f_99_ancho_disponible;
    
                            p_0010206_js_f_99_display="";
                            p_0010206_js_f_99_alto_disponible_dividido=0;
                            p_0010206_js_f_99_ancho_disponible_dividido=0;
                            p_0010206_js_f_99_divs_repartir_ancho=0;
                            p_0010206_js_f_99_divs_repartidos_ancho=0;
                            p_0010206_js_f_99_divs_repartir_alto=0;
                            p_0010206_js_f_99_divs_repartidos_alto=0;
    
                            //redimensionar elementos con calculos directos -inicio
    
                            p_0010206_js_f_99_calculos=p_0010206_js_f_03_redimensionar_elementos_con_calculos_directos( p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0] );
                            p_0010206_js_f_99_divs_repartir_ancho=p_0010206_js_f_99_calculos.p_0010206_js_f_03_divs_repartir_ancho;
                            p_0010206_js_f_99_divs_repartir_alto=p_0010206_js_f_99_calculos.p_0010206_js_f_03_divs_repartir_alto;
                            p_0010206_js_f_99_acumulado_ancho_disponible=p_0010206_js_f_99_calculos.p_0010206_js_f_03_acumulado_ancho_disponible;
                            p_0010206_js_f_99_acumulado_alto_disponible=p_0010206_js_f_99_calculos.p_0010206_js_f_03_acumulado_alto_disponible;
    
                            //redimensionar elementos con calculos directos -fin
    
                            //redimensionar elemnetos con calculos repartidos -inicio
    
                            if( parseInt(p_0010206_js_f_99_divs_repartir_ancho) > parseInt(0) || parseInt(p_0010206_js_f_99_divs_repartir_alto) > parseInt(0) )
                            {
    
                                p_0010206_js_f_99_acumulado_ancho_disponible=p_0010206_js_f_99_calculos.p_0010206_js_f_03_acumulado_ancho_disponible;
                                if( parseInt(parseInt(p_0010206_js_f_99_overflow_ancho)+parseInt(20)) < parseInt(p_0010206_js_f_99_overflow_ancho_offset) || parseInt(parseInt(p_0010206_js_f_99_overflow_ancho)+parseInt(20)) < parseInt(p_0010206_js_f_99_overflow_ancho_scroll) )
                                {
                                    p_0010206_js_f_99_acumulado_alto_disponible=parseInt(p_0010206_js_f_99_acumulado_alto_disponible)-parseInt(20);
                                };
                                p_0010206_js_f_99_acumulado_alto_disponible=p_0010206_js_f_99_calculos.p_0010206_js_f_03_acumulado_alto_disponible;
                                if( parseInt(parseInt(p_0010206_js_f_99_overflow_alto)+parseInt(20)) < parseInt(p_0010206_js_f_99_overflow_alto_offset) || parseInt(parseInt(p_0010206_js_f_99_overflow_alto)+parseInt(20)) < parseInt(p_0010206_js_f_99_overflow_alto_scroll) )
                                {
                                    p_0010206_js_f_99_acumulado_ancho_disponible=parseInt(p_0010206_js_f_99_acumulado_ancho_disponible)-parseInt(20);
                                };
    
                                p_0010206_js_f_99_calculos=p_0010206_js_f_04_redimensionar_elementos_con_calculos_repartidos( p_0010206_js_matriz_divs[p_0010206_js_f_99_bucle_01][0], p_0010206_js_f_99_acumulado_alto_disponible, p_0010206_js_f_99_acumulado_ancho_disponible, p_0010206_js_f_99_divs_repartir_ancho, p_0010206_js_f_99_divs_repartir_alto );
    
                            };
    
                            //redimensionar elemnetos con calculos repartidos -fin
    
                        };

                    };

                };
            };
        };

        //Revisar si hemos de mostrar las barras de desplazamiento -fin

        if( document.getElementById(p_0010206_js_f_99_input_ancho_navegador) )
        {
            document.getElementById(p_0010206_js_f_99_input_ancho_navegador).value=document.body.clientWidth;
            document.getElementById(p_0010206_js_f_99_input_alto_navegador).value=document.body.clientHeight;
            if( document.getElementById(p_0010206_js_f_99_div_inicial) )
            {
                document.getElementById(p_0010206_js_f_99_div_inicial).style.overflowX="auto";
                document.getElementById(p_0010206_js_f_99_div_inicial).style.overflowY="auto";
            };
        };

    };

}