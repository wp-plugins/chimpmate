"use strict";angular.module("minicolors",[]),angular.module("minicolors").provider("minicolors",function(){this.defaults={theme:"bootstrap",position:"bottom left",defaultValue:"",animationSpeed:50,animationEasing:"swing",change:null,changeDelay:0,control:"hue",hide:null,hideSpeed:100,inline:!1,letterCase:"lowercase",opacity:!1,show:null,showSpeed:100},this.$get=function(){return this}}),angular.module("minicolors").directive("minicolors",["minicolors","$timeout",function(i,n){return{require:"?ngModel",restrict:"A",priority:1,link:function(o,e,r,t){var l=!1,a=function(){var n=angular.extend({},i.defaults,o.$eval(r.minicolors));return n};t.$render=function(){n(function(){var i=t.$viewValue;e.minicolors("value",i)},0,!1)};var u=function(){if(t){var i=a();return i.change=function(i){o.$apply(function(){t.$setViewValue(i)})},e.hasClass("minicolors")&&e.minicolors("destroy"),e.minicolors(i),l?void 0:(n(function(){var i=t.$viewValue;e.minicolors("value",i)},0),void(l=!0))}};u(),o.$watch(a,u,!0)}}}]);