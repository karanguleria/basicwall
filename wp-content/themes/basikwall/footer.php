<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
global $post;
$homepage_id = 41;
$footer_logo = get_field('footer_logo',41);
?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

</div><!-- #page -->
<!-- Button -->
<div onclick="ScrollTop()" id="top-btn">
    <i class="fa fa-angle-up"></i>
</div>
<!-- -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row footer-row">
            <div class="col-lg-2 col-md-4">
                <div class="about">
                    <h5>Why Basikwall</h5>
                    <?php
                        wp_nav_menu(
                                array(
                                    'menu' => 'about',
                                    'items_wrap' => '%3$s',
                                    'container' => false,
                                    'depth' => 1,
                                    'link_before' => '<span>',
                                    'link_after' => '</span>',
                                    'fallback_cb' => false,
                                )
                        );
                        ?>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-half-offset">
                <div class="products">
                    <h5>PRODUCTS</h5>
                    <?php
                                wp_nav_menu(
                                        array(
                                            'menu' => 'products',
                                            'items_wrap' => '%3$s',
                                            'container' => false,
                                            'depth' => 1,
                                            'link_before' => '<span>',
                                            'link_after' => '</span>',
                                            'fallback_cb' => false,
                                        )
                                );
                                ?>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-half-offset">
                <div class="inspiration">
                    <h5>INSPIRATION</h5>
                    <?php
                        wp_nav_menu(
                                array(
                                    'menu' => 'inspiration',
                                    'items_wrap' => '%3$s',
                                    'container' => false,
                                    'depth' => 1,
                                    'link_before' => '<span>',
                                    'link_after' => '</span>',
                                    'fallback_cb' => false,
                                )
                        );
                        ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-half-offset">
                <div class="professionals">
                    <h5>PROFESSIONALS</h5>
                    <?php
                        wp_nav_menu(
                                array(
                                    'menu' => 'professionals',
                                    'items_wrap' => '%3$s',
                                    'container' => false,
                                    'depth' => 1,
                                    'link_before' => '<span>',
                                    'link_after' => '</span>',
                                    'fallback_cb' => false,
                                )
                        );
                        ?>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-half-offset">
                <div class="support">
                    <h5>SUPPORT</h5>
                    <?php
                        wp_nav_menu(
                                array(
                                    'menu' => 'support',
                                    'items_wrap' => '%3$s',
                                    'container' => false,
                                    'depth' => 1,
                                    'link_before' => '<span>',
                                    'link_after' => '</span>',
                                    'fallback_cb' => false,
                                )
                        );
                        ?>
                </div>
            </div>
        </div>
    </div>

    <!--Subscription Form-->
    <div class="container subscription-section">
        <div class="row align-items-center">
            <div class="col-md-6">
                <?php echo the_field('short_code_text',$homepage_id);   ?>
            </div>
            <div class="col-md-6 certified-icons">
                <ul class="d-flex flex-wrap align-items-center justify-content-end">
                    <?php 
		    $rows = get_field('certification_repeater',$homepage_id);
			if($rows){
				
				foreach($rows as $row){	
		  ?>
                    <li><img src="<?php echo $row['certification_images'] ?>" alt="partners"></li>
                    <?php
				}
				 echo "</ul>";
           }		  
		  ?>
            </div>
        </div>
    </div>

    <!--Logo And Social Media-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-4 social-icons">
                    <?php 
                        $social_icons = get_field('footer_social_icons',$homepage_id);
                        if($social_icons){
                        echo "<ul>";
                        foreach($social_icons as $social){	
                        ?>
                    <li><a href="<?php echo $social['url']?>" target="_blank"><?php echo $social['social_icon']?></a>
                    </li>
                    <?php }
                        echo "</ul>";
                            }		  
                        ?>
                </div>
                <div class="col-md-4 copyright">
                    <div class="site-logo text-center">
                        <p class="copyright-text"><?php the_field('copyright_text',$homepage_id); ?>
                            <?php echo date("Y"); ?></p>
                        <a href="<?php echo site_url()?>"><img src="<?php echo $footer_logo?>" /></a>
                    </div>
                </div>
                <div class="col-md-4 footer-links">
                    <?php 
                            $cta_text = get_field('privacy_repeater',$homepage_id);
                            if($cta_text){
                            echo "<ul>";
                            foreach($cta_text as $text){	
                            ?>
                    <li><a href="<?php echo $text['cta_link']?>"><?php echo $text['cta_text']?></a></li>
                    <?php }
                            echo "</ul>";
                                }		  
                        ?>
                </div>
            </div>
        </div>
    </div>

</footer><!-- footer -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<script src="https://basikwall.com/wp-content/themes/basikwall/js/lightbox.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>

	jQuery(document).ready(function ($) {
  // Hide all submenus initially
  $('#primary-menu-list ul.sub-menu').hide();
  $('#primary-menu-list li').removeClass('submenu_open');

  // Add toggle icons for 3rd level
  $('li.third-level-parent > a').each(function () {
    var $a = $(this);
    var textNodes = $a.contents().filter(function () {
      return this.nodeType === 3;
    });
    textNodes.each(function () {
      $(this).wrap('<span class="menu-text"></span>');
    });
    if ($a.find('.toggle-icon').length === 0) {
      $a.append(' <i class="fas fa-plus toggle-icon" aria-hidden="true"></i>');
    }
  });

  // Smooth slide animation
  function smoothSlide($submenu, show) {
    if (show) $submenu.stop(true, true).slideDown(350, 'swing');
    else $submenu.stop(true, true).slideUp(350, 'swing');
  }

  // Detect touch devices (mobile only, NOT tablets)
  const isTouch = 'ontouchstart' in window && window.innerWidth <= 767;

  if (!isTouch) {
    // 🖥 Desktop + Tablet hover behavio
    $('li.tool_menu').on('mouseenter', function () {
      var $li = $(this);
      smoothSlide($li.children('ul.sub-menu'), true);
      $li.addClass('submenu_open');
    }).on('mouseleave', function () {
      var $li = $(this);
      smoothSlide($li.children('ul.sub-menu'), false);
      $li.removeClass('submenu_open');
    });

    // Hover for third-level parent (open on side)
    $('li.third-level-parent').on('mouseenter', function () {
      var $li = $(this);
      var $submenu = $li.children('ul.sub-menu');

      // Position it on the right side
      $submenu.css({
        display: 'block',
        position: 'absolute',
        top: '0',
        left: '100%',
        opacity: 0
      }).animate({ opacity: 1 }, 200);

      $li.addClass('submenu_open');
      $li.find('.toggle-icon').removeClass('fa-plus').addClass('fa-minus');
    }).on('mouseleave', function () {
      var $li = $(this);
      var $submenu = $li.children('ul.sub-menu');

      $submenu.stop(true, true).fadeOut(150);
      $li.removeClass('submenu_open');
      $li.find('.toggle-icon').removeClass('fa-minus').addClass('fa-plus');
    });

  } else {
    // 📱 Touch devices - tap to toggle
    $('li.tool_menu > a, li.third-level-parent > a > i.toggle-icon').on('click', function (e) {
      var $li = $(this).parent('li');
      var $submenu = $li.children('ul.sub-menu');

      if ($submenu.length) {
        e.preventDefault();
        $li.toggleClass('submenu_open');
        smoothSlide($submenu, $li.hasClass('submenu_open'));
        $(this).find('.toggle-icon').toggleClass('fa-plus fa-minus');
      }
    });
  }
});










	 	
$(".slider").slick({
    dots: true,
    autoplay: true,
    fade: true,
    autoplaySpeed: 5000,
    infinite: true,
    cssEase: 'ease-in-out',
    touchThreshold: 100,
    arrows: false
});

 

// $(document).on('click', 'li.tool_menu', function(e) {
//     $(this).find("li.tool_menu > ul.sub-menu").toggle();
//     $(this).toggleClass('submenu_open');
// })


// $(document).on('click','menu-item-has-children', function (e) {
//     alert("asdasd");
//     $("ul.sub-menu").toggle();
//     $(this).toggleClass('submenu_open');
// })

$("select[name='country_auto-356'] option,select[name='country_auto-168'] option").each(function() {
    var option_value = $(this).attr('data-id');
    var option = $(this).val();
    if (option_value == '142' || option == '0' || option_value == '39' || option_value == '233') {} else {
        $(this).remove();
    }
});
</script>

<script>
/* Activates when scrolled */
document.addEventListener("scroll", yScroll);

function yScroll() {

    var yPos = window.pageYOffset;

    if (yPos > 10) {
        document.getElementById("top-btn").style.bottom = "10px";
    } else {
        document.getElementById("top-btn").style.bottom = "-50px";
    }
}

function ScrollTop() {

    var i = window.pageYOffset;

    var intervalTimer = setInterval(function() {
        if (i > 0) {
            window.scrollTo(0, i);
            i -= 15;
        } else {
            document.getElementById("top-btn").style.bottom = "-50px";
            clearInterval(intervalTimer);
        }
    }, 0.5);
}
</script>
<script>
//const galleryItem = document.getElementsByClassName("gallery-item");
//const lightBoxContainer = document.createElement("div");
//const lightBoxContent = document.createElement("div");
//const lightBoxImg = document.createElement("img");
//const lightBoxPrev = document.createElement("div");
//const lightBoxNext = document.createElement("div");
//
//lightBoxContainer.classList.add("lightbox");
//lightBoxContent.classList.add("lightbox-content");
//lightBoxPrev.classList.add("fa", "fa-angle-left", "lightbox-prev");
//lightBoxNext.classList.add("fa", "fa-angle-right", "lightbox-next");
//
//lightBoxContainer.appendChild(lightBoxContent);
//lightBoxContent.appendChild(lightBoxImg);
//lightBoxContent.appendChild(lightBoxPrev);
//lightBoxContent.appendChild(lightBoxNext);
//
//document.body.appendChild(lightBoxContainer);
//
//let index = 1;
//
//function showLightBox(n) {
//    if (n > galleryItem.length) {
//        index = 1;
//    } else if (n < 1) {
//        index = galleryItem.length;
//    }
//    let imageLocation = galleryItem[index-1].children[0].getAttribute("src");
//    lightBoxImg.setAttribute("src", imageLocation);
//}
//
//function currentImage() {
//    lightBoxContainer.style.display = "block";
//
//    let imageIndex = parseInt(this.getAttribute("data-index"));
//    showLightBox(index = imageIndex);
//}
//for (let i = 0; i < galleryItem.length; i++) {
//    galleryItem[i].addEventListener("click", currentImage);
//}
//
//function slideImage(n) {
//    showLightBox(index += n);
//}
//function prevImage() {
//    slideImage(-1);
//}
//function nextImage() {
//    slideImage(1);
//}
//lightBoxPrev.addEventListener("click", prevImage);
//lightBoxNext.addEventListener("click", nextImage);
//
//function closeLightBox() {
//    if (this === event.target) {
//        lightBoxContainer.style.display = "none";
//    }
//}
//lightBoxContainer.addEventListener("click", closeLightBox);

document.addEventListener('wpcf7mailsent', function(event) {
    $("#custom-text").html('No file chosen, yet.');
}, false);
 $(document).ready(function() {
   $('.gallery_section').css('display', 'none');
        //        -------------load more-------------
        $(".gallery_section").slice(0, 3).show();
        if ($(".gallery_section").length < 4) {
            $(".more_list_item").fadeOut('slow');
        }
        $(".more_list_item a").on('click', function(e) {
            e.preventDefault();
            $(".gallery_section:hidden").slice(0, 3).slideDown();
            if ($(".gallery_section:hidden").length === 0) {
                $(".more_list_item").fadeOut('slow');
            }
        });  
 });
</script>
<?php wp_footer(); ?>
</body>

</html>