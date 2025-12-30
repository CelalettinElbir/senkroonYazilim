<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class Homecontroller extends Controller
{

    public function index()
    {
        SEOTools::setTitle('Senkron Yazılım - Workcube Yetkili Bayisi | Modern Yazılım Çözümleri');
        SEOTools::setDescription('Senkron Yazılım olarak Workcube yetkili bayisiyiz. Modern yazılım çözümleri, web tasarım, mobil uygulama geliştirme ve IT danışmanlık hizmetleri sunuyoruz. Workcube ERP çözümleri ile işletmenizi dijitalleştirin.');
        SEOTools::metatags()->setKeywords(['workcube bayisi', 'workcube yetkili bayi', 'workcube partner', 'erp çözümleri', 'yazılım çözümleri', 'web tasarım', 'mobil uygulama', 'IT danışmanlık', 'senkron yazılım', 'iş yönetimi']);
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
        SEOTools::jsonLd()->addValue('@type', 'Organization');
        SEOTools::jsonLd()->addValue('name', 'Senkron Yazılım');
        SEOTools::jsonLd()->addValue('url', url()->current());

        return view('home.index');
    }


    public function about()
    {
        SEOTools::setTitle('Hakkımızda - Senkron Yazılım | Misyonumuz ve Vizyonumuz');
        SEOTools::setDescription('Senkron Yazılım olarak 2020 yılından bu yana modern yazılım çözümleri sunuyoruz. Deneyimli ekibimiz, misyonumuz ve vizyonumuz hakkında detaylı bilgi.');
        SEOTools::metatags()->setKeywords(['hakkımızda', 'senkron yazılım', 'yazılım şirketi', 'misyon', 'vizyon', 'ekip', 'deneyim', 'kurumsal']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkron Yazılım');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('site_name', 'Senkron Yazılım');
        SEOTools::opengraph()->addProperty('locale', 'tr_TR');
        SEOTools::twitter()->setSite('@senkronyazilim');
        SEOTools::twitter()->setType('summary');

        return view('home.about');
    }


    public function contactUs()
    {
        SEOTools::setTitle('İletişim - Senkron Yazılım | Bize Ulaşın');
        SEOTools::setDescription('Senkron Yazılım ile iletişime geçin. Yazılım projeniz, danışmanlık hizmetleri ve tüm sorularınız için bizimle iletişime geçebilirsiniz.');
        SEOTools::metatags()->setKeywords(['iletişim', 'senkron yazılım', 'yazılım teklifi', 'danışmanlık', 'proje teklifi', 'contact']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkron Yazılım');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('site_name', 'Senkron Yazılım');
        SEOTools::opengraph()->addProperty('locale', 'tr_TR');
        SEOTools::twitter()->setSite('@senkronyazilim');
        SEOTools::twitter()->setType('summary');
        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'ContactPage');
        SEOTools::jsonLd()->addValue('name', 'Senkron Yazılım İletişim');
        SEOTools::jsonLd()->addValue('url', url()->current());

        return view('home.contact-us');
    }

    public function contactUsSubmit(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string|max:5000',
                'phone' => 'required|string|max:20',
                'subject' => 'required|string|max:255',
            ]);

            Message::create($validated);

            return redirect()->route('contact-us')->with('success', 'Mesajınız başarıyla gönderildi!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->route('contact-us')->with('error', 'Bir hata oluştu: ' . $e->getMessage());
        }
    }
}
