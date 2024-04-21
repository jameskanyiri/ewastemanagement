<div>
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>List of Items</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>

                                            <th>Item Name</th>
                                            <th>Item Serial</th>
                                            <th>Manufacturer</th>
                                            <th>YOM</th>
                                            <th>Size</th>
                                            <th>Status</th>
                                            <th>Veri Date</th>

                                            @if (Auth::user()->user_type == 'official_user')
                                                <th>Action</th>
                                            @endif

                                        </tr>

                                        @foreach ($items as $item)
                                            <tr>

                                                <td>{{ $item->item_name }}</td>
                                                <td>{{ $item->serial_number }}</td>
                                                <td>{{ $item->manufacturer_name }}</td>
                                                <td>{{ $item->year_of_manufacture }}</td>
                                                <td>{{ $item->item_size }}</td>
                                                <td>
                                                    @if ($item->verification_status == false)
                                                        
                                                        <span class="badge rounded-pill bg-danger">Pending</span>
                                                    @else
                                                        
                                                        <span class="badge rounded-pill bg-success">Verified</span>
                                                    @endif
                                                </td>
                                                <td>{{ $item->verification_date ? $item->verification_date : 'Not verified' }}
                                                </td>

                                                @if (Auth::user()->user_type == 'official_user')
                                                    @if ($item->verification_status == false)
                                                        <td>
                                                            <a class="btn btn-danger btn-action mr-1"
                                                                href="{{ route('verify.item', ['serial_number' => $item->serial_number]) }}"
                                                                ></i> Verify</a>
                                                        </td>
                                                    @else
                                                        <td>
                                                            <a class="btn btn-success btn-action mr-1"
                                                                href="#"
                                                               ></i> Verified</a>
                                                        </td>
                                                    @endif
                                                @endif

                                            </tr>
                                        @endforeach

                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
