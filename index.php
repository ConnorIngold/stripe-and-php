
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <h2 class="my-4 text-center"> Intro to vue.js course [$49.99]</h2>
  <form action="charge.php" method="post" id="payment-form">
    <div class="form-row">
      <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
      <input type="text" name="last_name"  class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
      <input type="email" name="email"     class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">
      <div id="card-element" class="form-control">
        <!-- A Stripe Element will be inserted here. -->
      </div>
      <!-- Used to display form errors. -->
      <div id="card-errors" role="alert"></div>
    </div>

    <button>Submit Payment</button>
  </form>
</div>

  <script src="https://js.stripe.com/v3/"></script>
  <script src="javascript/charge.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
