<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Professor'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="professor index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id_professor') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('prontuario') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('id_usuario') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($professor as $professor): ?>
        <tr>
            <td><?= $this->Number->format($professor->id_professor) ?></td>
            <td><?= h($professor->nome) ?></td>
            <td><?= h($professor->prontuario) ?></td>
            <td><?= h($professor->email) ?></td>
            <td><?= $this->Number->format($professor->id_usuario) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $professor->id_professor]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $professor->id_professor]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $professor->id_professor], ['confirm' => __('Are you sure you want to delete # {0}?', $professor->id_professor)]) ?>
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
