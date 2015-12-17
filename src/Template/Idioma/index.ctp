<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Idioma'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="idioma index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id_idioma') ?></th>
            <th><?= $this->Paginator->sort('descricao') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($idioma as $idioma): ?>
        <tr>
            <td><?= $this->Number->format($idioma->id_idioma) ?></td>
            <td><?= h($idioma->descricao) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $idioma->id_idioma]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $idioma->id_idioma]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $idioma->id_idioma], ['confirm' => __('Are you sure you want to delete # {0}?', $idioma->id_idioma)]) ?>
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
