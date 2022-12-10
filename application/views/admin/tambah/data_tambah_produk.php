<form action="<?= base_url('admin/tambah_aksi_produk') ?>" method="POST" style="padding: 20px;">
    <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control">
        <?= form_error('nama_produk','<div class="text-small text-danger">','</div>'); ?>
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="text" name="harga" class="form-control">
        <?= form_error('harga','<div class="text-small text-danger">','</div>'); ?>
    </div>
    <div class="form-group">
        <label>Stok</label>
        <input type="text" name="stok" class="form-control">
        <?= form_error('stok','<div class="text-small text-danger">','</div>'); ?>
    </div>

    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
</form>