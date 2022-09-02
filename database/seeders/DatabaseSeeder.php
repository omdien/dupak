<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jenjang;
use App\Models\kepangkatan;
use App\Models\Butir;
use App\Models\Kegiatan;
use App\Models\Kategori02;
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
            'User_id' => 1,
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
            'User_id' => 1,
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
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'service,information,technologi',
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
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TO) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'servico,informationo,technologo',
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

        //Kategori 2    
        Kategori02::create([
            'kat02_id' => '01A',
            'kategori01_id' => '01',
            'kat02_kategori' => 'Manajemen Layanan TI',
            'kat02_slug' => 'manajemen-layanan-ti'
        ]);

        Kategori02::create([
            'kat02_id' => '01B',
            'kategori01_id' => '01',
            'kat02_kategori' => 'Pengelolaan Data (Data Management)',
            'kat02_slug' => 'pengelolaan-data-manajemen'
        ]);

        Kategori02::create([
            'kat02_id' => '01C',
            'kategori01_id' => '01',
            'kat02_kategori' => 'Audit TI',
            'kat02_slug' => 'audit-it'
        ]);

        Kategori02::create([
            'kat02_id' => '02A',
            'kategori01_id' => '02',
            'kat02_kategori' => 'Sistem Jaringan Komputer',
            'kat02_slug' => 'sistem-jaringan-komputer'
        ]);

        Kategori02::create([
            'kat02_id' => '02B',
            'kategori01_id' => '02',
            'kat02_kategori' => 'Manajemen Infrastruktur TI',
            'kat02_slug' => 'manajemen-infrastruktur-it'
        ]);

        Kategori02::create([
            'kat02_id' => '03A',
            'kategori01_id' => '03',
            'kat02_kategori' => 'Sistem Informasi',
            'kat02_slug' => 'sistem-informasi'
        ]);

        Kategori02::create([
            'kat02_id' => '03B',
            'kategori01_id' => '03',
            'kat02_kategori' => 'Pengolahan Data',
            'kat02_slug' => 'pengolahan-data'
        ]);

        Kategori02::create([
            'kat02_id' => '03C',
            'kategori01_id' => '03',
            'kat02_kategori' => 'Area TI Special/Khusus',
            'kat02_slug' => 'area-ti-special-khusus'
        ]);

        Kategori02::create([
            'kat02_id' => '04A',
            'kategori01_id' => '04',
            'kat02_kategori' => 'Perolehan Ijazah/gelar pendidikan formal sesuai dengan bidang tugas Jabatan Fungsional Pranata Komputer',
            'kat02_slug' => 'perolehan-ijazah-gelar-pendidikan-formal-sesuai-dengan-bidang-tugas-jabatan-fungsional-pranata-komputer'
        ]);

        Kategori02::create([
            'kat02_id' => '04B',
            'kategori01_id' => '04',
            'kat02_kategori' => 'Pembuatan Karya Tulis/Karya Imiah di Bidang Teknologi Informasi Berbasis Komputer',
            'kat02_slug' => 'pembuatan-karya-tulis-karya-imiah-di-bidang-teknologi-informasi-berbasis-komputer'
        ]);

        Kategori02::create([
            'kat02_id' => '04C',
            'kategori01_id' => '04',
            'kat02_kategori' => 'Penerjemahan/Penyaduran Buku dan Bahan bahan Lain di Bidang Teknologi Informasi Berbasis Komputer',
            'kat02_slug' => 'Penerjemahan-penyaduran-buku-dan-bahan-bahan-lain-di-bidang-teknologi-informasi-berbasis-komputer'
        ]);

        Kategori02::create([
            'kat02_id' => '04D',
            'kategori01_id' => '04',
            'kat02_kategori' => 'Penyusunan Standar/Pedoman/Petunjuk Pelaksanaan/Petunjuk Teknis di Bidang Teknologi Informasi Berbasis Komputer',
            'kat02_slug' => 'penyusunan-standar/pedoman/petunjuk-pelaksanaan/petunjuk-teknis-di-bidang-teknologi-informasi-berbasis-komputer'
        ]);

        Kategori02::create([
            'kat02_id' => '04E',
            'kategori01_id' => '04',
            'kat02_kategori' => 'Pengembangan Kompetensi di Bidang Teknologi Informasi Berbasis Komputer',
            'kat02_slug' => 'pengembangan-kompetensi-di-bidang-teknologi-informasi-berbasis-komputer'
        ]);

        Kategori02::create([
            'kat02_id' => '04F',
            'kategori01_id' => '04',
            'kat02_kategori' => 'Kegiatan lain yang mendukung pengembangan profesi yang ditetapkan oleh Instansi Pembina',
            'kat02_slug' => 'kegiatan-lain-yang-mendukung-pengembangan-profesi-yang-ditetapkan-oleh-instansi-pembina'
        ]);

        Kategori02::create([
            'kat02_id' => '05A',
            'kategori01_id' => '05',
            'kat02_kategori' => 'Pengajar/Pelatih di bidang teknologi informasi berbasis komputer',
            'kat02_slug' => 'pengajar-pelatih-di-bidang-teknologi-informasi-berbasis-komputer'
        ]);

        Kategori02::create([
            'kat02_id' => '05B',
            'kategori01_id' => '05',
            'kat02_kategori' => 'Keanggotaan dalam Tim Penilai /Tim Uji Kompetensi',
            'kat02_slug' => 'keanggotaan-dalam-tim-penilai-tim-uji-kompetensi'
        ]);

        Kategori02::create([
            'kat02_id' => '05C',
            'kategori01_id' => '05',
            'kat02_kategori' => 'Perolehan Penghargaan/Tanda Jasa',
            'kat02_slug' => 'perolehan-penghargaan-tanda-jasa'
        ]);

        Kategori02::create([
            'kat02_id' => '05D',
            'kategori01_id' => '05',
            'kat02_kategori' => 'Perolehan Gelar Kesarjanaan Lainnya',
            'kat02_slug' => 'perolehan-gelar-kesarjanaan-lainnya'
        ]);

        Kategori02::create([
            'kat02_id' => '05E',
            'kategori01_id' => '05',
            'kat02_kategori' => 'Pelaksanaan Tugas Lain yang Mendukung Pelaksanaan Tugas Pranata Komputer',
            'kat02_slug' => 'pelaksanaan-tugas-lainnya-yang-mendukung-pelaksanaan-tugas-pranata-komputer'
        ]);

        //Kepangkatan
        kepangkatan::create([
            'pangkat' => 'Juru Muda',
            'golongan' => 'I',
            'ruang' => 'a',
        ]);
        kepangkatan::create([
            'pangkat' => 'Juru Muda Tingkat I',
            'golongan' => 'I',
            'ruang' => 'b',
        ]);
        kepangkatan::create([
            'pangkat' => 'Juru',
            'golongan' => 'I',
            'ruang' => 'c',
        ]);
        kepangkatan::create([
            'pangkat' => 'Juru Tingkat I',
            'golongan' => 'I',
            'ruang' => 'd',
        ]);
        kepangkatan::create([
            'pangkat' => 'Pengatur Muda',
            'golongan' => 'II',
            'ruang' => 'a',
        ]);
        kepangkatan::create([
            'pangkat' => 'Pengatur Muda Tingkat I',
            'golongan' => 'II',
            'ruang' => 'b',
        ]);
        kepangkatan::create([
            'pangkat' => 'Pengatur',
            'golongan' => 'II',
            'ruang' => 'c',
        ]);
        kepangkatan::create([
            'pangkat' => 'Pengatur Tingkat I',
            'golongan' => 'II',
            'ruang' => 'd',
        ]);
        kepangkatan::create([
            'pangkat' => 'Penata Muda',
            'golongan' => 'III',
            'ruang' => 'a',
        ]);
        kepangkatan::create([
            'pangkat' => 'Penata Muda Tingkat I',
            'golongan' => 'III',
            'ruang' => 'b',
        ]);
        kepangkatan::create([
            'pangkat' => 'Penata',
            'golongan' => 'III',
            'ruang' => 'c',
        ]);
        kepangkatan::create([
            'pangkat' => 'Penata Tingkat I',
            'golongan' => 'III',
            'ruang' => 'd',
        ]);
        kepangkatan::create([
            'pangkat' => 'Pembina',
            'golongan' => 'IV',
            'ruang' => 'a',
        ]);
        kepangkatan::create([
            'pangkat' => 'Pembina Tingkat I',
            'golongan' => 'IV',
            'ruang' => 'b',
        ]);
        kepangkatan::create([
            'pangkat' => 'Pembina Utama Muda',
            'golongan' => 'IV',
            'ruang' => 'c',
        ]);
        kepangkatan::create([
            'pangkat' => 'Pembina Utama Madya',
            'golongan' => 'IV',
            'ruang' => 'd',
        ]);
        kepangkatan::create([
            'pangkat' => 'Pembina Utama',
            'golongan' => 'IV',
            'ruang' => 'e',
        ]);
    }
}
