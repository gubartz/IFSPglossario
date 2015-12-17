<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Aluno Turma'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="alunoTurma index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id_aluno') ?></th>
            <th><?= $this->Paginator->sort('id_turma') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($alunoTurma as $alunoTurma): ?>
        <tr>
            <td><?= $this->Number->format($alunoTurma->id_aluno) ?></td>
            <td><?= $this->Number->format($alunoTurma->id_turma) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $alunoTurma->id_aluno]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alunoTurma->id_aluno]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alunoTurma->id_aluno], ['confirm' => __('Are you sure you want to delete # {0}?', $alunoTurma->id_aluno)]) ?>
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
