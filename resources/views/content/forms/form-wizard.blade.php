@extends('layouts/contentLayoutMaster')

@section('title', 'Form Wizard')

@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset('vendors/css/forms/wizard/bs-stepper.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.min.css') }}">
@endsection

@section('page-style')
<!-- Page css files -->
<link rel="stylesheet" href="{{ asset('css/base/plugins/forms/form-validation.css') }}">
<link rel="stylesheet" href="{{ asset('css/base/plugins/forms/form-wizard.css') }}">

<link rel="stylesheet" href="{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/base/plugins/forms/pickers/form-flat-pickr.css') }}">

@endsection

@section('content')

<!-- Modern Horizontal Wizard -->
<section id="app" class="modern-horizontal-wizard">
    <create-app></create-app>
</section>
<!-- /Modern Horizontal Wizard -->

@endsection

@section('vendor-script')
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
    var base_url = "{{ url('/').'/' }}";
</script>
<script type="text/javascript" src="{{ url('js/apps.js') }}"></script>
<!-- vendor files -->
<script src="{{ asset('vendors/js/forms/wizard/bs-stepper.min.js') }}"></script>
<script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}"></script>

<script src="{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('js/scripts/forms/form-validation.js') }}"></script>
@endsection
@section('page-script')
<!-- Page js files -->
<script src="{{ asset('js/scripts/forms/form-wizard.js') }}"></script>
@endsection