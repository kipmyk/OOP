<?php

require 'functions.php';

$contact = new Contact('e@kipmyk.co.ke');

echo Email::send($contact);