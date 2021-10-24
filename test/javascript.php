<div class="col-12">
  <h1>countdownTimer</h1>
  <h2>Included JS</h2>
  <code><pre>
&lt;script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"&gt;&lt;/script&gt;
&lt;script src="src/countdownTimer.min.js"&gt;&lt;/script&gt;
</pre></code>

    <?php
    $sec = $_GET['sec'];
    if (empty($sec))
    {
        $sec = 5;
    }
    ?>
  <form method="GET">
    <label for="sec">Seconds to count down:</label>
    <input class="form-control mb-3" type="number" value="<?= $sec ?>" name="sec" id="sec" />
    <div class="text-end">
      <input type="submit" class="btn btn-warning" />
    </div>
  </form>
  <h2>Test 1, loop</h2>
  <p class="fw-bold">Result:</p>
  <p>Restart in <span id="test1"></span>.</p>
  <p id="echo1">&nbsp;</p>
  <p class="fw-bold">Code:</p>
<code><pre>
&lt;p&gt;Restart in &lt;span id="test1"&gt;&lt;/span&gt;.&lt;/p&gt;
&lt;p id="echo1"&gt;&lt;/p&gt;
&lt;script&gt;
let echo = function () {
  $('#echo1').append('Hits 0, restarting... ');
}
$('#test1').countdownTimer({
  seconds: <?= $sec ?>,
  loop: true,
  callback: echo
});
&lt;/script&gt;
</pre></code>

  <h2>Test 2, no loop</h2>
  <p class="fw-bold">Result:</p>
  <p>Countdown <span id="test2"></span> seconds.</p>
  <p class="fw-bold">Code:</p>
  <code><pre>
&lt;p&gt;Countdown &lt;span id="test2"&gt;&lt;/span&gt; seconds.&lt;/p&gt;
&lt;script&gt;
$('#test2').countdownTimer({
  seconds: <?= $sec ?>,
  loop: false
});
&lt;/script&gt;
</pre></code>
</div>
<script>
    $(function () {
        // TEST
        let echo = function () {
            $('#echo1').append('Hits 0, restarting... ');
        }
        $('#test1').countdownTimer({
            seconds: <?= $sec ?>,
            loop: true,
            callback: echo
        });
        $('#test2').countdownTimer({
            seconds: <?= $sec ?>,
            loop: false
        });
    });
</script>