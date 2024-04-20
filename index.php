<?php  include_once"inc/header-link.php";?>

<style>
    .moretext {
    display: none;
    }



.img-fill {
  width: 100%;
  display: block;
  overflow: hidden;
  position: relative;
  text-align: center;
}

.img-fill img {
  min-height: 100%;
  min-width: 100%;
  position: relative;
  display: inline-block;
  max-width: none;
}

*,
*:before,
*:after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.04);
}

.slick-slide {
  float: left;
  padding: 0;
}

/* ==== Slider Style === */
.Modern-Slider .item .img-fill {
  height: 100vh;
  background: #000;
}

.Modern-Slider .item .img-fill .info {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0px;
  left: 0px;
  /*background: rgba(0, 0, 0, 0.5);*/
  line-height: 100vh;
  text-align: center;
}

.Modern-Slider .item .img-fill img {
  /* filter: blur(5px); */
}

.Modern-Slider .item .info > div {
  display: inline-block !important;
  vertical-align: middle;
}

.banner-headding{
  line-height: 62px;
  font-size: 58px;
  font-weight: 700;
  font-family: 'Cairo', sans-serif;
  letter-spacing: 0px;
}

.banner-sub-headding{
    margin-top: 20px;
    line-height: 44px;
    font-family: 'Cairo', sans-serif;
    letter-spacing: 0px;
    font-size: 28px;
   
}
.Modern-Slider .item .info > h5 {
  display: inline-block !important;
  vertical-align: middle;
}

.Modern-Slider .NextArrow {
  position: absolute;
  top: 50%;
  right: 0px;
  width: 50px;
  height: 50px;
  background: rgba(0, 0, 0, 0.5);
  border: 0 none;
  margin-top: -22.5px;
  text-align: center;
  font: 20px/45px FontAwesome;
  color: #FFF;
  z-index: 5;
}
.Modern-Slider .NextArrow:before {
  content: "";
}
button:focus{
  outline: unset;
}
.Modern-Slider .PrevArrow {
  position: absolute;
  top: 50%;
  left: 0px;
  width: 50px;
  height: 50px;
  background: rgba(0, 0, 0, 0.5);
  border: 0 none;
  margin-top: -22.5px;
  text-align: center;
  font: 20px/45px FontAwesome;
  color: #FFF;
  z-index: 5;
}
.Modern-Slider .PrevArrow:before {
  content: "";
}

.Modern-Slider .item h3 {
 
  text-transform: uppercase;
  color: #FFF;
  /* animation: fadeOutRight 1s both; */
  margin: 0;
  padding: 0;
}

.Modern-Slider .item h5 {
  /* margin: 0; */
  padding: 0;

  color: #FFF;
  max-width: 600px;
  overflow: hidden;
  height: 60px;
  /* animation: fadeOutLeft 1s both; */
}

.more-btn-design, .more-btn-design:hover{
    text-decoration: none;
    font-weight: 600;
    position: relative;
    top: -2px;
    color: #30567a;
    text-shadow: 0px 1px 1px rgb(0 0 0 / 10%);
    background-color: #fff;
    border-radius: 0px;
}
.banner-goto-contact{
  display: flex;
  justify-content: center;
}



/* read more button code start here */
.toggle-text-content span {
  display: none;
}

.toggle-text-link {
  display: block;
  margin: 5px 0;
}
.testy-text span{
  margin: 0px 0;
}


@media(max-width:768px)
{
  .banner-headding{
  line-height: 62px;
  font-size: 48px;
  font-weight: 700;
  font-family: 'Cairo', sans-serif;
  letter-spacing: 0px;
}

.banner-sub-headding{
    margin-top: 20px;
    line-height: 34px;
    font-family: 'Cairo', sans-serif;
    letter-spacing: 0px;
    font-size: 28px;
   
  }
  .banner-goto-contact{
    margin-top: 20px;
  }
}
</style>

   
    <?php  include_once"inc/navbar.php";?>
      



    <div class="Modern-Slider">
  <!-- Item -->
  <div class="item">
    <div class="img-fill">
      <img src="images-slider/img-slide-1.jpg" alt="">
      <div class="info">
        <div>
          <h3 class="banner-headding" data-aos="fade-right">MODERN STYLE DESIGN</h3>
          <h5 class="banner-sub-headding" data-aos="fade-left">We Pride Ourselves on Being Builders</h5>

          <div class="banner-goto-contact">
            <a href="contact.php" class="btn more-btn-design">More Details</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- // Item -->
  <!-- Item -->
  <div class="item">
    <div class="img-fill">
      <img src="images-slider/img-slide-2.jpg" alt="">
      <div class="info">
        <div>
          <h3 class="banner-headding" data-aos="fade-right">TRADITIONAL STYLE DESIGN</h3>
          <h5 class="banner-sub-headding" data-aos="fade-left">Creating Traditional Style and Creative Solutions</h5>

          <div class="banner-goto-contact">
            <a href="contact.php" class="btn more-btn-design">More Details</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- // Item -->
  <!-- Item -->
  <div class="item">
    <div class="img-fill">
      <img src="images-slider/img-slide-3.jpg" alt="">
      <div class="info">
        <div>
          <h3 class="banner-headding" data-aos="fade-right">CONTEMPORY DESIGN </h3>
          <h5 class="banner-sub-headding" data-aos="fade-left">Next Level of Interior Design </h5>

          <div class="banner-goto-contact">
            <a href="contact.php" class="btn more-btn-design">More Details</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- // Item -->

</div> 





<!-- revolution slider -->
<section class="no-top no-bottom" aria-label="section-slider" style="display:none;">
<!-- home -->
    <div class="fullwidthbanner-container">
        <div id="revolution-slider-half">
              <ul>
                
                  <li data-transition="fade" data-slotamount="10" data-masterspeed="1200" data-delay="5000" data-autoplay="true"  data-nextslideatend="true">
                      <!--  BACKGROUND IMAGE -->
                      <img src="images-slider/img-slide-1.jpg" alt="" data-start="0" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="100" data-bgpositionend="center center"/>
                      <div class="tp-caption slide-big-heading sft"
                          data-x="30"
                          data-y="270"
                          data-speed="800"
                          data-start="400"
                          data-easing="easeInOutExpo"
                          data-endspeed="450">
                          Architecture Design
                      </div>

                      <div class="tp-caption slide-sub-heading sft"
                          data-x="30"
                          data-y="350"
                          data-speed="1000"
                          data-start="800"
                          data-easing="easeOutExpo"
                          data-endspeed="400">
                          We pride ourselves on being builders 
                      </div>

                      <div class="tp-caption btn-slider sfb"
                          data-x="30"
                          data-y="450"
                          data-speed="400"
                          data-start="800"
                          data-easing="easeInOutExpo">
                          <span class="shine"></span><a href="contact.php" >More Detail</a>
                      </div>

                  </li>
                  
                  <li data-transition="fade" data-slotamount="10" data-masterspeed="1200" data-delay="5000" data-autoplay="true"  data-nextslideatend="true">
                      <!--  BACKGROUND IMAGE -->
                      <img src="images-slider/img-slide-2.jpg" alt="" data-start="0" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="100" data-bgpositionend="center center"/>
                      <div class="tp-caption slide-big-heading sft"
                          data-x="30"
                          data-y="270"
                          data-speed="800"
                          data-start="400"
                          data-easing="easeInOutExpo"
                          data-endspeed="450">
                          Best Decor Interior
                      </div>

                      <div class="tp-caption slide-sub-heading sft"
                          data-x="30"
                          data-y="350"
                          data-speed="1000"
                          data-start="800"
                          data-easing="easeOutExpo"
                          data-endspeed="400">
                          Creating architectural and creative solutions
                      </div>

                      <div class="tp-caption btn-slider sfb"
                          data-x="30"
                          data-y="450"
                          data-speed="400"
                          data-start="800"
                          data-easing="easeInOutExpo">
                          <span class="shine"></span><a href="contact.php" >More Detail</a>
                      </div>

                  </li>

                  <li data-transition="fade" data-slotamount="10" data-masterspeed="1200" data-delay="5000" data-autoplay="true"  data-nextslideatend="true">
                      <!--  BACKGROUND IMAGE -->
                      <img src="images-slider/img-slide-3.jpg" alt="" data-start="0" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="100" data-bgpositionend="center center"/>
                      <div class="tp-caption slide-big-heading sft"
                          data-x="30"
                          data-y="270"
                          data-speed="800"
                          data-start="400"
                          data-easing="easeInOutExpo"
                          data-endspeed="450">
                          Conceptual Design
                      </div>

                      <div class="tp-caption slide-sub-heading sft"
                          data-x="30"
                          data-y="350"
                          data-speed="1000"
                          data-start="800"
                          data-easing="easeOutExpo"
                          data-endspeed="400">
                          Next Level of Interior Design
                      </div>

                      <div class="tp-caption btn-slider sfb"
                          data-x="30"
                          data-y="450"
                          data-speed="400"
                          data-start="800"
                          data-easing="easeInOutExpo">
                          <span class="shine"></span><a href="contact.php" >More Detail</a>
                      </div>

                  </li>
                 
              </ul>

              <div class="tp-bannertimer hide"></div>
          </div>
    </div>
<!-- home end -->
</section>
<!-- revolution slider end -->

<!-- section about home -->
<section class="no-top no-bottom bggray" aria-label="abouthome">
 <div class="container-fluid">
   <div class="row">
     <div class="col-md-6 p-0">
       <img src="img/abouthome.jpg" class="imgbg-col" alt="imghome" data-aos="zoom-in">
     </div>
     <div class="col-md-6 centered">
       <div class="detailcontent" data-aos="fade-left">
         <div class="subheading">ABOUT COMPNAY</div>
         <div class="heading">Elite Design Studio</div>
         <div class="textdetail">Elite Design Studio is a name synonymous with quality and excellence. Established in Pune, our objective has been to provide best interiors in Pune to homeowners, since inception. Every individual shares an intimate emotional bond with their home. Home is where we spend quality time with our loved ones, see our little ones grow and where we provide a peaceful abode to our parents. It is a place which is intimately ours.</div>
          <div class="btn-content mt-3">
            <span class="shine"></span>
            <a href="about.php">View More</a>
          </div>
       </div>
     </div>
   </div>
 </div> 
</section>
<!-- section about home end -->

<!-- section about home -->
<section class="no-top no-bottom" aria-label="abouthome">
 <div class="container-fluid">
   <div class="row">
     <div class="col-md-6 bgblack">
       <div class="detailcontent bgblack" data-aos="fade-right">
        <div class="textdetail">
            <ul class="about-part-2">
                <li>
                    <h3> <span class="material-symbols-outlined">
arrow_forward_ios
</span> We are Professional</h3>
                    <p>We deliver what you want, exactly like the same you feel.</p>
                </li>
                <li>
                    <h3> <span class="material-symbols-outlined">
arrow_forward_ios
</span>We are Friendly</h3>
                    <p>Considering you as our family / friends we are happy to help you with your requirements in more better manner.</p>
                </li>

                <li>
                    <h3> <span class="material-symbols-outlined">
arrow_forward_ios
</span>We are Passionate</h3>
                    <p>We have best employees to work with who all help us to complete the work in time.</p>
                </li>
            </ul>
        </div>
       
       </div>
     </div>
     <div class="col-md-6 p-0">
       <img src="img/aboutb.jpg" class="imgbg-col" alt="imghome" data-aos="zoom-in">
     </div>
   </div>
 </div> 
</section>
<!-- section about home end -->


<section aria-label="price"  style="">
 <div class="container-fluid">
   <div class="row p-3-vh">
        <div class="col-12 centered mb-5">
            <div class="detailcontent text-center p-0">
                <!-- <div class="subheading">TESTIMONIALS</div> -->
                <div class="heading">Our Packages</div>
            </div>
        </div>
    </div>

    <div class="row p-3-vh">
     <div class="col-md-4">
        <div class="pricelist price-box-pd-0" data-aos="fade-right">
          <div class="prices">
                <h5 class="bhk-hd">1 BHK PLAN</h5>
                <span>₹ 2.5</span>
                <span class="perms">Lacs</span>
            
          </div>
        
          <ul class="list price-box-pd-45">
            <li>1 Queen Bed </li>
            <li>1 Openable Wardrobe</li>
            <li>Sofa</li>
            <li>Center Table</li>
            <li>TV Unit</li>
            <li>Shoe Rack</li>
          </ul>
          <div class="btnpricelist price-box-pd-45">
            <div class="btn-content m-auto">
              <span class="shine"></span>
              <a href="contact.php">Contact Us</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="pricelist bgblack price-box-pd-0" data-aos="zoom-in">
            <div class="prices">
                <h5 class="bhk-hd">2 BHK PLAN</h5>
                <span>₹ 3.5</span>
                <span class="perms">Lacs</span>
            
          </div>
          <ul class="list price-box-pd-45">
            <li>2 Queen Bed </li>
            <li>2 Openable Wardrobe</li>
            <li>Sofa</li>
            <li>Center Table</li>
            <li>TV Unit</li>
            <li>Shoe Rack</li>
          </ul>
          <div class="btnpricelist price-box-pd-45">
            <div class="btn-content m-auto">
              <span class="shine"></span>
              <a href="contact.php">Contact Us</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="pricelist price-box-pd-0" data-aos="fade-left">
            <div class="prices">
                <h5 class="bhk-hd">3 BHK PLAN</h5>
                <span>₹ 4.5</span>
                <span class="perms">Lacs</span>
            
          </div>
          <ul class="list price-box-pd-45">
            <li>3 Queen Bed </li>
            <li>3 Openable Wardrobe</li>
            <li>Sofa</li>
            <li>Center Table</li>
            <li>TV Unit</li>
            <li>Shoe Rack</li>
          </ul>
          <div class="btnpricelist price-box-pd-45">
            <div class="btn-content m-auto">
              <span class="shine"></span>
              <a href="contact.php">Contact Us</a>
            </div>
          </div>
        </div>
      </div>

   </div>
 </div> 
</section>

<!-- section projects -->
<section aria-label="section" class="no-padding" style="display:none;">
  <div class='container-fluid'>
  <div class='row'>
    <div class="col-md-12 p-0">
      <div id="owl-projects" class="owl-carousel owl-theme slick slickproject">

        <div class='item'>
          <div class='bg'>
            <img
              src="img/projects/img1.jpg"
              class="img-fluid"
              alt="Imageteam"
            />
          </div>
          <div class='desc'>
            <div class='tag'>Interior</div>
            <div class='name'>Entertainment Unit</div>
          </div>
          <div class='icon'>
             <a href="project-detail.html">
              View Project
            </a>
          </div>
        </div>

        <div class='item'>
          <div class='bg'>
            <img
              src="img/projects/img2.jpg"
              class="img-fluid"
              alt="Imageteam"
            />
          </div>
          <div class='desc'>
            <div class='tag'>Furniture</div>
            <div class='name'>Mounted Unit</div>
          </div>
          <div class='icon'>
             <a href="project-detail.html">
              View Project
            </a>
          </div>
        </div>

        <div class='item'>
          <div class='bg'>
            <img
              src="img/projects/img3.jpg"
              class="img-fluid"
              alt="Imageteam"
            />
          </div>
          <div class='desc'>
            <div class='tag'>Interior</div>
            <div class='name'>Contemporary Wall</div>
          </div>
          <div class='icon'>
             <a href="project-detail.html">
              View Project
            </a>
          </div>
        </div>

        <div class='item'>
          <div class='bg'>
            <img
              src="img/projects/img4.jpg"
              class="img-fluid"
              alt="Imageteam"
            />
          </div>
          <div class='desc'>
            <div class='tag'>Interior</div>
            <div class='name'>Crockery Unit</div>
          </div>
          <div class='icon'>
             <a href="project-detail.html">
              View Project
            </a>
          </div>
        </div>

        <div class='item'>
          <div class='bg'>
            <img
              src="img/projects/img1.jpg"
              class="img-fluid"
              alt="Imageteam"
            />
          </div>
          <div class='desc'>
            <div class='tag'>Interior</div>
            <div class='name'>Entertainment Unit</div>
          </div>
          <div class='icon'>
             <a href="project-detail.html">
              View Project
            </a>
          </div>
        </div>

        <div class='item'>
          <div class='bg'>
            <img
              src="img/projects/img2.jpg"
              class="img-fluid"
              alt="Imageteam"
            />
          </div>
          <div class='desc'>
            <div class='tag'>Furniture</div>
            <div class='name'>Mounted Unit</div>
          </div>
          <div class='icon'>
             <a href="project-detail.html">
              View Project
            </a>
          </div>
        </div>

        <div class='item'>
          <div class='bg'>
            <img
              src="img/projects/img3.jpg"
              class="img-fluid"
              alt="Imageteam"
            />
          </div>
          <div class='desc'>
            <div class='tag'>Interior</div>
            <div class='name'>Contemporary Wall</div>
          </div>
          <div class='icon'>
             <a href="project-detail.html">
              View Project
            </a>
          </div>
        </div>

        <div class='item'>
          <div class='bg'>
            <img
              src="img/projects/img4.jpg"
              class="img-fluid"
              alt="Imageteam"
            />
          </div>
          <div class='desc'>
            <div class='tag'>Interior</div>
            <div class='name'>Crockery Unit</div>
          </div>
          <div class='icon'>
             <a href="project-detail.html">
              View Project
            </a>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>
</section>
<!-- section projects end -->



<!-- section gallery -->
<section class="no-padding" aria-label="gallery" style="display:none;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 p-0">
        <div id="w-gallery-column" class="w-gallery-container">
            <a class="w-gallery no-border" href="img/gallery/1.jpg">
                <img src="img/gallery/1.jpg" alt="" class="w-gallery-image">
                  <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>

            <a class="w-gallery no-border" href="img/gallery/2.jpg">
                <img src="img/gallery/2.jpg" alt="" class="w-gallery-image">
                <div class="content-gallery">
                  <span class="ti-plus"></span>
                </div>
                </a>

            <a class="w-gallery no-border" href="img/gallery/3.jpg">
                <img src="img/gallery/3.jpg" alt="" class="w-gallery-image">
                <div class="content-gallery">
                  <span class="ti-plus"></span>
                </div>
                </a>

            <a class="w-gallery no-border" href="img/gallery/4.jpg">
                <img src="img/gallery/4.jpg" alt="" class="w-gallery-image">
                <div class="content-gallery">
                  <span class="ti-plus"></span>
                </div>
                </a>

            <a class="w-gallery no-border" href="img/gallery/5.jpg">
                <img src="img/gallery/5.jpg" alt="" class="w-gallery-image">
                <div class="content-gallery">
                  <span class="ti-plus"></span>
                </div>
                </a>

            <a class="w-gallery no-border" href="img/gallery/6.jpg">
                <img src="img/gallery/6.jpg" alt="" class="w-gallery-image">
                <div class="content-gallery">
                  <span class="ti-plus"></span>
                </div>
                </a>

            <a class="w-gallery no-border" href="img/gallery/7.jpg">
                <img src="img/gallery/7.jpg" alt="" class="w-gallery-image">
                <div class="content-gallery">
                  <span class="ti-plus"></span>
                </div>
                </a>

          </div>
      </div>
    </div>
  </div>
</section>
<!-- section gallery end -->

<!-- section service -->
<section aria-label="section">
 <div class="conntainer-fluid">
    <div class="row p-3-vh">
        <div class="col-12 centered mb-5">
            <div class="detailcontent text-center p-0">
                <!-- <div class="subheading">TESTIMONIALS</div> -->
                <div class="heading">Our Services</div>
            </div>
        </div>
    </div>
    
   <div class="row p-3-vh">
     <div class="col-md-4">
       <div class="servcices" data-aos="fade-left">
         <div class="bgimg">
           <img src="img/gallery/service-2.png" alt="#">
         </div>
         <div class="content">
           <div class="icon">
             <img src="img/icon/comp.png" alt="#">
           </div>
           <div class="heading">Modular Kitchen</div>
           <div class="textdetail autoheight" style="min-height: 0px; max-height: none; height: 51px;">Modular kitchens are more common and popular today as opposed to traditional  </div>
           <div class="btn-content mt-3">
            <span class="shine"></span>
            <a href="modular-kitchen.php">View More</a>
          </div>
         </div>
       </div>
     </div>
     <div class="col-md-4" data-aos="fade-up">
       <div class="servcices">
         <div class="bgimg">
           <img src="img/gallery/service-3.png" alt="#">
         </div>
         <div class="content">
           <div class="icon">
             <img src="img/icon/lamp.png" alt="#">
           </div>
           <div class="heading">
           Bedroom
           </div>
           <div class="textdetail autoheight" style="min-height: 0px; max-height: none; height: 51px;">
          Your bedroom should be a space you look forward to returning to at the end of ... 
           </div>
           <div class="btn-content mt-3">
            <span class="shine"></span>
            <a href="bed.php">View More</a>
          </div>
         </div>
       </div>
     </div>
     <div class="col-md-4">
       <div class="servcices" data-aos="fade-right">
         <div class="bgimg">
           <img src="img/gallery/service-4.jpg" alt="#">
         </div>
         <div class="content">
           <div class="icon">
             <img src="img/icon/seet.png" alt="#">
           </div>
           <div class="heading">
           Sofa
           </div>
           <div class="textdetail autoheight" style="min-height: 0px; max-height: none; height: 51px;">
           A sofa is made up of many different parts, and every variety creates a distinct look and feel. 
           </div>
           <div class="btn-content mt-3">
            <span class="shine"></span>
            <a href="sofa.php">View More</a>
          </div>
         </div>
       </div>
     </div>
   </div>
 </div> 
</section>

<!-- section service -->



<!-- parallax section -->



<section id="section1" data-speed="8" data-type="background" style="padding-bottom:30px;">
    <div class="container">
        <div class="col-12 centered mb-5" style="padding-bottom: 30px;">
            <div class="detailcontent text-center p-0">
                <!-- <div class="subheading">TESTIMONIALS</div> -->
                <div class="heading">Our Process</div>
            </div>
        </div>

        <div class="parallax-container":>
            <div class="parallax-container-inner" data-aos="zoom-in">
            <div class="row">
<div class="col-lg-4 col-md-6">
<div class="feature-1">
<div class="icon-wrapper bg-primary-custom">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart-line" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5h-2v12h2V2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"></path>
<path fill-rule="evenodd" d="M0 14.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"></path>
</svg>
</div>
<div class="feature-1-content">
<h2>Design</h2>
<p class="process-para">Design is our passion! Our team of Top Interior Designers work with you to realize the home of your dreams. We work with different styles – Classical, Fusion, Modern, Industrial – to deliver a home you can be proud of.</p>
<p><a href="contact.php" class="btn btn-feature-1 px-4 ">View More</a></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="feature-1">
<div class="icon-wrapper bg-primary-custom">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-life-preserver" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
<path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"></path>
<path d="M11.642 6.343L15 5v6l-3.358-1.343A3.99 3.99 0 0 0 12 8a3.99 3.99 0 0 0-.358-1.657zM9.657 4.358L11 1H5l1.343 3.358A3.985 3.985 0 0 1 8 4c.59 0 1.152.128 1.657.358zM4.358 6.343L1 5v6l3.358-1.343A3.985 3.985 0 0 1 4 8c0-.59.128-1.152.358-1.657zm1.985 5.299L5 15h6l-1.343-3.358A3.984 3.984 0 0 1 8 12a3.99 3.99 0 0 1-1.657-.358z"></path>
</svg>
</div>
<div class="feature-1-content">
<h2>Execution</h2>
<p class="process-para">We build and execute home interiors to perfection. From fabulous false ceilings, glamorous kitchens, stunning wardrobes to luxurious sofas. Our team of craftsmen and supervisors transform dreams into reality.</p>
<p><a href="contact.php" class="btn btn-feature-1 px-4 ">View More</a></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="feature-1">
<div class="icon-wrapper bg-primary-custom">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-circle-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z"></path>
<path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z"></path>
</svg>
</div>
<div class="feature-1-content">
<h2>Visualisation</h2>
<p class="process-para">Imagine you home before you even step in! We create stunning interior concepts in 3D, using advanced technologies to give you a realist feel of what your completed home would look like.</p>
<p><a href="contact.php" class="btn btn-feature-1 px-4 ">View More</a></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="feature-1">
<div class="icon-wrapper bg-primary-custom">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wallet2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M2.5 4l10-3A1.5 1.5 0 0 1 14 2.5v2h-1v-2a.5.5 0 0 0-.5-.5L5.833 4H2.5z"></path>
<path fill-rule="evenodd" d="M1 5.5A1.5 1.5 0 0 1 2.5 4h11A1.5 1.5 0 0 1 15 5.5v8a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 13.5v-8zM2.5 5a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-11z"></path>
</svg>
</div>
<div class="feature-1-content">
<h2>Onsite Supervision</h2>
<p class="process-para">Our talented team of Project Managers and Site Supervisors ensure that your Home Interiors are a hassle free and pleasant experience.</p>
<p><a href="contact.php" class="btn btn-feature-1 px-4 ">View More</a></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="feature-1">
<div class="icon-wrapper bg-primary-custom">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-briefcase" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6h-1v6a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-6H0v6z"></path>
<path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v2.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 6.884V4.5zM1.5 4a.5.5 0 0 0-.5.5v1.616l6.871 1.832a.5.5 0 0 0 .258 0L15 6.116V4.5a.5.5 0 0 0-.5-.5h-13zM5 2.5A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z"></path>
</svg>
</div>
<div class="feature-1-content">
<h2>Quality</h2>
<p class="process-para">We take quality seriously, so seriously that we only use the finest materials and finishes in all our interior projects. The name Carafina stands for Quality & Perfection.</p>
<p><a href="contact.php" class="btn btn-feature-1 px-4 ">View More</a></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="feature-1">
<div class="icon-wrapper bg-primary-custom">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calculator-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"></path>
<path d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z"></path>
</svg>
</div>
<div class="feature-1-content">
<h2>After Sales Support</h2>
<p class="process-para">We hold ourselves to such high standards that we provide an Industry leading 10 year warranty on all interiors undertaken by us.</p>
<p><a href="contact.php" class="btn btn-feature-1 px-4 ">View More</a></p>
</div>
</div>
</div>
</div>
                
            </div>
        </div>

    </div>
</section>



<!-- section testimony -->
<section aria-label="blog">
 <div class="container-fluid">
   <div class="row p-3-vh">
    <div class="col-12 centered mb-5">
      <div class="detailcontent text-center p-0">
         <!-- <div class="subheading">TESTIMONIALS</div> -->
         <div class="heading">Our Client</div>
       </div>
    </div>
    <div class="col-12">
      <div id="owl-testimony" class="owl-carousel owl-theme">

      <div class='item clientboxcont' data-aos="zoom-in">
          <div class="content-testy">
            <div class="testy-text ">

            <span class="toggle-text">I had never ever thought that the space of the kitchen would be transformed in such an excellent way. Every corner of the kitchen was designed in a way that nicely attracted all our visitors, guest, and friends.  </span>
            </div>
            <div class="user">
              <!--<div class="img">-->
              <!--  <img src="img/testimony/1.jpg" alt="imgtesty">-->
              <!--</div>-->
              <div class="name">
               Rajat Singh
              </div>
              <!-- <div class="title">
                Our Client
              </div> -->
            </div>
          </div>
        </div>

        <div class='item clientboxcont'  data-aos="zoom-in">
          <div class="content-testy">
            <div class="testy-text">
              <span class="toggle-text">I took the services for the interior design in which the bed design really fascinated me because it imparts and ultimate peace and comfort, especially after the busiest day. Certainly, some magic resides there in the designer’s hand and ideas. 
              </span>

            </div>
            <div class="user">
              <!--<div class="img">-->
              <!--  <img src="img/testimony/2.jpg" alt="imgtesty">-->
              <!--</div>-->
              <div class="name">
                Harsh Verma
              </div>
              <!-- <div class="title">
                Our Client
              </div> -->
            </div>
          </div>
        </div>

        <div class='item clientboxcont'  data-aos="zoom-in">
          <div class="content-testy">
            <div class="testy-text">
            <span class="toggle-text">Whenever I seat on the comfortable sofa in a relaxed mode with peace inside my home, I always say thanks to the elite design for their best services. </span>
            </div>
            <div class="user">
              <!--<div class="img">-->
              <!--  <img src="img/testimony/3.jpg" alt="imgtesty">-->
              <!--</div>-->
              <div class="name">
                Rashmi Gupta
              </div>
              <!-- <div class="title">
                Our Client
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>
<!-- section testimony end -->

<!-- section company home -->
<section class="no-top no-bottom bggray" aria-label="company" style="display:none;">
 <div class="container-fluid">
   <div class="row">
     <div class="col-md-6 p-0">
       <img src="img/company.jpg" class="imgbg-col" alt="imghome">
     </div>
     <div class="col-md-6 centered">
       <div class="detailcontent">
         <div class="subheading">OUR SKILLS</div>
         <div class="heading">Our Company Values</div>
         <div class="textdetail">The basic philosophy of our studio is to create individual,
aesthetically stunning solutions for our customers by lightning-fast
development of projects employing unique style and architecture.
Even if you don't have a ready sketch of what you want - we will help you
to get the result you dreamed of.</div>
       </div>
     </div>
   </div>
 </div> 
</section>
<!-- section company home end -->

<!-- section logo -->
<section aria-label="section" class='bggray'  style="padding-bottom: 30px;">
  <div class="container-fluid">

    <div class="row p-3-vh">
        <div class="col-12 centered mb-3">
            <div class="detailcontent text-center p-0">
                <!-- <div class="subheading">TESTIMONIALS</div> -->
                <div class="heading">Our Trusted Partners</div>
            </div>
        </div>
    </div>
  <div class='row p-3-vh'>
    
    <div class='col-12'>
      <div id="owl-logo" class='owl-carousel owl-theme'> 
        <div class='item'>
            <img
              src="img/ourclients/partner-1.png"
              class="img-fluid"
              alt="Imageteam"
            />
        </div>
        <div class='item'>
            <img
              src="img/ourclients/partner-2.png"
              class="img-fluid"
              alt="Imageteam"
            />
        </div>
        <div class='item'>
            <img
              src="img/ourclients/partner-3.png"
              class="img-fluid"
              alt="Imageteam"
            />
        </div>
        <div class='item'>
            <img
              src="img/ourclients/partner-4.png"
              class="img-fluid"
              alt="Imageteam"
            />
        </div>
        <div class='item'>
            <img
              src="img/ourclients/partner-5.png"
              class="img-fluid"
              alt="Imageteam"
            />
        </div>
        <div class='item'>
            <img
              src="img/ourclients/partner-6.png"
              class="img-fluid"
              alt="Imageteam"
            />
        </div>
        <div class='item'>
            <img
              src="img/ourclients/partner-7.png"
              class="img-fluid"
              alt="Imageteam"
            />
        </div>
        <div class='item'>
            <img
              src="img/ourclients/partner-8.png"
              class="img-fluid"
              alt="Imageteam"
            />
        </div>

        <div class='item'>
            <img
              src="img/ourclients/partner-9.png"
              class="img-fluid"
              alt="Imageteam"
            />
        </div>

        <div class='item'>
            <img
              src="img/ourclients/partner-10.png"
              class="img-fluid"
              alt="Imageteam"
            />
        </div>

        <div class='item'>
            <img
              src="img/ourclients/partner-11.png"
              class="img-fluid"
              alt="Imageteam"
            />
        </div>

        <div class='item'>
            <img
              src="img/ourclients/partner-12.png"
              class="img-fluid"
              alt="Imageteam"
            />
        </div>
    
      </div>
    </div>

  </div>
  </div>
</section>
<!-- section logo end -->



<?php include_once"inc/footer.php";?>