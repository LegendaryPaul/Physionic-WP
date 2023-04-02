


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physionic Website</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
    <body> 
        <div class="bannerBg">
            <header class="header py--2">
                <div class="container">
                    <div class="header__wrapper d--flex align--center justify--between">
                        <h2 class="text--light">Physionic</h2>

                        <nav class="nav">
                            <ul>
                                <?php wp_menu_li();?>
                            </ul>
                        </nav>

                        <div class="toggle__menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
        
                    </div>
                </div>
            </header>