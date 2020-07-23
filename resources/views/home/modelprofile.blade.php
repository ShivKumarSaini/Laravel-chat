 @extends('layouts.master')
@section('title','Home')
@section('content')
<!-- Page content -->
<div class="page-content">
      <!-- Main content -->
      <div class="content-wrapper">
        <!-- Cover area -->
        <div class="profile-cover">
          <div
            class="profile-cover-img"
            style="
              background-image: url(global_assets/images/demo/users/cover2.jpg);
            "
          ></div>
          <div
            class="media align-items-center text-center text-md-left flex-column flex-md-row m-0"
          >
            <div class="mr-md-3 mb-2 mb-md-0">
              <a href="#" class="profile-thumb">
                <img
                  src="global_assets/images/demo/users/face11.jpg"
                  class="border-white rounded-circle"
                  width="48"
                  height="48"
                  alt=""
                />
              </a>
            </div>

            <div class="media-body text-white">
              <h1 class="mb-0">Lexi Lore</h1>
              <span class="d-block">Model</span>
            </div>

            <div class="ml-md-3 mt-2 mt-md-0">
              <ul class="list-inline list-inline-condensed mb-0">
                <li class="list-inline-item">
                  <a href="#" class="btn btn-light border-transparent"
                    ><i class="icon-calendar mr-2" style="color: #f49ac1;"></i>
                    Joined</a
                  >
                </li>
                <li class="list-inline-item">
                  <div class="btn-group">
                    <a href="#" class="btn btn-light border-transparent"
                      ><i class="icon-heart6 mr-2" style="color: #f49ac1;"></i>
                      Get MySauce for $25/month</a
                    >
                    <a href="#" class="btn btn-light border-transparent"
                      ><i
                        class="icon-envelope mr-2"
                        style="color: #f49ac1;"
                      ></i>
                      Chat Me</a
                    >
                    <a href="#" class="btn btn-light border-transparent"></a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /cover area -->

        <!-- Profile navigation -->
        <div
          class="navbar navbar-expand-lg navbar-light"
          style="background-color: #f49ac1;"
        >
          <div class="text-center d-lg-none w-100">
            <button
              type="button"
              class="navbar-toggler dropdown-toggle"
              data-toggle="collapse"
              data-target="#navbar-second"
            >
              <i class="icon-menu7 mr-2"></i>
              Profile navigation
            </button>
          </div>

          <div
            class="navbar-collapse collapse"
            id="navbar-second"
            style="background-color: #f49ac1;"
          >
            <ul class="nav navbar-nav ml-lg-auto mr-4">
              <li class="nav-item">
                <a href="#activity" class="navbar-nav-link" data-toggle="tab">
                  <i class="icon-stack-text mr-2" style="font-size: 2em;"></i>
                  <span class="d-md-none ml-2">Information</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#photos" class="navbar-nav-link" data-toggle="tab">
                  <i class="icon-images3 mr-2" style="font-size: 2em;"></i>
                  <span class="d-md-none ml-2">Photos</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#videos" class="navbar-nav-link" data-toggle="tab">
                  <i class="icon-video-camera mr-2" style="font-size: 2em;"></i>
                  <span class="d-md-none ml-2">Videos</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#star" class="navbar-nav-link" data-toggle="tab">
                  <i class="icon-star-empty3 mr-2" style="font-size: 2em;"></i>
                  <span class="d-md-none ml-2">Star</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /profile navigation -->

        <!-- Content area -->
        <div class="content">
          <!-- Inner container -->
          <div class="d-flex align-items-start flex-column flex-md-row">
            <!-- Left sidebar component 
            sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right wmin-300 border-0 shadow-0 order-1 order-lg-2 sidebar-expand-md
            -->
            <div
              class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left wmin-500 border-0 order-2 order-md-1 sidebar-expand-md"
            >
              <!-- Sidebar content -->
              <div class="sidebar-content">
                <!-- Personal Bio -->
                <div class="card">
                  <div class="card-header header-elements-inline">
                    <h4 class="card-title font-weight-semibold">
                      <i
                        class="icon-earth mr-2"
                        style="color: rgb(30, 139, 183);"
                      ></i>
                      Personal Bio
                    </h4>
                  </div>

                  <div class="card-body">
                    <h4 class="text-muted">
                      <a href="#" class="text-default">@lexielore</a>
                    </h4>

                    <div class="mb-3">
                      <p>
                        "Attachment apartments in delightful by motionless it
                        no. And now she burst sir learn total. Hearing hearted
                        shewing own ask. Solicitude uncommonly use her
                        motionless not collecting age. The properly servants
                        required mistaken outlived bed and. Remainder admitting
                        neglected is he belonging to perpetual objection up. Has
                        widen too you decay begin which asked equal any."
                      </p>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="mb-2">
                          <div class="card-img-actions">
                            <a
                              href="global_assets/images/demo/flat/8.png"
                              data-popup="lightbox"
                            >
                              <img
                                class="card-img img-fluid"
                                src="global_assets/images/demo/flat/8.png"
                                alt=""
                              />
                              <span class="card-img-actions-overlay card-img">
                                <i class="icon-plus3"></i>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="mb-2">
                          <div class="card-img-actions">
                            <a
                              href="global_assets/images/demo/flat/7.png"
                              data-popup="lightbox"
                            >
                              <img
                                class="card-img img-fluid"
                                src="global_assets/images/demo/flat/7.png"
                                alt=""
                              />
                              <span class="card-img-actions-overlay card-img">
                                <i class="icon-plus3"></i>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div class="col">
                        <div class="mb-2">
                          <div class="card-img-actions">
                            <a
                              href="global_assets/images/demo/flat/6.png"
                              data-popup="lightbox"
                            >
                              <img
                                class="card-img img-fluid"
                                src="global_assets/images/demo/flat/6.png"
                                alt=""
                              />
                              <span class="card-img-actions-overlay card-img">
                                <i class="icon-plus3"></i>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /personal bio -->

                <!-- Archived collection -->
                <div class="card">
                  <div class="card-header header-elements-inline">
                    <h4 class="card-title font-weight-semibold">
                      <i
                        class="icon-lock2 mr-2"
                        style="color: rgb(30, 139, 183);"
                      ></i>
                      Archived Collection
                    </h4>
                  </div>

                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <div class="mb-2">
                          <div class="card-img-actions">
                            <a
                              href="global_assets/images/demo/flat/8.png"
                              data-popup="lightbox"
                            >
                              <img
                                class="card-img img-fluid"
                                src="global_assets/images/demo/flat/8.png"
                                alt=""
                              />
                              <span class="card-img-actions-overlay card-img">
                                <i class="icon-lock2"></i>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="mb-2">
                          <div class="card-img-actions">
                            <a
                              href="global_assets/images/demo/flat/7.png"
                              data-popup="lightbox"
                            >
                              <img
                                class="card-img img-fluid"
                                src="global_assets/images/demo/flat/7.png"
                                alt=""
                              />
                              <span class="card-img-actions-overlay card-img">
                                <i class="icon-lock2"></i>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div class="col">
                        <div class="mb-2">
                          <div class="card-img-actions">
                            <a
                              href="global_assets/images/demo/flat/6.png"
                              data-popup="lightbox"
                            >
                              <img
                                class="card-img img-fluid"
                                src="global_assets/images/demo/flat/6.png"
                                alt=""
                              />
                              <span class="card-img-actions-overlay card-img">
                                <i class="icon-lock2"></i>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /personal bio -->
                <!-- /archhived collection -->
              </div>
              <!-- /sidebar content -->
            </div>
            <!-- /left sidebar component -->
            <!-- Right content 
              wmin-300 border-0 shadow-0 order-1 order-lg-2
              w-100 order-2 order-md-1
            -->
            <div class="tab-content w-100 border-0 shadow-0 order-1 order-lg-2">
              <div class="tab-pane fade active show" id="activity">
                <!-- new feed post -->
                <div class="row">
                  <div class="col-lg-8">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-img-actions mb-3">
                          <img
                            class="card-img img-fluid"
                            src="global_assets/images/demo/images/blog1.jpg"
                            alt=""
                          />
                          <div class="card-img-actions-overlay card-img">
                            <a
                              href="#"
                              class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round"
                            >
                              <i class="icon-link"></i>
                            </a>
                          </div>
                        </div>

                        Sample description here...
                      </div>

                      <div
                        class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3"
                      >
                        <ul
                          class="list-inline list-inline-dotted text-muted mb-3 mb-sm-0"
                        >
                          <li class="list-inline-item">
                            By <a href="#" class="text-muted">Eugene</a>
                          </li>
                          <li class="list-inline-item">July 5th, 2016</li>
                        </ul>

                        <a href="#" class="text-muted"
                          ><i class="icon-heart6 text-pink mr-2"></i> 281</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /news feed post -->
              </div>

              <div class="tab-pane fade" id="videos">
                <!-- Videos -->
                <div class="row">
                  <div class="col-sm-6 col-xl-4">
                    <div class="card">
                      <div class="card-img-actions mx-1 mt-1">
                        <div
                          class="card-img embed-responsive embed-responsive-16by9"
                        >
                          <iframe
                            allowfullscreen=""
                            frameborder="0"
                            mozallowfullscreen=""
                            src="https://player.vimeo.com/video/126945693?title=0&amp;byline=0&amp;portrait=0"
                            webkitallowfullscreen=""
                          ></iframe>
                        </div>
                      </div>

                      <div class="card-body">
                        <div class="d-flex align-items-start flex-nowrap">
                          <div>
                            <h6 class="font-weight-semibold mr-2">
                              For ostrich much
                            </h6>
                            <span
                              >Branched is on an ecstatic directly it. Put off
                              continue you denoting returned juvenile ones</span
                            >
                          </div>

                          <div class="list-icons list-icons-extended ml-auto">
                            <a href="#" class="list-icons-item"
                              ><i class="icon-download top-0"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="card">
                      <div class="card-img-actions mx-1 mt-1">
                        <div
                          class="card-img embed-responsive embed-responsive-16by9"
                        >
                          <iframe
                            allowfullscreen=""
                            frameborder="0"
                            mozallowfullscreen=""
                            src="https://player.vimeo.com/video/89546048?title=0&amp;byline=0&amp;portrait=0"
                            webkitallowfullscreen=""
                          ></iframe>
                        </div>
                      </div>

                      <div class="card-body">
                        <div class="d-flex align-items-start flex-nowrap">
                          <div>
                            <h6 class="font-weight-semibold mr-2">
                              An so vulgar
                            </h6>
                            <span
                              >On projection apartments unsatiable so if he
                              entreaties appearance you wife how we lady
                              half</span
                            >
                          </div>

                          <div class="list-icons list-icons-extended ml-auto">
                            <a href="#" class="list-icons-item"
                              ><i class="icon-download top-0"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /videos -->
              </div>

              <div class="tab-pane fade" id="photos">
                <!-- Photos -->
                <div class="row">
                  <div class="col-sm-6 col-xl-4">
                    <div class="card">
                      <div class="card-img-actions mx-1 mt-1">
                        <img
                          class="card-img img-fluid"
                          src="global_assets/images/demo/flat/1.png"
                          alt=""
                        />
                        <div class="card-img-actions-overlay card-img">
                          <a
                            href="global_assets/images/demo/flat/1.png"
                            class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round"
                            data-popup="lightbox"
                            rel="group"
                          >
                            <i class="icon-plus3"></i>
                          </a>

                          <a
                            href="#"
                            class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2"
                          >
                            <i class="icon-link"></i>
                          </a>
                        </div>
                      </div>

                      <div class="card-body">
                        <div class="d-flex align-items-start flex-nowrap">
                          <div>
                            <div class="font-weight-semibold mr-2">
                              For ostrich much
                            </div>
                            <span class="font-size-sm text-muted"
                              >Size: 432kb</span
                            >
                          </div>

                          <div class="list-icons list-icons-extended ml-auto">
                            <a href="#" class="list-icons-item"
                              ><i class="icon-download top-0"></i
                            ></a>
                            <a href="#" class="list-icons-item"
                              ><i class="icon-bin top-0"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="card">
                      <div class="card-img-actions mx-1 mt-1">
                        <img
                          class="card-img img-fluid"
                          src="global_assets/images/demo/flat/1.png"
                          alt=""
                        />
                        <div class="card-img-actions-overlay card-img">
                          <a
                            href="global_assets/images/demo/flat/1.png"
                            class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round"
                            data-popup="lightbox"
                            rel="group"
                          >
                            <i class="icon-plus3"></i>
                          </a>

                          <a
                            href="#"
                            class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2"
                          >
                            <i class="icon-link"></i>
                          </a>
                        </div>
                      </div>

                      <div class="card-body">
                        <div class="d-flex align-items-start flex-nowrap">
                          <div>
                            <div class="font-weight-semibold mr-2">
                              For ostrich much
                            </div>
                            <span class="font-size-sm text-muted"
                              >Size: 432kb</span
                            >
                          </div>

                          <div class="list-icons list-icons-extended ml-auto">
                            <a href="#" class="list-icons-item"
                              ><i class="icon-download top-0"></i
                            ></a>
                            <a href="#" class="list-icons-item"
                              ><i class="icon-bin top-0"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="card">
                      <div class="card-img-actions mx-1 mt-1">
                        <img
                          class="card-img img-fluid"
                          src="global_assets/images/demo/flat/1.png"
                          alt=""
                        />
                        <div class="card-img-actions-overlay card-img">
                          <a
                            href="global_assets/images/demo/flat/1.png"
                            class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round"
                            data-popup="lightbox"
                            rel="group"
                          >
                            <i class="icon-plus3"></i>
                          </a>

                          <a
                            href="#"
                            class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2"
                          >
                            <i class="icon-link"></i>
                          </a>
                        </div>
                      </div>

                      <div class="card-body">
                        <div class="d-flex align-items-start flex-nowrap">
                          <div>
                            <div class="font-weight-semibold mr-2">
                              For ostrich much
                            </div>
                            <span class="font-size-sm text-muted"
                              >Size: 432kb</span
                            >
                          </div>

                          <div class="list-icons list-icons-extended ml-auto">
                            <a href="#" class="list-icons-item"
                              ><i class="icon-download top-0"></i
                            ></a>
                            <a href="#" class="list-icons-item"
                              ><i class="icon-bin top-0"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Photos -->
              </div>
              <div class="tab-pane fade" id="star">
                <!-- Star -->
                <div class="row">
                  <div class="col-sm-6 col-xl-4">
                    <div class="card">
                      <div class="card-img-actions mx-1 mt-1">
                        <img
                          class="card-img img-fluid"
                          src="global_assets/images/demo/flat/1.png"
                          alt=""
                        />
                        <div class="card-img-actions-overlay card-img">
                          <a
                            href="global_assets/images/demo/flat/1.png"
                            class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round"
                            data-popup="lightbox"
                            rel="group"
                          >
                            <i class="icon-plus3"></i>
                          </a>

                          <a
                            href="#"
                            class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2"
                          >
                            <i class="icon-link"></i>
                          </a>
                        </div>
                      </div>

                      <div class="card-body">
                        <div class="d-flex align-items-start flex-nowrap">
                          <div>
                            <div class="font-weight-semibold mr-2">
                              For ostrich much
                            </div>
                            <span class="font-size-sm text-muted"
                              >Size: 432kb</span
                            >
                          </div>

                          <div class="list-icons list-icons-extended ml-auto">
                            <a href="#" class="list-icons-item"
                              ><i class="icon-download top-0"></i
                            ></a>
                            <a href="#" class="list-icons-item"
                              ><i class="icon-bin top-0"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="card">
                      <div class="card-img-actions mx-1 mt-1">
                        <img
                          class="card-img img-fluid"
                          src="global_assets/images/demo/flat/1.png"
                          alt=""
                        />
                        <div class="card-img-actions-overlay card-img">
                          <a
                            href="global_assets/images/demo/flat/1.png"
                            class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round"
                            data-popup="lightbox"
                            rel="group"
                          >
                            <i class="icon-plus3"></i>
                          </a>

                          <a
                            href="#"
                            class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2"
                          >
                            <i class="icon-link"></i>
                          </a>
                        </div>
                      </div>

                      <div class="card-body">
                        <div class="d-flex align-items-start flex-nowrap">
                          <div>
                            <div class="font-weight-semibold mr-2">
                              For ostrich much
                            </div>
                            <span class="font-size-sm text-muted"
                              >Size: 432kb</span
                            >
                          </div>

                          <div class="list-icons list-icons-extended ml-auto">
                            <a href="#" class="list-icons-item"
                              ><i class="icon-download top-0"></i
                            ></a>
                            <a href="#" class="list-icons-item"
                              ><i class="icon-bin top-0"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="card">
                      <div class="card-img-actions mx-1 mt-1">
                        <img
                          class="card-img img-fluid"
                          src="global_assets/images/demo/flat/1.png"
                          alt=""
                        />
                        <div class="card-img-actions-overlay card-img">
                          <a
                            href="global_assets/images/demo/flat/1.png"
                            class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round"
                            data-popup="lightbox"
                            rel="group"
                          >
                            <i class="icon-plus3"></i>
                          </a>

                          <a
                            href="#"
                            class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2"
                          >
                            <i class="icon-link"></i>
                          </a>
                        </div>
                      </div>

                      <div class="card-body">
                        <div class="d-flex align-items-start flex-nowrap">
                          <div>
                            <div class="font-weight-semibold mr-2">
                              For ostrich much
                            </div>
                            <span class="font-size-sm text-muted"
                              >Size: 432kb</span
                            >
                          </div>

                          <div class="list-icons list-icons-extended ml-auto">
                            <a href="#" class="list-icons-item"
                              ><i class="icon-download top-0"></i
                            ></a>
                            <a href="#" class="list-icons-item"
                              ><i class="icon-bin top-0"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Star -->
              </div>
            </div>
            <!-- /right content -->
          </div>
          <!-- /inner container -->
        </div>
        <!-- /content area -->
      </div>
      <!-- /main content -->
    </div>
    <!-- /page content -->
@endsection