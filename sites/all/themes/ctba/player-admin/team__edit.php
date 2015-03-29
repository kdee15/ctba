<?php include('includes/head.inc'); ?>
<?php include('includes/header.inc'); ?>
<body>
<!-- C. Main Content -->

<section id="mast" class="page__teams">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Edit Team</h1>
        
            <ul class="list navigation">
        
                <li><a class="button" href="teams.php"><span>back</span></a></li>
                <li><a class="button" href="team__add.php"><span>Add Team</span></a></li>

            </ul>
            
        </section>
        
        <section class="page-body">
            
            <form class="form inline">

                <div class="field-item text">
                    <label for="club-name">Club Name</label>
                    <input type="text" id="club-name" placeholder="club name" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="team-name">Team Name</label>
                    <input type="text" id="team-name" placeholder="team name" name="team-name">
                </div>

                <div class="field-item text">
                    <label for="league-name">League Name</label>
                    <input type="text" id="league-name" placeholder="league name" name="league-name">
                </div>

                <a href="main.php" class="button">SUBMIT</a>
                
            </form>
            
        </section>
        
    </div>

</section>

<!-- C. END -->
</body>
<?php include('includes/footer.inc'); ?>