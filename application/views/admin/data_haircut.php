<?= $this->session->flashdata('pesan'); ?>
<div class="card" style="margin-bottom: 50px;">
    <div class="card-header">
        <p>Data Haircut</p>
        <a href="<?= base_url()?>admin/tambah_service_haircut"   class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tambah Haircut</a>
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
            foreach($gethaircut as $gth) :?>
                <tbody>
                    <tr class="text-center">
                        <td><?= $no++?></td>
                        <td><?= $gth->style?></td>
                        <td><?= $gth->harga?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $gth->id?>" class= "btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href ="" class= "btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach?>
        </table>
    </div>
</div>

<!-- Modal -->
<?php foreach($gethaircut as $gth) :?>
<div class="modal fade" id="edit<?= $gth->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Hair Artist</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        
        <form action="<?= base_url('admin/edit_haircut/'. $gth->id) ?>" method="POST" style="padding: 20px;">
            <div class="form-group">
                <label>Style</label>
                <input type="text" name="style" class="form-control" value="<?= $gth->style?>">
                <?= form_error('style','<div class="text-small text-danger">','</div>'); ?>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?= $gth->harga?>">
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