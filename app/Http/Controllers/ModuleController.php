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
            SEOTools::metatags()->setKeywords(['mikro modüller', 'micro modules', 'hafif yazılım', 'lightweight software', 'senkron yazılım', 'hızlı çözümler', 'quick solutions', 'mini yazılımlar', 'mini software', 'basit modüller', 'simple modules', 'yazılım bileşenleri', 'software components']);
            SEOTools::jsonLd()->addValue('name', 'Mikro Modüller');
        } else {
            SEOTools::setTitle('Yazılım Modüllerimiz - Senkron Yazılım | Özel Çözümler');
            SEOTools::setDescription('Senkron Yazılım tarafından geliştirilen özel yazılım modülleri. CRM, ERP, e-ticaret, muhasebe ve daha fazlası. Hazır çözümlerimizi keşfedin.');
            SEOTools::metatags()->setKeywords(['yazılım modülleri', 'software modules', 'crm', 'erp', 'e-ticaret', 'e-commerce', 'muhasebe', 'accounting', 'hazır yazılım', 'ready software', 'senkron yazılım', 'özel modüller', 'custom modules', 'işletme yazılımı', 'business software', 'yazılım çözümleri', 'software solutions']);
            SEOTools::jsonLd()->addValue('name', 'Yazılım Modülleri');
        }
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkron Yazılım');
        SEOTools::metatags()->addMeta('viewport', 'width=device-width, initial-scale=1');
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
        SEOTools::jsonLd()->addValue('logo', [
            '@type' => 'ImageObject',
            'url' => asset('porto/simages/senkroonlogo2.png'),
            'width' => 400,
            'height' => 400
        ]);
        SEOTools::jsonLd()->addValue('url', url()->current());

        $modules = Module::where('is_active', true)
            ->where('category', $category)
            ->whereNull('parent_id') // Sadece ana modülleri getir
            ->orderBy('order')
            ->get();

        // Category'ye göre view seç
        $viewName = ($category === 'mikro') ? 'modules.mikro_index' : 'modules.index';

        return view($viewName, compact('modules', 'category'));
    }

    public function show($category, $moduleSlug)
    {
        $module = Module::with('children')
            ->where('slug', $moduleSlug)
            ->where('category', $category)
            ->where('is_active', true)
            ->firstOrFail();

        abort_if(!$module->is_active, 404);

        SEOTools::setTitle($module->title . ' Modülü - Senkron Yazılım | Detaylı Bilgiler');
        SEOTools::setDescription($module->short_description ?? 'Senkron Yazılım ' . $module->title . ' modülü hakkında detaylı bilgiler, özellikleri ve kullanım alanları.');
        SEOTools::metatags()->setKeywords([strtolower($module->title), strtolower($module->title) . ' modülü', strtolower($module->title) . ' module', 'yazılım modülü', 'software module', 'senkron yazılım', 'detay', 'details', 'özellikler', 'features', 'kullanım alanı', 'use case', 'işletme yazılımı', 'business software']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkron Yazılım');
        SEOTools::metatags()->addMeta('viewport', 'width=device-width, initial-scale=1');
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
        SEOTools::jsonLd()->addValue('logo', [
            '@type' => 'ImageObject',
            'url' => asset('porto/simages/senkroonlogo2.png'),
            'width' => 400,
            'height' => 400
        ]);
        SEOTools::jsonLd()->addValue('url', url()->current());
        SEOTools::jsonLd()->addValue('applicationCategory', 'BusinessApplication');
        SEOTools::jsonLd()->addValue('operatingSystem', 'Web-based');
        SEOTools::jsonLd()->addValue('author', [
            '@type' => 'Organization',
            'name' => 'Senkron Yazılım',
            'logo' => [
                '@type' => 'ImageObject',
                'url' => asset('porto/simages/senkroonlogo2.png'),
                'width' => 400,
                'height' => 400
            ]
        ]);

        // Category'ye göre view seç
        $viewName = ($category === 'mikro') ? 'modules.mikro_show' : 'modules.show';

        return view($viewName, compact('module'));
    }
}
