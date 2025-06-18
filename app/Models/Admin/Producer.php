<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    use HasFactory;

    protected $table = 'producers';

    protected $fillable = [
        'ProducerId',
        'ProducerCode',
        'ProducerName'
    ];
}
