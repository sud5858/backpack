<?php

namespace App\Http\Controllers;

use Backpack\PageManager\app\Models\Page;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index($slug)
    {
        $page = Page::findBySlug($slug);

        if (!$page)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }
         //dd($page->extras);

        $extras= json_decode($page->extras,true);
        
        $this->data['title'] = $page->title;
        $this->data['meta_description'] = $extras['meta_description'];
        $this->data['meta_keywords'] = $extras['meta_keywords'];

           $this->data['page'] = $page->withFakes();

        return view('pages.'.$page->template, $this->data);
    }




}