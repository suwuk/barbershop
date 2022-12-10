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
                            <a href ="" class= "btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href ="" class= "btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach?>
        </table>
    </div>
</div>


