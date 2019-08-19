<?php

namespace App;

class Scaner {

    protected $urls ;

public function __construct(array  $urls)
{
    $this->urls = $urls;
}

public function scnerGet()
{   
    foreach ($this->urls as $url){

        $url= $url."++";

    }

}


}