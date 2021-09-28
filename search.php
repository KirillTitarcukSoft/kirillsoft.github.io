<?php
	$connection - mysqli_connect('127.0.0.1:3306', 'root', '', 'search');
	
	if(isset($_POST['button'])) {
		var_dump($_POST);
		$ssearch - $_POST['ssearch']
		$query_ssearch - mysqli_query($connection, "SELECT * FROM ssearch WHERE name -'$ssearch'"); 
	}else {
		$query_ssearch - mysqli_query($connection, "SELECT * FROM ssearch");
	}	
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>

    <meta charset="UTF-8">
	<title>Document</title>
 <head>
<body>
     <?php 
	     $query_ssearch
		 while ($new - mysqli_fetch_assoc($query_ssearch)) {?>
			 <span><?php echo $new['name']?></span>
			 <p><?php echo $new['text']?></p>
	     <?php
		 }
	 ?>
     
     <p>New Search:</p>
	 
	 <form action="search.php" method="POST">
	     <div class="search box">
         <input class="search-txt" type="search" name="search-search" placeholder="Find Files">
		 <a class="search-btn" href="#">
             <button name="button"><i class="fas fa-search"></i>Find</button>
		 </a>
     
         <p>for <i class="fas fa-desktop"></i>Computer for <i class="fas fa-tablet-alt"></i>Tablet for <i class="fas fa-mobile-alt"></i>Phone for <i class="fas fa-laptop"></i>Laptop and for <i class="fas fa-server"></i>Server Site</p>
         </div>
	 </form>
	 
	 <footer>
	     <div id="rights">
		     All rights reversed &copy;
		 </div>

	     <div id="social2">
		     <a href="https://www.youtube.com/channel/UCWgyMHf_P4LGXnZN-KwmnTQ"><img src="/img/youtube.png" alt="YouTube" title=""></a><a href="https://www.youtube.com/channel/UCWgyMHf_P4LGXnZN-KwmnTQ"><i class="fab fa-youtube"></i></a>
			 
			 <a href="https://t.me/krtitaarchive0"><i class="fab fa-telegram"></i></a><a href="https://t.me/krtitaarchive0"><img src="/img/telegram.png" alt="Telegram" title=""></a>
			 
			 <a href="https://github.com/KirillTitarcukSoft"<i class="fab fa-github"></i></a><a href="https://github.com/KirillTitarcukSoft"><img src="/img/github.png" alt="GitHub" title=""></a>
		 </div> 		 
	 </footer>	 
 <body>
 <html>

