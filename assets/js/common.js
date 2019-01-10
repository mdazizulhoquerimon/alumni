/**
 * @author Kishor Mali
 */


jQuery(document).ready(function(){
	
	jQuery(document).on("click", ".deleteUser", function(){
		var userId = $(this).data("userid"),
			hitURL = baseURL + "deleteUser",
			currentRow = $(this);
		
		var confirmation = confirm("Are you sure to delete this user ?");
		
		if(confirmation)
		{
			jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { userId : userId } 
			}).done(function(data){
				console.log(data);
				currentRow.parents('tr').remove();
				if(data.status = true) { alert("User successfully deleted"); }
				else if(data.status = false) { alert("User deletion failed"); }
				else { alert("Access denied..!"); }
			});
		}
	});
	
	
	jQuery(document).on("click", ".searchList", function(){
		
	});

    jQuery(document).on("click", ".verifyMember", function(){
        var memberid = $(this).data("memberid"),
            hitURL = baseURL + "member/verifyMember";

        var confirmation = confirm("Are you sure to Verify this user ?");

        if(confirmation)
        {
            jQuery.ajax({
                type : "POST",
                dataType : "json",
                url : hitURL,
                data : { memberid : memberid }
            }).done(function(data){
                console.log(data);
                if(data.status = true) {
                	alert("User successfully Verified");
                	window.location.reload();
                }
                else if(data.status = false) { alert("User Verification failed"); }
                else { alert("Access denied..!"); }
            });
        }
    });

    jQuery(document).on("click", ".unverifyMember", function(){
        var memberid = $(this).data("memberid"),
            hitURL = baseURL + "member/unverifyMember";

        var confirmation = confirm("Are you sure to Block this user ?");

        if(confirmation)
        {
            jQuery.ajax({
                type : "POST",
                dataType : "json",
                url : hitURL,
                data : { memberid : memberid }
            }).done(function(data){
                console.log(data);
                if(data.status = true) {
                    alert("User successfully Blocked");
                    window.location.reload();
                }
                else if(data.status = false) { alert("User Blocked failed"); }
                else { alert("Access denied..!"); }
            });
        }
    });
	
});
