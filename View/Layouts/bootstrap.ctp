<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            <?= Configure::read('TwitterBootstrap.AppName') ?>
            <?= $title_for_layout ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <?= $this->Html->css('/twitter_bootstrap/css/styles') ?>
        <?= $this->Html->css('bootstrap.min') ?>
        <?= $this->Html->css('bootstrap-responsive.min') ?>
        <?= $this->Html->css('/twitter_bootstrap/font-awesome/css/font-awesome.min') ?>
        <?= $this->Html->css('/twitter_bootstrap/social-buttons/social-buttons') ?>
        <!--[if IE 7]>
            <link rel="stylesheet" href="/twitter_bootstrap/font-awesome/css/font-awesome-ie7.min.css">
        <![endif]-->
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->

        <link rel="shortcut icon" href="/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>

    </head>

    <body>
        <div id="wrap">
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="brand" href="/"><?= Configure::read('TwitterBootstrap.AppName') ?></a>
                        <div class="nav-collapse">
                            <ul class="nav">
                                <? if(!isset($navLinks))?>
                                <? $navLinks = array(); ?>
                                <? foreach ($navLinks as $name => $link) : ?>
                                <? if (!isset($link['auth']) || ((bool) $link['auth'] == (bool) AuthComponent::user())) : ?>
                                <li<?= ($this->here == $this->Html->url($link['url'])) ? ' class="active"' : '' ?>>
                                    <?= $this->Html->Link(__($name), $link['url']) ?>
                                </li>
                                <? endif; ?>
                                <? endforeach; ?>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>

            <div class="container">
                <?= ($this->here !== '/') ? $this->Html->getCrumbList(array('class' => 'breadcrumb', 'lastClass' => 'active', 'separator' => '<span class="divider">/</span>'), array('Home', '/')) : '' ?>
                <?= $this->Session->flash('flash') ?>
                <?= $this->fetch('content') ?>
            </div>
            <div id="push"></div>
        </div>
        <footer id="footer">
            <div class="container">
                <p class="muted credit"><a href="/"><?= Configure::read('TwitterBootstrap.AppName') ?></a> site created by <?= $this->Html->link('Angel S. Moreno', 'https://github.com/angelxmoreno') ?></p>
            </div>
        </footer>
        <!-- Le javascript
    ================================================== -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <?= $this->Html->script('bootstrap.min') ?>
        <?= $this->fetch('script') ?>
        <!-- Placed at the end of the document so the pages load faster -->

    </body>
</html>
