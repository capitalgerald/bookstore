<?php
// Connect to Database
include 'database.php';


  //Pick Book code from previous Page
  if(isset($_POST['book_code'])){
    $book_code = $_POST['book_code'];
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

  #btn_reset_copies{
    background-color: #ededed;
    color: black;
     border: 1px solid black; 
     border-radius: 4px;      
     padding: 3px 6px 3px 6px;
     cursor: pointer;
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


        <!-- Allow the user to select books and enter copies he/she wants -->
        <div class="form-group">
            <i class="fa-solid fa-book"></i>&nbsp;  
            <label id="label">Select books you want</label>&nbsp;  

            <!-- Show the user the number of books on stock -->
            <span id="count_books"></span>
            <span id="btn_reset_copies">Reset</span>
        </div>

          
          <!-- Start (Select books) -->
          <div class="form-group" id="table_body">

            <table id="mytable">
                <thead>                 
                    <th id="th_books">Book Name</th>
                    <th id="th_books">Copies</th>
                    <th></th>
                </thead>
                <tbody>                
                    <?php 
                    $sql = "SELECT * FROM books ORDER BY books.id DESC";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) 
                    {   
                        while ($row = mysqli_fetch_assoc($result))
                        {
                           
                           $BookCode = $row['code'];
                           $BookName = $row['name'];
                            ?>
                            <tr id="tr_books">

                              <!-- book name -->
                              <td id="td_books" style="vertical-align: middle;">                          
                                <label><?php echo $BookName; ?></label>
                              </td>
                              
                              <!-- book copies -->
                              <td id="td_books">
                                  <input 
                                    class="form-control" 
                                    type="text" 
                                    name="copies"
                                    maxlength="4" 
                                    size="4"
                                    id="<?php echo $BookCode; ?>"                                     
                                    onblur="myFunction(this, '<?php echo $BookCode; ?>', '<?php echo $BookName; ?>')">
                              </td>
                              <td> 
                              <span id="<?php echo $BookCode; ?>_x"></span>                               
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

           <p id="all_copies"></p>

      <!-- Start: Comment -->
      <div class="form-group">
          <i class="fa-solid fa-comment"></i>&nbsp;  
          <label for="mycomment" id="label">Comment (Give any additional info)</label>
          <textarea class="form-control" rows="5" id="mycomment" required></textarea>
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


    const book_copies = []; // initialize an array

    function myFunction(myelement, mybookcode, mybookname)
    {
        var myvalue = document.getElementById(mybookcode).value; // alert(myvalue); 
        document.getElementById(mybookcode).disabled = true;
        document.getElementById(mybookcode+"_x").innerHTML = myvalue;
        
        // Don't capture empty values
        if(myvalue != "" && myvalue != 0){
            book_copies.push("["+myvalue+","+mybookname+","+mybookcode+"]"); // Add element to an Array
            document.getElementById("all_copies").innerHTML = book_copies.toString();
            myelement.style.backgroundColor = "green";
            myelement.style.color = "white";
        } else {
            myelement.style.backgroundColor = "red";
            myelement.style.color = "white";
        }
    }




    $(document).ready(function()
    {
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

        var mycomment     = $("#mycomment").val();
        var ordered_books  = book_copies.toString(); 

        alert(ordered_books+" "+mycomment);

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

                mycomment     : mycomment,
                ordered_books : ordered_books
          }, 
          function(data, status)
          {              
            alert("Thank you, Order recieved.");             
          }); 
          

          /*
          // Send Email vai email
          $.post("make_order_send_email.php", 
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
            alert("Email sent successfully");             
          }); 
          */

      });
    });
  </script>





    <script type="text/javascript">
    /* This script is for allowing the user to enter copies of book he or she wants */

        // get an array of all books in stock
        let copies = document.getElementsByName("copies");  

        // count the number of all books in stock
        let copies_length = document.getElementsByName("copies").length; 

        // Show user the number of books in stock
        document.getElementById("count_books").innerHTML = "("+copies_length+" in Stock)";

        // click the button to disable Textfields
        var btn_disable = document.getElementById('btn_reset_copies');
        btn_disable.addEventListener("click", function() {

                // Loop through tag elements and disable all them one by one
                for (let i = 0; i < copies.length; i++) { 
                    copies[i].disabled = false;
                    copies[i].style.backgroundColor = "pink";
                    copies[i].style.color = "black";
                }   

        }, true);

    </script>