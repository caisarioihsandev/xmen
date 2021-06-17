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

        <div class="row">
            <div class="col-md-8">
                <h3>Detail Skill: <?= $data['skill']['skill_name']; ?></h3>
            </div>
            <div class="col-md-4  text-right">
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-danger">Hapus</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <td>ID</td>
                        <td><?= $data['skill']['skill_id']; ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="text" class="form-control" value="<?= $data['skill']['skill_name']; ?>"/>
                        </td>
                    </tr>
                </table>

                <table class="table table-bordered">
                    <thead>
                    <th>No</th>
                    <th>Heroes</th>
                    <th>
                        <button class="btn btn-primary btn-small">Tambah Hero</button>
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