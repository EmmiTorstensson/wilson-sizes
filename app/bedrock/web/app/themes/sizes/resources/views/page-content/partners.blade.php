<section class="page-section partners">
	<div class="text-center inner-container">
		<h3>{{ $content->headline }}</h3>

		<div class="d-flex justify-content-around flex-wrap align-items-center logo-row">
            @foreach ( $content->partners as $logo)
                <div class="col-6 col-md-4 flex-item logo" style="background-image:url({{ $logo['logo'] }})">
                </div>
            @endforeach
        </div>
	</div>
</section>