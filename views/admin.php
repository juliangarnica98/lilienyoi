<?php include 'layout/head.php'; ?>

<body>
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-center align-items-center">
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#pilares">Pilares</a></li>
          <li><a class="nav-link scrollto" href="#beneficios">Cartilla</a></li>
          <li><a class="nav-link scrollto" href="#caja">Cajas de compensación</a></li>
          <li><a class="nav-link scrollto" href="#directorio">Directorio</a></li>

          <!-- <li><a class="nav-link scrollto" href="#directorio">Directorio</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-md-8">
        <img src="./assets/img/ENYOI CON LILI_BLANCO.png" class="img-fluid" alt="">
      </div>
    </div>
  </section>

  <main id="main">
    <section id="pilares">
      <div class="container pt-5 pb-5" data-aos="fade-up">
        <div class="section-header">
          <img src="assets/img/titulo_pilares.png" class="img-fluid" alt="">
        </div>
        <div class="row pt-5">
          <div class="col-md-3 col-sm-6 text-center" data-aos="zoom-in">
            <img src="./assets/img/lili/salud_bienestar.png" class="img-fluid img-pilares" alt="">
            <!-- <h2 class="text-center">Salud y bienestar</h2> -->
          </div>
          <div class="col-md-3 col-sm-6 text-center" data-aos="zoom-in">
            <img src="./assets/img/lili/calidad_vida.png" class="img-fluid img-pilares" alt="">
            <!-- <h2 class="text-center">Calidad de vida</h2> -->
          </div>
          <div class="col-md-3 col-sm-6 text-center" data-aos="zoom-in">
            <img src="./assets/img/lili/reconocimiento.png" class="img-fluid img-pilares" alt="">
            <!-- <h2 class="text-center">Reconocimiento</h2> -->
          </div>
          <div class="col-md-3 col-sm-6 text-center" data-aos="zoom-in">
            <img src="./assets/img/lili/entrenamietno_formacion.png" class="img-fluid img-pilares" alt="">
            <!-- <h2 class="text-center">Entrenamiento y formación</h2> -->
          </div>
        </div>

      </div>
    </section>



    <section id="beneficios">
      <div id="cartilla">
        <div class="container pt-3 pb-5" data-aos="fade-up">
          <div class="section-header">
            <img src="assets/img/titulo beneficios2.png" class="img-fluid" alt="">
          </div>
          <div class="row pt-1 d-flex justify-content-center">
            <div class="col-md-6">
              <a href="https://online.fliphtml5.com/pruaa/nkbl/#p=1" target="_blank" class=""><img
                  src="./assets/img/cartilla_lili.png" class="img-fluid pt-5" alt=""> </a>
            </div>
            <!-- <iframe  height="700" src="https://online.fliphtml5.com/pruaa/zhgv/#p=1"></iframe> -->
          </div>
          <div class="row justify-content-center pt-5">
            <div class="col-md-6">
              <div class="d-grid gap-2">
                <a href="assets/politica.pdf" target="_blank" class="btn btn-white">Conoce nuestra Política de
                  Bienestar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="caja">
      <div id="caja ">
        <div class="container pb-5">
          <div class="section-header">
            <img src="assets/img/titulo_cajas.png" class="img-fluid pt-5" alt="">
            <!-- <span>Da clic en alguno de los losgos para mas información</span> -->
          </div>
          <div class=" row d-flex justify-content-center  pt-3">
            <div class="col-md-6">
              <label for="" class="d-flex justify-content-center align-items-center text-dark mb-4"><strong>SELECCIONA DEPARTAMENTO Y CIUDAD</strong></label>
              <select id="departamento" class="form-select" onchange="myFunction()">
                <option value="CAFAM">CUNDINAMARCA/BOGOTA</option>
                <option value="COMFAMA">ANTIOQUIA/MEDELLÍN</option>
                <option value="COMFAMILIAR-ATLANTICO">ATLANTICO/BARRANQUILLA</option>

                <option value="COMFENALCO-CARTAGENA">BOLÍVAR/CARTAGENA</option>
                <option value="COMFABOY">BOYACÁ/SOGAMOSO</option>

                <option value="COMFAMILIARES-DE-CALDAS">CALDAS/MANIZALES</option>
                <option value="COMFACA">CAQUETÁ/FLORENCIA</option>
                <option value="COMFACASANARE">CASANARE/YOPAL</option>
                <option value="COMFACAUCA">CAUCA/POPAYÁN</option>
                <option value="COMFACESAR">CESAR/VALLEDUPAR</option>
                <option value="COMFACOR">CORDOBA/MONTELÍBANO</option>
                <option value="CAFAM">CUNDINAMARCA/BOGOTA</option>

                <option value="COMFAGUAJIRA">GUAJIRA/RIOHACHA</option>

                <option value="COMFAMILIAR-HUILA">HUILA/NEIVA</option>

                <option value="CAJAMAG">MAGDALENA/SANTA MARTA</option>
                <option value="COFREM">META/VILLAVICENCIO</option>
                <option value="COMFAMILIAR-NARINO">NARIÑO/PASTO</option>
                <option value="COMFANORTE">NORTE DE SANTANDER/CÚCUTA</option>

                <option value="COMFENALCO-QUINDIO">QUINDIO/ARMENIA</option>
                <option value="COMFAMILIAR-RISARALDA">RISARALDA/PEREIRA</option>

                <option value="COMFENALCO-SANTANDER">SANTANDER/FLORIDABLANCA</option>
                <option value="CAJASAI">SAN ANDRES, PROVIDENCIA/SAN ANDRES</option>
                <option value="COMFASUCRE">SUCRE/SINCELEJO</option>

                <option value="COMFANDI">VALLE DEL CAUCA/CALI</option>
              </select>
              <div class="text-center mt-2" id="demo">
                <a id="inicial" href='https://online.fliphtml5.com/pruaa/cojq/#p=1' target='_blank' class=''><img src='./assets/img/cartilla_cafam.png' class='img-fluid' alt=''></a>
              </div>
            </div>
            <div class="col-md-6 box pt-3" data-aos="zoom-in">

              <a href="https://online.fliphtml5.com/asbs/rjha/" target="_blank" class=""><img
                  src="./assets/img/cartilla_compensar.png" class="img-fluid" alt=""> </a>
            </div>

          </div>
        </div>
      </div>
    </section>


    <section id="directorio">
      <div class="pt-5 pb-5" id="desktop">
        <div class="section-header">
          <img src="assets/img/titulo_directorio.png" class="img-fluid " alt="">
        </div>
        <div id="carouselExampleInterval" class="carousel slide pt-5 pb-5" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <div class="row justify-content-center">
                <div class="col-sm-9">
                  <img src="assets/img/directorio/akt.png" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <div class="carousel-item align-content-center" data-bs-interval="2000">
              <div class="row justify-content-center">
                <div class="col-sm-9">
                  <img src="assets/img/directorio/cun.png" class=" d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <div class="carousel-item align-content-center">
              <div class="row justify-content-center">
                <div class="col-sm-9">
                  <img src="assets/img/directorio/exequial.png" class="d-block w-100 " alt="...">
                </div>
              </div>
            </div>
            <div class="carousel-item align-content-center">
              <div class="row justify-content-center">
                <div class="col-sm-9">
                  <img src="assets/img/directorio/fit.png" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <div class="carousel-item align-content-center">
              <div class="row justify-content-center">
                <div class="col-sm-9">
                  <img src="assets/img/directorio/laika.png" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <div class="carousel-item align-content-center">
              <div class="row justify-content-center">
                <div class="col-sm-9">
                  <img src="assets/img/directorio/open.png" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <div class="carousel-item align-content-center">
              <div class="row justify-content-center">
                <div class="col-sm-9">
                  <img src="assets/img/directorio/smart.png" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div class="pt-5 pb-5" id="cell">
        <div class="section-header">
          <img src="assets/img/titulo_directorio.png" class="img-fluid " alt="">
        </div>
        <div id="carouselExampleInterval" class="carousel slide pt-5 pb-5" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <div class="row justify-content-center">
                <div class="col-sm-6">
                  <img src="assets/img/directorio/cell_akt.png" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <div class="carousel-item align-content-center" data-bs-interval="2000">
              <div class="row justify-content-center">
                <div class="col-sm-6">
                  <img src="assets/img/directorio/cell_cun.png" class=" d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <div class="carousel-item align-content-center">
              <div class="row justify-content-center">
                <div class="col-sm-6">
                  <img src="assets/img/directorio/cell_exeq.png" class="d-block w-100 " alt="...">
                </div>
              </div>
            </div>
            <div class="carousel-item align-content-center">
              <div class="row justify-content-center">
                <div class="col-sm-6">
                  <img src="assets/img/directorio/cell_fit.png" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <div class="carousel-item align-content-center">
              <div class="row justify-content-center">
                <div class="col-sm-6">
                  <img src="assets/img/directorio/cell_laika.png" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <div class="carousel-item align-content-center">
              <div class="row justify-content-center">
                <div class="col-sm-6">
                  <img src="assets/img/directorio/cell_open.png" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <div class="carousel-item align-content-center">
              <div class="row justify-content-center">
                <div class="col-sm-6">
                  <img src="assets/img/directorio/cell_smart.png" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row move">
          <img src="assets/img/deslizar.jpeg" class="img-fluid" alt="">
        </div>
      </div>
    </section>


  </main>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Lili Pink</strong>. Todos los derechos reservados
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

      <script>
    function myFunction() {

      var x = document.getElementById("departamento").value;
      var archivo = "assets/box/'+x+'.pdf";
      document.getElementById('demo').innerHTML = '';
      console.log(x);
      if (x == 'CAFAM') {
        document.getElementById("demo").innerHTML =
          "<a href='https://online.fliphtml5.com/pruaa/cojq/#p=1' target='_blank' class=''><img src='./assets/img/cartilla_cafam.png' class='img-fluid' alt=''></a> "
      } else if (x == 'COMFENALCO-CARTAGENA' || x == 'COMFAMA' || x == 'COMFAMILIAR-ATLANTICO' || x ==
        'COMFAMILIARES-DE-CALDAS' || x == 'COMFACAUCA' || x == 'COMFAMILIAR-HUILA' || x == 'COFREM' || x ==
        'COMFAMILIAR-NARINO' || x == 'COMFANORTE' || x == 'COMFENALCO-QUINDIO' || x == 'CAJASAI' || x == 'COMFANDI') {

        document.getElementById("demo").innerHTML =
          "<h1 class='title-lili'>Beneficios Colaboradores en misión</h1> <img src='./assets/img/boxes/" + x +
          ".png' class='img-fluid' alt=''>  ";
      } else {
        document.getElementById("demo").innerHTML =
          "<h1 class='title-lili'>Beneficios Colaboradores en misión</h1> <img src='./assets/img/boxes/" + x +
          ".png' class='img-fluid' alt=''>  <a href='assets/box/" + x +
          ".pdf ' target='_blank'  class='btn btn-lili mt-5' >Haz clic aquí</a>";
      }
    }
  </script>

  <?php include 'layout/script.php'; ?>
</body>

</html>