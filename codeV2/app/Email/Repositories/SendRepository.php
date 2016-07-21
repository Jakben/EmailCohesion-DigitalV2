<?php namespace Email\Repositories;
use Email\Repositories\MailerRepository;

$mailer = new MailerRepository();

$mailer->addRecipient('test@example.com');
$mailer->addRecipient('foo@example.com');
$mailer->addRecipient('bar@example.com');

$mailer->send('This message has been sent to 3 recipients');