@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ trans('footer.how_to_become_a_dealer') }}</h1>
                <p>{{ trans('content.how_to_become_a_dealer',['phone' => $settings['phone'], 'address' => $settings['address_'.App::getLocale()]]) }}</p>

                <div class="base-form contacts-form-map dealer-form">
                    <form action="{{ url('/become_dealer') }}" method="post" class="sendLead">
                        {{ csrf_field() }}
                        <span class="title-base">{{ trans('content.want_to_be_our_dealer') }}</span>

                        <div class="form-body">
                            @include('layouts._input_block',[
                                'inputName' => 'name',
                                'inputId' => 'first_name',
                                'inputLabel' => trans('content.name').'*',
                                'useAjax' => false,
                            ])

                            @include('layouts._input_block',[
                                'inputName' => 'company_name',
                                'inputId' => 'company_name',
                                'inputLabel' => trans('content.your_company_name'),
                                'useAjax' => false,
                            ])

                            @include('layouts._input_block',[
                                'inputName' => 'phone',
                                'dataType' => 'phone',
                                'inputId' => 'phone',
                                'inputLabel' => trans('content.phone').'*',
                                'useAjax' => false,
                            ])

                            @include('layouts._input_block',[
                                'inputName' => 'email',
                                'inputId' => 'email',
                                'inputLabel' => trans('content.email').'*',
                                'useAjax' => false,
                            ])

                            @include('layouts._textarea_block',[
                                'taName' => 'my_message',
                                'taId' => 'my_message',
                                'taLabel' => trans('content.your_message'),
                                'useAjax' => false,
                            ])
                            @include('layouts._agreement_block',['useAjax' => false])
                            @include('layouts._submit_button_block', ['btnText' => trans('content.submit_your_application')])
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection