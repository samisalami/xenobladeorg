$(document).ready(function(){
    $('.xc_ItemArrow').bind('click', function(){
        $(this).parents('.xc_ItemContent').next('.xc_ItemContentHidden').toggle();
    });

    var hash = window.location.hash.substring(1);

    if(hash)
    {
        jQuery('a[name='+hash+']').parents('.xc_ItemContent').next('.xc_ItemContentHidden').toggle();
    }

    // Harmony Items
    if ($('.harmony-table').length) {
        $harmonyBody = $('.harmony-table tbody');
        var worst = 0;
        var best = 0;
        var worstindexes = new Array();
        var bestindexes = new Array();
        $harmonyBody.find('td').each(function(i){
            var value = $harmonyBody.find('span').html()-0;
            if(value > best)
            {
                best = value;
                bestindexes = new Array();
                bestindexes[0] = i;
            }

            if( value == best)
            {
                bestindexes.push(i);
            }

            if(value<worst)
            {
                worst = value;
                worstindexes = new Array();
                worstindexes[0] = i;
            }

            if( value == worst)
            {
                worstindexes.push(i);
            }
        });

        for(i=0;i<bestindexes.length;i++)
        {
            $harmonyBody.find('td').eq(bestindexes[i]).css('background-color', '#ecfad8');
        }
        for(i=0;i<worstindexes.length;i++)
        {
            $harmonyBody.find('td').eq(worstindexes[i]).css('background-color', '#fae1d8');
        }
    }
});