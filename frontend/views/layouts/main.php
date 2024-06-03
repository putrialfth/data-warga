<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="diUyBUF0DVM4Vpiw2xQGdXyN2A6tyFExoDXHpMRFEUgwVV90NSBlNVQe9oSpd28qG7ubXOqFE1TnZrPDsjV1AQ==">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <span class="align-middle">DESA KAMPUNG BARU</span>
                </div>


                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Main Menu</li>
                        <li class="sidebar-item active ">
                            <a class="sidebar-link" href="<?= Url::to(['/']) ?>">
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= Url::to(['admin/index']) ?>">
                                <i data-feather="lock" width="20"></i>
                                <span>Admin</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= Url::to(['warga/index']) ?>">
                                <i data-feather="users" width="20"></i>
                                <span>Data Warga</span>
                            </a>
                        </li>
                    </ul>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>




            </div>
        </div>

        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-none d-md-block d-lg-inline-block">
                                    <?php
                                    if (!Yii::$app->user->isGuest) {
                                        echo "Hi, " . Yii::$app->user->identity->username;
                                    } else {
                                        echo "Hi, Guest";
                                    }
                                    ?>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-divider"></div>
                                <?= Html::beginForm(['site/logout', 'get']) ?>
                                <?= Html::submitButton('<span ><i data-feather="log-out"></i> Logout</span>', ['class' => 'dropdown-item']) ?>
                                <?= Html::endForm() ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container">
                <?= $content ?>
            </div>
            </main>
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-left">
                        <p>2024 &copy; KKN INFORMATIKA ITSPKU</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
