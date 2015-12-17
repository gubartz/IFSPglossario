<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $professor->id_professor],
                ['confirm' => __('Are you sure you want to delete # {0}?', $professor->id_professor)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Professor'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="professor form large-10 medium-9 columns">
    <?= $this->Form->create($professor) ?>
    <fieldset>
        <legend><?= __('Edit Professor') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('prontuario');
            echo $this->Form->input('email');
            echo $this->Form->input('id_usuario', ['options' => $usuarioList]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
