<div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                If you want to upload a new product. <br>
                <b>But product image size is match be width-100px and height-100px.</b>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <form wire:submit.prevent="save">
                        <div id="form">
                            Product Name:
                            <input type="text" class="form-control">
                        </div>
                        <div id="form">
                            Product Price:
                            <input type="text" class="form-control">
                        </div>
                        <div id="form">
                            Product Description:
                            <textarea class="form-control" rows="3" ></textarea>
                        </div>
                        <div id="form">
                            Product Image: <br>
                            <input type="file" class="form-control">
                        </div>
                        <div id="form">
                            <a href="" type="button" class="btn btn-primary">submit</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .container{
        margin: 40px;
    }
    #form{
        padding: 10px;
    }
</style>

