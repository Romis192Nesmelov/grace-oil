<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Slide;
use App\Models\HomeBlock;

class StaticController extends Controller
{
    use HelperTrait;

    protected $data = [];

    public function index()
    {
        $this->data['slider'] = Slide::where('active',1)->get();
        $this->data['home_blocks'] = HomeBlock::where('active', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        return $this->showView('home');
    }

    public function changeLang(Request $request)
    {
        $this->validate($request, ['lang' => 'required|in:en,ru']);
        setcookie('lang', $request->input('lang'), time()+(60*60*24*365));
        return redirect()->back();
    }

    protected function showView($view)
    {
        $settings = new SettingsController();

        return view($view, [
            'seo' => $settings->getSeoTags(),
            'metas' => $this->metas,
            'settings' => $settings->getSettings(),
            'menu' => Menu::where('active',1)->get(),
            'data' => $this->data
        ]);
    }
}
