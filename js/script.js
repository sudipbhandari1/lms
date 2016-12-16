$(document).ready(function(){
	$(document).on("click", ".sajan", function () {
	    var myBookId = $(this).data('id');
	    $(".modal-body #bookId").val( myBookId );
	});


	$(document).on("click", ".open-AddBookDialog", function () {
	    var myBookId = $(this).data('id');
	    $(".modal-body #bookId").val( myBookId );
	});

});





