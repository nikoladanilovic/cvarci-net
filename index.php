<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Čvarci</title>
</head>

<body>

    <header class="header flex">
        <button aria-label="Izbornik" id="menu-icon"><img src="images/menu button.png" alt="menu icon" ></button>
        
        <picture id="naslov_stranice">
            <img src="images/logo.png" alt="Logo">
        </picture>

       <!--košarica -->
       <nav id="head-nav">
           <ul class="navigation flex" aria-labelledby="head-nav">
               <li class="nav-element">
                   <a href="#prijava" aria-labelledby="prijava">
                    <img class="nav-element-icon" src="images/person.png" alt="Prijava" >
                    <span id="prijava">PRIJAVI SE</span>
                    </a>
               </li>
    
               <li class="nav-element cart" id="cart-info">
                   <a href="#kosara" aria-label="Košara za kupnju">
                   <img id="kosara-ikonica" class="nav-element-icon" src="images/cart.png" alt="Kupnja" >
                   <span id="količina">0</span>
                    </a>
               </li>
           </ul>
       </nav>

    </header>
    

    <!--Najbolji čvarci na kućnom pragu -->
    <section id="glavni_dio">
        <div id="box-naslov-gumbi">
            <div id="naslov">
                <h1>
                    Najbolji čvarci na kućnom pragu
                </h1>
            </div>
        
            <div id="podnaslovni_gumbi">
                <button type="button" aria-label="Naruči dostavu">
                    <p><strong>DOSTAVA</strong><br>
                        Naruči
                    </p>
                    
                </button>
                <button type="button" aria-label="Preuzmi na čvarkomatu">
                <p><strong>PREUZMI</strong><br>
                    Na čvarkomatu
                </p>
                </button>
            </div>
        </div>
    
        <div>
            <img id="slika-cvaraka" src="images/slikacvaraka.jpg" alt="Slika čvaraka" loading="lazy">
        </div>
    </section>
    

    <!--Minicart dio -->
    <section class="minicart-position">
        <div class="minicart" id="minicart" aria-label="Košarica za kupnju">
            <h2 id="minicart-naslov">Moja košarica</h2>
            <div class="article-place"></div>
      <!--       Svaki article sa klasom minicart-sadrzaj predstavlja jedan kupljeni artikl unutar minicarta
            <article class="minicart-sadrzaj">
                <img class="slika-cvarci" src="images\CvarciSlavonski.svg" alt="Slika kupljenog artikla" aria-label="Artikl za kupiti" loading="lazy">
                <div class="kupljeni-cvarci-info">
                    <h3 class="naziv-kupljenog-artikla">Ime cvaraka</h3>
                    <p class="paragraf-cijena">Cijena: <span class="cijena-kupljenog-artikla">50,00 kn</span></p>
                    <p class="paragraf-kolicina">Količina: <span class="kolicina-kupljenog-artikla">1</span></p>
                </div>
                <img class="brisanje-artikla"  src="images/button-delete.png" alt="Izbrisi artikl">
            </article>
-->
            
            <div id="minicart-button-div">
                <button id="minicart-button" type="submit">Kupi sada</button>
            </div>
        </div>
        <img id="ukras-za-minicart-poligon" src="images/Polygon_1.png" alt="poligon">
    </section>

    <div>
        <ul id="informacije" aria-label="Bitne informacije">
            <li class="info-item">
                <img src="images/sat.png" alt="Sličica sata s priborom za jelo koji predstavlja kazaljke" loading="lazy">
                <p>dostavljamo čvarke za manje od 30 minuta</p>
            </li>
            <li class="info-item">
                <img src="images/dostava.png" alt="Sličica dostavljača na motoru" loading="lazy">
                <p>naši šoferi voze tomose</p>
            </li>
            <li class="info-item">
                <img src="images/srce.png" alt="Sličica srca u kojem je Eiffelov toranj" loading="lazy">
                <p>nabavljamo najbolje prasce iz Francuske</p>
            </li>
        </ul>
    </div>
    
    <!--Čvarci na prodaju -->
    <section id="cvarciNaProdaju">
        <h2 id="titleProdaja">Novo u ponudi ! naručite čvarke online</h2>

        <section id="cvarci_prodaja" class="shop-items">
          
                    <div id="CvarciDomaci" class="form-inline shop-item">
                        <img src="images\Rectangle 10.svg" class="shop-item-slika" alt="domaći čvarci" aria-label="Domaći čvarci" loading="lazy">
                        <h3 class="shop-item-naziv thick">Čvarci domaći</h3>
                        <p> <span class="shop-item-cijena">50,00 kn</span> / kg</p>
                        
                        <div class="form-group">
                            <label for="kolicinaDomacih">Količina:</label>
                            <input type="text" class="form-control shop-item-quantity" value='1' id="kolicinaDomacih" onkeypress="return isNumber(event)">
                        </div>
                        <button type="submit" class="btn btn-default shop-item-button" id="dodajDomaci" aria-label="Stavi domaći čvarak u košaricu">Stavi u košaricu</button>
                    </div>
               

               
                    <div id="CvarciSlavonski" class="form-inline shop-item">
                        <img src="images\CvarciSlavonski.svg"  class="shop-item-slika" alt="slavonski čvarci" aria-label="Slavonski čvarci" loading="lazy">
                        <h3 class="shop-item-naziv thick">Čvarci slavonski</h3>
                        <p> <span class="shop-item-cijena">80,00 kn</span> / kg</p>
                        
                        <div class="form-group">
                            <label for="kolicinaSlavonskih">Količina:</label>
                            <input type="text" class="form-control shop-item-quantity" value='1' id="kolicinaSlavonskih" onkeypress="return isNumber(event)">
                        </div>
                        <button type="submit" class="btn btn-default shop-item-button" id="dodajSlavonski" aria-label="Stavi slavonski čvarak u košaricu">Stavi u košaricu</button>
                    </div>
             

               
                    <div id="CvarciPileci" class="form-inline shop-item">
                        <img src="images\CvarciPileci.svg" class="shop-item-slika" alt="pileći čvarci" aria-label="Pileći čvarci" loading="lazy">
                        <h3 class="shop-item-naziv thick">Pileći čvarci</h3>
                        <p> <span class="shop-item-cijena">60,00 kn</span> / kg</p>
                        
                        <div class="form-group">
                            <label for="kolicinaPilecih">Količina:</label>
                            <input type="text" class="form-control shop-item-quantity" value='1' id="kolicinaPilecih" onkeypress="return isNumber(event)">
                        </div>
                        <button type="submit" class="btn btn-default shop-item-button" id="dodajPileci" aria-label="Stavi pileći čvarak u košaricu">Stavi u košaricu</button>
                    </div>
               
                
              
                    <div id="CvarciOdDivljaci" class="form-inline shop-item">
                        <img src="images\CvarciOdDivljaci.svg" class="shop-item-slika" alt="Čvarci od divljači" aria-label="Čvarci Od Divljači" loading="lazy">
                        <h3 class="shop-item-naziv thick">Čvarci od divljači</h3>
                        <p> <span class="shop-item-cijena">100,00 kn</span> / kg</p>
                        
                        <div class="form-group">
                            <label for="kolicinaDivljih">Količina:</label>
                            <input type="text" class="form-control shop-item-quantity" value='1' id="kolicinaDivljih" onkeypress="return isNumber(event)">
                        </div>
                        <button type="submit" class="btn btn-default shop-item-button" id="dodajDivlji" aria-label="Stavi čvarke od divljači u košaricu">Stavi u košaricu</button>
                    </div>
             
        </section>
    </section>


    <!--Naše čvarke možete pronaći -->
    <section id="restorani">
    
        <div id="prvi_podnaslov">
            <h2>Naše čvarke možete pronaći</h2>
            <button type ="button" aria-label="Prikaži sve restorane ">
                <p><strong>prikaži sve</strong></p>
            </button>
        </div>
    
        <section id="restorani_section">
            
            <img class="side-arrow left" src="images/Buttonleft.png" alt="strijelica lijevo" aria-label="Listaj lijevo" loading="lazy">
            
        <ul id="lista_restorana" aria-labelledby="restorani_section">
            <li>
                <span>
                    <img src="images/burger.png" alt="Burger" aria-label="Burger restoran" loading="lazy">
                    <img src="images/burger_logo.jpg" alt="Logo burger restorana" loading="lazy">
                </span>
            </li>
    
            <li>
                <span>
                    <img src="images/nekakva_riza.png" alt="Riža" aria-label="Talijanski restoran" loading="lazy">
                    <img src="images/talijanski_logo.png" alt="Logo talijanskog restorana" loading="lazy">
                </span>
            </li>
    
            <li>
                <span>
                    <img src="images/salata.png" alt ="Salata" aria-label="Vijetnamski restoran" loading="lazy">
                    <img src="images/vijetnamski_logo.png" alt="Logo vijetnamskog restorana" loading="lazy">
                </span>
            </li>
    
            <li>
                <span>
                    <img src="images/neidentificirana_hrana.png" alt ="Vegetarijanska hrana" aria-label="Vegetarijanski restoran" loading="lazy">
                    <img src="images/vegan_logo.png" alt="Logo vegetarijanskog restorana" loading="lazy">
                </span>
            </li>
    
        </ul>
    
        
        <img class="side-arrow right" src="images/Buttonright.png" alt="Strijelica desno" aria-label="Listaj desno" loading="lazy">
        
        
     </section>
    </section>

    <!--#branding partner -->
    <section id="brand-dio" role="region" aria-label="Kontaktirajte nas">
        <div id="naslov-brand-dio">
            <h2>
                Želite biti naš brand partner ?
            </h2>
            <p>
                Pošaljite nam Vaš broj i kontaktirat ćemo Vas u najkraćem moguću roku
            </p>
        </div>

        <div id="input-area">
        <input role="textbox" aria-label="Email input" id="email_input" type="text"
            placeholder="     Pošaljite Vašu email adresu" />

        <button id="btn_send_email" role="button" aria-controls="email_input btn_send_email"
            type="button"><span>pošalji</span></button>
        </div>
    </section>

    <!--Map -->
    <section id="map-section">
        <div id="map-section-header">
            <h2>Gdje se nalaze naši čvarkomati ?</h2>
        </div>
        <div>
            <img src="images/map.png" alt="Karta cvarkomata" aria-label="Karta cvarkomata" loading="lazy">
        </div>
    </section>

    

    <!--block-features -->
    <section id="znacajni-brojevi" role="figure" aria-label="Naši uspjesi">
        <div class="znacajni-brojevi-dio">
            <h3 aria-labelledby="number_of_klaonica">klaonica</h3>
            <div class="component">
               
                <img class="ellipse1" src="images/Ellipse 10.svg" loading="lazy">
                <img class="ellipse2" src="images/Ellipse 11.svg" loading="lazy">

                
                <p id="number_of_klaonica">1</p>
            </div>
        </div>

        <div class="znacajni-brojevi-dio">
            <h3 aria-labelledby="number_of_čvaraka">vrste čvaraka</h3>
            <div class="component">
               
                <img class="ellipse1" src="images/Ellipse 10.svg" loading="lazy">
                <img class="ellipse2" src="images/Ellipse 11.svg" loading="lazy">

                
                <p id="number_of_čvaraka">6</p>
            </div>
        </div>

        <div class="znacajni-brojevi-dio">
            <h3 aria-labelledby="number_of_restorana">restorana</h3>
            <div class="component">
               
                <img class="ellipse1" src="images/Ellipse 10.svg" loading="lazy">
                <img class="ellipse2" src="images/Ellipse 11.svg" loading="lazy">

                
                <p id="number_of_restorana">11</p>

            </div>
        </div>

        <div class="znacajni-brojevi-dio">
            <h3 aria-labelledby="best_price">najbolja cijena</h3>
            <div class="component">
               
                <img class="ellipse1" src="images/Ellipse 10.svg" loading="lazy">
                <img class="ellipse2" src="images/Ellipse 11.svg" loading="lazy">

                
                <p id="best_price">1</p>
            </div>
        </div>

    </section>

    <!--Block-instagram-->
    <section id="insta-section" role="figure">
        <div id="insta-section-naslov">
            <h2>#čvarcinet <span>na instagramu</span></h2>
            
        </div>
        

        <ul id="insta-slike">
            <li>
                <img role="img" aria-label="Vanjska kuhinja" src="images/Rectangle 10.png" alt="Rectangle10" loading="lazy">
            </li>

            <li>
                <img role="img" aria-label="Dvoje ljudi kuha" src="images/Rectangle 11.png" alt="Rectangle11" loading="lazy">
            </li>

            <li>
                <img role="img" aria-label="Kuhar" src="images/Rectangle 12.png" alt="Rectangle12" loading="lazy">
            </li>

            <li>
                <img role="img" aria-label="Čovjek popravlja skuter" src="images/Rectangle 13.png" alt="Rectangle13" loading="lazy">
            </li>
        </ul>
    </section>

    <footer id="footer-of-page">
        <div id="gornji-footer">
            <div id="footer-logo">
                <img id="logo-footer" src="images/logo.png" alt="logo" loading="lazy">
                <img src="images/line.png" loading="lazy">
            </div>
    
            <!--Links-->
            <nav id="footer-navigation" role="contentinfo">
                <a class="footer-nav-element" role="link" href="#Onama">O nama</a>
                <a class="footer-nav-element" role="link" href="#Cijenik">Cijenik</a>
                <a class="footer-nav-element" role="link" href="#Kontakt">Kontakt</a>
            </nav>
        </div>
        
        <div id="donji-footer">
            <!--Picture links to social pages-->
            <div >
                <ul id="social-media">
                    <li>
                        <a role="link" href="#instagram">
                            <img aria-label="Posjetite našu instagram stranicu" src="ic/social/Union.png" loading="lazy"
                                alt="instagram_icon">
                        </a>
                    </li>

                    <li>
                        <a role="link" href="#twitter">
                            <img aria-label="Posjetite našu twitter stranicu" src="ic/social/twitter.png" loading="lazy"
                                alt="twitter_icon">
                        </a>
                    </li>

                    <li>
                        <a role="link" href="#facebook">
                            <img aria-label="Posjetite našu facebook stranicu" src="ic/social/Group.png" loading="lazy"
                                alt="facebook_icon">
                        </a>
                    </li>
                </ul>
            </div>


            <!--Picture links to social pages-->
            <div>
                <ul id="dodatno-footer">
                    <li aria-labelledby="polica privatnosti" aria-describedby="footer_p1">
                        <p id="footer_p1">Polica privatnosti</p>
                    </li>

                    <li aria-labelledby="uvjeti korištenja" aria-describedby="footer_p2">
                        <p id="footer_p2">Uvjeti korištenja</p>
                    </li>

                    <li aria-labelledby="Copyright" aria-describedby="footer_p3">
                        <p id="footer_p3">© 2021 čvarci.net</p>
                    </li>
                </ul>
            </div>
        </div>

    </footer>
    
</body>
<script src="src/app3.js"></script> 
</html>