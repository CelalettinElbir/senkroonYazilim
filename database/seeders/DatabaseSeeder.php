<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();



        // Tüm ERP modül seederlarını çalıştır
        $this->call([
            SalesSupplyDistributionSeeder::class,
            Fab_Seeeder::class,
            uretim::class,
            Hr::class,
            Crm::class,
            PMS::class,
            Intranet::class,
            BPM::class,
            SUBO::class,
            BI::class,
            LMS::class,
        ]);

        $this->command->info('🎉 Tüm ERP modül seederlari başarıyla çalıştırıldı!');
    }
}
