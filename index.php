<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karo Entreprise</title>
    <link rel="stylesheet" href="style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>
    <div class="add">
        <span><ion-icon name="call-outline"></ion-icon>  +235 66 40 29 50</span>
        <ul>
             <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
             <li><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
             <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
        </ul>
    </div>
    

    <div class="logo">
        <img src="images/karo.png" alt="">
    </div>
        <nav>
            <div class="toggle">
                <a href="#"><ion-icon name="menu-outline"></ion-icon></a>
            </div>
            
            <ul class="menu">
                <li><a href="#">Acceuil</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="#">Mission</a></li>
                <li><a href="#">Produits</a></li>
                <li><a href="#">Achat</a></li>
                <li><a href="#">Localisation</a></li>
                <li><a href="#">Activités</a></li>
                <li><a href="#">Notre impact</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(function(){
            $(".toggle").on("click", function(){
                if($(".menu").hasClass("active")){
                    $(".menu").removeClass("active");
                    $(this).find("a").html("<ion-icon name='menu-outline'></ion-icon>");
                }else{
                    $(".menu").addClass("active");
                    $(this).find("a").html("<ion-icon name='close-outline'></ion-icon>");
                }
            })
        })
    </script>
    </div>
    <div class="baner">
        <img src="images/head.png" alt="">
    </div>
</body>
</html>