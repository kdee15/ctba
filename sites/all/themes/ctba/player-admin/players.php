<?php include('includes/head.inc'); ?>
<?php include('includes/header.inc'); ?>
<body>
<!-- C. Main Content -->

<section id="mast" class="page__players">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Players</h1>
        
            <ul class="list navigation">
        
                <li><a class="button" href="player__add.php"><span>Add Player</span></a></li>

            </ul>
            
        </section>
        
        <form class="page-body">
            
            <aside class="filter grid player__filter">
                
                <div class="field-item text grid__half">
                    <input type="text" id="player-name" placeholder="Search by name" name="player-name">
                </div>

                <div class="field-item text grid__quarter">
                    <label for="team">filter by Club</label>
                    <select type="text" id="team" name="team">
                        <option>All Clubs</option>
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
                        <option>All Leagues</option>
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
        
            <table>
            
                <tr>
                
                    <th class="header">ID</th>
                    <th class="header">Name</th>
                    <th class="header">Surname</th>
                    <th class="header">Member No.</th>
                    <th class="header">Team</th>
                    <th class="header">Docs</th>
                    <th class="header td__icon"></th>
                
                </tr>
                      
                <tr>
                
                    <td>1</td>
                    <td>Kirk</td>
                    <td>Daniels</td>
                    <td>000000</td>
                    <td class="player__team">
                        <span>club/league - team name</span>
                        <span class="icon div-toggle" name="player-edit-1">
                            <img src="../assets/images/svg/ct-edit.svg"/>
                        </span>
                        <div class="toggle-content" id="player-edit-1">
                                <span class="grid">
                                    
                                    <div class="field-item text grid__quarter">
                                        <select type="text" id="team" name="team">
                                            <option>Select</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                        </select>
                                    </div>

                                    <div class="field-item text grid__quarter">
                                        <select type="text" id="team" name="team">
                                            <option>Select</option>
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
                                    
                                    <div class="field-item text grid__quarter">
                                        <input type="text" id="player-name" placeholder="Search by name" name="player-name">
                                    </div>
                                    
                                </span>
                                <span class="icon div-toggle" name="player-edit-1">
                                    <img src="../assets/images/svg/ct-save.svg"/>
                                </span>
                                <span class="icon div-toggle" name="player-edit-1">
                                    <img src="../assets/images/svg/ct-close.svg"/>
                                </span>
                        </div>
                    </td>
                    <td class="player__docs">
                        <span class="icon div-toggle div-hover" name="player-pic-1">
                            <img src="../assets/images/svg/ct-photo.svg"/>
                        </span>
                        <div class="player-photo toggle-content hover-content" id="player-pic-1">
                            <div class="div-toggle div-hover" name="player-pic-1"><img src="http://www.placehold.it/100x150" /></div>
                        </div>
                        
                        <span class="icon div-hover" name="player-doc-1">
                            <img src="../assets/images/svg/ct-doc.svg"/>
                        </span>
                        <div class="player-photo hover-content" id="player-doc-1">
                            <div class="div-hover" name="player-doc-1"><img src="http://www.placehold.it/100x150" /></div>
                        </div>
                        
                    </td>
                    <td class="td__icon">
                        <a class="icon" href="player__detail.php"><img src="../assets/images/svg/ct-edit.svg"/></a>
                        <a class="icon"><img src="../assets/images/svg/ct-delete.svg"/></a>
                    </td>
                
                </tr>
                                  
                <tr>
                
                    <td>1</td>
                    <td>Kirk</td>
                    <td>Daniels</td>
                    <td>000000</td>
                    <td class="player__team">
                        <span>club/league - team name</span>
                        <span class="icon div-toggle" name="player-edit-2">
                            <img src="../assets/images/svg/ct-edit.svg"/>
                        </span>
                        <div class="toggle-content" id="player-edit-2">
                                <span class="grid">
                                    
                                    <div class="field-item text grid__quarter">
                                        <select type="text" id="team" name="team">
                                            <option>Select</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                        </select>
                                    </div>

                                    <div class="field-item text grid__quarter">
                                        <select type="text" id="team" name="team">
                                            <option>Select</option>
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
                                    
                                    <div class="field-item text grid__quarter">
                                        <input type="text" id="player-name" placeholder="Search by name" name="player-name">
                                    </div>
                                    
                                </span>
                                <span class="icon div-toggle" name="player-edit-2">
                                    <img src="../assets/images/svg/ct-save.svg"/>
                                </span>
                                <span class="icon div-toggle" name="player-edit-2">
                                    <img src="../assets/images/svg/ct-close.svg"/>
                                </span>
                        </div>
                    </td>
                    <td class="player__docs">
                        <span class="icon div-toggle div-hover" name="player-pic-2">
                            <img src="../assets/images/svg/ct-photo.svg"/>
                        </span>
                        <div class="player-photo toggle-content hover-content" id="player-pic-2">
                            <div class="div-toggle div-hover" name="player-pic-2"><img src="http://www.placehold.it/100x150" /></div>
                        </div>
                        
                        <span class="icon div-hover" name="player-doc-2">
                            <img src="../assets/images/svg/ct-doc.svg"/>
                        </span>
                        <div class="player-photo hover-content" id="player-doc-2">
                            <div class="div-hover" name="player-doc-2"><img src="http://www.placehold.it/100x150" /></div>
                        </div>
                        
                    </td>
                    <td class="td__icon">
                        <a class="icon" href="player__detail.php"><img src="../assets/images/svg/ct-edit.svg"/></a>
                        <a class="icon"><img src="../assets/images/svg/ct-delete.svg"/></a>
                    </td>
                
                </tr>
                                  
                <tr>
                
                    <td>1</td>
                    <td>Kirk</td>
                    <td>Daniels</td>
                    <td>000000</td>
                    <td class="player__team">
                        <span>club/league - team name</span>
                        <span class="icon div-toggle" name="player-edit-3">
                            <img src="../assets/images/svg/ct-edit.svg"/>
                        </span>
                        <div class="toggle-content" id="player-edit-3">
                                <span class="grid">
                                    
                                    <div class="field-item text grid__quarter">
                                        <select type="text" id="team" name="team">
                                            <option>Select</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                        </select>
                                    </div>

                                    <div class="field-item text grid__quarter">
                                        <select type="text" id="team" name="team">
                                            <option>Select</option>
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
                                    
                                    <div class="field-item text grid__quarter">
                                        <input type="text" id="player-name" placeholder="Search by name" name="player-name">
                                    </div>
                                    
                                </span>
                                <span class="icon div-toggle" name="player-edit-3">
                                    <img src="../assets/images/svg/ct-save.svg"/>
                                </span>
                                <span class="icon div-toggle" name="player-edit-3">
                                    <img src="../assets/images/svg/ct-close.svg"/>
                                </span>
                        </div>
                    </td>
                    <td class="player__docs">
                        <span class="icon div-toggle div-hover" name="player-pic-3">
                            <img src="../assets/images/svg/ct-photo.svg"/>
                        </span>
                        <div class="player-photo toggle-content hover-content" id="player-pic-3">
                            <div class="div-toggle div-hover" name="player-pic-3"><img src="http://www.placehold.it/100x150" /></div>
                        </div>
                        
                        <span class="icon div-hover" name="player-doc-3">
                            <img src="../assets/images/svg/ct-doc.svg"/>
                        </span>
                        <div class="player-photo hover-content" id="player-doc-3">
                            <div class="div-hover" name="player-doc-3"><img src="http://www.placehold.it/100x150" /></div>
                        </div>
                        
                    </td>
                    <td class="td__icon">
                        <a class="icon" href="player__detail.php"><img src="../assets/images/svg/ct-edit.svg"/></a>
                        <a class="icon"><img src="../assets/images/svg/ct-delete.svg"/></a>
                    </td>
                
                </tr>
            
            </table>
            
        </form>
        
    </div>

</section>

<!-- C. END -->
</body>
<?php include('includes/footer.inc'); ?>