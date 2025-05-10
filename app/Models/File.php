<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    /**
     * Get the folder that owns the file.
     */
    public function folder()
    {
        return $this->belongsTo(Folder::class, 'folder_id');
    }

    /**
     * Get the user that uploaded the file.
     */
    public function uploadedBy()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}