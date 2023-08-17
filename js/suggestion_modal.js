$(document).ready(function(){
	$("#submit-s-btn").click(function(){
        $(".suggestion-modal").addClass("visible-none");
		$(".loading-modal").removeClass("visible-none");
        $.post( "submit_suggestion.php", {
            suggestion : $("#suggestion").val()
        })
        .done(function( data ) {
            $(".loading-modal").addClass("visible-none");
            alert(data);
        });
	});

    $("#cancel-s-btn").click(function(){
		$(".suggestion-modal").addClass("visible-none");
	});

    $("#email-btn").click(function(){
		$(".suggestion-modal").removeClass("visible-none");
	});
});