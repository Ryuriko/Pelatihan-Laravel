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

