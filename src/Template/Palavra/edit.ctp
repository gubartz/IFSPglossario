<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $palavra->id_palavra],
                ['confirm' => __('Are you sure you want to delete # {0}?', $palavra->id_palavra)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Palavra'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="palavra form large-10 medium-9 columns">
    <?= $this->Form->create($palavra) ?>
    <fieldset>
        <legend><?= __('Edit Palavra') ?></legend>
        <?php
            echo $this->Form->input('texto');
            echo $this->Form->input('id_idioma');
            echo $this->Form->input('id_aluno');
            echo $this->Form->input('id_turma');
            echo $this->Form->input('data_cadastro');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
