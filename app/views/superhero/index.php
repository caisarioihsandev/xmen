<!-- Daftar SuperHero Start -->

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Di bawah ini adalah Daftar orang-orang yang super hebat itu.<br/>
                    Kamu bisa mencari nama mereka melalui fasilitas pencarian di sebelah kanan.<br/>
                    Kita beruntung memiliki data-data mereka. Jangan sampai jatuh ke tangan musuh, ini akan mengubah dunia..
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h3><?= $data['subjudul']; ?></h3>
            </div>
            <div class="col-md-4">
                <form action="<?= BASE_URL; ?>/superhero/find" method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Pencarian" name="keyword" id="keyword" aria-describedby="basic-addon1" autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data['heroes'] as $hero): ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $hero['superhero_name']?></td>
                            <td><?= $hero['superhero_gender']?></td>
                            <td>
                                <a href="<?= BASE_URL;?>/superhero/detail/<?= $hero['superhero_id']; ?>" class="btn btn-primary">View Detail</a>
                                <button class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<!-- Daftar SuperHero End -->