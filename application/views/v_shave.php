<article id="Shaves">
              <h2>Rapihkan janggut dan kumismu?</h2>
              <div class="shave line1">
                     <?php foreach($shave as $shaves) : ?>
                     <div class="shave1">
                            <div class="icon">
                                   <img src="<?=base_url('assets/img/shave/'.$shaves->img);?>" alt="">
                            </div>

                            <div class="nameser">
                                   <p>Rapihkan janggutmu + kumismu</p>
                            </div>
                            
                            <div class="content jenis">
                                   <h3><?= $shaves->style ?></h3>
                            </div>

                            <div class="content harga">
                                   <h3><?= $shaves->harga ?></h3>
                            </div>

                            <div class="content button">
                                   <a href="<?= base_url() ?>book/hairartist?type=<?= $shaves->style ?>&price=<?= $shaves->harga ?>&service=<?= $_GET['service'] ?>"><div class="pilih">Pilih</div></a>
                            </div> 
                     </div>
                     <?php endforeach?>
              </div>

</article>