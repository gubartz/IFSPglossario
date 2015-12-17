<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Turma'), ['action' => 'edit', $turma->id_turma]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Turma'), ['action' => 'delete', $turma->id_turma], ['confirm' => __('Are you sure you want to delete # {0}?', $turma->id_turma)]) ?> </li>
        <li><?= $this->Html->link(__('List Turma'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Turma'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aluno'), ['controller' => 'Aluno', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aluno'), ['controller' => 'Aluno', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="turma view large-10 medium-9 columns">
    <h2><?= h($turma->id_turma) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Semestre') ?></h6>
            <p><?= h($turma->semestre) ?></p>
            <h6 class="subheader"><?= __('Ano') ?></h6>
            <p><?= h($turma->ano) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id Turma') ?></h6>
            <p><?= $this->Number->format($turma->id_turma) ?></p>
            <h6 class="subheader"><?= __('Id Disciplina') ?></h6>
            <p><?= $this->Number->format($turma->id_disciplina) ?></p>
            <h6 class="subheader"><?= __('Id Professor') ?></h6>
            <p><?= $this->Number->format($turma->id_professor) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Aluno') ?></h4>
    <?php if (!empty($turma->aluno)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id Aluno') ?></th>
            <th><?= __('Prontuario') ?></th>
            <th><?= __('Nome') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($turma->aluno as $aluno): ?>
        <tr>
            <td><?= h($aluno->id_aluno) ?></td>
            <td><?= h($aluno->prontuario) ?></td>
            <td><?= h($aluno->nome) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Aluno', 'action' => 'view', $aluno->id_aluno]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Aluno', 'action' => 'edit', $aluno->id_aluno]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Aluno', 'action' => 'delete', $aluno->id_aluno], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id_aluno)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
