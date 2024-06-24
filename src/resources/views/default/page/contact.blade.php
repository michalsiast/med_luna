@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page])
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="message-info">
                        <div class="section-title">
                            @if(!empty($fields->title_message_info))
                                <h3 class="title mb-4">{{$fields->title_message_info}}</h3>
                            @endif
                            @if(!empty($fields->description_message_info))
                                {!! $fields->description_message_info !!}
                            @endif
                        </div>

                        @if(getConstField('company_address') && getConstField('company_post_code') && getConstField('company_city'))
                            <div class="feature-box feature-box-style-04 mb-4">
                                <div class="feature-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="feature-content">
                                    <h4 class="mb-2">Lokalizacja</h4>
                                    <span>
                                {{getConstField('company_address')}} <br>
                                {{getConstField('company_post_code')}} {{getConstField('company_city')}}
                            </span>
                                </div>
                            </div>
                        @endif

                        @if(getConstField('phone'))
                            <div class="feature-box feature-box-style-04 mb-4">
                                <div class="feature-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="feature-content">
                                    <h4 class="mb-2">Telefon</h4>
                                    <span><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a></span>
                                </div>
                            </div>
                        @endif

                        @if(getConstField('email'))
                            <div class="feature-box feature-box-style-04 mb-0">
                                <div class="feature-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="feature-content">
                                    <h4 class="mb-2">E-mail</h4>
                                    <span><a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a></span>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <div class="contact-us-form">
                        <div class="section-title">
                            @if(!empty($fields->title_contact))
                                <h3 class="title mb-4">{{$fields->title_contact}}</h3>
                            @endif
                            @if(!empty($fields->description_contact))
                                {!! $fields->description_contact !!}
                            @endif
                        </div>
                        @include('default.form.contact_form')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        @if (getConstField('google_map_iframe'))
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 p-0">
                        <iframe src="{{ getConstField('google_map_iframe') }}" style="border:0; width: 100%; height: 500px" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection
