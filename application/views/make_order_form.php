<!-- Modal Body -->
  <style type="text/css">
    .modal-header{
      background-color: #c80700;
      color: white;
      text-align: center;
    }
    #modal_label{
      color: red;
      margin-top: 5px;
    }
    #map{
      width: 450px; 
      height: 300px;
    }
  </style>


  


<form id="form1" method="post" name="form1"> 
    <!--  <form action="<?php  echo base_url(); ?>Home/book_register" method="post" id="form1"> -->
    
      <!-- name -->
      <div class="form-group"> 
        <i class="fa-solid fa-user"></i>&nbsp;  
        <label for="name" id="modal_label">Full name: *</label>
        <input type="text" class="form-control" id="name" name="name" required >
      </div>

      <!-- email -->
      <div class="form-group"> 
        <i class="fa-solid fa-envelope"></i>&nbsp;  
        <label for="email" id="modal_label">Email address: *</label>
        <input type="email" class="form-control" id="email" name="email" required/>
      </div>


      <!-- Phone number -->
      <div class="form-group"> 
        <i class="fa-solid fa-phone"></i>&nbsp;  
        <label for="phone" id="modal_label">Phone number: *</label>
        <input type="tel" class="form-control" id="phone" name="phone" required>
      </div>

    <!-- Select books -->
      <div class="row">
        <div class="col-xs-9">
          <i class="fa-solid fa-book"></i>&nbsp;  <label id="modal_label">Select books you want</label>
        </div>
        <div class="col-xs-3">
          <label id="modal_label">Enter Pieces</label>
        </div>
      </div>


      <div class="form-group">
        <table>
          <?php 
          $num = 1;
          foreach($books as $row): 
            ?>
            <tr>
                <td><?php echo $row->code; ?></td>
                <td>
                <input type="checkbox" value="<?php echo $row->code; ?>" name="book_name">
                </td>
                <td><label><?php echo $row->name; ?></label></td>
                <td><input class="form-control" type="text" id="<?php echo $row->code; ?>"></td>
            </tr>
            <?php 
            $num++;
          endforeach; 
          ?>
          </table>
      </div> 

      <!-- Location Picker -->
      <i class="fa-solid fa-location-dot"></i>&nbsp;  
      <label>Chosen desired location for delivery</label>
      <p>(Click on a location on the map to select it. Drag the marker to change location.)</p>


      <div class="form-group rows">
        <div class="col-xs-4">
          <label id="modal_label">Latitude: *</label>
        </div>
        <div class="col-xs-8">
          <input type="text" id="lat" name="latitude" readonly="yes" class="form-control" required>
        </div>
      </div>

      
      <div class="form-group rows">
        <div class="col-xs-4">
          <label id="modal_label">Longitude:*</label>
        </div><br>
        <div class="col-xs-8">
           <input type="text" id="lng" name="longitude" readonly="yes" class="form-control" required>
        </div>
      </div>

      <br><br>
      <div id="map"></div>

      <!-- Comment -->
      <div class="form-group">
        <i class="fa-solid fa-comment"></i>&nbsp;  
        <label for="comment" id="modal_label">Comment (Give any additional info)</label>
        <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
      </div>

      <!-- buttons -->
      <div class="form-group rows">
        <div class="form-group">
          <button type="button" class="btn btn-warning" id="modal_btn_reset">Reset</button>
          <button type="submit" 
          class="btn btn-success" 
          id="btn_Order">Order Now</button>
        </div>

        <h4 style="color:green" id="result"></h4>
        <h4 style="color:red" id="result"></h4> 
      </div>

  </form>


<script type="text/javascript">

$('#myModal').modal('hide');

function resetForm() 
  {
    $('#form1')[0].reset();
  }

  function closeModal() 
  {
    $('#myModal').modal('hide');
  }

$my_base_url = "http://localhost/bookstore/";

$("#btn_Order").click(function(){
      
        var name  = $('#name').val();
        var email   = $('#email').val();
        var phone   = $('#phone').val();

        var latitude  = $('#lat').val(); // lat=latitude
        var longitude   = $('#lng').val(); // lng=longitude
        var comment   = $('#comment').val();
        



       // Validation form Entry
        if(name!="" && email!="" && phone!="" && latitude!="" && longitude!="" && comment!="")
        {
          
          jQuery.ajax({ 
                type    : "POST",               
                url     : $my_base_url+"Home/book_register",
                dataType  : 'html',
                data    : {
                          name    : name, 
                          email   : email,
                          phone   : phone,
                          latitude: latitude,
                          longitude: longitude,
                          comment: comment
                        },
                success   : function(res) 
                            {
                              if(res==1)
                              {                               
                                resetForm(); // Reset form
                                closeModal();
                                alert('Data saved successfully');
                                // window.location.replace($my_base_url+'Home/fetch_orders');
                              }
                              else
                              {
                                alert('Data not saved');  
                              }
                            },
                error     : function()
                            {
                              alert('Oops! Data not saved');  
                            }
              }); // End jQuery.ajax

          
        }
        else
        {
          alert("Please fill all fields first");
        }

       

});

/*
function getCheckboxValue() {
document.getElementById('btn_Order').onclick = function()
{  
  var markedCheckbox = document.getElementsByName('book_id');  
  for (var checkbox of markedCheckbox) 
  {  
    if (checkbox.checked)  
      // document.body.append(checkbox.value + ' ');  
      document.getElementById("error").append(checkbox.value + ' '); 
  } 

}
*/
</script>






  <!-- Location Picker in a Form -->
  <script type="text/javascript">
    //map.js
    //Set up some of our variables.
    var map; //Will contain map object.
    var marker = false; ////Has the user plotted their location marker? 
            
    //Function called to initialize / create the map.
    //This is called when the page has loaded.
    function initMap() {

        //The center location of our map.
        var centerOfMap = new google.maps.LatLng(52.357971, -6.516758);

        //Map options.
        var options = {
          center: centerOfMap, //Set center.
          zoom: 7 //The zoom value.
        };

        //Create the map object.
        map = new google.maps.Map(document.getElementById('map'), options);

        //Listen for any clicks on the map.
        google.maps.event.addListener(map, 'click', function(event) {                
            //Get the location that the user clicked.
            var clickedLocation = event.latLng;
            //If the marker hasn't been added.
            if(marker === false){
                //Create the marker.
                marker = new google.maps.Marker({
                    position: clickedLocation,
                    map: map,
                    draggable: true //make it draggable
                });
                //Listen for drag events!
                google.maps.event.addListener(marker, 'dragend', function(event){
                    markerLocation();
                });
            } else{
                //Marker has already been added, so just change its location.
                marker.setPosition(clickedLocation);
            }
            //Get the marker's location.
            markerLocation();
        });
    }
            
    //This function will get the marker's current location and then add the lat/long
    //values to our textfields so that we can save the location.
    function markerLocation(){
        //Get location.
        var currentLocation = marker.getPosition();
        //Add lat and lng values to a field that we can save.
        document.getElementById('lat').value = currentLocation.lat(); //latitude
        document.getElementById('lng').value = currentLocation.lng(); //longitude
    }
            
            
    //Load the map when the page has finished loading.
    google.maps.event.addDomListener(window, 'load', initMap);
</script>

