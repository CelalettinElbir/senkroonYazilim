<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;
use Artesaos\SEOTools\Facades\SEOTools;

class SectorController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Hizmet Verdiğimiz Sektörler - Senkron Yazılım | Sektörel Deneyim');
        SEOTools::setDescription('Senkron Yazılım olarak eğitim, sağlık, finans, e-ticaret, üretim ve daha birkçok sektörde yazılım çözümleri sunuyoruz. Sektörel deneyimimizi keşfedin.');
        SEOTools::metatags()->setKeywords(['sektörler', 'eğitim yazılımı', 'sağlık yazılımı', 'finans yazılımı', 'e-ticaret', 'üretim yazılımı', 'senkron yazılım', 'industry solutions']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkron Yazılım');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('site_name', 'Senkron Yazılım');
        SEOTools::opengraph()->addProperty('locale', 'tr_TR');
        SEOTools::opengraph()->addImage(asset('porto/simages/senkronlogo2.png'));
        SEOTools::twitter()->setSite('@senkronyazilim');
        SEOTools::twitter()->setType('summary_large_image');
        SEOTools::twitter()->addImage(asset('porto/simages/senkronlogo2.png'));
        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'ItemList');
        SEOTools::jsonLd()->addValue('name', 'Hizmet Verdiğimiz Sektörler');
        SEOTools::jsonLd()->addValue('logo', asset('porto/simages/senkroonlogo2.png'));
        SEOTools::jsonLd()->addValue('url', url()->current());

        $sectors = Sector::query()
            ->where('is_active', true)
            ->orderBy('name')
            ->get();

        return view('sectors.index', ['sectors' => $sectors]);
    }

    public function show(string $slug)
    {
        $sector = Sector::where('slug', $slug)->where('is_active', true)->first();

        if (! $sector) {
            abort(404);
        }

        SEOTools::setTitle($sector->name . ' Sektörü Yazılım Çözümleri - Senkron Yazılım');
        SEOTools::setDescription($sector->description ?? $sector->name . ' sektöründe Senkron Yazılım tarafından geliştirilen özel yazılım çözümleri, hizmetler ve başarı öykelerimiz.');
        SEOTools::metatags()->setKeywords([strtolower($sector->name), strtolower($sector->name) . ' yazılımı', 'sektörel çözüm', 'senkron yazılım', 'industry software']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkron Yazılım');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::opengraph()->addProperty('site_name', 'Senkron Yazılım');
        SEOTools::opengraph()->addProperty('locale', 'tr_TR');
        SEOTools::opengraph()->addProperty('article:author', 'Senkron Yazılım');
        SEOTools::twitter()->setSite('@senkronyazilim');
        SEOTools::twitter()->setType('summary_large_image');
        if(isset($sector->image)) {
            SEOTools::opengraph()->addImage(asset($sector->image));
            SEOTools::twitter()->addImage(asset($sector->image));
        } else {
            SEOTools::opengraph()->addImage(asset('porto/simages/senkronlogo2.png'));
            SEOTools::twitter()->addImage(asset('porto/simages/senkronlogo2.png'));
        }
        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'Service');
        SEOTools::jsonLd()->addValue('name', $sector->name . ' Sektörü Yazılım Çözümleri');
        SEOTools::jsonLd()->addValue('description', $sector->description);
        SEOTools::jsonLd()->addValue('logo', asset('porto/simages/senkroonlogo2.png'));
        SEOTools::jsonLd()->addValue('url', url()->current());
        SEOTools::jsonLd()->addValue('provider', [
            '@type' => 'Organization',
            'name' => 'Senkron Yazılım'
        ]);

        return view('sectors.show', ['sector' => $sector]);
    }


}
