<nav class="navbar navbar-default navbar-static-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" id="navbarButton">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-cog"></span>
        </button>
        <button class="navbar-toggle" data-toggle="collapse" data-target="#sidebar" id="sidebarButton">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <?= $this->Html->image('brasao.png', ['alt' => 'brasao']) ?>
        <?= $this->Html->image('logo-orgao.png', ['alt' => 'logo']) ?>
        <?= $this->Html->link('Cake Skeleton', ['controller' => 'Pages', 'action' => 'home'], ['class' => 'navbar-brand']) ?>
    </div>
    <?= $this->element('Layout' . DS . 'navbar-menu'); ?>
    <?= $this->element('Layout' . DS . 'side-menu'); ?>
</nav>