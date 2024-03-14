<?php
	session_start();
	include "connect.php";
	
	$role = (isset($_SESSION["role"])) ? $_SESSION["role"] : "guest";
	$name = (isset($_GET["name"])) ? $_GET["name"] : 0;

	$sql = "SELECT * FROM `products` WHERE `hotel` !='' AND `name`= '{$name}'";
	if(!$result = $connect->query($sql))
		return die ("Ошибка получения данных: ". $connect->error);

		$data = "";
		while($row = $result->fetch_assoc())
			$data .= sprintf('
		
				<div class="coli">
					
					<div class="rowi">
				
						<b>%s</b>
						<hr>
						<h3>$ %s k.</h3>
						<input type="hidden" value="%s" name="name">
						%s
						%s
					</div>
					
					
				</div>
			',    $row["hotel"], $row["price"], $row["name"], 
			($role == "admin") ? '
		
				<p><a href="update.php?id='.$row["product_id"].'" class="text-small">Редактировать</a></p>
				<p><a onclick="return confirm(\'Вы действительно хотите удалить этот товар?\')" href="asset/controllers/delete_product.php?id='.$row["product_id"].'" class="text-small">Удалить</a></p>
			
		' : '',
		($role == "guest") ? '
		<a href="order.php?name='. $row["name"] .'" style="-webkit-text-stroke: 0.7px #27386D; 
		color: #fff;font-family: Montserrat Alternates;	">Забронировать</a>
		
		' : '');

	if($data == "")
		$data = '<h3 class="text-center">Товары отсутствуют</h3>';

	include "header.php";
?>

	
		<div class="content">
	
		<div class="rowi" id="products">
				<?= $data ?>
				
			</div>

		</div>
	
	
	<?php
	include "footer.php";
?>
		