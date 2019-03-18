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
		.form-item {
			width: 100%;
			margin: 15px 0 30px 0;
		}	

		.btn_return{
			text-decoration: none;
			padding-left: 35px;
			color: #4697ca;
		}
		
	</style>

</head>
<body>
	<div class="container">
	
		<div class="main_form">
			<form method="post" action="index.php?action=add" class="add_delete">
				<label>
					Заголовок статьи
					<br>
					<input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
				</label>
				
				<label>
				<br>
					Дата
					<br>
					<input type="date" name="date" value="<?=$article['date']?>" class="form-item" autofocus required>
				</label>
				<br>
				<label>
					Содержимое
					<br>
					<textarea class="form-item" rows="7" name="content" required><?=$article['content']?></textarea>
				</label>
				<br>
				<input type="submit" value="Сохранить">
				<a href="/../blog/admin" class="btn_return">Назад</a>
			</form>
		</div>
		

</body>
</html>
