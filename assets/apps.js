

$('#form-search').submit(function(){
	//alert();
	var data = $("#form-search").serialize();
  	$.ajax({
         data: data,
         type: "post",
         url: "persons/save/",
         success: function(data){
              //alert("Data Save: " + data);
              var html = "";
              html += '<tr>';
		  	      html += '<td>'+$("#firstname").val()+'</td>';
		  	      html += '<td>'+$("#lastname").val()+'</td>';
		  	      html += '<td>'+$("#dob").val()+'</td>';
		  	      html += '<td>'+$("#zip").val()+'</td>';
			        html += '</tr>';
			  $('#success').hide().fadeIn(2000).fadeOut(2000);
              $(".main table").append(html);
              return false;
         }
	});
	return false;
  	
});


$(function() {
    $( "#dob" ).datepicker();
});