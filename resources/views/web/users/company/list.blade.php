@extends('web.users.user-menu')
@section('user.css')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .job-list {
            max-width: 800px;
            margin: 20px auto;
            padding: 0;
            list-style: none;
        }

        @media (max-width: 767px) {
            .job-item {
                padding: 10px 15px !important;
            }

            .job-stats {
                transform: translate(0px, 0px) !important;

            }

            .job-title {
                font-size: 16px !important;
                max-width: 200px;
            }

            .premium-job {
                padding-top: 30px; /* Mobilde ekstra üst boşluk */
            }

            .premium-job::before {
                top: 0 !important;; /* Etiketi resmin üst kısmına hizala */
                font-size: 10px !important; /* Küçük yazı boyutu */
                padding: 1px 6px; /* Etiketin boyutunu küçült */
                right: 10px !important;
            }
            .new-job {
                padding-top: 30px; /* Mobilde ekstra üst boşluk */
            }

            .new-job::before {
                top: 0 !important;; /* Etiketi resmin üst kısmına hizala */
                font-size: 10px !important; /* Küçük yazı boyutu */
                padding: 1px 6px; /* Etiketin boyutunu küçült */
                right: 10px !important;
            }

        }

        .job-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            padding: 18px 25px;
            transition: box-shadow 0.3s;
        }

        .job-item:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .job-logo {
            flex: 0 0 50px;
            margin-right: 15px;
        }

        .job-logo img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .job-details {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden; /* Taşmayı engelle */
        }

        .job-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin: 0 0 5px;
            white-space: nowrap; /* Taşmayı engelle */
            overflow: hidden; /* Fazlalıkları gizle */
            text-overflow: ellipsis; /* Üç nokta ekle */

        }

        .job-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            white-space: nowrap;
        }

        .job-company {
            font-size: 14px;
            color: #555;
            margin: 0;
            white-space: nowrap; /* Taşmayı engelle */
            overflow: hidden; /* Fazlalıkları gizle */
            text-overflow: ellipsis; /* Üç nokta ekle */
        }

        .job-stats {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 12px;
            color: #777;
            white-space: nowrap; /* Tek satırda tut */
            transform: translate(0px, -12px);

        }

        .views {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #555;
            gap: 5px;
        }

        .premium-job {
            border: 2px solid #28a745; /* Yeşil sınır */
            position: relative; /* "Premium" etiketi için */
        }

        .premium-job::before {
            content: "Premium";
            position: absolute;
            top: 0;
            right: 23px;
            background-color: #28a745;
            color: white;
            font-size: 12px;
            font-weight: bold;
            padding: 2px 8px;
            border-radius: 5px;
            text-transform: uppercase;
        }

        .new-job {
            /*border: 2px solid deepskyblue;*/
            position: relative;
        }

        .new-job::before {
            content: "Yeni";
            position: absolute;
            top: 0;
            right: 23px;
            background-color: #ff5c5c;
            color: white;
            font-size: 12px;
            font-weight: bold;
            padding: 2px 8px;
            border-radius: 5px;
            text-transform: uppercase;
        }
        @media (max-width: 767px) {
            .wt-bnr-inr {
                height: 380px;
                margin-top: -45px;
            }
        }
    </style>
@endsection
@section('user.section')
    <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
        <!--Filter Short By-->
        <div class="product-filter-wrap d-flex justify-content-between align-items-center m-b30">
            <span class="woocommerce-result-count-left">Showing 2,150 jobs</span>
            <div class="text-left">
                <a href="{{ route('web.user.company.create') }}" class="site-button">
                    <i class="feather-briefcase"></i>Şirkət əlavə et
                </a>
            </div>
        </div>
        <div class="twm-jobs-list-wrap">
            <ul class="job-list">
                <li class="job-item">
                    <div class="job-logo">
                        <img src="https://isveren.az/uploads/companies/logo/azertexnolayn-mmc.png"
                             alt="Company Logo">
                    </div>
                    <div class="job-details">
                        <p class="job-title">“BK Azərbaycan”MMC- Burger King restoranlar şəbəkəsi</p>
                        <div class="job-meta">
                            <p class="job-company">Azərbaycan, Bakı şəhər Nərmanov rayon</p>
                            <div class="job-stats">
                                <div class="twm-table-controls">
                                    <ul class="twm-DT-controls-icon list-unstyled">
                                        <li>
                                            <a data-bs-toggle="modal" href="" role="button" class="custom-toltip">
                                                <span class="fa fa-edit"></span>
                                                <span class="custom-toltip-block"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-bs-toggle="modal" href="#jobsDelete" role="button" class="custom-toltip">
                                                <span class="fa fa-trash-alt"></span>
                                                <span class="custom-toltip-block"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>

        <div class="pagination-outer" style="display: flex; justify-content: center">
            <div class="pagination-style1">
                <ul class="clearfix">
                    <li class="prev"><a href="javascript:;"><span> <i
                                    class="fa fa-angle-left"></i> </span></a></li>
                    <li><a href="javascript:;">1</a></li>
                    <li class="active"><a href="javascript:;">2</a></li>
                    <li><a href="javascript:;">3</a></li>
                    <li><a class="javascript:;" href="javascript:;"><i class="fa fa-ellipsis-h"></i></a>
                    </li>
                    <li><a href="javascript:;">5</a></li>
                    <li class="next"><a href="javascript:;"><span> <i
                                    class="fa fa-angle-right"></i> </span></a></li>
                </ul>
            </div>
        </div>

        <div class="modal fade twm-saved-jobs-view" id="jobsDelete" aria-hidden="true" aria-labelledby="sign_up_popupLabel-3" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4 class="modal-title">Do you want to delete your profile?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="site-button" data-bs-dismiss="modal">No</button>
                        <button type="button" class="site-button outline-primary">Yes</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
@section('user.js')
@endsection
