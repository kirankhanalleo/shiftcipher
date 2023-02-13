<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cipher_text = $_POST['ciphertext'];
    $key = (int)$_POST['key'];
    $cipher_arr = (str_Split($cipher_text));
    $len = count($cipher_arr);
    for ($i = 0; $i < $len; $i++) {
        $dec_arr[$i] = chr(ord($cipher_arr[$i]) - $key);
        /*  ord() function converts characters to ascii value
            chr() function converts ascii value to respective characters
        */
    }
    $dec_text = implode($dec_arr);
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
        <a href="encrypter.php">
            <button class="btn btn-primary rounded-pill">encrypter</button>
        </a>
    </div>
    <div class="row">
        <div class="col-3 nav">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb fs-5">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Decrypter</li>
                </ol>
            </nav>

        </div>
        <div class="col-8">
            <div class="center">
                <h2 class="m-4">
                    Shift Cipher Decrypter
                </h2>
                <form method="post">
                    <div class="form-group mt-5">
                        <label for="plaintext">Cipher Text:</label>
                        <input type="text" name="ciphertext" class="form-control mt-2" aria-describedby="textHelp" id="ciphertext" placeholder="Enter cipher text">

                    </div>
                    <div class="form-group">
                        <label for="key" class="mt-2">Key:</label>
                        <input type="number" name="key" min="1" max="25" class=" mt-2 form-control" id="key" placeholder="Enter key value">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Decrypt</button>
                </form>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    echo "<p>The decrypted text is: ";
                    echo "<i>" . $dec_text . "</i>";
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