<!--подключение-->
<?php
	session_start();
	include "connect.php";

	$role = (isset($_SESSION["role"])) ? $_SESSION["role"] : "guest";

	$sql = "SELECT * FROM `products` WHERE  `product_id` < 502 ORDER BY `created_at` DESC";
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
					<h4>$ %s k</h4>
					<input type="hidden" value="%s" name="name">
					
				</div>
				%s
				
			</div>
		', $row["image"], $row["name"], $row["name"], $row["price"],$row["name"], 
		($role == "admin") ? '
			<div class="row">
				<p><a href="update.php?name='.$row["name"].'" class="text-small">Редактировать</a></p>
				<p><a onclick="return confirm(\'Вы действительно хотите удалить этот товар?\')" href="asset/controllers/delete_product.php?id='.$row["name"].'" class="text-small">Удалить</a></p>
			</div>
		' : '');

	if($data == "")
		$data = '<h3 class="text-center">Товары отсутствуют</h3>';

	include "header.php";
?>
<!--общий контейнер--> 
 <!-- баннер -->

 <div class="banner">
            <div class="ban-img">
                <img src="asset/img/banner.png" alt="1">

            </div>
            <div class="ban-text">
                <h1>Начните свое
увлекательное <p>путешествие</p>
                вместе с нами.
</h1>
<span>Команда опытных профессионалов в области туризма предоставит вам лучшие рекомендации по выбору места, о котором вы мечтаете.</span>
<div class="knn">Откройте для себя сейчас</div>           
</div>
        </div>

<div class="container"><!--Общий контейнер сайта-->
    <h1>Вещи, которые вам нужно <p>сделать</p> </h1>
    <span>Мы гарантируем, что вы отправитесь в идеально спланированный, безопасный отпуск по цене, которую вы можете себе позволить.</span>
   <div class="cart_garant">
      <div class="cart_garant_item">
        <img src="asset/img/Group.png" alt="">
        <h2>Подписаться</h2>
        <p>Завершает всю работу, связанную с планированием и обработкой</p>
      </div>
      <div class="cart_garant_item">
      <img src="asset/img/Group(1).png" alt="">
      <h2>Ценность денег</h2>
        <p>После успешного доступа закажите по эксклюзивным предложениям и ценам</p>
        </div>
        <div class="cart_garant_item">
        <img src="asset/img/Group(2).png" alt="">
        <h2>Захватывающее путешествие</h2>
        <p>Начните и исследуйте широкий спектр захватывающих путешествий.</p>
        </div>
   </div>
</div>




<div class="container_2"><!--Общий контейнер сайта-->


<div class="header-img">
				<img src="asset/img/baner.png" alt="" >
			</div>
			<div class="headline">
				<h1>Горящие туры</h1>
				<br>
			</div>

			<div class="row" id="products">
				<?= $data ?>
			</div>








    <h1 id="blog">Блог</h1>
    <div class="container_1">
        <div class="carousel">
            <div class="carousel-window">
                <div class="carousel-slides">
                    <div class="carousel-item">
                        <img src="asset/img/Card-1.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="asset/img/Card-2.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="asset/img/Card-3.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="asset/img/Card-4.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="asset/img/Card-1.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="asset/img/Card-2.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="asset/img/Card-3.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="asset/img/Card-4.png" alt="">
                    </div>
					<div class="carousel-item">
                        <img src="asset/img/Card-1.png" alt="">
                    </div>
                </div>
            </div>
            <a href="#" class="carousel-prev">
                <span class="carousel-prev-icon">&lt;</span>
            </a>
            <a href="#" class="carousel-next">
                <span class="carousel-next-icon">&gt;</span>
            </a>
        </div>
    </div>

    <script src="asset/scripts/slider.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Slider(document.querySelector('.carousel'), {
            inFrame: 4, // два элемента в кадре
            offset: 1, // смещать на один элемент
        });
    });
</script>




</div>
 
    </div>
<!--подключение к футеру-->

    <footer>
        <div class="footer-logo">
        <div class="footer-logo__img">
            <img src="asset/img/logo.png" alt="">
            <p>Забронируйте свою поездку за минуту, <br> получите полную <br>
гарантию гораздо дольше.</p>
            <img src="asset/img/g.png" alt="" class="social">
        </div>
</div>
        <div class="footer-text"> <div class="footer-text__item">
         
            <a href="">Компания</a>
            <a href="">О нас</a>
            <a href="">Карьера</a>
          
        </div>
        <div class="footer-text__item">
        
            <a href="">Контакты</a>
            <a href="">Помощь</a>
            <a href="">FAQ</a>
            
        </div>
        <div class="footer-text__item">
        
            <a href="">Дополнительно</a>
            <a href="">Пресс-центр</a>
            <a href="">Блог</a>
            
        </div>
    </div>
       
    </footer>
</body>
</html>

		

	
	
