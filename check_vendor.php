<?php
$vendorDir = __DIR__ . '/vendor';
echo "Vendor path: $vendorDir\n";
echo "Exists: " . (is_dir($vendorDir) ? 'Yes' : 'No') . "\n";
echo "Writable: " . (is_writable($vendorDir) ? 'Yes' : 'No') . "\n";
echo "Contents:\n";
print_r(scandir($vendorDir));
