@extends('layouts.app')

@section('title', 'Bienvenido lindo (a)')

@section('content')
<div class="d-flex flex-column flex-root">
    <div class="page d-flex flex-row flex-column-fluid">
        @include('shared.sidebar')
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            @include('shared.header')
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                @include('home.components.navbar')
                <div class="post d-flex flex-column-fluid mt-lg-20" id="kt_post">
                    <div id="kt_content_container" class="container-xxl mt-lg-20">
                        <div class="row gy-5 g-xl-10">
                            <div class="col-xl-12 mb-5 mb-xl-10">
                                <div class="row g-lg-5 g-xl-10">
                                    <div class="col-md-6 col-xl-6 mb-5 mb-xl-10">
                                        <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                                            <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                                <div class="mb-4 px-9">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1">47,769,700</span>
                                                        <span class="d-flex align-items-end text-gray-400 fs-6 fw-bold">Tons</span>
                                                    </div>
                                                    <span class="fs-6 fw-bold text-gray-400">Total Cargo Tonnage</span>
                                                </div>
                                                <div id="kt_card_widget_8_chart" class="min-h-auto" style="height: 125px"></div>
                                            </div>
                                        </div>
                                        <div class="card card-flush h-md-50 mb-lg-10">
                                            <div class="card-header pt-5">
                                                <div class="card-title d-flex flex-column">
                                                    <span class="fs-2hx fw-bolder text-dark me-2 lh-1">69,700</span>
                                                    <span class="text-gray-400 pt-1 fw-bold fs-6">Expected Earnings This
                                                        Month</span>
                                                </div>
                                            </div>
                                            <div class="card-body d-flex align-items-end pt-0">
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <div class="d-flex me-7 me-xxl-10">
                                                        <div id="kt_card_widget_10_chart" class="min-h-auto" style="height: 78px; width: 78px" data-kt-size="78" data-kt-line="11"></div>
                                                    </div>
                                                    <div class="d-flex flex-column content-justify-center flex-grow-1">
                                                        <div class="d-flex fs-6 fw-bold align-items-center">
                                                            <div class="bullet w-8px h-6px rounded-2 bg-success me-3">
                                                            </div>
                                                            <div class="fs-6 fw-bold text-gray-400 flex-shrink-0">Used
                                                                Truck freight</div>
                                                            <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                                            </div>
                                                            <div class="ms-auto fw-boldest text-gray-700 text-end">45%
                                                            </div>
                                                        </div>
                                                        <div class="d-flex fs-6 fw-bold align-items-center my-1">
                                                            <div class="bullet w-8px h-6px rounded-2 bg-primary me-3">
                                                            </div>
                                                            <div class="fs-6 fw-bold text-gray-400 flex-shrink-0">Used
                                                                Ship freight</div>
                                                            <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                                            </div>
                                                            <div class="ms-auto fw-boldest text-gray-700 text-end">21%
                                                            </div>
                                                        </div>
                                                        <div class="d-flex fs-6 fw-bold align-items-center">
                                                            <div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                                            <div class="fs-6 fw-bold text-gray-400 flex-shrink-0">Used
                                                                Plane freight</div>
                                                            <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                                            </div>
                                                            <div class="ms-auto fw-boldest text-gray-700 text-end">34%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-6 mb-md-5 mb-xl-10">
                                        <!--begin::Card widget 9-->
                                        <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                                <!--begin::Statistics-->
                                                <div class="mb-4 px-9">
                                                    <!--begin::Statistics-->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <!--begin::Value-->
                                                        <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1">259,786</span>
                                                        <!--end::Value-->
                                                        <!--begin::Label-->
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Statistics-->
                                                    <!--begin::Description-->
                                                    <span class="fs-6 fw-bold text-gray-400">Total Shipments</span>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Statistics-->
                                                <!--begin::Chart-->
                                                <div id="kt_card_widget_9_chart" class="min-h-auto" style="height: 125px"></div>
                                                <!--end::Chart-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card widget 9-->
                                        <!--begin::Card widget 7-->
                                        <div class="card card-flush h-md-50 mb-lg-10">
                                            <!--begin::Header-->
                                            <div class="card-header pt-5">
                                                <!--begin::Title-->
                                                <div class="card-title d-flex flex-column">
                                                    <!--begin::Amount-->
                                                    <span class="fs-2hx fw-bolder text-dark me-2 lh-1">604</span>
                                                    <!--end::Amount-->
                                                    <!--begin::Subtitle-->
                                                    <span class="text-gray-400 pt-1 fw-bold fs-6">New Customers This
                                                        Month</span>
                                                    <!--end::Subtitle-->
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column justify-content-end pe-0">
                                                <!--begin::Title-->
                                                <span class="fs-6 fw-boldest text-gray-800 d-block mb-2">Today’s
                                                    Heroes</span>
                                                <!--end::Title-->
                                                <!--begin::Users group-->
                                                <div class="symbol-group symbol-hover flex-nowrap">
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                                        <span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                                        <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                                        <span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                                        <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                                        <span class="symbol-label bg-danger text-inverse-danger fw-bolder">P</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                                        <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                                    </div>
                                                    <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                                        <span class="symbol-label bg-light text-gray-400 fs-8 fw-bolder">+42</span>
                                                    </a>
                                                </div>
                                                <!--end::Users group-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card widget 7-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row gy-5 g-xl-10">
                            <!--begin::Col-->
                            <div class="col-xl-4 mb-xl-10">
                                <!--begin::List widget 10-->
                                <div class="card card-flush h-lg-100">
                                    <!--begin::Header-->
                                    <div class="card-header pt-7">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-gray-800">Shipment History</span>
                                            <span class="text-gray-400 mt-1 fw-bold fs-6">59 Active Shipments</span>
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle='tooltip' data-bs-dismiss='click' data-bs-custom-class="tooltip-dark" title="Logistics App is coming soon">View All</a>
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin::Nav-->
                                        <ul class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9">
                                            <!--begin::Item-->
                                            <li class="nav-item col-4 mx-0 p-0">
                                                <!--begin::Link-->
                                                <a class="nav-link active d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_10_tab_1">
                                                    <!--begin::Subtitle-->
                                                    <span class="nav-text text-gray-800 fw-bolder fs-6 mb-3">Notable</span>
                                                    <!--end::Subtitle-->
                                                    <!--begin::Bullet-->
                                                    <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="nav-item col-4 mx-0 px-0">
                                                <!--begin::Link-->
                                                <a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_10_tab_2">
                                                    <!--begin::Subtitle-->
                                                    <span class="nav-text text-gray-800 fw-bolder fs-6 mb-3">Delivered</span>
                                                    <!--end::Subtitle-->
                                                    <!--begin::Bullet-->
                                                    <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="nav-item col-4 mx-0 px-0">
                                                <!--begin::Link-->
                                                <a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_10_tab_3">
                                                    <!--begin::Subtitle-->
                                                    <span class="nav-text text-gray-800 fw-bolder fs-6 mb-3">Shipping</span>
                                                    <!--end::Subtitle-->
                                                    <!--begin::Bullet-->
                                                    <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Bullet-->
                                            <span class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>
                                            <!--end::Bullet-->
                                        </ul>
                                        <!--end::Nav-->
                                        <!--begin::Tab Content-->
                                        <div class="tab-content">
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade show active" id="kt_list_widget_10_tab_1">
                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                <span class="svg-icon svg-icon-2x svg-icon-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-400 fs-6 fw-bold">Ship
                                                                    Freight</a>
                                                                <span class="text-gray-800 fw-bolder d-block fs-4">#5635-342808</span>
                                                            </div>
                                                            <span class="badge badge-lg badge-light-success fw-bolder my-2">Delivered</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                                            <!--end::Timeline line-->
                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="black" />
                                                                        <path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Timeline icon-->
                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">Messina
                                                                    Harbor</span>
                                                                <!--end::Title-->
                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bolder text-gray-800">Sicily,
                                                                    Italy</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line w-40px"></div>
                                                            <!--end::Timeline line-->
                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
                                                                        <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Timeline icon-->
                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">Hektor
                                                                    Container Hotel</span>
                                                                <!--end::Title-->
                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bolder text-gray-800">Tallin,
                                                                    EST</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                    </div>
                                                    <!--end::Timeline-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                <span class="svg-icon svg-icon-2x svg-icon-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-400 fs-6 fw-bold">Truck
                                                                    Freight</a>
                                                                <span class="text-gray-800 fw-bolder d-block fs-4">#0066-954784</span>
                                                            </div>
                                                            <span class="badge badge-lg badge-light-primary fw-bolder my-2">Shipping</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                                            <!--end::Timeline line-->
                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="black" />
                                                                        <path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Timeline icon-->
                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">Haven
                                                                    van Rotterdam</span>
                                                                <!--end::Title-->
                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bolder text-gray-800">Rotterdam,
                                                                    Netherlands</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line w-40px"></div>
                                                            <!--end::Timeline line-->
                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
                                                                        <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Timeline icon-->
                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">Forest-Midi</span>
                                                                <!--end::Title-->
                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bolder text-gray-800">Brussels,
                                                                    Belgium</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                    </div>
                                                    <!--end::Timeline-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                <span class="svg-icon svg-icon-2x svg-icon-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-400 fs-6 fw-bold">Ship
                                                                    Freight</a>
                                                                <span class="text-gray-800 fw-bolder d-block fs-4">#5635-342808</span>
                                                            </div>
                                                            <span class="badge badge-lg badge-light-success fw-bolder my-2">Delivered</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                                            <!--end::Timeline line-->
                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="black" />
                                                                        <path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Timeline icon-->
                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">Mina
                                                                    St - Zayed Port</span>
                                                                <!--end::Title-->
                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bolder text-gray-800">Abu Dhabi,
                                                                    UAE</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line w-40px"></div>
                                                            <!--end::Timeline line-->
                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
                                                                        <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Timeline icon-->
                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">27
                                                                    Drydock Boston</span>
                                                                <!--end::Title-->
                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bolder text-gray-800">Boston,
                                                                    USA</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                    </div>
                                                    <!--end::Timeline-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                <span class="svg-icon svg-icon-2x svg-icon-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-400 fs-6 fw-bold">Plane
                                                                    Freight</a>
                                                                <span class="text-gray-800 fw-bolder d-block fs-4">#5635-342808</span>
                                                            </div>
                                                            <span class="badge badge-lg badge-light-danger fw-bolder my-2">Delayed</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                                            <!--end::Timeline line-->
                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="black" />
                                                                        <path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Timeline icon-->
                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">KLM
                                                                    Cargo</span>
                                                                <!--end::Title-->
                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bolder text-gray-800">Schipol
                                                                    Airport, Amsterdam</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line w-40px"></div>
                                                            <!--end::Timeline line-->
                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
                                                                        <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Timeline icon-->
                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">Singapore
                                                                    Cargo</span>
                                                                <!--end::Title-->
                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bolder text-gray-800">Changi
                                                                    Airport, Singapore</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                    </div>
                                                    <!--end::Timeline-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade" id="kt_list_widget_10_tab_2">
                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                <span class="svg-icon svg-icon-2x svg-icon-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-400 fs-6 fw-bold">Plane
                                                                    Freight</a>
                                                                <span class="text-gray-800 fw-bolder d-block fs-4">#5635-342808</span>
                                                            </div>
                                                            <span class="badge badge-lg badge-light-success fw-bolder my-2">Delivered</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                                            <!--end::Timeline line-->
                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="black" />
                                                                        <path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Timeline icon-->
                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">KLM
                                                                    Cargo</span>
                                                                <!--end::Title-->
                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bolder text-gray-800">Schipol
                                                                    Airport, Amsterdam</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line w-40px"></div>
                                                            <!--end::Timeline line-->
                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
                                                                        <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Timeline icon-->
                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">Singapore
                                                                    Cargo</span>
                                                                <!--end::Title-->
                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bolder text-gray-800">Changi
                                                                    Airport, Singapore</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                    </div>
                                                    <!--end::Timeline-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                <span class="svg-icon svg-icon-2x svg-icon-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-400 fs-6 fw-bold">Truck
                                                                    Freight</a>
                                                                <span class="text-gray-800 fw-bolder d-block fs-4">#0066-954784</span>
                                                            </div>
                                                            <span class="badge badge-lg badge-light-success fw-bolder my-2">Delivered</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                                            <!--end::Timeline line-->
                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="black" />
                                                                        <path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Timeline icon-->
                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">Haven
                                                                    van Rotterdam</span>
                                                                <!--end::Title-->
                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bolder text-gray-800">Rotterdam,
                                                                    Netherlands</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line w-40px"></div>
                                                            <!--end::Timeline line-->
                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
                                                                        <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Timeline icon-->
                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">Forest-Midi</span>
                                                                <!--end::Title-->
                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bolder text-gray-800">Brussels,
                                                                    Belgium</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                    </div>
                                                    <!--end::Timeline-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                <span class="svg-icon svg-icon-2x svg-icon-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-400 fs-6 fw-bold">Ship
                                                                    Freight</a>
                                                                <span class="text-gray-800 fw-bolder d-block fs-4">#5635-342808</span>
                                                            </div>
                                                            <span class="badge badge-lg badge-light-success fw-bolder my-2">Delivered</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                                            <!--end::Timeline line-->
                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="black" />
                                                                        <path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Timeline icon-->
                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">Mina
                                                                    St - Zayed Port</span>
                                                                <!--end::Title-->
                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bolder text-gray-800">Abu Dhabi,
                                                                    UAE</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <div class="timeline-line w-40px"></div>
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
                                                                        <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="timeline-content m-0">
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">27
                                                                    Drydock Boston</span>
                                                                <span class="fs-6 fw-bolder text-gray-800">Boston,
                                                                    USA</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator separator-dashed my-6"></div>
                                                <div class="m-0">
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <span class="svg-icon svg-icon-2x svg-icon-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-400 fs-6 fw-bold">Ship
                                                                    Freight</a>
                                                                <span class="text-gray-800 fw-bolder d-block fs-4">#5635-342808</span>
                                                            </div>
                                                            <span class="badge badge-lg badge-light-success fw-bolder my-2">Delivered</span>
                                                        </div>
                                                    </div>
                                                    <div class="timeline">
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="black" />
                                                                        <path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="timeline-content m-0">
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">Messina
                                                                    Harbor</span>
                                                                <span class="fs-6 fw-bolder text-gray-800">Sicily,
                                                                    Italy</span>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-item align-items-center">
                                                            <div class="timeline-line w-40px"></div>
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
                                                                        <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="timeline-content m-0">
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">Hektor
                                                                    Container Hotel</span>
                                                                <span class="fs-6 fw-bolder text-gray-800">Tallin,
                                                                    EST</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="kt_list_widget_10_tab_3">
                                                <div class="m-0">
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <span class="svg-icon svg-icon-2x svg-icon-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-400 fs-6 fw-bold">Ship
                                                                    Freight</a>
                                                                <span class="text-gray-800 fw-bolder d-block fs-4">#5635-342808</span>
                                                            </div>
                                                            <span class="badge badge-lg badge-light-primary fw-bolder my-2">Shipping</span>
                                                        </div>
                                                    </div>
                                                    <div class="timeline">
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="black" />
                                                                        <path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="timeline-content m-0">
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">Mina
                                                                    St - Zayed Port</span>
                                                                <span class="fs-6 fw-bolder text-gray-800">Abu Dhabi,
                                                                    UAE</span>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-item align-items-center">
                                                            <div class="timeline-line w-40px"></div>
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
                                                                        <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="timeline-content m-0">
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">27
                                                                    Drydock Boston</span>
                                                                <span class="fs-6 fw-bolder text-gray-800">Boston,
                                                                    USA</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator separator-dashed my-6"></div>
                                                <div class="m-0">
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <span class="svg-icon svg-icon-2x svg-icon-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-400 fs-6 fw-bold">Plane
                                                                    Freight</a>
                                                                <span class="text-gray-800 fw-bolder d-block fs-4">#5635-342808</span>
                                                            </div>
                                                            <span class="badge badge-lg badge-light-primary fw-bolder my-2">Shipping</span>
                                                        </div>
                                                    </div>
                                                    <div class="timeline">
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="black" />
                                                                        <path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="timeline-content m-0">
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">KLM
                                                                    Cargo</span>
                                                                <span class="fs-6 fw-bolder text-gray-800">Schipol
                                                                    Airport, Amsterdam</span>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-item align-items-center">
                                                            <div class="timeline-line w-40px"></div>
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
                                                                        <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="timeline-content m-0">
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">Singapore
                                                                    Cargo</span>
                                                                <span class="fs-6 fw-bolder text-gray-800">Changi
                                                                    Airport, Singapore</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator separator-dashed my-6"></div>
                                                <div class="m-0">
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <span class="svg-icon svg-icon-2x svg-icon-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-400 fs-6 fw-bold">Ship
                                                                    Freight</a>
                                                                <span class="text-gray-800 fw-bolder d-block fs-4">#5635-342808</span>
                                                            </div>
                                                            <span class="badge badge-lg badge-light-primary fw-bolder my-2">Shipping</span>
                                                        </div>
                                                    </div>
                                                    <div class="timeline">
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="black" />
                                                                        <path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="timeline-content m-0">
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">Messina
                                                                    Harbor</span>
                                                                <span class="fs-6 fw-bolder text-gray-800">Sicily,
                                                                    Italy</span>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-item align-items-center">
                                                            <div class="timeline-line w-40px"></div>
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
                                                                        <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="timeline-content m-0">
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">Hektor
                                                                    Container Hotel</span>
                                                                <span class="fs-6 fw-bolder text-gray-800">Tallin,
                                                                    EST</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator separator-dashed my-6"></div>
                                                <div class="m-0">
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <span class="svg-icon svg-icon-2x svg-icon-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-400 fs-6 fw-bold">Truck
                                                                    Freight</a>
                                                                <span class="text-gray-800 fw-bolder d-block fs-4">#0066-954784</span>
                                                            </div>
                                                            <span class="badge badge-lg badge-light-primary fw-bolder my-2">Shipping</span>
                                                        </div>
                                                    </div>
                                                    <div class="timeline">
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="black" />
                                                                        <path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="timeline-content m-0">
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">Haven
                                                                    van Rotterdam</span>
                                                                <span class="fs-6 fw-bolder text-gray-800">Rotterdam,
                                                                    Netherlands</span>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-item align-items-center">
                                                            <div class="timeline-line w-40px"></div>
                                                            <div class="timeline-icon" style="margin-left: 11px">
                                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
                                                                        <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="timeline-content m-0">
                                                                <span class="fs-6 text-gray-400 fw-bold d-block">Forest-Midi</span>
                                                                <span class="fs-6 fw-bolder text-gray-800">Brussels,
                                                                    Belgium</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 mb-5 mb-xl-10">
                                <div class="row g-5 g-xl-10 h-xxl-50 mb-0 mb-xl-10">
                                    <div class="col-xxl-6">
                                        <div class="card card-flush h-lg-100">
                                            <div class="card-header py-7 mb-3">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bolder text-gray-800">Top Selling
                                                        Categories</span>
                                                    <span class="text-gray-400 mt-1 fw-bold fs-6">8k social
                                                        visitors</span>
                                                </h3>
                                                <div class="card-toolbar">
                                                    <a href="../../demo1/dist/apps/ecommerce/sales/listing.html" class="btn btn-sm btn-light">View All</a>
                                                </div>
                                            </div>
                                            <div class="card-body py-0 ps-6 mt-n12">
                                                <div id="kt_charts_widget_6"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 mb-5 mb-xl-0">
                                        <div class="card card-flush h-lg-100">
                                            <div class="card-header pt-7 mb-5">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bolder text-gray-800">Visits by
                                                        Country</span>
                                                    <span class="text-gray-400 mt-1 fw-bold fs-6">20 countries share
                                                        97% visits</span>
                                                </h3>
                                                <div class="card-toolbar">
                                                    <a href="../../demo1/dist/apps/ecommerce/sales/listing.html" class="btn btn-sm btn-light">View All</a>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="d-flex flex-stack">
                                                    <div class="d-flex align-items-center me-5">
                                                        <img src="assets/media/flags/united-states.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                                        <div class="me-5">
                                                            <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">United
                                                                States</a>
                                                            <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Direct
                                                                link clicks</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="text-gray-800 fw-bolder fs-6 me-3">9,763</span>
                                                        <div class="">
                                                            <span class="badge badge-success px-2">
                                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
                                                                        <path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                2.6 %
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator separator-dashed my-3"></div>
                                                <div class="d-flex flex-stack">
                                                    <div class="d-flex align-items-center me-5">
                                                        <img src="assets/media/flags/brazil.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                                        <div class="me-5">
                                                            <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Brasil</a>
                                                            <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">All
                                                                Social Channels</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="text-gray-800 fw-bolder fs-6 me-3">4,062</span>
                                                        <div class="">
                                                            <span class="badge badge-danger px-2">
                                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.5" d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z" fill="black" />
                                                                        <path d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                0.4 %
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator separator-dashed my-3"></div>
                                                <div class="d-flex flex-stack">
                                                    <div class="d-flex align-items-center me-5">
                                                        <img src="assets/media/flags/turkey.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                                        <div class="me-5">
                                                            <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Turkey</a>
                                                            <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Mailchimp
                                                                Campaigns</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="text-gray-800 fw-bolder fs-6 me-3">1,680</span>
                                                        <div class="">
                                                            <span class="badge badge-success px-2">
                                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
                                                                        <path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                0.2 %
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator separator-dashed my-3"></div>
                                                <div class="d-flex flex-stack">
                                                    <div class="d-flex align-items-center me-5">
                                                        <img src="assets/media/flags/france.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                                        <div class="me-5">
                                                            <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">France</a>
                                                            <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Impact
                                                                Radius visits</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="text-gray-800 fw-bolder fs-6 me-3">849</span>
                                                        <div class="">
                                                            <span class="badge badge-success px-2">
                                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
                                                                        <path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                4.1 %
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator separator-dashed my-3"></div>
                                                <div class="d-flex flex-stack">
                                                    <div class="d-flex align-items-center me-5">
                                                        <img src="assets/media/flags/india.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                                        <div class="me-5">
                                                            <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">India</a>
                                                            <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Many
                                                                Sources</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="text-gray-800 fw-bolder fs-6 me-3">604</span>
                                                        <div class="">
                                                            <span class="badge badge-danger px-2">
                                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.5" d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z" fill="black" />
                                                                        <path d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                8.3 %
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator separator-dashed my-3"></div>
                                                <div class="d-flex flex-stack">
                                                    <div class="d-flex align-items-center me-5">
                                                        <img src="assets/media/flags/sweden.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                                        <div class="me-5">
                                                            <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Sweden</a>
                                                            <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Social
                                                                Network</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="text-gray-800 fw-bolder fs-6 me-3">237</span>
                                                        <div class="">
                                                            <span class="badge badge-success px-2">
                                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
                                                                        <path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                1.9 %
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row h-xxl-50">
                                    <div class="col">
                                        <div class="card card-flush h-xxl-100">
                                            <div class="card-header pt-7">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bolder text-gray-800">Freight
                                                        Tonnage</span>
                                                    <span class="text-gray-400 mt-1 fw-bold fs-6">3,567,457 tons</span>
                                                </h3>
                                                <div class="card-toolbar">
                                                    <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                                                        <div class="text-gray-600 fw-bolder">Loading date range...
                                                        </div>
                                                        <span class="svg-icon svg-icon-1 ms-2 me-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
                                                                <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
                                                                <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body d-flex flex-column justify-content-between pb-5">
                                                <ul class="nav nav-pills nav-pills-custom mb-3">
                                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                                        <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" id="kt_charts_widget_10_tab_1" href="#kt_charts_widget_10_tab_content_1">
                                                            <div class="nav-icon mb-3">
                                                                <i class="fonticon-ship fs-1 p-0"></i>
                                                            </div>
                                                            <span class="nav-text text-gray-800 fw-bolder fs-6 lh-1">Ship</span>
                                                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                                        <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_10_tab_2" href="#kt_charts_widget_10_tab_content_2">
                                                            <div class="nav-icon mb-3">
                                                                <i class="fonticon-truck fs-1 p-0"></i>
                                                            </div>
                                                            <span class="nav-text text-gray-800 fw-bolder fs-6 lh-1">Truck</span>
                                                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                                        <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_10_tab_3" href="#kt_charts_widget_10_tab_content_3">
                                                            <div class="nav-icon mb-3">
                                                                <i class="fonticon-offline fs-1 p-0"></i>
                                                            </div>
                                                            <span class="nav-text text-gray-800 fw-bolder fs-6 lh-1">Plane</span>
                                                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                                        <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_10_tab_4" href="#kt_charts_widget_10_tab_content_4">
                                                            <div class="nav-icon mb-3">
                                                                <i class="fonticon-train fs-1 p-0"></i>
                                                            </div>
                                                            <span class="nav-text text-gray-800 fw-bolder fs-6 lh-1">Train</span>
                                                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade active show" id="kt_charts_widget_10_tab_content_1">
                                                        <div id="kt_charts_widget_10_chart_1" class="min-h-auto" style="height: 270px"></div>
                                                    </div>
                                                    <div class="tab-pane fade" id="kt_charts_widget_10_tab_content_2">
                                                        <div id="kt_charts_widget_10_chart_2" class="min-h-auto" style="height: 270px"></div>
                                                    </div>
                                                    <div class="tab-pane fade" id="kt_charts_widget_10_tab_content_3">
                                                        <div id="kt_charts_widget_10_chart_3" class="min-h-auto" style="height: 270px"></div>
                                                    </div>
                                                    <div class="tab-pane fade" id="kt_charts_widget_10_tab_content_4">
                                                        <div id="kt_charts_widget_10_chart_4" class="min-h-auto" style="height: 270px"></div>
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
            </div>
        </div>
    </div>
</div>
@endsection
