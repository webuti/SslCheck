# SslCheck
Provides information about the ssl certificate

$domain = 'webuti.com';
$check = new Main($domain);

print_r($check->getRemainingDate());

