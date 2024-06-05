<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "donna.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,200,0,0"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Martel:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id = 'background'>
            <div id = 'back_top_nav'></div>
            <div id = 'back_header'></div>
            <div id = 'back_main_section'></div>
            <div id = 'back_preferiti'></div>
            <div id = 'back_info'></div>
            <div id = 'back_footer'></div>

            <section id = 'container_intern_body'>
                <section id = 'intern_body'>
                    <nav id = 'top_nav'>
                        <span class = 'top_nav_item'>Reso in 100 giorni</span>
                        <a id = 'center_item' class = 'top_nav_item'>Consegna standard e resi gratuiti oltre 28.90 €*</a>
                        <a class = 'top_nav_item'>Aiuto e contatti</a>
                    </nav>

                    <header>
                        <nav class = 'header_items'>
                            <a href = 'donna.php' class = 'categoria'>Donna</a>
                            <a href = 'uomo.php' class = 'categoria'>Uomo</a>
                            <a href = 'bambini.php' class = 'categoria'>Bambini</a>
                        </nav>

                        <div class = 'header_items'>
                            <a href = 'index.php' id = 'logo'><img src = "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Zalando-Logo.svg/2560px-Zalando-Logo.svg.png"/></a>
                            <a id = 'plus'>Scopri<em>plus</em></a>
                        </div>

                        <section class = 'header_items'>
                            <a id = 'lang'>it</a>
                    
                                <style>
                                    .material-symbols-outlined {
                                        font-size: 210%;
                                    }
                                </style>
                            
                            <a class="material-symbols-outlined">language</a>
                            <a id = 'account' class="material-symbols-outlined" href = 'login.php'>person</a>
                            <a class="material-symbols-outlined">favorite</a>
                            <a class="material-symbols-outlined">shopping_bag</a>
                        </section>
                    </header>

                    <section id = 'navigazione'>
                        <nav>
                            <a class = 'opzioni'>Novità</a>
                            <a class = 'opzioni'>Abbigliamento</a>
                            <a class = 'opzioni'>Scarpe</a>
                            <a class = 'opzioni'>Sports</a>
                            <a class = 'opzioni'>Accessori</a>
                            <a class = 'opzioni'>Designer</a>
                            <a class = 'opzioni'>Brand</a>
                            <a class = 'opzioni'>Promo</a>
                            <a id = 'second_to_last' class = 'opzioni'>Second hand</a>
                            <a id = 'last' class = 'opzioni'>Idee regalo</a>
                        </nav>

                        <div id = 'container_menu'>
                            <div id = 'menu'>
                                    <div class = 'menu_item'></div>
                                    <div id = 'center' class = 'menu_item'></div>
                                    <div class = 'menu_item'></div>
                            </div>
                        </div>
                        <form class = 'ricerca'>
                            <span class = 'material-symbols-outlined'>search</span>
                            <input placeholder = 'Ricerca'>
                        </form>
                    </section>

                    <article id = 'main'>
                        <section id = 'content'></section>
                    </article>

                    <div id = 'container_info'>
                        <section id = 'info'>
                            <!--<img src = ".\immagini\info_icons\Aiuto_e_contatti.png">
                            <img src = ".\immagini\info_icons\Buoni_regalo.png">
                            <img src = ".\immagini\info_icons\Modalita_di_pagamento.png">
                            <img src = ".\immagini\info_icons\Shopping_online_facile.png">
                            <img src = ".\immagini\info_icons\Spedito_da.png">
                            <img src = ".\immagini\info_icons\ZALANDO.png">-->
                            <section class = 'container_opzioni'>
                                <div>  
                                    <h3><img src = ".\immagini\info_icons\Aiuto_e_contatti.png"><span>Aiuto e contatti</span></h3>
                                    <a class = 'opzioni'><h4>Domande frequenti</h4></a>
                                    <a class = 'opzioni'><span>Procedi all'ordine</span></a>
                                    <a class = 'opzioni'><span>Tempi di spedizione</span></a>
                                    <a class = 'opzioni'><span>Come effettuare un reso</span></a>
                                    <a class = 'opzioni'><span>Prodotti partner</span></a>
                                </div>
                                <div>
                                    
                                    <h3><img src = ".\immagini\info_icons\Spedito_da.png"><span>Spedito da</span></h3>
                                    <!--corrieri-->
                                </div>
                            </section>
                            <section class = 'container_opzioni'>
                                <div>
                                    <h3></h3>
                                    <a class = 'opzioni'><h4></h4></a>
                                    <a class = 'opzioni'><span>Metodi di pagamento</span></a>
                                    <a class = 'opzioni'><span>Dove si trova il mio ordine</span></a>
                                    <a class = 'opzioni'><span>Come modifico i dati in account</span></a>
                                    <a class = 'opzioni'><span>Iscriviti alla nostra Newsletter</span></a>
                                </div>
                                <div>
                                    
                                    <h3><img src = ".\immagini\info_icons\Modalita_di_pagamento.png"><span>Modalità di pagamento</span></h3>
                                    <!--carte-->
                                </div>
                            </section>
                            <section class = 'container_opzioni'>
                                <div>
                                    
                                    <h3><img src = ".\immagini\info_icons\Buoni_regalo.png"><span>Buoni regalo</span></h3>
                                    <a class = 'opzioni'><span>Acquista un buono regalo</span></a>
                                    <a class = 'opzioni'><span>Codice acquisto PuntoLis</span></a>
                                    <a class = 'opzioni'><span>Buoni Regalo Aziendali</span></a>
                                    <a class = 'opzioni'><span>Codici regalo SisalPay | 5</span></a>
                                </div>
                                <div>
                                    
                                    <h3><img src = ".\immagini\info_icons\Shopping_online_facile.png"><span>Shopping online facile</span></h3>
                                    <a class = 'opzioni'><span>Scopri Zalando Plus</span></a>
                                    <a class = 'opzioni'><span>Spedizione e reso gratuiti*</span></a>
                                    <a class = 'opzioni'><span>Reso gratuito</span></a>
                                    <a class = 'opzioni'><span>100 giorni per il reso</span></a>
                                </div>
                            </section>
                            <section class = 'container_opzioni'>
                                <div>
                                    
                                    <h3><img src = ".\immagini\info_icons\ZALANDO.png"><span>ZALANDO</span></h3>
                                    <a class = 'opzioni'><span>Sito aziendale</span></a>
                                    <a class = 'opzioni'><span>Lavoro</span></a>
                                    <a class = 'opzioni'><span>Stampa</span></a>
                                    <a class = 'opzioni'><span>Investitori</span></a>
                                </div>
                                <div>
                                    <h3><img src = ".\immagini\info_icons\ZALANDO.png"><span>Diventa Partner</span></h3>
                                    <a class = 'opzioni'><span>Connected Retail</span></a>
                                    <a class = 'opzioni'><span>Servizi di marketing</span></a>
                                    <a class = 'opzioni'><span>Scopri di più</span></a>
                                    <a class = 'opzioni'><span></span></a>
                                </div>
                            </section>
                            
                        </section>
                    </div>
                    
                </section>
            </section>
        </div>

    </body>
</html>