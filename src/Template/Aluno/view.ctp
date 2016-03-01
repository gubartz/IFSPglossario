<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aluno'), ['action' => 'edit', $aluno->id_aluno]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aluno'), ['action' => 'delete', $aluno->id_aluno], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id_aluno)]) ?> </li>
        <li><?= $this->Html->link(__('List Aluno'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aluno'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Palavra'), ['controller' => 'Palavra', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Palavra'), ['controller' => 'Palavra', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Turma'), ['controller' => 'Turma', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Turma'), ['controller' => 'Turma', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aluno view large-9 medium-8 columns content">
    <h3><?= h($aluno->id_aluno) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Prontuario') ?></th>
            <td><?= h($aluno->prontuario) ?></td>
        </tr>
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($aluno->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($aluno->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Aluno') ?></th>
            <td><?= $this->Number->format($aluno->id_aluno) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Usuario') ?></th>
            <td><?= $this->Number->format($aluno->id_usuario) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Palavra') ?></h4>
        <?php if (!empty($aluno->palavra)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id Palavra') ?></th>
                <th><?= __('Texto') ?></th>
                <th><?= __('Id Idioma') ?></th>
                <th><?= __('Id Aluno') ?></th>
                <th><?= __('Id Turma') ?></th>
                <th><?= __('Data Cadastro') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($aluno->palavra as $palavra): ?>
            <tr>
                <td><?= h($palavra->id_palavra) ?></td>
                <td><?= h($palavra->texto) ?></td>
                <td><?= h($palavra->id_idioma) ?></td>
                <td><?= h($palavra->id_aluno) ?></td>
                <td><?= h($palavra->id_turma) ?></td>
                <td><?= h($palavra->data_cadastro) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Palavra', 'action' => 'view', $palavra->id_palavra]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Palavra', 'action' => 'edit', $palavra->id_palavra]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Palavra', 'action' => 'delete', $palavra->id_palavra], ['confirm' => __('Are you sure you want to delete # {0}?', $palavra->id_palavra)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Turma') ?></h4>
        <?php if (!empty($aluno->turma)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id Turma') ?></th>
                <th><?= __('Id Disciplina') ?></th>
                <th><?= __('Id Professor') ?></th>
                <th><?= __('Semestre') ?></th>
                <th><?= __('Ano') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($aluno->turma as $turma): ?>
            <tr>
                <td><?= h($turma->id_turma) ?></td>
                <td><?= h($turma->id_disciplina) ?></td>
                <td><?= h($turma->id_professor) ?></td>
                <td><?= h($turma->semestre) ?></td>
                <td><?= h($turma->ano) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Turma', 'action' => 'view', $turma->id_turma]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Turma', 'action' => 'edit', $turma->id_turma]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Turma', 'action' => 'delete', $turma->id_turma], ['confirm' => __('Are you sure you want to delete # {0}?', $turma->id_turma)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
