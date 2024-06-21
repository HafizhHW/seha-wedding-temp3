const rootElement = document.querySelector(":root");
const audioIconWrapper = document.querySelector('.audio-icon-wrapper');
const audioIcon = document.querySelector('.audio-icon-wrapper i');
const song = document.querySelector('#song')
let isPlaying = false;

function disableScroll() {

    scrollTop = window.pageYOffsett || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffsett || document.documentElement.scrollLeft;

    window.onscroll = function () {
        window.scrollTo(scrollTop, scrollLeft);
    }

    rootElement.style.scrollBehavior = 'auto';
    $(".mobile-navbar").hide();
}

function enableScroll() {
    window.onscroll = function () { }
    rootElement.style.scrollBehavior = 'smooth';
    playAudio();
    $(".mobile-navbar").show();
}

function playAudio() {
    song.volume = 0.2;
    audioIconWrapper.style.display = 'flex';
    song.play();
    isPlaying = true;
}

audioIconWrapper.onclick = function () {
    if (isPlaying) {
        song.pause();
        audioIcon.classList.remove('bi-disc');
        audioIcon.classList.add('bi-pause-circle');
    } else {
        song.play();
        audioIcon.classList.add('bi-disc');
        audioIcon.classList.remove('bi-pause-circle');
    }

    isPlaying = !isPlaying;
}


disableScroll();

simplyCountdown('.simply-countdown', {
    year: 2024, // required
    month: 9, // required
    day: 7, // required
    hours: 8, // Default is 0 [0-23] integer

    words: { //words displayed into the countdown
        days: {
            singular: 'Hari',
            plural: 'Hari'
        },
        hours: {
            singular: 'Jam',
            plural: 'Jam'
        },
        minutes: {
            singular: 'Menit',
            plural: 'Menit'
        },
        seconds: {
            singular: 'Detik',
            plural: 'Detik'
        }
    },
});


//Tambah nama tamu di URL
const urlParams = new URLSearchParams(window.location.search);
const nama = urlParams.get('to') || 'Bapak/Ibu/Saudara/i';
// const pronoun = urlParams.get('p') || 'Bapak/Ibu/Saudara/i';
const namaContainer = document.querySelector('.hero h4 span');
namaContainer.innerText = `${nama},`.replace(/ ,$/, ',');
// namaContainer.innerText = `${pronoun} ${nama},`.replace(/ ,$/, ',');

document.querySelector('#nama').value = nama;


// function GetURLParameter(sParam) {
//     var sPageURL = window.location.search.substring(1);
//     var sURLVariables = sPageURL.split("&");
//     for (var i = 0; i < sURLVariables.length; i++) {
//       var sParameterName = sURLVariables[i].split("=");
//       if (sParameterName[0] == sParam) {
//         return sParameterName[1];
//       }
//     }
//   }
//   var to = GetURLParameter("to");
//   document.getElementById("namatamu").innerHTML = to ? decodeURI(to) : "-";



