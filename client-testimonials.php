<?php include_once"inc/header-link.php";?>

<style>
  /* .toggle-text {
  max-width: 400px;
  margin: 50px auto;
  text-align: center;
} */

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
</style>
<?php include_once"inc/navbar.php";?>

<!-- breadcumb -->
<section class="breadcumb" aria-label="breadcumb" style="background-image: url('img/breadcumb.jpg');">
  <div class="container-fluid">
   <div class="row">
    <div class="col-12">
      <div class="main">
        <div class="bread">
          <div class="bread-title">Client Testimonials</div>
          <!-- <div class="bread-subtitle">
            <a href="index.html">Home</a> 
              <span class="spacebread"></span> 
            <span>About</span>
          </div> -->
        </div>
      </div>
    </div>
   </div>
 </div>
</section>
<!-- breadcumb end -->

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

<?php include_once"inc/footer.php";?>