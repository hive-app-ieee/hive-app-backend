<?php

namespace App\Domain\Workspace\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Workspace extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
}
