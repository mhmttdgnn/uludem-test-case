<?php

namespace App\Models\SQLSrv;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cari extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';

    protected $table = 'dbo.CARI';
}
