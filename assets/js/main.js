window.transitionToPage = function(href) {
    document.querySelector('body').style.opacity = 0;
    setTimeout(function() {
        window.location.href = href;
    }, 500);
}

document.addEventListener('DOMContentLoaded', function(event) { 
    document.querySelector('body').style.opacity = 1;
});

// Story
window.addEventListener('DOMContentLoaded', () => {
    let btnVoice = document.getElementById('start');
    let inputResponse = document.getElementById('response');
    let form = document.getElementById('form');
    
    var reconnaissance = new (window.webkitSpeechRecognition)();
    reconnaissance.lang = 'fr-FR';
    reconnaissance.continuous = true;
    
    reconnaissance.onresult = function(event) {
        inputResponse.value = event.results[0][0].transcript;
        form.submit();
    }
    
    btnVoice.onclick = function() {
        reconnaissance.start();
    }
});