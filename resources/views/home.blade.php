<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Practical</title>
</head>
<body>
<div>
    <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">Sweet Home</span>
    </nav>
</div>
<div class="content-wrapper" style="margin-top: 30px">
    <div class="row" >
        <div class="col-md-4">
            <div class="wrapper ">
                <!-- Sidebar -->
                <nav id="sidebar">
                    <div class="sidebar-header">
                        <h3>Menu</h3>
                    </div>

                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                                <li>
                                    <a href="#">Home 1</a>
                                </li>
                                <li>
                                    <a href="#">Home 2</a>
                                </li>
                                <li>
                                    <a href="#">Home 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li>
                                    <a href="#">Page 1</a>
                                </li>
                                <li>
                                    <a href="#">Page 2</a>
                                </li>
                                <li>
                                    <a href="#">Page 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Portfolio</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
        <div class="col-md-8">
                @foreach($part as $pa)
                <div class="col-md-4">
                    <img src="{{asset("resources/img/red-0.png")}}">
                    <p>{{$pa->name}}</p>
                    <p>{{$pa->price}}</p>
                    <p>{{$pa->adress}}</p>
                    <p>{{$pa->status}}</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset("resources/img/red-0.png")}}">
                    <p>{{$pa->name}}</p>
                    <p>{{$pa->price}}</p>
                    <p>{{$pa->adress}}</p>
                    <p>{{$pa->status}}</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset("resources/img/red-0.png")}}">
                    <p>{{$pa->name}}</p>
                    <p>{{$pa->price}}</p>
                    <p>{{$pa->adress}}</p>
                    <p>{{$pa->status}}</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset("resources/img/red-0.png")}}">
                    <p>{{$pa->name}}</p>
                    <p>{{$pa->price}}</p>
                    <p>{{$pa->adress}}</p>
                    <p>{{$pa->status}}</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset("resources/img/red-0.png")}}">
                    <p>{{$pa->name}}</p>
                    <p>{{$pa->price}}</p>
                    <p>{{$pa->adress}}</p>
                    <p>{{$pa->status}}</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset("resources/img/red-0.png")}}">
                    <p>{{$pa->name}}</p>
                    <p>{{$pa->price}}</p>
                    <p>{{$pa->adress}}</p>
                    <p>{{$pa->status}}</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset("resources/img/red-0.png")}}">
                    <p>{{$pa->name}}</p>
                    <p>{{$pa->price}}</p>
                    <p>{{$pa->adress}}</p>
                    <p>{{$pa->status}}</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset("resources/img/red-0.png")}}">
                    <p>{{$pa->name}}</p>
                    <p>{{$pa->price}}</p>
                    <p>{{$pa->adress}}</p>
                    <p>{{$pa->status}}</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset("resources/img/red-0.png")}}">
                    <p>{{$pa->name}}</p>
                    <p>{{$pa->price}}</p>
                    <p>{{$pa->adress}}</p>
                    <p>{{$pa->status}}</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset("resources/img/red-0.png")}}">
                    <p>{{$pa->name}}</p>
                    <p>{{$pa->price}}</p>
                    <p>{{$pa->adress}}</p>
                    <p>{{$pa->status}}</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset("resources/img/red-0.png")}}">
                    <p>{{$pa->name}}</p>
                    <p>{{$pa->price}}</p>
                    <p>{{$pa->adress}}</p>
                    <p>{{$pa->status}}</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset("resources/img/red-0.png")}}">
                    <p>{{$pa->name}}</p>
                    <p>{{$pa->price}}</p>
                    <p>{{$pa->adress}}</p>
                    <p>{{$pa->status}}</p>
                </div>
        @endforeach
        </div>


</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
