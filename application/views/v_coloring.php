<article id="Colorings">
              <h2>Mau warna rambut apa?</h2>
              <div class="coloring line1">
                     <?php foreach($coloring as $colorings) : ?>
                     <div class="color">
                            <div class="icon">
                                   <img src="<?=base_url('assets/img/coloring/'.$colorings->img);?>" alt="">
                            </div>

                            <div class="nameser">
                                   <p>Model cat</p>
                            </div>
                            
                            <div class="content jenis">
                                   <h3><?= $colorings->style ?></h3>
                            </div>

                            <div class="content harga">
                                   <h3><?= $colorings->harga ?></h3>
                            </div>

                            <div class="content button">
                                   <a href="<?= base_url() ?>book/hairartist?type=<?= $colorings->style ?>&price=<?= $colorings->harga ?>&service=<?= $_GET['service'] ?>"><div class="pilih">Pilih</div></a>
                            </div> 
                     </div>
                     <?php endforeach?>
              </div>
</article>