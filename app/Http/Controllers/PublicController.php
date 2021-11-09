<?php

namespace App\Http\Controllers;

use App;
use Artesaos\SEOTools\Facades\SEOTools;
use Modules\System\Plugins\Helper;
use Modules\System\Plugins\Views;

class PublicController extends Controller
{

    public $current_url;

    public function __construct()
    {
        $this->middleware('auth')->only(['account', 'wishlist']);

        $this->current_url = request()->segment(1);

        SEOTools::setTitle(env('website.name'));
        SEOTools::setDescription(config('website.seo'));
        SEOTools::opengraph()->setUrl(url('/'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage(Helper::files('logo/' . config('website.logo')));
    }

    private function share($data = [])
    {
        $view = [
            'current_url' => $this->current_url
        ];

        return array_merge($view, $data);
    }

    public function index(){

        return view(Views::frontend('homepage'), $this->share());
    }

    public function about(){

        return view(Views::frontend(__FUNCTION__), $this->share());
    }

    public function services(){

        return view(Views::frontend(__FUNCTION__), $this->share());
    }

    public function spareParts(){

        return view(Views::frontend('spareparts'), $this->share());
    }

    public function articles(){

        return view(Views::frontend(__FUNCTION__), $this->share());
    }

    public function contact(){

        return view(Views::frontend(__FUNCTION__), $this->share());
    }


}
