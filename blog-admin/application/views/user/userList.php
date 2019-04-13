<section class="section">
      <div class="section-header">
        <h1>user List</h1>
      </div>

      <div class="section-body">
        <div class="row">
            <div class="col-12">
              <?php if (@$_GET['status'] == 'deleted'): ?>
                <div class="alert alert-success"><p><strong>Berhasil hapus user!</strong></p></div>
              <?php endif; ?>
              <div class="card">
                <div class="card-header">
                  <h4>User</h4>
                  <div class="card-header-action"><a href="<?php echo site_url('user/tambah/'); ?>"><button class="btn btn-lg btn-info" type="submit"><i class="fas fa-plus"></i> Tambah Baru</button></a></div>
                </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                 <?php
                  if (!empty($users)) {
                    $no = 1;
                    foreach ($users as $data) {
                 ?>
                      <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><span><?= $data->nama; ?></span></td>
                        <td><?= $data->username; ?></td>
                        <td><?= $data->level; ?></td>
                        <td>
                          <div class="btn-group mb-3 btn-group-sm" role="group" aria-label="Basic example">
                           <a href="<?php echo site_url('user/ubah/'.$data->id);?>" class="btn btn- btn-primary btn-action" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                           <a href="<?= site_url('user/hapus/'.$data->id); ?>" class="btn btn-danger btn-action" onclick="return confirm('User ini akan dihapus?')" data-toggle="tooltip" title="Trash"><i class="fas fa-trash"></i></a>
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
