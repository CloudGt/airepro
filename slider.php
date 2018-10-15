<?php session_start();?>
<?php
  if (isset($_GET['galeria']) == 0) 
  {
    echo "<h1>no se selecciono una galeria</h1>";
  }
  else
  {
    echo "
     <div id='carousel-example-generic' class='carousel slide' data-ride='carousel'>
                    <!-- Indicators -->
                    <ol class='carousel-indicators'>
                      <li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>
                      <li data-target='#carousel-example-generic' data-slide-to='1'></li>
                      <li data-target='#carousel-example-generic' data-slide-to='2'></li>
                      <li data-target='#carousel-example-generic' data-slide-to='3'></li>
                      <li data-target='#carousel-example-generic' data-slide-to='4'></li>
                    </ol>
                   
                    <!-- Wrapper for slides -->
                    <div class='carousel-inner'>
                    ";
                    if (file_exists("img/galerias/".$_GET['galeria']."/1.jpg")) {
                    echo "
                      <div class='item active'>
                        <center>
                          <img src='img/galerias/".$_GET['galeria']."/1.jpg' alt='...'>
                        </center>
                        <div class='carousel-caption'>
                          
                        </div>
                      </div>
                      ";
                    }
                    if (file_exists("img/galerias/".$_GET['galeria']."/2.jpg")) {
                    echo "
                      <div class='item'>
                        <center>
                          <img src='img/galerias/".$_GET['galeria']."/2.jpg' alt='...'>
                        </center>
                        <div class='carousel-caption'>
                          
                        </div>
                      </div>
                      ";
                      }
                    if (file_exists("img/galerias/".$_GET['galeria']."/3.jpg")) {
                    echo "
                      <div class='item'>
                        <center>
                        <img src='img/galerias/".$_GET['galeria']."/3.jpg' alt='...'>
                        </center>
                        <div class='carousel-caption'>
                          
                        </div>
                      </div>
                      ";
                      }
                    if (file_exists("img/galerias/".$_GET['galeria']."/4.jpg")) {
                    echo "
                      <div class='item'>
                        <center>
                          <img src='img/galerias/".$_GET['galeria']."/4.jpg' alt='...'>
                        </center>
                        <div class='carousel-caption'>
                          
                        </div>
                      </div>
                      ";
                      }
                    if (file_exists("img/galerias/".$_GET['galeria']."/5.jpg")) {
                    echo "
                      <div class='item'>
                        <center>
                          <img src='img/galerias/".$_GET['galeria']."/5.jpg' alt='...'>
                        </center>
                        <div class='carousel-caption'>
                          
                        </div>
                      </div>
                      ";
                        }
                    echo "
                    </div>
                   
                    <!-- Controls -->
                    <a class='left carousel-control' href='#carousel-example-generic' role='button' data-slide='prev'>
                      <span class='glyphicon glyphicon-chevron-left'></span>
                    </a>
                    <a class='right carousel-control' href='#carousel-example-generic' role='button' data-slide='next'>
                      <span class='glyphicon glyphicon-chevron-right'></span>
                    </a>
                  </div> <!-- Carousel -->

              </div>";
  }
?>