<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container">
                        <a href="" class="navbar-brand">News</a>

                        <form action="" class="d-flex">
                                <input type="text" class="form-control">
                                <input type="submit" class="btn btn-success">
                        </form>
                        <ul class="navbar-nav">
                                <li class="nav-item"><a href="{{ route('homepage')}}" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="{{ route('view')}}" class="nav-link">View</a></li>
                                <li class="nav-item"><a href="{{ route('insert')}}" class="nav-link">Insert</a></li>
                        </ul>
                </div>
        </nav>
        <h1>this is view page</h1>
</body>
</html> 