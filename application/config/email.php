<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $config['protocol']    = 'smtp';
// $config['smtp_host']   = 'smtp.yourhost.com'; // Replace with your SMTP host
// $config['smtp_port']   = 587; // Usually 587 for TLS, 465 for SSL
// $config['smtp_user']   = 'your_smtp_user'; // Replace with your SMTP username
// $config['smtp_pass']   = 'your_smtp_pass'; // Replace with your SMTP password
// $config['mailtype']    = 'html'; // Can be 'text' or 'html'
// $config['charset']     = 'utf-8';
// $config['newline']     = "\r\n";
// $config['crlf']        = "\r\n";
// $config['smtp_timeout'] = 30; // Timeout in seconds
// $config['smtp_crypto'] = 'tls'; // Can be 'ssl' or 'tls' depending on your SMTP server configuration

//MailHog's SMTP server. only for testing
$config['protocol']    = 'smtp';
$config['smtp_host']   = 'localhost';
$config['smtp_port']   = 1025; // MailHog SMTP port
$config['smtp_user']   = ''; // Leave empty
$config['smtp_pass']   = ''; // Leave empty
$config['mailtype']    = 'html';
$config['charset']     = 'utf-8';
$config['wordwrap']    = TRUE;
$config['newline']     = "\r\n";
$config['crlf']        = "\r\n";