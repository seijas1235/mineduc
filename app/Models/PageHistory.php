<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageHistory extends Model
{
    use HasFactory;

    /**
     * Get the page that owns the history.
     */
    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    /**
     * Get the user that edited the page.
     */
    public function editedBy()
    {
        return $this->belongsTo(User::class, 'edited_by');
    }
}