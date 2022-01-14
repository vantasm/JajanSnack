$(document).ready(function()
{
    $("#all").on("click", function()
    {
        let current = $(".active")
        let next = $("#all")

        current.removeClass("active")
        next.addClass("active")

        $(".start_product").show()
    });
    $("#biscuits").on("click", function()
    {
        let current = $(".active")
        let next = $("#biscuits")

        current.removeClass("active")
        next.addClass("active")

        $(".Chips, .Chocolate, .Candy").hide()
        $(".Biscuits").show()
    });
    $("#chips").on("click", function()
    {
        let current = $(".active")
        let next = $("#chips")

        current.removeClass("active")
        next.addClass("active")

        $(".Biscuits, .Chocolate, .Candy").hide()
        $(".Chips").show()
    });
    $("#chocolate").on("click", function()
    {
        let current = $(".active")
        let next = $("#chocolate")

        current.removeClass("active")
        next.addClass("active")

        $(".Biscuits, .Chips, .Candy").hide()
        $(".Chocolate").show()
    });
    $("#candy").on("click", function()
    {
        let current = $(".active")
        let next = $("#candy")

        current.removeClass("active")
        next.addClass("active")

        $(".Biscuits, .Chips, .Chocolate").hide()
        $(".Candy").show()
    });
    $("a#button_submit").on("click", function(){
        document.getElementById("order").submit();
    });
    $("a#button_remove_from_cart").on("click", function(){
        document.getElementById("form_remove_from_cart").submit();
    });
    $("a#button_checkout").on("click", function(){
        document.getElementById("form_checkout").submit();
    });
});