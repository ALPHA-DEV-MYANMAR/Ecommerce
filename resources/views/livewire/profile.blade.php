<div>
    <div class="container">

        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form wire:submit.prevent='add_cat' wire:keydown.enter='add_cat'>
                        <div id="form">
                            <i>Add a new Category</i> <br>
                            Enter New Category Name:
                            <input type="text" wire:model="new_category" class="form-control">
                            @error('new_category')
                                <span class="error text-danger text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div id="form">
                            <button type="submit" class="btn btn-dark">
                                Add
                            </button>
                        </div>
                        <div id="form">
                            Exiting Category: <br>
                            @foreach ($show_category as $category)
                                <span class="badge rounded-pill bg-primary">
                                    {{ $category->name }}
                                </span>
                            @endforeach
                        </div>
                    </form>
                </div>
                <div class="card">
                    <form wire:submit.prevent='update'>

                        <div id="form">
                            <i>Use Account Control</i> <br>
                            <label for="">Email:</label>
                            <input type="email" value="{{ $email }}" wire:model='email' class="form-control">
                            @error('email')
                                <span class="error text-danger  text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div id="form">
                            <label for="">Username:</label>
                            <input type="text" value="{{ $username }}" wire:model='username' class="form-control">
                            @error('username')
                                <span class="error text-danger  text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div id="form">
                            <button class="btn btn-dark" type="submit">Update</button>
                            <a href="deleteaccount/{{ Auth::user()->id }}" class="btn btn-danger" type="button">Delete
                                Account</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <form wire:submit.prevent="save">
                        <div id="form">
                            <i>Create a Product</i> <br>
                            Product Image: <br>
                            <input type="file" class="form-control" wire:model="photo">
                            @error('photo') <span class="error text-danger  text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div id="form">
                            @if ($photo)
                                Photo Preview:
                                <img src="{{ $photo->temporaryUrl() }}"
                                    style="width: 200px; height:150px; margin:10px">
                            @endif
                        </div>
                        <div id="form">
                            Product Name:
                            <input type="text" class="form-control" wire:model="name">
                            @error('name') <span class="error text-danger text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div id="form">
                            Product Price:
                            <input type="text" class="form-control" wire:model="price">
                            @error('price') <span class="error text-danger text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div id="form">
                            Product Description:
                            <textarea class="form-control" rows="3" wire:model="description"></textarea>
                            @error('description') <span class="error text-danger text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- For Category --}}
                        <div id="form">
                            Choose Category: <br>
                            <select class="form-select" aria-label="Select Category" wire:model="category">
                                <option selected>Select</option>
                                @foreach ($show_category as $category)
                                    <option>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div id="form">
                            <button class="btn btn-dark" type="submit">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .container {
        margin: 100px;
    }

    #form {
        padding: 10px;
    }

</style>
