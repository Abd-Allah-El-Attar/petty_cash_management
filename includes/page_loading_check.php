<?php

function isLoadedByPost(){
    echo $_SERVER['REQUEST_METHOD'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        return true;
    }
    else{
        die('Incorrect method of accessing webpage.');
    }
}