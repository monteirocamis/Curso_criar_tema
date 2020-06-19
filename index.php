<?php get_header(); ?>

    <main>
      <div class="container-fluid">
        <div class="row">
            <div class="jumbotron text-center">
              <h1><?php bloginfo('name'); ?></h1>
              <p><?php bloginfo('description'); ?></p>
            </div>
        </div>
      </div>
      <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-9">
          <?php get_template_part('_conteudo'); ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
          <div class="thumbnail">
            <div class="caption">
              <h3>Pesquisar</h3>
              <input type="text" class="form-control">
              <button type="button" class="btn btn-default">Buscar</button>
            </div>
          </div>
          <div class="thumbnail">
            <div class="caption">
              <h3>Artigos Recentes</h3>
              <ul>
                <li>Título de Artigo</li>
                <li>Título de Artigo</li>
                <li>Título de Artigo</li>
                <li>Título de Artigo</li>
              </ul>
            </div>
          </div>
          <div class="thumbnail">
            <div class="caption">
              <h3>Destaques</h3>
              <ul>
                <li>Título de Artigo</li>
                <li>Título de Artigo</li>
                <li>Título de Artigo</li>
                <li>Título de Artigo</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </main>
<?php get_footer(); ?>
