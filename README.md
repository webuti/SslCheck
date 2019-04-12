# SslCheck
Provides information about the ssl certificate


composer require webuti/sslcheck


$domain = 'webuti.com';
$check = new Main($domain);

print_r($check->getRemainingDate());

