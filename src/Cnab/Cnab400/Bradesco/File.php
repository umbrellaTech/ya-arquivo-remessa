<?php

namespace Umbrella\Ya\RemessaBoleto\Cnab\Cnab400\Bradesco;

class File
{
    public function buildName()
    {
        return 'CB-cnab400-' . date('d') . date('m') . 'A1.REM';
    }
}
