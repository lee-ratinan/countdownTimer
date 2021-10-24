<h1>countdownTimer</h1>
<p>A jQuery plugin for simple countdown timer.</p>
<h2>Requirements</h2>
<p>To use this library, you need to include jQuery library.</p>
<h2>How to Use</h2>
<code><pre>
let options = {
  seconds: 5,
  loop: true,
  callback: function () {
    // do something
  }
};
$('#selector').countdownTimer({options});
</pre></code>

<ul>
  <li>Set the number of seconds, the default is 5 seconds.</li>
  <li>Set whether to loop the timer or not.
    <ul>
      <li>If loop is true, when the timer hits 0, it loops back to the original (5) seconds.</li>
    </ul>
  </li>
  <li>
    Set the callback function, the default is <code>null</code>.
    <ul>
      <li>If the callback function is not null, it is called when the timer hits 0.</li>
    </ul>
  </li>
</ul>