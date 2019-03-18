<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Habr</title>
	<link rel="stylesheet" href="../style.css">
		<!-- fontawesome -->
	<link rel="stylesheet" href="font-awesome.min.css">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,500" rel="stylesheet">

	<style>
body {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: Arial, sans-serif;
	font-size: 100%;
}

h1,h2,h3,h4,h5,h6 {
	font-family: 'Fira Sans', sans-serif;
	font-weight: 400;
}
h1{
	font-size: 160%;
}

p{
	font-size: 110%;
	line-height: 1.7rem;
}
.container{
	max-width: 1200px;
	margin: 0 auto;
	/* border: 1px solid red; */
}

/* Header start */
.pod_menu {
	background: #f2f2f2;
	height: 30px;
	display: flex;
	border-bottom: 1px solid #a9a9a9; 
	
}

ul{
	list-style: none;
	display: flex;
	margin-top: 6px;
	
}
.pod_menu_2 {
	margin-left: 3rem;
}

li{
	padding-right: 1.7rem;
	margin-bottom: 1rem;
}
a{
	text-decoration: none;
	color: #077fcc;
	font-size: 12px;
}
a.xabr{
	color: #000;
}
a.megapost{
	color: #999;	
}
a.evolution {
	color: #3c86ee;	
}
a.a_post {
	color: #31B007;
}
a.maind_play {
	color: #00008B;;
}
/* Menu section */
.logo {
	font-family: 'Montserrat Alternates', sans-serif;
	font-size: 180%;
}


.menu a {
	color:#838a92;
	font-family: 'Fira Sans', sans-serif;
	font-weight: 300;
	font-size: 90%;
}

.menu a:hover {
	color:#4697ca;
}
a.publications{
	color: #464646;
}
a.publications:hover{
	color: #464646;
}

.nav {
	margin-top: 2.1rem;
	padding: 0;
	display: flex;
	flex-direction: row;
	align-content: center;

}
.menu {
	margin-left: 35px;
	margin-top: 6px;
} 

.line-bottom_menu {
	color: #f0f0f0;
	margin: 0px;	
}
.icons_menu {
	margin-left: 7rem;
}
.icon_menu {
	margin-top: .5rem;
}

li .fa-search, li .fa-globe {
	font-size: 16px;
	color: #929ca5;
}
.fa-search:hover {
color: #4697ca;
}

.buttons_menu {
	 margin-top: .2rem;
	 
} 
.sing_in{
	background: none;
	border: 1px solid #929ca5;
	color:#929ca5;
	padding: 10px 15px;
	border-radius: 3px;
}
.sing_in:hover {
	color: #4697ca;
	border: 1px solid #4697ca;
}

.registration {
	background: #4697ca;
	border: none;
	padding: 11px 17px;
	font-size: 'Fira Sans', sans-serif;
	color: #fff;
	border-radius: 3px;
}
.registration:hover {
	background: #407fa7;
}
.sub_menu {
	font-family: 'Fira Sans', sans-serif;
	font-weight: 500;
	font-size: 180%;
	margin-bottom: 3.5rem;
	display: block;
	padding-top: 70px;
	padding-left: 0px;
	color: #464646;
	cursor: pointer;
}

.sub_menu:hover {
	color: #4697ca;
}

li i.fa.fa-chevron-down{
	font-size: 16px;
	color: #4697ca;
}

.sub_menu_drop{
	background: #fff;
	box-shadow: 1px 1px 1px 1px; 
	padding: 15px 0px;
	width: 220px;	
	display: flex;
	flex-direction: column;
	
}

#menu_hiden{
	display: none;
}
.sub_menu_drop a {
	font-size: 65%;
	margin: 20px 0;
	color: #464646;
}
.sub_menu_drop li{
	padding-left: 15px;
	
}

.sub_menu_drop a:hover {
	color: #548eaa;
}


.sub_menu_drop li:hover {
	background: #ccf5ff;
	box-sizing: border-box;
	z-index: 99;
	padding: 10px -10px;

}

.sub_menu_drop li{
	display: block;
}


.publications_choice {
	text-transform: uppercase;
	padding: 0;
	font-family: 'Fira Sans', sans-serif;
	font-weight: 500;
	margin-bottom: 1rem;
}
.publications_choice li {
	padding: 0;
}
.publications_choice a {
	font-size: 105%;
}
.active	{
	color: #4697ca;
	cursor: pointer;
	padding-right: 50px;

}
.all_rows{
	cursor: pointer;
	color: #929ca5;
}
.all_rows:hover{
	color: #4697ca;
}
.toggle_menu {
	padding: 0;
	margin-top: 20px;
	margin-bottom: 20px;
}
.menu_item {
	border: 1px solid #d5dddf;
	padding-right: 0;
	padding: 15px 20px;
	border-radius: 3px;
	transition: .5s ease
}
.menu_item:hover {
	border: 2px solid #4697ca;
	transition: .5s ease
}
.menu_item a {
	font-size: 102%;
	font-family: 'Fira Sans', sans-serif;
	width: 500;
	color: #929ca5;
}
.menu_item a:hover {
	color: #4697ca;
}
a.activ {
	color: #4697ca;
	border: #4697ca;
}
/* Section Posts */

.grid_continer{
	display: grid;
	grid-template-columns: 67% 28%;
	grid-gap: 60px;
}

.user_avatar{
	width: 30px;
	height: 30px;
	padding-right: 15px;
}
.user_name{
	color: #548eaa;
	font-size: 110%;
	padding-right: 15px;
	display: flex;
}
.post_time{
	font-size: 90%;
	color: #929ca5;
}
.user {
	display: flex;
}

.post_heading {
	font-size: 140%;
	color: #000;
	margin: 1rem 0;
}
.post_heading:hover {
	color: #4697ca;
}
.post_category {
	font-size: 120%;
	color: #929ca5;
	display: block;
}
.post_category:hover {
	color: #4697ca;
}

.btn_post{
	border: 1px solid #4697ca;
	font-size: 90%;
	padding: 12px 17px;
	margin-bottom:

}
.fa-long-arrow-right{
	font-size: 10px;
}
.btn_post:hover{
	border: none;	
	background:#4697ca;
	color: #fff;
}
.btn{
	margin: 40px 0 60px 0;
}

.infoPanel ul {
	padding: 0;
	margin-bottom: 50px;

}	

.infoPanel li {
	padding-right: 50px;
	color: #4697ca;
}
#namber {
	color:green;
	padding: 0 12px;	
}
.fa-bookmark:hover, .fa-comment:hover {
	color: #548eaa;
}
.fa-comment, .comment{
	font-size: 16px;
	color: #4697ca;
}

/* Post 2 */

.post_img_post2 {
	width: 800px;
	height: 500px;
	margin-top: 25px;
}
.btn_pisochnica{
	margin: 25px 0 20px 0;
}
.pisochnica{
	border: 1px solid #929ca5;
	color: #929ca5;
	padding: 10px 17px;
}
.pisochnica:hover{
	border: 1px solid #4697ca;
	color: #4697ca;	
}

#mnenie{
	font-size: 100%;
}

/* RECOMENDATION */

.block_recomendation{
	background: #f6f6f6;
	padding-bottom: 25px;
	margin-bottom: 70px;
}

#recomendation{
	font-size: 100%;
	text-transform: uppercase;
	color: #464646;
	padding: 20px 0 0 20px;
}
#line_recomendation {
	color: #b9b9b9;
}

.habr_recomendation {
	display: flex;
	justify-content: space-between;
	align-items: center;
}

#recomendation_place{
	padding: 0 20px 0 0;
	font-size: 100%;
	margin-top: 20px;
	color: #929ca5;
}

.news_item img {
	width: 250px;
	height: 170px;
	margin-bottom: 20px;
}
.news_item a {
	color: #464646;
	font-family: 'Fira Sans', sans-serif;
	font-size: 90%;
}
.news_item a:hover {
	color: #4697ca;
}
.news_grid_container{
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	margin: 25px 0 50px 0;
}
.news_item{
	margin: 0px;
}
.news_item:first-child{
	padding-left: 15px;
}
/* LEFT PART */

#advertising{
	font-size: 90%;
}
#advertising:hover{
	color: #548eaa;
}

.sidebare {
	background: #f6f6f6;
	padding-bottom: 25px;
	margin-bottom: 60px;
	margin-top: 50px;
}

.left_heading{
	font-size: 97%;
	text-transform: uppercase;
	letter-spacing: .1rem;
	color: #666;
	margin-left: 22px ;
	padding-top: 20px;
}
.list_block{
	display: block;
	padding: 10px 0 0 22px;	
}
.list_block li {
	padding-top: 15px;
	display: flex;
	justify-content: space-between;
	border-top: 1px solid #dcdcdc;
	
}
.list_block_color{
	color: green;
}

.list_block a  {
	font-size: 100%;
	font-family: 'Fira Sans', sans-serif;
} 

.list_block a:hover{
	text-decoration: underline;
	color: #548eaa;
}

.list_block_2{
	display: block;
	padding-top: 10px;
	padding-left: 22px;	
	
}

.list_block_2 li img{
	width: 30px;
	height: 30px;	
}


.list_block_2 li {
	padding-top: 15px;
	display: flex;
	justify-content: space-between;
	align-items: center;
	flex-basis: 15px;	
	
}
.list_block_2 li:first-child{
	border-top: 1px solid #dcdcdc;
}
.list_block_2 li:last-child{
	border-bottom: 1px solid #dcdcdc;
	padding-bottom: 15px;
}
.list_block_color_pink{
	color: #cd66cd;
	padding-top: 17px;
}

.list_block_2 a  {
	font-size: 90%;
	color: #464646;
	
} 

.list_block_2 a:hover{
	color: #4697ca;
}

.all_company{
	font-size: 90%;
	font-family: 'Fira Sans', sans-serif;
	padding-left: 22px;
	color: #548eaa;	
}

.sidebare_fixed{
	width: 336px;
}


.list_block_3{
	display: block;
	padding: 10px 0 0 22px;	
}
.list_block_3 li {
	padding-top: 15px;
	border-top: 1px solid #dcdcdc;	
}

.list_block_3 a  {
	font-size: 100%;
	font-family: 'Fira Sans', sans-serif;
} 

.list_block_3 a:hover{
	color: #548eaa;
}

.reading_posts{
	padding-top: 20px;
}
.eyes{
	padding-right: 50px;
}


	/*FOOTER  */

.footer{
	margin-top: 60px;
}
.bg_footer {
	background: #f6f6f6;
}
.footer_grid_container{
	display: grid;
	grid-template-columns: repeat(5, 1fr);
	grid-gap: 30px;
}

.footer_menu{
	padding: 30px;
}

.patr_menu{
	font-size: 100%;	
}

.footer_menu_items{
	display: block;
	padding: 0px;
}

.footer_menu_items a {
	font-size: 90%
}
.footer_menu_items li:first-child{
	border-top: 1px solid #dcdcdc;
	padding-top: 20px;
}

.footer_menu_items img{
	height: 50px;
	width: 150px;
	padding-right: 15px;

}


.footer_down_part{
	background: #dedede;
}

.footer_menu_items_down{
	padding: 30px 0 5px 22px;
	margin: 0;
	justify-content: space-between;
}
#brand{
	width: 40px;
	height: 40px;
}

.data{
	font-size: 80%;
}

strong{
	color: #4697ca;
}

.lenguage{
	padding-right: 10px;
}
.footer_menu_items_down a{
	font-size: 80%;
}

.footer_menu_items_down{
	align-items: center;	
}

li .fa-twitter{
	background: #39AECF;
	padding: 8px 10px;
	color: #fff;
	border: 1px solid #39AECF;
	border-radius: 3px;
	font-size: 16px;
}

li .fa-facebook{
	background: #0F4DA8;
	padding: 8px 12px;
	color: #fff;
	border: 1px solid #0F4DA8;
	border-radius: 3px;
	font-size: 16px;
}

li .fa-vk{
	background: #0772A1;
	padding: 8px 8px;
	color: #fff;
	border: 1px solid #0772A1;
	border-radius: 3px;
	font-size: 16px;
}
li .fa-youtube-play{
	background: #FF0700;
	padding: 8px 8px;
	color: #fff;
	border: 1px solid #FF0700;
	border-radius: 3px;
	font-size: 16px;
}
.arrows{
	padding: 0 ;
}
.arrows a{
	/* text-transform: uppercase; */
	font-size: 200%;
	font-weight: 400;
	font-family: 'Fira Sans', sans-serif;
	color: #4697ca;
	
}


/* ARROWS */
li .fa-arrow-left, li .fa-arrow-right{
	color: #4697ca;
	font-size: 25px;
	font-weight: 200;
}

li .fa-arrow-left{
	padding-right: 20px;
}
li .fa-arrow-right{
	padding-left: 20px;
}


.scrollTop {
	position: fixed;
	bottom: 50px;
	left: 200px;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	background: #cccccc;
	border: 2px solid #e6faff;;
	z-index: 100;
	cursor: pointer;
}	


.scrollTop:after {
	content: '';
	width: 8px;
	height: 8px;
	border-top: 2px solid #fff;
	border-left: 2px solid #fff;
	transform: rotate(45deg);
	position: absolute;
	top: 4px ;
	bottom: 0;
	left: 0 ;
	right: 0;
	margin: auto;
}

	</style>

	
</head>
<body>
	<header>
		<div  class="pod_menu">

		<ul>
			<li><a class="xabr" href="https://habr.com/ru/">Хабр</a></li>
			<li><a href="https://habr.com/ru/flows/geektimes/">Geektimes</a></li>
			<li><a href="https://toster.ru/?utm_source=tm_habrahabr&utm_medium=tm_top_panel&utm_campaign=tm_promo&_ga=2.143812533.1285729479.1551555921-816943406.1550679611">Тостер</a></li>
			<li><a href="https://moikrug.ru/">Мой круг</a></li>
			<li><a href="https://freelansim.ru/">Фрилансим</a></li>
		</ul>	

		<ul class="pod_menu_2">
			<li>	<a href="#"> Мегапосты:</a></li>
			<li><a class="evolution" href="https://habr.com/ru/article/442296/">Эволюция гаджетов</a></li>
			<li><a class="a_post" href="https://habr.com/ru/article/433778/">Алюминиевый пост</a></li>
			<li><a class="maind_play" href="https://habr.com/ru/article/440996/">Мозг играет</a></li>
		</ul>
		</div>
	
	<section>
	<div class="container">
				<div class="nav">
					<div class="logo">
					<span>habr</span>
					</div>
					<div class="menu">
					<ul>
							<li><a class="publications" href="https://habr.com/ru/ ">Публикации</a></li>
							<li><a href="https://habr.com/ru/users/">Пользователи</a></li>
							<li><a href="https://habr.com/ru/hubs/">Хабы</a></li>
							<li><a href="https://habr.com/ru/companies/">Компанииг</a></li>
							<li><a href="https://habr.com/ru/sandbox/">Песочница</a></li>
						</ul>
					</div>
					
						<ul class="icons_menu">
							<li class="icon_menu search" ><a href="">	<i class="fa fa-search" aria-hidden="true"></i></a></li>
							<li class="icon_menu global"><a href=""> <i class="fa fa-globe" aria-hidden="true"></i></a></li>
						</ul>

						<ul class="buttons_menu">
							<li> <a href="https://account.habr.com/login/?state=8e0e9df3c9e7cc7adea6c5eff7604cd7&consumer=habr&hl=ru_RU"><button class="sing_in">Войти</button></a> </li>
							<li> <a href="https://account.habr.com/register/?state=a172e5a4a1dfe1392943c89bd5fae719&consumer=habr&hl=ru_RU"> <button class="registration">Регистрация</button></a></li>
						</ul>
					</div>
					
			</div>
			<hr class="line-bottom_menu">
		</section>
		
		<div class="container">		
		<br>				
		<a href="admin">Добавить статью</a>
							
							
			<div class ="article_item">
				<h1><?=$article['title']?></h1>
				<em>Опубликовано: <?=$article['date']?></em>
				<br>
				<br>
				<p><?=$article['content']?></p>
				<br>
					<a href="../../blog" class="btn_post">На главную <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>	
					<br><br><br><br>
				</div>
		</div>






		<!-- FOOTER -->
	
		<footer class="container ">
	<div class="footer_grid_container bg_footer">
	<div class="footer_menu">
		<p class="patr_menu">Аккаунт</p>
		<ul class="footer_menu_items">
			<li><a href="https://account.habr.com/login/?state=b823a8695696c9436d61c880bc406ec5&consumer=habr&hl=ru_RU">Войти</a></li>
			<li><a href="https://account.habr.com/register/?state=26d1ca87ebc22d7851af17089b932ae6&consumer=habr&hl=ru_RU">Регистрация</a></li>
		</ul>
	</div>

	<div class="footer_menu">
			<p class="patr_menu">Разделы</p>
			<ul class="footer_menu_items">
				<li><a href="https://habr.com/ru/all/">Публикации</a></li>
				<li><a href="https://habr.com/ru/hubs/">Хабы</a></li>
				<li><a href="https://habr.com/ru/companies/">Компании</a></li>
				<li><a href="https://habr.com/ru/users/">Пользователи</a></li>
				<li><a href="https://habr.com/ru/sandbox/">Песочница</a></li>
			</ul>
		</div>

		<div class="footer_menu">
				<p class="patr_menu">Информация</p>
				<ul class="footer_menu_items">
					<li><a href="https://habr.com/ru/info/help/rules/">Правила</a></li>
					<li><a href="https://habr.com/ru/info/help/">Помощь</a></li>
					<li><a href="https://habr.com/ru/info/topics/madskillz/">Докуминтация</a></li>
					<li><a href="https://account.habr.com/info/agreement/?hl=ru_RU&_ga=2.85664793.1285729479.1551555921-816943406.1550679611">Соглашения</a></li>
					<li><a href="https://account.habr.com/info/confidential/?hl=ru_RU&_ga=2.85664793.1285729479.1551555921-816943406.1550679611">Конффеденцальность</a></li>
				</ul>
			</div>

			<div class="footer_menu">
					<p class="patr_menu">Услуги</p>
					<ul class="footer_menu_items">
						<li><a href="https://tmtm.ru/services/advertising/">Реклама</a></li>
						<li><a href="https://tmtm.ru/services/corpblog/">Тарифы</a></li>
						<li><a href="https://tmtm.ru/services/content/">Контент</a></li>
						<li><a href="https://tmtm.ru/workshops/">Семинары</a></li>
					</ul>
				</div>

				<div class="footer_menu">
						<p class="patr_menu">Приложения</p>
						<ul class="footer_menu_items">
							<li><a href=""><img src="img/apple.png" alt=""></a></li>
							<li><a href=""><img src="img/google.png" alt=""></a></li>
						
						</ul>
					</div>
				</div>
					</div>
					<div class="footer_down_part">
							<div class="down-part">
									<ul class="footer_menu_items_down ">
											<li><img id="brand" src="img/Company/4.png" alt=""></li>
											<li><span class="data">&copy; 2006 – 2019 <strong>«TM»</strong></span></li>
											<li><a href="https://habr.com/ru/#"><i class="fa fa-globe lenguage" aria-hidden="true"></i>Насьройка языка</a></li>
											<li><a href="https://habr.com/ru/info/about/">О сайте</a></li>
											<li><a href="https://habr.com/ru/feedback/">Служба поддержки</a></li>
											<li><a href="https://m.habr.com/ru/top/daily?mobile=yes&_ga=2.148103223.1285729479.1551555921-816943406.1550679611">Мобильная версия</a></li>
											<li ><a href="https://twitter.com/habr_com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="https://www.facebook.com/habrahabr.ru"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li ><a href="https://vk.com/habr"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
										<li ><a href="https://www.youtube.com/channel/UCd_sTwKqVrweTt4oAKY5y4w"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>	
									
							</div>
							<div class="scrollTop"></div>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="main.js"></script>
</body>
</html>
