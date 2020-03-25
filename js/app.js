$(function(){
    $("#clould1").change(function() {
        console.log($(this).val());
        UIkit.switcher(".khachhangngoai-table").show($(this).val());
    })
    $("#clould2").change(function() {
        console.log($(this).val());
        UIkit.switcher(".khachhangtrong-table").show($(this).val());
    })

    $('#clould1').find('option').each(function(){
	    console.log($(this).text());
	    console.log($(this).val());
	});
	$('#clould2').find('option').each(function(){
	    console.log($(this).text());
	    console.log($(this).val());
	});

	UIkit.switcher(".khachhangngoai-table").show($('#clould1').val());
	UIkit.switcher(".khachhangtrong-table").show($('#clould2').val());
})