<?php
$price=$_POST["price"];
$delivery=$_POST["dlvry"];
$tax=$_POST["tax"];
settype($price,'int');
settype($delivery,'int');
settype($tax,'int');
$total=$price+$delivery+$tax; 

$name= "Akash Nayak";
$email = "akashnayakakash125@gmail.com";
$mobile= "6264472846";
$apiKey = "rzp_test_aZ6zwuVc4MmnAa";

?>
<html>
<head>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-3 mb-3">
      <div class="d-flex justify-content-between align-items-center mb-5">
          <div class="d-flex flex-row align-items-center">
              <h4 class="text-uppercase mt-1" style="color: orange">SAMAGRA</h4> 
          </div> <a href="#" class="cancel com-color">Cancel and return to website</a>
      </div>
      <div class="row">
          <div class="col-md-6">
              <div class="about">
                <h4 class="mb-3">Billing address</h4>
           <form class="needs-validation" novalidate="">
               <div class="row">
                   <div class="col-md-6 mb-3">
                       <label for="fullName">Full name</label>
                       <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="name">
                       <div class="invalid-feedback"> Valid first name is required. </div>
                   </div>
                   <div class="col-md-6 mb-3">
                       <label for="lastName">Mobile Number</label>
                       <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                       <div class="invalid-feedback"> Valid last name is required. </div>
                   </div>
               </div>
 <div class="mb-3">
                   <label for="address">Address 1</label>
                   <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                   <div class="invalid-feedback"> Please enter your shipping address. </div>
               </div>
               <div class="mb-3">
                   <label for="address">Address2 <span class="text-muted">(Optional)</span></label>
                   <input type="text" class="form-control" id="address" placeholder="1234 Main St" >
                   <div class="invalid-feedback"> Please enter your shipping address. </div>
               </div>
               <div class="mb-3">
                   <label for="address2">Address 3 <span class="text-muted">(Optional)</span></label>
                   <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
               </div>
               <div class="mb-3">
                   <label for="address2">Landmark <span class="text-muted">(Optional)</span></label>
                   <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
               </div>
               <div class="row">
                <div class="col-md-3 mb-3">
                       <label for="zip">Zip</label>
                       <input type="text" class="form-control" id="zip" placeholder="" required>
                       <div class="invalid-feedback"> Zip code required. </div>
                   </div>
                   <div class="col-md-5 mb-3">
                       <label for="country">Country</label>
                       <select class="form-select d-block w-100" id="country" required>
                           <option value="">Choose...</option>
                           <option>United States</option>
                       </select>
                       <div class="invalid-feedback"> Please select a valid country. </div>
                   </div>
                   <div class="col-md-4 mb-3">
                       <label for="state">State</label>
                       <select class="form-select d-block w-100" id="state" required>
                           <option value="">Choose...</option>
                           <option>California</option>
                       </select>
                       <div class="invalid-feedback"> Please provide a valid state. </div>
                   </div>
                   
              </div>
            </form>

<form action="success.html" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" 
    data-amount="<?php echo $total * 100;?>" 
    data-currency="INR"
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"
    data-buttontext=""
    data-name="Samagra"
    data-description="Development!"
    data-image="../../pp.jpg"
    data-prefill.name="<?php echo $name;?>"
    data-prefill.email="<?php echo $email;?>"
    data-prefill.contact="<?php echo $mobile;?>"
    data-theme.color="#F37254"
  
></script>
<div class="buttons"> <button class="btn btn-success btn-block" type="submit" onclick="v()">Proceed to payment</button> </div>

</form>

                <form method="post" action="payment getway/paytm/pgRedirect.php">
          <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
            name="ORDER_ID" autocomplete="off"
            value="<?php echo  "ORDS" . rand(10000,99999999)?>">
          <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001">
          
          <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
          <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
            size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
          
          <input title="TXN_AMOUNT" tabindex="10"
            type="hidden" name="TXN_AMOUNT"
            value="<?php echo $total; ?>">
         
                 <div class="buttons"> <button class="btn btn-success btn-block" type="submit"> Pay With Paytm</button> </div>
          </div>

      </div>
      <div class="col-md-2"></div>

      <div class="col-md-4">
          <div class="bg-pay p-3"> <span class="font-weight-bold">Order Recap</span>
              <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Product Price</span> <span>₹<?php echo $price; ?></span> </div>
              <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Tax</span> <span>₹<?php echo $tax; ?></span> </div>
              <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Delivery charge</span> <span>₹<?php echo $delivery; ?></span> </div>
            <hr>
              <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Total</span> <span class="text-success">₹<?php echo $total; ?></span> </div>
          </div>
      </div>
  </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>