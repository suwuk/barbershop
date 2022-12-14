<article id="Confirm">
              <h2>CONFIRM BOOK</h2>
              <?= $this->session->flashdata('pesan'); ?>
              <div class="confirm line1">

                     <div class="cnf">
                            <p>To reserve the service, please complete and submit the confirm booking form</p>
                            <hr>

                            <form action="<?= base_url('book/tambah_book') ?>" method="POST">
                                <table cellpadding="8">
                                    <tr>
                                        <td class="nm" width="20%">Name</td>
                                        <td width="80%">:  <input type="text" name="name" required id="" value="<?= $us['nama']; ?>"class="isi"></td>
                                    </tr>

                                    <tr>
                                        <td>Email</td>
                                        <td>:  <input type="text" name="email" required id="" value="<?= $us['email']; ?>" class="isi"></td>
                                    </tr>

                                    <tr>
                                        <td>Phone</td>
                                        <td>:  <input type="text" name="phone" required id="" class="isi"></td>
                                    </tr>

                                    <tr>
                                        <td>Service</td>
                                        <td>:  <input type="text" name="service" required value="<?= $_GET['service'] ?? ''?>"></td>
                                    </tr>

                                    <tr>
                                        <td>Type</td>
                                        <td>:  <input type="text" name="type" required value="<?= $_GET['type'] ?? ''?>"></td>
                                    </tr>

                                    <tr>
                                        <td>Hair artist</td>
                                        <td>:  <input type="text" name="hair_artist" required value="<?= $_GET['hairartist'] ?? ''?>"></td>
                                    </tr>

                                    <tr>
                                        <td>Price</td>
                                        <td>:  <input type="text" name="price" required value="<?= $_GET['price'] ?? ''?>"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Date</td>
                                        <td>:  <input type="datetime-local" required  name="date" value=""></td>
                                    </tr>
                                    
                                </table>
                                <!-- <textarea name="" id="" cols="30" rows="10" placeholder="Catatan tambahan untuk hair artist (Optional)"></textarea> -->
                                <input type="submit" value="Submit" id="Submit" style="background-color: #E80000; color: white; height: 30px; width: 80px; margin: 10px; font-weight: bold;">    
                                <input type="reset" value="Reset" id="Reset" style="background-color: #12dd00; color: white; height: 30px; width: 80px; margin: 10px 0 10px 0; font-weight: bold;"> 
                            </form>
                        </div>
                    </div>
                    
</article>
                <!-- <?= form_error('date','<div class="text-small text-danger">','</div>'); ?> -->