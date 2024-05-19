<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/login.css" >
    <link rel="stylesheet" href="assets/styles/main.css" >
    <title>Login</title>
</head>
<body>
<script>
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<body class="bg">

    <section class="login-container">
        <div class="cont1">
        <div>
           <div><img src="assets/images/logo.png" alt="lvt" class="cont1-img"></div>
           <h1>Ielogoties sistēmā</h1>
           <form method="post">
            <div><input type="text" placeholder="Lietotajvards" name='lietotajs'></div>
            <div><input type="text" placeholder="Parole" name='parole'></div>
            <button type="submit" name="Autorizācija">IELOGOTIES</button>
           </form>
        </div>
        </div>
        <div class="cont2">
            <div>
                <h1>Esi sveicināts!</h1>
                <p>Darbinieku sistēmas administrēšanas vietne paredzēta tikai uzņēmuma vadībai!</p>
                <a href="index.php">DOTIES UZ GALVENO LAPU</a>
            </div>
        </div>
    </section>
</body>

</html>