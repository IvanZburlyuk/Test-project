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

	
</head>
<body>
	<div class="container">
		<div class="add_articles">
				<a href="admin">Добавить статью</a>
		</div>
		</div><section class="container grid_continer">
			<div class="post_user_info">



			<div>		
		<?php foreach($articles as $a): ?>
		<div >
		<h1 class="post_heading"><a class="post_heading" href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h1>
		<div class="user">
			<a class="user" href="https://habr.com/ru/users/Zelenyikot/">
				<img class="user_avatar" src="img/avatar1.jpg" alt="user's avatar">
				<span class="user_name">Drebin893

					</span>
		</a>
		<span class="post_time">Опубликовано: <?=$a['date']?></span>
	</div>
	<img class="post_img_post2" src="img/post/post1.jpeg" alt="">
					
		
			<br>
			<br>
			<div class="text">
			<p><?=articles_intro($a['content'])?></p>
			</div>
			<br>
			<a  href="article.php?id=<?=$a['id']?>"class="btn_post">Читать дальше <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
			<br><br><br><br>
			<div class="infoPanel">
			<ul>
				<li>
					<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
					<span id="namber">+202</span>
					<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
				</li>
				<li>
					<i class="fa fa-bookmark" aria-hidden="true"></i>
					<span>175</span>
				</li>
				<li>
						<i class="fa fa-eye" aria-hidden="true"></i>
						<span>45,9k</span>
				</li>
				<li>
					<a href="#"> 
							<i class="fa fa-comment" aria-hidden="true"></i>
							<span class="comment">231</span>
					</a>
				</li>
			</ul>
		</div>
			
	</div>
		<?php endforeach ?>
	</div>




			
		<div class="block_recomendation">
			<div class="habr_recomendation">
		<h1 id="recomendation">ХАБР РЕКОМЕНДУЕТ</h1>
		<a id="recomendation_place" href="https://tmtm.ru/megapost/"> Разместить</a>
	</div>
		<hr id="line_recomendation">
		<div class="news_grid_container">
		<div class="news">
			<figure class="news_item">
			<img src="img/recomendation/1.jpg" alt="Как мы делали платежную систему для криптовалюты: пять основных проблем">
			<a href="https://habr.com/ru/company/b2broker/blog/441338/"><figcaption>Как мы делали платежную систему для криптовалюты</figcaption></a>
		</figure>
		</div>
	
		<div class="news">
				<figure class="news_item">
				<img src="img/recomendation/2.png" alt="ContentSense — конфа о контенте как продукте. Контент, который работает. 15 марта, Москва">
				<a href="https://contentsense.ru/?utm_source=habr&utm_medium=email&utm_campaign=newsletter&utm_content=link"><figcaption>ContentSense — конфа о контенте как продукте. Контент, который работает. 15 марта, Москва</figcaption></a>
			</figure>
			</div>





			<div class="news">
					<figure class="news_item">
					<img src="img/recomendation/3.jpg" alt="Подросли: во что превратились гаджеты нашего детства">
					<a href="https://habr.com/ru/article/442296/"><figcaption>Подросли: во что превратились гаджеты нашего детства</figcaption></a>
				</figure>
				</div>
			</div>
	</div>
	<div class="user">
			<a class="user" href="https://habr.com/ru/users/Zelenyikot/">
				<img class="user_avatar" src="img/avatar6.png" alt="user's avatar">
				<span class="user_name">Drebin893

					</span>
		</a>
		<span class="post_time">сегодня в 08:21</span>
	</div>
	<a href="https://habr.com/ru/post/442492/"> <h1 class="post_heading">Каждый может с легкостью выучить английский язык</h1></a>
	 <a href="https://habr.com/ru/hub/learning_languages/"> <span class="post_category">Изучение языков, Образование за рубежом, Читальный зал</span></a>
	 <img class="post_img_post2" src="img/post/post4.jpeg" alt="">
	<div class="text">	
	 <p>В современном мире знание английского языка приравнивается к элементарным, базовым знаниям. Это так же важно, как знать родной язык, уметь пользоваться компьютером и смартфоном. Английский сегодня нужен абсолютно каждому. Конкретно вам он тоже нужен, даже если вы об этом пока не догадываетесь.
	 </p>
	 <p>Про необходимость английского мы еще поговорим, а пока давайте разберемся, как же все-таки его выучить. Спойлер: это может сделать каждый, вне зависимости от возраста и других иллюзорных факторов. При чем не просто выучить, а начать в совершенстве говорить, понимать англоязычных собеседников и контент на английском языке.</p> 
	</div>
	<div class="btn">
			<a href="" class="btn_post">Читать дальше <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
	</div>
	<div class="infoPanel">
		<ul>
			<li>
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
				<span id="namber">+61</span>
				<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
			</li>
			<li>
				<i class="fa fa-bookmark" aria-hidden="true"></i>
				<span>175</span>
			</li>
			<li>
					<i class="fa fa-eye" aria-hidden="true"></i>
					<span>45,9k</span>
			</li>
			<li>
				<a href="#"> 
						<i class="fa fa-comment" aria-hidden="true"></i>
						<span class="comment">231</span>
				</a>
			</li>
		</ul>
	</div>
		<ul class="arrows">
			<li><a href=""><i class="fa fa-arrow-left" aria-hidden="true"></i>сюда</a></li>
			<li><a href="">туда<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
		</ul>
		<ul class="toggle_menu">
			<li class="menu_item "><a class="activ" href="https://habr.com/ru/top/">1</a></li>
			<li class="menu_item"><a href="https://habr.com/ru/top/weekly/">2</a></li>
			<li class="menu_item"><a href="https://habr.com/ru/top/monthly/">3</a></li>
		</ul>
		</div>



<!-- LEFT PART -->

		<div class="left_part">
			<a id="advertising" href="https://tmtm.ru/services/advertising/">Реклама</a>
			<div class="sidebare">
			<h1 class="left_heading" >Потоки</h1>
			<ul class="list_block">
				<li><a href="https://habr.com/ru/flows/develop/">Разработка</a><span class="list_block_color">+36</span></li>
				<li><a href="https://habr.com/ru/flows/admin/">Администрирование</a><span class="list_block_color">+11</span></li>
				<li><a href="https://habr.com/ru/flows/design/">Дизайн</a> <span class="list_block_color">+4</span ></li>
				<li><a href="https://habr.com/ru/flows/management/">Управление</a> <span class="list_block_color">+19</span></li>
				<li><a href="https://habr.com/ru/flows/marketing/">Маркетинг</a> <span class="list_block_color">+6</span></li>
				<li><a href="https://habr.com/ru/flows/geektimes/">Гиктаймс</a> <span class="list_block_color">+2</span></li>
				<li><a href="https://habr.com/ru/flows/misc/">Разное</a> <span class="list_block_color">+3</span></li>
			</ul>
		</div>
		<div class="sidebare">
				<h1 class="left_heading" >Лучшие компании</h1>
				<ul class="list_block_2">
					<li><a href="https://habr.com/ru/company/mailru/"><img src="img/Company/1.png" alt="Mail.ru Gruop"> Mail.ru Gruop</a><span class="list_block_color_pink">1625,00</span></li>
					<li><a href="https://habr.com/ru/company/ruvds/"><img src="img/Company/2.png" alt="RUVDS.com"> RUVDS.com</a><span class="list_block_color_pink">985,00</span></li>
					<li><a href="https://habr.com/ru/company/jugru/"><img src="img/Company/3.png" alt="JUG.ru"> JUG.ru</a> <span class="list_block_color_pink">965,00</span ></li>
					<li><a href="https://habr.com/ru/company/tm/"><img src="img/Company/4.png" alt="TechMedia"> TechMedia</a> <span class="list_block_color_pink">+787,00</span></li>
					<li><a href="https://habr.com/ru/company/oleg-bunin/"><img src="img/Company/5.jpg" alt="Конфиренция Олега Бунина"> Конфиренция Онтико</a> <span class="list_block_color_pink">721,00</span></li>
					<li><a href="https://habr.com/ru/company/tuturu/"><img src="img/Company/6.jpg" alt="Туту.ру"> Туту.ру</a> <span class="list_block_color_pink">669,00</span></li>
					<li><a href="https://habr.com/ru/company/yandex/"><img src="img/Company/7.png" alt="Яндекс"> Яндекс</a> <span class="list_block_color_pink">604,00</span></li>
					<li><a href="https://habr.com/ru/company/lamptest/"><img src="img/Company/8.jpg" alt="LampTest"> LampTest</a> <span class="list_block_color_pink">596,00</span></li>
					<li><a href="https://habr.com/ru/company/pvs-studio/"><img src="img/Company/9.png" alt="PVS-Studio"> PVS-Studio</a> <span class="list_block_color_pink">594,00</span></li>
					<li><a href="https://habr.com/ru/company/kaspersky/"><img src="img/Company/10.png" alt="Лабаратория Касперского"> Лабаратория Касперского</a> <span class="list_block_color_pink">468,00</span></li>
				</ul>
				<a class="all_company" href="">Все компании</a>
				<div>
			</div>
			</div>
			
			<div class="sidebare sidebare_fixed">
					<h1 class="left_heading" >Читают сейчас</h1>
					<ul class="list_block_3">
						<li><a href="https://habr.com/ru/post/442484/">Чем светит Dragon Crew Роскосмосу</a> <br>
							<div class="reading_posts">
						<i class="fa fa-eye" aria-hidden="true"></i>
						<span class="eyes">45,9k</span>
						<a href="https://habr.com/ru/post/442484/"> <i class="fa fa-comment" aria-hidden="true"></i></a>
						<span class="comment">231</span></div>
					</li>
					
						<li><a href="https://habr.com/ru/post/442444/">Мифы современной популярной физики</a> <br>
							<div class="reading_posts">
									<i class="fa fa-eye" aria-hidden="true"></i>
									<span class="eyes">48,4k</span>
									<a href="https://habr.com/ru/post/442444/"> <i class="fa fa-comment" aria-hidden="true"></i></a>
									<span class="comment">97</span></div>
								</li>
						<li><a href="https://habr.com/ru/post/442502/">Трансформируем рабочее место в лежачее за 200$</a><br>
							<div class="reading_posts">
									<i class="fa fa-eye" aria-hidden="true"></i>
									<span class="eyes">13,7k</span>
									<a href="https://habr.com/ru/post/442502/"> <i class="fa fa-comment" aria-hidden="true"></i></a>
									<span class="comment">55</span></div>
								</li>
						<li><a href="https://habr.com/ru/post/442492/">Каждый может с легкостью выучить английский язык</a><br>
							<div class="reading_posts">
									<i class="fa fa-eye" aria-hidden="true"></i>
									<span class="eyes">12,9k</span>
									<a href="https://habr.com/ru/post/442492/"> <i class="fa fa-comment" aria-hidden="true"></i></a>
									<span class="comment">19</span></div>
								</li>
						<li><a href="https://habr.com/ru/company/jetinfosystems/blog/442530/">Wireshark 3.0.0: обзор нововведений</a><br>
							<div class="reading_posts">
									<i class="fa fa-eye" aria-hidden="true"></i>
									<span class="eyes">2,8k</span>
									<a href="https://habr.com/ru/company/jetinfosystems/blog/442530/#comments"> <i class="fa fa-comment" aria-hidden="true"></i></a>
									<span class="comment">3</span></div>
								</li>
						<li><a href="https://habr.com/ru/post/442442/">Senior Engineer в поисках работы. О задачах на технических 
							собеседованиях и теоретических вопросах</a><br>
							<div class="reading_posts">
									<i class="fa fa-eye" aria-hidden="true"></i>
									<span class="eyes">22,5k</span>
								 	<a href="https://habr.com/ru/post/442442/"> <i class="fa fa-comment" aria-hidden="true"></i></a>
									<span class="comment">29</span></div>
								</li>
					</ul>
				</div>
		</div>	
</section>
	
</body>
</html>
