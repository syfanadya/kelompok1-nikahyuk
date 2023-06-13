window.onload = function () {
  window.scrollTo(0, 0);
  document.body.style.overflow = "hidden";
};

function unlockSection() {
  document.body.style.overflow = "visible";
}

// function playMusic() {
//   var music = new Audio();
//   music.src = "./aset/only.mp3";
//   music.loop = true;
//   music.autoplay = true;
// }

var music = new Audio();
music.src = "./aset/only.mp3";
music.loop = true;
music.autoplay = false;

var isPlaying = false;

function playMusic() {
  if (isPlaying) {
    music.pause();
  } else {
    music.play();
  }
  isPlaying = !isPlaying;
}

var toggleButton = document.getElementById("toggleButton");

toggleButton.addEventListener("click", function () {
  playMusic();
  toggleButton.innerHTML = isPlaying
    ? '<i data-feather="pause"></i>'
    : '<i data-feather="play"></i>';
  feather.replace();
});

function copyText() {
  var text = document.getElementById("myText").innerText;
  navigator.clipboard
    .writeText(text)
    .then(function () {
      console.log("Teks telah disalin!");
    })
    .catch(function (error) {
      console.error("Gagal menyalin teks:", error);
    });
}

function copyText2() {
  var text = document.getElementById("myText2").innerText;
  navigator.clipboard
    .writeText(text)
    .then(function () {
      console.log("Teks telah disalin!");
    })
    .catch(function (error) {
      console.error("Gagal menyalin teks:", error);
    });
}
