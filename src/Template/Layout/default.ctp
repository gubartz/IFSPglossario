<?php
  $role = $this->request->session()->read('Auth.User.role');
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('/bower_components/foundation/css/foundation.css') ?>
    <?= $this->Html->script('/bower_components/foundation/js/vendor/jquery.js') ?>
    <?= $this->Html->script('/bower_components/foundation/js/vendor/modernizr.js') ?>
    <?= $this->Html->script('/bower_components/foundation/js/foundation.min.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <?php
            echo $this->Flash->render();
            echo $this->Flash->render('auth');    
        ?>
    </header>
    <?php $this->start('professorMenu');?>
    <nav class="top-bar foundation-bar show-for-medium-up" data-topbar>
        <ul class="title-area">
            <li class="name">
                <h1 class="show-for-medium-up"><a href="#">Glossário</a></h1>
            </li>
        </ul>
        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="left">
                <li class="has-dropdown">
                    <a href="#">Palavra</a>
                    <ul class="dropdown">
                        <li><?= $this->Html->link(__('List Palavra'), ['controller' => 'Palavra', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Add Palavra'), ['controller' => 'Palavra', 'action' => 'add']) ?></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Glossário</a>
                    <ul class="dropdown">
                        <li><?= $this->Html->link(__('List Glossario'), ['controller' => 'Glossario', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Add Glossario'), ['controller' => 'Glossario', 'action' => 'add']) ?></li>
                    </ul>
                </li>                            
                <li class="has-dropdown">
                    <a href="#">Aluno</a>
                    <ul class="dropdown">
                        <li><?= $this->Html->link(__('List Aluno'), ['controller' => 'Aluno', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Add Aluno'), ['controller' => 'Aluno', 'action' => 'add']) ?></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Professor</a>
                    <ul class="dropdown">
                        <li><?= $this->Html->link(__('List Professor'), ['controller' => 'Professor', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Add Professor'), ['controller' => 'Professor', 'action' => 'add']) ?></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Curso</a>
                    <ul class="dropdown">
                        <li><?= $this->Html->link(__('List Curso'), ['controller' => 'Curso', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Add Curso'), ['controller' => 'Curso', 'action' => 'add']) ?></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Turma</a>
                    <ul class="dropdown">
                        <li><?= $this->Html->link(__('List Turma'), ['controller' => 'Turma', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Add Turma'), ['controller' => 'Turma', 'action' => 'add']) ?></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Usuário</a>
                    <ul class="dropdown">
                        <li><?= $this->Html->link(__('List Usuario'), ['controller' => 'Usuario', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Add Usuario'), ['controller' => 'Usuario', 'action' => 'add']) ?></li>
                    </ul>
                </li>                
                <li>
                    <?= $this->Html->link(__('Logout'), ['controller' => 'Usuario', 'action' => 'logout']) ?>
                </li>                
            </ul>
        </section>
    </nav>
    <?php $this->end();?>

    <?php $this->start('alunoMenu');?>
    <nav class="top-bar foundation-bar show-for-medium-up" data-topbar>
        <ul class="title-area">
            <li class="name">
                <h1 class="show-for-medium-up"><a href="#">Glossário</a></h1>
            </li>
        </ul>
        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="left">
                <li class="has-dropdown">
                    <a href="#">Palavra</a>
                    <ul class="dropdown">
                        <li><?= $this->Html->link(__('List Palavra'), ['controller' => 'Palavra', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Add Palavra'), ['controller' => 'Palavra', 'action' => 'add']) ?></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Glossário</a>
                    <ul class="dropdown">
                        <li><?= $this->Html->link(__('List Glossario'), ['controller' => 'Glossario', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Add Glossario'), ['controller' => 'Glossario', 'action' => 'add']) ?></li>
                    </ul>
                </li>                            
                <li>
                    <?= $this->Html->link(__('Logout'), ['controller' => 'Usuario', 'action' => 'logout']) ?>
                </li>                
            </ul>
        </section>
    </nav>
    <?php $this->end();?>    

    <?php 
        if($role == 'professor')
            echo $this->fetch('professorMenu');
        else
            echo $this->fetch('alunoMenu');
    ?>

    <div class="row">
        <div class="small-12 columns">
            <div class="off-canvas-wrap" data-offcanvas>
                <div class="inner-wrap">
                    <nav class="tab-bar show-for-small">
                        <section class="left-small">
                            <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
                        </section>
                        <section class="middle tab-bar-section">
                            <h1 class="title">Glossário</h1>
                        </section>
                    </nav>
                    <?php $this->start('professorOffCanvasMenu');?>
                    <aside class="left-off-canvas-menu">
                        <ul class="off-canvas-list">
                            <li><label>Menu</label></li>
                            <li class="has-submenu"><a href="#">Palavra</a>
                                <ul class="left-submenu">
                                    <li class="back"><a href="#">Voltar</a></li>
                                    <li><label>Palavra</label></li>
                                    <li><?= $this->Html->link(__('List Palavra'), ['controller' => 'Palavra', 'action' => 'index']) ?></li>
                                    <li><?= $this->Html->link(__('Add Palavra'), ['controller' => 'Palavra', 'action' => 'add']) ?></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="#">Glossário</a>
                                <ul class="left-submenu">
                                    <li class="back"><a href="#">Voltar</a></li>
                                    <li><label>Palavra</label></li>
                                    <li><?= $this->Html->link(__('List Glossario'), ['controller' => 'Glossario', 'action' => 'index']) ?></li>
                                    <li><?= $this->Html->link(__('Add Glossario'), ['controller' => 'Glossario', 'action' => 'add']) ?></li>
                                </ul>
                            </li>                             
                            <li class="has-submenu"><a href="#">Aluno</a>
                                <ul class="left-submenu">
                                    <li class="back"><a href="#">Voltar</a></li>
                                    <li><label>Aluno</label></li>
                                    <li><?= $this->Html->link(__('List Aluno'), ['controller' => 'Aluno', 'action' => 'index']) ?></li>
                                    <li><?= $this->Html->link(__('Add Aluno'), ['controller' => 'Aluno', 'action' => 'add']) ?></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="#">Professor</a>
                                <ul class="left-submenu">
                                    <li class="back"><a href="#">Voltar</a></li>
                                    <li><label>Professor</label></li>
                                    <li><?= $this->Html->link(__('List Professor'), ['controller' => 'Professor', 'action' => 'index']) ?></li>
                                    <li><?= $this->Html->link(__('Add Professor'), ['controller' => 'Professor', 'action' => 'add']) ?></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="#">Curso</a>
                                <ul class="left-submenu">
                                    <li class="back"><a href="#">Voltar</a></li>
                                    <li><label>Curso</label></li>
                                    <li><?= $this->Html->link(__('List Curso'), ['controller' => 'Curso', 'action' => 'index']) ?></li>
                                    <li><?= $this->Html->link(__('Add Curso'), ['controller' => 'Curso', 'action' => 'add']) ?></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="#">Turma</a>
                                <ul class="left-submenu">
                                    <li class="back"><a href="#">Turma</a></li>
                                    <li><label>Curso</label></li>
                                    <li><?= $this->Html->link(__('List Turma'), ['controller' => 'Turma', 'action' => 'index']) ?></li>
                                    <li><?= $this->Html->link(__('Add Turma'), ['controller' => 'Turma', 'action' => 'add']) ?></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="#">Usuário</a>
                                <ul class="left-submenu">
                                    <li class="back"><a href="#">Usuário</a></li>
                                    <li><label>Curso</label></li>
                                    <li><?= $this->Html->link(__('List Usuário'), ['controller' => 'Usuario', 'action' => 'index']) ?></li>
                                    <li><?= $this->Html->link(__('Add Usuário'), ['controller' => 'Usuario', 'action' => 'add']) ?></li>
                                </ul>
                            </li>                            
                        </ul>
                    </aside>
                    <?php $this->end();?>

                    <?php $this->start('alunoOffCanvasMenu');?>
                    <aside class="left-off-canvas-menu">
                        <ul class="off-canvas-list">
                            <li><label>Menu</label></li>
                            <li class="has-submenu"><a href="#">Palavra</a>
                                <ul class="left-submenu">
                                    <li class="back"><a href="#">Voltar</a></li>
                                    <li><label>Palavra</label></li>
                                    <li><?= $this->Html->link(__('List Palavra'), ['controller' => 'Palavra', 'action' => 'index']) ?></li>
                                    <li><?= $this->Html->link(__('Add Palavra'), ['controller' => 'Palavra', 'action' => 'add']) ?></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="#">Glossário</a>
                                <ul class="left-submenu">
                                    <li class="back"><a href="#">Voltar</a></li>
                                    <li><label>Palavra</label></li>
                                    <li><?= $this->Html->link(__('List Glossario'), ['controller' => 'Glossario', 'action' => 'index']) ?></li>
                                    <li><?= $this->Html->link(__('Add Glossario'), ['controller' => 'Glossario', 'action' => 'add']) ?></li>
                                </ul>
                            </li>                            
                         </ul>
                    </aside>
                    <?php $this->end();?>                    

                    <?php 
                        if($role == 'professor')
                            echo $this->fetch('professorOffCanvasMenu');
                        else
                            echo $this->fetch('alunoOffCanvasMenu');
                    ?>             

                    <section class="main-section">
                        <?= $this->Flash->render() ?>
                        <div class="row">
                            <div class="large-12 columns" id="content"><?= $this->fetch('content') ?></div>
                        </div>
                    </section>

                    <a class="exit-off-canvas"></a>

                </div>
            </div>
        </div>
    </div>
    <footer>
    </footer>
    <script>
        $(document).foundation();
    </script>
</body>
</html>
