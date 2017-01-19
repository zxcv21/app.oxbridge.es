/*
Page ID: p_0010197
File: /utilities/js/cookies_01_set_get.js
*/

function p_0010197_cookie(op, cname, cvalue, exdays) {
    var r = "undefined";
	if (op === "get")
	{
		var name = cname + "=";
		var ca = document.cookie.split(';');
		for(var i=0; i<ca.length; i++)
		{
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1);
			if (c.indexOf(name) == 0) r= c.substring(name.length,c.length);
		}
	}
	else if (op === "set")
	{
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+d.toUTCString();
		document.cookie = cname + "=" + cvalue + "; " + expires;
		r= true;
	}
	else if(op === "del")
	{
		var d = new Date();
		d.setTime(d.getTime() - (1*24*60*60*1000));
		var expires = "expires="+d.toUTCString();
		document.cookie = cname + "=" + 0 + "; " + expires;
		return true;
	}
	else
	{
		r = false;
	}
	return r;
}
/*
SINTAX p_0010197_cookie("get/set/del"(string),"name"(string)[,"value"(string),exdays(number)])
*/