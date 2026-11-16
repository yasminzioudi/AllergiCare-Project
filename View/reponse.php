<?php
include __DIR__ . '/../Controller/repocontroller.php';
session_start();
$repoC = new RepoControllers();
// Rest of your code...
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<style>
        body {
            background-color: #f0f0f0;
        }
    </style>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
		<title>AllergiCare</title>
		
		<!-- Favicon -->
      	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<link rel="stylesheet" href="..\view\style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
		<!-- Favicon -->
		<link rel="icon" href="img/icon.png">			
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
		
    </head>
	<style>

/*--reset--*/
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0px;padding:0px;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/*--start editing from here--*/
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */ 
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*--end reset--*/
*{
	font-family: 'Poppins', sans-serif;
}
body {
	margin:0;
	font-family: 'Poppins', sans-serif;
}
h1,h2,h3,h4,h5,h6,input,p,a,select,button,textarea,label{
	font-family: 'Poppins', sans-serif;
	margin:0;
}
.clear{clear:both;}
body a{
    transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
	text-decoration: none;}
	

h1,h2,h3,h4,h5,h6{
	margin:0;		
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}	
p{
	margin:0;
	
}
ul{
	margin:0;
	padding:0;
}
.text-center {
	text-align: center;
	color: rgb(188,213,250);
color: radial-gradient(circle, rgba(188,213,250,1) 0%, rgba(133,203,230,1) 46%, rgba(27,123,236,1) 100%);
}
.agileits_w3layouts {
	
	background:url(contexte.jpg)no-repeat; 
	background-size: cover;
	background-attachment: fixed;
}
.wrap {
    padding: 2.3em;
    width: 37%;
    margin: 2em auto;
    background: rgba(1, 14, 21, 0.62);
}
h2.agile_head {
	padding-top: 1em;
	font-size: 30px;
	text-transform: uppercase;
	
	font-weight: 600;
	font-family: 'Montserrat', sans-serif;
	letter-spacing: 6px;
	line-height:1.5;
}
/* feedback-form*/
.w3layouts_main h3{
	font-size: 1em;
    color: #e6cfcf;
	line-height: 1.5;
}
.agile_form h2 {
	font-size: 0.9em;
    color:#1A76D1;
    margin: 1em 0;
	line-height: 1.5;
  }
.agile_form  input[type=text],.agile_form input[type="email"]{
	padding: 1em;
    margin: 0em 0em 1em 0;
    color: #fff;
    width: 43%;
	font-size:0.85em;
	outline: none;
	border: 1px solid #504d4d;
	border-radius: 5px;
	background: rgba(16, 16, 16, 0.47);
	letter-spacing: 1.5px;
}
.agile_form input[type="email"] {
	margin-left:0.8em;
}
.agile_form textarea {
	font-size: 0.85em;
    color: #fff;
    padding: 0.8em 1em;
    margin-bottom: 1em;
    width: 94.5%;
    outline: none;
    resize: none;
    height: 7em;
    border: 1px solid #696867;
	border-radius: 5px;
   background: rgba(16, 16, 16, 0.47);
	letter-spacing: 1px;
}
.agile_form ul {
	list-style-type: none;
}
.agile_form ul li{
  color: #f5e7cc;
  position: relative;
 }
 .agile_form ul li input[type=radio]{
  position: absolute;
  visibility: hidden;
}
.agile_form ul li label{
   display: inline-block;
    position: relative;
    font-size: 1em;
    padding: 0.5em 0em 0.5em 2.5em;
    margin: 0px 0 0px 1em;
    z-index: 9;
    cursor: pointer;
    text-transform: capitalize;
    -webkit-transition: all 0.25s linear;
}
.agile_form ul li label:hover {
	color:#fff;
}
.checkbox {
    position: relative;
    padding-left: 38px !important;
    cursor: pointer;
}
ul li .check{
	display: block;
	position: absolute;
	border: 3px solid #d4c9c0;
	border-radius: 100%;
	height: 13px;
	width: 13px;
	top: 8px;
	left: 17px;
	z-index: 5;
	transition: border .25s linear;
	-webkit-transition: border .25s linear;
}
.agile_form ul li:hover .check {
  border: 3px solid #FFFFFF;
}

.agile_form ul li .check::before {
	display: block;
	position: absolute;
	content: '';
	border-radius: 100%;
	height: 5px;
	width: 5px;
	top: 4px;
	left: 4px;
	margin: auto;
	transition: background 0.25s linear;
	-webkit-transition: background 0.25s linear;
}

/* .agile_form input[type=radio]:checked ~ .check {
  border: 3px solid rgb(233, 156, 30);
} */

.agile_form input[type=radio]:checked ~ .check::before{
  background: #eccff1;
}

/* .agile_form input[type=radio]:checked ~ label{
  color: #FFC107;} */
  .textarea.w3l_summary {
	 min-height: 4em;
	 background-color: white !important; /* Add !important to force the rule */
	 font-size: 0.85em;
}



i.icon_agileits {
	color: #000;
	margin-right: 0.5em;
}
.agileits_copyright  p{
	font-size: 16px;
    color: #fee8d3;
	padding-bottom: 2em;
    line-height: 2;}
.agileits_copyright  a {
      color: #fee8d3;
}	
.agileits_copyright a:hover {
	color: #FFC107;
	text-decoration: none;
}


/* -- Responsive code -- */

@media screen and (max-width: 1440px){
    .agile_form h2 {
		font-size: 0.95em;}
	
	.agile_form input[type=text], .agile_form input[type="email"] {
		width: 43%;}
	
}	
@media screen and (max-width: 1366px){
	.wrap {
	padding: 2.5em;
	width: 37%;}
	
	.agile_form input[type=text], .agile_form input[type="email"] {
	width: 42.5%;}
	
	.agile_form textarea {
    width: 94%;}
}	
@media screen and (max-width: 1280px){
	.agile_form  input[type=text],.agile_form input[type="email"]{
		width: 42%;
	}
	.agile_form textarea {
		width: 93.8%;}
}
@media screen and (max-width: 1080px){
	.agile_form input[type=text], .agile_form input[type="email"] {
    width: 41.3%;}
	
    .agile_form textarea {
     width: 94%;}
	 
	 .wrap {
     width: 40%;}
	
}	
@media screen and (max-width: 1024px){
    h1.agile_head {
       font-size: 2.3em;}
	.wrap {
    width: 50%;}
	.agile_form input[type=text], .agile_form input[type="email"] {
    width: 42.7%;}
	
}
@media screen and (max-width: 991px){
	.wrap {
    width: 52%;}
	
	.w3layouts_main h3 {
    font-size: 0.9em;}
	
	.agile_form ul li label {
	font-size: 0.9em;
    padding: 0.7em 0em 0.5em 2.5em;
	margin: 0px 0 0px 1.2em;}
    	
}
@media screen and (max-width: 900px){
  
	.wrap {
    width: 45%;}
}
@media screen and (max-width: 800px){
	.wrap {
    width: 55%;}
	.agile_form input[type=text], .agile_form input[type="email"] {
    width: 41.4%;}
	.agile_form textarea {
    width: 93%;}
}
@media screen and (max-width: 768px){
	.wrap {
    width: 57%;}
}
@media screen and (max-width: 736px){
	.wrap {
    width: 59%;}
	
	.agile_form textarea {
    font-size: 0.8em;}
	
	.agile_form input[type=text], .agile_form input[type="email"] {
    font-size: 0.8em;}
	
	.agileits_copyright p {
    font-size: 0.9em;}
	
	.agile_form input[type="submit"] {
    font-size: 0.8em;}
	
	h1.agile_head {
    font-size: 2.1em;}
 }   
@media screen and (max-width: 667px){
	
	.wrap {
    width: 63%;}
}
@media screen and (max-width: 640px){
	.wrap {
    width: 67%;}
}
@media screen and (max-width: 600px){
	.wrap {
    width: 70%;}
	
	h1.agile_head {
    padding-top: 1.3em;
    font-size: 2em;
    letter-spacing: 4px;}
}
@media screen and (max-width: 568px){
	.wrap {
    width: 74%;}
}
@media screen and (max-width: 480px){
	
	.wrap {
     margin: 1em auto;
	 width: 74%;}
	 
	 .agile_form textarea {
    width: 91%;
	margin-bottom:0;}
	
	.agile_form input[type=text], .agile_form input[type="email"] {
    width: 91%;
	margin: 1em 0 0;
	font-size: 0.7em;}

	.agile_form input[type="submit"] {
	margin-top: 1em;
	font-size: 0.8em;}
	
	h1.agile_head {
    font-size: 1.8em;}
	
	.w3layouts_main h3,.agile_form h2{
     font-size: 0.9em;}
	 
	.agile_form ul li label {
     font-size: 0.9em;
	 padding: 0.7em 0em 0.5em 2.5em;}
	 
	 ul li .check {
     height: 10px;
	 width: 10px;
     top: 11px;
	 }
	 
	 .agile_form ul li .check::before {
	 height: 4px;
     width: 4px;
     top: 3px;
	 left: 3px;}
	 
	 .agileits_copyright p{
   	 padding-bottom: 1em;}
	 
	  .agileits_copyright a{
		  padding:0; }
		  
	.agileits_copyright p {
	 font-size: 15px;}
}
	
@media screen and (max-width: 414px){
	.agileits_copyright p, .agileits_copyright a {
	 font-size: 14px;}
	 
	.w3layouts_main h3, .agile_form h2 {
    font-size: 0.9em;}
}
@media screen and (max-width: 384px){
	.agileits_copyright p {
    padding: 0.5em;}
	
h1.agile_head {
    font-size: 1.8em;}	
	
.wrap {
    margin: 1.7em auto;}
	
.agileits_copyright p {
    padding: 1em;}	
}
@media screen and (max-width: 375px){
  h1.agile_head {
    font-size: 1.6em;
    letter-spacing: 2px;}
}
@media screen and (max-width: 320px){
    .wrap {
	 padding: 1.5em;
    margin: 0.5em auto;}
	
	h1.agile_head {
    font-size: 1.3em;
    padding-top: 1em;
	letter-spacing: 2px;}
	
	.w3layouts_main h3, .agile_form h2 {
    font-size: 0.8em;}
	
	input[type=radio]:checked ~ label {
    font-size: 0.9em;}
	
	.agile_form ul li label {
     padding: 0.7em 0em 0.5em 2.5em;}
	
	ul li .check {
    top: 9px;}

    .agile_form textarea {
    height: 6em;}
	
	.agile_form input[type=text], .agile_form input[type="email"] {
      font-size: 0.7em;}
	
	.agile_form input[type="submit"] {
    font-size: 0.7em;}
	
    .agileits_copyright p {
    padding: .6em;}

	
}
   .inputname {
	color: #fff;
	font-size: 0.9rem;
	background-color: transparent;
	width: 100%;
	box-sizing: border-box;
	padding-inline: 0.5em;
	padding-block: 0.7em;
	border: none;
	border-bottom: var(--border-height) solid var(--border-before-color);
   }
   /* styling of animated border */
   .input-border {
	position: absolute;
	background: var(--border-after-color);
	width: 0%;
	height: 2px;
	bottom: 0;
	left: 0;
	transition: 0.3s;
   }
   /* Hover on Input */
   input:hover {
	background: var(--input-hovered-color);
   }
   
   input:focus {
	outline: none;
   }
   /* here is code of animated border */
   input:focus ~ .input-border {
	width: 100%;
   }

   .rating {
	cursor: pointer;
  }
  
  .card {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	margin: auto;
	/* -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 16, 0.19), 0 0.3rem 0.3rem rgba(0, 0, 16, 0.23); */
	/* box-shadow: 0 0.5rem 1rem rgba(0, 0, 16, 0.19), 0 0.3rem 0.3rem rgba(0, 0, 16, 0.23); */
	background-color: transparent;
	padding: 0.8rem;
	width: 50rem;
  }
  
  .rating-container {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: justify;
	-ms-flex-pack: justify;
	justify-content: space-between;
	padding: 0.4rem 0.8rem;
	width: 100%;
  }
  
  .rating {
	background-color: transparent;
	padding: 0.4rem 0.4rem 0.1rem 0.4rem;
	border-radius: 2.2rem;
  }
  
  .rating-form {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
  }
  
  .svg {
	fill: rgb(242, 242, 242);
	height: 3.6rem;
	width: 3.6rem;
	margin: 0.2rem;
	align-items: center;
	justify-content: center;
	cursor: pointer;
    color: lightblue;
  }
  
  .rating-form-2 svg {
	height: 3rem;
	width: 3rem;
	margin: 0.5rem;
    
  }
  
  #radios .lb {
	position: relative;
  }
  
  .super-happy, [type="radio"] {
	position: absolute;
	opacity: 0;
  }
  
  .input ,[type="radio"] + svg {
	-webkit-transition: all 0.2s;
	transition: all 0.2s;
  }
  
  .super-happy[class="super-happy"]:hover + svg,
  .super-happy[class="super-happy"]:checked + svg,
  .super-happy[class="super-happy"]:focus + svg {
	fill: rgb(0, 204, 79);
	transition: 1.5s;
  }
  
  .neutral[class="neutral"]:hover + svg,
  .neutral[class="neutral"]:checked + svg,
  .neutral[class="neutral"]:focus + svg {
	fill: rgb(232, 214, 0);
	transition: 1.5s;
  }
  
  .super-sad[class="super-sad"]:hover + svg,
  .super-sad[class="super-sad"]:checked + svg,
  .super-sad[class="super-sad"]:focus + svg {
	fill: rgb(239, 42, 16);
	transition: 1.5s;
  }
  
  


  .radio-input {
	display: flex;
	flex-direction: row;
	font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	font-size: 16px;
	font-weight: 600;
	color: white;
  }
  
  .radio-input input[type="radio"] {
	display: none;
  }
  
  .radio-input label {
	display: flex;
	align-items: center;
	padding: 10px;
	border: 1px solid #ccc;
	background-color: #212121;
	border-radius: 5px;
	margin-right: 12px;
	cursor: pointer;
	position: relative;
	transition: all 0.3s ease-in-out;
  }
  
  .radio-input label:before {
	content: "";
	display: block;
	position: absolute;
	top: 50%;
	left: 0;
	transform: translate(-50%, -50%);
	width: 10px;
	height: 10px;
	border-radius: 50%;
	background-color: #fff;
	border: 2px solid #ccc;
	transition: all 0.3s ease-in-out;
  }
  
  .radio-input input[type="radio"]:checked + label:before {
	background-color: green;
	top: 0;
  }
  
  .radio-input input[type="radio"]:checked + label {
	background-color: royalblue;
	color: #fff;
	border-color: rgb(129, 235, 129);
	animation: radio-translate 0.5s ease-in-out;
  }
  
  @keyframes radio-translate {
	0% {
	  transform: translateX(0);
	}
  
	50% {
	  transform: translateY(-10px);
	}
  
	100% {
	  transform: translateX(0);
	}
  }
  

  .success-message {
    color: black;
}

.white-text {
    color: black;
}




        /* Add the following style for the navbar links */
       
		.agileits_w3layouts {
	background:url(3439410_61807.jpg)no-repeat; 
	background-size: cover;
	background-attachment: fixed;
}

.agile_form h2 {
	font-size: 0.9em;
    color:black;
    margin: 1em 0;
	line-height: 1.5;
  }

  h2.agile_head {
	padding-top: 1em;
	font-size: 30px;
	text-transform: uppercase;
	color: #1A76D1;
	font-weight: 600;
	font-family: 'Montserrat', sans-serif;
	letter-spacing: 6px;
	line-height:1.5;
}

.wrap {
    padding: 2.3em;
    width: 60%;
    margin: 2em auto;
    background: url(3439409_61806.jpg);
	border-radius: 20px;
}
.svg {
	fill: rgb(222, 184, 135);
	height: 6rem;
	width: 9.6rem;
	margin: 0.2rem;
	align-items: center;
	justify-content: center;
	cursor: pointer;
  }
  .btn-donate {
  --clr-font-main: hsla(0 0% 20% / 100);
  --btn-bg-1: hsla(194 100% 69% / 1);
  --btn-bg-2: hsla(217 100% 56% / 1);
  --btn-bg-color: hsla(360 100% 100% / 1);
  --radii: 0.5em;
  cursor: pointer;
  padding: 0.9em 1.4em;
  min-width: 120px;
  min-height: 44px;
  font-size: var(--size, 1rem);
  font-family: "Segoe UI", system-ui, sans-serif;
  font-weight: 500;
  transition: 0.8s;
  background-size: 280% auto;
  background-image: linear-gradient(325deg, var(--btn-bg-2) 0%, var(--btn-bg-1) 55%, var(--btn-bg-2) 90%);
  border: none;
  border-radius: var(--radii);
  color: var(--btn-bg-color);
  box-shadow: 0px 0px 20px rgba(71, 184, 255, 0.5), 0px 5px 5px -1px rgba(58, 125, 233, 0.25), inset 4px 4px 8px rgba(175, 230, 255, 0.5), inset -4px -4px 8px rgba(19, 95, 216, 0.35);
}

.btn-donate:hover {
  background-position: right top;
}

.btn-donate:is(:focus, :focus-visible, :active) {
  outline: none;
  box-shadow: 0 0 0 3px var(--btn-bg-color), 0 0 0 6px var(--btn-bg-2);
}

@media (prefers-reduced-motion: reduce) {
  .btn-donate {
    transition: linear;
  }
}

    </style>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 200px;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border-radius: 20px;
        }

        input[type="submit"] {
            background-color: #1A76D1;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #1A76D1;
        }

        .response {
            font-size: 20px
        }
        .refid{
            font-size: 20px;
            font-weight: bold;

        }
    </style>
     <body style="background-color: #f0f0f0;">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="loader">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>

			<div class="indicator"> 
				<svg width="16px" height="12px">
					<polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
					<polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
				</svg>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	<!-- Get Pro Button -->
	<ul class="pro-features">
		<a class="get-pro" href="panier1.php">Basket</a>
		<li class="big-title">Pro Version Available on Themeforest</li>
		
		<div class="button">
			<a href="http://preview.themeforest.net/item/mediplus-medical-and-doctor-html-template/full_screen_preview/26665910?_ga=2.145092285.888558928.1591971968-344530658.1588061879" target="_blank" class="btn">Pro Version Demo</a>
			<a href="https://themeforest.net/item/mediplus-medical-and-doctor-html-template/26665910" target="_blank" class="btn">Buy Pro Version</a>
		</div>
	</ul>

	<!-- Header Area -->
	<header class="header" >
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-5 col-12">
						<!-- Contact -->
						
						<!-- End Contact -->
					</div>
					<div class="col-lg-6 col-md-7 col-12">
						<!-- Top Contact -->
						<ul class="top-contact">
							<li><i class="fa fa-phone"></i>+216 1234 5678</li>
							<li><i class="fa fa-envelope"></i><a href="mailto:@gmail.com">Allergiecare.Support@gmail.com</a></li>
						</ul>
						<!-- End Top Contact -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-12">
							<!-- Start Logo -->
							<div class="logo">
								<a href="index.php"><img src="img/gg.png" alt="#"></a>
							</div>
							<!-- End Logo -->
							<!-- Mobile Nav -->
							<div class="mobile-nav"></div>
							<!-- End Mobile Nav -->
						</div>
						<div class="col-lg-7 col-md-9 col-12">
							<!-- Main Menu -->
							<div class="main-menu">
								<nav class="navigation">
									<ul class="nav menu">
									<li><a href="index.php">Home</a></li>
									
										<?php if (!empty($_SESSION)) {?>
											<li><a href="appointment.php">Appointment</a></li>
										<?php }?>
										<li><a href="listeproduitclient.php">Products</a></li>
										<li><a href="events.php">Events</a></li>
										<li><a href="complaints.php">Reclamation</a></li>
									</ul>
								</nav>
							</div>
							<!--/ End Main Menu -->
						</div>
						<div class="col-lg-2 col-12">
							<div class="get-quote">
								<?php if (empty($_SESSION)) {?>

									<a href="signin.php" class="btn">Log In | Sign Up</a>

										<?php } else {?>
											<a href="profile.php" class="btn"><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></a>
											<a href="logout.php">Log Out</a>
										<?php }?>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
		<!-- End Header Area -->
		
		<!-- Error Page -->
      

    <form action="#" method="get">
        <label for="recherche" class="refid">Enter your reference ID :</label>
        <input type="text" name="recherche" id="recherche">
        <input type="submit" value="Rechercher">
    </form>

    <?php
    // Check if the form was submitted and "recherche" is set in the query parameters
    if (isset($_GET["recherche"])) {
        $recherche = htmlspecialchars($_GET["recherche"]); // Sanitize user input
        $reponse = $repoC->getResponseByFeedbackId($recherche);

        if (is_array($reponse) && isset($reponse["response_text"])) {
            echo '<div class="response">' . htmlspecialchars($reponse["response_text"]) . '</div>';
        } else {
            echo '<div class="response">No response yet</div>';
        }
    }
    ?>
		<!--/ End Error Page -->
		
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>Lorem ipsum dolor sit am consectetur adipisicing elit do eiusmod tempor incididunt ut labore dolore magna.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Cases</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other Links</a></li>	
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consuling</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>	
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
								<ul class="time-sidual">
									<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Newsletter</h2>
								<p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2018  |  All Rights Reserved by <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
    </body>
</html>