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
                    <th>pesan</th>
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
                        <td><?= $gb->pesan?></td>
                        <td>
                            <a href ="<?= base_url().$gb->id_booking?>" class= "btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach?>
        </table>
    </div>
</div>