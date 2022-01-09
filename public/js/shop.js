$(document).ready(function()
{
    let table = $(".product-category")

    $("#all").on("click", function()
    {
        let current = $(".active")
        let next = $("#all")

        current.removeClass("active")
        next.addClass("active")
    });
    $("#biscuits").on("click", function()
    {
        let current = $(".active")
        let next = $("#biscuits")

        current.removeClass("active")
        next.addClass("active")
    });
    $("#chips").on("click", function()
    {
        let current = $(".active")
        let next = $("#chips")

        current.removeClass("active")
        next.addClass("active")
    });
    $("#chocolate").on("click", function()
    {
        let current = $(".active")
        let next = $("#chocolate")

        current.removeClass("active")
        next.addClass("active")
    });
    $("#candy").on("click", function()
    {
        let current = $(".active")
        let next = $("#candy")

        current.removeClass("active")
        next.addClass("active")
    });
});