/*
Page ID: p_0010195
File: /utilities/js/match_01_operaciones_01_numeros_grandes.js
*/
function p_0010195_operacion(n1,op,n2)
{
	var pos=0;
	var r="";
	var a=n1.replace(/^0*/,"").replace(/^-0*/,"-").split("").reverse();
	var b=n2.replace(/^0*/,"").replace(/^-0*/,"-").split("").reverse();
	var res=[];
	var again=true;
	var again_c=0;
	
	for(i in a) a[i]=parseInt(a[i]);
	for(i in b) b[i]=parseInt(b[i]);
	
	switch(op)
	{
		case "%":
		{
			break;
		}
		case "+":
		{
			break;
		}
		case "-":
		{
			if(p_0010195_operacion(n2,">",n1))
			{
				r="-"+p_0010195_operacion(n2,"-",n1);
			}
			else
			{
				pos=b.length-1;
				for(i in b)
				{
					if(b[pos-i]!="-")
					{
						a[pos-i]-=b[pos-i];
						
						if(a[pos-i]<0)
						{
							a[pos-i]+=10;
							while(again)
							{
								a[pos-i+1+again_c]--;
								if(a[pos-i+1+again_c]<0)
								{
									a[pos-i+1+again_c]+=10;
								}
								else
								{
									again=false;
								}
								
								again_c++;
							}
							again=true;
							again_c=0;
						}
					}
				}
			}
			break;
		}
		
		case "/":
		{
			break;
		}
		
		case "*":
		{
			break;
		}
		
		case ">":
		case "<":
		{
			a.reverse();
			b.reverse();
			
			if(a[0]=="-"&&b[0]!="-") r=false;
			else if(a[0]!="-"&&b[0]=="-") r=true;
			else
			{
				if(a.lenght>b.lenght) r=true;
				else if(a.lenght<b.lenght) r=false;
				else
				{
					while(again)
					{
						if(typeof a[again_c] != "undefined")
						{
							if(a[again_c]>b[again_c])
							{
								r=true;
								again=false;
							}
							else if(a[again_c]<b[again_c])
							{
								r=false;
								again=false;
							}
						}
						else
						{
							r="=";
							again=false;
						}
						
						again_c++;
					}
					var again=true;
					var again_c=0;
				}
			} 
			
			if(r=="=")
			{
				r=false;
			}
			else
			{
				if(a[0]!="-"&&b[0]!="-") r=!r; 
				if(op=="<") r=!r;
			}
			
			break;
		}
		
		default:
		{
			r="NaN";
			break;
		}
	}
	
	if(typeof r != "boolean")
	{		
		if(r=="") for(i in a.reverse()) r+=a[i];
		r=r.replace(/^0*/,"").replace(/^-0*/,"-");
		if(r=="")r="0";
	}
	return r;
}