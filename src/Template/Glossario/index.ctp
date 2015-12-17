<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Glossario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="glossario index large-9 medium-8 columns content">
    <h3><?= __('Glossario') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= __('Idioma Palavra1') ?></th>
                <th><?= $this->Paginator->sort('id_palavra1') ?></th>
                <th><?= __('Idioma Palavra2') ?></th>
                <th><?= $this->Paginator->sort('id_palavra2') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($glossario as $glossario): ?>
            <tr>
                <td><?= $glossario->palavra1->idioma->descricao ?></td>
                <td><?= $glossario->palavra1->texto ?></td>
                <td><?= $glossario->palavra2->idioma->descricao ?></td>
                <td><?= $glossario->palavra2->texto ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $glossario->id_palavra1]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $glossario->id_palavra1]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $glossario->id_palavra1], ['confirm' => __('Are you sure you want to delete # {0}?', $glossario->id_palavra1)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
