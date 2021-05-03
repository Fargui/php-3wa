<?php
$dir = substr(dirname($_SERVER['PHP_SELF']),strlen($_SERVER['DOCUMENT_ROOT']));
echo "<h2>Index of ".$dir.":</h2>";
$g = glob("*");
usort($g,function($a,$b) {
    if(is_dir($a) == is_dir($b))
        return strnatcasecmp($a,$b);
    else
        return is_dir($a) ? -1 : 1;
});

echo implode("<br>",array_map(function($a) {
  $url = $a;
  if (is_dir($a)) $url.='/'; 
  return '<a href="'.$url.'">'.$a.'</a>';
},$g));
