<?php

namespace App\Models\MYSql;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $table = 'offers';

    protected $fillable = [
        'uuid',
        'title',
        'price',
        'stock_id',
        'account_id'
    ];

    public function stocks()
    {
        return $this->belongsToMany(Stock::class, 'offer_stocks');
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
