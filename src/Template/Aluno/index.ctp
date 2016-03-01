<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Aluno'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Palavra'), ['controller' => 'Palavra', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Palavra'), ['controller' => 'Palavra', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Turma'), ['controller' => 'Turma', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Turma'), ['controller' => 'Turma', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aluno index large-9 medium-8 columns content">
    <h3><?= __('Aluno') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_aluno') ?></th>
                <th><?= $this->Paginator->sort('prontuario') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('id_usuario') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aluno as $aluno): ?>
            <tr>
                <td><?= $this->Number->format($aluno->id_aluno) ?></td>
                <td><?= h($aluno->prontuario) ?></td>
                <td><?= h($aluno->nome) ?></td>
                <td><?= h($aluno->email) ?></td>
                <td><?= $this->Number->format($aluno->id_usuario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aluno->id_aluno]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aluno->id_aluno]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aluno->id_aluno], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id_aluno)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
