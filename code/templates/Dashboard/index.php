<!-- Inspirado por https://book.cakephp.org/4/en/quickstart.html -->

<!-- File: templates/Dashboard/index.php -->

<h1>Dashboard</h1>
<h3>Tópicos mais votados:</h3>
<ul>
    <?php foreach ($topics as $topic): ?>
    <li>
	<?= $topic->title ?>
    </li>
    <?php endforeach; ?>
</ul>


<h3>Votações abertas:</h3>
<ul>
    <?php foreach ($topics as $topic): ?>
    <li>
	<?= $topic->title ?>
    </li>
    <?php endforeach; ?>
</ul>
