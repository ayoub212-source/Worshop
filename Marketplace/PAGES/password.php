<?php include('header.php')?>
<link rel="stylesheet" href="../CSS/password.css">

<div class="form-container">
    <img src="../Logo/v.svg" class="logo">

    <button class="button">
        <a href="../PAGES/navbar.php" class="button"></a>
        <div class="button-box">
            <span class="button-elem">
                <svg viewBox="0 0 46 40" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z">
                    </path>
                </svg>
            </span>
            <span class="button-elem">
                <svg viewBox="0 0 46 40">
                    <path
                        d="M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z">
                    </path>
                </svg>
            </span>
        </div>
    </button>
    <!-- From Uiverse.io by Praashoo7 -->
    <form class="form">
        <p id="heading">Mot de passe oublié?</p>
        <div class="field">
            <input autocomplete="off" placeholder="Nouveau mot de passe" class="input-field" type="text">
        </div>
        <div class="field">
            <input placeholder="Confirmez votre mot de passe" class="input-field" type="password">
        </div>
        <div class="btn">
            <a href="../PAGES/login.php">
                <button class="button1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Réenitialiser votre mot de
                    passe&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
            </a>
        </div>
    </form>