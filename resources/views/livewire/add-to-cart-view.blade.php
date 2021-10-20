<div>
    <div class="container">

        @foreach ($cart_items as $item)
        <div class="card">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ $item->p_img }}" alt="" class="item_img">
                </div>
                <div class="col-md-4">
                    <div class="item_text">
                        <h4>{{ $item->p_name }}</h4>
                        <b>${{ $item->p_price }}</b>
                        <button class="btn btn-danger btn-sm">-</button>
                        total-1
                        <button class="btn btn-danger btn-sm">+</button>
                        <p class="text-justify">{{ $item->p_desc }}</p>
                    </div>
                </div>
                <div class="col-md-4" id="item_btn">
                    <button  class="btn btn-warning btn-sm text-white" wire:click.prevent="buy({{ $item->id }})">
                        Buy now
                        <i class="fas fa-shopping-cart"></i>
                    </button>

                    <button  class="btn btn-danger btn-sm text-white">
                        Remove
                        <i class="fas fa-trash-alt"></i>
                    </button>

                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

<style>
    .container {
        margin-top: 40px;
    }
    .item_img{
        padding: 20px;
        height: 200px;
        margin-left: 100px;
    }
    .item_text{
        padding: 20px;
    }
    #item_btn{
        padding:20px;
        margin-top: 50px;
    }
</style>
