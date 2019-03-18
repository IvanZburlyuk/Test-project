<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Habr</title>
	<link rel="stylesheet" href="../style.css">
		<!-- fontawesome -->
	<link rel="stylesheet" href="../font-awesome.min.css">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,500" rel="stylesheet">

	<style>
		.container {
			max-width: 1200px;
			margin: 0 auto;
			text-align: center;
		}
		table {
			width: 100%;
			padding: 30px;
		}

		table th{
			padding-bottom: 30px;
		}
		.articles_admin ul {
			list-style: none;
			display: flex;
			justify-content: center;
			
		}
		.articles_admin li {
			margin-top: 30px;
			
			
		}
		.articles_admin a {
			margin-top: 50px;
			margin-right: 50px;
			text-decoration: none;
			color: #4697ca;
			font-size: 16px;	
		}

		.edit, .delete{
			text-decoration: none;
			color: tomato;

		}
		

	</style>
	
</head>
<body>
	<div class="container">
		<h3>Панель Администратора</h3>
		<div class="articles_admin">
			<ul>
			<li>	<a href="index.php?action=add" class="add_article">Добавить статью</a></li>	
			<li>	<a href="../../blog" class="add_article">На главную</a></li>
				</ul>
	</div>
			<table>
				<tr>
					<th>Дата</th>
					<th>Заголовок</th>
					<th></th>
					<th></th>
				</tr>
			<?php foreach($articles as $a): ?>
				<tr>
					<td><?=$a['date']?></td>
					<td><?=article_headline($a['title'])?></td>
					<td>
						<a class="edit" href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
					</td>
					<td>
						<a class="delete" href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
					</td>
				</tr>
			<?php endforeach ?>
			</table>
		</div>
	
</body>
</html>
