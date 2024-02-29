<?php

require 'vendor/autoload.php';

use MaxMind\Db\Reader;

$mmdbUrl = 'https://samples.ipregistry.co/datasets/ipregistry-company-sample.mmdb';
$localMmdbFilePath = 'ipregistry-company-sample.mmdb';

$mmdbContent = file_get_contents($mmdbUrl);
if ($mmdbContent === false) {
    die("Failed to download the MMDB sample.");
}

if (file_put_contents($localMmdbFilePath, $mmdbContent) === false) {
    die("Failed to save the MMDB sample locally.");
}

echo "MMDB sample downloaded and saved locally as $localMmdbFilePath\n";

$ipAddress = 'x.x.x.x';

try {
    $reader = new Reader($localMmdbFilePath);
    $data = $reader->get($ipAddress);
    echo "Data for IP: $ipAddress\n";
    print_r($data);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    if (isset($reader)) {
        $reader->close();
    }
}

?>
