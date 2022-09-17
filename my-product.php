<?php

require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_51LgIJYEXqSC9R4Q9sK9bKCpi5XKqb0kdNhCNPmXTBIgTCpZ8mVea83pE1qQkLKaCc8JR6fUJP0PjXBT1e1Q324At003LiJRpdi');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost:4242/public';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => 'price_1LiqByEXqSC9R4Q9jYbx8zTa',
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);