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
    
    <h1><p class = "center">{{ $bible_version }}: {{ $book_name }}</h1>
    <a href= "/"><p class = "center">Home</a>
    <a href= "/all-chapters">Read All Chapters</a>
    <br><a href= "/chapter/1">Chapter 1</a>
    <a href= "/chapter/2">Chapter 2</a>
    <a href= "/chapter/3">Chapter 3</a>
    <a href= "/chapter/4">Chapter 4</a>
    <a href= "/chapter/5">Chapter 5</a>
    <a href= "/chapter/6">Chapter 6</a>
    <a href= "/chapter/7">Chapter 7</a>
    <a href= "/chapter/8">Chapter 8</a>
    <a href= "/chapter/9">Chapter 9</a>
    <a href= "/chapter/10">Chapter 10</a>
    <a href= "/chapter/11">Chapter 11</a> 
    <a href= "/chapter/12">Chapter 12</a>
    <a href= "/chapter/13">Chapter 13</a>
    <a href= "/chapter/14">Chapter 14</a>

    <hr><pre>@include("chapter" . $chapter_number)</pre>

</body>
</html>