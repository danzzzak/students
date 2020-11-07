<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $website_title = 'PROFILE';
    require 'blocks/head.php'
    ?>
    
</head>
<body>

<?php require 'blocks/header.php'?>

<main class="container">
    <h3>ADD INFU</h3>
    <form action="" method="post">
        <label for="name">name</label>
        <input type="text" name="name" id="name" class="form-control">

        <label for="lastname">lastname</label>
        <input type="text" name="lastname" id="lastname" class="form-control">

        <label for="ngroup">ngroup</label>
        <input type="text" name="ngroup" id="ngroup" class="form-control">

        <label for="email">email</label>
        <input type="text" name="email" id="email" class="form-control">

        <label for="points">points</label>
        <input type="text" name="points" id="points" class="form-control">

        <label for="year">year</label>
        <input type="text" name="year" id="year" class="form-control">
        
        <label for="city">city</label>
        <input type="text" name="city" id="city" class="form-control">

        <button type="button" id="accept" class="btn btn-success mt-5">
            Voity
        </button>
    </form>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $('#accept').click(function () {
        const name = $('#name').val();
        const lastname = $('#lastname').val();
        const ngroup = $('#ngroup').val();
        const email = $('#email').val();
        const points = $('#points').val();
        const year = $('#year').val();
        const city = $('#city').val();
        console.log(name, lastname, email, year);

        $.ajax( {
            url: 'add_profile.php',
            type: 'POST',
            cache: false,
            data: {'name': name, 'lastname': lastname, 'ngroup': ngroup, 'email': email, 'points': points, 'year': year, 'city': city},
            dataType: 'html',
            success: function(data) {
                if (data == 'Ready') {
                    window.location.href = 'change-profile.php';
                }
                else  {console.log('OSHIBKA')}
            }
        })
    })



</script>

</body>
</html>