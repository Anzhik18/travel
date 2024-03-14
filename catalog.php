<!--подключение-->
<?php
	session_start();
	include "connect.php";

	$role = (isset($_SESSION["role"])) ? $_SESSION["role"] : "guest";

	$sql = "SELECT * FROM `products` WHERE `hotel`='' ORDER BY `created_at` DESC";
	if(!$result = $connect->query($sql))
		return die ("Ошибка получения данных: ". $connect->error);

	$data = "";
	while($row = $result->fetch_assoc())
		$data .= sprintf('
			<div class="col">
				<img src="%s"  alt="Тур" title="Изображение тура">
				<div class="row" style=" display: flex;
				flex-direction:column;">
					<p><a href="product.php?name=%s">%s</a></p>
					<h4>$ %s k.</h4>
					<input type="hidden" value="%s" name="name">
					
				</div>
				%s
				
			</div>
		', $row["image"], $row["name"], $row["name"], $row["price"], $row["name"], 
		($role == "admin") ? '
			<div class="row">
				<p><a href="update.php?id='.$row["name"].'" class="text-small">Редактировать</a></p>
				<p><a onclick="return confirm(\'Вы действительно хотите удалить этот товар?\')" href="asset/controllers/delete_product.php?id='.$row["product_id"].'" class="text-small">Удалить</a></p>
			</div>
		' : '');

	if($data == "")
		$data = '<h3 class="text-center">Товары отсутствуют</h3>';

	include "header.php";
?>

	<main>
		<!--общий контейнер-->
		<div class="content">
			<!--
		<div class="header-img">
				<img src="asset/img/baner.png" alt="" >
			</div>-->
			<div class="headline">
				<h1>ТУРЫ</h1>
				
			</div>

			<div class="row" id="products">
				<?= $data ?>
			</div>

		</div>
		
	</main>
	
	<?php
		include "footer.php";
		?>


