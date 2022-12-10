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
                            <a href ="" class= "btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href ="" class= "btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach?>
        </table>
    </div>
</div>

