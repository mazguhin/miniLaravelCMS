<?php

namespace App\Models\Modules\Front\Comment;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function replies() {
      return $this->hasMany($this, 'comment_parent');
    }
}
