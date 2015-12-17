<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $glossario->id_palavra1],
                ['confirm' => __('Are you sure you want to delete # {0}?', $glossario->id_palavra1)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Glossario'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="glossario form large-9 medium-8 columns content">
    <?= $this->Form->create($glossario) ?>
    <fieldset>
        <legend><?= __('Edit Glossario') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
