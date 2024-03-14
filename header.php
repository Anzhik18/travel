<!--подключение-->
<?php
	$menu = '
	<div class="menu">
	<div class="logo"><a href="index.php"><img src="asset/img/logo.svg" alt="img" style=" margin-top:50px;"></a>
			<form class="search" method="get" action="search.php" style="margin-left:280px; margin-top:-35px;">
 <input type="text" name="q" placeholder="Поиск" required  style="width: 350px; height:30px;">
</form>
</div>
	<div class="links">
	<a href="index.php">Главная</a>
		<a href="catalog.php">Туры</a>
		<a href="#blog">Блог</a>
			%s
		</div>
		</div>
	';
	$m = '';
	if(isset($_SESSION["role"])) {
		$m .= ($_SESSION["role"] == "admin") ? '<li><a href="admin.php">Заявки</a></li>' : '';
		$m .= '<li><a href="asset/controllers/logout.php">Выход</a></li>';
	} 
	$menu = sprintf($menu, $m);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="египед, турция, куба, дубай, travel, забранировать">
	<meta name="description" content="Holiday - туристическое агенство, бронирование туров, дешёвые туры">
	<title>Holiday</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="asset/css/style2.css">
	<link rel="stylesheet" href="asset/css/style.css">
    <script src="slider.js"></script>
	<script src="asset/js/script.js"></script>

	<script>
		let role = "<?= (isset($_SESSION["role"])) ? $_SESSION["role"] : "guest" ?>";
	</script>
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Вверх">Вверх</button> 
	<header>
	<div class="menu">
            <div class="logo"><img src="asset/img/logo.svg" alt="1"></div>
          
			<?= $menu ?>
                
               
            </div>
            
            
        </div>
	</header>

