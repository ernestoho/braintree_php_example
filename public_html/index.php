<?php require_once("../includes/braintree_init.php"); ?>

<html>
<head>
  <meta charset="utf-8">
  <script src="https://js.braintreegateway.com/web/dropin/1.9.2/js/dropin.min.js"></script>
</head>
<body>
  <div id="dropin-container"></div>
  <button id="submit-button">Request payment method</button>
  <script>
    var button = document.querySelector('#submit-button');

    braintree.dropin.create({
      authorization: 'CLIENT_AUTHORIZATION',
      container: '#dropin-container'
    }, function (createErr, instance) {
      button.addEventListener('click', function () {
        instance.requestPaymentMethod(function (requestPaymentMethodErr, payload) {
          // Submit payload.nonce to your server
        });
      });
    });
  </script>
</body>
</html>
