<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $turma->id_turma],
                ['confirm' => __('Are you sure you want to delete # {0}?', $turma->id_turma)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Turma'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Aluno'), ['controller' => 'Aluno', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aluno'), ['controller' => 'Aluno', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="turma form large-10 medium-9 columns">
    <?= $this->Form->create($turma) ?>
    <fieldset>
        <legend><?= __('Edit Turma') ?></legend>
        <?php
            echo $this->Form->input('id_disciplina');
            echo $this->Form->input('id_professor');
            echo $this->Form->input('semestre');
            echo $this->Form->input('ano');
            echo $this->Form->input('aluno._ids', ['options' => $aluno]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
