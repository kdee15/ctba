<?php include('includes/head.inc'); ?>
<?php include('includes/header.inc'); ?>
<body>
<!-- C. Main Content -->

<section id="mast" class="page__clubs">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Add Player</h1>
        
            <ul class="list navigation">
        
                <li><a class="button" href="players.php"><span>back</span></a></li>
                <li><a class="button" href="player__add.php"><span>Add Player</span></a></li>

            </ul>
            
        </section>
        
        <section class="page-body">
            
            <form class="form inline">

                <div class="field-item text">
                    <label for="club-name">Player Name</label>
                    <input type="text" id="club-name" placeholder="club name" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Player Surname</label>
                    <input type="text" id="club-name" placeholder="e.g. John Handy" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Player Tel</label>
                    <input type="text" id="club-name" placeholder="e.g. 080 000 000" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Player Fax</label>
                    <input type="text" id="club-name" placeholder="e.g. 086 000 000" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Player Email</label>
                    <input type="text" id="club-name" placeholder="e.g. info@clubname.co.za" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Player Address</label>
                    <input type="text" id="club-name" placeholder="e.g. Street" name="club-name">
                    <input type="text" id="club-name" placeholder="e.g. Suburb" name="club-name">
                    <input type="text" id="club-name" placeholder="e.g. Town" name="club-name">
                    <input type="text" id="club-name" placeholder="e.g. Code" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Player ID/Passport</label>
                    <input type="text" id="club-name" placeholder="e.g. blue and white" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Player Date of Birth</label>
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