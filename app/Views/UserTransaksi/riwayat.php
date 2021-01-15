<div class="col-sm-12">
    <h3 class="mt-3">History Transaksi</h3><br><br>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Judul Film</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Total Bayar</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($checkout as $c) : ?>
                <tr>
                    <th style="vertical-align: middle;"><?= $c['title']; ?></th>
                    <th style="vertical-align: middle;"><?= $c['tanggal']; ?></th>
                    <th style="vertical-align: middle;"><?= $c['jam']; ?></th>
                    <th style="vertical-align: middle;">Rp. <?= $c['total_bayar']; ?></th>
                    <?php if ($c['bayar'] == 0) : ?>
                        <th style="text-align: center;"><button class="btn btn-danger" disabled><a href="/Cetak" style="color: white;">Print Tiket</a></button></th>
                    <?php else : ?>
                        <th style="text-align: center;"><button class="btn btn-danger"><a href="/Cetak/<?= $c['id_checkout']; ?>" style="color: white;">Print Tiket</a></button></th>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="clearfix"></div>