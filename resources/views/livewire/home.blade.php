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
.carousel-item{
    min-height: 280px;
}
.slider-img{
    height: 400px;
    padding: 50px;
    margin-left: 200px;
    
}
.carousel-inner{
    background: white;
}
#badge{
    background: #80808091;
    margin-left: 100px;
    margin-right: 100px;
}
.slider-text{
    color: white
}

</style>
</head>
<body>
<div class="container-fluid my-3">
    <div id="myCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>
        
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">

            @foreach ($products as $product)
                <div class="carousel-item {{ $product->id == 1 ?'active' : '' }}" >
                    <img class="slider-img" src="{{ $product->gallery }}" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption d-none d-md-block" id="badge">
                        <div class="slider-text">
                            <h5>{{ $product->name }}</h5>
                            <p>{{ $product->category }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <hr>
    <div>
        <div>
            <legend style="margin-left:10px;"><b>Clothes</b></legend>
        </div>
        @foreach ($products as $product)
            <div class="card">
                <div>
                    <img src="{{ $product->gallery }}" alt="">
                    <b>{{ $product->name }}</b>
                    <br>
                    <span>${{ $product->price }}</span>
                    <a href="/product_detail/{{ $product->id }}" class="btn btn-warning" type="button">detail-></a>
                </div>
            </div>
        @endforeach
    </div>
    <hr>
    
</div>
</body>
</html>

<style>
    .card{
        width: 200px;
        height: 100%;
        text-align: center;
        float: left;
        padding: 50px;
        padding-bottom: 20px;
        margin: 10px;
    }
</style>
