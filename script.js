// script.js di public/js/

document.addEventListener('DOMContentLoaded', function() {
    console.log('Skrip JavaScript berhasil dimuat!');

    // Contoh sederhana: Menampilkan pesan saat halaman dimuat
    // alert('Selamat datang di Aplikasi Laravel!');

    // Contoh interaksi: Menambahkan kelas 'highlight' pada elemen container
    // setelah beberapa saat (misalnya 2 detik)
    const container = document.querySelector('.container');
    if (container) {
        setTimeout(function() {
            // Anda perlu menambahkan definisi .highlight di style.css agar ini terlihat
            // container.classList.add('highlight');
            console.log('Elemen container sudah ditemukan.');
        }, 2000);
    }
});

// Contoh fungsi yang bisa dipanggil dari HTML
function tampilkanPesan(namaHalaman) {
    alert('Anda berada di halaman: ' + namaHalaman);
}