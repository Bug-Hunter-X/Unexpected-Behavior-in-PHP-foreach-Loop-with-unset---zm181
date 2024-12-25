# PHP foreach loop with unset()
This repository demonstrates an uncommon bug in PHP related to using the `unset()` function within a `foreach` loop on an array.  The issue arises from the way the `foreach` loop's internal pointer behaves when elements are removed from the array during iteration. This can lead to unexpected elements being skipped and inconsistencies in the final result.

The `bug.php` file contains code that reproduces this issue. The `bugSolution.php` file shows how to solve the problem using a `for` loop.

This issue highlights the importance of understanding the internal workings of PHP's foreach loop and how array modifications can affect its behavior.