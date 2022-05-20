<!-- https://book.cakephp.org/4/en/quickstart.html -->

<!-- File: templates/Topics/index.php -->

<h1>Tópicos</h1>
<table>
    <tr>
        <th>Título</th>
        <th>Data de criação</th>
    </tr>

    <?php foreach ($topics as $topic): ?>
    <tr>
        <td>
            <?= $this->Html->link($topic->title, ['action' => 'view', $topic->slug]) ?>
        </td>
        <td>
            <?= $topic->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
