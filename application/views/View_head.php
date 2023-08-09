<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

<head>    
  <link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="<?php echo base_url();?>/js/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="main-content">
<!-- Navegacion-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">
    <img src="https://scontent.flpb2-2.fna.fbcdn.net/v/t39.30808-6/272996312_499037474988407_2182029457382273992_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=Ez2dulCFlzsAX8s7eCR&_nc_ht=scontent.flpb2-2.fna&oh=00_AfCdFiMhMBQ0jawFZ9aMrFaR4riZXuvgq6eM1Qf4E5vqlA&oe=638D562D" alt="Logo" style="width:40px;">
  </a>
            <div class="container px-5">

                <a class="navbar-brand" href="<?php echo site_url("Ctrl_bienvenida/index");?>">Peligrosamente Humanos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <a class="nav-link" href="<?php echo site_url("Ctrl_not_user/index");?>">Noticias</a>
                
            </ul>
        </div>
    </div>

</nav>


<div class="contairner">
  <h1>Bienvenido Columnista</h1>
</div>





           
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

function login(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("login/index");?>",
    data:{
      user :$("#txb_user").val(),
      password :$("#txb_pwd").val()  
    },
    success: function(){
      
    },
});
}
</script>


<style>

.main-title {
  text-align: center;
}
.main-title h2 {
  position: relative;
  text-transform: uppercase;
  font-size: 4rem;
  font-weight: 700;
}
.main-title h2 span {
  color: var(--color-secondary);
}
.main-title h2 .bg-text {
  position: absolute;
  top: 50%;
  left: 50%;
  color: var(--color-grey-5);
  transition: all 0.4s ease-in-out;
  z-index: -1;
  transform: translate(-50%, -50%);
  font-weight: 800;
  font-size: 6.3rem;
}
.theme-btn {
  top: 5%;
  right: 3%;
  width: 70px;
  height: 70px;
  border-radius: 50%;
  background-color: var(--color-grey-4);
  cursor: pointer;
  position: fixed;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0 3px 15px rgba(0, 0, 0, 0.3);
  transition: all 0.1s ease-in-out;
}
.theme-btn:active {
  transform: translateY(-3px);
}
.theme-btn i {
  font-size: 1.4rem;
  color: var(--color-grey-2);
  pointer-events: none;
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



.blogs {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 2rem;
  margin-top: 3rem;
}
.blogs .blog {
  position: relative;
  background-color: var(--color-grey-5);
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
.blogs {
    grid-template-columns: repeat(1, 1fr);
    padding-bottom: 6rem;
  }

  @media screen and (max-width: 1250px) {
  .blogs {
    grid-template-columns: repeat(2, 1fr);
    margin-top: 6rem;
  }

  .portfolios {
    grid-template-columns: repeat(2, 1fr);
  }

  .header-content .right-header {
    padding-right: 9rem;
  }
}
@media screen and (max-width: 660px) {
  .blogs {
    grid-template-columns: repeat(1, 1fr);
  }

  .portfolios {
    grid-template-columns: repeat(1, 1fr);
  }
}


  </style>
  <footer class="bg-dark py-4 mt-auto">
  
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; 2022</div></div>                    
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
