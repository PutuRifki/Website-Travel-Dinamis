
function setupLinks() {
    const links = document.querySelectorAll('.link-dns');

    function removeActiveClass() {
        links.forEach(link => {
            link.classList.remove('active');
        });
    }

    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah behavior default
            removeActiveClass(); // Menghapus kelas aktif dari semua link
            this.classList.add('active'); // Menambahkan kelas aktif ke link yang diklik
        });
    });
}

// Panggil fungsi setupLinks setelah DOM sepenuhnya dimuat
document.addEventListener('DOMContentLoaded', setupLinks);


