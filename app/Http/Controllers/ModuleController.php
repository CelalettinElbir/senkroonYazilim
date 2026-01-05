<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class ModuleController extends Controller
{
    public function index($category = 'workcube')
    {
        // SEO için category'ye göre başlık ayarla
        if ($category === 'mikro') {
            SEOTools::setTitle('Mikro Modüllerimiz - Senkron Yazılım | Hafif Çözümler');
            SEOTools::setDescription('Senkron Yazılım tarafından geliştirilen hafif mikro yazılım modülleri. Hızlı ve etkili çözümlerimizi keşfedin.');
            SEOTools::metatags()->setKeywords(['mikro modüller', 'hafif yazılım', 'senkron yazılım', 'micro modules']);
            SEOTools::jsonLd()->addValue('name', 'Mikro Modüller');
        } else {
            SEOTools::setTitle('Yazılım Modüllerimiz - Senkron Yazılım | Özel Çözümler');
            SEOTools::setDescription('Senkron Yazılım tarafından geliştirilen özel yazılım modülleri. CRM, ERP, e-ticaret, muhasebe ve daha fazlası. Hazır çözümlerimizi keşfedin.');
            SEOTools::metatags()->setKeywords(['yazılım modülleri', 'crm', 'erp', 'e-ticaret', 'muhasebe', 'hazır yazılım', 'senkron yazılım', 'software modules']);
            SEOTools::jsonLd()->addValue('name', 'Yazılım Modülleri');
        }
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
            ->where('category', $category)
            ->orderBy('order')
            ->get();

        // Category'ye göre view seç
        $viewName = ($category === 'mikro') ? 'modules.mikro_index' : 'modules.index';

        return view($viewName, compact('modules', 'category'));
    }

    public function show($category, $moduleSlug)
    {
        $module = Module::where('slug', $moduleSlug)
            ->where('category', $category)
            ->where('is_active', true)
            ->firstOrFail();

        abort_if(!$module->is_active, 404);

        SEOTools::setTitle($module->title . ' Modülü - Senkron Yazılım | Detaylı Bilgiler');
        SEOTools::setDescription($module->short_description ?? 'Senkron Yazılım ' . $module->title . ' modülü hakkında detaylı bilgiler, özellikleri ve kullanım alanları.');
        SEOTools::metatags()->setKeywords([strtolower($module->title), 'yazılım modülü', 'senkron yazılım', 'software module', 'detay']);
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
        if ($module->cover_image) {
            SEOTools::opengraph()->addImage(asset('storage/' . $module->cover_image));
            SEOTools::twitter()->addImage(asset('storage/' . $module->cover_image));
        } else {
            SEOTools::opengraph()->addImage(asset('porto/simages/senkronlogo2.png'));
            SEOTools::twitter()->addImage(asset('porto/simages/senkronlogo2.png'));
        }
        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'SoftwareApplication');
        SEOTools::jsonLd()->addValue('name', $module->title);
        SEOTools::jsonLd()->addValue('description', $module->short_description);
        SEOTools::jsonLd()->addValue('url', url()->current());
        SEOTools::jsonLd()->addValue('applicationCategory', 'BusinessApplication');
        SEOTools::jsonLd()->addValue('operatingSystem', 'Web-based');

        // Category'ye göre view seç
        $viewName = ($category === 'mikro') ? 'modules.mikro_show' : 'modules.show';

        return view($viewName, compact('module'));
    }
}
