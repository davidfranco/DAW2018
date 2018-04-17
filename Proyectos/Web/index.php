<?php
include_once '/views/header.php';
$currentPage = 'home';
if(isset($_GET['page'])){
	$selectedPage = $_GET['page'];
	if($selectedPage == 'contact' || $selectedPage == 'popular_movies' || $selectedPage == 'movie'){
		$currentPage = $selectedPage;
	}else{
		$currentPage = 'home';
	}
}
include_once '/views/'. $currentPage . '.php';
include_once '/views/footer.php';
?>