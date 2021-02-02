{{--
    Template name: Content page
--}}
@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        <?php $contents = get_field('content_page') ?: []; ?>
        @foreach($contents as $content)
            @if(isset($content['acf_fc_layout']))
                @include('page-content.'.$content['acf_fc_layout'], [
                    'content' => (object) $content
                ])
            @endif
        @endforeach
    @endwhile
@endsection