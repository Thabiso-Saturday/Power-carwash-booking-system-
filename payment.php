

<?php
	
	session_start();

  include("connection.php");
  include("function.php");
  include("backgPic.php");
  include ("header.php");
  
    
  
  ?>
 	
	
	
	
	
	
	
  <html>
   <form>
    <body>
     <style type = "text/css">
	 
	 
			  .row {
			  display: -ms-flexbox; /* IE10 */
			  display: flex;
			  -ms-flex-wrap: wrap; /* IE10 */
			  flex-wrap: wrap;
			  margin: 0 -16px;
			}

			.col-25 {
			  -ms-flex: 25%; /* IE10 */
			  flex: 25%;
			}

			.col-50 {
			  -ms-flex: 50%; /* IE10 */
			  flex: 50%;
			}

			.col-75 {
			  -ms-flex: 75%; /* IE10 */
			  flex: 75%;
			}

			.col-25,
			.col-50,
			.col-75 {
			  padding: 0 16px;
			}

			.container {
			  background-color: #f2f2f2;
			  padding: 5px 20px 15px 20px;
			  border: 1px solid lightgrey;
			  border-radius: 3px;
			}

			input[type=text] {
			  width: 100%;
			  margin-bottom: 20px;
			  padding: 12px;
			  border: 1px solid #ccc;
			  border-radius: 3px;
			}

			label {
			  margin-bottom: 10px;
			  display: block;
			}

			.icon-container {
			  margin-bottom: 20px;
			  padding: 7px 0;
			  font-size: 24px;
			}

			.btn {
			  background-color: #04AA6D;
			  color: white;
			  padding: 12px;
			  margin: 10px 0;
			  border: none;
			  width: 100%;
			  border-radius: 3px;
			  cursor: pointer;
			  font-size: 17px;
			}

			.btn:hover {
			  background-color: #45a049;
			}

			span.price {
			  float: right;
			  color: grey;
			}

			/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
			@media (max-width: 800px) {
			  .row {
				flex-direction: column-reverse;
			  }
			  .col-25 {
				margin-bottom: 20px;
			  }
			}
	 
	 
	 </style>
   
   
   
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">

       

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="BK Mphethi">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
           
            <div class="row">
              <div class="col-50">
                <label for="expyear">Expires End</label>
                <input type="text" id="expyear" name="expyear" placeholder="01/22">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  

 
	 </form>
	  </body>
     
  </html>
  
