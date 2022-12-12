<article id="Confirm">
    <h2>Detail Book</h2>
    <div class="confirm line1">
        <div class="cnf">
            <table cellpadding="8">
                <tr>
                    <td class="nm" width="20%">Name</td>
                    <td width="80%">:  <?= $book->name?></td>
                </tr>
                

                <tr>
                    <td>Email</td>
                    <td>: <?= $book->email?> </td>
                </tr>


                <tr>
                    <td>Phone</td>
                    <td>:  <?= $book->phone?> </td>
                </tr>


                <tr>
                    <td>Service</td>
                    <td>:  <?= $book->service?> </td>
                </tr>


                <tr>
                    <td>Type</td>
                    <td>:  <?= $book->type?> </td>
                </tr>


                <tr>
                    <td>Hair artist</td>
                    <td>:  <?= $book->hair_artist?> </td>
                </tr>


                <tr>
                    <td>Price</td>
                    <td>:  <?= $book->price?> </td>
                </tr>

                
                <tr>
                    <td>Date</td>
                    <td>:  <?= $book->date?> </td>
                </tr>

                <tr>
                    <td><a href ="<?= base_url('book/delete_book/' . $book->id_booking) ?>" class="btn_batal_book" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Batalkan</a></td>
                </tr>

            </table>
        </div>
    </div>
</article>