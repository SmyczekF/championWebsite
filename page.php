<?php get_header(); ?>

<?php if( is_page( 'home' ) ) { ?>

    <section class="container my-5 twoja-szkola">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-10">
                <img src="<?php echo get_template_directory_uri(); ?>/img/dzieci.jpg" alt="uczymy dzieci mówić po angielsku" class="img-fluid" />
                <div class="p-4 text-center info">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/united-kingdom.png" alt="nauka języka angielskiego" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/germany.png" alt="nauka języka niemieckiego" />
<!--                        <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/italy.png" alt="nauka języka włoskiego" />-->
<!--                        <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/spain.png" alt="nauka języka hiszpańskiego" />-->
                        <img src="<?php echo get_template_directory_uri(); ?>/img/calculator.png" alt="nauka matematyki" />
                    </div>
                    <h1>Z nami nauczysz się wszystkiego</h1>
                    <h2>od matematyki do angielskiego</h2>
                    <h4>Zapisz się na zajęcia <strong>w Boguszowicach lub Świerklanach</strong></h4>
                    <a href="<?php bloginfo('url'); ?>/zapisz" class="button">zapisuję się</a>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5 uczymy">
        <div class="row d-flex justify-content-center text-center whitebg">
            <div class="col-12 col-md-8 my-4">
                <h2>uczymy na różnych poziomach zaawansowania dzieci od 2 lat, młodzież i dorosłych</h2>
            </div>
            <div class="col-12 col-md-6">

                <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-4">
                        <a href="<?php bloginfo('url'); ?>/zajecia#angielski"><img src="<?php echo get_template_directory_uri(); ?>/img/united-kingdom.png" alt="nauka języka angielskiego" /></a>
                        <h5>angielskiego</h5>
                        </div>

                        <div class="col-12 col-md-4">
                        <a href="<?php bloginfo('url'); ?>/zajecia#niemiecki"><img src="<?php echo get_template_directory_uri(); ?>/img/germany.png" alt="nauka języka niemieckiego" /></a>
                        <h5>niemieckiego</h5>
                        </div>

<!--                    <div class="col-6 col-md-3">-->
<!--                        <a href="--><?php //bloginfo('url'); ?><!--/zajecia#wloski"><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/italy.png" alt="nauka języka włoskiego" /></a>-->
<!--                        <h5>włoskiego</h5>-->
<!--                    </div>-->
<!--                    <div class="col-6 col-md-3">-->
<!--                        <a href="--><?php //bloginfo('url'); ?><!--/zajecia#hiszpanski"><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/spain.png" alt="nauka języka hiszpańskiego" /></a>-->
<!--                        <h5>hiszpańskiego</h5>-->
<!--                    </div>-->
<!--                </div>-->


                <!-- <div class="col-12 col-md-8 my-4"> -->
                        <!-- <a href="<?php bloginfo('url'); ?>/zajecia#niemiecki"><img src="<?php echo get_template_directory_uri(); ?>/img/germany.png" alt="nauka języka niemieckiego" /></a> -->
                        <!-- <h5>niemieckiego</h5> -->
                <!-- </div> -->

            <div class="col-12 col-md-8">
                <br/>
                <strong>a także ...</strong>
                <br/><br/>
                <a href="<?php bloginfo('url'); ?>/zajecia#matematyka"><img src="<?php echo get_template_directory_uri(); ?>/img/calculator.png" alt="nauka matematyki" /></a>
                <h5>matematyki</h5>
            </div>
        </div>
    </section>
    <a name="o-nas"></a>
    <section class="container my-5 o-nas">
        <div class="row d-flex justify-content-center whitebg">
            <div class="col-12">
                <h3>o nas</h3>
            </div>
            <div class="col-12 my-3">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/onas-1.jpg" alt="Teddy Eddie Żory" class="img-fluid" />
                        <!-- <div class="d-none d-lg-block mt-4 orange"></div> -->
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/onas-2.jpg" alt="Teddy Eddie Rybnik" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5">
                Akademia Językowa CHAMPION & Akademia Matematyki PLUS jest udoskonaloną wersją Centrum Usług Językowych "Millennium", które powstało w 2000 r.
                Wieloletnie doświadczenie w pracy z dziećmi i młodzieżą, ukierunkowało działalność firmy na wykorzystanie twórczych i aktywnych metod nauczania.
                Nauczanie języka oparte jest na teorii, że mózg człowieka funkcjonuje lepiej, jeśli stymulowane są obie półkule mózgowe,
                co jest możliwe dzięki połączeniu nauki z aktywnością twórczą. W związku z tym, działalność Akademii koncentruje się na efektywnym
                nauczaniu, przy równoczesnym wzbudzaniu motywacji do uczenia się przez całe życie.
                <br/><br/>
                Akademia gwarantuje wysoki poziom nauczania,
                co jest potwierdzane uzyskiwaniem przez kursantów wysokich miejsc w konkursach i na egzaminach.
                Program nauczania jest układany dla każdej grupy lub osoby indywidualnie, uwzględniając potencjał grupy i cel nauczania.
                Postępy uczniów są regularnie monitorowane, a dwa razy w roku rodzice otrzymują szczegółowe raporty.
                Grupy tworzone są na podstawie wieku i oceny z testu wstępnego lub końcoworocznego. Gwarantuje to jednolity poziom grupy.
            </div>
            <div class="col-12 col-md-6 mt-4">
                <h3>Aktualności: zobacz co u nas słychać</h3>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fakademiajezykowachampion%2F&tabs=timeline&width=340&height=640&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=151064878872589" width="100%" height="640" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
        </div>
    </section>

    <section class="container my-5 metody-nauczania">
        <div class="row d-flex justify-content-center whitebg">
            <div class="col-12">
<!--                <h3>metody nauczania</h3>-->
                <br/>
<!--                Nauczanie młodzieży gimnazjalnej i licealnej ma bardziej sformalizowany charakter ze względu na optymalne przygotowanie do egzaminu gimnazjalnego i maturalnego. Młodzież jest przygotowywana przez czynnych egzaminatorów maturalnych i gimnazjalnych. Nowością jest wprowadzenie kursu przygotowawczego do egzaminu ósmoklasisty z języka angielskiego oraz matematyki. Akademia prowadzi również kursy języka niemieckiego, włoskiego i hiszpańskiego.-->
<!--                <br/><br/><br/>-->
                Kursy są prowadzone w siedzibie Akademii w Boguszowicach Starych, dzielnicy Rybnika oraz w Świerklanach, gdzie poza zwykłymi kursami dla dzieci, mają miejsce również kursy języka angielskiego prowadzone zgodnie z założeniami
                licencjonowanej metody nauczania dzieci w wieku <strong>2-7 lat - Teddy Eddie</strong>. W każdym przypadku zajęcia w Akademii są dostosowane do planu lekcji dziecka.   
                <br/><br/><br/>
                Aby dać dzieciom możliwość pokazania swoich umiejętności i postępów w nauce, Akademia organizuje lekcje otwarte. Każdy rok szkolny kończy się tradycyjnym piknikiem na Farskim Ogrodzie w Boguszowicach Starych. Akademia Językowa CHAMPION to więcej niż nauka, a język obcy nie jest celem samym w sobie, ale środkiem do osiągnięcia celu.
                <br/><br/>
            </div>
            <div class="col-12 text-center mt-5">
                <a href="<?php echo bloginfo('url'); ?>/teddy-eddie/"><img src="<?php echo get_template_directory_uri(); ?>/img/akredytowane-centrum-te.jpg" alt="Teddy Eddie dla najmłodszych dzieci" class="img-fluid" /></a>
            </div>
            <div class="col-10 col-md-6 text-center">
                <a href="<?php echo bloginfo('url'); ?>/teddy-eddie/"><img src="<?php echo get_template_directory_uri(); ?>/img/teddy-eddie.jpg" alt="Teddy Eddie dla najmłodszych dzieci" class="img-fluid" /></a>
                <strong>Świerklany - Teddy Eddie dla najmłodszych</strong>
            </div>
            <div class="col-12 text-center mt-5">
                <h2 class="mb-4">zobacz nasz plan zajęć</h2>
                <a href="<?php bloginfo('url'); ?>/wp-content/uploads/plan-zajec.pdf" target="_blank" rel="noreferrer noopener"><strong>zajęcia >></strong></a>
            </div>
        </div>
    </section>

    <section class="container-fluid pb-4 szkola-w-liczbach">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 my-5">
                    <h3>szkoła Champion w liczbach</h3>
                </div>
                <div class="col-12 col-md-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/clock.png" alt="doświadczenia" />
                    <?php $start = 2000; $now = date("Y"); $years = $now - $start; ?>
                    <h5><?php echo $years; ?> lat</h5>
                    doświadczenia
                </div>
                <div class="col-12 col-md-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/graduate.png" alt="absolwentów" />
                    <h5>5k</h5>
                    absolwentów
                </div>
                <div class="col-12 col-md-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/scissors.png" alt="satysfakcji" />
                    <h5>100 %</h5>
                    satysfakcji
                </div>
                <div class="col-12 col-md-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pencil.png" alt="spawnych testów" />
                    <h5>10k</h5>
                    zdanych egzaminów
                </div>
            </div>
        </div>
    </section>

    <a name="lektorzy"></a>
    <section class="container my-5 lektorzy">
        <div class="row whitebg">
            <div class="col-12 col-md-6">
                <h3>lektorzy</h3>
                <?php
                $posts = get_posts( array( 'post_type' => 'lectors', 'posts_per_page' => 14, 'orderby' => 'date', 'order' => 'ASC' ) );
                foreach ( $posts as $post ) {
                    echo '<div id="' . $post->post_name . '" style="display: none">';
                    echo '<h4>' . $post->post_title . '</h4>';
                    echo "<h5>$post->post_excerpt</h5>";
                    echo '<p>';
                    echo $post->post_content;
                    echo '</p>';
                    echo '</div>';
                }
                ?>
            </div>
            <div class="col-12 col-md-6">
                <div class="row profile">
                    <?php
                    $posts = get_posts( array( 'post_type' => 'lectors', 'posts_per_page' => 14, 'orderby' => 'date', 'order' => 'ASC' ) );
                    foreach ( $posts as $post ) {
                        echo '<div class="col-6 col-md-4">';

                        if (has_post_thumbnail( $post->ID ) ):
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                            $image = $image[0];
                        else:
                            $image = 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==';
                        endif;
                        echo '<a rel="' . $post->post_name . '" title="'. $post->post_title .'">';
                        echo '<img class="img-fluid" src="' . $image . '" alt="'. $post->post_title .'" width="100%" />';
                        echo '</a>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            <!--        <div class="col-12 text-center">-->
            <!--            kariera >>-->
            <!--        </div>-->
        </div>
    </section>

    <section class="container klienci">
        <div class="row d-flex justify-content-center mb-5 whitebg">
            <div class="col-12 col-md-10 my-5">
                <h3>co sądzą o nas nasi klienci</h3>
            </div>
            <?php
            $posts = get_posts( array( 'post_type' => 'reviews' ) );
            foreach ( $posts as $post ) {
                echo '<div class="col-12 col-md-3">';
                echo '<div class="d-flex mb-4">';
                echo '<div class="mr-2">';
                if (has_post_thumbnail( $post->ID ) ):
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                    $image = $image[0];
                else:
                    $image = 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==';
                endif;
                echo '<img class="rounded-circle" src="' . $image . '" alt="Generic placeholder image" width="60" height="60">';
                echo '</div>';
                echo '<div class="d-flex align-items-center">';
                echo '<div>';
                echo '<strong>' . $post->post_title . '</strong><br/>';
                echo '<span>zajęcia z angielskiego</span>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<p>';
                echo $post->post_content;
                echo '</p>';
                echo '</div>';
            }
            ?>

        </div>
    </section>

    <?php
}
?>

<?php if ( is_page( 'zajecia' ) ) { ?>

    <section class="zajecia">
        <div class="container whitebg">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="header">
                        <a name="angielski"></a>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/united-kingdom.png" alt="nauka języka angielskiego" />
                        <h5>angielski</h5>
                        <div class="mt-4 px-4">
                            <?php
                            $angielski = get_posts(
                                array(
                                    'name'      => 'angielski',
                                    'post_type' => 'page'
                                )
                            );
                            echo $angielski[0]->post_content;
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="header">
                        <a name="niemiecki"></a>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/germany.png" alt="nauka języka niemieckiego" />
                        <h5>niemiecki</h5>
                        <div class="mt-4 px-4">
                            <?php
                            $niemiecki = get_posts(
                                array(
                                    'name'      => 'niemiecki',
                                    'post_type' => 'page'
                                )
                            );
                            echo $niemiecki[0]->post_content;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 mt-5 mb-4">
            <img src="<?php echo get_template_directory_uri(); ?>/img/zajecia-dzieci.jpg" alt="zajęcia dla dzieci" class="img-fluid" />
        </div>
        <section class="container-fluid pb-4 mb-5 champion">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 my-5">
                        <h3>zajęcia w Akademii Językowej Champion to:</h3>
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/team.png" alt="małe grupy"/>
                        <h5>małe grupy</h5>
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="dopasujemy zajęcia do planu"/>
                        <h5>zajęcia dopasowane do planu lekcji dzieci</h5>
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mortarboard.png" alt="wieloletnie doświadczenie"/>
                        <h5>wieloletnie doświadczenie pedagogiczne</h5>
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tag.png" alt="atrakcyjne rabaty"/>
                        <h5>atrakcyjne rabaty</h5>
                    </div>
                </div>
            </div>
        </section>
        <div class="container whitebg">
            <div class="row">
                <!-- <div class="col-12 col-md-6"> -->
                    <!-- <div class="header"> -->
                        <!-- <a name="wloski"></a> -->
                        <!-- <img src="<?php //echo get_template_directory_uri(); ?>/img/italy.png" alt="nauka języka włoskiego" /> -->
                        <!-- <h5>włoski</h5> -->
                        <!-- <div class="mt-4 px-4"> -->
                            <?php
                            // $wloski = get_posts(
                                // array(
                                    // 'name'      => 'wloski',
                                    // 'post_type' => 'page'
                                // )
                            // );
                            // echo $wloski[0]->post_content;
                            ?>
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </div> -->
                <!-- <div class="col-12 col-md-6"> -->
                    <!-- <div class="header"> -->
                        <!-- <a name="hiszpanski"></a> -->
                        <!-- <img src="<?php //echo get_template_directory_uri(); ?>/img/spain.png" alt="nauka języka hiszpańskiego" /> -->
                        <!-- <h5>hiszpański</h5> -->
                        <!-- <div class="mt-4 px-4"> -->
                            <?php
                            // $hiszpanski = get_posts(
                                // array(
                                    // 'name'      => 'hiszpanski',
                                    // 'post_type' => 'page'
                                // )
                            // );
                            // echo $hiszpanski[0]->post_content;
                            ?>
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </div> -->
                <div class="col-12">
                    <div class="header text-center">
                        <a name="matematyka"></a>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/calculator.png" alt="nauka matematyki" />
                        <h5>matematyka</h5>
                        <div class="mt-4 px-4">
                            <?php
                            $matematyka = get_posts(
                                array(
                                    'name'      => 'matematyka',
                                    'post_type' => 'page'
                                )
                            );
                            echo $matematyka[0]->post_content;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } ?>

<?php if ( is_page( 'teddy-eddie' ) ) { ?>

<div class="teddy-eddie">
    <section class="container my-5">
        <div class="row d-flex justify-content-center whitebg">
            <div class="col-12 my-4">
                <h1>Teddy Eddie Świerklany angielski dla dzieci od 2 - 7 lat</h1>
            </div>
            <div class="col-12 col-md-10 dzieci">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/teddy-eddy-zory.jpg" alt="Teddy Eddie Żory" class="img-fluid" />
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/teddy-eddy-rybnik.jpg" alt="Teddy Eddie Rybnik" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="col-12">
                <strong><a href="https://edubears.pl/teddy-eddie/" target="_blank">Teddy Eddie</a> to licencjonowana metoda nauczania</strong> języka angielskiego dla dzieci w wieku 2 - 7 lat, której głównym założeniem jest łączenie prawdziwej nauki z doskonałą zabawą. Dlatego też zajęcia są pełne prawdziwego, komunikacyjnego użycia języka, który uaktywniany jest poprzez to, co dzieci lubią najbardziej: <strong>gry, zabawy ruchowe, piosenki, historyjki, słuchowiska, karty obrazkowe</strong>. Autorki metody czerpały inspirację z obserwacji własnych pociech, będących właśnie w wieku przedszkolnym. To one były pierwszymi, bardzo wymagającymi recenzentami.
            </div>
        </div>
    </section>

    <section class="container-fluid pb-4 why-eddie">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 my-5">
                    <h3>dlaczego warto uczyć języka obcego małe dzieci?</h3>
                </div>
                <div class="col-6 col-md-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cubes.png" alt="wpływ na ogólny rozwój"/>
                    <h5>wpływ na ogólny rozwój</h5>
                </div>
                <div class="col-6 col-md-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/book.png" alt="rozwój językowy"/>
                    <h5>rozwój językowy</h5>
                </div>
                <div class="col-6 col-md-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/baby.png" alt="korzyści komunikacyjne"/>
                    <h5>korzyści komunikacyjne</h5>
                </div>
                <div class="col-6 col-md-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/teddy-bear.png" alt="nauka przez zabawe"/>
                    <h5>nauka przez zabawę</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5 py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 mb-5">
                <img src="<?php echo get_template_directory_uri(); ?>/img/akredytowane-centrum-teddy.jpg" alt="Eddie" class="img-fluid" />
            </div>
            <div class="col-12">
                <h2>co wyróżnia metodę Teddy Eddie?</h2>
            </div>
            <div class="col-10 col-md-5">
                <img src="<?php echo get_template_directory_uri(); ?>/img/eddie.png" alt="Eddie" class="img-fluid" />
            </div>
            <div class="col-12 whitebg">
                <ul class="eddie">
                    <li> łączymy PRAWDZIWĄ NAUKĘ Z DOSKONAŁĄ ZABAWĄ  (traktujemy bardzo poważnie nauczanie dzieci, ale ich nie przemęczamy i nie
                        zanudzamy)</li>
                    <li> zasady LICENCYJNE stoją na straży wysokiego standardu realizacji kursów i odpowiedniego przygotowania nauczycieli
                           CAŁOŚCIOWY program pozwalający na KONTYNUACJĘ nauki do 7 roku życia (na rynku prawie brak kursów na wyższych poziomach dla np.
                        6 czy 7-latków)</li>
                    <li> wyjątkowo BOGATY ZESTAW UCZNIA, pozwalający rodzicom na kontynuowanie zajęć z językiem  W DOMU W PROSTY, NIEWYMAGAJĄCY
                        SPOSÓB (np. włączenie nagrań czy aplikacji Playground)</li>
                    <li> bardzo ELASTYCZNY jeżeli chodzi O WIEK, POZIOM, UMIEJĘTNOŚCI I PREDYSPOZYCJE dzieci – nawet w mieszanych grupach każde dziecko
                        wyciągnie maksymalnie dużo korzyści (od osłuchania się, poprzez uczenie się rozumienia i reagowania, do umiejętności komunikacyjnych)</li>
                    <li> postać EDDIEGO I SKARPETY jako motywy przewodnie</li>
                    <li> program NIE JEST NUDNY – dzieci naprawdę LUBIĄ ZAJĘCIA, postaci opowiadań i humor, który przemawia do właśnie tej specyficznej
                        grupy wiekowej</li>
                    <li> nieporównywalne z żadnym innym programem BOGACTWO JĘZYKOWE – mnóstwo opowiadań, tekstów, słuchowisk stwarza możliwość
                        „zanurzenia się” w języku – dziecko przyswaja tyle, na ile jest gotowe (podobnie jak w języku ojczystym). Uwaga: nikt NIE ZMUSZA DZIECKA
                        DO SZKOLNEJ FORMY UCZENIA SIĘ i odrabiania lekcji!</li>
                    <li> dzieci uczą się SŁOWNICTWA W KONTEKŚCIE ZDAŃ, TEKSTÓW I SYTUACJI, a nie jako serii pojedynczych słówek</li>
                </ul>
            </div>
            <div class="col-12 text-center">
                <a href="<?php bloginfo('url'); ?>/wp-content/uploads/cennik-teddy.pdf"><strong>cennik zajęć >></strong></a>
            </div>
        </div>
    </section>
</div>

    <?php } ?>

<?php if ( is_page( 'cennik' ) ) { ?>

<div class="cennik">
    <section class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>cennik zajęć</h1>
            </div>
            <div class="col-12 cennik-zajec cennik-ogolny whitebg">
                <div class="row d-flex justify-content-center text-center py-5">
                    <div class="col-12 col-sm-6 col-lg-2 py-4">
                        <div class="rounded-circle cena d-flex justify-content-center align-items-center">
                            <div>
                                <strong>grupa<br><br/>
                                    3-4 latki</strong>
                            </div>
                        </div>
                        <div>
                            <p>zajęcia 35 min.<br/>
                                64 lekcje</p>
                            <strong>od 94 pln</strong>
                            <span>9 rat</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 py-4">
                        <div class="rounded-circle cena d-flex justify-content-center align-items-center">
                            <div>
                                <strong>grupa<br/><br/>
                                5-6 latki<br/>KL. I-II</strong>
                            </div>
                        </div>
                        <div>
                            <p>zajęcia 45 min.<br/>
                                64 lekcje</p>
                            <strong>od 119 pln</strong>
                            <span>9 rat</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 py-4">
                        <div class="rounded-circle cena d-flex justify-content-center align-items-center">
                            <div>
                                <strong>grupa<br/><br/>
                                    KL. III-VIII</strong>
                            </div>
                        </div>
                        <div>
                            <p>zajęcia 60 min.<br/>
                                64 lekcje</p>
                            <strong>od 80 pln</strong>
                            <span>9 rat</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 py-4">
                        <div class="rounded-circle cena d-flex justify-content-center align-items-center">
                            <div>
                                <strong>grupa<br/><br/>
                                młodzież<br/>dorośli</strong>
                            </div>
                        </div>
                        <div>
                            <p>zajęcia 60 min.<br/>
                                64 lekcje</p>
                            <strong>od 80 pln</strong>
                            <span>9 rat</span>
                        </div>
                    </div>
                </div>


                <div class="row d-flex justify-content-center text-center py-5">
                    <div class="col-12 col-sm-6 col-lg-2 py-4">
                        <div class="rounded-circle cena d-flex justify-content-center align-items-center">
                            <div>
                                <strong>egzamin ósmoklasisty</strong>
                            </div>
                        </div>
                        <div>
                            <p>zajęcia 90 min.<br/>
                                25 lekcji</p>
                            <strong>od 142 pln</strong>
                            <span>7 rat</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 py-4">
                        <div class="rounded-circle cena d-flex justify-content-center align-items-center">
                            <div>
                                <strong>matura podstawowa lub<br/>rozszerzona</strong>
                            </div>
                        </div>
                        <div>
                            <p>zajęcia 90 min.<br/>
                                25 lekcji</p>
                            <strong>od 142 pln</strong>
                            <span>7 rat</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 py-4">
                        <div class="rounded-circle cena d-flex justify-content-center align-items-center">
                            <div>
                                <strong>egzamin<br/><br/>
                                    FCE / CAE</strong>
                            </div>
                        </div>
                        <div>
                            <p>zajęcia 90 min.<br/>
                                32 lekcje</p>
                            <strong>od 130 pln</strong>
                            <span>9 rat</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 py-4">
                        <div class="rounded-circle cena d-flex justify-content-center align-items-center">
                            <div>
                                <strong>lekcje<br/><br/>
                                    indywidualne</strong>
                            </div>
                        </div>
                        <div>
                            <p>zajęcia 45/60 min.<br/>
                                &nbsp;
                                </p>
                            <strong>od 56 pln</strong>
                            <span>9 rat</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="container cennik-info">
        <div class="row whitebg">
            <div class="col-12 my-5">
                UWAGA: cena kursu uzależniona jest od liczebności grupy i ilości spotkań.<br/>
                Prosimy o zapoznanie sie ze szczegółowym cennikiem
            </div>
            <div class="col-12 text-center pobierz-cennik">
                <a href="<?php bloginfo('url'); ?>/wp-content/uploads/cennik.pdf">pobierz szczegółowy cennik</a>
            </div>
            <div class="col-12 my-5">
                <strong>RABATY:</strong><br/><br/>
                - rodzinny 5% - druga osoba z tej samej rodziny; 7% - trzecia i każda kolejna osoba z tej samej rodziny<br/>
                - za kontynuację zajęć 10% - od drugiego roku<br/>
                - dwa kursy jednocześnie 5%<br/>
                <br/><br/>
                <strong>PŁATNOŚĆ RATALNA:</strong><br/><br/>
                stanowi 1/9 ceny całego kursu i jest niezależna od ilości lekcji jakie odbyły się w danym miesiącu
            </div>
        </div>
    </section>


    <section class="container-fluid promotions pt-4 pb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-md-3">
                    <strong>1</strong>
                    grupy 3-5 osobowe<br/>
                    i 6-8 osobowe
                </div>
                <div class="col-12 col-md-3">
                    <strong>2</strong>
                    zniżki dla rodzin<br/>
                    i za kontynuację
                </div>
                <div class="col-12 col-md-3">
                    <strong>3</strong>
                    płatność<br/>
                    ratalna
                </div>
                <div class="col-12 col-md-3">
                    <strong>4</strong>
                    zajecia 1 lub 2<br/>
                    razy w tygodniu
                </div>
            </div>
        </div>
    </section>


    <section class="container my-5">
        <div class="row">
            <div class="col-12 mt-5">
                <h1>cennik Teddy Eddie</h1>
            </div>
            <div class="col-12 cennik-zajec cennik-teddy whitebg">
                <div class="row d-flex justify-content-center text-center py-5">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 py-4">
                        <div class="rounded-circle cena d-flex justify-content-center align-items-center">
                            <div>
                                <strong>MINI</strong>
                                2-3 lat
                            </div>
                        </div>
                        <div>
                            <p>1 x 35 min./tydzień<br/>
                                30 lekcji</p>
                            <strong>od 65 pln</strong>
                            <span>9 rat</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 py-4">
                        <div class="rounded-circle cena d-flex justify-content-center align-items-center">
                            <div>
                                <strong>PLAY</strong>
                                3-4 lat
                            </div>
                        </div>
                        <div>
                            <p>2 x 35 min./tydzień<br/>
                                60 lekcji</p>
                            <strong>od 102 pln</strong>
                            <span>9 rat</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 py-4">
                        <div class="rounded-circle cena d-flex justify-content-center align-items-center">
                            <div>
                                <strong>STANDARD</strong>
                                4-5 lat
                            </div>
                        </div>
                        <div>
                            <p>2 x 35 min./tydzień<br/>
                                60 lekcji</p>
                            <strong>od 102 pln</strong>
                            <span>9 rat</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 py-4">
                        <div class="rounded-circle cena d-flex justify-content-center align-items-center">
                            <div>
                                <strong>ABC</strong>
                                5-6 lat
                            </div>
                        </div>
                        <div>
                            <p>2 x 45 min./tydzień<br/>
                                60 lekcji</p>
                            <strong>od 114 pln</strong>
                            <span>9 rat</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 py-4">
                        <div class="rounded-circle cena d-flex justify-content-center align-items-center">
                            <div>
                                <strong>SCHOOL</strong>
                                6-7 lat
                            </div>
                        </div>
                        <div>
                            <p>2 x 45 min./tydzień<br/>
                                60 lekcji</p>
                            <strong>od 114 pln</strong>
                            <span>9 rat</span>
                        </div>
                    </div>
                    <div class="col-12 mt-4 text-center">
                        w cenie każdego kursu zawiera się zestaw kursanta + dostęp do aplikacji on-line
                    </div>
                    <div class="col-12 mt-4 text-center">
                        <a href="<?php bloginfo('url'); ?>/wp-content/uploads/cennik-teddy.pdf"><strong>pobierz szczegółowy cennik >></strong></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

    <?php } ?>

<?php if ( is_page( 'kontakt' ) ) { ?>

<div class="kontakt">

    <div class="col-12">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <div class="container page">
<!--                <div class="row d-flex justify-content-center">-->
<!--                    <div class="col-12 col-md-6 whitebg">-->
                        <?php the_content(); ?>
<!--                    </div>-->
<!--                </div>-->
            </div>

        <?php endwhile; ?>

        <?php else: ?>

        <?php endif; ?>
    </div>

<!--    <section class="container my-5">-->
<!--        <div class="row whitebg">-->
<!--            <div class="col-12 mb-4">-->
<!--                <h1>kontakt</h1>-->
<!--                <br/>-->
<!--                <strong>email:</strong> akademiajezykowa1@o2.pl-->
<!--                <br/>-->
<!--                <strong>tel.</strong> 693 262 615-->
<!--            </div>-->
<!--            <div class="col-12 col-md-6">-->
<!--                <strong>Rybnik<br/>-->
<!--                Boguszowice Stare</strong><br/>-->
<!--                ul. Stanisława Małachowskiego 18<br/>-->
<!--                (stare probostwo)<br/>-->
<!--                <br/>-->
<!--                ul. Sztolniowa 20<br/>-->
<!--                (obok poczty)-->
<!--                <br/><br/>-->
<!---->
<!---->
<!--            </div>-->
<!--            <div class="col-12 col-md-6 swierklany">-->
<!--                <strong>Świerklany<br/>-->
<!--                Szkoła Podstawowa nr 1</strong>-->
<!--                <br/>-->
<!--                ul. Boryńska 6<br/>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--    -->
<!--    <section class="container my-5">-->
<!--        <div class="row">-->
<!--            <div class="col-12 text-center">-->
<!--                <h2>jak do nas dojechać - sprawdź google maps</h2>-->
<!--            </div>-->
<!--            <div class="col-12">-->
<!--            <iframe src="https://www.google.com/maps/d/embed?mid=1DZXVG0GHc0ZHQI1dyRz807ISb9eJslPr&hl=pl" width="100%" height="580"></iframe>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

<!--    <section class="container my-5">-->
<!--        <div class="row text-center">-->
<!--            <div class="col-12">-->
<!--                <h4>masz pytania? wypełnij formularz kontaktowy</h4>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </section>-->
</div>

    <?php } ?>

<?php if ( is_page( array('zapisz'))) { ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <div class="container page">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 whitebg">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>



    <?php endwhile; ?>

    <?php else: ?>

    <?php endif; ?>

<?php } ?>

<?php if ( is_page( 'plan-zajec-2' ) ) { ?>
    <div class="container page">
        <iframe src='https://app.activenow.pl/external/calendar/1525?code=688d01192210788e3ca6fb3c172a1495' width='100%' height='650px'></iframe>
    </div>
    <?php } ?>

<?php if ( is_page( array('kariera'))) { ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <div class="container page whitebg mb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-8 mb-5">
                    <h2>kariera</h2>
                    <h5>Chcesz być częścią naszego zespołu? Aplikuj! Poszukujemy nauczycieli języków obcych i matematyki.</h5>
                </div>
                <div class="col-12 col-md-6 ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/kariera.jpg" class="img-fluid" alt="kariera" />
                </div>
                <div class="col-12 col-md-6">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>



    <?php endwhile; ?>

    <?php else: ?>

    <?php endif; ?>

<?php } ?>

<?php if ( !is_page( array('home', 'zajecia', 'kontakt', 'teddy-eddie', 'cennik', 'zapisz', 'kariera', 'plan-zajec-2') ) ) { ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="container page">
    <div class="row">
        <div class="col-12 whitebg">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>


            <?php if ( is_page( array('filia-boguszowice', 'filia-swierklany') ) ) { ?>

                <section class="zajecia">
                    <div class="container whitebg">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="header">
                                    <a name="angielski"></a>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/united-kingdom.png" alt="nauka języka angielskiego" />
                                    <h5>angielski</h5>
                                    <div class="mt-4 px-4">
                                        <?php
                                        $angielski = get_posts(
                                            array(
                                                'name'      => 'angielski',
                                                'post_type' => 'page'
                                            )
                                        );
                                        echo $angielski[0]->post_content;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="header">
                                    <a name="niemiecki"></a>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/germany.png" alt="nauka języka niemieckiego" />
                                    <h5>niemiecki</h5>
                                    <div class="mt-4 px-4">
                                        <?php
                                        $niemiecki = get_posts(
                                            array(
                                                'name'      => 'niemiecki',
                                                'post_type' => 'page'
                                            )
                                        );
                                        echo $niemiecki[0]->post_content;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 mt-5 mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/zajecia-dzieci.jpg" alt="zajęcia dla dzieci" class="img-fluid" />
                    </div>
                    <section class="container-fluid pb-4 mb-5 champion">
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-12 my-5">
                                    <h3>zajęcia w Akademii Językowej Champion to:</h3>
                                </div>
                                <div class="col-6 col-md-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/team.png" alt="małe grupy"/>
                                    <h5>małe grupy</h5>
                                </div>
                                <div class="col-6 col-md-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="dopasujemy zajęcia do planu"/>
                                    <h5>zajęcia dopasowane do planu lekcji dzieci</h5>
                                </div>
                                <div class="col-6 col-md-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/mortarboard.png" alt="wieloletnie doświadczenie"/>
                                    <h5>wieloletnie doświadczenie pedagogiczne</h5>
                                </div>
                                <div class="col-6 col-md-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/tag.png" alt="atrakcyjne rabaty"/>
                                    <h5>atrakcyjne rabaty</h5>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="container whitebg">
                        <div class="row">
                            <div class="col-12">
                                <div class="header text-center">
                                    <a name="matematyka"></a>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/calculator.png" alt="nauka matematyki" />
                                    <h5>matematyka</h5>
                                    <div class="mt-4 px-4">
                                        <?php
                                        $matematyka = get_posts(
                                            array(
                                                'name'      => 'matematyka',
                                                'post_type' => 'page'
                                            )
                                        );
                                        echo $matematyka[0]->post_content;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <?php } ?>


        </div>
    </div>
</div>



<?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <article>

        Sorry, nothing to display.

    </article>
    <!-- /article -->

<?php endif; ?>

<?php } ?>

<?php get_footer(); ?>