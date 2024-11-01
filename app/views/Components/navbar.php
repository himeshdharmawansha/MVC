<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-logo">
                <img src = "..\assests\logo (1).png">
                <h2>WELLBE</h2>
            </div>
            <ul class="sidebar-menu">
                <?php
                    foreach ($elements as $key => $element) {

                        // Check if the current element matches the active element
                        $activeClass = ($element[1] === ucfirst($active)) ? 'active' : '';
                        
                        echo '<li class="' . $activeClass . '">';
                        echo   '<i class="'.$element[0].'"></i><span class="menu-text">'.$element[1].'</span>';
                        echo '</li>';
                    }
                ?>
            </ul>
        </div>
                    
    </div>
</body>
</html>
