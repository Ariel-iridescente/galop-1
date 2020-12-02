<form action="" method="POST">
	<input type="text" name="nombre" placeholder="nombre">
	<input type="text" name="apellido" placeholder="apellido">
	<input type="mail" name="mail" placeholder="mail">
	<input type="password" name="password" placeholder="password">
	<input type="password" name="password_confirm" placeholder="password_confirm">
	<?php if (isset($validation)): ?>
	<div class="errores_form">
		<?= $validation->listErrors(); ?>
	</div>
	<?php endif ?>
	<input type="submit" value="registrarme">
</form>