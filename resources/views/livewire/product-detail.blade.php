<div class="container">

    <div class="card">
        <div class="row">
            <div class="col-sm-6">
                <a href="/" id='back' type="button" class="btn btn-sm btn-danger"><-Back</a>
                <img class="image" src="{{ $product->gallery }}" alt="">
            </div>
            <div class="col-sm-6">
                <div class="text">
                    <h4>{{ $product->name }}</h4>
                    <h5>Price:{{ $product->price }}$</h5>
                    <p>Category:{{ $product->category }}</p>
                    <p>{{ $product->description }}</p>
                    <a href="" type="button" class="btn btn-dark">Add to Cart</a>
                    <a href="" type="button" class="btn btn-success">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
    .container {
        margin-top: 40px;
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
