<?php include('includes/head.inc'); ?>
<?php include('includes/header.inc'); ?>
<body>
<!-- C. Main Content -->

<section id="mast" class="form page__leagues">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Add League</h1>
        
            <ul class="list navigation">
        
                <li><a class="button" href="leagues.php"><span>back</span></a></li>
                <li><a class="button" href="league__add.php"><span>Add League</span></a></li>

            </ul>
            
        </section>
        
        <section class="page-body">
            
            <form class="form inline">
        
                <div class="field-item text">
                    <label for="league-name">League Name</label>
                    <input type="text" id="league-name" placeholder="John" name="league-name">
                </div>

                <a href="main.php" class="button">SUBMIT</a>
            
            </form>
            
        </section>
        
    </div>

</section>

<!-- C. END -->
</body>
<?php include('includes/footer.inc'); ?>