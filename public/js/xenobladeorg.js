$(document).ready(function(){
    $('.xc_ItemArrow').bind('click', function(){
        $(this).parents('.xc_ItemContent').next('.xc_ItemContentHidden').toggle();
    });

    var hash = window.location.hash.substring(1);

    if(hash)
    {
        jQuery('a[name='+hash+']').parents('.xc_ItemContent').next('.xc_ItemContentHidden').toggle();
    }
});