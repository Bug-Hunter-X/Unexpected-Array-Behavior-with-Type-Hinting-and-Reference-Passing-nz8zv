```php
function processData(array $data): array {
  // Create a copy to avoid modifying the original array
  $newData = $data;
  // ... some code to process $newData ...
  return $newData;
}

$myData = [1, 2, 3, 4, 5];
$processedData = processData($myData);

foreach ($processedData as $value) {
  echo $value . ' ';
}

echo "\nOriginal array: ";
foreach ($myData as $value) {
  echo $value . ' ';
}
```