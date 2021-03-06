<?php

namespace App\Validation\Rules;

use App\Model\ClassList;
use Respect\Validation\Rules\AbstractRule;

class ClassAvailable extends AbstractRule
{
    public function validate($input)
    {

        $class = ClassList::where('name', $input)->first();
        if (count($class) == 0) {
            return true;
        }
        return false;
    }
}