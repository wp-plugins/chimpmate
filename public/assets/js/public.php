<?php header('Content-Type: application/javascript');?>
;(function( $ ){
  var csldMoving = false,
    csldOpened = false;
var privateMethods = {
    execute: function(action, callback) {
        var $menu = $("#wpmchimpas"),
		    $trig = $("#wpmchimpas-trig"),
		    $body = $("body"),
		    $html = $("html"),
		    menucWidth = $menu.data("menucWidth"),
		    speed = $menu.data("speed"),
		    side = $menu.data("side"),
		    bodyClass = "body-wpmchimpas-open",
		    bodyAnimation,
		    bodyInit,
		    scrollTop,
		    diff;
		if ('open' === action || ('toggle' === action && !$body.hasClass('body-wpmchimpas-open'))) {
		    
			$body.bind('mousewheel DOMMouseScroll', freezeCon);
			$('.wpmchimpas-cont').bind('mousewheel DOMMouseScroll', scrollCon);
		    $('.wpmchimpas-overlay').addClass('showo');
		    centresp();
		    $(window).resize(function() {
		        $(".wpmchimpas").hasClass("wpmchimpas-open") && centresp()
		    });
		    $body.addClass(bodyClass);
			$('.wpmchimpas').addClass('wpmchimpas-open');
		} else {
			$body.unbind('mousewheel DOMMouseScroll', freezeCon);
			$('.wpmchimpas-cont').unbind('mousewheel DOMMouseScroll', scrollCon);
			$('.wpmchimpas-overlay').removeClass('showo');
		    $('body > *').not('.wpmchimpas').css({
		        '-webkit-transform': 'none',
		        transform: 'none'
		    });
		    setTimeout(function() {
		        $body.removeClass(bodyClass).removeAttr('style');
		    }, speed);
		    $('.wpmchimpas').removeClass('wpmchimpas-open');
		}
    }
};
function centresp() {
	var $menu = $("#wpmchimpas"),
	    $trig = $("#wpmchimpas-trig"),
	    $body = $("body"),
	    $html = $("html"),
	    menucWidth = $menu.data("menucWidth"),
	    speed = $menu.data("speed"),
	    side = $menu.data("side"),
	    bodytrans,
	    scrollTop,
	    diff,
	    bodyClass = "body-wpmchimpas-open";
	
    $('.wpmchimpas-bg,.wpmchimpas-overlay').css({'height': $('body').height()});
	if ($('.wpmchimpas').height() < $('.wpmchimpas-scroller').height())
	    $('.wpmchimpas-scroller').removeClass('wpmchimpas-vertcent');
	else
	    $('.wpmchimpas-scroller').addClass('wpmchimpas-vertcent');

	if ($(window).width() < 580) {
	    diff = (580 - $(window).width());
	    var perc = (menucWidth - diff) / 500;
	    $('.wpmchimpas-resp').css({
	        '-webkit-transform': 'scale(' + perc + ',' + perc + ')',
	        transform: 'scale(' + perc + ',' + perc + ')'
	    });
	} else {
	    $('.wpmchimpas-resp').removeAttr('style');
	    diff = 0;
	}
	menuWidth = menucWidth - diff;
	if (side === 'left') {
	    bodytrans = {
	        '-webkit-transform': 'translate(' + menuWidth + 'px,0)',
	        transform: 'translate(' + menuWidth + 'px,0)'
	    };
	} else {
	    bodytrans = {
	        '-webkit-transform': 'translate(' + menuWidth + 'px,0)',
	        transform: 'translate(' + menuWidth + 'px,0)'
	    };
	}
    $('body > *').not('.wpmchimpas').css(bodytrans);
}
function scrollCon(e) {
	var scrollTo = null;
	if (e.type == 'mousewheel') {
		scrollTo = (e.originalEvent.wheelDelta * -1);
	}
	else if (e.type == 'DOMMouseScroll') {
		scrollTo = 40 * e.originalEvent.detail;
	}
	if (scrollTo) {
		e.preventDefault();
		$(this).scrollTop(scrollTo + $(this).scrollTop());
	}
}

function freezeCon(e) {
	if (e.type == 'mousewheel' || e.type == 'DOMMouseScroll') {
		e.preventDefault()
	}
}
var methods = {
    open: function(name, callback) {
        privateMethods.execute('open', name, callback);
    },
    close: function(name, callback) {
        privateMethods.execute('close', name, callback);
    },
    toggle: function(name, callback) {
        privateMethods.execute('toggle', name, callback);
    }
};

$.csld = function(method) {
    if (methods[method]) {
        return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
    } else if (typeof method === 'function' || typeof method === 'string' || !method) {
        return methods.toggle.apply(this, arguments);
    } else {
        $.error('Method ' + method + ' does not exist on jQuery.sidr');
    }
};
$.fn.csld = function(options) {
   var settings=$.extend({speed:400,side:"left",source:null,menucWidth:$(".wpmchimpas-scroller").width()},options);
    var name = 'wpmchimpas',
        $sideMenu = $('#wpmchimpas'),
        $trigMenu = $('#wpmchimpas-trig');
    $sideMenu
        .addClass('wpmchimpas')
        .addClass(settings.side)
        .data({
            speed: settings.speed,
            side: settings.side,
            menucWidth: settings.menucWidth
        });
    $trigMenu
        .addClass('wpmchimpas-trig')
        .addClass(settings.side);
    $('.wpmchimpas-bg').css({
    'background-color' : $('body').css('background-color')||'#fff',
    'background-image' : $('body').css('background-image')
    });
    if (typeof settings.source === 'function') {
        var newContent = settings.source(name);
        privateMethods.loadContent($sideMenu, newContent);
    }
    return this.each(function() {
        var $this = $(this),
            data = $this.data('wpmchimpas');
        if (!data) {
            $this.data('wpmchimpas', name);
            if ('ontouchstart' in document.documentElement) {
                $this.bind('touchstart', function(e) {
                    var theEvent = e.originalEvent.touches[0];
                    this.touched = e.timeStamp;
                });
                $this.bind('touchend', function(e) {
                    var delta = Math.abs(e.timeStamp - this.touched);
                    if (delta < 200) {
                        e.preventDefault();
                        methods.toggle(name);
                    }
                });
            } else {
                $this.click(function(e) {
                    e.preventDefault();
                    methods.toggle(name);
                });
            }
        }
    });
};
	
	$(function () {

if (wpmcisset(wpmchimpa.goo)) {		
WebFont.load({
    google: {
      families: JSON.parse(wpmchimpa.goo)
    }
  });
}

if(wpmcisset(wpmchimpa.addon)){
	if(wpmcisset(wpmchimpa.addon_desktop)) var desk = true;
	if(wpmcisset(wpmchimpa.addon_tablet)) var tab = true;
	if(wpmcisset(wpmchimpa.addon_mobile)) var mob = true;

	$('.wpmchimpat-close-button').click(function(){$('.wpmchimpat').addClass('wpmchimpat-close')});

	var flipclosed=0;
	$('.wpmchimpaf-close-button').click(function(){
	if($('.wpmchimpaf').hasClass('wpmchimpaf-close'))
		$('.wpmchimpaf').removeClass('wpmchimpaf-close');
	else
		$('.wpmchimpaf').addClass('wpmchimpaf-close');
		flipclosed=1;
	});

	$(document).scroll(function() {
		if(flipclosed)return;
		if($(window).scrollTop() >= $(document).height()/2)
			$('.wpmchimpaf').removeClass('wpmchimpaf-close');
		else
			$('.wpmchimpaf').addClass('wpmchimpaf-close');
    });


}

var x=0;

if((wpmcisset(mob) && $(window).width()<=480) || (wpmcisset(tab) && $(window).width()>480 && $(window).width()<=768) || (wpmcisset(desk) && $(window).width()>768))
$('.wpmchimpab').show();

if(wpmcisset(wpmchimpa.litebox)){
	var docHeight = $(document).height();
    var timeoutID;
	function show_wpmca_litebox(){
		if(x!=0)return;
		if(wpmcisset(wpmchimpa.lite_behave_cookie)){
			if(document.cookie.indexOf("wpmchimpa_show") >= 0)return;
			var date, expires;
	        date = new Date();
	        date.setTime(date.getTime()+(86400000));
	        expires = "; expires="+date.toGMTString();
		    document.cookie = "wpmchimpa_show=true"+expires+"; path=/";
		}
		$('.wpmchimpa-overlay-bg').show();
		x=1;
		if(wpmcisset(wpmchimpa.lite_close_time)){
	  		wpmc_setup();  
		}
	}
	if(wpmcisset(wpmchimpa.lite_desktop)) var desk = true;
	if(wpmcisset(wpmchimpa.lite_tablet)) var tab = true;
	if(wpmcisset(wpmchimpa.lite_mobile)) var mob = true;
	if((wpmcisset(mob) && $(window).width()<=480) || (wpmcisset(tab) && $(window).width()>480 && $(window).width()<=768) || (wpmcisset(desk) && $(window).width()>768)){
		if(wpmcisset(wpmchimpa.lite_behave_time)){
			if(wpmcisset(wpmchimpa.lite_behave_time_inac)) {
		 		 setup();
			}
			else
				setTimeout(function(){show_wpmca_litebox()}, wpmchimpa.lite_behave_time*1000);
		}
		if(wpmcisset(wpmchimpa.lite_behave_scroll)){
			$(document).scroll(function() {if(x==0)if(($(window).scrollTop() / ($(document).height()-$(window).height())) * 100 > 50)show_wpmca_litebox();});
		}
	}
	$('.wpmchimpa-close-button').click(function(){
        $('.wpmchimpa-overlay-bg').hide(); 
    });
	if(wpmcisset(wpmchimpa.lite_close_bck)){    
    	$('.wpmchimpa-overlay-bg').click(function(e){
	        if($(e.target).find('#wpmchimpa-newsletterform').length != 0)
	        	$('.wpmchimpa-overlay-bg').hide();
	    });
    }

} 

if(wpmcisset(wpmchimpa.litebox) || wpmcisset(wpmchimpa.addon) || wpmcisset(wpmchimpa.widget) || wpmcisset(wpmchimpa.slider)){
	$('.wpmchimpa-subs-button').click(function (e){
		e.preventDefault();
		var button = this;
		var chimp = $(button).parents('.wpmchimpselector:first');
		var form = $(chimp).find('form');
		var preload = $(button).attr('wpmcpre');
		if (typeof preload !== typeof undefined && preload !== false)
			if(!window[preload](chimp))return false;
		var SubsForm = $(form).serialize();
		chimpSubmit(chimp,SubsForm);

		


		/*$(form).next(".wpmchimpa-feedback").html('');
		var sEmail = $(form).find('.wpmchimpa_email').val();
        if ($.trim(sEmail).length == 0 || !(wpmcvalidateEmail(sEmail))) {
        	if(wpmcisset(wpmchimpa.errorfe)) var errmsg = wpmchimpa.errorfe;
        	else var errmsg = 'Please enter valid email address';
            $(form).next(".wpmchimpa-feedback").html(errmsg);
        }
        else {
        	$(form).find('.wpmchimpa-signal').fadeIn();
           	var SubsForm = $(form).serialize();
			chimpSubmit(form,SubsForm);
		}*/
		return false;
	});
	$('.wpmchimpa-soc').click(function (e){
		e.preventDefault();
		var cont = $(this).closest('.wpmchimpselector');
		var form = $(cont).find('form');
		$(cont).find('.wpmchimpa-signal').fadeIn();
		if($(this).hasClass('wpmchimpa-fb')){

			FB.login(function(response) {if (response.status === 'connected') {FB.api('/me', function(response) {
			  SubsForm={name:response.first_name+' '+response.last_name,
			  		email:response.email,
			  		action:'wpmchimpa_add_email_ajax'};
			  		$(form).find('.wpmchimpa_name').val(response.first_name+' '+response.last_name);
			  		$(form).find('.wpmchimpa_email').val(response.email);
			  		chimpSubmit(form,SubsForm);
			});}else{
				if(wpmcisset(wpmchimpa.errorue)) var errmsg = wpmchimpa.errorue;
	        	else var errmsg = 'Unknown Error';
	            $(form).next(".wpmchimpa-feedback").html(errmsg);
	            $(cont).find('.wpmchimpa-signal').hide();
			}}, {scope: 'public_profile,email'});

		}
		else if($(this).hasClass('wpmchimpa-gp')){

			gapi.auth.signIn({'callback': signinCallback });
			  function signinCallback(authResult) {if (authResult['status']['signed_in']) {if (authResult['status']['method'] == 'PROMPT') {gapi.client.load('oauth2', 'v2', function () {gapi.client.oauth2.userinfo.get().execute(function (resp) {
			   SubsForm={name:resp.name,
			  		email:resp.email,
			  		action:'wpmchimpa_add_email_ajax'};
			  		$(form).find('.wpmchimpa_name').val(resp.name);
			  		$(form).find('.wpmchimpa_email').val(resp.email);
			  		chimpSubmit(form,SubsForm);
			});});}} else {
				if(wpmcisset(wpmchimpa.errorue)) var errmsg = wpmchimpa.errorue;
	        	else var errmsg = 'Unknown Error';
	            $(form).next(".wpmchimpa-feedback").html(errmsg);
	            $(cont).find('.wpmchimpa-signal').hide();
			}}
		}
		else if($(this).hasClass('wpmchimpa-ms')){

			WL.login({scope: ["wl.basic", "wl.emails"]}).then(function (response) {
	            WL.api({path: "me",method: "GET"}).then(function (response) {
	               SubsForm={name:response.name,
			  		email:response.emails.account,
			  		action:'wpmchimpa_add_email_ajax'};
			  		$(form).find('.wpmchimpa_name').val(response.name);
			  		$(form).find('.wpmchimpa_email').val(response.emails.account);
			  		chimpSubmit(form,SubsForm);
	            },function (responseFailed) {
					if(wpmcisset(wpmchimpa.errorue)) var errmsg = wpmchimpa.errorue;
		        	else var errmsg = 'Unknown Error';
		            $(form).next(".wpmchimpa-feedback").html(errmsg);
		            $(cont).find('.wpmchimpa-signal').hide();
	            });},function (responseFailed){
					if(wpmcisset(wpmchimpa.errorue)) var errmsg = wpmchimpa.errorue;
		        	else var errmsg = 'Unknown Error';
		            $(form).next(".wpmchimpa-feedback").html(errmsg);
		            $(cont).find('.wpmchimpa-signal').hide();
		    });

		}

	});
	var wpmc_subing = 0;
	function chimpSubmit(cont,info){
		if(wpmc_subing)return false;
		wpmc_subing = 1;
		$.ajax({
			type:"POST",
			url: wpmchimpa.ajax_url,
			data: info,
			success:function(data){
				wpmc_subing = 0;
				var button = $(cont).find('.wpmchimpa-subs-button');
				var postload = $(button).attr('wpmcpost');
				if (typeof postload !== typeof undefined && postload !== false)
					if(!window[postload](cont,data)) return false;
			}
		});
	}
	/*function chimpSubmit(cont,info){
	$(cont).next(".wpmchimpa-feedback").html('');
	 $(cont).find('.wpmchimpa-signal').fadeIn();

		$.ajax({
			type:"POST",
			url: wpmchimpa.ajax_url,
			data: info,
			success:function(data){
				$(cont).find('.wpmchimpa-signal').hide();
				if(data == '1'){
					if(wpmchimpa.suc_sub == 'suc_url' && wpmcisset(wpmchimpa.suc_url)){
						 $('.wpmchimpa-overlay-bg').hide(); 
						if(wpmcisset(wpmchimpa.suc_url_tab)){
							var win=window.open(wpmchimpa.suc_url,'_blank');
							win.focus();
						}
						else window.open(wpmchimpa.suc_url,'_self');
					}
					else if(wpmchimpa.suc_sub == 'suc_msg' && wpmcisset(wpmchimpa.suc_msg)){
						$(cont).fadeOut(function () {
							$(cont).next(".wpmchimpa-feedback").addClass('wpmchimpa-done').html(wpmchimpa.suc_msg);
						});
					}
					else{
						$(cont).fadeOut(function () {
							$(cont).next(".wpmchimpa-feedback").addClass('wpmchimpa-done').html('error');
						});
					}
				}
				else{
					$(cont).fadeOut(function () {
						$(cont).next(".wpmchimpa-feedback").addClass('wpmchimpa-done').html(data);
					});
				}		
			}
			});
	}*/
}


if (wpmcisset(wpmchimpa.slider)) {
    if (wpmcisset(wpmchimpa.slider_desktop)) var desk = true;
    if (wpmcisset(wpmchimpa.slider_tablet)) var tab = true;
    if (wpmcisset(wpmchimpa.slider_mobile)) var mob = true;
    if ((wpmcisset(mob) && $(window).width() <= 480) || (wpmcisset(tab) && $(window).width() > 480 && $(window).width() <= 768) || (wpmcisset(desk) && $(window).width() > 768)) {
        var opts = [];
        var timeoutIDs,s=0;
        if (wpmcisset(wpmchimpa.slider_orient)) opts['side'] = wpmchimpa.slider_orient;
        $('#wpmchimpas-trig').csld(opts);
        if (wpmcisset(wpmchimpa.slider_trigger_scroll)){
	        $(document).scroll(function() {
				if($(window).scrollTop() >= $(document).height()/2)
					$('#wpmchimpas-trig').removeClass('scrollhide');
				else
					$('#wpmchimpas-trig').addClass('scrollhide');
	        });
	    }
        if (wpmcisset(wpmchimpa.slider_close_bck)) {
            $('.wpmchimpas-overlay').click(function() {
                $.csld('close', 'wpmchimpas');
            });
        }
        if (wpmcisset(wpmchimpa.slider_behave_time)) {
            if (wpmcisset(wpmchimpa.slider_behave_time_inac)) {
                setups();
            } else
                setTimeout(function() {
                    $.csld('open', 'wpmchimpas');
                }, wpmchimpa.slider_behave_time * 1000);
        }
    }
}

wpmcvalid = function(t,r,v){
	if(r == 'true' && !v)
		return errmsg[0];
	switch(t){
		case 'email' : if(!wpmcvalidateEmail(v))
						return errmsg[1];
	}
	return '';
};
wpmcsucurl = function(){
	if(wpmchimpa.suc_sub == 'suc_url' && wpmcisset(wpmchimpa.suc_url)){
		if(wpmcisset(wpmchimpa.suc_url_tab)){
			var win=window.open(wpmchimpa.suc_url,'_blank');
			win.focus();
		}
		else window.open(wpmchimpa.suc_url,'_self');
		return true;
	}
};
		 
function wpmc_setup() {
    document.addEventListener("mousemove", wpmcresetTimer, false);
    document.addEventListener("mousedown", wpmcresetTimer, false);
    document.addEventListener("keypress", wpmcresetTimer, false);
    document.addEventListener("DOMMouseScroll", wpmcresetTimer, false);
    document.addEventListener("mousewheel", wpmcresetTimer, false);
    document.addEventListener("touchmove", wpmcresetTimer, false);
    document.addEventListener("MSPointerMove", wpmcresetTimer, false);
    wpmcstartTimer();
}
function wpmcstartTimer() {
    wpmctimeoutID = window.setTimeout(wpmcgoInactive, wpmchimpa.lite_close_time*1000);
}
function wpmcresetTimer(e) {
    window.clearTimeout(wpmctimeoutID);wpmc_setup();		     
}
function wpmcgoInactive() {
     $('.wpmchimpa-overlay-bg').hide();
}
function setups() {
    document.addEventListener("mousemove", resetTimers, false);
    document.addEventListener("mousedown", resetTimers, false);
    document.addEventListener("keypress", resetTimers, false);
    document.addEventListener("DOMMouseScroll", resetTimers, false);
    document.addEventListener("mousewheel", resetTimers, false);
    document.addEventListener("touchmove", resetTimers, false);
    document.addEventListener("MSPointerMove", resetTimers, false);
    startTimers();
}
function startTimers() {
    timeoutIDs = window.setTimeout(goInactives, wpmchimpa.slider_behave_time * 1000);
}
function resetTimers(e) {
    window.clearTimeout(timeoutIDs);
    setups();
}
function goInactives() {
    if(s==0){$.csld('open', 'wpmchimpas');s=1;}
}
function setup() {
    document.addEventListener("mousemove", resetTimer, false);
    document.addEventListener("mousedown", resetTimer, false);
    document.addEventListener("keypress", resetTimer, false);
    document.addEventListener("DOMMouseScroll", resetTimer, false);
    document.addEventListener("mousewheel", resetTimer, false);
    document.addEventListener("touchmove", resetTimer, false);
    document.addEventListener("MSPointerMove", resetTimer, false);
    startTimer();
}
function startTimer() {
    timeoutID = window.setTimeout(goInactive, wpmchimpa.lite_behave_time*1000);
}
function resetTimer(e) {
    window.clearTimeout(timeoutID);setup();		     
}
function goInactive() {
     if(x==0)show_wpmca_litebox();
}
function wpmcvalidateEmail(w){var a=new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i),e=a.test(w);return e?!0:!1}

	});

}(jQuery));
function wpmcisset(){var r,t=arguments,n=t.length,e=0;if(0===n)throw new Error("Empty wpmcisset");for(;e!==n;){if(t[e]===r||null===t[e])return!1;e++}return!0}
var errmsg = [
	wpmchimpa.errorrf || '* Field Required',
	wpmchimpa.errorfe || '* Invalid Entry',
	wpmchimpa.erroras || 'Already subscribed to Newsletters',
	wpmchimpa.errorue || 'An unknown error occurred processing your request.  Please try again later.',
];