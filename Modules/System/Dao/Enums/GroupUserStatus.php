<?php

namespace Modules\System\Dao\Enums;

use BenSampo\Enum\Enum;
use Modules\System\Dao\Enums\ColorType;
use Modules\System\Dao\Traits\StatusTrait;

class GroupUserStatus extends Enum
{
    const Customer = 'customer';   
    const Developer = 'developer';   
}
