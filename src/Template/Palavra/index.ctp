<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Palavra'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="palavra index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('texto', __('Palavra')) ?></th>
            <th><?= $this->Paginator->sort('Idioma.descricao', __('Idioma')) ?></th>
            <th><?= $this->Paginator->sort('Aluno.nome', __('Nome')) ?></th>
            <th><?= $this->Paginator->sort('Disciplina.sigla', __('Disciplina')) ?></th>
            <th><?= $this->Paginator->sort('Turma.semestre', __('Turma')) ?></th>
            <th><?= $this->Paginator->sort('data_cadastro') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($palavra as $palavra): ?>
        <tr>
            <td><?= h($palavra->texto) ?></td>
            <td><?= $palavra->idioma->descricao ?></td>
            <td><?= $palavra->aluno_turma->aluno->nome ?></td>
            <td><?= $palavra->aluno_turma->turma->disciplina->sigla ?></td>
            <td><?= $palavra->aluno_turma->turma->semestre ?></td>
            <td><?= h($palavra->data_cadastro) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $palavra->id_palavra]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $palavra->id_palavra]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $palavra->id_palavra], ['confirm' => __('Are you sure you want to delete # {0}?', $palavra->id_palavra)]) ?>
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
