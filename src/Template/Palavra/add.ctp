<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Palavra'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="palavra form large-10 medium-9 columns">
    <?= $this->Form->create($palavra) ?>
    <fieldset>
        <legend><?= __('Add Palavra') ?></legend>
        <?php
            echo $this->Form->input('texto');
            echo $this->Form->input('id_idioma', ['options' => $id_idioma]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
