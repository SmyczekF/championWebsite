function InfoCC(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function InfoRC(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

window.onload = InfoChC;

function InfoChC() {
    if(InfoRC('cookies_accept_champion') !== 'C') {
        var message_container = document.createElement('div');
        message_container.id = 'cookies-m-c';
        var html_code = '<div id="cookies-m" style="padding: 5px 0px; line-height: 14px; border-bottom: 1px solid #aaaaaa; text-align: left; position: fixed; bottom: 0px; background-color: #eeeeee; width: 100%; z-index: 999;"><div style="max-width:800px; margin-left:auto; margin-right:auto;"><div style="float:left; font-size: 11px;">Strona korzysta z plików cookies w celu realizacji usług i zgodnie z <a href="http://champion-szkola.pl/wp-content/uploads/polityka-cookies.pdf" style="color:#000; font-weight:bold;"><b>Polityką Plików Cookies</b></a>.<br/>	Możesz określić warunki przechowywania lub dostępu do plików cookies w Twojej przeglądarce.</div><div style="float:right;"><a href="javascript:InfoAccept();" id="accept-c-button" name="accept-cookies" style="background-color:gray; padding: 5px 10px; color: #ffffff; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; display: inline-block; margin-left: 10px; text-decoration: none; cursor: pointer;">Zgadzam się!</a></div></div></div>';
        message_container.innerHTML = html_code;
        document.body.appendChild(message_container);
    }
}

function InfoAccept() {
    InfoCC('cookies_accept_champion', 'C', 60);
    document.getElementById('cookies-m-c').removeChild(document.getElementById('cookies-m'));
}

console.log('AAAAAAAAAAAAAAACCCC');