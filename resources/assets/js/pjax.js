$(document).pjax("[data-pjax]", ".wrapper")
.on("pjax:send", function()
{

})
.on("pjax:complete", function()
{
    init();
});
