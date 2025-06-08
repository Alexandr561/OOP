<?php

namespace App;

class Developer extends Worker
{
    use HasRest;
    protected string $position = 'qwe';

    public function work()
    {
        echo 'sdssd';
    }




}
