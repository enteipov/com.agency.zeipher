$("#form-mailer").on("submit",function(){var a=$(this),n=a.attr("action"),e=a.attr("method"),r={};a.find("[name]").each(function(a,n){var e=$(this),t=e.attr("name"),n=e.val();r[t]=n});var t=$('input[name="fname"]').val();return $.ajax({url:n,type:e,data:r,success:function(){$(".form-container").addClass("success"),$(".form-container").addClass("rounded"),$(".form-container").html("<h4>Message Sent</h4><p>Thank you for reaching out "+r.fname+". We will be contacting you shortly.</p>")},error:function(){$(".form-container").addClass("error"),$(".form-container").addClass("rounded"),$(".form-container").html("<h4>Message Not Sent</h4><p>There was a problem sending your message. Please try again</p>")}}),!1});