/**
 * Module: rem - v1.1.0
 * Description: A polyfill to parse CSS links and rewrite pixel equivalents into head for non supporting browsers
 * Date Built: 2014-02-26
 * Copyright (c) 2014  | Chuck Carpenter <chuck.carpenter@me.com>,Lucas Serven <lserven@gmail.com>;
**/
!function(a){"use strict";var b=function(){var a=document.createElement("div");return a.style.cssText="font-size: 1rem;",/rem/.test(a.style.fontSize)},c=function(){for(var a=document.getElementsByTagName("link"),b=[],c=0;c<a.length;c++)"stylesheet"===a[c].rel.toLowerCase()&&null===a[c].getAttribute("data-norem")&&b.push(a[c]);return b},d=function(){var a=[];p=c(),p.og=p.length,p.loaded=0;for(var b=0;b<p.length;b++)a[b]=p[b].href,j(a[b],e,b)},e=function(a,b){if(s[b]=a,++p.loaded===p.og){for(var c=0;c<s.length;c++)f(s[c]);g()}},f=function(a){var b=k(m(a.responseText)),c=/[\w\d\s\-\/\\\[\]:,.'"*()<>+~%#^$_=|@]+\{[\w\d\s\-\/\\%#:;,.'"*()]+\d*\.?\d+rem[\w\d\s\-\/\\%#:;,.'"*()]*\}/g,d=b.match(c),e=/\d*\.?\d+rem/g,f=b.match(e);null!==d&&0!==d.length&&(q=q.concat(d),r=r.concat(f))},g=function(){for(var a=/[\w\d\s\-\/\\%#:,.'"*()]+\d*\.?\d+rem[\w\d\s\-\/\\%#:,.'"*()]*[;}]/g,b=0;b<q.length;b++){o+=q[b].substr(0,q[b].indexOf("{")+1);for(var c=q[b].match(a),d=0;d<c.length;d++)o+=c[d],d===c.length-1&&"}"!==o[o.length-1]&&(o+="\n}")}h()},h=function(){for(var a,b=0;b<r.length;b++)a=parseFloat(r[b].substr(0,r[b].length-3)),t[b]=Math.round(a*v)+"px";i()},i=function(){for(var a=0;a<t.length;a++)t[a]&&(o=o.replace(r[a],t[a]));var b=document.createElement("style");b.setAttribute("type","text/css"),b.id="remReplace",document.getElementsByTagName("head")[0].appendChild(b),b.styleSheet?b.styleSheet.cssText=o:b.appendChild(document.createTextNode(o))},j=function(b,c,d){try{var e=n();e.open("GET",b,!0),e.send();var f=function(){for(var a,b=3,c=document.createElement("div"),d=c.getElementsByTagName("i");c.innerHTML="<!--[if gt IE "+ ++b+"]><i></i><![endif]-->",d[0];);return b>4?b:a}();e.onreadystatechange=f>=7?function(){4===e.readyState&&c(e,d)}:new function(){4===e.readyState&&c(e,d)}}catch(g){if(a.XDomainRequest){var h=new XDomainRequest;h.open("get",b),h.onload=function(){c(h,d)},h.onerror=function(){return!1},h.send()}}},k=function(a){var b=a.search(/\/\*/),c=a.search(/\*\//);return b>-1&&c>b?(a=a.substring(0,b)+a.substring(c+2),k(a)):a},l=function(){return a.matchMedia||a.msMatchMedia?!0:!1},m=function(a){return l()||(a=a.replace(/@media[\s\S]*?\}\s*\}/,"")),a},n=function(){if(a.XMLHttpRequest)return new XMLHttpRequest;try{return new ActiveXObject("MSXML2.XMLHTTP")}catch(b){try{return new ActiveXObject("Microsoft.XMLHTTP")}catch(c){}}};if(!b()){var o="",p=[],q=[],r=[],s=[],t=[],u=document.getElementsByTagName("body")[0],v="";u.currentStyle?v=u.currentStyle.fontSize.indexOf("px")>=0?u.currentStyle.fontSize.replace("px",""):u.currentStyle.fontSize.indexOf("em")>=0?u.currentStyle.fontSize.replace("em",""):u.currentStyle.fontSize.indexOf("pt")>=0?u.currentStyle.fontSize.replace("pt",""):u.currentStyle.fontSize.replace("%","")/100*16:a.getComputedStyle&&(v=document.defaultView.getComputedStyle(u,null).getPropertyValue("font-size").replace("px","")),d()}}(window);