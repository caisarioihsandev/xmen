<!-- Detail SuperHero Start -->

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Meng-klik "View Detail" di atas akan membawamu ke halaman detail di bawah ini.
                    Ini jika kamu mengklik data milik <?= $data['hero']['superhero_name']; ?>.
                </div>
                <hr/>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8">
                <h3>Detail Superhero: <?= $data['hero']['superhero_name']; ?></h3>
            </div>
            <div class="col-md-4  text-right">
                <button class="btn btn-primary">Edit</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <td>ID</td>
                        <td><?= $data['hero']['superhero_id']; ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="text" class="form-control" value="<?= $data['hero']['superhero_name']; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <select class="form-control" name="gender">
                                <option value="Laki-laki" <?php $retVal = ($data['hero']['superhero_gender'] == 'Laki-laki') ? "selected" : ""; echo $retVal;?>>Laki-laki</option>
                                <option value="Perempuan" <?php $retVal = ($data['hero']['superhero_gender'] == 'Perempuan') ?"selected" : ""; echo $retVal;?>>Perempuan</option>
                            </select>
                        </td>
                    </tr>
                </table>

                <table class="table table-bordered">
                    <thead>
                    <th>No</th>
                    <th>Skill</th>
                    <th>
                        <button class="btn btn-primary btn-small">Tambah Skill</button>
                    </th>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data['heroskills'] as $heroskill): ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $heroskill['skill_name']; ?></td>
                            <td>
                                <button class="btn btn-danger btn-small">Hapus</button>
                            </td>
                        </tr>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <button class="btn btn-default" onclick="history.go(-1);">Back </button>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<!-- Detail SuperHero End-->

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Skill Hero: <?= $data[''];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASE_URL; ?>/superhero/addskill" method="post">

            <input type="hidden" name="id" id="id">
            
            <div class="form-group">
                <label for="nama">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="<?= $data['hero']['superhero_id']; ?>" readonly>
            </div>

            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="number" class="form-control" id="nrp" name="nrp" value="<?= $data['hero']['superhero_name']; ?>" readonly>
            </div>

            <div class="form-group">
                <label for="jurusan">Example select</label>
                <select class="form-control" id="jurusan" name="jurusan">
                  <option value="Matematika">Matematika</option>
                  <option value="Teknik Informatika">Teknik Informatika</option>
                  <option value="Teknik Mesin">Teknik Mesin</option>
                  <option value="Teknik Pangan">Teknik Pangan</option>
                  <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                </select>
            </div>

          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </div>

        </form>
        
    </div>
  </div>
</div>