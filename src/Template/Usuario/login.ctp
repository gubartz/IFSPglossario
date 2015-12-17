<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->input('email') ?>
<?= $this->Form->label('senha') ?>
<?= $this->Form->password('senha', ['id' => 'senha']) ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>