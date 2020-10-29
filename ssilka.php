<?php
function fCmp($a,$b){
  return strcmp(strtolower($a),strtolower($b));
}
$ridle=["g"=>"Not","o"=>"enough","d"=>"ordinariness"];
uasort($ridle, "fCmp");
