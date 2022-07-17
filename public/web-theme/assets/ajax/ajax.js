    //get base url

     // var base_url = $('meta[name="base_url"]').attr('content');
     // var csrf_token = $('meta[name="csrf_token"]').attr('content');

    //add to cart get and post 
    function addToCart(id){
    // $.ajax({
    //  type:'GET',
    //  url:base_url+'/add-to-cart/'+id,
    //  processData: false,
    //  contentType: false,
    //  cache: false,
    //  success:function(response) {
    //   if (response.status == 200) {
    //           console.log(response.data)
    //           //console.log(response.districts.length)
    //           //console.log(response.districts[0].name)
    //           //$('#district').empty();
    //          //  for (var i = 0 ; i < response.districts.length; i++) {
    //          //   $('#district').append(`<option value="${response.districts[i].id}"> ${response.districts[i].name}
    //          //    </option>`);
    //          // }
    //          console.log("test2");
    //        }
    //      },
    //      error:function(error) {
    //       console.log(error)
    //     }
    //   });

    var formData = new FormData()
    formData.append('id', id)
    formData.append('_token' , csrf_token)

    $.ajax({
       type:'POST',
       url:base_url+'/add-to-cart/',
       data:formData,
       processData: false,
       contentType: false,
       cache: false,
       success:function(response) {
        var count = null;
        var count = Object.keys(response.data).length;
        document.getElementById('shopcart').innerHTML = count;
        if (response.status == 200 && response.add == 1) {
            console.log(response.data);
            $('#mealdata').append( `<li>
                <img class="img-responsive" src="" alt="product" />
                <div id="mealsdata" class="product-meta">
                <h5 id="mealname" class="product-title">${response.data[id].name} </h5>
                <p class="product-price">${response.data[id].price}</p>
                </div>
                <a class="cart-cancel" href="#">cancel</a>
                </li>`); 
        }
    },
    error:function(error) {
        console.log(error)
    }
});
};

    //delete
    function deleteFromCart(id){
        var formData = new FormData()
        formData.append('id', id)
        formData.append('_token' , csrf_token)

        $.ajax({
           type:'POST',
           url:base_url+'/delete-from-cart/',
           data:formData,
           processData: false,
           contentType: false,
           cache: false,
           success:function(response) {
            var count = Object.keys(response.data).length;
            document.getElementById('shopcart').innerHTML = count;
            if (response.status == 200) {
                console.log(response.data);
                const element = document.getElementById(id);
                element.remove();
                console.log(element)
            }
        },
        error:function(error) {
            console.log(error)
        }
    });
    };


    function updatePlus(id){
        
        var quantity = $("#quantity").val();
        quantity++;
        var formData = new FormData()
        formData.append('id', id)
        formData.append('_token' , csrf_token)
        formData.append('quantity' , quantity)
        $.ajax({
            type:'POST',
            url:base_url+'/cart-update/',
            data:formData,
            processData: false,
            contentType: false,
            cache: false,
            success:function(response) {
                if (response.status == 200) {
               $( "#quantity" ).val(quantity);
                    
                }
            },
            error:function(error) {
                console.log(error)
            }
        });
    };

    function updateMinus(id , price){

        
        var quantity = $("#quantity").val();
        quantity--;
        var formData = new FormData()
        formData.append('id', id)
        formData.append('_token' , csrf_token)
        formData.append('quantity' , quantity)
        formData.append('price' , price)
        $.ajax({
            type:'POST',
            url:base_url+'/cart-update/',
            data:formData,
            processData: false,
            contentType: false,
            cache: false,
            success:function(response) {
                if (response.status == 200) {
                    $("#quantity").val(quantity);
                    console.log(response.data)
                }
            },
            error:function(error) {
                console.log(error)
            }
        });
    };




