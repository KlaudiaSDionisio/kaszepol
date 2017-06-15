<div id="all">

    <div id="content">
        <div class="container">

            <div class="col-sm-12">
                <ul class="breadcrumb">

                    <li><a href="<?= site_url()?>">Home</a>
                    </li>
                    <li>Blog</li>
                </ul>
            </div>

            <!-- *** LEFT COLUMN ***
         _________________________________________________________ -->

            <div class="col-sm-9" id="blog-listing">

                <!--<ul class="breadcrumb">-->

                <!--<li><a href="#">Home</a>-->
                <!--</li>-->
                <!--<li>Blog listing</li>-->
                <!--</ul>-->


                <div class="post">
                    <h2><a href="<?= site_url('/blog/post/1')?>">Bandeira e brasão de armas da Polônia</a></h2>
                    <p class="author-category">Por <a>Admin</a>
                    </p>
                    <hr>
                    <p class="date-comments">
                        <a href="<?= site_url('/blog/post/1')?>"><i class="fa fa-calendar-o"></i>14 de junho 2017</a>
                    </p>
                    <div class="image">
                        <a href="<?= site_url('/blog/post/1')?>">
                            <img src="<?= asset_url('img/polska/polska.jpg')?>" class="img-responsive" alt="Example blog post alt">
                        </a>
                    </div>
                    <p class="intro">As cores da bandeira da Polônia tem origem no escudo do país. O branco representa a águia branca,
                        enquanto o vermelho representa a cor de fundo do escudo. O escudo vermelho com a águia branca foi criado no século XIII, durante a dinastia Piast.
                    </p>
                    <p class="read-more"><a href="<?= site_url('/blog/post/1')?>" class="btn btn-primary">Ler mais...</a>
                    </p>
                </div>


                <div class="post">
                    <h2><a href="<?= site_url('/blog/post/2')?>">Kaszebe</a></h2>
                    <p class="author-category">Por <a>Admin</a>
                    </p>
                    <hr>
                    <p class="date-comments">
                        <a href="<?= site_url('/blog/post/2')?>"><i class="fa fa-calendar-o"></i> 15 de junho 2017</a>
                    </p>
                    <div class="image">
                        <a href="<?= site_url('/blog/post/2')?>">
                            <img src="<?= asset_url('img/polska/flaga.png')?>" class="img-responsive" alt="Example blog post alt">
                        </a>
                    </div>
                    <p class="intro">A bandeira de Kaszebe tem a forma de duas tiras horizontais - a parte superior é de cor preta,
                        um inferior - amarelo (cor amarelo se refere a cor dourado do brasão de armas)..</p>
                    <p class="read-more"><a href="<?= site_url('/blog/post/2')?>" class="btn btn-primary">Ler mais...</a>
                    </p>
                </div>




            </div>
            <!-- /.col-md-9 -->

            <!-- *** LEFT COLUMN END *** -->


            <div class="col-md-3">
                <!-- *** BLOG MENU ***
_________________________________________________________ -->
                <div class="panel panel-default sidebar-menu">

                    <div class="panel-heading">
                        <h3 class="panel-title">Blog</h3>
                    </div>

                    <div class="panel-body">

                        <ul class="nav nav-pills nav-stacked">
                            <li>
                                <a href="<?= site_url('/blog/post/1')?>">Polônia</a>
                            </li>
                            <li>
                                <a href="<?= site_url('/blog/post/2')?>"">Kaszebe</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /.col-md-3 -->

                <!-- *** BLOG MENU END *** -->

                <div class="banner">
                    <a href="#">
                        <img src="<?= asset_url('img/polska/godlo.png')?>" alt="sales 2014" class="img-responsive">
                    </a>
                </div>
            </div>


        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->
