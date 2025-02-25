<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
        $page = basename($_SERVER['PHP_SELF'], ".php");

        $cssFiles = [
            'index' => '../CSS/index.css',
            'navbar' => '../CSS/navbar.css',
            'navbarautre' => '../CSS/navbarautre.css',
            'panier' => '../CSS/panier.css',
            'signin' => '../CSS/signin.css',
            'signup' => '../CSS/signup.css'
        ];

        if (array_key_exists($page, $cssFiles)) {
            echo '<link rel="stylesheet" href="' . $cssFiles[$page] . '">';
        } else {
            echo '<link rel="stylesheet" href="css/default.css">';
        }
    ?>
    <link rel="stylesheet" href="../CSS/navbar.css">
    <title>Vendigo</title>
</head>

<body>
