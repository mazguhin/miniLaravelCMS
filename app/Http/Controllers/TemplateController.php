<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class TemplateController extends Controller
{
    public function index() {

      $setting = Setting::where('name','activeTemplate')->firstOrFail();
      return view('templates.'.$setting['value'].'.index');
    }
}
