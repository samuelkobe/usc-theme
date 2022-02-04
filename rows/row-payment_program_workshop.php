      <?php
        $message = get_sub_field( 'page_message' );
        $cost = get_sub_field( 'program_workshop_cost' );
        ?>

<section class="contained my-8 xl:my-16 object-reveal-short">
    <div class="w-full">
      
      <p class="w-full font-sans text-brand-black text-base lg:text-lg mb-8 2xl:mb-16 text-center"><?php the_sub_field( 'p_content' ); ?><?php echo $message ; ?></p>

      <div id="smart-button-container">
            <div style="text-align: center;">
              <div id="paypal-button-container"></div>
            </div>
          </div>
  
    </div>
    </section>

<script src="https://www.paypal.com/sdk/js?client-id=AccIVwQ3wEjOJeutEsblAVQP5SNoBS2-DGVD6NzJnjtEa5qslEVbSVV7sJCq1osiY6Bfxpy0OMfFINda&enable-funding=venmo&currency=CAD" data-sdk-integration-source="button-factory"></script>
    <script>
      function initPayPalButton() {
        var php_cost = "<?php echo $cost;?>";

        paypal.Buttons({
          style: {
            shape: 'rect',
            color: 'white',
            layout: 'vertical',
            label: 'pay',
            
          },

          createOrder: function(data, actions) {
            return actions.order.create({
              purchase_units: [{"description":"Universal Spiritualist Centre Program/Workshop fee.","amount":{"currency_code":"CAD","value":php_cost}}]
            });
          },

          onApprove: function(data, actions) {
            return actions.order.capture().then(function(orderData) {
              
              // Full available details
              console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

              // Show a success message within this page, e.g.
              const element = document.getElementById('paypal-button-container');
              element.innerHTML = '';
              element.innerHTML = '<h3>Thank you for your payment!</h3>';

              // Or go to another URL:  actions.redirect('thank_you.html');
              
            });
          },

          onError: function(err) {
            console.log(err);
          }
        }).render('#paypal-button-container');
      }
      initPayPalButton();
    </script>

