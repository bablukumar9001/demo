




<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap'); */
   
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        /* font-family: 'Poppins', sans-serif; */
    }
    
    section.sectionbe {
        height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        /* background: #fae9fb; */
        position: relative;
    }
    
    section.sectionbe::before {
        content: '';
        position: absolute;
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
        /* background: #ba24c2; */
        /* clip-path: polygon(86% 0, 100% 0, 100% 100%, 60% 100%); */
    }
    
    .container19 {
        /* z-index: 12; */
        max-width: 1050px;
        width: 100%;
        background: #fff;
        border-radius: 12px;
        margin: 0 20px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
    }
    
    .container19 .content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 25px 20px;
    }
    
    .content .image-box {
        max-width: 55%;
    }
    
    .content .image-box img {
        width: 100%;
    }
    
    .content .topic {
        font-size: 22px;
        font-weight: 500;
        /* color: #ba24c2; */
    }
    
    .content form {
        width: 100%;
        /* margin-right: 80px; */
    }
    
    .content .input-box {
        height: 50px;
        width: 100%;
        margin: 16px 0;
        position: relative;
    }
    
    .content .input-box input {
        position: absolute;
        height: 100%;
        width: 100%;
        border-radius: 6px;
        font-size: 16px;
        outline: none;
        padding-left: 16px;
        /* background: #fae9fb; */
        border: 2px solid #2a2f52;
        transition: all 0.3s ease;
    }
    
    .content .input-box input:focus,
    .content .input-box input:valid {
        border-color: #ffac00;
        background-color: #fff;
    }
    
    .content .input-box label {
        position: absolute;
        left: 18px;
        top: 50%;
        color: #636c72;
        font-size: 15px;
        pointer-events: none;
        transform: translateY(-50%);
        transition: all 0.3s ease;
    }
    
    .content .input-box input:focus~label,
    .content .input-box input:valid~label {
        top: 0;
        left: 12px;
        display: 14px;
        color: #ffac00;
        background: #fff;
    }
    
    .content .message-box {
        min-height: 100px;
        position: relative;
    }
    
    .content .message-box textarea {
        position: absolute;
        height: 100%;
        width: 100%;
        resize: none;
        /* background: #fae9fb; */
        border: 2px solid #2a2f52;
        border-radius: 6px;
        outline: none;
        transition all 0.3s ease;
    }
    
    .content .message-box textarea:focus {
        border-color: #ffac00;
        background-color: #fff;
    }
    
    .content .message-box label {
        position: absolute;
        font-size: 16px;
        color: #636c72;
        left: 18px;
        top: 6px;
        pointer-events: none;
        transition: all 0.3s ease;
    }
    
    .content .message-box textarea:focus~label {
        left: 12px;
        top: -10px;
        color: #ffac00;
        font-size: 14px;
        background: #fff;
    }
    
    .content .input-box input[type="submit"] {
        color: #fff;
        background: #ba24c2;
        padding-left: 0;
        font-size: 18px;
        font-weight: 500;
        cursor: pointer;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }
    
    .content .input-box input[type="submit"]:hover {
        background-color: #d43ddb;
    }
    
    @media (max-width:1000px) {
        .content .image-box {
            max-width: 70%;
        }
        .content {
            padding: 10px 0;
        }
    }
    
    @media (max-width:900px) {
        .content .image-box {
            display: none;
        }
        .content form {
            width: 100%;
            margin-left: 30px;
        }
    }
    .sectionbe{
        background: black;
    background: -moz-linear-gradient(to bottom, #dfdedb 0%, #ffffff 100%);
    background: -webkit-linear-gradient(to bottom, #dfdedb 0%, #ffffff 100%);
    background: linear-gradient(to bottom, #dfdedb 0%, #ffffff 100%);
    }
</style>
<section class="sectionbe ">
    <div class="container19">
        <div class="content ">
            <div class="image-box">
            <img src="mail.svg" alt=""> 
            </div>
            <form action="#">
                <div class="topic">Contact us</div>
                <div class="input-box">
                    <input type="text" required>
                    <label>Enter your name</label>
                </div>
                <div class="input-box">
                    <input type="text" required>
                    <label>Enter your email</label>
                </div>
               
                <div class="input-box" >
                    <input type="text" required>
                    <label>Country</label>
                </div>
                <div class="input-box float">
                    <input type="text" required>
                    <label>Mobile no</label>
                </div>
                
                <div class="input-box">
                    <input type="text" required>
                    <label>Message</label>
                </div>
                <div class="input-box">
                <button> <a class="mt_btn_yellow" href="#">Contact Us</a></button>
                </div>
            </form>
        </div>
    </div>
</section>