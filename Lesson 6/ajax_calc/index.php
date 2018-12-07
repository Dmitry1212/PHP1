<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   <input type="text" id="val1" value="">
    <select  id="operation">
        <option  value = 'sum'>+</option>
        <option  value = 'diff'>-</option>
        <option  value = 'compoz'>X</option>
        <option  value = 'divis'>/</option>
    </select>
   <input type="text" id="val2" value="">
   <button class='action'> = </button>
   <input type="text" id="val3" value=""><br>


<input type="text" id="val1_1" value="">
<button class='action' id = 'sum'> + </button>
<button class='action' id = 'diff'> - </button>
<button class='action' id = 'compoz'> X </button>
<button class='action' id = 'divis'> / </button>
<input type="text" id="val2_1" value="">
 =
<input type="text" id="val3_1" value=""><br>

<script>
$(document).ready(function(){
    $(".action").on('click', function(){
        var out = this.id;
        if (out == '') {
            var operand1 = $("#val1").val();
            var operand2 = $("#val2").val();
            var operation = $("#operation").val();
        } else {
            var operand1 = $("#val1_1").val();
            var operand2 = $("#val2_1").val();
            var operation = out;
        }

        $.ajax({
            url: "calc.php",
            type: "POST",
			dataType : "json",
            data:{
                operand1: operand1,
                operand2: operand2,
                operation: operation
            },
            error: function() {alert("Что-то пошло не так...");},
            success: function(answer){
                console.log(this.id);
                if (out == '') {
                    $('#val3').val(answer.result);
                } else {
                    $('#val3_1').val(answer.result);
                }
            }
            
        })
    });

});
</script>

	