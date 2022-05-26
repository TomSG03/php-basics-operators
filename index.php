<?php

$firstName = 'ульяна';
$middleName = 'пантелеймоновна';
$lastName = 'спиридонова';

$strFull = "$firstName $middleName $lastName";
$fullName = mb_convert_case($strFull, MB_CASE_TITLE, "UTF-8");
echo "Полное имя: '$fullName'";

$strSurnameAndInitials = $lastName.' '.mb_substr($firstName, 0, 1).'.'.mb_substr($middleName, 0, 1).'.';
$surnameAndInitials = preg_replace_callback('/(^|\.|\s){1}\w/u',
  static function($m) {
    return mb_convert_case($m[0], MB_CASE_UPPER, "UTF-8");
  },
  $strSurnameAndInitials);
echo PHP_EOL;
echo "Фамилия и инициалы: '$surnameAndInitials'";

$strFIO = mb_substr($firstName, 0, 1).mb_substr($middleName, 0, 1).mb_substr($lastName, 0, 1);
$fio = mb_convert_case($strFIO, MB_CASE_UPPER, "UTF-8");
echo PHP_EOL;
echo "Аббревиатура: '$fio'";
echo PHP_EOL;
