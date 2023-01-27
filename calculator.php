<!-- Create two textboxes and one button with + on it.
 On click of the button you should display sum of the two entered numbers. 
Similarly add Subtract, Multiple and Division buttons. -->

<h2>calculator</h2>
<div class="input-field">
    <input type="number" id="first_number" placeholder="enter your first_number...">
</div>

<div class="input-field">
    <input type="number" id="second_number" placeholder="enter your second_number...">
</div>
<div class="input-field">
    <input id="txtresult" name="TextBox3" placeholder="Result...">
</div>
<br>
<div>
    <button type="submit" value="submit" id="add_number" class="btn btn-warning">+</button>
    <button type="submit" id="subInput" class="btn btn-info">-</button>
    <button type="submit" id="mulInput" class="btn btn-dark">*</button>
    <button type="submit" id="divInput" class="btn btn-primary">/</button>
</div>
</div>
<script>
$(document).ready(function() {
    $("#add_number").on("click", function(addNumber) {

        var a = parseInt($("#first_number")
    .val()); //parseInt() parses a string and returns the first integer:
        var b = parseInt($("#second_number").val());
        var sum = a + b;
        $("#txtresult").val(sum);
    });
    $("#subInput").on("click", function(addNumber) {

        var a = $("#first_number").val();
        var b = $("#second_number").val();
        var sub = a - b;
        $("#txtresult").val(sub);
    });
    $("#mulInput").on("click", function(addNumber) {

        var a = $("#first_number").val();
        var b = $("#second_number").val();
        var mul = a * b;
        $("#txtresult").val(mul);
    });
    $("#divInput").on("click", function(addNumber) {

        var a = $("#first_number").val();
        var b = $("#second_number").val();
        var div = a / b;
        $("#txtresult").val(div);
    });

});
</script>