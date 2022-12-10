<div class="card">
    <div class="card-header">
        <a href="<?= base_url('user/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tambah siswa</a>
    </div>

    <div class="card-body">
        <table id="example1" class= "table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>no</th>
                    <th>nama</th>
                    <th>email</th>
                    <th>password</th>
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