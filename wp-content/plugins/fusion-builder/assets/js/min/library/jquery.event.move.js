!function(a){"function"==typeof define&&define.amd?define([],a):"undefined"!=typeof module&&null!==module&&module.exports?module.exports=a:a()}(function(){function a(a){return new CustomEvent(a,Q)}function b(a){return a[R]||(a[R]={})}function c(a,c,d,e,f){function g(a){d(a,e)}c=c.split(P);for(var h,i,j=b(a),k=c.length;k--;)i=c[k],h=j[i]||(j[i]=[]),h.push([d,g]),a.addEventListener(i,g)}function d(a,c,d,e){c=c.split(P);var f,g,h,i=b(a),j=c.length;if(i)for(;j--;)if(f=c[j],g=i[f])for(h=g.length;h--;)g[h][0]===d&&(a.removeEventListener(f,g[h][1]),g.splice(h,1))}function e(b,c,d){var e=a(c);d&&J(e,d),b.dispatchEvent(e)}function f(a){function b(a){d?(c(),L(b),e=!0,d=!1):e=!1}var c=a,d=!1,e=!1;this.kick=function(a){d=!0,e||b()},this.end=function(a){var b=c;a&&(e?(c=d?function(){b(),a()}:a,d=!0):a())}}function g(){}function h(a){a.preventDefault()}function i(a){return!!M[a.target.tagName.toLowerCase()]}function j(a){return 1===a.which&&!a.ctrlKey&&!a.altKey}function k(a,b){var c,d;if(a.identifiedTouch)return a.identifiedTouch(b);for(c=-1,d=a.length;++c<d;)if(a[c].identifier===b)return a[c]}function l(a,b){var c=k(a.changedTouches,b.identifier);if(c&&(c.pageX!==b.pageX||c.pageY!==b.pageY))return c}function m(a){j(a)&&(i(a)||(c(document,N.move,n,a),c(document,N.cancel,o,a)))}function n(a,b){u(a,b,a,p)}function o(a,b){p()}function p(){d(document,N.move,n),d(document,N.cancel,o)}function q(a){if(!M[a.target.tagName.toLowerCase()]){var b=a.changedTouches[0],d={target:b.target,pageX:b.pageX,pageY:b.pageY,identifier:b.identifier,touchmove:function(a,b){r(a,b)},touchend:function(a,b){s(a,b)}};c(document,O.move,d.touchmove,d),c(document,O.cancel,d.touchend,d)}}function r(a,b){var c=l(a,b);c&&u(a,b,c,t)}function s(a,b){k(a.changedTouches,b.identifier)&&t(b)}function t(a){d(document,O.move,a.touchmove),d(document,O.cancel,a.touchend)}function u(a,b,c,d){var e=c.pageX-b.pageX,f=c.pageY-b.pageY;e*e+f*f<K*K||v(a,b,c,e,f,d)}function v(a,b,c,d,f,h){var i=a.targetTouches,j=a.timeStamp-b.timeStamp,k={altKey:a.altKey,ctrlKey:a.ctrlKey,shiftKey:a.shiftKey,startX:b.pageX,startY:b.pageY,distX:d,distY:f,deltaX:d,deltaY:f,pageX:c.pageX,pageY:c.pageY,velocityX:d/j,velocityY:f/j,identifier:b.identifier,targetTouches:i,finger:i?i.length:1,enableMove:function(){this.moveEnabled=!0,this.enableMove=g,a.preventDefault()}};e(b.target,"movestart",k),h(b)}function w(a,b){var c=b.timer;b.touch=a,b.timeStamp=a.timeStamp,c.kick()}function x(a,b){var c=b.target,e=b.event,f=b.timer;y(),D(c,e,f,function(){setTimeout(function(){d(c,"click",h)},0)})}function y(){d(document,N.move,w),d(document,N.end,x)}function z(a,b){var c=b.event,d=b.timer,e=l(a,c);e&&(a.preventDefault(),c.targetTouches=a.targetTouches,b.touch=e,b.timeStamp=a.timeStamp,d.kick())}function A(a,b){var c=b.target,d=b.event,e=b.timer;k(a.changedTouches,d.identifier)&&(B(b),D(c,d,e))}function B(a){d(document,O.move,a.activeTouchmove),d(document,O.end,a.activeTouchend)}function C(a,b,c){var d=c-a.timeStamp;a.distX=b.pageX-a.startX,a.distY=b.pageY-a.startY,a.deltaX=b.pageX-a.pageX,a.deltaY=b.pageY-a.pageY,a.velocityX=.3*a.velocityX+.7*a.deltaX/d,a.velocityY=.3*a.velocityY+.7*a.deltaY/d,a.pageX=b.pageX,a.pageY=b.pageY}function D(a,b,c,d){c.end(function(){return e(a,"moveend",b),d&&d()})}function E(a){function b(a){C(d,g.touch,g.timeStamp),e(g.target,"move",d)}if(!a.defaultPrevented&&a.moveEnabled){var d={startX:a.startX,startY:a.startY,pageX:a.pageX,pageY:a.pageY,distX:a.distX,distY:a.distY,deltaX:a.deltaX,deltaY:a.deltaY,velocityX:a.velocityX,velocityY:a.velocityY,identifier:a.identifier,targetTouches:a.targetTouches,finger:a.finger},g={target:a.target,event:d,timer:new f(b),touch:void 0,timeStamp:a.timeStamp};void 0===a.identifier?(c(a.target,"click",h),c(document,N.move,w,g),c(document,N.end,x,g)):(g.activeTouchmove=function(a,b){z(a,b)},g.activeTouchend=function(a,b){A(a,b)},c(document,O.move,g.activeTouchmove,g),c(document,O.end,g.activeTouchend,g))}}function F(a){a.enableMove()}function G(a){a.enableMove()}function H(a){a.enableMove()}function I(a){var b=a.handler;a.handler=function(a){for(var c,d=S.length;d--;)c=S[d],a[c]=a.originalEvent[c];b.apply(this,arguments)}}var J=Object.assign||window.jQuery&&jQuery.extend,K=8,L=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(a,b){return window.setTimeout(function(){a()},25)}}();!function(){function a(a,b){b=b||{bubbles:!1,cancelable:!1,detail:void 0};var c=document.createEvent("CustomEvent");return c.initCustomEvent(a,b.bubbles,b.cancelable,b.detail),c}if("function"==typeof window.CustomEvent)return!1;a.prototype=window.Event.prototype,window.CustomEvent=a}();var M={textarea:!0,input:!0,select:!0,button:!0},N={move:"mousemove",cancel:"mouseup dragstart",end:"mouseup"},O={move:"touchmove",cancel:"touchend",end:"touchend"},P=/\s+/,Q={bubbles:!0,cancelable:!0},R="function"==typeof Symbol?Symbol("events"):{};if(c(document,"mousedown",m),c(document,"touchstart",q),c(document,"movestart",E),window.jQuery){var S="startX startY pageX pageY distX distY deltaX deltaY velocityX velocityY".split(" ");jQuery.event.special.movestart={setup:function(){return c(this,"movestart",F),!1},teardown:function(){return d(this,"movestart",F),!1},add:I},jQuery.event.special.move={setup:function(){return c(this,"movestart",G),!1},teardown:function(){return d(this,"movestart",G),!1},add:I},jQuery.event.special.moveend={setup:function(){return c(this,"movestart",H),!1},teardown:function(){return d(this,"movestart",H),!1},add:I}}});