<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('admin/tambah_hairartist') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tambah Hair Artist</a>
    </div>

    <div class="card-body">
        <table id="example1" class= "table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>no</th>
                    <th>nama</th>
                    <th>umur</th>
                    <th>no_telp</th>
                    <th>action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach($hairartist as $hr) :?>
                <tbody>
                    <tr class="text-center">
                        <td><?= $no++?></td>
                        <td><?= $hr->nama?></td>
                        <td><?= $hr->umur?></td>
                        <td><?= $hr->no_telp?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $hr->id?>" class= "btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href ="<?= base_url('admin/delete_hairartist/' . $hr->id) ?>" class= "btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach?>
        </table>
    </div>
</div>

<!-- Modal -->
<?php foreach($hairartist as $hr) :?>
<div class="modal fade" id="edit<?= $hr->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Hair Artist</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        
        <form action="<?= base_url('admin/edit_hairartist/'. $hr->id) ?>" method="POST" style="padding: 20px;">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?= $hr->nama?>">
                <?= form_error('nama','<div class="text-small text-danger">','</div>'); ?>
            </div>
            <div class="form-group">
                <label>Umur</label>
                <input type="text" name="umur" class="form-control" value="<?= $hr->umur?>">
                <?= form_error('umur','<div class="text-small text-danger">','</div>'); ?>
            </div>
            <div class="form-group">
                <label>Nomor telepon</label>
                <input type="text" name="no_telp" class="form-control" value="<?= $hr->no_telp?>">
                <?= form_error('no_telp','<div class="text-small text-danger">','</div>'); ?>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
            </div>
        </form>
        </div>        
        </div>
  </div>
</div>
<?php endforeach?>

