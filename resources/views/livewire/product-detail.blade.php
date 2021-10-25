<div class="container">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    <div class="card">
        <div class="row">
            <div class="col-sm-6">
                <a href="/" id='back' type="button" class="btn btn-sm btn-danger"><-Back</a>
                <img class="image" src="{{ asset('storage/'.$product->gallery) }}" alt="">
            </div>
            <div class="col-sm-6">
                <div class="text">
                    <h4>{{ $product->name }}</h4>
                    <h5>Price:{{ $product->price }}$</h5>
                    <p>Category:{{ $product->category }}</p>
                    <p>{{ $product->description }}</p>
                    <a href="/addtocart/{{ $product->id }}" type="button" class="btn btn-dark">Add to Cart
                        <i class="fas fa-cart-arrow-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
    .container {
        margin-top: 100px;
    }
    .image{
        width: 250px;
        margin-left: 100px;
        padding: 20px;
    }
    .text{
        text-align: left;
        margin-top:30px;
        padding: 10px;
    }
    #back{
        margin-top: 5px;
        margin-left: 5px;
    }
</style>
