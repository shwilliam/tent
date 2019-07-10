!function(e){function t(n){if(r[n])return r[n].exports;var o=r[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,t),o.l=!0,o.exports}var r={};t.m=e,t.c=r,t.d=function(e,r,n){t.o(e,r)||Object.defineProperty(e,r,{configurable:!1,enumerable:!0,get:n})},t.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(r,"a",r),r},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s=0)}([function(e,t,r){"use strict";Object.defineProperty(t,"__esModule",{value:!0});r(1)},function(e,t,r){"use strict";function n(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function o(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}var i=r(2),a=r.n(i),c=r(5),u=(r.n(c),r(6)),l=(r.n(u),r(7)),__=wp.i18n.__,s=wp.blocks.registerBlockType,h=wp.editor.MediaUpload,p=wp.components,f=p.Button,m=p.Spinner,g=wp,d=g.apiFetch,v=wp.data,w=v.registerStore,y=v.withSelect,E={heroImage:{}},x={fetchFromApi:function(e){return{type:"FETCH_FROM_API",path:e}},setHeroImage:function(e,t){return{type:"SET_HERO_IMAGE",heroImage:e,imgID:t}}};w("tent/hero-images",{reducer:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:E,t=arguments[1];switch(t.type){case"SET_HERO_IMAGE":return Object.assign({},e,{heroImage:Object.assign({},e.heroImage,o({},t.imgID,t.heroImage))})}return e},actions:x,selectors:{getHeroImage:function(e,t){return e.heroImage[t]}},controls:{FETCH_FROM_API:function(e){return d({path:e.path})}},resolvers:{getHeroImage:a.a.mark(function e(t){var r,n;return a.a.wrap(function(e){for(;;)switch(e.prev=e.next){case 0:if(t){e.next=2;break}return e.abrupt("return",x.setHeroImage({},null));case 2:return r="/wp/v2/media/"+t,e.next=5,x.fetchFromApi(r);case 5:return n=e.sent,e.abrupt("return",x.setHeroImage(n,t));case 7:case"end":return e.stop()}},e,this)})}}),s("tent/hero-image-header",new function e(){n(this,e),this.title=__("Hero Image Header"),this.icon="awards",this.category="formatting",this.keywords=[__("hero"),__("image"),__("header")],this.useOnce=!0,this.attributes={imgID:{type:"number"}},this.edit=y(function(e,t){var r=t.attributes.imgID;return{title:e("core/editor").getEditedPostAttribute("title"),heroImage:e("tent/hero-images").getHeroImage(r)}})(function(e){var t=e.title,r=e.heroImage,n=e.attributes.imgID,o=e.className,i=e.setAttributes,a=e.isSelected,c=function(e){i({imgID:e.id})},u=function(){i({imgID:null})};return n?"undefined"===typeof r||"undefined"===typeof r.media_details?wp.element.createElement(m,null):wp.element.createElement("div",null,wp.element.createElement("div",{className:o,style:{background:"linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), url("+r.media_details.sizes.large.source_url+") no-repeat center bottom",backgroundSize:"cover, cover"}},wp.element.createElement("div",{className:"image-wrapper"},wp.element.createElement("div",{className:"entry-title-preview"},t?wp.element.createElement("h2",null,t):wp.element.createElement("h2",null,"Loading title...")),a?wp.element.createElement(f,{className:"remove-image",onClick:u},l.a.remove):null)),wp.element.createElement("small",null,"Above hero image title text is for preview purposes only.")):wp.element.createElement("div",{className:o},wp.element.createElement(h,{onSelect:c,type:"image",value:n,render:function(e){var t=e.open;return wp.element.createElement(f,{className:"button button-large",onClick:t},l.a.upload,__("Add Hero Image"))}}))}),this.save=function(){return null}})},function(e,t,r){e.exports=r(3)},function(e,t,r){var n=function(){return this}()||Function("return this")(),o=n.regeneratorRuntime&&Object.getOwnPropertyNames(n).indexOf("regeneratorRuntime")>=0,i=o&&n.regeneratorRuntime;if(n.regeneratorRuntime=void 0,e.exports=r(4),o)n.regeneratorRuntime=i;else try{delete n.regeneratorRuntime}catch(e){n.regeneratorRuntime=void 0}},function(e,t){!function(t){"use strict";function r(e,t,r,n){var i=t&&t.prototype instanceof o?t:o,a=Object.create(i.prototype),c=new f(n||[]);return a._invoke=l(e,r,c),a}function n(e,t,r){try{return{type:"normal",arg:e.call(t,r)}}catch(e){return{type:"throw",arg:e}}}function o(){}function i(){}function a(){}function c(e){["next","throw","return"].forEach(function(t){e[t]=function(e){return this._invoke(t,e)}})}function u(e){function t(r,o,i,a){var c=n(e[r],e,o);if("throw"!==c.type){var u=c.arg,l=u.value;return l&&"object"===typeof l&&w.call(l,"__await")?Promise.resolve(l.__await).then(function(e){t("next",e,i,a)},function(e){t("throw",e,i,a)}):Promise.resolve(l).then(function(e){u.value=e,i(u)},a)}a(c.arg)}function r(e,r){function n(){return new Promise(function(n,o){t(e,r,n,o)})}return o=o?o.then(n,n):n()}var o;this._invoke=r}function l(e,t,r){var o=L;return function(i,a){if(o===j)throw new Error("Generator is already running");if(o===k){if("throw"===i)throw a;return g()}for(r.method=i,r.arg=a;;){var c=r.delegate;if(c){var u=s(c,r);if(u){if(u===N)continue;return u}}if("next"===r.method)r.sent=r._sent=r.arg;else if("throw"===r.method){if(o===L)throw o=k,r.arg;r.dispatchException(r.arg)}else"return"===r.method&&r.abrupt("return",r.arg);o=j;var l=n(e,t,r);if("normal"===l.type){if(o=r.done?k:O,l.arg===N)continue;return{value:l.arg,done:r.done}}"throw"===l.type&&(o=k,r.method="throw",r.arg=l.arg)}}}function s(e,t){var r=e.iterator[t.method];if(r===d){if(t.delegate=null,"throw"===t.method){if(e.iterator.return&&(t.method="return",t.arg=d,s(e,t),"throw"===t.method))return N;t.method="throw",t.arg=new TypeError("The iterator does not provide a 'throw' method")}return N}var o=n(r,e.iterator,t.arg);if("throw"===o.type)return t.method="throw",t.arg=o.arg,t.delegate=null,N;var i=o.arg;return i?i.done?(t[e.resultName]=i.value,t.next=e.nextLoc,"return"!==t.method&&(t.method="next",t.arg=d),t.delegate=null,N):i:(t.method="throw",t.arg=new TypeError("iterator result is not an object"),t.delegate=null,N)}function h(e){var t={tryLoc:e[0]};1 in e&&(t.catchLoc=e[1]),2 in e&&(t.finallyLoc=e[2],t.afterLoc=e[3]),this.tryEntries.push(t)}function p(e){var t=e.completion||{};t.type="normal",delete t.arg,e.completion=t}function f(e){this.tryEntries=[{tryLoc:"root"}],e.forEach(h,this),this.reset(!0)}function m(e){if(e){var t=e[E];if(t)return t.call(e);if("function"===typeof e.next)return e;if(!isNaN(e.length)){var r=-1,n=function t(){for(;++r<e.length;)if(w.call(e,r))return t.value=e[r],t.done=!1,t;return t.value=d,t.done=!0,t};return n.next=n}}return{next:g}}function g(){return{value:d,done:!0}}var d,v=Object.prototype,w=v.hasOwnProperty,y="function"===typeof Symbol?Symbol:{},E=y.iterator||"@@iterator",x=y.asyncIterator||"@@asyncIterator",b=y.toStringTag||"@@toStringTag",_="object"===typeof e,I=t.regeneratorRuntime;if(I)return void(_&&(e.exports=I));I=t.regeneratorRuntime=_?e.exports:{},I.wrap=r;var L="suspendedStart",O="suspendedYield",j="executing",k="completed",N={},P={};P[E]=function(){return this};var F=Object.getPrototypeOf,S=F&&F(F(m([])));S&&S!==v&&w.call(S,E)&&(P=S);var z=a.prototype=o.prototype=Object.create(P);i.prototype=z.constructor=a,a.constructor=i,a[b]=i.displayName="GeneratorFunction",I.isGeneratorFunction=function(e){var t="function"===typeof e&&e.constructor;return!!t&&(t===i||"GeneratorFunction"===(t.displayName||t.name))},I.mark=function(e){return Object.setPrototypeOf?Object.setPrototypeOf(e,a):(e.__proto__=a,b in e||(e[b]="GeneratorFunction")),e.prototype=Object.create(z),e},I.awrap=function(e){return{__await:e}},c(u.prototype),u.prototype[x]=function(){return this},I.AsyncIterator=u,I.async=function(e,t,n,o){var i=new u(r(e,t,n,o));return I.isGeneratorFunction(t)?i:i.next().then(function(e){return e.done?e.value:i.next()})},c(z),z[b]="Generator",z[E]=function(){return this},z.toString=function(){return"[object Generator]"},I.keys=function(e){var t=[];for(var r in e)t.push(r);return t.reverse(),function r(){for(;t.length;){var n=t.pop();if(n in e)return r.value=n,r.done=!1,r}return r.done=!0,r}},I.values=m,f.prototype={constructor:f,reset:function(e){if(this.prev=0,this.next=0,this.sent=this._sent=d,this.done=!1,this.delegate=null,this.method="next",this.arg=d,this.tryEntries.forEach(p),!e)for(var t in this)"t"===t.charAt(0)&&w.call(this,t)&&!isNaN(+t.slice(1))&&(this[t]=d)},stop:function(){this.done=!0;var e=this.tryEntries[0],t=e.completion;if("throw"===t.type)throw t.arg;return this.rval},dispatchException:function(e){function t(t,n){return i.type="throw",i.arg=e,r.next=t,n&&(r.method="next",r.arg=d),!!n}if(this.done)throw e;for(var r=this,n=this.tryEntries.length-1;n>=0;--n){var o=this.tryEntries[n],i=o.completion;if("root"===o.tryLoc)return t("end");if(o.tryLoc<=this.prev){var a=w.call(o,"catchLoc"),c=w.call(o,"finallyLoc");if(a&&c){if(this.prev<o.catchLoc)return t(o.catchLoc,!0);if(this.prev<o.finallyLoc)return t(o.finallyLoc)}else if(a){if(this.prev<o.catchLoc)return t(o.catchLoc,!0)}else{if(!c)throw new Error("try statement without catch or finally");if(this.prev<o.finallyLoc)return t(o.finallyLoc)}}}},abrupt:function(e,t){for(var r=this.tryEntries.length-1;r>=0;--r){var n=this.tryEntries[r];if(n.tryLoc<=this.prev&&w.call(n,"finallyLoc")&&this.prev<n.finallyLoc){var o=n;break}}o&&("break"===e||"continue"===e)&&o.tryLoc<=t&&t<=o.finallyLoc&&(o=null);var i=o?o.completion:{};return i.type=e,i.arg=t,o?(this.method="next",this.next=o.finallyLoc,N):this.complete(i)},complete:function(e,t){if("throw"===e.type)throw e.arg;return"break"===e.type||"continue"===e.type?this.next=e.arg:"return"===e.type?(this.rval=this.arg=e.arg,this.method="return",this.next="end"):"normal"===e.type&&t&&(this.next=t),N},finish:function(e){for(var t=this.tryEntries.length-1;t>=0;--t){var r=this.tryEntries[t];if(r.finallyLoc===e)return this.complete(r.completion,r.afterLoc),p(r),N}},catch:function(e){for(var t=this.tryEntries.length-1;t>=0;--t){var r=this.tryEntries[t];if(r.tryLoc===e){var n=r.completion;if("throw"===n.type){var o=n.arg;p(r)}return o}}throw new Error("illegal catch attempt")},delegateYield:function(e,t,r){return this.delegate={iterator:m(e),resultName:t,nextLoc:r},"next"===this.method&&(this.arg=d),N}}}(function(){return this}()||Function("return this")())},function(e,t){},function(e,t){},function(e,t,r){"use strict";var n={};n.upload=wp.element.createElement("svg",{width:"20px",height:"20px",viewBox:"0 0 100 100",xmlns:"http://www.w3.org/2000/svg"},wp.element.createElement("path",{d:"m77.945 91.453h-72.371c-3.3711 0-5.5742-2.3633-5.5742-5.2422v-55.719c0-3.457 2.1172-6.0703 5.5742-6.0703h44.453v11.051l-38.98-0.003906v45.008h60.977v-17.133l11.988-0.007812v22.875c0 2.8789-2.7812 5.2422-6.0664 5.2422z"}),wp.element.createElement("path",{d:"m16.543 75.48l23.25-22.324 10.441 9.7773 11.234-14.766 5.5039 10.539 0.039063 16.773z"}),wp.element.createElement("path",{d:"m28.047 52.992c-3.168 0-5.7422-2.5742-5.7422-5.7461 0-3.1758 2.5742-5.75 5.7422-5.75 3.1797 0 5.7539 2.5742 5.7539 5.75 0 3.1719-2.5742 5.7461-5.7539 5.7461z"}),wp.element.createElement("path",{d:"m84.043 30.492v22.02h-12.059l-0.015625-22.02h-15.852l21.941-21.945 21.941 21.945z"})),n.swap=wp.element.createElement("svg",{width:"20px",height:"20px",viewBox:"0 0 100 100",xmlns:"http://www.w3.org/2000/svg"},wp.element.createElement("path",{d:"m39.66 76.422h36.762v-36.781h-36.762zm4.6211-32.141h27.5v27.5h-27.5z"}),wp.element.createElement("path",{d:"m36.801 55.719h-8.582v-27.5h27.5v9.2031h4.6406v-13.844h-36.781v36.762h13.223z"}),wp.element.createElement("path",{d:"m90.18 42.781c-3-16.801-16.02-29.922-33-32.961-2.3789-0.42187-4.7812-0.64062-7.1797-0.64062v4.6211c2.1211 0 4.2617 0.17969 6.3594 0.55859 14.781 2.6406 26.18 13.898 29.121 28.398l-5.6602 0.003907 8.0781 14 8.0781-14h-5.7969z"}),wp.element.createElement("path",{d:"m14.52 57.219h5.6602l-8.0781-13.98-8.0781 14h5.8008c3 16.801 16.039 29.941 33 32.961 2.375 0.40234 4.7773 0.64062 7.1758 0.64062v-4.6406c-2.1016 0-4.2617-0.19922-6.3594-0.57812-14.781-2.6406-26.18-13.883-29.121-28.402z"})),n.remove=wp.element.createElement("svg",{width:"20px",height:"20px",viewBox:"0 0 100 100",xmlns:"http://www.w3.org/2000/svg"},wp.element.createElement("path",{d:"m50 2.5c-26.199 0-47.5 21.301-47.5 47.5s21.301 47.5 47.5 47.5 47.5-21.301 47.5-47.5-21.301-47.5-47.5-47.5zm24.898 62.301l-10.199 10.199-14.801-14.801-14.801 14.801-10.199-10.199 14.801-14.801-14.801-14.801 10.199-10.199 14.801 14.801 14.801-14.801 10.199 10.199-14.801 14.801z"})),t.a=n}]);