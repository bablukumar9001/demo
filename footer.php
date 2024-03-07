

    <style>
      .ftr-details li {
    padding: 0 0 15px 0;
}
.footer-address-list li {
    color: #6a6a8e;
    display: flex;
    padding: 0 0 5px 0;
}
.footer-address-list li > span {
    position: relative;
    top: 5px;
}
.footer-address-list li i {
    margin: 0 15px 0 0;
    display: initial;
    font-size: 21px;
}
.footer-address-list li p {
    font-weight: 600;
    font-size: 18px;
    /* font-family: "Poppins", sans-serif; */
    line-height: 25px;
}
.footer-address-list li p span {
    display: flex;
    font-weight: 400;
    font-size: 15px;
    /* font-family: "Open Sans", sans-serif; */
}
.footer-address-list li a {
    color: #333a65;
    /* font-family: "Open Sans", sans-serif; */
    font-size: 16px;
    line-height: 24px;
}
.link-hover a::after {
    content: "";
    width: 0;
    height: 1px;
    bottom: 0;
    position: absolute;
    left: auto;
    right: 0;
    z-index: -1;
    -webkit-transition: width 0.6s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;
    -o-transition: width 0.6s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;
    transition: width 0.6s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;
    background: #ffac00;
}
.link-hover a {
    /* color: green ; */
    /* font-family: "Poppins", sans-serif; */
    display: inline-block;
    padding: 3px 0;
    position: relative;
    overflow: hidden;
    -webkit-transition: width 0.6s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;
    -o-transition: width 0.6s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;
    transition: width 0.6s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;
    z-index: 9999;
}

.link-hover a:hover{
  color: #ffac00;
}
  .link-hover a:hover::after {
   
      width: 100%;
      left: 0;
      right: auto;
  }
 



 .link-hover {
    -webkit-transition: 1.2s cubic-bezier(0.17, 0.85, 0.438, 0.99);
    -o-transition: 1.2s cubic-bezier(0.17, 0.85, 0.438, 0.99);
    transition: 1.2s cubic-bezier(0.17, 0.85, 0.438, 0.99);
}

    .footerpadding{
      /* padding-top:50px; */
      background-color:#fefcf8;
      z-index:1;
    }
    .footerpadding1{
padding-top:50px;
    }
    .footer-map img {
    animation: moveleftbounce 5s linear infinite;
}
@keyframes moveleftbounce {
  0% {
    transform: translateX(0);
}
50% {
    transform: translateX(-20px);
}
100% {
    transform: translateX(0);
}
}
@media only screen and (max-width: 767px){
.footer-map {
    display: none;
}}
      </style>
      <section class="footerpadding" style="padding: 0px 0;">

<footer class="footerpadding1"  >
   
    <div class="container ">
      <div class=" site-footer__top">
        <div class="row">
       
                <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="100ms">
                <div class="footer-widget__column footer-widget__contact clearfix">
                        <!-- <h3 class="footer-widget__title" style="color:#333a65;">Contact us</h3> -->
                        <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
            <img src="a.png" height="70" alt=""
                 loading="lazy" />
          </div>

          <p class="text-center">The Stolz team consists of idealists and forward-thinking individuals. We know how to make the best decisions and can utilise our knowledge to your benefit. Radical honesty is one of our basic values that guides our interactions with consumers.</p>

          <ul class="list-unstyled d-flex flex-row justify-content-center">
            <li>
              <a class="text-white px-2" href="#!">
                <i class="fab fa-facebook-square"></i>
              </a>
            </li>
            <li>
              <a class="text-white px-2" href="#!">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a class="text-white ps-2" href="#!">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
          </ul>
                       
                       
                      
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12  wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__contact clearfix">
                        <h3 class="footer-widget__title mb-30" style="color:#333a65;">Company</h3>
                        <ul class="footer-widget__contact-list list-unstyled clearfix footer-address-list link-hover">
                            <li><a href="">About us</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Technology</a></li>
                            <li><a href="">Contact us</a></li>
                            <li><a href="">About us</a></li>
                        </ul>
                  
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12  wow fadeInUp"  data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__gallery clearfix">
                        <h3 class="footer-widget__title mb-30" style="color:#333a65;">Important link</h3>
                       <ul class="footer-address-list link-hover">
                        <li><a href="">Web Development</a></li>
                        <li><a href="">Mobile App Development</a></li>
                        <li><a href="">E-Commerce Development</a></li>
                        <li><a href="">Customer Software Development</a></li>
                        <li><a href="">IT Strategy & Software Consulting</a></li>
                        <li><a href="">Blockchain Development</a></li>

                       </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12  wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__newsletter">
                        <h3 class="footer-widget__title mb-30" style="color:#333a65;">Support</h3>
                       <ul class="footer-address-list link-hover">
                      
						<li><span><i class="fa-solid fa-envelope"></i></span>
							<p> <a href="mailto:info@brancosoft.com">info@veavix.com</a></p>
						</li>
						<li><span><i class="fas fa-phone-alt"></i></span>
							<p> <a href="tel: +91 935 433 1163"> +91 7827530048</a></p>
						</li>
						<li><span><i class="fas fa-map-marker-alt"></i></span>
							<p style="color:#333a65;">Noida, India <span>  Sector-63, Noida, UP-201301,</span></p>
						</li>
						
					</ul>
                       
                       
                    </div>
                </div>
            </div>
        </div>
     
        <style>
       .link-hover1 a::after {
    content: "";
    width: 0;
    height: 1px;
    bottom: 0;
    position: absolute;
    left: auto;
    right: 0;
    z-index: 21;
    -webkit-transition: width 0.6s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;
    -o-transition: width 0.6s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;
    transition: width 0.6s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;
    background: #ffac00;
}
.link-hover1 a {
    color: #6a6a8e;
    /* font-family: "Poppins", sans-serif; */
    display: inline-block;
    padding: 3px 0;
    position: relative;
    overflow: hidden;
    -webkit-transition: width 0.6s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;
    -o-transition: width 0.6s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;
    transition: width 0.6s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;
 
}

  .link-hover1 a:hover::after {
      width: 100%;
      left: 0;
      right: auto;
  }



          
        </style>
        <div class="footer-bottom-area">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 " id="laststyle">
              <p class="">Copyright @2023 <strong> <span class="first-color">Veavix</span></strong> All rights reserved <a target="_blank" class="second-color" href="https://veavix.com/">veavix.com</a></p>
            </div>
            <div class="col-lg-6 col-md-6">
              <ul class="link-hover1"><li><a href="/privacy-policy">Privacy Policy</a></li>
              <li><a href="/terms-of-service">Terms &amp; Conditions</a></li>
            </ul></div></div></div>

            <style>
              @media only screen and (min-width: 992px) and (max-width: 1199px){
.footer-map {
    right: auto;
    left: 50%;
    transform: translateY(-50%) translateX(-50%);
    opacity: .55;
}}
       
.footer-map {
    position: absolute;
    right: 20%;
    top: 40%;
    transform: translateY(-40%);
    z-index:-1;
   
}

            </style>
            
    </div>
    <div class="footer-map">
                <img src="footer-map.png" alt="">
          </div>
</footer>
</section>



<script src="wow.js"></script> 
<script src="wowwow.js"></script>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="min.js"></script>

    <script src="easing.min.js"></script>

    <script src="slicnav.js"></script>
    <script src="custom.nav.js"></script>

    <script src="main.js"></script>

    <!-- new  -->

    <!-- about  -->
    <!-- welcome to veavix // -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script> -->
    
    
<!-- index  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.1/ScrollMagic.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script> -->



<script src="scriptnew.js"></script>
    <script src="scriptnew2.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>


<script src="welcometoveavix.js"></script>

  

</body>


</html>