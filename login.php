<?php
    include 'auth_session.php';

    if(checkAuth()) { //verifico se è già presente una sessione per l'utente. Se si lo reindirizzo direttamente nella pagina home
        header("Location: home.php");
        exit;
    }

    if (!empty($_POST["email"]) && !empty($_POST["password"]) ) {

        $conn = mysqli_connect($config['host'], $config['user'], $config['password'], $config['db']) or die(mysqli_error($conn));

        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $query = "SELECT * FROM users WHERE email = '$email'";

        $res = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if (mysqli_num_rows($res) > 0) {
            $entry = mysqli_fetch_assoc($res);
            if (password_verify($_POST['password'], $entry['password'])) {

                // Imposto una sessione dell'utente
                $_SESSION["name_user"] = $entry['nome'];
                $_SESSION["id_user"] = $entry['id'];
                header("Location: home.php");
                mysqli_free_result($res);
                mysqli_close($conn);
                exit;
            }
        }
        $error = "Nome e/o password errati"; //se già da prima ho verificato che non è presente un utente con quel nome
        echo $error;
        mysqli_close($conn);
    }

    else if(isset($_POST["email"]) || isset($_POST["password"])) { //se l'utente non ha completato uno dei due campi
        $error = "Inserire nome e password";
        echo $error;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "login.css">
    </head>
    <body>
        <section id = 'background'></section>
        <section id = 'container_intern_body'>
            <article id = 'intern_body'>
                <section id = 'accesso'>
                    <a href = "index.php" id = 'logo'><img src = "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Zalando-Logo.svg/2560px-Zalando-Logo.svg.png"></a>
                    <h1>Bello rivederti!</h1>
                    <form method = 'post'>
                        <section><div class = 'campi'><span>Indirizzo E-mail *</span></div><input class = 'text_input' type = 'text' name = 'email'  placeholder = 'Indirizzo E-mail' ></section>
                        <section><div class = 'campi'><span>Password *</span></div><input class = 'text_input' type = 'password' name = 'password' placeholder = 'Password' ></section>
                        <input id = 'submit' type = 'submit' value = 'Accedi'>
                        <div id = 'pass_dimenticata'><span>Hai dimenticato la password?</span></div>
                    </form>
                </section>
                <section id = 'registrazione'>
                    <section>
                        <h1>Sono un nuovo cliente</h1>
                        <div><a id = 'reg' href = 'signup.php'>Registrati</a></div>
                    </section>
                    <div id = 'link_utili'>
                        <a>Informativa sulla privacy</a>
                        <a>Condizioni d’uso</a>
                        <a>Informazioni legali</a>
                    </div>    
                    <footer>
                        <a href = "index.php"><img src = "https://play-lh.googleusercontent.com/0qnGjSlPxB1lS5dzihOdjQMJvntj6ESHeO4WYkNcxxAFZXe2utqCVLlB5MU5pQB-CcA"></a>
                    </footer>   
                </section>

            </article>
        </section>
    </body>
</html>