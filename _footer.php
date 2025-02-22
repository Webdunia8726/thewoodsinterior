<?php debug_backtrace() || header("Location: 404");?>

<footer id="footer">

<footer class="bg-dark text-white pt-4">
    <div class="container">
        <div class="row text-center text-md-start">
            <!-- About Section -->
            <div class="col-md-4">
                <h5 class="fw-bold">About Us</h5>
                <p>We provide top-notch Carpenter & Electrical services for homes and businesses. Your satisfaction is our priority!</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4">
                <h5 class="fw-bold">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Services</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Gallery</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="col-md-4">
                <h5 class="fw-bold">Follow Us</h5>
                <div>
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-linkedin fa-lg"></i></a>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="text-center mt-4 pb-3">
            <p class="mb-0">&copy; 2024 All Rights Reserved | Your Company Name</p>
        </div>
    </div>
</footer>

    <div class="container py-2 text-center">

      <div class="copyright">

        &copy;Copyright 2022 <strong><span> <a style="color: white;text-decoration: none;" href="./">thewoodsinterior.com

</a></span></strong>. All Rights Reserved | <a href="privacy-policy">Privacy Policy</a>

      </div>

    </div>

  </footer>


  <script src="assets/js/jquery.min.js"></script>

  <script src="assets/js/all.min.js"></script>



  <script src="assets/js/fontawesome.min.js"></script>

  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="assets/js/main.js"></script>



      </div>



    </div>

  </div>

</div>









            <div class="two_buttons_footer">
            <button type="button" class="btn btn-primary footer_button1" onclick="window.location.href='tel:+919140012929'">
    Call Now
</button>




              <a href="https://wa.me/919140012929/?text=Hello! I'm contacting you regarding your Interior Design services." onclick='window.open("https://wa.me/919140012929/?text=Hello! I'm contacting you from your Interior design services")' target="_blank" class="call btn btn-primary">Whatsapp Now</a>

            </div>



<div class="rn-progress-parent">

    <svg class="rn-back-circle svg-inner" width="auto" height="auto" viewBox="-1 -1 102 102">

        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />

    </svg>

</div>


<!-- FontAwesome Icons -->
<script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>


<script src="assets/js/backtotop.min.js"></script>

<script type="text/javascript">

// setTimeout(function(){

//       $('#exampleModal').modal('show');

//     }, 5000);

$(function () {

  var twoToneButton = document.querySelector(".twoToneButton");



  twoToneButton.addEventListener(

    "click",

    function () {

      twoToneButton.innerHTML = "";

      twoToneButton.classList.add("spinning");



      setTimeout(function () {

        twoToneButton.classList.remove("spinning");

        twoToneButton.innerHTML = "Send Enquiry";

      }, 7000);

    },

    false

  );

});

$(function () {

  var twoToneButton2 = document.querySelector(".twoToneButton2");



  twoToneButton2.addEventListener(

    "click",

    function () {

      twoToneButton2.innerHTML = "";

      twoToneButton2.classList.add("spinning");



      setTimeout(function () {

        twoToneButton2.classList.remove("spinning");

        twoToneButton2.innerHTML = "Send Enquiry";

      }, 7000);

    },

    false

  );

});

$(function () {

  var twoToneButton3 = document.querySelector(".twoToneButton3");



  twoToneButton3.addEventListener(

    "click",

    function () {

      twoToneButton3.innerHTML = "";

      twoToneButton3.classList.add("spinning");



      setTimeout(function () {

        twoToneButton3.classList.remove("spinning");

        twoToneButton3.innerHTML = "Send Enquiry";

      }, 7000);

    },

    false

  );

});

!function(e){e.fn.jTruncate=function(n){n=e.extend({length:300,minTrail:20,moreText:"more",lessText:"less",ellipsisText:"...",moreAni:"",lessAni:""},n);return this.each(function(){obj=e(this);var s=obj.html();if(s.length>n.length+n.minTrail&&-1!=(t=s.indexOf(" ",n.length))){var t=s.indexOf(" ",n.length),i=s.substring(0,t),l=s.substring(t,s.length-1);obj.html(i+'<span class="truncate_ellipsis">'+n.ellipsisText+'</span><span class="truncate_more">'+l+"</span>"),obj.find(".truncate_more").css("display","none"),obj.append('<div class="clearboth"><a href="#" class="truncate_more_link">'+n.moreText+"</a></div>");var r=e(".truncate_more_link",obj),a=e(".truncate_more",obj),o=e(".truncate_ellipsis",obj);r.click(function(){return r.text()==n.moreText?(a.show(n.moreAni).css("display","inline"),r.text(n.lessText),o.css("display","none")):(a.hide(n.lessAni),r.text(n.moreText),o.css("display","inline")),!1})}})}}(jQuery);

$('.testi_content').jTruncate({

length: 70,

minTrail: 0,

moreText: "Read More",

lessText: "Read Less",

ellipsisText: " ...",

moreAni: "fast",

lessAni: 1000

});



</script>

