<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo get_the_title(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <script src="../js/vendor/modernizr-2.6.1.min.js"></script>
		<?php include('/functions.php'); ?>
		<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" />
		<!--<style>
		
		header#header .container div.menu {
			float: right;
			margin-top: -46px;
		}
		
		header#header .container div.menu ul li {
			position: relative;
			float: left;
			list-style: none;
			margin-left: 20px;
			font-weight: bold;
			text-transform: uppercase;
			font-size: 11px;
		}
		
		
		
		
@import url(http://fonts.googleapis.com/css?family=Quicksand);
@import url(http://fonts.googleapis.com/css?family=Roboto+Slab);

.timeline-margin {
	margin-right: 5px;
}

.clearfix {
  *zoom: 1;
}
.clearfix:before,
.clearfix:after {
  display: table;
  content: "";
  line-height: 0;
}
.clearfix:after {
  clear: both;
}
.hide-text {
  font: a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
/*!
 * Bootstrap v2.1.1
 *
 * Copyright 2012 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world @twitter by @mdo and @fat.
 */
.clearfix {
  *zoom: 1;
}
.clearfix:before,
.clearfix:after {
  display: table;
  content: "";
  line-height: 0;
}
.clearfix:after {
  clear: both;
}
.hide-text {
  font: a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.input-block-level {
  display: block;
  width: 100%;
  min-height: 30px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
nav,
section {
  display: block;
}
audio,
canvas,
video {
  display: inline-block;
  *display: inline;
  *zoom: 1;
}
audio:not([controls]) {
  display: none;
}
html {
  font-size: 100%;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}
a:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
a:hover,
a:active {
  outline: 0;
}
sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
img {
  /* Responsive images (ensure images don't scale beyond their parents) */

  max-width: 100%;
  /* Part 1: Set a maxium relative to the parent */

  width: auto\9;
  /* IE7-8 need help adjusting responsive images */

  height: auto;
  /* Part 2: Scale the height according to the width, otherwise you get stretching */

  vertical-align: middle;
  border: 0;
  -ms-interpolation-mode: bicubic;
}
#map_canvas img {
  max-width: none;
}
button,
input,
select,
textarea {
  margin: 0;
  font-size: 100%;
  vertical-align: middle;
}
button,
input {
  *overflow: visible;
  line-height: normal;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  padding: 0;
  border: 0;
}
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
  cursor: pointer;
  -webkit-appearance: button;
}
input[type="search"] {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  -webkit-appearance: textfield;
}
input[type="search"]::-webkit-search-decoration,
input[type="search"]::-webkit-search-cancel-button {
  -webkit-appearance: none;
}
textarea {
  overflow: auto;
  vertical-align: top;
}
body {
  margin: 0;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
  line-height: 20px;
  color: #52575f;
  background-color: #ffffff;
}
a {
  text-decoration: none;
}
a:hover {
  text-decoration: none;
}
.img-rounded {
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
}
.img-polaroid {
  padding: 4px;
  background-color: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}
.img-circle {
  -webkit-border-radius: 500px;
  -moz-border-radius: 500px;
  border-radius: 500px;
}
.row {
  margin-left: -40px;
  *zoom: 1;
}
.row:before,
.row:after {
  display: table;
  content: "";
  line-height: 0;
}
.row:after {
  clear: both;
}
[class*="span"] {
  float: left;
  min-height: 1px;
  margin-left: 40px;
}
.container,
.navbar-static-top .container,
.navbar-fixed-top .container,
.navbar-fixed-bottom .container {
  width: 920px;
}
.span12 {
  width: 920px;
}
.span11 {
  width: 840px;
}
.span10 {
  width: 760px;
}
.span9 {
  width: 680px;
}
.span8 {
  width: 600px;
}
.span7 {
  width: 520px;
}
.span6 {
  width: 440px;
}
.span5 {
  width: 360px;
}
.span4 {
  width: 280px;
}
.span3 {
  width: 200px;
}
.span2 {
  width: 120px;
}
.span1 {
  width: 40px;
}
.offset12 {
  margin-left: 1000px;
}
.offset11 {
  margin-left: 920px;
}
.offset10 {
  margin-left: 840px;
}
.offset9 {
  margin-left: 760px;
}
.offset8 {
  margin-left: 680px;
}
.offset7 {
  margin-left: 600px;
}
.offset6 {
  margin-left: 520px;
}
.offset5 {
  margin-left: 440px;
}
.offset4 {
  margin-left: 360px;
}
.offset3 {
  margin-left: 280px;
}
.offset2 {
  margin-left: 200px;
}
.offset1 {
  margin-left: 120px;
}
.row-fluid {
  width: 100%;
  *zoom: 1;
}
.row-fluid:before,
.row-fluid:after {
  display: table;
  content: "";
  line-height: 0;
}
.row-fluid:after {
  clear: both;
}
.row-fluid [class*="span"] {
  display: block;
  width: 100%;
  min-height: 30px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  float: left;
  margin-left: 4.3478260869565215%;
  *margin-left: 4.293478260869565%;
}
.row-fluid [class*="span"]:first-child {
  margin-left: 0;
}
.row-fluid .span12 {
  width: 100%;
  *width: 99.94565217391305%;
}
.row-fluid .span11 {
  width: 91.30434782608695%;
  *width: 91.25%;
}
.row-fluid .span10 {
  width: 82.6086956521739%;
  *width: 82.55434782608695%;
}
.row-fluid .span9 {
  width: 73.91304347826087%;
  *width: 73.85869565217392%;
}
.row-fluid .span8 {
  width: 65.21739130434781%;
  *width: 65.16304347826086%;
}
.row-fluid .span7 {
  width: 56.52173913043478%;
  *width: 56.46739130434783%;
}
.row-fluid .span6 {
  width: 47.826086956521735%;
  *width: 47.77173913043478%;
}
.row-fluid .span5 {
  width: 39.130434782608695%;
  *width: 39.07608695652174%;
}
.row-fluid .span4 {
  width: 30.43478260869565%;
  *width: 30.380434782608692%;
}
.row-fluid .span3 {
  width: 21.73913043478261%;
  *width: 21.684782608695652%;
}
.row-fluid .span2 {
  width: 13.043478260869565%;
  *width: 12.989130434782608%;
}
.row-fluid .span1 {
  width: 4.3478260869565215%;
  *width: 4.293478260869565%;
}
.row-fluid .offset12 {
  margin-left: 108.69565217391305%;
  *margin-left: 108.58695652173914%;
}
.row-fluid .offset12:first-child {
  margin-left: 104.34782608695652%;
  *margin-left: 104.23913043478261%;
}
.row-fluid .offset11 {
  margin-left: 100%;
  *margin-left: 99.8913043478261%;
}
.row-fluid .offset11:first-child {
  margin-left: 95.65217391304347%;
  *margin-left: 95.54347826086956%;
}
.row-fluid .offset10 {
  margin-left: 91.30434782608695%;
  *margin-left: 91.19565217391305%;
}
.row-fluid .offset10:first-child {
  margin-left: 86.95652173913042%;
  *margin-left: 86.84782608695652%;
}
.row-fluid .offset9 {
  margin-left: 82.60869565217392%;
  *margin-left: 82.50000000000001%;
}
.row-fluid .offset9:first-child {
  margin-left: 78.26086956521739%;
  *margin-left: 78.15217391304348%;
}
.row-fluid .offset8 {
  margin-left: 73.91304347826086%;
  *margin-left: 73.80434782608695%;
}
.row-fluid .offset8:first-child {
  margin-left: 69.56521739130433%;
  *margin-left: 69.45652173913042%;
}
.row-fluid .offset7 {
  margin-left: 65.21739130434783%;
  *margin-left: 65.10869565217392%;
}
.row-fluid .offset7:first-child {
  margin-left: 60.869565217391305%;
  *margin-left: 60.7608695652174%;
}
.row-fluid .offset6 {
  margin-left: 56.52173913043478%;
  *margin-left: 56.413043478260875%;
}
.row-fluid .offset6:first-child {
  margin-left: 52.17391304347826%;
  *margin-left: 52.06521739130435%;
}
.row-fluid .offset5 {
  margin-left: 47.826086956521735%;
  *margin-left: 47.71739130434783%;
}
.row-fluid .offset5:first-child {
  margin-left: 43.47826086956522%;
  *margin-left: 43.36956521739131%;
}
.row-fluid .offset4 {
  margin-left: 39.13043478260869%;
  *margin-left: 39.02173913043478%;
}
.row-fluid .offset4:first-child {
  margin-left: 34.78260869565217%;
  *margin-left: 34.67391304347826%;
}
.row-fluid .offset3 {
  margin-left: 30.434782608695652%;
  *margin-left: 30.32608695652174%;
}
.row-fluid .offset3:first-child {
  margin-left: 26.086956521739133%;
  *margin-left: 25.978260869565215%;
}
.row-fluid .offset2 {
  margin-left: 21.73913043478261%;
  *margin-left: 21.630434782608692%;
}
.row-fluid .offset2:first-child {
  margin-left: 17.391304347826086%;
  *margin-left: 17.282608695652172%;
}
.row-fluid .offset1 {
  margin-left: 13.043478260869565%;
  *margin-left: 12.934782608695652%;
}
.row-fluid .offset1:first-child {
  margin-left: 8.695652173913043%;
  *margin-left: 8.586956521739129%;
}
[class*="span"].hide,
.row-fluid [class*="span"].hide {
  display: none;
}
[class*="span"].pull-right,
.row-fluid [class*="span"].pull-right {
  float: right;
}
.container {
  margin-right: auto;
  margin-left: auto;
  *zoom: 1;
}
.container:before,
.container:after {
  display: table;
  content: "";
  line-height: 0;
}
.container:after {
  clear: both;
}
.container-fluid {
  padding-right: 40px;
  padding-left: 40px;
  *zoom: 1;
}
.container-fluid:before,
.container-fluid:after {
  display: table;
  content: "";
  line-height: 0;
}
.container-fluid:after {
  clear: both;
}
p {
  margin: 0 0 9px;
}
.lead {
  margin-bottom: 18px;
  font-size: 19.5px;
  font-weight: 200;
  line-height: 27px;
}
small {
  font-size: 85%;
}
strong {
  font-weight: bold;
}
em {
  font-style: italic;
}
cite {
  font-style: normal;
}
.muted {
  color: #999999;
}
.text-warning {
  color: #c09853;
}
.text-error {
  color: #b94a48;
}
.text-info {
  color: #3a87ad;
}
.text-success {
  color: #468847;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 9px 0;
  font-family: inherit;
  font-weight: bold;
  line-height: 1;
  color: #3B3F45;
  text-rendering: optimizelegibility;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small {
  font-weight: normal;
  line-height: 1;
  color: #999999;
}
h1 {
  font-size: 36px;
  line-height: 40px;
}
h2 {
  font-size: 30px;
  line-height: 40px;
}
h3 {
  font-size: 24px;
  line-height: 40px;
}
h4 {
  font-size: 18px;
  line-height: 20px;
}
h5 {
  font-size: 14px;
  line-height: 20px;
}
h6 {
  font-size: 12px;
  line-height: 20px;
}
h1 small {
  font-size: 24px;
}
h2 small {
  font-size: 18px;
}
h3 small {
  font-size: 14px;
}
h4 small {
  font-size: 14px;
}
.page-header {
  padding-bottom: 8px;
  margin: 18px 0 27px;
  border-bottom: 1px solid #eeeeee;
}
ul,
ol {
  padding: 0;
  margin: 0 0 9px 25px;
}
ul ul,
ul ol,
ol ol,
ol ul {
  margin-bottom: 0;
}
li {
  line-height: 20px;
}
ul.unstyled,
ol.unstyled {
  margin-left: 0;
  list-style: none;
}
dl {
  margin-bottom: 18px;
}
dt,
dd {
  line-height: 20px;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 9px;
}
.dl-horizontal {
  *zoom: 1;
}
.dl-horizontal:before,
.dl-horizontal:after {
  display: table;
  content: "";
  line-height: 0;
}
.dl-horizontal:after {
  clear: both;
}
.dl-horizontal dt {
  float: left;
  width: 160px;
  clear: left;
  text-align: right;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.dl-horizontal dd {
  margin-left: 180px;
}
abbr[title] {
  cursor: help;
  border-bottom: 1px dotted #999999;
}
abbr.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
blockquote {
  padding: 0 0 0 15px;
  margin: 0 0 18px;
  border-left: 5px solid #eeeeee;
}
blockquote p {
  margin-bottom: 0;
  font-size: 16px;
  font-weight: 300;
  line-height: 22.5px;
}
blockquote small {
  display: block;
  line-height: 20px;
  color: #999999;
}
blockquote small:before {
  content: '\2014 \00A0';
}
blockquote.pull-right {
  float: right;
  padding-right: 15px;
  padding-left: 0;
  border-right: 5px solid #eeeeee;
  border-left: 0;
}
blockquote.pull-right p,
blockquote.pull-right small {
  text-align: right;
}
blockquote.pull-right small:before {
  content: '';
}
blockquote.pull-right small:after {
  content: '\00A0 \2014';
}
q:before,
q:after,
blockquote:before,
blockquote:after {
  content: "";
}
address {
  display: block;
  margin-bottom: 18px;
  font-style: normal;
  line-height: 20px;
}
code,
pre {
  padding: 0 3px 2px;
  font-family: Monaco, Menlo, Consolas, "Courier New", monospace;
  font-size: 11px;
  color: #333333;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}
code {
  padding: 2px 4px;
  color: #d14;
  background-color: #f7f7f9;
  border: 1px solid #e1e1e8;
}
pre {
  display: block;
  padding: 8.5px;
  margin: 0 0 9px;
  font-size: 12px;
  line-height: 20px;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
pre.prettyprint {
  margin-bottom: 18px;
}
pre code {
  padding: 0;
  color: inherit;
  background-color: transparent;
  border: 0;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.label,
.badge {
  font-size: 10.998px;
  font-weight: bold;
  line-height: 14px;
  color: #ffffff;
  vertical-align: baseline;
  white-space: nowrap;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #999999;
}
.label {
  padding: 1px 4px 2px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}
.badge {
  padding: 1px 9px 2px;
  -webkit-border-radius: 9px;
  -moz-border-radius: 9px;
  border-radius: 9px;
}
a.label:hover,
a.badge:hover {
  color: #ffffff;
  text-decoration: none;
  cursor: pointer;
}
.label-important,
.badge-important {
  background-color: #b94a48;
}
.label-important[href],
.badge-important[href] {
  background-color: #953b39;
}
.label-warning,
.badge-warning {
  background-color: #f89406;
}
.label-warning[href],
.badge-warning[href] {
  background-color: #c67605;
}
.label-success,
.badge-success {
  background-color: #468847;
}
.label-success[href],
.badge-success[href] {
  background-color: #356635;
}
.label-info,
.badge-info {
  background-color: #3a87ad;
}
.label-info[href],
.badge-info[href] {
  background-color: #2d6987;
}
.label-inverse,
.badge-inverse {
  background-color: #333333;
}
.label-inverse[href],
.badge-inverse[href] {
  background-color: #1a1a1a;
}
.btn .label,
.btn .badge {
  position: relative;
  top: -1px;
}
.btn-mini .label,
.btn-mini .badge {
  top: 0;
}
table {
  max-width: 100%;
  background-color: transparent;
  border-collapse: collapse;
  border-spacing: 0;
}
.table {
  width: 100%;
  margin-bottom: 18px;
}
.table th,
.table td {
  padding: 8px;
  line-height: 20px;
  text-align: left;
  vertical-align: top;
  border-top: 1px solid #dddddd;
}
.table th {
  font-weight: bold;
}
.table thead th {
  vertical-align: bottom;
}
.table caption + thead tr:first-child th,
.table caption + thead tr:first-child td,
.table colgroup + thead tr:first-child th,
.table colgroup + thead tr:first-child td,
.table thead:first-child tr:first-child th,
.table thead:first-child tr:first-child td {
  border-top: 0;
}
.table tbody + tbody {
  border-top: 2px solid #dddddd;
}
.table-condensed th,
.table-condensed td {
  padding: 4px 5px;
}
.table-bordered {
  border: 1px solid #dddddd;
  border-collapse: separate;
  *border-collapse: collapse;
  border-left: 0;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
.table-bordered th,
.table-bordered td {
  border-left: 1px solid #dddddd;
}
.table-bordered caption + thead tr:first-child th,
.table-bordered caption + tbody tr:first-child th,
.table-bordered caption + tbody tr:first-child td,
.table-bordered colgroup + thead tr:first-child th,
.table-bordered colgroup + tbody tr:first-child th,
.table-bordered colgroup + tbody tr:first-child td,
.table-bordered thead:first-child tr:first-child th,
.table-bordered tbody:first-child tr:first-child th,
.table-bordered tbody:first-child tr:first-child td {
  border-top: 0;
}
.table-bordered thead:first-child tr:first-child th:first-child,
.table-bordered tbody:first-child tr:first-child td:first-child {
  -webkit-border-top-left-radius: 4px;
  border-top-left-radius: 4px;
  -moz-border-radius-topleft: 4px;
}
.table-bordered thead:first-child tr:first-child th:last-child,
.table-bordered tbody:first-child tr:first-child td:last-child {
  -webkit-border-top-right-radius: 4px;
  border-top-right-radius: 4px;
  -moz-border-radius-topright: 4px;
}
.table-bordered thead:last-child tr:last-child th:first-child,
.table-bordered tbody:last-child tr:last-child td:first-child,
.table-bordered tfoot:last-child tr:last-child td:first-child {
  -webkit-border-radius: 0 0 0 4px;
  -moz-border-radius: 0 0 0 4px;
  border-radius: 0 0 0 4px;
  -webkit-border-bottom-left-radius: 4px;
  border-bottom-left-radius: 4px;
  -moz-border-radius-bottomleft: 4px;
}
.table-bordered thead:last-child tr:last-child th:last-child,
.table-bordered tbody:last-child tr:last-child td:last-child,
.table-bordered tfoot:last-child tr:last-child td:last-child {
  -webkit-border-bottom-right-radius: 4px;
  border-bottom-right-radius: 4px;
  -moz-border-radius-bottomright: 4px;
}
.table-bordered caption + thead tr:first-child th:first-child,
.table-bordered caption + tbody tr:first-child td:first-child,
.table-bordered colgroup + thead tr:first-child th:first-child,
.table-bordered colgroup + tbody tr:first-child td:first-child {
  -webkit-border-top-left-radius: 4px;
  border-top-left-radius: 4px;
  -moz-border-radius-topleft: 4px;
}
.table-bordered caption + thead tr:first-child th:last-child,
.table-bordered caption + tbody tr:first-child td:last-child,
.table-bordered colgroup + thead tr:first-child th:last-child,
.table-bordered colgroup + tbody tr:first-child td:last-child {
  -webkit-border-top-right-radius: 4px;
  border-top-right-radius: 4px;
  -moz-border-radius-topleft: 4px;
}
.table-striped tbody tr:nth-child(odd) td,
.table-striped tbody tr:nth-child(odd) th {
  background-color: #f9f9f9;
}
.table-hover tbody tr:hover td,
.table-hover tbody tr:hover th {
  background-color: #f5f5f5;
}
table [class*=span],
.row-fluid table [class*=span] {
  display: table-cell;
  float: none;
  margin-left: 0;
}
.table .span1 {
  float: none;
  width: 24px;
  margin-left: 0;
}
.table .span2 {
  float: none;
  width: 104px;
  margin-left: 0;
}
.table .span3 {
  float: none;
  width: 184px;
  margin-left: 0;
}
.table .span4 {
  float: none;
  width: 264px;
  margin-left: 0;
}
.table .span5 {
  float: none;
  width: 344px;
  margin-left: 0;
}
.table .span6 {
  float: none;
  width: 424px;
  margin-left: 0;
}
.table .span7 {
  float: none;
  width: 504px;
  margin-left: 0;
}
.table .span8 {
  float: none;
  width: 584px;
  margin-left: 0;
}
.table .span9 {
  float: none;
  width: 664px;
  margin-left: 0;
}
.table .span10 {
  float: none;
  width: 744px;
  margin-left: 0;
}
.table .span11 {
  float: none;
  width: 824px;
  margin-left: 0;
}
.table .span12 {
  float: none;
  width: 904px;
  margin-left: 0;
}
.table .span13 {
  float: none;
  width: 984px;
  margin-left: 0;
}
.table .span14 {
  float: none;
  width: 1064px;
  margin-left: 0;
}
.table .span15 {
  float: none;
  width: 1144px;
  margin-left: 0;
}
.table .span16 {
  float: none;
  width: 1224px;
  margin-left: 0;
}
.table .span17 {
  float: none;
  width: 1304px;
  margin-left: 0;
}
.table .span18 {
  float: none;
  width: 1384px;
  margin-left: 0;
}
.table .span19 {
  float: none;
  width: 1464px;
  margin-left: 0;
}
.table .span20 {
  float: none;
  width: 1544px;
  margin-left: 0;
}
.table .span21 {
  float: none;
  width: 1624px;
  margin-left: 0;
}
.table .span22 {
  float: none;
  width: 1704px;
  margin-left: 0;
}
.table .span23 {
  float: none;
  width: 1784px;
  margin-left: 0;
}
.table .span24 {
  float: none;
  width: 1864px;
  margin-left: 0;
}
.table tbody tr.success td {
  background-color: #dff0d8;
}
.table tbody tr.error td {
  background-color: #f2dede;
}
.table tbody tr.warning td {
  background-color: #fcf8e3;
}
.table tbody tr.info td {
  background-color: #d9edf7;
}
.table-hover tbody tr.success:hover td {
  background-color: #d0e9c6;
}
.table-hover tbody tr.error:hover td {
  background-color: #ebcccc;
}
.table-hover tbody tr.warning:hover td {
  background-color: #faf2cc;
}
.table-hover tbody tr.info:hover td {
  background-color: #c4e3f3;
}
form {
  margin: 0 0 18px;
}
fieldset {
  padding: 0;
  margin: 0;
  border: 0;
}
legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 18px;
  font-size: 19.5px;
  line-height: 36px;
  color: #333333;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
legend small {
  font-size: 13.5px;
  color: #999999;
}
label,
input,
button,
select,
textarea {
  font-size: 12px;
  font-weight: normal;
  line-height: 20px;
}
input,
button,
select,
textarea {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
label {
  display: block;
  margin-bottom: 5px;
}
select,
textarea,
input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"],
.uneditable-input {
  display: inline-block;
  height: 18px;
  padding: 4px 6px;
  margin-bottom: 9px;
  font-size: 12px;
  line-height: 20px;
  color: #555555;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}
input,
textarea,
.uneditable-input {
  width: 206px;
}
textarea {
  height: auto;
}
textarea,
input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"],
.uneditable-input {
  background-color: #ffffff;
  border: 1px solid #cccccc;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
  -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
  -o-transition: border linear 0.2s, box-shadow linear 0.2s;
  transition: border linear 0.2s, box-shadow linear 0.2s;
}
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus,
.uneditable-input:focus {
  border-color: rgba(82, 168, 236, 0.8);
  outline: 0;
  outline: thin dotted \9;
  /* IE6-9 */

  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
}
input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  *margin-top: 0;
  /* IE7 */

  margin-top: 1px \9;
  /* IE8-9 */

  line-height: normal;
  cursor: pointer;
}
input[type="file"],
input[type="image"],
input[type="submit"],
input[type="reset"],
input[type="button"],
input[type="radio"],
input[type="checkbox"] {
  width: auto;
}
select,
input[type="file"] {
  height: 30px;
  /* In IE7, the height of the select element cannot be changed by height, only font-size */

  *margin-top: 4px;
  /* For IE7, add top margin to align select with labels */

  line-height: 30px;
}
select {
  width: 220px;
  border: 1px solid #cccccc;
  background-color: #ffffff;
}
select[multiple],
select[size] {
  height: auto;
}
select:focus,
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.uneditable-input,
.uneditable-textarea {
  color: #999999;
  background-color: #fcfcfc;
  border-color: #cccccc;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.025);
  -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.025);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.025);
  cursor: not-allowed;
}
.uneditable-input {
  overflow: hidden;
  white-space: nowrap;
}
.uneditable-textarea {
  width: auto;
  height: auto;
}
input:-moz-placeholder,
textarea:-moz-placeholder {
  color: #999999;
}
input:-ms-input-placeholder,
textarea:-ms-input-placeholder {
  color: #999999;
}
input::-webkit-input-placeholder,
textarea::-webkit-input-placeholder {
  color: #999999;
}
.radio,
.checkbox {
  min-height: 18px;
  padding-left: 18px;
}
.radio input[type="radio"],
.checkbox input[type="checkbox"] {
  float: left;
  margin-left: -18px;
}
.controls > .radio:first-child,
.controls > .checkbox:first-child {
  padding-top: 5px;
}
.radio.inline,
.checkbox.inline {
  display: inline-block;
  padding-top: 5px;
  margin-bottom: 0;
  vertical-align: middle;
}
.radio.inline + .radio.inline,
.checkbox.inline + .checkbox.inline {
  margin-left: 10px;
}
.input-mini {
  width: 60px;
}
.input-small {
  width: 90px;
}
.input-medium {
  width: 150px;
}
.input-large {
  width: 210px;
}
.input-xlarge {
  width: 270px;
}
.input-xxlarge {
  width: 530px;
}
input[class*="span"],
select[class*="span"],
textarea[class*="span"],
.uneditable-input[class*="span"],
.row-fluid input[class*="span"],
.row-fluid select[class*="span"],
.row-fluid textarea[class*="span"],
.row-fluid .uneditable-input[class*="span"] {
  float: none;
  margin-left: 0;
}
.input-append input[class*="span"],
.input-append .uneditable-input[class*="span"],
.input-prepend input[class*="span"],
.input-prepend .uneditable-input[class*="span"],
.row-fluid input[class*="span"],
.row-fluid select[class*="span"],
.row-fluid textarea[class*="span"],
.row-fluid .uneditable-input[class*="span"],
.row-fluid .input-prepend [class*="span"],
.row-fluid .input-append [class*="span"] {
  display: inline-block;
}
input,
textarea,
.uneditable-input {
  margin-left: 0;
}
.controls-row [class*="span"] + [class*="span"] {
  margin-left: 40px;
}
input.span12,
textarea.span12,
.uneditable-input.span12 {
  width: 906px;
}
input.span11,
textarea.span11,
.uneditable-input.span11 {
  width: 826px;
}
input.span10,
textarea.span10,
.uneditable-input.span10 {
  width: 746px;
}
input.span9,
textarea.span9,
.uneditable-input.span9 {
  width: 666px;
}
input.span8,
textarea.span8,
.uneditable-input.span8 {
  width: 586px;
}
input.span7,
textarea.span7,
.uneditable-input.span7 {
  width: 506px;
}
input.span6,
textarea.span6,
.uneditable-input.span6 {
  width: 426px;
}
input.span5,
textarea.span5,
.uneditable-input.span5 {
  width: 346px;
}
input.span4,
textarea.span4,
.uneditable-input.span4 {
  width: 266px;
}
input.span3,
textarea.span3,
.uneditable-input.span3 {
  width: 186px;
}
input.span2,
textarea.span2,
.uneditable-input.span2 {
  width: 106px;
}
input.span1,
textarea.span1,
.uneditable-input.span1 {
  width: 26px;
}
.controls-row {
  *zoom: 1;
}
.controls-row:before,
.controls-row:after {
  display: table;
  content: "";
  line-height: 0;
}
.controls-row:after {
  clear: both;
}
.controls-row [class*="span"] {
  float: left;
}
input[disabled],
select[disabled],
textarea[disabled],
input[readonly],
select[readonly],
textarea[readonly] {
  cursor: not-allowed;
  background-color: #eeeeee;
}
input[type="radio"][disabled],
input[type="checkbox"][disabled],
input[type="radio"][readonly],
input[type="checkbox"][readonly] {
  background-color: transparent;
}
.control-group.warning > label,
.control-group.warning .help-block,
.control-group.warning .help-inline {
  color: #c09853;
}
.control-group.warning .checkbox,
.control-group.warning .radio,
.control-group.warning input,
.control-group.warning select,
.control-group.warning textarea {
  color: #c09853;
}
.control-group.warning input,
.control-group.warning select,
.control-group.warning textarea {
  border-color: #c09853;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.control-group.warning input:focus,
.control-group.warning select:focus,
.control-group.warning textarea:focus {
  border-color: #a47e3c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #dbc59e;
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #dbc59e;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #dbc59e;
}
.control-group.warning .input-prepend .add-on,
.control-group.warning .input-append .add-on {
  color: #c09853;
  background-color: #fcf8e3;
  border-color: #c09853;
}
.control-group.error > label,
.control-group.error .help-block,
.control-group.error .help-inline {
  color: #b94a48;
}
.control-group.error .checkbox,
.control-group.error .radio,
.control-group.error input,
.control-group.error select,
.control-group.error textarea {
  color: #b94a48;
}
.control-group.error input,
.control-group.error select,
.control-group.error textarea {
  border-color: #b94a48;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.control-group.error input:focus,
.control-group.error select:focus,
.control-group.error textarea:focus {
  border-color: #953b39;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #d59392;
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #d59392;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #d59392;
}
.control-group.error .input-prepend .add-on,
.control-group.error .input-append .add-on {
  color: #b94a48;
  background-color: #f2dede;
  border-color: #b94a48;
}
.control-group.success > label,
.control-group.success .help-block,
.control-group.success .help-inline {
  color: #468847;
}
.control-group.success .checkbox,
.control-group.success .radio,
.control-group.success input,
.control-group.success select,
.control-group.success textarea {
  color: #468847;
}
.control-group.success input,
.control-group.success select,
.control-group.success textarea {
  border-color: #468847;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.control-group.success input:focus,
.control-group.success select:focus,
.control-group.success textarea:focus {
  border-color: #356635;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #7aba7b;
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #7aba7b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #7aba7b;
}
.control-group.success .input-prepend .add-on,
.control-group.success .input-append .add-on {
  color: #468847;
  background-color: #dff0d8;
  border-color: #468847;
}
.control-group.info > label,
.control-group.info .help-block,
.control-group.info .help-inline {
  color: #3a87ad;
}
.control-group.info .checkbox,
.control-group.info .radio,
.control-group.info input,
.control-group.info select,
.control-group.info textarea {
  color: #3a87ad;
}
.control-group.info input,
.control-group.info select,
.control-group.info textarea {
  border-color: #3a87ad;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.control-group.info input:focus,
.control-group.info select:focus,
.control-group.info textarea:focus {
  border-color: #2d6987;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #7ab5d3;
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #7ab5d3;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #7ab5d3;
}
.control-group.info .input-prepend .add-on,
.control-group.info .input-append .add-on {
  color: #3a87ad;
  background-color: #d9edf7;
  border-color: #3a87ad;
}
input:focus:required:invalid,
textarea:focus:required:invalid,
select:focus:required:invalid {
  color: #b94a48;
  border-color: #ee5f5b;
}
input:focus:required:invalid:focus,
textarea:focus:required:invalid:focus,
select:focus:required:invalid:focus {
  border-color: #e9322d;
  -webkit-box-shadow: 0 0 6px #f8b9b7;
  -moz-box-shadow: 0 0 6px #f8b9b7;
  box-shadow: 0 0 6px #f8b9b7;
}
.form-actions {
  padding: 17px 20px 18px;
  margin-top: 18px;
  margin-bottom: 18px;
  background-color: #f5f5f5;
  border-top: 1px solid #e5e5e5;
  *zoom: 1;
}
.form-actions:before,
.form-actions:after {
  display: table;
  content: "";
  line-height: 0;
}
.form-actions:after {
  clear: both;
}
.help-block,
.help-inline {
  color: #757d88;
}
.help-block {
  display: block;
  margin-bottom: 9px;
}
.help-inline {
  display: inline-block;
  *display: inline;
  /* IE7 inline-block hack */

  *zoom: 1;
  vertical-align: middle;
  padding-left: 5px;
}
.input-append,
.input-prepend {
  margin-bottom: 5px;
  font-size: 0;
  white-space: nowrap;
}
.input-append input,
.input-prepend input,
.input-append select,
.input-prepend select,
.input-append .uneditable-input,
.input-prepend .uneditable-input {
  position: relative;
  margin-bottom: 0;
  *margin-left: 0;
  font-size: 12px;
  vertical-align: top;
  -webkit-border-radius: 0 3px 3px 0;
  -moz-border-radius: 0 3px 3px 0;
  border-radius: 0 3px 3px 0;
}
.input-append input:focus,
.input-prepend input:focus,
.input-append select:focus,
.input-prepend select:focus,
.input-append .uneditable-input:focus,
.input-prepend .uneditable-input:focus {
  z-index: 2;
}
.input-append .add-on,
.input-prepend .add-on {
  display: inline-block;
  width: auto;
  height: 18px;
  min-width: 16px;
  padding: 4px 5px;
  font-size: 12px;
  font-weight: normal;
  line-height: 20px;
  text-align: center;
  text-shadow: 0 1px 0 #ffffff;
  background-color: #eeeeee;
  border: 1px solid #ccc;
}
.input-append .add-on,
.input-prepend .add-on,
.input-append .btn,
.input-prepend .btn {
  vertical-align: top;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.input-append .active,
.input-prepend .active {
  background-color: #a9dba9;
  border-color: #46a546;
}
.input-prepend .add-on,
.input-prepend .btn {
  margin-right: -1px;
}
.input-prepend .add-on:first-child,
.input-prepend .btn:first-child {
  -webkit-border-radius: 3px 0 0 3px;
  -moz-border-radius: 3px 0 0 3px;
  border-radius: 3px 0 0 3px;
}
.input-append input,
.input-append select,
.input-append .uneditable-input {
  -webkit-border-radius: 3px 0 0 3px;
  -moz-border-radius: 3px 0 0 3px;
  border-radius: 3px 0 0 3px;
}
.input-append .add-on,
.input-append .btn {
  margin-left: -1px;
}
.input-append .add-on:last-child,
.input-append .btn:last-child {
  -webkit-border-radius: 0 3px 3px 0;
  -moz-border-radius: 0 3px 3px 0;
  border-radius: 0 3px 3px 0;
}
.input-prepend.input-append input,
.input-prepend.input-append select,
.input-prepend.input-append .uneditable-input {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.input-prepend.input-append .add-on:first-child,
.input-prepend.input-append .btn:first-child {
  margin-right: -1px;
  -webkit-border-radius: 3px 0 0 3px;
  -moz-border-radius: 3px 0 0 3px;
  border-radius: 3px 0 0 3px;
}
.input-prepend.input-append .add-on:last-child,
.input-prepend.input-append .btn:last-child {
  margin-left: -1px;
  -webkit-border-radius: 0 3px 3px 0;
  -moz-border-radius: 0 3px 3px 0;
  border-radius: 0 3px 3px 0;
}
input.search-query {
  padding-right: 14px;
  padding-right: 4px \9;
  padding-left: 14px;
  padding-left: 4px \9;
  /* IE7-8 doesn't have border-radius, so don't indent the padding */

  margin-bottom: 0;
  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  border-radius: 15px;
}
/* Allow for input prepend/append in search forms */
.form-search .input-append .search-query,
.form-search .input-prepend .search-query {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.form-search .input-append .search-query {
  -webkit-border-radius: 14px 0 0 14px;
  -moz-border-radius: 14px 0 0 14px;
  border-radius: 14px 0 0 14px;
}
.form-search .input-append .btn {
  -webkit-border-radius: 0 14px 14px 0;
  -moz-border-radius: 0 14px 14px 0;
  border-radius: 0 14px 14px 0;
}
.form-search .input-prepend .search-query {
  -webkit-border-radius: 0 14px 14px 0;
  -moz-border-radius: 0 14px 14px 0;
  border-radius: 0 14px 14px 0;
}
.form-search .input-prepend .btn {
  -webkit-border-radius: 14px 0 0 14px;
  -moz-border-radius: 14px 0 0 14px;
  border-radius: 14px 0 0 14px;
}
.form-search input,
.form-inline input,
.form-horizontal input,
.form-search textarea,
.form-inline textarea,
.form-horizontal textarea,
.form-search select,
.form-inline select,
.form-horizontal select,
.form-search .help-inline,
.form-inline .help-inline,
.form-horizontal .help-inline,
.form-search .uneditable-input,
.form-inline .uneditable-input,
.form-horizontal .uneditable-input,
.form-search .input-prepend,
.form-inline .input-prepend,
.form-horizontal .input-prepend,
.form-search .input-append,
.form-inline .input-append,
.form-horizontal .input-append {
  display: inline-block;
  *display: inline;
  /* IE7 inline-block hack */

  *zoom: 1;
  margin-bottom: 0;
  vertical-align: middle;
}
.form-search .hide,
.form-inline .hide,
.form-horizontal .hide {
  display: none;
}
.form-search label,
.form-inline label,
.form-search .btn-group,
.form-inline .btn-group {
  display: inline-block;
}
.form-search .input-append,
.form-inline .input-append,
.form-search .input-prepend,
.form-inline .input-prepend {
  margin-bottom: 0;
}
.form-search .radio,
.form-search .checkbox,
.form-inline .radio,
.form-inline .checkbox {
  padding-left: 0;
  margin-bottom: 0;
  vertical-align: middle;
}
.form-search .radio input[type="radio"],
.form-search .checkbox input[type="checkbox"],
.form-inline .radio input[type="radio"],
.form-inline .checkbox input[type="checkbox"] {
  float: left;
  margin-right: 3px;
  margin-left: 0;
}
.control-group {
  margin-bottom: 9px;
}
legend + .control-group {
  margin-top: 18px;
  -webkit-margin-top-collapse: separate;
}
.form-horizontal .control-group {
  margin-bottom: 18px;
  *zoom: 1;
}
.form-horizontal .control-group:before,
.form-horizontal .control-group:after {
  display: table;
  content: "";
  line-height: 0;
}
.form-horizontal .control-group:after {
  clear: both;
}
.form-horizontal .control-label {
  float: left;
  width: 160px;
  padding-top: 5px;
  text-align: right;
}
.form-horizontal .controls {
  *display: inline-block;
  *padding-left: 20px;
  margin-left: 180px;
  *margin-left: 0;
}
.form-horizontal .controls:first-child {
  *padding-left: 180px;
}
.form-horizontal .help-block {
  margin-bottom: 0;
}
.form-horizontal input + .help-block,
.form-horizontal select + .help-block,
.form-horizontal textarea + .help-block {
  margin-top: 9px;
}
.form-horizontal .form-actions {
  padding-left: 180px;
}
.btn {
  display: inline-block;
  *display: inline;
  /* IE7 inline-block hack */

  *zoom: 1;
  padding: 4px 14px;
  margin-bottom: 0;
  font-size: 12px;
  line-height: 20px;
  *line-height: 20px;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  color: #333333;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
  background-color: #f5f5f5;
  background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
  border-color: #e6e6e6 #e6e6e6 #bfbfbf;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  *background-color: #e6e6e6;
  /* Darken IE7 buttons by default so they stand out more given they won't have borders */

  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
  border: 1px solid #bbbbbb;
  *border: 0;
  border-bottom-color: #a2a2a2;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  *margin-left: .3em;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}
.btn:hover,
.btn:active,
.btn.active,
.btn.disabled,
.btn[disabled] {
  color: #333333;
  background-color: #e6e6e6;
  *background-color: #d9d9d9;
}
.btn:active,
.btn.active {
  background-color: #cccccc \9;
}
.btn:first-child {
  *margin-left: 0;
}
.btn:hover {
  color: #333333;
  text-decoration: none;
  background-color: #e6e6e6;
  *background-color: #d9d9d9;
  /* Buttons in IE7 don't get borders, so darken on hover */

  background-position: 0 -15px;
  -webkit-transition: background-position 0.1s linear;
  -moz-transition: background-position 0.1s linear;
  -o-transition: background-position 0.1s linear;
  transition: background-position 0.1s linear;
}
.btn:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn.active,
.btn:active {
  background-color: #e6e6e6;
  background-color: #d9d9d9 \9;
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
}
.btn.disabled,
.btn[disabled] {
  cursor: default;
  background-color: #e6e6e6;
  background-image: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}
.btn-large {
  padding: 9px 14px;
  font-size: 15px;
  line-height: normal;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
.btn-large [class^="icon-"] {
  margin-top: 2px;
}
.btn-small {
  padding: 3px 9px;
  font-size: 11px;
  line-height: 16px;
}
.btn-small [class^="icon-"] {
  margin-top: 0;
}
.btn-mini {
  padding: 2px 6px;
  font-size: 10px;
  line-height: 15px;
}
.btn-block {
  display: block;
  width: 100%;
  padding-left: 0;
  padding-right: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.btn-block + .btn-block {
  margin-top: 5px;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}
.btn-primary.active,
.btn-warning.active,
.btn-danger.active,
.btn-success.active,
.btn-info.active,
.btn-inverse.active {
  color: rgba(255, 255, 255, 0.75);
}
.btn {
  border-color: #c5c5c5;
  border-color: rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.25);
}
.btn-primary {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #006dcc;
  *background-color: #0044cc;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
  background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
  background-image: -o-linear-gradient(top, #0088cc, #0044cc);
  background-image: linear-gradient(to bottom, #0088cc, #0044cc);
  background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
  background-repeat: repeat-x;
  border-color: #0044cc #0044cc #002a80;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0);
  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}
.btn-primary:hover,
.btn-primary:active,
.btn-primary.active,
.btn-primary.disabled,
.btn-primary[disabled] {
  color: #ffffff;
  background-color: #0044cc;
  *background-color: #003bb3;
}
.btn-primary:active,
.btn-primary.active {
  background-color: #003399 \9;
}
.btn-warning {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #faa732;
  background-image: -moz-linear-gradient(top, #fbb450, #f89406);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fbb450), to(#f89406));
  background-image: -webkit-linear-gradient(top, #fbb450, #f89406);
  background-image: -o-linear-gradient(top, #fbb450, #f89406);
  background-image: linear-gradient(to bottom, #fbb450, #f89406);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#fffbb450', endColorstr='#fff89406', GradientType=0);
  border-color: #f89406 #f89406 #ad6704;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  *background-color: #f89406;
  /* Darken IE7 buttons by default so they stand out more given they won't have borders */

  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}
.btn-warning:hover,
.btn-warning:active,
.btn-warning.active,
.btn-warning.disabled,
.btn-warning[disabled] {
  color: #ffffff;
  background-color: #f89406;
  *background-color: #df8505;
}
.btn-warning:active,
.btn-warning.active {
  background-color: #c67605 \9;
}
.btn-danger {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #da4f49;
  background-image: -moz-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#bd362f));
  background-image: -webkit-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: -o-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: linear-gradient(to bottom, #ee5f5b, #bd362f);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ffee5f5b', endColorstr='#ffbd362f', GradientType=0);
  border-color: #bd362f #bd362f #802420;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  *background-color: #bd362f;
  /* Darken IE7 buttons by default so they stand out more given they won't have borders */

  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}
.btn-danger:hover,
.btn-danger:active,
.btn-danger.active,
.btn-danger.disabled,
.btn-danger[disabled] {
  color: #ffffff;
  background-color: #bd362f;
  *background-color: #a9302a;
}
.btn-danger:active,
.btn-danger.active {
  background-color: #942a25 \9;
}
.btn-success {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #5bb75b;
  background-image: -moz-linear-gradient(top, #62c462, #51a351);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#62c462), to(#51a351));
  background-image: -webkit-linear-gradient(top, #62c462, #51a351);
  background-image: -o-linear-gradient(top, #62c462, #51a351);
  background-image: linear-gradient(to bottom, #62c462, #51a351);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ff62c462', endColorstr='#ff51a351', GradientType=0);
  border-color: #51a351 #51a351 #387038;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  *background-color: #51a351;
  /* Darken IE7 buttons by default so they stand out more given they won't have borders */

  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}
.btn-success:hover,
.btn-success:active,
.btn-success.active,
.btn-success.disabled,
.btn-success[disabled] {
  color: #ffffff;
  background-color: #51a351;
  *background-color: #499249;
}
.btn-success:active,
.btn-success.active {
  background-color: #408140 \9;
}
.btn-info {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #49afcd;
  background-image: -moz-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#2f96b4));
  background-image: -webkit-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: -o-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: linear-gradient(to bottom, #5bc0de, #2f96b4);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2f96b4', GradientType=0);
  border-color: #2f96b4 #2f96b4 #1f6377;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  *background-color: #2f96b4;
  /* Darken IE7 buttons by default so they stand out more given they won't have borders */

  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}
.btn-info:hover,
.btn-info:active,
.btn-info.active,
.btn-info.disabled,
.btn-info[disabled] {
  color: #ffffff;
  background-color: #2f96b4;
  *background-color: #2a85a0;
}
.btn-info:active,
.btn-info.active {
  background-color: #24748c \9;
}
.btn-inverse {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #363636;
  background-image: -moz-linear-gradient(top, #444444, #222222);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#444444), to(#222222));
  background-image: -webkit-linear-gradient(top, #444444, #222222);
  background-image: -o-linear-gradient(top, #444444, #222222);
  background-image: linear-gradient(to bottom, #444444, #222222);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ff444444', endColorstr='#ff222222', GradientType=0);
  border-color: #222222 #222222 #000000;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  *background-color: #222222;
  /* Darken IE7 buttons by default so they stand out more given they won't have borders */

  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}
.btn-inverse:hover,
.btn-inverse:active,
.btn-inverse.active,
.btn-inverse.disabled,
.btn-inverse[disabled] {
  color: #ffffff;
  background-color: #222222;
  *background-color: #151515;
}
.btn-inverse:active,
.btn-inverse.active {
  background-color: #080808 \9;
}
button.btn,
input[type="submit"].btn {
  *padding-top: 3px;
  *padding-bottom: 3px;
}
button.btn::-moz-focus-inner,
input[type="submit"].btn::-moz-focus-inner {
  padding: 0;
  border: 0;
}
button.btn.btn-large,
input[type="submit"].btn.btn-large {
  *padding-top: 7px;
  *padding-bottom: 7px;
}
button.btn.btn-small,
input[type="submit"].btn.btn-small {
  *padding-top: 3px;
  *padding-bottom: 3px;
}
button.btn.btn-mini,
input[type="submit"].btn.btn-mini {
  *padding-top: 1px;
  *padding-bottom: 1px;
}
.btn-link,
.btn-link:active,
.btn-link[disabled] {
  background-color: transparent;
  background-image: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}
.btn-link {
  border-color: transparent;
  cursor: pointer;
  color: #ea4c89;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.btn-link:hover {
  color: #d11960;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:hover {
  color: #333333;
  text-decoration: none;
}
.btn-group {
  position: relative;
  font-size: 0;
  vertical-align: middle;
  white-space: nowrap;
  *margin-left: .3em;
}
.btn-group:first-child {
  *margin-left: 0;
}
.btn-group + .btn-group {
  margin-left: 5px;
}
.btn-toolbar {
  font-size: 0;
  margin-top: 9px;
  margin-bottom: 9px;
}
.btn-toolbar .btn-group {
  display: inline-block;
  *display: inline;
  /* IE7 inline-block hack */

  *zoom: 1;
}
.btn-toolbar .btn + .btn,
.btn-toolbar .btn-group + .btn,
.btn-toolbar .btn + .btn-group {
  margin-left: 5px;
}
.btn-group > .btn {
  position: relative;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.btn-group > .btn + .btn {
  margin-left: -1px;
}
.btn-group > .btn,
.btn-group > .dropdown-menu {
  font-size: 12px;
}
.btn-group > .btn-mini {
  font-size: 11px;
}
.btn-group > .btn-small {
  font-size: 12px;
}
.btn-group > .btn-large {
  font-size: 16px;
}
.btn-group > .btn:first-child {
  margin-left: 0;
  -webkit-border-top-left-radius: 4px;
  -moz-border-radius-topleft: 4px;
  border-top-left-radius: 4px;
  -webkit-border-bottom-left-radius: 4px;
  -moz-border-radius-bottomleft: 4px;
  border-bottom-left-radius: 4px;
}
.btn-group > .btn:last-child,
.btn-group > .dropdown-toggle {
  -webkit-border-top-right-radius: 4px;
  -moz-border-radius-topright: 4px;
  border-top-right-radius: 4px;
  -webkit-border-bottom-right-radius: 4px;
  -moz-border-radius-bottomright: 4px;
  border-bottom-right-radius: 4px;
}
.btn-group > .btn.large:first-child {
  margin-left: 0;
  -webkit-border-top-left-radius: 6px;
  -moz-border-radius-topleft: 6px;
  border-top-left-radius: 6px;
  -webkit-border-bottom-left-radius: 6px;
  -moz-border-radius-bottomleft: 6px;
  border-bottom-left-radius: 6px;
}
.btn-group > .btn.large:last-child,
.btn-group > .large.dropdown-toggle {
  -webkit-border-top-right-radius: 6px;
  -moz-border-radius-topright: 6px;
  border-top-right-radius: 6px;
  -webkit-border-bottom-right-radius: 6px;
  -moz-border-radius-bottomright: 6px;
  border-bottom-right-radius: 6px;
}
.btn-group > .btn:hover,
.btn-group > .btn:focus,
.btn-group > .btn:active,
.btn-group > .btn.active {
  z-index: 2;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
  padding-left: 8px;
  padding-right: 8px;
  -webkit-box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  *padding-top: 5px;
  *padding-bottom: 5px;
}
.btn-group > .btn-mini + .dropdown-toggle {
  padding-left: 5px;
  padding-right: 5px;
  *padding-top: 2px;
  *padding-bottom: 2px;
}
.btn-group > .btn-small + .dropdown-toggle {
  *padding-top: 5px;
  *padding-bottom: 4px;
}
.btn-group > .btn-large + .dropdown-toggle {
  padding-left: 12px;
  padding-right: 12px;
  *padding-top: 7px;
  *padding-bottom: 7px;
}
.btn-group.open .dropdown-toggle {
  background-image: none;
  -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
}
.btn-group.open .btn.dropdown-toggle {
  background-color: #e6e6e6;
}
.btn-group.open .btn-primary.dropdown-toggle {
  background-color: #ea4c54;
}
.btn-group.open .btn-warning.dropdown-toggle {
  background-color: #f89406;
}
.btn-group.open .btn-danger.dropdown-toggle {
  background-color: #bd362f;
}
.btn-group.open .btn-success.dropdown-toggle {
  background-color: #51a351;
}
.btn-group.open .btn-info.dropdown-toggle {
  background-color: #2f96b4;
}
.btn-group.open .btn-inverse.dropdown-toggle {
  background-color: #222222;
}
.btn .caret {
  margin-top: 8px;
  margin-left: 0;
}
.btn-mini .caret,
.btn-small .caret,
.btn-large .caret {
  margin-top: 6px;
}
.btn-large .caret {
  border-left-width: 5px;
  border-right-width: 5px;
  border-top-width: 5px;
}
.dropup .btn-large .caret {
  border-bottom: 5px solid #000000;
  border-top: 0;
}
.btn-primary .caret,
.btn-warning .caret,
.btn-danger .caret,
.btn-info .caret,
.btn-success .caret,
.btn-inverse .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
}
.btn-group-vertical {
  display: inline-block;
  *display: inline;
  /* IE7 inline-block hack */

  *zoom: 1;
}
.btn-group-vertical .btn {
  display: block;
  float: none;
  width: 100%;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.btn-group-vertical .btn + .btn {
  margin-left: 0;
  margin-top: -1px;
}
.btn-group-vertical .btn:first-child {
  -webkit-border-radius: 4px 4px 0 0;
  -moz-border-radius: 4px 4px 0 0;
  border-radius: 4px 4px 0 0;
}
.btn-group-vertical .btn:last-child {
  -webkit-border-radius: 0 0 4px 4px;
  -moz-border-radius: 0 0 4px 4px;
  border-radius: 0 0 4px 4px;
}
.btn-group-vertical .btn-large:first-child {
  -webkit-border-radius: 6px 6px 0 0;
  -moz-border-radius: 6px 6px 0 0;
  border-radius: 6px 6px 0 0;
}
.btn-group-vertical .btn-large:last-child {
  -webkit-border-radius: 0 0 6px 6px;
  -moz-border-radius: 0 0 6px 6px;
  border-radius: 0 0 6px 6px;
}
.nav {
  margin-left: 0;
  margin-bottom: 18px;
  list-style: none;
}
.nav > li > a {
  display: block;
}
.nav > li > a:hover {
  text-decoration: none;
  background-color: #eeeeee;
}
.nav > .pull-right {
  float: right;
}
.nav-header {
  display: block;
  padding: 3px 15px;
  font-size: 11px;
  font-weight: bold;
  line-height: 20px;
  color: #999999;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  text-transform: uppercase;
}
.nav li + .nav-header {
  margin-top: 9px;
}
.nav-list {
  padding-left: 15px;
  padding-right: 15px;
  margin-bottom: 0;
}
.nav-list > li > a,
.nav-list .nav-header {
  margin-left: -15px;
  margin-right: -15px;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
}
.nav-list > li > a {
  padding: 3px 15px;
}
.nav-list > .active > a,
.nav-list > .active > a:hover {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);
  background-color: #ea4c89;
}
.nav-list [class^="icon-"] {
  margin-right: 2px;
}
.nav-list .divider {
  *width: 100%;
  height: 1px;
  margin: 8px 1px;
  *margin: -5px 0 5px;
  overflow: hidden;
  background-color: #e5e5e5;
  border-bottom: 1px solid #ffffff;
}
.nav-tabs,
.nav-pills {
  *zoom: 1;
}
.nav-tabs:before,
.nav-pills:before,
.nav-tabs:after,
.nav-pills:after {
  display: table;
  content: "";
  line-height: 0;
}
.nav-tabs:after,
.nav-pills:after {
  clear: both;
}
.nav-tabs > li,
.nav-pills > li {
  float: left;
}
.nav-tabs > li > a,
.nav-pills > li > a {
  padding-right: 12px;
  padding-left: 12px;
  margin-right: 2px;
  line-height: 14px;
}
.nav-tabs {
  border-bottom: 1px solid #ddd;
}
.nav-tabs > li {
  margin-bottom: -1px;
}
.nav-tabs > li > a {
  padding-top: 8px;
  padding-bottom: 8px;
  line-height: 20px;
  border: 1px solid transparent;
  -webkit-border-radius: 4px 4px 0 0;
  -moz-border-radius: 4px 4px 0 0;
  border-radius: 4px 4px 0 0;
}
.nav-tabs > li > a:hover {
  border-color: #eeeeee #eeeeee #dddddd;
}
.nav-tabs > .active > a,
.nav-tabs > .active > a:hover {
  color: #555555;
  background-color: #ffffff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
  cursor: default;
}
.nav-pills > li > a {
  padding-top: 8px;
  padding-bottom: 8px;
  margin-top: 2px;
  margin-bottom: 2px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
.nav-pills > .active > a,
.nav-pills > .active > a:hover {
  color: #ffffff;
  background-color: #ea4c89;
}
.nav-stacked > li {
  float: none;
}
.nav-stacked > li > a {
  margin-right: 0;
}
.nav-tabs.nav-stacked {
  border-bottom: 0;
}
.nav-tabs.nav-stacked > li > a {
  border: 1px solid #ddd;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.nav-tabs.nav-stacked > li:first-child > a {
  -webkit-border-top-right-radius: 4px;
  -moz-border-radius-topright: 4px;
  border-top-right-radius: 4px;
  -webkit-border-top-left-radius: 4px;
  -moz-border-radius-topleft: 4px;
  border-top-left-radius: 4px;
}
.nav-tabs.nav-stacked > li:last-child > a {
  -webkit-border-bottom-right-radius: 4px;
  -moz-border-radius-bottomright: 4px;
  border-bottom-right-radius: 4px;
  -webkit-border-bottom-left-radius: 4px;
  -moz-border-radius-bottomleft: 4px;
  border-bottom-left-radius: 4px;
}
.nav-tabs.nav-stacked > li > a:hover {
  border-color: #ddd;
  z-index: 2;
}
.nav-pills.nav-stacked > li > a {
  margin-bottom: 3px;
}
.nav-pills.nav-stacked > li:last-child > a {
  margin-bottom: 1px;
}
.nav-tabs .dropdown-menu {
  -webkit-border-radius: 0 0 6px 6px;
  -moz-border-radius: 0 0 6px 6px;
  border-radius: 0 0 6px 6px;
}
.nav-pills .dropdown-menu {
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
}
.nav .dropdown-toggle .caret {
  border-top-color: #ea4c89;
  border-bottom-color: #ea4c89;
  margin-top: 6px;
}
.nav .dropdown-toggle:hover .caret {
  border-top-color: #d11960;
  border-bottom-color: #d11960;
}
/* move down carets for tabs */
.nav-tabs .dropdown-toggle .caret {
  margin-top: 8px;
}
.nav .active .dropdown-toggle .caret {
  border-top-color: #fff;
  border-bottom-color: #fff;
}
.nav-tabs .active .dropdown-toggle .caret {
  border-top-color: #555555;
  border-bottom-color: #555555;
}
.nav > .dropdown.active > a:hover {
  cursor: pointer;
}
.nav-tabs .open .dropdown-toggle,
.nav-pills .open .dropdown-toggle,
.nav > li.dropdown.open.active > a:hover {
  color: #ffffff;
  background-color: #999999;
  border-color: #999999;
}
.nav li.dropdown.open .caret,
.nav li.dropdown.open.active .caret,
.nav li.dropdown.open a:hover .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
  opacity: 1;
  filter: alpha(opacity=100);
}
.tabs-stacked .open > a:hover {
  border-color: #999999;
}
.tabbable {
  *zoom: 1;
}
.tabbable:before,
.tabbable:after {
  display: table;
  content: "";
  line-height: 0;
}
.tabbable:after {
  clear: both;
}
.tab-content {
  overflow: auto;
}
.tabs-below > .nav-tabs,
.tabs-right > .nav-tabs,
.tabs-left > .nav-tabs {
  border-bottom: 0;
}
.tab-content > .tab-pane,
.pill-content > .pill-pane {
  display: none;
}
.tab-content > .active,
.pill-content > .active {
  display: block;
}
.tabs-below > .nav-tabs {
  border-top: 1px solid #ddd;
}
.tabs-below > .nav-tabs > li {
  margin-top: -1px;
  margin-bottom: 0;
}
.tabs-below > .nav-tabs > li > a {
  -webkit-border-radius: 0 0 4px 4px;
  -moz-border-radius: 0 0 4px 4px;
  border-radius: 0 0 4px 4px;
}
.tabs-below > .nav-tabs > li > a:hover {
  border-bottom-color: transparent;
  border-top-color: #ddd;
}
.tabs-below > .nav-tabs > .active > a,
.tabs-below > .nav-tabs > .active > a:hover {
  border-color: transparent #ddd #ddd #ddd;
}
.tabs-left > .nav-tabs > li,
.tabs-right > .nav-tabs > li {
  float: none;
}
.tabs-left > .nav-tabs > li > a,
.tabs-right > .nav-tabs > li > a {
  min-width: 74px;
  margin-right: 0;
  margin-bottom: 3px;
}
.tabs-left > .nav-tabs {
  float: left;
  margin-right: 19px;
  border-right: 1px solid #ddd;
}
.tabs-left > .nav-tabs > li > a {
  margin-right: -1px;
  -webkit-border-radius: 4px 0 0 4px;
  -moz-border-radius: 4px 0 0 4px;
  border-radius: 4px 0 0 4px;
}
.tabs-left > .nav-tabs > li > a:hover {
  border-color: #eeeeee #dddddd #eeeeee #eeeeee;
}
.tabs-left > .nav-tabs .active > a,
.tabs-left > .nav-tabs .active > a:hover {
  border-color: #ddd transparent #ddd #ddd;
  *border-right-color: #ffffff;
}
.tabs-right > .nav-tabs {
  float: right;
  margin-left: 19px;
  border-left: 1px solid #ddd;
}
.tabs-right > .nav-tabs > li > a {
  margin-left: -1px;
  -webkit-border-radius: 0 4px 4px 0;
  -moz-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
}
.tabs-right > .nav-tabs > li > a:hover {
  border-color: #eeeeee #eeeeee #eeeeee #dddddd;
}
.tabs-right > .nav-tabs .active > a,
.tabs-right > .nav-tabs .active > a:hover {
  border-color: #ddd #ddd #ddd transparent;
  *border-left-color: #ffffff;
}
.nav > .disabled > a {
  color: #999999;
}
.nav > .disabled > a:hover {
  text-decoration: none;
  background-color: transparent;
  cursor: default;
}
.navbar {
  overflow: visible;
  margin-bottom: 18px;
  color: #777777;
  *position: relative;
  *z-index: 2;
}
.navbar-inner {
  min-height: 40px;
  padding-left: 20px;
  padding-right: 20px;
  background-color: #fafafa;
  background-image: -moz-linear-gradient(top, #ffffff, #f2f2f2);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#f2f2f2));
  background-image: -webkit-linear-gradient(top, #ffffff, #f2f2f2);
  background-image: -o-linear-gradient(top, #ffffff, #f2f2f2);
  background-image: linear-gradient(to bottom, #ffffff, #f2f2f2);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ffffffff', endColorstr='#fff2f2f2', GradientType=0);
  border: 1px solid #d4d4d4;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.065);
  -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.065);
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.065);
  *zoom: 1;
}
.navbar-inner:before,
.navbar-inner:after {
  display: table;
  content: "";
  line-height: 0;
}
.navbar-inner:after {
  clear: both;
}
.navbar .container {
  width: auto;
}
.nav-collapse.collapse {
  height: auto;
}
.navbar .brand {
  float: left;
  display: block;
  padding: 11px 20px 11px;
  margin-left: -20px;
  font-size: 20px;
  font-weight: 200;
  color: #777777;
  text-shadow: 0 1px 0 #ffffff;
}
.navbar .brand:hover {
  text-decoration: none;
}
.navbar-text {
  margin-bottom: 0;
  line-height: 40px;
}
.navbar-link {
  color: #777777;
}
.navbar-link:hover {
  color: #333333;
}
.navbar .divider-vertical {
  height: 40px;
  margin: 0 9px;
  border-left: 1px solid #f2f2f2;
  border-right: 1px solid #ffffff;
}
.navbar .btn,
.navbar .btn-group {
  margin-top: 5px;
}
.navbar .btn-group .btn,
.navbar .input-prepend .btn,
.navbar .input-append .btn {
  margin-top: 0;
}
.navbar-form {
  margin-bottom: 0;
  *zoom: 1;
}
.navbar-form:before,
.navbar-form:after {
  display: table;
  content: "";
  line-height: 0;
}
.navbar-form:after {
  clear: both;
}
.navbar-form input,
.navbar-form select,
.navbar-form .radio,
.navbar-form .checkbox {
  margin-top: 5px;
}
.navbar-form input,
.navbar-form select,
.navbar-form .btn {
  display: inline-block;
  margin-bottom: 0;
}
.navbar-form input[type="image"],
.navbar-form input[type="checkbox"],
.navbar-form input[type="radio"] {
  margin-top: 3px;
}
.navbar-form .input-append,
.navbar-form .input-prepend {
  margin-top: 6px;
  white-space: nowrap;
}
.navbar-form .input-append input,
.navbar-form .input-prepend input {
  margin-top: 0;
}
.navbar-search {
  position: relative;
  float: left;
  margin-top: 5px;
  margin-bottom: 0;
}
.navbar-search .search-query {
  margin-bottom: 0;
  padding: 4px 14px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-weight: normal;
  line-height: 1;
  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  border-radius: 15px;
}
.navbar-static-top {
  position: static;
  width: 100%;
  margin-bottom: 0;
}
.navbar-static-top .navbar-inner {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
  margin-bottom: 0;
}
.navbar-fixed-top .navbar-inner,
.navbar-static-top .navbar-inner {
  border-width: 0 0 1px;
}
.navbar-fixed-bottom .navbar-inner {
  border-width: 1px 0 0;
}
.navbar-fixed-top .navbar-inner,
.navbar-fixed-bottom .navbar-inner {
  padding-left: 0;
  padding-right: 0;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.navbar-static-top .container,
.navbar-fixed-top .container,
.navbar-fixed-bottom .container {
  width: 920px;
}
.navbar-fixed-top {
  top: 0;
}
.navbar-fixed-top .navbar-inner,
.navbar-static-top .navbar-inner {
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.1), 0 1px 10px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.1), 0 1px 10px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.1), 0 1px 10px rgba(0, 0, 0, 0.1);
}
.navbar-fixed-bottom {
  bottom: 0;
}
.navbar-fixed-bottom .navbar-inner {
  -webkit-box-shadow: inset 0 1px 0 rgba(0, 0, 0, 0.1), 0 -1px 10px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: inset 0 1px 0 rgba(0, 0, 0, 0.1), 0 -1px 10px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 0 rgba(0, 0, 0, 0.1), 0 -1px 10px rgba(0, 0, 0, 0.1);
}
.navbar .nav {
  position: relative;
  left: 0;
  display: block;
  float: left;
  margin: 0 10px 0 0;
}
.navbar .nav.pull-right {
  float: right;
  margin-right: 0;
}
.navbar .nav > li {
  float: left;
}
.navbar .nav > li > a {
  float: none;
  padding: 11px 15px 11px;
  color: #777777;
  text-decoration: none;
  text-shadow: 0 1px 0 #ffffff;
}
.navbar .nav .dropdown-toggle .caret {
  margin-top: 8px;
}
.navbar .nav > li > a:focus,
.navbar .nav > li > a:hover {
  background-color: transparent;
  color: #333333;
  text-decoration: none;
}
.navbar .nav > .active > a,
.navbar .nav > .active > a:hover,
.navbar .nav > .active > a:focus {
  color: #555555;
  text-decoration: none;
  background-color: #e5e5e5;
  -webkit-box-shadow: inset 0 3px 8px rgba(0, 0, 0, 0.125);
  -moz-box-shadow: inset 0 3px 8px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 8px rgba(0, 0, 0, 0.125);
}
.navbar .btn-navbar {
  display: none;
  float: right;
  padding: 7px 10px;
  margin-left: 5px;
  margin-right: 5px;
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #ededed;
  background-image: -moz-linear-gradient(top, #f2f2f2, #e5e5e5);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f2f2f2), to(#e5e5e5));
  background-image: -webkit-linear-gradient(top, #f2f2f2, #e5e5e5);
  background-image: -o-linear-gradient(top, #f2f2f2, #e5e5e5);
  background-image: linear-gradient(to bottom, #f2f2f2, #e5e5e5);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#fff2f2f2', endColorstr='#ffe5e5e5', GradientType=0);
  border-color: #e5e5e5 #e5e5e5 #bfbfbf;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  *background-color: #e5e5e5;
  /* Darken IE7 buttons by default so they stand out more given they won't have borders */

  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.075);
  -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.075);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.075);
}
.navbar .btn-navbar:hover,
.navbar .btn-navbar:active,
.navbar .btn-navbar.active,
.navbar .btn-navbar.disabled,
.navbar .btn-navbar[disabled] {
  color: #ffffff;
  background-color: #e5e5e5;
  *background-color: #d9d9d9;
}
.navbar .btn-navbar:active,
.navbar .btn-navbar.active {
  background-color: #cccccc \9;
}
.navbar .btn-navbar .icon-bar {
  display: block;
  width: 18px;
  height: 2px;
  background-color: #f5f5f5;
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
  -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
  -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
}
.btn-navbar .icon-bar + .icon-bar {
  margin-top: 3px;
}
.navbar .nav > li > .dropdown-menu:before {
  content: '';
  display: inline-block;
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-bottom: 7px solid #ccc;
  border-bottom-color: rgba(0, 0, 0, 0.2);
  position: absolute;
  top: -7px;
  left: 9px;
}
.navbar .nav > li > .dropdown-menu:after {
  content: '';
  display: inline-block;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #ffffff;
  position: absolute;
  top: -6px;
  left: 10px;
}
.navbar-fixed-bottom .nav > li > .dropdown-menu:before {
  border-top: 7px solid #ccc;
  border-top-color: rgba(0, 0, 0, 0.2);
  border-bottom: 0;
  bottom: -7px;
  top: auto;
}
.navbar-fixed-bottom .nav > li > .dropdown-menu:after {
  border-top: 6px solid #ffffff;
  border-bottom: 0;
  bottom: -6px;
  top: auto;
}
.navbar .nav li.dropdown.open > .dropdown-toggle,
.navbar .nav li.dropdown.active > .dropdown-toggle,
.navbar .nav li.dropdown.open.active > .dropdown-toggle {
  background-color: #e5e5e5;
  color: #555555;
}
.navbar .nav li.dropdown > .dropdown-toggle .caret {
  border-top-color: #777777;
  border-bottom-color: #777777;
}
.navbar .nav li.dropdown.open > .dropdown-toggle .caret,
.navbar .nav li.dropdown.active > .dropdown-toggle .caret,
.navbar .nav li.dropdown.open.active > .dropdown-toggle .caret {
  border-top-color: #555555;
  border-bottom-color: #555555;
}
.navbar .pull-right > li > .dropdown-menu,
.navbar .nav > li > .dropdown-menu.pull-right {
  left: auto;
  right: 0;
}
.navbar .pull-right > li > .dropdown-menu:before,
.navbar .nav > li > .dropdown-menu.pull-right:before {
  left: auto;
  right: 12px;
}
.navbar .pull-right > li > .dropdown-menu:after,
.navbar .nav > li > .dropdown-menu.pull-right:after {
  left: auto;
  right: 13px;
}
.navbar .pull-right > li > .dropdown-menu .dropdown-menu,
.navbar .nav > li > .dropdown-menu.pull-right .dropdown-menu {
  left: auto;
  right: 100%;
  margin-left: 0;
  margin-right: -1px;
  -webkit-border-radius: 6px 0 6px 6px;
  -moz-border-radius: 6px 0 6px 6px;
  border-radius: 6px 0 6px 6px;
}
.navbar-inverse {
  color: #999999;
}
.navbar-inverse .navbar-inner {
  background-color: #1b1b1b;
  background-image: -moz-linear-gradient(top, #222222, #111111);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#222222), to(#111111));
  background-image: -webkit-linear-gradient(top, #222222, #111111);
  background-image: -o-linear-gradient(top, #222222, #111111);
  background-image: linear-gradient(to bottom, #222222, #111111);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ff222222', endColorstr='#ff111111', GradientType=0);
  border-color: #252525;
}
.navbar-inverse .brand,
.navbar-inverse .nav > li > a {
  color: #999999;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}
.navbar-inverse .brand:hover,
.navbar-inverse .nav > li > a:hover {
  color: #ffffff;
}
.navbar-inverse .nav > li > a:focus,
.navbar-inverse .nav > li > a:hover {
  background-color: transparent;
  color: #ffffff;
}
.navbar-inverse .nav .active > a,
.navbar-inverse .nav .active > a:hover,
.navbar-inverse .nav .active > a:focus {
  color: #ffffff;
  background-color: #111111;
}
.navbar-inverse .navbar-link {
  color: #999999;
}
.navbar-inverse .navbar-link:hover {
  color: #ffffff;
}
.navbar-inverse .divider-vertical {
  border-left-color: #111111;
  border-right-color: #222222;
}
.navbar-inverse .nav li.dropdown.open > .dropdown-toggle,
.navbar-inverse .nav li.dropdown.active > .dropdown-toggle,
.navbar-inverse .nav li.dropdown.open.active > .dropdown-toggle {
  background-color: #111111;
  color: #ffffff;
}
.navbar-inverse .nav li.dropdown > .dropdown-toggle .caret {
  border-top-color: #999999;
  border-bottom-color: #999999;
}
.navbar-inverse .nav li.dropdown.open > .dropdown-toggle .caret,
.navbar-inverse .nav li.dropdown.active > .dropdown-toggle .caret,
.navbar-inverse .nav li.dropdown.open.active > .dropdown-toggle .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
}
.navbar-inverse .navbar-search .search-query {
  color: #ffffff;
  background-color: #515151;
  border-color: #111111;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(255, 255, 255, 0.15);
  -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(255, 255, 255, 0.15);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(255, 255, 255, 0.15);
  -webkit-transition: none;
  -moz-transition: none;
  -o-transition: none;
  transition: none;
}
.navbar-inverse .navbar-search .search-query:-moz-placeholder {
  color: #cccccc;
}
.navbar-inverse .navbar-search .search-query:-ms-input-placeholder {
  color: #cccccc;
}
.navbar-inverse .navbar-search .search-query::-webkit-input-placeholder {
  color: #cccccc;
}
.navbar-inverse .navbar-search .search-query:focus,
.navbar-inverse .navbar-search .search-query.focused {
  padding: 5px 15px;
  color: #333333;
  text-shadow: 0 1px 0 #ffffff;
  background-color: #ffffff;
  border: 0;
  -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.15);
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.15);
  outline: 0;
}
.navbar-inverse .btn-navbar {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #0e0e0e;
  background-image: -moz-linear-gradient(top, #151515, #040404);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#151515), to(#040404));
  background-image: -webkit-linear-gradient(top, #151515, #040404);
  background-image: -o-linear-gradient(top, #151515, #040404);
  background-image: linear-gradient(to bottom, #151515, #040404);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ff151515', endColorstr='#ff040404', GradientType=0);
  border-color: #040404 #040404 #000000;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  *background-color: #040404;
  /* Darken IE7 buttons by default so they stand out more given they won't have borders */

  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}
.navbar-inverse .btn-navbar:hover,
.navbar-inverse .btn-navbar:active,
.navbar-inverse .btn-navbar.active,
.navbar-inverse .btn-navbar.disabled,
.navbar-inverse .btn-navbar[disabled] {
  color: #ffffff;
  background-color: #040404;
  *background-color: #000000;
}
.navbar-inverse .btn-navbar:active,
.navbar-inverse .btn-navbar.active {
  background-color: #000000 \9;
}
.breadcrumb {
  padding: 8px 15px;
  margin: 0 0 18px;
  list-style: none;
  background-color: #f5f5f5;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
.breadcrumb li {
  display: inline-block;
  *display: inline;
  /* IE7 inline-block hack */

  *zoom: 1;
  text-shadow: 0 1px 0 #ffffff;
}
.breadcrumb .divider {
  padding: 0 5px;
  color: #ccc;
}
.breadcrumb .active {
  color: #999999;
}
.pagination {
  height: 36px;
  margin: 18px 0;
}
.pagination ul {
  display: inline-block;
  *display: inline;
  /* IE7 inline-block hack */

  *zoom: 1;
  margin-left: 0;
  margin-bottom: 0;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
}
.pagination ul > li {
  display: inline;
}
.pagination ul > li > a,
.pagination ul > li > span {
  float: left;
  padding: 0 14px;
  line-height: 34px;
  text-decoration: none;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  border-left-width: 0;
}
.pagination ul > li > a:hover,
.pagination ul > .active > a,
.pagination ul > .active > span {
  background-color: #f5f5f5;
}
.pagination ul > .active > a,
.pagination ul > .active > span {
  color: #999999;
  cursor: default;
}
.pagination ul > .disabled > span,
.pagination ul > .disabled > a,
.pagination ul > .disabled > a:hover {
  color: #999999;
  background-color: transparent;
  cursor: default;
}
.pagination ul > li:first-child > a,
.pagination ul > li:first-child > span {
  border-left-width: 1px;
  -webkit-border-radius: 3px 0 0 3px;
  -moz-border-radius: 3px 0 0 3px;
  border-radius: 3px 0 0 3px;
}
.pagination ul > li:last-child > a,
.pagination ul > li:last-child > span {
  -webkit-border-radius: 0 3px 3px 0;
  -moz-border-radius: 0 3px 3px 0;
  border-radius: 0 3px 3px 0;
}
.pagination-centered {
  text-align: center;
}
.pagination-right {
  text-align: right;
}
.pager {
  margin: 18px 0;
  list-style: none;
  text-align: center;
  *zoom: 1;
}
.pager:before,
.pager:after {
  display: table;
  content: "";
  line-height: 0;
}
.pager:after {
  clear: both;
}
.pager li {
  display: inline;
}
.pager a,
.pager span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  border-radius: 15px;
}
.pager a:hover {
  text-decoration: none;
  background-color: #f5f5f5;
}
.pager .next a,
.pager .next span {
  float: right;
}
.pager .previous a {
  float: left;
}
.pager .disabled a,
.pager .disabled a:hover,
.pager .disabled span {
  color: #999999;
  background-color: #fff;
  cursor: default;
}
.thumbnails {
  margin-left: -40px;
  list-style: none;
  *zoom: 1;
}
.thumbnails:before,
.thumbnails:after {
  display: table;
  content: "";
  line-height: 0;
}
.thumbnails:after {
  clear: both;
}
.row-fluid .thumbnails {
  margin-left: 0;
}
.thumbnails > li {
  float: left;
  margin-bottom: 18px;
  margin-left: 40px;
}
.thumbnail {
  display: block;
  padding: 4px;
  line-height: 20px;
  border: 1px solid #ddd;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
a.thumbnail:hover {
  border-color: #ea4c89;
  -webkit-box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
  -moz-box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
  box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
}
.thumbnail > img {
  display: block;
  max-width: 100%;
  margin-left: auto;
  margin-right: auto;
}
.thumbnail .caption {
  padding: 9px;
  color: #555555;
}
.alert {
  padding: 8px 35px 8px 14px;
  margin-bottom: 18px;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  background-color: #fcf8e3;
  border: 1px solid #fbeed5;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  color: #c09853;
}
.alert h4 {
  margin: 0;
}
.alert .close {
  position: relative;
  top: -2px;
  right: -21px;
  line-height: 20px;
}
.alert-success {
  background-color: #dff0d8;
  border-color: #d6e9c6;
  color: #468847;
}
.alert-danger,
.alert-error {
  background-color: #f2dede;
  border-color: #eed3d7;
  color: #b94a48;
}
.alert-info {
  background-color: #d9edf7;
  border-color: #bce8f1;
  color: #3a87ad;
}
.alert-block {
  padding-top: 14px;
  padding-bottom: 14px;
}
.alert-block > p,
.alert-block > ul {
  margin-bottom: 0;
}
.alert-block p + p {
  margin-top: 5px;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@-moz-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@-ms-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@-o-keyframes progress-bar-stripes {
  from {
    background-position: 0 0;
  }
  to {
    background-position: 40px 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  overflow: hidden;
  height: 18px;
  margin-bottom: 18px;
  background-color: #f7f7f7;
  background-image: -moz-linear-gradient(top, #f5f5f5, #f9f9f9);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f5f5f5), to(#f9f9f9));
  background-image: -webkit-linear-gradient(top, #f5f5f5, #f9f9f9);
  background-image: -o-linear-gradient(top, #f5f5f5, #f9f9f9);
  background-image: linear-gradient(to bottom, #f5f5f5, #f9f9f9);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#fff9f9f9', GradientType=0);
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
.progress .bar {
  width: 0%;
  height: 100%;
  color: #ffffff;
  float: left;
  font-size: 12px;
  text-align: center;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #0e90d2;
  background-image: -moz-linear-gradient(top, #149bdf, #0480be);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#149bdf), to(#0480be));
  background-image: -webkit-linear-gradient(top, #149bdf, #0480be);
  background-image: -o-linear-gradient(top, #149bdf, #0480be);
  background-image: linear-gradient(to bottom, #149bdf, #0480be);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ff149bdf', endColorstr='#ff0480be', GradientType=0);
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -moz-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: width 0.6s ease;
  -moz-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease;
}
.progress .bar + .bar {
  -webkit-box-shadow: inset 1px 0 0 rgba(0, 0, 0, 0.15), inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -moz-box-shadow: inset 1px 0 0 rgba(0, 0, 0, 0.15), inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 1px 0 0 rgba(0, 0, 0, 0.15), inset 0 -1px 0 rgba(0, 0, 0, 0.15);
}
.progress-striped .bar {
  background-color: #149bdf;
  background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  -webkit-background-size: 40px 40px;
  -moz-background-size: 40px 40px;
  -o-background-size: 40px 40px;
  background-size: 40px 40px;
}
.progress.active .bar {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -moz-animation: progress-bar-stripes 2s linear infinite;
  -ms-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite;
}
.progress-danger .bar,
.progress .bar-danger {
  background-color: #dd514c;
  background-image: -moz-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#c43c35));
  background-image: -webkit-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: -o-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: linear-gradient(to bottom, #ee5f5b, #c43c35);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ffee5f5b', endColorstr='#ffc43c35', GradientType=0);
}
.progress-danger.progress-striped .bar,
.progress-striped .bar-danger {
  background-color: #ee5f5b;
  background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-success .bar,
.progress .bar-success {
  background-color: #5eb95e;
  background-image: -moz-linear-gradient(top, #62c462, #57a957);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#62c462), to(#57a957));
  background-image: -webkit-linear-gradient(top, #62c462, #57a957);
  background-image: -o-linear-gradient(top, #62c462, #57a957);
  background-image: linear-gradient(to bottom, #62c462, #57a957);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ff62c462', endColorstr='#ff57a957', GradientType=0);
}
.progress-success.progress-striped .bar,
.progress-striped .bar-success {
  background-color: #62c462;
  background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-info .bar,
.progress .bar-info {
  background-color: #4bb1cf;
  background-image: -moz-linear-gradient(top, #5bc0de, #339bb9);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#339bb9));
  background-image: -webkit-linear-gradient(top, #5bc0de, #339bb9);
  background-image: -o-linear-gradient(top, #5bc0de, #339bb9);
  background-image: linear-gradient(to bottom, #5bc0de, #339bb9);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff339bb9', GradientType=0);
}
.progress-info.progress-striped .bar,
.progress-striped .bar-info {
  background-color: #5bc0de;
  background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-warning .bar,
.progress .bar-warning {
  background-color: #faa732;
  background-image: -moz-linear-gradient(top, #fbb450, #f89406);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fbb450), to(#f89406));
  background-image: -webkit-linear-gradient(top, #fbb450, #f89406);
  background-image: -o-linear-gradient(top, #fbb450, #f89406);
  background-image: linear-gradient(to bottom, #fbb450, #f89406);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#fffbb450', endColorstr='#fff89406', GradientType=0);
}
.progress-warning.progress-striped .bar,
.progress-striped .bar-warning {
  background-color: #fbb450;
  background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.hero-unit {
  padding: 60px;
  margin-bottom: 30px;
  background-color: #eeeeee;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
}
.hero-unit h1 {
  margin-bottom: 0;
  font-size: 60px;
  line-height: 1;
  color: inherit;
  letter-spacing: -1px;
}
.hero-unit p {
  font-size: 18px;
  font-weight: 200;
  line-height: 27px;
  color: inherit;
}
.tooltip {
  position: absolute;
  z-index: 1030;
  display: block;
  visibility: visible;
  padding: 5px;
  font-size: 11px;
  opacity: 0;
  filter: alpha(opacity=0);
}
.tooltip.in {
  opacity: 0.8;
  filter: alpha(opacity=80);
}
.tooltip.top {
  margin-top: -3px;
}
.tooltip.right {
  margin-left: 3px;
}
.tooltip.bottom {
  margin-top: 3px;
}
.tooltip.left {
  margin-left: -3px;
}
.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #ffffff;
  text-align: center;
  text-decoration: none;
  background-color: #000000;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000000;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000000;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000000;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000000;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1010;
  display: none;
  width: 236px;
  padding: 1px;
  background-color: #ffffff;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.popover.top {
  margin-bottom: 10px;
}
.popover.right {
  margin-left: 10px;
}
.popover.bottom {
  margin-top: 10px;
}
.popover.left {
  margin-right: 10px;
}
.popover-title {
  margin: 0;
  padding: 8px 14px;
  font-size: 14px;
  font-weight: normal;
  line-height: 20px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  -webkit-border-radius: 5px 5px 0 0;
  -moz-border-radius: 5px 5px 0 0;
  border-radius: 5px 5px 0 0;
}
.popover-content {
  padding: 9px 14px;
}
.popover-content p,
.popover-content ul,
.popover-content ol {
  margin-bottom: 0;
}
.popover .arrow,
.popover .arrow:after {
  position: absolute;
  display: inline-block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover .arrow:after {
  content: "";
  z-index: -1;
}
.popover.top .arrow {
  bottom: -10px;
  left: 50%;
  margin-left: -10px;
  border-width: 10px 10px 0;
  border-top-color: #ffffff;
}
.popover.top .arrow:after {
  border-width: 11px 11px 0;
  border-top-color: rgba(0, 0, 0, 0.25);
  bottom: -1px;
  left: -11px;
}
.popover.right .arrow {
  top: 50%;
  left: -10px;
  margin-top: -10px;
  border-width: 10px 10px 10px 0;
  border-right-color: #ffffff;
}
.popover.right .arrow:after {
  border-width: 11px 11px 11px 0;
  border-right-color: rgba(0, 0, 0, 0.25);
  bottom: -11px;
  left: -1px;
}
.popover.bottom .arrow {
  top: -10px;
  left: 50%;
  margin-left: -10px;
  border-width: 0 10px 10px;
  border-bottom-color: #ffffff;
}
.popover.bottom .arrow:after {
  border-width: 0 11px 11px;
  border-bottom-color: rgba(0, 0, 0, 0.25);
  top: -1px;
  left: -11px;
}
.popover.left .arrow {
  top: 50%;
  right: -10px;
  margin-top: -10px;
  border-width: 10px 0 10px 10px;
  border-left-color: #ffffff;
}
.popover.left .arrow:after {
  border-width: 11px 0 11px 11px;
  border-left-color: rgba(0, 0, 0, 0.25);
  bottom: -11px;
  right: -1px;
}
.modal-open .modal .dropdown-menu {
  z-index: 2050;
}
.modal-open .modal .dropdown.open {
  *z-index: 2050;
}
.modal-open .modal .popover {
  z-index: 2060;
}
.modal-open .modal .tooltip {
  z-index: 2080;
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000000;
}
.modal-backdrop.fade {
  opacity: 0;
}
.modal-backdrop,
.modal-backdrop.fade.in {
  opacity: 0.8;
  filter: alpha(opacity=80);
}
.modal {
  position: fixed;
  top: 50%;
  left: 50%;
  z-index: 1050;
  overflow: auto;
  width: 560px;
  margin: -250px 0 0 -280px;
  background-color: #ffffff;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.3);
  *border: 1px solid #999;
  /* IE6-7 */

  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
  box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding-box;
  background-clip: padding-box;
}
.modal.fade {
  -webkit-transition: opacity 0.3s linear, top 0.3s ease-out;
  -moz-transition: opacity 0.3s linear, top 0.3s ease-out;
  -o-transition: opacity 0.3s linear, top 0.3s ease-out;
  transition: opacity 0.3s linear, top 0.3s ease-out;
  top: -25%;
}
.modal.fade.in {
  top: 50%;
}
.modal-header {
  padding: 9px 15px;
  border-bottom: 1px solid #eee;
}
.modal-header .close {
  margin-top: 2px;
}
.modal-header h3 {
  margin: 0;
  line-height: 30px;
}
.modal-body {
  overflow-y: auto;
  max-height: 400px;
  padding: 15px;
}
.modal-form {
  margin-bottom: 0;
}
.modal-footer {
  padding: 14px 15px 15px;
  margin-bottom: 0;
  text-align: right;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  -webkit-border-radius: 0 0 6px 6px;
  -moz-border-radius: 0 0 6px 6px;
  border-radius: 0 0 6px 6px;
  -webkit-box-shadow: inset 0 1px 0 #ffffff;
  -moz-box-shadow: inset 0 1px 0 #ffffff;
  box-shadow: inset 0 1px 0 #ffffff;
  *zoom: 1;
}
.modal-footer:before,
.modal-footer:after {
  display: table;
  content: "";
  line-height: 0;
}
.modal-footer:after {
  clear: both;
}
.modal-footer .btn + .btn {
  margin-left: 5px;
  margin-bottom: 0;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.dropup,
.dropdown {
  position: relative;
}
.dropdown-toggle {
  *margin-bottom: -3px;
}
.dropdown-toggle:active,
.open .dropdown-toggle {
  outline: 0;
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  vertical-align: top;
  border-top: 4px solid #000000;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
  content: "";
}
.dropdown .caret {
  margin-top: 8px;
  margin-left: 2px;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  background-color: #ffffff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  *border-right-width: 2px;
  *border-bottom-width: 2px;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
}
.dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.dropdown-menu .divider {
  *width: 100%;
  height: 1px;
  margin: 8px 1px;
  *margin: -5px 0 5px;
  overflow: hidden;
  background-color: #e5e5e5;
  border-bottom: 1px solid #ffffff;
}
.dropdown-menu a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 20px;
  color: #333333;
  white-space: nowrap;
}
.dropdown-menu li > a:hover,
.dropdown-menu li > a:focus,
.dropdown-submenu:hover > a {
  text-decoration: none;
  color: #ffffff;
  background-color: #ea4c89;
  background-color: #e94383;
  background-image: -moz-linear-gradient(top, #ea4c89, #e7357a);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ea4c89), to(#e7357a));
  background-image: -webkit-linear-gradient(top, #ea4c89, #e7357a);
  background-image: -o-linear-gradient(top, #ea4c89, #e7357a);
  background-image: linear-gradient(to bottom, #ea4c89, #e7357a);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ffea4c89', endColorstr='#ffe7357a', GradientType=0);
}
.dropdown-menu .active > a,
.dropdown-menu .active > a:hover {
  color: #ffffff;
  text-decoration: none;
  outline: 0;
  background-color: #ea4c89;
  background-color: #e94383;
  background-image: -moz-linear-gradient(top, #ea4c89, #e7357a);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ea4c89), to(#e7357a));
  background-image: -webkit-linear-gradient(top, #ea4c89, #e7357a);
  background-image: -o-linear-gradient(top, #ea4c89, #e7357a);
  background-image: linear-gradient(to bottom, #ea4c89, #e7357a);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ffea4c89', endColorstr='#ffe7357a', GradientType=0);
}
.dropdown-menu .disabled > a,
.dropdown-menu .disabled > a:hover {
  color: #999999;
}
.dropdown-menu .disabled > a:hover {
  text-decoration: none;
  background-color: transparent;
  cursor: default;
}
.open {
  *z-index: 1000;
}
.open > .dropdown-menu {
  display: block;
}
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  border-top: 0;
  border-bottom: 4px solid #000000;
  content: "";
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 1px;
}
.dropdown-submenu {
  position: relative;
}
.dropdown-submenu > .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -6px;
  margin-left: -1px;
  -webkit-border-radius: 0 6px 6px 6px;
  -moz-border-radius: 0 6px 6px 6px;
  border-radius: 0 6px 6px 6px;
}
.dropdown-submenu:hover > .dropdown-menu {
  display: block;
}
.dropdown-submenu > a:after {
  display: block;
  content: " ";
  float: right;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  border-left-color: #cccccc;
  margin-top: 5px;
  margin-right: -10px;
}
.dropdown-submenu:hover > a:after {
  border-left-color: #ffffff;
}
.dropdown .dropdown-menu .nav-header {
  padding-left: 20px;
  padding-right: 20px;
}
.typeahead {
  margin-top: 2px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
.accordion {
  margin-bottom: 18px;
}
.accordion-group {
  margin-bottom: 2px;
  border: 1px solid #e5e5e5;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
.accordion-heading {
  border-bottom: 0;
}
.accordion-heading .accordion-toggle {
  display: block;
  padding: 8px 15px;
}
.accordion-toggle {
  cursor: pointer;
}
.accordion-inner {
  padding: 9px 15px;
  border-top: 1px solid #e5e5e5;
}
.carousel {
  position: relative;
  margin-bottom: 18px;
  line-height: 1;
}
.carousel-inner {
  overflow: hidden;
  width: 100%;
  position: relative;
}
.carousel .item {
  display: none;
  position: relative;
  -webkit-transition: 0.6s ease-in-out left;
  -moz-transition: 0.6s ease-in-out left;
  -o-transition: 0.6s ease-in-out left;
  transition: 0.6s ease-in-out left;
}
.carousel .item > img {
  display: block;
  line-height: 1;
}
.carousel .active,
.carousel .next,
.carousel .prev {
  display: block;
}
.carousel .active {
  left: 0;
}
.carousel .next,
.carousel .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.carousel .next {
  left: 100%;
}
.carousel .prev {
  left: -100%;
}
.carousel .next.left,
.carousel .prev.right {
  left: 0;
}
.carousel .active.left {
  left: -100%;
}
.carousel .active.right {
  left: 100%;
}
.carousel-control {
  position: absolute;
  top: 40%;
  left: 15px;
  width: 40px;
  height: 40px;
  margin-top: -20px;
  font-size: 60px;
  font-weight: 100;
  line-height: 30px;
  color: #ffffff;
  text-align: center;
  background: #222222;
  border: 3px solid #ffffff;
  -webkit-border-radius: 23px;
  -moz-border-radius: 23px;
  border-radius: 23px;
  opacity: 0.5;
  filter: alpha(opacity=50);
}
.carousel-control.right {
  left: auto;
  right: 15px;
}
.carousel-control:hover {
  color: #ffffff;
  text-decoration: none;
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.carousel-caption {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  padding: 15px;
  background: #333333;
  background: rgba(0, 0, 0, 0.75);
}
.carousel-caption h4,
.carousel-caption p {
  color: #ffffff;
  line-height: 20px;
}
.carousel-caption h4 {
  margin: 0 0 5px;
}
.carousel-caption p {
  margin-bottom: 0;
}
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}
.well-large {
  padding: 24px;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
}
.well-small {
  padding: 9px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}
.close {
  float: right;
  font-size: 20px;
  font-weight: bold;
  line-height: 20px;
  color: #000000;
  text-shadow: 0 1px 0 #ffffff;
  opacity: 0.2;
  filter: alpha(opacity=20);
}
.close:hover {
  color: #000000;
  text-decoration: none;
  cursor: pointer;
  opacity: 0.4;
  filter: alpha(opacity=40);
}
button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
}
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.hide {
  display: none;
}
.show {
  display: block;
}
.invisible {
  visibility: hidden;
}
.affix {
  position: fixed;
}
.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -moz-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
.fade.in {
  opacity: 1;
}
.collapse {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  -moz-transition: height 0.35s ease;
  -o-transition: height 0.35s ease;
  transition: height 0.35s ease;
}
.collapse.in {
  height: auto;
}
.hidden {
  display: none;
  visibility: hidden;
}
.visible-phone {
  display: none !important;
}
.visible-tablet {
  display: none !important;
}
.hidden-desktop {
  display: none !important;
}
.visible-desktop {
  display: inherit !important;
}
@media (min-width: 768px) and (max-width: 979px) {
  .hidden-desktop {
    display: inherit !important;
  }
  .visible-desktop {
    display: none !important ;
  }
  .visible-tablet {
    display: inherit !important;
  }
  .hidden-tablet {
    display: none !important;
  }
}
@media (max-width: 767px) {
  .hidden-desktop {
    display: inherit !important;
  }
  .visible-desktop {
    display: none !important;
  }
  .visible-phone {
    display: inherit !important;
  }
  .hidden-phone {
    display: none !important;
  }
}
@media (max-width: 767px) {
  body {
    padding-left: 20px;
    padding-right: 20px;
  }
  .navbar-fixed-top,
  .navbar-fixed-bottom,
  .navbar-static-top {
    margin-left: -20px;
    margin-right: -20px;
  }
  .container-fluid {
    padding: 0;
  }
  .dl-horizontal dt {
    float: none;
    clear: none;
    width: auto;
    text-align: left;
  }
  .dl-horizontal dd {
    margin-left: 0;
  }
  .container {
    width: auto;
  }
  .row-fluid {
    width: 100%;
  }
  .row,
  .thumbnails {
    margin-left: 0;
  }
  .thumbnails > li {
    float: none;
    margin-left: 0;
  }
  [class*="span"],
  .row-fluid [class*="span"] {
    float: none;
    display: block;
    width: 100%;
    margin-left: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .span12,
  .row-fluid .span12 {
    width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .input-large,
  .input-xlarge,
  .input-xxlarge,
  input[class*="span"],
  select[class*="span"],
  textarea[class*="span"],
  .uneditable-input {
    display: block;
    width: 100%;
    min-height: 30px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .input-prepend input,
  .input-append input,
  .input-prepend input[class*="span"],
  .input-append input[class*="span"] {
    display: inline-block;
    width: auto;
  }
  .controls-row [class*="span"] + [class*="span"] {
    margin-left: 0;
  }
  .modal {
    position: fixed;
    top: 20px;
    left: 20px;
    right: 20px;
    width: auto;
    margin: 0;
  }
  .modal.fade.in {
    top: auto;
  }
}
@media (max-width: 480px) {
  .nav-collapse {
    -webkit-transform: translate3d(0, 0, 0);
  }
  .page-header h1 small {
    display: block;
    line-height: 20px;
  }
  input[type="checkbox"],
  input[type="radio"] {
    border: 1px solid #ccc;
  }
  .form-horizontal .control-label {
    float: none;
    width: auto;
    padding-top: 0;
    text-align: left;
  }
  .form-horizontal .controls {
    margin-left: 0;
  }
  .form-horizontal .control-list {
    padding-top: 0;
  }
  .form-horizontal .form-actions {
    padding-left: 10px;
    padding-right: 10px;
  }
  .modal {
    top: 10px;
    left: 10px;
    right: 10px;
  }
  .modal-header .close {
    padding: 10px;
    margin: -10px;
  }
  .carousel-caption {
    position: static;
  }
}
@media (min-width: 768px) and (max-width: 979px) {
  .row {
    margin-left: -20px;
    *zoom: 1;
  }
  .row:before,
  .row:after {
    display: table;
    content: "";
    line-height: 0;
  }
  .row:after {
    clear: both;
  }
  [class*="span"] {
    float: left;
    min-height: 1px;
    margin-left: 20px;
  }
  .container,
  .navbar-static-top .container,
  .navbar-fixed-top .container,
  .navbar-fixed-bottom .container {
    width: 724px;
  }
  .span12 {
    width: 724px;
  }
  .span11 {
    width: 662px;
  }
  .span10 {
    width: 600px;
  }
  .span9 {
    width: 538px;
  }
  .span8 {
    width: 476px;
  }
  .span7 {
    width: 414px;
  }
  .span6 {
    width: 352px;
  }
  .span5 {
    width: 290px;
  }
  .span4 {
    width: 228px;
  }
  .span3 {
    width: 166px;
  }
  .span2 {
    width: 104px;
  }
  .span1 {
    width: 42px;
  }
  .offset12 {
    margin-left: 764px;
  }
  .offset11 {
    margin-left: 702px;
  }
  .offset10 {
    margin-left: 640px;
  }
  .offset9 {
    margin-left: 578px;
  }
  .offset8 {
    margin-left: 516px;
  }
  .offset7 {
    margin-left: 454px;
  }
  .offset6 {
    margin-left: 392px;
  }
  .offset5 {
    margin-left: 330px;
  }
  .offset4 {
    margin-left: 268px;
  }
  .offset3 {
    margin-left: 206px;
  }
  .offset2 {
    margin-left: 144px;
  }
  .offset1 {
    margin-left: 82px;
  }
  .row-fluid {
    width: 100%;
    *zoom: 1;
  }
  .row-fluid:before,
  .row-fluid:after {
    display: table;
    content: "";
    line-height: 0;
  }
  .row-fluid:after {
    clear: both;
  }
  .row-fluid [class*="span"] {
    display: block;
    width: 100%;
    min-height: 30px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    float: left;
    margin-left: 2.7624309392265194%;
    *margin-left: 2.708083113139563%;
  }
  .row-fluid [class*="span"]:first-child {
    margin-left: 0;
  }
  .row-fluid .span12 {
    width: 100%;
    *width: 99.94565217391305%;
  }
  .row-fluid .span11 {
    width: 91.43646408839778%;
    *width: 91.38211626231083%;
  }
  .row-fluid .span10 {
    width: 82.87292817679558%;
    *width: 82.81858035070863%;
  }
  .row-fluid .span9 {
    width: 74.30939226519337%;
    *width: 74.25504443910641%;
  }
  .row-fluid .span8 {
    width: 65.74585635359117%;
    *width: 65.69150852750421%;
  }
  .row-fluid .span7 {
    width: 57.18232044198895%;
    *width: 57.127972615901996%;
  }
  .row-fluid .span6 {
    width: 48.61878453038674%;
    *width: 48.56443670429979%;
  }
  .row-fluid .span5 {
    width: 40.05524861878453%;
    *width: 40.00090079269758%;
  }
  .row-fluid .span4 {
    width: 31.491712707182323%;
    *width: 31.437364881095366%;
  }
  .row-fluid .span3 {
    width: 22.92817679558011%;
    *width: 22.873828969493154%;
  }
  .row-fluid .span2 {
    width: 14.3646408839779%;
    *width: 14.310293057890943%;
  }
  .row-fluid .span1 {
    width: 5.801104972375691%;
    *width: 5.746757146288735%;
  }
  .row-fluid .offset12 {
    margin-left: 105.52486187845304%;
    *margin-left: 105.41616622627913%;
  }
  .row-fluid .offset12:first-child {
    margin-left: 102.76243093922652%;
    *margin-left: 102.65373528705261%;
  }
  .row-fluid .offset11 {
    margin-left: 96.96132596685082%;
    *margin-left: 96.85263031467692%;
  }
  .row-fluid .offset11:first-child {
    margin-left: 94.1988950276243%;
    *margin-left: 94.0901993754504%;
  }
  .row-fluid .offset10 {
    margin-left: 88.39779005524862%;
    *margin-left: 88.28909440307471%;
  }
  .row-fluid .offset10:first-child {
    margin-left: 85.6353591160221%;
    *margin-left: 85.5266634638482%;
  }
  .row-fluid .offset9 {
    margin-left: 79.8342541436464%;
    *margin-left: 79.7255584914725%;
  }
  .row-fluid .offset9:first-child {
    margin-left: 77.07182320441989%;
    *margin-left: 76.96312755224598%;
  }
  .row-fluid .offset8 {
    margin-left: 71.2707182320442%;
    *margin-left: 71.1620225798703%;
  }
  .row-fluid .offset8:first-child {
    margin-left: 68.50828729281768%;
    *margin-left: 68.39959164064378%;
  }
  .row-fluid .offset7 {
    margin-left: 62.70718232044199%;
    *margin-left: 62.59848666826808%;
  }
  .row-fluid .offset7:first-child {
    margin-left: 59.94475138121547%;
    *margin-left: 59.83605572904156%;
  }
  .row-fluid .offset6 {
    margin-left: 54.14364640883978%;
    *margin-left: 54.03495075666587%;
  }
  .row-fluid .offset6:first-child {
    margin-left: 51.38121546961326%;
    *margin-left: 51.27251981743935%;
  }
  .row-fluid .offset5 {
    margin-left: 45.58011049723757%;
    *margin-left: 45.47141484506366%;
  }
  .row-fluid .offset5:first-child {
    margin-left: 42.81767955801105%;
    *margin-left: 42.708983905837144%;
  }
  .row-fluid .offset4 {
    margin-left: 37.01657458563536%;
    *margin-left: 36.907878933461454%;
  }
  .row-fluid .offset4:first-child {
    margin-left: 34.25414364640884%;
    *margin-left: 34.145447994234935%;
  }
  .row-fluid .offset3 {
    margin-left: 28.45303867403315%;
    *margin-left: 28.344343021859235%;
  }
  .row-fluid .offset3:first-child {
    margin-left: 25.69060773480663%;
    *margin-left: 25.581912082632716%;
  }
  .row-fluid .offset2 {
    margin-left: 19.88950276243094%;
    *margin-left: 19.780807110257026%;
  }
  .row-fluid .offset2:first-child {
    margin-left: 17.12707182320442%;
    *margin-left: 17.018376171030507%;
  }
  .row-fluid .offset1 {
    margin-left: 11.32596685082873%;
    *margin-left: 11.217271198654817%;
  }
  .row-fluid .offset1:first-child {
    margin-left: 8.56353591160221%;
    *margin-left: 8.454840259428297%;
  }
  input,
  textarea,
  .uneditable-input {
    margin-left: 0;
  }
  .controls-row [class*="span"] + [class*="span"] {
    margin-left: 20px;
  }
  input.span12,
  textarea.span12,
  .uneditable-input.span12 {
    width: 710px;
  }
  input.span11,
  textarea.span11,
  .uneditable-input.span11 {
    width: 648px;
  }
  input.span10,
  textarea.span10,
  .uneditable-input.span10 {
    width: 586px;
  }
  input.span9,
  textarea.span9,
  .uneditable-input.span9 {
    width: 524px;
  }
  input.span8,
  textarea.span8,
  .uneditable-input.span8 {
    width: 462px;
  }
  input.span7,
  textarea.span7,
  .uneditable-input.span7 {
    width: 400px;
  }
  input.span6,
  textarea.span6,
  .uneditable-input.span6 {
    width: 338px;
  }
  input.span5,
  textarea.span5,
  .uneditable-input.span5 {
    width: 276px;
  }
  input.span4,
  textarea.span4,
  .uneditable-input.span4 {
    width: 214px;
  }
  input.span3,
  textarea.span3,
  .uneditable-input.span3 {
    width: 152px;
  }
  input.span2,
  textarea.span2,
  .uneditable-input.span2 {
    width: 90px;
  }
  input.span1,
  textarea.span1,
  .uneditable-input.span1 {
    width: 28px;
  }
}
@media (max-width: 979px) {
  body {
    padding-top: 0;
  }
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    position: static;
  }
  .navbar-fixed-top {
    margin-bottom: 18px;
  }
  .navbar-fixed-bottom {
    margin-top: 18px;
  }
  .navbar-fixed-top .navbar-inner,
  .navbar-fixed-bottom .navbar-inner {
    padding: 5px;
  }
  .navbar .container {
    width: auto;
    padding: 0;
  }
  .navbar .brand {
    padding-left: 10px;
    padding-right: 10px;
    margin: 0 0 0 -5px;
  }
  .nav-collapse {
    clear: both;
  }
  .nav-collapse .nav {
    float: none;
    margin: 0 0 9px;
  }
  .nav-collapse .nav > li {
    float: none;
  }
  .nav-collapse .nav > li > a {
    margin-bottom: 2px;
  }
  .nav-collapse .nav > .divider-vertical {
    display: none;
  }
  .nav-collapse .nav .nav-header {
    color: #777777;
    text-shadow: none;
  }
  .nav-collapse .nav > li > a,
  .nav-collapse .dropdown-menu a {
    padding: 9px 15px;
    font-weight: bold;
    color: #777777;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
  }
  .nav-collapse .btn {
    padding: 4px 10px 4px;
    font-weight: normal;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
  }
  .nav-collapse .dropdown-menu li + li a {
    margin-bottom: 2px;
  }
  .nav-collapse .nav > li > a:hover,
  .nav-collapse .dropdown-menu a:hover {
    background-color: #f2f2f2;
  }
  .navbar-inverse .nav-collapse .nav > li > a:hover,
  .navbar-inverse .nav-collapse .dropdown-menu a:hover {
    background-color: #111111;
  }
  .nav-collapse.in .btn-group {
    margin-top: 5px;
    padding: 0;
  }
  .nav-collapse .dropdown-menu {
    position: static;
    top: auto;
    left: auto;
    float: none;
    display: block;
    max-width: none;
    margin: 0 15px;
    padding: 0;
    background-color: transparent;
    border: none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
  }
  .nav-collapse .dropdown-menu:before,
  .nav-collapse .dropdown-menu:after {
    display: none;
  }
  .nav-collapse .dropdown-menu .divider {
    display: none;
  }
  .nav-collapse .nav > li > .dropdown-menu:before,
  .nav-collapse .nav > li > .dropdown-menu:after {
    display: none;
  }
  .nav-collapse .navbar-form,
  .nav-collapse .navbar-search {
    float: none;
    padding: 9px 15px;
    margin: 9px 0;
    border-top: 1px solid #f2f2f2;
    border-bottom: 1px solid #f2f2f2;
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
    -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  }
  .navbar-inverse .nav-collapse .navbar-form,
  .navbar-inverse .nav-collapse .navbar-search {
    border-top-color: #111111;
    border-bottom-color: #111111;
  }
  .navbar .nav-collapse .nav.pull-right {
    float: none;
    margin-left: 0;
  }
  .nav-collapse,
  .nav-collapse.collapse {
    overflow: hidden;
    height: 0;
  }
  .navbar .btn-navbar {
    display: block;
  }
  .navbar-static .navbar-inner {
    padding-left: 10px;
    padding-right: 10px;
  }
}
/*  Font Awesome
    the iconic font designed for use with Twitter Bootstrap
    -------------------------------------------------------
    The full suite of pictographic icons, examples, and documentation
    can be found at: http://fortawesome.github.com/Font-Awesome/

    License
    -------------------------------------------------------
    The Font Awesome webfont, CSS, and LESS files are licensed under CC BY 3.0:
    http://creativecommons.org/licenses/by/3.0/ A mention of
    'Font Awesome - http://fortawesome.github.com/Font-Awesome' in human-readable
    source code is considered acceptable attribution (most common on the web).
    If human readable source code is not available to the end user, a mention in
    an 'About' or 'Credits' screen is considered acceptable (most common in desktop
    or mobile software).

    Contact
    -------------------------------------------------------
    Email: dave@davegandy.com
    Twitter: http://twitter.com/fortaweso_me
    Work: Lead Product Designer @ http://kyruus.com

    */
@font-face {
  font-family: 'FontAwesome';
  src: url('fonts/fontawesome-webfont.eot');
  src: url('fonts/fontawesome-webfontd41d.eot?#iefix') format('embedded-opentype'), url('fonts/fontawesome-webfont.woff') format('woff'), url('fonts/fontawesome-webfont.ttf') format('truetype'), url('fonts/fontawesome-webfont.svg#FontAwesome') format('svg');
  font-weight: normal;
  font-style: normal;
}
/*  Font Awesome styles
    ------------------------------------------------------- */
[class^="icon-"]:before,
[class*=" icon-"]:before {
  font-family: FontAwesome;
  font-weight: normal;
  font-style: normal;
  display: inline-block;
  text-decoration: inherit;
}
a [class^="icon-"],
a [class*=" icon-"] {
  display: inline-block;
  text-decoration: inherit;
}
/* makes the font 33% larger relative to the icon container */
.icon-large:before {
  vertical-align: middle;
  font-size: 1.3333333333333333em;
}
.btn [class^="icon-"],
.nav-tabs [class^="icon-"],
.btn [class*=" icon-"],
.nav-tabs [class*=" icon-"] {
  /* keeps button heights with and without icons the same */

  line-height: .9em;
}
li [class^="icon-"],
li [class*=" icon-"] {
  display: inline-block;
  width: 1.25em;
  text-align: center;
}
li .icon-large:before,
li .icon-large:before {
  /* 1.5 increased font size for icon-large * 1.25 width */

  width: 1.875em;
}
ul.icons {
  list-style-type: none;
  margin-left: 2em;
  text-indent: -0.8em;
}
ul.icons li [class^="icon-"],
ul.icons li [class*=" icon-"] {
  width: .8em;
}
ul.icons li .icon-large:before,
ul.icons li .icon-large:before {
  /* 1.5 increased font size for icon-large * 1.25 width */

  vertical-align: initial;
}
/*  Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
    readers do not read off random characters that represent icons */
.icon-glass:before {
  content: "\f000";
}
.icon-music:before {
  content: "\f001";
}
.icon-search:before {
  content: "\f002";
}
.icon-envelope:before {
  content: "\f003";
}
.icon-heart:before {
  content: "\f004";
}
.icon-star:before {
  content: "\f005";
}
.icon-star-empty:before {
  content: "\f006";
}
.icon-user:before {
  content: "\f007";
}
.icon-film:before {
  content: "\f008";
}
.icon-th-large:before {
  content: "\f009";
}
.icon-th:before {
  content: "\f00a";
}
.icon-th-list:before {
  content: "\f00b";
}
.icon-ok:before {
  content: "\f00c";
}
.icon-remove:before {
  content: "\f00d";
}
.icon-zoom-in:before {
  content: "\f00e";
}
.icon-zoom-out:before {
  content: "\f010";
}
.icon-off:before {
  content: "\f011";
}
.icon-signal:before {
  content: "\f012";
}
.icon-cog:before {
  content: "\f013";
}
.icon-trash:before {
  content: "\f014";
}
.icon-home:before {
  content: "\f015";
}
.icon-file:before {
  content: "\f016";
}
.icon-time:before {
  content: "\f017";
}
.icon-road:before {
  content: "\f018";
}
.icon-download-alt:before {
  content: "\f019";
}
.icon-download:before {
  content: "\f01a";
}
.icon-upload:before {
  content: "\f01b";
}
.icon-inbox:before {
  content: "\f01c";
}
.icon-play-circle:before {
  content: "\f01d";
}
.icon-repeat:before {
  content: "\f01e";
}
/* \f020 doesn't work in Safari. all shifted one down */
.icon-refresh:before {
  content: "\f021";
}
.icon-list-alt:before {
  content: "\f022";
}
.icon-lock:before {
  content: "\f023";
}
.icon-flag:before {
  content: "\f024";
}
.icon-headphones:before {
  content: "\f025";
}
.icon-volume-off:before {
  content: "\f026";
}
.icon-volume-down:before {
  content: "\f027";
}
.icon-volume-up:before {
  content: "\f028";
}
.icon-qrcode:before {
  content: "\f029";
}
.icon-barcode:before {
  content: "\f02a";
}
.icon-tag:before {
  content: "\f02b";
}
.icon-tags:before {
  content: "\f02c";
}
.icon-book:before {
  content: "\f02d";
}
.icon-bookmark:before {
  content: "\f02e";
}
.icon-print:before {
  content: "\f02f";
}
.icon-camera:before {
  content: "\f030";
}
.icon-font:before {
  content: "\f031";
}
.icon-bold:before {
  content: "\f032";
}
.icon-italic:before {
  content: "\f033";
}
.icon-text-height:before {
  content: "\f034";
}
.icon-text-width:before {
  content: "\f035";
}
.icon-align-left:before {
  content: "\f036";
}
.icon-align-center:before {
  content: "\f037";
}
.icon-align-right:before {
  content: "\f038";
}
.icon-align-justify:before {
  content: "\f039";
}
.icon-list:before {
  content: "\f03a";
}
.icon-indent-left:before {
  content: "\f03b";
}
.icon-indent-right:before {
  content: "\f03c";
}
.icon-facetime-video:before {
  content: "\f03d";
}
.icon-picture:before {
  content: "\f03e";
}
.icon-pencil:before {
  content: "\f040";
}
.icon-map-marker:before {
  content: "\f041";
}
.icon-adjust:before {
  content: "\f042";
}
.icon-tint:before {
  content: "\f043";
}
.icon-edit:before {
  content: "\f044";
}
.icon-share:before {
  content: "\f045";
}
.icon-check:before {
  content: "\f046";
}
.icon-move:before {
  content: "\f047";
}
.icon-step-backward:before {
  content: "\f048";
}
.icon-fast-backward:before {
  content: "\f049";
}
.icon-backward:before {
  content: "\f04a";
}
.icon-play:before {
  content: "\f04b";
}
.icon-pause:before {
  content: "\f04c";
}
.icon-stop:before {
  content: "\f04d";
}
.icon-forward:before {
  content: "\f04e";
}
.icon-fast-forward:before {
  content: "\f050";
}
.icon-step-forward:before {
  content: "\f051";
}
.icon-eject:before {
  content: "\f052";
}
.icon-chevron-left:before {
  content: "\f053";
}
.icon-chevron-right:before {
  content: "\f054";
}
.icon-plus-sign:before {
  content: "\f055";
}
.icon-minus-sign:before {
  content: "\f056";
}
.icon-remove-sign:before {
  content: "\f057";
}
.icon-ok-sign:before {
  content: "\f058";
}
.icon-question-sign:before {
  content: "\f059";
}
.icon-info-sign:before {
  content: "\f05a";
}
.icon-screenshot:before {
  content: "\f05b";
}
.icon-remove-circle:before {
  content: "\f05c";
}
.icon-ok-circle:before {
  content: "\f05d";
}
.icon-ban-circle:before {
  content: "\f05e";
}
.icon-arrow-left:before {
  content: "\f060";
}
.icon-arrow-right:before {
  content: "\f061";
}
.icon-arrow-up:before {
  content: "\f062";
}
.icon-arrow-down:before {
  content: "\f063";
}
.icon-share-alt:before {
  content: "\f064";
}
.icon-resize-full:before {
  content: "\f065";
}
.icon-resize-small:before {
  content: "\f066";
}
.icon-plus:before {
  content: "\f067";
}
.icon-minus:before {
  content: "\f068";
}
.icon-asterisk:before {
  content: "\f069";
}
.icon-exclamation-sign:before {
  content: "\f06a";
}
.icon-gift:before {
  content: "\f06b";
}
.icon-leaf:before {
  content: "\f06c";
}
.icon-fire:before {
  content: "\f06d";
}
.icon-eye-open:before {
  content: "\f06e";
}
.icon-eye-close:before {
  content: "\f070";
}
.icon-warning-sign:before {
  content: "\f071";
}
.icon-plane:before {
  content: "\f072";
}
.icon-calendar:before {
  content: "\f073";
}
.icon-random:before {
  content: "\f074";
}
.icon-comment:before {
  content: "\f075";
}
.icon-magnet:before {
  content: "\f076";
}
.icon-chevron-up:before {
  content: "\f077";
}
.icon-chevron-down:before {
  content: "\f078";
}
.icon-retweet:before {
  content: "\f079";
}
.icon-shopping-cart:before {
  content: "\f07a";
}
.icon-folder-close:before {
  content: "\f07b";
}
.icon-folder-open:before {
  content: "\f07c";
}
.icon-resize-vertical:before {
  content: "\f07d";
}
.icon-resize-horizontal:before {
  content: "\f07e";
}
.icon-bar-chart:before {
  content: "\f080";
}
.icon-twitter-sign:before {
  content: "\f081";
}
.icon-facebook-sign:before {
  content: "\f082";
}
.icon-camera-retro:before {
  content: "\f083";
}
.icon-key:before {
  content: "\f084";
}
.icon-cogs:before {
  content: "\f085";
}
.icon-comments:before {
  content: "\f086";
}
.icon-thumbs-up:before {
  content: "\f087";
}
.icon-thumbs-down:before {
  content: "\f088";
}
.icon-star-half:before {
  content: "\f089";
}
.icon-heart-empty:before {
  content: "\f08a";
}
.icon-signout:before {
  content: "\f08b";
}
.icon-linkedin-sign:before {
  content: "\f08c";
}
.icon-pushpin:before {
  content: "\f08d";
}
.icon-external-link:before {
  content: "\f08e";
}
.icon-signin:before {
  content: "\f090";
}
.icon-trophy:before {
  content: "\f091";
}
.icon-github-sign:before {
  content: "\f092";
}
.icon-upload-alt:before {
  content: "\f093";
}
.icon-lemon:before {
  content: "\f094";
}
.icon-phone:before {
  content: "\f095";
}
.icon-check-empty:before {
  content: "\f096";
}
.icon-bookmark-empty:before {
  content: "\f097";
}
.icon-phone-sign:before {
  content: "\f098";
}
.icon-twitter:before {
  content: "\f099";
}
.icon-facebook:before {
  content: "\f09a";
}
.icon-github:before {
  content: "\f09b";
}
.icon-unlock:before {
  content: "\f09c";
}
.icon-credit-card:before {
  content: "\f09d";
}
.icon-rss:before {
  content: "\f09e";
}
.icon-hdd:before {
  content: "\f0a0";
}
.icon-bullhorn:before {
  content: "\f0a1";
}
.icon-bell:before {
  content: "\f0a2";
}
.icon-certificate:before {
  content: "\f0a3";
}
.icon-hand-right:before {
  content: "\f0a4";
}
.icon-hand-left:before {
  content: "\f0a5";
}
.icon-hand-up:before {
  content: "\f0a6";
}
.icon-hand-down:before {
  content: "\f0a7";
}
.icon-circle-arrow-left:before {
  content: "\f0a8";
}
.icon-circle-arrow-right:before {
  content: "\f0a9";
}
.icon-circle-arrow-up:before {
  content: "\f0aa";
}
.icon-circle-arrow-down:before {
  content: "\f0ab";
}
.icon-globe:before {
  content: "\f0ac";
}
.icon-wrench:before {
  content: "\f0ad";
}
.icon-tasks:before {
  content: "\f0ae";
}
.icon-filter:before {
  content: "\f0b0";
}
.icon-briefcase:before {
  content: "\f0b1";
}
.icon-fullscreen:before {
  content: "\f0b2";
}
.icon-group:before {
  content: "\f0c0";
}
.icon-link:before {
  content: "\f0c1";
}
.icon-cloud:before {
  content: "\f0c2";
}
.icon-beaker:before {
  content: "\f0c3";
}
.icon-cut:before {
  content: "\f0c4";
}
.icon-copy:before {
  content: "\f0c5";
}
.icon-paper-clip:before {
  content: "\f0c6";
}
.icon-save:before {
  content: "\f0c7";
}
.icon-sign-blank:before {
  content: "\f0c8";
}
.icon-reorder:before {
  content: "\f0c9";
}
.icon-list-ul:before {
  content: "\f0ca";
}
.icon-list-ol:before {
  content: "\f0cb";
}
.icon-strikethrough:before {
  content: "\f0cc";
}
.icon-underline:before {
  content: "\f0cd";
}
.icon-table:before {
  content: "\f0ce";
}
.icon-magic:before {
  content: "\f0d0";
}
.icon-truck:before {
  content: "\f0d1";
}
.icon-pinterest:before {
  content: "\f0d2";
}
.icon-pinterest-sign:before {
  content: "\f0d3";
}
.icon-google-plus-sign:before {
  content: "\f0d4";
}
.icon-google-plus:before {
  content: "\f0d5";
}
.icon-money:before {
  content: "\f0d6";
}
.icon-caret-down:before {
  content: "\f0d7";
}
.icon-caret-up:before {
  content: "\f0d8";
}
.icon-caret-left:before {
  content: "\f0d9";
}
.icon-caret-right:before {
  content: "\f0da";
}
.icon-columns:before {
  content: "\f0db";
}
.icon-sort:before {
  content: "\f0dc";
}
.icon-sort-down:before {
  content: "\f0dd";
}
.icon-sort-up:before {
  content: "\f0de";
}
.icon-envelope-alt:before {
  content: "\f0e0";
}
.icon-linkedin:before {
  content: "\f0e1";
}
.icon-undo:before {
  content: "\f0e2";
}
.icon-legal:before {
  content: "\f0e3";
}
.icon-dashboard:before {
  content: "\f0e4";
}
.icon-comment-alt:before {
  content: "\f0e5";
}
.icon-comments-alt:before {
  content: "\f0e6";
}
.icon-bolt:before {
  content: "\f0e7";
}
.icon-sitemap:before {
  content: "\f0e8";
}
.icon-umbrella:before {
  content: "\f0e9";
}
.icon-paste:before {
  content: "\f0ea";
}
.icon-user-md:before {
  content: "\f200";
}
/* ==========================================================================
   Colors
   ========================================================================== */
/* ==========================================================================
   The price table
   ========================================================================== */
.price-table {
  font-family: 'Helvetica Neue', Helvetica, Arial;
  *zoom: 1;
  width: 100%;
}
.price-table:before,
.price-table:after {
  display: table;
  content: "";
  line-height: 0;
}
.price-table:after {
  clear: both;
}
.price-table:before,
.price-table:after {
  display: table;
  content: "";
  line-height: 0;
}
.price-table:after {
  clear: both;
}
.price-table.hover .column:hover {
  -webkit-transition: .2s, .2s;
  -moz-transition: .2s, .2s;
  transition: .2s, .2s;
  -webkit-box-shadow: 0 0 5px #222222;
  -moz-box-shadow: 0 0 5px #222222;
  box-shadow: 0 0 5px #222222;
  z-index: 2;
}
.price-table .column {
  position: relative;
  float: left;
  height: auto;
  /* Uncomment for a nice, white border. Removes IE6 and IE7 support. */

  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border: 1px solid #fff;
  z-index: 1;
  -webkit-box-shadow: 0 0 2px #333333;
  -moz-box-shadow: 0 0 2px #333333;
  box-shadow: 0 0 2px #333333;
}
.price-table .column.rounded {
  -webkit-border-radius: 10px 10px 0 0;
  -moz-border-radius: 10px 10px 0 0;
  border-radius: 10px 10px 0 0;
}
.price-table .column.highlight,
.price-table .column.highlight:hover {
  -webkit-box-shadow: 5px 5px 10px -5px #333333, -5px 5px 10px -5px #333333;
  -moz-box-shadow: 5px 5px 10px -5px #333333, -5px 5px 10px -5px #333333;
  box-shadow: 5px 5px 10px -5px #333333, -5px 5px 10px -5px #333333;
  z-index: 3;
  margin-top: -10px;
  border: 0px;
}
.price-table .column.highlight header,
.price-table .column.highlight:hover header {
  padding-bottom: 35px;
}
.price-table .column.highlight footer,
.price-table .column.highlight:hover footer {
  padding: 25px 0 35px 0;
}
.price-table .column header {
  position: relative;
  padding-bottom: 25px;
}
.price-table .column header h1,
.price-table .column header h2,
.price-table .column header h3,
.price-table .column header h4,
.price-table .column header h5,
.price-table .column header h6 {
  text-align: center;
  padding: 15px 0 12px 0;
  color: #fff;
  font-size: 18px;
  text-shadow: 0px -1px #333333;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  margin: 0px;
  font-weight: bold;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-size: 11px;
}
.price-table .column header.rounded {
  -webkit-border-radius: 10px 10px 0 0;
  -moz-border-radius: 10px 10px 0 0;
  border-radius: 10px 10px 0 0;
}
.price-table .column header div.price {
  text-align: center;
  color: #fff;
  font-weight: 300;
  width: 100%;
  border-top: 1px solid rgba(255, 255, 255, 0.2);
  padding-top: 15px;
}
.price-table .column header div.price .price {
  position: relative;
  font-size: 70px;
  line-height: 1;
  text-shadow: -1px -1px #444444;
}
.price-table .column header div.price .price .dollar {
  position: absolute;
  font-size: 14px;
  left: -10px;
  top: 18px;
  text-shadow: -1px -1px #444444;
}
.price-table .column header div.price .price .month {
  position: absolute;
  font-size: 14px;
  right: -25px;
  bottom: 15px;
  text-shadow: -1px -1px #444444;
}
.price-table .column .data {
  display: block;
  background: #f5f5f5;
}
.price-table .column .data ul {
  background: #fefefe;
  margin: 0px !important;
  display: block;
  padding: 0px;
  width: 100%;
}
.price-table .column .data ul li {
  list-style: none;
  font-weight: 300;
  color: #666;
  font-size: 13px;
  padding: 12px 5px;
  text-align: center;
}
.price-table .column .data ul li strong {
  color: #555;
}
.price-table .column .data ul li.even {
  background: #f5f5f5;
  border-top: 1px solid #fff;
  border-bottom: 1px solid #eee;
}
.price-table .column .data ul li.odd {
  border-top: 1px solid #fff;
  background: #fcfcfc;
  border-bottom: 1px solid #eee;
}
.price-table .column .data ul li a {
  position: relative;
  color: #555;
  text-decoration: none;
  border-bottom: 1px dotted #444;
}
.price-table .column .data ul li a:hover {
  position: relative;
  cursor: help;
}
.price-table .column footer {
  display: block;
  text-align: center;
  background: #f0f0f0;
  padding: 25px 0;
  border-top: 1px solid #fcfcfc;
}
.price-table .column footer .button {
  text-decoration: none;
  font-size: 11px;
  display: block;
  letter-spacing: 1px;
  text-transform: uppercase;
  margin: 0 25px;
  color: #4d4d4d;
  padding: 8px 20px;
  background: #444;
  background: -moz-linear-gradient(top, #555555 0%, #444444);
  background: -webkit-gradient(linear, left top, left bottom, from(#555555), to(#444444));
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  border: 0px solid #454445;
  color: #eee;
  -moz-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.4), inset 0px 0px 1px #e1e1e1;
  -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.4), inset 0px 0px 1px #e1e1e1;
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.4), inset 0px 0px 1px #e1e1e1;
}
.price-table.four-columns .column {
  width: 25%;
}
.price-table.three-columns .column {
  width: 33.333%;
}
.price-table.two-columns .column {
  width: 50%;
}
.price-table.one-columns .column {
  width: 100%;
}
.price-table .red {
  background: #d95454;
}
.price-table .red.dark {
  background: #cd2d2d;
}
.price-table .red.light {
  background: #e27e7e;
}
.price-table .pink {
  background: #e856c4;
}
.price-table .pink.dark {
  background: #e229b4;
}
.price-table .pink.light {
  background: #ee83d4;
}
.price-table .purple {
  background: #b356e8;
}
.price-table .purple.dark {
  background: #9f29e2;
}
.price-table .purple.light {
  background: #c783ee;
}
.price-table .blue {
  background: #5663e8;
}
.price-table .blue.dark {
  background: #293ae2;
}
.price-table .blue.light {
  background: #838cee;
}
.price-table .cyan {
  background: #6db8da;
}
.price-table .cyan.dark {
  background: #44a4d0;
}
.price-table .cyan.light {
  background: #96cce4;
}
.price-table .green {
  background: #6fb773;
}
.price-table .green.dark {
  background: #51a255;
}
.price-table .green.light {
  background: #91c894;
}
.price-table .yellow {
  background: #d7d361;
}
.price-table .yellow.dark {
  background: #cdc838;
}
.price-table .yellow.light {
  background: #e1de8a;
}
.price-table .orange {
  background: #d27740;
}
.price-table .orange.dark {
  background: #b45e2b;
}
.price-table .orange.light {
  background: #dc9469;
}
.price-table .grey {
  background: #37353c;
}
.price-table .grey.dark {
  background: #1e1d21;
}
.price-table .grey.light {
  background: #504d57;
}
/* ==========================================================================
   Media queris(for responsive)
   ========================================================================== */
@media (max-width: 880px) {
  .price-table .column header div.price .price {
    font-size: 40px;
  }
  .price-table .column header div.price .price .dollar {
    top: 10px;
    left: -12px;
  }
  .price-table .column header div.price .price .month {
    bottom: 7px;
    right: -25px;
  }
}
@media (max-width: 750px) {
  .price-table.four-columns .column,
  .price-table.three-columns .column {
    width: 100%;
    display: block;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    margin-bottom: 10px;
    -webkit-box-shadow: 0 0 2px #333333;
    -moz-box-shadow: 0 0 2px #333333;
    box-shadow: 0 0 2px #333333;
  }
  .price-table.four-columns .column.highlight,
  .price-table.three-columns .column.highlight {
    -webkit-box-shadow: 0 0 2px #333333;
    -moz-box-shadow: 0 0 2px #333333;
    box-shadow: 0 0 2px #333333;
    margin-top: 0px;
  }
  .price-table.four-columns .column .data,
  .price-table.three-columns .column .data {
    *zoom: 1;
  }
  .price-table.four-columns .column .data:before,
  .price-table.three-columns .column .data:before,
  .price-table.four-columns .column .data:after,
  .price-table.three-columns .column .data:after {
    display: table;
    content: "";
    line-height: 0;
  }
  .price-table.four-columns .column .data:after,
  .price-table.three-columns .column .data:after {
    clear: both;
  }
  .price-table.four-columns .column .data:before,
  .price-table.three-columns .column .data:before,
  .price-table.four-columns .column .data:after,
  .price-table.three-columns .column .data:after {
    display: table;
    content: "";
    line-height: 0;
  }
  .price-table.four-columns .column .data:after,
  .price-table.three-columns .column .data:after {
    clear: both;
  }
  .price-table.four-columns .column .data ul,
  .price-table.three-columns .column .data ul {
    *zoom: 1;
    background: #fcfcfc !important;
  }
  .price-table.four-columns .column .data ul:before,
  .price-table.three-columns .column .data ul:before,
  .price-table.four-columns .column .data ul:after,
  .price-table.three-columns .column .data ul:after {
    display: table;
    content: "";
    line-height: 0;
  }
  .price-table.four-columns .column .data ul:after,
  .price-table.three-columns .column .data ul:after {
    clear: both;
  }
  .price-table.four-columns .column .data ul:before,
  .price-table.three-columns .column .data ul:before,
  .price-table.four-columns .column .data ul:after,
  .price-table.three-columns .column .data ul:after {
    display: table;
    content: "";
    line-height: 0;
  }
  .price-table.four-columns .column .data ul:after,
  .price-table.three-columns .column .data ul:after {
    clear: both;
  }
  .price-table.four-columns .column .data ul li,
  .price-table.three-columns .column .data ul li {
    float: left;
    width: 33%;
    box-sizing: border-box;
  }
  .price-table.four-columns .column .data ul li.odd,
  .price-table.three-columns .column .data ul li.odd,
  .price-table.four-columns .column .data ul li.even,
  .price-table.three-columns .column .data ul li.even {
    border: 0px !important;
    background: #fcfcfc !important;
  }
  .price-table.four-columns .column .data ul li strong,
  .price-table.three-columns .column .data ul li strong {
    display: block;
  }
  .price-table.four-columns .column footer,
  .price-table.three-columns .column footer {
    padding: 35px 0 35px 0;
    -webkit-border-radius: 0 0 10px 10px;
    -moz-border-radius: 0 0 10px 10px;
    border-radius: 0 0 10px 10px;
  }
}
/* ==========================================================================
   Toltip
   ========================================================================== */
.tooltip {
  position: absolute;
  z-index: 1030;
  display: block;
  visibility: visible;
  padding: 5px;
  font-size: 12px;
  opacity: 0;
  filter: alpha(opacity=0);
}
.tooltip.in {
  opacity: 0.8;
  filter: alpha(opacity=80);
}
.tooltip.top {
  margin-top: -3px;
}
.tooltip.right {
  margin-left: 3px;
}
.tooltip.bottom {
  margin-top: 3px;
}
.tooltip.left {
  margin-left: -3px;
}
.tooltip-inner {
  max-width: 200px;
  padding: 8px 12px;
  color: #ffffff;
  text-align: center;
  text-decoration: none;
  background-color: #000000;
  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  border-radius: 15px;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000000;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000000;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000000;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000000;
}
/* ==========================================================================
   Mixins
   ========================================================================== */
.clearfix {
  *zoom: 1;
}
.clearfix:before,
.clearfix:after {
  display: table;
  content: "";
  line-height: 0;
}
.clearfix:after {
  clear: both;
}
/**** Isotope Filtering ****/
.isotope-item {
  z-index: 2;
}
.isotope-hidden.isotope-item {
  pointer-events: none;
  z-index: 1;
}
/**** Isotope CSS3 transitions ****/
.isotope,
.isotope .isotope-item {
  -webkit-transition-duration: 0.8s;
  -moz-transition-duration: 0.8s;
  -ms-transition-duration: 0.8s;
  -o-transition-duration: 0.8s;
  transition-duration: 0.8s;
}
.isotope {
  -webkit-transition-property: height, width;
  -moz-transition-property: height, width;
  -ms-transition-property: height, width;
  -o-transition-property: height, width;
  transition-property: height, width;
}
.isotope .isotope-item {
  -webkit-transition-property: -webkit-transform, opacity;
  -moz-transition-property: -moz-transform, opacity;
  -ms-transition-property: -ms-transform, opacity;
  -o-transition-property: top, left, opacity;
  transition-property: transform, opacity;
}
/**** disabling Isotope CSS3 transitions ****/
.isotope.no-transition,
.isotope.no-transition .isotope-item,
.isotope .isotope-item.no-transition {
  -webkit-transition-duration: 0s;
  -moz-transition-duration: 0s;
  -ms-transition-duration: 0s;
  -o-transition-duration: 0s;
  transition-duration: 0s;
}
/*! fancyBox v2.1.0 fancyapps.com | fancyapps.com/fancybox/#license */
.fancybox-wrap,
.fancybox-skin,
.fancybox-outer,
.fancybox-inner,
.fancybox-image,
.fancybox-wrap iframe,
.fancybox-wrap object,
.fancybox-nav,
.fancybox-nav span,
.fancybox-tmp {
  padding: 0;
  margin: 0;
  border: 0;
  outline: none;
  vertical-align: top;
}
.fancybox-wrap {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 8020;
}
.fancybox-skin {
  position: relative;
  background: #f9f9f9;
  color: #444;
  text-shadow: none;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
.fancybox-opened {
  z-index: 8030;
}
.fancybox-opened .fancybox-skin {
  -webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
}
.fancybox-outer,
.fancybox-inner {
  position: relative;
}
.fancybox-inner {
  overflow: hidden;
}
.fancybox-type-iframe .fancybox-inner {
  -webkit-overflow-scrolling: touch;
}
.fancybox-error {
  color: #444;
  font: 14px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
  margin: 0;
  padding: 15px;
  white-space: nowrap;
}
.fancybox-image,
.fancybox-iframe {
  display: block;
  width: 100%;
  height: 100%;
}
.fancybox-image {
  max-width: 100%;
  max-height: 100%;
}
#fancybox-loading,
.fancybox-close,
.fancybox-prev span,
.fancybox-next span {
  background-image: url('http://error404.000webhost.com/?');
}
#fancybox-loading {
  position: fixed;
  top: 50%;
  left: 50%;
  margin-top: -22px;
  margin-left: -22px;
  background-position: 0 -108px;
  opacity: 0.8;
  cursor: pointer;
  z-index: 8060;
}
#fancybox-loading div {
  width: 44px;
  height: 44px;
  background: url('http://error404.000webhost.com/?') center center no-repeat;
}
.fancybox-close {
  position: absolute;
  top: -18px;
  right: -18px;
  width: 36px;
  height: 36px;
  cursor: pointer;
  z-index: 8040;
}
.fancybox-nav {
  position: absolute;
  top: 0;
  width: 40%;
  height: 100%;
  cursor: pointer;
  text-decoration: none;
  background: transparent url('http://error404.000webhost.com/?');
  /* helps IE */

  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  z-index: 8040;
}
.fancybox-prev {
  left: 0;
}
.fancybox-next {
  right: 0;
}
.fancybox-nav span {
  position: absolute;
  top: 50%;
  width: 36px;
  height: 34px;
  margin-top: -18px;
  cursor: pointer;
  z-index: 8040;
  visibility: hidden;
}
.fancybox-prev span {
  left: 10px;
  background-position: 0 -36px;
}
.fancybox-next span {
  right: 10px;
  background-position: 0 -72px;
}
.fancybox-nav:hover span {
  visibility: visible;
}
.fancybox-tmp {
  position: absolute;
  top: -9999px;
  left: -9999px;
  visibility: hidden;
}
/* Overlay helper */
.fancybox-lock {
  overflow: hidden;
}
.fancybox-overlay {
  position: absolute;
  top: 0;
  left: 0;
  overflow: hidden;
  display: none;
  z-index: 8010;
  background: url('http://error404.000webhost.com/?');
}
.fancybox-overlay-fixed {
  position: fixed;
  bottom: 0;
  right: 0;
}
.fancybox-lock .fancybox-overlay {
  overflow: auto;
  overflow-y: scroll;
}
/* Title helper */
.fancybox-title {
  visibility: hidden;
  font: normal 13px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
  position: relative;
  text-shadow: none;
  z-index: 8050;
}
.fancybox-opened .fancybox-title {
  visibility: visible;
}
.fancybox-title-float-wrap {
  position: absolute;
  bottom: 0;
  right: 50%;
  margin-bottom: -35px;
  z-index: 8050;
  text-align: center;
}
.fancybox-title-float-wrap .child {
  display: inline-block;
  margin-right: -100%;
  padding: 2px 20px;
  background: transparent;
  /* Fallback for web browsers that doesn't support RGBa */

  background: rgba(0, 0, 0, 0.8);
  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  border-radius: 15px;
  text-shadow: 0 1px 2px #222;
  color: #FFF;
  font-weight: bold;
  line-height: 24px;
  white-space: nowrap;
}
.fancybox-title-outside-wrap {
  position: relative;
  margin-top: 10px;
  color: #fff;
}
.fancybox-title-inside-wrap {
  padding-top: 10px;
}
.fancybox-title-over-wrap {
  position: absolute;
  bottom: 0;
  left: 0;
  color: #fff;
  padding: 10px;
  background: #000;
  background: rgba(0, 0, 0, 0.8);
}
#fancybox-buttons {
  position: fixed;
  left: 0;
  width: 100%;
  z-index: 8050;
}
#fancybox-buttons.top {
  top: 10px;
}
#fancybox-buttons.bottom {
  bottom: 10px;
}
#fancybox-buttons ul {
  display: block;
  width: 166px;
  height: 30px;
  margin: 0 auto;
  padding: 0;
  list-style: none;
  border: 1px solid #111;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.05);
  -moz-box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.05);
  box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.05);
  background: #323232;
  background: -moz-linear-gradient(top, #444444 0%, #343434 50%, #292929 50%, #333333 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #444444), color-stop(50%, #343434), color-stop(50%, #292929), color-stop(100%, #333333));
  background: -webkit-linear-gradient(top, #444444 0%, #343434 50%, #292929 50%, #333333 100%);
  background: -o-linear-gradient(top, #444444 0%, #343434 50%, #292929 50%, #333333 100%);
  background: -ms-linear-gradient(top, #444444 0%, #343434 50%, #292929 50%, #333333 100%);
  background: linear-gradient(top, #444444 0%, #343434 50%, #292929 50%, #333333 100%);
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#444444', endColorstr='#222222', GradientType=0);
}
#fancybox-buttons ul li {
  float: left;
  margin: 0;
  padding: 0;
}
#fancybox-buttons a {
  display: block;
  width: 30px;
  height: 30px;
  text-indent: -9999px;
  background-image: url('../img/fancybox_buttons.png');
  background-repeat: no-repeat;
  outline: none;
  opacity: 0.8;
}
#fancybox-buttons a:hover {
  opacity: 1;
}
#fancybox-buttons a.btnPrev {
  background-position: 5px 0;
}
#fancybox-buttons a.btnNext {
  background-position: -33px 0;
  border-right: 1px solid #3e3e3e;
}
#fancybox-buttons a.btnPlay {
  background-position: 0 -30px;
}
#fancybox-buttons a.btnPlayOn {
  background-position: -30px -30px;
}
#fancybox-buttons a.btnToggle {
  background-position: 3px -60px;
  border-left: 1px solid #111;
  border-right: 1px solid #3e3e3e;
  width: 35px;
}
#fancybox-buttons a.btnToggleOn {
  background-position: -27px -60px;
}
#fancybox-buttons a.btnClose {
  border-left: 1px solid #111;
  width: 35px;
  background-position: -56px 0px;
}
#fancybox-buttons a.btnDisabled {
  opacity: 0.4;
  cursor: default;
}
/*----------------------------------------------------------------------------- 

	-	kenburn slider -

Screen Stylesheet 

version:   	1.0 
date:      	09/18/11 
author:		themepunch
email:     	info@themepunch.com 
website:   	http://www.themepunch.com
-----------------------------------------------------------------------------*/
.tp-simpleresponsive .caption {
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  -moz-opacity: 0;
  -khtml-opacity: 0;
  opacity: 0;
  position: absolute;
}
.tp-simpleresponsive img {
  max-width: none;
}
/******************************
	-	SHADOWS		-
******************************/
.tp-bannershadow {
  position: absolute;
  margin-left: auto;
  margin-right: auto;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -o-user-select: none;
}
.tp-bannershadow.tp-shadow1 {
  background: url(http://error404.000webhost.com/?) no-repeat;
  background-size: 100%;
  width: 890px;
  height: 30px;
  bottom: -30px;
}
.tp-bannershadow.tp-shadow2 {
  background: url(http://error404.000webhost.com/?) no-repeat;
  background-size: 100%;
  width: 890px;
  height: 60px;
  bottom: -60px;
}
.tp-bannershadow.tp-shadow3 {
  background: url(http://error404.000webhost.com/?) no-repeat;
  background-size: 100%;
  width: 890px;
  height: 60px;
  bottom: -60px;
}
/*************************
	-	CAPTIONS	-
**************************/
.caption.transparent {
  position: absolute;
  color: #fff;
  text-shadow: none !important;
  font-weight: 300;
  font-size: 36px;
  line-height: 36px;
  padding: 6px 10px;
  margin: 0px;
  border-width: 0px;
  border-style: none;
  background-color: #1d8cc2;
  opacity: .7 !important;
}
.caption.transparent.red {
  background-color: #dd4b37;
}
.caption.transparent.blue {
  background-color: #1d8cc2;
}
.caption.transparent.green {
  background-color: #78ba37;
}
.caption.transparent.purple {
  background-color: #ba55db;
}
.caption.transparent.pink {
  background-color: #e962a1;
}
.caption.transparent.nt {
  opacity: 1 !important;
}
.caption.big_white {
  position: absolute;
  color: #fff;
  text-shadow: none;
  font-weight: 700;
  font-size: 36px;
  line-height: 36px;
  font-family: Arial;
  padding: 0px 4px;
  padding-top: 1px;
  margin: 0px;
  border-width: 0px;
  border-style: none;
  background-color: #000;
  letter-spacing: -1.5px;
}
.caption.big_orange {
  position: absolute;
  color: #ff7302;
  text-shadow: none;
  font-weight: 700;
  font-size: 36px;
  line-height: 36px;
  font-family: Arial;
  padding: 0px 4px;
  margin: 0px;
  border-width: 0px;
  border-style: none;
  background-color: #fff;
  letter-spacing: -1.5px;
}
.caption.big_black {
  position: absolute;
  color: #000;
  text-shadow: none;
  font-weight: 700;
  font-size: 36px;
  line-height: 36px;
  font-family: Arial;
  padding: 0px 4px;
  margin: 0px;
  border-width: 0px;
  border-style: none;
  background-color: #fff;
  letter-spacing: -1.5px;
}
.caption.medium_grey {
  position: absolute;
  color: #fff;
  text-shadow: none;
  font-weight: 700;
  font-size: 20px;
  line-height: 20px;
  font-family: Arial;
  padding: 2px 4px;
  margin: 0px;
  border-width: 0px;
  border-style: none;
  background-color: #888;
  white-space: nowrap;
  text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}
.caption.small_text {
  position: absolute;
  color: #fff;
  text-shadow: none;
  font-weight: 700;
  font-size: 14px;
  line-height: 20px;
  font-family: Arial;
  margin: 0px;
  border-width: 0px;
  border-style: none;
  white-space: nowrap;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}
.caption.medium_text {
  position: absolute;
  color: #fff;
  text-shadow: none;
  font-weight: 700;
  font-size: 20px;
  line-height: 20px;
  font-family: Arial;
  margin: 0px;
  border-width: 0px;
  border-style: none;
  white-space: nowrap;
  text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}
.caption.large_text {
  position: absolute;
  color: #fff;
  text-shadow: none;
  font-weight: 700;
  font-size: 40px;
  line-height: 40px;
  font-family: Arial;
  margin: 0px;
  border-width: 0px;
  border-style: none;
  white-space: nowrap;
  text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}
.caption.very_large_text {
  position: absolute;
  color: #fff;
  text-shadow: none;
  font-weight: 700;
  font-size: 60px;
  line-height: 60px;
  font-family: Arial;
  margin: 0px;
  border-width: 0px;
  border-style: none;
  white-space: nowrap;
  text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
  letter-spacing: -2px;
}
.caption.very_big_white {
  position: absolute;
  color: #fff;
  text-shadow: none;
  font-weight: 700;
  font-size: 60px;
  line-height: 60px;
  font-family: Arial;
  margin: 0px;
  border-width: 0px;
  border-style: none;
  white-space: nowrap;
  padding: 0px 4px;
  padding-top: 1px;
  background-color: #000;
}
.caption.very_big_black {
  position: absolute;
  color: #000;
  text-shadow: none;
  font-weight: 700;
  font-size: 60px;
  line-height: 60px;
  font-family: Arial;
  margin: 0px;
  border-width: 0px;
  border-style: none;
  white-space: nowrap;
  padding: 0px 4px;
  padding-top: 1px;
  background-color: #fff;
}
.caption.boxshadow {
  -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
  -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
}
.caption.black {
  color: #000;
  text-shadow: none;
}
.caption.noshadow {
  text-shadow: none;
}
/******************************
	-	BUTTONS	-
*******************************/
.button {
  padding: 6px 13px 5px;
  border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  height: 30px;
  cursor: pointer;
  color: #fff !important;
  text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.6) !important;
  font-size: 15px;
  line-height: 45px !important;
  background: url(http://error404.000webhost.com/?) repeat-x top;
  font-family: arial, sans-serif;
  font-weight: bold;
  letter-spacing: -1px;
}
.button.big {
  color: #fff;
  text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.6);
  font-weight: bold;
  padding: 9px 20px;
  font-size: 19px;
  line-height: 57px !important;
  background: url(http://error404.000webhost.com/?) repeat-x top;
}
.purchase:hover,
.button:hover,
.button.big:hover {
  background-position: bottom, 15px 11px;
}
@media only screen and (min-width: 768px) and (max-width: 959px) {
  
}
@media only screen and (min-width: 480px) and (max-width: 767px) {
  .button {
    padding: 4px 8px 3px;
    line-height: 25px !important;
    font-size: 11px !important;
    font-weight: normal;
  }
  a.button {
    -webkit-transition: none;
    -moz-transition: none;
    -o-transition: none;
    -ms-transition: none;
  }
}
@media only screen and (min-width: 0px) and (max-width: 479px) {
  .button {
    padding: 2px 5px 2px;
    line-height: 20px !important;
    font-size: 10px !important;
  }
  a.button {
    -webkit-transition: none;
    -moz-transition: none;
    -o-transition: none;
    -ms-transition: none;
  }
}
/*	BUTTON COLORS	*/.button.green,
.button:hover.green,
.purchase.green,
.purchase:hover.green {
  background-color: #21a117;
  -webkit-box-shadow: 0px 3px 0px 0px #104d0b;
  -moz-box-shadow: 0px 3px 0px 0px #104d0b;
  box-shadow: 0px 3px 0px 0px #104d0b;
}
.button.blue,
.button:hover.blue,
.purchase.blue,
.purchase:hover.blue {
  background-color: #1d78cb;
  -webkit-box-shadow: 0px 3px 0px 0px #0f3e68;
  -moz-box-shadow: 0px 3px 0px 0px #0f3e68;
  box-shadow: 0px 3px 0px 0px #0f3e68;
}
.button.red,
.button:hover.red,
.purchase.red,
.purchase:hover.red {
  background-color: #cb1d1d;
  -webkit-box-shadow: 0px 3px 0px 0px #7c1212;
  -moz-box-shadow: 0px 3px 0px 0px #7c1212;
  box-shadow: 0px 3px 0px 0px #7c1212;
}
.button.orange,
.button:hover.orange,
.purchase.orange,
.purchase:hover.orange {
  background-color: #ff7700;
  -webkit-box-shadow: 0px 3px 0px 0px #a34c00;
  -moz-box-shadow: 0px 3px 0px 0px #a34c00;
  box-shadow: 0px 3px 0px 0px #a34c00;
}
.button.darkgrey,
.button.grey,
.button:hover.darkgrey,
.button:hover.grey,
.purchase.darkgrey,
.purchase:hover.darkgrey {
  background-color: #555;
  -webkit-box-shadow: 0px 3px 0px 0px #222;
  -moz-box-shadow: 0px 3px 0px 0px #222;
  box-shadow: 0px 3px 0px 0px #222;
}
.button.lightgrey,
.button:hover.lightgrey,
.purchase.lightgrey,
.purchase:hover.lightgrey {
  background-color: #888;
  -webkit-box-shadow: 0px 3px 0px 0px #555;
  -moz-box-shadow: 0px 3px 0px 0px #555;
  box-shadow: 0px 3px 0px 0px #555;
}
/************************
	-	NAVIGATION	-
*************************/
/** BULLETS **/
.tp-bullets {
  z-index: 100;
  position: absolute;
  bottom: 10px;
}
.tp-bullets.simplebullets {
  bottom: 10px;
}
.tp-bullets.simplebullets.navbar {
  bottom: -20px;
  background: url(http://error404.000webhost.com/?);
  height: 35px;
  padding: 0px 0px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px ;
  margin-top: -17px;
}
.tp-bullets.simplebullets .bullet {
  cursor: pointer;
  position: relative;
  background: url(http://error404.000webhost.com/?) no-Repeat bottom left;
  width: 23px;
  height: 23px;
  margin-right: 0px;
  float: left;
  margin-top: -12px;
}
.tp-bullets.simplebullets .bullet.last {
  margin-right: 0px;
}
/**	SQUARE BULLETS **/
.tp-bullets.simplebullets.square .bullet {
  cursor: pointer;
  position: relative;
  background: url(../img/slider/bullets2.png) no-Repeat bottom left;
  width: 19px;
  height: 19px;
  margin-right: 0px;
  float: left;
  margin-top: -10px;
}
.tp-bullets.simplebullets.square .bullet.last {
  margin-right: 0px;
}
/** navbar NAVIGATION VERSION **/
.tp-bullets.simplebullets.navbar .bullet {
  cursor: pointer;
  position: relative;
  background: url(http://error404.000webhost.com/?) no-Repeat bottom left;
  width: 15px;
  height: 15px;
  margin-left: 5px !important;
  margin-right: 5px !important;
  float: left;
  margin-top: 10px;
}
.tp-bullets.simplebullets.navbar .bullet.first {
  margin-left: 30px !important;
}
.tp-bullets.simplebullets.navbar .bullet.last {
  margin-right: 30px !important;
}
.tp-bullets.simplebullets .bullet:hover,
.tp-bullets.simplebullets .bullet.selected {
  background-position: top left;
}
/*************************************
	-	TP ARROWS 	-
**************************************/
.tp-leftarrow {
  z-index: 100;
  cursor: pointer;
  position: relative;
  background: url(http://error404.000webhost.com/?) no-Repeat top left;
  width: 26px;
  height: 26px;
  margin-right: 0px;
  float: left;
  margin-top: -13px;
}
.tp-rightarrow {
  z-index: 100;
  cursor: pointer;
  position: relative;
  background: url(http://error404.000webhost.com/?) no-Repeat top left;
  width: 26px;
  height: 26px;
  margin-right: 0px;
  float: left;
  margin-top: -13px;
}
.tp-leftarrow.navbar {
  z-index: 100;
  cursor: pointer;
  position: relative;
  background: url(http://error404.000webhost.com/?) no-Repeat top left;
  width: 9px;
  height: 16px;
  float: left;
  margin-right: -20px;
  margin-top: -8px;
}
.tp-rightarrow.navbar {
  z-index: 100;
  cursor: pointer;
  position: relative;
  background: url(http://error404.000webhost.com/?) no-Repeat top left;
  width: 9px;
  height: 16px;
  float: left;
  margin-left: -20px;
  margin-top: -8px;
}
.tp-leftarrow.navbar.thumbswitharrow {
  margin-right: 10px;
}
.tp-rightarrow.navbar.thumbswitharrow {
  margin-left: 0px;
}
.tp-leftarrow.square {
  z-index: 100;
  cursor: pointer;
  position: relative;
  background: url(http://error404.000webhost.com/?) no-Repeat top left;
  width: 12px;
  height: 17px;
  float: left;
  margin-right: 0px;
  margin-top: -9px;
}
.tp-rightarrow.square {
  z-index: 100;
  cursor: pointer;
  position: relative;
  background: url(http://error404.000webhost.com/?) no-Repeat top left;
  width: 12px;
  height: 17px;
  float: left;
  margin-left: 0px;
  margin-top: -9px;
}
.tp-leftarrow.large {
  z-index: 100;
  cursor: pointer;
  position: relative;
  background: url(../img/slider/arrow_large_left.png) no-Repeat top left;
  width: 46px;
  height: 46px;
  margin-left: 20px;
  margin-top: -23px;
}
.tp-rightarrow.large {
  z-index: 100;
  cursor: pointer;
  position: relative;
  background: url(../img/slider/arrow_large_right.png) no-Repeat top left;
  width: 46px;
  height: 46px;
  margin-left: -20px;
  margin-top: -23px;
}
.tp-leftarrow:hover,
.tp-rightarrow:hover {
  background-position: bottom left;
}
/****************************************************************************************************
	-	TP THUMBS 	-	
*****************************************************************************************************

 - tp-thumbs & tp-mask Width is the width of the basic Thumb Container (500px basic settings)

 - .bullet width & height is the dimension of a simple Thumbnail (basic 100px x 50px)

 *****************************************************************************************************/
.tp-bullets.tp-thumbs {
  z-index: 100;
  position: absolute;
  padding: 0px 2px 2px;
  background-color: #fff;
  width: 500px;
  height: 50px;
  /* THE DIMENSIONS OF THE THUMB CONTAINER */

}
.fullwidthbanner-container .tp-thumbs {
  padding: 2px;
}
.tp-bullets.tp-thumbs .tp-mask {
  width: 500px;
  height: 50px;
  /* THE DIMENSIONS OF THE THUMB CONTAINER */

  overflow: hidden;
  position: relative;
}
.tp-bullets.tp-thumbs .tp-mask .tp-thumbcontainer {
  width: 5000px;
  position: absolute;
}
.tp-bullets.tp-thumbs .bullet {
  width: 100px;
  height: 50px;
  /* THE DIMENSION OF A SINGLE THUMB */

  cursor: pointer;
  overflow: hidden;
  background: none;
  margin: 0;
  float: left;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
  /*filter: alpha(opacity=50);	*/

  -moz-opacity: 0.5;
  -khtml-opacity: 0.5;
  opacity: 0.5;
  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  -o-transition: all 0.2s ease-out;
  -ms-transition: all 0.2s ease-out;
}
.tp-bullets.tp-thumbs .bullet:hover,
.tp-bullets.tp-thumbs .bullet.selected {
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  -moz-opacity: 1;
  -khtml-opacity: 1;
  opacity: 1;
}
.tp-thumbs img {
  width: 100%;
}
/************************************
		-	TP BANNER TIMER		-
*************************************/
.tp-bannertimer {
  width: 100%;
  height: 10px;
  background: url(http://error404.000webhost.com/?);
  position: absolute;
  z-index: 200;
}
/***************************************
	-	RESPONSIVE SETTINGS 	-
****************************************/@media only screen and (min-width: 768px) and (max-width: 959px) {
  
}
@media only screen and (min-width: 480px) and (max-width: 767px) {
  .responsive .tp-bullets.tp-thumbs {
    width: 300px !important;
    height: 30px !important;
  }
  .responsive .tp-bullets.tp-thumbs .tp-mask {
    width: 300px !important;
    height: 30px !important;
  }
  .responsive .tp-bullets.tp-thumbs .bullet {
    width: 60px !important;
    height: 30px !important;
  }
}
@media only screen and (min-width: 0px) and (max-width: 479px) {
  .responsive .tp-bullets {
    display: none;
  }
  .responsive .tparrows {
    display: none;
  }
}
/*********************************************

	-	BASIC SETTINGS FOR THE BANNER	-

***********************************************/
.tp-simpleresponsive img {
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -o-user-select: none;
}
.tp-simpleresponsive ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.tp-simpleresponsive > ul li {
  list-stye: none;
  position: absolute;
  visibility: hidden;
}
/*  CAPTION SLIDELINK   **/
.caption.slidelink a div {
  width: 10000px;
  height: 10000px;
}
.tp-loader {
  background: url(http://error404.000webhost.com/?) no-repeat 10px 10px;
  margin: -22px -22px;
  top: 50%;
  left: 50%;
  z-index: 10000;
  position: absolute;
  width: 44px;
  height: 44px;
  border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
}
/* ==========================================================================
   Base styles
   ========================================================================== */
h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: 'Quicksand';
}
a {
  color: #1d8cc2;
}
a:hover {
  color: #135c7f;
}
.baseColor {
  color: #1d8cc2;
}
.baseBG {
  background: #1d8cc2;
}
::-moz-selection {
  background: #b3d4fc;
  text-shadow: none;
}
::selection {
  background: #b3d4fc;
  text-shadow: none;
}
/*
 * A better looking default horizontal rule
 */
hr {
  display: block;
  height: 3px;
  border: 0;
  border-top: 0px;
  margin: 24px 0 35px 0;
  background: url('http://error404.000webhost.com/?') repeat-x;
  padding: 0;
}
img {
  vertical-align: middle;
}
fieldset {
  border: 0;
  margin: 0;
  padding: 0;
}
textarea {
  resize: vertical;
}
/* ==========================================================================
   Chrome Frame prompt
   ========================================================================== */
.chromeframe {
  margin: 0.2em 0;
  background: #ccc;
  color: #000;
  padding: 0.2em 0;
}
/* ==========================================================================
   Header
   ========================================================================== */
header#header {
  background: #fff;
  *zoom: 1;
  padding: 25px 0 0px 0;
  border-bottom: 4px solid #eee;
}
header#header:before,
header#header:after {
  display: table;
  content: "";
  line-height: 0;
}
header#header:after {
  clear: both;
}
header#header:before,
header#header:after {
  display: table;
  content: "";
  line-height: 0;
}
header#header:after {
  clear: both;
}
header#header nav {
  float: right;
  margin-top: 16px;
}
header#header nav select {
  display: none;
}
header#header nav ul li {
  position: relative;
  float: left;
  list-style: none;
  margin-left: 20px;
  font-weight: bold;
  text-transform: uppercase;
  font-size: 11px;
}
header#header nav ul li a {
  float: left;
  padding: 6px 10px 30px 10px;
}
header#header nav ul li a.selected {
  color: #135c7f;
}
header#header nav ul li.current-menu-item > a,
header#header nav ul li.current-menu-parent > a {
  color: #52575f;
}
header#header nav ul li ul {
  display: none;
  position: absolute;
  top: 56px;
  left: -5px;
  margin: 0px;
  background: #fff;
  width: 160px;
  border-top: 4px solid #1d8cc2;
  -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
}
header#header nav ul li ul li {
  float: none;
  margin-left: 0px;
  display: block;
  width: auto;
}
header#header nav ul li ul li a {
  float: none;
  display: block;
  padding: 8px 15px;
}
header#header nav ul li ul li a:hover,
header#header nav ul li ul li.current-menu-item a {
  background: #eee;
}
/* ==========================================================================
   Slider
   ========================================================================== */
section.hero {
  background: #eee;
  position: relative;
  overflow: hidden;
  height: 460px;
}
/* ==========================================================================
   Content
   ========================================================================== */
#main.page {
  position: relative;
}
#main.page section.content {
  padding: 20px 0;
}
#main.page section.content h1.page-title {
  font-size: 24px;
  line-height: 1.2;
  margin-top: 0px;
  margin-bottom: 6px;
}
#main.page section.content p,
#main.page section.content ul,
#main.page section.content ol,
#main.page section.content pre {
  font-size: 15px;
  font-weight: 300;
  line-height: 1.7;
  margin-bottom: 28px;
}
#main.page section.content ul {
  list-style-type: square;
}
#main.page section.content ul li,
#main.page section.content ol li {
  line-height: 28px;
}
#main.page section.content ol ol,
#main.page section.content ul ul,
#main.page section.content ol ul,
#main.page section.content ul ol {
  margin-bottom: 0px;
}
#main.page section.content table {
  margin-bottom: 28px;
}
#main.page section.content ul.unstyled {
  list-style: none;
}
#main.page section.content .align-left {
  float: left;
  margin-right: 18px;
  margin-bottom: 18px;
}
#main.page section.content .align-right {
  float: right;
  margin-left: 18px;
  margin-bottom: 18px;
}
/* ==========================================================================
   Sections
   ========================================================================== */
section.header {
  padding: 10px 0;
  background: #1d8cc2;
  border-bottom: 1px solid #eee;
  -webkit-box-shadow: inset 0 2px 2px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: inset 0 2px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 2px 2px rgba(0, 0, 0, 0.1);
}
section.header h1,
section.header h2,
section.header h3,
section.header h4,
section.header h5,
section.header h6 {
  font-family: 'Helvetica Neue', helvetica, arial, sans-serif;
  font-weight: 300;
  color: #fff;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}
section.header p.excerpt {
  color: #fff;
  font-size: 16px;
  font-weight: 300;
  line-height: 1.8;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}
section.content {
  padding: 40px 0 20px 0;
}
section.content h1,
section.content h2,
section.content h3,
section.content h4,
section.content h5,
section.content h6 {
  font-family: 'Helvetica Neue', helvetica, arial, sans-serif;
}
section.content [class*="span"] {
  margin-bottom: 20px;
}
section.content [class*="span"] [class*="span"] {
  margin-bottom: 0px;
}
section.features {
  background: #1d8cc2;
  padding: 40px 0;
}
section.portfolio {
  padding: 20px 0 0 0;
}
section.portfolio #portfolio-filter {
  margin-left: 40px;
}
section.portfolio .portfolio_item {
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin-bottom: 40px;
  box-shadow: 1px 1px 3px -1px rgba(0, 0, 0, 0.5);
}
section.portfolio .portfolio_item h4 {
  font-family: 'Helvetica Neue', Helvetica, Arial;
  font-size: 13px;
  letter-spacing: 1px;
  line-height: 20px;
  text-transform: uppercase;
  margin: 10px 10px 0 10px;
}
section.portfolio .portfolio_item h4 a {
  color: #52575f;
  display: inline;
  background: none;
}
section.portfolio .portfolio_item h4 small {
  font-size: 10px;
}
section.portfolio .portfolio_item i {
  position: absolute;
  top: 50%;
  left: 50%;
  color: #fff;
  font-size: 16px;
  margin-left: -8px;
  margin-top: -8px;
  opacity: 0.7;
  filter: alpha(opacity=70);
  display: none;
}
section.portfolio .portfolio_item p {
  margin: 2px 10px 10px 10px;
  color: #888;
}
section.portfolio .portfolio_item a {
  background: #000;
  position: relative;
  display: block;
}
section.portfolio .portfolio_item a img {
  border-bottom: 1px solid #ddd;
  -webkit-transition: opacity 0.2s linear;
  -moz-transition: opacity 0.2s linear;
  -o-transition: opacity 0.2s linear;
  transition: opacity 0.2s linear;
}
section.portfolio .portfolio_item .arrow {
  bottom: 0px;
  left: 10px;
  position: absolute;
  width: 0;
  height: 0;
  border-left: 8px solid transparent;
  border-right: 8px solid transparent;
  border-bottom: 8px solid #e5e5e5;
}
section.portfolio .portfolio_item .arrow::after {
  display: block;
  content: " ";
  bottom: -9px;
  left: -7px;
  position: absolute;
  width: 0;
  height: 0;
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-bottom: 7px solid #fff;
}
section.portfolio #filters {
  margin-top: 0px;
  margin-bottom: 24px;
  text-align: center;
  background: url('http://error404.000webhost.com/?') repeat-x bottom center;
  padding-bottom: 20px;
}
section.portfolio #filters a {
  font-family: 'Helvetica Neue', Helvetica, Arial;
  font-size: 11px !important;
  letter-spacing: 1px;
  line-height: 20px;
  text-transform: uppercase;
  margin: 0px 2px;
  padding: 4px 10px;
}
section.portfolio #filters a.active {
  background: #eee;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  color: #333;
}
html.no-touch .portfolio_item a:hover img {
  opacity: 0.3;
  filter: alpha(opacity=30);
}
html.no-touch .portfolio_item a:hover i {
  display: block;
}
section.call-to-action {
  padding: 40px 0;
  background: #1b262b;
}
section.call-to-action.light {
  background: #b9bdbf;
}
section.blog {
  background: #f5f5f5;
}
section.map {
  border-bottom: 4px solid #eee;
  margin-bottom: 15px;
}
/* ==========================================================================
   Widgets
   ========================================================================== */
.widget.feature {
  position: relative;
  text-align: center;
}
.widget.feature .icon-feature {
  display: block;
  width: 80px;
  height: 80px;
  line-height: 83px;
  font-size: 40px;
  margin: 0px auto;
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
  background: #0c5f87;
  color: #fff;
}
.widget.feature h3 {
  font-weight: 300;
  color: #fff;
}
.widget.feature p {
  color: #b7e0f4;
  font-size: 14px;
  line-height: 22px;
  margin-left: 20px;
  margin-right: 20px;
}
.widget.feature p a {
  color: inherit;
  border-bottom: 1px dotted #b7e0f4;
}
.widget.feature p a:hover {
  text-decoration: none;
}
.widget.feature a.action {
  color: #b7e0f4;
  background: #1083ba;
  font-size: 13px;
  padding: 4px 10px;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  width: auto;
  border-bottom: 0px;
}
.widget.feature a.action:hover {
  color: #fff;
  background: #0e6f9e;
}
.widget.icon-box p,
.widget.icon p {
  margin-left: 45px;
  font-size: 12px !important;
  line-height: 20px !important;
  font-weight: normal !important;
}
.widget.icon-box h4,
.widget.icon h4 {
  position: relative;
  padding-left: 45px;
  font-size: 13px;
  letter-spacing: 1px;
  line-height: 20px;
  text-transform: uppercase;
  margin-bottom: 5px;
}
.widget.icon-box h4 i,
.widget.icon h4 i {
  position: absolute;
}
.widget.icon-box i {
  color: #fff;
  left: 0px;
  top: 3px;
  background: #1d8cc2;
  line-height: 34px;
  width: 34px;
  height: 34px;
  font-size: 16px;
  text-align: center;
  border-radius: 40px;
}
.widget.icon-box.red h4 {
  color: #dd4b37;
}
.widget.icon-box.red i {
  background: #dd4b37;
}
.widget.icon-box.blue h4 {
  color: #1d8cc2;
}
.widget.icon-box.blue i {
  background: #1d8cc2;
}
.widget.icon-box.green h4 {
  color: #78ba37;
}
.widget.icon-box.green i {
  background: #78ba37;
}
.widget.icon-box.yellow h4 {
  color: #dbd134;
}
.widget.icon-box.yellow i {
  background: #dbd134;
}
.widget.icon-box.purple h4 {
  color: #ba55db;
}
.widget.icon-box.purple i {
  background: #ba55db;
}
.widget.icon-box.pink h4 {
  color: #e962a1;
}
.widget.icon-box.pink i {
  background: #e962a1;
}
.widget.icon-box.grey h4 {
  color: #676869;
}
.widget.icon-box.grey i {
  background: #676869;
}
.widget.icon i {
  left: 10px;
  top: 5px;
  color: #1d8cc2;
  font-size: 24px;
}
.widget.icon.red h4 {
  color: #dd4b37;
}
.widget.icon.red i {
  color: #dd4b37;
}
.widget.icon.blue h4 {
  color: #1d8cc2;
}
.widget.icon.blue i {
  color: #1d8cc2;
}
.widget.icon.green h4 {
  color: #78ba37;
}
.widget.icon.green i {
  color: #78ba37;
}
.widget.icon.yellow h4 {
  color: #dbd134;
}
.widget.icon.yellow i {
  color: #dbd134;
}
.widget.icon.purple h4 {
  color: #ba55db;
}
.widget.icon.purple i {
  color: #ba55db;
}
.widget.icon.pink h4 {
  color: #e962a1;
}
.widget.icon.pink i {
  color: #e962a1;
}
.widget.icon.grey h4 {
  color: #676869;
}
.widget.icon.grey i {
  color: #676869;
}
.widget.call-to-action .btn-cta {
  padding: 10px 30px;
  font-size: 16px;
  font-family: 'Quicksand';
}
.widget.call-to-action p {
  font-size: 26px;
  color: #fff;
  font-weight: 300;
  font-family: 'Quicksand';
  line-height: 1.1;
  margin-top: 8px;
}
.widget.call-to-action.center {
  text-align: center;
}
/* ==========================================================================
   Blog
   ========================================================================== */
article.post {
  margin-bottom: 24px;
  padding-bottom: 20px;
  background: url('http://error404.000webhost.com/?') repeat-x bottom;
}
article.post h2.post-title {
  font-size: 26px;
  margin-bottom: 0px;
  line-height: 1.2;
}
article.post h2.post-title a {
  color: #3b3f45;
}
article.post span.meta {
  color: #888;
  margin-bottom: 20px;
  display: block;
  *zoom: 1;
}
article.post span.meta:before,
article.post span.meta:after {
  display: table;
  content: "";
  line-height: 0;
}
article.post span.meta:after {
  clear: both;
}
article.post span.meta:before,
article.post span.meta:after {
  display: table;
  content: "";
  line-height: 0;
}
article.post span.meta:after {
  clear: both;
}
article.post span.meta a {
  font-weight: bold;
}
article.post img {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 5px;
  border: 1px solid #eee;
}
/* ==========================================================================
   Blog Grid
   ========================================================================== */
.blog_grid {
  height: auto;
  position: relative;
}
.blog_grid .post {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 5px 15px;
  background: #fff;
  -webkit-box-shadow: 0 1px 4px -2px #000000;
  -moz-box-shadow: 0 1px 4px -2px #000000;
  box-shadow: 0 1px 4px -2px #000000;
  margin-bottom: 40px !important;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
}
.blog_grid .post h2.post-title {
  font-size: 18px;
  margin-bottom: 10px;
}
.blog_grid .post .meta {
  margin-bottom: 10px;
}
.blog_grid .post.type-quote {
  background: #404040;
}
.blog_grid .post.type-quote blockquote {
  color: #fff;
  border-left: none;
  margin-top: 24px;
}
.blog_grid .post.type-quote blockquote p {
  font-size: 18px !important;
  line-height: 1.2;
}
.blog_grid .post.type-image {
  background: #000;
  padding: 0;
}
.blog_grid .post.type-image img {
  padding: 0;
  border: none;
  -webkit-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  transition: opacity 0.4s;
}
.blog_grid .post.type-image i {
  position: absolute;
  left: 50%;
  top: 50%;
  font-size: 20px;
  margin-left: -10px;
  margin-top: -10px;
  color: #fff;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  transition: opacity 0.4s;
}
.blog_grid .post.type-image a:hover img {
  opacity: 0.4;
  filter: alpha(opacity=40);
}
.blog_grid .post.type-image a:hover i {
  opacity: 1;
  filter: alpha(opacity=100);
}
/* ==========================================================================
   Elements
   ========================================================================== */
.btn {
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
}
blockquote {
  font-family: georgia;
  font-style: italic;
}
blockquote p {
  font-size: 14px !important;
}
blockquote.block {
  background: #f6f6f6;
  border-left-color: #1d8cc2;
  padding: 15px;
}
blockquote.block p {
  margin-bottom: 0px !important;
}
blockquote.bordered {
  border: 1px solid #ddd;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  padding: 15px;
}
blockquote.bordered p {
  margin-bottom: 0px !important;
}
.team_member {
  margin-top: 20px;
  margin-bottom: 0px !important;
  text-align: center;
}
.team_member .image {
  display: block;
  margin-bottom: 18px;
  position: relative;
}
.team_member p {
  margin-left: 15px;
  margin-right: 15px;
  margin-bottom: 5px !important;
}
.team_member .social {
  position: absolute;
  bottom: 5px;
  right: 5px;
}
.note {
  background: #f5ebb6;
  position: relative;
  padding: 35px 35px 20px 35px;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  margin-bottom: 28px;
}
.note h4 {
  position: absolute;
  left: 0;
  top: 0;
  padding: 2px 20px 2px 15px;
  margin: 0px;
  font-size: 12px;
  font-weight: bold;
  text-transform: uppercase;
  background: #e6d269;
  text-shadow: none;
  color: #916f35;
}
.note p {
  font-weight: 500 !important;
  color: #b78c43;
  margin-bottom: 0px !important;
}
.note a {
  color: #916f35;
}
.nav-tabs {
  margin-bottom: 0px !important;
  border-bottom: 0px;
}
.nav-tabs li {
  list-style: none;
}
.nav-tabs li a {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  color: #52575f;
  font-size: 11px !important;
  text-transform: uppercase;
  font-weight: 500;
  letter-spacing: 1px;
}
.nav-tabs li.active {
  background: none;
}
.nav-tabs li.active a {
  color: #1d8cc2;
}
.nav-tabs li.active a:hover {
  color: #1d8cc2;
}
.tab-content {
  margin-top: 0px;
  border: 1px solid #ddd;
  padding: 22px 10px 0 10px;
}
.accordion .accordion-group {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
}
.accordion .accordion-group .accordion-heading {
  font-weight: 500;
}
.accordion .accordion-group .accordion-heading a {
  color: #52575f;
  font-size: 11px !important;
  text-transform: uppercase;
  font-weight: 500;
  letter-spacing: 1px;
}
.accordion .accordion-group .accordion-inner p {
  margin: 4px 0 !important;
  font-size: 12px !important;
  font-weight: normal !important;
}
.table-bordered {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
}
.flickr_widget img {
  width: 100px;
  margin-bottom: 10px;
  margin-right: 10px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 3px;
  border: 1px solid #ddd;
}
.pagination {
  margin-top: 0px;
}
.pagination span,
.pagination a {
  font-size: 11px;
  color: #52575f;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-right: 5px;
  padding: 3px 6px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
}
.pagination .current {
  background: #eee;
}
.current_page {
  font-size: 11px;
  text-align: right;
  text-transform: uppercase;
}
/* ==========================================================================
   Sidebar
   ========================================================================== */
aside#sidebar .widget,
aside#sidebar-left .widget {
  margin-top: 9px;
  margin-bottom: 18px;
  display: block;
}
aside#sidebar .widget h4.widget-title,
aside#sidebar-left .widget h4.widget-title {
  font-size: 13px;
  letter-spacing: 1px;
  text-transform: uppercase;
}
aside#sidebar .widget ul li,
aside#sidebar-left .widget ul li {
  list-style: none;
  margin: 0px 0 15px 0;
}
aside#sidebar .widget ul li a,
aside#sidebar-left .widget ul li a {
  font-weight: bold;
  font-size: 11px;
  text-transform: uppercase;
}
aside#sidebar .widget ul li.current-menu-item,
aside#sidebar-left .widget ul li.current-menu-item {
  margin-left: -10px;
}
aside#sidebar .widget ul li.current-menu-item a,
aside#sidebar-left .widget ul li.current-menu-item a {
  background: #eee;
  padding: 5px 10px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
aside#sidebar .widget.social ul li a i,
aside#sidebar-left .widget.social ul li a i {
  font-size: 15px;
}
aside#sidebar .widget.social ul li a i.icon-twitter,
aside#sidebar-left .widget.social ul li a i.icon-twitter {
  color: #00aced;
}
aside#sidebar .widget.social ul li a i.icon-facebook,
aside#sidebar-left .widget.social ul li a i.icon-facebook {
  color: #3b5998;
}
aside#sidebar .widget.social ul li a i.icon-github,
aside#sidebar-left .widget.social ul li a i.icon-github {
  color: #333333;
}
aside#sidebar .widget.social ul li a i.icon-linkedin,
aside#sidebar-left .widget.social ul li a i.icon-linkedin {
  color: #4875b4;
}
aside#sidebar .widget.social ul li a i.icon-google-plus,
aside#sidebar-left .widget.social ul li a i.icon-google-plus {
  color: #c63d2d;
}
aside#sidebar .widget.social ul li a i.icon-pinterest,
aside#sidebar-left .widget.social ul li a i.icon-pinterest {
  color: #cb2027;
}
aside#sidebar .widget.posts ul li,
aside#sidebar-left .widget.posts ul li {
  line-height: 1.2;
}
aside#sidebar .widget.posts ul li span,
aside#sidebar-left .widget.posts ul li span {
  color: #aaa;
  display: inline-block;
  font-size: 10px;
  text-transform: uppercase;
}
aside#sidebar .widget.posts ul li.current-menu-item,
aside#sidebar-left .widget.posts ul li.current-menu-item {
  margin-left: 0px;
}
aside#sidebar .widget.posts ul li.current-menu-item a,
aside#sidebar-left .widget.posts ul li.current-menu-item a {
  background: none;
  padding: 0px;
  color: #52575f;
}
aside#sidebar .widget.tabs ul li,
aside#sidebar-left .widget.tabs ul li {
  margin-bottom: 0px !important;
}
aside#sidebar .widget.tabs .tab-content,
aside#sidebar-left .widget.tabs .tab-content {
  padding: 10px;
}
aside#sidebar .widget.tabs .tab-content ul,
aside#sidebar-left .widget.tabs .tab-content ul {
  margin: 0px;
}
aside#sidebar .widget.tabs .tab-content ul li,
aside#sidebar-left .widget.tabs .tab-content ul li {
  margin-bottom: 0px;
}
aside#sidebar-left ul {
  margin-left: 0px;
}
/* ==========================================================================
   Comments
   ========================================================================== */
#comments h2#comments-title {
  font-size: 18px;
}
#comments ol.commentlist {
  margin: 0px;
  padding-left: 80px;
}
#comments ol.commentlist li {
  margin: 0;
  list-style: none;
  position: relative;
  margin-bottom: 15px;
  padding: 10px;
  background: #f5f5f5;
  border: 1px solid #ddd;
}
#comments ol.commentlist li .comment-meta {
  background: none;
  font-size: 11px;
  text-transform: uppercase;
  font-weight: bold;
  letter-spacing: 1px;
  line-height: 1.2;
  margin-top: 4px;
  margin-bottom: 10px;
}
#comments ol.commentlist li .comment-meta .avatar {
  position: absolute;
  left: -80px;
  top: 0;
}
#comments ol.commentlist li .reply a {
  background: #eee;
  font-size: 11px;
  color: #52575f;
  padding: 5px 10px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  font-weight: normal;
}
#comments ol.commentlist li ul {
  margin: 25px 0 0 0px;
  padding: 0px;
}
#comments ol.commentlist li ul li {
  padding-left: 90px;
  background: #fefefe;
  margin-bottom: 0px;
  margin-top: 10px;
}
#comments ol.commentlist li ul li .comment-meta .avatar {
  top: 10px;
  left: 10px;
}
#comments #respond h3 {
  font-size: 18px;
  line-height: 1;
}
#comments #respond label {
  display: inline;
}
#comments #respond span.required {
  color: #dd4b37;
}
#comments #respond input,
#comments #respond textarea {
  display: block;
  width: 300px;
}
#comments #respond input[type=submit] {
  width: 120px;
}
#comments #respond .form-allowed-tags code {
  background: none;
  border: none;
  color: #1d8cc2;
}
/* ==========================================================================
   Forms
   ========================================================================== */
form input[type=text],
form textarea,
form input[type=email] {
  border: 1px solid #aaa;
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
}
form input[type=text]:focus,
form textarea:focus,
form input[type=email]:focus {
  -webkit-box-shadow: inset 1px 1px 3px #dddddd;
  -moz-box-shadow: inset 1px 1px 3px #dddddd;
  box-shadow: inset 1px 1px 3px #dddddd;
  border: 1px solid #999;
}
form label {
  margin-top: 10px;
}
/* ==========================================================================
   Footer
   ========================================================================== */
footer {
  background: #314048;
}
footer section.bottom {
  padding: 0 0 30px 0;
}
footer section.bottom p.copyright {
  font-size: 11px;
  color: #aaa;
  text-align: center;
  font-weight: bold;
}
footer section.content h1,
footer section.content h2,
footer section.content h3,
footer section.content h4,
footer section.content h5,
footer section.content h6 {
  color: #b7e0f4;
  letter-spacing: 1px;
}
footer section.content p,
footer section.content li,
footer section.content address,
footer section.content a {
  color: #b3bfc5;
  font-weight: 500;
}
footer section.content address {
  margin-bottom: 8px;
}
footer section.content li {
  margin: 5px 0;
}
footer section.content a {
  color: #edf0f1;
}
footer section.content a:hover {
  color: #fff;
  text-decoration: underline;
}
footer section.content .widget h4 {
  text-transform: uppercase;
  font-size: 13px;
  letter-spacing: 1px;
}
/* Large desktop */
@media (min-width: 1200px) {
  
}
/* Portrait tablet to landscape and desktop */
@media (min-width: 768px) and (max-width: 979px) {
  section.portfolio #portfolio-filter {
    margin-left: 20px !important;
  }
}
/* Landscape phone to portrait tablet */
@media (max-width: 767px) {
  body {
    padding: 0px;
  }
  header nav.menu {
    margin-top: 10px;
    width: 100%;
    display: block;
  }
  header nav.menu select {
    display: block !important;
    width: 100%;
    font-size: 16px;
  }
  header nav.menu ul {
    display: none;
  }
  .container {
    padding: 0 15px;
  }
  section.hero {
    height: 340px;
  }
  section.call-to-action {
    text-align: center;
  }
  section.call-to-action .btn {
    display: block;
    width: auto;
    margin: 20px 30px 0;
  }
  section.features .widget {
    margin-bottom: 40px;
  }
  section.features .widget:last-child {
    margin-bottom: 0px;
  }
  section.features .widget p {
    max-width: 400px;
    margin: 10px auto;
  }
  section.portfolio #portfolio-filter {
    margin-left: 0px !important;
  }
  section.portfolio .portfolio_item {
    width: 48%;
    margin-left: 1%;
    margin-right: 1%;
    margin-bottom: 10px;
  }
  footer .widget {
    text-align: center;
  }
  footer .widget h4 {
    margin-top: 30px;
  }
  footer .widget:first-child h4 {
    margin-top: 0px;
  }
  footer .widget p {
    max-width: 400px;
    margin: 10px auto;
  }
}
/* Landscape phones and down */
@media (max-width: 480px) {
  section.hero {
    display: none;
  }
}
</style>-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- Header area ================== -->
        <header id="header">
            <div class="container">


                   <!--<nav id="mainmenu" class="menu">
                        <ul>
                            <li><a href="../index-2.html">Home</a></li>
                            <li><a href="#">Stem Classes</a>
                                <ul>
                                    <li><a href="computer-tech.html">Computer Technology</a></li>
									<li><a href="biotech.html">Biotechnology</a></li>
									<li class="current-menu-item"><a href="engineering.html">Pre-engineering</a></li>
                                </ul>
                            </li>
                            <li><a href="#">TSA Chapter</a>
                                <ul>
                                    <li><a href="../tsa/about.html">About Us</a></li>
                                </ul>
                            </li>
							<li><a href="#">Design Brief</a>
                                <ul>
                                    <li><a href="../brief/brief.html">The Brief</a></li>
									<li><a href="../brief/timeline.html">Timeline of News Media</a></li>
									<li><a href="../brief/habits.html">Readers' Changing Habits</a></li>
									<li><a href="../brief/suggestions.html">News Media Corporations</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>-->
					<a href="/"><h1 style="font-family: 'Roboto Slab', serif; color: #1d8cc2;"><img src="http://uncasg.org/images/logo-60-415.png" /></h1></a>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					
					

            </div><!-- /container -->
        </header><!-- /header -->
