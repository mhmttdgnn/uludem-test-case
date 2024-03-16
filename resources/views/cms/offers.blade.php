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
        <li class="breadcrumb-item text-muted">Teklifler</li>
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
            <div class="card-toolbar">
                <!--begin::Add customer-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_offer_modal">Yeni Teklif</button>
                <!--end::Add customer-->
            </div>
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
                        <th class="min-w-250px">Başlık</th>
                        <th class="min-w-250px">Cari Kodu</th>
                        <th class="min-w-250px">Stok Kodu</th>
                        <th class="text-end min-w-70px"><i class="bi bi-menu-button-wide-fill"></i></th>
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
                                    <a href="#//" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1">{{ $item->title }}</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <div class="d-flex align-items-center ms-5">
                                    <!--begin::Title-->
                                    <a href="#//" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1">{{ $item->account->code }}</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <div class="d-flex align-items-center ms-5">
                                    <!--begin::Title-->
                                    <a href="#//" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1">{{ $item->stock->code }}</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <!--end::Category=-->
                        <!--begin::Action=-->
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">İşlem
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon--></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#//" class="menu-link px-3 offer-view" data-id="{{ $item->id }}">Görüntüle</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                        <!--end::Action=-->
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

    <!--begin::Modals-->
        <!--begin::Modal - Create Offer-->
        <div class="modal fade" id="create_offer_modal" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header border-0">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-start align-items-center position-relative ms-10 mt-5 mb-3 h1">
                            Teklif Oluştur
                        </div>
                        <!--end::Title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-lg-10 px-lg-10">
                        <form action="" id="create_offer_modal_form">
                            @csrf
                            <div class="border border-hover-primary p-7 rounded mb-7">
                                <span class="d-inline-block position-relative mb-8">
                                    <span class="d-inline-block mb-2 fs-4 fw-bold">
                                        Teklif Bilgileri
                                    </span>
                                    <span class="d-inline-block position-absolute h-6px bottom-0 end-0 start-0 bg-info translate rounded"></span>
                                </span>
                                <div class="row">
                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <div class="mb-2">
                                            <input type="text"
                                                name="title"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="Başlık" required>
                                        </div>
                                        <div class="mb-2">
                                            <select name="account_id"
                                                id="create_offer_modal_accounts"
                                                class="form-select form-select-solid"
                                                required>
                                                <option value="">Cari Kodu Seçin...</option>
                                            </select>
                                        </div>
                                        <div class="mb-2">
                                            <select name="stock_id"
                                                id="create_offer_modal_stocks"
                                                class="form-select form-select-solid"
                                                required>
                                                <option value="">Stok Kodu Seçin...</option>
                                            </select>
                                        </div>
                                        <div class="mb-2">
                                            <input type="text"
                                                name="price"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="Fiyat" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="text-end">
                            <button id="create_offer_modal_button"
                                class="btn btn-lg btn-primary px-12">
                                <span class="indicator-label">
                                    KAYDET
                                </span>
                                <span class="indicator-progress">
                                    Lütfen Bekleyiniz... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Create Offer-->

        <!--begin::Modal - View Offer-->
        <div class="modal fade" id="view_offer_modal" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header border-0">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-start align-items-center position-relative ms-10 mt-5 mb-3 h1">
                            Teklif Görüntüle
                        </div>
                        <!--end::Title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-lg-10 px-lg-10">
                        <div class="border border-hover-primary p-7 rounded mb-7">
                            <span class="d-inline-block position-relative mb-8">
                                <span class="d-inline-block mb-2 fs-4 fw-bold">
                                    Teklif Bilgileri
                                </span>
                                <span class="d-inline-block position-absolute h-6px bottom-0 end-0 start-0 bg-info translate rounded"></span>
                            </span>
                            <div class="row">
                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <div class="mb-2">
                                        <input type="text"
                                            name="title"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                            placeholder="Başlık" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <select name="account_id"
                                            id="view_offer_modal_accounts"
                                            class="form-select form-select-solid"
                                            disabled>
                                            <option value="">Cari Kodu Seçin...</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <select name="stock_id"
                                            id="view_offer_modal_stocks"
                                            class="form-select form-select-solid"
                                            disabled>
                                            <option value="">Stok Kodu Seçin...</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <input type="text"
                                            name="price"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                            placeholder="Fiyat" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - View Offer-->
    <!--end::Modals-->
@endsection

@section('footer_scripts')
    <!--begin::Vendors Javascript(used by this page)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/categories.js') }}"></script>
    <!--end::Vendors Javascript-->

    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            // "positionClass": "toastr-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>

    <script>
        $('#create_offer_modal_accounts').select2({
            dropdownParent: $("#create_offer_modal_accounts").parent()
        });

        $('#create_offer_modal_stocks').select2({
            dropdownParent: $("#create_offer_modal_stocks").parent()
        });

        $.ajax({
            type: "POST",
            url: "{{ route('getAccounts') }}",
            data:{
                _token: '{{ csrf_token() }}'
            } ,
            success: function (response) {
                if (response) {
                    let html = '<option value="">Cari Kodu Seçin</option>';
                    $.each(response, function (index, item) {
                        html += `<option value=${item.id}>${item.code}</option>`;
                    });
                    $('#create_offer_modal_accounts').html(html);
                }
            }
        });

        $.ajax({
            type: "POST",
            url: "{{ route('getStocks') }}",
            data:{
                _token: '{{ csrf_token() }}'
            } ,
            success: function (response) {
                if (response) {
                    let html = '<option value="">Stok Kodu Seçin</option>';
                    $.each(response, function (index, item) {
                        html += `<option value=${item.id}>${item.code}</option>`;
                    });
                    $('#create_offer_modal_stocks').html(html);
                }
            }
        });
    </script>

    <script>
        // KAYDET
        $('#create_offer_modal_button').on('click', function () {
            let button = $(this);
            let form = $('#create_offer_modal_form');
            let formData = form.serializeArray();

            button.attr('data-kt-indicator', 'on');
            button.attr('disabled', 'disabled');
            $.ajax({
                type: "POST",
                url: "{{ route('store_offer') }}",
                data: formData,
                success: function (response, text, xhr) {
                    console.log(response);
                    if (xhr.status == 200) {
                        toastr.success('Teklif Başarıyla Oluşturuldu!');
                        button.removeAttr('data-kt-indicator');
                        button.removeAttr('disabled');
                        location.reload();
                    } else {
                        toastr.error('Bir hata oluştu!');
                        button.removeAttr('data-kt-indicator');
                        button.removeAttr('disabled');
                    }
                }
            });
        });

        // GÖRÜNTÜLE
        $('.offer-view').on('click', function () {
            let id = $(this).data('id');
            $.ajax({
                type: "GET",
                url: "{{ route('view_offer') }}",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id
                },
                success: function (response) {
                    if (response) {
                        $('#view_offer_modal').modal('show');

                        $('#view_offer_modal input[name="title"]').val(response.data.title);

                        $('#view_offer_modal select[name="account_id"]').empty();
                        $('#view_offer_modal select[name="account_id"]').append('<option value="' + response.data.account_id + '" selected>' + response.data.account.code + '</option>');

                        $('#view_offer_modal select[name="stock_id"]').empty();
                        $('#view_offer_modal select[name="stock_id"]').append('<option value="' + response.data.stock_id + '" selected>' + response.data.stock.code + '</option>');

                        $('#view_offer_modal input[name="price"]').val(response.data.price);
                    }
                }
            });
        });
    </script>
@endsection
