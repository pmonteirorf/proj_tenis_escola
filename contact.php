 <!-- ======= Header ======= -->
 <?php include 'header.html'; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contact-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contato</h2>
        <spam class="subtitle-pag">Mande sua mensagem, queremos te ouvir!</spam>

      </div>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact mt-0 pt-4">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="call_action pb-4">
          <div class="row gy-4 justify-content-center align-items-center">
            <div class="col-lg-6 container-txt">
              <p class="mb-0">Faça parte e se torne um agente de transformação na vida de centenas de crianças e jovens!
              </p>
              <spam class="mt-2">Mande uma mensagem mostrando o seu interesse que entraremos em contato.</spam>
            </div>
            <div class="col-lg-6 container_img">
              <img src="assets/img/action-contato.jpg" class="img-fluid">
            </div>
          </div>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Endereço</h3>
              <p>
                Rua Rio das Flores, 77 - Belo Horizonte
              </p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>E-mail</h3>
              <p>contato@tenisescola.org</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Telefone</h3>
              <p>(31) 3203-2211</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">

          <div class="col-lg-6 ">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.24251858281!2d-43.97440068911492!3d-19.998333681328017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6bd120eecb1a5%3A0xe00b773ea09db73e!2sRua%20Rio%20das%20Flores%2C%2077%20-%20Pilar%2C%20Belo%20Horizonte%20-%20MG%2C%2030390-210%2C%20Brazil!5e0!3m2!1sen!2sau!4v1699334483512!5m2!1sen!2sau"
              frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>

          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row gy-4">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Menssagem" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Carregando</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensagem foi enviada com sucesso. Obrigado!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>


  <!-- ======= Footer ======= -->
  <?php include 'footer.html'; ?>