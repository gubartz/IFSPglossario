<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aluno->id_aluno],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id_aluno)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Aluno'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Turma'), ['controller' => 'Turma', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Turma'), ['controller' => 'Turma', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="aluno form large-10 medium-9 columns">
    <?= $this->Form->create($aluno) ?>
    <fieldset>
        <legend><?= __('Edit Aluno') ?></legend>
        <?php
            echo $this->Form->input('prontuario');
            echo $this->Form->input('nome');
            echo $this->Form->input('email');
            echo $this->Form->input('turma._ids', ['options' => $turma]);
            echo $this->Form->input('id_usuario', ['options' => $id_usuario]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
