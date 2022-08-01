<?php

namespace Devin\MultiRelation\Database\Eloquent;

use Devin\MultiRelation\MultiRelation;
use Hyperf\Database\Model\Model as Eloquent;

class Model extends Eloquent
{
    use MultiRelation;
}
