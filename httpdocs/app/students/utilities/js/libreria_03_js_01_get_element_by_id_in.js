/*
Page ID: p_0010231
File: /utilities/js/libreria_03_js_01_get_element_by_id_in.js
*/
function p_0010231_gebi(id)
{
	if(this === window) t=document;
	else t=this||document;
	r=undefined;
	
	function p_0010231_recorer(n)
	{
		for (i in n.childNodes)
		{
			if(
				n.childNodes[i].nodeType==1 
				&& typeof r == "undefined"
			)
			{
				if(typeof n.childNodes[i].id != "undefined")
				if(n.childNodes[i].id == id)
				{
					r=n.childNodes[i];
					r.gebi=p_0010231_gebi;
				}
				p_0010231_recorer(n.childNodes[i]);
			}
		}
	}
	
	p_0010231_recorer(t);
	return r;
}

gebi = p_0010231_gebi; //atajo