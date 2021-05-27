$(function(){
	'use strict';

	/***************************************************************** 
    **************** get loved and buyed products ********************
    *****************************************************************/
    $(window).on('load', function(){
    	$("#content").load("includs/sections/home.php");
    });

    /* global redirect function */
    $('.nav-link').click(function(){
        $(this).addClass("active").siblings().removeClass("active");
        var target = $(this).data('target'),
            source = "includs/sections/" + target + ".php";
        $("#content").load(source);
    });



});