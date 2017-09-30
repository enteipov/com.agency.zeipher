$('#form-mailer').on('submit',function(){
	var that = $(this),
		url = that.attr('action'),
		type = that.attr('method'),
		data = {};
	
	that.find('[name]').each(function(index,value){
		var that = $(this),
			name = that.attr('name'),
			value = that.val();
		
		data[name] = value;
	});
	
	var $fname = $('input[name="fname"]').val();
	
	$.ajax({
		url: url,
		type: type,
		data: data,
		success: function(){ 
			$('.form-container').addClass('success');
			$('.form-container').addClass('rounded');
			$('.form-container').html('<h4>Message Sent</h4><p>Thank you for reaching out ' + data['fname'] + '. We will be contacting you shortly.</p>');
		},
		error: function(){
			$('.form-container').addClass('error');
			$('.form-container').addClass('rounded');
			$('.form-container').html('<h4>Message Not Sent</h4><p>There was a problem sending your message. Please try again</p>');
		}
	});
	return false;
	
});