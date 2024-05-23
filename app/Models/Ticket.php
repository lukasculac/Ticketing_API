<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Ticket extends Model
{
    #relationship between ticket and file
    public function files(): hasMany
    {
        return $this->hasMany(File::class);
    }

    protected static function boot() : void
    {
        parent::boot();

        static::deleting(function ($ticket) {
            $ticket->deleteFile();
        });
    }

    public function deleteFile() : void
    {
        Storage::disk('public/uploads')->delete($this->fileName);
    }
    protected $table = 'tickets';

    protected $fillable = [
        'name',
        'email',
        'department',
        'message',
    ];
}
