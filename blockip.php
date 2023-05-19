<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Blocker</title>
</head>

<body>

    <style>
        body {
            /* font-family: cursive, Arial, Helvetica, sans-serif; */
            background-color: #f0f0f0;
        }

        .good {
            background-color: #19d820;
        }

        .error {
            background-color: #d81919;
        }

        .good,
        .error {
            padding: 10px;
            color: white;
            font-size: 2rem;
            text-align: center;
            position: fixed;
            top: 50%;
            left: 50%;
            translate: -50%;
            width: 90%;
            border-radius: 3rem;
        }

        p {
            font-size: 1.5rem;
        }
    </style>

    <?php

    $blocked_ips = array(
        "102.120.0.0",
        "102.130.248.0",
        "102.143.128.0",
        "102.181.0.0",
        "102.216.88.0",
        "102.218.68.0",
        "102.218.99.0",
        "102.220.152.0",
        "105.238.0.0",
        "154.96.0.0",
        "155.196.0.0",
        "196.1.192.0",
        "196.202.128.0",
        "196.202.130.0",
        "196.223.152.0",
        "196.223.20.0",
        "196.29.160.0",
        "196.49.66.0",
        "197.208.0.0",
        "197.251.0.0",
        "197.251.39.0",
        "197.252.0.0",
        "197.254.192.0",
        "212.0.128.0",
        "41.202.160.0",
        "41.209.64.0",
        "41.218.0.0",
        "41.218.8.0",
        "41.223.160.0",
        "41.223.200.0",
        "41.240.0.0",
        "41.67.0.0",
        "41.78.108.0",
        "41.95.0.0",
        "62.12.96.0",
        "85.255.21.0",
        "102.127.255.255",
        "102.130.255.255",
        "102.143.255.255",
        "102.181.223.255",
        "102.216.91.255",
        "102.218.71.255",
        "102.218.99.255",
        "102.220.155.255",
        "105.239.255.255",
        "154.103.255.255",
        "155.196.255.255",
        "196.1.255.255",
        "196.202.128.255",
        "196.202.159.255",
        "196.223.159.255",
        "196.223.20.255",
        "196.29.191.255",
        "196.49.66.255",
        "197.209.255.255",
        "197.251.37.255",
        "197.251.127.255",
        "197.252.255.255",
        "197.254.255.255",
        "212.0.159.255",
        "41.202.191.255",
        "41.209.127.255",
        "41.218.0.255",
        "41.218.63.255",
        "41.223.163.255",
        "41.223.203.255",
        "41.241.255.255",
        "41.67.63.255",
        "41.78.111.255",
        "41.95.255.255",
        "62.12.111.255",
        "85.255.21.255",
    );

    $sudan = $_SERVER['REMOTE_ADDR'];

    if (in_array($sudan, $blocked_ips)) {
        header("HTTP/1.0 403 Forbidden");
        exit("<div class='error'>Access Denied</div>");
    } else {
        echo "<div class='good'>Opened</div>";
    }
    ?>


    <p>This is just a simple website to test if you are living
        in sudan and then we will preventing you
        from accessing to our website.
    </p>

    <div>
        <strong>
            <?php
            echo "Your IP is: " . $sudan;
            ?>
        </strong>
    </div>

</body>

</html>