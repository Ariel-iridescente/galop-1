<div class="bloque-login">
	<?php if (session()->get('success')): ?>
	<div class="success">
		<?= session()->get('success') ?>
	</div>
	<?php endif ?>
	
	<form class="form-login max-w" action="" method="POST">
		<span><?= lang('App.login.span_correo') ?></span>
		<input class="mail" type="text" name="mail">
		<span><?= lang('App.login.span_contraseña') ?></span>
		<input class="password" type="password" name="password">
		<?php if (isset($validation)): ?>
		<div class="errores_form">
			<?= $validation->listErrors(); ?>
		</div>
		<?php endif ?>
		<div class="button">
			<input class="login" type="submit" value=<?= lang('App.login.enter') ?>>
		</div>
	</form>


</div>