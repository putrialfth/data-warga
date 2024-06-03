<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>WELCOME</h3>
            <p class="text-subtitle text-muted">Selamat datang di website data warga kampung baru</p>
            <p class="text-subtitle text-muted">Kampung Baru, RT 3, RW 7, Pabelan, Kartasura, Sukoharjo.</p>
        </div>
        <section class="section">
            <div class="row">
                <div class="w-100">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card" style=" background: #0050AF">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title" class="card-title" style="color: whitesmoke;">Jumlah Warga</h5>
                                        </div>
                                    </div>
                                    <div>
                                        <h1 style="color: #ffffff"> <?= $count ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card" style=" background: #0050AF">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title" class="card-title" style="color: whitesmoke;">Jumlah Warga Keluar</h5>
                                        </div>
                                    </div>
                                    <div>
                                        <h1 style="color: #ffffff"> <?= $count2 ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


</div>