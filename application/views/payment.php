<body>
<div class="video">
    <div class="row payment-container">
      <div class="payment-container-left">
        <div class="payment-stage">
          <h4>Invoice Details</h4>
          <!-- <form action=""></form> -->
          <div class="flex-input">
            <div class="col-lg-6">
              <div>
                <label for="name">First Name</label>
                <input id="name" type="text" value="" name="name" />
              </div>
            </div>
            <div class="col-lg-6">
              <div>
                <label for="email">Last Name</label>
                <input id="email" type="text" value="" name="email" />
              </div>
            </div>
          </div>
          <div>
            <label for="email">Bussines Name</label>
            <input id="email" type="text" value="" name="email" />
          </div>
          <div>
            <label for="email">Address 1</label>
            <input id="email" type="text" value="" name="email" />
          </div>
          <div>
            <label for="email">Address 2</label>
            <input id="email" type="text" value="" name="email" />
          </div>
          <div class="flex-input">
            <div class="col-lg-6">
              <div>
                <label for="name">City</label>
                <input id="name" type="text" value="" name="name" />
              </div>
            </div>
            <div class="col-lg-6">
              <div>
                <label for="email">State / Province / Region</label>
                <input id="email" type="text" value="" name="email" />
              </div>
            </div>
          </div>
          <div class="flex-input">
            <div class="col-lg-6">
              <div>
                <label for="name">Post Code</label>
                <input id="name" type="text" value="" name="name" />
              </div>
            </div>
          </div>
        </div>
        <div class="payment-stage">
          <h4>Payment Method</h4>
          <label for="payment-method">Confirm Your Plan</label>
          <div class="flex-input">
            <div class="col-lg-6">
              <div class="confirm-card">
                <input type="radio" name="confirm-card" id="radio-monthly" />
                <h5>Monthly</h5>
                <h3>$33/M</h3>
                <p>+ local tax</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="confirm-card">
                <input type="radio" name="confirm-card" id="radio-anually" />
                <h5>Annualy</h5>
                <h3>$16.50/M</h3>
                <p>billed yearly at $198 + local tax</p>
              </div>
            </div>
          </div>
        </div>
        <hr />
        <div class="option-payment-radio row">
          <div class="col-md-8 radio-btn">
            <label></label>
            <input type="radio" class="form-check-input" id="radio-cc" name="payment-method" />
            <label class="radio-inline control-label">Credit Card</label>
          </div>
          <div class="flex-logo">
            <img style="height:30px;" src="<?=base_url()?>/assets/images/mastercard.png" alt="" />
            <img style="height:25px;" src="<?=base_url()?>/assets/images/Visa.png" alt="" />
          </div>
        </div>
        <hr />
        <div class="cc-option">
          <div class="payment-stage">
            <input id="email" placeholder="City" type="text" />
            <div class="flex-input">
              <div class="col-lg-4">
                <div>
                  <input placeholder="Country" list="country" name="email" />
                  <datalist id="country">
                    <option> Indonesia</option>
                    <option> Singapore</option>
                  </datalist>
                </div>
              </div>
              <div class="col-lg-4">
                <input placeholder="Province" list="province" name="email" />
                <datalist id="province">
                  <option> East Java </option>
                  <option> West Java </option>
                </datalist>
              </div>
              <div class="col-lg-4">
                <input placeholder="postal code" name="postal code" />
              </div>
            </div>
          </div>
          <hr />
        </div>
        <div class="option-payment-radio row ">
          <div class="col-md-9 radio-btn">
            <label></label>
            <input type="radio" class="form-check-input" id="radio-paypal" name="payment-method" />
            <label class="radio-inline control-label">Paypal</label>
          </div>
          <div class="flex-logo">
            <img style="height:40px;" src="<?=base_url()?>/assets/images/paypal.png" alt="" />
          </div>
        </div>
        <hr />
        <div class="row wallet">
          <div class="col-sm-1"></div>
          <div class="col-sm-2">
            <img style="height:50px;" src="<?=base_url()?>/assets/images/wallet.png" alt="" />
          </div>
          <div class="col-sm-8">
            <p style="font-size:13px;">
              After clicking “Complete order”, you will be redirected to
              PayPal to complete your purchase securely.
            </p>
          </div>
        </div>
        <div class="payment-stage">
          <h4>Billing Address</h4>
        </div>
        <hr />
        <div class="option-payment-radio row ">
          <div class="col-md-9 radio-btn">
            <label></label>
            <input type="radio" id="radio-same-address" class="form-check-input" name="radio-billing" />
            <label class="radio-inline control-label">Same as shipping address</label>
          </div>
        </div>
        <hr />
        <div class="option-payment-radio row ">
          <div class="col-md-9 radio-btn">
            <label></label>
            <input type="radio" id="radio-billing-address" class="form-check-input" name="radio-billing" />
            <label class="radio-inline control-label">Use a different billing address</label>
          </div>
        </div>
        <div class="option-address">
          <hr />
          <div class="payment-stage">
            <div class="flex-input">
              <div class="col-lg-6">
                <input placeholder="First name" id="name" type="text" value="" name="name" />
              </div>
              <div class="col-lg-6">
                <input placeholder="Last name" id="email" type="text" value="" name="email" />
              </div>
            </div>
            <input id="email" placeholder="Address" type="text" />
            <input id="email" placeholder="Apartement, suite, etc. (optional)" type="text" />
            <input id="email" placeholder="City" type="text" />
            <div class="flex-input">
              <div class="col-lg-4">
                <div>
                  <input placeholder="Country" list="country" name="email" />
                  <datalist id="country">
                    <option> Indonesia</option>
                    <option> Singapore</option>
                  </datalist>
                </div>
              </div>
              <div class="col-lg-4">
                <input placeholder="Province" list="province" name="email" />
                <datalist id="province">
                  <option> East Java </option>
                  <option> West Java </option>
                </datalist>
              </div>
              <div class="col-lg-4">
                <input placeholder="postal code" name="postal code" />
              </div>
            </div>
            <input id="email" placeholder="Phone (optional)" type="text" />
          </div>
        </div>
        <hr />

        <div class="option-payment-radio chckbox">
          <div class="custom-control custom-checkbox item-checkbox">
            <input type="checkbox" name="agreement" id="agreement">
            <label for="agreement">I agree to the <strong>License Term</strong> and <strong>User Term</strong></label>
          </div>
          <div class="custom-control custom-checkbox item-checkbox">
            <input type="checkbox" name="agreement" id="agreement">
            <label for="agreement">I agree to the License Term and User Term</label>
          </div>
        </div>
        <div class="payment-stage btn-down-container">
          <button class="button-payment btn-down">Complete Order</button>
        </div>


      </div>
      <div class="image-container-right">
        <div class="image-container">
          <img src="<?=base_url()?>/assets/images/Group 10986@3x.png" alt="" />
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna
            aliqua. Ut</p>
        </div>
        <div class="card-right-payment">
          <h3>Order Summary</h3>
          <div class="discount-code">
            <h6>Discount code </h6>
            <input class="input-code" placeholder="input your code">
            <button class="button-payment">Apply</button>
          </div>
          <div class="ammount row">
            <div class="col-xs-6">
              <p>Ammount</p>
              <p>Tax</p>
              <p>Discount</p>
            </div>
            <div class="cost col-lg-6">
              <p>$198.00/year</p>
              <p>$0.00/year</p>
              <p>0%</p>
            </div>
          </div>
          <hr>
          <div class="ammount total row">
            <div class="col-xs-6">
              <p>Discount</p>
            </div>
            <div class="cost col-lg-6">
              <p>$198.00/year</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script>
    window.onscroll = function () {
      scrollFunction();
    };
    var x = $("#navbar");

    function scrollFunction() {
      if (
        document.documentElement.scrollTop > 1000 ||
        document.body.scrollTop > 700
      ) {
        document.getElementById("navbar").style.top = "0";
        $("nav").removeClass("navbar-default");
        $("nav").addClass("navbar-scroll");
      } else {
        console.log(document.documentElement.scrollTop);
        $("nav").removeClass("navbar-scroll");
        $("nav").addClass("navbar-default");
      }
    }

    $("#type").keyup(function () {
      $("#usr").val($(this).val() + " example");
    });
  </script>

  <script>
    let radioMonth = document.getElementById("radio-monthly");
    let radioAnual = document.getElementById("radio-anually");
    let confirmCard = document.querySelectorAll(".confirm-card");
    let creditCardOps = document.getElementsByClassName("cc-option")
    let billingAddress = document.getElementsByClassName("option-address")
    $(radioMonth).click(function () {
      $(confirmCard[0]).addClass('confirm-card-selected')
      $(confirmCard[1]).removeClass('confirm-card-selected')
    })
    $(radioAnual).click(function () {
      $(confirmCard[1]).addClass('confirm-card-selected')
      $(confirmCard[0]).removeClass('confirm-card-selected')
    })

    $(document).ready(function () {
      $(creditCardOps).hide();
      $(billingAddress).hide();
    })
    $('#radio-cc').click(function () {
      $(creditCardOps).show();
    })
    $('#radio-paypal').click(function () {
      $(creditCardOps).hide();
    })

    $('#radio-billing-address').click(function () {
      $(billingAddress).show()
    })

    $('#radio-same-address').click(function () {
      $(billingAddress).hide()
    })
  </script>
  </body>