<style type="text/css">
	/*body { background-color: #fdfdfd; padding: 0 20px; color:#000; font: 13px/18px monospace; width: 800px;}
	a { color: #360; }
	h3 { padding-top: 20px; } */
</style>

<video id="player_a" class="projekktor" poster="media/intro.png" title="this is Projekktor" width="auto" height="385" controls>
    <source src="../../../uploads/media/videos/3ac8658b8dede942e16ef004411b50ed.mp4" type="video/mp4" />
</video>

<script type="text/javascript">
$(document).ready(function() {
    projekktor(
    '#player_a', // destination-container-selector-fuzz a la jQuery
    {}, // an empty Projekktor-ccofig-object
    function(player) { // "onready" callback -
        $('#projekktorver').html( player.getPlayerVer() );
    }
    );
});
</script>