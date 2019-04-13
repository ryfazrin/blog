<header class="intro-header" style="background-image: url('<?php echo base_url('assets/img/home-bg.jpg') ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Blog Pribadi</h1>
                    <hr class="small">
                    <span class="subheading">Create by Computer Media Utama</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <?php foreach ($posts as $post): ?>
            <div class="post-preview">
                <a href="<?= base_url('blog/post/'.$post->seo_url.'/'); ?>">
                    <h2 class="post-title">
                        <?= $post->judul ?>
                    </h2>
                    <h3 class="post-subtitle">
                        <?= substr($post->isi, 0, 50); ?> ...
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#"><?= $post->nama ?></a> on <?= $post->tgl_publish ?></p>
            </div>
            <hr>
          <?php endforeach; ?>

            <!-- Pager -->
            <ul class="pager">
              <?php if (!@$semua): ?>
                <li class="next">
                  <a href="<?= base_url('blog/semuaPost'); ?>">Lihat Semua Post &rarr;</a>
                </li>
              <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
