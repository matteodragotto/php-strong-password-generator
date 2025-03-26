<?php

$passwordLength = isset($_GET['characters']) ? (int)$_GET['characters'] : 0;

$lowerCaseLetters = isset($_GET['lowerCaseLetters']) && $_GET['lowerCaseLetters'] === 'on';
$upperCaseLetters = isset($_GET['upperCaseLetters']) && $_GET['upperCaseLetters'] === 'on';
$number = isset($_GET['numbers']) && $_GET['numbers'] === 'on';
$symbols = isset($_GET['symbols']) && $_GET['symbols'] === 'on';

$password = '';

function randomPassword($passwordLength)
{

  global $lowerCaseLetters;
  global $upperCaseLetters;
  global $number;
  global $symbols;

  $lowerCase = 'abcdefghijklmnopqrstuvwxyz';
  $upperCase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $numbers = '0123456789';
  $specialChar = '!@#$%^&*()_+-=[]{}|;:,.?';

  $allCharacters = '';

  if ($lowerCaseLetters) {
    $allCharacters .= $lowerCase;
  }

  if ($upperCaseLetters) {
    $allCharacters .= $upperCase;
  }

  if ($number) {
    $allCharacters .= $numbers;
  }

  if ($symbols) {
    $allCharacters .= $specialChar;
  }

  if (strlen($allCharacters) === 0) {
    return '';
  }

  $password = '';

  for ($i = 0; $i < $passwordLength; $i++) {
    $randomCharacter = random_int(0, strlen($allCharacters) - 1);
    $password .= $allCharacters[$randomCharacter];
  }

  return $password;
}
