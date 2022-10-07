window.addEventListener('load', function () {

	const modal = document.querySelectorAll('.modal');
	const modalBtn = document.querySelectorAll('.modal-btn');
	const closeBtn = document.querySelectorAll('.close');
	const btnSocial = document.querySelector('.share-buttons-container');
	const socials = document.querySelectorAll('.lien__social');



	modalBtn.forEach(function (btn) {
		btn.addEventListener('click', function (event) {
			event.preventDefault();
			let path = btn.getAttribute("href");

			modal.forEach(function (modal) {
				modal.classList.remove('modal');
				modal.addEventListener('click', function (e) {
					e.preventDefault();
					let social = e.target.parentElement.getAttribute('href');
					let alt = e.target.getAttribute("alt");
					if (alt == 'whatsapp') {
						whatsapp_click(social);
					}
					if (alt == 'facebook') {
						facebook_click(social);
					}
					if (alt == 'twitter') {
						twitter_click(social);
					}
					if (alt == 'linkedin') {
						linkedin_click(social);
					}
					if (alt == 'email') {
						email_click(social);
					}
					if (alt == 'sms') {
						sms_click(social);
					}
					/*if (alt == 'copyLink') {
						copyLink(social);
					}*/
				});

				document.querySelector(path).classList.add('modal-block');
			});
		});
	});

	closeBtn.forEach(function (btn) {
		if (modal == null) {
			return;
		}
		btn.addEventListener('click', function (event) {
			event.preventDefault();
			modal.forEach(function (modal) {
				modal.classList.add('modal');
				modal.classList.remove('modal-block');
			});
		});
	});


	function facebook_click(social) {
		let url = social
		window.open('https://www.facebook.com/sharer/sharer.php?u=' + url, 'facebook-share-dialog', 'width=800,height=600');


		//window.open(`http://www.facebook.com/sharer.php?u=${pageLink}&quote=${pageTitle}`, 'sharer', 'toolbar=0,status=0,width=626,height=436');
		return false;
	}

	function whatsapp_click(social) {

		let url = social

		window.open(`https://api.whatsapp.com/send?text=${url}`, 'whatsapp-share-dialog', 'width=800,height=600');

		//window.open(`https://api.whatsapp.com/send?text=${pageTitle} ${pageLink}`, 'sharer', 'toolbar=0,status=0,width=626,height=436');
		return false;
	}

	function sms_click(social) {

		let url = social
		window.open(`sms:?body=${url}`, 'sharer', 'toolbar=0,status=0,width=626,height=436');

		//window.open(`sms:?body=${pageLink}`, 'sharer', 'toolbar=0,status=0,width=626,height=436');
		return false;
	}

	function copyLink(social) {

		let copyText = document.createElement('textarea');
		copyLink = social;
		copyText.value = copyLink;
		document.body.appendChild(copyText);

		navigator.clipboard
			.readText()
			.then(
				(copyText) => (document.querySelector(".editor").innerText += copyText)
			);
		//copyText.select();
		navigator.clipboard.writeText(copyText).then(
			function () {
				alert("yeah!"); // success 
			})
			.catch(
				function () {
					alert("err"); // error
				});
		//.execCommand('copy');
		document.body.removeChild(copyText);
		//('Lien copié !');


	}

	function email_click(social) {

		let pageTitle = document.title;
		let url = social
		window.open(`mailto:?subject=${pageTitle}&body=${url}`, 'sharer', 'toolbar=0,status=0,width=626,height=436');


		// window.open(`${emailLink}`, 'sharer', 'toolbar=0,status=0,width=626,height=436');
		return false;
	}

	function linkedin_click(social) {

		u = social;
		window.open(`https://www.linkedin.com/shareArticle?mini=true&url=${u}`, 'sharer', 'toolbar=0,status=0,width=626,height=436');

		//window.open(`https://www.linkedin.com/shareArticle?mini=true&url=${pageLink}&title=${pageTitle}&summary=&source=`, 'sharer', 'toolbar=0,status=0,width=626,height=436');
		return false;
	}












});

