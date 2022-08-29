<?php
    $q = $db->query("SELECT * FROM offres");
    
    if($q){
        $offres = $q->fetchAll(PDO::FETCH_OBJ);
		foreach($offres as $offre){}
		
    }else{
        var_dump("Fails, Did not get date from DB!");
        die();
	}

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
?>

<nav class="navbar navbar-expand-md navbar-dark">
    <div class="">
        <div class="nav-block">
            <div class="brand-top">
                <a href="index.php">
                    <img src="wp-content/uploads/revslider/slider-2/apeslogowhite.png" alt="Logo" width="140px">
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
                        <a class="nav-link <?php if($nav === 'index'): ?> active<?php endif ?>" href="./index.php">
                            Accueil
                        </a>
                    </li> 
                    <li class=" active">
                        <a class="nav-link <?php if($nav === 'project'): ?> active <?php endif ?>" href="./projects.php">
                            Nos Projets
                        </a>
                    </li>
                    <?php if(count($offres) >= 1 ): ?>
                        <li class=" active">
                        <a class="nav-link <?php if($nav === 'jobs'): ?> active <?php endif ?>" href="./jobs.php">
                            Jobs
                        </a>
                    </li>
                    <?php endif ?>
                    <li class=" active">
                        <a class="nav-link <?php if($nav === 'info'): ?> active <?php endif ?>" href="./article.php">
                            Actualité
                        </a>
                    </li> 
                    <li class=" active">
                        <a class="nav-link <?php if($nav === 'about'): ?> active <?php endif ?>" href="./about_us.php">
                            A Propos
                        </a>
                    </li> 
                    <li class=" active">
                        <a class="nav-link <?php if($nav === 'team'): ?> active <?php endif ?>" href="./team.php">
                            Equipe
                        </a>
                    </li>
                    <li class=" active">
                        <a class="nav-link <?php if($nav === 'contact'): ?> active <?php endif ?>" href="./contact.php">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<script type='text/javascript' src='../../wp-content/themes/incharity/js/bootstrap.mine7f3.js?ver=2.1.7' id='bootstrap-js'></script>
<script src="../../header-1.js"></script>
<!-- <script type='text/javascript' src='../../wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1'></script> -->
