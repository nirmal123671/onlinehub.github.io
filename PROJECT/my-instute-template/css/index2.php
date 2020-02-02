<?php include_once('config.php');    

$validate=new Validation();
if($_SESSION['success']!="")
{
$stat['success']=$_SESSION['success'];
unset($_SESSION['success']);
}
$aryDetail=$db->getRow("select * from  userdetail where id='".$iInstituteId."'"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">     

<head>    

<title> Study Courses </title>


<?php include('inc.meta.php');?>
<link rel="stylesheet" href="css/study.css" />
<link rel="stylesheet" href="css/bsw-inst.css" />
  <style>
  
  
 .rtfgd .panel-default {
    border-color: #ddd !important;
    height: 450px;
    overflow: hidden;
}
  
   .rtfgd{    padding: 39px 0 14px;    background: #fff;}
  
  
 #jquery-script-menu {
position: fixed !important;
height: 90px !important;
width: 100% !important;
top: 0 !important;
left: 0 !important;
border-top: 5px solid #316594 !important;
background: #fff !important;
-moz-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.16)!important;
-webkit-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.16) !important;
box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.16) !important;
z-index: 999999 !important;
padding: 10px 0 !important;
-webkit-box-sizing:content-box !important;
-moz-box-sizing:content-box !important;
box-sizing:content-box !important;
}

.jquery-script-center {
width: 960px !important !important;
margin: 0 auto !important;
}
.jquery-script-center ul {
width: 212px !important;
float:left !important;
line-height:45px !important;
margin:0 !important;
padding:0 !important;
list-style:none !important;
}
.jquery-script-center a {
	text-decoration:none !important;
}
.jquery-script-ads {
width: 728px !important;
height:90px !important;
float:right !important;
}
.jquery-script-clear {
clear:both !important;
height:0 !important;
}

.glyphicon
{
    margin-right:4px !important; /*override*/
	font-family: 'Glyphicons Halflings'!important;
}

.pagination .glyphicon
{
    margin-right:0px !important; /*override*/
}

.pagination a
{
    color:#555 !important;
}

.panel ul
{
    padding:0px;
    margin:0px;
    list-style:none;
}
.panel-footer {
    padding: 10px 15px;
    background-color: #f5f5f5;
    border-top: 1px solid #ddd;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;

	.pagination>li>a, .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    line-height: 1.428571429 !important;
    text-decoration: none;
    color: #000000;
    background-color: #fff;
    border: 1px solid #ddd;
    margin-left: -1px !important;
}
.pagination>li:first-child>a, .pagination>li:first-child>span {
    margin-left: 0;
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px;
}
.pagination>li:last-child>a, .pagination>li:last-child>span {
    border-bottom-right-radius: 4px;
    border-top-right-radius: 4px;
}
.pagination>li>a, .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    line-height: 1.428571429 !important;
    text-decoration: none;
    color: #000000;
    background-color: #fff;
    border: 1px solid #ddd;
    margin-left: -1px !important;
}



.pagination .glyphicon {
    margin-right: 0px !important;
}

.pagination {
    display: inline-block;
    padding-left: 0 !important;
    margin: 20px 0 ;
    border-radius: 4px;
}
.panel-default > .panel-heading {
    color: #333 !important;
    background-color: #f5f5f5 !important;
    border-color: #ddd !important;
}
.news_txt{display:block !important; }
.news-item
{
    padding:4px 4px !important;
    margin:0px !important;
    border-bottom:1px dotted #555 !important; 
}
 .pnf_main{.panel-footer {
    padding: 10px 15px !important;
    background-color: #f5f5f5 !important;
    border-top: 1px solid #ddd !important;
    border-bottom-right-radius: 3px !important;
    border-bottom-left-radius: 3px !important;
}
 
.news_txt h3 {
	font-size:15px !important;
	font-weight:800!important;
	
}
.news_txt p {
	font-size:14px !important;
	font-weight:500!important;
	
}
.ph_main{
    background-image: -webkit-linear-gradient(top,#f5f5f5 0,#e8e8e8 100%);
    background-image: linear-gradient(to bottom,#f5f5f5 0,#e8e8e8 100%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#ffe8e8e8', GradientType=0);
	  color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;
	 padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
}

 </style>
 
<style>                                         


 
 


.form-control { 
	display: block;
	width: 100%;
	height: 36px;
}

.mobilenewwww1 {
    margin-left: -20px;
}

.mobilenewss {
    padding: 0 0 0 0;
}

.mobileapps h4 {
    font-size: 20px;
    color: #666;
    line-height: 25px;
    padding-top: 0px;
}







 
 

.custom-hover:after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 29px;
    height: 29px;
    margin-top: -14.5px;
    margin-left: -14.5px;
    background: url(/wp-content/themes/marketly/img/hover_icon.png) no-repeat center center;
    opacity: 0;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    transform: scale(0);
    -webkit-transition: -webkit-transform 0.5s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.5s;
    -moz-transition: -moz-transform 0.5s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.5s;
    transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.5s;
    z-index: 2;
}




.custom-hover:before {
    content: '';
    display: block;
    position: absolute;
    top: 0;
	width: 100%;
	height: 100%;
	overflow: hidden;
    left: 0;
    right: 0;
    padding-bottom: 100%;
    opacity: 1;
    background: #7ab55c;
    -moz-border-radius: 50%;
    border-radius: 0px;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    transform: scale(0);
    -webkit-transition: -webkit-transform 0.5s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.5s;
    -moz-transition: -moz-transform 0.5s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.5s;
    transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.5s;
    z-index: 1;
}


.custom-hover:hover:before {
    opacity: 0.7;
    -webkit-transform: scale(1.55);
    -moz-transform: scale(1.55);
    -ms-transform: scale(1.55);
    transform: scale(1.55);
	overflow: hidden;
}

.col-item .photo {
    position: relative;
    overflow: hidden;                	
}

 

 








#first-slider .carousel .item {
    min-height: 330px;
}




 
 

.lcourses .btnssetss {
   background-color: rgb(84, 134, 148);
    border: solid 2px rgb(84, 134, 148);
    color: #fff;
    padding: 6px 10px 7px;
    font-weight: 100;
    font-size: 13px;
    border-radius: 5px;
    cursor: pointer;
}


.lcourses .btnssetss:hover {
   background-color: rgb(84, 134, 148);
    border: solid 2px rgb(84, 134, 148);
    color: #fff;
    padding: 6px 10px 7px;
    font-weight: 100;
    border-radius: 5px;
    cursor: pointer;
}

.col-item:hover .info {
    background-color: #fff;
}

.servicesk12 h3 {
    line-height: 25px;
}

.gggr .col-item {
    margin-bottom: 30px;
}



.lcourses1 h5 {

    margin-top: 5px;
    max-height: 38px;
    min-height: 38px;
    overflow: hidden;
}





.servicesk12 .ssss {
    width: 100%;
    margin-top: 7px;
    border-radius: 0px!important;
}
 
.product-old h5 {
    text-align: center;
    font-size: 19px !important;
    color: #333 !important;
    font-weight: normal;
}
.lcourses h6 {
    font-size: 15px;
    text-align: center;
    font-weight: normal;
    color: #827979;
    padding: 6px 0px 4px;
    line-height: 1.6;
}

.btn-success:hover, .btn-success:focus, .btn-success.focus, .btn-success:active, .btn-success.active, .open>.dropdown-toggle.btn-success {
    color: #fff;
    background-color: rgb(84, 134, 148)!important;
    border-color: rgb(84, 134, 148)!important;
}
.latestcourses12 {
    background-color: #f4f4f4;
    padding: 35px 0 55px!important;
}
.latestcourses12 .col-item .info {
    padding: 30px 20px;
    margin-top: 1px;
    box-shadow: none;
}

.lcourses1 h5 {
    margin-left: 10px;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    font-size: 16px;
    font-weight: 200;
    line-height: 1.2;
    color: #171819;
    margin-top: 0;
    margin-bottom: 15px;
    text-decoration: none;
}
.lcourses1 h6 {
    color: #777;
    padding: 6px 0px 4px;
    margin-left: 10px;
    font-size: 15px;
    line-height: 1.6;
    font-weight: 200;
    margin-bottom: 15px;
    font-style: normal;
    min-height: 70px;
    max-height: 70px;
    overflow: hidden;
	margin-top: -10px;
}
.ankeess a {
    color: #000;
    text-decoration: none;
    font-weight: 200;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    font-size: 12px;
}

.ankeess {
    padding: 5px 10px 4px;
    float: right;
}

.gggr .col-item {
    border: 1px solid #E1E1E1;
    border-radius: 5px;
    background: #FFF;
    min-height: 410px;
    max-height: 410px;
    overflow: hidden;
}

.box-area .demo1 li{
	overflow:hidden!important;
}
.panel-default > .panel-heading {
    background-color: #8BC34A !important;
    border-color: #8BC34A !important;
    border-radius: 0 !important;
    padding: 11px 15px!important;
    font-weight: normal;
    font-size: 19px;
}
.buttonsread:hover {
    font-size: 18px;
    color: #fff;
    background: #548694 !important;
    border: solid 1px #548694 !important;
    padding: 9px 19px 10px;
    cursor: pointer;
    font-weight: 100;
    width: 86%;
}
.buttonsread {
    font-size: 18px;
    color: #fff;
    background: #548694 !important;
    border: solid 1px #548694 !important;
    padding: 9px 19px 10px;
    cursor: pointer;
    font-weight: 100;
    width: 86%;
}
.box-area img{
	width:100%!important;
}
.demo1 {
    max-height: 500px!important;
    min-height: 500px!important;
}
.mobileapps {
    background-color: #fff !important;
    padding: 45px 0 54px;
    background-image: none;
}
 

.mobileapps .imgss {
    position: relative;
    top: 0;
    bottom: 0;
}
 
 
.latestcourses12 h1 {
    color: #333;
    font-weight: normal!important;
    text-align: center;
    font-size: 26px!important;
}
.heading-section h1 {
    color: #333;
    font-weight: normal!important;
    text-align: center;
    font-size: 26px!important;
    text-transform: uppercase;
}
.carousel-control.left {
    top: 0px;
}
.carousel-control.right {
    top: 0px;
}
@media (max-width: 1920px) and (min-width: 1275px)
{
.carousel-control.left {
    left: -18px !important;
}
.carousel-control.right {
    right: -18px !important;
}

.timeline-heading h5 {
    font-size: 16px;
}

.timeline-heading h2 {
    font-size: 20px;
}

.kd-pagesection .thememargin h3 {
    font-size: 22px;
}

.kd-pagesection .thememargin p {

    font-size: 18px;
}




}


@media (max-width: 767px) {
	
.topbar .left p {
    font-size: 15px;
}

 



	
	.sssffd.imgg1 {
    width:100%!important;
}

.mobileapps .imgss {
    width: 70%;
}

 
 

.mobilenewwww1 {
    margin-left: 0;
    text-align: center;
}
 

 

.career-description h2 {
    font-size: 18px !important;              
    padding-bottom: 10px !important;
}

.servicesk12 .ssss {
    width: 90px;
}
	
	
	
}







</style>


<style>
.broun-block {
    padding-bottom: 0;
    padding: 0 !important;
    margin-top: -29px;
}

#gallery {
  padding: 10px 0 0 10px;
  background-color: white;
  text-align: center;
  margin: 0 auto;
  border: 2px solid blue;
}


.gallery-item {
    width: 32.6%;
	position: relative;
    height: 175px;
    float: left;
    margin: 0 1px 4px;
    overflow: hidden;
    cursor: pointer;
    border: 3px solid rgba(255, 255, 255, 0.77);
    border-radius: 0;
	
	
	    -webkit-transition: text-shadow 0.1s ease-in, -webkit-transform 0.14s ease-in;
    transition: text-shadow 0.1s ease-in, -webkit-transform 0.14s ease-in;
    transition: transform 0.14s ease-in, text-shadow 0.1s ease-in;
    transition: transform 0.14s ease-in, text-shadow 0.1s ease-in, -webkit-transform 0.14s ease-in;
	
	
}

.control-bb button {
    position: absolute;
    top: 50%;
    background-image: none;
    background: none;
    color: #fff;
    border-radius: 100%;
    font-weight: 600;
    width: 41px;
    height: 41px;
    font-size: 18px;
}


.control-bb .next{right: -46px;}
.control-bb .previous{    left: -46px;}



.grid-item__name {
    /* visibility: hidden; */
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    -ms-flex-negative: 1;
    flex-shrink: 1;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 3rem;
    font-weight: 600;
    text-shadow: 0px 0px 30px rgba(0, 0, 0, 0.4), 2px 2px 6px rgba(0, 0, 0, 0.3);
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    letter-spacing: 1px;
    -webkit-transform: scale(0.6);
    transform: scale(0.6);
    -webkit-transform-origin: center center;
    transform-origin: center center;
    -webkit-transition: visibility 0.14s ease-out, opacity 0.14s ease-out, -webkit-transform 0.24s ease;
    transition: visibility 0.14s ease-out, opacity 0.14s ease-out, -webkit-transform 0.24s ease;
    transition: visibility 0.14s ease-out, opacity 0.14s ease-out, transform 0.24s ease;
    transition: visibility 0.14s ease-out, opacity 0.14s ease-out, transform 0.24s ease, -webkit-transform 0.24s ease;
    opacity: 0;
    top: 45%;
    z-index: 999;
    position: absolute;
    color: #fff;
    left: 0;
    right: 0;
}

.grid-item__hover {
    visibility: hidden;
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: -webkit-radial-gradient(rgba(47, 48, 50, 0.2), rgba(47, 48, 50, 0.7));
    background: radial-gradient(rgba(47, 48, 50, 0.2), rgba(47, 48, 50, 0.7));
    box-shadow: inset 0 0 50px rgba(0, 0, 0, 0.15);
    border-radius: 0;
    -webkit-transition: visibility 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94), opacity 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    transition: visibility 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94), opacity 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    opacity: 0;
}

.gallery-item:before {
    content: "";
    visibility: hidden;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: none;
    border-radius: 3px;
    box-shadow: 0 10px 24px 0px rgba(0, 0, 0, 0.06), 0 8px 20px -2px rgba(0, 0, 0, 0.1), 0 6px 10px -6px rgba(0, 0, 0, 0.2);
    -webkit-transition: visibility 0.1s ease-out, opacity 0.1s ease-out;
    transition: visibility 0.1s ease-out, opacity 0.1s ease-out;
    opacity: 0;
}






.modal-content {
    position: relative;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    height: 100%;
    background: none;
	    top: 0;
}


.modal-dialog {
    width: 75%;
    margin: 30px auto;
}

.modal {
    text-align: center;
    margin: 0 auto 0px auto;
    padding: 0 !important;
}

.modal-open {
  margin: 0 auto;
  overflow: auto;
} 

.modal-header {
    min-height: 16.42857143px;
    padding: 0;
    border-bottom: none;
}




#modal-image {
    margin: 0 auto;
    max-width: 75%;
    border-radius: 0;
    width: 100%;
    height: 100%;
} 

.modal-image-caption {
  text-transform: capitalize;
}




.gallery-item img{    
    width: 100%;
    height: 175px;}
.gallery-item:hover .img{
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
}
.gallery-item:hover .grid-item__hover {
    visibility: visible;
    opacity: 1;
}

.gallery-item:hover .grid-item__name {
    visibility: visible;
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
}






.bh-hr hr {
    background: rgb(39, 154, 207);
    width: 9%;
    margin-bottom: 38px;
    border: none;
    height: 4px;
    display: block;
    margin: 18px 0 37px;
}

.carousel-control.left {
    left: 0px !important;
}
.carousel-control.right {
    right: 0px !important;
}
.svgimg img{    width: 100%;
    height: 38px;}

	.testimonialss111 hr {
    border-top: 3px solid #ccc;
    text-align: left;
    width: 26%;
    margin-right: 72%;
}

</style>

<style>
 
.heading-section {
    text-align: center;
    padding-bottom: 20px;
}
.heading-section h1 {
    color: #555;
    font-weight: bold;
    text-align: center;
    font-size: 36px;
	text-transform:uppercase;
}
.heading-section hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 2px solid #cccccc;
    width: 15%;
}

.career-description h2 {
  font-size: 20px;
    padding-bottom: 5px;
    color: #000;
    margin-top: 0px;
}

 
 

.bg-clr-heder {
    background-color: #548694;
}
.bg-clr-heder h2 {
    font-size: 23px;
    padding-bottom: 10px;
    margin-top: 0px;
    color: #fff;
    padding-top: 7px;
}
.branches-data {
    padding: 0px 0px 18px;
    border: 1px solid #0098aa;
    margin-bottom: 20px;
}
.branches-data h5 {
    font-size: 20px;
    line-height: 28px;
    text-align: left;
    padding-left: 21px;
    color: rgba(50, 58, 70, 0.88);
    padding-top: 11px;
}
.branches-data .address-desc {
    font-size: 17px;
    color: #888888;
    text-align: left;
    padding: 4px 21px 17px;
    line-height: 24px;
}
.faculty-ss{
	
}
.faculty-img{
 text-align: center;	
}
.faculty-img img {
    width: 50%;
    border-radius: 50%;
    height: 200px;
    border: 4px solid #375963;
}
.faculty-ss h2 {
    font-size: 22px;
    margin-bottom: 20px;
	 text-align: center;
}
.faculty-ss .faculty-discription {
    text-align: center;
    font-size: 15px;
    padding: 0 15px 0;
    line-height: 1.6;
    color: #666;
}
.faculty1 {
    padding: 50px 0 90px;
    background:rgba(238, 238, 238, 0.42);
}
.testimonialss111 {
    background: #fff;
    padding: 0 0 25px;
}
.quote {
    color: #3a3737;
    font-weight: bold;
    font-size: 20px;
}

.testimonialss111 p {
    color: #fff;
    font-weight: 100;
    font-size: 17px;
}
.ygfhj a{color: #fff;  font-weight:600;}
 
.letf-testimonials{
	padding-top:0px;
}
.testimonialss111 p {
    color: #fff;
    font-weight: normal;
    font-size: 15px;
    line-height: 1.6;
}

 
.testimonialss111 h1 {
    text-align: left;
    color: #fff!important;
    padding-bottom: 24px;
    line-height: 1.6;
}

.testimonialss111 {
    background: url(images/blockeight.jpg) no-repeat;
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    -moz-background-size: cover;
       min-height: 558px;
    padding: 0 0 0;
}
.branches1 {
    background-color: #f4f4f4;
    padding: 25px 0 70px;
}
/*****************************/
/*********Timeline-css********/
/*****************************/

.branches1 .glyphicon {
    position: relative;
    top: 16px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: normal;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
}
.branches1 .timeline {
  list-style: none;
  padding: 20px 0 20px;
  position: relative;
}
.branches1 .timeline:before {
    top: 0;
    bottom: -19px;
    position: absolute;
    content: " ";
    width: 3px;
    background-color: #548694;
    left: 50%;
    margin-left: -1.5px;
}
.branches1 .timeline > li {
  margin-bottom: 20px;
  position: relative;
}
.branches1 .timeline > li:before,
.branches1 .timeline > li:after {
  content: " ";
  display: table;
}
.branches1 .timeline > li:after {
  clear: both;
}
.branches1 .timeline > li:before,
.branches1 .timeline > li:after {
  content: " ";
  display: table;
}
.branches1 .timeline > li:after {
  clear: both;
}
.branches1 .timeline > li > .timeline-panel {
    width: 46%;
    float: left;
    border: 1px solid #d4d4d4;
    border-radius: 2px;
    padding: 20px;
    position: relative;
    -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    background: #fff;
}
.branches1 .timeline > li > .timeline-panel:before {
  position: absolute;
  top: 26px;
  right: -15px;
  display: inline-block;
  border-top: 15px solid transparent;
  border-left: 15px solid #ccc;
  border-right: 0 solid #ccc;
  border-bottom: 15px solid transparent;
  content: " ";
}
.branches1 .timeline > li > .timeline-panel:after {
  position: absolute;
  top: 27px;
  right: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-left: 14px solid #fff;
  border-right: 0 solid #fff;
  border-bottom: 14px solid transparent;
  content: " ";
}
.branches1 .timeline > li > .timeline-badge {
  color: #fff;
  width: 50px;
  height: 50px;
  line-height: 50px;
  font-size: 1.4em;
  text-align: center;
  position: absolute;
  top: 16px;
  left: 50%;
  margin-left: -25px;
  background-color: #999999;
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
}
.branches1 .timeline > li.timeline-inverted > .timeline-panel {
  float: right;
}
.branches1 .timeline > li.timeline-inverted > .timeline-panel:before {
  border-left-width: 0;
  border-right-width: 15px;
  left: -15px;
  right: auto;
}
.branches1 .timeline > li.timeline-inverted > .timeline-panel:after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}
.branches1 .timeline-badge.primary {
  background-color: #2e6da4 !important;
}
.branches1 .timeline-badge.success {
  background-color: #3f903f !important;
}
.branches1 .timeline-badge.warning {
  background-color: #f0ad4e !important;
}
.branches1 .timeline-badge.danger {
  background-color: #d9534f !important;
}
.branches1 .timeline-badge.info {
  background-color: #5bc0de !important;
}
.branches1 .timeline-title {
  margin-top: 0;
  color: inherit;
}
.branches1 .timeline-body > p,
.branches1 .timeline-body > ul {
  margin-bottom: 0;
}
.branches1 .timeline-body > p + p {
  margin-top: 5px;
}
/* by nano */
@media (max-width: 767px) {
	
    .branches1 ul.timeline:before {
        left: 40px;
    }
   .branches1 ul.timeline > li > .timeline-panel {
        width: calc(100% - 90px);
        width: -moz-calc(100% - 90px);
        width: -webkit-calc(100% - 90px);
    }
   .branches1 ul.timeline > li > .timeline-badge {
        left: 15px;
        margin-left: 0;
        top: 16px;
    }
   .branches1 ul.timeline > li > .timeline-panel {
        float: right;
    }
 

 

.servicesk12 h3 {
    line-height: 20px;
    font-size: 16px;
}



.timeline-heading h2 {
    text-transform: uppercase;
    font-size: 20px;
}



  .branches1 ul.timeline > li > .timeline-panel:before {
        border-left-width: 0;
        border-right-width: 15px;
        left: -15px;
        right: auto;
    }
	
    .branches1 ul.timeline > li > .timeline-panel:after {
        border-left-width: 0;
        border-right-width: 14px;
        left: -14px;
        right: auto;
    }
}

/************************************/

.timeline-heading h2 {
    text-transform: uppercase;
    font-size: 22px;
}

.timeline-heading h5 {
    font-size: 18px;
    line-height: 25px;
    padding-left: 0;
    color: rgba(50, 58, 70, 0.88);
    padding-top: 0px;
    font-style: normal;
}

.modal-body {
    position: relative;
    padding: 15px;
}


.hvrblk{    background: rgba(0, 0, 0, 0.73);}

</style>
<style>
  @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css);

.animate {
    -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

/*=============== Home-team ===============*/



.home-doctors h2 {
    font-weight: normal;
}
 
.home-doctors .common-doctor figure {
  overflow: hidden;
  width: 100%;
  height: 196px;
}

.home-doctors img {
  width: 100%;
  height: auto;
  margin-top: -6em;
}

.home-doctors .common-doctor h5 {
  margin: 0 0 7px;
  font-size: 18px;
  font-weight: 700;
  color: #3a3c41;
}
.home-doctors .common-doctor .for-border {
  margin-bottom: 20px;
}
.home-doctors .common-doctor .text-content {
  padding: 19px 14px 13px;
}
.home-doctors.doctors-var-two {
  text-align: left;
  background-color: #fff;
}
.home-doctors.doctors-var-two .slogan-section {
  text-align: left;
}
.home-doctors.doctors-var-two .common-doctor {
  background-color: transparent;
}
.home-doctors.doctors-var-two .common-doctor .for-border {
  display: none;
}
.home-doctors.doctors-var-two .common-doctor .text-content {
  padding: 20px 0 20px;
}
.home-doctors.doctors-var-two .text-center {
  text-align: left;
}

.slogan-section {
  margin-bottom: 50px;
  text-align: center;
}

.home-doctors .common-doctor .for-border {
  margin-bottom: 20px;
}

.for-border {
  height: 11px;
  width: 100%;
  background: transparent url(http://omarhabash.com/nova/wp-content/uploads/2014/08/feature-border.png) center center no-repeat;
  border: none;
}

.home-doctors .common-doctor h5 small {
  color: #008fd5;
  font-weight: bold;
  font-size: 0.8em;
  font-style: italic;
}

.home-doctors .common-doctor ul{
  position: absolute;
  top: 50%;
  left: 0;
  width: 100%;
  margin-top: -28px;
  text-align: center;
  margin-top: 10em;
  opacity: 0;
  z-index: 1;
}

.home-doctors .common-doctor li a {
  background: #008fd5;
  color: white;
  padding: 0.75em;
  border: 5px solid rgba(255, 255, 255, 0.33);
}


.doc-img{
   /* Webkit for Chrome and Safari */
  -webkit-transform: scale(1, 1); // This is the scale for the normal size of the image.
  -webkit-transition-duration: 500ms;
  -webkit-transition-timing-function: ease-out;
 
  /* Webkit for Mozila Firefox */
  -moz-transform: scale(1, 1);
  -moz-transition-duration: 500ms;
  -moz-transition-timing-function: ease-out;
 
  /* Webkit for IE( Version: 11, 10 ) */
  -ms-transform: scale(1, 1);
  -ms-transition-duration: 500ms;
  -ms-transition-timing-function: ease-out;
}

.doc-item:hover .doc-img{
   /* Webkit for Chrome and Safari */
  -webkit-transform: scale(1.2, 1.2); // This is the enlarged size scale of the image.
  -webkit-transition-duration: 500ms;
  -webkit-transition-timing-function: ease-out;
 
  /* Webkit for Mozila Firefox */
  -moz-transform: scale(1.2, 1.2);
  -moz-transition-duration: 500ms;
  -moz-transition-timing-function: ease-out;
 
  /* Webkit for IE( Version: 11, 10 ) */
  -ms-transform: scale(1.20, 1.20);
  -ms-transition-duration: 500ms;
  -ms-transition-timing-function: ease-out;

  opacity: 0.7;
}

.doc-item:hover .social-lists{
  margin-top: -2em;
  opacity: 1;
}
.social-lists li{padding-right:0px !important;}

.mobimg{width:460px !important;}


.ico {
    /* padding-top: 5px; */
    /* padding-left: 10px; */
    /* margin-top: 23px; */
    /* border: 1px solid gray; */
    /* border-radius: 50%; */
    /* text-align: center; */
    /* padding: 7px 6px 7px !important; */
    width: 67px;
    background: rgba(158, 158, 158, 0.3);
    /* padding: 5px 0 6px; */
    margin: 0 auto;
    height: 67px;
    line-height: 67px;
    border-radius: 100%;
}
.sicon {
    color: #8BC34A !important;
    font-size: 40px;
    line-height: 67px;
}


/*=============== //Home-team ===============*/

</style>

</head>

<body>


<div class="page-container">

  <?php include('inc.header.php');?>
<?php if($iGetInstituteDetailSetting['is_slider']=='1') { ?>
 
 <div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
       
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
   
        <div class="carousel-inner" role="listbox">
         
			
			  <?php	$i=0;
		  if($iCurrentPageFileName == $iPreviewPageFileName) {		$iInstituteId = '0';
	  
		$aryList=$db->getRows("select * from institute_gallery  where  userid = '".$iInstituteId."' and status = '1' order by id desc");
		
		
			  } else { 
	    $aryList=$db->getRows("select * from institute_gallery  where  userid = '".$iInstituteId."' and status = '1' order by id desc");
		
			  }
		foreach($aryList as $iList) { $i=$i+1; ?>
			
			<div class="item <?php if($i=='1') { echo "active"; } ?> slide<?php echo $i; ?> "> 
           <img src="uploads/<?php echo $iList['image']; ?>" >
             
				<div class="container">
				   <div class="row">
                    <div class="col-md-3 text-right">
                        
                    </div>
                    <div class="col-md-9 text-left">
                        <h3 data-animation="animated bounceInDown"><?php echo $iList['title']; ?></h3><br>
						<h5><?php echo $iList['description']; ?></h5>
                                    
                     </div>
                </div></div>
             </div> 
          
		<?php } ?>
			
	        </div>
                       
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>
<?php }?>
 
<div id="studyclasses">

 <?php if($iGetInstituteDetailSetting['is_show_about_us']=='1') { ?>
	<div class="studiess new-about-section">
		<div class="container">
		
		
		<div class="col-sm-12">
		
		<h1 class="main-title">About Us</h1> 
		
		</div>
		
		
		
		
		
		
		
			<div class="row">
				<div class="col-md-6 col-sm-76 ">
				      
				
					<p><?php echo substr($iGetInstituteDetailSetting['about_content'],0,700); ?></p>
					
					<div class="new-btn-about">
					<a href="about.php" class="" > Read More </a>						
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
				<div class="col-maf">
					<img src="uploads/<?php echo $iGetInstituteDetailSetting['about_image']; ?>" >
				</div>
				</div>
			</div>
		</div>
	</div>
	
 <?php } ?>
 <?php if($iGetInstituteDetailSetting['is_category']=='1') { ?>
	<div class="latestcourses our-new-couress">
		<div class="container">
		<div class="col-sm-12">
		
		<h1 class="main-title">Look at Our Latest Courses</h1> 
		
		</div>
			<div class="row">
			 
				<div class="lcourses">
			<div class="row">
        <div class="row">
           
            <div class="col-md-12">                                                              
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
						<a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                        data-slide="prev"></a>
						
						<a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                            data-slide="next"></a> 
                </div>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
			
                <div class="item active">
                    <div class="row">
					<?php
	  if($_SESSION['user_id']!='') { 
 $aryList=$db->getRows("select * from  registeration_cateogry where userid='".$_SESSION['user_id']."'    order by id desc");
	  }	else {
 $aryList=$db->getRows("select * from institute_com_category where userid='".$iInstituteId."'    order by id desc");
 }
 	$ijii=0;
 	foreach($aryList as $iagaList)
 		{ $ijii = $ijii+1;
 	 $iList=$db->getRow("select * from com_category where id = '".$iagaList['sub_category']."' order by id desc"); ?>
					
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
									<a class="tt-case-img custom-hover">
                                    <img src="images/special1.png" class="img-responsive" alt="a" />
									</a>
                                </div>
                                <div class="info">
                                    <div class="images-product-old">
                                        <div class="product-old">
                                            <h5><a href="detail.php?id=<?php echo $iList['id']; ?>"> <?php echo $iList['categoryname']; ?></a></h5>
                                          
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
									
									<ul class="course-liii">
									<li><a type="submit" href="detail.php?id=<?php echo $iChildMenuCategory['id']; ?>&t=1;" class="">Mock Test</a></li>
									
									<li> <a type="submit" href="detail.php?id=<?php echo $iChildMenuCategory['id']; ?>" >Topic Wise</a></li>
									
									<li>  <a type="submit" href="detail.php?id=<?php echo $iChildMenuCategory['id']; ?>&t=3">PDF Tutorials</a></li>
									
									<li> <a type="submit" href="detail.php?id=<?php echo $iChildMenuCategory['id']; ?>&t=4">Video Tutorialst</a></li>
									
									</ul>
									
									
								 
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
						  <?php if($ijii%4=='0') { echo '</div></div> <div class="item"><div class="row">'; }  } ?>
                       

	
             
				
					</div>
                </div>
               

			   
			   
			   
			  

	   </div>
    </div>
</div>
				
				</div>
			</div>
		</div>
	</div>
	
 <?php }?>
	
	<!---
	<div class="rtfgd">
<div class="container">
<div class="row">

 <?php if($iGetInstituteDetailSetting['is_result']=='1') { ?>
<div class="col-md-4">
 
<div class="panel-heading ph_main"> <span class="glyphicon glyphicon-list-alt"></span><b>LATEST RESULT</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">


<ul class="demo1">
<?php
				  
				  
	 if($iCurrentPageFileName == $iPreviewPageFileName) {		$iInstituteId = '0'; 
		$iResultLInks=$db->getRows("select * from result_link where userid = '".$iInstituteId."' and usertype = '2'  and status  = '1'  order by id desc");
		
		  } else { 
	   $iResultLInks=$db->getRows("select * from result_link where userid = '".$iInstituteId."' and usertype = '2'  and status  = '1'  order by id desc");
		  }
	foreach($iResultLInks as $iResLnk)
			{					
			 ?>
<li class="news-item" style="">
<table cellpadding="4">
<tr class="lin">
<td class="scr_txt">
 <?php if($iResLnk['select_site']=='1') {	?>
 <div class="atxt"  style="padding:2% 2% 2%;font-size:14px;box-shadow: 0 0 5px #888;margin-bottom:10px; background:#eeeeee;color:#000;">
<a href="uploads/<?php echo $iResLnk['pdf']; ?>"> <?php echo $iResLnk['title']; ?></a>
 </div>
   <?php  } else { ?>
    <div class="atxt"  style="padding:2% 2% 2%;font-size:14px;box-shadow: 0 0 5px #888;margin-bottom:10px; background:#eeeeee;color:#000;">
 <a href="<?php echo $iResLnk['website_link']; ?>"><?php echo $iResLnk['title']; ?></a>
 </div>
   <?php }?>
</td>
</tr >
</table>
</li>
	
			<?php }?>
			</ul>

			
			
			
			
			</div>
</div>
</div>
<div class="panel-footer pnf_main"> </div>
 
</div>

 <?php }?>



  <?php if($iGetInstituteDetailSetting['is_curentaffairs']=='1') { ?>

<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>CURRENT AFFAIR'S
</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">


<ul class="demo1">
                  <?php
				  
		 if($iCurrentPageFileName == $iPreviewPageFileName) {		$iInstituteId = '0'; 
		$aryList=$db->getRows("select * from news where userid = '".$iInstituteId."'   order by id desc");
		  } else { 
		$aryList=$db->getRows("select * from news where userid = '".$iInstituteId."'   order by id desc");
		  }
	foreach($aryList as $iList)
			{	?>					
<li class="news-item" style="">
<table cellpadding="4">
<tr class="lin">
<td class="scr_txt">
 <div class="atxt" ><a href="page1.php?id=<?php echo $iList['id']; ?>"><?php echo $iList['title']; ?> 	</a></div>
</td>
</tr >
</table>
</li>
			<?php }?>



</ul>
</div>
</div>
</div>
<div class="panel-footer"> </div>
</div>
</div>
  <?php }?>


</div>

</div>

</div>
	<?php if($iGetInstituteDetailSetting['is_services']=='1') { ?>
	
	
	
	
	
	--->
	
	
	
	<div class="cuurent-section-news">
	
	<div class="container">
	
	<div class="row">
	
	<div class="col-sm-4">
	
	<div class="current-box">
	
	<h3>latest vaccancy</h3>
	
	
	<div class="holder">
  <ul id="ticker01">
							<li><span>10/10/2007</span><a href="#">The first thing that most Javascript programmers</a></li>
							<li><span>10/10/2007</span><a href="#">End up doing is adding some code</a></li>
							<li><span>10/10/2007</span><a href="#">The code that you want to run</a></li>
							<li><span>08/10/2007</span><a href="#">Inside of which is the code that you want to run</a></li>
							<li><span>08/10/2007</span><a href="#">Right when the page is loaded</a></li>
							<li><span>05/10/2007</span><a href="#">Problematically, however, the Javascript code</a></li>
							<li><span>04/10/2007</span><a href="#">The first thing that most Javascript programmers</a></li>
							<li><span>04/10/2007</span><a href="#">End up doing is adding some code</a></li>
							<li><span>04/10/2007</span><a href="#">The code that you want to run</a></li>
							<li><span>03/10/2007</span><a href="#">Inside of which is the code that you want to run</a></li>
							<li><span>03/10/2007</span><a href="#">Right when the page is loaded</a></li>
							<li><span>01/10/2007</span><a href="#">Problematically, however, the Javascript code</a></li>
</ul>



</div>
	
	
	
	</div>
	
	
	</div>
	<div class="col-sm-4">
	
	
	
	<div class="current-box">
		<h3>Cuurent-affairs</h3>
	<div class="holder">
  <ul id="ticker02">
							<li><span>10/10/2007</span><a href="#">The first thing that most Javascript programmers</a></li>
							<li><span>10/10/2007</span><a href="#">End up doing is adding some code</a></li>
							<li><span>10/10/2007</span><a href="#">The code that you want to run</a></li>
							<li><span>08/10/2007</span><a href="#">Inside of which is the code that you want to run</a></li>
							<li><span>08/10/2007</span><a href="#">Right when the page is loaded</a></li>
							<li><span>05/10/2007</span><a href="#">Problematically, however, the Javascript code</a></li>
							<li><span>04/10/2007</span><a href="#">The first thing that most Javascript programmers</a></li>
							<li><span>04/10/2007</span><a href="#">End up doing is adding some code</a></li>
							<li><span>04/10/2007</span><a href="#">The code that you want to run</a></li>
							<li><span>03/10/2007</span><a href="#">Inside of which is the code that you want to run</a></li>
							<li><span>03/10/2007</span><a href="#">Right when the page is loaded</a></li>
							<li><span>01/10/2007</span><a href="#">Problematically, however, the Javascript code</a></li>
</ul>



</div>
	
	
	
	</div>	
	
	
	
	
	</div>
	<div class="col-sm-4">
	
	
		<div class="current-box">
		<h3>Latest Results</h3>
	<div class="holder">
  <ul id="ticker03">
							<li><span>10/10/2007</span><a href="#">The first thing that most Javascript programmers</a></li>
							<li><span>10/10/2007</span><a href="#">End up doing is adding some code</a></li>
							<li><span>10/10/2007</span><a href="#">The code that you want to run</a></li>
							<li><span>08/10/2007</span><a href="#">Inside of which is the code that you want to run</a></li>
							<li><span>08/10/2007</span><a href="#">Right when the page is loaded</a></li>
							<li><span>05/10/2007</span><a href="#">Problematically, however, the Javascript code</a></li>
							<li><span>04/10/2007</span><a href="#">The first thing that most Javascript programmers</a></li>
							<li><span>04/10/2007</span><a href="#">End up doing is adding some code</a></li>
							<li><span>04/10/2007</span><a href="#">The code that you want to run</a></li>
							<li><span>03/10/2007</span><a href="#">Inside of which is the code that you want to run</a></li>
							<li><span>03/10/2007</span><a href="#">Right when the page is loaded</a></li>
							<li><span>01/10/2007</span><a href="#">Problematically, however, the Javascript code</a></li>
</ul>



</div>
	
	
	
	</div>
	
	
	
	
	
	</div>
	
	
	</div>
	
	
	
	
	</div>
	
	
	
	</div>
	
	<div class="new-video-tutorial">
	
	<div class="container">
	
	
	<div class="col-sm-12">
		
		<h1 class="main-title">VIDEO TUTORIALS</h1> 
		
		</div>
	
	
	 
	 
	
	<div class="video-toturial-section">
	
	<div id="carousel-example111" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            
			
			
			<ol class="carousel-indicators">
            <li data-target="#carousel-example111" data-slide-to="0" class=""></li>
            <li data-target="#carousel-example111" data-slide-to="1" class=""></li>
           
        </ol>
			
			<div class="carousel-inner">
			
                <div class="item active">
	
	<div class="row">
		
	<div class="col-sm-3">
<div class="  zoomIn animated" style="visibility: visible;">
        <div class="video-img"> <a href="vedio.php?id=7&amp;type=1&amp;tut=7"> <img src="uploads/00a685338175ce6e088939fb118a01af_video4.jpg"> <span class="bh-vido"> Simple and Compound Interest </span> </a> </div>
      </div>
	</div>
<div class="col-sm-3">
<div class="  zoomIn animated" style="visibility: visible;">
        <div class="video-img"> <a href="vedio.php?id=7&amp;type=1&amp;tut=7"> <img src="uploads/00a685338175ce6e088939fb118a01af_video4.jpg"> <span class="bh-vido"> Simple and Compound Interest </span> </a> </div>
      </div>
	</div>
<div class="col-sm-3">
<div class="  zoomIn animated" style="visibility: visible;">
        <div class="video-img"> <a href="vedio.php?id=7&amp;type=1&amp;tut=7"> <img src="uploads/00a685338175ce6e088939fb118a01af_video4.jpg"> <span class="bh-vido"> Simple and Compound Interest </span> </a> </div>
      </div>
	</div>
	<div class="col-sm-3">
<div class="  zoomIn animated" style="visibility: visible;">
        <div class="video-img"> <a href="vedio.php?id=7&amp;type=1&amp;tut=7"> <img src="uploads/00a685338175ce6e088939fb118a01af_video4.jpg"> <span class="bh-vido"> Simple and Compound Interest </span> </a> </div>
      </div>
	</div>
	
	
	</div>
	
	
	</div>
	           
<div class="item">
	<div class="row">
		
	<div class="col-sm-3">
<div class="  zoomIn animated" style="visibility: visible;">
        <div class="video-img"> <a href="vedio.php?id=7&amp;type=1&amp;tut=7"> <img src="uploads/00a685338175ce6e088939fb118a01af_video4.jpg"> <span class="bh-vido"> Simple and Compound Interest </span> </a> </div>
      </div>
	</div>
<div class="col-sm-3">
<div class="  zoomIn animated" style="visibility: visible;">
        <div class="video-img"> <a href="vedio.php?id=7&amp;type=1&amp;tut=7"> <img src="uploads/00a685338175ce6e088939fb118a01af_video4.jpg"> <span class="bh-vido"> Simple and Compound Interest </span> </a> </div>
      </div>
	</div>
<div class="col-sm-3">
<div class="  zoomIn animated" style="visibility: visible;">
        <div class="video-img"> <a href="vedio.php?id=7&amp;type=1&amp;tut=7"> <img src="uploads/00a685338175ce6e088939fb118a01af_video4.jpg"> <span class="bh-vido"> Simple and Compound Interest </span> </a> </div>
      </div>
	</div>
	<div class="col-sm-3">
<div class="  zoomIn animated" style="visibility: visible;">
        <div class="video-img"> <a href="vedio.php?id=7&amp;type=1&amp;tut=7"> <img src="uploads/00a685338175ce6e088939fb118a01af_video4.jpg"> <span class="bh-vido"> Simple and Compound Interest </span> </a> </div>
      </div>
	</div>
	
	
	</div>
	
	
</div>
			   
		  </div>
	       </div>
	
	
	
	
	</div>
	
	
 
	
	</div>
	
	
	</div>
	
	
	</div>
	
	<!---
<div class="servicesk12">
	<div class="container">
		 <div class="col-sm-12">
		
		<h1 class="main-title">Our Best Services</h1> 
		
		</div>
	<div class="row">
	<?php
				$i=0;  
		 if($iCurrentPageFileName == $iPreviewPageFileName) {		$iInstituteId = '0'; 
		$iServicesList=$db->getRows("select * from  institute_services where userid = '".$iInstituteId."'   order by id desc limit 0,8");
		  } else { 
		$iServicesList=$db->getRows("select * from  institute_services where userid = '".$iInstituteId."'   order by id desc limit 0,8");
		  }
	foreach($iServicesList as $iService)
			{	
			$i=$i+1;
			
			?>			
		<div class="col-md-4 col-sm-4">
		<div class="col-ds">
			<div class="ico">
				<i class="fa fa-bandcamp sicon" aria-hidden="true"></i>
			</div>
			<div class="col-mdsfsf"> 
				<h4><?php echo $iService['title']; ?></h4>
				<p><?php echo $iService['short_desc']; ?></p>
				
						
			</div>
			</div>
		</div>
		   <?php  if($i%8=='0') { echo '</div><div class="col-md-4 col-sm-4">'; } } ?>
		
	</div>
	
	
	
	
	
	
	</div>
</div>
	
	
	
	
	<?php }?>

 --->
	
	
	
	
	
	
	
	
	
	<!----
<div class="latestcourses12 gggr">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<h1>CURRENT AFFAIR'S<hr/></h1>
				
				</div>
				<div class="lcourses1">
			<div class="row">
        <div class="row">
           
            <div class="col-md-12">
                <!-- Controls 
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example1"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example1"
                            data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example1" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -
            <div class="carousel-inner">
			   
				 
				           <div class="item active"> 
						    	<div class="row">	
								
								
			 <?php
			 $k=0;
		$aryList=$db->getRows("select * from news where userid ='".$iInstituteId."'   order by id desc");
	
	foreach($aryList as $iList)
			{		
						$aryListCount=$db->getRow("select count(id) from news where userid ='6'   order by id desc");
				
				$k=$k+1;
			 ?>
				 		 	
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
									<a class="tt-case-img custom-hover">
								<img alt="" src="uploads/<?php echo $iList['fimage']; ?>" class="img-responsive" style="width:280px; height:200px" >
									</a>      
								
                        <!--            <img src="images/feature.png" class="img-responsive" alt="a" /> --
                                </div>
                                <div class="info">
                                    <div class="images-product-old">
                                        <div class="product-old">
                                            <h5><?php echo $iList['title']; ?></h5>
                                            <h6><?php echo $iList['short_description']; ?></h6>
                                        </div>
                                    </div>
								   <div class="ankeess">
                                   <a href="" class="">Read More  <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span> </a>
								   </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
						
                         
                <?php //if(count($aryList)>$k) if($k%4=='0') { echo '</div><div class="item">'; } } ?>  
				<?php if($k%4==0 && $k!=$aryListCount){ echo '</div></div><div class="item">'; } } ?>
	  
								
			
				
			</div>
			   
			</div>
	   </div>
    </div>
</div>
				
				</div>
			</div>
		</div>
	</div>




<!--	
	
<div class="box-area">              
	<div class="container">
		<div class="row">  
		
<div class="col-md-6">
<div class="panel panel-default">                  
<div class="panel-heading">Latest Result</div>                                    
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul class="demo1" style="overflow-y: hidden; height: 560px; list-style: none;">


 <?php
		$iResultLInks=$db->getRows("select * from result_link where userid = '".$iInstituteId."' and usertype = '2'  and status  = '1'  order by id desc");
	foreach($iResultLInks as $iResLnk)
			{					
			 ?>


<li style="" class="news-item">                                         
<table cellpadding="4">
<tbody><tr>

<div class="col-md-4 newsslets1">
<img src="images/news.png" width="160" class="img-circle12">  
</div>

<div class="col-md-8 newsslets">
	<h1><?php echo $iResLnk['title']; ?></h1>
	<h3><em><?php echo $iResLnk['expire_date']; ?></em></h3>
	
	<?php  if($iResLnk['select_site']=='1') {	 ?>
	
<h4><a> Download Pdf</a> </h4>

<?php  } else { ?>
<h4><a href="<?php echo $iResLnk['website_link']; ?>"> Website link</a> </h4>
<?php } ?>
</div>

</tr>
</tbody></table>
</li>

			<?php  }?>


</ul>
					<HR>
                    <div class="settdsr1"> 
					<button type="submit" name="submit" class="buttonsread" >
					    READ MORE
					</button>	
					</div>


</div>
</div>
</div>


	
	
</div>
</div>


<div class="col-md-6">
<div class="panel panel-default">
<div class="panel-heading">Latest Vacancy</div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul class="demo1" style="overflow-y: hidden; height: 560px; list-style: none;">



 <?php
		$iLatestVaccancy=$db->getRows("select * from latest_vacancy where userid = '".$iInstituteId."' and usertype = '2'  and status  = '1'  order by id desc");
	foreach($iLatestVaccancy as $iLatVac)
			{						
			 			
			 ?>

<li style="" class="news-item">                                         
<table cellpadding="4">
<tbody><tr>

<div class="col-md-4 newsslets1">
<img src="images/news.png" width="160" class="img-circle12">  
</div>

<div class="col-md-8 newsslets">
	<h1><?php echo $iLatVac['title']; ?></h1>
	<h3><em><?php echo $iLatVac['expire_date']; ?></em></h3>
	
	<?php  if($iLatVac['select_site']=='1') {					
			 ?>
<h4><a>Download Pdf </a></h4>
<?php } else { ?>
<h4><a href="<?php echo $iLatVac['website_link']; ?>" ></a></h4>

<?php } ?>

</div>

</tr>
</tbody></table>
</li>

			<?php } ?>


</ul>
	<HR> 
					<div class="settdsr1">  
					<button type="submit" name="submit" class="buttonsread" >
					    READ MORE 
					</button>	
					</div>


</div>
</div>
</div>


	
	
</div>
</div>

</div>
	</div>
</div>


-->






<!--------------START-CAREER-SECTION--------------->
<?php if($iGetInstituteDetailSetting['is_career']=='1') { ?>
<section class="careers1 new-career">
<div class="container">
 
 <div class="col-sm-12">
		
		<h1 class="main-title">CAREER WITH US</h1> 
		
		</div>
 
 
<?php echo $iCarrier['title']; ?>
<div class="row">
<?php if($iCurrentPageFileName == $iPreviewPageFileName) {		$iInstituteId = '0'; 	  
  
  
$iCarreerList=$db->getRows("select * from   institute_career where userid='".$iInstituteId."' and status = '1' order by id desc limit 0,6"); 
  } else { 
	  
	  $iCarreerList=$db->getRows("select * from   institute_career where userid='".$iInstituteId."' and status = '1' order by id desc limit 0,6"); 
  }


			  foreach($iCarreerList as $iCarrier) {	$i=$i+1;
			  ?>
<div class="col-md-6 col-sm-6">
<div class="career-descri">
<h2><?php echo $iCarrier['title']; ?></h2>
<h5><?php echo $iCarrier['short_desc']; ?></h5>
<p class="short-dis">
Skill: <?php echo $iCarrier['skills']; ?>
</p>
<div class="text-right hihh">
<a class="k-apply" href="careers.php">apply</a>
</div>
</div>
</div>
			  <?php }?>




</div>
</div>
</section>
<?php }?>
<!--------------END-CAREER-SECTION--------------->

<!--------------START-BRANCHES-SECTION--------------->
 
 
 
 
 
<!--------------END-BRANCHES-SECTION-------------->

<!--------------START-FACULTY-SECTION--------------->
   <?php if($iGetInstituteDetailSetting['is_mobilesubs']=='1') {  ?>

<div class="mobileapps">

	<div class="container">
		<div class="row">
			<div class="col-md-1 col-sm-1"></div> 
			<div class="col-md-7 col-sm-7">
				<h1>Get A Weber Stats Right From  <br>
					Your Phone.
				</h1>
				<h4>Gain a holistic veiw of your campaign with a dashboard that gives you up-to-the-minute stats on scheduled broadcasts, sent messages and subscriber activity.</h4>
				
			<div class="mobilenewwww1">  	
				<div class="col-md-4 col-sm-4">
					<img src="images/Googleplay_button.png" class="imgss" > 
				</div>
				
				<div class="col-md-8 col-sm-8">
				    <div class="mobilenewss">
						 <form  method="post" name="register" action=""   id="mobilenosub">
						 
						   <input class="mobilbtn" type="text" id="mobileno" style="color:black" placeholder="Enter Mobile" required>
   <button class="mobilbtn1" onClick="getregister();" type="button" ><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
		<div id="iMobileError"></div>
						</form>
					</div>
				</div>
			
			
			</div>		
				
				
				</div>
			
			<div class="col-md-4 col-sm-4 sssffd" align="center" >
				<img src="images/homeapp3.png" class="mobimg" >            
			</div>
		</div>
	</div>
	
</div>

   <?php }?>
   
    <?php if($iGetInstituteDetailSetting['is_faculty']=='1') {  ?>
  <!--- 
<section class="faculty1">
<div class="container">
 
 	<div class="col-sm-12">
		
		<h1 class="main-title">FACULTY</h1> 
		
		</div>
 
          <div class="home-doctors  clearfix">

              <div class="sddsas">
                  
                  
                  <div class="row">


	<?php	$i=0;
	  
	    if($iCurrentPageFileName == $iPreviewPageFileName) {		$iInstituteId = '0';
	  
		$iFacultyList=$db->getRows("select * from   institute_faculty  where  userid = '".$iInstituteId."' and status = '1' order by id desc");
		
			  } else { 
	    $iFacultyList=$db->getRows("select * from   institute_faculty  where  userid = '".$iInstituteId."' and status = '1' order by id desc");
		
			  }
 		foreach($iFacultyList as $ifaculty) { $i=$i+1; ?>


                        <div class="col-lg-3 col-md-3 col-sm-6  text-center doc-item">
                                <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

                                  <ul class="list-inline social-lists animate">
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      </ul>

                                          <figure>
                                    <img width="670" height="500" src="uploads/<?php echo $ifaculty['image']; ?>" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2"> 
                            </figure>

                                <div class="text-content">
                                    <h5><?php echo $ifaculty['title']; ?></h5>
                              
                                    <h5><small><?php echo $ifaculty['designation']; ?></small></h5>
                                </div>
                            </div>
                        </div>


		<?php }?>


                





 
                     




                                                      <div class="visible-sm clearfix margin-gap"></div>
                                          </div>

              </div>

          </div>
        

</div>


</section>
	<?php }?>

 


</div>--->
 
 <!--*-*-*-*-*-*-*-*-*-*- BOOTSTRAP CAROUSEL *-*-*-*-*-*-*-*-*-*-->
 
 
 <div class="our-team-bh-member">
  
 <div class="container">
 
 
	<div class="col-sm-12">
		
		<h1 class="main-title">Our Team</h1> 
		
		</div> 
		
		
 <div class="page">
  <div class="page__demo">
 

    <!-- type1 -->
    <!-- teamy_mask-circle -->
 
        <div class="section__content teamy-team">
          <article class="teamy teamy_style1 teamy_mask-circle">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="https://stas-melnikov.ru/cliparts/girl2_424x640.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="#0" class="social">
                   <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="#0" class="social">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name">Suzan Lois</h3>
              <span class="teamy__post">Graphic Designer</span>
            </div>
          </article>
          <article class="teamy teamy_style1 teamy_mask-circle teamy_zoom-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="https://stas-melnikov.ru/cliparts/girl3_424x640.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                  <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="#0" class="social">
                   <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="#0" class="social">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name">Dora Caelan</h3>
              <span class="teamy__post">HR-manager</span>
            </div>
          </article>
          <article class="teamy teamy_style1 teamy_mask-circle teamy_zoom-rotate-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="https://stas-melnikov.ru/cliparts/girl4_424x640.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="#0" class="social">
                   <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="#0" class="social">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name">Rosanna Pattie</h3>
              <span class="teamy__post">Illustrator</span>
            </div>
          </article>
          <article class="teamy teamy_style1 teamy_mask-circle teamy_zoom-slide-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="https://stas-melnikov.ru/cliparts/girl5_424x640.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="#0" class="social">
                   <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="#0" class="social">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name">Rose Alpha</h3>
              <span class="teamy__post">Photographer</span>
            </div>
          </article>
        </div>
     

    <!-- type1 -->
  
  
  
  
  
  
  </div>
  
</div>

 
 
 
 
  </div>
 
 </div>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <div class="new-bh-gallery">
<div class="container">

	<div class="col-sm-12">
		
		<h1 class="main-title">Our Gallery</h1> 
		
		</div>



    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-sm-6" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-0">
                            <img src="http://placehold.it/150x150&text=zero">
                        </a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/150x150&text=2"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/150x150&text=3"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/150x150&text=4"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/150x150&text=5"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-6"><img src="http://placehold.it/150x150&text=6"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-7"><img src="http://placehold.it/150x150&text=7"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-8"><img src="http://placehold.it/150x150&text=8"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-9"><img src="http://placehold.it/150x150&text=9"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-10"><img src="http://placehold.it/150x150&text=10"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-11"><img src="http://placehold.it/150x150&text=11"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-12"><img src="http://placehold.it/150x150&text=12"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-13"><img src="http://placehold.it/150x150&text=13"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-14"><img src="http://placehold.it/150x150&text=14"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-15"><img src="http://placehold.it/150x150&text=15"></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="http://placehold.it/470x480&text=zero"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="http://placehold.it/470x480&text=1"></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="http://placehold.it/470x480&text=2"></div>

                                    <div class="item" data-slide-number="3">
                                        <img src="http://placehold.it/470x480&text=3"></div>

                                    <div class="item" data-slide-number="4">
                                        <img src="http://placehold.it/470x480&text=4"></div>

                                    <div class="item" data-slide-number="5">
                                        <img src="http://placehold.it/470x480&text=5"></div>
                                    
                                    <div class="item" data-slide-number="6">
                                        <img src="http://placehold.it/470x480&text=6"></div>
                                    
                                    <div class="item" data-slide-number="7">
                                        <img src="http://placehold.it/470x480&text=7"></div>
                                    
                                    <div class="item" data-slide-number="8">
                                        <img src="http://placehold.it/470x480&text=8"></div>
                                    
                                    <div class="item" data-slide-number="9">
                                        <img src="http://placehold.it/470x480&text=9"></div>
                                    
                                    <div class="item" data-slide-number="10">
                                        <img src="http://placehold.it/470x480&text=10"></div>
                                    
                                    <div class="item" data-slide-number="11">
                                        <img src="http://placehold.it/470x480&text=11"></div>
                                    
                                    <div class="item" data-slide-number="12">
                                        <img src="http://placehold.it/470x480&text=12"></div>

                                    <div class="item" data-slide-number="13">
                                        <img src="http://placehold.it/470x480&text=13"></div>

                                    <div class="item" data-slide-number="14">
                                        <img src="http://placehold.it/470x480&text=14"></div>

                                    <div class="item" data-slide-number="15">
                                        <img src="http://placehold.it/470x480&text=15"></div>
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
        </div>

    </div>
</div>
 
</div>
 
 
 
 
 
 
 
 
 
 
 
   <div class="testimoanil-sliderrrr">
   <div class="container">
   
   
   
   
    	<div class="col-sm-12">
		
		<h1 class="main-title">Testimonial</h1> 
		
		</div>
   
   
   
   
   
		<div id="testimonial_3_columns_carousel" class="carousel slide testimonial_spch_babl_brdr_carousel_wrapper" data-ride="carousel" data-interval="2000" data-pause="hover">
 

			<!--========= Wrapper for slides =========-->
			<div class="carousel-inner" role="listbox">

				<!--========= First slide =========-->
				<div class="item active">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="testimonial_spch_babl_brdr_carousel_caption">
								<div class="row">
									<div class="col-xs-12 col-md-12 testimonial_spch_babl_brdr_carousel_text">
										<p>
											<i class="fa fa-quote-left"></i>
											Praesent sagittis, justo id malesuada tincidunt, ipsum leo elementum risus, at pulvinar ante urna et sem. Proin posuere metus sed tellus. Class aptent taciti sociosqu ad litora torquent.
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-4 col-sm-4 col-md-4 testimonial_spch_babl_brdr_carousel_image">
										<img src="https://previews.envatousercontent.com/files/190236521/images/team_07.png" alt="slider 01" />
									</div>
									<div class="col-xs-8 col-sm-8 col-md-8 testimonial_spch_babl_brdr_carousel_author">
										<h5>jackson logan</h5>
										<a href="#">web developer</a>
									 
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="testimonial_spch_babl_brdr_carousel_caption">
								<div class="row">
									<div class="col-xs-12 col-md-12 testimonial_spch_babl_brdr_carousel_text">
										<p>
											<i class="fa fa-quote-left"></i>
											Praesent sagittis, justo id malesuada tincidunt, ipsum leo elementum risus, at pulvinar ante urna et sem. Proin posuere metus sed tellus. Class aptent taciti sociosqu ad litora torquent.
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-4 col-sm-4 col-md-4 testimonial_spch_babl_brdr_carousel_image">
										<img src="https://previews.envatousercontent.com/files/190236521/images/team_07.png" alt="slider 02" />
									</div>
									<div class="col-xs-8 col-sm-8 col-md-8 testimonial_spch_babl_brdr_carousel_author">
										<h5>sophia mia</h5>
										<a href="#">web designer</a>
										 
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="testimonial_spch_babl_brdr_carousel_caption">
								<div class="row">
									<div class="col-xs-12 col-md-12 testimonial_spch_babl_brdr_carousel_text">
										<p>
											<i class="fa fa-quote-left"></i>
											Praesent sagittis, justo id malesuada tincidunt, ipsum leo elementum risus, at pulvinar ante urna et sem. Proin posuere metus sed tellus. Class aptent taciti sociosqu ad litora torquent.
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-4 col-sm-4 col-md-4 testimonial_spch_babl_brdr_carousel_image">
										<img src="https://previews.envatousercontent.com/files/190236521/images/team_07.png" alt="slider 03" />
									</div>
									<div class="col-xs-8 col-sm-8 col-md-8 testimonial_spch_babl_brdr_carousel_author">
										<h5>michael elijah</h5>
										<a href="#">seo analyst</a>
									 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--========= Second slide =========-->
				<div class="item">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="testimonial_spch_babl_brdr_carousel_caption">
								<div class="row">
									<div class="col-xs-12 col-md-12 testimonial_spch_babl_brdr_carousel_text">
										<p>
											<i class="fa fa-quote-left"></i>
											Praesent sagittis, justo id malesuada tincidunt, ipsum leo elementum risus, at pulvinar ante urna et sem. Proin posuere metus sed tellus. Class aptent taciti sociosqu ad litora torquent.
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-4 col-sm-4 col-md-4 testimonial_spch_babl_brdr_carousel_image">
										<img src="https://previews.envatousercontent.com/files/190236521/images/team_07.png" alt="slider 02" />
									</div>
									<div class="col-xs-8 col-sm-8 col-md-8 testimonial_spch_babl_brdr_carousel_author">
										<h5>sophia mia</h5>
										<a href="#">web designer</a>
										 
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="testimonial_spch_babl_brdr_carousel_caption">
								<div class="row">
									<div class="col-xs-12 col-md-12 testimonial_spch_babl_brdr_carousel_text">
										<p>
											<i class="fa fa-quote-left"></i>
											Praesent sagittis, justo id malesuada tincidunt, ipsum leo elementum risus, at pulvinar ante urna et sem. Proin posuere metus sed tellus. Class aptent taciti sociosqu ad litora torquent.
										</p>
									</div>
								</div>
									<div class="row">
									<div class="col-xs-4 col-sm-4 col-md-4 testimonial_spch_babl_brdr_carousel_image">
										<img src="https://previews.envatousercontent.com/files/190236521/images/team_07.png" alt="slider 02" />
									</div>
									<div class="col-xs-8 col-sm-8 col-md-8 testimonial_spch_babl_brdr_carousel_author">
										<h5>sophia mia</h5>
										<a href="#">web designer</a>
										 
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="testimonial_spch_babl_brdr_carousel_caption">
								<div class="row">
									<div class="col-xs-12 col-md-12 testimonial_spch_babl_brdr_carousel_text">
										<p>
											<i class="fa fa-quote-left"></i>
											Praesent sagittis, justo id malesuada tincidunt, ipsum leo elementum risus, at pulvinar ante urna et sem. Proin posuere metus sed tellus. Class aptent taciti sociosqu ad litora torquent.
										</p>
									</div>
								</div>
									<div class="row">
									<div class="col-xs-4 col-sm-4 col-md-4 testimonial_spch_babl_brdr_carousel_image">
										<img src="https://previews.envatousercontent.com/files/190236521/images/team_07.png" alt="slider 02" />
									</div>
									<div class="col-xs-8 col-sm-8 col-md-8 testimonial_spch_babl_brdr_carousel_author">
										<h5>sophia mia</h5>
										<a href="#">web designer</a>
										 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--========= Third slide =========-->
				<div class="item">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="testimonial_spch_babl_brdr_carousel_caption">
								<div class="row">
									<div class="col-xs-12 col-md-12 testimonial_spch_babl_brdr_carousel_text">
										<p>
											<i class="fa fa-quote-left"></i>
											Praesent sagittis, justo id malesuada tincidunt, ipsum leo elementum risus, at pulvinar ante urna et sem. Proin posuere metus sed tellus. Class aptent taciti sociosqu ad litora torquent.
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-4 col-sm-4 col-md-4 testimonial_spch_babl_brdr_carousel_image">
										<img src="https://previews.envatousercontent.com/files/190236521/images/team_07.png" alt="slider 02" />
									</div>
									<div class="col-xs-8 col-sm-8 col-md-8 testimonial_spch_babl_brdr_carousel_author">
										<h5>sophia mia</h5>
										<a href="#">web designer</a>
										 
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="testimonial_spch_babl_brdr_carousel_caption">
								<div class="row">
									<div class="col-xs-12 col-md-12 testimonial_spch_babl_brdr_carousel_text">
										<p>
											<i class="fa fa-quote-left"></i>
											Praesent sagittis, justo id malesuada tincidunt, ipsum leo elementum risus, at pulvinar ante urna et sem. Proin posuere metus sed tellus. Class aptent taciti sociosqu ad litora torquent.
										</p>
									</div>
								</div>
									<div class="row">
									<div class="col-xs-4 col-sm-4 col-md-4 testimonial_spch_babl_brdr_carousel_image">
										<img src="https://previews.envatousercontent.com/files/190236521/images/team_07.png" alt="slider 02" />
									</div>
									<div class="col-xs-8 col-sm-8 col-md-8 testimonial_spch_babl_brdr_carousel_author">
										<h5>sophia mia</h5>
										<a href="#">web designer</a>
										 
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="testimonial_spch_babl_brdr_carousel_caption">
								<div class="row">
									<div class="col-xs-12 col-md-12 testimonial_spch_babl_brdr_carousel_text">
										<p>
											<i class="fa fa-quote-left"></i>
											Praesent sagittis, justo id malesuada tincidunt, ipsum leo elementum risus, at pulvinar ante urna et sem. Proin posuere metus sed tellus. Class aptent taciti sociosqu ad litora torquent.
										</p>
									</div>
								</div>
									<div class="row">
									<div class="col-xs-4 col-sm-4 col-md-4 testimonial_spch_babl_brdr_carousel_image">
										<img src="https://previews.envatousercontent.com/files/190236521/images/team_07.png" alt="slider 02" />
									</div>
									<div class="col-xs-8 col-sm-8 col-md-8 testimonial_spch_babl_brdr_carousel_author">
										<h5>sophia mia</h5>
										<a href="#">web designer</a>
										 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!--========= Indicators =========-->
			<ol class="carousel-indicators testimonial_spch_babl_brdr_carousel_indicators" style="display:block!important;">
				<li data-target="#testimonial_3_columns_carousel" data-slide-to="0" class="active"></li>
				<li data-target="#testimonial_3_columns_carousel" data-slide-to="1"></li>
				<li data-target="#testimonial_3_columns_carousel" data-slide-to="2"></li>
			</ol>

		</div> <!--*-*-*-*-*-*-*-*-*-*- END BOOTSTRAP CAROUSEL *-*-*-*-*-*-*-*-*-*-->

</div></div>


 <?php include('inc.footer.php');?>
  <?php include('inc.js.php');?>


         
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>


jQuery.fn.liScroll = function(settings) {
	settings = jQuery.extend({
		travelocity: 0.03
		}, settings);		
		return this.each(function(){
				var $strip = jQuery(this);
				$strip.addClass("newsticker")
				var stripHeight = 1;
				$strip.find("li").each(function(i){
					stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
				});
				var $mask = $strip.wrap("<div class='mask'></div>");
				var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");								
				var containerHeight = $strip.parent().parent().height();	//a.k.a. 'mask' width 	
				$strip.height(stripHeight);			
				var totalTravel = stripHeight;
				var defTiming = totalTravel/settings.travelocity;	// thanks to Scott Waye		
				function scrollnews(spazio, tempo){
				$strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
				}
				scrollnews(totalTravel, defTiming);				
				$strip.hover(function(){
				jQuery(this).stop();
				},
				function(){
				var offset = jQuery(this).offset();
				var residualSpace = offset.top + stripHeight;
				var residualTime = residualSpace/settings.travelocity;
				scrollnews(residualSpace, residualTime);
				});			
		});	
};

$(function(){
    $("ul#ticker01").liScroll();
	 $("ul#ticker02").liScroll();
	  $("ul#ticker03").liScroll();
});







</script>
<script>
	(function( $ ) {

    //Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	
	//Variables on page load 
	var $myCarousel = $('#carousel-example-generic'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
		
	//Initialize carousel 
	$myCarousel.carousel();
	
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);
	
	//Pause carousel  
	$myCarousel.carousel('pause');
	
	
	//Other slides to be animated on carousel slide event 
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});  
    $('#carousel-example-generic').carousel({
        interval:3000,
        pause: "false"
    });
	
})(jQuery);	

</script>



 
   <script>
 function subscribeform()
	{
	var sub_fullname = document.getElementById("sub_fullname").value;
	var sub_emailid = document.getElementById("sub_emailid").value;
 		 $.post("ajax.php",  
				       
					   {	
                       "action"	     :	"subscribeemail",
					   sub_fullname	         :	    sub_fullname,
					   sub_emailid	     :	    sub_emailid,
 			      },
		function(data){
			
			if(data	!=	1)
				{	
					$("#subscribemessage").html(data);
				}
			else{	
			
 		 			$("#subscribemessage").html('<p style="color:green;">Submit Successfully.</p>');
					document.getElementById("subscribeform").reset();
					
					}
			});
 }
</script> 

<!--
 
<script>

    $("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });
  
</script>

-->     

,<script>
function position() {
    var topdiv = document.getElementsByClassName("top-div")[0];
    var bottomdiv = document.getElementsByClassName("bottom-div")[0];
    topdiv.parentNode.insertBefore(bottomdiv,topdiv);
    topdiv.className = 'bottom-div';
    bottomdiv.className = 'top-div';
}

window.onload = function() {
	
	var scrwid = screen.width;
	 
	if(scrwid<768)
	{
		
	  position();	
		
	}

};


 

</script>
</body>
</html>
<script>

function getregister()
{
	
var mobileno = document.getElementById("mobileno").value;

$.ajax({
type: 'post',
url: 'ajax.php',
data: {
action	: "get_register",
mobileno	: mobileno,
},
success: function( data ) {		

		if(data	!=	1)
				{	
					$("#iMobileError").html(data);
				}
			else{	
			
 		 			$("#iMobileError").html('<p style="color:wheat;">Subscribe Successfully.</p>');
					document.getElementById("mobilenosub").reset();
					
				}

}
});
}
</script>


<script>


  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});




</script>



<script src="http://www.jqueryscript.net/demo/Responsive-jQuery-News-Ticker-Plugin-with-Bootstrap-3-Bootstrap-News-Box/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
   
  <script>
   
		
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
    		pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
		
		$(".demo2").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
			pauseOnHover: true,
			navigation: false,
            direction: 'down',
            newsTickerInterval: 2500,
            onToDo: function () {
                //console.log(this);
            }
        });

        $("#demo3").bootstrapNews({
            newsPerPage: 3,
            autoplay: false,
            
            onToDo: function () {
                //console.log(this);
            }
        });
    });

   
   </script>

<script src="http://www.jqueryscript.net/demo/Responsive-jQuery-News-Ticker-Plugin-with-Bootstrap-3-Bootstrap-News-Box/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
   
 
<script type="text/javascript">
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 6,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
			navigation: true,
            newsTickerInterval: 1000,
            onToDo: function () {
                //console.log(this);
            }
        });
		
		$(".demo2").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
			pauseOnHover: true,
			navigation: true,
            direction: 'down',
            newsTickerInterval: 1000,
            onToDo: function () {
                //console.log(this);
            }
        });

       
    });
</script>

<script>
if (typeof Object.create !== "function") { Object.create = function (e) { function t() { } t.prototype = e; return new t } } (function (e, t, n, r) { var i = { init: function (t, n) { var r = this; r.elem = n; r.$elem = e(n); r.newsTagName = r.$elem.find(":first-child").prop("tagName"); r.newsClassName = r.$elem.find(":first-child").attr("class"); r.timer = null; r.resizeTimer = null; r.animationStarted = false; r.isHovered = false; if (typeof t === "string") { if (console) { console.error("String property override is not supported") } throw "String property override is not supported" } else { r.options = e.extend({}, e.fn.bootstrapNews.options, t); r.prepareLayout(); if (r.options.autoplay) { r.animate() } if (r.options.navigation) { r.buildNavigation() } if (typeof r.options.onToDo === "function") { r.options.onToDo.apply(r, arguments) } } }, prepareLayout: function () { var n = this; e(n.elem).find("." + n.newsClassName).on("mouseenter", function () { n.onReset(true) }); e(n.elem).find("." + n.newsClassName).on("mouseout", function () { n.onReset(false) }); e.map(n.$elem.find(n.newsTagName), function (t, r) { if (r > n.options.newsPerPage - 1) { e(t).hide() } else { e(t).show() } }); if (n.$elem.find(n.newsTagName).length < n.options.newsPerPage) { n.options.newsPerPage = n.$elem.find(n.newsTagName).length } var r = 0; e.map(n.$elem.find(n.newsTagName), function (t, i) { if (i < n.options.newsPerPage) { r = parseInt(r) + parseInt(e(t).height()) + 10 } }); e(n.elem).css({ "overflow-y": "hidden", height: r }); e(t).resize(function () { if (n.resizeTimer !== null) { clearTimeout(n.resizeTimer) } n.resizeTimer = setTimeout(function () { n.prepareLayout() }, 200) }) }, findPanelObject: function () { var e = this.$elem; while (e.parent() !== r) { e = e.parent(); if (e.parent().hasClass("panel")) { return e.parent() } } return r }, buildNavigation: function () { var t = this.findPanelObject(); if (t) { var n = '<ul class="pagination pull-right" style="margin: 0px;">' + '<li><a href="#" class="prev"><span class="glyphicon glyphicon-chevron-down"></span></a></li>' + '<li><a href="#" class="next"><span class="glyphicon glyphicon-chevron-up"></span></a></li>' + '</ul><div class="clearfix"></div>'; var r = e(t).find(".panel-footer")[0]; if (r) { e(r).append(n) } else { e(t).append('<div class="panel-footer">' + n + "</div>") } var i = this; e(t).find(".prev").on("click", function (e) { e.preventDefault(); i.onPrev() }); e(t).find(".next").on("click", function (e) { e.preventDefault(); i.onNext() }) } }, onStop: function () { }, onPause: function () { var e = this; e.isHovered = true; if (this.options.autoplay && e.timer) { clearTimeout(e.timer) } }, onReset: function (e) { var t = this; if (t.timer) { clearTimeout(t.timer) } if (t.options.autoplay) { t.isHovered = e; t.animate() } }, animate: function () { var e = this; e.timer = setTimeout(function () { if (!e.options.pauseOnHover) { e.isHovered = false } if (!e.isHovered) { if (e.options.direction === "up") { e.onNext() } else { e.onPrev() } } }, e.options.newsTickerInterval) }, onPrev: function () { var t = this; if (t.animationStarted) { return false } t.animationStarted = true; var n = "<" + t.newsTagName + ' style="display:none;" class="' + t.newsClassName + '">' + e(t.$elem).find(t.newsTagName).last().html() + "</" + t.newsTagName + ">"; e(t.$elem).prepend(n); e(t.$elem).find(t.newsTagName).first().slideDown(t.options.animationSpeed, function () { e(t.$elem).find(t.newsTagName).last().remove() }); e(t.$elem).find(t.newsTagName + ":nth-child(" + parseInt(t.options.newsPerPage + 1) + ")").slideUp(t.options.animationSpeed, function () { t.animationStarted = false; t.onReset(t.isHovered) }); e(t.elem).find("." + t.newsClassName).on("mouseenter", function () { t.onReset(true) }); e(t.elem).find("." + t.newsClassName).on("mouseout", function () { t.onReset(false) }) }, onNext: function () { var t = this; if (t.animationStarted) { return false } t.animationStarted = true; var n = "<" + t.newsTagName + ' style="display:none;" class=' + t.newsClassName + ">" + e(t.$elem).find(t.newsTagName).first().html() + "</" + t.newsTagName + ">"; e(t.$elem).append(n); e(t.$elem).find(t.newsTagName).first().slideUp(t.options.animationSpeed, function () { e(this).remove() }); e(t.$elem).find(t.newsTagName + ":nth-child(" + parseInt(t.options.newsPerPage + 1) + ")").slideDown(t.options.animationSpeed, function () { t.animationStarted = false; t.onReset(t.isHovered) }); e(t.elem).find("." + t.newsClassName).on("mouseenter", function () { t.onReset(true) }); e(t.elem).find("." + t.newsClassName).on("mouseout", function () { t.onReset(false) }) } }; e.fn.bootstrapNews = function (e) { return this.each(function () { var t = Object.create(i); t.init(e, this) }) }; e.fn.bootstrapNews.options = { newsPerPage: 4, navigation: true, autoplay: true, direction: "up", animationSpeed: "normal", newsTickerInterval: 4e3, pauseOnHover: true, onStop: null, onPause: null, onReset: null, onPrev: null, onNext: null, onToDo: null} })(jQuery, window, document)

</script>




 <script>
    $( document ).ready(function() {

			$('.gallery-item').on('click', function() {
		   		var num_thumbnails = $('.gallery-item').children().length;
		   		var sr = $(this).children('img').attr('src');
		   		var clicked_thumbnail_index = $($('.gallery-item')).index(this);
	   				if(num_thumbnails > 1) {
	   					$('nav').html('<button type="button" class="previous">></button><button type="button" class="next"><</button>');
       			}
     
	   			var caption = $(this).children('img').attr('alt');
		   		$('#modal-image').attr('src', sr);
		   		$('h4.modal-image-caption').html(caption);
		      $('#myModal').modal('show');

		//***************************
		// Modal Navigation:Next code
		//***************************
			   	$('button.next').on('click', function() {
		   			clicked_thumbnail_index += 1;
		   			

		   			if(clicked_thumbnail_index >= num_thumbnails) {
			   			clicked_thumbnail_index = 0;
		   			}

	       			var next_sibling = $('.gallery-item:eq(' + clicked_thumbnail_index + ')').children('img').attr('src');
	       			$('#modal-image').attr('src', next_sibling);
	       			var next_caption = $('.gallery-item:eq(' + clicked_thumbnail_index + ')').children('img').attr('alt');
	       			$('#modal-image').attr('alt', next_caption);
	       			$('h4.modal-image-caption').html(next_caption);
	       		});

		//***************************
		// Modal Navigation:Previous code
		//***************************
	       		$('button.previous').on('click', function() {
		   				clicked_thumbnail_index -= 1;

		   			if(clicked_thumbnail_index < 0) {
			   			clicked_thumbnail_index = (num_thumbnails - 1);
		   			}

	       			var next_sibling = $('.gallery-item:eq(' + clicked_thumbnail_index + ')').children('img').attr('src');
	       			$('#modal-image').attr('src', next_sibling);
	       				var next_caption = $('.gallery-item:eq(' + clicked_thumbnail_index + ')').children('img').attr('alt');
	       			$('#modal-image').attr('alt', next_caption);
	       			$('h4.modal-image-caption').html(next_caption);
	       		});

			});

		});

</script>









