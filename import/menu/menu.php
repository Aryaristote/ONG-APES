<!-- <link rel="stylesheet" href="nicepage0648.css" media="screen"> -->
<!-- <?php 
    function nav_item(string $lien, string $titre): string{
        $classe = 'nav-item';
        if($_SERVER['SCRIPT_NAME'] === $lien){
            $classe = $classe . ' active';
        }
        return <<<HTML
           <li class=" active">
                <a class="nav-link " href="$lien">$titre</a>
           </li> 
HTML;
        // return $html;
    }
?> -->

<nav class="navbar navbar-expand-md navbar-dark">
    <div class="">
        <div class="nav-block">
            <div class="brand-top">
                <a href="../../index.php"><img src="../../wp-content/uploads/revslider/slider-2/apeslogowhite.png"
                    alt="Logo" width="140px">
                </a>
            </div>

            <button type="button" class="navbar-toggler collapsed" data-toggle="collapse"
                data-target="#main-nav">
                <span class="menu-icon-bar"></span>
                <span class="menu-icon-bar"></span>
                <span class="menu-icon-bar"></span>
            </button>

            <div id="main-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class=" active">
                        <a class="nav-link <?php if($nav === 'index'): ?> active<?php endif ?>" href="../../index.php">Accueil</a>
                    </li> 
                    <li class=" active">
                        <a class="nav-link <?php if($nav === 'project'): ?> active <?php endif ?>" href="../../Nosprojets/index.php">Nos Projets</a>
                    </li>
                    <li class=" active">
                        <a class="nav-link <?php if($nav === 'info'): ?> active <?php endif ?>" href="../../gallerie/index.php">Actualité</a>
                    </li> 
                    <li class=" active">
                        <a class="nav-link <?php if($nav === 'about'): ?> active <?php endif ?>" href="../../about-us/index.php">A Propos</a>
                    </li> 
                    <li class=" active">
                        <a class="nav-link <?php if($nav === 'team'): ?> active <?php endif ?>" href="../../team/index.php">Equipe</a>
                    </li>
                    <li class=" active">
                        <a class="nav-link <?php if($nav === 'contact'): ?> active <?php endif ?>" href="../../contact/index.php">Contact</a>
                    </li>
                    <!-- <?= nav_item('../../index.php', 'Accueil'); ?>
                    <?= nav_item('../../Nosprojets/index.php', 'Nos Projets'); ?>
                    <?= nav_item('../../gallerie/index.php', 'Gallerie'); ?>
                    <?= nav_item('../../about-us/index.php', 'A Propos'); ?>
                    <?= nav_item('../../team/index.php', 'Equipe'); ?>
                    <?= nav_item('../../contact/index.php', 'Contact'); ?> -->
                </ul>
            </div>
        </div>
    </div>
</nav>
