<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <link rel="stylesheet" href="../Test/style.css">
</head>

<body>
    <div class="login">
        <div class="top">
            <p>Form</p>
        </div>
        <div class="center">
            <form action="{{ route('content') }}" method="POST">
                @csrf
                <div>
                    <input type="text" placeholder="Enter your Name" name="name" class="eml" id="email">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
                <br>
                <div>
                    <input type="url" placeholder="Add your Homepage" name="url" class="psd" id="pxd">
                    @error('url')
                        {{ $message }}
                    @enderror
                </div>
                <br>
                <div>
                    <button type="submit">Log In</button>
                </div>
                <div>
                    <p id="txt"></p>
                </div>
                <div>
                    <p id="tst"></p>
                </div>
        </div>
        <div class="bottom">
            <p>Contact: clementudoma6@gmail.com</p>
        </div>
    </div>
    </form>
    </div>



</body>

</html>
