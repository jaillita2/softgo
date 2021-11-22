<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Create extends Model
{
    use HasFactory;

}

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class User_Create extends Model implements AuthenticatableContract {

    use Authenticatable;

    // ...

}