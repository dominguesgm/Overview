<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
  <li><a class="text-center" href="{$BASE_URL}pages/users/profile.php?id={$ID}">
    <img class="img-circle" height="50" width="50" alt="Imagem de perfil" src="{$BASE_URL}{$PICTURE}">
  </a></li>

  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Notificações</a></li>

  {if $TYPE != 'Contributor' && ($STATUS == 'Active' || $STATUS == 'Warned')}
    <li class="divider"></li>
    <li class="dropdown-submenu"><a tabindex="-1" href="#"><span class="glyphicon glyphicon-eye-open"></span> Área de Moderação</a>
        <ul class="dropdown-menu">
          <li><a href="#"><span class="glyphicon glyphicon-flag"></span> Itens reportados</a></li>
        <li><a href="#"><span class="fa fa-users"></span> Contribuidores</a></li>
        </ul>
    </li>
  {/if}

  {if $TYPE == 'Administrator' && ($STATUS == 'Active' || $STATUS == 'Warned')}
    <li class="dropdown-submenu"><a tabindex="-1" href="#"><span class="glyphicon glyphicon-lock"></span> Área de Administração</a>
        <ul class="dropdown-menu">
        <li><a href="#"><span class="fa fa-legal"></span> Moderadores</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-tag"></span> Categorias</a></li>
        </ul>
    </li>
  {/if}

  <li class="divider"></li>
  <li><a href="{$BASE_URL}actions/users/logout.php"><span class="glyphicon glyphicon-share"></span> Sair</a></li>
</ul>
