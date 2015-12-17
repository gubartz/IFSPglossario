<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Disciplina'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="disciplina form large-10 medium-9 columns">
    <?= $this->Form->create($disciplina) ?>
    <fieldset>
        <legend><?= __('Add Disciplina') ?></legend>
        <?php
            echo $this->Form->input('sigla');
            echo $this->Form->input('descricao');
            echo $this->Form->input('id_curso');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
