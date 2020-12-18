@extends('components.app')
@section('page_name') Organization Chart @endsection
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
                                    <a href="#eye_modal" class="modal-trigger tooltipped" data-position="bottom"
                                       data-delay="50" data-tooltip="Display"
                                       style="display: inline;padding-left: 20px">
                                        <img src="{{asset('img/eye.svg')}}" style="height: 20px" alt="">
                                    </a>
                                    <a href="#" class="tooltipped" data-position="bottom" data-delay="50"
                                       data-tooltip="Fullscreen"
                                       style="display: inline;margin-left: 13px;padding-right: 20px;border-right: 1px solid #ddd;">
                                        <img src="{{asset('img/fullscreen.svg')}}" style="height: 20px" alt="">
                                    </a>
                                    <a href="#info_modal" class="modal-trigger tooltipped" data-position="bottom"
                                       data-delay="50" data-tooltip="Info"
                                       style="display: inline;margin-left: 20px;">
                                        <img src="{{asset('img/info.svg')}}" style="height: 20px" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="organization_chart" style="margin-top: 30px;transform: scale(0.9)">
                <div class="center">
                    <a href="" class="btn white z-depth-0 accent-color-2 roboto"
                       style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;">UP ONE LEVEL</a>
                    <div class="hierarcy-line-vertical"
                         style="margin-left: auto;margin-right: auto;display: block;height: 40px"></div>
                </div>
                <div class="row" style="margin-bottom: 0px">
                    <div class="col l4 m4 s12"></div>
                    <div class="col l4 m4 s12">
                        <ul class="collapsible z-depth-0" data-collapsible="accordion"
                            style="border: none;border-radius: 8px;">
                            <li style="border-radius: 8px;">
                                <div class="collapsible-header waves-effect waves-accent"
                                     style="border-radius: 8px;border-bottom: transparent;padding-left: 20px;padding-right: 20px">
                                    <p class="roboto-bold grey-text text-darken-4"
                                       style="font-size: 17px;margin-top: 0px;margin-bottom: 0px;">VP Human Capital <br>
                                        <span class="roboto grey-text"
                                              style="font-size: 13px;">9 directs 29 total</span></p>
                                    <i class="material-icons accent-color-2"
                                       style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_down</i>
                                </div>
                                <div class="collapsible-body white"
                                     style="border-radius: 8px;padding-top: 0px;padding-left: 20px;padding-right: 20px">
                                    <div class="divider" style="margin-bottom: 20px"></div>
                                    <ul class="collection">
                                        <a href="#person_modal" class="modal-trigger">
                                            <li class="collection-item avatar" style="border-bottom: 0px;">
                                                <img src="{{asset('img/user.svg')}}" alt="" class="circle">
                                                <span class="title roboto grey-text text-darken-3">Gretchen Torff</span><br>
                                                <div class="" style="display: inline;top: 5px;position:relative;">
                                            <span>
                                                <img src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                    <span>
                                                <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                    <span>
                                                <img src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                    <span>
                                                <img src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                    <span>
                                                <img src="{{asset('img/Talent_Card/Health_Indicator/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                </div>
                                                <a href="#person_modal" class="secondary-content modal-trigger"><i
                                                        class="material-icons accent-color-2"
                                                        style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                            </li>
                                        </a>
                                        <div class="divider" style="margin-bottom: 20px"></div>
                                        <li class="collection-item avatar" style="border-bottom: 0px;">
                                            <img src="{{asset('img/user_2.svg')}}" alt="" class="circle">
                                            <span class="title roboto grey-text text-darken-3">Zaire Torff</span><br>
                                            <span class="green white-text"
                                                  style="font-size: 11px;padding-top: 2px;padding-bottom: 5px;padding-right: 5px;padding-left: 7px;border-radius: 2px">Ready Now</span>
                                            <div class="" style="display: inline;top: 5px;position:relative;">
                                            <span>
                                                <img src="{{asset('img/Talent_Card/Gender/Blue/Male.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                            </div>
                                            <a href="#!" class="secondary-content"><i
                                                    class="material-icons accent-color-2"
                                                    style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                        </li>
                                        <li class="collection-item avatar" style="border-bottom: 0px;">
                                            <img src="{{asset('img/user_3.svg')}}" alt="" class="circle">
                                            <span class="title roboto grey-text text-darken-3">Emerson Geidt</span><br>
                                            <span class="accent-color-background-3 white-text"
                                                  style="font-size: 11px;padding-top: 2px;padding-bottom: 5px;padding-right: 5px;padding-left: 7px;border-radius: 2px">Need Dev</span>
                                            <div class="" style="display: inline;top: 5px;position:relative;">
                                            <span>
                                                <img src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                            </div>
                                            <a href="#!" class="secondary-content"><i
                                                    class="material-icons accent-color-2"
                                                    style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                        </li>
                                        <li class="collection-item avatar" style="border-bottom: 0px;">
                                            <img src="{{asset('img/user_4.svg')}}" alt="" class="circle">
                                            <span class="title roboto grey-text text-darken-3">Lydia Dokidis</span><br>
                                            <span class="pink white-text"
                                                  style="font-size: 11px;padding-top: 2px;padding-bottom: 5px;padding-right: 5px;padding-left: 7px;border-radius: 2px">Unfit</span>
                                            <div class="" style="display: inline;top: 5px;position:relative;">
                                            <span>
                                                <img src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                            </div>
                                            <a href="#!" class="secondary-content"><i
                                                    class="material-icons accent-color-2"
                                                    style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col l4 m4 s12"></div>
                </div>
                <div class="center">
                    <div class="hierarcy-line-vertical"
                         style="margin-left: auto;margin-right: auto;display: block;height: 50px"></div>
                </div>
                <div class="row" style="margin-bottom: 0px">
                    <div class="col l12 m12 s12">
                        <div class="hierarcy-line-horizontal"
                             style="margin-left: auto;margin-right: auto;display: block;"></div>
                    </div>
                    <div class="col l4 m4 s12">
                        <div class="hierarcy-line-vertical"
                             style="margin-left: auto;margin-right: auto;display: block;height: 40px"></div>
                        <ul class="collapsible z-depth-0" data-collapsible="accordion"
                            style="border: none;border-radius: 8px;">
                            <li style="border-radius: 8px;">
                                <div class="collapsible-header waves-effect waves-accent"
                                     style="border-radius: 8px;border-bottom: transparent;padding-left: 20px;padding-right: 20px">
                                    <p class="roboto-bold grey-text text-darken-4"
                                       style="font-size: 17px;margin-top: 0px;margin-bottom: 0px;">GM Corporate Culture
                                        <br>
                                        <span class="roboto grey-text"
                                              style="font-size: 13px;">4 directs 15 total</span></p>
                                    <i class="material-icons accent-color-2"
                                       style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_down</i>
                                </div>
                                <div class="collapsible-body white"
                                     style="border-radius: 8px;padding-top: 0px;padding-left: 20px;padding-right: 20px">
                                    <div class="divider" style="margin-bottom: 20px"></div>
                                    <ul class="collection">
                                        <li class="collection-item avatar" style="border-bottom: 0px;">
                                            <img src="{{asset('img/user.svg')}}" alt="" class="circle">
                                            <span class="title roboto grey-text text-darken-3">Gretchen Torff</span><br>
                                            <div class="" style="display: inline;top: 5px;position:relative;">
                                            <span>
                                                <img src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Health_Indicator/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                            </div>
                                            <a href="#!" class="secondary-content"><i
                                                    class="material-icons accent-color-2"
                                                    style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                        </li>
                                        <div class="divider" style="margin-bottom: 20px"></div>
                                        <li class="collection-item avatar" style="border-bottom: 0px;">
                                            <img src="{{asset('img/user_2.svg')}}" alt="" class="circle">
                                            <span class="title roboto grey-text text-darken-3">Zaire Torff</span><br>
                                            <span class="green white-text"
                                                  style="font-size: 11px;padding-top: 2px;padding-bottom: 5px;padding-right: 5px;padding-left: 7px;border-radius: 2px">Ready Now</span>
                                            <div class="" style="display: inline;top: 5px;position:relative;">
                                            <span>
                                                <img src="{{asset('img/Talent_Card/Gender/Blue/Male.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                            </div>
                                            <a href="#!" class="secondary-content"><i
                                                    class="material-icons accent-color-2"
                                                    style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                        </li>
                                        <li class="collection-item avatar" style="border-bottom: 0px;">
                                            <img src="{{asset('img/user_3.svg')}}" alt="" class="circle">
                                            <span class="title roboto grey-text text-darken-3">Emerson Geidt</span><br>
                                            <span class="accent-color-background-3 white-text"
                                                  style="font-size: 11px;padding-top: 2px;padding-bottom: 5px;padding-right: 5px;padding-left: 7px;border-radius: 2px">Need Dev</span>
                                            <div class="" style="display: inline;top: 5px;position:relative;">
                                            <span>
                                                <img src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                            </div>
                                            <a href="#!" class="secondary-content"><i
                                                    class="material-icons accent-color-2"
                                                    style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                        </li>
                                        <li class="collection-item avatar" style="border-bottom: 0px;">
                                            <img src="{{asset('img/user_4.svg')}}" alt="" class="circle">
                                            <span class="title roboto grey-text text-darken-3">Lydia Dokidis</span><br>
                                            <span class="pink white-text"
                                                  style="font-size: 11px;padding-top: 2px;padding-bottom: 5px;padding-right: 5px;padding-left: 7px;border-radius: 2px">Unfit</span>
                                            <div class="" style="display: inline;top: 5px;position:relative;">
                                            <span>
                                                <img src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                            </div>
                                            <a href="#!" class="secondary-content"><i
                                                    class="material-icons accent-color-2"
                                                    style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col l4 m4 s12">
                        <div class="hierarcy-line-vertical"
                             style="margin-left: auto;margin-right: auto;display: block;height: 40px"></div>
                        <ul class="collapsible z-depth-0" data-collapsible="accordion"
                            style="border: none;border-radius: 8px;">
                            <li style="border-radius: 8px;">
                                <div class="collapsible-header waves-effect waves-accent"
                                     style="border-radius: 8px;border-bottom: transparent;padding-left: 20px;padding-right: 20px">
                                    <p class="roboto-bold grey-text text-darken-4"
                                       style="font-size: 17px;margin-top: 0px;margin-bottom: 0px;">GM Human Capital Dev
                                        <br>
                                        <span class="roboto grey-text"
                                              style="font-size: 13px;">5 directs 10 total</span></p>
                                    <i class="material-icons accent-color-2"
                                       style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_down</i>
                                </div>
                                <div class="collapsible-body white"
                                     style="border-radius: 8px;padding-top: 0px;padding-left: 20px;padding-right: 20px">
                                    <div class="divider" style="margin-bottom: 20px"></div>
                                    <ul class="collection">
                                        <li class="collection-item avatar" style="border-bottom: 0px;">
                                            <img src="{{asset('img/user.svg')}}" alt="" class="circle">
                                            <span class="title roboto grey-text text-darken-3">Gretchen Torff</span><br>
                                            <div class="" style="display: inline;top: 5px;position:relative;">
                                            <span>
                                                <img src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Health_Indicator/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                            </div>
                                            <a href="#!" class="secondary-content"><i
                                                    class="material-icons accent-color-2"
                                                    style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                        </li>
                                        <div class="divider" style="margin-bottom: 20px"></div>
                                        <li class="collection-item avatar" style="border-bottom: 0px;">
                                            <img src="{{asset('img/user_2.svg')}}" alt="" class="circle">
                                            <span class="title roboto grey-text text-darken-3">Zaire Torff</span><br>
                                            <span class="green white-text"
                                                  style="font-size: 11px;padding-top: 2px;padding-bottom: 5px;padding-right: 5px;padding-left: 7px;border-radius: 2px">Ready Now</span>
                                            <div class="" style="display: inline;top: 5px;position:relative;">
                                            <span>
                                                <img src="{{asset('img/Talent_Card/Gender/Blue/Male.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                            </div>
                                            <a href="#!" class="secondary-content"><i
                                                    class="material-icons accent-color-2"
                                                    style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                        </li>
                                        <li class="collection-item avatar" style="border-bottom: 0px;">
                                            <img src="{{asset('img/user_3.svg')}}" alt="" class="circle">
                                            <span class="title roboto grey-text text-darken-3">Emerson Geidt</span><br>
                                            <span class="accent-color-background-3 white-text"
                                                  style="font-size: 11px;padding-top: 2px;padding-bottom: 5px;padding-right: 5px;padding-left: 7px;border-radius: 2px">Need Dev</span>
                                            <div class="" style="display: inline;top: 5px;position:relative;">
                                            <span>
                                                <img src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                            </div>
                                            <a href="#!" class="secondary-content"><i
                                                    class="material-icons accent-color-2"
                                                    style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                        </li>
                                        <li class="collection-item avatar" style="border-bottom: 0px;">
                                            <img src="{{asset('img/user_4.svg')}}" alt="" class="circle">
                                            <span class="title roboto grey-text text-darken-3">Lydia Dokidis</span><br>
                                            <span class="pink white-text"
                                                  style="font-size: 11px;padding-top: 2px;padding-bottom: 5px;padding-right: 5px;padding-left: 7px;border-radius: 2px">Unfit</span>
                                            <div class="" style="display: inline;top: 5px;position:relative;">
                                            <span>
                                                <img src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                            </div>
                                            <a href="#!" class="secondary-content"><i
                                                    class="material-icons accent-color-2"
                                                    style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col l4 m4 s12">
                        <div class="hierarcy-line-vertical"
                             style="margin-left: auto;margin-right: auto;display: block;height: 40px"></div>
                        <ul class="collapsible z-depth-0" data-collapsible="accordion"
                            style="border: none;border-radius: 8px;">
                            <li style="border-radius: 8px;">
                                <div class="collapsible-header waves-effect waves-accent"
                                     style="border-radius: 8px;border-bottom: transparent;padding-left: 20px;padding-right: 20px">
                                    <p class="roboto-bold grey-text text-darken-4"
                                       style="font-size: 17px;margin-top: 0px;margin-bottom: 0px;">Human Resource
                                        Business P... <br>
                                        <span class="roboto grey-text"
                                              style="font-size: 13px;">2 directs 4 total</span></p>
                                    <i class="material-icons accent-color-2"
                                       style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_down</i>
                                </div>
                                <div class="collapsible-body white"
                                     style="border-radius: 8px;padding-top: 0px;padding-left: 20px;padding-right: 20px">
                                    <div class="divider" style="margin-bottom: 20px"></div>
                                    <ul class="collection">
                                        <li class="collection-item avatar" style="border-bottom: 0px;">
                                            <img src="{{asset('img/user.svg')}}" alt="" class="circle">
                                            <span class="title roboto grey-text text-darken-3">Gretchen Torff</span><br>
                                            <div class="" style="display: inline;top: 5px;position:relative;">
                                            <span>
                                                <img src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Health_Indicator/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                            </div>
                                            <a href="#!" class="secondary-content"><i
                                                    class="material-icons accent-color-2"
                                                    style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                        </li>
                                        <div class="divider" style="margin-bottom: 20px"></div>
                                        <li class="collection-item avatar" style="border-bottom: 0px;">
                                            <img src="{{asset('img/user_2.svg')}}" alt="" class="circle">
                                            <span class="title roboto grey-text text-darken-3">Zaire Torff</span><br>
                                            <span class="green white-text"
                                                  style="font-size: 11px;padding-top: 2px;padding-bottom: 5px;padding-right: 5px;padding-left: 7px;border-radius: 2px">Ready Now</span>
                                            <div class="" style="display: inline;top: 5px;position:relative;">
                                            <span>
                                                <img src="{{asset('img/Talent_Card/Gender/Blue/Male.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                            </div>
                                            <a href="#!" class="secondary-content"><i
                                                    class="material-icons accent-color-2"
                                                    style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                        </li>
                                        <li class="collection-item avatar" style="border-bottom: 0px;">
                                            <img src="{{asset('img/user_3.svg')}}" alt="" class="circle">
                                            <span class="title roboto grey-text text-darken-3">Emerson Geidt</span><br>
                                            <span class="accent-color-background-3 white-text"
                                                  style="font-size: 11px;padding-top: 2px;padding-bottom: 5px;padding-right: 5px;padding-left: 7px;border-radius: 2px">Need Dev</span>
                                            <div class="" style="display: inline;top: 5px;position:relative;">
                                            <span>
                                                <img src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                            </div>
                                            <a href="#!" class="secondary-content"><i
                                                    class="material-icons accent-color-2"
                                                    style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                        </li>
                                        <li class="collection-item avatar" style="border-bottom: 0px;">
                                            <img src="{{asset('img/user_4.svg')}}" alt="" class="circle">
                                            <span class="title roboto grey-text text-darken-3">Lydia Dokidis</span><br>
                                            <span class="pink white-text"
                                                  style="font-size: 11px;padding-top: 2px;padding-bottom: 5px;padding-right: 5px;padding-left: 7px;border-radius: 2px">Unfit</span>
                                            <div class="" style="display: inline;top: 5px;position:relative;">
                                            <span>
                                                <img src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                                <span>
                                                <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                     style="height: 18px" alt="">
                                            </span>
                                            </div>
                                            <a href="#!" class="secondary-content"><i
                                                    class="material-icons accent-color-2"
                                                    style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
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
            <div id="info_modal" class="modal z-depth-12 popup-super-mini modal-fixed-footer"
                 style="border-radius: 10px;">
                <div class="modal-content">
                    <h4 class="roboto-bold grey-text text-darken-4" style="font-size: 20px;margin-bottom: 30px">
                        Organization Chart Info</h4>
                    <p class="grey-text text-darken-1 roboto" style="font-size: 14px;margin-top: -15px">This is
                        information about some icon on organization chart talent card</p>
                    <div class="setting-item">
                        <div class="row" style="margin-bottom: 0px">
                            <div class="col s12">
                                <img src="{{asset('img/Talent_Card/Gender/Blue/Male.svg')}}"
                                     style="height: 25px;display: inline;margin-right: 15px;margin-top: 10px" alt="">
                                <span class="grey-text text-darken-1"
                                      style="font-size: 14px;top: -5px;position: relative;">The employee is male</span>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item">
                        <div class="row" style="margin-bottom: 0px">
                            <div class="col s12">
                                <img src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}"
                                     style="height: 25px;display: inline;margin-right: 15px;margin-top: 10px" alt="">
                                <span class="grey-text text-darken-1"
                                      style="font-size: 14px;top: -5px;position: relative;">The employee is female</span>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item">
                        <div class="row" style="margin-bottom: 0px">
                            <div class="col s12">
                                <img src="{{asset('img/Talent_Card/Impact_of_Loss/Green.svg')}}"
                                     style="height: 25px;display: inline;margin-right: 15px;margin-top: 10px" alt="">
                                <span class="grey-text text-darken-1"
                                      style="font-size: 14px;top: -5px;position: relative;">The employee impact of loss is high</span>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item">
                        <div class="row" style="margin-bottom: 0px">
                            <div class="col s12">
                                <img src="{{asset('img/Talent_Card/Impact_of_Loss/Yellow.svg')}}"
                                     style="height: 25px;display: inline;margin-right: 15px;margin-top: 10px" alt="">
                                <span class="grey-text text-darken-1"
                                      style="font-size: 14px;top: -5px;position: relative;">The employee impact of loss is medium</span>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item">
                        <div class="row" style="margin-bottom: 0px">
                            <div class="col s12">
                                <img src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}"
                                     style="height: 25px;display: inline;margin-right: 15px;margin-top: 10px" alt="">
                                <span class="grey-text text-darken-1"
                                      style="font-size: 14px;top: -5px;position: relative;">The employee impact of loss is low</span>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item">
                        <div class="row" style="margin-bottom: 0px">
                            <div class="col s12">
                                <img src="{{asset('img/Talent_Card/Risk_of_Loss/Green.svg')}}"
                                     style="height: 25px;display: inline;margin-right: 15px;margin-top: 10px" alt="">
                                <span class="grey-text text-darken-1"
                                      style="font-size: 14px;top: -5px;position: relative;">The employee risk of loss is high</span>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item">
                        <div class="row" style="margin-bottom: 0px">
                            <div class="col s12">
                                <img src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}"
                                     style="height: 25px;display: inline;margin-right: 15px;margin-top: 10px" alt="">
                                <span class="grey-text text-darken-1"
                                      style="font-size: 14px;top: -5px;position: relative;">The employee risk of loss is medium</span>
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
            <div id="person_modal" class="modal z-depth-12 popup-large"
                 style="border-radius: 10px;">
                <div class="modal-content" style="padding-left: 15px;padding-right: 15px;">
                    <h4 class="roboto-bold grey-text text-darken-4" style="font-size: 17px;margin-bottom: 30px">
                        VP Human Capital
                    </h4>
                    <a href="#" class="btn-floating modal-action modal-close z-depth-0"
                       style="background-color: #eee;top: 5px;position: absolute;right: 10px;transform: scale(0.9)"><i
                            class="material-icons grey-text text-darken-3">close</i></a>
                    <p class="grey-text text-darken-1 roboto" style="font-size: 14px;margin-top: -25px">Code:
                        38819277</p>
                    <div class="row">
                        <div class="col l4 m4 s12" style="border-right: 1px solid #ddd;">
                            <div class="row">
                                <div class="col l7 m7 s12">
                                    <h4 class="roboto-bold grey-text text-darken-4" style="font-size: 15px;margin-bottom: 30px;margin-left: -20px;position:relative;top: 8px;">
                                        Successor List
                                    </h4>
                                </div>
                                <div class="col l5 m5 s12">
                                    <a href="#!"
                                       class="waves-effect waves-accent white btn accent-color-2 z-depth-0 right"
                                       style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;transform: scale(0.9);padding-left: 15px;padding-right: 15px;"><i
                                            class="material-icons accent-color-2 fas fa-plus-circle left"></i> ADD</a>
                                </div>
                                <div class="col l6 m6 s12" style="margin-top: 20px;padding-bottom: 5px;border-bottom: 3px solid #f26923">
                                    <h4 class="roboto-bold grey-text text-darken-4 center" style="font-size: 13px;">
                                        Internal
                                    </h4>
                                </div>
                                <div class="col l6 m6 s12" style="margin-top: 20px;padding-bottom: 5px;">
                                    <h4 class="roboto-bold grey-text text-darken-4 center" style="font-size: 13px;">
                                        External
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col l4 m4 s12"></div>
                        <div class="col l4 m4 s12"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
