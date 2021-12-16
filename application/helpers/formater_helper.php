<?php 

function rupiah($harga){
    return "Rp. " . number_format($harga,0,",",".");
}

?>