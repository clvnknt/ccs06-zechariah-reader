<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zechariah Web Reader</title>

    <style>
    .center {
        text-align: center
        }
    
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1><p class = "center">{{ $bible_version }}: {{ $book_name }}</h1></p>
    
    <p class = "center"><a href= "/">Home</a></p>

    @for($i = 1; $i <= $number_of_chapters; $i++)
    <hr><pre>@include("chapter{$i}")</pre></hr>
    @endfor

</body>
</html>