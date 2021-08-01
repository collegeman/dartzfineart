<?php

add_filter('storefront_copyright_text', function() {
  return sprintf('&copy;%s Diane Artz Furlong. All rights reserved.', date('Y'));
});

add_filter('storefront_credit_link', '__return_false');