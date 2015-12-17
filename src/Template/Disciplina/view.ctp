<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Disciplina'), ['action' => 'edit', $disciplina->id_disciplina]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Disciplina'), ['action' => 'delete', $disciplina->id_disciplina], ['confirm' => __('Are you sure you want to delete # {0}?', $disciplina->id_disciplina)]) ?> </li>
        <li><?= $this->Html->link(__('List Disciplina'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disciplina'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="disciplina view large-10 medium-9 columns">
    <h2><?= h($disciplina->id_disciplina) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Sigla') ?></h6>
            <p><?= h($disciplina->sigla) ?></p>
            <h6 class="subheader"><?= __('Descricao') ?></h6>
            <p><?= h($disciplina->descricao) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id Disciplina') ?></h6>
            <p><?= $this->Number->format($disciplina->id_disciplina) ?></p>
            <h6 class="subheader"><?= __('Id Curso') ?></h6>
            <p><?= $this->Number->format($disciplina->id_curso) ?></p>
        </div>
    </div>
</div>
