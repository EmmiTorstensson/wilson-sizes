@if( $content->padding == 'top')
    page-section--no-padding-top
@elseif( $content->padding == 'bottom')
	page-section--no-padding-bottom
@elseif( $content->padding == 'top-bottom')
    page-section--no-padding
@endif