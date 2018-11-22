<?php
include '../include/languageClass.php';
$language = new indimi();

$ururimi = $language->escape_string($_POST['language']);

$language ->setLanguage($ururimi);

$value = $language->getLanguage();

echo "hatahiwe ".$value;
?>