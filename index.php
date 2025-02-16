<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIG BROTHER IS WATCHING YOU</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <style>
        body {
            background-color: black;
            color: red;
            font-family: 'Courier New', monospace;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        h1 {
            font-size: 50px;
            text-transform: uppercase;
            letter-spacing: 5px;
            text-shadow: 3px 3px 5px red;
            animation: glitch 0.8s infinite;
        }
        @keyframes glitch {
            0% { text-shadow: 3px 3px 5px red; }
            50% { text-shadow: -3px -3px 5px red; }
            100% { text-shadow: 3px 3px 5px red; }
        }
        .warning {
            font-size: 22px;
            margin-top: 10px;
            text-transform: uppercase;
            font-weight: bold;
            color: white;
        }
        .container {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            border: 2px solid red;
            box-shadow: 0px 0px 20px red;
            background: rgba(255, 0, 0, 0.1);
        }
        .button {
            background-color: red;
            color: black;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }
        .button:hover {
            background-color: darkred;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>BIG BROTHER IS WATCHING YOU</h1>
        <p class="warning">Your digital footprint has been recorded.</p>
        <p>The SSID you are connected to is <b><?=getClientSSID($_SERVER['REMOTE_ADDR']);?></b></p>
        <p>Your host name is <b><?=getClientHostName($_SERVER['REMOTE_ADDR']);?></b></p>
        <p>Your MAC Address is <b><?=getClientMac($_SERVER['REMOTE_ADDR']);?></b></p>
        <p>Your internal IP address is <b><?=$_SERVER['REMOTE_ADDR'];?></b></p>
        <form method="POST" action="/captiveportal/index.php">
            <input type="hidden" name="target" value="<?=$destination?>">
            <button class="button" type="submit">Authorize</button>
        </form>
    </div>
</body>
</html>


