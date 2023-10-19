<?php

use PHPUnit\Framework\TestCase;

//disini import TestCase dari phpunit sehingga dapat di uji
use function PHPUnit\Framework\once;

//mengimport class Wordcount yg akan diuji 
require_once "WordCount.php";

//make class di uji dengan warisan testcase
class SimpleTest extends TestCase{

    //disini akan diuji  fungsi countword().
    public function testCountWords()  {
        //ini membuat objek
        $wc=new Wordcount();
        //kalimat ini akan dihitung jumlahnya
        $TestSentence="My name is Joko";
        //memanggil countword() dengan kalimat diatas alhasilnya
        $WordCount=$wc->countWord($TestSentence);
        //akan dibandingkan hasil yang diharapkan 4 kata
        $this->assertEquals(4,$WordCount);
    }
}