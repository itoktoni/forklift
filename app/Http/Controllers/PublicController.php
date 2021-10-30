<?php

namespace App\Http\Controllers;

use App;
use Artesaos\SEOTools\Facades\SEOTools;
use Modules\System\Plugins\Helper;
use Modules\System\Plugins\Views;

class PublicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['account', 'wishlist']);

        SEOTools::setTitle(env('website.name'));
        SEOTools::setDescription(config('website.seo'));
        SEOTools::opengraph()->setUrl(url('/'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage(Helper::files('logo/' . config('website.logo')));
    }

    private function share($data = [])
    {
        $view = [
            
        ];

        return array_merge($view, $data);
    }

    public function index(){

        return view(Views::frontend('homepage'), $this->share());
    }

}
