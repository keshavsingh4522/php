<?php
  use PhpAmqpLib\Connection\AMQPStreamConnection;
  use PhpAmqpLib\Connection\AMQPSSLConnection;
  use PhpAmqpLib\Message\AMQPMessage;

  $url = parse_url(getenv('CLOUDAMQP_URL'));
  $vhost = substr($url['path'], 1);

  if($url['scheme'] === "amqps") {
    $ssl_opts = array(
      'capath' => '/etc/ssl/certs'
    );
    $conn= new AMQPSSLConnection($url['host'], 5671, $url['user'], $url['pass'], $vhost, $ssl_opts);
  } else {
    $conn = new AMQPStreamConnection($url['host'], 5672, $url['user'], $url['pass'], $vhost);
  }
  
  $channel = $conn->channel();
  $channel->exchange_declare('exchange', 'direct', false, false, false);
  $channel->queue_declare('fisrt_queue', false, false, false, false);
  $channel->queue_bind('fisrt_queue', 'exchange', 'test_key');

  $msg = new AMQPMessage('first message');
  $channel->basic_publish($msg, 'first_exchange', '');

  echo " DENEME '\n";

  $channel->close();
  $conn->close();
?>