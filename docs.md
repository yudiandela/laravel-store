Langkah membuat halaman baru

Jalankan perintah ``php artisan make:model -a`` agar laravel melakukan generate file yang kita butuhkan seperti :
1. app/Models -> file yang akan kita gunakan sebagai penghubung ke database
2. app/Http/Controllers -> file ini kita gunakan sebagai control dari request hingga menjadi response yang di butuhkan
- function index() -> menampilkan response API untuk list resources yang di
- function table() -> menampilkan response View halaman UI
- function create() -> menampilkan response View untuk tambah data
- function store() -> menyimpan data dari inputan form create
- function edit() -> menampilkan response View untuk edit data
- function update() -> menyimpan data dari inputan form edit
- function destroy() -> menghapus data
3. /resources/views -> tampilan halaman atau API yang akan di lihat oleh pengguna melalui browser
4. /routes -> file yang terletak di folder ini di gunakan untuk mapping route url sesuai dengan fungsi nya sebagai mana nama dari masing2 file yang ada di dalam folder ini
5. Pengaturan konfigurasi database bisa lihat di file config/database.php untuk default koneksi menggunakan MySQL bisa di ganti ke koneksi yang tersedia di file tersebut seperti SQLite, PostgreSQL, SQL Server
