@extends('common.layout')
@section('breadcrumb')
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            <a href="/cms" class="text-muted text-hover-primary">Anasayfa</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">Stok Bilgileri</li>
        <!--end::Item-->
    </ul>
@endsection
@section('content')
    <div class="card card-flush">
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-ecommerce-category-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Arama">
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
                <!--begin::Table head-->
                <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-30px pe-2"><i class="bi bi-card-checklist"></i></th>
                        <th class="min-w-250px">KOD</th>
                        <th class="min-w-250px">ADI</th>
                    </tr>
                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-semibold text-gray-600">
                    @foreach($data as $item)
                    <!--begin::Table row-->
                    <tr>
                        <td> {{ $item->id }}</td>
                        <!--begin::Category=-->
                        <td>
                            <div class="d-flex">
                                <div class="d-flex align-items-center ms-5">
                                    <!--begin::Title-->
                                    <a href="#//" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1">{{ $item->code }}</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <div class="d-flex align-items-center ms-5">
                                    <!--begin::Title-->
                                    <a href="#//" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1">{{ $item->name }}</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <!--end::Category=-->
                    </tr>
                    <!--end::Table row-->
                    @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
@endsection

@section('footer_scripts')
    <!--begin::Vendors Javascript(used by this page)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/categories.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection
