<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleBg.css">
    <script src="app.js" defer></script>
    <script src="../style.js"></script>
</head>
<body>
    <header>
        <nav>
            <a href="" class="active">Home</a>
            <a href="">About</a>
            <a href="">Portfolio</a>
            <a href="">Services</a>
            <a href="">Contact</a>
        </nav>
    </header>
    <section>
        <div class="absolute">
            <h1>voici le titre</h1>
        </div>
    </section>
    <div class="carousel">
        <div class="list">
            <div class="item bg-black" style="background-image: url(kymco-supernex-electrical.jpg);">
                <div class="content">
                    <div class="title capitalize text-[#4ED7F1] ">kymco</div>
                    <div class="name text-black capitalize">supernex electrical</div>
                    <div class="des text-[#FFD65A]">Lorem ipsum dolor sit amet consectetur adipisicing elit. In nihil natus voluptas impedit suscipit corporis?</div>
                    <div class="btn">
                        <button onclick="window.location.href='../creation.php';">LogUp</button>
                        <button onclick="window.location.href='../connexion1.php';">LogIn</button>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url(ninja-zx-10rr.jpg);">
                <div class="content">
                    <div class="title capitalize text-[#4ED7F1]">NINJA</div>
                    <div class="name text-black capitalize ">zx 10 rr</div>
                    <div class="des text-[#FFD65A]">Lorem ipsum dolor sit amet consectetur adipisicing elit. In nihil natus voluptas impedit suscipit corporis?</div>
                    <div class="btn">
                        <button onclick="window.location.href='../creation.php';">LogUp</button>
                        <button onclick="window.location.href='../connexion1.php';">LogIn</button>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url(victory\'s-motorcycle-lineup.jpg);">
                <div class="content">
                    <div class="title capitalize text-[#4ED7F1]">victory's</div>
                    <div class="name text-black capitalize">motorcycle lineup </div>
                    <div class="des text-[#FFD65A]">Lorem ipsum dolor sit amet consectetur adipisicing elit. In nihil natus voluptas impedit suscipit corporis?</div>
                    <div class="btn">
                        <button onclick="window.location.href='../creation.php';">LogUp</button>
                        <button onclick="window.location.href='../connexion1.php';">LogIn</button>
                    </div>
                </div>
            </div>

            <div class="item" style="background-image: url(yamaha-MT-07.jpg);">
                <div class="content">
                    <div class="title capitalize text-[#4ED7F1]">yamaha</div>
                    <div class="name text-black capitalize">MT 07</div>
                    <div class="des text-[#FFD65A]">Lorem ipsum dolor sit amet consectetur adipisicing elit. In nihil natus voluptas impedit suscipit corporis?</div>
                    <div class="btn">
                        <button onclick="window.location.href='../creation.php';">LogUp</button>
                        <button onclick="window.location.href='../connexion1.php';">LogIn</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="arrows">
            <button class="prev"><</button>
            <button class="next">></button>
        </div>
        <div class="timeRunning"></div>
    </div>
    
</body>
</html>