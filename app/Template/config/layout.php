<section id="main">
	<div class="page-header">
        <ul>
            <li>
                <i class="fa fa-life-ring fa-fw"></i>
                <a href="/kanboard.2/?controller=project&amp;action=index" class="" title="">Administración del proyecto</a>
            </li>
        	<li>
                <i class="fa fa-life-ring fa-fw"></i>
             	<a href="/kanboard.2/?controller=user&amp;action=index" class="" title="">Gestión de Usuarios</a>
            </li>

            <li>
            	<i class="fa fa-life-ring fa-fw"></i>
            	<a href="/kanboard.2/?controller=app&amp;action=index" class="" title="Tablero"> inicio </a>

            </li>
            <li>
                <i class="fa fa-life-ring fa-fw"></i>
                <a href="/kanboard.2/?controller=projectuser&amp;action=managers" class="" title="">Resumen de Usuario</a>
            </li>


        </ul>
    </div>

    <section class="sidebar-container" id="config-section">

        <?= $this->render('config/sidebar') ?>

        <div class="sidebar-content">
            <?= $config_content_for_layout ?>
        </div>
    </section>
</section>