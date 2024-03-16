<?php

namespace App\Models\MYSql;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $table = 'accounts';

    protected $fillable = [
        'sqlsrv_id',
        'code',
        'name'
    ];

    protected $casts = [
        'created_at'=> 'datetime:Y-m-d H:i:s'
    ];
}
