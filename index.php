<?php include ('header.php'); ?>

<section id="hero" class="eventHero" style="background-image: url('dist/img/Wartkowice-2.webp')">
    <div class="container">
        <div class="row">
            <div class="col-md-6 eventHero__column">
                <a href="/">
                    <img class="eventHero__logo" src="dist/img/ferment.webp" alt="Ferment Kolektiv" />
                </a>
                <p class="eventHero__category" style="color: #B80000">Konferencja</p>
                <h1 class="eventHero__title">Kontent alternatywny w&nbsp;kinach</h1>
                <p class="eventHero__description">Dołącz do wydarzenia „Kontent alternatywny w kinach” i odkryj, jak transmisje koncertów, spektakli czy e-sport mogą odmienić oblicze sal kinowych. Praktyczne przykłady, dyskusje i inspiracje dla branży i widzów!</p>
                <div class="eventHero__register">
                    <p class="eventHero__registerText">Bezpłatne</p>
                    <span class="eventHero__separator"></span>
                    <a href="/rejestracja.php" class="eventHero__button">Zarejestruj się</a>
                </div>
                <div class="eventHero__information">
                    <div class="eventHero__informationItem">
                        <span class="icon icon-calendar-regular"></span>
                        <div>
                            <?php
                            $dateStart = new DateTime();
                            $dateEnd = new DateTime('tomorrow');

                            $dayStart = $dateStart->format('d');
                            $monthStart = $dateStart->format('F');

                            if (isset($dateEnd) && $dateEnd) {
                                $dayEnd = $dateEnd->format('d');
                                $monthEnd = $dateEnd->format('F');

                                if ($monthStart === $monthEnd) {
                                    $monthStart = '';
                                }
                            }

                            if (isset($dateEnd) && $dateEnd) {
                                $eventDate = $dayStart . ' ' . $monthStart . ' - ' . $dayEnd . ' ' . $monthEnd;
                            } else {
                                $eventDate = $dayStart . ' ' . $monthStart;
                            }
                            ?>
                            <p class="eventHero__informationTitle"><?php echo $eventDate; ?></p>
                            <p class="eventHero__informationSubtitle">Data wydarzenia</p>
                        </div>
                    </div>
                    <div class="eventHero__informationItem">
                        <span class="icon icon-clock-regular"></span>
                        <div>
                            <p class="eventHero__informationTitle">2 dni</p>
                            <p class="eventHero__informationSubtitle">Czas trwania wydarzenia</p>
                        </div>
                    </div>
                    <div class="eventHero__informationItem">
                        <span class="icon icon-map-marker"></span>
                        <div>
                            <p class="eventHero__informationTitle">Poznań</p>
                            <p class="eventHero__informationSubtitle">Miejsce wydarzenia</p>
                        </div>
                    </div>
                    <div class="eventHero__informationItem">
                        <span class="icon icon-user-regular"></span>
                        <div>
                            <p class="eventHero__informationTitle">Ferment Kolektiv</p>
                            <p class="eventHero__informationSubtitle">Organizator</p>
                        </div>
                        <span class="icon icon-mail eventHero__informationOrganiser" data-bs-toggle="modal" data-bs-target="#organiserModal"></span>
                    </div>
                </div>
                <a href="#opis" class="eventHero__more"><span class="icon icon-arrow-down"></span><span class="eventHero__moreText">Czytaj więcej</span></a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="organiserModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zamknij"></button>
                        </div>
                        <div class="modal-body modal-body">
                            <div class="modal__about">
                                <div class="modal__aboutInfo">
                                    <p class="modal__aboutCompany">Informacja o organizatorze</p>
                                    <p class="modal__aboutName">Ferment Kolektiv</p>
                                </div>
                            </div>
                            <div class="modal__desc">
                                <p class="modal__descContent">
                                    Specjalizujemy się w projektach marketingowych, reklamowych i edukacyjnych z wykorzystaniem sztuki filmowej, realizujemy pokazy kina plenerowego i samochodowego. Tworzymy zespół o wszechstronnych kompetencjach: techniczno-operacyjnych, marketingowych, sprzedażowych, humanistycznych – dzięki temu od 2007 roku z powodzeniem realizujemy od A do Z nawet najbardziej złożone projekty.
                                </p>
                                <a class="mt-3 btn btn__black" href="mailto:test@test.pl">Napisz do nas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="opis" class="eventDescription">
    <div class="container">
        <div id="opis" class="row">
            <div class="col-md-6">
                <h2 class="eventDescription__title">Czy kino to tylko filmy?</h2>
                <div class="eventDescription__description">Zapraszamy na wydarzenie poświęcone alternatywnym formom kontentu, które coraz śmielej wkraczają na ekrany kinowe. Transmisje koncertów, spektakli teatralnych, oper, rozgrywek e-sportowych czy prelekcji naukowych to tylko część zjawiska, które zmienia sposób, w jaki postrzegamy rolę kina we współczesnej kulturze.<br><br>W programie znajdą się prezentacje najciekawszych przykładów alternatywnego kontentu w kinach, panel dyskusyjny z udziałem przedstawicieli branży filmowej i widzów, a także debata na temat roli tego typu treści w dobie streamingu. Wydarzenie zakończy się networkingiem, który będzie okazją do swobodnych rozmów i wymiany doświadczeń.<br><br>Wydarzenie skierowane jest do właścicieli i menedżerów kin, twórców kultury, dystrybutorów, studentów kierunków filmowych oraz wszystkich pasjonatów nowoczesnych form przekazu.</div>
            </div>
            <div class="col-md-5 offset-md-1">
                <img class="eventDescription__image" src="dist/img/Wartkowice-2.webp" alt="Meta opis" />
            </div>
        </div>
    </div>
</section>
<?php
$day = [
    'program_dayItems' => [
        [
            'program_type' => 'wystapienie',
            'program_itemDesc' => 'Kina przestają być miejscem wyłącznie dla filmów. Transmisje oper, koncertów, spektakli teatralnych czy wydarzeń e-sportowych przyciągają nowych widzów i redefiniują repertuar. Prelekcja pokaże, jak szeroki może być wachlarz treści i jakie niesie to możliwości – oraz wyzwania – dla właścicieli kin.',
            'program_itemStart' => '10:00',
            'program_itemTitle' => 'Od opery do e-sportu – jak zmienia się repertuar współczesnych kin?',
            'program_itemPerson'    => 'Jan Nowak'
        ],
        [
            'program_type' => 'wystapienie',
            'program_itemDesc' => 'Coraz więcej kin sięga po treści dostępne w streamingu, aby pokazać je w wyjątkowej, wspólnotowej formie. Czy to uzupełnienie oferty, czy zagrożenie dla klasycznej dystrybucji? Podczas prelekcji przyjrzymy się nowym praktykom oraz ich wpływowi na rynek filmowy.',
            'program_itemStart' => '11:00',
            'program_itemTitle' => 'Streaming na dużym ekranie – szansa czy konkurencja dla tradycyjnych filmów?',
            'program_itemPerson'    => 'Jan Nowak'
        ],
        [
            'program_type' => 'przerwa',
            'program_itemTitle' => 'Przerwa',
            'program_itemStart' => '12:00'
        ],
        [
            'program_type' => 'wystapienie',
            'program_itemDesc' => 'Spadająca frekwencja to problem wielu kin. Alternatywne wydarzenia mogą przyciągnąć widzów, którzy wcześniej omijali kino szerokim łukiem. Podpowiemy, jak skutecznie dobierać i promować nietypowe treści, by budować lojalną, różnorodną publiczność.',
            'program_itemStart' => '12:30',
            'program_itemTitle' => 'Jak przyciągnąć nową publiczność? Alternatywny kontent jako narzędzie odbudowy frekwencji',
            'program_itemPerson'    => 'Jan Nowak'
        ],
        [
            'program_type' => 'wystapienie',
            'program_itemDesc' => 'Teatry, opery, festiwale czy niezależni twórcy coraz częściej szukają sposobów na dotarcie do odbiorców poza własną sceną. Prelekcja przedstawi przykłady udanych partnerstw między instytucjami kultury a kinami, które pozwalają wzbogacić ofertę i zwiększyć zasięg wydarzeń.',
            'program_itemStart' => '13:00',
            'program_itemTitle' => 'Współpraca z instytucjami kultury i twórcami – nowe modele dystrybucji treści do kin',
            'program_itemPerson'    => 'Jan Nowak'
        ],
        [
            'program_type' => 'wystapienie',
            'program_itemDesc' => 'Teatry, opery, festiwale czy niezależni twórcy coraz częściej szukają sposobów na dotarcie do odbiorców poza własną sceną. Prelekcja przedstawi przykłady udanych partnerstw między instytucjami kultury a kinami, które pozwalają wzbogacić ofertę i zwiększyć zasięg wydarzeń.',
            'program_itemStart' => '14:00',
            'program_itemTitle' => 'Techniczne wyzwania transmisji na żywo w sali kinowej – od sprzętu po jakość odbioru',
            'program_itemPerson'    => 'Jan Nowak'
        ]
    ],
    'program_dayItems2' => [
        [
            'program_type' => 'wystapienie',
            'program_itemDesc' => 'Kina przestają być miejscem wyłącznie dla filmów. Transmisje oper, koncertów, spektakli teatralnych czy wydarzeń e-sportowych przyciągają nowych widzów i redefiniują repertuar. Prelekcja pokaże, jak szeroki może być wachlarz treści i jakie niesie to możliwości – oraz wyzwania – dla właścicieli kin.',
            'program_itemStart' => '10:00',
            'program_itemTitle' => 'Techniczne wyzwania transmisji na żywo w sali kinowej – od sprzętu po jakość odbioru',
            'program_itemPerson'    => 'Jan Nowak'
        ],
        [
            'program_type' => 'wystapienie',
            'program_itemDesc' => 'Coraz więcej kin sięga po treści dostępne w streamingu, aby pokazać je w wyjątkowej, wspólnotowej formie. Czy to uzupełnienie oferty, czy zagrożenie dla klasycznej dystrybucji? Podczas prelekcji przyjrzymy się nowym praktykom oraz ich wpływowi na rynek filmowy.',
            'program_itemStart' => '11:00',
            'program_itemTitle' => 'Współpraca z instytucjami kultury i twórcami – nowe modele dystrybucji treści do kin',
            'program_itemPerson'    => 'Jan Nowak'
        ],
        [
            'program_type' => 'przerwa',
            'program_itemTitle' => 'Przerwa',
            'program_itemStart' => '12:00'
        ],
        [
            'program_type' => 'wystapienie',
            'program_itemDesc' => 'Spadająca frekwencja to problem wielu kin. Alternatywne wydarzenia mogą przyciągnąć widzów, którzy wcześniej omijali kino szerokim łukiem. Podpowiemy, jak skutecznie dobierać i promować nietypowe treści, by budować lojalną, różnorodną publiczność.',
            'program_itemStart' => '12:30',
            'program_itemTitle' => 'Jak przyciągnąć nową publiczność? Alternatywny kontent jako narzędzie odbudowy frekwencji',
            'program_itemPerson'    => 'Jan Nowak'
        ],
        [
            'program_type' => 'wystapienie',
            'program_itemDesc' => 'Teatry, opery, festiwale czy niezależni twórcy coraz częściej szukają sposobów na dotarcie do odbiorców poza własną sceną. Prelekcja przedstawi przykłady udanych partnerstw między instytucjami kultury a kinami, które pozwalają wzbogacić ofertę i zwiększyć zasięg wydarzeń.',
            'program_itemStart' => '13:00',
            'program_itemTitle' => 'Streaming na dużym ekranie – szansa czy konkurencja dla tradycyjnych filmów?',
            'program_itemPerson'    => 'Jan Nowak'
        ],
        [
            'program_type' => 'wystapienie',
            'program_itemDesc' => 'Teatry, opery, festiwale czy niezależni twórcy coraz częściej szukają sposobów na dotarcie do odbiorców poza własną sceną. Prelekcja przedstawi przykłady udanych partnerstw między instytucjami kultury a kinami, które pozwalają wzbogacić ofertę i zwiększyć zasięg wydarzeń.',
            'program_itemStart' => '14:00',
            'program_itemTitle' => 'Od opery do e-sportu – jak zmienia się repertuar współczesnych kin?',
            'program_itemPerson'    => 'Jan Nowak'
        ]
    ]
];
?>
<section id="program" class="eventProgram">
    <div class="container">
        <div class="row">
            <div class="col-12 eventProgram__tabs">
                <h3 class="eventProgram__title">Program wydarzenia</h3>
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav__link active" id="pills-wtorek-tab" data-bs-toggle="pill" data-bs-target="#pills-wtorek" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Wtorek</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav__link" id="pills-sroda-tab" data-bs-toggle="pill" data-bs-target="#pills-sroda" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Środa</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-wtorek" role="tabpanel" aria-labelledby="pills-wtorek-tab">
                        <div class="eventProgram__items">
                            <div class="splide programSlider" role="group">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <?php $i = 0; foreach ($day['program_dayItems'] as $item) : ?>
                                            <?php if ($item['program_type'] === 'wystapienie') { ?>
                                                <li class="splide__slide">
                                                    <div class="eventProgram__item">
                                                        <?php if ($item['program_itemDesc']) { ?>
                                                            <span class="icon icon-plus" data-bs-toggle="modal" data-bs-target="#programModal<?php echo $i; ?>"></span>
                                                        <?php } ?>
                                                        <p class="eventProgram__itemTime"><?php echo $item['program_itemStart']; ?></p>
                                                        <p class="eventProgram__itemTitle"><?php echo $item['program_itemTitle']; ?></p>
                                                        <p class="eventProgram__itemPerson"><?php echo $item['program_itemPerson']; ?></p>
                                                    </div>
                                                </li>
                                            <?php } elseif ($item['program_type'] === 'przerwa') { ?>
                                                <li class="splide__slide">
                                                    <div class="eventProgram__item eventProgram__item--break">
                                                        <p class="eventProgram__itemTitle"><?php echo $item['program_itemTitle']; ?></p>
                                                        <p class="eventProgram__itemTitle"><?php echo $item['program_itemStart']; ?></p>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        <?php $i++; endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php $i = 0; foreach ($day['program_dayItems'] as $item) : ?>
                            <!-- Modal -->
                            <div class="modal fade" id="programModal<?php echo $i; ?>" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zamknij"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="modal__about">
                                                <div class="modal__aboutInfo">
                                                    <p class="modal__aboutCompany"><?php echo $item['program_itemPerson']; ?></p>
                                                    <p class="modal__aboutName"><?php echo $item['program_itemTitle']; ?></p>
                                                </div>
                                            </div>
                                            <div class="modal__desc">
                                                <p class="modal__descContent">
                                                    <?php echo $item['program_itemDesc']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php $i++; endforeach; ?>
                    </div>
                    <div class="tab-pane fade show" id="pills-sroda" role="tabpanel" aria-labelledby="pills-sroda-tab">
                        <div class="eventProgram__items">
                            <div class="splide programSlider" role="group">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <?php $i = 0; foreach ($day['program_dayItems2'] as $item) : ?>
                                            <?php if ($item['program_type'] === 'wystapienie') { ?>
                                                <li class="splide__slide">
                                                    <div class="eventProgram__item">
                                                        <?php if ($item['program_itemDesc']) { ?>
                                                            <span class="icon icon-plus" data-bs-toggle="modal" data-bs-target="#programModal2<?php echo $i; ?>"></span>
                                                        <?php } ?>
                                                        <p class="eventProgram__itemTime"><?php echo $item['program_itemStart']; ?></p>
                                                        <p class="eventProgram__itemTitle"><?php echo $item['program_itemTitle']; ?></p>
                                                        <p class="eventProgram__itemPerson"><?php echo $item['program_itemPerson']; ?></p>
                                                    </div>
                                                </li>
                                            <?php } elseif ($item['program_type'] === 'przerwa') { ?>
                                                <li class="splide__slide">
                                                    <div class="eventProgram__item eventProgram__item--break">
                                                        <p class="eventProgram__itemTitle"><?php echo $item['program_itemTitle']; ?></p>
                                                        <p class="eventProgram__itemTitle"><?php echo $item['program_itemStart']; ?></p>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                            <?php $i++; endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php $i = 0; foreach ($day['program_dayItems2'] as $item) : ?>
                            <!-- Modal -->
                            <div class="modal fade" id="programModal2<?php echo $i; ?>" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zamknij"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="modal__about">
                                                <div class="modal__aboutInfo">
                                                    <p class="modal__aboutCompany"><?php echo $item['program_itemPerson']; ?></p>
                                                    <p class="modal__aboutName"><?php echo $item['program_itemTitle']; ?></p>
                                                </div>
                                            </div>
                                            <div class="modal__desc">
                                                <p class="modal__descContent">
                                                    <?php echo $item['program_itemDesc']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                    </div>
                </div>
                <a href="/" class="btn btn__white">Zobacz całą agendę</a>
            </div>
        </div>
    </div>
</section>
<section class="eventGallery">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="eventGallery__preTitle">Fotorelacja</p>
                <p class="eventGallery__title">Poprzednie edycje</p>
            </div>
        </div>
        <div class="eventGallery__items">
            <div class="eventGallery__item">
                <img class="eventGallery__image" src="/dist/img/img3.webp" alt="Poprzednia edycja" />
            </div>
            <div class="eventGallery__item">
                <img class="eventGallery__image" src="/dist/img/img5.webp" alt="Poprzednia edycja" />
            </div>
            <div class="eventGallery__item">
                <img class="eventGallery__image" src="/dist/img/img6.webp" alt="Poprzednia edycja" />
            </div>
            <div class="eventGallery__item">
                <img class="eventGallery__image" src="/dist/img/img4.webp" alt="Poprzednia edycja" />
            </div>
            <div class="eventGallery__item">
                <img class="eventGallery__image" src="/dist/img/img2.webp" alt="Poprzednia edycja" />
            </div>
            <div class="eventGallery__item">
                <img class="eventGallery__image" src="/dist/img/img1.webp" alt="Poprzednia edycja" />
            </div>
            <a class="eventGallery__item eventGallery__item--all" href="/">
                <p class="eventGallery__all">Wszystkie zdjęcia</p>
                <span class="icon icon-arrow-down"></span>
            </a>
        </div>
    </div>
</section>
<section class="eventRegister" style="background-image: url('/dist/img/img5.webp')">
    <div class="container">
        <div class="row">
            <div class="col-md-6 eventRegister__content">
                <p class="eventRegister__title">Dołącz do rozmowy o&nbsp;przyszłości kina!</p>
                <p class="eventRegister__desc">Dołącz do wydarzenia „Kontent alternatywny w kinach” i poznaj najciekawsze przykłady transmisji koncertów, spektakli, e-sportu i innych wydarzeń, które zmieniają oblicze sal kinowych.</p>
                <div class="eventHero__register">
                    <p class="eventHero__registerText">Bezpłatnie</p>
                    <span class="eventHero__separator"></span>
                    <a href="/rejestracja.php" class="eventHero__button">Zarejestruj się</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="eventPrelegents">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="eventPrelegents__title">Prelegenci</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="eventPrelegents__items">
                    <div class="eventPrelegents__item">
                        <img class="eventPrelegents__itemImage" src="dist/img/prelegent1.webp" alt="Radek Tomasik" />
                        <div class="eventPrelegents__itemContent">
                            <div class="eventPrelegents__itemText">
                                <p class="eventPrelegents__itemName">Radek Tomasik</p>
                                <p class="eventPrelegents__itemCompany">Ferment Kolectiv</p>
                            </div>
                            <span class="icon icon-plus" data-bs-toggle="modal" data-bs-target="#prelegentModal1"></span>
                        </div>
                    </div>
                    <div class="eventPrelegents__item">
                        <img class="eventPrelegents__itemImage" src="dist/img/prelegent2.webp" alt="Paulina Tomasik" />
                        <div class="eventPrelegents__itemContent">
                            <div class="eventPrelegents__itemText">
                                <p class="eventPrelegents__itemName">Paulina Tomasik</p>
                                <p class="eventPrelegents__itemCompany">Ferment Kolectiv</p>
                            </div>
                            <span class="icon icon-plus" data-bs-toggle="modal" data-bs-target="#prelegentModal2"></span>
                        </div>
                    </div>
                    <div class="eventPrelegents__item">
                        <img class="eventPrelegents__itemImage" src="dist/img/prelegent3.webp" alt="Mateusz Tomasik" />
                        <div class="eventPrelegents__itemContent">
                            <div class="eventPrelegents__itemText">
                                <p class="eventPrelegents__itemName">Mateusz Tomasik</p>
                                <p class="eventPrelegents__itemCompany">Ferment Kolectiv</p>
                            </div>
                            <span class="icon icon-plus" data-bs-toggle="modal" data-bs-target="#prelegentModal3"></span>
                        </div>
                    </div>
                    <div class="eventPrelegents__item">
                        <img class="eventPrelegents__itemImage" src="dist/img/prelegent1.webp" alt="Jan Nowak" />
                        <div class="eventPrelegents__itemContent">
                            <div class="eventPrelegents__itemText">
                                <p class="eventPrelegents__itemName">Jan Nowak</p>
                                <p class="eventPrelegents__itemCompany">Ferment Kolectiv</p>
                            </div>
                            <span class="icon icon-plus" data-bs-toggle="modal" data-bs-target="#prelegentModal4"></span>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="prelegentModal1" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zamknij"></button>
                                </div>
                                <div class="modal-body modal-body-prelegents">
                                    <div class="modal__about">
                                        <img class="modal__aboutImage" src="dist/img/prelegent1.webp" alt="Radek Tomasik" />
                                        <div class="modal__aboutInfo">
                                            <p class="modal__aboutName">Radek Tomasik</p>
                                            <p class="modal__aboutCompany">Ferment Kolektiv</p>
                                        </div>
                                    </div>
                                    <div class="modal__desc">
                                        <p class="modal__descContent">
                                            Z wykształcenia filmoznawca, z wyboru przedsiębiorca. Odpowiada za strategię rozwoju biznesowego. W przeszłości kierował klubem muzycznym oraz działem projektów specjalnych Multikina. Autor wielu projektów filmowych na styku kultury, biznesu i edukacji. Miłośnik freeride’u: w górach, życiu, a czasem i w pracy!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="prelegentModal2" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zamknij"></button>
                                </div>
                                <div class="modal-body modal-body-prelegents">
                                    <div class="modal__about">
                                        <img class="modal__aboutImage" src="dist/img/prelegent2.webp" alt="Paulina Tomasik" />
                                        <div class="modal__aboutInfo">
                                            <p class="modal__aboutName">Paulina Tomasik</p>
                                            <p class="modal__aboutCompany">Ferment Kolektiv</p>
                                        </div>
                                    </div>
                                    <div class="modal__desc">
                                        <p class="modal__descContent">
                                            W Fermencie obecna od początku, czyli 2007 r. Od lat współpracuje z kluczowymi partnerami sektora instytucji publicznych jak Centrum Sztuki Dziecka czy Estrada Poznańska. Doświadczona producentka 11 edycji Wędrującego Ale Kino!. Firmowa liderka dobrostanu. Dba o detale: od scrapbookingu po festiwale.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="prelegentModal2" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zamknij"></button>
                                </div>
                                <div class="modal-body modal-body-prelegents">
                                    <div class="modal__about">
                                        <img class="modal__aboutImage" src="dist/img/prelegent3.webp" alt="Mateusz Tomasik" />
                                        <div class="modal__aboutInfo">
                                            <p class="modal__aboutName">Mateusz Tomasik</p>
                                            <p class="modal__aboutCompany">Ferment Kolektiv</p>
                                        </div>
                                    </div>
                                    <div class="modal__desc">
                                        <p class="modal__descContent">
                                            Technik, logistyk, specjalista realizacji imprez oraz projekcji filmowych. Ceniony eventowy „multiinstrumentalista”, troubleshooter i autor praktycznych rozwiązań. Zwolennik zasady, że jeśli coś jest głupie ale działa, to nie jest głupie. Na robotę najchętniej dojeżdża motocyklem.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="eventPartners">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="eventPartners__title">Organizator</h3>
            </div>
            <div class="col-12">
                <div class="eventPartners__items">
                    <div class="splide partnersSlider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <a href="https://ferment.com.pl" target="_blank" rel="nofollow">
                                        <div class="eventPartners__item">
                                            <img class="eventPartners__itemImage" src="/dist/img/ferment.webp" alt="Ferment Kolektiv" />
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <h3 class="eventPartners__title">Partnerzy</h3>
            </div>
            <div class="col-12">
                <div class="eventPartners__items">
                    <div class="splide partnersSlider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <a href="https://www.estrada.poznan.pl" target="_blank" rel="nofollow">
                                        <div class="eventPartners__item">
                                            <img class="eventPartners__itemImage" src="/dist/img/logo-partner.svg" alt="Estrada" />
                                        </div>
                                    </a>
                                </li>
                                <li class="splide__slide">
                                    <a href="https://multikino.pl" target="_blank" rel="nofollow">
                                        <div class="eventPartners__item">
                                            <img class="eventPartners__itemImage" src="/dist/img/logo-multikino.svg" alt="Multikino" />
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ('footer.php'); ?>
