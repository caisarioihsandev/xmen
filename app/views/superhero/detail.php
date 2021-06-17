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

        <!-- Form Untuk Edit -->
        <form action="<?= BASE_URL; ?>/superhero/change" method="post">
        <div class="row">
            <div class="col-md-8">
                <h3>Detail Superhero: <?= $data['hero']['superhero_name']; ?></h3>
            </div>
            <div class="col-md-4  text-right">
                <button class="btn btn-primary" type="submit">Edit</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <td>ID</td>
                        <td><input type="text" name="id" id="id" class="form-control" value="<?= $data['hero']['superhero_id']; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="text" name="name" id="name" class="form-control" value="<?= $data['hero']['superhero_name']; ?>"/>
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
        </form>
                <table class="table table-bordered">
                    <thead>
                    <th>No</th>
                    <th>Skill</th>
                    <th>
                        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">Tambah Skill</button>
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
        <h5 class="modal-title" id="judulModal">Tambah Data Skill Hero: <?= $data['hero']['superhero_name'];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASE_URL; ?>/superhero/addskill" method="post">

            <div class="form-group">
                <label for="nama">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="<?= $data['hero']['superhero_id']; ?>" readonly>
            </div>

            <div class="form-group">
                <label for="nrp">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $data['hero']['superhero_name']; ?>" readonly>
            </div>

            <div class="form-group">
                <label for="skills">Tambahkan Untuk Skill Superhero</label>
                <select class="form-control" id="skill" name="skill">
                <?php foreach($data['skills'] as $skill): ?>
                  <option value="<?= $skill['skill_id'];?>"><?= $skill['skill_name']; ?></option>
                <?php endforeach ?>
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