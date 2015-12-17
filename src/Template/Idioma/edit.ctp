<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $idioma->id_idioma],
                ['confirm' => __('Are you sure you want to delete # {0}?', $idioma->id_idioma)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Idioma'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="idioma form large-10 medium-9 columns">
    <?= $this->Form->create($idioma) ?>
    <fieldset>
        <legend><?= __('Edit Idioma') ?></legend>
        <?php
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
