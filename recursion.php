<?php
function factor($n){
  if ($n<=0) {
    // code...
    return 1;
  }else {
    return $n*factor($n-1);
  }
}
echo factor(6); ?>
