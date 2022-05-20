<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">          
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>           
<link src="https://use.fontawesome.com/releases/v5.8.1/css/all.css">            
<link src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<i class="fas fa-camera"></i> <!-- this icon's 1) style prefix == fas and 2) icon name == camera -->
<i class="fas fa-camera"></i> <!-- using an <i> element to reference the icon -->
<span class="fas fa-camera"></span> <!-- using a <span> element to reference the icon -->

</head>

<style>
body{
    background-color: darkgrey;
}
.py {
    width: 476px;
    margin-left: 476px;
    background-color: silver;
    border-radius: 6px;
}
.nav-fill{
    display: flex;
    margin-left: 32px;
    background-color: white;
    width: 375px;
    height: 65px;
    border-radius: 5px;
}
.pt-3{
    margin-left: -9px;
}
.form-control {
    height: 30px;
    border-radius: 6px;
    width: 108px;
}
.nav-item{
    margin-top: 22px;
}
.nav-link{
    height: 10px;
    padding: 13px 30px 14px 17px;
    background-color: chocolate;
    border-radius: 6px;
}
.btn-block{
    margin-left: 20px;
}
.btn-block {
    margin-left: 260px;
    margin-top: 46px;
    padding: 14px;
    background-color: royalblue;
    border-radius: 7px;
}
.box{
    width: 300px;
}
.box1{
    width: 200px;
}
.row{
    display: flex;
}
.form-group{
    margin-left: 40px;
}

</style>



<body>
  <div class="container py">
    <!-- For demo purpose -->
  <div class="row mb-4">
    <div class="col-lg-8 mx-auto text-center">
        <h1 class="display-6">Payment Mode</h1>
        </div>
</div> <!-- End -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
        <ul role="tablist" class="nav-fill">
        <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link"> <i class="fas fa-credit-card mr-2"></i> Credit Card </a> </li>
        <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Paypal </a> </li>
        <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
        </ul>
</div> <!-- End -->
<!-- Credit card form content -->
    <div class="tab-content">
<!-- credit card info-->
    <div id="credit-card" class="pt-3">
        <form role="form" onsubmit="event.preventDefault()">
        <div class="form-group"><label for="username">
        <h2>Card Owner</h2>
        <input type="text" name="username" placeholder="Card Owner Name" required class="form-control box"></div>
    <div class="form-group"> <label for="cardNumber">
                                        <h2>Card number</h2>
                            
                <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control box" required>
                <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i><i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h2>Expiration Date</h2>
                                                </span></label>
                                            <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" box1 required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                        <h2>CVV <i class="fa fa-question-circle d-inline"></i></h2>
                                        </label> <input type="text" required class="form-control"> </div>
                                    </div>
                                </div>
                                <div class="card-footer"> <button type="button" class="btn-block"> Confirm Payment </button>
                            </form>
                        </div>
                    </div> <!-- End -->
                    <!-- Paypal info -->
                    <div id="paypal" class="tab-pane fade pt-3">
                        <h6 class="pb-2">Select your paypal account type</h6>
                        <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div>
                        <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button> </p>
                    <!-- bank transfer info -->
                    <div id="net-banking" class="tab-pane fade pt-3">
                        <div class="form-group "> <label for="Select Your Bank">
                                <h6>Select your Bank</h6>
                            </label> <select class="form-control" id="ccmonth">
                                <option value="" selected disabled>--Please select your Bank--</option>
                                <option>STATE BANK OF INDIA</option>
                                <option>HDFC BANK</option>
                                <option>ICICI</option>
                                <option>AXIX BANK</option>
                                <option>BANK OF BRODA</option>
                                <option>BANDHAN BANK</option>
                            </select> </div>
                    <div class="form-group">
                        <p> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button></p>
                </div>
            </div>
        </div>
    </div>

<script>
$(function() {
$('[data-toggle="tooltip"]').tooltip()
})

</script>
</body>
</html>