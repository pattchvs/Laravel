document.addEventListener("DOMContentLoaded", function () {
    volume();
});

function selecionado(music){
                
    console.log(music)
    const currentsong = document.getElementById('current-music')
    currentsong.innerText= music.name

    const currentartist = document.getElementById('current-artist')
    currentartist.innerText= music.artist
    
    const currentcover = document.getElementById('current-cover')
    currentcover.src = '/img/covers/'+music.image
    console.log(currentcover)

    const songurl = document.getElementById('audio-player')
    songurl.src = '/media/songs/'+music.song

    togglePlay()
    
}


function togglePlay() {
    const audioPlayer = document.getElementById('audio-player');
    const playBtn = document.getElementById('play-btn');

    if (audioPlayer.paused) {
        audioPlayer.play();
        playBtn.classList.remove('fa-play');
        playBtn.classList.add('fa-pause');
    } else {
        audioPlayer.pause();
        playBtn.classList.remove('fa-pause');
        playBtn.classList.add('fa-play');
    }
}


function volume(){
    const volumeSlider = document.querySelector(".volume-slider");
    volumeSlider.addEventListener("input", function () {
        const volumeValue = this.value;
        const audioElement = document.getElementById("audio-player");
        if (audioElement) {
            audioElement.volume = volumeValue / 100;
        }
    });
}
