

<style>
 
    
    .item {
        position: relative;
        top: 0;
        left: 0;
        width: 100vw;
        min-height: 30vh;
        /* padding: 1em; */
        box-sizing: border-box;
        transition: transform 0.5s ease-in-out;
        font-size: 3em;
        text-align: center;
        padding-top: 10vh;
       
    }
    
    .item:nth-child(even):not(:first-child) {
        transform: rotate(90deg);
        transform-origin: top left;
    }
    
    .item:nth-child(odd):not(:first-child) {
        transform: rotate(-90deg);
        transform-origin: top right;
    }
    
    .item.in:not(:first-child) {
        transform: rotate(0deg);
        transition: transform 0.5s ease-in-out;
    }
    
    .item-1 {
        /* background-color: #ccc; */
        color: #f00;
    }
    
    .item-2 {
        /* background-color: #444; */
        color: #f0f;
    }
    
    .item-3 {
        /* background-color: #222; */
        color: #0f0;
    }
    #page{
        overflow: hidden;
    }
    .bg-gradient7 {
    background: #ffe2e2;
    background: -moz-linear-gradient(top, #ffe2e2 0%, #fff9f4 100%);
    background: -webkit-linear-gradient(top, #ffe2e2 0%, #fff9f4 100%);
    background: linear-gradient(to bottom, #ffe2e2 0%, #fff9f4 100%);
}
</style>
<style>
            .mt30{
                margin-top:30px;
            }
            .wide-sblock {
    display: flex;
    text-align: left;
    padding: 30px 20px;
}
.wide-sblock {
    display: inline-flex;
    text-align: left;
    padding: 30px 20px;
}
.s-block {
    background: #fff;
    /* text-align: center; */
    background-size: 200%;
    background-position: top right;
    background-repeat: no-repeat;
    /* text-align: center; */
    padding: 50px 20px;
    margin: 0;
    position: relative;
    border: 1px solid #d4f0ff;
    -webkit-border-radius: 8px;
    border-radius: 8px;
    -webkit-box-shadow: 0 3.4px 2.7px -30px rgb(0 0 0 / 6%), 0 8.2px 8.9px -30px rgb(0 0 0 / 7%), 0 25px 40px -30px rgb(0 0 0 / 20%);
    box-shadow: 0 3.4px 2.7px -30px rgb(0 0 0 / 6%), 0 8.2px 8.9px -30px rgb(0 0 0 / 7%), 0 25px 40px -30px rgb(0 0 0 / 20%);
}
.s-card-icon {
    width: 80px;
    margin: 0 auto 30px;
}

.img-fluid {
    max-width: 100%;
    height: auto;
}
img {
    vertical-align: middle;
    border-style: none;
}
.s-block-contant {
    margin: 0 0 0 20px;
    /* padding-left:40px; */
}

.s-block h4 {
    margin: 0 0 10px 0;
    font-size: 22px;
    line-height: 32px;
}
.s-block p {
    font-size: 17px;
    line-height: 28px;
}
.width{}

        </style>
        <section style="padding:0;">

    <div id="page " class="bg-gradient7" >
        <div id="item-1" class="item item-1">
            <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-10 ">
                <div class="common-heading ptag" style="z-index:0;">
                    <span style="   color: #ffae07;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: 18px;
    font-weight: 400;
    /* margin: 0 0 15px 0; */
    display: block;
" >WELCOME TO VEAVIX</span>
                    <h2  class="second-color">Why choose veavix</h2>
                    <p class="mb30">
                    Veavix is renowned for offering top-notch services that are trustworthy and economical. We have a lot to offer and are experts in our field.
                    </p>
                </div>
            </div>
        </div>
            </div>

        </div>
        <div id="item-2" class="item item-2" style="margin-top:20px;padding-top:0px;">
        <div class="container">
            <div class="row">
        <div class="col-lg-6  col-sm-6 width col-12 mt30">
<div class="s-block wide-sblock">
    <div class="s-card-icon">
        <img src="teama.svg" class="img-fluid" alt="" srcset="">
    </div>
<div class="s-block-contant">
    <h4 class="second-color">	Dealing with clients like you..</h4>
    <p>Like you, our clientele placed their trust in our abilities.</p>
</div>
</div>
            </div>
            <div class="col-lg-6 col-sm-6 col-12 width mt30">
<div class="s-block wide-sblock">
    <div class="s-card-icon">
        <img src="link.svg" class="img-fluid" alt="" srcset="">
    </div>
<div class="s-block-contant">
    <h4 class="second-color">	Total technical proficiency.</h4>
    <p>We offer technological answers to your problems or missions.</p>
</div>
</div>
            </div>
</div>
</div>
</div>
        <div id="item-3" class="item item-3" style="margin-top:-70px;padding-top:50px;">
        <div class="container">
            <div class="row">
            <div class="col-lg-6 col-sm-6 col-12 width mt30">
<div class="s-block wide-sblock">
    <div class="s-card-icon">
        <img src="tech.svg" class="img-fluid" alt="" srcset="">
    </div>
<div class="s-block-contant">
    <h4 class="second-color" >	Total technical proficiency.</h4>
    <p>We offer technological answers to your problems or missions.</p>
</div>
</div>
            </div>
            <div class="col-lg-6 col-sm-6 col-12 width mt30">
<div class="s-block wide-sblock">
    <div class="s-card-icon">
        <img src="hi.svg" class="img-fluid" alt="" srcset="">
    </div>
<div class="s-block-contant">
    <h4 class="second-color">		Amiable and warm in demeanour.</h4>
    <p>You can expect courteous and cordial help from us as a customer.</p>
</div>
</div>
            </div>
        </div>
</div>
</div>
        <div id="item-4" class="item item-2" style="margin-top:-70px;padding-top:50px;">
        <div class="container">
            <div class="row">
        <div class="col-lg-6 col-sm-6 col-12 width mt30">
<div class="s-block wide-sblock">
    <div class="s-card-icon">
        <img src="badge.svg" class="img-fluid" alt="" srcset="">
    </div>
<div class="s-block-contant">
    <h4 class="second-color">	Superior quality delivered on schedule.</h4>
    <p>Deployed projects are of the greatest calibre, and deadlines are always fulfilled.</p>
</div>
</div>
            </div>
            <div class="col-lg-6 col-sm-6 col-12 width mt30">
<div class="s-block wide-sblock">
    <div class="s-card-icon">
        <img src="tin.svg" class="img-fluid" alt="" srcset="">
    </div>
<div class="s-block-contant">
    <h4 class="second-color">		Continual and efficient communication.</h4>
    <p>Regularly interact with the client to improve clarity.</p>
</div>
</div>
            </div>
        </div>
</div>
</div>
        <!-- <div id="item-5" class="item item-3" style="margin-top:40px;"></div> -->
        <div id="item-6" class="item item-2"></div>
    </div>
</div>
</div>

</section>

   

