<style type='text/css'>
input.error { border: 1px solid #f00  !important; }
select.error { border: 1px solid #f00  !important; }

</style>
                            <form name="myForm" action="" onsubmit="return validateForm()" method="post">
                                <p id="smsg" align="center" style="color:green"></p>
                                <div class="row">
                                    <div class="col-lg-6 mb-20">
                                        <div class="form-inner">
                                            <label>First Name <span>*</span></label>
                                            <input type="text" placeholder="Enter your first name"  id="fname" />
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <div class="form-inner">
                                            <label>Last Name <span>*</span></label>
                                            <input type="text" placeholder="Enter your last name" id="lname" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <div class="form-inner">
                                            <label>Email <span>*</span></label>
                                            <input type="email" placeholder="Enter your email address" id="email" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <div class="form-inner">
                                            <label>Phone <span>*</span></label>
                                            <input type="number" placeholder="Enter your phone number" id="phone"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
   
    maxlength = "10"/>
                                        </div>
                                    </div>
                                  
                                    <div class="col-lg-6 mb-20">
                                        <div class="form-inner">
                                            <label>What are you looking for <span>*</span></label>
                                            <select class="form-select" aria-label="Default select example" id="lookingfor">
                                            <option value="">Please Select</option>
                                                <option value="Treks">Treks</option>
                                                <option value="Watersports">Watersports</option>
                                                <option value="Caravan Tours">Caravan Tours</option>
                                                <option value="Rentals">Rentals</option>
                                                <option value="Backpacking & Tours">Backpacking & Tours</option>
                                                <option value="Stay">Stay</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <div class="form-inner">
                                            <label>Write Your Massage</label>
                                            <textarea placeholder="What’s on your mind" id="msg"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-inner">
                                            <button class="primary-btn1 btn-hover" type="submit">
                                                Submit Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                            <script>
function validateForm() {
  let fname = document.forms["myForm"]["fname"].value;
  let lname= document.forms["myForm"]["lname"].value;
  let email= document.forms["myForm"]["email"].value;
  let phone= document.forms["myForm"]["phone"].value;
  let lookingfor= document.forms["myForm"]["lookingfor"].value;
  let msg= document.forms["myForm"]["msg"].value;
  
  if (fname == "") {
    document.getElementById("fname").classList.add("error");
    document.getElementById("fname").focus();
    return false;
  }else{
    document.getElementById("fname").classList.remove("error");  
  }
  if (lname == "") {
    document.getElementById("lname").classList.add("error");
    document.getElementById("lname").focus();

    return false;
  }else{
    document.getElementById("lname").classList.remove("error");  
  }
   if (email == "") {
    document.getElementById("email").classList.add("error");
    document.getElementById("email").focus();

    return false;
  }else{
    document.getElementById("email").classList.remove("error");  
  }
   if (phone == "") {
    document.getElementById("phone").classList.add("error");
    document.getElementById("phone").focus();

    return false;
  }else{
    document.getElementById("phone").classList.remove("error");  
  }
  if (lookingfor == "") {
    document.getElementById("lookingfor").classList.add("error");
    document.getElementById("lookingfor").focus();

    return false;
  }else{
    document.getElementById("lookingfor").classList.remove("error");  
  }
  
  $.ajax({
  url: 'ajax.php',
  type: 'POST',
  data: {
    fname: fname,
    lname: lname,
    email: email,
    phone: phone,
    lookingfor:lookingfor,
    msg:msg
  },
  success: function(response) {
      
     
     
   if(response==0){
      document.forms["myForm"]["fname"].value=''; 
      document.forms["myForm"]["lname"].value='';
      document.forms["myForm"]["email"].value='';
      document.forms["myForm"]["phone"].value='';
       document.forms["myForm"]["lookingfor"].value='';
        document.forms["myForm"]["msg"].value='';
      document.getElementById("smsg").innerHTML="Your Form is submmited we will contact you soon...";
      
   }
  }
});
 
  return false;
}
</script>

                       