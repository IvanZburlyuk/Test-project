<?php
	function articles_all($link){
		// Request
		$query = "SELECT * FROM articles ORDER by id DESC";
		$result = mysqli_query($link, $query);

		if(!$result)
			die(mysqli_error($link));

		// Getting from DB
		$n = mysqli_num_rows($result);
		$articles = array();

		for($i = 0; $i < $n; $i++){
			$row = mysqli_fetch_assoc($result);
			$articles[] = $row;
		}
		return $articles;
	}
	function articles_get($link, $id_article){
		// Request
		$query = sprintf("SELECT * FROM articles WHERE id=%d",(int)$id_article);
		$result = mysqli_query($link, $query);

		if(!$result)
			die(mysqli_error($link));
		$article = mysqli_fetch_assoc($result);

		return $article;
	}

	function articles_new($link, $title, $date, $content){
		//Preparing
		$title = trim($title);
		$content = trim($content);

		//Checking
		if($title == '')
			return false;

		//Request
		$t = "INSERT INTO articles (id, title, date, content) VALUES ('', '%s', '%s', '%s')";

		$query = sprintf($t,
						mysqli_real_escape_string($link, $title),
						mysqli_real_escape_string($link, $date),
						mysqli_real_escape_string($link, $content));

			$result = mysqli_query($link, $query);

			if(!$result)
				die(mysqli_error($link));

			return true;

	}

	function articles_edit($link, $id, $title, $date, $content){
		//Preparation
		$title = trim($title);
		$content= trim($content);
		$date = trim($date);
		$id = (int)$id;

		//Checking
		if($title == "")
			return false;

		//Request
		$sql = "UPDATE articles SET title='%s', content='%s', date = '%s' WHERE id = '%d'";

		$query = sprintf($sql, mysqli_real_escape_string($link, $title),
													 mysqli_real_escape_string($link, $content),
													 mysqli_real_escape_string($link, $date),
													 $id);

		$result = mysqli_query($link, $query);

		if(!$result)
				die (mysqli_error($link));

		return mysqli_affected_rows($link);
	}

	function articles_delete($link, $id){
		$id = (int)$id;
		// Checking
		if($id == 0)
			 return false;

		//Request
		$query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
		$result = mysqli_query($link, $query);

		if(!$result)
			die(mysqli_error($link));

		return mysqli_affected_rows($link);
	}

  function articles_intro($text, $len = 500){
			return mb_substr($text, 0, $len)."...";
	}

	function article_headline($text, $len = 30){
		return mb_substr($text, 0, $len)."...";
	}

?>
