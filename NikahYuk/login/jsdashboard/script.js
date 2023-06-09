var slides = document.getElementsByClassName("mengapa-slide");
var currentSlide = 0;
var slideInterval; // Variabel untuk menyimpan interval
var delay = 7000; // Jeda waktu (dalam milidetik) sebelum melanjutkan slide otomatis

function showSlide(slideIndex) {
  // Sembunyikan semua slide
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  // Tampilkan slide yang dipilih
  slides[slideIndex].style.display = "block";
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % slides.length; // Periksa apakah sudah mencapai slide terakhir
  showSlide(currentSlide);
}

function startSlideshow() {
  if (!slideInterval) {
    slideInterval = setInterval(nextSlide, 4000); // Ubah slide setiap 2 detik (sesuaikan dengan kebutuhan Anda)
  }
}

function stopSlideshow() {
  clearInterval(slideInterval); // Hentikan perubahan slide otomatis
  slideInterval = null; // Set slideInterval menjadi null setelah dihentikan
  setTimeout(startSlideshow, delay); // Lanjutkan slide otomatis setelah jeda waktu
}

function previousSlide() {
  currentSlide = (currentSlide - 1 + slides.length) % slides.length; // Periksa apakah sudah mencapai slide pertama
  showSlide(currentSlide);
}

showSlide(currentSlide); // Menampilkan slide pertama saat halaman dimuat
startSlideshow(); // Memulai perubahan slide otomatis

var nextButton = document.getElementById("nextButton");
var prevButton = document.getElementById("prevButton");

nextButton.addEventListener("click", nextSlide);
prevButton.addEventListener("click", previousSlide);

nextButton.addEventListener("click", function () {
  nextSlide();
  stopSlideshow(); // Berhenti saat tombol "Next" diklik
  setTimeout(startSlideshow, delay); // Lanjutkan slide otomatis setelah jeda waktu
});

prevButton.addEventListener("click", function () {
  previousSlide();
  stopSlideshow(); // Berhenti saat tombol "Previous" diklik
  setTimeout(startSlideshow, delay); // Lanjutkan slide otomatis setelah jeda waktu
});

// toggle class active
const navbarNav = document.querySelector(".navbar-nav, .navbar-nav-home");
// ketika hamburger-menu diklik
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// klik di luar site bar untuk menghilangkan nav
const hamburger = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

window.addEventListener("scroll", function () {
  var navbar = document.querySelector(".navbar");
  var scrollPosition = window.scrollY;

  if (scrollPosition > 0) {
    navbar.classList.add("navbar-scrolled");
  } else {
    navbar.classList.remove("navbar-scrolled");
  }
});
