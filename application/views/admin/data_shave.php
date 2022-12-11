<?= $this->session->flashdata('pesan'); ?>
<div class="card" style="margin-bottom: 50px;">
    <div class="card-header">
        <p>Data Shave</p>
        <a href="<?= base_url()?>admin/tambah_service_shave" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tambah Shave</a>
    </div>

    <div class="card-body">
        <table id="example1" class= "table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>no</th>
                    <th>style</th>
                    <th>harga</th>
                    <th>action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach($getshave as $gts) :?>
                <tbody>
                    <tr class="text-center">
                        <td><?= $no++?></td>
                        <td><?= $gts->style?></td>
                        <td><?= $gts->harga?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $gts->id?>" class= "btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href ="<?= base_url('admin/delete_shave/' . $gts->id) ?>" class= "btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach?>
        </table>
    </div>
</div>

<!-- Modal -->
<?php foreach($getshave as $gts) :?>
<div class="modal fade" id="edit<?= $gts->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Shave</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        
        <form action="<?= base_url('admin/edit_shave/'. $gts->id) ?>" method="POST" style="padding: 20px;">
            <div class="form-group">
                <label>Style</label>
                <input type="text" name="style" class="form-control" value="<?= $gts->style?>">
                <?= form_error('style','<div class="text-small text-danger">','</div>'); ?>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?= $gts->harga?>">
                <?= form_error('harga','<div class="text-small text-danger">','</div>'); ?>
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
