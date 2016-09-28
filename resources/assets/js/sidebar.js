$.fn.toggleSidebar = function()
{
    var $this = $(this),
        href = $this.attr("href"),
        $sidebar = $this.parent(".sidebar");

    $this.off(".sidebar").on("click.sidebar", function(event)
    {
        event.preventDefault();

        $sidebar.toggleClass("collapsed");

        $.ajax({
            url: href,
            method: "PATCH",
            data: {
                collapsed: $sidebar.hasClass("collapsed")
            }
        });
    });
}
