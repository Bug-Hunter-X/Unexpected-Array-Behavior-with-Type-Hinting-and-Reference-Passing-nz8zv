```php
function processData(array $data): array {
  // ... some code to process $data ...
  return $data;
}

$myData = [1, 2, 3, 4, 5];
$processedData = processData($myData);

// Unexpected behavior here!
foreach ($processedData as $value) {
  echo $value . ' ';
}
```