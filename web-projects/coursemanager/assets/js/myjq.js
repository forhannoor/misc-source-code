$(function()
{
    $("#link a").hover(function()
    {
        $(this).fadeTo("slow", 1);
    }
);
    
    $("#link a").mouseleave(function()
    {
        $(this).fadeTo("fast", 0.55);
    }
);
}
);