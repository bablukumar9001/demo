
<style>
 


/* *:focus,
*:active {
  outline: none !important;
  -webkit-tap-highlight-color: transparent;
} */

.footer1 {
  /* font-family: "Poppins", sans-serif; */
  position: relative;
  bottom: 0px;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-direction: column;
  padding: 20px 0px;
  background: rgb(0, 0, 15);
  /* border-top: aliceblue 5px solid; */
}

.footer1 p {
  color: aliceblue;
}

.social {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content:center;
}

.wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  padding-bottom: 40px;
}

.wrapper .icon {
  position: relative;
  background: aliceblue;
  color: rgb(0, 0, 15);
  border-radius: 50%;
  margin: 10px;
  width: 50px;
  height: 50px;
  font-size: 18px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip {
  position: absolute;
  top: 0;
  font-size: 14px;
  background: aliceblue;
  color: aliceblue;
  /* font-family: "Poppins", sans-serif; */
  padding: 5px 8px;
  border-radius: 5px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip::before {
  position: absolute;
  content: "";
  height: 8px;
  width: 8px;
  background: aliceblue;
  top: -3px;
  left: 50%;
  transform: translate(-50%) rotate(45deg);
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .icon:hover .tooltip {
  top: 60px;
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
}

.wrapper .icon:hover span,
.wrapper .icon:hover .tooltip {
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}

.wrapper .linkedin:hover,
.wrapper .linkedin:hover .tooltip,
.wrapper .linkedin:hover .tooltip::before {
  background: #0077b5;
  color: aliceblue;
}

.wrapper .facebook:hover,
.wrapper .facebook:hover .tooltip,
.wrapper .facebook:hover .tooltip::before {
  background: #4267b2;
  color: aliceblue;
}

.wrapper .twitter:hover,
.wrapper .twitter:hover .tooltip,
.wrapper .twitter:hover .tooltip::before {
  background: #1da1f2;
  color: aliceblue;
}

.wrapper .instagram:hover,
.wrapper .instagram:hover .tooltip,
.wrapper .instagram:hover .tooltip::before {
  background: radial-gradient(
    circle at 30% 107%,
    #fdf497 0%,
    #fdf497 5%,
    #fd5949 45%,
    #d6249f 60%,
    #285aeb 90%
  );
  color: aliceblue;
}

.wrapper .github:hover,
.wrapper .github:hover .tooltip,
.wrapper .github:hover .tooltip::before {
  background: #333;
  color: aliceblue;
}

.footer1 .social span i{
  display:flex;
  justify-content:center;
  text-align:center;
  align-items:center;
}
</style>

    <div class="footer1">
        <div class="social">
          <p>Follow me on social media</p>
          <ul class="wrapper">
            <a href="#" target="_blank">
              <li class="icon linkedin">
                <span class="tooltip" >LinkedIn</span>
                <span><i class="fab fa-linkedin" ></i></span>
              </li>
            </a>
            <a href="#" target="_blank">
              <li class="icon github">
                <span class="tooltip" >GitHub</span>
                <span ><i class="fab fa-github" ></i></span>
              </li>
            </a>
            <a href="#" target="_blank">
              <li class="icon facebook">
                <span class="tooltip" >Facebook</span>
                <span><i class="fab fa-facebook-f" ></i></span>
              </li>
            </a>
            <a href="#" target="_blank">
              <li class="icon instagram">
                <span class="tooltip" >Instagram</span>
                <span><i class="fab fa-instagram " ></i></span>
              </li>
            </a>
            <a href="#" target="_blank">
              <li class="icon twitter">
                <span class="tooltip" >Twitter</span>
                <span><i class="fab fa-twitter" ></i></span>
              </li>
            </a>
           
            
          </ul>
        </div>
        <!-- <div class="final_text"></div> -->
       
</div>
