<style type="text/css">
    #label{
      color: red;
      margin-top: 5px;
    }
    #map{
      width: 450px; 
      height: 300px;
    }
</style>

<div class="col-md-12"  id="section_title">
  <h1>Place your Order</h1>
  <p>Choose from the availabel books</p>
</div>

<div class="row">
  <div class="col-md-3 col-sm-0">    
  </div>

  <div class="col-md-6">
    <form id="form1" method="post" name="form1"> 
        
          <!-- name -->
          <div class="form-group"> 
            <i class="fa-solid fa-user"></i>&nbsp;  
            <label for="name" id="label">Full name: *</label>
            <input type="text" class="form-control" id="name" name="name" required >
          </div>

          <!-- email -->
          <div class="form-group"> 
            <i class="fa-solid fa-envelope"></i>&nbsp;  
            <label for="email" id="label">Email address: *</label>
            <input type="email" class="form-control" id="email" name="email" required/>
          </div>


          <!-- Phone number -->
          <div class="form-group"> 
            <i class="fa-solid fa-phone"></i>&nbsp;  
            <label for="phone" id="label">Phone number: *</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
          </div>

        <!-- Select books -->
          <div class="row">
            <div class="col-xs-9">
              <i class="fa-solid fa-book"></i>&nbsp;  <label id="label">Select books you want</label>
            </div>
            <div class="col-xs-3">
              <label id="modal_label">Enter Pieces</label>
            </div>
          </div>

    </form>

  </div>

  <div class="col-md-3 col-sm-0">    
  </div><!-- End column -->

</div><!-- End row -->