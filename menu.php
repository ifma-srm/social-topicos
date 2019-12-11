 <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="images/user.jpeg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span><?=$_SESSION["usuario"]?></span>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="index.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Página Inicial</a>
          <a class="mdl-navigation__link" href="portfolio.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">collections</i>Portifolio</a>
          <a class="mdl-navigation__link" href="publicar.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">add</i>Publicar</a>
          <a class="mdl-navigation__link" href="novidades.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">arrow_upward</i>Novidades</a>
          <a class="mdl-navigation__link" href="configuracoes.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">settings</i>Configurações</a>
          <a class="mdl-navigation__link" href="logout.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">exit_to_app</i>Sair</a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href="sobre.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i>Sobre</a>
        </nav>