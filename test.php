<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/socket.io-client@2.3.0/dist/socket.io.slim.js"></script>
</head>

<body>

    <script>
        ioClient = io.connect('http://localhost:3002')
        ioClient.on('connect', socket => {
            ioClient.send('hello world')
            ioClient.on('message', msg => console.log(msg))
        })
    </script>
</body>

</html>