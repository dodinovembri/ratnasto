@extends('layouts.backend')

@section('content')

    @include('backend.components.sidebar')

    <div class="content content-page">

      @include('backend.components.header')

      <div class="content-header justify-content-between">
        <div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Pages</a></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Analytics &amp; Monitoring</li>
            </ol>
          </nav>
          <h4 class="content-title content-title-xs">Welcome to Dashboard</h4>
        </div>
        <div class="d-none d-sm-flex">
          <a href="" class="btn btn-white"><i data-feather="share-2" class="svg-14"></i> Share</a>
          <a href="" class="btn btn-brand-01 mg-l-5"><i data-feather="save" class="svg-14"></i> Save</a>
        </div>
      </div><!-- content-header -->
      <div class="content-body">
        <div class="row row-sm">
          <div class="col-xl-8">
            <div class="card card-hover card-analytics-one">
              <div class="card-body">
                <div class="row row-sm">
                  <div class="col-sm-8 col-md-8">
                    <label class="tx-medium tx-14 tx-color-01 mg-b-2">Organic Visits &amp; Conversions</label>
                    <p class="tx-12 tx-color-03 mg-b-20">Detailed breakdown is available on your report page. <a href="" class="link-05">Learn more</a></p>
                    <div class="chart-wrapper">
                      <div id="flotChart" class="flot-chart"></div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-4 mg-t-15 mg-sm-t-0">
                    <div class="d-flex mg-b-20">
                      <select class="custom-select custom-select-sm tx-12">
                        <option selected="">Last 30 days</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                      <button class="btn btn-secondary btn-xs btn-icon pd-y-0 mg-l-5 flex-shrink-0"><i data-feather="download"></i></button>
                    </div>
                    <label class="content-label content-label-xs">Conversion Rate</label>
                    <div class="d-flex align-items-baseline mg-b-5">
                      <h2 class="card-value mg-b-0">3.80<span>%</span></h2>
                      <span class="card-value-sub tx-success"><i class="icon ion-android-arrow-up"></i> 40.7%</span>
                    </div>
                    <div class="progress progress-value">
                      <div class="progress-bar wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="card-value-desc">Measures the ratio of a website’s visitors to conversions.</p>

                    <hr class="mg-y-10 op-0">

                    <label class="content-label content-label-xs">Conversion Value</label>
                    <div class="d-flex align-items-baseline mg-b-5">
                      <h2 class="card-value mg-b-0"><span>$</span>1,368</h2>
                      <span class="card-value-sub tx-pink"><i class="icon ion-android-arrow-down"></i> 0.12%</span>
                    </div>
                    <div class="progress progress-value">
                      <div class="progress-bar bg-brand-02 wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="card-value-desc">Refers to the financial worth of the securities obtained.</p>

                  </div><!-- col -->
                </div><!-- row -->
              </div>
              <div class="card-footer bg-transparent">
                <div class="row no-gutters">
                  <div class="col-6 col-sm">
                    <div class="d-flex align-items-baseline mg-b-5">
                      <h4 class="tx-numeric tx-normal"><span>$</span>134.10</h4>
                      <span class="card-value-sub tx-success"><i class="icon ion-android-arrow-up"></i> 3.8%</span>
                    </div>
                    <label class="content-label content-label-xs">Total Cost</label>
                  </div><!-- col -->
                  <div class="col-6 col-sm">
                    <div class="d-flex align-items-baseline mg-b-5">
                      <h4 class="tx-numeric tx-normal">874</h4>
                      <span class="card-value-sub tx-danger"><i class="icon ion-android-arrow-down"></i> 0.3%</span>
                    </div>
                    <label class="content-label content-label-xs">Impressions</label>
                  </div><!-- col -->
                  <div class="col-6 col-sm mg-t-15 mg-sm-t-0">
                    <div class="d-flex align-items-baseline mg-b-5">
                      <h4 class="tx-numeric tx-normal">30</h4>
                      <span class="card-value-sub tx-danger"><i class="icon ion-android-arrow-down"></i> 0.2%</span>
                    </div>
                    <label class="content-label content-label-xs">Total Clicks</label>
                  </div><!-- col -->
                  <div class="col-6 col-sm mg-t-15 mg-sm-t-0">
                    <div class="d-flex align-items-baseline mg-b-5">
                      <h4 class="tx-numeric tx-normal">4.8%</h4>
                      <span class="card-value-sub tx-success"><i class="icon ion-android-arrow-up"></i> 0.3%</span>
                    </div>
                    <label class="content-label content-label-xs">Click-Through Rate</label>
                  </div><!-- col -->
                  <div class="col-6 col-sm mg-t-15 mg-sm-t-0">
                    <div class="d-flex align-items-baseline mg-b-5">
                      <h4 class="tx-numeric tx-normal"><span>$</span>3.28</h4>
                      <span class="card-value-sub tx-danger"><i class="icon ion-android-arrow-down"></i> 1.1%</span>
                    </div>
                    <label class="content-label content-label-xs">Cost Per Click</label>
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-5 col-lg-6 col-xl-4 mg-t-15 mg-sm-t-20 mg-xl-t-0">
            <div class="card card-hover card-analytics-two">
              <div class="card-header bg-transparent">
                <h6 class="card-title mg-b-0">Browser Usage</h6>
                <nav class="nav nav-card-icon">
                  <a href=""><i data-feather="refresh-ccw"></i></a>
                  <a href=""><i data-feather="printer"></i></a>
                  <a href=""><i data-feather="more-horizontal"></i></a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div class="list-group-icon bg-orange tx-white"><i class="fab fa-firefox"></i></div>
                    <div class="list-body">
                      <h6>Mozilla Firefox</h6>
                      <span>Mozilla Foundation, Inc.</span>
                    </div>
                    <div class="list-visit">76,909</div>
                    <div class="list-rate tx-success"><i class="icon ion-android-arrow-up"></i>36.76%</div>
                  </li>
                  <li class="list-group-item">
                    <div class="list-group-icon bg-primary tx-white"><i class="fab fa-chrome"></i></div>
                    <div class="list-body">
                      <h6>Google Chrome</h6>
                      <span>Google LLC, Inc.</span>
                    </div>
                    <div class="list-visit">64,363</div>
                    <div class="list-rate tx-danger"><i class="icon ion-android-arrow-down"></i>28.93%</div>
                  </li>
                  <li class="list-group-item">
                    <div class="list-group-icon bg-danger tx-white"><i class="fab fa-opera"></i></div>
                    <div class="list-body">
                      <h6>Opera</h6>
                      <span>Opera Software</span>
                    </div>
                    <div class="list-visit">33,978</div>
                    <div class="list-rate tx-success"><i class="icon ion-android-arrow-up"></i>16.84%</div>
                  </li>
                  <li class="list-group-item">
                    <div class="list-group-icon bg-blue tx-white"><i class="fab fa-edge"></i></div>
                    <div class="list-body">
                      <h6>Internet Explorer</h6>
                      <span>Microsoft Corporation</span>
                    </div>
                    <div class="list-visit">3,946</div>
                    <div class="list-rate tx-success"><i class="icon ion-android-arrow-up"></i>1.76%</div>
                  </li>
                  <li class="list-group-item">
                    <div class="list-group-icon bg-green tx-white"><i class="fab fa-android"></i></div>
                    <div class="list-body">
                      <h6>Android Browser</h6>
                      <span>Google LLC, Inc.</span>
                    </div>
                    <div class="list-visit">1,786</div>
                    <div class="list-rate tx-danger"><i class="icon ion-android-arrow-down"></i>0.88%</div>
                  </li>
                  <li class="list-group-item">
                    <div class="list-group-icon bg-indigo tx-white"><i class="fab fa-edge"></i></div>
                    <div class="list-body">
                      <h6>Edge</h6>
                      <span>Microsoft Corporation</span>
                    </div>
                    <div class="list-visit">338</div>
                    <div class="list-rate tx-success"><i class="icon ion-android-arrow-up"></i>0.16%</div>
                  </li>
                </ul>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-7 col-lg-6 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-chart-two">
              <div class="card-header bg-transparent bd-b-0">
                <h1 class="card-value">8,217.34<span>usd</span></h1>
                <p class="card-value-label">Your Earnings</p>
                <p class="tx-color-03">Your sales and referral earnings over the last 30 days</p>
                <p class="tx-11 tx-gray-500 mg-b-20">This does not show transactions affecting your deposits balance. Detailed breakdown is available on your statement page.</p>
                <a href="" class="btn btn-xs btn-brand-01">View Statements</a>
              </div><!-- card-header -->

              <nav class="nav nav-card-icon">
                <a href=""><i data-feather="refresh-ccw"></i></a>
                <a href=""><i data-feather="printer"></i></a>
                <a href=""><i data-feather="more-horizontal"></i></a>
              </nav>

              <div class="card-body">
                <div class="chart-wrapper">
                  <div id="flotChart4" class="flot-chart"></div>
                </div><!-- chart-wrapper -->
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-12 col-xl-6 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-chart-three">
              <div class="card-header bg-transparent pd-lg-y-15">
                <h6 class="card-title mg-b-0">Sales Revenue</h6>
                <nav class="nav nav-card-icon">
                  <a href=""><i data-feather="refresh-ccw"></i></a>
                  <a href=""><i data-feather="printer"></i></a>
                  <a href=""><i data-feather="more-horizontal"></i></a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body">
                <div class="card-chart-header">
                  <div class="chart-legend">
                    <label><span class="bg-blue"></span> Online</label>
                    <label><span class="bg-green"></span> Offline</label>
                  </div>
                  <div class="btn-group">
                    <button class="btn btn-white btn-xs">Day</button>
                    <button class="btn btn-white btn-xs">Week</button>
                    <button class="btn btn-white btn-xs active">Month</button>
                  </div><!-- btn-group -->
                </div><!-- card-chart-header -->

                <div class="chart-wrapper"><canvas id="chartBar1"></canvas></div>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-md-4 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-chart-one">
              <div class="card-header bg-transparent pd-b-0 bd-b-0">
                <h6 class="card-title mg-b-0">Number of Sales</h6>
                <nav class="nav">
                  <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div>
              <div class="card-body pd-t-0">
                <div>
                  <h1 class="card-value">823</h1>
                  <div class="d-flex align-items-center tx-teal">
                    <i data-feather="arrow-up-circle" class="svg-12 fill-teal"></i>
                    <span class="mg-l-5 tx-numeric tx-11">31.82%</span>
                  </div>
                </div>
                <div id="flotChart2" class="flot-chart"></div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-md-4 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-chart-one">
              <div class="card-header bg-transparent pd-t-15 pd-l-20 pd-r-15 pd-b-0 bd-b-0">
                <h6 class="card-title mg-b-0">Total Revenue</h6>
                <nav class="nav">
                  <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div>
              <div class="card-body pd-t-0">
                <div>
                  <h1 class="card-value"><span>$</span>180k</h1>
                  <div class="d-flex align-items-center tx-danger">
                    <i data-feather="arrow-down-circle" class="svg-12 fill-pink"></i>
                    <span class="mg-l-5 tx-numeric tx-11">10.74%</span>
                  </div>
                </div>
                <div id="flotChart3" class="flot-chart"></div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-md-4 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-chart-one">
              <div class="card-header bg-transparent pd-t-15 pd-l-20 pd-r-15 pd-b-0 bd-b-0">
                <h6 class="card-title mg-b-0">Total Profit</h6>
                <nav class="nav">
                  <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div>
              <div class="card-body pd-t-0">
                <div>
                  <h1 class="card-value"><span>$</span>39,020</h1>
                  <div class="d-flex align-items-center tx-teal">
                    <i data-feather="arrow-up-circle" class="svg-12 fill-teal"></i>
                    <span class="mg-l-5 tx-numeric tx-11">28.68%</span>
                  </div>
                </div>
                <div id="flotChart1" class="flot-chart"></div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-6 col-xl-4 mg-t-15 mg-sm-t-20 order-md-1 order-xl-0">
            <div class="card card-hover card-chart-one ht-md-100p">
              <div class="card-header bg-transparent pd-b-15-f bd-b-0">
                <div>
                  <h6 class="card-title mg-b-0">Daily Sales Quota</h6>
                </div>
                <nav class="nav">
                  <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div>
              <div class="card-body pd-t-0 d-block">
                <div class="d-flex align-items-center justify-content-between mg-b-10">
                  <p class="tx-11 tx-color-03 mg-b-0">Today, July 31, 2019</p>
                  <div class="chart-legend">
                    <label><span class="bg-brand-01"></span> Goal reached</label>
                  </div>
                </div>
                <div id="flotChart5" class="flot-chart-two"></div>
              </div><!-- card-body -->
              <div class="card-footer bg-transparent pd-y-15 pd-x-20">
                <div class="row row-sm tx-13">
                  <div class="col">
                    <label class="tx-13 mg-b-3">Sales Goal</label>
                    <h4 class="mg-b-0">60</h4>
                    <small class="tx-11 tx-color-04">Products per day</small>
                  </div><!-- col -->
                  <div class="col">
                    <label class="tx-13 mg-b-3">Reached Today</label>
                    <h4 class="mg-b-0">38</h4>
                    <small class="tx-11 tx-color-04">64% goal reached</small>
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-12 col-xl-8 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-sale-location">
              <div class="card-header bg-transparent">
                <div>
                  <h6 class="card-title mg-b-0">Sales Revenue by Location</h6>
                </div>
                <nav class="nav">
                  <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body">
                <div class="list-group-wrapper order-2 order-md-0 mg-t-20 mg-sm-t-30 mg-md-t-0">
                  <label class="content-label mg-b-8">Your Top Countries</label>
                  <ul class="list-group list-group-flush mg-b-15">
                    <li class="list-group-item">
                      <span class="bg-primary"></span>
                      <span>United States</span>
                      <span class="tx-medium">$530</span>
                    </li>
                    <li class="list-group-item">
                      <span class="bg-teal"></span>
                      <span>India</span>
                      <span class="tx-medium">$500</span>
                    </li>
                    <li class="list-group-item">
                      <span class="bg-warning"></span>
                      <span>United Kingdom</span>
                      <span class="tx-medium">$475</span>
                    </li>
                    <li class="list-group-item">
                      <span class="bg-pink"></span>
                      <span>Brazil</span>
                      <span class="tx-medium">$430</span>
                    </li>
                    <li class="list-group-item">
                      <span class="bg-purple"></span>
                      <span>France</span>
                      <span class="tx-medium">$405</span>
                    </li>
                    <li class="list-group-item">
                      <span class="bg-success"></span>
                      <span>Netherlands</span>
                      <span class="tx-medium">$381</span>
                    </li>
                  </ul>
                  <a href="" class="d-flex align-items-center tx-12">Show full report <i class="icon ion-android-arrow-forward mg-l-5"></i></a>
                </div>
                <div class="vmap-wrapper">
                  <div id="vmap" class="vmap order-1 order-md-0"></div>
                </div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-6 col-xl-4 mg-t-15 mg-sm-t-20 order-md-2 order-xl-0">
            <div class="card card-hover card-chart-one bg-primary">
              <div class="card-header bg-transparent pd-b-15-f bd-b-0">
                <div>
                  <h6 class="card-title mg-b-0">Accounts This Month</h6>
                </div>
                <nav class="nav">
                  <a href="" class="link-white"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-white"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div>
              <div class="card-body pd-t-0 d-block">
                <div class="d-flex align-items-center justify-content-between mg-b-10">
                  <p class="tx-11 tx-white-5 mg-b-0">July 01-31, 2019</p>
                  <div class="chart-legend">
                    <label><span class="bg-brand-02"></span> Goal reached</label>
                  </div>
                </div>
                <div id="flotChart6" class="flot-chart-two"></div>
              </div><!-- card-body -->
              <div class="card-footer bg-white pd-y-15 pd-x-20">
                <div class="row row-sm">
                  <div class="col">
                    <label class="tx-13 mg-b-3">New Accounts</label>
                    <h4 class="mg-b-8">248</h4>
                    <div class="progress ht-2 mg-b-5">
                      <div class="progress-bar wd-50p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="tx-11 tx-color-04">48% target reached</small>
                  </div><!-- col -->
                  <div class="col">
                    <label class="tx-13 mg-b-3">Target Reached</label>
                    <h4 class="mg-b-8">48%</h4>
                    <div class="progress ht-2 mg-b-5">
                      <div class="progress-bar wd-50p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="tx-11 tx-color-04">600 accounts per day</small>
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-12 col-xl-8 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-total-sales">
              <div class="card-header bg-transparent pd-y-15 pd-l-15 pd-sm-l-20 pd-r-15 bd-b-0">
                <h6 class="card-title mg-b-0">Total Sales</h6>
                <nav class="nav">
                  <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body pd-x-15 pd-sm-x-20 pd-t-5">
                <div class="d-flex flex-column flex-sm-row align-items-start justify-content-between mg-b-15">
                  <div class="total-sales-info order-2 order-sm-0">
                    <div>
                      <label>Total Sales</label>
                      <h5>486,030<span>usd</span></h5>
                    </div>
                    <div>
                      <label>Total Profit</label>
                      <h5>988,097<span>usd</span></h5>
                    </div>
                    <div>
                      <label>No. of Orders</label>
                      <h5>36,760</h5>
                    </div>
                  </div><!-- total-sales-info -->
                  <div class="order-1 order-sm-0 mg-sm-t-7 mg-b-15 mg-sm-b-0">
                    <button class="btn btn-xs btn-white pd-x-10">Quarterly <i class="icon ion-ios-arrow-down mg-l-5"></i></button>
                    <button class="btn btn-xs btn-white pd-x-10">All Products <i class="icon ion-ios-arrow-down mg-l-5"></i></button>
                  </div>
                </div>
                <div class="flot-wrapper">
                  <div class="chart-legend">
                    <label><span class="bg-blue"></span> Offline Sales</label>
                    <label><span class="bg-green"></span> Online Sales</label>
                  </div>
                  <div id="flotChart7" class="flot-chart"></div>
                </div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-6 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-chart-four">
              <div class="card-header bg-transparent">
                <h6 class="card-title mg-b-0">Incremental Sales<span class="d-none d-sm-inline"> By Campaign</span></h6>
                <nav class="nav nav-card-icon">
                  <a href=""><i data-feather="refresh-ccw"></i></a>
                  <a href=""><i data-feather="printer"></i></a>
                  <a href=""><i data-feather="more-horizontal"></i></a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body">
                <div class="chart-wrapper"><canvas id="chartBar2"></canvas></div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-6 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-campaign-one">
              <div class="card-header bg-transparent">
                <h6 class="card-title mg-b-0">Campaign Performance</h6>
                <nav class="nav nav-card-icon">
                  <a href=""><i data-feather="refresh-ccw"></i></a>
                  <a href=""><i data-feather="printer"></i></a>
                  <a href=""><i data-feather="more-horizontal"></i></a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body pd-xl-25">
                <div class="row">
                  <div class="col-sm">
                    <div class="chart-icon brand-02"><i data-feather="box"></i></div>
                    <h1 class="chart-value">68<span>%</span></h1>
                    <div class="progress ht-5 mg-b-20">
                      <div class="progress-bar bg-brand-02 wd-70p" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="chart-label">Change in consideration</p>
                    <span class="d-block tx-gray-500 tx-12">of campaigns saw a lift in consideration, with an average lift of 15%.</span>
                  </div><!-- col -->
                  <div class="col-sm mg-t-25 mg-sm-t-0">
                    <div class="chart-icon brand-01"><i data-feather="layout"></i></div>
                    <h1 class="chart-value">30<span>%</span></h1>
                    <div class="progress ht-5 mg-b-20">
                      <div class="progress-bar bg-brand-01 wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="chart-label">Change in favorality</p>
                    <span class="d-block tx-gray-500 tx-12">of campaigns saw a lift in favorality, with an average lift of 12%.</span>
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-12 col-xl-7 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-deal">
              <div class="card-header bg-transparent bd-b-0">
                <h6 class="card-title mg-b-0">Top Sales Representative</h6>
                <nav class="nav nav-card-icon">
                  <a href=""><i data-feather="save"></i></a>
                  <a href=""><i data-feather="printer"></i></a>
                  <a href=""><i data-feather="more-horizontal"></i></a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body pd-0">
                <div class="table-responsive">
                  <table class="table mg-b-0">
                    <thead>
                      <tr>
                        <th class="wd-35p">Name</th>
                        <th class="wd-15p">No. of Wins</th>
                        <th class="wd-25p">Win Rate</th>
                        <th class="wd-25p">Won Revenue ($)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-xs"><span class="avatar-initial rounded-circle bg-secondary">s</span></div>
                            <span class="tx-medium mg-l-10">Socrates Itumay</span>
                          </div>
                        </td>
                        <td>58</td>
                        <td>
                          <div class="rating-stars">
                            <span>96%</span>
                            <div class="stars">
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star" class="active"></i>
                            </div>
                          </div><!-- rating-stars -->
                        </td>
                        <td>302, 422.50</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-xs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                            <span class="tx-medium mg-l-10">Dianne Aceron</span>
                          </div>
                        </td>
                        <td>49</td>
                        <td>
                          <div class="rating-stars">
                            <span>85%</span>
                            <div class="stars">
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star" class="active"></i>
                            </div>
                          </div><!-- rating-stars -->
                        </td>
                        <td>264, 090.00</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-xs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                            <span class="tx-medium mg-l-10">Katherine Movera</span>
                          </div>
                        </td>
                        <td>40</td>
                        <td>
                          <div class="rating-stars">
                            <span>79%</span>
                            <div class="stars">
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star"></i>
                            </div>
                          </div><!-- rating-stars -->
                        </td>
                        <td>238, 720.80</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-xs"><span class="avatar-initial rounded-circle bg-primary">r</span></div>
                            <span class="tx-medium mg-l-10">Reynante Labares</span>
                          </div>
                        </td>
                        <td>38</td>
                        <td>
                          <div class="rating-stars">
                            <span>76%</span>
                            <div class="stars">
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star"></i>
                            </div>
                          </div><!-- rating-stars -->
                        </td>
                        <td>227, 063.20</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-xs"><span class="avatar-initial rounded-circle bg-dark">d</span></div>
                            <span class="tx-medium mg-l-10">Dexter Dela Cruz</span>
                          </div>
                        </td>
                        <td>26</td>
                        <td>
                          <div class="rating-stars">
                            <span>68%</span>
                            <div class="stars">
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star"></i>
                              <i data-feather="star"></i>
                            </div>
                          </div><!-- rating-stars -->
                        </td>
                        <td>202, 918.00</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-xs"><span class="avatar-initial rounded-circle bg-purple">j</span></div>
                            <span class="tx-medium mg-l-10">Johnwyne Mendez</span>
                          </div>
                        </td>
                        <td>26</td>
                        <td>
                          <div class="rating-stars">
                            <span>68%</span>
                            <div class="stars">
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star" class="active"></i>
                              <i data-feather="star"></i>
                              <i data-feather="star"></i>
                            </div>
                          </div><!-- rating-stars -->
                        </td>
                        <td>202, 918.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card-body -->
              <div class="card-footer bg-transparent">
                <a href="">Show More 5 <i class="icon ion-chevron-right"></i><i class="icon ion-chevron-right"></i></a>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-12 col-xl-5 mg-t-15 mg-sm-t-20 order-md-3 order-lg-0">
            <div class="card card-hover card-transactions">
              <div class="card-header bg-transparent">
                <h6 class="card-title mg-b-0">Recent Transactions</h6>
                <nav class="nav nav-card-icon">
                  <a href=""><i data-feather="download"></i></a>
                  <a href=""><i data-feather="printer"></i></a>
                  <a href=""><i data-feather="more-horizontal"></i></a>
                </nav>
              </div><!-- card-header -->
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <div class="avatar"><span class="avatar-initial rounded-circle bg-primary-light"><i data-feather="shopping-bag" class="svg-18"></i></span></div>
                  <div class="mg-l-10 mg-sm-l-15">
                    <h6>Purchase Receipt - D107046</h6>
                    <small>Today, August 01, 2019</small>
                  </div>
                  <div class="mg-l-auto tx-right">
                    <h6>-$69.99</h6>
                    <small class="d-none d-sm-inline">Paid via PayPal</small>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="avatar"><span class="avatar-initial rounded-circle bg-teal-light"><i data-feather="package" class="svg-18"></i></span></div>
                  <div class="mg-l-10 mg-sm-l-15">
                    <h6>Purchase Shipment - D108015</h6>
                    <small>Today, August 01, 2019</small>
                  </div>
                  <div class="mg-l-auto tx-right">
                    <h6>+$310.50</h6>
                    <small class="d-none d-sm-inline">Bank transfer</small>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="avatar"><span class="avatar-initial rounded-circle bg-pink-light"><i data-feather="share" class="svg-18"></i></span></div>
                  <div class="mg-l-10 mg-sm-l-15">
                    <h6>Purchase Receipt - D107046</h6>
                    <small>Yesterday, July 31, 2019</small>
                  </div>
                  <div class="mg-l-auto tx-right">
                    <h6>-$69.99</h6>
                    <small class="d-none d-sm-inline">Paid via card</small>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="avatar"><span class="avatar-initial rounded-circle bg-pink-light"><i data-feather="share" class="svg-18"></i></span></div>
                  <div class="mg-l-10 mg-sm-l-15">
                    <h6>Purchase Receipt - D107046</h6>
                    <small>Monday, July 27, 2019</small>
                  </div>
                  <div class="mg-l-auto tx-right">
                    <h6>-$69.99</h6>
                    <small class="d-none d-sm-inline">Paid via card</small>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="avatar"><span class="avatar-initial rounded-circle bg-teal-light"><i data-feather="package" class="svg-18"></i></span></div>
                  <div class="mg-l-10 mg-sm-l-15">
                    <h6>Purchase Shipment - D108015</h6>
                    <small>Saturday, July 20, 2019</small>
                  </div>
                  <div class="mg-l-auto tx-right">
                    <h6>+$310.50</h6>
                    <small class="d-none d-sm-inline">Bank transfer</small>
                  </div>
                </li>
              </ul><!-- list-group -->
              <div class="card-footer bg-transparent">
                <a href="">View All Transactions<i class="icon ion-chevron-right"></i><i class="icon ion-chevron-right"></i></a>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-6 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-chart-five">
              <div class="card-body">
                <div class="row no-gutters">
                  <div class="col-sm order-1 order-sm-0 mg-t-20 mg-sm-t-0">
                    <div class="chart-legend">
                      <label><span class="bg-purple"></span> Offline</label>
                      <label><span class="bg-blue"></span> Online</label>
                    </div>
                    <div class="flot-wrapper">
                      <div id="flotChart8" class="flot-chart"></div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="pd-sm-l-20 pd-lg-l-25">
                      <div class="d-flex align-items-baseline mg-b-5">
                        <h1 class="tx-20 tx-sm-32 tx-numeric tx-color-01 tx-normal mg-b-0">844</h1>
                        <span class="d-flex align-items-center tx-success mg-l-2 tx-13"><i data-feather="arrow-up" class="svg-14 stroke-25"></i>1.2%</span>
                      </div>
                      <h6 class="tx-12 tx-sm-13 tx-color-02">Recent Orders</h6>
                      <p class="tx-11 tx-sm-12 mg-b-0 tx-color-04">Habi tasse labo rum purus, vesti bulum at<span class="d-none d-sm-inline"> vivamus tempor port titor vulpu</span>... <a href="">Learn More</a></p>
                    </div>
                  </div>
                </div><!-- row -->
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-6 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-chart-five">
              <div class="card-body">
                <div class="row no-gutters">
                  <div class="col-sm-6 order-1 order-sm-0 mg-t-20 mg-sm-t-0">
                    <div class="chart-legend">
                      <label><span class="bg-primary"></span> Offline</label>
                      <label><span class="bg-pink"></span> Online</label>
                    </div>
                    <div class="flot-wrapper">
                      <div id="flotChart9" class="flot-chart"></div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="pd-sm-l-20 pd-lg-l-25">
                      <div class="d-flex align-items-baseline mg-b-5">
                        <h1 class="tx-20 tx-sm-32 tx-numeric tx-color-01 tx-normal mg-b-0">2,804</h1>
                        <span class="d-flex align-items-center tx-danger mg-l-2 tx-13"><i data-feather="arrow-down" class="svg-14 stroke-25"></i>0.9%</span>
                      </div>
                      <h6 class="tx-12 tx-sm-13 tx-color-02">Complete Orders</h6>
                      <p class="tx-12 mg-b-0 tx-color-04">Habi tasse labo rum purus, vesti bulum<span class="d-none d-sm-inline"> at vivamus tempor port titor vulpu</span>... <a href="">Learn More</a></p>
                    </div>
                  </div>
                </div><!-- row -->
              </div>
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->

        <div class="row row-sm mg-t-15 mg-sm-t-20">
          <div class="col-xl-8">
            <div class="row row-sm">
              <div class="col-sm-6">
                <div class="card card-hover card-profile-visits">
                  <div>
                    <p class="content-label mg-b-5 tx-pink">Profile Visits</p>
                    <div class="d-flex align-items-end">
                      <h4 class="tx-color-01 tx-numeric tx-normal mg-b-0">361,782</h4>
                      <span class="d-flex align-items-center tx-success mg-l-2 tx-13"><i data-feather="arrow-up" class="svg-14 stroke-25"></i>1.2%</span>
                    </div>
                  </div>
                  <div class="flot-wrapper">
                    <div id="flotChart10" class="flot-chart"></div>
                  </div>
                </div><!-- card -->
              </div><!-- col -->
              <div class="col-sm-6 mg-t-15 mg-sm-t-0">
                <div class="card card-hover card-profile-visits">
                  <div>
                    <p class="content-label mg-b-5 tx-orange">Unique Visits</p>
                    <div class="d-flex align-items-end">
                      <h4 class="tx-color-01 tx-numeric tx-normal mg-b-0">102,004</h4>
                      <span class="d-flex align-items-center tx-danger mg-l-2 tx-13"><i data-feather="arrow-down" class="svg-14 stroke-25"></i>0.4%</span>
                    </div>
                  </div>
                  <div class="flot-wrapper">
                    <div id="flotChart11" class="flot-chart"></div>
                  </div>
                </div><!-- card -->
              </div><!-- col -->
              <div class="col-12 mg-t-15 mg-sm-t-20">
                <div class="card card-hover card-cash-flow">
                  <div class="card-body pd-0">
                    <div class="row no-gutters">
                      <div class="col-sm-5 col-md-4">
                        <div class="pd-y-15 pd-sm-y-20 pd-l-15 pd-sm-l-20 ht-100p">
                          <h6 class="tx-color-01 mg-b-3">Cash Flow Summary</h6>
                          <p class="tx-11 tx-color-03">Jan 01, 2019 - Dec 31, 2019</p>

                          <label class="tx-color-03 tx-12 mg-b-5">Total Income</label>
                          <h4 class="card-value">9,174,700<small>usd</small></h4>
                          <span class="tx-12 tx-color-04"><span class="tx-success"><i class="icon ion-android-arrow-up"></i> 1.5%</span> higher from last year</span>

                          <hr class="mg-y-10 op-0">

                          <label class="tx-color-03 tx-12 mg-b-5">Total Expenses</label>
                          <h4 class="card-value">2,628,740<small>usd</small></h4>
                          <span class="tx-12 tx-color-04"><span class="tx-danger"><i class="icon ion-android-arrow-up"></i> 0.9%</span> higher from last year</span>
                        </div>
                      </div><!-- col -->
                      <div class="col-sm-7 col-md-8">
                        <div class="pd-15 pd-t-0 pd-sm-20 bd-sm-l">
                          <div class="d-flex align-items-center justify-content-between mg-b-15">
                            <div class="chart-legend">
                              <label><span class="bg-green"></span> Income</label>
                              <label><span class="bg-gray-400"></span> Expenses</label>
                            </div>
                            <nav class="nav nav-card-icon">
                              <a href=""><i data-feather="help-circle"></i></a>
                              <a href=""><i data-feather="more-horizontal"></i></a>
                            </nav>
                          </div>
                          <div id="flotChart12" class="flot-chart"></div>
                        </div>
                      </div><!-- col -->
                    </div><!-- row -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- col -->
          <div class="col-sm-6 col-xl-4 mg-t-15 mg-sm-t-20 mg-xl-t-0">
            <div class="card card-hover card-customer-score">
              <div class="card-header bg-transparent">
                <h6 class="card-title mg-b-0">Customer Satisfaction</h6>
                <nav class="nav nav-card-icon">
                  <a href=""><i data-feather="download"></i></a>
                  <a href=""><i data-feather="printer"></i></a>
                  <a href=""><i data-feather="more-horizontal"></i></a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body pd-t-10">
                <h1 class="card-value mg-b-5">9.7<small class="tx-danger"><i class="icon ion-android-arrow-down"></i> 2.8%</small></h1>
                <p class="tx-12 tx-color-03">Performance Score</p>
                <div class="progress bg-transparent ht-10 mg-b-15">
                  <div class="progress-bar bg-blue wd-50p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  <div class="progress-bar bg-green wd-25p bd-l bd-white" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                  <div class="progress-bar bg-orange wd-5p bd-l bd-white" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                  <div class="progress-bar bg-pink wd-5p bd-l bd-white" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                  <div class="progress-bar bg-brand-02 wd-10p bd-l bd-white" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  <div class="progress-bar bg-primary wd-5p bd-l bd-white" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <table class="table-card">
                  <tbody>
                    <tr>
                      <td><div class="bd-blue"></div></td>
                      <td class="tx-medium">Excellent</td>
                      <td class="text-right">3,007</td>
                      <td class="text-right">50%</td>
                    </tr>
                    <tr>
                      <td><div class="bd-green"></div></td>
                      <td class="tx-medium">Very Good</td>
                      <td class="text-right">1,674</td>
                      <td class="text-right">25%</td>
                    </tr>
                    <tr>
                      <td><div class="bd-orange"></div></td>
                      <td class="tx-medium">Good</td>
                      <td class="text-right">125</td>
                      <td class="text-right">6%</td>
                    </tr>
                    <tr>
                      <td><div class="bd-pink"></div></td>
                      <td class="tx-medium">Fair</td>
                      <td class="text-right">98</td>
                      <td class="text-right">5%</td>
                    </tr>
                    <tr>
                      <td><div class="bd-brand-02"></div></td>
                      <td class="tx-medium">Poor</td>
                      <td class="text-right">512</td>
                      <td class="text-right">10%</td>
                    </tr>
                    <tr>
                      <td><div class="bd-brand-01"></div></td>
                      <td class="tx-medium">Very Poor</td>
                      <td class="text-right">81</td>
                      <td class="text-right">4%</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-xl-4 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-pie-one">
              <div class="card-header bg-transparent">
                <h6 class="card-title mg-b-0">Campaign By Channel</h6>
                <nav class="nav nav-card-icon">
                  <a href=""><i data-feather="help-circle"></i></a>
                  <a href=""><i data-feather="more-horizontal"></i></a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body">
                <div class="chart-wrapper mg-b-25"><canvas id="chartDonut"></canvas></div>
                <div class="row row-sm">
                  <div class="col-6">
                    <p class="tx-12 mg-b-5">Organic Search</p>
                    <h4><span>3,104</span> <small>25%</small></h4>
                    <div class="progress">
                      <div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6">
                    <p class="tx-12 mg-b-5">Email Campaign</p>
                    <h4><span>2,679</span> <small>20%</small></h4>
                    <div class="progress">
                      <div class="progress-bar bg-blue wd-20p" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6 mg-t-20">
                    <p class="tx-12 mg-b-5">Referral Links</p>
                    <h4><span>4,236</span> <small>30%</small></h4>
                    <div class="progress">
                      <div class="progress-bar bg-green wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6 mg-t-20">
                    <p class="tx-12 mg-b-5">Social Media</p>
                    <h4><span>3,068</span> <small>27%</small></h4>
                    <div class="progress">
                      <div class="progress-bar bg-pink wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div><!-- col -->
                </div><!-- row -->
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-xl-4 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-pie-two">
              <div class="card-header bg-transparent">
                <h6 class="card-title mg-b-0">Expenses</h6>
                <nav class="nav nav-time-range">
                  <a href="">D</a>
                  <a href="">W</a>
                  <a href="" class="active">M</a>
                  <a href="">Y</a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body">
                <h3 class="card-value"><span>$</span>29,060<small>.00</small></h3>
                <p class="tx-12 mg-b-10">as of this month</p>

                <div class="row row-xs align-items-center mg-b-20">
                  <div class="col-6">
                    <ul class="list-unstyled mg-b-0">
                      <li>
                        <h6 class="tx-color-01 tx-numeric tx-normal mg-b-5">$3,011.20 <span class="bg-blue"></span></h6>
                        <p class="tx-11 tx-color-04 mg-b-0">Personal expense</p>
                      </li>
                      <li>
                        <h6 class="tx-color-01 tx-numeric tx-normal mg-b-5">$4,870.80 <span class="bg-green"></span></h6>
                        <p class="tx-11 tx-color-04 mg-b-0">Medical expense</p>
                      </li>
                      <li>
                        <h6 class="tx-color-01 tx-numeric tx-normal mg-b-5">$10,107.00 <span class="bg-purple"></span></h6>
                        <p class="tx-11 tx-color-04 mg-b-0">Other expense</p>
                      </li>
                    </ul>
                  </div><!-- col -->
                  <div class="col-6">
                    <div class="chart-wrapper"><canvas id="chartDonut2"></canvas></div>
                  </div><!-- col -->
                </div><!-- row -->

                <label class="content-label mg-b-5">Recent Transactions</label>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div>
                      <h6>School supplies</h6>
                      <span>Today, Jul 28, 2019</span>
                    </div>
                    <div class="tx-right">
                      <h6>$50.50</h6>
                      <span class="badge bg-purple tx-white">Other</span>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div>
                      <h6>Paracetamol</h6>
                      <span>Today, Jul 28, 2019</span>
                    </div>
                    <div>
                      <h6>$78.30</h6>
                      <span class="badge bg-green tx-white">Medical</span>
                    </div>
                  </li>
                </ul>
                <a href="" class="link-02 tx-12">View All Transactions <i class="icon ion-android-arrow-forward"></i></a>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-xl-4 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-overall-rating">
              <div class="card-header bg-transparent pd-t-15 pd-r-15 pd-b-2 bd-b-0">
                <h6 class="card-title mg-b-0">Overall Rating</h6>
                <nav class="nav nav-card-icon">
                  <a href=""><i data-feather="help-circle"></i></a>
                  <a href=""><i data-feather="more-vertical"></i></a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body pd-t-5 pd-b-15">
                <div class="d-flex align-items-end mg-b-5">
                  <h1 class="card-value">4.6</h1>
                  <div class="stars mg-l-5">
                    <i class="icon ion-ios-star active"></i>
                    <i class="icon ion-ios-star active"></i>
                    <i class="icon ion-ios-star active"></i>
                    <i class="icon ion-ios-star active"></i>
                    <i class="icon ion-ios-star"></i>
                  </div>
                </div>
                <p class="tx-11 tx-color-03">Measures the quality or your support team’s efforts.</p>

                <ul class="list-group list-group-flush mg-b-20">
                  <li class="list-group-item">
                    <div>5.0</div>
                    <div class="stars">
                      <i class="icon ion-ios-star active"></i>
                      <i class="icon ion-ios-star active"></i>
                      <i class="icon ion-ios-star active"></i>
                      <i class="icon ion-ios-star active"></i>
                      <i class="icon ion-ios-star active"></i>
                    </div>
                    <div>4,230</div>
                    <div>58%</div>
                  </li>
                  <li class="list-group-item">
                    <div>4.0</div>
                    <div class="stars">
                      <i class="icon ion-ios-star active"></i>
                      <i class="icon ion-ios-star active"></i>
                      <i class="icon ion-ios-star active"></i>
                      <i class="icon ion-ios-star active"></i>
                      <i class="icon ion-ios-star"></i>
                    </div>
                    <div>2,416</div>
                    <div>24%</div>
                  </li>
                  <li class="list-group-item">
                    <div>3.0</div>
                    <div class="stars">
                      <i class="icon ion-ios-star active"></i>
                      <i class="icon ion-ios-star active"></i>
                      <i class="icon ion-ios-star active"></i>
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star"></i>
                    </div>
                    <div>1,080</div>
                    <div>16%</div>
                  </li>
                  <li class="list-group-item">
                    <div>2.0</div>
                    <div class="stars">
                      <i class="icon ion-ios-star active"></i>
                      <i class="icon ion-ios-star active"></i>
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star"></i>
                    </div>
                    <div>885</div>
                    <div>8%</div>
                  </li>
                  <li class="list-group-item">
                    <div>1.0</div>
                    <div class="stars">
                      <i class="icon ion-ios-star active"></i>
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star"></i>
                    </div>
                    <div>546</div>
                    <div>12%</div>
                  </li>
                </ul>

                <div class="d-flex align-items-center justify-content-between mg-b-15">
                  <label class="content-label mg-b-0">Reviews</label>
                  <label class="tx-11 mg-b-0">Sort: <a href="" class="link-03">Most Recent <i class="icon ion-ios-arrow-down"></i></a></label>
                </div>
                <div class="review-item mg-b-15">
                  <div class="media mg-b-10">
                    <div class="avatar avatar-sm"><span class="avatar-initial rounded-circle bg-green">d</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-2">Dyanne Rose Aceron</h6>
                      <div class="stars">
                        <i class="icon ion-ios-star active"></i>
                        <i class="icon ion-ios-star active"></i>
                        <i class="icon ion-ios-star active"></i>
                        <i class="icon ion-ios-star"></i>
                        <i class="icon ion-ios-star"></i>
                        <span class="tx-color-04 tx-11 mg-l-5">5 hours ago</span>
                      </div>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <p class="tx-12 tx-color-03 mg-b-0">Sed ut perspiciatis unde omnis iste natus error sit tatem accu santium remque...<a href="">Read more</a></p>
                </div>
                <a href="" class="tx-12 link-03 d-block tx-center bd-t pd-t-10">View All Reviews <i class="icon ion-android-arrow-forward"></i></a>
              </div>
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- content-body -->
    </div><!-- content -->

@endsection