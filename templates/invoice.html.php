<div class="container d-column justify-content-centre">
			<h1 class="orange mt-4"> Payment Page</h1>
			<p></p>
			<p>Transaction Value = <?php print $ACTUALAMOUNT ?></p>
			<p>Transaction Currency = <?php print $CURRENCY ?></p>
			<p>Language = <?php print $LANGUAGE ?></p>
			<p>Order ID of transaction = <?php print $ORDERID ?></p>
			
			
			<form method="post" action="https://mdepayments.epdq.co.uk/ncol/test/orderstandard.asp" id=form1 name=form1>
				<input type="hidden" name="AMOUNT" value="<?php print $ACTUALAMOUNT?>">
				<input type="hidden" name="CURRENCY" value="<?php print $CURRENCY?>">
				<input type="hidden" name="LANGUAGE" value="<?php print $LANGUAGE?>">
				<input type="hidden" name="ORDERID" value="<?php print $ORDERID?>">
				<input type="hidden" name="PSPID" value="<?php print $PSPID?>">
				<input type="hidden" name="SHASIGN" value="<?php print $SHASIGN;?>">
				<input type="submit" name="SUBMIT" value="Pay up!" class="btn btn-large orange mb-4">
			</form>

			
			</div>