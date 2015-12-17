<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Idioma'), ['action' => 'edit', $idioma->id_idioma]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Idioma'), ['action' => 'delete', $idioma->id_idioma], ['confirm' => __('Are you sure you want to delete # {0}?', $idioma->id_idioma)]) ?> </li>
        <li><?= $this->Html->link(__('List Idioma'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Idioma'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="idioma view large-10 medium-9 columns">
    <h2><?= h($idioma->id_idioma) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Descricao') ?></h6>
            <p><?= h($idioma->descricao) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id Idioma') ?></h6>
            <p><?= $this->Number->format($idioma->id_idioma) ?></p>
        </div>
    </div>
</div>
