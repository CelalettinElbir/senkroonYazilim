<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class ModuleController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Yazılım Modüllerimiz - Senkron Yazılım | Özel Çözümler');
        SEOTools::setDescription('Senkron Yazılım tarafından geliştirilen özel yazılım modülleri. CRM, ERP, e-ticaret, muhasebe ve daha fazlası. Hazır çözümlerimizi keşfedin.');
        SEOTools::metatags()->setKeywords(['yazılım modülleri', 'crm', 'erp', 'e-ticaret', 'muhasebe', 'hazır yazılım', 'senkron yazılım', 'software modules']);
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
        SEOTools::jsonLd()->addValue('name', 'Yazılım Modülleri');
        SEOTools::jsonLd()->addValue('url', url()->current());

        $modules = Module::where('is_active', true)
            ->where('category', 'workcube')
            ->orderBy('order')
            ->get();

        return view('modules.index', compact('modules'));
    }

    public function show(Module $module)
    {
        abort_if(!$module->is_active, 404);

        SEOTools::setTitle($module->name . ' Modülü - Senkron Yazılım | Detaylı Bilgiler');
        SEOTools::setDescription($module->description ?? 'Senkron Yazılım ' . $module->name . ' modülü hakkında detaylı bilgiler, özellikleri ve kullanım alanları.');
        SEOTools::metatags()->setKeywords([strtolower($module->name), 'yazılım modülü', 'senkron yazılım', 'software module', 'detay']);
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
        if (isset($module->image)) {
            SEOTools::opengraph()->addImage(asset($module->image));
            SEOTools::twitter()->addImage(asset($module->image));
        } else {
            SEOTools::opengraph()->addImage(asset('porto/simages/senkronlogo2.png'));
            SEOTools::twitter()->addImage(asset('porto/simages/senkronlogo2.png'));
        }
        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'SoftwareApplication');
        SEOTools::jsonLd()->addValue('name', $module->name);
        SEOTools::jsonLd()->addValue('description', $module->description);
        SEOTools::jsonLd()->addValue('url', url()->current());
        SEOTools::jsonLd()->addValue('applicationCategory', 'BusinessApplication');
        SEOTools::jsonLd()->addValue('operatingSystem', 'Web-based');

        return view('modules.show', compact('module'));
    }


    public function mikroIndex()
    {
        SEOTools::setTitle('Mikro Modüllerimiz - Senkron Yazılım | Hafif Çözümler');
        SEOTools::setDescription('Senkron Yazılım tarafından geliştirilen hafif mikro yazılım modülleri. Hızlı ve etkili çözümlerimizi keşfedin.');
        SEOTools::metatags()->setKeywords(['mikro modüller', 'hafif yazılım', 'senkron yazılım', 'micro modules']);
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
        SEOTools::jsonLd()->addValue('name', 'Mikro Modüller');
        SEOTools::jsonLd()->addValue('url', url()->current());

        $modules = Module::where('is_active', true)
            ->where('category', 'mikro')
            ->orderBy('order')
            ->get();

        return view('modules.mikro_index', compact('modules'));
    }

}
