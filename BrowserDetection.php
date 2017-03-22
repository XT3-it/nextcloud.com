<?php

// Simple browser and OS detection script.
// This will not work if User Agent is false.

$agent = $_SERVER['HTTP_USER_AGENT'];

// Detect Device/Operating System

if(preg_match('/Linux/i',$agent)) $os = 'Linux';
  elseif(preg_match('/Mac/i',$agent)) $os = 'Mac';
  elseif(preg_match('/iPhone/i',$agent)) $os = 'iPhone';
  elseif(preg_match('/iPad/i',$agent)) $os = 'iPad';
  elseif(preg_match('/Droid/i',$agent)) $os = 'Droid';
  elseif(preg_match('/Unix/i',$agent)) $os = 'Unix';
  elseif(preg_match('/Windows/i',$agent)) $os = 'Windows';
  else $os = 'Unknown';

// Browser Detection

if(preg_match('/Firefox/i',$agent)) $br = 'Firefox';
  elseif(preg_match('/Mac/i',$agent)) $br = 'Mac';
  elseif(preg_match('/Chrome/i',$agent)) $br = 'Chrome';
  elseif(preg_match('/Opera/i',$agent)) $br = 'Opera';
  elseif(preg_match('/MSIE/i',$agent)) $br = 'IE';
  else $bs = 'Unknown';

?>
