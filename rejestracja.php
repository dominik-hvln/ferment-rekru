<?php include ('header.php'); ?>

<main role="main">
    <section class="register">
        <div class="register__backgroundImage">
            <img src="dist/img/img5.webp" alt="Tło">
        </div>
        <div class="container register__content">
            <h1 class="register__title">Kontent alternatywny w kinach</h1>
            <div class="row g-3">
                <div class="col-auto register__formWrapper">
                    <form method="POST" action="registerevent" id="register-form" class="register__form needs-validation" novalidate>
                        <div class="row">
                            <div class="col-12">
                                <h2 class="h3 mb-4">Dane osobiste</h2>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <input name="first_name" type="text" class="form-control" id="first_name" placeholder="Imię" required>
                                    <div class="invalid-feedback" style="bottom: calc(var(--alert-correct) + var(--alert-position) * 1)">
                                        Prosimy wpisać imię
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <input name="last_name" type="text" class="form-control" id="last_name" placeholder="Nazwisko" required>
                                    <div class="invalid-feedback" style="bottom: calc(var(--alert-correct) + var(--alert-position) * 2)">
                                        Prosimy wpisać nazwisko
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <input name="email" type="email" class="form-control" id="email" placeholder="E-mail" required>
                                    <div class="invalid-feedback" style="bottom: calc(var(--alert-correct) + var(--alert-position) * 3)">
                                        Prosimy wpisać prawidłowy adres e-mail
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <input name="phone" type="text" class="form-control" id="phone" placeholder="Telefon">
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <input name="company" type="text" class="form-control" id="province" placeholder="Firma (opcjonalnie)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <input name="position" type="text" class="form-control" id="position" placeholder="Stanowisko">
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <input name="province" type="text" class="form-control" id="province" placeholder="Województwo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <input name="city" type="text" class="form-control" id="city" placeholder="Miasto">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input name="event_name" type="hidden" value="1">
                                <button type="submit" class="btn btn__black--outline text-uppercase py-1 float-end">Zarejestruj</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col">
                    <div class="register__eventDetails">
                        <p class="eventHero__category" style="color: #B80000">Konferencja</p>
                        <h2 class="eventHero__title eventHero__title--small">Kontent alternatywny w kinach</h2>
                        <p class="eventHero__description eventHero__description--small">Dołącz do wydarzenia „Kontent alternatywny w kinach” i odkryj, jak transmisje koncertów, spektakli czy e-sport mogą odmienić oblicze sal kinowych. Praktyczne przykłady, dyskusje i inspiracje dla branży i widzów!</p>
                    </div>
                    <div class="register__eventDetails register__eventDetails--separator">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="register__eventDetails">
                        <div class="eventHero__information">
                            <div class="eventHero__informationItem mb-0">
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
                                    <p class="eventHero__informationTitle eventHero__informationTitle--small"><?php echo $eventDate; ?></p>
                                    <p class="eventHero__informationSubtitle eventHero__informationSubtitle--small">Data wydarzenia</p>
                                </div>
                            </div>
                            <div class="eventHero__informationItem mb-0">
                                <span class="icon icon-clock-regular"></span>
                                <div>
                                    <p class="eventHero__informationTitle eventHero__informationTitle--small">2 dni</p>
                                    <p class="eventHero__informationSubtitle eventHero__informationSubtitle--small">Czas trwania wydarzenia</p>
                                </div>
                            </div>
                            <div class="eventHero__informationItem mb-0">
                                <span class="icon icon-map-marker"></span>
                                <div>
                                    <p class="eventHero__informationTitle eventHero__informationTitle--small">Poznań</p>
                                    <p class="eventHero__informationSubtitle eventHero__informationSubtitle--small">Miejsce wydarzenia</p>
                                </div>
                            </div>
                            <div class="eventHero__informationItem mb-0">
                                <span class="icon icon-user-regular"></span>
                                <div>
                                    <p class="eventHero__informationTitle eventHero__informationTitle--small">Ferment Kolektiv</p>
                                    <p class="eventHero__informationSubtitle eventHero__informationSubtitle--small">Organizator</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include ('footer.php'); ?>
