<?= $this->extend('admin/template') ?>
<?= $this->section('content') ?>
<section class="content">
  <!-- <div class="container"> -->

  <main class="container">

    <div class="row">
      <form class="row g-3" action="<?= base_url(); ?>/project/update/<?= $project['id']; ?>" method="post"
        enctype="multipart/form-data">
        <!-- <form class="form-horizontal" action="/lakip/save" method="post" enctype="multipart/form-data"> -->
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $project['slug']; ?>">
        <input type="hidden" name="gambarLama" value="<?= $project['kodeqr']; ?>">
        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <div class="mb-3 row">
                <div class="mb-3 row">
                  <label for="userid" class="col-sm-3 col-form-label">User ID </label>
                  <div class="col-md-8">
                    <input type="text"
                      class="form-control <?= ($validation->hasError('userid')) ? 'is-invalid' : ''; ?>" name="userid"
                      id="userid" value="<?= (old('userid')) ? old('userid') : $project['userid'] ?>">
                    <div class="invalid-feedback">
                      <?= $validation->getError('userid'); ?>
                    </div>
                  </div>
                  <!-- <//?= $kode; ?> -->
                </div>

                <div class=" mb-3 row">
                  <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>"
                      id="nama" name="nama" value="<?= (old('nama')) ? old('nama') : $project['nama'] ?>">
                    <div class="invalid-feedback">
                      <?= $validation->getError('nama'); ?>
                    </div>
                  </div>
                </div>
                <div class=" mb-3 row">
                  <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                  <div class="col-md-8">
                    <input type="text"
                      class="form-control <?= ($validation->hasError('jabatan')) ? 'is-invalid' : ''; ?>" id="jabatan"
                      name="jabatan" value="<?= (old('jabatan')) ? old('jabatan') : $project['jabatan'] ?>">
                    <div class="invalid-feedback">
                      <?= $validation->getError('jabatan'); ?>
                    </div>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="instansi" class="col-sm-3 col-form-label">Instansi</label>
                  <div class="col-md-8">
                    <input type="text"
                      class="form-control <?= ($validation->hasError('instansi')) ? 'is-invalid' : ''; ?>" id="instansi"
                      name="instansi" value="<?= (old('instansi')) ? old('instansi') : $project['instansi'] ?>">
                    <div class="invalid-feedback">
                      <?= $validation->getError('instansi'); ?>
                    </div>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="kabupaten" class="col-sm-3 col-form-label">Kabupaten</label>
                  <div class="col-md-8">
                    <input type="text"
                      class="form-control <?= ($validation->hasError('kabupaten')) ? 'is-invalid' : ''; ?>"
                      id="kabupaten" name="kabupaten"
                      value="<?= (old('kabupaten')) ? old('kabupaten') : $project['kabupaten'] ?>">
                    <div class="invalid-feedback">
                      <?= $validation->getError('kabupaten'); ?>
                    </div>
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="tema" class="col-sm-3 col-form-label">Tema</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control <?= ($validation->hasError('tema')) ? 'is-invalid' : ''; ?>"
                      id="tema" name="tema" value="<?= (old('tema')) ? old('tema') : $project['tema'] ?>">
                    <div class="invalid-feedback">
                      <?= $validation->getError('tema'); ?>
                    </div>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                  <div class="col-md-8">
                    <input type="text"
                      class="form-control <?= ($validation->hasError('lokasi')) ? 'is-invalid' : ''; ?>" id="lokasi"
                      name="lokasi" value="<?= (old('lokasi')) ? old('lokasi') : $project['lokasi'] ?>">
                    <div class="invalid-feedback">
                      <?= $validation->getError('lokasi'); ?>
                    </div>
                  </div>
                </div>
                <!--  -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <div class="mb-3 row">
                <label for="hotel" class="col-sm-3 col-form-label">Hotel</label>
                <div class="col-md-8">
                  <input type="text" class="form-control <?= ($validation->hasError('hotel')) ? 'is-invalid' : ''; ?>"
                    id="hotel" name="hotel" value="<?= (old('hotel')) ? old('hotel') : $project['hotel'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('hotel'); ?>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="room" class="col-sm-3 col-form-label">Room</label>
                <div class="col-md-8">
                  <input type="text" class="form-control <?= ($validation->hasError('room')) ? 'is-invalid' : ''; ?>"
                    id="room" name="room" value="<?= (old('room')) ? old('room') : $project['room'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('room'); ?>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="checkin" class="col-sm-3 col-form-label">Check-In</label>
                <div class="col-md-8">
                  <input type="date" class="form-control <?= ($validation->hasError('checkin')) ? 'is-invalid' : ''; ?>"
                    id="checkin" name="checkin" value="<?= (old('checkin')) ? old('checkin') : $project['checkin'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('checkin'); ?>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="checkout" class="col-sm-3 col-form-label">Check-Out</label>
                <div class="col-md-8">
                  <input type="date"
                    class="form-control <?= ($validation->hasError('checkout')) ? 'is-invalid' : ''; ?>" id="checkout"
                    name="checkout" value="<?= (old('checkout')) ? old('checkout') : $project['checkout'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('checkout'); ?>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="kontribusi" class="col-sm-3 col-form-label">Kontribusi</label>
                <div class="col-md-8">
                  <input type="text"
                    class="form-control <?= ($validation->hasError('kontribusi')) ? 'is-invalid' : ''; ?>"
                    id="kontribusi" name="kontribusi"
                    value="<?= (old('kontribusi')) ? old('kontribusi') : $project['kontribusi'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('kontribusi'); ?>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="kodeqr" class="col-sm-3 col-form-label">Avatar</label>
                <div class="col-sm-3">
                  <img src="<?= base_url(); ?>/assets/images/<?= $project['kodeqr']; ?>" width="100"
                    class="img-thumbnail img-preview">
                </div>
                <div class="col-md-5">
                  <div class="custom-file">
                    <input type="file"
                      class="custom-file-input <?= ($validation->hasError('kodeqr')) ? 'is-invalid' : ''; ?>"
                      id="kodeqr" name="kodeqr" onchange="previewImg()">
                    <div class="invalid-feedback">
                      <?= $validation->getError('kodeqr'); ?>
                    </div>
                    <label class="custom-file-label" for="kodeqr"><?= $project['kodeqr']; ?></label>
                  </div>
                </div>
              </div>

              <div class="form-check offset-md-3 col-md-8">
                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                <label class="form-check-label" for="gridCheck">
                  <!-- Check me out -->
                </label><button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Save</button>
                <a href="<?= base_url(); ?>/project/<?= $project['slug']; ?>" class="btn btn-sm btn-primary"><i
                    class="fas fa-undo-alt"></i> Back User</a>

              </div>
            </div>

          </div>
      </form>
    </div>
  </main><!--  /.container -->





  <!-- </div> -->

</section>
<?= $this->endSection() ?>