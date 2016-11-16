<?php

namespace App\Http\Controllers\Modules\Front\Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Modules\Front\Comment\Comment;
use App\Setting;

class CommentController extends Controller
{
    public function showComments () {
      $setting = Setting::where('name','activeTemplate')->firstOrFail();

      return view(
      'templates.'.$setting['value'].'.modules.front.comment.showComments',
      [
        'comments'=>Comment::where('comment_parent','0')->get()
      ]);
    }
}
