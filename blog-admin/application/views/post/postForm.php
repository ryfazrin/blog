<?php echo initialize_tinymce() ?>
    <section class="section">
          <div class="section-header">
            <h1>Form Post</h1>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">

                <div class="card">
                <div class="card-header">
                <?php
                    if (isset($postId->id_post)) {
                      // jika update jalankan
                      echo form_open('post/update/'.$postId->id_post);
                      echo '<h4>Edit Post</h4>';
                    }else{
                      // tambah barang
                      echo form_open('post/simpan/');
                      echo '<h4>Add Post</h4>';
                    }
                 ?>
                </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12">
                      <?php
                        if (@$info) {
                          echo $info;
                        }
                       ?>
                      <div class="form-group">
                        <input type="hidden" name="id_penulis" value="<?= $this->session->userdata("id_user"); ?>">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" value="<?= isset($postId->judul)?$postId->judul:''; ?>">
                      </div>
                      <div class="form-group">
                        <label>Isi Content</label>
                        <textarea name="isi" class="summernote-simple"><?= isset($postId->isi)?$postId->isi:''; ?></textarea>
                      </div>
                    <div class="form-group text-right">
                        <button class="btn btn-info mr-1" type="submit">Simpan</button>
                      <a href="<?=site_url('post'); ?>"> <button type="button" class="btn btn-danger" name="batal">Kembali</button></a>
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
