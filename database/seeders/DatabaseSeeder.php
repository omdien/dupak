<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jenjang;
use App\Models\Butir;
use App\Models\Kegiatan;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Kegiatan
        Kegiatan::create([
            'butir_id' => 1,
            'jenjang_id' => 1,
            'keg_nama' => 'Melakukan Sesuatu yang berguna untuk bangsa dan negara',
            'keg_slug' => 'melakukan-sesuatu-yang-berguna-untuk-bangsa-dan-negara',
            'keg_tgl' => Carbon::parse('02/03/2022'),
            'keg_lokasi' => 'Stasiun KIPM Merak',
            'keg_fisik' => 'Ada-ada saja',
            'keg_keterangan' => 'Rek kitu rek kieu nu penting udud'
        ]);

        Kegiatan::create([
            'butir_id' => 2,
            'jenjang_id' => 1,
            'keg_nama' => 'Memasang kable jaringan ruangan server',
            'keg_slug' => 'Memasang-kable-jaringan-ruangan-server',
            'keg_tgl' => Carbon::parse('02/05/2022'),
            'keg_lokasi' => 'Stasiun KIPM Merak',
            'keg_fisik' => 'Ada-ada saja',
            'keg_keterangan' => 'Rek kitu rek kieu nu penting udud'
        ]);

        // Butir
        Butir::create([
            'but_id' => '01C02',
            'but_kegiatan' => 'Melakukan Pengumpulan Dokumen untuk Kebutuhan Audit TI',
            'but_slug' => 'melakukan-pengumpulan-dokumen-untuk-kebutuhan-audit-ti',
            'but_desc' => 'Melakukan pengumpulan dokumen untuk kebutuhan audit TI adalah melakukan pengumpulan, pemeliharaan dan verifikasi kelengkapan dokumen dari area dan obyek TI yang diaudit. Pengumpulan dokumen dilakukan secara sistematis berdasarkan konteks dan cakupan audit dengan menggunakan metode atau pendekatan yang sesuai, serta memperhatikan referensi waktu audit. Dokumen untuk kebutuhan audit TI dapat berupa hardcopy maupun softcopy yang diperoleh dari auditee atau stakeholder terkait. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. identifikasi area dan obyek TI yang akan diaudit; 2. identifikasi dokumen-dokumen yang dibutuhkan untuk audit TI; dan 3. pengumpulan dokumen-dokumen untuk kebutuhan audit TI. Dokumen yang dikumpulkan dapat berupa hardcopy maupun softcopy yang berkaitan dengan area dan obyek TI yang diaudit. Misalnya dokumentasi pembangunan sistem, dokumentasi bugs aplikasi, dokumentasi rancangan arsitektur, dan sebagainya. Cakupan area TI meliputi namun tidak terbatas pada: keamanan informasi, manajemen layanan, manajemen konfigurasi, operasional sistem. Sedangkan cakupan obyek TI: perangkat keras, piranti lunak, sarana komunikasi, serta fasilitas apapun yang dapat digunakan untuk menginput, menyimpan, mengirimkan, memproses, dan menghasilkan data dalam berbagai bentuk',
            'but_satuan' => 'Dokumen untuk kebutuhan audit TI',
            'but_kredit' => 0.73,
            'but_batasan' => 'Jumlah maksimum kegiatan yang dapat dinilai adalah 2 (dua) kali per tahun. Nilai angka kredit maksimal akan diberikan jika minimal ada 3 obyek yang dicakup dalam 1 area TI. Jika hanya ada 1 obyek, maka akan diberikan nilai angka kredit sepertiganya',
            'but_fisik' => 'Dokumen untuk kebutuhan audit TI yang dikumpulkan memuat namun tidak terbatas pada: 1. area dan obyek TI yang akan diaudit; 2. waktu pengumpulan dokumen; 3. daftar informasi yang dikumpulkan untuk tiap-tiap obyek audit 4. metode pengumpulan dokumen; dan 5. dokumentasi area dan obyek TI yang diaudit',
            'kategori02_id' => 3,
            'jenjang_id' => 3,
            'but_contoh' => '<p>Dewa Mahendra, A.Md., seorang Pranata Komputer Penyelia melakukan pengumpulan dokumen untuk kebutuhan audit TI terhadap area keamanan informasi pada perangkat lunak (aplikasi) yang terdiri dari 3 obyek dokumentasi, yaitu dokumentasi pembangunan aplikasi, dokumentasi bugs aplikasi, dokumentasi rancangan arsitektur aplikasi, maka angka kredit yang diperoleh Dewa Mahendra adalah 1 x 0,730 = 0,730.</p><p>Satuan kegiatan ini adalah keamanan informasi yang merupakan 1 area TI. Angka kredit tersebut diperoleh jika Pranata Komputer menyerahkan bukti fisik yang lengkap. Namun, jika Pranata Komputer tersebut tidak menyertakan bukti fisik metode pengumpulan informasi, maka angka kredit yang diperoleh adalah 4/5 x 0,730 = 0,584</p>'
        ]);

        Butir::create([
            'but_id' => '01C03',
            'but_kegiatan' => 'Ini mah contoh butir kegiatan',
            'but_slug' => 'contoh-slug',
            'but_desc' => 'Melakukan pengumpulan dokumen untuk kebutuhan audit TI adalah melakukan pengumpulan, pemeliharaan dan verifikasi kelengkapan dokumen dari area dan obyek TI yang diaudit. Pengumpulan dokumen dilakukan secara sistematis berdasarkan konteks dan cakupan audit dengan menggunakan metode atau pendekatan yang sesuai, serta memperhatikan referensi waktu audit. Dokumen untuk kebutuhan audit TI dapat berupa hardcopy maupun softcopy yang diperoleh dari auditee atau stakeholder terkait. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. identifikasi area dan obyek TI yang akan diaudit; 2. identifikasi dokumen-dokumen yang dibutuhkan untuk audit TI; dan 3. pengumpulan dokumen-dokumen untuk kebutuhan audit TI. Dokumen yang dikumpulkan dapat berupa hardcopy maupun softcopy yang berkaitan dengan area dan obyek TI yang diaudit. Misalnya dokumentasi pembangunan sistem, dokumentasi bugs aplikasi, dokumentasi rancangan arsitektur, dan sebagainya. Cakupan area TI meliputi namun tidak terbatas pada: keamanan informasi, manajemen layanan, manajemen konfigurasi, operasional sistem. Sedangkan cakupan obyek TI: perangkat keras, piranti lunak, sarana komunikasi, serta fasilitas apapun yang dapat digunakan untuk menginput, menyimpan, mengirimkan, memproses, dan menghasilkan data dalam berbagai bentuk',
            'but_satuan' => 'Dokumen untuk kebutuhan audit TI',
            'but_kredit' => 0.73,
            'but_batasan' => 'Jumlah maksimum kegiatan yang dapat dinilai adalah 2 (dua) kali per tahun. Nilai angka kredit maksimal akan diberikan jika minimal ada 3 obyek yang dicakup dalam 1 area TI. Jika hanya ada 1 obyek, maka akan diberikan nilai angka kredit sepertiganya',
            'but_fisik' => 'Dokumen untuk kebutuhan audit TI yang dikumpulkan memuat namun tidak terbatas pada: 1. area dan obyek TI yang akan diaudit; 2. waktu pengumpulan dokumen; 3. daftar informasi yang dikumpulkan untuk tiap-tiap obyek audit 4. metode pengumpulan dokumen; dan 5. dokumentasi area dan obyek TI yang diaudit',
            'kategori02_id' => 3,
            'jenjang_id' => 3,
            'but_contoh' => '<p>Dewa Mahendra, A.Md., seorang Pranata Komputer Penyelia melakukan pengumpulan dokumen untuk kebutuhan audit TI terhadap area keamanan informasi pada perangkat lunak (aplikasi) yang terdiri dari 3 obyek dokumentasi, yaitu dokumentasi pembangunan aplikasi, dokumentasi bugs aplikasi, dokumentasi rancangan arsitektur aplikasi, maka angka kredit yang diperoleh Dewa Mahendra adalah 1 x 0,730 = 0,730.</p><p>Satuan kegiatan ini adalah keamanan informasi yang merupakan 1 area TI. Angka kredit tersebut diperoleh jika Pranata Komputer menyerahkan bukti fisik yang lengkap. Namun, jika Pranata Komputer tersebut tidak menyertakan bukti fisik metode pengumpulan informasi, maka angka kredit yang diperoleh adalah 4/5 x 0,730 = 0,584</p>'
        ]);

        //Jenjang
        Jenjang::create([
            'jen_id' => 'TE01',
            'jab_id' => 'TE',
            'jen_jenjang' => 'Pranata Komputer Terampil',
            'jen_slug' => 'pranata-komputer-terampil'
        ]);
            
        Jenjang::create([
            'jen_id' => 'TE02',
            'jab_id' => 'TE',
            'jen_jenjang' => 'Pranata Komputer Mahir',
            'jen_slug' => 'pranata-komputer-mahir'
        ]);
            
        Jenjang::create([
            'jen_id' => 'TE03',
            'jab_id' => 'TE',
            'jen_jenjang' => 'Pranata  Komputer Penyelia',
            'jen_slug' => 'pranata-komputer-penyelia'
        ]);
        
        Jenjang::create([
            'jen_id' => 'AH01',
            'jab_id' => 'AH',
            'jen_jenjang' => 'Pranata Komputer Ahli Pertama',
            'jen_slug' => 'pranata-komputer-ahli-pertama'
        ]);
        
        Jenjang::create([
            'jen_id' => 'AH02',
            'jab_id' => 'AH',
            'jen_jenjang' => 'Pranata Komputer Ahli Muda',
            'jen_slug' => 'pranata-komputer-ahli-muda'
        ]);
        
        Jenjang::create([
            'jen_id' => 'AH03',
            'jab_id' => 'AH',
            'jen_jenjang' => 'Pranata  Komputer Ahli Madya',
            'jen_slug' => 'pranata-komputer-ahli-madya'
        ]);
        
        Jenjang::create([
            'jen_id' => 'AH04',
            'jab_id' => 'AH',
            'jen_jenjang' => 'Pranata  Komputer Ahli Utama',
            'jen_slug' => 'pranata-komputer-ahli-utama'
        ]);
    }
}
