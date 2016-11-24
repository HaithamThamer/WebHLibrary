<?php
if (isset($_GET['realfile'])) {
    
    header("Content-Type: application/pdf");
    header('Content-Disposition:attachment;filename='."library.haitham.xyz_".$_GET["realfile"]);
    readfile('./contents/'.$_GET['realfile']);

}
else{
    
}
