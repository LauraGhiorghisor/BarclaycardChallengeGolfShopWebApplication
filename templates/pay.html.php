

<?php 
$SHASIGN = "??????";
if (isset($_POST['clear'])){ ?>

  <div class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2 class="orange">Payment Page</h2>
        </div>


        <form action="pay.html.php" method ="POST">
          
          <div class="card-details">

            <div class="row">

              <div class="form-group col-12">
                <label for="card-holder">Order ID</label>
                <input class="form-control" value="" name="ORDERID">
              </div>
</div>
            <div class="row">
              <div class="form-group col-12">
                <label for="card-holder" style="display:none">PSP ID</label>
                <input class="form-control" style="display:none" value="" contenteditable="false" name="PSPID">
              </div>
</div>

              <div class="row">
                  <div class="form-group col-12">
                    <label>Amount</label>
                    <input class="form-control" value="" name="AMOUNT">
                  </div>
</div>
                  <div class="row">
                  <div class="form-group col-6">
                    <label>Currency</label>
                    <input type="text" class="form-control" value="" name="CURRENCY">
                  </div>
                  <div class="form-group col-6">
                    <label>Language</label>
                    <input type="text" class="form-control" value="" name="LANGUAGE">
                  </div>
</div>
<div class="row">
                  <div class="form-group col-6">
                    <label class="d-none">SHA IN</label>
                    <input type="hidden" class="form-control" value="" name="SHAIN" contenteditable="false">
                  </div>
                  <div class="form-group col-6">
                    <input type="hidden" class="form-control" name="SHASIGN" value="">
                  </div>
</div>
<div class="row">
              <div class="form-group col-12">
                  <button type="submit" class="btn btn-orange btn-block" name="pay">Pay up!</button>
              </div>
              <div class="form-group col-12">
                  <button type="submit" class="btn btn-orange btn-block" name="clear">Clear the field!</button>
              </div>


            </div>
          </div>
        </form>




      </div>
    </section>
</div>
<?php }


else if (isset($_POST['pay'])) {
    header('Location: initial_payment2.php');
}

else {

?>

<div class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2 class="orange">Payment Page</h2>
        </div>


        <form action="../initial_payment2.php" method ="POST">
          
          <div class="card-details">

            <div class="row">

              <div class="form-group col-12">
                <label for="card-holder">Order ID</label>
                <input class="form-control" value="5e39112f9f6c0" name="ORDERID">
              </div>
</div>
            <div class="row">
              <div class="form-group col-12">
                <label for="card-holder" style="display:none">PSP ID</label>
                <input class="form-control" value="UoN2020Grp3" contenteditable="false" style="display:none" name="PSPID">
              </div>
</div>

              <div class="row">
                  <div class="form-group col-12">
                    <label>Amount</label>
                    <input class="form-control" value="<?=$_SESSION['total']?>" name="AMOUNT">
                  </div>
</div>
                  <div class="row">
                  <div class="form-group col-6">
                    <label>Currency</label>
                    <input type="text" class="form-control" value="GBP" name="CURRENCY">
                  </div>
                  <div class="form-group col-6">
                    <label>Language</label>
                    <input type="text" class="form-control" value="en_US" name="LANGUAGE">
                  </div>
</div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label style="display:none">ALIASOPERATION</label>
                        </div>
</div>
<div class="row">
                        <div class="form-group col-12">
                            <input type="text" class="form-control" name="ALIASOPERATION" value="BYPSP" style="display:none" contenteditable="false">
                        </div>
</div>

                    <div class="row">
                        <div class="form-group col-12">
                            <label face="Tahoma" color="#000000" style="display:none" >ALIASUSAGE</label>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" class="form-control" name="ALIASUSAGE" value="test_payment" contenteditable="false" style="display:none">
                        </div>
                    </div>
<div class="row">
                  <div class="form-group col-12">
                    <label class="d-none">SHA IN</label>
                    <input type="text" class="form-control d-none" value="d18f95c0-320b-4034-a00e-7a5ee5e1638b" name="SHAIN" contenteditable="false">
                  </div>
                  <div class="form-group col-12">
                    <input type="hidden" class="form-control" name="SHASIGN" value="<?php echo $SHASIGN; ?>">
                  </div>
</div>
<div class="row">
              <div class="form-group col-6">
                  <button type="submit" class="btn btn-orange btn-block" name="pay">Pay up!</button>
              </div>
              <div class="form-group col-6">
                  <button type="button" class="btn btn-orange btn-block" name="clear">Clear the field!</button>
              </div>


            </div>
          </div>
        </form>




      </div>
    </section>
</div>
<?php }?>