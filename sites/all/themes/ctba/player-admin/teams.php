<?php include('includes/head.inc'); ?>
<?php include('includes/header.inc'); ?>
<body>
<!-- C. Main Content -->

<section id="mast" class="page__teams">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Teams</h1>
        
            <ul class="list navigation">
        
                <li><a class="button" href="team__add.php"><span>Add Team</span></a></li>

            </ul>
            
        </section>
        
        <section class="page-body">
            
            <aside class="filter grid team__filter">

                <div class="field-item text grid__quarter">
                    <label for="team">filter by Club</label>
                    <select type="text" id="team" name="team">
                        <option>Club Name</option>
                        <option>Club Name</option>
                        <option>Club Name</option>
                        <option>Club Name</option>
                        <option>Club Name</option>
                        <option>Club Name</option>
                        <option>Club Name</option>
                    </select>
                </div>
                
                <div class="field-item text grid__quarter">
                    <label for="team">filter by League</label>
                    <select type="text" id="team" name="team">
                        <option>MSL</option>
                        <option>M1</option>
                        <option>M2</option>
                        <option>LSL</option>
                        <option>L1</option>
                        <option>L2</option>
                        <option>BU18</option>
                        <option>GU18</option>
                        <option>BU16</option>
                        <option>GU16</option>
                    </select>
                </div>
                
            </aside>
        
            <ul class="list grid">
        
                <li class="grid__third">
                    <article class="card" href="leagues.php">
                        <div class="card__header"><img src="" /></div>
                        <div class="card__body">
                            <h4>Flames</h4>
                            <h4>Mens Super League</h4>
                        </div>
                        <div class="card__footer">
                            <ul class="list grid">
                                <li class="grid__third">
                                    <a href="team__edit.php"><span>Edit</span></a>
                                </li>
                                <li class="grid__third">
                                    <a href="players.php"><span>Players</span></a>
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