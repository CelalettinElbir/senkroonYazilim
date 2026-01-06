<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Advisor;

class Homecontroller extends Controller
{

    public function index()
    {
        SEOTools::setTitle('Senkroon Yazılım - Workcube Yetkili Bayisi | Modern Yazılım Çözümleri');
        SEOTools::setDescription('Senkroon Yazılım olarak Workcube yetkili bayisiyiz. Modern yazılım çözümleri, web tasarım, mobil uygulama geliştirme ve IT danışmanlık hizmetleri sunuyoruz. Workcube ERP çözümleri ile işletmenizi dijitalleştirin.');
        SEOTools::metatags()->setKeywords(['workcube bayisi', 'workcube yetkili bayi', 'workcube partner', 'erp çözümleri', 'yazılım çözümleri', 'web tasarım', 'mobil uygulama', 'IT danışmanlık', 'Senkroon yazılım', 'iş yönetimi']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkroon Yazılım');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('site_name', 'Senkroon Yazılım');
        SEOTools::opengraph()->addProperty('locale', 'tr_TR');
        SEOTools::opengraph()->addImage(asset('porto/simages/senkroonlogo2.png'));
        SEOTools::twitter()->setSite('@senkroonyazilim');
        SEOTools::twitter()->setType('summary_large_image');
        SEOTools::twitter()->addImage(asset('porto/simages/senkroonlogo2.png'));
        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'Organization');
        SEOTools::jsonLd()->addValue('name', 'Senkroon Yazılım');
        SEOTools::jsonLd()->addValue('url', url()->current());


        $advisors = Advisor::all();


        return view('home.index',compact('advisors'));
    }


    public function about()
    {
        SEOTools::setTitle('Hakkımızda - senkroon Yazılım | Misyonumuz ve Vizyonumuz');
        SEOTools::setDescription('senkroon Yazılım olarak 2020 yılından bu yana modern yazılım çözümleri sunuyoruz. Deneyimli ekibimiz, misyonumuz ve vizyonumuz hakkında detaylı bilgi.');
        SEOTools::metatags()->setKeywords(['hakkımızda', 'senkroon yazılım', 'yazılım şirketi', 'misyon', 'vizyon', 'ekip', 'deneyim', 'kurumsal']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'senkroon Yazılım');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('site_name', 'senkroon Yazılım');
        SEOTools::opengraph()->addProperty('locale', 'tr_TR');
        SEOTools::twitter()->setSite('@senkroonyazilim');
        SEOTools::twitter()->setType('summary');

        return view('home.about');
    }


    public function contactUs()
    {
        SEOTools::setTitle('İletişim - senkroon Yazılım | Bize Ulaşın');
        SEOTools::setDescription('senkroon Yazılım ile iletişime geçin. Yazılım projeniz, danışmanlık hizmetleri ve tüm sorularınız için bizimle iletişime geçebilirsiniz.');
        SEOTools::metatags()->setKeywords(['iletişim', 'senkroon yazılım', 'yazılım teklifi', 'danışmanlık', 'proje teklifi', 'contact']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'senkroon Yazılım');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('site_name', 'senkroon Yazılım');
        SEOTools::opengraph()->addProperty('locale', 'tr_TR');
        SEOTools::twitter()->setSite('@senkroonyazilim');
        SEOTools::twitter()->setType('summary');
        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'ContactPage');
        SEOTools::jsonLd()->addValue('name', 'senkroon Yazılım İletişim');
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
                'company' => 'nullable|string|max:255',
            ]);

            message::create($validated);

            try {
                // Mail::to("celalettin.elbir@senkroon.com")->send(new ContactMail($validated));
                $message = 'Mesajınız başarıyla gönderildi!';
            } catch (\Exception $e) {
                $message = 'Mesajınız veritabanına kaydedildi ancak e-posta gönderilemedi.';
            }

            // AJAX isteği ise JSON döndür
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => $message
                ]);
            }

            return redirect()->route('contact-us')->with('success', $message);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // AJAX isteği ise validation hatalarını JSON olarak döndür
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'errors' => $e->errors()
                ], 422);
            }

            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // AJAX isteği ise genel hatayı JSON olarak döndür
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Bir hata oluştu: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->route('contact-us')->with('error', 'Bir hata oluştu: ' . $e->getMessage());
        }
    }
}
