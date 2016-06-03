<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>

    <meta name="description" content="">
    <meta name="author" content="Gustavo Kataoka">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('../vendors/bootstrap/dist/css/bootstrap.min.css') ?>
    <?= $this->Html->css('../vendors/metisMenu/dist/metisMenu.min.css') ?>

    <?= $this->Html->css('../vendors/font-awesome/css/font-awesome.min.css') ?>

    <?= $this->Html->css('../vendors/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') ?>
    <?= $this->Html->css('../vendors/datatables-responsive/css/responsive.bootstrap.css') ?>

    <?= $this->Html->css('../vendors/morrisjs/morris.css') ?>

    <!-- jQuery -->
    <?= $this->Html->script('../vendors/jquery/dist/jquery.min.js') ?>

    <!-- Bootstrap Core JavaScript -->
    <?= $this->Html->script('../vendors/bootstrap/dist/js/bootstrap.min.js') ?>

    <!-- Metis Menu Plugin JavaScript -->
    <?= $this->Html->script('../vendors/metisMenu/dist/metisMenu.min.js') ?>

    <!-- DataTables JavaScript -->
    <?= $this->Html->script('../vendors/datatables/media/js/jquery.dataTables.min.js') ?>
    <?= $this->Html->script('../vendors/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') ?>
    <?= $this->Html->script('../vendors/datatables-responsive/js/dataTables.responsive.js') ?>

    <!-- Morris Charts JavaScript -->
    <?= $this->Html->script('../vendors/raphael/raphael.min.js') ?>
    <?= $this->Html->script('../vendors/morrisjs/morris.min.js') ?>

    <!-- Flot Charts JavaScript -->
    <?= $this->Html->script('../vendors/flot/excanvas.min.js') ?>
    <?= $this->Html->script('../vendors/flot/jquery.flot.js') ?>
    <?= $this->Html->script('../vendors/flot/jquery.flot.pie.js') ?>
    <?= $this->Html->script('../vendors/flot/jquery.flot.resize.js') ?>
    <?= $this->Html->script('../vendors/flot/jquery.flot.time.js') ?>
    <?= $this->Html->script('../vendors/flot.tooltip/js/jquery.flot.tooltip.min.js') ?>

    <!-- Custom -->
    <?= $this->Html->css('timeline.css') ?>
    <?= $this->Html->css('sb-admin-2.css') ?>
    <?= $this->Html->css('main.css') ?>
    <?= $this->Html->script('sb-admin-2.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
    <?= $this->element('Layout' . DS . 'header'); ?>

    <?= $this->Flash->render() ?>

    <div id="page-wrapper">
        <?= $this->fetch('content') ?>
    </div>

    <?= $this->element('Layout' . DS . 'footer'); ?>
</div>
</body>
</html>