<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Aluno Turma'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="alunoTurma form large-10 medium-9 columns">
    <?= $this->Form->create($alunoTurma) ?>
    <fieldset>
        <legend><?= __('Add Aluno Turma') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
