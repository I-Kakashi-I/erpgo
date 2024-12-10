@extends('layouts.admin')
@section('page-title')
    {{ $notification_template->name }}
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ __('Notification Template') }}</li>
@endsection
@push('pre-purpose-css-page')
    <link rel="stylesheet" href="{{asset('css/summernote/summernote-bs4.css')}}">
@endpush

@section('action-btn')
    {{-- <div class="row">
        <div class="text-end mb-3">
            <div class="text-end">
                <div class="d-flex justify-content-end drp-languages">
                    <ul class="list-unstyled mb-0 m-2 me-0">
                        <li class="dropdown dash-h-item drp-language">
                            <a class="email-color dash-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown"
                               href="#" role="button" aria-haspopup="false" aria-expanded="false"
                               id="dropdownLanguage">
                            <span
                                class="drp-text hide-mob text-primary me-2">{{ucfirst($LangName->full_name)}}</span>
                                <i class="ti ti-chevron-down drp-arrow nocolor"></i>
                            </a>
                            <div class="dropdown-menu dash-h-dropdown dropdown-menu-end" aria-labelledby="dropdownLanguage">
                                @foreach ($languages as $code => $language)
                                    <a href="{{ route('notification_templates.index', [$notification_template->id, $code]) }}"
                                       class="dropdown-item {{ $curr_noti_tempLang->lang == $code ? 'text-primary' : '' }}">
                                        {{ucFirst($language)}}
                                    </a>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                    <ul class="list-unstyled mb-0 m-2 me-2">
                        <li class="dropdown dash-h-item drp-language">
                            <a class="email-color dash-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown"
                               href="#" role="button" aria-haspopup="false" aria-expanded="false"
                               id="dropdownLanguage">
                                <span class="drp-text hide-mob text-primary">{{ __('Template: ') }}{{ $notification_template->name }}</span>
                                <i class="ti ti-chevron-down drp-arrow nocolor"></i>
                            </a>
                            <div class="dropdown-menu dash-h-dropdown dropdown-menu-end email_temp" aria-labelledby="dropdownLanguage">
                                @foreach ($notification_templates as $notification)
                                    <a href="{{ route('notification_templates.index', [$notification->id,(Request::segment(3)?Request::segment(3):\Auth::user()->lang)]) }}"
                                       class="dropdown-item {{$notification->name == $notification_template->name ? 'text-primary' : '' }}">{{ $notification->name }}
                                    </a>
                                @endforeach
                            </div>
                        </li>
                    </ul>

                    @php
                    $user = \App\Models\User::find(\Auth::user()->creatorId());
                    $plan= \App\Models\Plan::getPlan($user->plan);
                @endphp
                    @if($plan->chatgpt == 1)
                        <ul class="list-unstyled mb-0 mt-3">
                            <div class="">
                                <a href="#" data-size="md" class="btn  btn-primary btn-sm" data-ajax-popup-over="true" data-url="{{ route('generate',['notification template']) }}"
                                   data-bs-placement="top" data-title="{{ __('Generate content with AI') }}">
                                    <i class="fas fa-robot"></i> <span>{{__('Generate with AI')}}</span>
                                </a>
                            </div>
                        </ul>
                    @endif

                </div>
            </div>
        </div>
    </div> --}}
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header card-body table-border-style">
                <h5></h5>
                <div class="table-responsive">
                    <table class="table datatable" id="pc-dt-simple">
                        <thead>
                            <tr>
                                <th scope="col" class="sort" data-sort="name"> {{ __('Name') }}</th>
                                @if (\Auth::user()->type == 'company')
                                    <th class="text-end">{{ __('Action') }}</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notification_templates as $notification_template)
                                <tr>
                                    <td>{{ $notification_template->name }}</td>
                                    <td>
                                        @if (\Auth::user()->type == 'company')
                                            <div class="text-end">
                                                <div class="dt-buttons">
                                                    <span>
                                                        <div class="action-btn">
                                                            <a href="{{ route('manage.notification.language', [$notification_template->id, \Auth::user()->lang]) }}"
                                                                class="mx-3 btn btn-sm  align-items-center bg-warning"
                                                                data-bs-toggle="tooltip" data-bs-original-title="{{__('View')}}" title="">
                                                                <span class="text-white"><i class="ti ti-eye"></i></span>
                                                            </a>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

