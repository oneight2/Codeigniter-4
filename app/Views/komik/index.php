<?= $this->extend('layout/template'); ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($komik as $row) : ?>
                        <tr>
                            <th scope="row">1</th>
                            <td><?= $row['judul'] ?></td>
                            <td><img src="/img/<?= $row['sampul'] ?>" alt=""></td>
                            <td><a href="" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endsection() ?>