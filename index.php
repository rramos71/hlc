<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="libs/css/main.css" />

    <title>Hosting - Alojamiento Web En España | CyberSpartan</title>
  </head>
  <body>
    <div class="container">
      <header>
        <!img src="libs/images/logo.svg" alt="Spartan Hosting logo" class="logo" />

        <nav>
          <a href="#" class="hide-desktop">
            <img
              src="libs/images/ham.svg"
              alt="toggle menu"
              class="menu"
              id="menu"
            />
          </a>
          <ul class="show-desktop hide-mobile" id="nav">
            <li id="exit" class="exit-btn hide-desktop">
              <img src="libs/images/exit.svg" alt="exit menu" />
            </li>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Sobre Nosotros</a></li>
            <li><a href="https://blog.cyberspartan.es">Contacto</a></li>
            <li><a href="http://cyberspartan.es/intranet">Área de Clientes</a></li>
          </ul>
        </nav>
      </header>

      <section>
        <img src="libs/images/server.svg" alt="server graphic" class="server" />

        <h1>Hosting ilimitado con todo lo que necesitas</h1>
        <p class="subhead">✔ Rápido, seguro, flexible y escalable</br>✔ Certificados SSL</br>✔ Soporte 24/7</p>

        <img
          src="libs/images/scroll.svg"
          alt="scroll down"
          class="scroll hide-mobile show-desktop"
        />
      </section>
    </div>

    <div class="blue-container">
      <div class="container">
        <ul>
          <li>
            <img src="libs/images/icon-1.svg" alt="Calender icon" />
            <p>
              Disponibles 24/7 y sin limitaciones a la hora de expandir tu idea
              de negocio o gestión en un simple clic, al alcance de cualquiera.
            </p>
          </li>
          <li>
            <img src="libs/images/icon-2.svg" alt="Cartera icon" />
            <p>
              En nuestro hosting, tus pagos son 100% anónimos, mediante crypto
              o cualquier método de pago válido, internacional como español.
            </p>
          </li>
          <li>
            <img src="libs/images/icon-3.svg" alt="Mobile icon" />
            <p>
              Cualquier duda, gestión o petición personalizada puede realizarse
              sin ningun compromiso, mantente en contactacto con nosotros.
            </p>
          </li>
        </ul>
      </div>
    </div>

    <div class="gray-container">
      <div class="container">
        <ul>
          <li>
            <figure>
              <img src="libs/images/user1.png" alt="Foto del CEO" width="200" height="150" />
              <blockquote>
                CEO y responsable del departamento de IT de CyberSpartan.
                Trabajando dia a dia para que vayas cada vez más lejos con nuestras Soluciones de Infraestructura Cloud.
              </blockquote>
              <figcaption>- Rubén Ramos Juárez</figcaption>
            </figure>
          </li>
        </ul>
      </div>
    </div>

    <div class="container">
      <h2>¿Quieres consultar alguna duda o ponerte en contacto con nosotros?</h2>
      <a href="http://blog.cyberspartan.es" class="cta">Formulario de Contacto</a>
    </div>

    <footer>
      <div class="footer-container">
        <div class="container">
          <a href="#">
            <!img src="libs/images/logo-white.svg" alt="logo" class="logo" />
          </a>
          <p>Granada, 18001<br />España</p>
          <ul class="footer-links">
            <li><a href="#">Terminos de Servicio</a></li>
            <li><a href="#">Políticas</a></li>
          </ul>
        </div>
      </div>
    </footer>

    <script>
      var menu = document.getElementById("menu");
      var nav = document.getElementById("nav");
      var exit = document.getElementById("exit");

      menu.addEventListener("click", function(e) {
        nav.classList.toggle("hide-mobile");
        e.preventDefault();
      });

      exit.addEventListener("click", function(e) {
        nav.classList.add("hide-mobile");
        e.preventDefault();
      });
    </script>
  </body>
</html>
