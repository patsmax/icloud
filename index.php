<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iCloud Unlock</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="stylesheets/main.css">
</head>
<body>
    <div class="logo">
        <h1>
            <img src="images/ios-logo.png" alt="iOS">
            <span>iOS iCloud Unlock</span>
        </h1>
    </div>

    <div class="selector">
        <form action="">
            <input type="text" placeholder="Enter your ECID">
            <input type="text" placeholder="Enter your serial number">
            <select name="ios" id="ios">
                <option class="default" value="" disabled selected>Select your iOS version</option>
                <option value="1033">10.3.3</option>
                <option value="1100">11.0.0</option>
                <option value="1103">11.0.3</option>
                <option value="111">11.1</option>
            </select>
            <button type="submit">
                Submit
            </button>
        </form>
    </div>
</body>
</html>