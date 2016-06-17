var mail = (function() {

    var submitBtn = document.querySelector('.submit-button'),
        httpRequest;

    function sendRequest(url) {
        var name = document.querySelector('#name').value,
            email = document.querySelector('#email').value,
            message = document.querySelector('#message').value;

        httpRequest = new XMLHttpRequest();

        httpRequest.onreadystatechange = showContent;
        httpRequest.open('POST', url);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send('name=' + encodeURIComponent(name) + '&email=' + encodeURIComponent(email) + '&message=' + encodeURIComponent(message));
    }

    function showContent() {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
                console.log(httpRequest.responseText);
            } else {
                console.log('Houve um problema com a requisição.');
            }
        }
    }

    submitBtn.addEventListener('click', function() { sendRequest('mail.php') });
})();
