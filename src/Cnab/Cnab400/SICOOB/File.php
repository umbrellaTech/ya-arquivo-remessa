<?php

namespace Umbrella\Ya\RemessaBoleto\Cnab\Cnab400\SICOOB;

class File
{
    public function buildName()
    {
        return 'CS' . date('d') . date('m') . 'A1.REM';
    }
}
