$.fn.preventHashtag = function()
{
    return this.each(function()
    {
        var $this = $(this);

        $this.off(".hashtag").on("click.hashtag", function(event)
        {
            event.preventDefault();
        });
    });
}
