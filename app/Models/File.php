<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class File extends Model
{

    protected $table = 'files';
    protected $fillable = [
        'ticket_id',
        'fileName',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

}
