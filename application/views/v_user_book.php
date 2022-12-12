<div class="tabels">
    <div class="tabel_judul">
        <h2>Bookingan Saya</h2>
    </div>
    <div class="tabel">
        <table cellpadding="8">
            <thead>
                <tr class="ub">
                    <th>No</th>
                    <th>Service</th>
                    <th>Type</th>
                    <th>Hair Artist</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Menu</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 0;  
                foreach($book as $books):
                $no++;?>
                <tr align="center" class="ub">
                    <td><?= $no?></td>
                    <td><?= $books->service?></td>
                    <td><?= $books->type?></td>
                    <td><?= $books->hair_artist?></td>
                    <td><?= $books->price?></td>
                    <td><?= $books->date?></td>
                    <td>
                        <div class="detail">
                            <a href="<?= site_url('book/detail_book/'.$books->id_booking)?>">Detail</a>
                        </div>
                    </td>    
                </tr>
                <?php endforeach?>                 
            </tbody>
        </table>
    </div>
</div>