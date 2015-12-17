<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Glossario'), ['action' => 'edit', $glossario->id_palavra1]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Glossario'), ['action' => 'delete', $glossario->id_palavra1], ['confirm' => __('Are you sure you want to delete # {0}?', $glossario->id_palavra1)]) ?> </li>
        <li><?= $this->Html->link(__('List Glossario'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Glossario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="glossario view large-9 medium-8 columns content">
    <h3><?= h($glossario->id_palavra1) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id Palavra1') ?></th>
            <td><?= $this->Number->format($glossario->id_palavra1) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Palavra2') ?></th>
            <td><?= $this->Number->format($glossario->id_palavra2) ?></td>
        </tr>
    </table>
</div>
