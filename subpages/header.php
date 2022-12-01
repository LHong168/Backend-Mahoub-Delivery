<?php 

    include_once "../include/session.php";
    include "../include/functions.inc.php";

    if (isset($_SESSION['username'])) {
        $isLogin = true;
    }
    else {
        $isLogin = false;
    }
?>

<header>
    <div class="mobile-nav">
        <img src="../media/logo/mahoubLogo3.png" alt="logo" width="15%" id="mobile-nav-logo">
        <button
        class="mobile-nav-toggle"
        aria-controls="primary-navigation"
        aria-expanded="false"
    >
        <span class="sr-only"></span>
    </button>
    </div>

    <nav class="flex">
        <ul
            id="primary-navigation"
            class="primary-navigation flex"
            data-visible="false"
        >
            <li>
                <a href="../index.html">
                    <span>HOME</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>EN</span>
                </a>
            </li>
            <li>
                <button id="dark-mode-toggle" class="dark-mode-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 496">
                        <path
                            fill="currentColor"
                            d="M8,256C8,393,119,504,256,504S504,393,504,256,393,8,256,8,8,119,8,256ZM256,440V72a184,184,0,0,1,0,368Z"
                            transform="translate(-8 -8)"
                        />
                    </svg>
                </button>
            </li>
            <?php 
                if($isLogin === true) {
                    echo "<li><a href='../subpages/profile.php'><span>PROFILE</span></a></li>";
                    echo "<li><a href='../include/logout.inc.php?check=true'><span>LOGOUT</span></a></i>";
                }
                else {
                    echo "<li><a href='login.php' class='black'><span>LOGIN</span></a></li>";
                }
            ?>
        </ul>
    </nav>
</header>