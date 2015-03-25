<?php include('includes/head.inc'); ?>
<?php include('includes/header.inc'); ?>
<body>
<!-- C. Main Content -->

<section id="mast" class="page__players">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Players</h1>
        
            <ul class="list navigation">
        
                <li><a href="player__add.php"><span>Add Player</span></a></li>

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
        
            <table>
            
                <tr>
                
                    <th class="header">ID</th>
                    <th class="header">Name</th>
                    <th class="header">Surname</th>
                    <th class="header">Member No.</th>
                    <th class="header">ID/Passport</th>
                    <th class="header">D.O.B.</th>
                    <th class="header">Docs</th>
                    <th class="header"></th>
                
                </tr>
                      
                <tr>
                
                    <td>1</td>
                    <td>Kirk</td>
                    <td>Daniels</td>
                    <td>00000</td>
                    <td>0000000000000</td>
                    <td>YYYY/MM/DD</td>
                    <td>
                        <a class="icon"><img src="../assets/images/svg/ct-photo.svg"/></a>
                        <a class="icon"><img src="../assets/images/svg/ct-doc.svg"/></a>
                    </td>
                    <td>
                        <a class="icon"><img src="../assets/images/svg/ct-edit.svg"/></a>
                        <a class="icon"><img src="../assets/images/svg/ct-delete.svg"/></a>
                    </td>
                
                </tr>
            
            </table>
            
        </section>
        
    </div>

</section>

<!-- C. END -->
</body>
<?php include('includes/footer.inc'); ?>