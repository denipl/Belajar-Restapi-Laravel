### Deskripsi Proyek

Ini adalah backend REST API untuk aplikasi **Todo List** yang dibuat menggunakan **Laravel**. API ini menyediakan *endpoint* untuk operasi **CRUD (Create, Read, Update, Delete)** pada data *todo*. Proyek ini dirancang untuk dihubungkan dengan *frontend*, seperti aplikasi React, untuk membuat aplikasi daftar tugas yang berfungsi penuh.

### Cara Menjalankan Proyek

Untuk menjalankan proyek ini di komputer lokal Anda, ikuti langkah-langkah berikut:

1.  **Pastikan Anda memiliki PHP dan Composer terinstal.**

2.  **Clone repositori ini ke komputer Anda:**

    ```bash
    git clone <URL_repositori>
    ```

3.  **Masuk ke direktori proyek:**

    ```bash
    cd <nama_direktori_proyek>
    ```

4.  **Instal semua dependensi yang dibutuhkan:**

    ```bash
    composer install
    ```

5.  **Salin file `.env.example` menjadi `.env`:**

    ```bash
    cp .env.example .env
    ```

6.  **Buat *application key* baru:**

    ```bash
    php artisan key:generate
    ```

7.  **Jalankan migrasi database** untuk membuat tabel yang diperlukan:

    ```bash
    php artisan migrate
    ```

8.  **Jalankan *server* pengembangan:**

    ```bash
    php artisan serve
    ```

Secara *default*, *server* akan berjalan di `http://127.0.0.1:8000`.

### *Endpoint* API

Berikut adalah *endpoint* API yang tersedia:

  * **`GET /api/todos`**: Mengambil semua *todo*.
  * **`POST /api/todos`**: Menambahkan *todo* baru.
  * **`PUT /api/todos/{id}`**: Memperbarui *todo* yang sudah ada.
  * **`DELETE /api/todos/{id}`**: Menghapus *todo*.
