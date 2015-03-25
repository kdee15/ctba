<?php include('includes/head.inc'); ?>
<?php include('includes/header.inc'); ?>
<body>
<!-- C. Main Content -->

<section id="mast" class="page__leagues">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Leagues</h1>
        
            <ul class="list navigation">
        
                <li><a href="league__add.php"><span>Add League</span></a></li>

            </ul>
            
        </section>
        
        <section class="page-body">
        
            <ul class="list grid">

                <li class="grid__quarter">
                    <article class="card" href="leagues.php">
                        <div class="card__header"><img src="" /></div>
                        <div class="card__body">
                            <h4>Mens Super League</h4>
                            <h4>League ID: 1</h4>
                        </div>
                        <div class="card__footer">
                            <ul class="list grid">
                                <li class="grid__half">
                                    <a href="league__edit.php"><span>Edit</span></a>
                                </li>
                                <li class="grid__half">
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