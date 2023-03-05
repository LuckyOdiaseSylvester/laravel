@extends('layouts.admin')
@section('content')



          <div class="main-panel">
            <div class="content-wrapper">
              @if(Session::has('approve'))
              <div class="alert alert-success text-center" role="alert">
                  {{ Session::get('approve') }}
              </div>
              @endif
              @if(Session::has('reject'))
              <div class="alert alert-danger text-center" role="alert">
                  {{ Session::get('reject') }}
              </div>
              @endif
  
              @if(Session::has('can'))
              <div class="alert alert-danger text-center" role="alert">
                  {{ Session::get('can') }}
              </div>
              @endif
  
              @if(Session::has('deliver'))
              <div class="alert alert-success text-center" role="alert">
                  {{ Session::get('deliver') }}
              </div>
              @endif
              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card corona-gradient-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                      <div class="row align-items-center">
                        <div class="col-4 col-sm-3 col-xl-2">
                          <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                        </div>
                        <div class="col-5 col-sm-7 col-xl-8 p-0">
                          <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                          <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique layouts!</p>
                        </div>
                        <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                          <span>
                            <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">N {{ $total_revenue }}</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Total Product price</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{ $number }}</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Total number of product</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$12.34</h3>
                            <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-danger">
                            <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Daily Income</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$31.53</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Expense current</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Transaction History</h4>
                      <canvas id="transaction-history" class="transaction-chart"></canvas>
                      <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                          <h6 class="mb-1">Transfer to Paypal</h6>
                          <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                        </div>
                        <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                          <h6 class="font-weight-bold mb-0">$236</h6>
                        </div>
                      </div>
                      <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                          <h6 class="mb-1">Tranfer to Stripe</h6>
                          <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                        </div>
                        <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                          <h6 class="font-weight-bold mb-0">$593</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Open Projects</h4>
                        <p class="text-muted mb-1">Your data status</p>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="preview-list">
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-primary">
                                  <i class="mdi mdi-file-document"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Admin dashboard design</h6>
                                  <p class="text-muted mb-0">Broadcast web app mockup</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">15 minutes ago</p>
                                  <p class="text-muted mb-0">30 tasks, 5 issues </p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                  <i class="mdi mdi-cloud-download"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Wordpress Development</h6>
                                  <p class="text-muted mb-0">Upload new design</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">1 hour ago</p>
                                  <p class="text-muted mb-0">23 tasks, 5 issues </p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                  <i class="mdi mdi-clock"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Project meeting</h6>
                                  <p class="text-muted mb-0">New project discussion</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">35 minutes ago</p>
                                  <p class="text-muted mb-0">15 tasks, 2 issues</p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-danger">
                                  <i class="mdi mdi-email-open"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Broadcast Mail</h6>
                                  <p class="text-muted mb-0">Sent release details to team</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">55 minutes ago</p>
                                  <p class="text-muted mb-0">35 tasks, 7 issues </p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                  <i class="mdi mdi-chart-pie"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">UI Design</h6>
                                  <p class="text-muted mb-0">New application planning</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">50 minutes ago</p>
                                  <p class="text-muted mb-0">27 tasks, 4 issues </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h5>Revenue</h5>
                      <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                          <div class="d-flex d-sm-block d-md-flex align-items-center">
                            <h2 class="mb-0">$32123</h2>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                          </div>
                          <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h5>Total ordered price</h5>
                      <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                          <div class="d-flex d-sm-block d-md-flex align-items-center">
                            <h2 class="mb-0">N {{ $total_order }}</h2>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
                          </div>
                          <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h5>Purchase</h5>
                      <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                          <div class="d-flex d-sm-block d-md-flex align-items-center">
                            <h2 class="mb-0">$2039</h2>
                            <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>
                          </div>
                          <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Order Status</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </th>
                              <th> Client Name </th>
                              <th> Address </th>
                              <th> Phone </th>
                              <th> Email </th>
                              <th> Product Cost </th>
                              <th> Picture  </th>
                              <th> Item </th>
                              <th> Quantity </th>
                              <th> Payment Mode </th>
                              <th> Ordered Date </th>
                              <th>  Status </th>
                              <th class="text-center">  Action </th>
                              <th class="">  Print PDF </th>

                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($ordereds as $ordered )
                              
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <span class="pl-2">{{$ordered->name}}</span>
                              </td>
                              <td> {{$ordered->address}} </td>
                              <td> {{$ordered->phone}} </td>
                              <td> {{$ordered->email}} </td>
                              <td>N {{$ordered->price}} </td>
                              <td>  <img src="/product/{{ $ordered->image }}" alt="{{ $ordered->image }}">
                              </td>
                              <td> {{$ordered->title}} </td>
  
                              <td> {{$ordered->quantity}} </td>
                              <td> {{$ordered->payment_status}} </td>
                              <td>{{$ordered->created_at}}</td>
                              <td class="">{{$ordered->delivery_status}}</td>
  
                              <td>
                                <a href="{{ route('reject',$ordered->id) }}" class="badge badge-outline-warning">Reject</a>
                                <a href="{{ route('approve',$ordered->id) }}" class="badge badge-outline-success">Approve</a>
                                <a href="{{ route('can',$ordered->id) }}" class="badge badge-outline-danger">Cancel</a>
                                <a href=" {{ route('deliver',$ordered->id) }}" class="badge badge-outline-danger">Delivered</a>
  
                              </td>
                              <td>
                                <a href="{{ route('print',$ordered->id) }}" class="badge badge-outline-secondary">Print PDF</a>
                              </td>
                            </tr>
                            @endforeach
  
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title">Messages</h4>
                        <p class="text-muted mb-1 small">View all</p>
                      </div>
                      <div class="preview-list">
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">Leonard</h6>
                                <p class="text-muted text-small">5 minutes ago</p>
                              </div>
                              <p class="text-muted">Well, it seems to be working now.</p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="assets/images/faces/face8.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">Luella Mills</h6>
                                <p class="text-muted text-small">10 Minutes Ago</p>
                              </div>
                              <p class="text-muted">Well, it seems to be working now.</p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="assets/images/faces/face9.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">Ethel Kelly</h6>
                                <p class="text-muted text-small">2 Hours Ago</p>
                              </div>
                              <p class="text-muted">Please review the tickets</p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="assets/images/faces/face11.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">Herman May</h6>
                                <p class="text-muted text-small">4 Hours Ago</p>
                              </div>
                              <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Portfolio Slide</h4>
                      <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                        <div class="item">
                          <img src="assets/images/dashboard/Rectangle.jpg" alt="">
                        </div>
                        <div class="item">
                          <img src="assets/images/dashboard/Img_5.jpg" alt="">
                        </div>
                        <div class="item">
                          <img src="assets/images/dashboard/img_6.jpg" alt="">
                        </div>
                      </div>
                      <div class="d-flex py-4">
                        <div class="preview-list w-100">
                          <div class="preview-item p-0">
                            <div class="preview-thumbnail">
                              <img src="assets/images/faces/face12.jpg" class="rounded-circle" alt="">
                            </div>
                            <div class="preview-item-content d-flex flex-grow">
                              <div class="flex-grow">
                                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                  <h6 class="preview-subject">CeeCee Bass</h6>
                                  <p class="text-muted text-small">4 Hours Ago</p>
                                </div>
                                <p class="text-muted">Well, it seems to be working now.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="text-muted">Well, it seems to be working now. </p>
                      <div class="progress progress-md portfolio-progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-xl-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">To do list</h4>
                      <div class="add-items d-flex">
                        <input type="text" class="form-control todo-list-input" placeholder="enter task..">
                        <button class="add btn btn-primary todo-list-add-btn">Add</button>
                      </div>
                      <div class="list-wrapper">
                        <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                          <li>
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Create invoice </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                          <li>
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Meeting with Alita </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                          <li class="completed">
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                          <li>
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Plan weekend outing </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                          <li>
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Visitors by Countries</h4>
                      <div class="row">
                        <div class="col-md-5">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-us"></i>
                                  </td>
                                  <td>USA</td>
                                  <td class="text-right"> 1500 </td>
                                  <td class="text-right font-weight-medium"> 56.35% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-de"></i>
                                  </td>
                                  <td>Germany</td>
                                  <td class="text-right"> 800 </td>
                                  <td class="text-right font-weight-medium"> 33.25% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-au"></i>
                                  </td>
                                  <td>Australia</td>
                                  <td class="text-right"> 760 </td>
                                  <td class="text-right font-weight-medium"> 15.45% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-gb"></i>
                                  </td>
                                  <td>United Kingdom</td>
                                  <td class="text-right"> 450 </td>
                                  <td class="text-right font-weight-medium"> 25.00% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-ro"></i>
                                  </td>
                                  <td>Romania</td>
                                  <td class="text-right"> 620 </td>
                                  <td class="text-right font-weight-medium"> 10.25% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-br"></i>
                                  </td>
                                  <td>Brasil</td>
                                  <td class="text-right"> 230 </td>
                                  <td class="text-right font-weight-medium"> 75.00% </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-7">
                          <div id="audience-map" class="vector-map"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        @endsection