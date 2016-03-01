<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Aluno'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Palavra'), ['controller' => 'Palavra', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Palavra'), ['controller' => 'Palavra', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Turma'), ['controller' => 'Turma', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Turma'), ['controller' => 'Turma', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aluno form large-9 medium-8 columns content">
    <?= $this->Form->create($aluno) ?>
    <fieldset>
        <legend><?= __('Add Aluno') ?></legend>
        <?php
            echo $this->Form->input('prontuario');
            echo $this->Form->input('nome');
            echo $this->Form->input('email');
            echo $this->Form->input('id_usuario');
            echo $this->Form->input('turma._ids', ['options' => $turma]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
