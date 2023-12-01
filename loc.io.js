$(document).ready(function(){
    
})


$('#button-addon2').on('click',()=>{
    var ip = $('.ip-input').val()
    $.post("assets/php/main.php",{ip:ip}).done((data)=>{
        $('#loc-ip').html(data)
    })

})