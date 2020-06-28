<?php

$targetFolder = __DIR__.'/../storage/app/public';
$linkFoler = __DIR__.'/storage';

if(symlink($targetFolder,$linkFoler)){
    echo"Symlink process successfully completed";
}
