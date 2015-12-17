<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Aluno'), ['action' => 'edit', $aluno->id_aluno]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aluno'), ['action' => 'delete', $aluno->id_aluno], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id_aluno)]) ?> </li>
        <li><?= $this->Html->link(__('List Aluno'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aluno'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Turma'), ['controller' => 'Turma', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Turma'), ['controller' => 'Turma', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="aluno view large-10 medium-9 columns">
    <h2><?= h($aluno->id_aluno) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Prontuario') ?></h6>
            <p><?= h($aluno->prontuario) ?></p>
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($aluno->nome) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id Aluno') ?></h6>
            <p><?= $this->Number->format($aluno->id_aluno) ?></p>
            <h6 class="subheader"><?= __('E-mail') ?></h6>
            <p><?= h($aluno->email) ?></p>            
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Turma') ?></h4>
    <?php if (!empty($aluno->turma)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id Turma') ?></th>
            <th><?= __('Id Disciplina') ?></th>
            <th><?= __('Id Professor') ?></th>
            <th><?= __('Semestre') ?></th>
            <th><?= __('Ano') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($aluno->turma as $turma): ?>
        <tr>
            <td><?= h($turma->id_turma) ?></td>
            <td><?= h($turma->id_disciplina) ?></td>
            <td><?= h($turma->id_professor) ?></td>
            <td><?= h($turma->semestre) ?></td>
            <td><?= h($turma->ano) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Turma', 'action' => 'view', $turma->id_turma]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Turma', 'action' => 'edit', $turma->id_turma]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Turma', 'action' => 'delete', $turma->id_turma], ['confirm' => __('Are you sure you want to delete # {0}?', $turma->id_turma)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
