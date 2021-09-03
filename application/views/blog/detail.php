<style>
    p {
    line-height: 1.6;
    margin-bottom: 15px;
    color: #00000;
    font-weight: 600;
}
.mainListing {
    background-color: white;
    box-shadow: none;
    border-radius: 5px;
    overflow: hidden;
}
</style>


<div class="main-cont"> 

  <section class="inner-banner-content1">
    <div class="container">
      <div class="row">
        <div class="col-md-12 banner-ele">
          

          <!-- <h4 class="animate flipInX">About Us</h4> -->
          <h1 class="animate flipInX" data-wow-delay="1s">Blog Detail</h1>


        </div>
      </div>
    </div>
  </section>

  <section class="content  animate slideInUp">
    <div class="container">
      <div class="row cntr-content">
        <div class="col-md-12">

      <!--listing start-->
            <div class="row">
              <!--blcok start-->
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-12">
                <div class="mainListing">
                  <div class="imgCon">
                 <center> <img src="<?=get_image($blog['blog_image_path'],$blog['blog_image'])?>" style="width:500px;"></center>
                </div>
                 
                </div>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-12">
                <div class="texCon">
                  <p class="title"><?=$blog['blog_title']?></p>
                  <div class="date-detail"><span><?=date('F d, Y', strtotime($blog['blog_date']))?></span> | <span>By <?=$blog['blog_by']?></span></div>
                  <?=html_entity_decode($blog['blog_detail'])?>
               
                </div>
              </div>
              <!--blcok end-->
              
          </div>
      <!--listing end--> 



        </div>
      </div>
    </div>
  </section>


