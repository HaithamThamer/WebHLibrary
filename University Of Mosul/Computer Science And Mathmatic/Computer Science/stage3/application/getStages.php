<?php

foreach (scandir('./../../') as $value){
    if (is_dir($value)) {
        echo $value;
    }
}