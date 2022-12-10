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
                            <a href ="" class= "btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href ="" class= "btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach?>
        </table>
    </div>
</div>