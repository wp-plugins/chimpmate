<?php header('Content-Type: text/css');
?>

.ms-parent {
    display: inline-block;
    position: relative;
    vertical-align: middle;
}

.ms-choice {
    display: block;
    width: 300px;
    height: 28px;
  font-size: 14px;
    padding: 0;
    overflow: hidden;
    cursor: pointer;
    text-align: left;
    white-space: nowrap;
    line-height: 26px;
    color: #444;
    text-decoration: none;
     border:0;
  border-bottom: 1px solid #757575;
  outline:none;
  box-shadow:none;
  -moz-box-shadow:none;
  -webkit-box-shadow:none;
    background-color: #fff;
}

.ms-choice.disabled {
    background-color: #f4f4f4;
    background-image: none;
    border: 1px solid #ddd;
    cursor: default;
}

.ms-choice > span {
    position: absolute;
    top: 0;
    left: 0;
    right: 20px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: block;
    padding-left: 8px;
}

.ms-choice > span.placeholder {
    color: #999;
}

.ms-choice > div {
    position: absolute;
    top: 0;
    right: 0;
    width: 20px;
    height: 25px;
    background: url('multi-select.png') left -2px no-repeat;
}

.ms-choice > div.open {
    background: url('multi-select.png') left -22px no-repeat;
}

.ms-drop {
    width: 300px;
    overflow: hidden;
    display: none;
    margin-top: -1px;
    padding: 0;
    position: absolute;
    z-index: 1000;
    background: #fff;
    color: #000;
    border: 1px solid #aaa;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    border-radius: 4px;
}

.ms-drop.bottom {
    top: 100%;
    -webkit-box-shadow: 0 4px 5px rgba(0, 0, 0, .15);
    -moz-box-shadow: 0 4px 5px rgba(0, 0, 0, .15);
    -ms-box-shadow: 0 4px 5px rgba(0, 0, 0, .15);
    -o-box-shadow: 0 4px 5px rgba(0, 0, 0, .15);
    box-shadow: 0 4px 5px rgba(0, 0, 0, .15);
}

.ms-drop.top {
    bottom: 100%;
    -webkit-box-shadow: 0 -4px 5px rgba(0, 0, 0, .15);
    -moz-box-shadow: 0 -4px 5px rgba(0, 0, 0, .15);
    -ms-box-shadow: 0 -4px 5px rgba(0, 0, 0, .15);
    -o-box-shadow: 0 -4px 5px rgba(0, 0, 0, .15);
    box-shadow: 0 -4px 5px rgba(0, 0, 0, .15);
}

.ms-search {
    display: inline-block;
    margin: 0;
    min-height: 26px;
    padding: 4px;
    position: relative;
    white-space: nowrap;
    width: 100%;
    z-index: 10000;
}

.ms-search input {
    width: 100%;
    height: auto !important;
    min-height: 24px;
    padding: 0 20px 0 5px;
    margin: 0;
    outline: 0;
    font-family: sans-serif;
    font-size: 1em;
    border: 1px solid #aaa;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    -o-border-radius: 0;
    border-radius: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -ms-box-shadow: none;
    -o-box-shadow: none;
    box-shadow: none;
    background: #fff url('multi-select.png') no-repeat 100% bottom;
    background: url('multi-select.png') no-repeat 100% bottom, -webkit-gradient(linear, left bottom, left top, color-stop(0.85, white), color-stop(0.99, #eeeeee));
    background: url('multi-select.png') no-repeat 100% bottom, -webkit-linear-gradient(center bottom, white 85%, #eeeeee 99%);
    background: url('multi-select.png') no-repeat 100% bottom, -moz-linear-gradient(center bottom, white 85%, #eeeeee 99%);
    background: url('multi-select.png') no-repeat 100% bottom, -o-linear-gradient(bottom, white 85%, #eeeeee 99%);
    background: url('multi-select.png') no-repeat 100% bottom, -ms-linear-gradient(top, #ffffff 85%, #eeeeee 99%);
    background: url('multi-select.png') no-repeat 100% bottom, linear-gradient(top, #ffffff 85%, #eeeeee 99%);
}

.ms-search, .ms-search input {
    -webkit-box-sizing: border-box;
    -khtml-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
}

.ms-drop ul {
    overflow: auto;
    margin: 0;
    padding: 5px 8px;
}

.ms-drop ul > li {
    list-style: none;
    display: list-item;
    background-image: none;
    position: static;
}

.ms-drop ul > li .disabled {
    opacity: .35;
    filter: Alpha(Opacity=35);
}

.ms-drop ul > li.multiple {
    display: block;
    float: left;
}

.ms-drop ul > li.group {
    clear: both;
}

.ms-drop ul > li.multiple label {
    width: 100%;
    display: block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.ms-drop ul > li label {
    font-weight: normal;
    display: block;
    position: relative;
    white-space: nowrap;
}

.ms-drop ul > li label.optgroup {
    font-weight: bold;
}

.ms-drop input[type="checkbox"] {
    vertical-align: middle;
}

.ms-drop .ms-no-results {
    display: none;
}


button.wpmca_button.button_header{
  width: 80px;
  height: 30px;
}

button.wpmca_button {
	border: none;
	color: #fff;
  width: 150px;
  height: 40px;
  overflow: hidden;
  padding: 0;
  text-transform: uppercase;
  position: relative;
  outline: none;
  cursor: pointer;
  overflow: hidden;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}

.wpmca_home {
	margin-left: -20px;
	width: 100%;
}
.wpmca_home .wpmca_header {
	width: 100%;
	margin: -10px 10px 5px 10px;
  -webkit-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
  -moz-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
  -ms-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
  -o-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
	box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
	display: inline-block;
	background-color: #FDFDFD;
}
.h_left{float:left}
.h_right{float:right}
.wpmca_home .wpmca_header .h_container {
	float: left;
	margin: 8px 10px;
  position:relative;
}
.wpmca_home .wpmca_header .h_container.l::after {
	content : '';
  width: 185px;
display: block;
padding: 7px 0px;
background-image: url('./../../includes/ChimpMate.png');
background-repeat: no-repeat;
height: 70px;
margin-left: 85px;
}
.wpmca_home .wpmca_header .wpmca_logo {
	display: inline-block;
	border-radius: 50%;
  background-image: url('./../../includes/freddie.png');
	background-color: #4584F0;
	padding: 10px;
    float: left;
    clear:left;width: 50px;
    height:50px;
}

.blue {
	background-color: #4584F0;;
}
.green {
      background-color: #259b24;
}
.red {
      background-color: #CD3E2D;
}
.grey{
  background-color: #e0e0e0
}
.button_cont{
  margin-top:31px;
}
.wpmc_social{
  height: 80px;
  margin: 10px 30px;
  position: relative;
display: inline-block;
}
.wpmc_soc_cont{
  float: left;
margin: 5px 0;
font-family: dashicons;
display: block;
width: 90px;
margin-top: 20px;
}
.wpmc_soc_cont .wpmc_socioicon::before{
padding: 10px;
font-size: 30px;
color: #fff;
border-radius:50%;
}
.wpmc_soc_cont a{
  text-decoration: none;
}
.wp_likebox{
  margin-top:12px;
  position:relative;
  z-index:100;
}
.fb.wpmc_soc_cont .wpmc_socioicon::before{
  content:'\f305';
  background:#3b5998;
}
.gp.wpmc_soc_cont .wpmc_socioicon::before{
  content:'\f462';
  background:#D95232;
}
.tt.wpmc_soc_cont .wpmc_socioicon::before{
  content:'\f301';
  background:#00ABF0;
}

.wpmca_home .wpmca_header .header_voltriod{
	float: right;
	height: 100px;
	width: 270px;
	position: relative;

	display: block;
	box-shadow: -3px -1px 15px 0 rgba(6, 0, 13, 0.26);
  }
.wpmca_home .wpmca_header .header_voltriod .voltroid{
	background-color: #3f51b5;
	display: block;
	position: relative;
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -ms-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -o-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
	box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
	height: 50%;
 }
 .wpmca_home .wpmca_header .header_voltriod .voltroid::after{
	content: "VOLTROID";
	color: #fff;
	font-size: 35px;
	margin: 15px 0 0 5px;
	display: inline-block;
	position: relative;
}  	
.wpmca_home .wpmca_header .header_voltriod .apanel {
	height: 50%;
	display: block;
	position: relative;
	background-color: #eeeeee;
 }
  .wpmca_home .wpmca_header .header_voltriod .apanel::after {
	content: "Admin Panel";
	font-size: 24px;
	margin: 15px 0 0 20px;
	display: inline-block;
}
.wpmca_home .wpmca_header .header_voltriod .vlogo {
	border-radius: 50%;
	background-color: #fff;
    padding: 40px;
    display: inline-block;
    position: absolute;
    top: 10px;
    right: 10px;
    -webkit-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
    -moz-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
    -ms-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
    -o-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
    box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
}
.wpmca_home .wpmca_header .header_voltriod .vlogo::after{
content: "";
    display: block;
    position: absolute;
    background-color: #F00;
    width: 4%;
    left: 64%;
    top: 9%;
    height: 95%;
    -moz-transform: rotate(20deg);
    -o-transform: rotate(20deg);
    -ms-transform: rotate(20deg);
    -webkit-transform: rotate(20deg); 
    transform: rotate(20deg);
}
.wpmca_home .wpmca_header .header_voltriod .vlogo::before{
content: "";
    display: block;
    position: absolute;
    background-color: #F00;
    width: 4%;
    left: 32%;
    top: 9%;
    height: 95%;
    -moz-transform: rotate(-20deg);
    -o-transform: rotate(-20deg);
    -ms-transform: rotate(-20deg);
    -webkit-transform: rotate(-20deg); 
    transform: rotate(-20deg);
}
.wpmca_home .wpmca_toolbar {
	height:50px;
	overflow:hidden;
	margin-right:-20px;
	background:#0091ea;
  position:relative;
  z-index:99;
}
.fixed {
    position: fixed; 
    top: 0; 
}

.wpmca_home .wpmca_tabs ul {
	list-style: none;
	margin: 0;
	padding: 0;
	margin-left: 16px;
}
.wpmca_home .wpmca_tabs ul li {
	float: left;
	width: 100px;
}
.wpmca_home .wpmca_tabs a {
	position: relative;
	color: rgba(255, 255, 255, 0.6);
	text-decoration: none;
	display: block;
	width: 100px;
	height: 50px;
	text-align: center;
	line-height: 52px;
	font-weight: 500;
	font-size: 14px;
	overflow: hidden;
}
.wpmca_home .wpmca_tabs .active a {
	color: white;
}
.wpmca_home .wpmca_tabs .active a:after {
	height: 2px;
	width: 100%;
	display: block;
	content: " ";
	bottom: 0px;
	left: 0px;
	position: absolute;
	background: #eeff41;
	-webkit-animation: border-expand 0.8s cubic-bezier(0.4,  0.0,  0.4,  1) 0s alternate forwards;
	-moz-animation: border-expand 0.8s cubic-bezier(0.4,  0.0,  0.4,  1) 0s alternate forwards;
	-ms-animation: border-expand 0.8s cubic-bezier(0.4,  0.0,  0.4,  1) 0s alternate forwards;
	-o-animation: border-expand 0.8s cubic-bezier(0.4,  0.0,  0.4,  1) 0s alternate forwards;
  animation: border-expand 0.8s cubic-bezier(0.4,  0.0,  0.4,  1) 0s alternate forwards;
  -moz-transition: all 1s cubic-bezier(0.4,  0.0,  1,  1);
  -webkit-transition: all 1s cubic-bezier(0.4,  0.0,  1,  1);
  -ms-transition: all 1s cubic-bezier(0.4,  0.0,  1,  1);
  -o-transition: all 1s cubic-bezier(0.4,  0.0,  1,  1);
	transition: all 1s cubic-bezier(0.4,  0.0,  1,  1);
}

.wpmca_home .wpmca_toolbar button{
	float: right;
	margin: 8px;
	height: 35px;
}

.wpmca_home .wpmca_content  {
    box-shadow: inset 0px 5px 6px -3px rgba(0,  0,  0,  0.4);
    padding-top: 50px;
    position: relative;
    top: 0px;
    overflow: hidden;
}

.wpmca_home .wpmca_item  {
    background: white;
    width: 500px;
    margin: 0 auto 2em;
    -webkit-box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24);
    -moz-box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24);
    -ms-box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24);
    -o-box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24);
    box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24);
    padding: 0 40px 30px 40px;
    -moz-transition: height 1s ease-in-out, left 1.5s ease-in-out;
    -webkit-transition: height 1s ease-in-out, left 1.5s ease-in-out;
    -moz-transition: height 1s ease-in-out, left 1.5s ease-in-out;
    -o-transition: height 1s ease-in-out, left 1.5s ease-in-out;
    transition: height 1s ease-in-out, left 1.5s ease-in-out;
}

.wpmca_home .itemhead  {
    padding: 25px;
    display: inline-block;
    position: relative;
}

.wpmca_home .itemhead img  {
    border-radius: 100%;
    float: left;
}
.wpmca_home .itemhead h2  {
    float: left;
}
.wpmca_home .wpmca_item .list_load_result{
	font-size: 19px;
   	line-height: 36px;
   	margin: 0;
}
.wpmca_home .wpmca_item .list_load_result span.bulletted{
  padding: 0 20px;
  display: block;
  position: relative;
}
.wpmca_home .wpmca_item .list_load_result span.bulletted::before{
  content: '';
	width: 10px;
	height: 10px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
	border: 3px solid #bbb;
	background-color: #0091ea;
	display: inline-block;
	margin-right: 10px;
	margin-bottom: -2px;
	position: relative;
}
.wpmca_home .wpmca_item .wpmcapara  {
   	font-size: 19px;
   	line-height: 26px;
   	margin: 0;
    display:block;
}
.wpmca_home .wpmca_item .wpmcapara a {
color:#0091ea;
}
.wpmca_home .wpmca_item .wpmcapara a:hover{
    color:#000;
     text-decoration: underline;
}
.wpmca_home .wpmca_item .wpmcapara textarea {
    width:480px;
    height:100px;
}
.wpmca_home .wpmca_item .wpmcapara.hinted{
  margin-top: -20px;

}
.wpmcahint {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
	border-radius: 50%;
	background-color: #0091ea;
	width: 20px;
	height: 20px;
   	position: relative;
   	display: inline-block;
   	text-align: center;
   	line-height: initial;
	font-size: 15px;
	margin-left: 20px;
  -webkit-transition:all 0.3s ease-in-out;
  -moz-transition:all 0.3s ease-in-out;
  -ms-transition:all 0.3s ease-in-out;
  -o-transition:all 0.3s ease-in-out;
	transition:all 0.3s ease-in-out;
}
.wpmcahint.headhint {
  margin-top:12px;
}
.wpmcahint::before{
	content: '?';
	color: #fff;
}
.wpmcahint:hover {
		background-color: #B1B1B1;
}
.wpmcahint:hover::after{
    background: rgba(77, 77, 77, 0.7);
    background: rgba(0,0,0,.8);
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
    border-radius: 5px;
    bottom: 26px;
    color: #fff;
    content: attr(data-hint);
    left: 20%;
    padding: 5px 5px;
    position: absolute;
    z-index: 98;
    width: 220px;
}
.wpmca_home .wpmca_item a  {
    text-decoration: none;
    color: #00bcd4;
    font-weight: 500;
    font-size: 0.8em;
}


.wpmca_home .wpmca_box  {
    display: none;
    overflow: auto;
    position: relative;
    overflow-x: hidden;
}

.wpmca_home .wpmca_box.show  {
    display: block;
}

@-webkit-keyframes border-expand  {
    0%  {
        opacity: 0;
        width: 0;
}
    100%  {
        opacity: 1;
        width: 100%;
}
}
@-moz-keyframes border-expand  {
    0%  {
        opacity: 0;
        width: 0;
}
    100%  {
        opacity: 1;
        width: 100%;
}
}
.wpmca_home .ripple {
  position: absolute;
  background: rgba(0,0,0,.25);
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  -ms-border-radius: 100%;
  -o-border-radius: 100%;
  border-radius: 100%;
  -webkit-transform: scale(0);
  -moz-transform: scale(0);
  -o-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  pointer-events: none;
}

.wpmca_home .ripple.show {
  -webkit-animation: ripple 2s ease-out;
  -moz-animation: ripple 2s ease-out;
  -ms-animation: ripple 2s ease-out;
  -o-animation: ripple 2s ease-out;
  animation: ripple 2s ease-out;
}
@-webkit-keyframes ripple { to {
 -webkit-transform: scale(1.5);
 opacity: 0;
}}
@-moz-keyframes ripple { to {
 -moz-transform: scale(1.5);
 opacity: 0;
}}
@-ms-keyframes ripple { to {
 -ms-transform: scale(1.5);
 opacity: 0;
}}
@-o-keyframes ripple { to {
 -o-transform: scale(1.5);
 opacity: 0;
}}
@keyframes ripple { to {
  transform: scale(1.5);
 opacity: 0;
}}

.wpcmaloading_container{
	position: relative;
	float: right;
  margin: 5px;
}
.wpcmaloading_container .wpmca_status{
	width: 40px;
	height: 40px;
	background-color: #fff;
	border-radius: 50%;
	position :relative;
	display: none;
	-webkit-animation: cardEnter .75s ease-in-out .5s;
	-moz-animation: cardEnter .75s ease-in-out .5s;
	-ms-animation: cardEnter .75s ease-in-out .5s;
	-o-animation: cardEnter .75s ease-in-out .5s;
	animation: cardEnter .75s ease-in-out .5s;
  -webkit-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
  -moz-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
  -ms-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
  -o-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);	
	box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
}
.wpcmaloading_container .wpmca_status.wpmcaupdated::after {
	content: "";
	height: 10px;
	width: 25px;
	display: inline-block;
	border-left: #0091ea solid;
	border-bottom: #0091ea solid;
	-moz-transform: rotate(-50deg);
    -o-transform: rotate(-50deg);
    -ms-transform: rotate(-50deg); 
    -webkit-transform: rotate(-50deg); 
    transform: rotate(-50deg);
    top: 10px;
	left: 5px;
	position: relative;
	
}

.wpcmaloading_container .wpmca_status.wpmcaerror::after {
	content: 'X';
	top: 11px;
	left: 12px;
	color: #CD3E2D;
	font-weight: 900;
	font-size: 27px;
	position: relative;
}
@-webkit-keyframes cardEnter {
  0%, 20%, 40%, 60%, 80%, 100% {
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
  }
  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
  }
  40% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
  }
  80% {
    -webkit-transform: scale3d(0.97, 0.97, 0.97);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
  }
}
@-moz-keyframes cardEnter {
  0%, 20%, 40%, 60%, 80%, 100% {
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  0% {
    opacity: 0;
    -moz-transform: scale3d(0.3, 0.3, 0.3);
  }
  20% {
    -moz-transform: scale3d(1.1, 1.1, 1.1);
  }
  40% {
    -moz-transform: scale3d(0.9, 0.9, 0.9);
  }
  60% {
    opacity: 1;
    -moz-transform: scale3d(1.03, 1.03, 1.03);
  }
  80% {
    -moz-transform: scale3d(0.97, 0.97, 0.97);
  }
  100% {
    opacity: 1;
    -moz-transform: scale3d(1, 1, 1);
  }
}
@-ms-keyframes cardEnter {
  0%, 20%, 40%, 60%, 80%, 100% {
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  0% {
    opacity: 0;
    -ms-transform: scale3d(0.3, 0.3, 0.3);
  }
  20% {
    -ms-transform: scale3d(1.1, 1.1, 1.1);
  }
  40% {
    -ms-transform: scale3d(0.9, 0.9, 0.9);
  }
  60% {
    opacity: 1;
    -ms-transform: scale3d(1.03, 1.03, 1.03);
  }
  80% {
    -ms-transform: scale3d(0.97, 0.97, 0.97);
  }
  100% {
    opacity: 1;
    -ms-transform: scale3d(1, 1, 1);
  }
}
@-o-keyframes cardEnter {
  0%, 20%, 40%, 60%, 80%, 100% {
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  0% {
    opacity: 0;
    -o-transform: scale3d(0.3, 0.3, 0.3);
  }
  20% {
    -o-transform: scale3d(1.1, 1.1, 1.1);
  }
  40% {
    -o-transform: scale3d(0.9, 0.9, 0.9);
  }
  60% {
    opacity: 1;
    -o-transform: scale3d(1.03, 1.03, 1.03);
  }
  80% {
    -o-transform: scale3d(0.97, 0.97, 0.97);
  }
  100% {
    opacity: 1;
    -o-transform: scale3d(1, 1, 1);
  }
}
@keyframes cardEnter {
  0%, 20%, 40%, 60%, 80%, 100% {
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  0% {
    opacity: 0;
    transform: scale3d(0.3, 0.3, 0.3);
  }
  20% {
    transform: scale3d(1.1, 1.1, 1.1);
  }
  40% {
    transform: scale3d(0.9, 0.9, 0.9);
  }
  60% {
    opacity: 1;
    transform: scale3d(1.03, 1.03, 1.03);
  }
  80% {
    transform: scale3d(0.97, 0.97, 0.97);
  }
  100% {
    opacity: 1;
    transform: scale3d(1, 1, 1);
  }
}
.wpmcaspinner {
  -webkit-animation:rotator 1.4s linear infinite;
  -moz-animation:rotator 1.4s linear infinite;
  -ms-animation:rotator 1.4s linear infinite;
  -o-animation:rotator 1.4s linear infinite;
  animation: rotator 1.4s linear infinite;
  display: none;
}

@-webkit-keyframes rotator {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(270deg); }
}
@-mozkeyframes rotator {
  0% { -moztransform: rotate(0deg); }
  100% { -moztransform: rotate(270deg); }
}
@-ms-keyframes rotator {
  0% { -ms-transform: rotate(0deg); }
  100% { -ms-transform: rotate(270deg); }
}
@-o-keyframes rotator {
  0% { -o-transform: rotate(0deg); }
  100% { -o-transform: rotate(270deg); }
}
@keyframes rotator {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(270deg); }
}

.path {
  stroke-dasharray: 187;
  stroke-dashoffset: 0;
  -webkit-transform-origin: center;
  -webkit-animation: dash 1.4s ease-in-out infinite, colors 5.6s ease-in-out infinite;
  -moz-transform-origin: center;
  -moz-animation: dash 1.4s ease-in-out infinite, colors 5.6s ease-in-out infinite;
  -ms-transform-origin: center;
  -ms-animation: dash 1.4s ease-in-out infinite, colors 5.6s ease-in-out infinite;
  -o-transform-origin: center;
  -o-animation: dash 1.4s ease-in-out infinite, colors 5.6s ease-in-out infinite;
  transform-origin: center;
  animation: dash 1.4s ease-in-out infinite, colors 5.6s ease-in-out infinite;
}

@-webkit-keyframes colors {
  0%{stroke: #fff;}
  100%{stroke: #fff;}
}

@-webkit-keyframes dash {
  0% {
    stroke-dashoffset: 187;
  }
  50% {
    stroke-dashoffset: 46.75;
    -webkit-transform: rotate(135deg);
  }
  100% {
    stroke-dashoffset: 187;
    -webkit-transform: rotate(450deg);
  }
}
@-moz-keyframes colors {
  0%{stroke: #fff;}
  100%{stroke: #fff;}
}

@-moz-keyframes dash {
  0% {
    stroke-dashoffset: 187;
  }

  50% {
    stroke-dashoffset: 46.75;
    -moz-transform: rotate(135deg);
  }

  100% {
    stroke-dashoffset: 187;
    -moz-transform: rotate(450deg);
  }
}
@-ms-keyframes colors {
  0%{stroke: #fff;}
  100%{stroke: #fff;}
}

@-ms-keyframes dash {
  0% {
    stroke-dashoffset: 187;
  }
  50% {
    stroke-dashoffset: 46.75;
    -ms-transform: rotate(135deg);
  }
  100% {
    stroke-dashoffset: 187;
    -ms-transform: rotate(450deg);
  }
}
@-o-keyframes colors {
  0%{stroke: #fff;}
  100%{stroke: #fff;}
}

@-o-keyframes dash {
  0% {
    stroke-dashoffset: 187;
  }
  50% {
    stroke-dashoffset: 46.75;
    -o-transform: rotate(135deg);
  }
  100% {
    stroke-dashoffset: 187;
    -o-transform: rotate(450deg);
  }
}
@keyframes colors {
  0%{stroke: #fff;}
  100%{stroke: #fff;}
}

@keyframes dash {
  0% {
    stroke-dashoffset: 187;
  }
  50% {
    stroke-dashoffset: 46.75;
    transform: rotate(135deg);
  }
  100% {
    stroke-dashoffset: 187;
    transform: rotate(450deg);
  }
}

.wpmca_home .wpmca_group  { 
  position:relative;
  margin-bottom:30px;  
}
.p1{
	padding: 0 10px;
}
.p2{
	padding: 0 20px;
}
.p3{
	padding: 0 30px;
}
.wpmca_home input[type=text].wpmchimp_text{
  font-size:18px;
  padding:10px 10px 10px 5px;
  display:inline-block;
  width:300px;
  border:none;
  border-bottom:1px solid #757575;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -mx-box-shadow: none;
  -o-box-shadow: none;
  box-shadow: none;
}
.wpmca_home input[type=text].wpmchimp_text:focus {outline:#fff solid 4px;}
.wpmca_home .wpmca_item button.item_button{
  height: 35px;
  width: 100px;
}

.wpmca_home label          {  
  -moz-transition:0.2s ease all;
  -o-transition:0.2s ease all;
  -ms-transition:0.2s ease all;
  -webkit-transition:0.2s ease all;
  transition:0.2s ease all;
  color:#999;
  font-size:18px;
  font-weight:normal;
  left:5px;
  top:10px; 
}
.wpmca_home .wpmcatxt label  {
  position:absolute;
}

.wpmca_home input[type=text].wpmchimp_text:focus ~ label, input[type=text].wpmchimp_text:valid ~ label    {
  top:-20px;
  font-size:14px;
  color:#5264AE;
}


.wpmca_home .bar  { position:relative; display:block; width:300px; }
.wpmca_home .bar:before, .bar:after   {
  content:'';
  height:2px; 
  width:0;
  bottom:1px; 
  position:absolute;
  background:#5264AE; 
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
  -o-transition:0.2s ease all;
  -ms-transition:0.2s ease all;
}
.wpmca_home .bar:before {
  left:50%;
}
.wpmca_home .bar:after {
  right:50%; 
}


.wpmca_home input[type=text]:focus ~ .bar:before, input[type=text]:focus ~ .bar:after {
  width:50%;
}


.wpmca_home .highlighter {
  position:absolute;
  height:60%; 
  width:300px; 
  top:25%; 
  left:0;
  pointer-events:none;
  opacity:0.5;
}


.wpmca_home input[type=text]:focus ~ .highlighter {
  -webkit-animation:inputHighlighter 0.3s ease;
  -moz-animation:inputHighlighter 0.3s ease;
  -ms-animation:inputHighlighter 0.3s ease;
  -o-animation:inputHighlighter 0.3s ease;
  animation:inputHighlighter 0.3s ease;
}


@-webkit-keyframes inputHighlighter {
  from { background:#5264AE; }
  to  { width:0; background:transparent; }
}
@-moz-keyframes inputHighlighter {
  from { background:#5264AE; }
  to  { width:0; background:transparent; }
}
@-ms-keyframes inputHighlighter {
  from { background:#5264AE; }
  to  { width:0; background:transparent; }
}
@-o-keyframes inputHighlighter {
  from { background:#5264AE; }
  to  { width:0; background:transparent; }
}
@keyframes inputHighlighter {
  from { background:#5264AE; }
  to  { width:0; background:transparent; }
}

.wpmchimp_texts{
  width:50px;
   border:0;
  border-bottom: 1px solid #757575;
  outline:none;
  box-shadow:none;
  -moz-box-shadow:none;
  -webkit-box-shadow:none;
}



.wpmcacb input[type=checkbox] {
  border: 2px solid #030303;
  appearance: none;
  height: 1.6rem;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  display: inline-block;
  position: relative;
  width: 1.6rem;
}
.wpmcacb input[type=checkbox]:before, .wpmcacb input[type=checkbox]:after {
  position: absolute;
  content: "";
  border-radius: 2px;
}
.wpmcacb input[type=checkbox]:before {
  -webkit-transform-origin: left top;
  -moz-transform-origin: left top;
  -ms-transform-origin: left top;
  -o-transform-origin: left top;
  transform-origin: left top;
  -webkit-transform: rotate(55deg);
  -moz-transform: rotate(55deg);
  -ms-transform: rotate(55deg);
  -o-transform: rotate(55deg);
  transform: rotate(55deg);
  bottom: 0.7rem;
  left: .2rem;
  width: 0.7rem !important;
  height: .3rem;
  margin: 0 !important;
}
.wpmcacb input[type=checkbox]:after {
  -webkit-transform-origin: left top;
  -moz-transform-origin: left top;
  -ms-transform-origin: left top;
  -o-transform-origin: left top;
  transform-origin: left top;
  -webkit-transform: rotate(-52deg);
  -moz-transform: rotate(-52deg);
  -ms-transform: rotate(-52deg);
  -o-transform: rotate(-52deg);
  transform: rotate(-52deg);
  height: .3rem;
  bottom: .1rem;
  left: .4rem;
  width: 1.2rem;
  margin: 0 !important;
}
.wpmcacb input[type=checkbox]:checked {
  background: #030303;
}
.wpmcacb input[type=checkbox]:checked:before, .wpmcacb input[type=checkbox]:checked:after {
  background: white;
  content: '';
  height: 3px;
}
.wpmcacb input[type=checkbox]:checked:before {
  -webkit-animation: checkbox-mask-left .15s ease-in-out;
  -moz-animation: checkbox-mask-left .15s ease-in-out;
  -ms-animation: checkbox-mask-left .15s ease-in-out;
  -o-animation: checkbox-mask-left .15s ease-in-out;
  animation: checkbox-mask-left .15s ease-in-out;
}
.wpmcacb input[type=checkbox]:checked:after {
  -webkit-animation: checkbox-mask-right .15s ease-in-out;
  -moz-animation: checkbox-mask-right .15s ease-in-out;
  -ms-animation: checkbox-mask-right .15s ease-in-out;
  -o-animation: checkbox-mask-right .15s ease-in-out;
  animation: checkbox-mask-right .15s ease-in-out;
}
.wpmcacb input[type=checkbox]:focus {
  outline:none !important;
    border: 2px solid #030303 !important;
}
.wpmca_group.wpmcacb label{
	position: relative;
	top: -3px;
	left: 0;
}
.wpmca_group.wpmcatxts label{
  position:relative;
  top: 0;
}
.wpmca_group.wpmcatxts .wpmchimp_texts{
    border:0;
  border-bottom: 1px solid #757575;
  outline:none;
  box-shadow:none;
  -moz-box-shadow:none;
  -webkit-box-shadow:none;
  margin:0 10px;
position: relative;
}
.wpmca_group.wpmcatxts .wpmchimp_texts:focus{
border-color:#5264AE;
}
.wpmca_group.wpmcacolor label{
  position:relative;
  left: 0;
  top: -12px;
}
@-webkit-keyframes checkbox-mask-left {
  0% {
    width: 0;
  }
  50% {
    width: 0.7rem;
  }
  100% {
    width: 0.7rem;
  }
}

@-webkit-keyframes checkbox-mask-right {
  0% {
    width: 0;
  }
  50% {
    width: 0;
  }
  100% {
    width: 1.2rem;
  }
}
@-moz-keyframes checkbox-mask-left {
  0% {
    width: 0;
  }
  50% {
    width: 0.7rem;
  }
  100% {
    width: 0.7rem;
  }
}

@-moz-keyframes checkbox-mask-right {
  0% {
    width: 0;
  }
  50% {
    width: 0;
  }
  100% {
    width: 1.2rem;
  }
}
@-ms-keyframes checkbox-mask-left {
  0% {
    width: 0;
  }
  50% {
    width: 0.7rem;
  }
  100% {
    width: 0.7rem;
  }
}

@-ms-keyframes checkbox-mask-right {
  0% {
    width: 0;
  }
  50% {
    width: 0;
  }
  100% {
    width: 1.2rem;
  }
}
@-o-keyframes checkbox-mask-left {
  0% {
    width: 0;
  }
  50% {
    width: 0.7rem;
  }
  100% {
    width: 0.7rem;
  }
}

@-o-keyframes checkbox-mask-right {
  0% {
    width: 0;
  }
  50% {
    width: 0;
  }
  100% {
    width: 1.2rem;
  }
}
@keyframes checkbox-mask-left {
  0% {
    width: 0;
  }
  50% {
    width: 0.7rem;
  }
  100% {
    width: 0.7rem;
  }
}

@keyframes checkbox-mask-right {
  0% {
    width: 0;
  }
  50% {
    width: 0;
  }
  100% {
    width: 1.2rem;
  }
}

.wpmcacb input[type=radio]{
  position: relative;
  border: none;
  margin-right: 15px;
}
.wpmcacb input[type=radio]:checked,.wpmcacb input[type=radio]:focus{
	border: none;
	-webkit-box-shadow:none;
	-moz-box-shadow:none;
	box-shadow:none;
	outline:none !important;
	text-align:initial;

}
.wpmcacb input[type=radio]::before
{
  border-radius: 100%;
  cursor: pointer;
  display: block;
  height: 15px;
  position: absolute;
  -ms-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  z-index: 1;
  border: 3px solid #ccc;
  width: 15px;
  content: "";
}

.wpmcacb input[type=radio]:checked::before
{
  -webkit-transform: scale(.75);
  -moz-transform: scale(.75);
  -ms-transform: scale(.75);
  -o-transform: scale(.75);
  transform: scale(.75);
  background: #000000;
  width: 15px;
  height: 15px;
  margin: 0!important;
}

.wpmcacb input[type=radio]::after
{
  background: #fff;
  content: "";
  display: block;
  position: absolute;
  z-index: 0;
  width: 15px;
  height: 15px;
}


.paper-toggle{
  display: inline-block;
  width: 200px;
}
.paper-toggle input:empty{
	margin-left: -999px;
}

.paper-toggle input:empty ~ label{
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
  cursor: pointer;
  float: left;
  position: relative;
  width: 180px;
  top: 0;
}

.paper-toggle input:empty ~ label::before, 
.paper-toggle input:empty ~ label::after{
  position: absolute;
	display: block;
  content: ' ';
  -moz-transition: all 200ms ease-in;
  -o-transition: all 200ms ease-in;
  -ms-transition: all 200ms ease-in;
  -webkit-transition: all 200ms ease-in;
  transition: all 200ms ease-in;
}

.paper-toggle input:empty ~ label::before{
    top: 8px;
    width: 32px;
    height: 1px;
    background-color: #5a5a5a;
    left: 140px;
}

input.wpmcatoggle:empty ~ label::after{
    width: 1.4em;
    height: 8px;
    bottom: 0.1em;
    margin-left: 0.1em;
    background-color: #fff;
    border-radius: 50%;
    width: 12px;
    height: 12px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    border: solid 2px;
    border-color: #5a5a5a;
    left: 125px;
    top: 0px;
}
.paper-toggle input:checked ~ label::before{
	background-color: #0f9d58;
}
.paper-toggle input:checked ~ label::after{
	left: 165px;
  background-color: #0f9d58;
  border-color: #0f9d58;
}
.wpmca_group.wpmcatxt label{
	pointer-events: none;
  left: inherit;
}
.wpmca_sel_button{
	font-size: 13px;
	line-height: 1.4em;
  width: 150px!important;
}

select.wpmca_sel,select.wpmca_sel:focus{
  border:0;
  border-bottom: 1px solid #757575;
  outline:none;
  box-shadow:none;
  -moz-box-shadow:none;
  -webkit-box-shadow:none;
  background: url('multi-select.png') no-repeat 100% top;
  appearance:none;
-moz-appearance:none;
-webkit-appearance:none;
text-indent: 0.01px;
    text-overflow: '';
}
select.google_fonts{
  width: 260px;
}
select.google_fonts_size{
  width: 50px;
}
select.google_fonts_weight{
  width: 70px;
}

.sub_txt{display:none}

.show_love::before{
  content:'\f487';
font-family: dashicons;
color:#DA4336;
top: 4px;
position: relative;
}

.wpmca_group.goog_charts{
  width :550px;
  height:300px;
  display:none;
  margin-left:-40px;

}
.prefeat{
  position: absolute;  
  display: inline-block;
  right: 0px;
  cursor:pointer;
}
.prefeat::before {
  content: 'BUY PRO';
  color: #A80000;
  padding: 2px 10px;
  border: 1px solid #CD3E2D;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  -ms-border-radius: 20px;
  -o-border-radius: 20px;
  border-radius: 20px;
  -webkit-transition:all 0.3s ease-in-out;
  -moz-transition:all 0.3s ease-in-out;
  -ms-transition:all 0.3s ease-in-out;
  -o-transition:all 0.3s ease-in-out;
  transition:all 0.3s ease-in-out;
}
.click.prefeat::before {
  background:#CD3E2D;
  color: #fff;
}

.feat_list{
  width:100%;
  display:block;
    
}

.fl_row{
  height:35px;
  width:100%;
  font-size: 14px;
  position:relative;
}
.fl_row.odd{
  background:#fff;
  box-shadow: 0px 1.5px 5px -1px rgba(0,0,0,0.5);
  z-index:50;
}
.fl_row.even{
  background:#F3F3F3;
  z-index:40
}
.fl_row.last{
  background:#fff;
  z-index:40
}
.fl_row .feat{
  padding: 8px 10px;
  width:340px;
  float:left;
  height: 19px;
}
.fl_row .featbox, .fl_row .featbox_h{
  width:70px;
  height:35px;
  float:left;
  color:#9e9e9e;
}
.featbox_h.feat_buypro{
  float:right;
  cursor:pointer;
  background-color: #CD3E2D;
    -webkit-transition:all 0.5s ease;
  -moz-transition:all 0.5s ease;
  -ms-transition:all 0.5s ease;
  -o-transition:all 0.5s ease;
  transition:all 0.5s ease;
}
.featbox_h span,.feat_buypro::before{
  position: relative;
  display: block;
  top: 10px;
  text-align: center;
  font-size: 20px;
  font-weight: bolder;
}
.feat_buypro::before{
  content:'Buy Pro';
  font-size:18px;
  color:#fff;
}
.feat_buypro::after{
content:'';
  z-index:-1;
  display:block;
  position:relative;
  width:50px;
  height:50px;
  -moz-transform: rotate(-50deg);
  -o-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg); 
  transform: rotate(45deg);
  background:#CD3E2D;
    -webkit-transition:all 0.5s ease;
  -moz-transition:all 0.5s ease;
  -ms-transition:all 0.5s ease;
  -o-transition:all 0.5s ease;
  transition:all 0.5s ease;
  bottom: 8px;
left: 10px;
}
.feat_buypro:hover,.feat_buypro:hover:after{
    background:#259b24;
}
.feat span{
  font-size: 20px;
font-weight: bolder;
margin-left: -6px;
font-family: comic sans ms,cursive;
color: #bdbdbd;
}
.featbox::before{ 
content:'';
height: 28px;
width: 28px;
display: block;
  border-radius:50%;
  background:#fff;
  font-size: 28px;
position: relative;
top: 3px;
left: 20px;
  font-family: "dashicons";
  -webkit-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
  -moz-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
  -ms-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
  -o-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);  
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
}

.featbox.avail::after{
  content: "";
  height: 5px;
  width: 17px;
  position: relative;
  bottom: 22px;
  left: 25px;
  display: inline-block;
  border-left: #259b24 solid;
  border-bottom: #259b24 solid;
  -moz-transform: rotate(-50deg);
  -o-transform: rotate(-50deg);
  -ms-transform: rotate(-50deg);
  -webkit-transform: rotate(-50deg);
  transform: rotate(-50deg);
}

.featbox.pro::after{
content:'\f158';
  font-family: "dashicons";
color: #CD3E2D  ;
  bottom: 20px;
position: relative;
left: 22px;
font-size: 25px;
}

.wpmca_group input[type="image"]{
    margin: 1px auto;
display: block;
}
.wpmca_menu_box,.wpmca_menu_title{
    display:none;
}
.wpmca_menu_list{
    display:block;
    width:1px;
    height:1px;
    overflow: hidden;
    -webkit-transition:all 0.3s ease-in-out;
  -moz-transition:all 0.3s ease-in-out;
  -ms-transition:all 0.3s ease-in-out;
  -o-transition:all 0.3s ease-in-out;
  transition:all 0.3s ease-in-out;
}
@media only screen and (max-width:850px) {
.wpmca_tabs{
    display:none;
}
.wpmca_menu_box{
display:inline-block;
position:absolute;
margin-top: -50px;
z-index: 100;
}
.wpmca_menu_title{
    position: absolute;
    display:block;
    top: 0;
    width: 120px;
    left: 50px;
    font-size: 25px;
    padding: 15px;
    color: #fff;
    text-transform:uppercase;
}
.wpmca_menu_box.active .wpmca_menu_list{
    display:block;
    width: 120px;
    height: 200px;
    margin: 0px;
     background:#3f51b5;
    -webkit-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
  -moz-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
  -ms-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
  -o-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
    box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.26);
}
.wpmca_menu_list li{
    height: 20px;
    width: 100px;
    padding: 4px 10px;
    font-size: 15px;
}

.wpmca_menu_list li:hover{
background:#1C34BD;
}
.wpmca_menu_list li a{
    text-decoration: none;
    color:#E4E4E4;
    width: 120px;
    height: 20px;
    display:block;
}
.wpmca_menu_list li:hover a{
color:#fff;
}
.wpmca_menu_icon{
    width:40px;
    height:40px;
    display:inline-block;
    margin:5px;
    cursor:pointer;
}
.wpmca_menu_icon::before{
    content:'\f333';
    color:#fff;
    font-family: dashicons;
font-size: 40px;
top: 12px;
position: relative;
}

}