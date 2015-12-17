<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Disciplina'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="disciplina index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id_disciplina') ?></th>
            <th><?= $this->Paginator->sort('sigla') ?></th>
            <th><?= $this->Paginator->sort('descricao') ?></th>
            <th><?= $this->Paginator->sort('id_curso') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($disciplina as $disciplina): ?>
        <tr>
            <td><?= $this->Number->format($disciplina->id_disciplina) ?></td>
            <td><?= h($disciplina->sigla) ?></td>
            <td><?= h($disciplina->descricao) ?></td>
            <td><?= $this->Number->format($disciplina->id_curso) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $disciplina->id_disciplina]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $disciplina->id_disciplina]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $disciplina->id_disciplina], ['confirm' => __('Are you sure you want to delete # {0}?', $disciplina->id_disciplina)]) ?>
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
