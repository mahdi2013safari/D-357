<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class DoctorDepartment extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use SoftDeletes;

    protected $guarded = [];
}
