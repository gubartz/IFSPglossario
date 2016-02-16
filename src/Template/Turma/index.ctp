<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Turma'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aluno'), ['controller' => 'Aluno', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aluno'), ['controller' => 'Aluno', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="turma index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id_turma') ?></th>
            <th><?= $this->Paginator->sort('Disciplina.sigla', 'Sigla') ?></th>
            <th><?= $this->Paginator->sort('Professor.nome', 'Professor') ?></th>
            <th><?= $this->Paginator->sort('semestre') ?></th>
            <th><?= $this->Paginator->sort('ano') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($turma as $turma): ?>
        <tr>
            <td><?= $this->Number->format($turma->id_turma) ?></td>
            <td><?= $turma->disciplina->sigla ?></td>
            <td><?= $turma->professor->nome ?></td>
            <td><?= h($turma->semestre) ?></td>
            <td><?= h($turma->ano) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $turma->id_turma]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $turma->id_turma]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $turma->id_turma], ['confirm' => __('Are you sure you want to delete # {0}?', $turma->id_turma)]) ?>
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
