<button type="button" id='button'>Click Me!</button>
<script>
jQuery ('#button') . click (function () {
  alert('You clicked me!');
})
</script>

<button type="button" id='background'>Click Me!</button>

<script>
jQuery ('#background') . click (function () {
  jQuery('#main').css('backgroundColor', '#FF0000');
});
</script>
