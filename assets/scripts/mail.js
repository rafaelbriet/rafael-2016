'use strict';

(function mail() {
	var submitBtn = document.querySelector('.submit-button'),
		name = document.querySelector('#name'),
		email = document.querySelector('#email'),
		message = document.querySelector('#message'),
		contactForm = document.querySelector('.form-contact'),
		httpRequest;

	function validateForm() {
		var nameValidated = false,
			emailValidated = false,
			messageValidated = false,
			errorMessage;

		function addErrorMessage(parent) {
			errorMessage = document.querySelector('.error-message');
			errorMessage.classList.remove('hide');
			errorMessage.classList.add('show');
			parent.classList.add('input-error');
		}

		function removeErrorMessage(parent) {
			errorMessage = document.querySelector('.error-message');
			errorMessage.classList.remove('show');
			errorMessage.classList.add('hide');
			parent.classList.remove('input-error');
		}

		if (name.value === '') {
			addErrorMessage(name);
		}
		else {
			removeErrorMessage(name);
			nameValidated = true;
		}

		if (email.value === '') {
			addErrorMessage(email);
		}
		else {
			removeErrorMessage(email);
			emailValidated = true;
		}

		if (message.value === '') {
			addErrorMessage(message);
		}
		else {
			removeErrorMessage(message);
			messageValidated = true;
		}

		if (nameValidated && emailValidated && messageValidated) {
			return true;
		}
		else {
			return false;
		}
	}

	function sendRequest(url) {
		httpRequest = new XMLHttpRequest();

		httpRequest.onreadystatechange = showContent;
		httpRequest.open('POST', url);
		httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		httpRequest.send('name=' + encodeURIComponent(name.value) + '&email=' + encodeURIComponent(email.value) + '&message=' + encodeURIComponent(message.value));
	}

	function showContent() {
		var sendSuccess = document.querySelector('.send-success'),
			sendError = document.querySelector('.send-error');

		function sendMessage(element, timeout) {
			element.classList.remove('hide');
			element.classList.add('show');
			contactForm.classList.add('hide');

			window.setTimeout(function() {
				element.classList.remove('show');
				element.classList.add('hide');
				contactForm.classList.remove('hide');
			}, timeout);
		}

		if (httpRequest.readyState === XMLHttpRequest.DONE) {
			if (httpRequest.status === 200) {
				sendMessage(sendSuccess, 2000);

				name.value = '';
				email.value = '';
				message.value = '';
			}
			else {
				sendMessage(sendError, 5000);
			}
		}
	}

	submitBtn.addEventListener('click', function() {
		if (validateForm()) {
			sendRequest('mail.php');
		}
	});

	contactForm.addEventListener('input', validateForm);
})();
