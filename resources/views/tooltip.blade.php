<!DOCTYPE html>
<html>
<style>
.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: rgb(0, 131, 253);
  color: #fff;
  text-align: center;
  padding: 5px 0;

  margin-top: 0%;
  margin-left: 0%;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
  
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}

.dashed{
    border-style: dashed;
}


.dashed:hover{
    border-style: solid;
    border-color: rgb(0, 131, 253);
}
</style>
<body style="text-align:center;">

<p class="dashed">Move the mouse over the text below:</p>

<div class="tooltip dashed">    <div  class="tooltiptext">Tooltip text</div>

    <br><br>
    Hover over me
    <br><br>
    <br><br>
</div>

<p>Note that the position of the tooltip text isn't very good. Go back to the tutorial and continue reading on how to position the tooltip in a desirable way.</p>

</body>
</html>
