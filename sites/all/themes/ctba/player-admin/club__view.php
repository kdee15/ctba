<?php include('includes/head.inc'); ?>
<?php include('includes/header.inc'); ?>
<body>
<!-- C. Main Content -->

<section id="mast" class="page__clubs">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Club Detail</h1>
        
            <ul class="list navigation">
        
                <li><a class="button" href="club__add.php"><span>Add Club</span></a></li>

            </ul>
            
        </section>
        
        <section class="page-body">

            <ul class="list grid">

                <li class="grid__whole">
                    <article class="card">
                        <div class="card__header">
                            <img src="http://placehold.it/300x150" />
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

            </ul>
            
        </section>
        
    </div>

</section>

<!-- C. END -->
</body>
<?php include('includes/footer.inc'); ?>