@extends('components.app')
@section('page_name') 9 Box @endsection
@section('page_body')
    <div class="page_body" style="padding-left: 250px;padding-top: 100px;overflow: auto">
        <div class="" style="padding-left: 20px;padding-right: 20px;">
            <div class="row" style="margin-bottom: 0px;">
                <div class="col l6 m6 s12">
                    <div class="card z-depth-0" style="border-radius: 8px;">
                        <div class="card-content"
                             style="padding-top: 10px;padding-bottom: 15px;padding-left: 10px;padding-right: 10px">
                            <div class="row" style="margin-bottom: 0px;">
                                <div class="col l12 m12 s12" style="margin-top: 2px">
                                    <p class="grey-text text-darken-1"
                                       style="font-size: 13px;position: relative;top: 4px;">Filter : <span
                                            class="accent-color-2">19/08/2020 - 19/11/2020</span> • <span
                                            class="accent-color-2">Team View</span>
                                        <a href="#" class="tooltipped right" data-position="bottom"
                                           data-delay="50"
                                           data-tooltip="Remove Filter" style="position: relative;top: 0px;">
                                            <img src="{{asset('img/circle_x.svg')}}" style="height: 20px"
                                                 alt="">
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l6 m6 s12">
                    <div class="row">
                        <div class="col l8 m8 s12"></div>
                        <div class="col l4 m4 s12">
                            <div class="card z-depth-0" style="border-radius: 8px;">
                                <div class="card-content" style="padding-top: 15px;padding-bottom: 15px;">
                                    <div class="row" style="margin-bottom: 0px;">
                                        <div class="col s6">
                                            <a href="#filter_detail" class="tooltipped modal-trigger"
                                               data-position="bottom" data-delay="50"
                                               data-tooltip="Filter this"
                                               style="display: inline;">
                                                <img src="{{asset('img/filter.svg')}}" class="center-block"
                                                     style="height: 20px" alt="">
                                            </a>
                                        </div>
                                        <div class="col s6">
                                            <a href="#eye_modal" class="tooltipped modal-trigger" data-position="bottom"
                                               data-delay="50" data-tooltip="Display"
                                               style="display: inline;">
                                                <img src="{{asset('img/eye.svg')}}" class="center-block"
                                                     style="height: 20px" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="9-box">
                <div class="row">
                    <div class="col s12">
                        <div class="card z-depth-0" style="border-radius: 8px;margin-right: 10px;">
                            <div class="card-content" style="padding-left: 10px;padding-right: 2px;">
                                <p class="roboto-bold grey-text text-darken-4 center"
                                   style="font-size: 17px;margin-top: 0px;margin-bottom: 0px;letter-spacing: 0.5px;">
                                    Performance
                                </p>
                                <div class="row" style="margin-top: 10px;margin-bottom: 0px;">
                                    <div class="col l1 m2 s2"></div>
                                    <div class="col l11 m10 s10">
                                        <div class="row" style="margin-bottom: 0px;">
                                            <div class="col l4 m4 s4">
                                                <p class="grey-text center"
                                                   style="font-size: 13px;position: relative;top: 4px;margin-bottom: 20px;">
                                                    LOW
                                                </p>
                                            </div>
                                            <div class="col l4 m4 s4">
                                                <p class="grey-text center"
                                                   style="font-size: 13px;position: relative;top: 4px;margin-bottom: 20px;">
                                                    MEDIUM
                                                </p>
                                            </div>
                                            <div class="col l4 m4 s4">
                                                <p class="grey-text center"
                                                   style="font-size: 13px;position: relative;top: 4px;margin-bottom: 20px;">
                                                    HIGH
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 0px;margin-bottom: 0px;">
                                    <div class="col l1 m2 s2 b-9-box">
                                        <p class="grey-text right"
                                           style="font-size: 13px;position: relative;top: 4px;margin-bottom: 20px;transform: rotate(-90deg);vertical-align: center;line-height: 160px;">
                                            LOW
                                        </p>
                                    </div>
                                    <div class="col l11 m10 s10">
                                        <div class="row" style="margin-bottom: 0px;">
                                            <div class="col l4 m4 s4">
                                                <div class="card z-depth-0 deep-purple lighten-5"
                                                     style="border-radius: 8px;">
                                                    <div class="card-content b-9-box" style="padding-top: 10px">
                                                        <p class="roboto-bold grey-text text-darken-4 center"
                                                           style="font-size: 13px;margin-top: 5px;margin-bottom: 0px;letter-spacing: 0.5px;">
                                                            Sleeping Tiger • 3 (3.15%)
                                                        </p>
                                                        <div class="center" style="padding-top: 30px;">
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger deep-purple center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger deep-purple center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger deep-purple center-block nine-box-dots"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col l4 m4 s4">
                                                <div class="card z-depth-0 orange lighten-5"
                                                     style="border-radius: 8px;">
                                                    <div class="card-content b-9-box" style="padding-top: 10px;">
                                                        <p class="roboto-bold grey-text text-darken-4 center"
                                                           style="font-size: 13px;margin-top: 5px;margin-bottom: 0px;letter-spacing: 0.5px;">
                                                            Promotable • 13 (13.6%)
                                                        </p>
                                                        <div class="center" style="padding-top: 30px;">
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <br>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <br>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col l4 m4 s4">
                                                <div class="card z-depth-0 green lighten-5" style="border-radius: 8px;">
                                                    <div class="card-content b-9-box" style="padding-top: 10px;">
                                                        <p class="roboto-bold grey-text text-darken-4 center"
                                                           style="font-size: 13px;margin-top: 5px;margin-bottom: 0px;letter-spacing: 0.5px;">
                                                            Top Talent • 9 (9.5%)
                                                        </p>
                                                        <div class="center" style="padding-top: 30px;">
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger green center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger green center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger green center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger green center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger green center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger green center-block nine-box-dots"></a>
                                                            <br>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger green center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger green center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger green center-block nine-box-dots"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 0px;margin-bottom: 0px;">
                                    <div class="col l1 m2 s2 b-9-box">
                                        <p class="grey-text right"
                                           style="font-size: 13px;position: relative;top: 20px;margin-bottom: 20px;transform: rotate(-90deg);vertical-align: center;line-height: 160px">
                                            <span class="roboto-bold grey-text text-darken-4 center"
                                                  style="font-size: 17px;margin-top: 0px;margin-bottom: 10px;position: absolute;top: -30px;">Capacity</span>
                                            MEDIUM
                                        </p>
                                    </div>
                                    <div class="col l11 m10 s10">
                                        <div class="row" style="margin-bottom: 0px;">
                                            <div class="col l4 m4 s4">
                                                <div class="card z-depth-0 deep-purple lighten-5"
                                                     style="border-radius: 8px;">
                                                    <div class="card-content b-9-box" style="padding-top: 10px">
                                                        <p class="roboto-bold grey-text text-darken-4 center"
                                                           style="font-size: 13px;margin-top: 5px;margin-bottom: 0px;letter-spacing: 0.5px;">
                                                            Sleeping Tiger • 3 (3.15%)
                                                        </p>
                                                        <div class="center" style="padding-top: 30px;">
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger deep-purple center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger deep-purple center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger deep-purple center-block nine-box-dots"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col l4 m4 s4">
                                                <div class="card z-depth-0 orange lighten-5"
                                                     style="border-radius: 8px;">
                                                    <div class="card-content b-9-box" style="padding-top: 10px;">
                                                        <p class="roboto-bold grey-text text-darken-4 center"
                                                           style="font-size: 13px;margin-top: 5px;margin-bottom: 0px;letter-spacing: 0.5px;">
                                                            Promotable • 13 (13.6%)
                                                        </p>
                                                        <div class="center" style="padding-top: 30px;">
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <br>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <br>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col l4 m4 s4">
                                                <div class="card z-depth-0 orange lighten-5"
                                                     style="border-radius: 8px;">
                                                    <div class="card-content b-9-box" style="padding-top: 10px;">
                                                        <p class="roboto-bold grey-text text-darken-4 center"
                                                           style="font-size: 13px;margin-top: 5px;margin-bottom: 0px;letter-spacing: 0.5px;">
                                                            Top Talent • 9 (9.5%)
                                                        </p>
                                                        <div class="center" style="padding-top: 30px;">
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <br>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger orange center-block nine-box-dots"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 0px;margin-bottom: 0px;">
                                    <div class="col l1 m2 s2 b-9-box">
                                        <p class="grey-text right"
                                           style="font-size: 13px;position: relative;top: 4px;margin-bottom: 20px;transform: rotate(-90deg);vertical-align: center;line-height: 160px;">
                                            HIGH
                                        </p>
                                    </div>
                                    <div class="col l11 m10 s10">
                                        <div class="row" style="margin-bottom: 0px;">
                                            <div class="col l4 m4 s4">
                                                <div class="card z-depth-0 red lighten-5"
                                                     style="border-radius: 8px;">
                                                    <div class="card-content b-9-box" style="padding-top: 10px">
                                                        <p class="roboto-bold grey-text text-darken-4 center"
                                                           style="font-size: 13px;margin-top: 5px;margin-bottom: 0px;letter-spacing: 0.5px;">
                                                            Sleeping Tiger • 3 (3.15%)
                                                        </p>
                                                        <div class="center" style="padding-top: 30px;">
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger red center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger red center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger red center-block nine-box-dots"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col l4 m4 s4">
                                                <div class="card z-depth-0 blue lighten-5"
                                                     style="border-radius: 8px;">
                                                    <div class="card-content b-9-box" style="padding-top: 10px;">
                                                        <p class="roboto-bold grey-text text-darken-4 center"
                                                           style="font-size: 13px;margin-top: 5px;margin-bottom: 0px;letter-spacing: 0.5px;">
                                                            Promotable • 13 (13.6%)
                                                        </p>
                                                        <div class="center" style="padding-top: 30px;">
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <br>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <br>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col l4 m4 s4">
                                                <div class="card z-depth-0 blue lighten-5" style="border-radius: 8px;">
                                                    <div class="card-content b-9-box" style="padding-top: 10px;">
                                                        <p class="roboto-bold grey-text text-darken-4 center"
                                                           style="font-size: 13px;margin-top: 5px;margin-bottom: 0px;letter-spacing: 0.5px;">
                                                            Top Talent • 9 (9.5%)
                                                        </p>
                                                        <div class="center" style="padding-top: 30px;">
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <br>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
                                                            <a href="#promotable_modal"
                                                               class="modal-trigger blue center-block nine-box-dots"></a>
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
            <div id="successor_detail" class="modal z-depth-12 modal-fixed-footer popup-semi-mini"
                 style="border-radius: 10px;max-height: 90%;overflow-y: hidden">
                <div class="modal-content">
                    <h4 class="roboto-bold grey-text text-darken-4" style="font-size: 20px;margin-bottom: 20px">
                        Sucessor Detail</h4>
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col l3 m3 s3">
                            <div class="card-photo z-depth-14"
                                 style="background-image: url({{asset('img/user_7.svg')}});height: 90px;width: 90px;border-radius: 130px;margin-top: 5px;margin-bottom: 5px;"></div>
                        </div>
                        <div class="col l9 m9 s9">
                            <h4 class="roboto-bold grey-text text-darken-4"
                                style="font-size: 18px;margin-bottom: 20px;letter-spacing: 0.5px;margin-top: 15px;">
                                Zaire Torff</h4>
                            <p class="grey-text text-darken-3 roboto"
                               style="font-size: 15px;margin-top: -15px;margin-bottom: 10px;letter-spacing: 0.5px">GM.
                                Human Resource</p>
                            <p class="grey-text roboto"
                               style="font-size: 14px;margin-top: -5px;margin-bottom: 30px;letter-spacing: 0.5px"><span><i
                                        class="material-icons fas fa-birthday-cake grey-text"
                                        style="font-size: 15px;margin-right: 5px;"></i> 10/10/1989</span><span><i
                                        class="material-icons fas fa-suitcase grey-text"
                                        style="font-size: 15px;margin-right: 5px;margin-left: 15px"></i> 2 Years 4 Months</span>
                            </p>
                        </div>
                    </div>
                    <div class="divider" style="margin-bottom: 30px;"></div>
                    <p class="grey-text text-darken-3 roboto"
                       style="font-size: 15px;margin-top: -10px;margin-bottom: 20px;letter-spacing: 0.5px">
                        Nomination</p>
                    <div class="detail-item" style="padding-bottom: 10px;">
                        <div class="row" style="margin-bottom: 10px">
                            <div class="col s1">
                                <img src="{{asset('img/org_chart_oranged.svg')}}" style="height: 20px;" alt="">
                            </div>
                            <div class="col s11">
                                <span class="accent-color-2"
                                      style="font-size: 14px;top: -3px;position: relative;">GM. Finance</span>
                                <span class="green white-text right"
                                      style="font-size: 11px;padding-top: 3px;padding-bottom: 5px;padding-right: 5px;padding-left: 7px;border-radius: 2px;">Ready Now</span>
                            </div>
                        </div>
                        <p class="grey-text roboto"
                           style="font-size: 13px;margin-top: 0px;margin-bottom: 10px;letter-spacing: 0.5px">Incumbent :
                            <span class="accent-color-2">Erick</span></p>
                    </div>
                    <div class="detail-item" style="padding-bottom: 10px">
                        <div class="row" style="margin-bottom: 10px">
                            <div class="col s1">
                                <img src="{{asset('img/org_chart_oranged.svg')}}" style="height: 20px;" alt="">
                            </div>
                            <div class="col s11">
                                <span class="accent-color-2"
                                      style="font-size: 14px;top: -3px;position: relative;">VP. Human Resource</span>
                                <span class="green white-text right"
                                      style="font-size: 11px;padding-top: 3px;padding-bottom: 5px;padding-right: 5px;padding-left: 7px;border-radius: 2px;">Ready Now</span>
                            </div>
                        </div>
                        <p class="grey-text roboto"
                           style="font-size: 13px;margin-top: 0px;margin-bottom: 10px;letter-spacing: 0.5px">Incumbent :
                            <span class="accent-color-2">Hubert</span></p>
                    </div>
                    <p class="grey-text text-darken-3 roboto"
                       style="font-size: 15px;margin-top: 0px;margin-bottom: 20px;letter-spacing: 0.5px">Talent Pool
                        Nomination</p>
                    <div class="detail-item" style="padding-bottom: 10px;">
                        <div class="row" style="margin-bottom: 10px">
                            <div class="col s1">
                                <img src="{{asset('img/talent_pool_oranged.svg')}}" style="height: 20px;" alt="">
                            </div>
                            <div class="col s11">
                                <span class="accent-color-2"
                                      style="font-size: 14px;top: -3px;position: relative;">Procurement</span>
                                <span class="pink white-text right"
                                      style="font-size: 11px;padding-top: 3px;padding-bottom: 5px;padding-right: 5px;padding-left: 7px;border-radius: 2px;">Unfit</span>
                            </div>
                        </div>
                    </div>
                    <div class="divider" style="margin-bottom: 30px;margin-top: 5px"></div>
                    <p class="grey-text text-darken-3 roboto"
                       style="font-size: 15px;margin-top: 0px;margin-bottom: 20px;letter-spacing: 0.5px">Performance
                        &amp; Pool</p>
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col l3 m3 s3">
                            <img src="{{asset('img/performance_pool.svg')}}" style="height: 90px;" alt="">
                        </div>
                        <div class="col l9 m9 s9">
                            <p class="grey-text text-darken-3 roboto"
                               style="font-size: 15px;margin-top: 0px;margin-bottom: 10px;letter-spacing: 0.5px">Top
                                Talent</p>
                            <p class="grey-text roboto"
                               style="font-size: 14px;margin-top: -5px;margin-bottom: 30px;letter-spacing: 0.5px">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam debitis eius facilis
                                ipsam iste reiciendis unde.
                            </p>
                        </div>
                    </div>
                    <div class="divider" style="margin-bottom: 30px;margin-top: 5px"></div>
                    <p class="grey-text text-darken-3 roboto"
                       style="font-size: 15px;margin-top: 0px;margin-bottom: 20px;letter-spacing: 0.5px">Performance
                        &amp; Pool</p>
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col l4 m4 s4">
                            <p class="grey-text roboto"
                               style="font-size: 14px;margin-top: -5px;margin-bottom: 10px;letter-spacing: 0.5px">
                                Date of Birth
                            </p>
                        </div>
                        <div class="col l8 m8 s8">
                            <p class="grey-text text-darken-3 roboto"
                               style="font-size: 14px;margin-top: -5px;margin-bottom: 10px;letter-spacing: 0.5px">
                                10/10/1989
                            </p>
                        </div>
                        <div class="col l4 m4 s4">
                            <p class="grey-text roboto"
                               style="font-size: 14px;margin-top: -5px;margin-bottom: 10px;letter-spacing: 0.5px">
                                Business Phone
                            </p>
                        </div>
                        <div class="col l8 m8 s8">
                            <p class="grey-text text-darken-3 roboto"
                               style="font-size: 14px;margin-top: -5px;margin-bottom: 10px;letter-spacing: 0.5px">
                                081296711426
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!"
                       class="modal-action modal-close waves-effect waves-accent white btn accent-color-2 z-depth-0"
                       style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;transform: scale(0.9)">CLOSE</a>
                    <a href="{{url('/profile')}}"
                       class="modal-action modal-close waves-effect waves-light white-text btn accent-color-background-2 z-depth-0"
                       style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;transform: scale(0.9)">VIEW
                        PROFILE</a>
                </div>
            </div>
            <div id="eye_modal" class="modal z-depth-12 popup-super-mini modal-fixed-footer"
                 style="border-radius: 10px;">
                <div class="modal-content">
                    <h4 class="roboto-bold grey-text text-darken-4" style="font-size: 20px;margin-bottom: 30px">Display
                        Info on Card</h4>
                    <div class="setting-item">
                        <div class="row" style="margin-bottom: 0px">
                            <div class="col s10">
                                <img src="{{asset('img/user.svg')}}"
                                     style="height: 25px;display: inline;margin-right: 15px;margin-top: 10px" alt="">
                                <span class="grey-text text-darken-1"
                                      style="font-size: 15px;top: -5px;position: relative;">Profile Picture</span>
                            </div>
                            <div class="col s2">
                                <p style="margin-bottom: 0px;margin-top: 15px;">
                                    <input type="checkbox" class="filled-in" checked id="test7"/>
                                    <label for="test7"></label>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item">
                        <div class="row" style="margin-bottom: 0px;">
                            <div class="col s10">
                                <img src="{{asset('img/Talent_Card/Impact_of_Loss/Black.svg')}}"
                                     style="height: 25px;display: inline;margin-right: 15px;margin-top: 10px" alt="">
                                <span class="grey-text text-darken-1"
                                      style="font-size: 15px;top: -5px;position: relative;">Impact of Loss</span>
                            </div>
                            <div class="col s2">
                                <p style="margin-bottom: 0px;margin-top: 15px;">
                                    <input type="checkbox" class="filled-in" checked id="test8"/>
                                    <label for="test8"></label>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item" style="margin-bottom: 10px">
                        <div class="row" style="margin-bottom: 0px;">
                            <div class="col s10">
                                <img src="{{asset('img/Talent_Card/Risk_of_Loss/Black.svg')}}"
                                     style="height: 25px;display: inline;margin-right: 15px;margin-top: 10px" alt="">
                                <span class="grey-text text-darken-1"
                                      style="font-size: 15px;top: -5px;position: relative;">Risk of Loss</span>
                            </div>
                            <div class="col s2">
                                <p style="margin-bottom: 0px;margin-top: 15px;">
                                    <input type="checkbox" class="filled-in" checked id="test3"/>
                                    <label for="test3"></label>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item" style="margin-bottom: 10px">
                        <div class="row" style="margin-bottom: 0px;">
                            <div class="col s10">
                                <img src="{{asset('img/Talent_Card/Health_Indicator/Black.svg')}}"
                                     style="height: 25px;display: inline;margin-right: 15px;margin-top: 10px" alt="">
                                <span class="grey-text text-darken-1"
                                      style="font-size: 15px;top: -5px;position: relative;">Health Indicator</span>
                            </div>
                            <div class="col s2">
                                <p style="margin-bottom: 0px;margin-top: 15px;">
                                    <input type="checkbox" class="filled-in" checked id="test4"/>
                                    <label for="test4"></label>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item" style="margin-bottom: 10px">
                        <div class="row" style="margin-bottom: 0px;">
                            <div class="col s10">
                                <img src="{{asset('img/Talent_Card/Gender/Black/Female.svg')}}"
                                     style="height: 25px;display: inline;margin-right: 15px;margin-top: 10px" alt="">
                                <span class="grey-text text-darken-1"
                                      style="font-size: 15px;top: -5px;position: relative;">Gender</span>
                            </div>
                            <div class="col s2">
                                <p style="margin-bottom: 0px;margin-top: 15px;">
                                    <input type="checkbox" class="filled-in" checked id="test5"/>
                                    <label for="test5"></label>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item" style="margin-bottom: 10px">
                        <div class="row" style="margin-bottom: 0px;">
                            <div class="col s10">
                                <img src="{{asset('img/Talent_Card/Discipline/Black.svg')}}"
                                     style="height: 25px;display: inline;margin-right: 15px;margin-top: 10px" alt="">
                                <span class="grey-text text-darken-1"
                                      style="font-size: 15px;top: -5px;position: relative;">Indiscipline Flag</span>
                            </div>
                            <div class="col s2">
                                <p style="margin-bottom: 0px;margin-top: 15px;">
                                    <input type="checkbox" class="filled-in" checked id="test6"/>
                                    <label for="test6"></label>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!"
                       class="modal-action modal-close waves-effect waves-accent white btn accent-color-2 z-depth-0"
                       style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;transform: scale(0.9)">CANCEL</a>
                    <a href="#!"
                       class="modal-action modal-close waves-effect waves-light white-text btn accent-color-background-2 z-depth-0"
                       style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;transform: scale(0.9)">SAVE</a>
                </div>
            </div>
            <div id="promotable_modal" class="modal z-depth-12 popup-super-mini modal-fixed-footer"
                 style="border-radius: 10px;">
                <div class="modal-content">
                    <h4 class="roboto-bold grey-text text-darken-4" style="font-size: 20px;margin-bottom: 30px">
                        Promotable</h4>
                    <ul class="collection" style="background-color: transparent;border: none;border-radius: 8px;">
                        <li class="collection-item avatar" style="border-bottom: 0px;">
                            <img src="{{asset('img/user_2.svg')}}" alt="" class="circle">
                            <span class="title roboto grey-text text-darken-3">Zaire Torff</span><br>
                            <div class="" style="display: inline;top: 5px;position:relative;">
                                <span>
                                    <img src="{{asset('img/Talent_Card/Gender/Blue/Male.svg')}}" style="height: 18px"
                                         alt="">
                                </span>
                                <span>
                                    <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}" style="height: 18px"
                                         alt="">
                                </span>
                                <span>
                                    <img src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}" style="height: 18px"
                                         alt="">
                                </span>
                                <span>
                                    <img src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}" style="height: 18px"
                                         alt="">
                                </span>
                            </div>
                            <a href="#successor_detail" onclick="$('#promotable_modal').modal('close')"
                               class="secondary-content modal-trigger"><i
                                    class="material-icons accent-color-2"
                                    style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                        </li>
                        <li class="collection-item avatar" style="border-bottom: 0px;">
                            <img src="{{asset('img/user_3.svg')}}" alt="" class="circle">
                            <span class="title roboto grey-text text-darken-3">Emerson Geidt</span><br>
                            <div class="" style="display: inline;top: 5px;position:relative;">
                                <span>
                                    <img src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}" style="height: 18px"
                                         alt="">
                                </span>
                                <span>
                                    <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}" style="height: 18px"
                                         alt="">
                                </span>
                                <span>
                                    <img src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}" style="height: 18px"
                                         alt="">
                                </span>
                                <span>
                                    <img src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}" style="height: 18px"
                                         alt="">
                                </span>
                            </div>
                            <a href="#successor_detail" onclick="$('#promotable_modal').modal('close')"
                               class="secondary-content modal-trigger"><i
                                    class="material-icons accent-color-2"
                                    style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                        </li>
                        <li class="collection-item avatar" style="border-bottom: 0px;">
                            <img src="{{asset('img/user_4.svg')}}" alt="" class="circle">
                            <span class="title roboto grey-text text-darken-3">Lydia Dokidis</span><br>
                            <div class="" style="display: inline;top: 5px;position:relative;">
                                <span>
                                    <img src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}" style="height: 18px"
                                         alt="">
                                </span>
                                <span>
                                    <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}" style="height: 18px"
                                         alt="">
                                </span>
                            </div>
                            <a href="#successor_detail" onclick="$('#promotable_modal').modal('close')"
                               class="secondary-content modal-trigger"><i
                                    class="material-icons accent-color-2"
                                    style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="#!"
                       class="modal-action modal-close waves-effect waves-light white-text btn accent-color-background-2 z-depth-0"
                       style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;transform: scale(0.9)">CLOSE</a>
                </div>
            </div>
            <div id="filter_detail" class="modal z-depth-12 modal-fixed-footer popup-super-mini"
                 style="border-radius: 10px;max-height: 90%;overflow-y: hidden">
                <div class="modal-content">
                    <h4 class="roboto-bold grey-text text-darken-4" style="font-size: 20px;margin-bottom: 20px">
                        Filter</h4>
                    <p class="grey-text text-darken-3 roboto"
                       style="font-size: 15px;margin-top: 0px;margin-bottom: 10px;letter-spacing: 0.5px">Review
                        Period</p>
                    <p class="grey-text roboto"
                       style="font-size: 14px;margin-top: -5px;margin-bottom: 0px;letter-spacing: 0.5px">
                        the data distance will be displayed according to specified period
                    </p>
                    <div class="detail-item" style="padding-bottom: 10px;">
                        <div class="row" style="margin-bottom: 0px">
                            <div class="input-field col s6">
                                <label for="start_date" class="grey-text text-darken-1" style="font-size: 12px;">Start
                                    Date</label>
                                <input id="start_date" type="date" placeholder="Start Date"
                                       class="validate"
                                       style="border:1px solid #ddd;font-size: 15px;border-radius: 8px;padding-left: 5%;width: 95%;margin-top: 35px;">
                            </div>
                            <div class="input-field col s6">
                                <label for="end_date" class="grey-text text-darken-1" style="font-size: 12px;">End
                                    Date</label>
                                <input id="end_date" type="date" placeholder="End Date"
                                       class="validate"
                                       style="border:1px solid #ddd;font-size: 15px;border-radius: 8px;padding-left: 5%;width: 95%;margin-top: 35px;">
                            </div>
                        </div>
                    </div>
                    <div class="divider" style="margin-bottom: 20px;margin-top: 5px"></div>
                    <p class="grey-text text-darken-3 roboto"
                       style="font-size: 15px;margin-top: 0px;margin-bottom: 10px;letter-spacing: 0.5px">Target
                        Population</p>
                    <p class="grey-text roboto"
                       style="font-size: 14px;margin-top: -5px;margin-bottom: 0px;letter-spacing: 0.5px">
                        Select employee target that want to be viewed
                    </p>
                    <form action="" style="margin-top: 20px;">
                        <input name="experienced_status"
                               class="with-gap"
                               value="1" type="radio"
                               onclick="hideOption()"
                               checked
                               required
                               id="test1"/>
                        <label for="test1" class="grey-text text-darken-3"
                               style="padding-right: 20px;font-size: 13px">Team View</label><br>
                        <input name="experienced_status"
                               class="with-gap"
                               value="1" type="radio"
                               onclick="hideOption()"
                               required
                               id="test2"/>
                        <label for="test2" class="grey-text text-darken-3"
                               style="font-size: 13px;">Group</label><br>
                        <input name="experienced_status"
                               class="with-gap"
                               value="1" type="radio"
                               onclick="showOption()"
                               required
                               id="test12"/>
                        <label for="test12" class="grey-text text-darken-3"
                               style="font-size: 13px;">Succession Management and Metrix Report Permissions</label><br>
                        <div class="succession" style="margin-top: 10px;">
                            <label for="division" class="grey-text text-darken-1"
                                   style="font-size: 12px;">Division</label>
                            <select name="division" id="division" class="browser-default"
                                    style="border:1px solid #ddd;font-size: 15px;border-radius: 8px;padding-left: 5%;width: 95%;margin-top: 5px;background-color: transparent;margin-bottom: 10px;">
                                <option value="All">All</option>
                            </select>
                            <label for="departemen" class="grey-text text-darken-1"
                                   style="font-size: 12px;">Depertemen</label>
                            <select name="departemen" id="depertemen" class="browser-default"
                                    style="border:1px solid #ddd;font-size: 15px;border-radius: 8px;padding-left: 5%;width: 95%;margin-top: 5px;background-color: transparent;margin-bottom: 10px;">
                                <option value="All">All</option>
                            </select>
                            <label for="departemen" class="grey-text text-darken-1"
                                   style="font-size: 12px;">Location</label>
                            <select name="location" id="location" class="browser-default"
                                    style="border:1px solid #ddd;font-size: 15px;border-radius: 8px;padding-left: 5%;width: 95%;margin-top: 5px;background-color: transparent;margin-bottom: 10px;">
                                <option value="All">All</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#!"
                       class="modal-action modal-close waves-effect waves-accent white btn accent-color-2 z-depth-0"
                       style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;transform: scale(0.9)">CLOSE</a>
                    <a href="#"
                       class="modal-action modal-close waves-effect waves-light white-text btn accent-color-background-2 z-depth-0"
                       style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;transform: scale(0.9)">APPLY</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js_custom')
    <script type="text/javascript">
        $('.b-9-box').matchHeight();
        $(document).ready(function () {
            $('select').material_select();
        });
        $('.succession').hide();

        function showOption() {
            $('.succession').show();
        }

        function hideOption() {
            $('.succession').hide();
        }
    </script>
@endsection
