var baguetteBox=function(){function a(a,c){E.transforms=m(),E.svg=n(),b(),J=document.querySelectorAll(a),[].forEach.call(J,function(a,b){var e=a.getElementsByTagName("a");e=[].filter.call(e,function(a){return I.test(a.href)});var g=K.length;K.push(e),K[g].options=c,[].forEach.call(K[g],function(a,b){q(a,"click",function(a){a.preventDefault?a.preventDefault():a.returnValue=!1,d(g),f(b)})})})}function b(){return(t=r("baguetteBox-overlay"))?(u=r("baguetteBox-slider"),v=r("previous-button"),w=r("next-button"),void(x=r("close-button"))):(t=s("div"),t.id="baguetteBox-overlay",document.getElementsByTagName("body")[0].appendChild(t),u=s("div"),u.id="baguetteBox-slider",t.appendChild(u),v=s("button"),v.id="previous-button",v.innerHTML=E.svg?z:"&lt;",t.appendChild(v),w=s("button"),w.id="next-button",w.innerHTML=E.svg?A:"&gt;",t.appendChild(w),x=s("button"),x.id="close-button",x.innerHTML=E.svg?B:"X",t.appendChild(x),v.className=w.className=x.className="baguetteBox-button",void c())}function c(){q(t,"click",function(a){a.target&&"IMG"!==a.target.nodeName&&g()}),q(v,"click",function(a){a.stopPropagation?a.stopPropagation():a.cancelBubble=!0,k()}),q(w,"click",function(a){a.stopPropagation?a.stopPropagation():a.cancelBubble=!0,j()}),q(x,"click",function(a){a.stopPropagation?a.stopPropagation():a.cancelBubble=!0,g()}),q(t,"touchstart",function(a){y=a.changedTouches[0].pageX}),q(t,"touchmove",function(a){H||(a.preventDefault?a.preventDefault():a.returnValue=!1,touch=a.touches[0]||a.changedTouches[0],touch.pageX-y>40?(H=!0,k()):touch.pageX-y<-40&&(H=!0,j()))}),q(t,"touchend",function(a){H=!1}),q(document,"keydown",function(a){switch(a.keyCode){case 37:k();break;case 39:j();break;case 27:g()}})}function d(a){if(G!==a){for(G=a,e(K[a].options);u.firstChild;)u.removeChild(u.firstChild);L.length=0;for(var b,c=0;c<K[a].length;c++)b=s("div"),b.className="full-image",b.id="baguette-img-"+c,L.push(b),u.appendChild(L[c])}}function e(a){a||(a={});for(var b in D)C[b]=D[b],"undefined"!=typeof a[b]&&(C[b]=a[b]);u.style.transition=u.style.webkitTransition="fadeIn"===C.animation?"opacity .4s ease":"slideIn"===C.animation?"":"none","auto"===C.buttons&&("ontouchstart"in window||1===K[G].length)&&(C.buttons=!1),v.style.display=w.style.display=C.buttons?"":"none"}function f(a){"block"!==t.style.display&&(F=a,h(F,function(){o(F),p(F)}),l(),t.style.display="block",setTimeout(function(){t.className="visible"},50))}function g(){"none"!==t.style.display&&(t.className="",setTimeout(function(){t.style.display="none"},500))}function h(a,b){var c=L[a];if("undefined"!=typeof c){if(c.getElementsByTagName("img")[0])return void(b&&b());imageElement=K[G][a],imageCaption=imageElement.getAttribute("data-caption")||imageElement.title,imageSrc=i(imageElement);var d=s("figure"),e=s("img"),f=s("figcaption");c.appendChild(d),d.innerHTML='<div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div>',e.onload=function(){var c=document.querySelector("#baguette-img-"+a+" .spinner");d.removeChild(c),!C.async&&b&&b()},e.setAttribute("src",imageSrc),d.appendChild(e),C.captions&&imageCaption&&(f.innerHTML=imageCaption,d.appendChild(f)),C.async&&b&&b()}}function i(a){var b=imageElement.href;if(a.dataset){var c=[];for(var d in a.dataset)"at-"!==d.substring(0,3)||isNaN(d.substring(3))||(c[d.replace("at-","")]=a.dataset[d]);keys=Object.keys(c).sort(function(a,b){return parseInt(a)<parseInt(b)?-1:1});for(var e=window.innerWidth*window.devicePixelRatio,f=0;f<keys.length-1&&keys[f]<e;)f++;b=c[keys[f]]||b}return b}function j(){F<=L.length-2?(F++,l(),o(F)):C.animation&&(u.className="bounce-from-right",setTimeout(function(){u.className=""},400))}function k(){F>=1?(F--,l(),p(F)):C.animation&&(u.className="bounce-from-left",setTimeout(function(){u.className=""},400))}function l(){var a=100*-F+"%";"fadeIn"===C.animation?(u.style.opacity=0,setTimeout(function(){E.transforms?u.style.transform=u.style.webkitTransform="translate3d("+a+",0,0)":u.style.left=a,u.style.opacity=1},400)):E.transforms?u.style.transform=u.style.webkitTransform="translate3d("+a+",0,0)":u.style.left=a}function m(){var a=s("div");return"undefined"!=typeof a.style.perspective||"undefined"!=typeof a.style.webkitPerspective}function n(){var a=s("div");return a.innerHTML="<svg/>","http://www.w3.org/2000/svg"==(a.firstChild&&a.firstChild.namespaceURI)}function o(a){a-F>=C.preload||h(a+1,function(){o(a+1)})}function p(a){F-a>=C.preload||h(a-1,function(){p(a-1)})}function q(a,b,c){a.addEventListener?a.addEventListener(b,c,!1):a.attachEvent("on"+b,c)}function r(a){return document.getElementById(a)}function s(a){return document.createElement(a)}var t,u,v,w,x,y,z='<svg width="44" height="60"><polyline points="30 10 10 30 30 50" stroke="rgba(255,255,255,0.5)" stroke-width="2"stroke-linecap="butt" fill="none" stroke-linejoin="round"/></svg>',A='<svg width="44" height="60"><polyline points="14 10 34 30 14 50" stroke="rgba(255,255,255,0.5)" stroke-width="2"stroke-linecap="butt" fill="none" stroke-linejoin="round"/></svg>',B='<svg width="30" height="30"><g stroke="rgb(160, 160, 160)" stroke-width="2"><line x1="5" y1="5" x2="16" y2="16"/><line x1="5" y1="16" x2="16" y2="5"/></g></svg>',C={},D={captions:!0,buttons:"auto",async:!1,preload:2,animation:"slideIn"},E={},F=0,G=-1,H=!1,I=/.+\.(gif|jpe?g|png|webp)/i,J=[],K=[],L=[];return[].forEach||(Array.prototype.forEach=function(a,b){for(var c=0;c<this.length;c++)a.call(b,this[c],c,this)}),[].filter||(Array.prototype.filter=function(a,b,c,d,e){for(c=this,d=[],e=0;e<c.length;e++)a.call(b,c[e],e,c)&&d.push(c[e]);return d}),{run:a}}();