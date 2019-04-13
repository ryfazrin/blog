    <section class="section">
          <div class="section-header">
            <h1>Form User</h1>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">

                <div class="card">
                <div class="card-header">
                <?php
                    if (isset($userId->id)) {
                      // jika update jalankan
                      echo form_open('user/update/'.$userId->id);
                      echo '<h4>Edit User</h4>';
                    }else{
                      // tambah barang
                      echo form_open('user/simpan/');
                      echo '<h4>Add User</h4>';
                    }
                 ?>
                </div>
                  <div class="card-body">
                    <?php
                    if (@$info) {
                      echo $info;
                    }
                    ?>
                    <div class="row">
                      <div class="col-lg-6">
                       <div class="form-group">
 	                      <label>Level</label>
 	                      <select class="form-control text-capitalize" name="level">
                           <?php if (isset($userId->level)): ?>
                             <option value="<?= isset($userId->level)?$userId->level:''; ?>"><?= isset($userId->level)?$userId->level:''; ?></option>
                           <?php endif ?>
                          <option value="penulis">Penulis</option>
 	                        <option value="administrator">Administrator</option>
 	                      </select>
 	                    </div>
 	                    <div class="form-group">
 	                      <label>Nama</label>
 	                      <input name="nama" type="text" class="form-control" value="<?= isset($userId->nama)?$userId->nama:''; ?>">
 	                    </div>
                       </div>
                       <div class="col-lg-6">
 	                    <div class="form-group">
 	                      <label>Username</label>
 	                      <input name="username" type="text" class="form-control" value="<?= isset($userId->username)?$userId->username:''; ?>">
 	                    </div>
 	                    <div class="form-group">
 	                      <label>Password</label>
 	                      <input name="password" type="text" class="form-control">
                         <?php if (isset($userId->password)): ?>
                           <small>Kosongkan saja Jika tidak Mengganti Password</small>
                         <?php endif ?>
 	                    </div>
 						        <div class="form-group text-right">
 		                  <button class="btn btn-info mr-1" type="submit">Simpan</button>
                       <a href="<?php echo site_url('user'); ?>"> <button type="button" class="btn btn-danger" name="batal">Kembali</button></a>
 		                </div>
                      </div>
                  </div>
          </div>
                </form>
        </div>

              </div>
            </div>
          </div>
        </section>
