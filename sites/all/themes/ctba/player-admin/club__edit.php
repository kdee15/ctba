<?php include('includes/head.inc'); ?>
<?php include('includes/header.inc'); ?>
<body>
<!-- C. Main Content -->

<section id="mast" class="page__clubs">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Edit Club</h1>
        
            <ul class="list navigation">
        
                <li><a class="button" href="clubs.php"><span>back</span></a></li>
                <li><a class="button" href="club__add.php"><span>Add Club</span></a></li>

            </ul>
            
        </section>
        
        <section class="page-body">
        
            <form class="form inline">

                <div class="field-item text">
                    <label for="club-name">Club Name</label>
                    <input type="text" id="club-name" placeholder="club name" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Club Contact</label>
                    <input type="text" id="club-name" placeholder="e.g. John Handy" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Club Tel</label>
                    <input type="text" id="club-name" placeholder="e.g. 080 000 000" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Club Fax</label>
                    <input type="text" id="club-name" placeholder="e.g. 086 000 000" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Club Email</label>
                    <input type="text" id="club-name" placeholder="e.g. info@clubname.co.za" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Club Address</label>
                    <input type="text" id="club-name" placeholder="e.g. Street" name="club-name">
                    <input type="text" id="club-name" placeholder="e.g. Suburb" name="club-name">
                    <input type="text" id="club-name" placeholder="e.g. Town" name="club-name">
                    <input type="text" id="club-name" placeholder="e.g. Code" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Club Colours - home</label>
                    <input type="text" id="club-name" placeholder="e.g. blue and white" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Club Colours - away</label>
                    <input type="text" id="club-name" placeholder="e.g. white and green" name="club-name">
                </div>

                <a href="main.php" class="button">SUBMIT</a>
                
            </form>
            
        </section>
        
    </div>

</section>

<!-- C. END -->
</body>
<?php include('includes/footer.inc'); ?>