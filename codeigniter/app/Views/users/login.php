<?php if (session()->get('success')): ?>
<div class="success">
	<?= session()->get('success') ?>
</div>
<?php endif ?>
<form action="" method="POST">
	<input type="text" name="mail">
	<input type="password" name="password">
	<?php if (isset($validation)): ?>
	<div class="errores_form">
		<?= $validation->listErrors(); ?>
	</div>
	<?php endif ?>
	<input type="submit" value="Login">
</form>