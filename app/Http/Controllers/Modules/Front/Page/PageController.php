<?php

namespace App\Http\Controllers\Modules\Front\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
use App\Models\Modules\Front\Page\Page;

class PageController extends Controller
{
    public function showPage(Page $id) {
      $setting = Setting::where('name','activeTemplate')->firstOrFail();
      return view(
      'templates.'.$setting['value'].'.modules.front.page.showPage',
      [
        'page'=>$id
      ]);
    }
}
