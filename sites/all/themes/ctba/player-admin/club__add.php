<?php include('includes/head.inc'); ?>
<?php include('includes/header.inc'); ?>
<body>
<!-- C. Main Content -->

<section id="mast" class="form page__clubs">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Add Club</h1>
        
            <ul class="list navigation">
        
                <li><a href="leagues.php"><span>back</span></a></li>
                <li><a href="league__add.php"><span>Add Club</span></a></li>

            </ul>
            
        </section>
        
        <section class="page-body">
        
            <div class="field-item text">
                <label for="club-name">Club Name</label>
                <input type="text" id="club-name" placeholder="club name" name="club-name">
            </div>
        
            <a href="main.php" class="button">SUBMIT</a>
            
        </section>
        
    </div>

</section>

<!-- C. END -->
</body>
<?php include('includes/footer.inc'); ?>