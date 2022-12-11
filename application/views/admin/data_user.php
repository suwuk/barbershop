<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-body">
        <table id="example1" class= "table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>no</th>
                    <th>nama</th>
                    <th>email</th>
                    <th>password</th>
                    <th>is_active</th>
                    <th>action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach($user as $usr) :?>
                <tbody>
                    <tr class="text-center">
                        <td><?= $no++?></td>
                        <td><?= $usr->nama?></td>
                        <td><?= $usr->email?></td>
                        <td><?= $usr->password?></td>
                        <td><?= $usr->is_active?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $usr->id?>" class= "btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href ="" class= "btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach?>
        </table>
    </div>
</div>

<!-- Modal -->
<?php foreach($user as $usr) :?>
<div class="modal fade" id="edit<?= $usr->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Hair Artist</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        
        <form action="<?= base_url('admin/edit_member/'. $usr->id) ?>" method="POST" style="padding: 20px;">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?= $usr->nama?>">
                <?= form_error('nama','<div class="text-small text-danger">','</div>'); ?>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?= $usr->email?>">
                <?= form_error('email','<div class="text-small text-danger">','</div>'); ?>
            </div>
            <div class="form-group">
                <label>Aktivasi User</label>
                <input type="text" name="is_active" class="form-control" value="<?= $usr->is_active?>">
                <?= form_error('is_active','<div class="text-small text-danger">','</div>'); ?>
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