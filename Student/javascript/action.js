$(document).ready(function(){

 

})

$('#send_otp').on('click',function(){
    
    let otp_code = ""
    for (let i = 0; i < 6; i++) {
      var randNum =  Math.floor(Math.random() * 10) + 1;
        otp_code += randNum
    }
    

    console.log(otp_code);
    // $.ajax({
    //     url:'action.php',
    //     method:'POST',
    //     data:{submit_email:1},
    //     success:function(data){
    //         $('#otp_container').html('')
    //         $('#otp_container').html(data)
    //     }
    // })
})

console.log('working properly');