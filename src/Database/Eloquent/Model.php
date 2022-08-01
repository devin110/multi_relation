<?php

namespace Devin110\MultiRelation\Database\Eloquent;

use Devin110\MultiRelation\MultiRelation;
use Hyperf\Database\Model\Model as Eloquent;

class Model extends Eloquent
{
    use MultiRelation;
}
