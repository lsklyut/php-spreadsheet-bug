## PHPSpreadsheet toArray() caching values

Expected Output:

array(1) {
  [0] =>
  array(1) {
    [0] =>
    string(13) "Hello World !"
  }
}
C:\Users\lsklyut\dev\php-spreadsheet\bug.php:22:
array(1) {
  [0] =>
  array(1) {
    [0] =>
    string(13) "Turkey"
  }
}

Actual Output:

array(1) {
  [0] =>
  array(1) {
    [0] =>
    string(13) "Hello World !"
  }
}
C:\Users\lsklyut\dev\php-spreadsheet\bug.php:22:
array(1) {
  [0] =>
  array(1) {
    [0] =>
    string(13) "Hello World !"
  }
}