<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id_usuario]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id_usuario], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id_usuario)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuario'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="usuario view large-10 medium-9 columns">
    <h2><?= h($usuario->id_usuario) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($usuario->email) ?></p>
            <h6 class="subheader"><?= __('Senha') ?></h6>
            <p><?= h($usuario->senha) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id Usuario') ?></h6>
            <p><?= $this->Number->format($usuario->id_usuario) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data Cadastro') ?></h6>
            <p><?= h($usuario->data_cadastro) ?></p>
            <h6 class="subheader"><?= __('Data Modificado') ?></h6>
            <p><?= h($usuario->data_modificado) ?></p>
        </div>
    </div>
</div>
