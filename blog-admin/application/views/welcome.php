
    <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Admin</h4>
                  </div>
                  <div class="card-body"><?= $admins; ?></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Penulis</h4>
                  </div>
                  <div class="card-body"><?= $penulis ?></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Post</h4>
                  </div>
                  <div class="card-body"><?= $posts ?></div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <!-- <a href="<?php echo site_url('barang/tambahbarang/'); ?>"><button class="col-12 btn btn-lg btn-info mb-2" type="submit"><i class="fas fa-plus"></i> Barang Baru</button></a> -->
            </div>
          </div>

        </section>
