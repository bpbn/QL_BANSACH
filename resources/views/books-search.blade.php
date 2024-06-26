<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('css/books-search.css')}}">
    <title>Tham khảo sách</title>
</head>
<body class="#212121 grey lighten-4">
    <div id="search" class="#f5f5f5 grey lighten-4 z-depth-5">
        <form id="myform">
            <div class="input-field">
                <input type="search" id="books">
                <label for="search">Tìm sách</label>
            </div>
            <button class="btn red">Tìm sách</button>
        </form>
    </div>

    <div id="result">

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="{{ asset('js/books-search.js')}}"></script>
    <script>
        
    </script>
    
</body>
</html>