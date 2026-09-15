<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile</title>

    <style>
        body {
            margin: 0;
            background-color: white;
            font-family: Arial, sans-serif;
        }

        .profile {
            width: 300px;
            margin: 60px auto;
            text-align: center;
        }

        .foto {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .data {
            background-color: #d9d9d9;
            width: 210px;
            height: 33px;
            margin: 10px auto;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 21px;
            color: #222;
        }
    </style>
</head>

<body>

    <div class="profile">

        <img src="{{ asset('images/profile.jpg') }}" 
             alt="Foto Profile" 
             class="foto">

        <div class="data">
            {{ $nama }}
        </div>

        <div class="data">
            {{ $kelas }}
        </div>

        <div class="data">
            {{ $npm }}
        </div>

    </div>

</body>
</html>