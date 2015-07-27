<style type="text/css">
.wpmca_viewport * {
  box-sizing: border-box;
}
.wpmchimpa-overlay-bg {
background: rgba(0,0,0,{{data.ltopt.lite_bg_op/100 ||'0.4'}});
height: 778px;
width: 1024px;
}

.wpmchimpa-overlay-bg #wpmchimpa-main {
width:650px;
background: {{data.ltopt.lite_bg_c || '#27313B'}};
display: inline-block;
position: relative;
left: 50%;
margin: 100px auto;
border-radius: 2px;
text-align: center;
padding:0 125px;
-webkit-transform: translatex(-50% );
-moz-transform: translatex(-50% );
-ms-transform: translatex(-50% );
-o-transform: translatex(-50% );
transform: translatex(-50% );
}
#wpmchimpa{
  position:relative;
}
#wpmchimpa .lite_heading{
margin-top:20px;
color: {{data.ltopt.lite_heading_fc||'#F4233C'}};
font-size: {{data.ltopt.lite_heading_fs||'24'}}px;
line-height: {{data.ltopt.lite_heading_fs||'24'}}px;
font-weight: {{data.ltopt.lite_heading_fw}};
font-family: {{data.ltopt.lite_heading_f | livepf}};
font-style: {{data.ltopt.lite_heading_fst}};
}
#wpmchimpa .lite_msg,#wpmchimpa .lite_msg *{
color: #959595;
font-size: {{data.ltopt.lite_msg_fs||'15'}}px;
font-family: {{data.ltopt.lite_msg_f | livepf}};
}
#wpmchimpa .lite_msg{
  margin-top: 15px;
}
#wpmchimpa .wpmchimpa_form{
margin-top: 20px;
}

#wpmchimpa .wpmchimpa_formbox > div,
#wpmchimpa .wpmchimpa_form > div{
position: relative;
}
#wpmchimpa .wpmchimpa_formbox > div:first-of-type{
  width: 65%;
  float: left;
}
#wpmchimpa .wpmchimpa_formbox > div:first-of-type + div{
  width: 35%;
  float: left;
}
#wpmchimpa .wpmchimpa_formbox .lite_tbox{
border-radius: 3px 0 0 3px;
}
#wpmchimpa .lite_tbox{
text-align: left;
margin-bottom: 10px;
width: 100%;
border-radius: 3px;
outline:0;
display: block;
 padding: 0 10px 0 40px;

color: {{data.ltopt.lite_tbox_fc||'#353535'}};
font-size: {{data.ltopt.lite_tbox_fs||'17'}}px;
font-weight: {{data.ltopt.lite_tbox_fw}};
font-family:Arial;
font-family: {{data.ltopt.lite_tbox_f | livepf}};
font-style: {{data.ltopt.lite_tbox_fst}};
background-color: {{data.ltopt.lite_tbox_bgc||'#fff'}};
width: {{data.ltopt.lite_tbox_w}}px;
height: {{data.ltopt.lite_tbox_h||'40'}}px;
line-height: {{data.ltopt.lite_tbox_h||'40'}}px;
border: {{data.ltopt.lite_tbox_bor||'1'}}px solid {{data.ltopt.lite_tbox_borc||'#efefef'}};
}
#wpmchimpa .lite_tbox .in-text{
top: 50%;
-webkit-transform: translatey(-50% );
-moz-transform: translatey(-50% );
-ms-transform: translatey(-50% );
-o-transform: translatey(-50% );
transform: translatey(-50% );
position: relative;
}
.lite_tbox.mailicon:before,
.lite_tbox.pericon:before{
content:'';
display: block;
width: 40px;
height: {{data.ltopt.lite_tbox_h||'40'}}px;
position: absolute;
top: 0;
left: 0;
}
.lite_tbox.mailicon:before{
background: {{getIcon('m6',15,data.ltopt.lite_tbox_fc||'#000',345.779)}} no-repeat center;
}
.lite_tbox.pericon:before{
background: {{getIcon('m5',15,data.ltopt.lite_tbox_fc||'#000',612)}} no-repeat center;
}
#wpmchimpa .wpmchimpa-groups{
display: block;
margin:5px auto;
}
#wpmchimpa .wpmchimpa-item{
display:inline-block;
margin: 2px 15px;
}
#wpmchimpa .lite_check {
cursor: pointer;
display: inline-block;
position: relative;
padding-left: 30px;
line-height: 14px;
min-width: 100px;
}
#wpmchimpa .lite_check .cbox{
display: inline-block;
width: 12px;
height: 12px;
left: 0;
bottom: 0;
text-align: center;
position: absolute;
transition: all 0.3s ease-in-out;
background-color:#fff;
box-shadow: 0 0 1px 1px {{data.ltopt.lite_check_borc||'#ccc'}};
}
#wpmchimpa .lite_check .ctext{
color: {{data.ltopt.lite_check_fc||'#fff'}};
font-size: {{data.ltopt.lite_check_fs}}px;
font-weight: {{data.ltopt.lite_check_fw}};
font-family: {{data.ltopt.lite_check_f | livepf}};
font-style: {{data.ltopt.lite_check_fst}};
}
#wpmchimpa .lite_check .cbox.checked{
background-color: {{data.ltopt.lite_check_c}};
}
#wpmchimpa .lite_check .cbox.checked:after,#wpmchimpa .lite_check:hover .cbox:after{
content:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);
content: {{data.ltopt.lite_check_shade | chshade}};
margin: -4px;
display: block;
}
#wpmchimpa .lite_check:hover .cbox:after{
opacity: 0.5;
}

#wpmchimpa .lite_button{
width: 100%;
text-align: center;
cursor: pointer;
border-radius: 0 3px 3px 0;
color: {{data.ltopt.lite_button_fc||'#fff'}};
font-size: {{data.ltopt.lite_button_fs || "17"}}px;
font-weight: {{data.ltopt.lite_button_fw}};
font-family: {{data.ltopt.lite_button_f | livepf}};
font-style: {{data.ltopt.lite_button_fst}};
background-color:{{data.ltopt.lite_button_bc||'#FF1F43'}};
width: {{data.ltopt.lite_button_w}}px;
height: {{data.ltopt.lite_button_h||'40'}}px;
line-height: {{data.ltopt.lite_button_h||'40'}}px;
border-radius: {{data.ltopt.lite_button_br}}px;
border: {{data.ltopt.lite_button_bor||'1'}}px solid {{data.ltopt.lite_button_borc||'#FA0B38'}};
}
#wpmchimpa .lite_button:hover{
color: {{data.ltopt.lite_button_fch}};
background-color: {{data.ltopt.lite_button_bch||'#FA0B38'}};
}
#wpmchimpa .in-mail+div{
position: absolute;
top: 0;
right: 0;
}
#wpmchimpa-main .wpmchimpa-close-button{
position: absolute;
display: block;
top: 0;
right: 0;
width: 25px;
text-align: center;
cursor: pointer;
}
#wpmchimpa-main .wpmchimpa-close-button::before{
content: "\00D7";
font-size: 25px;
line-height: 25px;
font-weight: 100;
color: {{data.ltopt.lite_close_col||'#999'}};
opacity: 0.4;
}
#wpmchimpa-main .wpmchimpa-close-button:hover:before{
opacity: 1;
}


#wpmchimpa .wpmchimpa-tag{
margin: 5px auto;
display: {{data.ltopt.lite_tag_en? 'block':'none'}};
}
#wpmchimpa .wpmchimpa-tag,
#wpmchimpa .wpmchimpa-tag *{
pointer-events: none;
color: {{data.ltopt.lite_tag_fc||'#fff'}};
font-size: {{data.ltopt.lite_tag_fs||'10'}}px;
font-weight: {{data.ltopt.lite_tag_fw}};
font-family:Arial;
font-family: {{data.ltopt.lite_tag_f | livepf}};
font-style: {{data.ltopt.lite_tag_fst}};
}
#wpmchimpa .wpmchimpa-tag:before{
content:{{getIcon('lock1',data.ltopt.lite_tag_fs||10,data.ltopt.lite_tag_fc||'#fff')}};
margin: 5px;
top: 1px;
position: relative;
}
.lite_spinner {
top: 0;
right: 0;
margin: 6px 5px;
-webkit-transform: scale(0.8);
-ms-transform: scale(0.8);
transform: scale(0.8);
}

#wpmchimpa-main .sp8 {margin: 0 auto;width: 50px;height: 30px;}#wpmchimpa-main .sp8 > div {background-color: {{data.ltopt.lite_spinner_c||'#000'}};margin-left: 3px;height: 100%;width: 6px;display: inline-block;-webkit-animation: wpmchimpa-mainsp8 1.2s infinite ease-in-out;animation: wpmchimpa-mainsp8 1.2s infinite ease-in-out;}#wpmchimpa-main .sp8 .sp82 {-webkit-animation-delay: -1.1s;animation-delay: -1.1s;}#wpmchimpa-main .sp8 .sp83 {-webkit-animation-delay: -1.0s;animation-delay: -1.0s;}#wpmchimpa-main .sp8 .sp84 {-webkit-animation-delay: -0.9s;animation-delay: -0.9s;}#wpmchimpa-main .sp8 .sp85 {-webkit-animation-delay: -0.8s;animation-delay: -0.8s;}@-webkit-keyframes wpmchimpa-mainsp8 {0%, 40%, 100% { -webkit-transform: scaleY(0.4) }  20% { -webkit-transform: scaleY(1.0) }}@keyframes wpmchimpa-mainsp8 {0%, 40%, 100% { transform: scaleY(0.4);-webkit-transform: scaleY(0.4);}  20% { transform: scaleY(1.0);-webkit-transform: scaleY(1.0);}}

</style>

<div class="wpmchimpa-overlay-bg wpmchimpa-wrapper" id="lightbox1">
	<div id="wpmchimpa-main">
        <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="8" data-lhint="Go to Additional Theme Options" style="margin:-25px;">7</div>
		<div id="wpmchimpa-newsletterform">
			<div class="wpmchimpa" id="wpmchimpa">
    			<div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="1" data-lhint="Go to Custom Message Settings">1</div>
            <div class="lite_heading">{{data.ltopt.lite_heading}}</div>
      			<div class="lite_msg"><p ng-bind-html="data.ltopt.lite_msg | safe"></p></div>
          </div>
        <div class="wpmchimpa_form">
          <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="2" data-lhint="Go to Text Box Settings" style="right: -20px;">2</div>
            <div class="lite_tbox pericon"><div class="in-text in-name">Name</div></div>
      			
          </div>
          <div class="wpmchimpa_formbox">
            <div class="lite_tbox mailicon"><div class="in-text in-mail">Email address</div>
              <div>
                    <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="5" data-lhint="Go to Spinner Settings" style="top: 25px;">5</div>
                    <div class="lite_spinner"><div class="sp8"><div class="sp81"></div><div class="sp82"></div><div class="sp83"></div><div class="sp84"></div><div class="sp85"></div></div></div>
               </div>
            </div>
            <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="4" data-lhint="Go to Button Settings" style="right: -20px;">4</div>
          		<div class="lite_button">{{data.ltopt.lite_button}}</div>
            </div>
            <div style="clear:both"></div>
          </div>
          <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="3" data-lhint="Go to Checkbox Settings">3</div>
         		<div class="wpmchimpa-groups">
              <div class="lite_check_c"></div>
              <div class="wpmchimpa-item">
                  <div class="lite_check">
                    <div class="cbox"></div>
                    <div class="ctext">group1</div>
                  </div>
              </div>
              <div class="wpmchimpa-item">
                  <div class="lite_check">
                    <div class="cbox checked"></div>
                    <div class="ctext">group2</div>
                  </div>
              </div>
            </div>
          </div>
			<div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="7" data-lhint="Go to Tag Settings">6</div>
	    		<div class="wpmchimpa-tag" ng-bind-html="data.ltopt.lite_tag||'Secure and Spam free...' | safe"></div></div>
           </div>
          </div>
			</div>
      <div class="wpmchimpa-close-button"></div>
	</div>        
</div>