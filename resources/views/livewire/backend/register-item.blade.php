<div>
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form action="" wire:submit='createItem'>
                                <div class="card-header">
                                    <h4>Register new item</h4>
                                </div>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label>Item name</label>
                                        <input type="text" class="form-control" wire:model="item_name">
                                        <div class="text-danger">
                                            @error('item_name')
                                                {{ $message }}
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label>Serial Number</label>
                                        <input type="text" class="form-control" wire:model="serial_number">
                                        <div class="text-danger">
                                            @error('serial_number')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Manufacturer</label>
                                        <input type="text" class="form-control" wire:model="manufacturer_name">
                                        <div class="text-danger">
                                            @error('manufacturer_name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Year of Manufacturer</label>
                                        <input type="text" class="form-control" wire:model="year_of_manufacture">
                                        <div class="text-danger">
                                            @error('year_of_manufacture')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Item size</label>
                                        <select class="form-control" aria-label="Default select example"
                                            wire:model="item_size">
                                            <option selected>Select item size</option>
                                            <option value="small">Small</option>
                                            <option value="medium">Medium</option>
                                            <option value="large">Large</option>
                                        </select>

                                        <div class="text-danger">
                                            @error('item_size')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Save</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </section>

    </div>
</div>
