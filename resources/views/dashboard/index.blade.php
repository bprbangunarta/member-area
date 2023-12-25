@extends('templates.app')
@section('title', 'Dashboard')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-info">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Orders</p>
                                    <h4 class="my-1 text-info">1</h4>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto">
                                    <i class='bx bxs-cart'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-success">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Balance</p>
                                    <h4 class="my-1 text-success">Rp8.000</h4>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto">
                                    <i class='bx bx-dollar-circle'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-danger">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Spend</p>
                                    <h4 class="my-1 text-danger">Rp10.000</h4>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto">
                                    <i class='bx bxs-wallet'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-warning">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Producs</p>
                                    <h4 class="my-1 text-warning">10</h4>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto">
                                    <i class="bx bx-shopping-bag"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->


            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0">Recent Orders</h6>
                        </div>

                        <div class="dropdown ms-auto">
                            <a href="#">View All</a>
                        </div>
                    </div>
                    <hr>

                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-center" width="3%">Order#</th>
                                    <th class="text-center">Product / Service</th>
                                    <th class="text-center" width="7%">Photo</th>
                                    <th class="text-center" width="4%">Qty</th>
                                    <th class="text-center" width="10%">Amount</th>
                                    <th class="text-center" width="10%">Date Time</th>
                                    <th class="text-center" width="10%">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><a href="#">#ZFM-000354</a></td>
                                    <td>Jasa Download Freepik</td>
                                    <td class="text-center">
                                        <center>
                                            <img src="https://zulfame.id/wp-content/uploads/2023/12/jasa-download-freepik-premium.png"
                                                class="product-img-2" alt="product img">
                                        </center>
                                    </td>
                                    <td class="text-center">5</td>
                                    <td class="text-end">Rp10.000</td>
                                    <td class="text-center">25 Desember 2023 15:17:56</td>
                                    <td>
                                        <span class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center"><a href="#">#ZFM-000354</a></td>
                                    <td>Jasa Download Freepik</td>
                                    <td class="text-center">
                                        <center>
                                            <img src="https://zulfame.id/wp-content/uploads/2023/12/jasa-download-freepik-premium.png"
                                                class="product-img-2" alt="product img">
                                        </center>
                                    </td>
                                    <td class="text-center">5</td>
                                    <td class="text-end">Rp10.000</td>
                                    <td class="text-center">25 Desember 2023 15:17:56</td>
                                    <td>
                                        <span class="badge bg-gradient-blooker text-white shadow-sm w-100">Pending</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center"><a href="#">#ZFM-000354</a></td>
                                    <td>Jasa Download Freepik</td>
                                    <td class="text-center">
                                        <center>
                                            <img src="https://zulfame.id/wp-content/uploads/2023/12/jasa-download-freepik-premium.png"
                                                class="product-img-2" alt="product img">
                                        </center>
                                    </td>
                                    <td class="text-center">5</td>
                                    <td class="text-end">Rp10.000</td>
                                    <td class="text-center">25 Desember 2023 15:17:56</td>
                                    <td>
                                        <span class="badge bg-gradient-bloody text-white shadow-sm w-100">Failed</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
