$.fn.toggleDropdown = function()
{
    return this.each(function()
    {
        var $this = $(this),
            $dropdown = $("[data-dropdown]");

        $this.off(".dropdown").on("click.dropdown", function()
        {
            $this.toggleClass("active");
            $dropdown.not(this).removeClass("active");
        });

        $(document).off(".dropdown").on("click.dropdown", function(event)
        {
            if (!$(event.target).closest("[data-dropdown]").length)
            {
                $dropdown.removeClass("active");
            }
        });
    });
}
