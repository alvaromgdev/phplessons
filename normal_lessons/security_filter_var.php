<?php
//filter_var function validates and sanitizes input data
$user_input = "<script>alert('Your site sucks!');</script>";
echo filter_var($user_input, FILTER_SANITIZE_STRIPPED);

?>