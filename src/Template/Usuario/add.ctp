<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Usuario'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="usuario form large-10 medium-9 columns">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Add Usuario') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('senha');
            echo $this->Form->input('data_cadastro');
            echo $this->Form->input('data_modificado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
