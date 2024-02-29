<?php include('header1.php');?>
<!---bradcrumb-->
<section>
<div class="breadcrumb">
   <div class="breacrumb_bcg_contactus">
   
   <div class="container">
  <div class="breadcrumb_content">
  <h3>Contact Us</h3>
      <h5>
        <a href="">Home / </a>Contact
      </h5>
  </div>
    </div>
    </div>
   </div>
  </div>
</section>

<!-------contact_cards---->

<section class="contact_cards">
    <div class="container">
        <div class="row">
            <div class="col-md-4 " style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInTop;">
                <div class="contact_outer">
                <i class="fa-solid fa-phone-volume"></i>
                <p>Call Us</p>
                <a href="tel:+03601 885399">+03601 885399</a>
                </div>
            </div>
            <div class="col-md-4"  style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInTop;">
            <div class="contact_outer">
            <i class="fa-solid fa-envelope-open-text"></i>
                <p>Email US</p>
                <a href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                </div>
            </div>
            <div class="col-md-4"  style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInTop;">
            <div class="contact_outer">
            <i class="fa-solid fa-location-dot"></i>
                <p>Address</p>
                <a href="">54B Tailstoi Tow, La city</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-----------map-------->
<section>
    <div class="container">
        <div class="map padingtb50">
        <div class="mapouter"><div class="gmap_canvas">
            <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=ambala&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                <a href="https://gachanox.io/">Gacha Nox</a></div>
                <style>.mapouter{position:relative;text-align:right;width:100%;height:600px;}
                .gmap_canvas {overflow:hidden;background:none!important;width:100%;height:600px;}
                .gmap_iframe {height:600px!important;}</style></div>

            <div class="contact_form_outr" style="visibility: visible; animation-duration: 1s; animation-delay: 3s; animation-name: fadeInleft;">
          <div class="cform_inr">
          <div class="contact_form">
                    <div class="contact_title">
                        <h3>Drop Us a Line</h3>
                        <p>Your email address will not be published.</p>
                    </div>
                    <form>
                        <input type="text" id="subname" placeholder="Name">
                        <input type="email" id="submail" placeholder="Email">
                        <textarea placeholder="Message" name="" id="" cols="30" rows="10"></textarea>
                        <input type="subsubmit" value="Send Message" id="sub1">
                    </form>
                </div>
          </div>
            </div>
        </div>
    </div>
</section>






<?php include('footer.php');?>