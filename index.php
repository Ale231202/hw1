<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">        
        <title>Abbigliamento, scarpe e accessori alla moda | Scoprili su Zalando</title>
        <link rel="stylesheet" href="index.css">
        <script src = "index.js" defer></script>

        <!--riferimento icone-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,200,0,0"/>

        <!--riferimento font "Martel"-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Martel:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">


    </head>

    <body>
        <div id = 'background'>
            <div id = 'back_top_nav'></div>
            <div id = 'back_header'></div>

            <div id = 'back_content_view' class = 'hidden'></div>
            <div id = 'back_main_section' data-index = '0'></div>
            <div id = 'back_main_section' data-index = '1'class = 'hidden'></div>
            <div id = 'back_main_section' data-index = '2'class = 'hidden'></div>
            <div id = 'back_main_section' data-index = '3'class = 'hidden'></div>
            <div id = 'back_main_section' data-index = '4'class = 'hidden'></div>
            <div id = 'back_main_section' data-index = '5'class = 'hidden'></div>
            <div id = 'back_main_section' data-index = '6'class = 'hidden'></div>
            <div id = 'back_main_section' data-index = '7'class = 'hidden'></div>

            <div id = 'back_secondary_section'></div>
            <div id = 'back_newsletter'></div>
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
                            <form autocomplete="off" class = 'ricerca'>
                                <span class = 'material-symbols-outlined'>search</span>
                                <input type = 'text' name = 'search' placeholder = 'Ricerca'>
                            </form>
                        </section>

                        <article id = 'content_view' class = 'hidden'>
                        </article>

                        <article id = 'main_section' data-index = '0'>
                            <!--NON CAMBIA-->
                           <a id = 'arrow_forward' class ="material-symbols-outlined">arrow_forward</a>  

                            <img class = 'icons' src = ".\immagini\main_section_icons\1a.png"/><br>                       
                            <h1>Più di quanto ti aspetti</h1>                    
                            <p>
                              Moda, beauty, designer e molto altro
                            </p>                    
                            <span>Da dove vuoi iniziare?</span>
                            
                            <!--NON CAMBIA-->
                            <div class = 'container_categoria'>
                                <a href = 'donna.php' class = 'categoria'>Donna</a>
                                <a href = 'uomo.php' class = 'categoria'>Uomo</a>
                                <a href = 'bambini.php' class = 'categoria'>Bambini</a>
                            </div>

                        </article>

                        <article id = 'main_section' data-index = '1' class = 'hidden'>
                            <!--NON CAMBIA-->
                           <a id = 'arrow_forward' class="material-symbols-outlined">arrow_forward</a>
                           <a id = 'arrow_back' class="material-symbols-outlined">arrow_back</a>

                            <img class = 'icons' src = ".\immagini\main_section_icons\2a.png"/><br>     

                            <h1>Spedizione gratuita* e reso in 100 giorni<a id = 'i' class="material-symbols-outlined">info</a></h1>
                            
                            <p>
                                Prenditi tempo per decidere
                            </p>                    
                            <span>Da dove vuoi iniziare?</span>
                            
                            <!--NON CAMBIA-->
                            <div class = 'container_categoria'>
                                <a class = 'categoria'>Donna</a>
                                <a class = 'categoria'>Uomo</a>
                                <a class = 'categoria'>Bambini</a>
                            </div>

                        </article>

                        <article id = 'main_section' data-index = '2' class = 'hidden'>
                            <!--NON CAMBIA-->
                           <a id = 'arrow_forward' class="material-symbols-outlined">arrow_forward</a>
                           <a id = 'arrow_back' class="material-symbols-outlined">arrow_back</a>  

                            <img class = 'icons' src = ".\immagini\main_section_icons\3a.png"/>                        
                            <h1>Scopri i tuoi brand</h1>                    
                            <p>
                                Segui i brand per novità e<br>aggiornamenti
                            </p>                    
                            <span>Da dove vuoi iniziare?</span>
                            
                            <!--NON CAMBIA-->
                            <div class = 'container_categoria'>
                                <a class = 'categoria'>Donna</a>
                                <a class = 'categoria'>Uomo</a>
                                <a class = 'categoria'>Bambini</a>
                            </div>

                        </article>

                        <article id = 'main_section' data-index = '3' class = 'hidden'>
                            <!--NON CAMBIA-->
                           <a id = 'arrow_forward' class="material-symbols-outlined">arrow_forward</a>  
                           <a id = 'arrow_back' class="material-symbols-outlined">arrow_back</a>

                            <img class = 'icons' src = ".\immagini\main_section_icons\4a.png"/>                        
                            <h1>La moda su misura per te</h1>                    
                            <p>
                                Suggerimenti di stile in base ai tuoi<br>like
                            </p>                    
                            <span>Da dove vuoi iniziare?</span>
                            
                            <!--NON CAMBIA-->
                            <div class = 'container_categoria'>
                                <a class = 'categoria'>Donna</a>
                                <a class = 'categoria'>Uomo</a>
                                <a class = 'categoria'>Bambini</a>
                            </div>

                        </article>

                        <article id = 'main_section' data-index = '4' class = 'hidden'>
                            <!--NON CAMBIA-->
                           <a id = 'arrow_forward' class="material-symbols-outlined">arrow_forward</a>
                           <a id = 'arrow_back' class="material-symbols-outlined">arrow_back</a>  

                            <img class = 'icons' src = ".\immagini\main_section_icons\5a.png"/>                        
                            <h1>Scopri Zalando Plus</h1>                    
                            <p>
                                L'iscrizione Zalando con ancora più<br>vantaggi
                            </p>                    
                            <span>Da dove vuoi iniziare?</span>
                            
                            <!--NON CAMBIA-->
                            <div class = 'container_categoria'>
                                <a class = 'categoria'>Donna</a>
                                <a class = 'categoria'>Uomo</a>
                                <a class = 'categoria'>Bambini</a>
                            </div>

                        </article>

                        <article id = 'main_section' data-index = '5' class = 'hidden'>
                            <!--NON CAMBIA-->
                           <a id = 'arrow_forward' class="material-symbols-outlined">arrow_forward</a>  
                           <a id = 'arrow_back' class="material-symbols-outlined">arrow_back</a>

                            <img class = 'icons' src = ".\immagini\main_section_icons\6a.png"/>                        
                            <h1>La misura perfetta</h1>                    
                            <p>
                                Trova articoli della tua taglia con i<br>nostri filtri.
                            </p>                    
                            <span>Da dove vuoi iniziare?</span>
                            
                            <!--NON CAMBIA-->
                            <div class = 'container_categoria'>
                                <a class = 'categoria'>Donna</a>
                                <a class = 'categoria'>Uomo</a>
                                <a class = 'categoria'>Bambini</a>
                            </div>

                        </article>

                        <article id = 'main_section' data-index = '6' class = 'hidden'>
                            <!--NON CAMBIA-->
                            <a id = 'arrow_forward' class="material-symbols-outlined">arrow_forward</a>
                            <a id = 'arrow_back' class="material-symbols-outlined">arrow_back</a>

                            <img class = 'icons' src = ".\immagini\main_section_icons\7a.png"/>                        
                            <h1>Metodi di pagamento semplici</h1>                    
                            <p>
                                Più scelta, zero stress
                            </p>                    
                            <span>Da dove vuoi iniziare?</span>
                            
                            <!--NON CAMBIA-->
                            <div class = 'container_categoria'>
                                <a class = 'categoria'>Donna</a>
                                <a class = 'categoria'>Uomo</a>
                                <a class = 'categoria'>Bambini</a>
                            </div>

                        </article>

                        <article id = 'main_section' data-index = '7' class = 'hidden'>
                            <a id = 'arrow_back' class="material-symbols-outlined">arrow_back</a>

                            <section class = 'hidden'><div class = 'hidden' id = 'artists_view'></div></section>
                            <div id = "sezione_artisti">
                                <h1>Cerca il tuo artista preferito</h1>
                                <p>
                                    Lasciati ispirare dai loro look
                                </p>

                                <form autocomplete="off" class = 'cerca_artista'>
                                    <input type = 'text' name = "search_artist" placeholder = 'Cerca il tuo artista'>
                                </form>
                                <img id = 'artist_icon' src = ".\immagini\main_section_icons\8a.png"/> 
                            </div>                          
                        </article>

                        <article id = 'secondary_section'>
                            <div id = 'top_brand'>
                                <h1>I nostri top brand: abbigliamento, scarpe e accessori</h1>                           
                                <section>
                                    <div class = 'container_opzioni'>
                                        <a class = 'opzioni'><span>Adidas</span></a>
                                        <a class = 'opzioni'><span>Billabong</span></a>
                                        <a class = 'opzioni'><span>Colmar Originals</span></a>
                                        <a class = 'opzioni'><span>Dr. Martens</span></a>
                                        <a class = 'opzioni'><span>Gap</span></a>
                                        <a class = 'opzioni'><span>Kappa</span></a>
                                        <a class = 'opzioni'><span>Liu Jo</span></a>
                                        <a class = 'opzioni'><span>New Balance</span></a>
                                        <a class = 'opzioni'><span>Puma</span></a>
                                        <a class = 'opzioni'><span>Scarpe Black Friday</span></a>
                                        <a class = 'opzioni'><span>Tommy Hilfger</span></a>
                                        <a class = 'opzioni'><span>Vans</span></a>
                                    </div>
                            
                                    <div class = 'container_opzioni'>
                                        <a class = 'opzioni'><span>Asics</span></a>
                                        <a class = 'opzioni'><span>Birkenstock</span></a>
                                        <a class = 'opzioni'><span>Converse</span></a>
                                        <a class = 'opzioni'><span>Elisabetta Franchi</span></a>
                                        <a class = 'opzioni'><span>Geox</span></a>
                                        <a class = 'opzioni'><span>Lacoste</span></a>
                                        <a class = 'opzioni'><span>Mango</span></a>
                                        <a class = 'opzioni'><span>Nike</span></a>
                                        <a class = 'opzioni'><span>Quiksilver</span></a>
                                        <a class = 'opzioni'><span>Scarpe Jordan</span></a>
                                        <a class = 'opzioni'><span>Topshop</span></a>
                                        <a class = 'opzioni'><span></span></a>
                                    </div>
                            
                                    <div class = 'container_opzioni'>
                                        <a class = 'opzioni'><span>Benetton</span></a>
                                        <a class = 'opzioni'><span>Calvin Klein</span></a>
                                        <a class = 'opzioni'><span>Desigual</span></a>
                                        <a class = 'opzioni'><span>Esprit</span></a>
                                        <a class = 'opzioni'><span>Gucci</span></a>
                                        <a class = 'opzioni'><span>Lee Jeans</span></a>
                                        <a class = 'opzioni'><span>Micheal Kors</span></a>
                                        <a class = 'opzioni'><span>OVS</span></a>
                                        <a class = 'opzioni'><span>Ray ban</span></a>
                                        <a class = 'opzioni'><span>Stradivarius</span></a>
                                        <a class = 'opzioni'><span>Triumph</span></a>
                                        <a class = 'opzioni'><span></span></a>
                                    </div>
                            
                                    <div class = 'container_opzioni'>
                                        <a class = 'opzioni'><span>Bershka</span></a>
                                        <a class = 'opzioni'><span>Casio</span></a>
                                        <a class = 'opzioni'><span>Diesel</span></a>
                                        <a class = 'opzioni'><span>Even&Odd</span></a>
                                        <a class = 'opzioni'><span>Guess</span></a>
                                        <a class = 'opzioni'><span>Levis</span></a>
                                        <a class = 'opzioni'><span>Napapijiri</span></a>
                                        <a class = 'opzioni'><span>Polo Ralph Lauren</span></a>
                                        <a class = 'opzioni'><span>Replay</span></a>
                                        <a class = 'opzioni'><span>The North Face</span></a>
                                        <a class = 'opzioni'><span>Under Armour</span></a>
                                        <a class = 'opzioni'><span></span></a>
                                    </div>
                                </section>
                            </div>
                            <div id = 'top_categorie'>
                                <h1>Le nostre top categorie più alla moda</h1>
                                <section>
                                    <div class = 'container_opzioni'>
                                        <a class = 'opzioni'><span>Abiti da festa</span></a>
                                        <a class = 'opzioni'><span>Giacche da uomo</span></a>
                                        <a class = 'opzioni'><span>Multipack</span></a>
                                        <a class = 'opzioni'><span>Scarpe Eleganti</span></a>
                                        <a class = 'opzioni'><span>Tacchi alti</span></a>
                                    </div>
                            
                                    <div class = 'container_opzioni'>
                                        <a class = 'opzioni'><span>adidas Ozweego</span></a>
                                        <a class = 'opzioni'><span>Giubbotti</span></a>
                                        <a class = 'opzioni'><span>Nike Air Force 1</span></a>
                                        <a class = 'opzioni'><span>Smoking uomo</span></a>
                                        <a class = 'opzioni'><span>Taglie forti</span></a>
                                    </div>
                            
                                    <div class = 'container_opzioni'>
                                        <a class = 'opzioni'><span>Borse</span></a>
                                        <a class = 'opzioni'><span>Impermeabili</span></a>
                                        <a class = 'opzioni'><span>Promozioni</span></a>
                                        <a class = 'opzioni'><span>Sneakers</span></a>
                                        <a class = 'opzioni'><span></span></a>
                                    </div>
                                    
                                    <div class = 'container_opzioni'>
                                        <a class = 'opzioni'><span>Cashmere</span></a>
                                        <a class = 'opzioni'><span>Jeans</span></a>
                                        <a class = 'opzioni'><span>Puma Cali</span></a>
                                        <a class = 'opzioni'><span>Stivali</span></a>
                                        <a class = 'opzioni'><span></span></a>
                                    </div>
                                </section>
                            </div>
                        </article>

                        <section id = 'newsletter'>
                            <div id = 'left_side'>
                                <h3>Offerte, novità e trend</h3>
                                <h4>Direttamente nella tua casella di posta</h4>
                                <span>Iscrivendoti alle nostre newsletter ricevi notizie su promozioni, nuovi arrivi e ispirazioni di moda.</span>
                            </div>

                            <div id = 'back_right_side'>
                                <div id = 'right_side'>
                                    <div id = 'email'>
                                        <span>Il tuo indirizzo email</span>
                                        <div><input></div>
                                    </div>
                            
                                    <div id = 'gestione_preferenze'>
                                        <section>
                                        <h6>Gestisci le tue preferenze</h6><span>Cosa preferisci?</span>
                                        </section>
                            
                                        <div id = 'scelta_preferenza'>
                                            <div class = 'preferenza'>
                                                <div></div>
                                                <span>Moda donna</span>
                                            </div>
                                            <div class = 'preferenza'>
                                                <div></div>
                                                <span>Moda uomo</span>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div id = 'opzioni_contenuto'>
                                        <span>Opzioni di contenuto</span>
                                        <span class="material-symbols-outlined">expand_more</span>
                                    </div>
                            
                                    <div id = 'iscrivimi'>
                                        <div>                                            
                                            <span class="material-symbols-outlined">mail</span>
                                            <span>Iscrivimi</span>
                                        </div>
                                    </div>  

                                    <div id = 'policy'>Consulta la nostra <em>politica sulla privacy</em> per sapere di più sul trattamento dei tuoi dati.
                                        Puoi <em>disiscriverti</em> quando vuoi, 
                                        senza nessun costo.
                                    </div>
                                                          
                                </div>
                            </div>
                        </section>

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