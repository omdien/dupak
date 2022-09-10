<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jenjang;
use App\Models\kepangkatan;
use App\Models\Butir;
use App\Models\Kegiatan;
use App\Models\Kategori02;
use App\Models\User;
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
        // Seed untuk user
        // 1
        User::create([
            'name' => 'Didin Handiman',
            'username' => 'omdien',
            'email' => 'omdien@gmail.com',
            'password' => bcrypt('4rfv5tgb')
        ]);

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
            'but_id' => '01B19',
            'but_kegiatan' => 'Melakukan Penggandaan Data',
            'but_slug' => 'melakukan-penggandaan-data',
            'but_excerpt' => '<div>Melakukan penggandaan data merupakan kegiatan duplikasi data agar data dapat digunakan di komputer lain. Tahapan kegiatan ini mencakup namun tidak terbatas pada penggandaan data dari suatu media...',
            'but_key' => 'copy data',
            'but_desc' => '<div>Melakukan penggandaan data merupakan kegiatan duplikasi data agar data dapat digunakan di komputer lain. Tahapan kegiatan ini mencakup namun tidak terbatas pada penggandaan data dari suatu media komputer ke media komputer lain, baik ke jenis media komputer yang sama maupun jenis media komputer yang berbeda, tanpa mengalami perubahan bentuk. Penggandaan data tidak boleh melanggar hak cipta. Kegiatan lain yang setara dengan kategori ini adalah mengunggah (upload), mengunduh (download) dan penginputan ke basis data (database)</div>',
            'but_satuan' => 'Laporan penggandaan data',
            'but_kredit' => 0.00,
            'but_batasan' => '4 (empat) kali per hari. Kegiatan ini dapat dilakukan terhadap setiap kegiatan penggandaan data dengan ukuran data lebih besar dari 50kb',
            'but_fisik' => '<div>Laporan penggandaan data yang mencakup namun tidak terbatas<br>pada:<br>1. tanggal penggandaan;<br>2. nama data yang digandakan;<br>3. ukuran file yang digandakan;<br>4. media penyimpanan;<br>5. hasil penggandaan; dan<br>6. dokumentasi/screenshot pelaksanaan penggandaan.</div>',
            'but_contoh' => '<div>Raihan Firdaus, A.Md., seorang Pranata Komputer Terampil melakukan dokumen SK pegawai ke aplikasi SIMPEG. Di hari yang sama melakukan menggandakan data hasil tata kelola data di media penyimpanan eksternal, maka Raihan Firdaus memperoleh Angka Kredit sebesar 0,001 x 2 = 0,002.</div>',
            'kategori02_id' => 1,
            'jenjang_id' => 1
        ]);

        Butir::create([
            'but_id' => '02B02',
            'but_kegiatan' => 'Melakukan Pencatatan Infrastruktur TI',
            'but_slug' => 'melakukan-pencatatan-infrastruktur-ti',
            'but_excerpt' => '<div>Melakukan pencatatan infrastruktur TI adalah kegiatan inventarisasi perangkat infrastruktur TI yang meliputi namun tidak terbatas pada:<br>1. Perangkat keras (Perangkat keras end user, perangkat...',
            'but_key' => 'information technology',
            'but_desc' => '<div>Melakukan pencatatan infrastruktur TI adalah kegiatan inventarisasi perangkat infrastruktur TI yang meliputi namun tidak terbatas pada:<br>1. Perangkat keras (Perangkat keras end user, perangkat jaringan, server, storage);<br>2. Piranti lunak (sistem operasi end user maupun server termasuk juga virtual server); dan<br>3. Perangkat pendukung TI dan pendukung pusat data seperti mesin perekam absen, cctv, access door, dan sebagainya.<br>Tahapan kegiatan ini meliputi namun tidak terbatas pada:<br>1. Menentukan latar belakang dan tujuan pencatatan; dan<br>2. Melakukan pencatatan perangkat (nama, merek, identitas, lokasi, pemanfaatan, kondisi, dan sebagainya).</div>',
            'but_satuan' => 'Dokumen pencatatan infrastruktur TI',
            'but_kredit' => 0.21,
            'but_batasan' => '1. Pemberian angka kredit berdasarkan satuan kegiatan dan bukan satuan perangkat; dan 2. Kegiatan ini hanya dapat diajukan maksimal 2 (dua) kali per tahun.',
            'but_fisik' => '<div>Laporan dokumentasi pencatatan infrastruktur TI yang meliputi<br>namun tidak terbatas pada:<br>1. Tanggal pencatatan;<br>2. Latar belakang dan tujuan pencatatan;<br>3. Nama perangkat;<br>4. Merek dan tipe perangkat;<br>5. Identitas perangkat (SN/BMN/identitas lain);<br>6. Lokasi infrastruktur TI;<br>7. Pemanfaatan perangkat;<br>8. Kondisi/status infrastruktur TI;<br>9. Keterangan terkait pengadaan (tahun pengadaan, penyedia), jika ada; dan<br>10. Lembar persetujuan</div>',
            'but_contoh' => '<div>Eliza Florence, A.Md., seorang Pranata Komputer Terampil melakukan pencatatan infrastruktur TI di kantornya disertai dengan bukti yang lengkap, maka untuk kegiatan tersebut Eliza Florence memperoleh angka kredit sebesar 1 X 0,209 = 0,209</div>',
            'kategori02_id' => 1,
            'jenjang_id' => 1
        ]);

        Butir::create([
            'but_id' => '02A09',
            'but_kegiatan' => 'Melakukan Deteksi dan Atau Perbaikan Terhadap Permasalahan yang yang Terjadi Pada Sistem Jaringan Komputer Lokal (Local Area Network)',
            'but_slug' => 'melakukan-deteksi-dan-atau-perbaikan-terhadap-permasalahan-yang',
            'but_excerpt' => '<div>Melakukan deteksi sistem jaringan komputer lokal adalah kegiatan untuk mengetahui penyebab tidak berfungsinya sistem jaringan komputer lokal, sedangkan perbaikan sistem jaringan komputer lokal ad...',
            'but_key' => 'network computer',
            'but_desc' => '<div>Melakukan deteksi sistem jaringan komputer lokal adalah kegiatan untuk mengetahui penyebab tidak berfungsinya sistem jaringan komputer lokal, sedangkan perbaikan sistem jaringan komputer lokal adalah kegiatan untuk membuat sistem jaringan komputer lokal berfungsi kembali dengan baik.<br>Cakupan kegiatan ini meliputi:<br>1. Deteksi penyebab tidak berfungsinya sistem jaringan komputer lokal; dan<br>2. dan atau Perbaikan sistem jaringan komputer lokal agar berfungsi kembali dengan baik.</div>',
            'but_satuan' => 'Dokumen hasil pendeteksian dan atau perbaikan terhadap permasalahan yang terjadi pada sistem jaringan komputer lokal',
            'but_kredit' => 0.01,
            'but_batasan' => 'Setiap perangkat sistem jaringan komputer lokal yang terdeteksi/diperbaiki diberi angka kredit sebesar 0,011',
            'but_fisik' => '<div>Dokumen hasil pendeteksian/perbaikan kerusakan peralatan sistem jaringan komputer lokal yang mencakup namun tidak terbatas pada:<br>1. Tanggal Deteksi/Perbaikan;<br>2. Perangkat yang dideteksi/diperbaiki dan lokasi;<br>3. Deteksi yang ditemukan/Perbaikan yang dilakukan dan lama perbaikan; dan<br>4. Kesimpulan</div>',
            'but_contoh' => '<div>Abdul Aziz, A.Md., seorang Pranata Komputer Terampil mendapat laporan adanya gangguan jaringan internet, Kemudian yang bersangkutan melakukan pendeteksian kerusakan sistem jaringan komputer lokal di kantornya, dan diketahui terjadi bottleneck pada switch, maka angka kredit yang diperoleh Abdul Aziz adalah 1 x 0,011 = 0,011.<br>Kemudian jika Abdul Aziz melakukan perbaikan kerusakan pada switch, maka Abdul Aziz juga akan mendapatkan angka kredit sebesar 1 x 0,011 = 0,011.</div>',
            'kategori02_id' => 1,
            'jenjang_id' => 1
        ]);

        Butir::create([
            'but_id' => '02B04',
            'but_kegiatan' => 'Melakukan Pemasangan Kabel Untuk Infrastruktur TI',
            'but_slug' => 'melakukan-pemasangan-kabel-untuk-infrastruktur-ti',
            'but_excerpt' => '<div>Melakukan pemasangan kabel untuk infrastruktur TI adalah kegiatan pemasangan kabel jaringan untuk menghubungkan perangkat infrastruktur TI yang meliputi namun tidak terbatas pada:<br>1. Perangkat...',
            'but_key' => 'cable',
            'but_desc' => '<div>Melakukan pemasangan kabel untuk infrastruktur TI adalah kegiatan pemasangan kabel jaringan untuk menghubungkan perangkat infrastruktur TI yang meliputi namun tidak terbatas pada:<br>1. Perangkat keras (Perangkat keras end user, perangkat jaringan, server, storage); dan<br>2. Perangkat pendukung pusat data. Tahapan kegiatan ini mencakup namun tidak terbatas pada:<br>1. Penyiapan kabel jaringan; dan<br>2. Pemasangan kabel jaringan yang menghubungkan antarperangkat dan memastikan bahwa kabel jaringan yang terhubung telah berfungsi dengan baik.</div>',
            'but_satuan' => 'Laporan hasil pemasangan kabel untuk infrastruktur TI',
            'but_kredit' => 0.06,
            'but_batasan' => '1. Pemberian angka kredit berdasarkan satuan kegiatan dan bukan satuan kabel. - 71 - 2. Kegiatan ini hanya dapat diajukan maksimal 2 (dua) kali per bulan.',
            'but_fisik' => '<div>Laporan hasil pemasangan kabel untuk infrastruktur TI yang berisi namun tidak terbatas pada:<br>1. Jadwal pemasangan;<br>2. Lokasi pemasangan;<br>3. Tujuan pemasangan;<br>4. Nama perangkat yang dihubungkan dengan kabel dan jenis kabel;<br>5. Banyaknya node yang dipasang;<br>6. Foto kegiatan; dan<br>7. Lembar persetujuan.</div>',
            'but_contoh' => '<div>Zaidan Hasibuan, A.Md., seorang Pranata Komputer Terampil membuat 5 buah kabel UTP kemudian melakukan pemasangan kabel tersebut pada 5 printer baru dan menghubungkannya ke node jaringan. Kegiatan ini disertai dengan bukti fisik yang lengkap, maka Zaidan Hasibuan mendapat angka kredit 1 X 0,059 = 0,059</div>',
            'kategori02_id' => 1,
            'jenjang_id' => 1
        ]);

        Butir::create([
            'but_id' => '02B06',
            'but_kegiatan' => 'Melakukan Pemeliharaan Perangkat TI End User',
            'but_slug' => 'melakukan-pemeliharaan-perangkat-ti-end-user',
            'but_excerpt' => '<div>Deskripsi Melakukan pemeliharaan perangkat TI End user adalah melakukan pemeliharaan perangkat TI sesuai dengan rencana pemeliharaan yang telah disusun sebelumnya.<br>Tahapan dari kegiatan ini me...',
            'but_key' => 'computer equipment',
            'but_desc' => '<div>Deskripsi Melakukan pemeliharaan perangkat TI End user adalah melakukan pemeliharaan perangkat TI sesuai dengan rencana pemeliharaan yang telah disusun sebelumnya.<br>Tahapan dari kegiatan ini mencakup namun tidak terbatas pada:<br>1. Melakukan pemeliharaan perangkat TI End user; dan<br>2. Mendokumentasikan proses pemeliharaan.</div>',
            'but_satuan' => 'Laporan pemeliharaan perangkat TI End user',
            'but_kredit' => 0.12,
            'but_batasan' => '1. Pemberian angka kredit berdasarkan satuan kegiatan dan bukan perangkat. 2. Jumlah maksimum kegiatan pemeliharaan infrastruktur TI yang dapat dinilai adalah 24 (dua puluh empat) kali per tahun.',
            'but_fisik' => '<div>Laporan pemeliharaan perangkat TI End user mencakup namun tidak<br>terbatas pada:<br>1. Waktu, lokasi dan petugas pemeliharaan;<br>2. Perangkat yang dipelihara;<br>3. Tahapan kegiatan pemeliharaan yang dilakukan;<br>4. Hasil pemeliharaan perangkat TI;<br>5. Foto bukti pemeliharaan;<br>6. Referensi ke rencana pemeliharaan yang telah disusun; dan<br>7. Lembar persetujuan.</div>',
            'but_contoh' => '<div>Azada Abimanya, A.Md., seorang Pranata Komputer Terampil melakukan pemeliharaan komputer pengguna pada 10 komputer di kantornya, kegiatan tersebut disertai dengan bukti fisik yang lengkap, maka Azada Abimanya mendapatkan nilai 1 X 0,116 = 0,116</div>',
            'kategori02_id' => 1,
            'jenjang_id' => 1
        ]);

        Butir::create([
            'but_id' => '02B09',
            'but_kegiatan' => 'Melakukan Deteksi dan atau Perbaikan Terhadap Permasalahan Perangkat TI End User',
            'but_slug' => 'melakukan-deteksi-dan-atau-perbaikan-terhadap-permasalahan-perangkat-ti-end-user',
            'but_excerpt' => '<div>Mendeteksi masalah pada perangkat TI end user adalah melakukan sejumlah langkah-langkah untuk menentukan tipe masalah yang terjadi dan komponen apa yang bermasalah/rusak. Hal ini untuk menentukan...',
            'but_key' => 'error detection',
            'but_desc' => '<div>Mendeteksi masalah pada perangkat TI end user adalah melakukan sejumlah langkah-langkah untuk menentukan tipe masalah yang terjadi dan komponen apa yang bermasalah/rusak. Hal ini untuk menentukan tindakan perbaikan apa saja yang akan diambil. Deteksi bisa menggunakan tools/aplikasi atau fisik. Memperbaiki masalah pada perangkat TI adalah melakukan sejumlah langkah-langkah perbaikan berdasarkan pendeteksian di awal, agar perangkat TI yang bermasalah tersebut dapat berfungsi normal. Perbaikan bisa melalui tools/aplikasi atau bersifat perbaikan perangkat keras.<br>Mendeteksi masalah pada perangkat TI mencakup beberapa kegiatan tetapi tidak terbatas pada:<br>1. Mengidentifikasi perangkat TI end user yang mengalami permasalahan<br>2. Melakukan deteksi terhadap permasalahan perangkat TI, yang mencakup namun tidak terbatas pada:<br>a. Memeriksa kondisi sistem operasi pada perangkat, apakah normal atau crash/corrupt.<br>b. Memeriksa komponen perangkat keras tersebut, seperti: monitor, memori, processor, harddrive, kipas, kabel, power supply, dan lain-lain. Apakah terpasang sempurna. Jika terpasang sempurna, apakah berjalan/hidup.<br>c. Memeriksa apakah perangkat telah mendapatkan aliran listrik yang cukup, atau memeriksa baterai apakah sudah terisi.<br>3. Menentukan tipe permasalahan yang terjadi berdasarkan hasil deteksi; dan<br>4. Melakukan dokumentasi kegiatan pendeteksian. Memperbaiki masalah pada perangkat TI, mencakup beberapa kegiatan tetapi tidak terbata pada:<br>1. Mengidentifikasi permasalahan perangkat TI end user berdasarkan hasil deteksi;<br>2. Menentukan tindakan perbaikan apa saja yang akan diambil;<br>3. Melakukan perbaikan, mencakup namun tidak terbatas pada:<br>a. Instalasi atau recovery sistem operasi.<br>b. Scanning disk/sistem, defragmentasi disk, termasuk meningkatkan efisiensi ruang hard drive dan menghapus<br>proses-proses yang tidak perlu.<br>c. Scanning dan membersihkan malware, virus, dan sejenisnya<br>yang memperlambat kinerja.<br>d. Menata dan membersihkan fisik komponen perangkat keras.<br>e. Memperbaiki dan/atau mengganti satu atau beberapa<br>perangkat yang terdeteksi mengalami kerusakan.<br>4. Membuat status dan/atau kondisi perbaikan perangkat TI; dan<br>5. Melakukan dokumentasi kegiatan perbaikan.</div>',
            'but_satuan' => 'Dokumen hasil pendeteksian dan atau perbaikan terhadap permasalahan perangkat TI End user',
            'but_kredit' => 0.05,
            'but_batasan' => '1. Pemberian angka kredit berdasarkan satuan perangkat. 2. Deteksi dan perbaikan masing-masing mendapatkan angka kredit. 3. Maksimal kegiatan yang dapat diajukan penilaian sebulan 4 kali',
            'but_fisik' => '<div>Untuk kegiatan pendeteksian, terdiri dari:<br>1. Waktu dan lokasi;<br>2. Deskripsi perangkat TI yang dideteksi;<br>3. Foto dari perangkat yang dideteksi. Bisa juga dalam bentuk tangkapan layar, tergantung pada jenis pendeteksian;<br>4. Identifikasi permasalahan perangkat TI berdasarkan hasil pendeteksian; dan<br>5. Lembar persetujuan.<br>Untuk kegiatan perbaikan, terdiri dari:<br>1. Waktu dan lokasi;<br>2. Deskripsi perangkat TI yang diperbaiki;<br>3. Foto dari perangkat yang diperbaiki. Bisa juga dalam bentuk tangkapan layar, tergantung pada jenis perbaikan;<br>4. Deskripsi tindakan perbaikan; dan<br>5. Lembar persetujuan.</div>',
            'but_contoh' => '<div>Fawwaz Haris, A.Md., seorang Pranata Komputer Terampil mendeteksi dan memperbaiki sebuah PC desktop, kegiatan ini disertai dengan bukti fisik yang lengkap, maka Fawwaz Haris memperoleh angka kredit sebesar 2 x 0,049 = 0,098.</div>',
            'kategori02_id' => 1,
            'jenjang_id' => 1
        ]);

        Butir::create([
            'but_id' => '03B01',
            'but_kegiatan' => 'Melakukan Perekaman Data Dengan Pemindaian',
            'but_slug' => 'melakukan-perekaman-data-dengan-pemindaian',
            'but_excerpt' => '<div>Melakukan perekaman data dengan pemindaian adalah kegiatan merekam/memasukkan data ke dalam suatu media komputer dengan menggunakan suatu alat pemindai seperti scanner untuk mendapatkan informasi...',
            'but_key' => 'scanning',
            'but_desc' => '<div>Melakukan perekaman data dengan pemindaian adalah kegiatan merekam/memasukkan data ke dalam suatu media komputer dengan menggunakan suatu alat pemindai seperti scanner untuk mendapatkan informasi dari suatu obyek/dokumen. Tahapan kegiatan ini mencakup namun tidak terbatas pada:<br>1. Melakukan perekaman dokumen yang terdiri atas teks maupun gambar dengan menggunakan scanner.<br>2. Melakukan perekaman data dari suatu obyek/barang yang memiliki barcode atau kode QR dengan menggunakan scanner untuk mendapatkan informasi detil obyek tertentu.</div>',
            'but_satuan' => 'Laporan perekaman data dengan pemindaian data dengan pemindaian file/data hasil pemindaian',
            'but_kredit' => 0.02,
            'but_batasan' => '(0,002 x d) / s Penghitungan angka kredit didasarkan atas kecepatan scanner dalam dokumen per jam (s), dan jumlah dokumen yang dikerjakan (d)',
            'but_fisik' => '<div>Laporan perekaman data dengan pemindaian data dengan pemindaian file/data hasil pemindaian yang mencakup namun tidak terbatas pada:<br>1. Data yang direkam;<br>2. Nama/jenis dokumen;<br>3. Periode perekaman data;<br>4. Jumlah dokumen hasil perekaman;<br>5. Jenis/tipe dan kecepatan alat pemindai; dan<br>6. Screenshot/foto dokumen yang direkam, proses pemindaian dokumen, serta hasil pemindaian.</div>',
            'but_contoh' => '<div>Andre Kusuma, A.Md., seorang Pranata Komputer Terampil melakukan pemindaian dokumen laporan penggunaan inventaris barang milik negara sebanyak menggunakan 500 lembar dengan menggunakan mesin scanner yang memiliki kecepatan pemindaian dalam satu jam sebanyak 360 lembar. Setelah melengkapi bukti fisik yang dibutuhkan maka perhitungan angka kredit yang diperoleh Andre Kusuma adalah sebagai berikut: (0,002 x 500) / 360 = 0,00278</div>',
            'kategori02_id' => 7,
            'jenjang_id' => 1
        ]);

        Butir::create([
            'but_id' => '03B02',
            'but_kegiatan' => 'Melakukan Perekaman Data Tanpa Validasi',
            'but_slug' => 'melakukan-perekaman-data-tanpa-validasi',
            'but_excerpt' => '<div>Melakukan perekaman data tanpa validasi adalah kegiatan merekam/memasukkan data ke dalam suatu media komputer dengan menggunakan suatu program aplikasi tanpa adanya proses pengecekan/validasi ter...',
            'but_key' => 'data input',
            'but_desc' => '<div>Melakukan perekaman data tanpa validasi adalah kegiatan merekam/memasukkan data ke dalam suatu media komputer dengan menggunakan suatu program aplikasi tanpa adanya proses pengecekan/validasi terhadap data yang direkam baik antar data itu sendiri maupun terhadap data lain yang diperlukan untuk pengecekan hasil perekaman.<br>Tahapan kegiatan ini mencakup namun tidak terbatas pada melakukan perekaman atau memasukkan data melalui suatu aplikasi tanpa adanya proses lebih lanjut yang dilakukan oleh aplikasi untuk pengecekan dan validasi data berdasarkan aturanaturan tertentu yang sudah ditetapkan untuk menjamin validitas dan konsistensi data. Contoh melakukan perekaman data dengan menggunakan aplikasi Ms.Word atau Ms. Excel seperti pembuatan SPJ, Laporan Tahunan Kegiatan Instansi.</div>',
            'but_satuan' => 'Laporan perekaman data tanpa validasi',
            'but_kredit' => 0.00,
            'but_batasan' => 'Per 1000 (seribu) karakter',
            'but_fisik' => '<div>Laporan perekaman data yang ditandatangani oleh atasan langsung, mencakup namun tidak terbatas pada:<br>1. Nama/jenis data yang direkam;<br>2. Nama aplikasi yang digunakan;<br>3. Periode perekaman data;<br>4. Jumlah dokumen hasil perekaman; dan<br>5. Screenshot/foto dokumen dan sistem/aplikasi.</div>',
            'but_contoh' => '<div>Andomeda, A.Md., seorang Pranata Komputer Terampil melakukan perekaman data penggunaan inventaris kantor sebanyak 100 dokumen dengan menggunakan suatu aplikasi Ms.Word. Satu dokumen rata-rata memiliki 700 karakter yang harus direkam.<br>Kegiatan tersebut disertai dengan bukti fisik yang lengkap. Perhitungan angka kredit yang diperoleh Andomeda adalah sebagai berikut: ((100 x 700) / 1000) x 0,00047 = 0,033</div>',
            'kategori02_id' => 7,
            'jenjang_id' => 1
        ]);

        Butir::create([
            'but_id' => '03B03',
            'but_kegiatan' => 'Melakukan Validasi Hasil Perekaman Data',
            'but_slug' => 'melakukan-validasi-hasil-perekaman-data',
            'but_excerpt' => '<div>Melakukan validasi hasil perekaman data adalah kegiatan pengecekan terhadap data yang sudah berhasil direkam oleh suatu aplikasi. Pengecekan dilakukan dengan melihat keterkaitan antar data itu se...',
            'but_key' => 'data validation',
            'but_desc' => '<div>Melakukan validasi hasil perekaman data adalah kegiatan pengecekan terhadap data yang sudah berhasil direkam oleh suatu aplikasi. Pengecekan dilakukan dengan melihat keterkaitan antar data itu sendiri mapun terhadap data lain. Validasi bertujuan untuk mengecek kebenaran isian hasil perekaman berdasarkan aturan-aturan pengecekan yang sudah ditetapkan. Data dianggap valid apabila sudah memenuhi ukuran tertentu.<br>Tahapan kegiatan ini mencakup namun tidak terbatas pada melakukan pengecekan data yang sudah direkam berdasarkan daftar aturan isian nilai yang sudah ditetapkan melalui suatu aplikasi yang menyediakan fasilitas pengecekan data.</div>',
            'but_satuan' => 'Laporan validasi hasil perekaman data',
            'but_kredit' => 0.00,
            'but_batasan' => 'Per 1000 (seribu) karakter',
            'but_fisik' => '<div>Laporan validasi hasil perekaman data berupa dokumentasi yang ditandatangani oleh atasan langsung, dilengkapi keterangan<br>mencakup namun tidak terbatas pada:<br>1. Nama/jenis data yang divalidasi;<br>2. Nama sistem informasi/aplikasi yang digunakan;<br>3. Periode perekaman data;<br>4. Jumlah karakter hasil validasi;<br>5. Jenis validasi yang dilakukan; dan<br>6. Lampiran yang terdiri atas screenshot file data yang divalidasi, screenshot kegiatan validasi, dan hasil validasi/pengecekan.</div>',
            'but_contoh' => '<div>Andra Kesuma, A.Md. seorang Pranata Komputer Terampil melakukan validasi hasil perekaman data penggunaan inventaris kantor sebanyak menggunakan 100 dokumen dengan menggunakan suatu aplikasi Ms. Word. Satu dokumen rata-rata memiliki 700 karakter yang harus divalidasi. Kegiatan tersebut disertai dengan<br>bukti fisik yang lengkap sehingga perhitungan angka kredit yang diperoleh Andra Kesuma adalah sebagai berikut: ((100 x 700) / 1000) x 0,00047 = 0,033</div>',
            'kategori02_id' => 7,
            'jenjang_id' => 1
        ]);

        Butir::create([
            'but_id' => '03B04',
            'but_kegiatan' => 'Melakukan Perekaman Data dengan Validasi',
            'but_slug' => 'melakukan-perekaman-data-dengan-validasi',
            'but_excerpt' => '<div>Melakukan perekaman data dengan validasi adalah kegiatan merekam/memasukkan data ke dalam suatu media komputer<br>dengan menggunakan suatu program aplikasi perekaman/pemasukan data yang dilengkap...',
            'but_key' => 'input data validation',
            'but_desc' => '<div>Melakukan perekaman data dengan validasi adalah kegiatan merekam/memasukkan data ke dalam suatu media komputer<br>dengan menggunakan suatu program aplikasi perekaman/pemasukan data yang dilengkapi proses pengecekan/validasi terhadap data yang dimasukkan baik antar data itu sendiri maupun terhadap data lain yang diperlukan untuk pengecekan hasil perekaman.<br>Tahapan kegiatan ini mencakup namun tidak terbatas pada merekam atau memasukkan data melalui suatu aplikasi. Kemudian data diproses lebih lanjut oleh aplikasi untuk dilakukan pengecekan dan validasi berdasarkan aturan-aturan tertentu yang sudah ditetapkan untuk menjamin validitas dan konsistensi data. Pengecekan dan validasi adalah salah satu cara untuk mendapatkan data yang berkualitas.</div>',
            'but_satuan' => 'Laporan perekaman data dengan validasi',
            'but_kredit' => 0.00,
            'but_batasan' => 'Per 1000 (seribu) karakter',
            'but_fisik' => '<div>Laporan perekaman data dengan validasi berupa dokumentasi yang ditandatangani oleh atasan langsung dengan keterangan mencakup namun tidak terbatas pada:<br>1. Nama/jenis data yang divalidasi (10%);<br>2. Nama sistem informasi/aplikasi yang digunakan (10%);<br>3. Jenis basis data (10%);<br>4. Periode perekaman data (10%);<br>5. Jumlah karakter hasil perekaman (10%);<br>6. Foto dokumen yang direkam (10%);<br>7. Uraian jenis validasi dan screenshoot sistem/aplikasi yang menampilkan kegiatan perekaman data dengan validasi (40%); dan<br>8. Daftar validasi yang digunakan.</div>',
            'but_contoh' => '<div>Andi Raharja, A.Md., seorang Pranata Komputer Terampil melakukan perekaman data pegawai sebanyak 300 dokumen dengan menggunakan aplikasi entri data pegawai yang memiliki fasilitas validasi/pengecekan atas data yang direkam. Satu dokumen ratarata memiliki 600 karakter yang harus direkam dan divalidasi. Setelah melengkapi seluruh bukti fisik yang dibutuhkan maka perhitungan angka kredit yang diperoleh Andi Raharja adalah sebagai berikut: ((300 x 600) / 1000) x 0,001 = 0,18</div>',
            'kategori02_id' => 7,
            'jenjang_id' => 1
        ]);

        Butir::create([
            'but_id' => '03B05',
            'but_kegiatan' => 'Membuat Query Sederhana',
            'but_slug' => 'membuat-query-sederhana',
            'but_excerpt' => '<div>Membuat query sederhana adalah melakukan operasi-operasi CRUD pada database melalui perintah query sederhana. Tahapan kegiatan ini mencakup namun tidak terbatas pada Membuat query sederhana denga...',
            'but_key' => 'data query',
            'but_desc' => '<div>Membuat query sederhana adalah melakukan operasi-operasi CRUD pada database melalui perintah query sederhana. Tahapan kegiatan ini mencakup namun tidak terbatas pada Membuat query sederhana dengan SELECT, UPDATE, DELETE, INSERT.</div>',
            'but_satuan' => 'Laporan query data',
            'but_kredit' => 0.09,
            'but_batasan' => 'Minimal menggunakan satu di antara keywords SELECT, UPDATE, DELETE, INSERT',
            'but_fisik' => '<div>Laporan query data mencakup namun tidak terbatas pada Script file yang mengandung query beserta dokumentasi yang berisi informasi data yang di-query, tipe dan besaran data yang di-query, ringkasan hasil query, informasi data yang akan di query, syntax query data.</div>',
            'but_contoh' => '<div>Danial Arsalan, A.Md., seorang Pranata Komputer Terampil melakukan pembuatan query untuk memilih data rumah tangga yang memiliki internet. Kegiatan tersebut disertai dengan bukti fisik yang lengkap, maka angka kredit yang diperoleh Danial Arsalan adalah 1 X 0,088 = 0,088</div>',
            'kategori02_id' => 7,
            'jenjang_id' => 1
        ]);

        Butir::create([
            'but_id' => '03B06',
            'but_kegiatan' => 'Melakukan Konversi Data',
            'but_slug' => 'melakukan-konversi-data',
            'but_excerpt' => '<div>Melakukan konversi data adalah melakukan perubahan format atau tipe data ke dalam format atau tipe lain dengan tujuan agar data tersebut dapat diproses lebih lanjut atau digunakan oleh software a...',
            'but_key' => 'data convertion',
            'but_desc' => '<div>Melakukan konversi data adalah melakukan perubahan format atau tipe data ke dalam format atau tipe lain dengan tujuan agar data tersebut dapat diproses lebih lanjut atau digunakan oleh software atau aplikasi lain.<br>Tahapan kegiatan ini mencakup namun tidak terbatas pada:<br>1. Mengidentifikasi/menentukan data yang akan dikonversi;<br>2. Mengubah tipe data;<br>3. File format;<br>4. Struktur data; dan<br>5. Mendokumentasikan hasil konversi data</div>',
            'but_satuan' => 'Laporan konversi data',
            'but_kredit' => 0.00,
            'but_batasan' => 'Minimal melakukan satu jenis perubahan terhadap data',
            'but_fisik' => '<div>Laporan konversi data mencakup namun tidak terbatas pada:<br>1. Informasi terkait data sebelum dikonversi (tipe, format, dan lainlain);<br>2. Informasi terkait data setelah dikonversi (tipe, format, dan lainlain);<br>3. Bukti fisik berupa data sebelum konversi;<br>4. Bukti fisik berupa data hasil konversi;<br>5. Satuan konversi; dan<br>6. Penjelasan konversi data.</div>',
            'but_contoh' => '<div>Elvan Adhitama, A.Md., seorang Pranata Komputer Terampil melakukan konversi data dari format PostgreSQL ke json. Kegiatan ini disertai dengan bukti fisik yang lengkap, maka angka kredit yang diperoleh Elvan Adhitama adalah 1 X 0,002 = 0,002.</div>',
            'kategori02_id' => 7,
            'jenjang_id' => 1
        ]);

        Butir::create([
            'but_id' => '03B07',
            'but_kegiatan' => 'Melakukan Kompilasi Data Pengolahan',
            'but_slug' => 'melakukan-kompilasi-data-pengolahan',
            'but_excerpt' => '<div>Melakukan kompilasi data pengolahan adalah melakukan penggabungan, pengumpulan, dan pengelompokkan data hasil pengolahan sehingga menjadi satu kesatuan file utuh. Tahapan kegiatan ini mencakup na...',
            'but_key' => 'data compilation',
            'but_desc' => '<div>Melakukan kompilasi data pengolahan adalah melakukan penggabungan, pengumpulan, dan pengelompokkan data hasil pengolahan sehingga menjadi satu kesatuan file utuh. Tahapan kegiatan ini mencakup namun tidak terbatas pada:<br>1. Identifikasi data yang akan dikompilasi;<br>2. Pengumpulan data yang akan dikompilasi;<br>3. Penggabungan data; dan<br>4. Membuat dokumentasi.</div>',
            'but_satuan' => 'Laporan kompilasi data pengolahan',
            'but_kredit' => 0.04,
            'but_batasan' => 'Minimal menggabungkan dua data pengolahan menjadi satu',
            'but_fisik' => '<div>Laporan hasil kompilasi data pengolahan mencakup namun tidak terbatas pada:<br>1. Informasi masing-masing data yang dikompilasi (nama, tipe, ukuran);<br>2. Jumlah data yang dikompilasi;<br>3. Penjelasan tentang cara melakukan kompilasi;<br>4. File output hasil kompilasi;<br>5. Sumber data;<br>6. Jenis data pengolahan yang dikompilasi; dan<br>7. Keterangan sebelum dan sesudah kompilasi</div>',
            'but_contoh' => '<div>Nayaka Pratama, A.Md., seorang Pranata Komputer Terampil melakukan kompilasi data hasil pengolahan Susenas dari 34 provinsi yang ada di Indonesia. Kegiatan ini disertai dengan bukti fisik yang lengkap, maka angka kredit yang diperoleh Nayaka Pratama adalah 1 X 0,044 = 0,044.</div>',
            'kategori02_id' => 7,
            'jenjang_id' => 1
        ]);

        Butir::create([
            'but_id' => '03C01',
            'but_kegiatan' => 'Melakukan Perekaman Data Spasial',
            'but_slug' => 'melakukan-perekaman-data-spasial',
            'but_excerpt' => '<div>Melakukan perekaman data spasial adalah kegiatan mengubah suatu data analog menjadi data digital menggunakan media elektronik baik itu berupa software GIS (digitasi) ataupun perangkat keras seper...',
            'but_key' => 'data spacial',
            'but_desc' => '<div>Melakukan perekaman data spasial adalah kegiatan mengubah suatu data analog menjadi data digital menggunakan media elektronik baik itu berupa software GIS (digitasi) ataupun perangkat keras seperti GPS, Satelit dan lain-lain. Kegiatan ini mencakup pencarian object perekaman, perekaman data spasial dan penyimpanan data hasil perekaman dalam media atau format lainnya. Tahapan kegiatan ini mencakup namun tidak terbatas pada:<br>1. Melakukan identifikasi fitur spasial dengan penginderaan jauh yang bersumber dari citra satelit foto udara atau sumber lainnya.<br>2. Melakukan penelusuran atau pengukuran di lapangan terhadap suatu object misalnya batas wilayah, hutan, posisi gedung atau objek dan lain-lain dengan menggunkan bantuan peta (digital/analog), GPS.<br>3. Melakukan digitasi suatu obyek menggunakan media komputer (mobile/desktop) dari suatu data analog, citra satelit maupun data-data lainnya sehingga membentuk suatu fitur spasial digital (point, polygon, line, dan bentuk vektor lainnya)</div>',
            'but_satuan' => 'Laporan perekaman data spasial',
            'but_kredit' => 0.00,
            'but_batasan' => 'Kegiatan ini dinilai untuk setiap fitur atau kumpulan fitur (file) berdasarkan besaran file atau jumlah data spasial yang dihasilkan',
            'but_fisik' => '<div>Laporan hasil perekaman data spasial yang mencakup namun tidak terbatas pada:<br>1. Nama Peta;<br>2. Peta digital hasil dari perekaman;<br>3. Besaran file; dan<br>4. Direktori penyimpanan.</div>',
            'but_contoh' => '<div>Bayu Lintang, A.Md., seorang Pranata Komputer Terampil melakukan digitasi sebanyak 1 polygon desa yang cukup kompleks dengan besar file SHP 10 Kb. Kegiatan ini disertai dengan bukti fisik yang lengkap, maka Bayu Lintang mendapatkan angka kredit 10 x 0,001 = 0,01. Banyu Biru, A.Md., seorang Pranata Komputer Terampil mendapatkan tugas untuk melakukan tracing di suatu desa dengan menggunakan GPS. Banyu Biru mengelilingi batas desa dan melakukan perekaman koordinat. Ketika dieksport ke sistem, didapatkan ukuran file hasil perekaman ini adalah sebesar 2Kb. Maka Banyu Biru akan mendapatkan angka kredit sebesar 2 x 0,001 = 0,002.</div>',
            'kategori02_id' => 8,
            'jenjang_id' => 1
        ]);

        Butir::create([
            'but_id' => '03C11',
            'but_kegiatan' => 'Melakukan Uji Coba Program Multimedia Interaktif',
            'but_slug' => 'melakukan-uji-coba-program-multimedia-interaktif',
            'but_excerpt' => '<div>Melakukan uji coba program multimedia interaktif adalah melaksanakan skenario uji coba yang telah dibuat dan mendokumentasikannya. Uji coba dilakukan sebelum program multimedia dirilis, untuk men...',
            'but_key' => 'multimedia',
            'but_desc' => '<div>Melakukan uji coba program multimedia interaktif adalah melaksanakan skenario uji coba yang telah dibuat dan mendokumentasikannya. Uji coba dilakukan sebelum program multimedia dirilis, untuk menilai kelayakan program sebelum program multimedia dirilis kepada pengguna.&nbsp;<br>Tahapan kegiatan ini mencakup namun tidak terbatas pada:<br>1. Mengidentifikasi fitur dari program multimedia yang akan diuji coba;<br>2. Memahami skenario uji coba;<br>3. Menentukan input dan expected output;<br>4. Menentukan perangkat yang akan digunakan, untuk uji coba yang dilakukan menggunakan bantuan perangkat;<br>5. Melaksanakan ujicoba terhadap program multimedia berdasarkan skenario uji coba; dan<br>6. Mendokumentasikan dan melaporkan hasil uji coba program multimedia interaktif.</div>',
            'but_satuan' => 'Laporan uji coba program multimedia interaktif',
            'but_kredit' => 0.02,
            'but_batasan' => '3 (tiga) kali per bulan',
            'but_fisik' => '<div>Laporan uji coba program multimedia ini mencakup namun tidak terbatas pada:<br>1. Hasil identifikasi fitur dari program multimedia yang akan diuji coba (screenshot dan metadata file);<br>2. Skenario uji coba;<br>3. Daftar input dan expected output;<br>4. Informasi tool yang akan digunakan, jika uji coba yang dilakukan menggunakan bantuan tool; dan<br>5. Hasil ujicoba yang berisi:<br>a. Nama program multimedia<br>b. Deskripsi program multimedia<br>c. User dari multimedia</div>',
            'but_contoh' => '<div>Raihana Humaira, A.Md., seorang Pranata Komputer Terampil mendapatkan penugasan dari atasannya untuk melakukan uji coba pada program multimedia interaktif, dengan beberapa skenario yang telah diberikan. Raihana Humaira menyusun daftar input dan expected output dari skenario tersebut. Selama ujicoba, dilakukan checklist untuk input dan expected outputnya sesuai, dan tanda silang untuk yang expected outputnya tidak sesuai dengan skenario. Kemudian, semua temuan ini disusun dalam suatu laporan. Kegiatan ini disertai dengan bukti fisik yang lengkap, maka angka kredit yang diperoleh Raihana Humaira sebesar 1 x 0,020 = 0,020</div>',
            'kategori02_id' => 8,
            'jenjang_id' => 1
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
