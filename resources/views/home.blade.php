<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
    <script src="{{ asset('js/jquery-3.6.4.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>
            <div>
                <input type="search" class="form-control mx-5" name="name" id="name" placeholder="Product search"/>

            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Gallery</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div id="product_list">

                </div>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('image/img1.jpg') }}" alt="" class=""/>
                        <div class="card-body">
                            <h2>product name</h2>
                            <p>TK. 600</p>
                            <a href="" class="btn btn-success">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('image/img1.jpg') }}" alt="" class=""/>
                        <div class="card-body">
                            <h2>product name</h2>
                            <p>TK. 600</p>
                            <a href="" class="btn btn-success">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('image/img1.jpg') }}" alt="" class=""/>
                        <div class="card-body">
                            <h2>product name</h2>
                            <p>TK. 600</p>
                            <a href="" class="btn btn-success">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('image/img1.jpg') }}" alt="" class=""/>
                        <div class="card-body">
                            <h2>product name</h2>
                            <p>TK. 600</p>
                            <a href="" class="btn btn-success">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        $(document).ready(function(){
            $('#name').on('keyup', function(){
                var value = $(this).val();
                $.ajax({
                    url:"{{ route('search') }}",
                    type:'GET',
                    data:{'name':value},
                    success:function(data){
                        $("#product_list").html(data);
                    }
                });
            });
        });
    </script>
</body>
</html>
