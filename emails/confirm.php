<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
</head>
<script src="../assets/js/sweetalert.js"></script>
<body>
    <script text="text/javascript" >
        Swal.fire({
            icon: 'success',
            title: 'Email enviado com sucesso',
        }).then(function() {
            location.href="../index.php"
        });
        </script>
</body>
</html>