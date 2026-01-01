<?php

namespace App\Console\Commands;

use App\Models\Module;
use App\Models\Sector;
use App\Models\Advisor;
use Illuminate\Console\Command;
use Carbon\Carbon;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate XML sitemap for Senkron Yazılım';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Sitemap oluşturuluyor...');

        $xml = new \DOMDocument('1.0', 'UTF-8');
        $xml->formatOutput = true;

        $urlset = $xml->createElement('urlset');
        $urlset->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        $xml->appendChild($urlset);

        $baseUrl = rtrim(config('app.url', 'https://www.senkronyazilim.com'), '/');
        $today = Carbon::now()->format('Y-m-d');

        $staticPages = [
            ['url' => '/', 'changefreq' => 'daily', 'priority' => '1.0'],
            ['url' => '/about', 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['url' => '/contact-us', 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['url' => '/workcube-modulleri', 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['url' => '/sektorel-uygulamalar', 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['url' => '/danismanlik-cozumleri', 'changefreq' => 'monthly', 'priority' => '0.6'],
        ];

        foreach ($staticPages as $page) {
            $url = $xml->createElement('url');
            $url->appendChild($xml->createElement('loc', $baseUrl . $page['url']));
            $url->appendChild($xml->createElement('lastmod', $today));
            $url->appendChild($xml->createElement('changefreq', $page['changefreq']));
            $url->appendChild($xml->createElement('priority', $page['priority']));
            $urlset->appendChild($url);
        }

        try {
            $modules = Module::where('is_active', true)->get();
            foreach ($modules as $module) {
                $url = $xml->createElement('url');
                $url->appendChild($xml->createElement('loc', $baseUrl . '/workcube-modulleri/' . $module->id));
                $url->appendChild($xml->createElement('lastmod', $module->updated_at->format('Y-m-d')));
                $url->appendChild($xml->createElement('changefreq', 'monthly'));
                $url->appendChild($xml->createElement('priority', '0.8'));
                $urlset->appendChild($url);
            }
            $this->info('Modüller eklendi: ' . $modules->count());
        } catch (\Exception $e) {
            $this->warn('Modüller eklenirken hata: ' . $e->getMessage());
        }

        try {
            $sectors = Sector::where('is_active', true)->get();
            foreach ($sectors as $sector) {
                $url = $xml->createElement('url');
                $url->appendChild($xml->createElement('loc', $baseUrl . '/sektorel-uygulamalar/' . $sector->slug));
                $url->appendChild($xml->createElement('lastmod', $sector->updated_at->format('Y-m-d')));
                $url->appendChild($xml->createElement('changefreq', 'monthly'));
                $url->appendChild($xml->createElement('priority', '0.7'));
                $urlset->appendChild($url);
            }
            $this->info('Sektörler eklendi: ' . $sectors->count());
        } catch (\Exception $e) {
            $this->warn('Sektörler eklenirken hata: ' . $e->getMessage());
        }

        try {
            $advisors = Advisor::all();
            foreach ($advisors as $advisor) {
                $url = $xml->createElement('url');
                $url->appendChild($xml->createElement('loc', $baseUrl . '/danismanlik-cozumleri/' . $advisor->slug));
                $url->appendChild($xml->createElement('lastmod', $advisor->updated_at->format('Y-m-d')));
                $url->appendChild($xml->createElement('changefreq', 'monthly'));
                $url->appendChild($xml->createElement('priority', '0.5'));
                $urlset->appendChild($url);
            }
            $this->info('Danışmanlar eklendi: ' . $advisors->count());
        } catch (\Exception $e) {
            $this->warn('Danışmanlar eklenirken hata: ' . $e->getMessage());
        }

        $sitemapPath = public_path('sitemap.xml');
        $xml->save($sitemapPath);

        $this->info('Sitemap başarıyla oluşturuldu: ' . $sitemapPath);
        $this->info('Toplam ' . $urlset->childNodes->length . ' URL eklendi.');

        return 0;
    }
}
