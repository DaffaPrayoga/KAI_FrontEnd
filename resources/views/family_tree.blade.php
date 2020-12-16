@extends('components.app')
@section('page_name') Family Tree @endsection
@section('page_body')
    <div class="page_body" style="padding-left: 250px;padding-top: 100px;overflow: auto">
        <div class="" style="padding-left: 20px;padding-right: 20px;">
            <div class="row">
                <div class="col l6 m6 s12">
                    <div class="card z-depth-0" style="border-radius: 8px;">
                        <div class="card-content"
                             style="padding-top: 10px;padding-bottom: 5px;padding-left: 10px;padding-right: 10px">
                            <div class="row" style="margin-bottom: 0px;">
                                <div class="col l5 m5 s12" style="margin-top: 2px">
                                    <input name="experienced_status"
                                           class="with-gap"
                                           value="1" type="radio"
                                           checked
                                           required
                                           id="test1"/>
                                    <label for="test1" class="grey-text text-darken-3"
                                           style="padding-right: 20px;font-size: 13px">People</label>
                                    <input name="experienced_status"
                                           class="with-gap"
                                           value="1" type="radio"
                                           required
                                           id="test2"/>
                                    <label for="test2" class="grey-text text-darken-3"
                                           style="font-size: 13px;">Org.Unit</label>
                                </div>
                                <div class="col l7 m7 s12" style="border-left: 1px solid #ddd;">
                                    <div class="input-field" style="margin-top: -8px;">
                                        <img class="material-icons prefix" src="{{asset('img/search.svg')}}"
                                             style="height: 18px;position:absolute;top: 12px;left: 0px" alt="">
                                        <input id="search" type="text" placeholder="Search Name, NIPP, or Position..."
                                               class="validate"
                                               style="border-bottom: none;font-size: 15px;margin-bottom: 0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l6 m6 s12">
                    <div class="row">
                        <div class="col l4 m4 s12"></div>
                        <div class="col l8 m8 s12">
                            <div class="card z-depth-0" style="border-radius: 8px;">
                                <div class="card-content" style="padding-top: 15px;padding-bottom: 10px;">
                                    <a href="#" class="tooltipped" data-position="bottom" data-delay="50"
                                       data-tooltip="Zoom In" style="display: inline">
                                        <img src="{{asset('img/zoom_in.svg')}}" style="height: 20px" alt="">
                                    </a>
                                    <span class="grey-text text-darken-1"
                                          style="display: inline;font-size: 14px;left: 8px;right: 10px;position:relative;top: -5px">100%</span>
                                    <a href="#" class="tooltipped" data-position="bottom" data-delay="50"
                                       data-tooltip="Zoom Out"
                                       style="display: inline;margin-left: 13px;padding-right: 15px;border-right: 1px solid #ddd;">
                                        <img src="{{asset('img/zoom_out.svg')}}" style="height: 20px" alt="">
                                    </a>
                                    <a href="#" onclick="$('#cant_expand').modal('open')"
                                       class="modal-trigger tooltipped" data-position="bottom"
                                       data-delay="50" data-tooltip="Expand"
                                       style="display: inline;padding-left: 20px">
                                        <img src="{{asset('img/decrease.svg')}}" style="height: 25px" alt="">
                                    </a>
                                    <a href="#" onclick="$('#cant_collapse').modal('open')" class="tooltipped"
                                       data-position="bottom" data-delay="50"
                                       data-tooltip="Collapse"
                                       style="display: inline;margin-left: 13px;padding-right: 10px;border-right: 1px solid #ddd;">
                                        <img src="{{asset('img/increase.svg')}}" style="height: 25px" alt="">
                                    </a>
                                    <a href="#" class="tooltipped" data-position="bottom" data-delay="50"
                                       data-tooltip="Fullscreen"
                                       style="display: inline;margin-left: 15px;">
                                        <img src="{{asset('img/fullscreen.svg')}}" style="height: 20px" alt="">
                                    </a>
                                    <a href="#info_modal" class="modal-trigger tooltipped" data-position="bottom"
                                       data-delay="50" data-tooltip="Info"
                                       style="display: inline;margin-left: 13px;">
                                        <img src="{{asset('img/info.svg')}}" style="height: 20px" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="family_chart" style="margin-top: 10px;margin-bottom: 60px;transform: scale(0.9)">
                <div class="person">
                    <a href="#successor_detail" class="modal-trigger">
                        <div class="card-photo center-block z-depth-14 white-border"
                             style="background-image: url({{asset('img/user.svg')}});height: 130px;width: 130px;border-radius: 130px;margin-top: 5px;margin-bottom: 5px;"></div>
                    </a>
                    <p class="roboto-bold grey-text text-darken-4 center"
                       style="font-size: 17px;margin-top: 10px;margin-bottom: 0px;letter-spacing: 0.5px;">Haylie Vaccaro
                    </p>
                    <p class="roboto grey-text center"
                       style="font-size: 14px;margin-top: 5px;margin-bottom: 0;letter-spacing: 0.5px">VP Human Capital
                        Mg</p>
                    <p class="roboto grey-text center" style="font-size: 12px;margin-top: 5px;letter-spacing: 0.5px">3
                        Nomination, 3 Successor</p>
                </div>
                <div class="hierarcy-line-vertical-faded center"
                     style="margin-left: auto;margin-right: auto;display: block;height: 120px"></div>
                <div class="row" style="margin-top: -60px">
                    <div class="col l4 m3 s6">
                        <div class="person" style="margin-top: -80px">
                            <a href="#successor_detail" class="modal-trigger">
                                <div class="card-photo center-block z-depth-14 yellow-border"
                                     style="background-image: url({{asset('img/user_2.svg')}});height: 130px;width: 130px;border-radius: 130px;margin-top: 5px;margin-bottom: 5px;"></div>
                            </a>
                            <p class="roboto-bold grey-text text-darken-4 center"
                               style="font-size: 17px;margin-top: 10px;margin-bottom: 0px;letter-spacing: 0.5px;">Leo
                                Rhiel Madsen
                            </p>
                            <p class="roboto grey-text center"
                               style="font-size: 14px;margin-top: 5px;margin-bottom: 0;letter-spacing: 0.5px">GM. Human
                                Capital Mar</p>
                            <p class="roboto grey-text center"
                               style="font-size: 12px;margin-top: 5px;letter-spacing: 0.5px">
                                1 Nomination, 1 Successor</p>
                        </div>
                    </div>
                    <div class="col l4 m3 s6">
                        <div class="person">
                            <a href="#successor_detail" class="modal-trigger">
                                <div class="card-photo center-block z-depth-14 green-border"
                                     style="background-image: url({{asset('img/user_3.svg')}});height: 130px;width: 130px;border-radius: 130px;margin-top: 5px;margin-bottom: 5px;"></div>
                            </a>
                            <p class="roboto-bold grey-text text-darken-4 center"
                               style="font-size: 17px;margin-top: 10px;margin-bottom: 0px;letter-spacing: 0.5px;">
                                Gustavo Bergson
                            </p>
                            <p class="roboto grey-text center"
                               style="font-size: 14px;margin-top: 5px;margin-bottom: 0;letter-spacing: 0.5px">GM.
                                Employee Service</p>
                            <p class="roboto grey-text center"
                               style="font-size: 12px;margin-top: 5px;letter-spacing: 0.5px">2 Nomination, 2
                                Successor</p>
                        </div>
                    </div>
                    <div class="col l4 m3 s6">
                        <div class="person" style="margin-top: -80px">
                            <a href="#successor_detail" class="modal-trigger">
                                <div class="card-photo center-block z-depth-14 green-border"
                                     style="background-image: url({{asset('img/user_4.svg')}});height: 130px;width: 130px;border-radius: 130px;margin-top: 5px;margin-bottom: 5px;"></div>
                            </a>
                            <p class="roboto-bold grey-text text-darken-4 center"
                               style="font-size: 17px;margin-top: 10px;margin-bottom: 0px;letter-spacing: 0.5px;">Corey
                                Levin
                            </p>
                            <p class="roboto grey-text center"
                               style="font-size: 14px;margin-top: 5px;margin-bottom: 0;letter-spacing: 0.5px">GM. Human
                                Capital Dev</p>
                            <p class="roboto grey-text center"
                               style="font-size: 12px;margin-top: 5px;letter-spacing: 0.5px">1 Nomination, 2
                                Successor</p>
                        </div>
                    </div>
                </div>
                <div class="hierarcy-line-vertical-faded center"
                     style="margin-left: auto;margin-right: auto;display: block;height: 120px"></div>
                <div class="row" style="margin-top: -60px">
                    <div class="col l4 m3 s6"></div>
                    <div class="col l4 m3 s6">
                        <div class="person">
                            <a href="#successor_detail" class="modal-trigger">
                                <div class="card-photo center-block z-depth-14 yellow-border"
                                     style="background-image: url({{asset('img/user_5.svg')}});height: 130px;width: 130px;border-radius: 130px;margin-top: 5px;margin-bottom: 5px;"></div>
                            </a>
                            <p class="roboto-bold grey-text text-darken-4 center"
                               style="font-size: 17px;margin-top: 10px;margin-bottom: 0px;letter-spacing: 0.5px;">Aspen
                                Bergson
                            </p>
                            <p class="roboto grey-text center"
                               style="font-size: 14px;margin-top: 5px;margin-bottom: 0;letter-spacing: 0.5px">Mgr.
                                Employee Data</p>
                            <p class="roboto grey-text center"
                               style="font-size: 12px;margin-top: 5px;letter-spacing: 0.5px">1 Nomination, 3
                                Successor</p>
                        </div>
                    </div>
                    <div class="col l4 m3 s6">
                        <div class="person" style="margin-top: -80px">
                            <a href="#successor_detail" class="modal-trigger">
                                <div class="card-photo center-block z-depth-14 pink-border"
                                     style="background-image: url({{asset('img/user_6.svg')}});height: 130px;width: 130px;border-radius: 130px;margin-top: 5px;margin-bottom: 5px;"></div>
                            </a>
                            <p class="roboto-bold grey-text text-darken-4 center"
                               style="font-size: 17px;margin-top: 10px;margin-bottom: 0px;letter-spacing: 0.5px;">Carla
                                Dorwart
                            </p>
                            <p class="roboto grey-text center"
                               style="font-size: 14px;margin-top: 5px;margin-bottom: 0;letter-spacing: 0.5px">Mgr.
                                Payrol</p>
                            <p class="roboto grey-text center"
                               style="font-size: 12px;margin-top: 5px;letter-spacing: 0.5px">1 Nomination, 3
                                Successor</p>
                        </div>
                    </div>
                </div>
                <div class="hierarcy-line-vertical-faded center"
                     style="margin-left: auto;margin-right: auto;display: block;height: 120px"></div>
                <div class="row" style="margin-top: -60px">
                    <div class="col l4 m3 s6"></div>
                    <div class="col l4 m3 s6">
                        <div class="person">
                            <a href="#successor_detail" class="modal-trigger">
                                <div class="card-photo center-block z-depth-14 yellow-border"
                                     style="background-image: url({{asset('img/user_7.svg')}});height: 130px;width: 130px;border-radius: 130px;margin-top: 5px;margin-bottom: 5px;"></div>
                            </a>
                            <p class="roboto-bold grey-text text-darken-4 center"
                               style="font-size: 17px;margin-top: 10px;margin-bottom: 0px;letter-spacing: 0.5px;">Robert
                                Kenter
                            </p>
                            <p class="roboto grey-text center"
                               style="font-size: 14px;margin-top: 5px;margin-bottom: 0;letter-spacing: 0.5px">Mgr.
                                Employee Data</p>
                            <p class="roboto grey-text center"
                               style="font-size: 12px;margin-top: 5px;letter-spacing: 0.5px">1 Nomination, 3
                                Successor</p>
                        </div>
                    </div>
                    <div class="col l4 m3 s6"></div>
                </div>
            </div>
            {{--            Garis Lengkung, setiap baris di tambah 280px--}}
            <div class="arc-line" style="top: -1350px;"></div>
            <div class="arc-line" style="top: -1070px;"></div>
            <div class="arc-line" style="top: -790px;"></div>
            {{--            Garis Lengkung, setiap baris di tambah 280px--}}
            <div id="info_modal" class="modal z-depth-12 popup-super-mini modal-fixed-footer"
                 style="border-radius: 10px;">
                <div class="modal-content">
                    <h4 class="roboto-bold grey-text text-darken-4" style="font-size: 20px;margin-bottom: 30px">
                        Family Tree Info</h4>
                    <p class="grey-text text-darken-1 roboto"
                       style="font-size: 14px;margin-top: -15px;margin-bottom: 30px;">This is
                        information about the meaning of colors in the family tree</p>
                    <div class="setting-item">
                        <div class="row" style="margin-bottom: 10px">
                            <div class="col s1">
                                <div class="white z-depth-1"
                                     style="height: 15px;width: 15px;border-radius: 15px;"></div>
                            </div>
                            <div class="col s11">
                                <span class="grey-text text-darken-1"
                                      style="font-size: 14px;top: -5px;position: relative;left: 10px">The employee is the center of the family tree</span>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item">
                        <div class="row" style="margin-bottom: 10px">
                            <div class="col s1">
                                <div class="green z-depth-1"
                                     style="height: 15px;width: 15px;border-radius: 15px;"></div>
                            </div>
                            <div class="col s11">
                                <span class="grey-text text-darken-1"
                                      style="font-size: 14px;top: -5px;position: relative;left: 10px">The employee is ready to be a successor</span>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item">
                        <div class="row" style="margin-bottom: 10px">
                            <div class="col s1">
                                <div class="yellow z-depth-1"
                                     style="height: 15px;width: 15px;border-radius: 15px;"></div>
                            </div>
                            <div class="col s11">
                                <span class="grey-text text-darken-1"
                                      style="font-size: 14px;top: -5px;position: relative;left: 10px">The employee still need a development to be a successor</span>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item">
                        <div class="row" style="margin-bottom: 10px">
                            <div class="col s1">
                                <div class="pink z-depth-1" style="height: 15px;width: 15px;border-radius: 15px;"></div>
                            </div>
                            <div class="col s11">
                                <span class="grey-text text-darken-1"
                                      style="font-size: 14px;top: -5px;position: relative;left: 10px">The employee is unfit</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!"
                       class="modal-action modal-close waves-effect waves-light white-text btn accent-color-background-2 z-depth-0"
                       style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;transform: scale(0.9)">OK</a>
                </div>
            </div>
            <div id="cant_expand" class="modal z-depth-12 popup-super-mini"
                 style="border-radius: 10px;">
                <div class="modal-content">
                    <h4 class="roboto-bold grey-text text-darken-4 center" style="font-size: 20px;margin-bottom: 30px">
                        Can't Expand More</h4>
                    <p class="grey-text text-darken-1 roboto center"
                       style="font-size: 14px;margin-top: -15px;margin-bottom: 30px;">“Haylie Vaccaro” Family Tree at
                        maximum expand</p>
                </div>
                <div class="modal-footer">
                    <div class="center">
                        <a href="#!"
                           class="modal-action modal-close waves-effect waves-light white-text btn accent-color-background-2 z-depth-0"
                           style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;transform: scale(0.9)">OK</a>
                    </div>
                </div>
            </div>
            <div id="cant_collapse" class="modal z-depth-12 popup-super-mini"
                 style="border-radius: 10px;">
                <div class="modal-content">
                    <h4 class="roboto-bold grey-text text-darken-4 center" style="font-size: 20px;margin-bottom: 30px">
                        Can't Collapse More</h4>
                    <p class="grey-text text-darken-1 roboto center"
                       style="font-size: 14px;margin-top: -15px;margin-bottom: 30px;">“Haylie Vaccaro” Family Tree at
                        maximum collapse</p>
                </div>
                <div class="modal-footer">
                    <div class="center">
                        <a href="#!"
                           class="modal-action modal-close waves-effect waves-light white-text btn accent-color-background-2 z-depth-0"
                           style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;transform: scale(0.9)">OK</a>
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
        </div>
    </div>
@endsection
