<?= $this->session->flashdata('pesan'); ?>
<div class="card" style="margin-bottom: 50px;">
    <div class="card-header">
        <a href="<?= base_url('admin/tambah_produk') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tambah Produk</a>
    </div>

    <div class="card-body">
        <table id="example1" class= "table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>no</th>
                    <th>nama produk</th>
                    <th>harga</th>
                    <th>stok</th>
                    <th>action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach($getproduk as $gtp) :?>
                <tbody>
                    <tr class="text-center">
                        <td><?= $no++?></td>
                        <td><?= $gtp->nama_produk?></td>
                        <td><?= $gtp->harga?></td>
                        <td><?= $gtp->stok?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $gtp->id_produk?>" class= "btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href ="" class= "btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach?>
        </table>
    </div>
</div>

<!-- Modal -->
<?php foreach($getproduk as $gtp) :?>
<div class="modal fade" id="edit<?= $gtp->id_produk?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        
        <form action="<?= base_url('admin/edit_produk/'. $gtp->id_produk) ?>" method="POST" style="padding: 20px;">
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" value="<?= $gtp->nama_produk?>">
                <?= form_error('nama_produk','<div class="text-small text-danger">','</div>'); ?>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?= $gtp->harga?>">
                <?= form_error('harga','<div class="text-small text-danger">','</div>'); ?>
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?= $gtp->stok?>">
                <?= form_error('stok','<div class="text-small text-danger">','</div>'); ?>
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
