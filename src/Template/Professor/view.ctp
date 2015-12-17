<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Professor'), ['action' => 'edit', $professor->id_professor]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Professor'), ['action' => 'delete', $professor->id_professor], ['confirm' => __('Are you sure you want to delete # {0}?', $professor->id_professor)]) ?> </li>
        <li><?= $this->Html->link(__('List Professor'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Professor'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="professor view large-10 medium-9 columns">
    <h2><?= h($professor->id_professor) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($professor->nome) ?></p>
            <h6 class="subheader"><?= __('Prontuario') ?></h6>
            <p><?= h($professor->prontuario) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($professor->email) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id Professor') ?></h6>
            <p><?= $this->Number->format($professor->id_professor) ?></p>
            <h6 class="subheader"><?= __('Id Usuario') ?></h6>
            <p><?= $this->Number->format($professor->id_usuario) ?></p>
        </div>
    </div>
</div>
