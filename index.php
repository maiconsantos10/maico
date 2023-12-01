<?php
    session_start();
    include_once('./paginas/config.php');
    
    //print_r($_SESSION);
    
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true ))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        
    }


    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    

    $result = $conexao->query($sql);


    
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/styleindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
   
    <title>Telecall</title>
</head>


<body>
            
     <center>       
    
        
        <h1>Bem-Vindo Usuário <?= $_SESSION['permissao'] == 'administrador' ? 'Master' : 'Comum'?></h1>
       
        
    
    
    
    </center>
    <CENTER>
    <div class="d-flex">
        <a href="./paginas/sair.php" class="btn btn-danger me-5"> Sair</a>
</div>
    </CENTER>




    <div class="container">

  <div class="hamburguer">
    <div class="line" id="line1" id="line1"></div>
    <div class="line" id="line1" id="line2"></div>
    <div class="line" id="line1" id="line3"></div>
  </div>

<header>

    <div class="container-cabecalho">
        <ul>
            <li><a href="https://telecall.com/telefonia/?gclid=CjwKCAiApaarBhB7EiwAYiMwqjcioal31hxpSaJBRA4E3-BGvk9dNDaGi9zNK-5lyrFfOy2MYWhn7BoCQ8oQAvD_BwE" target="_blank"> Empresa</a></li>

        </ul>
        </div>
         <div class="container-cabecalho2">
         <ul>
            
                
            </ul>
         </div>
        </header>

        <div class="imagem" id="container-cabecalho">
          
            <img src="imagens/inicial/telecal.jpg">
           </div>



       <!--inicio-->
 <div class="slider">
		<!-- fade css -->
		<div class="myslide fade">
			<div class="txt">
				
			</div>
			<img src="imagens/inicial/banner-desk-dudu.png" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<div class="txt">
				
			</div>
			<img src="imagens/inicial/banner190520.png" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<div class="txt">
				
			</div>
			<img src="imagens/inicial/campanha.png" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<div class="txt">
				
			</div>
			<img src="imagens/inicial/banner-desk-dudu.png" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<div class="txt">
				
			</div>
			<img src="imagens/inicial/banner190520.png" style="width: 100%; height: 100%;">
		</div>
		<!-- /fade css -->
		
		<!-- onclick js -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		
		<div class="dotsbox" style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span>
			<span class="dot" onclick="currentSlide(5)"></span>
		</div>
		<!-- /onclick js -->
	</div>


            



<section class="sessao-projetos" id="produtos">
    <div class="sessao-header">
        <h1>Soluções inteligentes para sua empresa</h1>
    </div>
    <div class="projetos">
        <div class="card">
            <div class="card-img-wrapper">
                <img src="imagens/inicial/internet.jpg" alt="">
            </div>
            <div class="card-info">
                <h2>Internet</h2>
                <h3></h3>
                <p>Solução de internet em Fibra com alta qualidade e disponibilidade.</p>
               <a href="paginas/internet.html"><button>Saiba Mais</button></a>

            </div>
        </div>
        <div class="card">
            <div class="card-img-wrapper">
             <img src="imagens/inicial/telefonia.jpg" alt="">
            </div>
            <div class="card-info">
                <h2>Telefonia</h2>
                <h3></h3>
                <p>Solução inteligente de PABX IP na nuvem para sua telefonia fixa.</p>
               <a href="paginas/telefonia.html"><button>Saiba Mais</button></a>
            </div>
        </div>
        <div class="card">
            <div class="card-img-wrapper">
                <img src="imagens/inicial/mobilidade.jpg" alt="">
            </div>
            <div class="card-info">
                <h2>Mobilidade</h2>
                <h3></h3>
                <p>Mante planos de celular personalizados para a sua empresa e pague apenas pelo que precisa.</p>
                <button>Saiba Mais</button>
            </div>
        </div>
    </div>

</section>

<div class="mapa" id="locais">
    <img src="imagens/inicial/maparj.png"    alt"Workplace" usemap="#workmap">

    <map name="workmap">
    <area shape="rect" coords="242,824,325,849" alt="Empresa Google" title="google" href="https://www.microsoft.com/pt-br"target="_blank"  >
    <area shape="rect" coords="226,764,291,786" alt,="tiwsrj" title="Empresa Tiws" href="https://www.globalsolutions.telefonica.com/en/"target="_blank" >
    <area shape="rect" coords="236,711,323,736" alt,="globenetrj" title="Empresa globenet" href="https://globenet.com/pt/"target="_blank" >
    <area shape="rect" coords="291,680,342,710" alt,="l3rj" title="Empresa l3" href="https://l3.com.br/" target="_blank">
    <area shape="rect" coords="371,669,435,691" alt,="tivitrj" title="Empresa tivit" href="https://www.tivit.com/" target="_blank">
    <area shape="rect" coords="520,701,591,732" alt,="vivorj" title="Empresa vivo" href="https://www.vivo.com.br/" target="_blank">
    <area shape="rect" coords="541,617,641,641" alt,="globo.comrj" title="Empresa globo.com" href="https://www.globo.com/"target="_blank" >
    <area shape="rect" coords="724,732,821,752" alt,="globo.comrj" title="Empresa globo.com" href="https://www.globo.com/" target="_blank">
    <area shape="rect" coords="606,720,689,750" alt,="telecallrj" title="Empresa telecall" href="https://www.telecall.com/"target="_blank" >
    <area shape="rect" coords="603,534,655,557" alt,="oirj" title="Empresa oi" href="https://www.oi.com.br/" target="_blank">
    <area shape="rect" coords="889,353,963,383" alt,="timrj" title="Empresa tim" href="https://www.tim.com.br/"target="_blank" >
    <area shape="rect" coords="987,377,1057,407" alt,="timrj" title="Empresa tim" href="https://www.tim.com.br/"target="_blank" >
    <area shape="rect" coords="886,267,967,293" alt,="equinixrj" title="Empresa equinix" href="https://www.equinix.com.br/"target="_blank" >
    <area shape="rect" coords="1153,555,1232,581" alt,="equinixrj" title="Empresa equinix" href="https://www.equinix.com.br/"target="_blank" >
    <area shape="rect" coords="1172,584,1245,612" alt,="lnccrj" title="Empresa lncc" href="https://www.gov.br/lncc/pt-br"target="_blank" >
    <area shape="rect" coords="1104,409,1195,436" alt,="teleportorj" title="Empresa teleporto" href="https://rioteleporto.com.br/"target="_blank" >
    <area shape="rect" coords="783,377,872,405" alt,="embratelrj" title="Empresa embratel" href="https://www.embratel.com.br/"target="_blank" >
    <area shape="rect" coords="1070,379,1124,404" alt,="l3" title="Empresa l3" href="https://l3.com.br/" target="_blank">
    </map>
 
</section>

</div>




<div class="sidebar">
    <nav>
        <ul class="menu">
            <li class="menu-item"><a href="#container-cabecalho" class="menu-link">Home</a></li>
            <li class="menu-item"><a href="#produtos" class="menu-link">Produtos</a></li>
            <li class="menu-item"><a href="#locais" class="menu-link">Locais</a></li>

           
        </ul>
    </nav>
    <div class="social-media">
        <a href="https://www.facebook.com/TelecallBr"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/telecallbr"><i class="fab fa-instagram"></i></a>
        <a href="https://loja.telecall.com"><i class="fab fa-google"></i></a>
    </div>
 </div>
</div>


<!--Criaçao dos cards-->



        

<div class="slide-container">
        <div class="slide-content">
            <div class="car-wrapper">
                <div class="card">
                <div class="image-content">
                    <span class="overlay"></span>

                  
                </div>
                </div>
            </div>
        </div>
</div>

<footer>
    <div class="footer-content">
      <p>
        Copyright © 2022 Telecall. Todos os direitos reservados.
      </p>
      <div class="social-list">
        <ul>
          <li><a href="https://www.facebook.com/TelecallBr"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="https://www.instagram.com/telecallbr"><i class="fab fa-instagram"></i></a></li>
          <li><a href="https://loja.telecall.com"><i class="fab fa-google"></i></a></li>
        </ul>
      </div>
    </div>
  </footer>
  
</div>





    </div> <!--fim do container-->







    <script src="scripts/script.js"></script>
    
    
    </div>
</body>
</html>