/**
 * @author trixta
 * @version 1.2
 */
(function(e){function a(){if(this===t.elem){t.pos=[-260,-260];t.elem=false;n=3}}var t={pos:[-260,-260]},n=3,r=document,i=r.documentElement,s=r.body,o,u;e.event.special.mwheelIntent={setup:function(){var t=e(this).bind("mousewheel",e.event.special.mwheelIntent.handler);if(this!==r&&this!==i&&this!==s){t.bind("mouseleave",a)}t=null;return true},teardown:function(){e(this).unbind("mousewheel",e.event.special.mwheelIntent.handler).unbind("mouseleave",a);return true},handler:function(r,i){var s=[r.clientX,r.clientY];if(this===t.elem||Math.abs(t.pos[0]-s[0])>n||Math.abs(t.pos[1]-s[1])>n){t.elem=this;t.pos=s;n=250;clearTimeout(u);u=setTimeout(function(){n=10},200);clearTimeout(o);o=setTimeout(function(){n=3},1500);r=e.extend({},r,{type:"mwheelIntent"});return e.event.handle.apply(this,arguments)}}};e.fn.extend({mwheelIntent:function(e){return e?this.bind("mwheelIntent",e):this.trigger("mwheelIntent")},unmwheelIntent:function(e){return this.unbind("mwheelIntent",e)}});e(function(){s=r.body;e(r).bind("mwheelIntent.mwheelIntentDefault",e.noop)})})(jQuery)