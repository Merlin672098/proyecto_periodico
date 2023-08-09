<!DOCTYPE html>
<html lang="en">

<head>    
  <link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="<?php echo base_url();?>/js/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="#"></a>
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/The_New_York_Times_Logo.svg/1200px-The_New_York_Times_Logo.svg.png" alt="Logo" style="width:300px;">
  <!-- Links -->
  <div class="container">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Noticias
      </a>
      
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Deportes</a>
        <a class="dropdown-item" href="#">Politica</a>
        <a class="dropdown-item" href="#">Juegos</a>
        <a class="dropdown-item" href="#">Tendencias</a>
        <a class="dropdown-item" href="#">Salud</a>
        <a class="dropdown-item" href="#">Economia</a>
        <a class="dropdown-item" href="#">Mundo</a>
        <a class="dropdown-item" href="#">Tecnologia</a>

      </div>
    </li>
    </div>
    <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
    <button class="btn btn-outline-info" type="submit">Buscar</button>
  </form>
  </ul>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://cnnespanol.cnn.com/wp-content/uploads/2022/11/mundial-qatar-2022-GettyImages-1244662740.jpg?quality=100&strip=info" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://estaticos-noticias.unitel.bo/binrepository/1081x725/57c0/1024d725/none/125450566/BAUI/whatsapp-image-2022-12-05-at-07-18_101-4147936_20221209012233.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://estaticos-noticias.unitel.bo/binrepository/1076x687/0c131/1024d512/none/125450566/DASR/whatsapp-image-2022-12-05-at-07-18_101-4148673_20221209013756.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

<body class="main-content">
    <section class="container" >
        <div class="los40-module ">
            <div class="los40-home items" id='drag' >
                <article class="los40-news modal-foto item" itemref="organizacion">
                    <div class="image">
                        <a href='/los40/2022/12/07/videos/1670416768_831780.html'>
                            <img loading="lazy" class=" item-multimedia" src="//los40es00.epimg.net/los40/imagenes/2022/12/07/videos/1670416768_831780_1670417102_portada_normal.jpg"  alt="Entrevista a Gayle: No me pareció genuino sacar un disco sólo por el éxito de Abcdfu"

                            title="Gayle">
                        </a>
                        <a href='/los40/2022/12/07/videos/1670416768_831780.html'  rel="noopener noreferrer" target="_blank">
                            <span class="icon-play"></span>
                        </a>
                    </div>
            <div class="box-text">
            <div class="text-action">
            <span class="text-help" >ENTREVISTA</span>
                </div>
                <h2 class="text" >
                <a href="/los40/2022/12/07/videos/1670416768_831780.html"  title="Ver noticia"  >Entrevista a Gayle: “No me pareció genuino sacar un disco sólo por el éxito de ‘Abcdfu’”</a>
                </h2>
                <h3 class="entradilla" >El día que cumplió uno de sus sueños, descubrimos todo sobre esta solista tejana</h3>
                <!--Autores-->
                <h4 class="sponsor"><a href="//los40.com/autor/cristina_regatero_vidal/a/" target='_blank'  rel="noopener noreferrer" title="Cris Regatero">Cris Regatero</a>
                </h4>
                </div>
                    
                </article>
            </div>
        </div>
    </section>

        <section class="container" id="blogs">
            <div class="blogs-content">
                <div class="main-title">
                    <h2><span class="bg-text">Lo más reciente</span></h2>
                </div>
                <div class="blogs">
                    <div class="blog">
                        <img src="https://img.4plebs.org/boards/pol/image/1390/70/1390707425726.png" alt="">
                        <div class="blog-text">
                            <h4>
                            <a href="<?php echo site_url("Ctrl_noticia_x/index");?>">Economia Internacional</a>
                            </h4>
                            <p>
                                El oro de World of Warcraft vale mas que la moneda
                                de Venezuela segun estudios recientes.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="https://s.yimg.com/ny/api/res/1.2/j_ohUD7GwZNBYmo2ZDt_kw--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTMyMA--/https://s.yimg.com/uu/api/res/1.2/Y4JUpR.vNebzc82tl_DBIg--~B/aD0zMDA7dz02MDA7YXBwaWQ9eXRhY2h5b24-/https://media.zenfs.com/es/tarreo_527/14671fe5d9af8d782c3a47416c8c5bac" alt="">
                        <div class="blog-text">
                            <h4>
                                <a href="">Como afectan los Video Juegos a los niños</a>
                            </h4>
                            <p>
                                Niño gasta 10000$ de la tarjeta de sus padres
                                en el juego Genshin Impact
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="https://pbs.twimg.com/media/EiKzMh6XsAAvwSj.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                            <a href="">Tendencias</a>
                            </h4>
                            <p>
                                Como espantar a una mujer en 5 pasos segun jugador del lol.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="https://imageio.forbes.com/specials-images/imageserve/62fe65bf78b475953a5f25e6/0x0.jpg?format=jpg&width=1200" alt="">
                        <div class="blog-text">
                            <h4>
                            <a href="">Dragon ball</a>
                            </h4>
                            <p>
                                Goku en Mexico causa terror
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="https://uploads.mwp.mprod.getusinfo.com/uploads/sites/16/2021/04/COVID-19-Information-Head-Image.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                            <a href="<?php echo site_url("Ctrl_noticia_x/index");?>">Salud</a>
                            </h4>
                            <p>
                            Bolivia ingresa a sexta ola de la pandemia y casos por covid suben un 203 % 
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="https://img2.rtve.es/i/?w=1600&i=1666110816222.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                            <a href="">Deportes</a>
                            </h4>
                            <p>
                                Alemania vs Japon esta semana en Quatar 2022
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        
        <!--<section class="container" id="blogs">
            <div class="blogs-content">
                <div class="main-title">
                    <h2><span class="bg-text">Lo más reciente</span></h2>
                </div>
                <div class="blogs">
                    <div class="blog">
                        <img src="https://img.4plebs.org/boards/pol/image/1390/70/1390707425726.png" alt="">
                        <div class="blog-text">
                            <h4>
                            <a href="">Economia Internacional</a>
                            </h4>
                            <p>
                                El oro de World of Warcraft vale mas que la moneda
                                de Venezuela segun estudios recientes.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="https://s.yimg.com/ny/api/res/1.2/j_ohUD7GwZNBYmo2ZDt_kw--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTMyMA--/https://s.yimg.com/uu/api/res/1.2/Y4JUpR.vNebzc82tl_DBIg--~B/aD0zMDA7dz02MDA7YXBwaWQ9eXRhY2h5b24-/https://media.zenfs.com/es/tarreo_527/14671fe5d9af8d782c3a47416c8c5bac" alt="">
                        <div class="blog-text">
                            <h4>
                                <a href="">Como afectan los Video Juegos a los niños</a>
                            </h4>
                            <p>
                                Niño gasta 10000$ de la tarjeta de sus padres
                                en el juego Genshin Impact
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="https://pbs.twimg.com/media/EiKzMh6XsAAvwSj.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                            <a href="">Tendencias</a>
                            </h4>
                            <p>
                                Como espantar a una mujer en 5 pasos segun jugador del lol.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="https://imageio.forbes.com/specials-images/imageserve/62fe65bf78b475953a5f25e6/0x0.jpg?format=jpg&width=1200" alt="">
                        <div class="blog-text">
                            <h4>
                            <a href="">Dragon ball</a>
                            </h4>
                            <p>
                                Goku en Mexico causa terror
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="https://scontent.flpb2-1.fna.fbcdn.net/v/t1.6435-9/131449477_2165016943630872_302979259080776654_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=jDbb4hXU6DsAX-SyLIC&_nc_ht=scontent.flpb2-1.fna&oh=00_AfC-Qed_RyxTB2KvUhlCMfnYC8JTC3sfD8kFzYIzJlg70w&oe=63ADD0C3" alt="">
                        <div class="blog-text">
                            <h4>
                            <a href="">Salud</a>
                            </h4>
                            <p>
                                Se presentan nuevos casos de esquizofrenia
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="https://ichef.bbci.co.uk/news/640/amz/worldservice/live/assets/images/2015/11/26/151126032338_man624b.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                            <a href="">Deportes</a>
                            </h4>
                            <p>
                                Alemania vs Japon esta semana en Quatar 2022
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 -->

        
        
    </main>
    
</body>
           
<script>
(function () {
    [...document.querySelectorAll(".control")].forEach(button => {
        button.addEventListener("click", function() {
            document.querySelector(".active-btn").classList.remove("active-btn");
            this.classList.add("active-btn");
            document.querySelector(".active").classList.remove("active");
            document.getElementById(button.dataset.id).classList.add("active");
        })
    });
    document.querySelector(".theme-btn").addEventListener("click", () => {
        document.body.classList.toggle("light-mode");
    })
})();


</script>


<style>


* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
}
/*Tiene que ver con los bordes de la pagina y el body*/
:root {
  --color-primary: #191d2b;
  --color-secondary: #27AE60;
  --color-white: #FFFFFF;
  --color-black: #000;
  --color-grey0: #f8f8f8;
  --color-grey-1: #dbe1e8;
  --color-grey-2: #b2becd;
  --color-grey-3: #6c7983;
  --color-grey-4: #454e56;
  --color-grey-5: #2a2e35;
  --color-grey-6: #12181b;
  --br-sm-2: 14px;
  --box-shadow-1: 0 3px 15px rgba(0,0,0,.3);
}

.light-mode {
  --color-primary: #FFFFFF;
  --color-secondary: #F56692;
  --color-white: #454e56;
  --color-black: #000;
  --color-grey0: #f8f8f8;
  --color-grey-1: #6c7983;
  --color-grey-2: #6c7983;
  --color-grey-3: #6c7983;
  --color-grey-4: #454e56;
  --color-grey-5: #f8f8f8;
  --color-grey-6: #12181b;
}

body {
  background-color: var(--color-white);
  font-family: "Poppins", sans-serif;
  font-size: 1.1rem;
  color: var(--color-white);
  transition: all 0.4s ease-in-out;
}

/*BLOGS*/
.blogs {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 2rem;
  margin-top: 3rem;
}
.blogs .blog {
  position: relative;
  background-color: var(--color-white);
  border-radius: 5px;
  box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.1);
  transition: all 0.4s ease-in-out;
}
.blogs .blog:hover {
  box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.3);
  transform: translateY(-5px);
  transition: all 0.4s ease-in-out;
}
.blogs .blog:hover img {
  filter: grayscale(0);
  transform: scale(1.1);
  box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.8);
}
.blogs .blog img {
  width: 100%;
  height: 300px;
  object-fit: cover;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  filter: grayscale(100%);
  transition: all 0.4s ease-in-out;
}
.blogs .blog .blog-text {
  margin-top: -7px;
  padding: 1.1rem;
  border-top: 8px solid var(--color-secondary);
}
.blogs .blog .blog-text h4 {
  font-size: 1.5rem;
  margin-bottom: 0.7rem;
  transition: all 0.4s ease-in-out;
  cursor: pointer;
}
.blogs .blog .blog-text h4:hover {
  color: var(--color-secondary);
}
.blogs .blog .blog-text p {
  color: var(--color-grey-2);
  line-height: 2rem;
  padding-bottom: 1rem;
}
/*Hasta aca el css de los bl0gs*/ 
/*Carousel */

.carousel-item{
    height: 100vh;
    min-height: 300px;
    background: no-repeat scroll center scroll;
    -webkit-background-size: cover;
    background-size:cover;

}
/*navbar */

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

</style>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
