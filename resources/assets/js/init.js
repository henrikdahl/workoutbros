function init()
{
    /* Prevents default on hashtag href */
    $("a[href='#']").preventHashtag();

    /* Enables sidebar collapse toggle */
    $(".burger").toggleSidebar();

    /* Toggles dropdowns */
    $("[data-dropdown]").toggleDropdown();
}

init();
