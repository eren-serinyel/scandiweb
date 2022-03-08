$(function () {

    $("#product_form").validate({
        rules: {
            sku: "required",
            name: "required",
            price: {
                required: true,
                number: true
            },
            productType: "required"

        },
        messages: {
            sku: "Please, submit required data",
            name: "Please, submit required data",
            price: "Please, submit required data",
            productType: "Please, submit required data",
            height: "Please, provide Height",
            length: "Please, provide Length",
            width: "Please, provide Width",
            weight: "Please, provide Weight",
            size: "Please, provide Size"
        }
    });

    $("#productType").change(function () {
        $("#product_form").validate();
        var selectedProduct = $(this).children("option:selected").val();

        if (selectedProduct === "Furniture") {
            $("#attribute").empty();
            $("#attribute").append('<div class="row"><div class="col-30">\
         <label class="label-product">Height (CM)</label>\
          </div>\
          <div class="col-50">\
          <input type="number" name="height" id="height" class="productClass">\
          </div></div>');
            $("input[name*=height]").rules("add", "required");

            $("#attribute").append('<div class="row"><div class="col-30">\
          <label class="label-product">Width (CM)</label>\
          </div>\
          <div class="col-50">\
          <input type="number" name="width" id="width" class="productClass">\
          </div></div>');
            $("input[name*=width]").rules("add", "required");

            $("#attribute").append('<div class="row"><div class="col-30">\
          <label class="label-product">Length (CM)</label>\
          </div>\
          <div class="col-50">\
          <input type="number" name="length" id="length" class="productClass">\
          </div></div> <br> <span id="product_description">Please provide dimensions in HxWxL format</span>');
            $("input[name*=length]").rules("add", "required");

        } else if (selectedProduct === 'Book') {
            $("#attribute").empty();
            $("#attribute").append('<div class="row"><div class="col-30">\
            <label class="label-product">Weight (CM)</label>\
          </div>\
          <div class="col-50">\
            <input type="number" name="weight" id="weight" class="productClass">\
          </div></div> <br> <span id="product_description">Please provide dimensions in Weight format</span> ');
            $("input[name*=weight]").rules("add", "required");


        } else if (selectedProduct === 'DVD') {
            $("#attribute").empty();
            $("#attribute").append('<div class="row"><div class="col-30">\
            <label class="label-product">Size (MB)</label>\
          </div>\
          <div class="col-50">\
            <input type="number" name="size" id="size" class="productClass">\
          </div></div> <br> <span id="product_description">Please provide dimensions in Size format</span>');
            $("input[name*=size]").rules("add", "required");
        }
    });

    $('#add-product-btn').click(function () {
        $('#product_form').submit();
    });
})

