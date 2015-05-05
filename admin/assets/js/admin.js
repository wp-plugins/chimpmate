
(function(e){"use strict";function t(t,n){var r=this,i=t.attr("wpmc-sel-name")||n.name||"";t.parent().hide();var s=t.css("width");t.parent().show();if(s=="0px"){s=t.outerWidth()+20}this.$el=t.hide();this.options=n;this.$parent=e("<div"+e.map(["class","title"],function(e){var t=r.$el.attr(e)||"";t=(e==="class"?"ms-parent"+(t?" ":""):"")+t;return t?" "+e+'="'+t+'"':""}).join("")+" />");this.$choice=e('<button type="button" class="ms-choice"><span class="placeholder">'+n.placeholder+"</span><div></div></button>");this.$drop=e('<div class="ms-drop '+n.position+'"></div>');this.$el.after(this.$parent);this.$parent.append(this.$choice);this.$parent.append(this.$drop);if(this.$el.prop("disabled")){this.$choice.addClass("disabled")}this.$parent.css("width",n.width||s);if(!this.options.keepOpen){e("body").click(function(t){if(e(t.target)[0]===r.$choice[0]||e(t.target).parents(".ms-choice")[0]===r.$choice[0]){return}if((e(t.target)[0]===r.$drop[0]||e(t.target).parents(".ms-drop")[0]!==r.$drop[0])&&r.options.isOpen){r.close()}})}this.selectAllName='name="selectAll'+i+'"';this.selectGroupName='name="selectGroup'+i+'"';this.selectItemName='name="'+i+'"'}t.prototype={constructor:t,init:function(){var t=this,n=[];if(this.options.filter){n.push('<div class="ms-search">','<input type="text" autocomplete="off" autocorrect="off" autocapitilize="off" spellcheck="false">',"</div>")}n.push("<ul>");if(this.options.selectAll&&!this.options.single){n.push('<li class="ms-select-all">',"<label>",'<input type="checkbox" '+this.selectAllName+" /> ",this.options.selectAllDelimiter[0]+this.options.selectAllText+this.options.selectAllDelimiter[1],"</label>","</li>")}e.each(this.$el.children(),function(e,r){n.push(t.optionToHtml(e,r))});n.push('<li class="ms-no-results">'+this.options.noMatchesFound+"</li>");n.push("</ul>");this.$drop.html(n.join(""));this.$drop.find("ul").css("max-height",this.options.maxHeight+"px");this.$drop.find(".multiple").css("width",this.options.multipleWidth+"px");this.$searchInput=this.$drop.find(".ms-search input");this.$selectAll=this.$drop.find("input["+this.selectAllName+"]");this.$selectGroups=this.$drop.find("input["+this.selectGroupName+"]");this.$selectItems=this.$drop.find("input["+this.selectItemName+"]:enabled");this.$disableItems=this.$drop.find("input["+this.selectItemName+"]:disabled");this.$noResults=this.$drop.find(".ms-no-results");this.events();this.updateSelectAll(true);this.update(true);if(this.options.isOpen){this.open()}},optionToHtml:function(t,n,r,i){var s=this,o=e(n),u=[],a=this.options.multiple,f=["class","title"],l=e.map(f,function(e,t){var n=e==="class"&&a;var r=o.attr(e)||"";return n||r?" "+e+'="'+(n?"multiple"+(r?" ":""):"")+r+'"':""}).join(""),c,h=this.options.single?"radio":"checkbox";if(o.is("option")){var p=o.val(),d=s.options.textTemplate(o),v=s.$el.attr("multiple")!=undefined?o.prop("selected"):o.attr("selected")=="selected",m=this.options.styler(p)?' style="'+this.options.styler(p)+'"':"";c=i||o.prop("disabled");if(this.options.blockSeparator>""&&this.options.blockSeparator==o.val()){u.push("<li"+l+m+">",'<label class="'+this.options.blockSeparator+(c?"disabled":"")+'">',d,"</label>","</li>")}else{u.push("<li"+l+m+">","<label"+(c?' class="disabled"':"")+">",'<input type="'+h+'" '+this.selectItemName+' value="'+p+'"'+(v?' checked="checked"':"")+(c?' disabled="disabled"':"")+(r?' data-group="'+r+'"':"")+"/> ",d,"</label>","</li>")}}else if(!r&&o.is("optgroup")){var g="group_"+t,y=o.attr("label");c=o.prop("disabled");u.push('<li class="group">','<label class="optgroup'+(c?" disabled":"")+'" data-group="'+g+'">',this.options.hideOptgroupCheckboxes?"":'<input type="checkbox" '+this.selectGroupName+(c?' disabled="disabled"':"")+" /> ",y,"</label>","</li>");e.each(o.children(),function(e,t){u.push(s.optionToHtml(e,t,g,c))})}return u.join("")},events:function(){function n(e){e.preventDefault();t[t.options.isOpen?"close":"open"]()}var t=this;var r=this.$el.parent().closest("label")[0]||e("label[for="+this.$el.attr("id")+"]")[0];if(r){e(r).off("click").on("click",function(e){if(e.target.nodeName.toLowerCase()!=="label"||e.target!==this){return}n(e);if(!t.options.filter||!t.options.isOpen){t.focus()}e.stopPropagation()})}this.$choice.off("click").on("click",n).off("focus").on("focus",this.options.onFocus).off("blur").on("blur",this.options.onBlur);this.$parent.off("keydown").on("keydown",function(e){switch(e.which){case 27:t.close();t.$choice.focus();break}});this.$searchInput.off("keydown").on("keydown",function(e){if(e.keyCode===9&&e.shiftKey){t.close()}}).off("keyup").on("keyup",function(e){if(t.options.filterAcceptOnEnter&&(e.which===13||e.which==32)&&t.$searchInput.val()){t.$selectAll.click();t.close();t.focus();return}t.filter()});this.$selectAll.off("click").on("click",function(){var n=e(this).prop("checked"),r=t.$selectItems.filter(":visible");if(r.length===t.$selectItems.length){t[n?"checkAll":"uncheckAll"]()}else{t.$selectGroups.prop("checked",n);r.prop("checked",n);t.options[n?"onCheckAll":"onUncheckAll"]();t.update()}});this.$selectGroups.off("click").on("click",function(){var n=e(this).parent().attr("data-group"),r=t.$selectItems.filter(":visible"),i=r.filter('[data-group="'+n+'"]'),s=i.length!==i.filter(":checked").length;i.prop("checked",s);t.updateSelectAll();t.update();t.options.onOptgroupClick({label:e(this).parent().text(),checked:s,children:i.get()})});this.$selectItems.off("click").on("click",function(){t.updateSelectAll();t.update();t.updateOptGroupSelect();t.options.onClick({label:e(this).parent().text(),value:e(this).val(),checked:e(this).prop("checked")});if(t.options.single&&t.options.isOpen&&!t.options.keepOpen){t.close()}})},open:function(){if(this.$choice.hasClass("disabled")){return}this.options.isOpen=true;this.$choice.find(">div").addClass("open");this.$drop.slideDown();this.$selectAll.parent().show();this.$noResults.hide();if(this.$el.children().length===0){this.$selectAll.parent().hide();this.$noResults.show()}if(this.options.container){var t=this.$drop.offset();this.$drop.appendTo(e(this.options.container));this.$drop.offset({top:t.top,left:t.left})}if(this.options.filter){this.$searchInput.val("");this.$searchInput.focus();this.filter()}this.options.onOpen()},close:function(){this.options.isOpen=false;this.$choice.find(">div").removeClass("open");this.$drop.slideUp();if(this.options.container){this.$parent.append(this.$drop);this.$drop.css({top:"auto",left:"auto"})}this.options.onClose()},update:function(t){var n=this.getSelects(),r=this.$choice.find(">span");if(n.length===0){r.addClass("placeholder").html(this.options.placeholder)}else if(this.options.countSelected&&n.length<this.options.minumimCountSelected){r.removeClass("placeholder").html((this.options.displayValues?n:this.getSelects("text")).join(this.options.delimiter))}else if(this.options.allSelected&&n.length===this.$selectItems.length+this.$disableItems.length){r.removeClass("placeholder").html(this.options.allSelected)}else if((this.options.countSelected||this.options.etcaetera)&&n.length>this.options.minumimCountSelected){if(this.options.etcaetera){r.removeClass("placeholder").html((this.options.displayValues?n:this.getSelects("text").slice(0,this.options.minumimCountSelected)).join(this.options.delimiter)+"...")}else{r.removeClass("placeholder").html(this.options.countSelected.replace("#",n.length).replace("%",this.$selectItems.length+this.$disableItems.length))}}else{r.removeClass("placeholder").html((this.options.displayValues?n:this.getSelects("text")).join(this.options.delimiter))}this.$el.val(this.getSelects());this.$drop.find("li").removeClass("selected");this.$drop.find("input["+this.selectItemName+"]:checked").each(function(){e(this).parents("li").first().addClass("selected")});if(!t){this.$el.trigger("change")}},updateSelectAll:function(e){var t=this.$selectItems;if(!e){t=t.filter(":visible")}this.$selectAll.prop("checked",t.length&&t.length===t.filter(":checked").length);if(this.$selectAll.prop("checked")){this.options.onCheckAll()}},updateOptGroupSelect:function(){var t=this.$selectItems.filter(":visible");e.each(this.$selectGroups,function(n,r){var i=e(r).parent().attr("data-group"),s=t.filter('[data-group="'+i+'"]');e(r).prop("checked",s.length&&s.length===s.filter(":checked").length)})},getSelects:function(t){var n=this,r=[],i=[];this.$drop.find("input["+this.selectItemName+"]:checked").each(function(){r.push(e(this).parents("li").first().text());i.push(e(this).val())});if(t==="text"&&this.$selectGroups.length){r=[];this.$selectGroups.each(function(){var t=[],i=e.trim(e(this).parent().text()),s=e(this).parent().data("group"),o=n.$drop.find("["+n.selectItemName+'][data-group="'+s+'"]'),u=o.filter(":checked");if(u.length===0){return}t.push("[");t.push(i);if(o.length>u.length){var a=[];u.each(function(){a.push(e(this).parent().text())});t.push(": "+a.join(", "))}t.push("]");r.push(t.join(""))})}return t==="text"?r:i},setSelects:function(t){var n=this;this.$selectItems.prop("checked",false);e.each(t,function(e,t){n.$selectItems.filter('[value="'+t+'"]').prop("checked",true)});this.$selectAll.prop("checked",this.$selectItems.length===this.$selectItems.filter(":checked").length);this.update()},enable:function(){this.$choice.removeClass("disabled")},disable:function(){this.$choice.addClass("disabled")},checkAll:function(){this.$selectItems.prop("checked",true);this.$selectGroups.prop("checked",true);this.$selectAll.prop("checked",true);this.update();this.options.onCheckAll()},uncheckAll:function(){this.$selectItems.prop("checked",false);this.$selectGroups.prop("checked",false);this.$selectAll.prop("checked",false);this.update();this.options.onUncheckAll()},focus:function(){this.$choice.focus();this.options.onFocus()},blur:function(){this.$choice.blur();this.options.onBlur()},refresh:function(){this.init()},filter:function(){var t=this,n=e.trim(this.$searchInput.val()).toLowerCase();if(n.length===0){this.$selectItems.parent().show();this.$disableItems.parent().show();this.$selectGroups.parent().show()}else{this.$selectItems.each(function(){var t=e(this).parent();t[t.text().toLowerCase().indexOf(n)<0?"hide":"show"]()});this.$disableItems.parent().hide();this.$selectGroups.each(function(){var n=e(this).parent();var r=n.attr("data-group"),i=t.$selectItems.filter(":visible");n[i.filter('[data-group="'+r+'"]').length===0?"hide":"show"]()});if(this.$selectItems.filter(":visible").length){this.$selectAll.parent().show();this.$noResults.hide()}else{this.$selectAll.parent().hide();this.$noResults.show()}}this.updateOptGroupSelect();this.updateSelectAll()}};e.fn.multipleSelect=function(){var n=arguments[0],r=arguments,i,s=["getSelects","setSelects","enable","disable","checkAll","uncheckAll","focus","blur","refresh"];this.each(function(){var o=e(this),u=o.data("multipleSelect"),a=e.extend({},e.fn.multipleSelect.defaults,o.data(),typeof n==="object"&&n);if(!u){u=new t(o,a);o.data("multipleSelect",u)}if(typeof n==="string"){if(e.inArray(n,s)<0){throw"Unknown method: "+n}i=u[n](r[1])}else{u.init();if(r[1]){i=u[r[1]].apply(u,[].slice.call(r,2))}}});return i?i:this};e.fn.multipleSelect.defaults={name:"",isOpen:false,placeholder:"",selectAll:true,selectAllText:"Select all",selectAllDelimiter:["[","]"],allSelected:"All selected",minumimCountSelected:3,countSelected:"# of % selected",noMatchesFound:"No matches found",multiple:false,multipleWidth:80,single:false,filter:false,width:undefined,maxHeight:250,container:null,position:"bottom",keepOpen:false,blockSeparator:"",displayValues:false,delimiter:", ",styler:function(){return false},textTemplate:function(e){return e.text()},onOpen:function(){return false},onClose:function(){return false},onCheckAll:function(){return false},onUncheckAll:function(){return false},onFocus:function(){return false},onBlur:function(){return false},onOptgroupClick:function(){return false},onClick:function(){return false}}})(jQuery);!function(a){"use strict";"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){"use strict";function b(){var a=document.createElement("input");return a.setAttribute("type","range"),"text"!==a.type}function c(a,b){var c=Array.prototype.slice.call(arguments,2);return setTimeout(function(){return a.apply(null,c)},b)}function d(a,b){return b=b||100,function(){if(!a.debouncing){var c=Array.prototype.slice.apply(arguments);a.lastReturnVal=a.apply(window,c),a.debouncing=!0}return clearTimeout(a.debounceTimeout),a.debounceTimeout=setTimeout(function(){a.debouncing=!1},b),a.lastReturnVal}}function e(a){return 0!==a.offsetWidth||0!==a.offsetHeight?!1:!0}function f(a){for(var b=[],c=a.parentNode;e(c);)b.push(c),c=c.parentNode;return b}function g(a,b){var c=f(a),d=c.length,e=[],g=a[b];if(d){for(var h=0;d>h;h++)e[h]=c[h].style.display,c[h].style.display="block",c[h].style.height="0",c[h].style.overflow="hidden",c[h].style.visibility="hidden";g=a[b];for(var i=0;d>i;i++)c[i].style.display=e[i],c[i].style.height="",c[i].style.overflow="",c[i].style.visibility=""}return g}function h(b,e){if(this.$window=a(window),this.$document=a(document),this.$element=a(b),this.options=a.extend({},m,e),this._defaults=m,this._name=i,this.startEvent=this.options.startEvent.join("."+i+" ")+"."+i,this.moveEvent=this.options.moveEvent.join("."+i+" ")+"."+i,this.endEvent=this.options.endEvent.join("."+i+" ")+"."+i,this.polyfill=this.options.polyfill,this.onInit=this.options.onInit,this.onSlide=this.options.onSlide,this.onSlideEnd=this.options.onSlideEnd,this.polyfill&&l)return!1;this.identifier="js-"+i+"-"+k++,this.min=parseFloat(this.$element[0].getAttribute("min")||0),this.max=parseFloat(this.$element[0].getAttribute("max")||100),this.value=parseFloat(this.$element[0].value||this.min+(this.max-this.min)/2),this.step=parseFloat(this.$element[0].getAttribute("step")||1),this.toFixed=(this.step+"").replace(".","").length-1,this.$fill=a('<div class="'+this.options.fillClass+'" />'),this.$handle=a('<div class="'+this.options.handleClass+'" />'),this.$range=a('<div class="'+this.options.rangeClass+'" id="'+this.identifier+'" />').insertAfter(this.$element).prepend(this.$fill,this.$handle),this.$element.css({position:"absolute",width:"1px",height:"1px",overflow:"hidden",opacity:"0"}),this.handleDown=a.proxy(this.handleDown,this),this.handleMove=a.proxy(this.handleMove,this),this.handleEnd=a.proxy(this.handleEnd,this),this.init();var f=this;this.$window.on("resize."+i,d(function(){c(function(){f.update()},300)},20)),this.$document.on(this.startEvent,"#"+this.identifier+":not(."+this.options.disabledClass+")",this.handleDown),this.$element.on("change."+i,function(a,b){if(!b||b.origin!==i){var c=a.target.value,d=f.getPositionFromValue(c);f.setPosition(d)}})}var i="rangeslider",j=[],k=0,l=b(),m={polyfill:!0,rangeClass:"rangeslider",disabledClass:"rangeslider--disabled",fillClass:"rangeslider__fill",handleClass:"rangeslider__handle",startEvent:["mousedown","touchstart","pointerdown"],moveEvent:["mousemove","touchmove","pointermove"],endEvent:["mouseup","touchend","pointerup"]};h.prototype.init=function(){this.onInit&&"function"==typeof this.onInit&&this.onInit(),this.update()},h.prototype.update=function(){this.handleWidth=g(this.$handle[0],"offsetWidth"),this.rangeWidth=g(this.$range[0],"offsetWidth"),this.maxHandleX=this.rangeWidth-this.handleWidth,this.grabX=this.handleWidth/2,this.position=this.getPositionFromValue(this.value),this.$element[0].disabled?this.$range.addClass(this.options.disabledClass):this.$range.removeClass(this.options.disabledClass),this.setPosition(this.position)},h.prototype.handleDown=function(a){if(a.preventDefault(),this.$document.on(this.moveEvent,this.handleMove),this.$document.on(this.endEvent,this.handleEnd),!((" "+a.target.className+" ").replace(/[\n\t]/g," ").indexOf(this.options.handleClass)>-1)){var b=this.getRelativePosition(a),c=this.$range[0].getBoundingClientRect().left,d=this.getPositionFromNode(this.$handle[0])-c;this.setPosition(b-this.grabX),b>=d&&b<d+this.handleWidth&&(this.grabX=b-d)}},h.prototype.handleMove=function(a){a.preventDefault();var b=this.getRelativePosition(a);this.setPosition(b-this.grabX)},h.prototype.handleEnd=function(a){a.preventDefault(),this.$document.off(this.moveEvent,this.handleMove),this.$document.off(this.endEvent,this.handleEnd),this.onSlideEnd&&"function"==typeof this.onSlideEnd&&this.onSlideEnd(this.position,this.value)},h.prototype.cap=function(a,b,c){return b>a?b:a>c?c:a},h.prototype.setPosition=function(a){var b,c;b=this.getValueFromPosition(this.cap(a,0,this.maxHandleX)),c=this.getPositionFromValue(b),this.$fill[0].style.width=c+this.grabX+"px",this.$handle[0].style.left=c+"px",this.setValue(b),this.position=c,this.value=b,this.onSlide&&"function"==typeof this.onSlide&&this.onSlide(c,b)},h.prototype.getPositionFromNode=function(a){for(var b=0;null!==a;)b+=a.offsetLeft,a=a.offsetParent;return b},h.prototype.getRelativePosition=function(a){var b=this.$range[0].getBoundingClientRect().left,c=0;return"undefined"!=typeof a.pageX?c=a.pageX:"undefined"!=typeof a.originalEvent.clientX?c=a.originalEvent.clientX:a.originalEvent.touches&&a.originalEvent.touches[0]&&"undefined"!=typeof a.originalEvent.touches[0].clientX?c=a.originalEvent.touches[0].clientX:a.currentPoint&&"undefined"!=typeof a.currentPoint.x&&(c=a.currentPoint.x),c-b},h.prototype.getPositionFromValue=function(a){var b,c;return b=(a-this.min)/(this.max-this.min),c=b*this.maxHandleX},h.prototype.getValueFromPosition=function(a){var b,c;return b=a/(this.maxHandleX||1),c=this.step*Math.round(b*(this.max-this.min)/this.step)+this.min,Number(c.toFixed(this.toFixed))},h.prototype.setValue=function(a){a!==this.value&&this.$element.val(a).trigger("change",{origin:i})},h.prototype.destroy=function(){this.$document.off(this.startEvent,"#"+this.identifier,this.handleDown),this.$element.off("."+i).removeAttr("style").removeData("plugin_"+i),this.$range&&this.$range.length&&this.$range[0].parentNode.removeChild(this.$range[0]),j.splice(j.indexOf(this.$element[0]),1),j.length||this.$window.off("."+i)},a.fn[i]=function(b){return this.each(function(){var c=a(this),d=c.data("plugin_"+i);d||(c.data("plugin_"+i,d=new h(this,b)),j.push(this)),"string"==typeof b&&d[b]()})}});jQuery&&function($){function i(i,t){var o=$('<div class="minicolors" />'),n=$.minicolors.defaults;i.data("minicolors-initialized")||(t=$.extend(!0,{},n,t),o.addClass("minicolors-theme-"+t.theme).toggleClass("minicolors-with-opacity",t.opacity).toggleClass("minicolors-no-data-uris",t.dataUris!==!0),void 0!==t.position&&$.each(t.position.split(" "),function(){o.addClass("minicolors-position-"+this)}),i.addClass("minicolors-input").data("minicolors-initialized",!1).data("minicolors-settings",t).prop("size",7).wrap(o).after('<div class="minicolors-panel minicolors-slider-'+t.control+'"><div class="minicolors-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-opacity-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-grid minicolors-sprite"><div class="minicolors-grid-inner"></div><div class="minicolors-picker"><div></div></div></div></div>'),t.inline||(i.after('<span class="minicolors-swatch minicolors-sprite"><span class="minicolors-swatch-color"></span></span>'),i.next(".minicolors-swatch").on("click",function(t){t.preventDefault(),i.focus()})),i.parent().find(".minicolors-panel").on("selectstart",function(){return!1}).end(),t.inline&&i.parent().addClass("minicolors-inline"),e(i,!1),i.data("minicolors-initialized",!0))}function t(i){var t=i.parent();i.removeData("minicolors-initialized").removeData("minicolors-settings").removeProp("size").removeClass("minicolors-input"),t.before(i).remove()}function o(i){var t=i.parent(),o=t.find(".minicolors-panel"),s=i.data("minicolors-settings");!i.data("minicolors-initialized")||i.prop("disabled")||t.hasClass("minicolors-inline")||t.hasClass("minicolors-focus")||(n(),t.addClass("minicolors-focus"),o.stop(!0,!0).fadeIn(s.showSpeed,function(){s.show&&s.show.call(i.get(0))}))}function n(){$(".minicolors-focus").each(function(){var i=$(this),t=i.find(".minicolors-input"),o=i.find(".minicolors-panel"),n=t.data("minicolors-settings");o.fadeOut(n.hideSpeed,function(){n.hide&&n.hide.call(t.get(0)),i.removeClass("minicolors-focus")})})}function s(i,t,o){var n=i.parents(".minicolors").find(".minicolors-input"),s=n.data("minicolors-settings"),e=i.find("[class$=-picker]"),r=i.offset().left,c=i.offset().top,l=Math.round(t.pageX-r),h=Math.round(t.pageY-c),d=o?s.animationSpeed:0,u,g,m,p;t.originalEvent.changedTouches&&(l=t.originalEvent.changedTouches[0].pageX-r,h=t.originalEvent.changedTouches[0].pageY-c),0>l&&(l=0),0>h&&(h=0),l>i.width()&&(l=i.width()),h>i.height()&&(h=i.height()),i.parent().is(".minicolors-slider-wheel")&&e.parent().is(".minicolors-grid")&&(u=75-l,g=75-h,m=Math.sqrt(u*u+g*g),p=Math.atan2(g,u),0>p&&(p+=2*Math.PI),m>75&&(m=75,l=75-75*Math.cos(p),h=75-75*Math.sin(p)),l=Math.round(l),h=Math.round(h)),i.is(".minicolors-grid")?e.stop(!0).animate({top:h+"px",left:l+"px"},d,s.animationEasing,function(){a(n,i)}):e.stop(!0).animate({top:h+"px"},d,s.animationEasing,function(){a(n,i)})}function a(i,t){function o(i,t){var o,n;return i.length&&t?(o=i.offset().left,n=i.offset().top,{x:o-t.offset().left+i.outerWidth()/2,y:n-t.offset().top+i.outerHeight()/2}):null}var n,s,a,e,c,l,d,g=i.val(),m=i.attr("data-opacity"),f=i.parent(),v=i.data("minicolors-settings"),b=f.find(".minicolors-swatch"),y=f.find(".minicolors-grid"),M=f.find(".minicolors-slider"),w=f.find(".minicolors-opacity-slider"),x=y.find("[class$=-picker]"),C=M.find("[class$=-picker]"),k=w.find("[class$=-picker]"),S=o(x,y),z=o(C,M),D=o(k,w);if(t.is(".minicolors-grid, .minicolors-slider")){switch(v.control){case"wheel":e=y.width()/2-S.x,c=y.height()/2-S.y,l=Math.sqrt(e*e+c*c),d=Math.atan2(c,e),0>d&&(d+=2*Math.PI),l>75&&(l=75,S.x=69-75*Math.cos(d),S.y=69-75*Math.sin(d)),s=u(l/.75,0,100),n=u(180*d/Math.PI,0,360),a=u(100-Math.floor(z.y*(100/M.height())),0,100),g=p({h:n,s:s,b:a}),M.css("backgroundColor",p({h:n,s:s,b:100}));break;case"saturation":n=u(parseInt(S.x*(360/y.width()),10),0,360),s=u(100-Math.floor(z.y*(100/M.height())),0,100),a=u(100-Math.floor(S.y*(100/y.height())),0,100),g=p({h:n,s:s,b:a}),M.css("backgroundColor",p({h:n,s:100,b:a})),f.find(".minicolors-grid-inner").css("opacity",s/100);break;case"brightness":n=u(parseInt(S.x*(360/y.width()),10),0,360),s=u(100-Math.floor(S.y*(100/y.height())),0,100),a=u(100-Math.floor(z.y*(100/M.height())),0,100),g=p({h:n,s:s,b:a}),M.css("backgroundColor",p({h:n,s:s,b:100})),f.find(".minicolors-grid-inner").css("opacity",1-a/100);break;default:n=u(360-parseInt(z.y*(360/M.height()),10),0,360),s=u(Math.floor(S.x*(100/y.width())),0,100),a=u(100-Math.floor(S.y*(100/y.height())),0,100),g=p({h:n,s:s,b:a}),y.css("backgroundColor",p({h:n,s:100,b:100}))}i.val(h(g,v.letterCase))}t.is(".minicolors-opacity-slider")&&(m=v.opacity?parseFloat(1-D.y/w.height()).toFixed(2):1,v.opacity&&i.attr("data-opacity",m)),b.find("SPAN").css({backgroundColor:g,opacity:m}),r(i,g,m)}function e(i,t){var o,n,s,a,e,c,l,g=i.parent(),m=i.data("minicolors-settings"),v=g.find(".minicolors-swatch"),b=g.find(".minicolors-grid"),y=g.find(".minicolors-slider"),M=g.find(".minicolors-opacity-slider"),w=b.find("[class$=-picker]"),x=y.find("[class$=-picker]"),C=M.find("[class$=-picker]");switch(o=h(d(i.val(),!0),m.letterCase),o||(o=h(d(m.defaultValue,!0),m.letterCase)),n=f(o),t||i.val(o),m.opacity&&(s=""===i.attr("data-opacity")?1:u(parseFloat(i.attr("data-opacity")).toFixed(2),0,1),isNaN(s)&&(s=1),i.attr("data-opacity",s),v.find("SPAN").css("opacity",s),e=u(M.height()-M.height()*s,0,M.height()),C.css("top",e+"px")),v.find("SPAN").css("backgroundColor",o),m.control){case"wheel":c=u(Math.ceil(.75*n.s),0,b.height()/2),l=n.h*Math.PI/180,a=u(75-Math.cos(l)*c,0,b.width()),e=u(75-Math.sin(l)*c,0,b.height()),w.css({top:e+"px",left:a+"px"}),e=150-n.b/(100/b.height()),""===o&&(e=0),x.css("top",e+"px"),y.css("backgroundColor",p({h:n.h,s:n.s,b:100}));break;case"saturation":a=u(5*n.h/12,0,150),e=u(b.height()-Math.ceil(n.b/(100/b.height())),0,b.height()),w.css({top:e+"px",left:a+"px"}),e=u(y.height()-n.s*(y.height()/100),0,y.height()),x.css("top",e+"px"),y.css("backgroundColor",p({h:n.h,s:100,b:n.b})),g.find(".minicolors-grid-inner").css("opacity",n.s/100);break;case"brightness":a=u(5*n.h/12,0,150),e=u(b.height()-Math.ceil(n.s/(100/b.height())),0,b.height()),w.css({top:e+"px",left:a+"px"}),e=u(y.height()-n.b*(y.height()/100),0,y.height()),x.css("top",e+"px"),y.css("backgroundColor",p({h:n.h,s:n.s,b:100})),g.find(".minicolors-grid-inner").css("opacity",1-n.b/100);break;default:a=u(Math.ceil(n.s/(100/b.width())),0,b.width()),e=u(b.height()-Math.ceil(n.b/(100/b.height())),0,b.height()),w.css({top:e+"px",left:a+"px"}),e=u(y.height()-n.h/(360/y.height()),0,y.height()),x.css("top",e+"px"),b.css("backgroundColor",p({h:n.h,s:100,b:100}))}i.data("minicolors-initialized")&&r(i,o,s)}function r(i,t,o){var n=i.data("minicolors-settings"),s=i.data("minicolors-lastChange");s&&s.hex===t&&s.opacity===o||(i.data("minicolors-lastChange",{hex:t,opacity:o}),n.change&&(n.changeDelay?(clearTimeout(i.data("minicolors-changeTimeout")),i.data("minicolors-changeTimeout",setTimeout(function(){n.change.call(i.get(0),t,o)},n.changeDelay))):n.change.call(i.get(0),t,o)),i.trigger("change").trigger("input"))}function c(i){var t=d($(i).val(),!0),o=b(t),n=$(i).attr("data-opacity");return o?(void 0!==n&&$.extend(o,{a:parseFloat(n)}),o):null}function l(i,t){var o=d($(i).val(),!0),n=b(o),s=$(i).attr("data-opacity");return n?(void 0===s&&(s=1),t?"rgba("+n.r+", "+n.g+", "+n.b+", "+parseFloat(s)+")":"rgb("+n.r+", "+n.g+", "+n.b+")"):null}function h(i,t){return"uppercase"===t?i.toUpperCase():i.toLowerCase()}function d(i,t){return i=i.replace(/[^A-F0-9]/gi,""),3!==i.length&&6!==i.length?"":(3===i.length&&t&&(i=i[0]+i[0]+i[1]+i[1]+i[2]+i[2]),"#"+i)}function u(i,t,o){return t>i&&(i=t),i>o&&(i=o),i}function g(i){var t={},o=Math.round(i.h),n=Math.round(255*i.s/100),s=Math.round(255*i.b/100);if(0===n)t.r=t.g=t.b=s;else{var a=s,e=(255-n)*s/255,r=(a-e)*(o%60)/60;360===o&&(o=0),60>o?(t.r=a,t.b=e,t.g=e+r):120>o?(t.g=a,t.b=e,t.r=a-r):180>o?(t.g=a,t.r=e,t.b=e+r):240>o?(t.b=a,t.r=e,t.g=a-r):300>o?(t.b=a,t.g=e,t.r=e+r):360>o?(t.r=a,t.g=e,t.b=a-r):(t.r=0,t.g=0,t.b=0)}return{r:Math.round(t.r),g:Math.round(t.g),b:Math.round(t.b)}}function m(i){var t=[i.r.toString(16),i.g.toString(16),i.b.toString(16)];return $.each(t,function(i,o){1===o.length&&(t[i]="0"+o)}),"#"+t.join("")}function p(i){return m(g(i))}function f(i){var t=v(b(i));return 0===t.s&&(t.h=360),t}function v(i){var t={h:0,s:0,b:0},o=Math.min(i.r,i.g,i.b),n=Math.max(i.r,i.g,i.b),s=n-o;return t.b=n,t.s=0!==n?255*s/n:0,t.h=0!==t.s?i.r===n?(i.g-i.b)/s:i.g===n?2+(i.b-i.r)/s:4+(i.r-i.g)/s:-1,t.h*=60,t.h<0&&(t.h+=360),t.s*=100/255,t.b*=100/255,t}function b(i){return i=parseInt(i.indexOf("#")>-1?i.substring(1):i,16),{r:i>>16,g:(65280&i)>>8,b:255&i}}$.minicolors={defaults:{animationSpeed:50,animationEasing:"swing",change:null,changeDelay:0,control:"hue",dataUris:!0,defaultValue:"",hide:null,hideSpeed:100,inline:!1,letterCase:"lowercase",opacity:!1,position:"bottom left",show:null,showSpeed:100,theme:"default"}},$.extend($.fn,{minicolors:function(s,a){switch(s){case"destroy":return $(this).each(function(){t($(this))}),$(this);case"hide":return n(),$(this);case"opacity":return void 0===a?$(this).attr("data-opacity"):($(this).each(function(){e($(this).attr("data-opacity",a))}),$(this));case"rgbObject":return c($(this),"rgbaObject"===s);case"rgbString":case"rgbaString":return l($(this),"rgbaString"===s);case"settings":return void 0===a?$(this).data("minicolors-settings"):($(this).each(function(){var i=$(this).data("minicolors-settings")||{};t($(this)),$(this).minicolors($.extend(!0,i,a))}),$(this));case"show":return o($(this).eq(0)),$(this);case"value":return void 0===a?$(this).val():($(this).each(function(){e($(this).val(a))}),$(this));default:return"create"!==s&&(a=s),$(this).each(function(){i($(this),a)}),$(this)}}}),$(document).on("mousedown.minicolors touchstart.minicolors",function(i){$(i.target).parents().add(i.target).hasClass("minicolors")||n()}).on("mousedown.minicolors touchstart.minicolors",".minicolors-grid, .minicolors-slider, .minicolors-opacity-slider",function(i){var t=$(this);i.preventDefault(),$(document).data("minicolors-target",t),s(t,i,!0)}).on("mousemove.minicolors touchmove.minicolors",function(i){var t=$(document).data("minicolors-target");t&&s(t,i)}).on("mouseup.minicolors touchend.minicolors",function(){$(this).removeData("minicolors-target")}).on("mousedown.minicolors touchstart.minicolors",".minicolors-swatch",function(i){var t=$(this).parent().find(".minicolors-input");i.preventDefault(),o(t)}).on("focus.minicolors",".minicolors-input",function(){var i=$(this);i.data("minicolors-initialized")&&o(i)}).on("blur.minicolors",".minicolors-input",function(){var i=$(this),t=i.data("minicolors-settings");i.data("minicolors-initialized")&&(i.val(d(i.val(),!0)),""===i.val()&&i.val(d(t.defaultValue,!0)),i.val(h(i.val(),t.letterCase)))}).on("keydown.minicolors",".minicolors-input",function(i){var t=$(this);if(t.data("minicolors-initialized"))switch(i.keyCode){case 9:n();break;case 13:case 27:n(),t.blur()}}).on("keyup.minicolors",".minicolors-input",function(){var i=$(this);i.data("minicolors-initialized")&&e(i,!0)}).on("paste.minicolors",".minicolors-input",function(){var i=$(this);i.data("minicolors-initialized")&&setTimeout(function(){e(i,!0)},1)})}(jQuery);var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(r){var t,e,o,a,h,n,c,d="",C=0;for(r=Base64._utf8_encode(r);C<r.length;)t=r.charCodeAt(C++),e=r.charCodeAt(C++),o=r.charCodeAt(C++),a=t>>2,h=(3&t)<<4|e>>4,n=(15&e)<<2|o>>6,c=63&o,isNaN(e)?n=c=64:isNaN(o)&&(c=64),d=d+this._keyStr.charAt(a)+this._keyStr.charAt(h)+this._keyStr.charAt(n)+this._keyStr.charAt(c);return d},decode:function(r){var t,e,o,a,h,n,c,d="",C=0;for(r=r.replace(/[^A-Za-z0-9\+\/\=]/g,"");C<r.length;)a=this._keyStr.indexOf(r.charAt(C++)),h=this._keyStr.indexOf(r.charAt(C++)),n=this._keyStr.indexOf(r.charAt(C++)),c=this._keyStr.indexOf(r.charAt(C++)),t=a<<2|h>>4,e=(15&h)<<4|n>>2,o=(3&n)<<6|c,d+=String.fromCharCode(t),64!=n&&(d+=String.fromCharCode(e)),64!=c&&(d+=String.fromCharCode(o));return d=Base64._utf8_decode(d)},_utf8_encode:function(r){r=r.replace(/\r\n/g,"\n");for(var t="",e=0;e<r.length;e++){var o=r.charCodeAt(e);128>o?t+=String.fromCharCode(o):o>127&&2048>o?(t+=String.fromCharCode(o>>6|192),t+=String.fromCharCode(63&o|128)):(t+=String.fromCharCode(o>>12|224),t+=String.fromCharCode(o>>6&63|128),t+=String.fromCharCode(63&o|128))}return t},_utf8_decode:function(r){for(var t="",e=0,o=c1=c2=0;e<r.length;)o=r.charCodeAt(e),128>o?(t+=String.fromCharCode(o),e++):o>191&&224>o?(c2=r.charCodeAt(e+1),t+=String.fromCharCode((31&o)<<6|63&c2),e+=2):(c2=r.charCodeAt(e+1),c3=r.charCodeAt(e+2),t+=String.fromCharCode((15&o)<<12|(63&c2)<<6|63&c3),e+=3);return t}};(function ( $ ) {
	"use strict";
	
	$(function () {
if(location.hash){
	$('.wpmca_box').removeClass('show').filter(location.hash).addClass('show');
	$('div.wpmca_tabs li').removeClass('active');
	$('div.wpmca_tabs li:has(a[href="'+location.hash+'"])').addClass('active');
}
$('li.material-design a').click(function(e){
	var target = e.target;
    var rect = target.getBoundingClientRect();
    var ripple = target.querySelector('.ripple');
    if (!ripple) {
        ripple = document.createElement('span');
        ripple.className = 'ripple';
        ripple.style.height = ripple.style.width = Math.max(rect.width, rect.height) + 'px';
        target.appendChild(ripple);
    }
    ripple.classList.remove('show');
    var top = e.pageY - rect.top - ripple.offsetHeight / 2 - document.body.scrollTop;
    var left = e.pageX - rect.left - ripple.offsetWidth / 2 - document.body.scrollLeft;
    ripple.style.top = top + 'px';
    ripple.style.left = left + 'px';
    ripple.classList.add('show');
    return false;

});
$('.wpmca_menu_icon').click(function(){
  $('.wpmca_menu_box').toggleClass('active'); 
});

$('.wpmca_menu_box a').click(function(e){
    e.preventDefault();
    $(".wpmca_box").removeClass('show');
    $("#"+$(this).attr("href").replace("#",'')).addClass('show');
     $('.wpmca_menu_box').toggleClass('active'); 
     $('.wpmca_menu_title').html($(this).attr("data-title"));    
});

$('button.material-design,div.material-design').click(function(e){
    var target = e.target;
    var rect = target.getBoundingClientRect();
    var ripple = target.querySelector('.ripple');
    if (!ripple) {
        ripple = document.createElement('span');
        ripple.className = 'ripple';
        ripple.style.height = ripple.style.width = Math.max(rect.width, rect.height) + 'px';
        target.appendChild(ripple);
    }
    ripple.classList.remove('show');
    var top = e.pageY - rect.top - ripple.offsetHeight / 2 - document.body.scrollTop;
    var left = e.pageX - rect.left - ripple.offsetWidth / 2 - document.body.scrollLeft;
    ripple.style.top = top + 'px';
    ripple.style.left = left + 'px';
    ripple.classList.add('show');
    return false;

});

$('.tabitem a').click(function(e){
	e.preventDefault();
	$(".wpmca_box").removeClass('show');
	$("#"+$(this).attr("href").replace("#",'')).addClass('show');
	$('.tabitem').removeClass("active");
	$(this).parent().addClass('active');
	$('.wpmca_menu_title').html($(this).attr("data-title"));
});

$('#wpmca_update').click(function (e){
			e.preventDefault();
			tinyMCE.triggerSave(false, true);
			$('#wpmcaaction').val('wpmchimpa_us_ajax');
			$(".wpmca_status").hide();
			$('.wpmcaspinner').fadeIn();
			$.ajax({
				type:"POST",
				url: "./admin-ajax.php",
				data: $('#wpmca_form').serialize(),
				success:function(data){
					if(data == '1') ajax_success();
					else ajax_error();
				}
			});
			return false;
		});
$('#wpmca_load_list').click(function (e){
			e.preventDefault();
			$(".wpmca_status").hide();
			$('.wpmcaspinner').fadeIn();
			$('#list_result .list_load_result').html('');
			$.ajax({
				type:"POST",
				url: "./admin-ajax.php",
				dataType: "json",
				data: { action: "wpmchimpa_load_list", api_key: $("#api_key").val() },
				success:function(data){
					if(data.stat == "0"){
						ajax_error();
						$('#list_result .list_load_result').html("Please Create a List in MailChimp");
					}
					else if(data.stat == "1"){
						ajax_success();
						delete data.stat;
						group_opt(data);
					}
					else {
						ajax_success();
						var response= '<div class="group"><div class="wpmcapara">Select Your MailChimp List</div></div>';
						for (var i = 0; i < data.lists.length; i++) { 
    						response += '<div class="group wpmcacb p1"><input type="radio" name="sel_list" id="sel_list'+i+'" value="'+data.lists[i].id+'"><label for="sel_list'+i+'">'+data.lists[i].name+'</label></div>';
						}
						response += '<div class="group"><button class="wpmca_button wpmca_sel_button green material-design" id="wpmca_sel_list">Select List</button></div>';
						$('#list_result .list_load_result').html(response);
						$('#wpmca_sel_list').click(function(){
							e.preventDefault();
							sel_list_func();
							return false});
					}
				}
				});
			return false;
});
function ajax_success(){
	$('.wpmcaspinner').fadeOut(function(){
		$(".wpmca_status").show().addClass('wpmcaupdated').delay('3000').fadeOut(4000,function(){
			$(".wpmca_status").removeClass('wpmcaupdated');
		});
	});
}
function ajax_error(){
	$('.wpmcaspinner').fadeOut(function(){
		$(".wpmca_status").show().addClass('wpmcaerror').delay('3000').fadeOut(4000,function(){
			$(".wpmca_status").removeClass('wpmcaerror');
		});
	});
}
function group_opt(data){
	var response = 'Groups in MailChimp List '+data.list_name;
	if(!data.hasOwnProperty('groups')) {
		show_list_final(data);
	}
	else {
		for (var i = 0; i < data.groups.length; i++) {
			response += '<span class="bulletted">'+data.groups[i].group_name+'</span>';
			for (var j = 0; j < data.groups[i].groups.length; j++) { 
				response += '<div class="group wpmcacb p2"><label><input type="checkbox" class="sel_groups" name="sel_groups[]" value="'+data.groups[i].groups[j].id+'"><div class="mcheckbox"></div>'+data.groups[i].groups[j].gname+'</label></div>';
			}
		}
		response += '<div class="group"><button class="wpmca_button wpmca_sel_button green material-design" id="wpmca_sel_group">Select groups</button></div>';
		$('#list_result .list_load_result').html(response);
		$('#wpmca_sel_group').click(function(e){
			e.preventDefault();
			sel_group_func(data);
			return false});
	}
}
function sel_group_func(data){
	$(".wpmca_status").hide();
	$('.wpmcaspinner').fadeIn();
	var mygroups = new Array();
    $(".sel_groups").each(function() {
        if($(this).attr('checked'))
       		mygroups.push($(this).val());
    });
    for(var i=0; i < data.groups.length; i++){
    	for(var j=0; j < data.groups[i].groups.length;j++){
    		if(jQuery.inArray(data.groups[i].groups[j].id+'', mygroups)==-1){
    			data.groups[i].groups.splice(j,1);
    			j--;
    		}
    	}
    	if(data.groups[i].groups.length == 0){
    		data.groups.splice(i,1);
    		i--;
    	}
    }
    if(data.groups.length == 0)
    	delete data.groups;
    ajax_success();
    show_list_final(data);
}
function show_list_final(data){
	$('#wpmca_list_record').val(JSON.stringify(data));
	var response='MailChimp List Name<span class="bulletted">'+data.list_name+'</span>'
	if(data.hasOwnProperty('groups')){
		response +='Groups in MailChimp List';
		for (var i = 0; i < data.groups.length; i++) { 
			response += '<span class="wpmcapara p1">'+data.groups[i].group_name+'</span>';
			for(var j = 0; j < data.groups[i].groups.length; j++)
				response += '<span class="bulletted">'+data.groups[i].groups[j].gname+'</span>';
		}
	}
    $('#list_result .list_load_result').html(response);
}
function sel_list_func(){
	$(".wpmca_status").hide();
	$('.wpmcaspinner').fadeIn();
	$.ajax({
		type:"POST",
		url: "./admin-ajax.php",
		dataType: "json",
		data: { action: "wpmchimpa_sel_list", sel_list: $('input[name=sel_list]:checked').val(), api_key: $("#api_key").val() },
		success:function(data){
			ajax_success();
			group_opt(data);
		}
	});
}


$('#usync_role').multipleSelect({
    width: '300px',placeholder: "User roles"
});
if(isset(wpmchimpa.usync_role)){
 $('#usync_role').multipleSelect('setSelects',wpmchimpa.usync_role);
}
$('.wpmc_usync').click(function(e){
	e.preventDefault();	
	$('.wpmcaspinner').fadeIn();
	$.ajax({
		type:"POST",
		url: "./admin-ajax.php",
		dataType: "json",
		data: { action: $(this).attr('wpmcsync') },
		success:function(data){
			if(data == 1)
				ajax_success();
			else
				ajax_error();
		}
	});
	return false;
});

$('.wpmchimp-range-sel').change(function(e) {  
        $(this).next().find('.rangeslider__handle').attr('data-rsval',$(this).val());
}).rangeslider({
    polyfill: false,
    onInit: function() {
        $('.wpmchimp-range-sel').each(function(){
            $(this).next().find('.rangeslider__handle').attr('data-rsval',$(this).val());
        });
    }
});

var extrasets={
          "lightbox": {
            "0": ["lite_bg_op"],
            "1": ["lite_img1","lite_dislogo","lite_dissoc","lite_head_col","lite_bg_c","lite_soc_head","lite_soc_fc","lite_hshad_col","lite_soc_f","lite_close_col","lite_bg_op"]
          },
          "slider": {
            "0": ["slider_bg_c"],
            "1": ["slider_dissoc","slider_canvas_c","slider_bg_c","slider_soc_head","slider_soc_fc","slider_soc_f"]
          },
          "widget": {
            "0": ["widget_bg_c"],
            "1": ["widget_dissoc","widget_bg_c","widget_soc_head","widget_soc_f","widget_soc_fc"]
          },
          "addon": {
            "0": ["addon_bg_c"],
            "1": ["addon_dissoc","addon_bg_c","addon_soc_head","addon_soc_f","addon_soc_fc"]
          }
        };
function showextrafeat(type,theme){
$('#'+type+' .extra_opts, #'+type+' .extra_opts .wpmca_group').hide();
    if(extrasets[type][theme] != undefined){
        $('#'+type+' .extra_opts').removeAttr('style');
        $.each(extrasets[type][theme],function(i,j){
            $('.'+j).removeAttr('style');
        });
    }
}

showextrafeat('lightbox',wpmchimpa.litebox_theme);
showextrafeat('slider',wpmchimpa.slider_theme);
showextrafeat('widget',wpmchimpa.widget_theme);
showextrafeat('addon',wpmchimpa.addon_theme);

$('.wpmc_media_uploader').click(function(){
    var preid=$(this).closest('.wpmca_box').attr('id');
    var wpmchimp_img1;
 
    if ( undefined !== wpmchimp_img1 ) {wpmchimp_img1.open();return;}
 
    wpmchimp_img1 = wp.media.frames.wpmchimp_img1 = wp.media({
        className: 'media-frame wpmchimpa-img1',
        frame:    'select',
        multiple: false,
        title: 'Get your Image',
        library: {type: 'image'}
    });

    wpmchimp_img1.on('select', function(){
        var ma = wpmchimp_img1.state().get('selection').first().toJSON();
        jQuery('input[name="lite_img1"]').val(ma.url).change();
    });
    wpmchimp_img1.open();
});

$('.wpmccolor').wpColorPicker({
	change:function (event,ui){
		$('#wpmca_preview p').css('color','#'+ui.color._color.toString(16));
	}
});

$(window).scroll(function(){
    if($('.wpmca_header').height()>100)$(".wpmca_toolbar").css({"top": '0'});
    else{
  if ($(window).scrollTop() > 110){
    	$(".wpmca_toolbar").css({"top": ($(window).scrollTop()) -110 + "px"});
	}else $(".wpmca_toolbar").css({"top": '0'});
}
});
$(window).scroll(function(){
    if($(".wpmca_box.show .bak2toprev").hasClass('actrb')){
        var scrht = $(".wpmca_box.show").find('.wpmca_item:eq(2)').offset().top;
        if($(window).scrollTop() > scrht-200)
            $(".wpmca_box.show .bak2toprev").removeClass('hiderb');
        else
            $(".wpmca_box.show .bak2toprev").addClass('hiderb');
    }
});
$('.bak2toprev').click(function(){
   var scopt=jQuery(this).closest('.wpmca_box').find('.wpmca_prev');
    $('html,body').animate({scrollTop: scopt.offset().top - 100},500);
});
$('#wpmca_backup').click(function(e){
	e.preventDefault();
	window.open('./admin-ajax.php?action=wpmchimpa_secure&q=backup',"_self");
	return false;
});
$('#wpmca_restore').click(function(e){
	e.preventDefault();
	$('#file_sel').click();
	return false;
});
$('#wpmca_reset').click(function(e){
   e.preventDefault();
   if (confirm('Are you sure you want to reset Plugin values to default?')) {
        $('.wpmcaspinner').fadeIn();
        $.post('./admin-ajax.php?action=wpmchimpa_secure&q=reset','',
                function(e){ajax_success();location.reload();
          });
    }    
   return false; 
});
$('.wpmchimpa_donate').click(function(){
   $('#donate_form').submit(); 
});
$('.feat_buypro').click(function(){
    window.open("http://voltroid.com/chimpmate","_blank");
});
$('#faq_button').click(function(){
    window.open("http://voltroid.com/chimpmate#faq","_blank");
});
$('#sup_button').click(function(){
    window.open("http://wordpress.org/support/plugin/chimpmate","_blank");
});
var JsonObj = null;
function handleFileSelect(evt) {
	$('.wpmcaspinner').fadeIn();
    var files = evt.target.files; 
     var f = files[0];
      var reader = new FileReader(); 
    reader.readAsText(f);
    reader.onload = function() {
        var text = JSON.parse(reader.result);
      $.post('./admin-ajax.php?action=wpmchimpa_secure&q=restore',
      	{ 'data' : text},
      		function(e){ajax_success();location.reload();
      });
	}
}
$('#file_sel').change(handleFileSelect);
	/*
$('.premium').click(function(){
    $(this).closest('.wpmca_group').find('.prefeat').addClass('click');
    $('.prefeat').click(function(){
        window.open("http://voltroid.com/wordpress/plugins/chimpmate","_blank");
    });
    return false;
}); 
$('.premium').hover(function(){
 if(!$(this).closest('.wpmca_group').find('.prefeat').hasClass('click'))
    $(this).closest('.wpmca_group').append('<div class="prefeat"></div>');
},function(){
    if(!$(this).closest('.wpmca_group').find('.prefeat').hasClass('click'))
        $(this).closest('.wpmca_group').find('.prefeat').remove();
});

$('.premiumsp').click(function(){
    $('#premiumshow').find('.prefeat').addClass('click');
    $('.prefeat').click(function(){
        window.open("http://voltroid.com/wordpress/plugins/chimpmate","_blank");
    });
    return false;
}); 
$('.premiumsp').hover(function(){
 if(!$('#premiumshow').find('.prefeat').hasClass('click'))
    $('#premiumshow').append('<div class="prefeat"></div>');
},function(){
    if(!$('#premiumshow').find('.prefeat').hasClass('click'))
        $('#premiumshow').find('.prefeat').remove();
});*/
/*$('#view_chart').click(function(){
    $('#goog_charts').show();
    var data = google.visualization.arrayToDataTable([
          ['Date', 'Subs', 'Unsubs', 'Mails Sent', 'Open', 'Click'],
          ['1 Jan',  1000,400,60,40, 20],
          ['3 Jan',  1170,460,80,50,50],
          ['5 Jan',  660,1120,70,50,40],
          ['7 Jan',  1000,400,100,68,32],
          ['9 Jan',  1170,460,72,16,10],
          ['11 Jan',  660,1120,60,40, 20],
          ['13 Jan',  1000,400,80,50,50],
          ['15 Jan',  1170,460,70,50,40],
          ['17 Jan',  660,1120,100,68,32],
          ['19 Jan',  1000,400,72,16,10],
          ['21 Jan',  1170,460,60,40, 20],
          ['23 Jan',  660,1120,80,50,50],
          ['25 Jan',  1000,400,70,50,40],
          ['27 Jan',  1170,460,100,68,32],
          ['29 Jan',  660,1120,72,16,10],
          ['31 Jan',  1030,540,60,40, 20]
        ]);

        var options = {
          title: 'MailChimp Statistics',
          curveType: 'function'
        };
        var chart = new google.visualization.LineChart(document.getElementById('goog_charts'));
        chart.draw(data, options);
});*/

//theme specific
//live preview
var dom='';
   for(var i=0;i < 2;i++){
    dom += '<div class="wpmca_linecont">' ;
    for(var j=0;j < 10;j++){
        dom+='<div class="wpmca_line"></div>';
    }
    dom += '</div>';
}
$('.wpmca_viewportbck').prepend(dom);
//angularjs
$('#lite_msg').attr('ng-model','data.ltopt.lite_msg');
$('#slider_msg').attr('ng-model','data.stopt.slider_msg');
$('#widget_msg').attr('ng-model','data.wtopt.widget_msg');
$('#addon_msg').attr('ng-model','data.atopt.addon_msg');
$(window).load(function(){
    $('#wp-lite_msg-wrap').bind("DOMSubtreeModified",function(){
       var scope = angular.element($(".wpmca_content")).scope();
        scope.$apply(function(){
            scope.data.ltopt.lite_msg = tinyMCE.get('lite_msg').getContent();
        });
    });
    $('#wp-slider_msg-wrap').bind("DOMSubtreeModified",function(){
       var scope = angular.element($(".wpmca_content")).scope();
        scope.$apply(function(){
            scope.data.stopt.slider_msg = tinyMCE.get('slider_msg').getContent();
        });
    });
    $('#wp-widget_msg-wrap').bind("DOMSubtreeModified",function(){
       var scope = angular.element($(".wpmca_content")).scope();
        scope.$apply(function(){
            scope.data.wtopt.widget_msg = tinyMCE.get('widget_msg').getContent();
        });
    });
    $('#wp-addon_msg-wrap').bind("DOMSubtreeModified",function(){
       var scope = angular.element($(".wpmca_content")).scope();
        scope.$apply(function(){
            scope.data.atopt.addon_msg = tinyMCE.get('addon_msg').getContent();
        });
    });
});
"use strict";angular.module("minicolors",[]),angular.module("minicolors").provider("minicolors",function(){this.defaults={theme:"bootstrap",position:"bottom left",defaultValue:"",animationSpeed:50,animationEasing:"swing",change:null,changeDelay:0,control:"hue",hide:null,hideSpeed:100,inline:!1,letterCase:"lowercase",opacity:!1,show:null,showSpeed:100},this.$get=function(){return this}}),angular.module("minicolors").directive("minicolors",["minicolors","$timeout",function(i,n){return{require:"?ngModel",restrict:"A",priority:1,link:function(o,e,r,t){var l=!1,a=function(){var n=angular.extend({},i.defaults,o.$eval(r.minicolors));return n};t.$render=function(){n(function(){var i=t.$viewValue;e.minicolors("value",i)},0,!1)};var u=function(){if(t){var i=a();return i.change=function(i){o.$apply(function(){t.$setViewValue(i)})},e.hasClass("minicolors")&&e.minicolors("destroy"),e.minicolors(i),l?void 0:(n(function(){var i=t.$viewValue;e.minicolors("value",i)},0),void(l=!0))}};u(),o.$watch(a,u,!0)}}}]);var wpmcapp = angular.module("chimpmate", ['minicolors']);
wpmcapp.controller("chimpmateController", function($scope,$http,$compile) {
    $scope.data=wpmchimpa;
    $scope.fonts = wpmchimpa.web_fonts.concat(wpmchimpa.goog_fonts);
    $scope.fontsiz = Array.apply(null, {length: 100}).map(Number.call, String);
    $('input[type="range"]').change();
    $scope.vupre = function($e){
        var vupre=$($e.target);
        var preid=vupre.closest('.wpmca_box').attr('id');
        if($('.wpmca_prev.live'+preid).hasClass('showlive')){
            $('.wpmca_prev.live'+preid).toggleClass('showlive');
            setTimeout(function(){
                $('.wpmca_prev.live'+preid+' .wpmca_viewport').html('');
            },1000);
            vupre.html('View Preview');
            $('#'+preid+' .bak2toprev').removeClass('actrb').addClass('hiderb');
        } else{
            var theme=vupre.closest('.wpmca_item').find('.wpmca_sel').val();
            var options = {'action':'wpmchimpa_prev_ajax','type':preid,'theme':theme};
            $('.wpmcaspinner').fadeIn();
            $http.get('./admin-ajax.php',{  params : options }).
            success(function(data, status, headers, config) {
                $('.wpmca_prev.live'+preid+' .wpmca_viewport').html($compile(data)($scope));
                $('.wpmca_prev.live'+preid).toggleClass('showlive');
                ajax_success();
                vupre.html('Close Preview');
                $('.bak2toprev').addClass('actrb');
            });
        }
    }
    $scope.themeswitcher = function(preid){
        $('.wpmcaspinner').fadeIn();
        switch(preid) {
            case 'lightbox':
                $.each($scope.data.ltopt,function(i,j){
                    $scope.data.ltopt[i]='';})
                tinyMCE.get('lite_msg').setContent('');
                var theme = $scope.data.litebox_theme;
                showextrafeat('lightbox',$scope.data.litebox_theme);
                break;
            case 'slider':
              if($scope.data.stopt){
                  $.each($scope.data.stopt,function(i,j){
                      $scope.data.stopt[i]='';});
                }
                tinyMCE.get('slider_msg').setContent('');
                var theme = $scope.data.slider_theme;
                showextrafeat('slider',$scope.data.slider_theme);
                break;
            case 'widget':
                $.each($scope.data.wtopt,function(i,j){
                    $scope.data.wtopt[i]='';})
                tinyMCE.get('widget_msg').setContent('');
                var theme = $scope.data.widget_theme;
                showextrafeat('widget',$scope.data.widget_theme);
                break;
            case 'addon':
                $.each($scope.data.atopt,function(i,j){
                    $scope.data.atopt[i]='';})
                tinyMCE.get('addon_msg').setContent('');
                var theme = $scope.data.addon_theme;
                showextrafeat('addon',$scope.data.addon_theme);
                break;
            default:break;
        }
        $('#'+preid+' .bak2toprev').removeClass('actrb').addClass('hiderb');
        $('.wpmca_prev.live'+preid).removeClass('showlive');
        setTimeout(function(){
            $('.wpmca_prev.live'+preid+' .wpmca_viewport').html('');
        },1000);
        $('#'+preid+' .wpmca_vupre').html('Live Editor');
        $http.get('./admin-ajax.php',{  params : {action: 'wpmchimpa_themeswitch_ajax',
            type : preid,theme:theme}}).
            success(function(data, status, headers, config) {
                if(data == 'null'){ajax_success();return;}
                switch(preid) {
                    case 'lightbox':
                        $scope.data.ltopt = data;
                        if(isset(data.lite_msg))tinyMCE.get('lite_msg').setContent(data.lite_msg);
                        $('#'+preid+' input[name="lite_bg_op"]').val(data.lite_bg_op);
                        break;
                    case 'slider':
                        $scope.data.stopt = data;
                        if(isset(data.slider_msg))tinyMCE.get('slider_msg').setContent(data.slider_msg);
                        $('#'+preid+' input[name="slider_trigger_top"]').val(data.slider_trigger_top);
                        break;
                    case 'widget':
                        $scope.data.wtopt = data;
                        if(isset(data.widget_msg))tinyMCE.get('widget_msg').setContent(data.widget_msg);
                        break;
                    case 'addon':
                        $scope.data.atopt = data;
                        if(isset(data.addon_msg))tinyMCE.get('addon_msg').setContent(data.addon_msg);
                        break;
                    default:break;
                }
                $('#'+preid+' input[type="range"]').change();
                ajax_success();
            });
    }
   
    $scope.gotos = function($e){
        var a=$($e.target);
        var scopt=a.closest('.wpmca_box').find('.wpmca_item:eq('+(parseInt(a.attr('data-optno')) + 1)+')');
        $('html, body').animate({
            scrollTop: scopt.offset().top - 100
        }, 500);
    }
    $scope.getIcon = function(icon,size,color){
      if(!isset(icon))return 'a';
      if(!isset(size))size="250";
      if(!isset(color))color="#000";
    var str='<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="'+size+'px" height="'+size+'px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">';
    switch (icon) {
      case 'm1':str+='<path fill="'+color+'" d="M448,64H64C28.656,64,0,92.656,0,128v256c0,35.344,28.656,64,64,64h384c35.344,0,64-28.656,64-64V128 C512,92.656,483.344,64,448,64z M342.656,234.781l135.469-116.094c0.938,3,1.875,6,1.875,9.313v256c0,2.219-0.844,4.188-1.281,6.281 L342.656,234.781z M448,96c2.125,0,4,0.813,6,1.219L256,266.938L58,97.219C60,96.813,61.875,96,64,96H448z M33.266,390.25 C32.828,388.156,32,386.219,32,384V128c0-3.313,0.953-6.313,1.891-9.313L169.313,234.75L33.266,390.25z M64,416 c-3.234,0-6.172-0.938-9.125-1.844l138.75-158.563l51.969,44.531C248.578,302.719,252.297,304,256,304s7.422-1.281,10.406-3.875 l51.969-44.531l138.75,158.563C454.188,415.063,451.25,416,448,416H64z"/>';
        break;
      case 'm2':str+='<path fill="'+color+'" d="M512,384c0,11.219-3.156,21.625-8.219,30.781L342.125,233.906L502.031,94c6.219,9.875,9.969,21.469,9.969,34V384z M256,266.75L478.5,72.063c-9.125-5-19.406-8.063-30.5-8.063H64c-11.109,0-21.391,3.063-30.484,8.063L256,266.75z M318.031,254.969 l-51.5,45.094C263.516,302.688,259.766,304,256,304s-7.516-1.313-10.531-3.938l-51.516-45.094L30.25,438.156 C40.063,444.313,51.563,448,64,448h384c12.438,0,23.938-3.688,33.75-9.844L318.031,254.969z M9.969,94C3.75,103.875,0,115.469,0,128 v256c0,11.219,3.141,21.625,8.219,30.781l161.641-180.906L9.969,94z"/>';
        break;
      case 'lock1':str+='<path fill="'+color+'" d="M417.566,209.83h-9.484v-44.388c0-82.099-65.151-150.681-146.582-152.145c-2.224-0.04-6.671-0.04-8.895,0  c-81.432,1.464-146.582,70.046-146.582,152.145v44.388h-9.485C81.922,209.83,70,224.912,70,243.539v222.632  C70,484.777,81.922,500,96.539,500h321.028c14.617,0,26.539-15.223,26.539-33.829V243.539  C444.105,224.912,432.184,209.83,417.566,209.83z M287.129,354.629v67.27c0,7.704-6.449,14.222-14.159,14.222h-31.834  c-7.71,0-14.159-6.518-14.159-14.222v-67.27c-7.477-7.361-11.83-17.537-11.83-28.795c0-21.334,16.491-39.666,37.459-40.512  c2.222-0.09,6.673-0.09,8.895,0c20.968,0.846,37.459,19.178,37.459,40.512C298.959,337.092,294.605,347.268,287.129,354.629z   M345.572,209.83H261.5h-8.895h-84.072v-44.388c0-48.905,39.744-89.342,88.519-89.342s88.52,40.437,88.52,89.342V209.83z"/>';
        break;
      default:return '';
    }
    str+='</svg>';
    return "url('data:image/svg+xml;base64,"+Base64.encode(str)+"')";
  }
}).filter('safe', ['$sce', function($sce){
        return function(text) {
            return $sce.trustAsHtml(text);
        };
}]).filter('livepf',function(){
return function(input){
  if(input != '' && typeof input != 'undefined'){
    var patt = new RegExp("/|ng");
    if(patt.test(input)){
      input=input.replace('|ng','');
      }
      else {
       setTimeout(function() {
          WebFont.load({
              google: {
                families: [input]
              }
          });
        }, 0);
      }
  }
  return input;
};
}).filter('chshade',function(){
return function(input){
  if(input == '1')
    return 'url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=)';
  else if(input == '2')
    return 'url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAMAAACeyVWkAAAAdVBMVEX////9/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f1HkPUuAAAAJ3RSTlMAAgQFBwkLDRIWGRsdIDc4P0FDT1FaZWdsdXZ5en6Cg4mMjpKUmaT+07zWAAAAUklEQVR42sXINQKAMAADwCDF3d3D/5/ICi0z3Hj4jGdCFe2ZmslZqlmw0+QzajaQWT1b4x5HrsOdOQrcpRzijbONp4rk4kAiJq4+FMEa4oXAXy4RfwSA5WQdGAAAAABJRU5ErkJggg==)';  
};
});


	});
}(jQuery));
function isset() {
  var a = arguments,
    l = a.length,
    i = 0,
    undef;
  if (l === 0) {
    throw new Error('Empty isset');
  }
  while (i !== l) {
    if (a[i] === undef || a[i] === null) {
      return false;
    }
    i++;
  }
  return true;
}

