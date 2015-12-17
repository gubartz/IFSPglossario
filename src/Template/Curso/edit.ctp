<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $curso->id_curso],
                ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id_curso)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Curso'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="curso form large-10 medium-9 columns">
    <?= $this->Form->create($curso) ?>
    <fieldset>
        <legend><?= __('Edit Curso') ?></legend>
        <?php
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
