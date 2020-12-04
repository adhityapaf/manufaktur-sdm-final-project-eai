<?php
session_start();
session_destroy();
?>
<html>
    <head>
        <title>Logout</title>
        <link rel="stylesheet" href="https://unpkg.com/browse/sweetalert@1.1.3/dist/sweetalert.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.18.6/dist/sweetalert2.all.min.js"></script>
    </head>
    <body>
        <script type="text/javascript">
        swal.fire({type: "success", title: "Success!", text: "Berhasil Logout!", icon: "success"}).then(function () {
            window.location = "index.html";
        });
    </script>
    </body>
</html>