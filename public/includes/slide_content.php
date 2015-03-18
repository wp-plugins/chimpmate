<style type="text/css">
html {
    height: 0;
    overflow-x: hidden;
}
body {
min-height: 100%;
height: auto !important;
overflow-x: hidden !important;
z-index: -1;
position: relative;
}body:before {display: none;}
#wpmchimpas {
visibility: hidden;
position: fixed;
-webkit-backface-visibility: hidden;
top: 0;
z-index: -1;
height: 100%;
width: 500px;
-webkit-box-shadow: inset 0 0 5px 5px #222;
-moz-box-shadow: inset 0 0 5px                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            5px #222;
box-shadow: inset 0 0 5px 5px #222;
overflow-x: hidden;
overflow-y: hidden;
-webkit-transition-property: -webkit-transform;
-moz-transition-property: -moz-transform;
-ms-transition-property: -ms-transform;
-o-transition-property: -o-transform;
transition-property: transform;
}
.wpmchimpas-bg{
position: absolute;
z-index: -1;
top: 0;
left: 0;
right: 0;
bottom: 0;
min-width: 100%;
min-height: 100%;
overflow: hidden;
}
.wpmchimpas-cont{
width:560px;
position: relative;
overflow-y:scroll;
overflow-x: hidden;
height: 100%;
}
.wpmchimpas-trig{
z-index: 888888;
position:fixed;
display: block;
cursor:pointer;
}
.wpmchimpas-trig.right,.wpmchimpas.right,.wpmchimpas.right .wpmchimpas-cont{
left: auto;
right: 0px;
}
.wpmchimpas-trig.left,.wpmchimpas.left,.wpmchimpas.left .wpmchimpas-cont {
left: 0px;
right: auto;
}
.wpmchimpas-overlay{
height: 100%;
width: 100%;
position: absolute;
display: block;
background: #000;
opacity:0;
z-index: 888888;
top: 0;
left: 0;
visibility:hidden;
}
.wpmchimpas-overlay.showo{
opacity:0.4;
visibility:visible;
}
body > *{
-webkit-transition-property: -webkit-transform, opacity, visibility;
-moz-transition-property: -moz-transform, opacity, visibility;
-ms-transition-property: -ms-transform, opacity, visibility;
-o-transition-property: -o-transform, opacity, visibility;
transition-property: transform, opacity, visibility;
-webkit-transition: 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
-moz-transition: 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
-ms-transition: 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
-o-transition: 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
transition: 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
}
.wpmchimpas-scroller {
position: relative;
width:500px;
}
.wpmchimpas-scroller.wpmchimpas-vertcent{
top: 50%;
-webkit-transform: translateY(-50%);
-moz-transform: translateY(-50%);
-ms-transform: translateY(-50%);
-o-transform: translateY(-50%);
transform: translateY(-50%);
}
.wpmchimpas-inner {
padding: 15px;
margin: 25px;
-webkit-transform:scale(0.8);
-moz-transform:scale(0.8);
-ms-transform:scale(0.8);
-o-transform:scale(0.8);
transform:scale(0.8);
-webkit-transition: -webkit-transform 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
-moz-transition: -moz-transform 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
-ms-transition: -ms-transform 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
-o-transition: -o-transform 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
transition: transform 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
}
.body-wpmchimpas-open #wpmchimpas{
visibility: visible;
}
.wpmchimpas-open .wpmchimpas-inner{
-webkit-transform:scale(1);
-moz-transform:scale(1);
-ms-transform:scale(1);
-o-transform:scale(1);
transform:scale(1);
}
.wpmchimpas-resp{
-webkit-transform-origin: left;
-moz-transform-origin: left;
-ms-transform-origin: left;
-o-transform-origin: left;
transform-origin: left;
}
.wpmchimpas.right .wpmchimpas-resp{
-webkit-transform-origin: right;
-moz-transform-origin: right;
-ms-transform-origin: right;
-o-transform-origin: right;
transform-origin: right;
}
@media only screen and (max-width:420px) {
.body-wpmchimpas-open {-webkit-overflow-scrolling:touch;overflow-y:hidden;}
.wpmchimpas-trigc{-webkit-transform-origin: left;
-moz-transform-origin: left;
-ms-transform-origin: left;
-o-transform-origin: left;
transform-origin: left;
-webkit-transform:scale(0.8);
-moz-transform:scale(0.8);
-ms-transform:scale(0.8);
-o-transform:scale(0.8);
transform:scale(0.8);}
.wpmchimpas-trig.right .wpmchimpas-trigc{-webkit-transform-origin: right;
-moz-transform-origin: right;
-ms-transform-origin: right;
-o-transform-origin: right;
transform-origin: right;
}
}
</style>
<?php 
$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
include_once( 'slide'.$wpmchimpa['slider_theme'].'.php' );
?>
