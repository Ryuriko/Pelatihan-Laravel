<--- PERTEMUAN 1 --->


<--- PERTEMUAN 2 --->

- M -> model 
	Interaksi dengan database 
	app/models	

- V -> view
	front end
	resources/views

- C -> controller
	Logic
	return view
	app/http/controller

Routes -> Controller -> View
Routes -> Controller -> Model -> View

<--- PERTEMUAN 3 --->

Migration
	* buat bikin database 
	* lokasi : "database/migrations"
	* koneksiin database ada di file ".env"
	* syntax migrate : "php artisan migrate"
	* syntax bikin migration (table) baru : "php artisan make:migration create_<nama_tabel>_table"
	* syntax hapus database / column : "php artisan migrate:rollback"
	* syntax hapus database / column : "php artisan migrate:fresh"
	* syntax membuat model / column : "php artisan make:model <nama_model>"

Model
	* fillable : menentukan field mana aja yang boleh di isi, bahkan bisa dibilang harus di isi.
	* guarded : menentukan field mana aja yang tidak boleh di isi.

Controller
	* Membuat controller baru : "php artisan make:controller <nama_controller>Controller"
		contoh : php artisan make:controller MahasiswaController


<--- PERTEMUAN 4 --->

* Cara cepat membuat controller dan sedikit routes : "php artisan make:model <nama_model> -crm"
* Controller resource sudah di set up kan isi nya oleh laravel
* Dump and die : "dd(<isi bisa variabel atau isi manual>)"

Routes
	Method:
		- get -> basic
		- post -> biasanya saat mengirim form untuk nambah (create)
		- put -> biasanya saat mengirim form update (mengubah)
		- patch -> mirip dengan put
		- delete -> buat nghapus











