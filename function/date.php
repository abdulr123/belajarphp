<?php
//kita akan menampilkan 4 hari kedepan
//caranya menghitungnya
//60 detik * 60 menit *24 jam * 4 hari
//maka nilainya 345.600

//hari ini
echo date(" l, d M Y") . " | ";

//4 hari kedepan
echo date("l, d M Y", time() + 345600) . " | ";

//4 hari kedepan
echo date("l, d M Y", time() + 60 * 60 * 24 * 4) . " | ";

//untuk mengecek 4 hari kebelakang
echo date("l, d M Y", time() - 60 * 60 * 24 * 4) . " | ";
