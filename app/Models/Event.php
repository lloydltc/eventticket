<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EventImage;
use App\Models\Ticket;

class Event extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function eventImage(){

            return $this->hasMany(EventImage::class);

    }
    public function ticket(){

        return $this->hasMany(Ticket::class);

}
}
