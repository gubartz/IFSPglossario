<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Aluno Turma'), ['action' => 'edit', $alunoTurma->id_aluno]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aluno Turma'), ['action' => 'delete', $alunoTurma->id_aluno], ['confirm' => __('Are you sure you want to delete # {0}?', $alunoTurma->id_aluno)]) ?> </li>
        <li><?= $this->Html->link(__('List Aluno Turma'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aluno Turma'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="alunoTurma view large-10 medium-9 columns">
    <h2><?= h($alunoTurma->id_aluno) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id Aluno') ?></h6>
            <p><?= $this->Number->format($alunoTurma->id_aluno) ?></p>
            <h6 class="subheader"><?= __('Id Turma') ?></h6>
            <p><?= $this->Number->format($alunoTurma->id_turma) ?></p>
        </div>
    </div>
</div>
