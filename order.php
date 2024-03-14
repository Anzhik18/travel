<!--подключение-->
<?php
	session_start();
	include "connect.php";


	include "header.php";
?>

	<main>
		
	<form class="hotel-reservation-form" method="post" action="asset/controllers/order.php">
			<h1><i class="far fa-calendar-alt"></i>Забронировать </h1>
			<div class="fields">
				<!-- Input Elements -->
	<div>
		
	</div>
				<div class="wrapper">
	<div>
		<label for="arrival">Дата отправки</label>
		<div class="field">
			<input id="arrival" type="date" name="arrival" required>
		</div>
	</div>
	<div class="gap"></div>
	<div>
		<label for="departure">Дата отлёта</label>
		<div class="field">
			<input id="departure" type="date" name="departure" required>
		</div>
	</div>

</div>

<div class="wrapper">
	
<div>
		<label for="first_name">Имя</label>
		<div class="field">
			<i class="fas fa-user"></i>
			<input id="first_name" type="text" name="first_name"  required>
		</div>
	</div>
	<div class="gap"></div>
	<div>
		<label for="last_name">Фамилия</label>
		<div class="field">
			<i class="fas fa-user"></i>
			<input id="last_name" type="text" name="last_name"  required>
		</div>
	</div>
</div>
<label for="phone">Телефон</label>
<div class="field">
	<i class="fas fa-phone"></i>
	<input id="phone" type="tel" name="phone" required>
</div>
<label for="email">Email</label>
<div class="field">
	<i class="fas fa-envelope"></i>
	<input id="email" type="email" name="email"  required>
</div>


<div class="wrapper">
	<div>
		<label for="adults">Кол-во пассажиров</label>
		<div class="field">
			<select id="adults" name="adults" required>
				<option disabled selected value="">--</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				
			</select>
		</div>
	</div>
	<div class="gap"></div>
	<div>
		<label for="children">Кол-во детей</label>
		<div class="field">
			<select id="children" name="children" required>
				<option disabled selected value="">--</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
		</div>
	</div>
</div>


<label for="room_pref">Категория номера</label>
<div class="field">
	<select id="room_pref" name="room_pref" required>
		<option disabled selected value="">--</option>
		<option value="Standard">Стандарт</option>
		<option value="Deluxe">Комфорт</option>
		<option value="Suite">Люкс</option>
	</select>
</div>

<input type="submit" value="ОПЛАТИТЬ">
			</div>
		</form>

<!--	<div class="forms">

			<div class="head" id="register">Регистрация</div>
			<form action="asset/controllers/order.php" method="POST">
				<input type="text" name="name" value='<?= $data ?>'>
				<input type="text" placeholder="Имя" name="names" pattern="[а-яА-ЯёЁ\s\-]+" required>
				<input type="text" placeholder="Фамилия" name="surname" pattern="[а-яА-ЯёЁ\s\-]+" required>
				<input type="text" placeholder="Отчество" name="patronymic" pattern="[а-яА-ЯёЁ\s\-]+" required >
				<input type="tel" placeholder="Телефон" name="phone" pattern = "7[0-9]{10}" minlength="11" maxlength="11"  required>
				<input type="email" placeholder="Email" name="email" required>
				
				<div class="part">
					<input type="checkbox" name="rules" required >
					Согласие с обработкой данных
				</div>
				<button >Отправить</button>
			</form>

		</div>
		
	</main>
-->
<!--подключение к футеру-->	

<?php
		include "footer.php";

		?>



