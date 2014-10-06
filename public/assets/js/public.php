<?php header('Content-Type: application/javascript');?>
(function ( $ ) {
	
	$(function () {

if (isset(wpmchimpa.goo)) {		
WebFont.load({
    google: {
      families: [wpmchimpa.goo]
    }
  });
}

if(isset(wpmchimpa.addon)){
	if(isset(wpmchimpa.addon_desktop)) var desk = true;
	if(isset(wpmchimpa.addon_tablet)) var tab = true;
	if(isset(wpmchimpa.addon_mobile)) var mob = true;
}

if((isset(mob) && $(window).width()<=480) || (isset(tab) && $(window).width()>480 && $(window).width()<=768) || (isset(desk) && $(window).width()>768))
$('.wpmchimpab').show();

if(isset(wpmchimpa.litebox)){
	var x=0;
	var docHeight = $(document).height();
    var timeoutID;
	function show_wpmca_litebox(cook){
		$('.wpmchimpa-overlay-bg').show();
		x=1;
		if(cook)$.get(wpmchimpa.ajax_url,{'action':'wpmchimpa_setcookie_ajax'});
		if(isset(wpmchimpa.lite_close_time)){
	  		setup();  		 
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
			    timeoutID = window.setTimeout(goInactive, wpmchimpa.lite_close_time*1000);
			}
			function resetTimer(e) {
			    window.clearTimeout(timeoutID);setup();		     
			}
			function goInactive() {
			     $('.wpmchimpa-overlay-bg').hide();
			}
		}
	}
	if(isset(wpmchimpa.lite_behave_cookie)){
		<?php if (!isset($_COOKIE['wpmchimpa_show'])){
				display_caller('1');
		}?>
	}
	else {
		<?php display_caller('0'); ?>
	}
	$('.wpmchimpa-close-button').click(function(){
        $('.wpmchimpa-overlay-bg').hide(); 
    });
	if(isset(wpmchimpa.lite_close_bck)){    
    	$('.wpmchimpa-overlay-bg').click(function(e){
	        if($(e.target).find('#wpmchimpa-newsletterform').length != 0)
	        	$('.wpmchimpa-overlay-bg').hide();
	    });
    }

} 

if(isset(wpmchimpa.litebox) || isset(wpmchimpa.addon) || isset(wpmchimpa.widget)){
	$('.wpmchimpa-subs-button').click(function (e){
		e.preventDefault();
		var form = $(this).parents('form:first');
		$(form).next(".wpmchimpa-feedback").html('');
		var sEmail = $(form).find('.wpmchimpa_email').val();
        if ($.trim(sEmail).length == 0 || !(validateEmail(sEmail))) {
            $(form).next(".wpmchimpa-feedback").html('Please enter valid email address');
        }
        else {
        	$(form).find('.wpmchimpa-signal').fadeIn();
           	var newSubsForm = $(form).serialize();
			$.ajax({
			type:"POST",
			url: wpmchimpa.ajax_url,
			data: newSubsForm,
			success:function(data){
				$(form).find('.wpmchimpa-signal').hide();
				if(wpmchimpa.suc_sub == 'suc_url' && isset(wpmchimpa.suc_url)){
					if(isset(wpmchimpa.suc_url_tab)){
						var win=window.open(wpmchimpa.suc_url,'_blank');
						win.focus();
					}
					else window.open(wpmchimpa.suc_url,'_self');
				}
				else{
					$(form).fadeOut(function () {
						$(form).next(".wpmchimpa-feedback").html(data);
					});
				}				
			}
			});
		}
		return false;
	});
}

	});

}(jQuery));
function isset() {
  //  discuss at: http://phpjs.org/functions/isset/
  // original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // improved by: FremyCompany
  // improved by: Onno Marsman
  // improved by: Rafał Kukawski
  //   example 1: isset( undefined, true);
  //   returns 1: false
  //   example 2: isset( 'Kevin van Zonneveld' );
  //   returns 2: true

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
function validateEmail(email){
	var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	var valid = emailReg.test(email);

	if(!valid) {
        return false;
    } else {
    	return true;
    }
}


<?php

function display_caller($cook){ ?>
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
     if(x==0)show_wpmca_litebox(<?php echo $cook; ?>);
}
if(isset(wpmchimpa.lite_desktop)) var desk = true;
if(isset(wpmchimpa.lite_tablet)) var tab = true;
if(isset(wpmchimpa.lite_mobile)) var mob = true;
if((isset(mob) && $(window).width()<=480) || (isset(tab) && $(window).width()>480 && $(window).width()<=768) || (isset(desk) && $(window).width()>768)){
	if(isset(wpmchimpa.lite_behave_time)){
		if(isset(wpmchimpa.lite_behave_time_inac)) {
	 		 setup();
		}
		else
			<?php echo 'if(x==0)setTimeout(function(){show_wpmca_litebox('.$cook.')}, wpmchimpa.lite_behave_time*1000);';?>
	}
	if(isset(wpmchimpa.lite_behave_scroll)){
		<?php echo '$(document).scroll(function() {if(x==0)if(($(window).scrollTop() / ($(document).height()-$(window).height())) * 100 > 50)show_wpmca_litebox('.$cook.');});';?>
	}
}
<?php } ?>