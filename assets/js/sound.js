$(document).ready(function() {
    var audioElement = document.createElement('audio');
    audioElement.setAttribute('src', '../assets/sound/tick.mp3');

    $.get();

    $('.link').mouseover(function() {
        audioElement.play();
    });
});