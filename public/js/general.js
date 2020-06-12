$(document).ready(function ()
{
	$("#skill").click(function ()
	{
		$("#skillbox").toggleClass("hide");
	});

	$(".open_pseudo").click(function ()
	{
		$("#open_pseudo").toggleClass("hidden");
	});

	$(".open_avatar").click(function ()
	{
		$("#open_avatar").toggleClass("hidden");
	});

	$(".open_mail").click(function ()
	{
		$("#open_mail").toggleClass("hidden");
	});

	$(".open_password").click(function ()
	{
		$("#open_password").toggleClass("hidden");
	});
});