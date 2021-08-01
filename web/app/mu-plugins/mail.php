<?php

// ===========================================================
// PHPMailer configuration by environment
// ===========================================================

add_action('phpmailer_init', function($phpmailer) {
  $phpmailer->isSMTP();
  $phpmailer->Host = getenv('SMTP_HOST');
  $phpmailer->SMTPAuth = getenv('SMTP_AUTH');
  $phpmailer->Port = getenv('SMTP_PORT');
  $phpmailer->Username = getenv('SMTP_USER');
  $phpmailer->Password = getenv('SMTP_PASS');
});