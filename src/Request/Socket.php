<?php

namespace Webuti\SslCheck\Request;

/**
 * Class Socket
 * @package Webuti\SslCheck\Request
 */
class Socket
{
    /**
     * @param $domain
     * @return array
     */
    static function get($domain)
    {
        $g = stream_context_create(array("ssl" => array("capture_peer_cert" => true)));
        $r = stream_socket_client("ssl://{$domain}:443", $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $g);
        $cont = stream_context_get_params($r);
        return openssl_x509_parse($cont["options"]["ssl"]["peer_certificate"]);

    }
}
