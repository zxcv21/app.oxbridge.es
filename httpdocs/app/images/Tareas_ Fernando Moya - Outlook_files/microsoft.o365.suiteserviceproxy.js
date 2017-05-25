﻿try { window.scriptsLoaded = window.scriptsLoaded || {}; window.scriptProcessStart = window.scriptProcessStart || {}; window.scriptProcessStart['microsoft.o365.suiteserviceproxy.js'] = (new Date()).getTime();
if(typeof window.O365SuiteServiceProxy=="undefined"){window.O365SuiteServiceProxy={};window.O365SuiteServiceProxy.__namespace=!0}Type.registerNamespace("O365SuiteServiceProxy");O365SuiteServiceProxy.u=function(){};O365SuiteServiceProxy.u.registerInterface("O365SuiteServiceProxy.u");O365SuiteServiceProxy.j=function(){};O365SuiteServiceProxy.j.prototype={noExoLicense:1,brs:2,tokenExpired:3,languageNotSet:4,initFailed:5,securityZoneMismatched:6,iframeLoadError:7,callerOriginNotAllowed:8};O365SuiteServiceProxy.j.registerEnum("O365SuiteServiceProxy.j",!1);O365SuiteServiceProxy.v=function(){};O365SuiteServiceProxy.REF=function(){};O365SuiteServiceProxy.REF.d=function(){return O365SuiteServiceProxy.REF.a||O365SuiteServiceProxy.REF.e()};O365SuiteServiceProxy.REF.get_SI=function(){return O365SuiteServiceProxy.REF.b||O365SuiteServiceProxy.REF.g()};O365SuiteServiceProxy.REF.get_SSI=function(){return O365SuiteServiceProxy.REF.c||O365SuiteServiceProxy.REF.f()};O365SuiteServiceProxy.REF.e=function(){O365SuiteServiceProxy.c.b();if(!_o365su.a.a(O365SuiteServiceProxy.c.a.a)){O365SuiteServiceProxy.REF.a=new O365SuiteServiceProxy.RequestExecutor(O365SuiteServiceProxy.c.a.a,"SuiteServiceProxy.aspx?exsvurl=1&realm=office365.com");O365SuiteServiceProxy.REF.a.c(O365SuiteServiceProxy.ServiceHandlers.onBeforeSendRequestAdmin)}return O365SuiteServiceProxy.REF.a};O365SuiteServiceProxy.REF.g=function(){O365SuiteServiceProxy.c.b();if(!_o365su.a.a(O365SuiteServiceProxy.c.a.c)){var n=String.format("{0}&returnUrl={1}","SuiteServiceProxy.aspx?exsvurl=1&realm=office365.com",encodeURIComponent(window.location.href));O365SuiteServiceProxy.REF.b=new O365SuiteServiceProxy.RequestExecutor(O365SuiteServiceProxy.c.a.c,n);O365SuiteServiceProxy.REF.b.c(O365SuiteServiceProxy.ServiceHandlers.onBeforeSendRequestSuiteService)}return O365SuiteServiceProxy.REF.b};O365SuiteServiceProxy.REF.f=function(){O365SuiteServiceProxy.c.b();_o365su.a.a(O365SuiteServiceProxy.c.a.b)||(O365SuiteServiceProxy.REF.c=new O365SuiteServiceProxy.RequestExecutor(O365SuiteServiceProxy.c.a.b,"SuiteDataSharingProxy.aspx"));return O365SuiteServiceProxy.REF.c};O365SuiteServiceProxy.i=function(){};O365SuiteServiceProxy.i.prototype={d:null,e:null,j:!1,h:!1,f:null,c:6e4,g:null,k:null,b:null,m:null,a:null,i:null,l:null};O365SuiteServiceProxy.m=function(){};O365SuiteServiceProxy.m.prototype={c:null,b:null,d:0,a:null,e:null};O365SuiteServiceProxy.g=function(){this.b={}};O365SuiteServiceProxy.g.prototype={h:!1,i:null,d:0,g:null,j:!1,a:null,e:null,f:null,c:null};O365SuiteServiceProxy.c=function(n,t,i,r,u,f){this.d=n;this.c=n.substring(0,n.lastIndexOf("/"));this.a=t;this.j=i;this.h=r;this.e=u;this.b=f};O365SuiteServiceProxy.c.d=function(n,t,i,r,u,f){O365SuiteServiceProxy.c.a=new O365SuiteServiceProxy.c(n,t,i,r,u,f)};O365SuiteServiceProxy.c.b=function(){if(!O365SuiteServiceProxy.c.a)throw Error.invalidOperation("SessionData not initialized");};O365SuiteServiceProxy.c.prototype={c:null,a:null,d:null,b:null,j:!1,h:null,e:!1,i:null,f:null,g:null};O365SuiteServiceProxy.RequestExecutor=function(n,t){O365SuiteServiceProxy.a.e(n,"url","string",!0);if(O365SuiteServiceProxy.a.c(n))throw O365SuiteServiceProxy.a.f("url");var i=n.indexOf("?");if(i>=0)throw O365SuiteServiceProxy.a.f("url");i=n.indexOf("#");if(i>=0)throw O365SuiteServiceProxy.a.f("url");n.charAt(0)==="/"&&(n=O365SuiteServiceProxy.RequestExecutor.p(window.location.href,n));O365SuiteServiceProxy.a.g(n,"url");n.charCodeAt(n.length-1)==="/".charCodeAt(0)&&(n=n.substr(0,n.length-1));n=n.toLowerCase();this.f=n;this.e=O365SuiteServiceProxy.d.a(n)===O365SuiteServiceProxy.d.a(window.location.href)?1:2;this.formDigestHandlingEnabled=!1;this.iFrameSourceUrl=t;_o365su.c.a(window.self,"unload",O365SuiteServiceProxy.RequestExecutor.N,!1)};O365SuiteServiceProxy.RequestExecutor.p=function(n,t){O365SuiteServiceProxy.a.g(n,"baseUrl");if(t.substr(0,8).toLowerCase()==="https://"||t.substr(0,7).toLowerCase()==="https://")return t;else if(t.charAt(0)==="/"){var i=n.indexOf("://");i=n.indexOf("/",i+3);i>0&&(n=n.substr(0,i));return n+t}else{n.charAt(n.length-1)!=="/"&&(n=n+"/");return n+t}};O365SuiteServiceProxy.RequestExecutor.i=function(n){O365SuiteServiceProxy.a.g(n,"url");return O365SuiteServiceProxy.d.a(n)};O365SuiteServiceProxy.RequestExecutor.v=function(n){return document.getElementById(n)};O365SuiteServiceProxy.RequestExecutor.G=function(n){O365.Log.a(403247,1,13,0,n);var t;t=document.createElement("IFRAME");t.src=n;t.id=n;t.style.display="none";var r=function(){O365.PM.rle("I2");var t=O365SuiteServiceProxy.RequestExecutorNative.getIFrameOnloadCallback(n);t()};_o365su.c.a(t,"load",r,!1);document.body.appendChild(t);O365.PM.rle("I1");var i=window.setTimeout(function(){delete O365SuiteServiceProxy.RequestExecutor.b[n];O365SuiteServiceProxy.RequestExecutor.D(n)},15e3);O365SuiteServiceProxy.RequestExecutor.b[n]=i;return t};O365SuiteServiceProxy.RequestExecutor.H=function(n,t,i,r,u){O365SuiteServiceProxy.RequestExecutor.j||(O365SuiteServiceProxy.RequestExecutor.j={});O365SuiteServiceProxy.RequestExecutor.n||(O365SuiteServiceProxy.RequestExecutor.n={});n=n.toLowerCase();var o=new Date;if(!i||r.e.toUpperCase()==="GET"||!O365SuiteServiceProxy.a.a(O365SuiteServiceProxy.RequestExecutor.j[n])&&O365SuiteServiceProxy.RequestExecutor.j[n]>o.getTime())u(O365SuiteServiceProxy.RequestExecutor.n[n],r);else{var f=O365SuiteServiceProxy.a.i();f.open("POST",t);f.setRequestHeader("accept","application/json;odata=verbose");var e=0;r.c>0&&(e=window.setTimeout(function(){O365.Log.a(175263,6,13,0);f.onreadystatechange=null;try{f.abort()}catch(n){}O365SuiteServiceProxy.RequestExecutor.g(r,-1001,"Request was aborted or timed out")},r.c));f.onreadystatechange=function(){if(f.readyState===4){e&&window.clearTimeout(e);f.onreadystatechange=null;if(f.status!==200||!f.getResponseHeader("content-type")||f.getResponseHeader("content-type").toLowerCase().indexOf("application/json")<0){var o=String.format("Status:{0}, Content-type:{1}",f.status.toString(),f.getResponseHeader("content-type"));O365SuiteServiceProxy.RequestExecutor.g(r,-1002,o);O365.Log.a(175264,6,13,0,o)}else{var t=JSON.parse(f.responseText);if(O365SuiteServiceProxy.a.a(t)){O365SuiteServiceProxy.RequestExecutor.g(r,-1002,"Unable to parse json");O365.Log.a(175265,6,13,0)}else{var i=t.d.GetContextWebInformation.FormDigestValue;var h=t.d.GetContextWebInformation.FormDigestTimeoutSeconds;var s=+new Date+h*750;O365SuiteServiceProxy.RequestExecutor.n[n]=i;O365SuiteServiceProxy.RequestExecutor.j[n]=s;u(i,r)}}}};f.send("")}};O365SuiteServiceProxy.RequestExecutor.g=function(n,t,i){if(n.a){var r=new O365SuiteServiceProxy.g;r.f=n.k;r.a="";n.a(r,t,i)}else O365.Log.a(400589,6,13,0)};O365SuiteServiceProxy.RequestExecutor.A=function(){var n=window.postMessage;if(O365SuiteServiceProxy.a.d(n)){O365.Log.a(175266,6,13,0);throw O365SuiteServiceProxy.a.b("Browser not supported",-2003);}n=window.JSON;if(O365SuiteServiceProxy.a.d(n)||O365SuiteServiceProxy.a.d(n.stringify)||O365SuiteServiceProxy.a.d(n.parse)){O365.Log.a(175267,6,13,0);throw O365SuiteServiceProxy.a.b("Browser not supported",-2003);}};O365SuiteServiceProxy.RequestExecutor.F=function(){var n=window.ArrayBuffer;if(O365SuiteServiceProxy.a.d(n)){O365.Log.a(175268,6,13,0);throw O365SuiteServiceProxy.a.b("Binary data not supported",-2003);}n=window.Uint8Array;if(O365SuiteServiceProxy.a.d(n)){O365.Log.a(175269,6,13,0);throw O365SuiteServiceProxy.a.b("Binary data not supported",-2003);}if(O365SuiteServiceProxy.a.d(window.BlobBuilder)&&O365SuiteServiceProxy.a.d(window.MozBlobBuilder)&&O365SuiteServiceProxy.a.d(window.Blob)){O365.Log.a(175270,6,13,0);throw O365SuiteServiceProxy.a.b("Binary data not supported",-2003);}};O365SuiteServiceProxy.RequestExecutor.sendPostMessage=function(n){O365SuiteServiceProxy.a.e(n.b,"requestInfo.postMessageId","string",!0);O365SuiteServiceProxy.a.e(n.c,"requestInfo.appWebProxyUrl","string",!0);var i=O365SuiteServiceProxy.RequestExecutor.v(n.c);if(!i){O365.Log.a(175271,6,13,0);throw O365SuiteServiceProxy.a.b("Invalid operation",-2002);}O365SuiteServiceProxy.RequestExecutor.a||(O365SuiteServiceProxy.RequestExecutor.a={});O365SuiteServiceProxy.RequestExecutor.a[n.b]=n;var t=new O365SuiteServiceProxy.q;t.command=n.e;t.url=n.a.d;t.method=n.a.e;t.body=n.a.f;t.headers=n.a.g;t.postMessageId=n.b;t.timeout=n.a.c;t.binaryStringRequestBody=n.a.j;t.binaryStringResponseBody=n.a.h;t.requestObject=n.a.i;var u=JSON.stringify(t);var r=n.c;i.contentWindow.postMessage(u,r)};O365SuiteServiceProxy.RequestExecutor.internalProcessIFrameOnload=function(n){O365SuiteServiceProxy.RequestExecutor.h[n]=!0;if(!O365SuiteServiceProxy.a.a(O365SuiteServiceProxy.RequestExecutor.b[n])){window.clearTimeout(O365SuiteServiceProxy.RequestExecutor.b[n]);delete O365SuiteServiceProxy.RequestExecutor.b[n]}if(!O365SuiteServiceProxy.a.a(O365SuiteServiceProxy.RequestExecutor.f[n])){window.clearTimeout(O365SuiteServiceProxy.RequestExecutor.f[n]);delete O365SuiteServiceProxy.RequestExecutor.f[n]}var t=new O365SuiteServiceProxy.m;t.e="Ping";t.b=O365SuiteServiceProxy.d.c();t.c=n;var i=window.setTimeout(function(){delete O365SuiteServiceProxy.RequestExecutor.b[n];O365SuiteServiceProxy.RequestExecutor.K(t.b,n)},1e4);t.d=i;t.a=new O365SuiteServiceProxy.i;O365SuiteServiceProxy.RequestExecutor.a[t.b]=t;O365SuiteServiceProxy.RequestExecutor.f[n]=i;O365SuiteServiceProxy.RequestExecutor.sendPostMessage(t)};O365SuiteServiceProxy.RequestExecutor.K=function(n,t){var i=O365SuiteServiceProxy.RequestExecutor.a[n];if(!O365SuiteServiceProxy.a.a(i)&&!O365SuiteServiceProxy.RequestExecutor.e[t]){O365SuiteServiceProxy.RequestExecutor.a[n]=null;delete O365SuiteServiceProxy.RequestExecutor.a[n];O365SuiteServiceProxy.RequestExecutor.D(t)}};O365SuiteServiceProxy.RequestExecutor.D=function(n){O365.Log.a(175272,1,13,0,n);if(O365SuiteServiceProxy.RequestExecutor.i(n).toLowerCase()===O365SuiteServiceProxy.RequestExecutor.i(O365SuiteServiceProxy.c.a.d)){var i=O365SuiteServiceProxy.RequestExecutor.B()?6:7;O365SuiteServiceProxy.f.a.a(i,n)}var t=String.format("Cannot access {0}",n);O365SuiteServiceProxy.RequestExecutor.M(n,t)};O365SuiteServiceProxy.RequestExecutor.M=function(n,t){O365SuiteServiceProxy.RequestExecutor.k[n]=!0;var u=O365SuiteServiceProxy.RequestExecutor.d[n];O365SuiteServiceProxy.RequestExecutor.d[n]=[];if(!O365SuiteServiceProxy.a.a(O365SuiteServiceProxy.RequestExecutor.b[n])){window.clearTimeout(O365SuiteServiceProxy.RequestExecutor.b[n]);delete O365SuiteServiceProxy.RequestExecutor.b[n]}O365SuiteServiceProxy.RequestExecutor.L(n);if(u)for(var f=0;f<u.length;f++){var i=u[f];var r=i.b;var e=O365SuiteServiceProxy.RequestExecutor.a[r];if(!O365SuiteServiceProxy.a.a(e)){O365SuiteServiceProxy.RequestExecutor.a[r]=null;delete O365SuiteServiceProxy.RequestExecutor.a[r];O365SuiteServiceProxy.a.a(i.d)||window.clearTimeout(i.d);O365SuiteServiceProxy.RequestExecutor.g(i.a,-1007,t)}}};O365SuiteServiceProxy.RequestExecutor.L=function(n){var t=O365SuiteServiceProxy.RequestExecutor.v(n);t&&t.parentNode&&t.parentNode.removeChild(t);O365SuiteServiceProxy.RequestExecutor.d&&delete O365SuiteServiceProxy.RequestExecutor.d[n];O365SuiteServiceProxy.RequestExecutor.b&&delete O365SuiteServiceProxy.RequestExecutor.b[n];O365SuiteServiceProxy.RequestExecutor.h&&delete O365SuiteServiceProxy.RequestExecutor.h[n];O365SuiteServiceProxy.RequestExecutor.e&&delete O365SuiteServiceProxy.RequestExecutor.e[n];O365SuiteServiceProxy.RequestExecutor.f&&delete O365SuiteServiceProxy.RequestExecutor.f[n];O365SuiteServiceProxy.RequestExecutor.k&&delete O365SuiteServiceProxy.RequestExecutor.k[n]};O365SuiteServiceProxy.RequestExecutor.J=function(n){O365.Log.a(403263,1,13,0,n);O365SuiteServiceProxy.RequestExecutor.e[n]=!0;var i=O365SuiteServiceProxy.RequestExecutor.d[n];if(i){O365SuiteServiceProxy.RequestExecutor.d[n]=[];for(var t=0;t<i.length;t++){var r=i[t];O365SuiteServiceProxy.RequestExecutor.a[r.b]&&O365SuiteServiceProxy.RequestExecutor.sendPostMessage(r)}}};O365SuiteServiceProxy.RequestExecutor.internalProcessIFrameRequestTimeoutCallback=function(n){if(!O365SuiteServiceProxy.RequestExecutor.a){O365.Log.a(400591,1,13,0);return}var t=O365SuiteServiceProxy.RequestExecutor.a[n];if(O365SuiteServiceProxy.a.a(t)){O365.Log.a(400588,1,13,0);return}O365SuiteServiceProxy.RequestExecutor.B()||O365.Log.a(175273,1,13,0);O365SuiteServiceProxy.RequestExecutor.a[n]=null;delete O365SuiteServiceProxy.RequestExecutor.a[n];O365SuiteServiceProxy.RequestExecutor.g(t.a,-1001,"Request was aborted or timed out");O365SuiteServiceProxy.RequestExecutor.c(t.a,null,-1001,"Request was aborted or timed out")};O365SuiteServiceProxy.RequestExecutor.internalProcessXMLhttpsRequestTimeoutCallback=function(n,t){O365.Log.a(175274,1,13,0);n.onreadystatechange=null;try{n.abort()}catch(i){}O365SuiteServiceProxy.RequestExecutor.g(t,-1001,"Request was aborted or timed out");O365SuiteServiceProxy.RequestExecutor.c(t,null,-1001,"Request was aborted or timed out")};O365SuiteServiceProxy.RequestExecutor.internalProcessXMLhttpsRequestOnreadystatechange=function(n,t,i){if(n.readyState===4){i&&window.clearTimeout(i);n.onreadystatechange=null;var r=new O365SuiteServiceProxy.g;r.f=t.k;r.h=!0;r.a=t.h?O365SuiteServiceProxy.d.e(n.response):n.responseText;r.d=n.status;r.i=n.statusText;r.g=n.getResponseHeader("content-type");r.e=n.getAllResponseHeaders();r.b=O365SuiteServiceProxy.RequestExecutor.y(r.e);if(n.status>=200&&n.status<300||n.status===1223){t.b&&t.b(r);O365SuiteServiceProxy.RequestExecutor.c(t,r,0,null)}else{var f=-1003;var u=n.statusText;O365.Log.a(175275,1,13,0,n.status);t.a&&t.a(r,f,u);O365SuiteServiceProxy.RequestExecutor.c(t,r,f,u)}}};O365SuiteServiceProxy.RequestExecutor.internalOnMessage=function(n){if(!O365SuiteServiceProxy.a.a(n)){var c=n.data;var h=n.origin;if(!O365SuiteServiceProxy.a.c(h)&&!O365SuiteServiceProxy.a.c(c)&&O365SuiteServiceProxy.RequestExecutor.a){var t=O365SuiteServiceProxy.a.k(c);if(!O365SuiteServiceProxy.a.a(t)&&!O365SuiteServiceProxy.a.c(t.postMessageId)){var i=O365SuiteServiceProxy.RequestExecutor.a[t.postMessageId];if(!O365SuiteServiceProxy.a.a(i)){var y=O365SuiteServiceProxy.RequestExecutor.i(h);var w=O365SuiteServiceProxy.RequestExecutor.i(i.c);if(y.toLowerCase()===w.toLowerCase()){var p=t.postMessageId;var b=t.command==="Query"&&!t.errorCode&&t.readyState===3;var d=t.command==="Notification"&&O365SuiteServiceProxy.a.a(t.errorMessage);if(!b&&!d){delete O365SuiteServiceProxy.RequestExecutor.a[p];if(!O365SuiteServiceProxy.a.a(i.d)){window.clearTimeout(i.d);i.d=0;delete i.timeoutId}}if(t.command==="Ping"){var k=i.c;O365SuiteServiceProxy.RequestExecutor.J(k);O365SuiteServiceProxy.RequestExecutor.t(i.a,t)}else if(t.command==="Query"){var r=new O365SuiteServiceProxy.g;r.h=t.responseAvailable;r.a=t.responseText;r.d=t.statusCode;r.i=t.statusText;r.g=t.contentType;r.f=i.a.k;r.e=t.allResponseHeaders;r.b=O365SuiteServiceProxy.RequestExecutor.y(t.allResponseHeaders);r.j=t.binaryStringResponseBody;O365SuiteServiceProxy.a.a(r.a)&&(r.a="");var u=0;var f=null;if(t.errorCode){u=t.errorCode;f=t.errorMessage}else if(t.statusCode>=200&&t.statusCode<300||t.statusCode===1223){u=0;f=null}else{u=-1003;f=t.statusText;O365.Log.a(175276,1,13,0,t.statusCode)}if(u)if(t.readyState!==4&&t.readyState)O365.Log.a(400865,4,13,0,t.readyState);else{i.a.a&&i.a.a(r,u,f);O365.Log.a(175277,1,13,0,u,f);O365SuiteServiceProxy.RequestExecutor.c(i.a,r,u,f)}else if(t.readyState===4){i.a.b&&i.a.b(r);O365SuiteServiceProxy.RequestExecutor.c(i.a,r,0,null)}else if(t.readyState===3&&i.a.m){var g=r.a;i.a.m(r)}}else if(t.command==="Storage"||t.command==="UserState"){var e=new O365SuiteServiceProxy.g;e.c=t.responseObject;var s=t.errorCode;var o=t.errorMessage;if(!s&&O365SuiteServiceProxy.a.c(o)){i.a.b&&i.a.b(e);O365SuiteServiceProxy.RequestExecutor.c(i.a,e,0,null)}else{i.a.a&&i.a.a(e,s,o);O365SuiteServiceProxy.RequestExecutor.c(i.a,e,s,o)}}else if(t.command==="PendingGet"){if(t.errorMessage&&i.a.a){var a=new O365SuiteServiceProxy.g;var l=0;var v=t.errorMessage;i.a.a(a,l,v)}O365SuiteServiceProxy.RequestExecutor.t(i.a,t)}else if(t.command==="Notification"){O365SuiteServiceProxy.RequestExecutor.C(t.responseObject);O365SuiteServiceProxy.RequestExecutor.t(i.a,t)}}}}}}};O365SuiteServiceProxy.RequestExecutor.I=function(){return!!document.body||O365SuiteServiceProxy.RequestExecutor.z};O365SuiteServiceProxy.RequestExecutor.E=function(n,t){O365SuiteServiceProxy.RequestExecutor.m||(O365SuiteServiceProxy.RequestExecutor.m=[]);O365SuiteServiceProxy.RequestExecutor.l||(O365SuiteServiceProxy.RequestExecutor.l=[]);O365SuiteServiceProxy.RequestExecutor.m.push(n);O365SuiteServiceProxy.RequestExecutor.l.push(t)};O365SuiteServiceProxy.RequestExecutor.internalProcessWindowLoad=function(){O365SuiteServiceProxy.RequestExecutor.z=!0;var t=O365SuiteServiceProxy.RequestExecutor.m;O365SuiteServiceProxy.RequestExecutor.m=null;var u=O365SuiteServiceProxy.RequestExecutor.l;O365SuiteServiceProxy.RequestExecutor.l=null;if(t)for(var n=0;n<t.length;n++){var r=t[n];var i=u[n];r.a(i)}};O365SuiteServiceProxy.RequestExecutor.N=function(){O365SuiteServiceProxy.RequestExecutor.o=!1};O365SuiteServiceProxy.RequestExecutor.B=function(){if(!O365SuiteServiceProxy.RequestExecutor.x){if(_js.q.getInstance().E){var t=window.status;var n=window.status+ +new Date;window.status=n;O365SuiteServiceProxy.RequestExecutor.w=window.status===n;window.status=t}O365SuiteServiceProxy.RequestExecutor.x=!0}return O365SuiteServiceProxy.RequestExecutor.w};O365SuiteServiceProxy.RequestExecutor.y=function(n){var e={};if(!O365SuiteServiceProxy.a.c(n))for(var s=new RegExp("\r?\n"),o=n.split(s),f=0;f<o.length;f++){var t=o[f];if(!O365SuiteServiceProxy.a.c(t)){var r=t.indexOf(":");if(r>0){var i=t.substr(0,r);var u=t.substr(r+1);i=O365SuiteServiceProxy.RequestExecutorNative.trim(i);u=O365SuiteServiceProxy.RequestExecutorNative.trim(u);e[i.toUpperCase()]=u}}}return e};O365SuiteServiceProxy.RequestExecutor.O=function(n){if(O365SuiteServiceProxy.a.a(n))throw O365SuiteServiceProxy.a.f("requestInfo");O365SuiteServiceProxy.a.e(n.d,"requestInfo.url","string",!0);O365SuiteServiceProxy.a.e(n.f,"requestInfo.body","string",!1);O365SuiteServiceProxy.a.e(n.b,"requestInfo.success","function",!1);O365SuiteServiceProxy.a.e(n.a,"requestInfo.error","function",!1);O365SuiteServiceProxy.a.e(n.c,"requestInfo.timeout","number",!1);O365SuiteServiceProxy.a.e(n.e,"requestInfo.method","string",!1);O365SuiteServiceProxy.a.e(n.j,"requestInfo.BinaryRequestBody","boolean",!1);O365SuiteServiceProxy.a.e(n.h,"requestInfo.BinaryResponseBody","boolean",!1);n.e=O365SuiteServiceProxy.a.c(n.e)?"GET":n.e.toUpperCase();O365SuiteServiceProxy.a.a(n.c)&&(n.c=6e4);if(n.c<0)throw O365SuiteServiceProxy.a.f("requestInfo.timeout");if(O365SuiteServiceProxy.a.c(n.d))throw O365SuiteServiceProxy.a.f("requestInfo.url");};O365SuiteServiceProxy.RequestExecutor.u=function(n){if(O365SuiteServiceProxy.RequestExecutor.s){O365SuiteServiceProxy.RequestExecutor.r++;n.dataRequestId=O365SuiteServiceProxy.RequestExecutor.r;O365SuiteServiceProxy.RequestExecutor.s(O365SuiteServiceProxy.RequestExecutor.r,n)}};O365SuiteServiceProxy.RequestExecutor.t=function(n,t){if(O365SuiteServiceProxy.RequestExecutor.q){var i=new O365SuiteServiceProxy.g;i.a=t.responseText;i.h=t.responseAvailable;i.d=t.statusCode;i.i=t.statusText;i.g=t.contentType;i.e=t.allResponseHeaders;i.b=O365SuiteServiceProxy.RequestExecutor.y(t.allResponseHeaders);i.j=t.binaryStringResponseBody;i.c=t.responseObject;i.f=n.k;O365SuiteServiceProxy.RequestExecutor.c(n,i,t.errorCode,t.errorMessage)}};O365SuiteServiceProxy.RequestExecutor.c=function(n,t,i,r){if(O365SuiteServiceProxy.RequestExecutor.q&&"dataRequestId"in n){var u=n.dataRequestId;O365SuiteServiceProxy.RequestExecutor.q(u,t,i,r)}};O365SuiteServiceProxy.RequestExecutor.prototype={g:null,f:null,e:0,n:function(){return this.formDigestHandlingEnabled},o:function(){return this.iFrameSourceUrl},i:function(){return O365SuiteServiceProxy.RequestExecutor.p(this.f,this.o())},a:function(n){this.p(n);if(this.e===2)this.h("Query",n);else{O365SuiteServiceProxy.RequestExecutor.A();this.l(n)}return n.l},PI:function(){return!!O365SuiteServiceProxy.RequestExecutor.e&&O365SuiteServiceProxy.RequestExecutor.e[this.i()]},b:function(n){if(this.e===2)this.h("Storage",n);else if(this.e===1)try{var i=n.i;var f=this;var r=function(t){var i=new O365SuiteServiceProxy.g;i.c=t;O365SuiteServiceProxy.RequestExecutor.u(n);n.b&&n.b(i);O365SuiteServiceProxy.RequestExecutor.c(n,i,0,null)};i.requestType===1?O365SuiteServiceProxy.e.i(i,r):O365SuiteServiceProxy.e.h(i,r)}catch(u){n.a&&n.a(new O365SuiteServiceProxy.g,0,u.message);var t=u.errorCode;t||(t=0);O365SuiteServiceProxy.RequestExecutor.c(n,new O365SuiteServiceProxy.g,t,u.message)}},d:function(n){this.e===2&&this.h("UserState",n)},h:function(n,t){O365SuiteServiceProxy.RequestExecutor.A();this.j();O365SuiteServiceProxy.RequestExecutor.u(t);t.l=O365SuiteServiceProxy.d.c();O365SuiteServiceProxy.RequestExecutor.I()?this.k(n,this.i(),t):O365SuiteServiceProxy.RequestExecutor.E(this,t)},k:function(n,t,i){var r=new O365SuiteServiceProxy.m;r.e=n;r.b=i.l;r.c=t;r.a=i;O365SuiteServiceProxy.RequestExecutor.d||(O365SuiteServiceProxy.RequestExecutor.d={});O365SuiteServiceProxy.RequestExecutor.b||(O365SuiteServiceProxy.RequestExecutor.b={});O365SuiteServiceProxy.RequestExecutor.h||(O365SuiteServiceProxy.RequestExecutor.h={});O365SuiteServiceProxy.RequestExecutor.e||(O365SuiteServiceProxy.RequestExecutor.e={});O365SuiteServiceProxy.RequestExecutor.f||(O365SuiteServiceProxy.RequestExecutor.f={});O365SuiteServiceProxy.RequestExecutor.k||(O365SuiteServiceProxy.RequestExecutor.k={});O365SuiteServiceProxy.RequestExecutor.a||(O365SuiteServiceProxy.RequestExecutor.a={});var u=O365SuiteServiceProxy.RequestExecutor.d[t];if(!u){u=[];O365SuiteServiceProxy.RequestExecutor.d[t]=u}O365SuiteServiceProxy.RequestExecutor.a[r.b]=r;if(r.a.c>0){var e=O365SuiteServiceProxy.RequestExecutorNative.getIFrameRequestTimeoutCallback(r.b);r.d=window.setTimeout(e,r.a.c)}var f=O365SuiteServiceProxy.RequestExecutor.v(t);if(f)O365SuiteServiceProxy.RequestExecutor.h[t]&&O365SuiteServiceProxy.RequestExecutor.e[t]?O365SuiteServiceProxy.RequestExecutor.sendPostMessage(r):u.push(r);else{u.push(r);f=O365SuiteServiceProxy.RequestExecutor.G(t)}},m:function(n,t){var i=O365SuiteServiceProxy.a.i();var o=O365SuiteServiceProxy.a.h(t.d);i.open(t.e,o);var s=!1;if(t.g){var h=t.g;for(var e in h){var r={key:e,value:h[e]};if(!O365SuiteServiceProxy.a.c(r.key)){i.setRequestHeader(r.key,r.value);r.key.toLowerCase()==="x-requestdigest"&&(s=!0)}}}s||O365SuiteServiceProxy.a.c(n)||i.setRequestHeader("X-RequestDigest",n);t.h&&O365SuiteServiceProxy.d.i(i);var f=0;t.c>0&&(f=window.setTimeout(O365SuiteServiceProxy.RequestExecutorNative.getXMLhttpsRequestTimeoutCallback(i,t),t.c));i.onreadystatechange=O365SuiteServiceProxy.RequestExecutorNative.getXMLhttpsRequestOnreadystatechangeCallback(i,t,f);var u=t.f;t.j&&(u=O365SuiteServiceProxy.d.f(t.f));this.g&&this.g(i);if(!O365SuiteServiceProxy.ServiceHandlers.IsAllowedApi(o)){O365.Log.a(175262,6,13,0);O365SuiteServiceProxy.RequestExecutor.g(t,-1009,"Access denied");return}O365SuiteServiceProxy.RequestExecutor.u(t);i.send(u)},l:function(n){var t=O365SuiteServiceProxy.RequestExecutor.p(this.f,"_api/contextinfo");t=O365SuiteServiceProxy.a.h(t);var i=this;O365SuiteServiceProxy.RequestExecutor.H(this.f,t,this.n(),n,function(n,t){i.m(n,t)})},c:function(n){this.g=n},j:function(){if(!O365SuiteServiceProxy.RequestExecutor.o){var n=window.O365SuiteServiceProxy.RequestExecutor.internalOnMessage;if(O365SuiteServiceProxy.a.d(window.addEventListener))if(O365SuiteServiceProxy.a.d(window.attachEvent)){O365.Log.a(175278,6,13,0);throw O365SuiteServiceProxy.a.b("Invalid operation",-2002);}else{window.attachEvent("onmessage",n);O365SuiteServiceProxy.RequestExecutor.o=!0}else{window.addEventListener("message",n,!1);O365SuiteServiceProxy.RequestExecutor.o=!0}}},p:function(n){O365SuiteServiceProxy.RequestExecutor.O(n);if(O365SuiteServiceProxy.a.j(n.d)){if(O365SuiteServiceProxy.RequestExecutor.i(n.d).toLowerCase()!==O365SuiteServiceProxy.RequestExecutor.i(this.f).toLowerCase())throw O365SuiteServiceProxy.a.f("requestInfo.url");}else n.d=O365SuiteServiceProxy.RequestExecutor.p(this.f,n.d);(n.j||n.h)&&O365SuiteServiceProxy.RequestExecutor.F()}};O365SuiteServiceProxy.f=function(){this.g=[]};O365SuiteServiceProxy.f.prototype={n:!1,k:null,l:null,h:!1,i:null,j:!1,d:function(){return this.j},c:function(){return this.h},s:function(){return!this.j&&!O365SuiteServiceProxy.c.a.e},CallSuiteServiceAction:function(n,t,i,r){this.CallSuiteServiceActionWithAdditionalHeaders(n,t,null,i,r)},CallO365SuiteServiceAction:function(n,t,i,r,u){_o365su.b.ThrowOnNullOrEmpty(n,"resourceUrl");_o365su.b.ThrowOnUndefined(i,"method");_o365su.b.ThrowOnNullOrUndefined(r,"successCallback");_o365su.b.ThrowOnNullOrUndefined(u,"errorCallback");i===2&&_o365su.b.ThrowOnUndefined(t,"data");var e=O365SuiteServiceProxy.c.a.d;var f=e.replace("owa/service.svc",n);var o=this;this.o(f,null,t,i,function(n){r(_o365su.d.a(n))},u)},CallSuiteServiceActionWithAdditionalHeaders:function(n,t,i,r,u){_o365su.b.ThrowOnNullOrEmpty(n,"action");_o365su.b.ThrowOnUndefined(t,"data");_o365su.b.ThrowOnNullOrUndefined(r,"successCallback");_o365su.b.ThrowOnNullOrUndefined(u,"errorCallback");var f=O365SuiteServiceProxy.c.a.d;var o=f.toLowerCase().endsWith("suiteservice.svc")?"{0}/?action={1}":"{0}?action={1}";var e=String.format(o,f,n);i||(i={});i.Action=n;var s=this;this.o(e,i,t,1,function(n){r(_o365su.d.a(n))},u)},o:function(n,t,i,r,u,f){var e={};if(t){var y=t;for(var v in y){var a={key:v,value:y[v]};e[a.key]=a.value}}e.Accept="application/json";e["Content-type"]="application/json; charset=utf-8";var p=O365SuiteServiceProxy.c.a.i;if(!_o365su.a.a(p)){var w=O365SuiteServiceProxy.Util.f(p);e["X-OWA-CorrelationId"]=w}var c=Sys.Serialization.JavaScriptSerializer.serialize(i);var s=O365SuiteServiceProxy.REF.get_SI();if(!s){O365.Log.a(402540,4,13,0,n);this.m(t,f,O365SuiteServiceProxy.Util.a(null,-1011,"SuiteService"));return}var o=!1;if(!this.n){o=!0;this.n=!0;O365.PM.rle("D1")}var k=this;var l=_o365su.e.b(function(n,t){t&&O365.PM.rle("D2");u(n.a)},o);var h=this;var b=_o365su.e.b(function(i,u){u&&O365.PM.rle("D2");i.httpstatus===449?h.r(s,n,c,e,r,l,function(n){h.m(t,f,n)}):h.m(t,f,i)},o);this.r(s,n,c,e,r,l,b)},CallAdminServiceGenericFunction:function(n,t,i,r,u,f){var s=String.format("{0}{1}",O365SuiteServiceProxy.c.a.a,n.startsWith("/")?n.substr(1):n);i||(i={});"Content-Type"in i||(i["Content-Type"]="application/json;charset=UTF-8");"Accept"in i||(i.Accept="application/json");var e=new O365SuiteServiceProxy.i;e.e=t;e.d=s;e.f=Sys.Serialization.JavaScriptSerializer.serialize(r);e.g=i;var h=this;e.b=function(n){if(_o365su.d.c(n.b,"error")==="error"){f(O365SuiteServiceProxy.Util.a(null,-1003,"AdminGeneric"));return}try{var t=_o365su.d.a(n.a);u(t)}catch(i){f(O365SuiteServiceProxy.Util.a(null,-1002,"AdminGeneric"));return}};var c=this;e.a=function(n,t,i){f(O365SuiteServiceProxy.Util.a(n,t,i))};var o=O365SuiteServiceProxy.REF.d();o?o.a(e):f(O365SuiteServiceProxy.Util.a(null,-1011,"AdminGeneric"))},b:function(n,t,i){_o365su.b.ThrowOnNullOrUndefined(t,"successCallback");_o365su.b.ThrowOnNullOrUndefined(i,"errorCallback");var e=String.format("{0}{1}.model?format=json",O365SuiteServiceProxy.c.a.a,n);var u={};u.Accept="*/*";u["Content-Type"]="application/json";var r=new O365SuiteServiceProxy.i;r.e="POST";r.d=e;r.f="";r.g=u;var o=this;r.b=function(n){if(_o365su.d.c(n.b,"error")==="error"){i(Error.create("Failed to retrieve alerts."));return}try{var r=_o365su.d.a(n.a);t(r)}catch(u){i(Error.create("Invalid alerts response format."));return}};var s=this;r.a=function(n,t,r){i(O365SuiteServiceProxy.Util.a(n,t,r))};var f=O365SuiteServiceProxy.REF.d();f?f.a(r):i(O365SuiteServiceProxy.Util.a(null,-1011,"Admin"))},SessionStorageRequest:function(n,t,i){_o365su.b.ThrowOnUndefined(n,"data");_o365su.b.ThrowOnNullOrUndefined(t,"successCallback");_o365su.b.ThrowOnNullOrUndefined(i,"errorCallback");if(this.t()){i(O365SuiteServiceProxy.Util.a(null,-1010,this.i));return}var r=new O365SuiteServiceProxy.i;r.d=O365SuiteServiceProxy.c.a.c;r.i=n;r.c=3e4;var f=this;r.b=function(n){t(n.c)};var e=this;r.a=function(n,t,r){i(Error.invalidOperation(r))};var u=O365SuiteServiceProxy.REF.get_SI();u?u.b(r):i(O365SuiteServiceProxy.Util.a(null,-1011,"SuiteService"))},SuiteDataSharingRequest:function(n,t,i){_o365su.b.ThrowOnUndefined(n,"data");_o365su.b.ThrowOnNullOrUndefined(t,"successCallback");_o365su.b.ThrowOnNullOrUndefined(i,"errorCallback");var r=new O365SuiteServiceProxy.i;r.i=n;r.c=3e4;var f=this;r.b=function(n){t(n.c)};var e=this;r.a=function(n,t,r){i(Error.invalidOperation(r))};var u=null;if(O365SuiteServiceProxy.c.a.b){r.d=O365SuiteServiceProxy.c.a.b;u=O365SuiteServiceProxy.REF.get_SSI()}else if(!this.h){r.d=O365SuiteServiceProxy.c.a.c;u=O365SuiteServiceProxy.REF.get_SI()}u?u.b(r):i(O365SuiteServiceProxy.Util.a(null,-1011,"SuiteDataSharing"))},ProxyIdentityProviderRequest:function(n,t,i){if(this.h){i(O365SuiteServiceProxy.Util.a(null,-1010,this.i));return}var r=new O365SuiteServiceProxy.i;r.i=n;r.c=6e4;var f=this;r.b=function(n){t(n.c)};var e=this;r.a=function(n,t,r){i(Error.invalidOperation(r))};var u=O365SuiteServiceProxy.REF.get_SI();u?u.d(r):i(O365SuiteServiceProxy.Util.a(null,-1011,"SuiteService"))},e:function(n){this.k=n},f:function(n){this.l=n},a:function(n){for(var t=[],i=1;i<arguments.length;++i)t[i-1]=arguments[i];if(!this.h){this.h=!0;this.i=O365SuiteServiceProxy.j.toString(n);var r=this;_js.Trace.b=function(n,t,i,r,u,f,e,o,s,h){};n===5?O365.Log.a.apply(null,[400954,1,13,0].concat(t)):n===7?O365.Log.a.apply(null,[400955,1,13,0].concat(t)):n===6?O365.Log.a.apply(null,[400392,1,13,0].concat(t)):n===3?O365.Log.a.apply(null,[400957,1,13,0].concat(t)):n===1?O365.Log.a.apply(null,[400211,1,13,0].concat(t)):n===4?O365.Log.a.apply(null,[402499,1,13,0].concat(t)):n===2?O365.Log.a.apply(null,[402498,1,13,0].concat(t)):n===8?O365.Log.a.apply(null,[403710,1,13,0].concat(t)):O365.Log.a.apply(null,[402497,4,13,0,n].concat(t))}},r:function(n,t,i,r,u,f,e){_o365su.b.ThrowOnNullOrUndefined(t,"url");_o365su.b.ThrowOnNullOrUndefined(f,"successCallback");_o365su.b.ThrowOnNullOrUndefined(e,"errorCallback");if(this.h){e(O365SuiteServiceProxy.Util.a(null,-1010,this.i));return}var c=null;var o=new O365SuiteServiceProxy.i;o.g=r;o.d=t;o.e=_o365su.g.toString(u);u&&(o.f=i);var l=this;o.b=function(n){var t=O365SuiteServiceProxy.Util.d(n.b);if(t){l.p(t);e(O365SuiteServiceProxy.Util.a(n,n.d,t));return}_o365su.e.a(f,n);c&&c()};var s=this;o.a=function(n,t,i){var r=O365SuiteServiceProxy.Util.d(n.b);r&&s.p(r);if(n.d===440){s.a(3,t,i);s.k&&s.k()}e(O365SuiteServiceProxy.Util.a(n,t,i))};if(this.s())if(this.q(r)){var h=this;c=function(){h.j=!0;for(var n=0;n<h.g.length;n++)_o365su.e.a(function(n){n.b.a(n.c)},h.g[n]);Array.clear(h.g);c=null}}else{Array.add(this.g,new O365SuiteServiceProxy.f.c(n,o,e));return}n.a(o)},p:function(n){if(n.indexOf("OwaInvalidUserLanguageException")>-1){this.a(4,n);this.l&&this.l()}},q:function(n){var t=O365SuiteServiceProxy.c.a.h;return!_o365su.a.a(t)&&t===_o365su.d.c(n,"Action")},m:function(n,t,i){_o365su.e.a(t,i);if(!this.j&&this.q(n)){var u=O365SuiteServiceProxy.Util.c(i);var e=u===-1005?8:5;this.a(e,u,i.message);for(var f=O365SuiteServiceProxy.Util.a(null,-1010,"App initialization failed, call canceled",u,i.message),r=0;r<this.g.length;r++){var o=this;_o365su.e.a(function(n){n.a(f)},this.g[r])}Array.clear(this.g)}},t:function(){if(this.h){if(!O365SuiteServiceProxy.f.b){O365SuiteServiceProxy.f.b={};O365SuiteServiceProxy.f.b[O365SuiteServiceProxy.j.toString(4)]=null;O365SuiteServiceProxy.f.b[O365SuiteServiceProxy.j.toString(5)]=null}return!(this.i in O365SuiteServiceProxy.f.b)}return!1}};O365SuiteServiceProxy.f.c=function(n,t,i){this.b=n;this.c=t;this.a=i};O365SuiteServiceProxy.f.c.prototype={b:null,c:null,a:null};O365SuiteServiceProxy.h=function(n){this.a=n};O365SuiteServiceProxy.h.b=function(){var n=+new Date;O365SuiteServiceProxy.h.a=O365SuiteServiceProxy.h.a===99?0:O365SuiteServiceProxy.h.a+1;return new O365SuiteServiceProxy.h(n*100+O365SuiteServiceProxy.h.a)};O365SuiteServiceProxy.h.prototype={a:0};O365SuiteServiceProxy.Util=function(){};O365SuiteServiceProxy.Util.NoOpErrorCallbackIfNullOrUndefined=function(n){return n?n:function(n){}};O365SuiteServiceProxy.Util.a=function(n,t,i){for(var e=[],r=3;r<arguments.length;++r)e[r-3]=arguments[r];var f=O365SuiteServiceProxy.Util.h(n);f.errorCode=t;t===-1003;for(var s=0,o=e,c=o.length,u=0;u<c;++u){var h=o[u];f["arg"+s.toString()]=h;s++}return Error.create(i,f)};O365SuiteServiceProxy.Util.c=function(n){var i=0;var t=n.errorCode;t&&(i=t);return i};O365SuiteServiceProxy.Util.b=function(n,t){_o365su.b.ThrowOnNullOrUndefined(t,"exception");var r=["",""];_o365su.a.a(n)||(r=n.split("_"));var u=t["X-OWA-ERROR"];var i=new Array(4);i[0]=u?u:"";i[1]=String.format("FE_{0},BE_{1}",t["X-FESERVER"],t["X-BESERVER"]);i[2]=r[0];i[3]=_o365su.a.a(r[1])?"":r[1];return i};O365SuiteServiceProxy.Util.f=function(n){var t=O365SuiteServiceProxy.h.b().a.toString();O365.Log.a(171179,0,2,0,n,t);return n+"_"+t};O365SuiteServiceProxy.Util.g=function(){return String.format("FE_{0},BE_{1}",O365SuiteServiceProxy.c.a.g,O365SuiteServiceProxy.c.a.f)};O365SuiteServiceProxy.Util.d=function(n){if(!n)return null;var t=n["X-FESERVER"];_o365su.a.a(t)||(O365SuiteServiceProxy.c.a.g=t);t=n["X-BESERVER"];_o365su.a.a(t)||(O365SuiteServiceProxy.c.a.f=t);t=n["X-OWA-ERROR"];return _o365su.a.a(t)?null:t};O365SuiteServiceProxy.Util.h=function(n){var r={};if(n){r.httpstatus=n.d;if(n.b)for(var u=O365SuiteServiceProxy.Util.e,f=u.length,t=0;t<f;++t){var i=u[t];n.b[i]&&(r[i]=n.b[i])}}return r};O365SuiteServiceProxy.REF.registerClass("O365SuiteServiceProxy.REF");O365SuiteServiceProxy.i.registerClass("O365SuiteServiceProxy.i");O365SuiteServiceProxy.m.registerClass("O365SuiteServiceProxy.m");O365SuiteServiceProxy.g.registerClass("O365SuiteServiceProxy.g");O365SuiteServiceProxy.RequestExecutor.registerClass("O365SuiteServiceProxy.RequestExecutor",null,O365SuiteServiceProxy.u);O365SuiteServiceProxy.f.c.registerClass("O365SuiteServiceProxy.f.c");O365SuiteServiceProxy.Util.registerClass("O365SuiteServiceProxy.Util");O365SuiteServiceProxy.REF.a=null;O365SuiteServiceProxy.REF.b=null;O365SuiteServiceProxy.REF.c=null;O365SuiteServiceProxy.c.a=null;O365SuiteServiceProxy.c.c=!1;O365SuiteServiceProxy.RequestExecutor.C=null;O365SuiteServiceProxy.RequestExecutor.d=null;O365SuiteServiceProxy.RequestExecutor.h=null;O365SuiteServiceProxy.RequestExecutor.e=null;O365SuiteServiceProxy.RequestExecutor.f=null;O365SuiteServiceProxy.RequestExecutor.b=null;O365SuiteServiceProxy.RequestExecutor.k=null;O365SuiteServiceProxy.RequestExecutor.a=null;O365SuiteServiceProxy.RequestExecutor.o=!1;O365SuiteServiceProxy.RequestExecutor.w=!1;O365SuiteServiceProxy.RequestExecutor.x=!1;O365SuiteServiceProxy.RequestExecutor.n=null;O365SuiteServiceProxy.RequestExecutor.j=null;O365SuiteServiceProxy.RequestExecutor.z=!1;O365SuiteServiceProxy.RequestExecutor.m=null;O365SuiteServiceProxy.RequestExecutor.l=null;O365SuiteServiceProxy.RequestExecutor.r=0;O365SuiteServiceProxy.RequestExecutor.s=null;O365SuiteServiceProxy.RequestExecutor.q=null;O365SuiteServiceProxy.f.a=new O365SuiteServiceProxy.f;O365SuiteServiceProxy.f.b=null;O365SuiteServiceProxy.h.a=-1;O365SuiteServiceProxy.Util.e=["X-OWA-CORRELATIONID","X-FESERVER","X-BESERVER","X-OWA-ERROR"];O365SuiteServiceProxy.RequestExecutorNative=function(){};O365SuiteServiceProxy.RequestExecutorNative.getIFrameOnloadCallback=function(n){return function(){O365SuiteServiceProxy.RequestExecutor.internalProcessIFrameOnload(n)}};O365SuiteServiceProxy.RequestExecutorNative.getXMLhttpsRequestOnreadystatechangeCallback=function(n,t,i){return function(){O365SuiteServiceProxy.RequestExecutor.internalProcessXMLhttpsRequestOnreadystatechange(n,t,i)}};O365SuiteServiceProxy.RequestExecutorNative.getXMLhttpsRequestTimeoutCallback=function(n,t){return function(){O365SuiteServiceProxy.RequestExecutor.internalProcessXMLhttpsRequestTimeoutCallback(n,t)}};O365SuiteServiceProxy.RequestExecutorNative.getIFrameRequestTimeoutCallback=function(n){return function(){O365SuiteServiceProxy.RequestExecutor.internalProcessIFrameRequestTimeoutCallback(n)}};O365SuiteServiceProxy.RequestExecutorNative.emptyCallback=function(){};O365SuiteServiceProxy.RequestExecutorNative.trim=function(n){return n.replace(/^\s+|\s+$/g,"")};window.document.addEventListener?window.addEventListener("load",O365SuiteServiceProxy.RequestExecutor.internalProcessWindowLoad,!1):window.document.attachEvent&&window.attachEvent("onload",O365SuiteServiceProxy.RequestExecutor.internalProcessWindowLoad);typeof Sys!="undefined"&&Sys&&Sys.Application&&Sys.Application.notifyScriptLoaded();typeof NotifyScriptLoadedAndExecuteWaitingJobs=="function"&&NotifyScriptLoadedAndExecuteWaitingJobs("O365SuiteServiceProxy.requestexecutor.js");
window.scriptsLoaded['microsoft.o365.suiteserviceproxy.js'] = 1; window.scriptProcessEnd = window.scriptProcessEnd || {}; window.scriptProcessEnd['microsoft.o365.suiteserviceproxy.js'] = (new Date()).getTime(); } catch(e) { window.owaLastErrorReported = e; throw e; }
