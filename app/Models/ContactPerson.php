<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContactPerson extends Model
{
    use HasFactory;

    protected $table = "contact_persons";

    protected $fillable = [
        'user_id',
        'contact_person_name',
        'proof_of_title',
        'street',
        'city',
        'postal_code',
        'state',
        'phone',
        'email',
    ] ;

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
