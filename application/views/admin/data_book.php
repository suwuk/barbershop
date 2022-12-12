<?= $this->session->flashdata('pesan'); ?>
<div class="card" style="margin-bottom: 50px;">
    <div class="card-body">
        <table id="example1" class= "table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>no</th>
                    <th>nama</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>service</th>
                    <th>type</th>
                    <th>hair artist</th>
                    <th>price</th>
                    <th>date</th>
                    <th>action</th>

                </tr>
            </thead>
            <?php $no = 1;
            foreach($getbook as $gb) :?>
                <tbody>
                    <tr class="text-center">
                        <td><?= $no++?></td>
                        <td><?= $gb->name?></td>
                        <td><?= $gb->email?></td>
                        <td><?= $gb->phone?></td>
                        <td><?= $gb->service?></td>
                        <td><?= $gb->type?></td>
                        <td><?= $gb->hair_artist?></td>
                        <td><?= $gb->price?></td>
                        <td><?= $gb->date?></td>
                        <td>
                            <a href ="<?= base_url('admin/delete_book/' . $gb->id_booking) ?>" class= "btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach?>
        </table>
    </div>
</div>