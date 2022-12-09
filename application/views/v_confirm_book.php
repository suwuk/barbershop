<article id="Confirm">
              <h2>CONFIRM BOOK</h2>
              <div class="confirm line1">

                     <div class="cnf">
                            <p>To reserve the service, please complete and submit the confirm booking form</p>
                            <hr>

                            <form action="">
                                <table cellpadding="8">
                                    <tr>
                                        <td class="nm" width="20%">Name</td>
                                        <td width="80%">:  <input type="text" name="" id="" class="isi"></td>
                                    </tr>

                                    <tr>
                                        <td>Email</td>
                                        <td>:  <input type="text" name="" id="" class="isi"></td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>:  <input type="text" name="" id="" class="isi"></td>
                                    </tr>
                                    <tr>
                                        <td>Service</td>
                                        <td>:  <?= $_GET['service'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Type</td>
                                        <td>:  <?= $_GET['type'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Hair artist</td>
                                        <td>:  <?= $_GET['hairartist'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td>:  <?= $_GET['price'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Date</td>
                                        <td>:  <input type="datetime-local" name="" id=""></td>
                                    </tr>
                                    <tr>
                                        <td>Place</td>
                                        <td>:  Depok</td>
                                    </tr>

                                </table>
                                <!-- Email       :  <input type="text" name="" id=""><br>
                                Phone       :  <input type="text" name="" id=""><br>
                                Service     :  <br>
                                Type        :  <br>
                                Hairartist  :  <br>
                                Price       :  <br>
                                Date        :  <input type="datetime-local" name="" id=""><br>
                                Place       :  <br> -->
                                <textarea name="" id="" cols="30" rows="10" placeholder="Catatan tambahan untuk hair artist (Optional)"></textarea>

                            </form>
                     </div>
              </div>

</article>