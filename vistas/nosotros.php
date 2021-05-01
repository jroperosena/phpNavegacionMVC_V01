 <!--main o contenido principal -->
 <h1 class="estiloH1"> Conozca Nuestra Empresa </h1>

<section class="estiloSeccion">

<div class="contenedor40">

<nav class="estiloNav">
            <ul class="estiloUlTex">
                <li class="estiloLiTex"><a  class="estiloLinkTex"  href="../controlador/organigramaControlador.php"> Organigrama </a></li>
                <li class="estiloLiTex"><a  class="estiloLinkTex"  href="../controlador/misionControlador.php"> Mision </a></li>
                <li class="estiloLiTex"><a  class="estiloLinkTex"  href="../controlador/visionControlador.php"> Vision  </a></li>
            </ul>
        </nav>


</div>

<div class="contenedor40">

<?php 
        // defino varible opcion con el valor que viede por la URL  por el metodo GET 
       // isset(VARIABLE)
       if (!isset($subVista)) 
            $subVista="organigrama.php";

        require $subVista;

        ?>



    </div>
    

</section>

<!--main o contenido principal -->