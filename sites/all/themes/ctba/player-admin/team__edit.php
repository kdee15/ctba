<?php include('includes/head.inc'); ?>
<?php include('includes/header.inc'); ?>
<body>
<!-- C. Main Content -->

<section id="mast" class="page__leagues">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Edit League</h1>
        
            <ul class="list navigation">
        
                <li><a href="leagues.php"><span>back</span></a></li>
                <li><a href="league__add.php"><span>Add League</span></a></li>

            </ul>
            
        </section>
        
        <section class="page-body">
        
            <div class="field-item text">
                <label for="league-name">League Name</label>
                <input type="text" id="league-name" placeholder="John" name="league-name">
            </div>
        
            <a href="main.php" class="button">SUBMIT</a>
            
        </section>
        
    </div>

</section>

<!-- C. END -->
</body>
<?php include('includes/footer.inc'); ?>