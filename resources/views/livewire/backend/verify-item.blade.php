<div>
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form action="" wire:submit='findItem'>
                                <div class="card-header">
                                    <h4>Verify Item</h4>
                                </div>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label>Item name</label>
                                        <input type="text" class="form-control" wire:model="serial_number">
                                        <div class="text-danger">
                                            @error('serial_number')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    @if ($is_item_found == 'not_found')
                                        <p>no item found</p>
                                    @endif

                                    @if ($is_item_found == 'found')
                                        <div class="">
                                            <div class="card-header">
                                                <h4>Item Details</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="py-4">
                                                    <p class="clearfix">
                                                        <span class="float-left">
                                                            Item Name
                                                        </span>
                                                        <span class="float-right text-muted">
                                                            {{ $item->item_name }}
                                                        </span>
                                                    </p>
                                                    <p class="clearfix">
                                                        <span class="float-left">
                                                            Serial Number
                                                        </span>
                                                        <span class="float-right text-muted">
                                                            {{ $item->serial_number }}
                                                        </span>
                                                    </p>
                                                    <p class="clearfix">
                                                        <span class="float-left">
                                                            Manufacturer Name
                                                        </span>
                                                        <span class="float-right text-muted">
                                                            {{ $item->manufacturer_name }}
                                                        </span>
                                                    </p>
                                                    <p class="clearfix">
                                                        <span class="float-left">
                                                            Year of Manufacturer
                                                        </span>
                                                        <span class="float-right text-muted">
                                                            {{ $item->year_of_manufacture }}
                                                        </span>
                                                    </p>
                                                    <p class="clearfix">
                                                        <span class="float-left">
                                                            Item Size
                                                        </span>
                                                        <span class="float-right text-muted">
                                                            {{ $item->item_size }}
                                                        </span>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    @endif


                                </div>
                                <div class="card-footer text-right">
                                    @if ($is_item_found == 'not_found' || $is_item_found == null)
                                        <button class="btn btn-primary mr-1" type="submit">Find item to verify</button>
                                    @endif
                                    @if ($is_item_found == 'found')
                                        <button class="btn btn-primary mr-1" type="button" wire:click="verifyItem">Verify</button>
                                    @endif

                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </section>

    </div>
</div>
