
<section class="u-clearfix u-section-1" id="sec-5d57">
      <div class="u-clearfix u-sheet u-sheet-1">
        <style>
            h1{text-align:center;
            margin : 40px;
            padding : 40px;
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;}
            img{
              float: middle;
              margin-bottom:20px;
              margin-left: 40px;
              margin-left:600px;
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
              margin-left: 300px;
              margin-right:300px;
              margin-top:50px;
            }
            h4{
              float: right;
              font-size: 15px;
              margin-right:300px;
            }
            h5{
                float: middle;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-size: 20px;
                margin-left: 300px;
                margin-right:300px;
                margin-top:50px;
            }
        </style>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h1 class="u-text u-text-default u-text-2" ><?php echo $article['judul']?></h1>
                <?php 
                    $image = $article['photo'];
                ?>
                    <img src = <?php echo $image?> width="350" height="250">
              </div>
                <h4 class="u-text u-text-4"><?php echo $article['tanggal']?><br>
                    <br>
                </h4>
                  <h3 class="u-text u-text-3"><?php echo $article['paragraph1']?>
                    <br>
                  </h3>
                  <h3 class="u-text u-text-3"><?php echo $article['paragraph2']?>

                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php
    if($this->session->userdata('status')=='logged in'):?>
    <div class="container pb-cmnt-container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-info">
                <div class="panel-body">
                <form action="<?php echo base_url()."index.php/Comment/add"; ?>" method="POST">
                    <input type="hidden" id="userid" value=<?php $this->session->userdata('nama')?>> 
                    <input type="hidden" id="articleid" value=<?php $article['id']?>> 
                    <input type="text" id="comment" placeholder="Write your comment here!" class="pb-cmnt-textarea">
                    <button class="btn btn-primary pull-right" type="button">Share</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
    else:
    ?>
    <button action="<?php echo base_url()."index.php/Pages/login"?>">Click here to login to post a comment!</button>
<?php endif?>

<style>
    .pb-cmnt-container {
        font-family: Lato;
        margin-top: 100px;
    }

    .pb-cmnt-textarea {
        resize: none;
        padding: 20px;
        height: 130px;
        width: 100%;
        border: 1px solid #F2F2F2;
    }
</style>
</section>
