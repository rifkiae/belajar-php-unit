<?php
//mske class Wordcount
class Wordcount{
    //menghitung jumlh kata
    public function countWord ($sentence) {
    //memcahkan kalimat jadi kata-kata dan menghiutng jumlah.
      return count(explode(" ", $sentence)) ; 
    }
}