<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    /**
     * Get the parent folder that owns the folder.
     */
    public function parent()
    {
        return $this->belongsTo(Folder::class, 'parent_id');
    }

    /**
     * Get the child folders for the folder.
     */
    public function children()
    {
        return $this->hasMany(Folder::class, 'parent_id');
    }

    /**
     * Get the user that created the folder.
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}