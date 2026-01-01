<?php

namespace App\Http\Controllers;

use App\Models\Advisor;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class AdvisorController extends Controller
{

    public function index()
    {
        SEOTools::setTitle('Uzman Danışmanlarımız - Senkron Yazılım | Deneyimli Ekip');
        SEOTools::setDescription('Senkron Yazılım\'da sizlere hizmet veren deneyimli danışmanlarımız. Yazılım, teknoloji ve iş süreçleri konusunda uzman ekibimizle tanışın.');
        SEOTools::metatags()->setKeywords(['danışmanlar', 'uzman ekip', 'yazılım danışmanı', 'teknoloji uzmanı', 'senkron yazılım ekip', 'consultants']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkron Yazılım');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('site_name', 'Senkron Yazılım');
        SEOTools::opengraph()->addProperty('locale', 'tr_TR');
        SEOTools::twitter()->setSite('@senkronyazilim');
        SEOTools::twitter()->setType('summary_large_image');
        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'ItemList');
        SEOTools::jsonLd()->addValue('name', 'Uzman Danışmanlarımız');
        SEOTools::jsonLd()->addValue('url', url()->current());

       $advisors = Advisor::all();



        return view('advisors.index',compact('advisors'));
    }
    public function show($slug)
    {
        $advisor = Advisor::where('slug', $slug)->firstOrFail();

        SEOTools::setTitle($advisor->name . ' - Senkron Yazılım Danışmanı | Profil');
        SEOTools::setDescription($advisor->title ?? $advisor->name . ' - Senkron Yazılım ekibinde yer alan deneyimli danışman. Uzmanlık alanları ve projeleri hakkında detaylı bilgiler.');
        SEOTools::metatags()->setKeywords([strtolower($advisor->name), 'danışman', 'uzman', 'senkron yazılım', 'consultant profile']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkron Yazılım');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'profile');
        SEOTools::opengraph()->addProperty('site_name', 'Senkron Yazılım');
        SEOTools::opengraph()->addProperty('locale', 'tr_TR');
        SEOTools::opengraph()->addProperty('profile:first_name', $advisor->name);
        SEOTools::twitter()->setSite('@senkronyazilim');
        SEOTools::twitter()->setType('summary');
        // if(isset($advisor->image)) {
        //     SEOTools::opengraph()->addImage(asset($advisor->image));
        //     SEOTools::twitter()->addImage(asset($advisor->image));
        // } else {
        //     SEOTools::opengraph()->addImage(asset('porto/simages/senkronlogo2.png'));
        //     SEOTools::twitter()->addImage(asset('porto/simages/senkronlogo2.png'));
        // }
        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'Person');
        SEOTools::jsonLd()->addValue('name', $advisor->name);
        SEOTools::jsonLd()->addValue('jobTitle', $advisor->title ?? 'Danışman');
        SEOTools::jsonLd()->addValue('url', url()->current());
        SEOTools::jsonLd()->addValue('worksFor', [
            '@type' => 'Organization',
            'name' => 'Senkron Yazılım'
        ]);


        return view('advisors.show', compact('advisor'));
    }
}
