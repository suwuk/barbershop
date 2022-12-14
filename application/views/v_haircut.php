<article id="Haircuts">
              <h2>Mau gaya rambut apa?</h2>
              <div class="haircut line1">
                     <?php foreach($haircut as $haircuts) : ?>             
                            <div class="hair">
                                   <div class="icon">
                                          <img src="<?=base_url('assets/img/haircut/'.$haircuts->img);?>" alt="">
                                   </div>

                                   <div class="nameser">
                                          <p>Model rambut</p>
                                   </div>

                                   <div class="content jenis">

                                          <h3> <?= $haircuts->style ?> </h3>
                                   </div>

                                   <div class="content harga">
                                          <h3> <?= $haircuts->harga ?></h3>
                                   </div>

                                   <div class="content button">                                   
                                          <a href="<?= base_url()?>book/hairartist?type=<?= $haircuts->style?>&price=<?= $haircuts->harga?>&service=<?= $_GET['service'] ?>"><div class="pilih">Pilih</div></a>
                                   </div> 
                            </div>
                     <?php endforeach ?>
              </div>
</article>