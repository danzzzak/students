
<?php $profile = 'profile.php';
if ($_COOKIE['username'] != '')  $profile = 'change-profile.php' 
?>
<header>
    <div class="container-flex">
        <button>
            <a href="index.php">Главная(список студентов)</a>
        </button>
        <button>
            <a href="<?=$profile ?>">О себе</a>
        </button>
    </div>
</header>