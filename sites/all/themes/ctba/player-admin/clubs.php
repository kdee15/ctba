<?php include('includes/head.inc'); ?>
<?php include('includes/header.inc'); ?>
<body>
<!-- C. Main Content -->

<section id="mast" class="page__clubs">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Clubs</h1>
        
            <ul class="list navigation">
        
                <li><a href="club__add.php"><span>Add Club</span></a></li>

            </ul>
            
        </section>
        
        <section class="page-body">

            <ul class="list grid">

                <li class="grid__third">
                    <article class="card">
                        <div class="card__header">
                            <a href="club__view.php"><img src="http://placehold.it/300x150" /></a>
                        </div>
                        <div class="card__body">
                            <h4>Flames</h4>
                        </div>
                        <div class="card__footer">
                            <ul class="list grid">
                                <li class="grid__third">
                                    <a href="club__edit.php"><span>Edit</span></a>
                                </li>
                                <li class="grid__third">
                                    <a href="teams.php"><span>Teams</span></a>
                                </li>
                                <li class="grid__third">
                                    <a href=""><span>Delete</span></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </li>

                <li class="grid__third">
                    <article class="card">
                        <div class="card__header">
                            <figure class="club__logo">
                                <img class="club__logo-bg" src="images/clubs/mvbc-logo-2.jpg"/>
                            </figure>
                            <a class="club__logo-image" href="club__view.php"><img src="images/clubs/mvbc-logo-1.jpg"/></a>
                        </div>
                        <div class="card__body">
                            <h4>MVBC</h4>
                        </div>
                        <div class="card__footer">
                            <ul class="list grid">
                                <li class="grid__third">
                                    <a href="club__edit.php"><span>Edit</span></a>
                                </li>
                                <li class="grid__third">
                                    <a href="teams.php"><span>Teams</span></a>
                                </li>
                                <li class="grid__third">
                                    <a href=""><span>Delete</span></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </li>

            </ul>
            
        </section>
        
    </div>

</section>

<!-- C. END -->
</body>
<?php include('includes/footer.inc'); ?>