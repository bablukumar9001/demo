<!-- why choose stolz -->
<style>
    
    .chooses{
        position: relative;
        padding-left: 55px;
        font-size:30px;
       
    }
    .chooses::before{
       
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    
    transform: translateY(-50%);
    height: 5px;
    width: 50px;
    background: #ffc631;
    }

  

.border  {
padding:20px;
}

.feature-one__single:hover {
  transform: translateY(-10px);
}
.feature-one {
  position: relative;
  display: block;
  padding: 60px 0 90px;
}

.feature-one__inner {
  position: relative;
  display: block;
  counter-reset: count;
}

.feature-one__single {
  position: relative;
  display: block;
  background-color: rgb(255, 255, 255);
  box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.07);
  border-radius: var(--insur-bdr-radius);
  margin-bottom: 30px;
  -webkit-transition: all 500ms ease;
  transition: all 500ms ease;
  z-index: 1;
}

.feature-one__single:hover {
  transform: translateY(-10px);
}

.feature-one__single-inner {
  position: relative;
  display: block;
  padding: 132px 50px 32px;
  /* border-radius: var(--insur-bdr-radius); */
  overflow: hidden;
  z-index: 1;
}

.feature-one__single-inner:before {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  content: "";
  background-color: black;
  border-radius: 4%;
  transition: all 500ms ease;
  transform: translate3d(0px, 100%, 0px);
  z-index: -1;
}

.feature-one__single:hover .feature-one__single-inner:before {
  transform: translate3d(0px, 0, 0px);
}

.feature-one__icon {
  position: absolute;
  left: -40px;
  top: -90px;
  border-radius: 50%;
  background-image: -moz-linear-gradient(90deg, rgb(1, 95, 201) 0%, rgb(12, 224, 255) 100%);
  background-image: -webkit-linear-gradient(90deg, rgb(1, 95, 201) 0%, rgb(12, 224, 255) 100%);
  background-image: -ms-linear-gradient(90deg, rgb(1, 95, 201) 0%, rgb(12, 224, 255) 100%);
  width: 197px;
  height: 197px;
  -webkit-transition: all 500ms ease;
  transition: all 500ms ease;
}

.feature-one__single:hover .feature-one__icon {
  background-image: -moz-linear-gradient(0deg, rgb(12, 224, 255) 0%, rgb(1, 95, 201) 100%);
  background-image: -webkit-linear-gradient(0deg, rgb(12, 224, 255) 0%, rgb(1, 95, 201) 100%);
  background-image: -ms-linear-gradient(0deg, rgb(12, 224, 255) 0%, rgb(1, 95, 201) 100%);
}

.feature-one__icon .house {
  font-size: 65px;
  color: var(--insur-white);
  position: relative;
  display: inline-block;
  top: 107px;
  left: 81px;
  -webkit-transition: all 500ms linear;
  transition: all 500ms linear;
  -webkit-transition-delay: 0.1s;
  transition-delay: 0.1s;
}

.feature-one__single:hover .feature-one__icon .house {
  transform: scale(.9);
}

.feature-one__count {
  position: absolute;
  top: 50px;
  right: 54px;
  height: 45px;
  width: 56px;
  text-align: center;
}

.feature-one__count:before {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  color: transparent;
  -webkit-text-stroke: 1px #e0e4e8;
  font-size: 60px;
  line-height: 45px;
  font-weight: 700;
  counter-increment: count;
  content: counters(count, ".", decimal-leading-zero);
  letter-spacing: var(--insur-letter-spacing);
  transition: all 200ms linear;
  transition-delay: 0.1s;
}

.feature-one__single:hover .feature-one__count:before {
  -webkit-text-stroke: 1px black;
}

.feature-one__shape {
  position: absolute;
  bottom: 0;
  right: 0;
  -webkit-transition: all 500ms ease;
  transition: all 500ms ease;
  transition-delay: 400ms;
  transform: translateX(100%);
  z-index: -1;
}

.feature-one__single:hover .feature-one__shape {
  transform: translateX(0%);
}

.feature-one__shape img {
  width: auto;
  mix-blend-mode: luminosity;
  opacity: 0.07;
}

.feature-one__title {
  font-size: 24px;
  font-weight: 700;
  letter-spacing: var(--insur-letter-spacing);
  line-height: 34px;
  margin-bottom: 14px;
}

.feature-one__title a {
  color: var(--insur-black);
  -webkit-transition: all 500ms ease;
  transition: all 500ms ease;
}

.feature-one__single:hover .feature-one__title a {
  color: var(--insur-white);
}

.feature-one__text {
  letter-spacing: var(--insur-letter-spacing);
  -webkit-transition: all 500ms ease;
  transition: all 500ms ease;
}

.feature-one__single:hover .feature-one__text {
  color: #97a2b7;
}
.whychoseus img{
  border-radius: 10%;
}
.pchose{
  font-weight: 500;
    line-height: 1.6;
    margin-bottom: 20px;
    color: #5d5c5c;
    font-size: 16px;
}



</style>
<section >
    <div class="container "  >
       
        <div class="feature-one__inner whychoseus"  >
            <div class="row">
                
                <div class="col-lg-4 col-12 wow fadeInUp  "  data-wow-delay="100ms">
                   <h4 class="chooses mt-3" >Why choose veavix</h4>
                   <h2 style="font-weight:700;margin-bottom:10px;" class="mt-4"><span style="color:#0361cb;">Design </span> Future <br>
                   with Excellence</h2>
                   <p class="pchose">Veavix is one stop solution for all your digital needs. Our business is to build yours.</p>
                   <ul>
                   <li class="elementor-icon-list-item" style="line-height:1.5;margin-bottom:0px;">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check-circle"></i>						</span>
										<span class="elementor-icon-list-text">Futuristic Technology</span>
									</li>
                  <li class="elementor-icon-list-item" style="line-height:1.5;margin-bottom:0px;">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check-circle"></i>						</span>
										<span class="elementor-icon-list-text">Promise to our clients</span>
									</li>
                  <li class="elementor-icon-list-item" style="line-height:1.5;margin-bottom:0px;">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check-circle"></i>						</span>
										<span class="elementor-icon-list-text">Perfection with intention</span>
									</li>
                 
                   </ul>
              
                </div>
               
                <style>
              
   


.border {
      border-radius: 6px!important;
      border: 1px solid #333a65!important;
    cursor: pointer;
    box-shadow: none;
}
.border:hover{
border-radius: 6px!important;
    border: 1px solid #ffac00!important;
    background:#333a65;
}
/* .border .feature-one__title a{
  color:yellow;
} */
.border:hover .feature-one__title a{
  color: #ffac00;;
}
.border:hover .feature-one__text {
  color:white !important;
}



                  </style>
                <div class="col-lg-4 col-12 wow fadeInUp " data-wow-delay="200ms">
                    <div class="border p-4 feature-one__single choseusback">
                     
                      <div class="house" >

                    <img src="research.svg" style="width: 150px;height:120px; margin-bottom:30px;" alt=""> 
                  </div>
                    
                    <!-- <div class="feature-one__count count"></div> -->
                    <div class="feature-one__count"></div>
                            <h3 class="feature-one__title"><a href="about.php">	Analysis and Research</a></h3>
                            <p class="feature-one__text">For effective strategy and cost-cutting, appropriate research and analysis are conducted. </p>
                          
                    </div>
                </div>
               
                <div class="col-lg-4 col-12 wow fadeInUp " style="margin-bottom:20px;" data-wow-delay="300ms">
                    <div class="border p-4  feature-one__single  ">
                        <div class="house" >
                    <img src="chat.svg" style="width: 150px;height:120px;margin-bottom:30px;" alt=""> </div>
                    <div class="feature-one__count"></div>
                         
                            <h3 class="feature-one__title"><a href="about.php"> 	Prestige and negotiation</a></h3>
                            <p class="feature-one__text">One of our greatest assets is our ability to be flexible, and we are willing to bargain in accordance with the demands of the customer. </p>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-12 wow fadeInUp  "  data-wow-delay="400ms">
                    <div class="border p-4  feature-one__single  "><div class="house" >
                    <img src="monitor.svg" style="width: 150px;height:120px;margin-bottom:30px;" alt=""> </div>
                    <div class="feature-one__count"></div>
                         
                            <h3 class="feature-one__title"><a href="about.php"> 	Creative and inventive answers</a></h3>
                            <p class="feature-one__text">Our staff members are experts who think creatively and offer viable solutions. </p>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-12 wow fadeInUp  " data-wow-delay="500ms">
                    <div class="border p-4 feature-one__single   "><div class="house" >
                    <img src="trasparency.svg" style="width: 150px;height:120px;margin-bottom:30px;" alt=""> </div>
                    <div class="feature-one__count"></div>
                         
                            <h3 class="feature-one__title"><a href="about.php"> 	Transparency and simplicity of use</a></h3>
                            <p class="feature-one__text">Integrity is one of our core ethical values. This demonstrates our dedication to being sincere about a project.</p>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-12 wow fadeInUp " data-wow-delay="600ms">
                    <div class="border p-4 feature-one__single   "><div class="house" >
                    <img src="deal.svg" style="width: 150px;height:120px;margin-bottom:30px;" alt=""> </div>
                    <div class="feature-one__count"></div>
                         
                            <h3 class="feature-one__title"><a href="about.php"> Committed to our Clients</a></h3>
                            <p class="feature-one__text">We're dedicated to supporting our clients who seek to create truly frictionless, secure, and accessible applications. </p>
                       
                    </div>
                </div>
                
               
            </div>
        </div>
</div>

</section>

