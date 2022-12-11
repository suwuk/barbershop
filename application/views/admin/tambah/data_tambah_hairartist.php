<form action="<?= base_url('admin/tambah_aksi_hairartist') ?>" method="POST" style="padding: 20px;">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
        <?= form_error('nama','<div class="text-small text-danger">','</div>'); ?>
    </div>
    <div class="form-group">
        <label>Umur</label>
        <input type="text" name="umur" class="form-control">
        <?= form_error('umur','<div class="text-small text-danger">','</div>'); ?>
    </div>
    <div class="form-group">
        <label>Nomor telepon</label>
        <input type="text" name="no_telp" class="form-control">
        <?= form_error('no_telp','<div class="text-small text-danger">','</div>'); ?>
    </div>

    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
</form>