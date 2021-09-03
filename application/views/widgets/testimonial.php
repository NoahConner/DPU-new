
<?
$testimonial = $this->model_testimonial->find_all_active();
//debug($testimonial,1);
?>
<section class="content testimonial-sec">
        <div class="container">
          <div class="row cntr-content posRel">
            <div class="col-md-4 animate fadeInLeft">
              <div class="heading-sep">
              <span class="seperator-left green"></span>
            </div>
            <h2>What Our Valuable Clients Say</h2>
            <a href="<?=g('base_url')?>testimonial" class="primary-btn orange-btn">See All</a>
            </div>
            <div class="col-md-8 testimonail-col animate fadeInRight">
              <div class="testimonial-slider">
                <?php foreach ($testimonial as $key=> $value) {?>
                    <div class="item">
                      <div class="text">
                         <?=html_entity_decode($value['testimonial_content'])?>
                         <div class="auth-info">
                          <h3><?=$value['testimonial_name']?></h3>
                         </div>
                      </div>
                      <i class="icon-quote"></i>
                    </div>

              <?php } ?>
  
            
                  </div>
            </div>
          </div>
        </div>

      </section>