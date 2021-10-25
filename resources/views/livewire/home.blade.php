<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Carousel Dark Variant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Custom style to prevent carousel from being distorted 
   if for some reason image doesn't load */
        .carousel-item {
            min-height: 280px;
        }

        .slider-img {
            height: 400px;
            padding: 50px;
            margin-left: 200px;

        }

        .carousel-inner {
            background: white;
            height: 500px;
        }

        #badge {
            background: #80808091;
            margin-left: 100px;
            margin-right: 100px;
        }

        .slider-text {
            color: white
        }

        .card {
            width: 200px;
            height: 300px;
            text-align: center;
            float: left;
            padding: 10px;
            padding-bottom: 20px;
            margin: 10px;
        }

        .search {
            position: fixed;
            z-index: 999;
            opacity: 1;
        }

        body {
            margin-top: 65px;
        }

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="search">
                    <div class="card">
                        <div>
                            <b>All Categorys </b>
                        </div>
                        @foreach ($categorys as $category)
                            <a href="/search/{{ $category->name }}" style="text-align: left" type="button" class="btn btn-secondary btn-sm mt-2">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @foreach ($products as $product)
                    <div class="card">
                        <div>
                            <img style="width: 200px; height:150px;padding:20px" src="{{ 'storage/' . $product->gallery }}" alt="">
                            <b>{{ $product->name }}</b>
                            <br>
                            <span>${{ $product->price }}</span>
                            <br>
                            <a href="/product_detail/{{ $product->id }}"  class="btn btn-info text-white btn-sm"
                                type="button">show more</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</body>

</html>
