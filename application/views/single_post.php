<header class="intro-header" style="background-image: url('<?php echo base_url('assets/img/home-bg.jpg') ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1><?= $post->judul ?></h1>
                    <!-- <h2 class="subheading">Sub judul yang sempit</h2> -->
                    <span class="meta">Posted by <a href="#"><?= $post->nama ?></a> on <?= $post->tgl_publish ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <?= $post->isi ?>
            </div>
        </div>
    </div>
</article>
