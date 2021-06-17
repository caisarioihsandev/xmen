<!-- Detail Skill Start -->
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Ini adalah skill <?= $data['skill']['skill_name']; ?>. Skill yang berbahaya. Musuh akan terkejut melihat skill ini.
                </div>
                <hr/>
            </div>
        </div>

        <!-- Form Untuk Edit -->
        <form action="<?= BASE_URL; ?>/skill/change" method="post">
        <div class="row">
            <div class="col-md-8">
                <h3>Detail Skill: <?= $data['skill']['skill_name']; ?></h3>
            </div>
            <div class="col-md-4  text-right">
                <button class="btn btn-primary" type="submit">Edit</button>
                <a href="?= BASE_URL;?>/skill/remove/<?= $data['skill']['skill_id']; ?>" class="btn btn-danger">Hapus</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <td>ID</td>
                        <td>
                            <input type="text" id="id" name="id" class="form-control" value="<?= $data['skill']['skill_id']; ?>" readonly/>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="text" id="name" name="name" class="form-control" value="<?= $data['skill']['skill_name']; ?>"/>
                        </td>
                    </tr>
                </table>
        </form>
                <table class="table table-bordered">
                    <thead>
                    <th>No</th>
                    <th>Heroes</th>
                    <th>
                        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">Tambah Hero</button>
                    </th>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data['herofromskill'] as $herolist): ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $herolist['superhero_name']; ?></td>
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
<!-- Detail Skill End-->

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Hero untuk Skill: <?= $data['skill']['skill_name'];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASE_URL; ?>/skill/addhero" method="post">

            <div class="form-group">
                <label for="nama">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="<?= $data['skill']['skill_id']; ?>" readonly>
            </div>

            <div class="form-group">
                <label for="nrp">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $data['skill']['skill_name']; ?>" readonly>
            </div>

            <div class="form-group">
                <label for="skills">Tambahkan Untuk Skill Superhero</label>
                <select class="form-control" id="hero" name="hero">
                <?php foreach($data['heroes'] as $hero): ?>
                  <option value="<?= $hero['superhero_id'];?>"><?= $hero['superhero_name']; ?></option>
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