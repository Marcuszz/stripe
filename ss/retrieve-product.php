<?php
require "vendor/autoload.php";


$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIJYEXqSC9R4Q9sK9bKCpi5XKqb0kdNhCNPmXTBIgTCpZ8mVea83pE1qQkLKaCc8JR6fUJP0PjXBT1e1Q324At003LiJRpdi'
);
$result =$stripe->products->retrieve(
  'prod_MP7OcTr4p9au8o',
  []
);
var_dump($result);
