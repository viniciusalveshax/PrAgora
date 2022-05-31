<h1>Mostrando tópico:</h1>

<h2><?= $topic->title ?><h2>
<p><?= $topic->body ?></p>
<p>Data de criação: <?= $topic->created ?></p>

<p>Publicado: 
<?php
	if ($topic->published)
		echo 'Sim';
	else
		echo 'Não';
 ?></p>
<p>


<p>
	Criador: <?= $topic->user_id ?>
</p>
