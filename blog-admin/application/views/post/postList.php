    <section class="section">
          <div class="section-header">
            <h1>Post List</h1>
          </div>

          <div class="section-body">
            <div class="row">
                <div class="col-12">
                  <?php if (@$_GET['status'] == 'deleted'): ?>
                    <div class="alert alert-success"><p><strong>Berhasil hapus post!</strong></p></div>
                  <?php endif; ?>
                  <div class="card">
                    <div class="card-header">
                      <h4>Post</h4>
                      <div class="card-header-action"><a href="<?php echo site_url('post/tambah/'); ?>"><button class="btn btn-lg btn-info" type="submit"><i class="fas fa-plus"></i> Tambah Baru</button></a></div>
                    </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">No</th>
                            <th>Judul</th>
                            <th>Seo Url</th>
                            <th>Penulis</th>
                            <th>Publish</th>
                            <th>action</th>
                          </tr>
                        </thead>
                        <tbody>
                     <?php
                      if (!empty($posts)) {
                        $no = 1;
                        foreach ($posts as $data) {
                     ?>
                          <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td><span><?= $data->judul; ?></span></td>
                            <td><?= $data->seo_url; ?></td>
                            <td><?= $data->nama; ?></td>
                            <td><?= $data->tgl_publish; ?></td>
                            <td>
                              <div class="btn-group mb-3 btn-group-sm" role="group" aria-label="Basic example">
                               <a href="<?php echo site_url('post/ubah/'.$data->id_post);?>" class="btn btn- btn-primary btn-action" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                            <?php if ($this->session->userdata('level') == 'administrator'): ?>
                               <a href="<?= site_url('post/hapus/'.$data->id_post); ?>" class="btn btn-danger btn-action" onclick="return confirm('Post ini akan dihapus?')" data-toggle="tooltip" title="Trash"><i class="fas fa-trash"></i></a>
                            <?php endif; ?>
                             </div>
                            </td>
                          </tr>
                        <?php
                            }
                      }
                      ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
