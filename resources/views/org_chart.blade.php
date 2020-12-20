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
                                        <a href="#person_modal" class="modal-trigger">
                                            <li class="collection-item avatar" style="border-bottom: 0px;">
                                                <img src="{{asset('img/user_2.svg')}}" alt="" class="circle">
                                                <span
                                                    class="title roboto grey-text text-darken-3">Zaire Torff</span><br>
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
                                                <a href="#person_modal" class="secondary-content modal-trigger"><i
                                                        class="material-icons accent-color-2"
                                                        style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                            </li>
                                        </a>
                                        <a href="#person_modal" class="modal-trigger">
                                            <li class="collection-item avatar" style="border-bottom: 0px;">
                                                <img src="{{asset('img/user_3.svg')}}" alt="" class="circle">
                                                <span
                                                    class="title roboto grey-text text-darken-3">Emerson Geidt</span><br>
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
                                                <a href="#person_modal" class="secondary-content modal-trigger"><i
                                                        class="material-icons accent-color-2"
                                                        style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                            </li>
                                        </a>
                                        <a href="#person_modal" class="modal-trigger">
                                            <li class="collection-item avatar" style="border-bottom: 0px;">
                                                <img src="{{asset('img/user_4.svg')}}" alt="" class="circle">
                                                <span
                                                    class="title roboto grey-text text-darken-3">Lydia Dokidis</span><br>
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
                                                <a href="#person_modal" class="secondary-content modal-trigger"><i
                                                        class="material-icons accent-color-2"
                                                        style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                            </li>
                                        </a>
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
                                        <a href="#person_modal" class="modal-trigger">
                                            <li class="collection-item avatar" style="border-bottom: 0px;">
                                                <img src="{{asset('img/user_2.svg')}}" alt="" class="circle">
                                                <span
                                                    class="title roboto grey-text text-darken-3">Zaire Torff</span><br>
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
                                                <a href="#person_modal" class="secondary-content modal-trigger"><i
                                                        class="material-icons accent-color-2"
                                                        style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                            </li>
                                        </a>
                                        <a href="#person_modal" class="modal-trigger">
                                            <li class="collection-item avatar" style="border-bottom: 0px;">
                                                <img src="{{asset('img/user_3.svg')}}" alt="" class="circle">
                                                <span
                                                    class="title roboto grey-text text-darken-3">Emerson Geidt</span><br>
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
                                                <a href="#person_modal" class="secondary-content modal-trigger"><i
                                                        class="material-icons accent-color-2"
                                                        style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                            </li>
                                        </a>
                                        <a href="#person_modal" class="modal-trigger">
                                            <li class="collection-item avatar" style="border-bottom: 0px;">
                                                <img src="{{asset('img/user_4.svg')}}" alt="" class="circle">
                                                <span
                                                    class="title roboto grey-text text-darken-3">Lydia Dokidis</span><br>
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
                                                <a href="#person_modal" class="secondary-content modal-trigger"><i
                                                        class="material-icons accent-color-2"
                                                        style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                            </li>
                                        </a>
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
                                        <a href="#person_modal" class="modal-trigger">
                                            <li class="collection-item avatar" style="border-bottom: 0px;">
                                                <img src="{{asset('img/user_2.svg')}}" alt="" class="circle">
                                                <span
                                                    class="title roboto grey-text text-darken-3">Zaire Torff</span><br>
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
                                                <a href="#person_modal" class="secondary-content modal-trigger"><i
                                                        class="material-icons accent-color-2"
                                                        style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>>
                                            </li>
                                        </a>
                                        <a href="#person_modal" class="modal-trigger">
                                            <li class="collection-item avatar" style="border-bottom: 0px;">
                                                <img src="{{asset('img/user_3.svg')}}" alt="" class="circle">
                                                <span
                                                    class="title roboto grey-text text-darken-3">Emerson Geidt</span><br>
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
                                                <a href="#person_modal" class="secondary-content modal-trigger"><i
                                                        class="material-icons accent-color-2"
                                                        style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                            </li>
                                        </a>
                                        <a href="#person_modal" class="modal-trigger">
                                            <li class="collection-item avatar" style="border-bottom: 0px;">
                                                <img src="{{asset('img/user_4.svg')}}" alt="" class="circle">
                                                <span
                                                    class="title roboto grey-text text-darken-3">Lydia Dokidis</span><br>
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
                                                <a href="#person_modal" class="secondary-content modal-trigger"><i
                                                        class="material-icons accent-color-2"
                                                        style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                            </li>
                                        </a>
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
                                        <a href="#person_modal" class="modal-trigger">
                                            <li class="collection-item avatar" style="border-bottom: 0px;">
                                                <img src="{{asset('img/user_2.svg')}}" alt="" class="circle">
                                                <span
                                                    class="title roboto grey-text text-darken-3">Zaire Torff</span><br>
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
                                                <a href="#person_modal" class="secondary-content modal-trigger"><i
                                                        class="material-icons accent-color-2"
                                                        style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                            </li>
                                        </a>
                                        <a href="#person_modal" class="modal-trigger">
                                            <li class="collection-item avatar" style="border-bottom: 0px;">
                                                <img src="{{asset('img/user_3.svg')}}" alt="" class="circle">
                                                <span
                                                    class="title roboto grey-text text-darken-3">Emerson Geidt</span><br>
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
                                                <a href="#person_modal" class="secondary-content modal-trigger"><i
                                                        class="material-icons accent-color-2"
                                                        style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                            </li>
                                        </a>
                                        <a href="#person_modal" class="modal-trigger">
                                            <li class="collection-item avatar" style="border-bottom: 0px;">
                                                <img src="{{asset('img/user_4.svg')}}" alt="" class="circle">
                                                <span
                                                    class="title roboto grey-text text-darken-3">Lydia Dokidis</span><br>
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
                                                <a href="#person_modal" class="secondary-content modal-trigger"><i
                                                        class="material-icons accent-color-2"
                                                        style="position:absolute;right: 10px;margin-top: 10px">keyboard_arrow_right</i></a>
                                            </li>
                                        </a>
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
            <div id="person_modal" class="modal z-depth-12 popup-super-large"
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
                        <div class="col l4 m4 s12">
                            <div class="left-section org_chart_modal_section"
                                 style="border-right: 1px solid #ddd;overflow-y: scroll">
                                <div class="row">
                                    <div class="col l7 m7 s12">
                                        <h4 class="roboto-bold grey-text text-darken-4"
                                            style="font-size: 15px;margin-bottom: 30px;margin-left: -10px;position:relative;top: 8px;">
                                            Successor List
                                        </h4>
                                    </div>
                                    <div class="col l5 m5 s12">
                                        <a href="#add_choose"
                                           class="waves-effect waves-accent white btn accent-color-2 z-depth-0 right modal-trigger"
                                           style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;transform: scale(0.9);padding-left: 15px;padding-right: 15px;"><i
                                                class="material-icons accent-color-2 fas fa-plus-circle left"></i>
                                            ADD</a>
                                    </div>
                                    <div class="col l12 m12 s12"
                                         style="margin-top: 20px;padding-bottom: 5px;">
                                        <ul class="tabs tabs-fixed-width transparent">
                                            <li class="tab col s3">
                                                <a href="#internal" class="roboto-bold grey-text text-darken-4 active"
                                                   style="font-size: 13px;">Internal</a>
                                            </li>
                                            <li class="tab col s3">
                                                <a href="#external" class="roboto-bold grey-text text-darken-4"
                                                   style="font-size: 13px;">External</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col l12 m12 s12" id="internal">
                                        <p class="grey-text text-darken-3 roboto"
                                           style="font-size: 13px;margin-top: 10px;margin-bottom: 10px;letter-spacing: 0.5px">
                                            Approved</p>
                                        <ul class="collection" style="background-color: transparent;border: none;">
                                            <li class="collection-item avatar"
                                                style="border-bottom: 0px;background-color: transparent">
                                                <img src="{{asset('img/user.svg')}}" alt="" class="circle">
                                                <span class="title roboto grey-text text-darken-3"
                                                      style="font-size: 14px;">Gretchen Torff</span><br>
                                                <div class="" style="display: inline;top: 5px;position:relative;">
                                                        <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                    <span>
                                                            <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                                 style="height: 18px" alt="">
                                                        </span>
                                                    <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                    <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                    <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Health_Indicator/Green.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                </div>
                                                <a href="#" class='secondary-content modal-trigger dropdown-button'
                                                   data-activates='dropdown_option_approved'><i
                                                        class="material-icons grey-text text-darken-1"
                                                        style="position:absolute;right: 10px;margin-top: 10px">more_vert</i></a>
                                                <ul id='dropdown_option_approved' class='dropdown-content z-depth-13'
                                                    style="border-radius: 8px;">
                                                    <li>
                                                        <a href="#"
                                                           class="accent-color-2 waves-effect"
                                                           style="font-size: 0.8rem;">Approve</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                           class="red-text waves-effect" style="font-size: 0.8rem">Reject</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#"
                                                           class="grey-text text-darken-3 waves-effect"
                                                           style="font-size: 0.8rem">View Family
                                                            Tree</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                           class="grey-text text-darken-3 waves-effect"
                                                           style="font-size: 0.8rem">Evaluate
                                                            Readiness</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <p class="grey-text text-darken-3 roboto"
                                           style="font-size: 13px;margin-top: 10px;margin-bottom: 10px;letter-spacing: 0.5px">
                                            Need Approval</p>
                                        <ul class="collection" style="background-color: transparent;border: none;">
                                            <li class="collection-item avatar"
                                                style="border-bottom: 0px;background-color: transparent">
                                                <img src="{{asset('img/user.svg')}}" alt="" class="circle">
                                                <span class="title roboto grey-text text-darken-3"
                                                      style="font-size: 14px;">Gretchen Torff</span><br>
                                                <div class="" style="display: inline;top: 5px;position:relative;">
                                                        <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                    <span>
                                                            <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                                 style="height: 18px" alt="">
                                                        </span>
                                                    <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                    <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                    <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Health_Indicator/Green.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                </div>
                                                <a href="#" class='secondary-content modal-trigger dropdown-button'
                                                   data-activates='dropdown_option_approved'><i
                                                        class="material-icons grey-text text-darken-1"
                                                        style="position:absolute;right: 10px;margin-top: 10px">more_vert</i></a>
                                                <ul id='dropdown_option_approved' class='dropdown-content z-depth-13'
                                                    style="border-radius: 8px;">
                                                    <li>
                                                        <a href="#"
                                                           class="accent-color-2 waves-effect"
                                                           style="font-size: 0.8rem;">Approve</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                           class="red-text waves-effect" style="font-size: 0.8rem">Reject</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#"
                                                           class="grey-text text-darken-3 waves-effect"
                                                           style="font-size: 0.8rem">View Family
                                                            Tree</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                           class="grey-text text-darken-3 waves-effect"
                                                           style="font-size: 0.8rem">Evaluate
                                                            Readiness</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <p class="grey-text text-darken-3 roboto"
                                           style="font-size: 13px;margin-top: 10px;margin-bottom: 10px;letter-spacing: 0.5px">
                                            Submitted</p>
                                        <ul class="collection" style="background-color: transparent;border: none;">
                                            <li class="collection-item avatar"
                                                style="border-bottom: 0px;background-color: transparent">
                                                <img src="{{asset('img/user.svg')}}" alt="" class="circle">
                                                <span class="title roboto grey-text text-darken-3"
                                                      style="font-size: 14px;">Gretchen Torff</span><br>
                                                <div class="" style="display: inline;top: 5px;position:relative;">
                                                        <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                    <span>
                                                            <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                                 style="height: 18px" alt="">
                                                        </span>
                                                    <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                    <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                    <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Health_Indicator/Green.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                </div>
                                                <a href="#" class='secondary-content modal-trigger dropdown-button'
                                                   data-activates='dropdown_option_approved'><i
                                                        class="material-icons grey-text text-darken-1"
                                                        style="position:absolute;right: 10px;margin-top: 10px">more_vert</i></a>
                                                <ul id='dropdown_option_approved' class='dropdown-content z-depth-13'
                                                    style="border-radius: 8px;">
                                                    <li>
                                                        <a href="#"
                                                           class="accent-color-2 waves-effect"
                                                           style="font-size: 0.8rem;">Approve</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                           class="red-text waves-effect" style="font-size: 0.8rem">Reject</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#"
                                                           class="grey-text text-darken-3 waves-effect"
                                                           style="font-size: 0.8rem">View Family
                                                            Tree</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                           class="grey-text text-darken-3 waves-effect"
                                                           style="font-size: 0.8rem">Evaluate
                                                            Readiness</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <p class="grey-text text-darken-3 roboto"
                                           style="font-size: 13px;margin-top: 10px;margin-bottom: 10px;letter-spacing: 0.5px">
                                            Saves Candidate</p>
                                        <ul class="collection" style="background-color: transparent;border: none;">
                                            <li class="collection-item avatar"
                                                style="border-bottom: 0px;background-color: transparent">
                                                <img src="{{asset('img/user.svg')}}" alt="" class="circle">
                                                <span class="title roboto grey-text text-darken-3"
                                                      style="font-size: 14px;">Gretchen Torff</span><br>
                                                <div class="" style="display: inline;top: 5px;position:relative;">
                                                        <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                    <span>
                                                            <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                                 style="height: 18px" alt="">
                                                        </span>
                                                    <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                    <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                    <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Health_Indicator/Green.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                </div>
                                                <a href="#" class='secondary-content modal-trigger dropdown-button'
                                                   data-activates='dropdown_option_approved'><i
                                                        class="material-icons grey-text text-darken-1"
                                                        style="position:absolute;right: 10px;margin-top: 10px">more_vert</i></a>
                                                <ul id='dropdown_option_approved' class='dropdown-content z-depth-13'
                                                    style="border-radius: 8px;">
                                                    <li>
                                                        <a href="#"
                                                           class="accent-color-2 waves-effect"
                                                           style="font-size: 0.8rem;">Approve</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                           class="red-text waves-effect" style="font-size: 0.8rem">Reject</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#"
                                                           class="grey-text text-darken-3 waves-effect"
                                                           style="font-size: 0.8rem">View Family
                                                            Tree</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                           class="grey-text text-darken-3 waves-effect"
                                                           style="font-size: 0.8rem">Evaluate
                                                            Readiness</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <p class="grey-text text-darken-3 roboto"
                                           style="font-size: 13px;margin-top: 10px;margin-bottom: 10px;letter-spacing: 0.5px">
                                            Rejected</p>
                                        <ul class="collection" style="background-color: transparent;border: none;">
                                            <li class="collection-item avatar"
                                                style="border-bottom: 0px;background-color: transparent">
                                                <img src="{{asset('img/user.svg')}}" alt="" class="circle">
                                                <span class="title roboto grey-text text-darken-3"
                                                      style="font-size: 14px;">Gretchen Torff</span><br>
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
                                                        <img
                                                            src="{{asset('img/Talent_Card/Health_Indicator/Green.svg')}}"
                                                            style="height: 18px" alt="">
                                                    </span>
                                                </div>
                                                <a href="#" class='secondary-content modal-trigger dropdown-button'
                                                   data-activates='dropdown_option_approved'><i
                                                        class="material-icons grey-text text-darken-1"
                                                        style="position:absolute;right: 10px;margin-top: 10px">more_vert</i></a>
                                                <ul id='dropdown_option_approved' class='dropdown-content z-depth-13'
                                                    style="border-radius: 8px;">
                                                    <li>
                                                        <a href="#"
                                                           class="accent-color-2 waves-effect"
                                                           style="font-size: 0.8rem;">Approve</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                           class="red-text waves-effect" style="font-size: 0.8rem">Reject</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#"
                                                           class="grey-text text-darken-3 waves-effect"
                                                           style="font-size: 0.8rem">View Family
                                                            Tree</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                           class="grey-text text-darken-3 waves-effect"
                                                           style="font-size: 0.8rem">Evaluate
                                                            Readiness</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col l12 m12 s12" id="external">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l5 m5 s12">
                            <div class="mid-section org_chart_modal_section"
                                 style="overflow-y: scroll;border-right: 1px solid #ddd">
                                <div class="row">
                                    <div class="col l7 m7 s12">
                                        <h4 class="roboto-bold grey-text text-darken-4"
                                            style="font-size: 17px;margin-bottom: 20px;position: relative;top: 8px;">
                                            Successor Detail</h4>
                                    </div>
                                    <div class="col l5 m5 s12">
                                        <a href="{{url('/profile')}}"
                                           class="waves-effect waves-accent white btn accent-color-2 z-depth-0"
                                           style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;transform: scale(0.9);padding-left: 15px;padding-right: 15px;">VIEW
                                            PROFILE</a>
                                        <a href="#" class="right dropdown-button" data-activates='dropdown_option'>
                                            <img src="{{asset('img/option.svg')}}"
                                                 style="height: 20px;position: relative;top: 7px;" alt="">
                                        </a>
                                        <ul id='dropdown_option' class='dropdown-content z-depth-13'
                                            style="border-radius: 8px;">
                                            <li>
                                                <a href="#"
                                                   class="accent-color-2 waves-effect"
                                                   style="font-size: 0.8rem;">Approve</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                   class="red-text waves-effect" style="font-size: 0.8rem">Reject</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="#"
                                                   class="grey-text text-darken-3 waves-effect"
                                                   style="font-size: 0.8rem">View Family
                                                    Tree</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                   class="grey-text text-darken-3 waves-effect"
                                                   style="font-size: 0.8rem">Evaluate
                                                    Readiness</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
                                           style="font-size: 15px;margin-top: -15px;margin-bottom: 10px;letter-spacing: 0.5px">
                                            GM.
                                            Human Resource</p>
                                        <p class="grey-text roboto"
                                           style="font-size: 14px;margin-top: -5px;margin-bottom: 30px;letter-spacing: 0.5px">
                                            <span><i class="material-icons fas fa-birthday-cake grey-text"
                                                     style="font-size: 15px;margin-right: 5px;"></i> 10/10/1989</span>
                                            <span><i class="material-icons fas fa-suitcase grey-text"
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
                                            <img src="{{asset('img/org_chart_oranged.svg')}}" style="height: 20px;"
                                                 alt="">
                                        </div>
                                        <div class="col s11">
                                            <span class="accent-color-2"
                                                  style="font-size: 14px;top: -3px;position: relative;">GM. Finance</span>
                                            <span class="green white-text right"
                                                  style="font-size: 11px;padding-top: 3px;padding-bottom: 5px;padding-right: 5px;padding-left: 7px;border-radius: 2px;">Ready Now</span>
                                        </div>
                                    </div>
                                    <p class="grey-text roboto"
                                       style="font-size: 13px;margin-top: 0px;margin-bottom: 10px;letter-spacing: 0.5px">
                                        Incumbent :
                                        <span class="accent-color-2">Erick</span>
                                    </p>
                                </div>
                                <div class="detail-item" style="padding-bottom: 10px">
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col s1">
                                            <img src="{{asset('img/org_chart_oranged.svg')}}" style="height: 20px;"
                                                 alt="">
                                        </div>
                                        <div class="col s11">
                                            <span class="accent-color-2"
                                                  style="font-size: 14px;top: -3px;position: relative;">VP. Human Resource</span>
                                            <span class="green white-text right"
                                                  style="font-size: 11px;padding-top: 3px;padding-bottom: 5px;padding-right: 5px;padding-left: 7px;border-radius: 2px;">Ready Now</span>
                                        </div>
                                    </div>
                                    <p class="grey-text roboto"
                                       style="font-size: 13px;margin-top: 0px;margin-bottom: 10px;letter-spacing: 0.5px">
                                        Incumbent :
                                        <span class="accent-color-2">Hubert</span>
                                    </p>
                                </div>
                                <p class="grey-text text-darken-3 roboto"
                                   style="font-size: 15px;margin-top: 0px;margin-bottom: 20px;letter-spacing: 0.5px">
                                    Talent Pool Nomination</p>
                                <div class="detail-item" style="padding-bottom: 10px;">
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col s1">
                                            <img src="{{asset('img/talent_pool_oranged.svg')}}" style="height: 20px;"
                                                 alt="">
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
                                   style="font-size: 15px;margin-top: 0px;margin-bottom: 20px;letter-spacing: 0.5px">
                                    Performance &amp; Pool</p>
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col l3 m3 s3">
                                        <img src="{{asset('img/performance_pool.svg')}}" style="height: 90px;" alt="">
                                    </div>
                                    <div class="col l9 m9 s9">
                                        <p class="grey-text text-darken-3 roboto"
                                           style="font-size: 15px;margin-top: 0px;margin-bottom: 10px;letter-spacing: 0.5px">
                                            Top
                                            Talent</p>
                                        <p class="grey-text roboto"
                                           style="font-size: 14px;margin-top: -5px;margin-bottom: 30px;letter-spacing: 0.5px">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam debitis
                                            eius facilis
                                            ipsam iste reiciendis unde.
                                        </p>
                                    </div>
                                </div>
                                <div class="divider" style="margin-bottom: 30px;margin-top: 5px"></div>
                                <p class="grey-text text-darken-3 roboto"
                                   style="font-size: 15px;margin-top: 0px;margin-bottom: 20px;letter-spacing: 0.5px">
                                    Performance
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
                        </div>
                        <div class="col l3 m3 s12">
                            <div class="right-section org_chart_modal_section"
                                 style="overflow-y: scroll;">
                                <h4 class="roboto-bold grey-text text-darken-4"
                                    style="font-size: 17px;margin-bottom: 20px">
                                    Log Activity</h4>
                                <div class="card z-depth-0"
                                     style="border-radius: 8px;background-color: rgba(0,0,0,0.04)">
                                    <div class="card-content"
                                         style="padding-top: 15px;padding-bottom: 15px;padding-left: 15px;padding-right: 15px;">
                                        <p class="grey-text roboto"
                                           style="font-size: 11px;margin-top: 0px;margin-bottom: 5px;letter-spacing: 0.5px">
                                            10.00 - Sun, 17 August 2020
                                        </p>
                                        <p class="grey-text text-darken-3 roboto-bold"
                                           style="font-size: 14px;margin-top: 0px;margin-bottom: 5px;letter-spacing: 0.5px">
                                            Hubert <span class="accent-color-2">added</span> Zaire Torff
                                        </p>
                                        <p class="grey-text text-darken-3 roboto"
                                           style="font-size: 13px;margin-top: 0px;margin-bottom: 5px;letter-spacing: 0.5px">
                                            "This guy is good"
                                        </p>
                                    </div>
                                </div>
                                <div class="card z-depth-0"
                                     style="border-radius: 8px;background-color: rgba(0,0,0,0.04)">
                                    <div class="card-content"
                                         style="padding-top: 15px;padding-bottom: 15px;padding-left: 15px;padding-right: 15px;">
                                        <p class="grey-text roboto"
                                           style="font-size: 11px;margin-top: 0px;margin-bottom: 5px;letter-spacing: 0.5px">
                                            10.00 - Sun, 17 August 2020
                                        </p>
                                        <p class="grey-text text-darken-3 roboto-bold"
                                           style="font-size: 14px;margin-top: 0px;margin-bottom: 5px;letter-spacing: 0.5px">
                                            Hubert <span class="red-text">removed</span> Zaire Torff
                                        </p>
                                        <p class="grey-text text-darken-3 roboto"
                                           style="font-size: 13px;margin-top: 0px;margin-bottom: 5px;letter-spacing: 0.5px">
                                            "This guy is good"
                                        </p>
                                    </div>
                                </div>
                                <div class="card z-depth-0"
                                     style="border-radius: 8px;background-color: rgba(0,0,0,0.04)">
                                    <div class="card-content"
                                         style="padding-top: 15px;padding-bottom: 15px;padding-left: 15px;padding-right: 15px;">
                                        <p class="grey-text roboto"
                                           style="font-size: 11px;margin-top: 0px;margin-bottom: 5px;letter-spacing: 0.5px">
                                            10.00 - Sun, 17 August 2020
                                        </p>
                                        <p class="grey-text text-darken-3 roboto-bold"
                                           style="font-size: 14px;margin-top: 0px;margin-bottom: 5px;letter-spacing: 0.5px">
                                            Hubert <span class="accent-color-2">approved</span> Zaire Torff
                                        </p>
                                        <p class="grey-text text-darken-3 roboto"
                                           style="font-size: 13px;margin-top: 0px;margin-bottom: 5px;letter-spacing: 0.5px">
                                            "This guy is good"
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="add_choose" class="modal z-depth-12 popup-super-mini"
                 style="border-radius: 10px;">
                <div class="modal-content">
                    <h4 class="roboto-bold grey-text text-darken-4" style="font-size: 20px;margin-bottom: 20px">
                        Choose the way to add successor</h4>
                    <a href="#internal_add" onclick="$('#add_choose').modal('close')" class="modal-trigger">
                        <div class="card hoverable z-depth-12" style="border-radius: 8px;">
                            <div class="card-content" style="padding: 10px;padding-top: 15px;padding-bottom: 15px;">
                                <div class="row" style="margin-bottom: 0px;">
                                    <div class="col l3 m3 s3">
                                        <div class="center">
                                            <img src="{{asset('img/internal.svg')}}" style="height: 40px;" alt="">
                                        </div>
                                    </div>
                                    <div class="col l9 m9 s9">
                                        <p class="grey-text text-darken-3 roboto-bold"
                                           style="font-size: 14px;margin-bottom: 5px;">Internal</p>
                                        <p class="grey-text text-darken-1" style="font-size: 12px;">Add successors from
                                            the available data list on database</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#external_add" onclick="$('#add_choose').modal('close')" class="modal-trigger">
                        <div class="card hoverable z-depth-12" style="border-radius: 8px;">
                            <div class="card-content" style="padding: 10px;padding-top: 15px;padding-bottom: 15px;">
                                <div class="row" style="margin-bottom: 0px;">
                                    <div class="col l3 m3 s3">
                                        <div class="center">
                                            <img src="{{asset('img/external.svg')}}" style="height: 40px;" alt="">
                                        </div>
                                    </div>
                                    <div class="col l9 m9 s9">
                                        <p class="grey-text text-darken-3 roboto-bold"
                                           style="font-size: 14px;margin-bottom: 5px;">External</p>
                                        <p class="grey-text text-darken-1" style="font-size: 12px;">Add successors
                                            manually by filling the fields that match the requirements</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="modal-footer">
                    <a href="#!"
                       class="modal-action modal-close waves-effect waves-light white-text btn accent-color-background-2 z-depth-0"
                       style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;transform: scale(0.9)">CLOSE</a>
                </div>
            </div>
            <div id="internal_add" class="modal z-depth-12 popup-semi-mini modal-fixed-footer"
                 style="border-radius: 10px;">
                <div class="modal-content">
                    <h4 class="roboto-bold grey-text text-darken-4" style="font-size: 18px;margin-bottom: 20px">
                        Add Successor</h4>
                    <div class="row">
                        <div class="col l6 m6 s12">
                            <div class="add-successor-side" style="margin-left: -10px;">
                                <p class="grey-text text-darken-1 roboto"
                                   style="font-size: 12px;margin-top: 0px;margin-bottom: 10px;">You can search or just
                                    scrool the list to looking up the employee</p>
                                <input id="name" type="text" placeholder="Search"
                                       class="validate"
                                       style="border:1px solid #ddd;font-size: 15px;border-radius: 8px;padding-left: 5%;width: 95%;margin-top: 5px;">
                                <a href="#!"
                                   class="waves-effect waves-accent btn accent-color-2 z-depth-0"
                                   style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;width: 100%;background-color: transparent">ADD
                                    ALL</a>
                                <ul class="collection" style="background-color: transparent;border: none;">
                                    @for($i = 0;$i <= 6; $i++)
                                        <li class="collection-item avatar"
                                            style="border-bottom: 0px;background-color: transparent">
                                            <img src="{{asset('img/user.svg')}}" alt="" class="circle">
                                            <span class="title roboto grey-text text-darken-3"
                                                  style="font-size: 14px;">Gretchen Torff</span><br>
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
                                            <a href="#" class='secondary-content' style="transform: scale(0.9)">
                                                <i class="material-icons accent-color-2 fas fa-plus-circle"></i>
                                            </a>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <div class="col l6 m6 s12" style="border-left: 1px solid #ddd;">
                            <div class="add-successor-side">
                                <p class="grey-text text-darken-1 roboto"
                                   style="font-size: 12px;margin-top: 0px;margin-bottom: 10px;">1 Employee selected</p>
                                @for($i = 0;$i < 1;$i++)
                                    <div class="card z-depth-0"
                                         style="border-radius: 8px;background-color: transparent;border: 1px solid #ddd;margin-bottom: 10px;">
                                        <div class="card-content"
                                             style="padding-left: 5px;padding-right:5px;padding-top: 10px;padding-bottom: 10px;">
                                            <ul class="collection"
                                                style="background-color: transparent;border: none;margin: 0px;">
                                                <li class="collection-item avatar"
                                                    style="border-bottom: 0px;background-color: transparent">
                                                    <img src="{{asset('img/user.svg')}}" alt="" class="circle">
                                                    <span class="title roboto grey-text text-darken-3"
                                                          style="font-size: 14px;">Gretchen Torff</span><br>
                                                    <div class="" style="display: inline;top: 5px;position:relative;">
                                                        <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Gender/Blue/Female.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                        <span>
                                                            <img src="{{asset('img/Talent_Card/Discipline/Green.svg')}}"
                                                                 style="height: 18px" alt="">
                                                        </span>
                                                        <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Impact_of_Loss/Red.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                        <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Risk_of_Loss/Yellow.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                        <span>
                                                            <img
                                                                src="{{asset('img/Talent_Card/Health_Indicator/Green.svg')}}"
                                                                style="height: 18px" alt="">
                                                        </span>
                                                    </div>
                                                    <a href="#" class='secondary-content' style="transform: scale(0.9)">
                                                        <i class="material-icons grey-text fas fa-times-circle"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <form action="" style="margin-top: -15px;">
                                                <label for="division" class="grey-text text-darken-1"
                                                       style="font-size: 12px;margin-left: 5px;">Readiness</label>
                                                <select name="division" id="division" class="browser-default"
                                                        style="border:1px solid #ddd;font-size: 15px;border-radius: 8px;padding-left: 5%;width: 95%;margin-top: 5px;background-color: transparent;margin-bottom: 10px;margin-left: 5px;">
                                                    <option value="Ready">Ready</option>
                                                </select>
                                                <label for="division" class="grey-text text-darken-1"
                                                       style="font-size: 12px;margin-left: 5px;">Reason</label>
                                                <textarea class="materialize-textarea validate" name="" id=""
                                                          style="border:1px solid #ddd;font-size: 13px;border-radius: 8px;padding-left: 5%;width: 89%;margin-top: 5px;margin-left: 2%;">Have a unique charisma to lead</textarea>
                                            </form>
                                        </div>
                                    </div>
                                @endfor
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
                       style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;transform: scale(0.9)">SUBMIT</a>
                </div>
            </div>
            <div id="external_add" class="modal z-depth-12 popup-super-mini modal-fixed-footer"
                 style="border-radius: 10px;">
                <div class="modal-content">
                    <h4 class="roboto-bold grey-text text-darken-4" style="font-size: 18px;margin-bottom: 20px">
                        Add Successor (External)</h4>
                    <p class="grey-text text-darken-1 roboto"
                       style="font-size: 14px;margin-top: -10px;margin-bottom: 30px;">Fill data below to add successor
                        from external resources</p>
                    <div class="card-photo center-block"
                         style="width: 100px;height: 100px;border-radius: 100px;background-image: url('{{asset('img/user_avatar.svg')}}')">
                        <a href="#" class="btn-floating accent-color-background-2 small pulse"
                           style="width: 30px;height: 30px;border-radius: 30px;margin-left: -5px;"><i
                                class="material-icons white-text fas fa-plus"
                                style="font-size: 16px;top:-4px;position: relative;"></i></a>
                    </div>
                    <form action="" style="padding-top: 30px;">
                        <input id="name" type="text" placeholder="First Name"
                               class="validate"
                               style="border:1px solid #ddd;font-size: 15px;border-radius: 8px;padding-left: 5%;width: 95%;margin-top: 5px;">
                        <input id="last_name" type="text" placeholder="Last Name"
                               class="validate"
                               style="border:1px solid #ddd;font-size: 15px;border-radius: 8px;padding-left: 5%;width: 95%;margin-top: 5px;">
                        <input id="email" type="email" placeholder="Email"
                               class="validate"
                               style="border:1px solid #ddd;font-size: 15px;border-radius: 8px;padding-left: 5%;width: 95%;margin-top: 5px;">
                        <input id="phone" type="text" placeholder="Last Name"
                               class="validate"
                               style="border:1px solid #ddd;font-size: 15px;border-radius: 8px;padding-left: 5%;width: 95%;margin-top: 5px;">
                        <input id="company" type="text" placeholder="Company"
                               class="validate"
                               style="border:1px solid #ddd;font-size: 15px;border-radius: 8px;padding-left: 5%;width: 95%;margin-top: 5px;">
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#!"
                       class="modal-action modal-close waves-effect waves-accent white btn accent-color-2 z-depth-0"
                       style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;transform: scale(0.9)">CANCEL</a>
                    <a href="#!"
                       class="modal-action modal-close waves-effect waves-light white-text btn accent-color-background-2 z-depth-0"
                       style="border: 1px solid #F26923;border-radius: 8px;font-size: 14px;transform: scale(0.9)">SUBMIT</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js_custom')
    <script type="text/javascript">
        $('.org_chart_modal_section').matchHeight();
        $('.add-successor-side').matchHeight();
        $('.dropdown-option').dropdown({
                inDuration: 300,
                outDuration: 225,
                constrainWidth: true, // Does not change width of dropdown to that of the activator
                hover: true, // Activate on hover
                gutter: 300, // Spacing from edge
                belowOrigin: true, // Displays dropdown below the button
                alignment: 'left', // Displays dropdown with edge aligned to the left of button
                stopPropagation: false // Stops event propagation
            }
        );
    </script>
@endsection
