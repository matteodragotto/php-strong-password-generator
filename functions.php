<?php

$passwordLength = $_GET['characters'];

$password = '';

function randomPassword($passwordLength)
{
  $lowerCaseLetters = 'abcdefghijklmnopqrstuvwxyz';
  $upperCaseLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $numbers = '0123456789';
  $specialChar = '!@#$%^&*()_+-=[]{}|;:,.?';

  $allCharacters = $lowerCaseLetters .  $upperCaseLetters . $numbers . $specialChar;
  $password = '';

  for ($i = 0; $i < $passwordLength; $i++) {
    $randomCharacter = random_int(0, strlen($allCharacters) - 1);
    $password .= $allCharacters[$randomCharacter];
  }

  return $password;
}
