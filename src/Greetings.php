<?php

declare(strict_types=1);

namespace App;

class Greetings
{
    public function DizOi(string $nome): string
    {
        return $nome . "Ola tudo bein?";  
    }
}