window.onload = function () {
  window.scrollTo(0, 0);
  document.body.style.overflow = "hidden";
};

function unlockSection() {
  document.body.style.overflow = "visible";
}

function playMusic() {
  var music = new Audio();
  music.src = "./aset/rain.mp3";
  music.loop = true;
  music.autoplay = true;
}

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
