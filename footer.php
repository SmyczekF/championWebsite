<footer class="container-fluid">
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 col-sm-2 text-center pb-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/champion.png" alt="satysfakcji" />
            </div>
            <div class="col-4 col-sm-2 text-left">
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>/">home</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/#o-nas">o nas</a></li>
<!--                    <li><a href="--><?php //bloginfo('url'); ?><!--/aktualnosci">aktualności</a></li>-->
<!--                    <li><a href="--><?php //bloginfo('url'); ?><!--/metody">metody</a></li>-->
                </ul>
            </div>
            <div class="col-4 col-sm-2">
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>/#lektorzy">lektorzy</a></li>
<!--                    <li><a href="--><?php //bloginfo('url'); ?><!--/placowki">placówki</a></li>-->
                    <li><a href="<?php bloginfo('url'); ?>/teddy-eddie">Teddy Eddie</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/zajecia">zajęcia</a></li>
                </ul>
            </div>
            <div class="col-4 col-sm-2">
                <ul>
<!--                    <li><a href="--><?php //bloginfo('url'); ?><!--/blog">blog</a></li>-->
                    <li><a href="<?php bloginfo('url'); ?>/kariera">kariera</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/kontakt">kontakt</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/cennik">cennik</a></li>
                </ul>
            </div>
            <div class="col-4 text-right d-none d-md-block">
                <a href="#" id="gotop"><img src="<?php echo get_template_directory_uri(); ?>/img/up.png" alt="up to header"/></a>
            </div>
            <div class="col-6 col-md-6">
                <a href="https://www.facebook.com/akademiajezykowachampion/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png" alt="up to header"/></a>
            </div>
            <div class="col-12 col-md-6 mb-4 text-right small">
                <a href="<?php bloginfo('url'); ?>/wp-content/uploads/regulamin.pdf" target="_blank" rel="noreferrer noopener">REGULAMIN</a> |
                <a href="<?php bloginfo('url'); ?>/wp-content/uploads/polityka-prywatnosci.pdf" target="_blank" rel="noreferrer noopener">POLITYKA PRYWATNOŚCI</a> |
                <a href="<?php bloginfo('url'); ?>/wp-content/uploads/polityka-cookies.pdf" target="_blank" rel="noreferrer noopener">PLIKI COOKIE</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

<script>
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

    window.onload = InfoChC();

    function InfoChC() {
        if(InfoRC('cookies_accept_champion') !== 'C') {
            var message_container = document.createElement('div');
            message_container.id = 'cookies-m-c';
            var html_code = '<div id="cookies-m" style="padding: 5px 0px; line-height: 14px; border-bottom: 1px solid #aaaaaa; text-align: left; position: fixed; bottom: 0px; background-color: #eeeeee; width: 100%; z-index: 999;"><div style="max-width:800px; margin-left:auto; margin-right:auto;"><div style="float:left; font-size: 11px;">Strona korzysta z plików cookies w celu realizacji usług i zgodnie z <a href="http://champion-szkola.pl/wp-content/uploads/polityka-cookies.pdf" style="color:#000; font-weight:bold;"><b>Polityką Plików Cookies</b></a>.<br/>	Możesz określić warunki przechowywania lub dostępu do plików cookies w Twojej przeglądarce.</div><div style="float:right;"><a href="javascript:InfoAccept();" onlick="InfoAccept();" id="accept-c-button" name="accept-cookies" style="background-color:gray; padding: 5px 10px; color: #ffffff; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; display: inline-block; margin-left: 10px; text-decoration: none; cursor: pointer;">Zgadzam się!</a></div></div></div>';
            message_container.innerHTML = html_code;
            document.body.appendChild(message_container);
        }
    }

    function InfoAccept() {
        InfoCC('cookies_accept_champion', 'C', 60);
        document.getElementById('cookies-m-c').removeChild(document.getElementById('cookies-m'));
    }
</script>

</body>
</html>

