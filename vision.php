<style>
    .container{
    width:1400px;
    /* display: flex;
    margin-right: auto;
    margin-left: auto;
    position: relative; */
}
@media (min-width: 1200px){
.container {
    max-width: 100%;
    padding: 0 5%;
}
}
    </style>
<section class="team-details" style="background:#111d32;">
            <div class="container">
                <div class="section-title text-center mt-5">
                    <div class="section-sub-title-box">
                        <p style="color:yellow;font-size:25px;">VISION</p>
                        
                    </div>
                    <h2 class="section-title__title" style="color:white;font-size:50px;font-weight:700;">THE VISION We Have</h2>
                </div>
                <div class="team-details__top">
                    <div class="row">
                        <div class="col-xl-6 col-12">
                            <div class="team-details__top-left">
                                <div class="team-details__top-img">
                                    <img src="visionvi.jpg" class="project" alt="">
                                    <!-- <div class="team-details__big-text">Stolz</div> -->
                                    <!-- <div class="team-details__big-text" style="margin-left:20px; color:black;">Vision</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">
                            <div class="team-details__top-right">
                                <div class="team-details__top-content">
                                    
                                    <h3 class="team-details__top-name" style="color:white;font-size:60px;font-weight:700;">Veavix Vision</h3>
                                    
                                    <!-- <p class="team-details__top-text-1" style="color:#0361cb;font-size:30px;margin-left:10px;font-weight:400;">
                                        Looking for innovative IT solutions that won’t affect your bank? Let's assist
                                        you!
                                    </p> -->
                                    <p class="team-details__top-text-2" style="margin-top:-40px;margin-left:10px; color:white;">
                                        At Stolz, we strive for perfection in offering our clients top-notch services.
                                        Our goal is to reduce the cost of services like web and mobile app development.
                                        Giving SMEs an online presence, which is absolutely essential in today's
                                        society, will help them develop.<br>Our mission includes putting a smile on our
                                        clients' faces. We are proud of the duty we have taken on in this regard.</p>
                                        
                                        <p>
                                            <!-- <p class="team-details__top-text-3">Our mission includes putting a smile on our
                                                clients' faces. We are proud of the duty we have taken on in this regard.</p> -->
                                                <!-- <div class="team-details__big-text" style="margin-left: 20px; color:black;">Stolz</div> -->
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
</section>





                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
                    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script> -->
           <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
           
                                        <script>
                                             var controller = new ScrollMagic.Controller();
                         
                         // loop through all elements
                         $('.project').each(function() {
                         
                           // build a tween
                           var tween = TweenMax.from($(this), 0.3, {
                             autoAlpha: 0,
                             scale: 0.5,
                             y: '+=30',
                             rotation:5, 
                             transformOrigin:"left 50%",
                             ease: Linear.easeNone
                           });
                         
                           // build a scene
                           var scene = new ScrollMagic.Scene({
                               triggerElement: this
                             })
                             .setTween(tween) // trigger a TweenMax.to tween
                             .addTo(controller);
                         
                         });
                                             </script>

