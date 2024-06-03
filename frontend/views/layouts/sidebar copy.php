<?php

use yii\helpers\Url;
?>

<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <span class="align-middle">DESA KAMPUNG BARU</span>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Main Menu</li>
                <li class="sidebar-item active ">
                    <a class="sidebar-link" href="<?= Url::home() ?>">
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item ">
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

                <!-- <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= Url::to(['keluar/index']) ?>">
                        <i data-feather="user" width="20"></i>
                        <span>Data Warga Keluar</span>
                    </a>
                </li> -->
            </ul>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>



    </div>
</div>