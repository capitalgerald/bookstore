

<?php
// Connect to Database
include 'database.php';


  //Pick Book code from previous Page
  if(isset($_POST['book_code'])){ // if an event is set
    $book_code = $_POST['book_code']; // Pick the data
    if (!empty($book_code)) {
      // echo $book_code;
    }
  }

?>

<style type="text/css">
    #mytable{
      border: 1px solid #c80700;
    }
    #tr_books{
      border-bottom: 1px solid #c80700;
    }
    #th_books{
      padding: 3px;
      text-align: center;
      background-color: #404040;
      color: white;
    }
    #table_body{
        background-color: ededed;
        height: 200px;
        overflow-y: scroll;
    }
    #td_books{
      padding: 3px;
    }
    #label{
      color: red;
      margin-top: 5px;
    }

/* Style Buttons */
 #btn_buy_book{
    padding: 6px;
    font-weight: bold;
    background-color: red;
    color: white;
    border: none;
  }

#btn_buy_book:hover{
    background-color: #404040;
    color: white;   
    border-bottom: 4px solid red;
  }

#btn_reset_form{
  margin-right: 5px;
 padding: 6px;
    font-weight: bold;
    background-color: #404040;
    color: white;
    border: none;
  }
  #btn_reset_form:hover{
    color: white; 
    border-bottom: 4px solid red; 
  }
</style>

<div class="col-md-12"  id="section_title">
  <h1>Place your Order</h1>
  <p>Choose from the availabel books</p>
</div>

<div class="row">
  <div class="col-md-12">
    <form id="form_buy_book"> 
        
          <!-- name -->
          <div class="form-group"> 
            <i class="fa-solid fa-user"></i>&nbsp;  
            <label for="name" id="label">Full name : *</label>
            <input type="text" class="form-control" id="name" required >
          </div>

          <!-- email -->
          <div class="form-group"> 
            <i class="fa-solid fa-envelope"></i>&nbsp;  
            <label for="email" id="label">Email address : *</label>
            <input type="email" class="form-control" id="email" required/>
          </div>


          <!-- Phone number -->
          <div class="form-group"> 
            <i class="fa-solid fa-phone"></i>&nbsp;  
            <label for="phone" id="label">Phone number : *</label>
            <input type="tel" class="form-control" id="phone" required>
          </div>

          <!-- Start: Select Address -->
          <div class="form-group">
            <i class="fa-solid fa-location-dot"></i>&nbsp;  
            <label id="label">Chosen desired location for delivery</label>
            (CSV file Needed)
            <p style="font-size: 14px;">Data Source : <a href="http://www.lcmt.org/uganda/">http://www.lcmt.org/uganda/</a></p>     
          </div>
                 
          
          <!-- Country -->
         <div class="form-group">
              Country
              <select id="country" class="form-control" required>
                  <optgroup label="Select - Uganda">
                      <option>Uganda</option>
                  </optgroup>
                   <optgroup label="Others - (Empty)">
                      <option disabled>Kenya</option>
                      <option disabled>Rwanda</option>
                      <option disabled>Tanzania</option>
                  </optgroup>
              </select>
          </div>

           <!-- Districts -->
          <div class="form-group">
            Districts
            <select id="district" class="form-control" required>
                <optgroup label="Select - Luwero">
                    <option></option>
                    <option>Luwero</option>
                </optgroup>
                 <optgroup label="Others - (Empty)">
                    <option disabled>Kampala</option>
                    <option disabled>Gulu</option>
                    <option disabled>Masaka</option>
                </optgroup>
            </select>
          </div>

          <div class="form-group">
              County
              <select id="county" class="form-control" required>
                  <optgroup label="Select - Katikamu South">
                      <option></option>
                      <option>Katikamu South</option>
                  </optgroup>
                  <optgroup label="Others - (Empty)">
                      <option disabled>Katikamu North</option>
                      <option disabled>Nakaseke</option>
                      <option disabled>Bamunanika</option>
                  </optgroup>
              </select>
          </div>

          <!-- Sub Counties -->
          <div class="form-group">
            Sub Counties
            <select id="subcounty" class="form-control" required>
              <optgroup label="Select - Makulubita">
                    <option></option>
                    <option>Makulubita</option>
              </optgroup>
              <optgroup label="Others - (Empty)">
                   <option disabled>Nyimbwa</option>
                    <option disabled>Bombo Town Council</option>
                    <option disabled>Butuntumula</option>
                    <option disabled>Katikamu</option>
                    <option disabled>Luwero Sub-County</option>
                    <option disabled>Luwero Town Council</option>
                    <option disabled>Wobulenzi Town Council</option>
              </optgroup>
            </select>
         </div>

         <!-- Parish -->
         <div class="form-group">
              Parish
              <select id="parish" class="form-control" required>
                  <optgroup label="Select - Mawale">
                        <option></option>
                        <option>Mawale</option>
                  </optgroup>
                  <optgroup label="Others - (Empty)">
                      <option disabled>Makulubita</option>
                      <option disabled>Kagogo</option>
                      <option disabled>Kalasa</option>
                      <option disabled>Kangave</option>
                      <option disabled>Kanyanda</option>
                      <option disabled>Kasozi</option>
                      <option disabled>Nsanvu</option>
                      <option disabled>Waluleeta</option>
                    </optgroup>
              </select>
          </div>

          <!-- Village -->
          <div class="form-group">
              Village
              <select id="village" class="form-control" required>
                  <optgroup label="Select - Kawumu">
                        <option></option>
                         <option>Kawumu</option>
                  </optgroup>
                  <optgroup label="Others - (Empty)">
                      <option disabled>Kagembe</option>
                      <option disabled>Kalasa</option>
                      <option disabled>Balimanyankya</option>
                      <option disabled>Bugozi</option>
                      <option disabled>Buteza</option>
                      <option disabled>Lukaaka</option>
                      <option disabled>Mawale</option>
                      <option disabled>Mawale</option>
                   </optgroup>
                </select>
         </div>


         <div class="form-group">
          <i class="fa-solid fa-book"></i>&nbsp;  <label id="label">Select books you want</label>
        </div>

          <!-- Start (Select books) -->
          <div class="form-group" id="table_body">
            <table id="mytable">
                <thead>
                  <th id="th_books">Code</th>
                  <th id="th_books">Book Name</th>
                  <th id="th_books">Copies</th>
                </thead>
                <tbody>                
                    <?php 
                    $sql = "SELECT * FROM books ORDER BY books.id DESC";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) 
                    {   
                        while ($row = mysqli_fetch_assoc($result))
                        {
                            ?>
                            <tr id="tr_books">

                              <!-- book_code -->
                              <td id="td_books">
                                  <input
                                  class="form-control"
                                  type="checkbox" 
                                  id="<?php echo "book_code".$row['code']; ?>" 
                                  value="<?php echo $row['code']; ?>">
                              </td>

                              <td id="td_books" style="vertical-align: middle;">
                                <?php echo $row['code']; ?> : 
                                <label><?php echo $row['name']; ?></label>
                              </td>

                              <!-- book_copies -->
                              <td id="td_books">
                                  <input 
                                    class="form-control" 
                                    type="text" 
                                    id="<?php echo "book_copies_".$row['code']; ?>" 
                                    maxlength="4" 
                                    size="4">
                              </td>

                            </tr>
                            <?php 
                        }
                      } else {
                        echo "There are no books yet";
                      }
                    ?>
                  </tbody>
              </table>
          </div>
          <!-- End: form-group (Select books) -->


      <!-- Start: Comment -->
      <div class="form-group">
          <i class="fa-solid fa-comment"></i>&nbsp;  
          <label for="comment" id="label">Comment (Give any additional info)</label>
          <textarea class="form-control" rows="5" id="comment" required></textarea>
      </div>
      <!-- Start: Comment -->

        
          <button class="btn" id="btn_buy_book" style="float: right; ">
            <i class="fa-solid fa-cart-shopping"></i>&nbsp;  Place Order
          </button>
      <!--
          <button class="btn" id="btn_reset_form" style="float: right; ">
            <i class="fa-solid fa-cart-shopping"></i>&nbsp;  Reset
          </button>
-->

    </form>
  </div><!-- End column -->
</div><!-- End row -->


<br><br><br>


<script type="text/javascript">
    /*
    $(document).ready(function(){
        $('#btn_buy_book').attr('disabled',false);
    });
    */

    /*
    FORM IDs
    =====================
    name
    email
    phone
    
    book_code_
    book_copies_

    country
    district
    county
    subcounty
    parish
    village

    comment

    btn_buy_book
    btn_reset_form
    */

      $(document).ready(function(){
        $("#form_buy_book").submit(function(){

          var name      = $("#name").val();
          var email     = $("#email").val();
          var phone     = $("#phone").val();

          var country   = $( "#country option:selected" ).text();
          var district  = $( "#district option:selected" ).text();
          var county    = $( "#county option:selected" ).text();

          var subcounty = $( "#subcounty option:selected" ).text();
          var parish    = $( "#parish option:selected" ).text();
          var village   = $( "#village option:selected" ).text();

          var comment     = $("#comment").val();
          var ordered_books  = "PR0001,54";

          // alert(name+" , "+email+" , "+phone+" , "+comment);
          // const points = new Array(40, 100, 1, 5, 25, 10); // Avoid this
          // const order = ["40", 100, 1, 5, 25, 10];

          $("#content_div").load("make_order_send_email.php",); // Send Email

          // Send data to the database
            $.post("order_insert.php", 
            {
                  name    : name,
                  email   : email,
                  phone   : phone,
                  country   : country,
                  district  : district,
                  county    : county, 
                  subcounty : subcounty,
                  parish    : parish,
                  village   : village,
                  comment   : comment,
                  ordered_books : ordered_books
            }, 
            function(data, status)
            {
              // $("#test").html(data); 
              //alert(status); 
              alert("Thank you, Order recieved. Email sent successfully");
              $("#content_div").load("orders.php",);
              // $("#content_div").load("orders.php");              
            }); 
            
        });
      });

</script>



