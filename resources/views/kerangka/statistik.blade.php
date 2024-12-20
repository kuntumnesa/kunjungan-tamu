<!-- Area Chart -->
    <div class="col-xl-10 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Statistik Pengunjung</h6>
                <div class="dropdown no-arrow">
                    {{-- <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a> --}}
                    {{-- <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div> --}}
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class></div>
                        </div>
                    </div>
                    <canvas id="myAreaChart" width="600" height="320" style="display: block; width: 600px; height: 320px;" class="chartjs-rendor-monitor"></canvas>
                </div>
            </div>
        </div>
    </div>