<h1>Lista de Usuarios</h1>

<ul>
<?php foreach ($usuarios as $usuario): ?>
	<li><?= $usuario['nome'] ?></li>
<?php endforeach; ?>


</ul>