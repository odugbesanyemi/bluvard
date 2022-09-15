<?php 
function pageHeader($title,$description){
    echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta name='author' content='Tecxha IT Solutions'>
            <meta name='description' content='$description'>
            <title>$title</title>
            <link rel='stylesheet' href='../css/style.css'>
            <link rel='stylesheet' href='../css/pages.css'>
            <link rel='stylesheet' href='../css/animation.css'>
            <link rel='stylesheet' href='../assets/mklb/css/mklb.css' />
            <link rel='shortcut icon' href='../assets/logos/BLUVARD_FAVICON.svg' type='image/x-icon'>
            <link rel='stylesheet' href='../slick-1.8.1/slick/slick-theme.css'>
            <link rel='stylesheet' href='../slick-1.8.1/slick/slick.css'>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
                integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
        </head>
        <body>
        <div class='page-head about-img'>
            <nav class='navbar navbar-expand-lg navbar-dark heading p-0'>
                <div class='container'>
                    <a href='../'>
                        <div class='navbar-brand d-flex align-items-center p-0'><img
                                src='../assets/logos/Bluvard_svg_logo_footer.svg' alt='' width='50'>
                            <p class='ps-2 fw-bold text-white mb-0 py-4'>Bluvard Education Initiative</p>
                        </div>
                    </a>
                    <button class='navbar-toggler border-0 shadow-none text-dark' type='button' data-bs-toggle='collapse'
                        data-bs-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false'
                        aria-label='Toggle navigation'>
                        <span class='navbar-toggler-icon'></span>
                    </button>
                    <div class='collapse navbar-collapse align-items-center' id='navbarNavAltMarkup'>
                        <div class='d-flex text-white mb-4 justify-content-end d-md-none'>
                            <!-- close btn -->
                            <i class='fa fa-times bg-danger p-2 rounded' aria-hidden='true' id='closeBtn'
                                onclick='closeFunction(`#closeBtn`,`#navbarNavAltMarkup`)'></i>
                        </div>
                        <div class='navbar-nav '>
                            <a class='nav-link' href='../'>Home</a>
                            <li class='nav-item dropdown'>
                                <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button'
                                    data-bs-toggle='dropdown' aria-expanded='false'>About Us</a>
                                <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                                    <li><a class='dropdown-item' href='../pages/about'>Who we are</a></li>
                                    <li><a class='dropdown-item' href='../pages/our_people'>Our Team</a>
                                    <li><a class='dropdown-item' href='#'>Our Theory for Change</a></li>
                                </ul>
                            </li>
                            <li class='nav-item dropdown'>
                                <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button'
                                    data-bs-toggle='dropdown' aria-expanded='false'>Programmes</a>
                                <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                                    <li><a class='dropdown-item' href='/pages/digital_rural'>Digital Rural</a></li>
                                    <li><a class='dropdown-item' href='#'>Center For Education(CELLS)</a></li>
                                    <li><a class='dropdown-item' href='/pages/rural_heroes'>Rural Heroes</a></li>
                                </ul>
                            </li>
                            <a class='nav-link' href='/pages/event'>Events</a>
                            <a class='nav-link' href='/pages/blog'>Blog</a>
                            <a class='nav-link' href='/pages/gallery'>Gallery</a>
                            <a class='nav-link' href='/pages/contact'>Contact</a>
                        </div>
                        <a href='../pages/contact' class='ms-auto'>
                                <button type='button'
                                    class='btn btn-danger my-3 my-md-0'
                                    id='volunteerBtn'> Donate <i class='fa fa-life-buoy ms-2' aria-hidden='true'></i>
                                </button>
                            </a>                 
                    </div>
                </div>
            </nav>
    ";

}
?>
