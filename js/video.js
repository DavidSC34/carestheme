var video = document.querySelector('.video');
var backgroundVideo = document.querySelector('.background-video');
var juice = document.querySelector('.orange-juice');
var btn = document.getElementById('playpause');
var btnHover = document.getElementById('playpausecontrols');
var heading = document.getElementById('heading');
var container = document.querySelector('.c-video');

function togglePlayPause() {
  if (video.paused) {
    btn.className = 'play-button-container pause';
    btnHover.className = 'pause';
    heading.className = 'pause';
    juice.className = 'orange-juice playing';
    video.play();
    video.className = 'video playing';
    container.className = 'c-video play';
  } else {
    btn.className = 'play-button-container play';
    heading.className = 'play';
    btnHover.className = 'play';
    juice.className = 'orange-juice paused';
    video.pause();
    video.className = 'video paused';
    container.className = 'c-video pause';
  }
}

video.addEventListener('timeupdate', function () {
  var juicePos = video.currentTime / video.duration;
  juice.style.width = juicePos * 100 + '%';
});

btn.onclick = function () {
  togglePlayPause();
};
btnHover.onclick = function () {
  togglePlayPause();
};

video.onclick = function () {
  togglePlayPause();
};

function videoEnd() {
  console.log('video is ended');
  video.pause();
  video.className = 'video paused';
  backgroundVideo.play();
  backgroundVideo.style.opacity = 1;
  heading.className = 'play';
  btnHover.className = 'play';
  btn.className = 'play-button-container play';
  container.className = 'c-video pause';
  juice.className = 'orange-juice paused';
}

video.addEventListener('ended', videoEnd, false);
