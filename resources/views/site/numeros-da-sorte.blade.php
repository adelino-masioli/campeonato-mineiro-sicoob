@extends('site.layout.site')

@section('content')

	<div class="fh5co-loader"></div>
	
	<div id="page">
        @include("site.layout.menu_internal")
        @include("site.layout.banner")




        @include("site.partials.form-search")
        @include("site.partials.my-numbers")
        @include("site.partials.form")
        @include("site.partials.footer")
</div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function () {
                scrollToDiv('#my-numbers');
            }, 600);
        });
    </script>
@endpush