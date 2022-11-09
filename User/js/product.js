$(document).ready(function(){
    productAvailability = document.querySelector(".prod_avail");
        if(productAvailability === 0){
            console.log("All products are still available"); 
        }else{
            $(".image").css('opacity', '0%');
            $(".prices").css('opacity', '20%');
            $(".discount").css('opacity', '20%');
            $(".price").css('opacity', '20%');
            $(".option-btn").css('display', 'none');
            $(".outofstock").css('display', 'block');
            console.log("Products that stocks are 0");
        }
});





// $(document).ready(function(){
//     productAvailability = document.querySelector(".prod_avail");
//         if(productAvailability === 0){
//             console.log("All products are still available"); 
//         }else{
//             $(".image").css('opacity', '0%');
//             $(".prices").css('opacity', '20%');
//             $(".discount").css('opacity', '20%');
//             $(".price").css('opacity', '20%');
//             $(".option-btn").css('display', 'none');
//             $(".outofstock").css('display', 'block');
//             console.log("Products that stocks are 0");
//         }
// });