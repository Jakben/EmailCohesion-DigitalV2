<?php
//require_once('code/core/autoloader.php');
//spl_autoload_register('Autoloader::loader');

require_once __DIR__ . '/../vendor/autoload.php';
//require_once('Email/Repositories/SendRepository.php');

$mailer = new MailerRepository();

$mailer->addRecipient('test@example.com');
$mailer->addRecipient('foo@example.com');
$mailer->addRecipient('bar@example.com');

$mailer->send('This message has been sent to 3 recipients');