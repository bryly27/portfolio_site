$(document).ready(function() {
  console.log('loaded');
    var audioElement = document.createElement('audio');
    audioElement.setAttribute('src', '../assets/sound/tick.mp3');
    // audioElement.setAttribute('autoplay', 'autoplay');
    //audioElement.load()

    $.get();

    // audioElement.addEventListener("load", function() {
    //     audioElement.play();
    // }, true);

    $('.link').mouseover(function() {
        audioElement.play();
    });
});