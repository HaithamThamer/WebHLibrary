<?php
$count = 0;
foreach (scandir('application/contents') as $value) {
    if ( $value == '.' || $value == '..' || $value == 'index.html' || $value == '.htaccess') {
        continue;
    }
    ++$count;
    if ($count < 10){
        $count = "0".$count;
    }
    
    $size = number_format(floor(filesize('./application/contents/'.$value) / (1024)));
    $time = date('d-m-Y H:i:s',filemtime('./application/contents/'.$value));
    $link = 'application/download.php?realfile='.$value;
    echo 
            "<a href='$link'>"
            . "<div class='post'>"
            . "<ul>"
            . "<li class='post-count'>$count</li>"
            . "<li class='post-name'>$value</li>"
            . "<li class='post-date'>$time</li>"
            . "<li class='post-date'>$size KB</li>"
            . "</ul></div></a>";
    
}
