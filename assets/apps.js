

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
              html += '<td><a href="# edit" class="edit" person-id="'+data+'">Edit</a> | <a href="# delete" class="delete" person-id="'+data+'">[x]</a></td>'
			        html += '</tr>';
			        $('#success').hide().fadeIn(2000).fadeOut(2000);

              if($('#id').val()>0){
                $("#person-"+$('#id').val()).replaceWith(html);
              }else{
                $(".main table").append(html);
              }

              $('#form-search')[0].reset();
              
              return false;
         }
	});
	return false;
  	
});

$('.delete').on('click', function () {
    var id = $(this).attr("person-id");
    var string = 'id='+ id ;

    $.ajax({
       type: "POST",
       url: "persons/delete",
       data: string,
       cache: false,
       success: function(){
        $('#person-'+id).remove();
        // commentContainer.slideUp('slow', function() {$(this).remove();});
        // $('#load').fadeOut();
      }
     });

    
});

$('.edit').on('click', function () {
    var id = $(this).attr("person-id");
    var string = 'id='+ id ;

    $.ajax({
       type: "POST",
       url: "persons/get",
       data: string,
       cache: false,
       success: function(data){
        $.each(JSON.parse(data), function(i, obj) {
          $("#id").val(obj.id);
          $("#firstname").val(obj.firstname);
          $("#lastname").val(obj.lastname);
          $("#dob").val(obj.dob);
          $("#zip").val(obj.zip);
        });
      }
    });

    
});


$(function() {
    $( "#dob" ).datepicker();
});