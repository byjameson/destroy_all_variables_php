  $vars = array_keys(get_defined_vars());
  foreach($vars as $var) {
      if($var == 'GLOBALS' || $var == '_POST' || $var == '_GET' || $var == '_COOKIE' || $var == '_FILES' || $var == '_REQUEST' || $var == '_SERVER' || $var == '_ENV')
          continue;
      unset($$var);
  }
  
  This is destroy whole normal variables in your code. This code is not mine. I found on stackoverflow but it is very useful.
