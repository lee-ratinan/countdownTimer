# countdownTimer

![GitHub last commit](https://img.shields.io/github/last-commit/lee-ratinan/countdownTimer)
![GitHub](https://img.shields.io/github/license/lee-ratinan/countdownTimer)
![GitHub release (latest by date including pre-releases)](https://img.shields.io/github/v/release/lee-ratinan/countdownTimer?include_prereleases)
![GitHub issues](https://img.shields.io/github/issues-raw/lee-ratinan/countdownTimer)
![GitHub top language](https://img.shields.io/github/languages/top/lee-ratinan/countdownTimer)

A jQuery plugin for simple countdown timer.

## Requirements

To use this library, you need to include jQuery library.

## How to use

```JavaScript
let options = {
  seconds: 5,
  loop: true,
  callback: function () {
    // do something
  }
};
$('#selector').countdownTimer({options});
```

  * Set the number of seconds, the default is 5 seconds.
  * Set whether to loop the timer or not.
    * If loop is true, when the timer hits 0, it loops back to the original (5) seconds.
  * Set the callback function, the default is `null`.
    * If the callback function is not null, it is called when the timer hits 0.
