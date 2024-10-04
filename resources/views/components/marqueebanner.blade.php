@php
    $css_class = "";

    switch ($ctastyle) {
        case 'hidden':
            $css_class = "hidden";
            break;
        case 'transparent_white':
            $css_class = "text-white";
            break;
        case 'white_bg_purple_text':
            $css_class = "bg-white text-primary";
            break;
        case 'purple_bg_white_text':
            $css_class = "bg-primary text-white";
            break;
        case 'white_bg_teal_text':
            $css_class = "bg-white text-accent";
            break;
        case 'teal_bg_white_text':
            $css_class = "bg_accent text-white";
            break;
        case 'white_text_underline':
            $css_class = "text-white underline";
            break;
        case 'purple_text_underline':
            $css_class = "text_primary underline";
            break;
        case 'teal_text_underline':
            $css_class = "text_accent underline";
            break;
        
        default:
            $css_class = "text-white underline";
            break;
    }
@endphp
<section style="background-color:{{$bgcolor}}; color:{{$textcolor}}" class="px-1 py-1 text-sm">
    <p class="ms-infinite-marquee">{{$text}} @if ($ctaurl) <a href="{{$ctaurl}}" class="px-1 border-sm {{$css_class}}"> {{$ctalabel}} </a> @endif </p>
    <p class="hidden bg-white bg-primary bg_accent text-white text-primary text-accent underline"></p>
</section>