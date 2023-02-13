<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $plain_text = $_POST['plaintext'];
    $key = (int)$_POST['key'];
    $plain_arr = (str_Split($plain_text));
    $len = count($plain_arr);
    for ($i = 0; $i < $len; $i++) {
        $enc_arr[$i] = chr(ord($plain_arr[$i]) + $key);
        /*  ord() function converts characters to ascii value
            chr() function converts ascii value to respective characters
        */
    }
    $enc_text = implode($enc_arr);
}
?>


<html>

<head>
    <title>Shift Cipher Encrypter</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="top-btn m-3" style="float:right">
        <a href="decrypter.php">
            <button class="btn btn-danger rounded-pill">decrypter</button>
        </a>
    </div>
    <div class="row">
        <div class="col-3 nav">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb fs-5">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Encrypter</li>
                </ol>
            </nav>

        </div>
        <div class="col-8">
            <div class="center">
                <h2 class="m-4">
                    Shift Cipher Encrypter
                </h2>
                <form method="post">
                    <div class="form-group mt-5">
                        <label for="plaintext">Plain Text:</label>
                        <input type="text" name="plaintext" class="form-control mt-2" aria-describedby="textHelp" id="plaintext" placeholder="Enter plain text">

                    </div>
                    <div class="form-group">
                        <label for="key" class="mt-2">Key:</label>
                        <input type="number" name="key" min="1" max="25" class=" mt-2 form-control" id="key" placeholder="Enter key value">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Encrypt</button>
                </form>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    echo "<p>The encrypted text is: ";
                    echo "<i>" . $enc_text . "</i>";
                    echo "</p>";
                }

                ?>
            </div>

        </div>
    </div>

    <style>
        .nav {
            padding-left: 3%;
            padding-top: 15%;
        }

        .center {
            margin: auto;
            width: 80%;
            padding: 40px;
        }
    </style>
</body>

</html>