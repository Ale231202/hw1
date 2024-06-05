<?php
    require_once('auth_session.php');

    if(checkAuth()) {
        header("Location: home.php");
        exit;
    }

    if(!empty($_POST["nome"]) && !empty($_POST["cognome"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {

        $error = array();
        $conn = mysqli_connect($config['host'], $config['user'], $config['password'], $config['db']) or die(mysqli_error($conn));
        
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { //verifico se il formato della email è valido
            $error[] = "Formato della email non valido";
            echo "formato della mail non valido";
        }

        else {
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $res = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
            if(mysqli_num_rows($res) > 0) {
                $error[] = "email già utilizzata";
                echo "email già utilizzata";
            }
        }

        if(strlen($_POST["password"]) < 8) {
            $error[] = "Numero di caratteri della password insufficiente";
            echo "errore password";
        }

        if(count($error) == 0) {
            $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
            $cognome = mysqli_real_escape_string($conn, $_POST["cognome"]);
            $password = mysqli_real_escape_string($conn, $_POST["password"]);
            $password = password_hash($password, PASSWORD_BCRYPT);
            $preferenza = mysqli_real_escape_string($conn, $_POST["genere"]);

            if(!empty($_POST["nascita"])) {
                $nascita = mysqli_real_escape_string($conn, $_POST["nascita"]);
                if(isset($_POST["newsletter"]) && $_POST["newsletter"] == '1') {
                    $news = mysqli_real_escape_string($conn, $_POST["newsletter"]);
                    $query = "INSERT INTO users (nome, cognome, nascita, email, password, preferenza, newsletter) VALUES ('$nome', '$cognome, '$nascita', '$email', '$password', '$preferenza', '$news')";
                }
                else {
                    $query = "INSERT INTO users (nome, cognome, nascita, email, password, preferenza) VALUES ('$nome', '$cognome, '$nascita', '$email', '$password', '$preferenza')";
                }
            }

            else {
                
                if(isset($_POST["newsletter"]) && $_POST["newsletter"] == '1') {
                    $news = mysqli_real_escape_string($conn, $_POST["newsletter"]);
                    $query = "INSERT INTO users (nome, cognome, email, password, preferenza, newsletter) VALUES ('$nome', '$cognome', '$email', '$password', '$preferenza', '$news')";
                }

                else {
                    $query = "INSERT INTO users (nome, cognome, email, password, preferenza) VALUES ('$nome', '$cognome', '$email', '$password', '$preferenza')";           
                }
            }
               echo "QUERY: "; echo $query;

                if(mysqli_query($conn, $query)) {
                    $_SESSION["name"] = $_POST["nome"];
                    $_SESSION["user_id"] = mysqli_insert_id($conn);
                    mysqli_close($conn);
                    header("Location: home.php");
                    exit;
                }

                else {
                    $error[] = "Errore di connessione al database";
                    echo "errore di connessione";
                }
            
        }

    }

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "signup.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,200,0,0"/>
    </head>
    <body>
        <section id = 'background'></section>

        <section id = 'container_intern_body'>            
            <article id = 'intern_body'>

                <section id = 'accesso'>
                    <a href = "index.php" id = 'logo'><img src = "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Zalando-Logo.svg/2560px-Zalando-Logo.svg.png"></a>
                    <section>
                        <h1>Bello rivederti!</h1>
                        <div><a href = 'login.php'>Accedi</a></div>
                    </section>
                </section>


                <section id = 'registrazione'>
                    <form method = 'post'>
                        <h1>Sono un nuovo cliente</h1>
                        <section><div class = 'campi'><span>Nome *</span></div><input class = 'text_input' type = 'text' name = 'nome'  placeholder = 'Nome' ></section>
                        <section><div class = 'campi'><span>Cognome *</span></div><input class = 'text_input' type = 'text' name = 'cognome' placeholder = 'Cognome' ></section>
                        <section><div class = 'campi'><span>Data di nascita <em>(facoltativo)</em></span></div><input class = 'text_input' type = 'date' name = 'nascita' placeholder = 'gg/mm/aaaa' ></section>
                        <section><div class = 'campi'><span>Indirizzo E-mail *</span></div><input class = 'text_input' type = 'text' name = 'email' placeholder = 'Indirizzo E-mail' ></section>
                        <section><div class = 'campi'><span>Password *</span></div><input class = 'text_input' type = 'password' name = 'password' placeholder = 'Password' ></section>

                        <div id = info><span class="material-symbols-outlined">info</span><span>La tua password deve contenere almeno 8 caratteri</span></div>

                        <section id = 'categoria_interesse'>
                            <h3>Quale categoria ti interessa? <em>(facoltativo)</em></h3>
                            <p>Useremo queste informazioni per darti suggerimenti personalizzati.</p>
                            <div class = 'categoria'><input type = 'radio' name = 'genere' value = 'donna'><span>Moda donna</span></div>
                            <div class = 'categoria'><input type = 'radio' name = 'genere' value = 'uomo'><span>Moda uomo</span></div>
                            <div class = 'categoria'><input type = 'radio' name = 'genere' value = 'none' checked><span>Nessuna preferenza</span></div>
                        </section>

                        <section id = 'newsletter'>
                            <input type = 'checkbox' name = 'newsletter' value = '1'>
                            <div>Ricevi sconti, offerte e novità nella tua casella di posta. Scegli i contenuti che ti interessano o annulla
                            quando vuoi.<em>(facoltativo)**</em></div>
                        </section>
                        <input id = 'submit' type = 'submit' value = 'Registrati'>
                    </form>
                    <section id = 'end_page'>
                        <div id = 'policy'>
                            Registrandoti per un account, accetti i nostri <a>Termini di utilizzo</a>. 
                            Si prega di consultare la nostra <a>Privacy Policy</a>.
                        </div>
                        <section id = 'informazioni'>
                            <div>* Campo obbligatorio</div>
                            <div>**Trovi una panoramica di tutte le e-mail e della loro frequenza nel tuo profilo. 
                                Puoi selezionare quelle che vuoi ricevere o annullare gratuitamente l'iscrizione in 
                                qualsiasi momento tramite il link presente in ogni e-mail.
                            </div>
                        </section>

                    </section>
                        <section id = 'link_utili'>
                            <a>Informativa sulla privacy</a>
                            <a>Condizioni d’uso</a>
                            <a>Informazioni legali</a>
                        </section>    
                        <footer>
                            <a href = "index.php"><img src = "https://play-lh.googleusercontent.com/0qnGjSlPxB1lS5dzihOdjQMJvntj6ESHeO4WYkNcxxAFZXe2utqCVLlB5MU5pQB-CcA"></a>
                        </footer>                
                </section>
                
               

            </article>
        </section>
    </body>
</html>