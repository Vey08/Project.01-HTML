<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <!---Font--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Icon-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Tugas Pemrograman Web</title>
</head>
<body>
    <header class="header">
        <h2 class="MyProfile">Personal Page</h2>
        <nav class="navigation">
            <ul>    
                <a href="#home">Home</a>
                <a href="#gallery">Gallery</a>
                <a href="#blog">Blog</a>
                <a href="#contact">Contact</a>
                <img src="moon.png" id="mode">
            </ul>
        </nav>
    </header>
    <main>
        <section id="home" class="homepage">
            <div class="homepage-content">
                <h2>Hello There!</h2>
                <h1>I'm Nathaniel Harvey Sarjono</h1>
                <p>Also known as Vey - Undergraduate Student at Sam Ratulangi University, Manado</p>
                
                <div class="profile-images">
                    <img src="profile.png" class="profile">
                    <img src="graph.png" class="shape">
                </div>
            </div>
        </section>

        <section id="gallery" class="gallery">
            <div class="gallery-content">
                <h1> Gallery </h1>
                <div class="images">
                        <img src="gallery1.JPG" class="g1" width="300px" height="400px">
                        <img src="gallery2.JPG" class="g2" width="300px" height="400px">
                        <img src="gallery3.jpg" class="g3" width="300px" height="400px">
                    </div>
                </div>
            </div>
        </section>

        <section id="blog" class="blog">
            <div class="blog-content">
                <h1> Blog </h1>
                <div class="div-outside">
                        <div class="div-inside">
                            <article>
                                <h3><?php echo $judul1; ?></h3>
                                <p><?php echo $isi1; ?><a href="<?php echo $link1; ?>">Baca Selengkapnya</a></p>
                            </article>
                        </div>
                        <div class="div-inside"> 
                            <article>              
                                <h3><?php echo $judul2; ?></h3>
                                <p><?php echo $isi2; ?><a href="<?php echo $link2; ?>"> Baca Selengkapnya</a>
                                </p>
                            </article> 
                        </div>
                        <div class="div-inside"> 
                            <article>
                                <h3><?php echo $judul3; ?></h3>
                                <p><?php echo $isi3; ?><a href="<?php echo $link3; ?>"> Baca Selengkapnya</a>
                                </p>
                            </article>
                        </div> 
                            
                </div>
            </div>
        </section>
    </main>

    <footer>
        <section id="contact" class="contact">
            <div class="contact-content">
                <h1> Contact Me </h1>
                <a class="instagram" href="https://www.instagram.com/avey_8/"><i class='bx bxl-instagram-alt' ></i></a>
                <a class="facebook" href="https://www.facebook.com/nathaniel.sarjono.9"><i class='bx bxl-facebook-square' ></i></a>
                <a class="linkedin" href="https://www.linkedin.com/in/nathaniel-harvey-sarjono-911763292/"><i class='bx bxl-linkedin-square'></i></a>
                <a class="discord" href="https://discordapp.com/users/463196820030357504"><i class='bx bxl-discord-alt' ></i></i></a>
            </div>
        </section>
    </footer>

<script src="script.js"></script>

</body>
</html>