<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.ico') }}">
<link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('frontend/fonts/fontawesome/css/fontawesome-all.min.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('frontend/plugins/fancybox/fancybox.min.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('frontend/plugins/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/plugins/owlcarousel/assets/owl.theme.default.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/ui.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />
<link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=myanmar3' />
<style>
.title{
  text-align: center;
  font-weight: bold;
  color:  rgb(114, 204, 30);
}

.titleName{
  color:  rgb(114, 204, 30);
  font-weight: bold;
}

/*scroll up*/
#myBtn {
	display: none;
	position: fixed;
	bottom: 20px;
	right: 30px;
	z-index: 99;
	font-size: 13px;
	border: none;
	outline: none;
	background-color: rgb(114, 204, 30);
	color: white;
	cursor: pointer;
	padding: 15px;
	border-radius: 4px;
}

#myBtn:hover {
	background-color: #3B8839;
}
/*scroll up*/

/*images slider*/
#mart {
	margin-top: 0rem;
}

.carousel-item {
	height: 67vh;
	min-height: 330px;
	background: no-repeat center center scroll;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

.btn {
	border: 1px solid white;
	font-size: 16px;
	cursor: pointer;
}

.default {
	border-color: black;
	color: black;
}

.default:hover {
	background: gray;
}

.feature {
	position: absolute;
	right: 0;
	left: 0;
	bottom: 99%;
	margin: auto;
	text-align: center;
}

.feature .cat-link {
	position: relative;
	top: 1.5rem;
	left: 0;
	color: black;
	font-size: 1.2rem;
	padding: .5rem 0.3rem;
	letter-spacing: .1rem;
	line-height: initial;
}

.cat-link {
	background-color: rgb(34, 245, 7);
}

.feature .feature-title {
	color: rgb(12, 12, 12);
	background-color: #fff;
	padding-top: 2rem;
	padding-bottom: 2rem;
	margin-bottom: 3rem;
	margin-left: 3rem;
	margin-right: 3rem;
}

.featured .entry-title {
	color: rgb(12, 12, 12);
	font-size: 12px;
	line-height: 1rem;
	border: 0.1rem solid #d6f5c7;
	margin: 0;
	padding: 1rem;
}
/*header slider*/

/*about*/
#hover {
	width: 100%;
	height: 450px;
}
</style>