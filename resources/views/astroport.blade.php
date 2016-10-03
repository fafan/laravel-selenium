<div id="astroport-name" class="astroport-name">Astroport Name</div>
<div id="gate-1" class="gate-1 free">
    Gate 1
    <div id="ship-1">
        Ship 1
    </div>
</div>
<div id="gate-2">
    Gate 2
    <div id="ship-2">
        Ship 2
    </div>
</div>
<div id="gate-3">
    Gate 3
    <div id="ship-3">
        Ship 3
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.x-git.js"></script>
<input id="ship" value="">
<button id="dock">Dock</button>

<script>
    $("#dock").click(function(){
        $("#ship-1").html( $("input#ship").val() );
    });
</script>
