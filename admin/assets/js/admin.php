<?php header('Content-Type: application/javascript'); ?>

<?php include 'multisel.php'; include 'rangesel.php';include 'colorpicker.php';include 'b64_encode.php';?>
(function ( $ ) {
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
				response += '<div class="group wpmcacb p2"><input type="checkbox" class="sel_groups" name="sel_groups[]" value="'+data.groups[i].groups[j].id+'"><label>'+data.groups[i].groups[j].gname+'</label></div>';
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

 $.each(wpmchimpa.countries, function(index, value){
			$('#incl').append('<option disabled value="'+value.code+'">'+value.name+'</option>');
		});
 $('#incl').multipleSelect({
    width: '300px',placeholder: "Exclude Countries", selectAll: false
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
<?php include 'angular-colorpicker.php';?>
var wpmcapp = angular.module("chimpmate", ['minicolors']);
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

