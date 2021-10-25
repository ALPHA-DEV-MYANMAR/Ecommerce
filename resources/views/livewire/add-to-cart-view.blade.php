<div>
    
    <div class="container">

        @foreach ($cart_items as $item)
        <form wire:submit.prevent='/buy/{{ $item->id }}'>
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $item->p_img) }}" alt="" class="item_img">
                    </div>
                    <div class="col-md-4">
                        <div class="item_text">
                            <h4>{{ $item->p_name }}</h4>
                            <b>${{ $item->p_price }}</b>
                            <p class="text-justify">{{ $item->p_desc }}</p>
                        </div>
                    </div>
                    <div class="col-md-4" id="item_btn">
                        <a href="/buy/{{ $item->id }}" wire:model.prevent='price({{ $item->p_price }})' type="submit" class="btn btn-warning btn-sm">
                            Buy now
                        </a>
                        <a href="/remove/{{ $item->id }}" type="button" class="btn btn-danger btn-sm">
                            Remove now
                        </a>
                    </div>
                </div>
            </div>
        </form>
        @endforeach

    </div>
</div>


<style>
    .container {
        margin-top: 100px;
    }

    .item_img {
        padding: 20px;
        height: 200px;
        margin-left: 100px;
    }

    .item_text {
        padding: 20px;
    }

    #item_btn {
        padding: 20px;
        margin-top: 50px;
    }

</style>
