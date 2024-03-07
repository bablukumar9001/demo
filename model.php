
<style>
        
         form {
        /* width: 40%; */
        margin-right: 30px;
    }
    
    .input-box {
        height: 50px;
        width: 100%;
        margin: 8px 0;
        position: relative;
    }
    
    .input-box input {
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
    
    .input-box input:focus,
     .input-box input:valid {
        border-color: #ffac00;
        background-color: #fff;
    }
    .input-box textarea{
        height:100px;
        margin-bottom:30px;
        border: 2px solid #2a2f52;
        
    }
    
     .input-box label {
        position: absolute;
        left: 18px;
        top: 50%;
        color: #636c72;
        font-size: 15px;
        pointer-events: none;
        transform: translateY(-50%);
        transition: all 0.3s ease;
    }
    .input-box textarea:focus~label,
   .input-box textarea:valid~label,
    .input-box input:focus~label,
   .input-box input:valid~label {
        top: 0;
        left: 12px;
        display: 14px;
        color: #ffac00;
        background: #fff;
    }
    
  .message-box {
        min-height: 100px;
        position: relative;
    }
    
 .message-box textarea {
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
    
  .message-box textarea:focus {
        border-color: #ffac00;
        background-color: #fff;
    }
    
    .message-box label {
        position: absolute;
        font-size: 16px;
        color: #636c72;
        left: 18px;
        top: 6px;
        pointer-events: none;
        transition: all 0.3s ease;
    }
    
.message-box textarea:focus~label {
        left: 12px;
        top: -10px;
        color: #ffac00;
        font-size: 14px;
        background: #fff;
    }
    
   .input-box input[type="submit"] {
        color: #fff;
        background: #ba24c2;
        padding-left: 0;
        font-size: 18px;
        font-weight: 500;
        cursor: pointer;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }
 .input-box input[type="submit"]:hover {
        background-color: #d43ddb;
    }
    
    </style>

<div class="modal fade" id="myModal" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content header-popup-color">
			<div class="modal-header">
				<h4 class="modal-title" style="font-size:25px;">Request A Quote</h4>
				<button type="button" class="closes" data-dismiss="modal"  style="font-size:25px;">×</button>
			</div>
			<div class="modal-body">
				<div class="form-block">
       
                    <div class="row">
                        <div class="col-md-5" style="text-align:center;justify-content:center;display:flex;align-items:center;">
                            <img src="mail.svg"  alt="">
                        </div>
                        <div class="col-md-7">
                            
                            
					<form data-toggle="validator" novalidate="true">
                        <div class="messages"></div>
                   
                        <div class="fieldsets row ">			
                            <div class="col-md-12 ">
                            <div class="input-box">
                    <input type="text" required>
                    <label>Enter your name</label>
                </div>
                            </div>
						</div>
						<div class="fieldsets row">
							<div class="col-md-6 ">
                            <div class="input-box">
                    <input type="text" required>
                    <label>Enter your state</label>
                </div>
                            
                            </div>
							
                            <div class="col-md-6 ">
                            <div class="input-box">
                    <input type="text" required>
                    <label>Enter your phone</label>
                </div>
                            </div>
                        </div>
                        <div class="fieldsets row">
                            <div class="col-md-12 ">
                            <div class="input-box">
                    <input type="text" required>
                    <label>Enter your email</label>
                </div>
                            </div>
                        </div>
                        <div class="fieldsets row">
                        <div class="col-md-12 ">
                        <div class="input-box">
                    <textarea   required></textarea>
                    <label>Enter your message</label>
                </div>
</div>                        </div>
                        <div class="fieldsets mt20 pb20  " style="margin-top:50px;text-align:center;justify-content:center;display:flex;align-items:center;">
                            <button type="button" id="nav_formSubmitBtn" class="mt_btn_yellow" >Submit </button>
                        </div>
                        <!-- <a class="mt_btn_yellow"  href="#" >Hire Now</a> -->
                    </form>
</div>
</div>
				</div>
			</div>
		</div>
	</div>
</div>

