        <?php include "header.php"; ?>
        <main>
            <!--single campaign heading-->
            <section class="container">
                <div class="d-flex justify-content-between align-items-center flex-wrap my-3">
                    <div class="d-flex align-items-center">
                        <div>
                            <img class="rounded-circle border border-primary w-100" src="images/campaigns/rsz_anoodeling_logo.jpg" alt="">
                        </div>
                        <div class="pl-3 d-flex flex-wrap">
                            <h3 class="m-0 company-name pr-3">ANOODELING</h3>
                            <div class="d-flex align-items-center">
                                <div class="pr-3 d-flex align-items-center"><img class="flag-wide" src="images/flags/aut.jpg" alt=""></div>
                                <h4 class="m-0">Wien, Austria</h4>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-lg-block">
                        <a href="#" class="btn btn-success btn-lg text-uppercase">investieren</a> 
                    </div>
                    <div class="hidden-login d-block d-lg-none fixed-bottom bg-white py-3">
                        <div class="container">
                            <a href="#" class="bth btn-success rounded d-block text-uppercase py-3 text-center font-weight-bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">investieren</a>
                            <div class="dropdown-menu fixed-bottom-login">
                                <div class="container">
                                    <div class="d-flex">
                                        <button type="button" class="close ml-auto mb-3" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <a href="#" class="btn btn-new d-block text-center py-2 mb-3">Einloggen</a>
                                    <div class="d-flex justify-content-center">
                                        <hr>
                                        <p class="mb-3">Neuer Investor?</p>
                                        <hr>
                                    </div>
                                    <a href="#" class="btn btn-new-inverse d-block text-center py-2 mb-3">Registriren</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--single campaign cover-->
            <section class="single-campain-cover bg-info">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 col-lg-7 py-4 text-white">
                            <h1 class="company-name flex-wrap">Anoodeling(CI/ AFG/ BC/ AN) </h1>
                            <div class="d-flex">
                                <hr class="bg-white w-25">
                                <div class="w-25"></div>
                                <div class="w-25"></div>
                                <div class="w-25"></div>
                            </div>
                            <p class="company-basic-info font-italic">Lorem ipsum dolor sit amet, cetero nonumes consetetur est eu, sea graece lucilius incorrupte an, in euismod deleniti his. Vidit offendit phaedrum ea eos, sea paulo omittam eu, quis tollit ea sit. In cum nulla movet urbanitas, falli copiosae in quo. Usu utamur meliore ea, justo ancillae te mei. Vis aperiam euripidis eloquentiam te.</p>
                        </div>
                        <div class="col-5 d-none d-lg-block bg-white">
                            <div class="container">
                                <h5 class="font-weight-light text-secondary py-3">STARTET BALD</h5>
                                <div class="campaign-invest-wrapper text-secondary d-flex flex-column flex-sm-row justify-content-around"><!-- CAMPAIGN KNOB(SCALE) WITH CURRENT INVESTMENT STATUS AND BASIC INFO-->   
                                    <div class="campaign-invest-scale rounded-circle border border-secondary p-3  mr-3 text-center"><!-- SCALE -->
                                        <p class="investment-total-amount font-weight-bold m-0 mt-3"0&euro;</p>
                                        <p class="investors-number text-secondary">0 Investors</p>
                                        <p class="investment-completed">0%</p>
                                    </div> <!--END-->  
                                    <div class="investment-amounts align-self-center pt-3"><!-- BASIC INFO ABOUT INVESTMENTS -->
                                        <p class="text-secondary"><span class="investment-min d-block h4 m-0 text-secondary">500.000<sup class="currency">&euro;</sup></span> Minimum Investment</p>
                                        <p class="text-secondary"><span class="investment-max d-block h4 m-0 text-secondary">2.000.000<sup class="currency">&euro;</sup></span> Maximum investment</p>
                                    </div> <!--END-->
                                </div>
                                <div class="campaign-invest-info py-1 d-flex flex-wrap justify-content-around border-bottom border-top border-secondary mb-5 mt-3"><!--ADDITIONAL INFORMATION DISPLAYED AS ICONS WITH TOOLTIPS-->
                                    <div class="info-cell mx-1 px-2 py-2 text-center">
                                        <i class="fas fa-users text-secondary fa-2x" data-toggle="tooltip" data-placement="top" title="KMU"></i>
                                    </div>
                                    <div class="info-cell mx-1 px-2 py-2 text-center">
                                        <i class="fas fa-calendar-alt text-secondary fa-2x" data-toggle="tooltip" data-placement="top" title="Vertragslaufzeit"></i>
                                    </div>
                                </div> <!--END-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--hidden campaign cover item-->
            <section class="container">
                <div class="hidden-data d-block d-lg-none bg-white">
                    <h5 class="font-weight-light text-secondary py-3 text-center">STARTET BALD</h5>
                    <div class="campaign-invest-wrapper text-secondary d-flex flex-column flex-sm-row justify-content-around"><!-- CAMPAIGN KNOB(SCALE) WITH CURRENT INVESTMENT STATUS AND BASIC INFO-->
                        <div class="campaign-invest-scale rounded-circle border border-secondary p-3  mr-3 text-center"><!-- SCALE -->
                            <p class="investment-total-amount font-weight-bold m-0  mt-3 text-primary">0&euro;</p>
                            <p class="investors-number text-gray-600">0 Investors</p>
                            <p class="investment-completed text-secondary">0%</p>
                        </div> <!--END-->  
                        <div class="investment-amounts align-self-center pt-3"><!-- BASIC INFO ABOUT INVESTMENTS -->
                            <p class="text-secondary"><span class="investment-min d-block h4 m-0 text-secondary">500.000<sup class="currency">&euro;</sup></span> Minimum Investment</p>
                            <p class="text-secondary"><span class="investment-max d-block h4 m-0 text-secondary">2.000.000<sup class="currency">&euro;</sup></span> Maximum investment</p>
                        </div> <!--END-->
                    </div>
                    <div class="campaign-invest-info py-1 d-flex flex-wrap justify-content-around border-bottom border-top border-secondary mb-5 mt-3"><!--ADDITIONAL INFORMATION DISPLAYED AS ICONS WITH TOOLTIPS-->
                        <div class="info-cell mx-1 px-2 py-2 text-center">
                            <i class="fas fa-users text-muted fa-2x" data-toggle="tooltip" data-placement="top" title="KMU"></i>
                        </div>
                        <div class="info-cell mx-1 px-2 py-2 text-center">
                            <i class="fas fa-calendar-alt text-muted fa-2x" data-toggle="tooltip" data-placement="top" title="Vertragslaufzeit"></i>
                        </div>
                    </div> <!--END-->
                </div>
            </section>
            <!--single campaign pills nav-->
            <section class="container">
                <div class="campaign-story sticky-top">
                    <div class="nav nav-pills" id="pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active w-25 text-center bg-white text-primary px-0 py-3 mb-3 rounded-0 font-weight-bold" id="1" data-toggle="pill" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                        <a class="nav-link w-25 text-center bg-white text-primary px-0 py-3 mb-3 rounded-0 font-weight-bold" id="2" data-toggle="pill" href="#details" role="tab" aria-controls="details" aria-selected="false">Details</a>
                        <a class="nav-link w-25 text-center bg-white text-primary px-0 py-3 mb-3 rounded-0 font-weight-bold" id="3" data-toggle="pill" href="#documents" role="tab" aria-controls="documents" aria-selected="false">Document</a>
                        <a class="nav-link w-25 text-center bg-white text-primary px-0 py-3 mb-3 rounded-0 font-weight-bold" id="4" data-toggle="pill" href="#blog" role="tab" aria-controls="blog" aria-selected="false">Blog<sup class="pl-2"><span class="badge badge-pill badge-success rounded-circle px-2 py-1">3</span></sup></a>
                    </div>
                </div>
            </section>
            <!--single campaign pills content-->
            <section class="container-fluid">
                <div class="tab-content" id="pills-tabContent">
                    <!--overview pill-->
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="1">
                        <div class="container">
                            <div class="row">
                                <!--main-->
                                <div class="col-12 col-lg-8 mb-3">
                                    <div class="embed-responsive embed-responsive-16by9 mb-3">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5SVN9x7Uv74" allowfullscreen></iframe>
                                    </div>
                                    <h1 class="company-name mb-3 text-primary font-weight-normal">Anoodeling</h1>
                                    <p class="text-secondary">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam urna orci, vestibulum id ante ut, varius molestie arcu. Etiam scelerisque erat accumsan libero egestas ornare. Mauris mattis neque at metus condimentum suscipit. Nullam cursus libero sed diam volutpat semper. Sed sit amet dolor porta, sagittis felis vitae, sagittis lorem. Sed porttitor porttitor dolor, vel fringilla eros maximus id. Nulla semper tempor dapibus. Ut ex ipsum, placerat ut tortor vitae, laoreet lobortis arcu.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam urna orci, vestibulum id ante ut, varius molestie arcu. Etiam scelerisque erat accumsan libero egestas ornare. Mauris mattis neque at metus condimentum suscipit. Nullam cursus libero sed diam volutpat semper. Sed sit amet dolor porta, sagittis felis vitae, sagittis lorem. Sed porttitor porttitor dolor, vel fringilla eros maximus id. Nulla semper tempor dapibus. Ut ex ipsum, placerat ut tortor vitae, laoreet lobortis arcu.</p>
                                    <img class="w-100 mb-3" src="images/single-campaign/Story_image_01.jpg" alt="">
                                    <ol class="text-secondary">
                                        <li>Sed porttitor porttitor dolor, vel fringilla eros maximus id</li>
                                        <li>Sed porttitor porttitor dolor, vel fringilla eros maximus id</li>
                                        <li>Sed porttitor porttitor dolor, vel fringilla eros maximus id</li>
                                        <li>Sed porttitor porttitor dolor, vel fringilla eros maximus id</li>
                                    </ol>
                                    <p class="text-secondary">Nullam urna orci, vestibulum id ante ut, varius molestie arcu. Etiam scelerisque erat accumsan libero egestas ornare. Mauris mattis neque at metus condimentum suscipit. Nullam cursus libero sed diam volutpat semper. Sed sit amet dolor porta, sagittis felis vitae, sagittis lorem. Sed porttitor porttitor dolor, vel fringilla eros maximus id. Nulla semper tempor dapibus. Ut ex ipsum, placerat ut tortor vitae, laoreet lobortis arcu.</p>
                                    <h2 class="mb-3 font-weight-normal text-primary">Team members</h2>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 mb-4 pl-0">
                                                <div class="d-flex align-items-center">
                                                    <!--avatar-->
                                                    <div class="align-self-start">
                                                        <img class="rounded-circle avatar" src="images/profile-img-default.png" alt="">
                                                    </div>
                                                    <div class="pl-2">
                                                        <h5 class="m-0 text-secondary">Delorian Kubitski</h5>
                                                        <p class="m-0">CEO</p>
                                                        <a href="#" class="text-success" data-toggle="collapse" data-target="#accordion1" aria-expanded="true" aria-controls="accordion1"><em class="font-weight-bold">Biography</em><i class="fas fa-plus ml-2"></i></a>
                                                        <div id="accordion1" class="collapse">
                                                            <p>Aliquam erat volutpat. Aliquam libero ipsum, sollicitudin vel interdum eu, faucibus at velit. Integer consequat felis eu purus tempor, sed venenatis sapien aliquet. Nunc placerat eu ipsum a interdum. Vestibulum convallis purus mi, et porttitor erat vulputate eget. Aliquam non ante iaculis, fringilla metus id, ornare dolor. Nunc pretium leo a est tristique, id bibendum massa rutrum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-4 pl-0">
                                                <!--avatar-->
                                                <div class="d-flex align-items-center">
                                                    <div class="align-self-start">
                                                        <img class="rounded-circle avatar" src="images/profile-img-default.png" alt="">
                                                    </div>
                                                    <div class="pl-2">
                                                        <h5 class="m-0 text-secondary">Yohana Bach</h5>
                                                        <p class="m-0">Investor</p>
                                                        <a href="#" class="text-success" data-toggle="collapse" data-target="#accordion2" aria-expanded="true" aria-controls="accordion2"><em class="font-weight-bold">Biography</em><i class="fas fa-plus ml-2"></i></a>
                                                        <div id="accordion2" class="collapse">
                                                            <p>Aliquam erat volutpat. Aliquam libero ipsum, sollicitudin vel interdum eu, faucibus at velit. Integer consequat felis eu purus tempor, sed venenatis sapien aliquet. Nunc placerat eu ipsum a interdum. Vestibulum convallis purus mi, et porttitor erat vulputate eget. Aliquam non ante iaculis, fringilla metus id, ornare dolor. Nunc pretium leo a est tristique, id bibendum massa rutrum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-4 pl-0">
                                                <!--avatar-->
                                                <div class="d-flex align-items-center">
                                                    <div class="align-self-start">
                                                        <img class="rounded-circle avatar" src="images/profile-img-default.png" alt="">
                                                    </div>
                                                    <div class="pl-2">
                                                        <h5 class="m-0 text-secondary">Gerhard Lotus</h5>
                                                        <p class="m-0">COO</p>
                                                        <a href="#" class="text-success" data-toggle="collapse" data-target="#accordion3" aria-expanded="true" aria-controls="accordion3"><em class="font-weight-bold">Biography</em><i class="fas fa-plus ml-2"></i></a>
                                                        <div id="accordion3" class="collapse">
                                                            <p>Aliquam erat volutpat. Aliquam libero ipsum, sollicitudin vel interdum eu, faucibus at velit. Integer consequat felis eu purus tempor, sed venenatis sapien aliquet. Nunc placerat eu ipsum a interdum. Vestibulum convallis purus mi, et porttitor erat vulputate eget. Aliquam non ante iaculis, fringilla metus id, ornare dolor. Nunc pretium leo a est tristique, id bibendum massa rutrum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-4 pl-0">
                                                <!--avatar-->
                                                <div class="d-flex align-items-center">
                                                    <div class="align-self-start">
                                                        <img class="rounded-circle avatar" src="images/profile-img-default.png" alt="">
                                                    </div>
                                                    <div class="pl-2">
                                                        <h5 class="m-0 text-secondary">Edward Longstride</h5>
                                                        <p class="m-0">Investor</p>
                                                        <a href="#" class="text-success" data-toggle="collapse" data-target="#accordion4" aria-expanded="true" aria-controls="accordion4"><em class="font-weight-bold">Biography</em><i class="fas fa-plus ml-2"></i></a>
                                                        <div id="accordion4" class="collapse">
                                                            <p>Aliquam erat volutpat. Aliquam libero ipsum, sollicitudin vel interdum eu, faucibus at velit. Integer consequat felis eu purus tempor, sed venenatis sapien aliquet. Nunc placerat eu ipsum a interdum. Vestibulum convallis purus mi, et porttitor erat vulputate eget. Aliquam non ante iaculis, fringilla metus id, ornare dolor. Nunc pretium leo a est tristique, id bibendum massa rutrum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-4 pl-0">
                                                <!--avatar-->
                                                <div class="d-flex align-items-center">
                                                    <div class="align-self-start">
                                                        <img class="rounded-circle avatar" src="images/profile-img-default.png" alt="">
                                                    </div>
                                                    <div class="pl-2">
                                                        <h5 class="m-0 text-secondary">Fridrih Zetsche</h5>
                                                        <p class="m-0">CIO</p>
                                                        <a href="#" class="text-success" data-toggle="collapse" data-target="#accordion5" aria-expanded="true" aria-controls="accordion5"><em class="font-weight-bold">Biography</em><i class="fas fa-plus ml-2"></i></a>
                                                        <div id="accordion5" class="collapse">
                                                            <p>Aliquam erat volutpat. Aliquam libero ipsum, sollicitudin vel interdum eu, faucibus at velit. Integer consequat felis eu purus tempor, sed venenatis sapien aliquet. Nunc placerat eu ipsum a interdum. Vestibulum convallis purus mi, et porttitor erat vulputate eget. Aliquam non ante iaculis, fringilla metus id, ornare dolor. Nunc pretium leo a est tristique, id bibendum massa rutrum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-4 pl-0">
                                                <!--avatar-->
                                                <div class="d-flex align-items-center">
                                                    <div class="align-self-start">
                                                        <img class="rounded-circle avatar" src="images/profile-img-default.png" alt="">
                                                    </div>
                                                    <div class="pl-2">
                                                        <h5 class="m-0 text-secondary">Giacomo Lauda</h5>
                                                        <p class="m-0">Investor</p>
                                                        <a href="#" class="text-success" data-toggle="collapse" data-target="#accordion6" aria-expanded="true" aria-controls="accordion6"><em class="font-weight-bold">Biography</em><i class="fas fa-plus ml-2"></i></a>
                                                        <div id="accordion6" class="collapse">
                                                            <p>Aliquam erat volutpat. Aliquam libero ipsum, sollicitudin vel interdum eu, faucibus at velit. Integer consequat felis eu purus tempor, sed venenatis sapien aliquet. Nunc placerat eu ipsum a interdum. Vestibulum convallis purus mi, et porttitor erat vulputate eget. Aliquam non ante iaculis, fringilla metus id, ornare dolor. Nunc pretium leo a est tristique, id bibendum massa rutrum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-4 pl-0">
                                                <!--avatar-->
                                                <div class="d-flex align-items-center">
                                                    <div class="align-self-start">
                                                        <img class="rounded-circle avatar" src="images/profile-img-default.png" alt="">
                                                    </div>
                                                    <div class="pl-2">
                                                        <h5 class="m-0 text-secondary">Werner Daneken</h5>
                                                        <p class="m-0">CMO</p>
                                                        <a href="#" class="text-success" data-toggle="collapse" data-target="#accordion7" aria-expanded="true" aria-controls="accordion7"><em class="font-weight-bold">Biography</em><i class="fas fa-plus ml-2"></i></a>
                                                        <div id="accordion7" class="collapse">
                                                            <p>Aliquam erat volutpat. Aliquam libero ipsum, sollicitudin vel interdum eu, faucibus at velit. Integer consequat felis eu purus tempor, sed venenatis sapien aliquet. Nunc placerat eu ipsum a interdum. Vestibulum convallis purus mi, et porttitor erat vulputate eget. Aliquam non ante iaculis, fringilla metus id, ornare dolor. Nunc pretium leo a est tristique, id bibendum massa rutrum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-4 pl-0">
                                                <!--avatar-->
                                                <div class="d-flex align-items-center">
                                                    <div class="align-self-start">
                                                        <img class="rounded-circle avatar" src="images/profile-img-default.png" alt="">
                                                    </div>
                                                    <div class="pl-2">
                                                        <h5 class="m-0 text-secondary">Wolfgang Haig</h5>
                                                        <p class="m-0">Investor</p>
                                                        <a href="#" class="text-success" data-toggle="collapse" data-target="#accordion8" aria-expanded="true" aria-controls="accordion8"><em class="font-weight-bold">Biography</em><i class="fas fa-plus ml-2"></i></a>
                                                        <div id="accordion8" class="collapse">
                                                            <p>Aliquam erat volutpat. Aliquam libero ipsum, sollicitudin vel interdum eu, faucibus at velit. Integer consequat felis eu purus tempor, sed venenatis sapien aliquet. Nunc placerat eu ipsum a interdum. Vestibulum convallis purus mi, et porttitor erat vulputate eget. Aliquam non ante iaculis, fringilla metus id, ornare dolor. Nunc pretium leo a est tristique, id bibendum massa rutrum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--aside-->
                                <aside class="col-12 col-lg-4 campaign-side mb-3">
                                    <h4 class="text-secondary border-bottom font-weight-normal pb-3 mb-3">Additional info</h4>
                                    <div class="border-bottom my-3 pb-3">
                                        <a href="#" class="text-success">placerat ut tortor vitae, laoreet lobortis arcu: </a>
                                        <span class="text-secondary">JA, am Laufzeitende</span>
                                        <a href="#" class="text-success">Ut ex ipsum:</a>
                                        <span class="text-secondary">
                                            4,5%<br>
                                            Minimaler Zeichnungsbetrag: EUR 7.000<br>
                                            Maximaler Zeichnungsbetrag: EUR 20.000<br>
                                            (<a class="text-success" href="#">Beträge auf Nachfrage möglich</a>)Vertragslaufzeit: 8 Jahre<br>
                                        </span>
                                        <a href="#" class="text-success">Beteiligungsform: </a>
                                        <span class="text-secondary">Nachrangdarlehen</span>
                                    </div>
                                    <div class="border-bottom mb-3">
                                        <div class="mb-3">
                                            <u class="font-weight-bold text-secondary">WARNHINWEIS: Class aptent taciti sociosqu ad litora torquent per conubia nostra.</u>
                                        </div>
                                        <p class="text-secondary">Im Sinne der Risikostreuung sollten möglichst nur Geldbeträge investiert werden, die in näherer Zukunft auch liquide nicht benötigt bzw. zurückerwartet werden. Verantwortlich für sämtliche Inhalte und Angaben auf dieser Seite ist ausschließlich die Emittentin selbst, sie ist Anbieter dieser Vermögensanlage. Seitens des Betreibers der Internet-Dienstleistungsplattform wird keine Haftung für die Richtigkeit und Aktualität der Inhalte übernommen.</p>
                                    </div>
                                    <div class="mb-5">
                                        <a href="#" class="text-success d-block">Welches Risiko habe ich als Investor?</a>
                                        <a href="#" class="text-success d-block">Welches Rücktrittsrecht habe ich als Investor?</a>
                                    </div>
                                    <!--incentives-->
                                    <div class="incentives">
                                        <h4 class="text-secondary border-bottom font-weight-normal pb-3 mb-3">Incentives for your investment</h4>
                                        <div class="incentive">
                                            <div class="border-bottom mb-3">
                                                <h5 class="incentive-package text-secondary">Bronze</h5>
                                                <div class="d-flex mb-3">
                                                    <h1 class="incentive-price m-0 text-secondary">5.000<sup>€</sup><span class="pl-4 h5">Investment</span></h1>
                                                </div>
                                                <p class="text-secondary">Lorem ipsum dolor sit amet, cetero nonumes consetetur est eu, sea graece lucilius incorrupte an, in euismod deleniti his. Vidit offendit phaedrum ea eos, sea paulo omittam eu, quis tollit ea sit. In cum nulla movet urbanitas, falli copiosae in quo. Usu utamur meliore ea, justo ancillae te mei. Vis aperiam euripidis eloquentiam te.Lorem ipsum dolor sit amet, cetero nonumes consetetur est eu, sea graece lucilius incorrupte an, in euismod deleniti his. Vidit offendit phaedrum ea eos, sea paulo omittam eu, quis tollit ea sit. In cum nulla movet urbanitas, falli copiosae in quo. Usu utamur meliore ea, justo ancillae te mei. Vis aperiam euripidis eloquentiam te.</p>
                                            </div>
                                        </div>
                                        <div class="incentive">
                                            <div class="border-bottom mb-3">
                                                <h5 class="incentive-package text-secondary">Gold</h5>
                                                <div class="d-flex mb-3">
                                                    <h1 class="incentive-price m-0 text-secondary">10.000<sup>€</sup><span class="pl-4 h5">Investment</span></h1>
                                                </div>
                                                <p class="text-secondary">Lorem ipsum dolor sit amet, cetero nonumes consetetur est eu, sea graece lucilius incorrupte an, in euismod deleniti his. Vidit offendit phaedrum ea eos, sea paulo omittam eu, quis tollit ea sit. In cum nulla movet urbanitas, falli copiosae in quo. Usu utamur meliore ea, justo ancillae te mei. Vis aperiam euripidis eloquentiam te.Lorem ipsum dolor sit amet, cetero nonumes consetetur est eu, sea graece lucilius incorrupte an, in euismod deleniti his. Vidit offendit phaedrum ea eos, sea paulo omittam eu, quis tollit ea sit. In cum nulla movet urbanitas, falli copiosae in quo. Usu utamur meliore ea, justo ancillae te mei. Vis aperiam euripidis eloquentiam te.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--company details-->
                                    <div class="company-details mb-3">
                                        <h3 class="text-secondary border-bottom font-weight-normal pb-3 mb-3">Company details</h3>
                                        <div class="d-flex align-items-center"><i class="fas fa-map-marker pr-2 details-icon"></i><span class="text-gray-600">Bruno-Kreisky-Platz 1, 1220 Wien, Wien, Austria</span></div>
                                        <div class="d-flex align-items-center"><i class="fas fa-phone pr-2 details-icon"></i><a href="tel:+1086438517" class="text-success">+1086438517</a></div>
                                        <div class="d-flex align-items-center"><i class="fas fa-envelope pr-2 details-icon"></i><a href="mailto:office@anoodeling.com" class="text-success">office@anoodeling.com</a></div>
                                        <div class="d-flex align-items-center"><i class="fas fa-link pr-2 details-icon"></i><a href="www.anoodeling.com" class="text-success">www.anoodeling.com</a></div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <!--details pill-->
                    <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="2">
                        <div class="container">
                            <div class="row">
                                <!--main-->
                                <div class="col-12 col-lg-8 mb-3">
                                    <h1 class="company-name mb-3">Anoodeling</h1>
                                    <p class="text-secondary">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam urna orci, vestibulum id ante ut, varius molestie arcu. Etiam scelerisque erat accumsan libero egestas ornare. Mauris mattis neque at metus condimentum suscipit. Nullam cursus libero sed diam volutpat semper. Sed sit amet dolor porta, sagittis felis vitae, sagittis lorem. Sed porttitor porttitor dolor, vel fringilla eros maximus id. Nulla semper tempor dapibus. Ut ex ipsum, placerat ut tortor vitae, laoreet lobortis arcu.</p>
                                    <div class="story-img">
                                        <img src="images/single-campaign/Story_image_02.jpg" class="w-100 mb-3" alt="" id="anoodeling">
                                    </div>
                                    <table class="w-100 mb-3">
                                        <tr>
                                            <th class="text-secondary">Primary</th>
                                            <th class="text-secondary">Success</th>
                                            <th class="text-secondary">Results</th>
                                        </tr>
                                        <tr>
                                            <td class="text-secondary">Agio</td>
                                            <td class="text-secondary">11%</td>
                                            <td class="text-secondary">john@example.com</td>
                                        </tr>
                                        <tr>
                                            <td class="text-secondary">Disagio</td>
                                            <td class="text-secondary">5%</td>
                                            <td class="text-secondary">marry@example.com</td>
                                        </tr>
                                        <tr>
                                            <td class="text-secondary">Instalment</td>
                                            <td class="text-secondary">10%</td>
                                            <td class="text-secondary">jane@example.com</td>
                                        </tr>
                                        <tr>
                                            <td class="text-secondary">VermAnIG</td>
                                            <td class="text-secondary">5%</td>
                                            <td class="text-secondary">lara@example.com</td>
                                        </tr>
                                    </table>
                                    <h1 class="heading mb-3">Investieren</h1>
                                    <p class="text-secondary content mb-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                    <img src="images/single-campaign/Story_image_03.jpg" class="w-100 mb-3" alt="" id="investieren">
                                    <div>
                                        <blockquote class="blockquote mb-3">
                                            <i class="mb-3 text-success">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</i>
                                        </blockquote>
                                    </div>
                                </div>
                                <!--aside-->
                                <aside class="col-12 col-lg-4 campaign-side mb-3">
                                    <h4 class="text-secondary border-bottom font-weight-normal pb-3 mb-3">Additional info</h4>
                                    <div class="border-bottom my-3 pb-3">
                                        <a href="#" class="text-success">placerat ut tortor vitae, laoreet lobortis arcu: </a>
                                        <span class="text-secondary">JA, am Laufzeitende</span>
                                        <a href="#" class="text-success">Ut ex ipsum:</a>
                                        <span class="text-secondary">
                                            4,5%<br>
                                            Minimaler Zeichnungsbetrag: EUR 7.000<br>
                                            Maximaler Zeichnungsbetrag: EUR 20.000<br>
                                            (<a class="text-success" href="#">Beträge auf Nachfrage möglich</a>)Vertragslaufzeit: 8 Jahre<br>
                                        </span>
                                        <a href="#" class="text-success">Beteiligungsform: </a>
                                        <span class="text-secondary">Nachrangdarlehen</span>
                                    </div>
                                    <div class="border-bottom mb-3">
                                        <div class="mb-3">
                                            <u class="font-weight-bold text-secondary">WARNHINWEIS: Class aptent taciti sociosqu ad litora torquent per conubia nostra.</u>
                                        </div>
                                        <p class="text-secondary">Im Sinne der Risikostreuung sollten möglichst nur Geldbeträge investiert werden, die in näherer Zukunft auch liquide nicht benötigt bzw. zurückerwartet werden. Verantwortlich für sämtliche Inhalte und Angaben auf dieser Seite ist ausschließlich die Emittentin selbst, sie ist Anbieter dieser Vermögensanlage. Seitens des Betreibers der Internet-Dienstleistungsplattform wird keine Haftung für die Richtigkeit und Aktualität der Inhalte übernommen.</p>
                                    </div>
                                    <div class="mb-5">
                                        <a href="#" class="text-success d-block">Welches Risiko habe ich als Investor?</a>
                                        <a href="#" class="text-success d-block">Welches Rücktrittsrecht habe ich als Investor?</a>
                                    </div>
                                    <!--incentives-->
                                    <div class="incentives">
                                        <h4 class="text-secondary border-bottom font-weight-normal pb-3 mb-3">Incentives for your investment</h4>
                                        <div class="incentive">
                                            <div class="border-bottom mb-3">
                                                <h5 class="incentive-package text-secondary">Bronze</h5>
                                                <div class="d-flex mb-3">
                                                    <h1 class="incentive-price m-0 text-secondary">5.000<sup>€</sup><span class="pl-4 h5">Investment</span></h1>
                                                </div>
                                                <p class="text-secondary">Lorem ipsum dolor sit amet, cetero nonumes consetetur est eu, sea graece lucilius incorrupte an, in euismod deleniti his. Vidit offendit phaedrum ea eos, sea paulo omittam eu, quis tollit ea sit. In cum nulla movet urbanitas, falli copiosae in quo. Usu utamur meliore ea, justo ancillae te mei. Vis aperiam euripidis eloquentiam te.Lorem ipsum dolor sit amet, cetero nonumes consetetur est eu, sea graece lucilius incorrupte an, in euismod deleniti his. Vidit offendit phaedrum ea eos, sea paulo omittam eu, quis tollit ea sit. In cum nulla movet urbanitas, falli copiosae in quo. Usu utamur meliore ea, justo ancillae te mei. Vis aperiam euripidis eloquentiam te.</p>
                                            </div>
                                        </div>
                                        <div class="incentive">
                                            <div class="border-bottom mb-3">
                                                <h5 class="incentive-package text-secondary">Gold</h5>
                                                <div class="d-flex mb-3">
                                                    <h1 class="incentive-price m-0 text-secondary">10.000<sup>€</sup><span class="pl-4 h5">Investment</span></h1>
                                                </div>
                                                <p class="text-secondary">Lorem ipsum dolor sit amet, cetero nonumes consetetur est eu, sea graece lucilius incorrupte an, in euismod deleniti his. Vidit offendit phaedrum ea eos, sea paulo omittam eu, quis tollit ea sit. In cum nulla movet urbanitas, falli copiosae in quo. Usu utamur meliore ea, justo ancillae te mei. Vis aperiam euripidis eloquentiam te.Lorem ipsum dolor sit amet, cetero nonumes consetetur est eu, sea graece lucilius incorrupte an, in euismod deleniti his. Vidit offendit phaedrum ea eos, sea paulo omittam eu, quis tollit ea sit. In cum nulla movet urbanitas, falli copiosae in quo. Usu utamur meliore ea, justo ancillae te mei. Vis aperiam euripidis eloquentiam te.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--company details-->
                                    <div class="company-details mb-3">
                                        <h3 class="text-secondary border-bottom font-weight-normal pb-3 mb-3">Company details</h3>
                                        <div class="d-flex align-items-center"><i class="fas fa-map-marker pr-2 details-icon"></i><span class="text-gray-600">Bruno-Kreisky-Platz 1, 1220 Wien, Wien, Austria</span></div>
                                        <div class="d-flex align-items-center"><i class="fas fa-phone pr-2 details-icon"></i><a href="tel:+1086438517" class="text-success">+1086438517</a></div>
                                        <div class="d-flex align-items-center"><i class="fas fa-envelope pr-2 details-icon"></i><a href="mailto:office@anoodeling.com" class="text-success">office@anoodeling.com</a></div>
                                        <div class="d-flex align-items-center"><i class="fas fa-link pr-2 details-icon"></i><a href="www.anoodeling.com" class="text-success">www.anoodeling.com</a></div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <!--documents pill-->
                    <div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="3">
                        <div class="container">
                            <div class="row">
                                <!--main-->
                                <div class="col-12 col-lg-8 mb-3">
                                    <h3 class="text-secondary border-bottom mb-3 pb-3">Documents</h3>
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="border-bottom d-flex align-items-center py-3">
                                                <i class="fas fa-cloud fa-2x pr-3 text-secondary"></i>
                                                <a href="#" class="text-success">ANOODELING_pdf.pdf</a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="border-bottom d-flex align-items-center py-3">
                                                <i class="fas fa-cloud fa-2x pr-3 text-secondary"></i>
                                                <a href="#" class="text-success">ANOODELING_vib_pdf.pdf</a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="border-bottom d-flex align-items-center py-3">
                                                <i class="fas fa-cloud fa-2x pr-3 text-secondary"></i>
                                                <a href="#" class="text-success">ANOODELING_consumer_information_pdf.pdf</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--aside-->
                                <aside class="col-12 col-lg-4 campaign-side-short mb-3">
                                    <!--company details-->
                                    <div class="company-details mb-3">
                                        <h3 class="text-secondary border-bottom font-weight-normal pb-3 mb-3">Company details</h3>
                                        <div class="d-flex align-items-center"><i class="fas fa-map-marker pr-2 details-icon"></i><span class="text-gray-600">Bruno-Kreisky-Platz 1, 1220 Wien, Wien, Austria</span></div>
                                        <div class="d-flex align-items-center"><i class="fas fa-phone pr-2 details-icon"></i><a href="tel:+1086438517" class="text-success">+1086438517</a></div>
                                        <div class="d-flex align-items-center"><i class="fas fa-envelope pr-2 details-icon"></i><a href="mailto:office@anoodeling.com" class="text-success">office@anoodeling.com</a></div>
                                        <div class="d-flex align-items-center"><i class="fas fa-link pr-2 details-icon"></i><a href="www.anoodeling.com" class="text-success">www.anoodeling.com</a></div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <!--blog pill-->
                    <div class="tab-pane fade" id="blog" role="tabpanel" aria-labelledby="4">
                        <div class="container">
                            <div class="row">
                                <!--main-->
                                <div class="col-12 col-lg-8 mb-3">
                                    <h3 class="text-secondary border-bottom mb-3 pb-3">Other posts</h3>
                                    <div class="row pb-3">
                                        <div class="col-12 col-sm-6">
                                            <div class="news-single card p-2 mb-4">
                                                <div class="card-body p-0 text-dark">
                                                    <a href="#">
                                                        <h4 class="news-heading card-title mt-3 text-dark">Proin euismod nisl id nisl consectetur porttitor</h4>
                                                    </a>
                                                    <div class="date-author d-flex align-items-baseline">
                                                        <i class="far fa-clock mr-1 text-secondary"></i>
                                                        <p class="card-subtitle text-secondary">September 11, 2017 By
                                                            <span><a href="#" class="text-success">adminuser </a></span> in<span><a href="#" class="text-success"> Uncategorized</a></span></p>
                                                    </div>
                                                    <p class="news-summary card-text text-dark mt-3">Pellentesque consequat fringilla nibh. Nunc quis ante ligula. Duis laoreet diam nisl, tincidunt ultricies velit interdum vitae. Nam et justo facilisis, semper erat sed, pulvinar ligula. Vivamus vel ipsum id nunc mattis rhoncus. In non varius mauris. Nunc efficitur imperdiet quam sit amet tincidunt. Curabitur et sapien elit. Donec sit amet interdum mi. Nam eu</p>
                                                    <a href="#" class="d-inline-block text-success mb-3">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="news-single card p-2 mb-4">
                                                <div class="card-body p-0 text-dark">
                                                    <a href="#">
                                                        <h4 class="news-heading card-title mt-3 text-dark">Suspendisse potenti</h4>
                                                    </a>
                                                    <div class="date-author d-flex align-items-baseline">
                                                        <i class="far fa-clock mr-1 text-secondary"></i>
                                                        <p class="card-subtitle text-secondary">September 11, 2017 By
                                                            <span>
                                                                <a href="#" class="text-success">adminuser </a>
                                                            </span> in
                                                            <span>
                                                                <a href="#" class="text-success"> Uncategorized</a>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <p class="news-summary card-text text-dark mt-3">Nulla cursus congue est, non sagittis lacus congue non. Morbi pretium orci libero, eget mattis nisl porttitor vel. Ut tempus nec massa vel fermentum. Donec egestas vitae libero sit amet malesuada. Integer vel elit sit amet dolor sollicitudin volutpat eget eu neque. Proin vulputate accumsan lacus, non suscipit massa iaculis sed. Donec iaculis dui in</p>
                                                    <a href="#" class="d-inline-block text-success mb-3">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="news-single card p-2 mb-4">
                                                <a href="#" class="news-image d-block">
                                                    <img src="images/news/house.jpg" class="card-img-top img-fluid">
                                                </a>
                                                <div class="card-body p-0 text-dark">
                                                    <a href="#">
                                                        <h4 class="news-heading card-title mt-3 text-dark">Nunc nec enim at ipsum aliquam rutrum nec et elit</h4>
                                                    </a>
                                                    <div class="date-author d-flex align-items-baseline">
                                                        <i class="far fa-clock mr-1 text-secondary"></i>
                                                        <p class="card-subtitle text-secondary">September 11, 2017 By
                                                            <span>
                                                                <a href="#" class="text-success">adminuser </a>
                                                            </span> in
                                                            <span>
                                                                <a href="#" class="text-success"> Uncategorized</a>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <p class="news-summary card-text text-dark mt-3">Maecenas imperdiet arcu id urna fringilla suscipit. Nullam non luctus mauris. Aliquam at orci ut metus congue dapibus. Nullam non turpis in purus porttitor gravida ac nec ligula. Sed at nibh turpis. Etiam porttitor magna vitae augue ullamcorper, ultricies porta quam finibus. Proin diam metus, bibendum eu felis in, accumsan cursus dui. Fusce condimentum feugiat</p>
                                                    <a href="#" class="d-inline-block text-success mb-3">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--aside-->
                                <aside class="col-12 col-lg-4 campaign-side-short mb-3">
                                    <!--company details-->
                                    <div class="company-details mb-3">
                                        <h3 class="text-secondary border-bottom font-weight-normal pb-3 mb-3">Company details</h3>
                                        <div class="d-flex align-items-center"><i class="fas fa-map-marker pr-2 details-icon"></i><span class="text-secondary">Bruno-Kreisky-Platz 1, 1220 Wien, Wien, Austria</span></div>
                                        <div class="d-flex align-items-center"><i class="fas fa-phone pr-2 details-icon"></i><a href="tel:+1086438517" class="text-success">+1086438517</a></div>
                                        <div class="d-flex align-items-center"><i class="fas fa-envelope pr-2 details-icon"></i><a href="mailto:office@anoodeling.com" class="text-success">office@anoodeling.com</a></div>
                                        <div class="d-flex align-items-center"><i class="fas fa-link pr-2 details-icon"></i><a href="www.anoodeling.com" class="text-success">www.anoodeling.com</a></div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include "footer.php"; ?>

