<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Curso'), ['action' => 'edit', $curso->id_curso]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Curso'), ['action' => 'delete', $curso->id_curso], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id_curso)]) ?> </li>
        <li><?= $this->Html->link(__('List Curso'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="curso view large-10 medium-9 columns">
    <h2><?= h($curso->id_curso) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Descricao') ?></h6>
            <p><?= h($curso->descricao) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id Curso') ?></h6>
            <p><?= $this->Number->format($curso->id_curso) ?></p>
        </div>
    </div>
</div>
