@extends(Helper::setExtendFrontend())

@section('content')

@include(Helper::setExtendFrontend('homepage.slider'))
@include(Helper::setExtendFrontend('homepage.service'))
@include(Helper::setExtendFrontend('homepage.product'))
@include(Helper::setExtendFrontend('homepage.quotation'))
@include(Helper::setExtendFrontend('homepage.article'))
@include(Helper::setExtendFrontend('homepage.client'))

@endsection