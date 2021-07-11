<section class="u-clearfix u-section-1" id="sec-5d57">
      <div class="u-clearfix u-sheet u-sheet-1">
        <style>
            h1{text-align:center;
            margin : 40px;
            padding : 40px;
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;}
            img{
              float: left;
              margin-bottom:20px;
              margin-left: 40px;
            }
            h2{
              font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
              float: middle;
              font-size: 35px;
              font-weight: bold;
              margin-left: 500px;
              margin-right:300px;
            }
            h3{
              float: middle;
              font-size: 20px;
              margin-left: 500px;
              margin-right:300px;
            }
            h4{
              float: right;
              font-size: 15px;
              margin-right:300px;
            }
        </style>
        <h1 class="u-text u-text-default u-text-1">Tea Time</h1>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <?php foreach($article as $a){ ?>  
          <div class="u-layout">
            <div class="u-layout-row">
              <?php 
                $image = $a['photo'];
              ?>
                  <img src = <?php echo $image?> width="350" height="250">
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h2 class="u-text u-text-default u-text-2" ><?php echo $a['judul']?></h2>
                  <h3 class="u-text u-text-3"><?php echo $a['paragraph1']?>
                  <a href="<?php echo base_url('index.php/Article/specific/'.$a['id']); ?>">View more...</a><br>
                    <br>
                  </h3>
                  <h4 class="u-text u-text-4"><?php echo $a['tanggal']?><br>
                    <br>
                  </h4>
                  <br clear="all" />
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
</div>
