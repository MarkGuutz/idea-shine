$(document).ready(function(){
/* For browsers w/ HTML5 support for <input> required attribute: Border outlined in red when required == False after submit clicked*/
	$("button").click(function(){
		$("form").each(function(){
			if ($(this).val() == ""){
				$(".form-control").addClass("input_active");
			}
		});
	});
});	